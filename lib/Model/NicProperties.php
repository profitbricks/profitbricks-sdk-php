<?php
/**
 * NicProperties
 *
 * PHP version 5
 *
 * @category Class
 * @package  ProfitBricks\Client

 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 
 */
/**

 *
 *  Licensed under the Apache License, Version 2.0 (the "License");
 *  you may not use this file except in compliance with the License.
 *  You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 *  Unless required by applicable law or agreed to in writing, software
 *  distributed under the License is distributed on an "AS IS" BASIS,
 *  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  See the License for the specific language governing permissions and
 *  limitations under the License.
 */


namespace ProfitBricks\Client\Model;

use \ArrayAccess;
/**
 * NicProperties Class Doc Comment
 *
 * @category    Class
 * @description
 * @package     ProfitBricks\Client
 * @author      http://github.com/ProfitBricks-api/ProfitBricks-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/ProfitBricks-api/ProfitBricks-codegen
 */
class NicProperties implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    static $ProfitBricksTypes = array(
        'name' => 'string',
        'mac' => 'string',
        'ips' => 'string[]',
        'dhcp' => 'bool',
        'lan' => 'int',
        'firewall_active' => 'bool'
    );

    static function ProfitBricksTypes() {
        return self::$ProfitBricksTypes;
    }

    /**
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[]
      */
    static $attributeMap = array(
        'name' => 'name',
        'mac' => 'mac',
        'ips' => 'ips',
        'dhcp' => 'dhcp',
        'lan' => 'lan',
        'firewall_active' => 'firewallActive',
        'nat' => 'nat',
    );

    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'name' => 'setName',
        'mac' => 'setMac',
        'ips' => 'setIps',
        'dhcp' => 'setDhcp',
        'lan' => 'setLan',
        'firewall_active' => 'setFirewallActive',
        'nat' => 'setNat',
    );

    static function setters() {
        return self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'name' => 'getName',
        'mac' => 'getMac',
        'ips' => 'getIps',
        'dhcp' => 'getDhcp',
        'lan' => 'getLan',
        'firewall_active' => 'getFirewallActive',
        'nat' => 'getNat',
    );

    static function getters() {
        return self::$getters;
    }


    /**
      * $name A name of that resource
      * @var string
      */
    protected $name;

    /**
      * $mac The MAC address of the NIC
      * @var string
      */
    protected $mac;

    /**
      * $ips Collection of IP addresses assigned to a nic. Explicitly assigned public IPs need to come from reserved IP blocks, Passing value null or empty array will assign an IP address automatically.
      * @var string[]
      */
    protected $ips;

    /**
      * $dhcp Indicates if the nic will reserve an IP using DHCP
      * @var bool
      */
    protected $dhcp = false;

    /**
      * $lan The LAN ID the NIC will sit on. If the LAN ID does not exist it will be implicitly created
      * @var int
      */
    protected $lan;

    /**
      * $firewall_active Once you add a firewall rule this will reflect a true value. Can also be used to temporarily disable a firewall without losing defined rules.
      * @var bool
      */
    protected $firewall_active = false;


    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {

        if ($data != null) {
            $this->name = $data["name"];
            $this->mac = $data["mac"];
            $this->ips = $data["ips"];
            $this->dhcp = $data["dhcp"];
            $this->lan = $data["lan"];
            $this->firewall_active = $data["firewall_active"];
        }
    }

    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets name
     * @param string $name A name of that resource
     * @return $this
     */
    public function setName($name)
    {

        $this->name = $name;
        return $this;
    }

    /**
     * Gets mac
     * @return string
     */
    public function getMac()
    {
        return $this->mac;
    }

    /**
     * Sets mac
     * @param string $mac The MAC address of the NIC
     * @return $this
     */
    public function setMac($mac)
    {

        $this->mac = $mac;
        return $this;
    }

    /**
     * Gets ips
     * @return string[]
     */
    public function getIps()
    {
        return $this->ips;
    }

    /**
     * Sets ips
     * @param string[] $ips Collection of IP addresses assigned to a nic. Explicitly assigned public IPs need to come from reserved IP blocks, Passing value null or empty array will assign an IP address automatically.
     * @return $this
     */
    public function setIps($ips)
    {

        $this->ips = $ips;
        return $this;
    }

    /**
     * Gets dhcp
     * @return bool
     */
    public function getDhcp()
    {
        return $this->dhcp;
    }

    /**
     * Sets dhcp
     * @param bool $dhcp Indicates if the nic will reserve an IP using DHCP
     * @return $this
     */
    public function setDhcp($dhcp)
    {

        $this->dhcp = $dhcp;
        return $this;
    }

    /**
     * Gets lan
     * @return int
     */
    public function getLan()
    {
        return $this->lan;
    }

    /**
     * Sets lan
     * @param int $lan The LAN ID the NIC will sit on. If the LAN ID does not exist it will be implicitly created
     * @return $this
     */
    public function setLan($lan)
    {

        $this->lan = $lan;
        return $this;
    }

    /**
     * Gets firewall_active
     * @return bool
     */
    public function getFirewallActive()
    {
        return $this->firewall_active;
    }

    /**
     * Sets firewall_active
     * @param bool $firewall_active Once you add a firewall rule this will reflect a true value. Can also be used to temporarily disable a firewall without losing defined rules.
     * @return $this
     */
    public function setFirewallActive($firewall_active)
    {

        $this->firewall_active = $firewall_active;
        return $this;
    }

    /**
     * Gets nat
     * @return bool
     */
    public function getNat()
    {
        return $this->nat;
    }

    /**
     * Sets nat
     * @param bool $nat Setting the nat parameter to true allows a NIC that is part of an internal or private LAN to access the public internet
     * @return $this
     */
    public function setNat($nat)
    {

        $this->nat = $nat;
        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->$offset);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return $this->$offset;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->$offset = $value;
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->$offset);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) {
            return json_encode(\ProfitBricks\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        } else {
            return json_encode(\ProfitBricks\Client\ObjectSerializer::sanitizeForSerialization($this));
        }
    }
}
