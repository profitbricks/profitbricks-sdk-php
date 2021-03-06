<?php

require_once('autoload.php');
require_once('tests/BaseTest.php');


class LoadBalancerApiTest extends BaseTest
{
  private static $loadbalancer_api;
  private static $loadbalancer_nic_api;
  private static $nic_api;
  private static $server_api;

  private static $testLoadBalancer;
  private static $testNic;
  private static $testServer;
  private static $badId  = '00000000-0000-0000-0000-000000000000';
  
  public static function setUpBeforeClass() {
    parent::setUpBeforeClass();
    self::spawnDatacenter();
    self::$loadbalancer_api = new ProfitBricks\Client\Api\LoadBalancerApi(self::$api_client);
    self::$loadbalancer_nic_api = new ProfitBricks\Client\Api\LoadBalancerNicApi(self::$api_client);
    self::$nic_api = new ProfitBricks\Client\Api\NetworkInterfacesApi(self::$api_client);
    self::$server_api = new ProfitBricks\Client\Api\ServerApi(self::$api_client);
  }

  public function testCreate() {
    $balancer = new \ProfitBricks\Client\Model\Loadbalancer();
    $props = new \ProfitBricks\Client\Model\LoadbalancerProperties();
    $props->setName("PHP SDK Test")->setDhcp(false);
    $balancer->setProperties($props);

    self::$testLoadBalancer = self::$loadbalancer_api->create(self::$testDatacenter->getId(), $balancer);
  
    $this->waitTillProvisioned(self::$testLoadBalancer->getRequestId());

    $this->assertEquals(self::$testLoadBalancer->getProperties()->getName(), "PHP SDK Test");
  }

  public function testCreateFailure() {
    $balancer = new \ProfitBricks\Client\Model\Loadbalancer();
    $props = new \ProfitBricks\Client\Model\LoadbalancerProperties();
    $props->setDhcp(false);
    $balancer->setProperties($props);

    try {
      self::$testLoadBalancer = self::$loadbalancer_api->create(self::$testDatacenter->getId(), $balancer);
    } catch (ProfitBricks\Client\ApiException $e) {
      $this->assertEquals($e->getCode(), 422);
    }
  }

  public function testGet() {
    //wait for a little bit to make sure it's ready
    sleep(5);
    $balancer = self::$loadbalancer_api->findById(self::$testDatacenter->getId(), self::$testLoadBalancer->getId());
    $this->assertEquals($balancer->getId(), self::$testLoadBalancer->getId());
  }

  public function testGetFailure() {
   try {
      $balancer = self::$loadbalancer_api->findById(self::$testDatacenter->getId(), self::$testLoadBalancer->getId());
    } catch (ProfitBricks\Client\ApiException $e) {
      $this->assertEquals($e->getCode(), 404);
    }
  }

  public function testList() {
    $balancers = self::$loadbalancer_api->findAll(self::$testDatacenter->getId());
    $this->assertNotEmpty($balancers);
    $this->assertNotEmpty($balancers->getItems());
    $balancer = $this->find($balancers->getItems(), 
      function($i) { return $i->getId() == self::$testLoadBalancer->getId(); }
      );
    $this->assertTrue(!empty($balancer));
  }

  public function testUpdate() {
    $balancer = new \ProfitBricks\Client\Model\Loadbalancer();
    $props = new \ProfitBricks\Client\Model\LoadbalancerProperties();
    $props->setName("PHP SDK Test - RENAME");
    $balancer->setProperties($props);

    $updateResponse=self::$loadbalancer_api->partialUpdate(self::$testDatacenter->getId(), self::$testLoadBalancer->getId(), $props);
    $this->waitTillProvisioned($updateResponse->getRequestId());

    self::assertDatacenterAvailable(self::$testDatacenter->getId());

    $updatedServer = self::$loadbalancer_api->findById(self::$testDatacenter->getId(), self::$testLoadBalancer->getId());
    $this->assertEquals($updatedServer->getProperties()->getName(), "PHP SDK Test - RENAME");
  }

  public function testCreateServer() {
    $server = new \ProfitBricks\Client\Model\Server();
    $props = new \ProfitBricks\Client\Model\ServerProperties();
    $props->setName("PHP SDK Test")->setCores(1)->setRam(1024);
    $server->setProperties($props);

    self::$testServer = self::$server_api->create(self::$testDatacenter->getId(), $server);
  
    $this->waitTillProvisioned(self::$testServer->getRequestId());

    $this->assertEquals(self::$testServer->getProperties()->getName(), "PHP SDK Test");
  }

  public function testAssociateNic() {
    $nic = new \ProfitBricks\Client\Model\Nic();
    $props = new \ProfitBricks\Client\Model\NicProperties();
    $props->setName("PHP SDK Test")->setLan(1);
    $nic->setProperties($props);

    self::$testNic = self::$nic_api->create(self::$testDatacenter->getId(), self::$testServer->getId(), $nic);
  
    $this->waitTillProvisioned(self::$testNic->getRequestId());

    $this->assertEquals(self::$testNic->getProperties()->getName(), "PHP SDK Test");

    $nic = new ProfitBricks\Client\Model\Nic();
    $nic->setId(self::$testNic->getId());
    self::$loadbalancer_nic_api->attachNic(self::$testDatacenter->getId(), self::$testLoadBalancer->getId(), $nic);

    self::assertPredicate(function() {
      return self::$loadbalancer_nic_api->getMember(self::$testDatacenter->getId(), self::$testLoadBalancer->getId(), self::$testNic->getId());
    });
  }

  public function testGetBalancedNic() {
    $testNic = self::$loadbalancer_nic_api->getMember(self::$testDatacenter->getId(), self::$testLoadBalancer->getId(), self::$testNic->getId());
    $this->assertNotEmpty($testNic);
  }

  public function testRemoveBalancedNicAssociation() {
    self::$loadbalancer_nic_api->delete(self::$testDatacenter->getId(), self::$testLoadBalancer->getId(), self::$testNic->getId());    
    self::assertPredicate(function() {
      self::$loadbalancer_nic_api->getMember(self::$testDatacenter->getId(), self::$testLoadBalancer->getId(), self::$testNic->getId());
    }, null, true);
  }

  public function testListBalancedNics() {
    $nics = self::$loadbalancer_nic_api->listNics(self::$testDatacenter->getId(), self::$testLoadBalancer->getId());
    $this->assertNotEmpty($nics);
    $this->assertEmpty($nics->getItems());
  }

  public function testRemoveNic() {
    self::$nic_api->delete(self::$testDatacenter->getId(), self::$testServer->getId(), self::$testNic->getId());
    $this->assertTrue(
      self::assertPredicate(
        function () { self::$nic_api->findById(self::$testDatacenter->getId(), self::$testServer->getId(), self::$testNic->getId()); }, null, true
      )
    );
    self::$testNic = null;
  }

  public function testRemoveServer() {
    self::$server_api->delete(self::$testDatacenter->getId(), self::$testServer->getId());
    $this->assertTrue(
      self::assertPredicate(
        function () { self::$server_api->findById(self::$testDatacenter->getId(), self::$testServer->getId()); }, null, true
      )
    );
    self::$testServer = null;
  }

  public function testRemove() {
    self::$loadbalancer_api->delete(self::$testDatacenter->getId(), self::$testLoadBalancer->getId());
    self::$testLoadBalancer = null;
  }

  public static function tearDownAfterClass() {
    self::removeDatacenter();
  }
}

?>
