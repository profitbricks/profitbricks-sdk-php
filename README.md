# PHP SDK

Version: profitbricks-sdk-php **4.0.0**

## Table of Contents

* [Description](#description)
* [Getting Started](#getting-started)
  * [Installation](#installation)
  * [Authenticating](#authenticating)
* [Reference](#reference)
  * [Data Centers](#data-centers)
    * [List Data Centers](#list-data-centers)
    * [Retrieve a Data Center](#retrieve-a-data-center)
    * [Create a Data Center](#create-a-data-center)
    * [Update a Data Center](#update-a-data-center)
    * [Delete a Data Center](#delete-a-data-center)
  * [Locations](#locations)
    * [List Locations](#list-locations)
    * [Get a Location](#get-a-location)
  * [Servers](#servers)
    * [List Servers](#list-servers)
    * [Retrieve a Server](#retrieve-a-server)
    * [Create a Server](#create-a-server)
    * [Update a Server](#update-a-server)
    * [Delete a Server](#delete-a-server)
    * [List Attached Volumes](#list-attached-volumes)
    * [Attach a Volume](#attach-a-volume)
    * [Retrieve an Attached Volume](#retrieve-an-attached-volume)
    * [Detach a Volume](#detach-a-volume)
    * [List Attached CD-ROMs](#list-attached-cd-roms)
    * [Attach a CD-ROM](#attach-a-cd-rom)
    * [Retrieve an Attached CD-ROM](#retrieve-an-attached-cd-rom)
    * [Detach a CD-ROM](#detach-a-cd-rom)
    * [Reboot a Server](#reboot-a-server)
    * [Start a Server](#start-a-server)
    * [Stop a Server](#stop-a-server)
  * [Images](#images)
    * [List Images](#list-images)
    * [Get an Image](#get-an-image)
  * [Volumes](#volumes)
    * [List Volumes](#list-volumes)
    * [Get a Volume](#get-a-volume)
    * [Create a Volume](#create-a-volume)
    * [Update a Volume](#update-a-volume)
    * [Delete a Volume](#delete-a-volume)
    * [Create a Volume Snapshot](#create-a-volume-snapshot)
    * [Restore a Volume Snapshot](#restore-a-volume-snapshot)
  * [Snapshots](#snapshots)
    * [List Snapshots](#list-snapshots)
    * [Get a Snapshot](#get-a-snapshot)
    * [Update a Snapshot](#update-a-snapshot)
    * [Delete a Snapshot](#delete-a-snapshot)
  * [IP Blocks](#ip-blocks)
    * [List IP Blocks](#list-ip-blocks)
    * [Get an IP Block](#get-an-ip-block)
    * [Create an IP Block](#create-an-ip-block)
    * [Delete an IP Block](#delete-an-ip-block)
  * [LANs](#lans)
    * [List LANs](#list-lans)
    * [Create a LAN](#create-a-lan)
    * [Get a LAN](#get-a-lan)
    * [Update a LAN](#update-a-lan)
    * [Delete a LAN](#delete-a-lan)
  * [Network Interfaces (NICs)](#network-interfaces)
    * [List NICs](#list-nics)
    * [Get a NIC](#get-a-nic)
    * [Create a NIC](#create-a-nic)
    * [Update a NIC](#update-a-nic)
    * [Delete a NIC](#delete-a-nic)
  * [Firewall Rules](#firewall-rules)
    * [List Firewall Rules](#list-firewall-rules)
    * [Get a Firewall Rule](#get-a-firewall-rule)
    * [Create a Firewall Rule](#create-a-firewall-rule)
    * [Update a Firewall Rule](#update-a-firewall-rule)
    * [Delete a Firewall Rule](#delete-a-firewall-rule)
  * [Load Balancers](#load-balancers)
    * [List Load Balancers](#list-load-balancers)
    * [Get a Load Balancer](#get-a-load-balancer)
    * [Create a Load Balancer](#create-a-load-balancer)
    * [Update a Load Balancer](#update-a-load-balancer)
    * [List Load Balanced NICs](#list-load-balanced-nics)
    * [Get a Load Balanced NIC](#get-a-load-balanced-nic)
    * [Associate NIC to a Load Balancer](#associate-nic-to-a-load-balancer)
    * [Remove a NIC Association](#remove-a-nic-association)
  * [Contract Resources](#contract-resources)
    * [List Contract Resources](#list-contract-resources)
  * [User Management](#user-management)
    * [List Groups](#list-groups)
    * [Retrieve Group](#retrieve-group)
    * [Create Group](#create-group)
    * [Update Group](#update-group)
    * [Delete Group](#delete-group)
    * [List Shares](#list-shares)
    * [Retrieve Share](#retrieve-share)
    * [Create Share](#create-share)
    * [Update Share](#update-share)
    * [Delete Share](#delete-share)
    * [List Users](#list-users)
    * [Retrieve User](#retrieve-user)
    * [Create User](#create-user)
    * [Update User](#update-user)
    * [Delete User](#delete-user)
    * [List Users In Group](#list-users-in-group)
    * [Add User To Group](#add-user-to-group)
    * [Remove User From Group](#remove-user-from-group)
    * [List Resources](#list-resources)
    * [List Resources Of Type](#list-resources-of-type)
    * [Find Resource By Id](#find-resource-by-id)
  * [Requests](#requests)
    * [List Requests](#list-requests)
    * [Get a Request](#get-a-request)
    * [Get a Request Status](#get-a-request-status)
* [Examples](#examples)
* [Support](#support)
* [Testing](#testing)
* [Contributing](#contributing)

## Description

The ProfitBricks Client Library for [PHP](https://secure.php.net/) provides you with access to the ProfitBricks REST API. It is designed for developers who are building applications in PHP.

This guide will walk you through getting setup with the library and performing various actions against the API.

## Getting Started

Before you begin you will need to have [signed-up](https://www.profitbricks.com/signup) for a ProfitBricks account. The credentials you setup during sign-up will be used to authenticate against the API.

Install the PHP language from: [PHP Installation](http://php.net/manual/en/install.php)

## Installation

* You can install the latest stable version using Composer.  Simply add the snippet below to your `composer.json` file:

```
{
    "require": {
        "profitbricks/profitbricks-sdk-php": ">=1.0"
    }
}
```

* Run the command `composer install` to download required dependencies.

* Include `require_once(__DIR__.'/vendor/autoload.php');` in your php file to use the library.



### Authenticating

Connecting to ProfitBricks is handled by first setting up your authentication credentials.

Add your credentials for connecting to ProfitBricks:

```php
$config = (new ProfitBricks\Client\Configuration())
      ->setHost('https://api.profitbricks.com/cloudapi/v4')
      ->setUsername(getenv('PROFITBRICKS_USERNAME'))
      ->setPassword(getenv('PROFITBRICKS_PASSWORD'));
$api_client = new ProfitBricks\Client\ApiClient($config);
```

Set depth:

```php
$datacenter_api->findById($testDatacenter->getId(), false, 5);
```

Depth controls the amount of data returned from the REST server ( range 1-5 ). The larger the number the more information is returned from the server. This is especially useful if you are looking for the information in the nested objects.

**Caution**: You will want to ensure you follow security best practices when using credentials within your code or from system environment variables.

## Reference

This section provides details on all the available operations and the parameters they accept. Brief code snippets demonstrating usage are also included.

### Data Centers

Virtual data centers (VDCs) are the foundation of the ProfitBricks platform. VDCs act as logical containers for all other objects you will be creating, e.g., servers. You can provision as many VDCs as you want. VDCs have their own private network and are logically segmented from each other to create isolation.

Create an instace of the api class:

         $datacenter_api = new ProfitBricks\Client\Api\DataCenterApi($api_client);

#### List Data Centers

This operation will list all currently provisioned VDCs that your account credentials provide access to.

The optional `depth` parameter defines the level, one being the least and five being the most, of information returned with the response.

```
$datacenters = $datacenter_api->findAll();
```

---

#### Retrieve a Data Center

Use this to retrieve details about a specific VDC.

The following table describes the request arguments:

| Name| Required | Type | Description |
|---|:-:|---|---|
| $datacenter_id | **yes** | string | The ID of the VDC. |
| $depth | no | int | The level of details returned. |

```
$datacenter = $datacenter_api->findById($datacenter_id);
```

---

#### Create a Data Center

Use this operation to create a new VDC. You can create a "simple" VDC by supplying just the required *name* and *location* parameters. This operation also has the capability of provisioning a "complex" VDC by supplying additional parameters for servers, volumes, LANs, and/or load balancers.

The following table describes the request arguments:

| Name| Required | Type | Description |
|---|:-:|---|---|
| $name | **yes** | string | The name of the data center. |
| $location | **yes** | string | The physical ProfitBricks location where the VDC will be created. |
| $description | no | string | A description for the data center, e.g. staging, production. |
| $servers | no | collection | Details about creating one or more servers. See [create a server](#create-a-server). |
| $volumes | no | collection | Details about creating one or more volumes. See [create a volume](#create-a-volume). |
| $lans | no | collection | Details about creating one or more LANs. See [create a lan](#create-a-lan). |
| $$loadbalancers | no | collection | Details about creating one or more load balancers. See [create a load balancer](#create-a-load- balancer). |

The following table outlines the locations currently supported:

| Value| Country | City |
|---|---|---|
| us/las | United States | Las Vegas |
| de/fra | Germany | Frankfurt |
| de/fkb | Germany | Karlsruhe |
| us/ewr | United States | Newark |

**NOTES**:
- The value for `$name` cannot contain the following characters: (@, /, , |, ‘’, ‘).
- You cannot change the virtual data center `$location` once it has been provisioned.

```
$datacenter_composite = new \ProfitBricks\Client\Model\Datacenter();
```
```    
$props = new \ProfitBricks\Client\Model\DatacenterProperties();
$props->setName("test-data-center");
$props->setDescription("example description");
$props->setLocation('us/las');
```
```
$servers=new \ProfitBricks\Client\Model\Servers();
$server = new \ProfitBricks\Client\Model\Server();
$server_props = new \ProfitBricks\Client\Model\ServerProperties();
$server_props->setName("composite-node")->setCores(1)->setRam(1024);
$server->setProperties($server_props);
$servers->setItems(array($server));
```
```
$entities= new \ProfitBricks\Client\Model\DatacenterEntities();
$entities->setServers($servers);
```
```
$datacenter_composite->setProperties($props);
$datacenter_composite->setEntities($entities);
$testDatacenterComposite = $datacenter_api->create($datacenter_composite);
```

---

#### Update a Data Center

After retrieving a data center, either by getting it by id, or as a create response object, you can change its properties by calling the `update` method. Some parameters may not be changed using either of the update methods.

The following table describes the available request arguments:

| Name| Required | Type | Description |
|---|:-:|---|---|
| $datacenter_id | **yes** | string | The ID of the VDC. |
| $name | no | string | The new name of the VDC. |
| $description | no | string | The new description of the VDC. |

```
$datacenter = new \ProfitBricks\Client\Model\Datacenter();
$props = new \ProfitBricks\Client\Model\DatacenterProperties();
$props->setName("new-name");
$datacenter->setProperties($props);

$updatedDatacenter = $datacenter_api->update($datacenter_id, $datacenter);
```

---

#### Delete a Data Center

This will remove all objects within the virtual data center AND remove the virtual data center object itself.

**NOTE**: This is a highly destructive operation which should be used with extreme caution!

The following table describes the available request arguments:

| Name| Required | Type | Description |
|---|:-:|---|---|
| $datacenter_id | **yes** | string | The ID of the VDC that you want to delete. |

```
$datacenter_api->delete($datacenter_id);
```

---

### Locations

Locations are the physical ProfitBricks data centers where you can provision your VDCs.

Create an instace of the api class:

        $location_api = new ProfitBricks\Client\Api\LocationApi($api_client);

#### List Locations

This operation will return the list of currently available locations.

The optional `depth` parameter defines the level, one being the least and five being the most, of information returned with the response.

```
$locations = $location_api->findAll();
```

---

#### Get a Location

Retrieves the attributes of a specific location.

The following table describes the request arguments:

| Name| Required | Type | Description |
|---|:-:|---|---|
| $location_id | **yes** | string | The ID consisting of country/city. |

```
$location_parts = explode("/", $location_id);
$location = $location_api->findById($location_parts[0], $location_parts[1]);
```

---

### Servers

Create an instace of these api classes:

```
$server_api = new ProfitBricks\Client\Api\ServerApi($api_client);
$volume_api = new ProfitBricks\Client\Api\VolumeApi($api_client);
$attached_volume_api = new ProfitBricks\Client\Api\AttachedVolumesApi($api_client);
$cdrom_api = new ProfitBricks\Client\Api\AttachedCDROMsApi($api_client);

```

#### List Servers

You can retrieve a list of all the servers provisioned inside a specific VDC.


The following table describes the request arguments:

| Name| Required | Type | Description |
|---|:-:|---|---|
| $datacenter_id | **yes** | string | The ID of the VDC. |
| $depth | no | int | The level of details returned. |

```
$servers = $server_api->findAll($datacenter_id);
```

---

#### Retrieve a Server

Returns information about a specific server such as its configuration, provisioning status, etc.

The following table describes the request arguments:

| Name| Required | Type | Description |
|---|:-:|---|---|
| $datacenter_id | **yes** | string | The ID of the VDC. |
| $server_id | **yes** | string | The ID of the server. |
| $depth | no | int | The level of details returned. |

```
$server = $server_api->findById($datacenter_id,$server_id);
```

---

#### Create a Server

Creates a server within an existing VDC. You can configure additional properties such as specifying a boot volume and connecting the server to a LAN.

The following table describes the request arguments:

| Name| Required | Type | Description |
|---|:-:|---|---|
| $datacenter_id | **yes** | string | The ID of the VDC. |
| $name | **yes** | string | The name of the server. |
| $cores | **yes** | int | The total number of cores for the server. |
| $ram | **yes** | int | The amount of memory for the server in MB, e.g. 2048. Size must be specified in multiples of 256 MB with a minimum of 256 MB; however, if you set `ram_hot_plug` to *True* then you must use a minimum of 1024 MB. |
| $availability_zone | no | string | The availability zone in which the server should exist. |
| $cpu_family | no | string | Sets the CPU type. "AMD_OPTERON" or "INTEL_XEON". Defaults to "AMD_OPTERON". |
| $boot_volume | no | object | Reference to a volume used for booting. If not *null* then `$boot_cdrom` has to be *null*. |
| $boot_cdrom | no | object | Reference to a CD-ROM used for booting. If not *null* then `$boot_volume` has to be *null*. |
| $volumes | no | object | A collection of volume objects that you want to create and attach to the server.|
| $nics | no | object | A collection of NICs you wish to create at the time the server is provisioned. |

The following table outlines the server availability zones currently supported:

| Availability Zone | Comment |
|---|---|
| AUTO | Automatically Selected Zone |
| ZONE_1 | Fire Zone 1 |
| ZONE_2 | Fire Zone 2 |

```
$server_composite = new \ProfitBricks\Client\Model\Server();
$props = new \ProfitBricks\Client\Model\ServerProperties();
$props->setName("composite-node")->setCores(1)->setRam(1024);
$server_composite->setProperties($props);

$entities= new \ProfitBricks\Client\Model\ServerEntities();

$volume = new ProfitBricks\Client\Model\Volume();
$v_props = new \ProfitBricks\Client\Model\VolumeProperties();
$v_props->setName("test-volume")
    ->setSize(3)
    ->setType('HDD')
    ->setImage($image_id)
    ->setImagePassword("testpassword123")
    ->setSshKeys(array("hQGOEJeFL91EG3+l9TtRbWNjzhDVHeLuL3NWee6bekA="));
$volume->setProperties($v_props);
$attachedVolumes= new \ProfitBricks\Client\Model\Volumes();
$attachedVolumes->setItems(array($volume));
$entities->setVolumes($attachedVolumes);
$server_composite->setEntities($entities);

$testServer_Composite = $server_api->create($datacenter_id, $server_composite);
```

---

#### Update a Server

Perform updates to the attributes of a server.

The following table describes the request arguments:

| Name| Required | Type | Description |
|---|:-:|---|---|
| $datacenter_id | **yes** | string | The ID of the VDC. |
| $server_id | **yes** | string | The ID of the server. |
| $name | no | string | The name of the server. |
| $cores | no | int | The number of cores for the server. |
| $ram | no | int | The amount of memory in the server. |
| $availability_zone | no | string | The new availability zone for the server. |
| $cpu_family | no | string | Sets the CPU type. "AMD_OPTERON" or "INTEL_XEON". Defaults to "AMD_OPTERON". |
| $boot_volume | no | object | Reference to a volume used for booting. If not *null* then `$boot_cdrom` has to be *null* |
| $boot_cdrom | no | object | Reference to a CD-ROM used for booting. If not *null* then `$boot_volume` has to be *null*. |

After retrieving a server, either by getting it by id, or as a create response object, you can change its properties and call the `partialUpdate` method:

```
$server = new \ProfitBricks\Client\Model\Server();
$props = new \ProfitBricks\Client\Model\ServerProperties();
$props->setName("new-name")->setCores(2)->setRam(1024 * 2);
$server->setProperties($props);

$server_api->partialUpdate($datacenter_id, $server_id, $props);
```

**NOTE**: You can also use `update`, for that operation you will update all the properties.

---

#### Delete a Server

This will remove a server from a data center. **NOTE**: This will not automatically remove the storage volume(s) attached to a server. A separate operation is required to delete a storage volume.

The following table describes the request arguments:

| Name| Required | Type | Description |
|---|:-:|---|---|
| $datacenter_id | **yes** | string | The ID of the VDC. |
| $server_id | **yes** | string | The ID of the server. |

After retrieving a server, either by getting it by id, or as a create response object, you can call the `delete` method directly:

```
$server_api->delete($datacenter_id, $server_id);
```

---

#### List Attached Volumes

Retrieves a list of volumes attached to the server.

The following table describes the request arguments:

| Name| Required | Type | Description |
|---|:-:|---|---|
| $datacenter_id | **yes** | string | The ID of the VDC. |
| $server_id | **yes** | string | The ID of the server. |
| $depth | no | int | The level of details returned. |

After retrieving a server, either by getting it by id, or as a create response object, you can call the `findAll` method directly:

```
$volumes = $volume_api->findAll($datacenter_id, $server_id);
```

---

#### Attach a Volume

This will attach a pre-existing storage volume to the server.

The following table describes the request arguments:

| Name| Required | Type | Description |
|---|:-:|---|---|
| $datacenter_id | **yes** | string | The ID of the VDC. |
| $server_id | **yes** | string | The ID of the server. |
| $volume_id | **yes** | string | The ID of a storage volume. |

After retrieving a server, either by getting it by id, or as a create response object, you can call the `attachVolume` method directly.

```
$volume = new ProfitBricks\Client\Model\Volume();
$props = new \ProfitBricks\Client\Model\VolumeProperties();
$props->setName("test-volume")->setSize(3)->setType('HDD')->setLicenceType('LINUX');
$volume->setProperties($props);

$attached_volume_api->attachVolume($testDatacenter->getId(), $testServer->getId(), $volume);
```

---

#### Retrieve an Attached Volume

This will retrieve the properties of an attached volume.

The following table describes the request arguments:

| Name| Required | Type | Description |
|---|:-:|---|---|
| $datacenter_id | **yes** | string | The ID of the VDC. |
| $server_id | **yes** | string | The ID of the server. |
| $volume_id | **yes** | string | The ID of the attached volume. |
| $depth | no | int | The level of details returned. |

After retrieving a server, either by getting it by id, or as a create response object, you can call the `findById` method directly.

```
$testVolume = $attached_volume_api->findById($datacenter_id, $server_id, $volume_id);
```

---

#### Detach a Volume

This will detach the volume from the server. Depending on the volume `hot_unplug` settings, this may result in the server being rebooted.

This will NOT delete the volume from your virtual data center. You will need to make a separate request to delete a volume.

The following table describes the request arguments:

| Name| Required | Type | Description |
|---|:-:|---|---|
| $datacenter_id | **yes** | string | The ID of the VDC. |
| $server_id | **yes** | string | The ID of the server. |
| $volume_id | **yes** | string | The ID of the attached volume. |

After retrieving a server, either by getting it by id, or as a create response object, you can call the `delete` method directly.

```
 $attached_volume_api->delete($datacenter_id, $server_id, $volume_id);
```

---

#### List Attached CD-ROMs

Retrieves a list of CD-ROMs attached to a server.

The following table describes the request arguments:

| Name| Required | Type | Description |
|---|:-:|---|---|
| $datacenter_id | **yes** | string | The ID of the VDC. |
| $server_id | **yes** | string | The ID of the server. |
| $depth | no | int | The level of details returned. |

After retrieving a server, either by getting it by id, or as a create response object, you can call the `findAll` method directly.

```
$cdroms = $cdrom_api->findAll($datacenter_id, $server_id);
```

---

#### Attach a CD-ROM

You can attach a CD-ROM to an existing server.

The following table describes the request arguments:

| Name| Required | Type | Description |
|---|:-:|---|---|
| $datacenter_id | **yes** | string | The ID of the VDC. |
| $server_id | **yes** | string | The ID of the server. |
| $cdrom_id | **yes** | string | The ID of a CD-ROM. |

After retrieving a server, either by getting it by id, or as a create response object, you can call the `create` method directly.

```
$testCdrom = $cdrom_api->create($datacenter_id, $server_id, $cdrom_id);
```

---

#### Retrieve an Attached CD-ROM

You can retrieve a specific CD-ROM attached to the server.

The following table describes the request arguments:

| Name| Required | Type | Description |
|---|:-:|---|---|
| $datacenter_id | **yes** | string | The ID of the VDC. |
| $server_id | **yes** | string | The ID of the server. |
| $cdrom_id | **yes** | string | The ID of the attached CD-ROM. |
| $depth | no | int | The level of details returned. |

After retrieving a server, either by getting it by id, or as a create response object, you can call the `findById` method directly.

```
$cdrom = $cdrom_api->findById($datacenter_id, $server_id, $cdrom_id);
```

---

#### Detach a CD-ROM

This will detach a CD-ROM from the server.

The following table describes the request arguments:

| Name| Required | Type | Description |
|---|:-:|---|---|
| $datacenter_id | **yes** | string | The ID of the VDC. |
| $server_id | **yes** | string | The ID of the server. |
| $cdrom_id | **yes** | string | The ID of the attached CD-ROM. |

After retrieving a server, either by getting it by id, or as a create response object, you can call the `delete` method directly.

```
$cdrom_api->delete($datacenter_id, $server_id, $cdrom_id);
```

---

#### Reboot a Server

This will force a hard reboot of the server. Do not use this method if you want to gracefully reboot the machine. This is the equivalent of powering off the machine and turning it back on.

The following table describes the request arguments:

| Name| Required | Type | Description |
|---|:-:|---|---|
| $datacenter_id | **yes** | string | The ID of the VDC. |
| $server_id | **yes** | string | The ID of the server. |

After retrieving a server, either by getting it by id, or as a create response object, you can call the `reboot` method directly.

```
$server_api->reboot($datacenter_id, $server_id);
```

---

#### Start a Server

This will start a server. If the server's public IP was deallocated then a new IP will be assigned.

The following table describes the request arguments:

| Name| Required | Type | Description |
|---|:-:|---|---|
| $datacenter_id | **yes** | string | The ID of the VDC. |
| $server_id | **yes** | string | The ID of the server. |

After retrieving a server, either by getting it by id, or as a create response object, you can call the `start` method directly.

```
$server_api->start($datacenter_id), $server_id);
```

---

#### Stop a Server

This will stop a server. The machine will be forcefully powered off, billing will cease, and the public IP, if one is allocated, will be deallocated.

The following table describes the request arguments:

| Name| Required | Type | Description |
|---|:-:|---|---|
| $datacenter_id | **yes** | string | The ID of the VDC. |
| $server_id | **yes** | string | The ID of the server. |

After retrieving a server, either by getting it by id, or as a create response object, you can call the `stop` method directly.

```
$server_api->stop($datacenter_id, $server_id);
```

---

### Images

Create an instace of the api class:

         $image_api = new ProfitBricks\Client\Api\ImageApi($api_client);

#### List Images

Retrieve a list of images.

The optional `depth` parameter defines the level, one being the least and five being the most, of information returned with the response.

```
$images = $image_api->findAll();
```

---

#### Get an Image

Retrieves the attributes of a specific image.

The following table describes the request arguments:

| Name| Required | Type | Description |
|---|:-:|---|---|
| $image_id | **yes** | string | The ID of the image. |
| $depth | no | int | The level of details returned. |

```
$image = $image_api->findById($image_id);
```

---

### Volumes

Create an instace of the api class:

          $volume_api = new ProfitBricks\Client\Api\VolumeApi($api_client);
    	  $snapshot_api = new ProfitBricks\Client\Api\SnapshotApi($api_client);

#### List Volumes

Retrieve a list of volumes within the virtual data center. If you want to retrieve a list of volumes attached to a server please see the [List Attached Volumes](#list-attached-volumes) entry in the Server section for details.

The following table describes the request arguments:

| Name| Required | Type | Description |
|---|:-:|---|---|
| $datacenter_id | **yes** | string | The ID of the VDC. |
| $depth | no | int | The level of details returned. |

```
$volumes = $volume_api->findAll($datacenter_id);
```

---

#### Get a Volume

Retrieves the attributes of a given volume.

The following table describes the request arguments:

| Name| Required | Type | Description |
|---|:-:|---|---|
| $datacenter_id | **yes** | string | The ID of the VDC. |
| $volume_id | **yes** | string | The ID of the volume. |
| $depth | no | int | The level of details returned. |

```
$volume = $volume_api->findById($datacenter_id, $volume_id);
```

---

#### Create a Volume

Creates a volume within the virtual data center. This will NOT attach the volume to a server. Please see the [Attach a Volume](#attach-a-volume) entry in the Server section for details on how to attach storage volumes.

The following table describes the request arguments:

| Name| Required | Type | Description |
|---|:-:|---|---|
| $datacenter_id | **yes** | string | The ID of the VDC. |
| $name | no | string | The name of the volume. |
| $size | **yes** | int | The size of the volume in GB. |
| $bus | no | string | The bus type of the volume (VIRTIO or IDE). Default: VIRTIO. |
| $image | **yes** | string | The image or snapshot ID. |
| $imageAlias | **yes** | string | An alias to a ProfitBricks public image. Use instead of $image. |
| $type | **yes** | string | The volume type, HDD or SSD. |
| $licence_type | **yes** | string | The licence type of the volume. Options: LINUX, WINDOWS, WINDOWS2016, UNKNOWN, OTHER |
| $image_password | **yes** | string | One-time password is set on the Image for the appropriate root or administrative account. This field may only be set in creation requests. When reading, it always returns *null*. The password has to contain 8-50 characters. Only these characters are allowed: [abcdefghjkmnpqrstuvxABCDEFGHJKLMNPQRSTUVX23456789] |
| $ssh_keys | **yes** | string | SSH keys to allow access to the volume via SSH. |
| $availability_zone | no | string | The storage availability zone assigned to the volume. Valid values: AUTO, ZONE_1, ZONE_2, or ZONE_3. This only applies to HDD volumes. Leave blank or set to AUTO when provisioning SSD volumes. |

The following table outlines the various licence types you can define:

| Licence Type | Comment |
|---|---|
| WINDOWS2016 | Use this for the Microsoft Windows Server 2016 operating system. |
| WINDOWS | Use this for the Microsoft Windows Server 2008 and 2012 operating systems. |
| LINUX |Use this for Linux distributions such as CentOS, Ubuntu, Debian, etc. |
| OTHER | Use this for any volumes that do not match one of the other licence types. |
| UNKNOWN | This value may be inherited when you've uploaded an image and haven't set the license type. Use one of the options above instead. |

The following table outlines the storage availability zones currently supported:

| Availability Zone | Comment |
|---|---|
| AUTO | Automatically Selected Zone |
| ZONE_1 | Fire Zone 1 |
| ZONE_2 | Fire Zone 2 |
| ZONE_3 | Fire Zone 3 |

* You will need to provide either the `$image` or the `$licence_type` parameters. `$licence_type` is required, but if `$image` is supplied, it is already set and cannot be changed. Similarly either the `$image_password` or `$ssh_keys` parameters need to be supplied when creating a volume. We recommend setting a valid value for `$image_password` even when using `$ssh_keys` so that it is possible to authenticate using the remote console feature of the DCD.

```
$volume = new ProfitBricks\Client\Model\Volume();
$props = new \ProfitBricks\Client\Model\VolumeProperties();
$props->setName("test-volume")
  ->setSize(3)
  ->setType('HDD')
  ->setImage($image_id)
  ->setImagePassword("testpassword123")
  ->setSshKeys(array("hQGOEJeFL91EG3+l9TtRbWNjzhDVHeLuL3NWee6bekA="));
$volume->setProperties($props);

$testVolume = $volume_api->create($testDatacenter->getId(), $volume);
```

---

#### Update a Volume

You can update -- in full or partially -- various attributes on the volume; however, some restrictions are in place:

You can increase the size of an existing storage volume. You cannot reduce the size of an existing storage volume. The volume size will be increased without requiring a reboot if the relevant hot plug settings have been set to *true*. The additional capacity is not added automatically added to any partition, therefore you will need to handle that inside the OS afterwards. Once you have increased the volume size you cannot decrease the volume size.

Since an existing volume is being modified, none of the request parameters are specifically required as long as the changes being made satisfy the requirements for creating a volume.

The following table describes the request arguments:

| Name| Required | Type | Description |
|---|:-:|---|---|
| $datacenter_id | **yes** | string | The ID of the VDC. |
| $volume_id | **yes** | string | The ID of the volume. |
| $name | no | string | The name of the volume. |
| $size | no | int | The size of the volume in GB. Only increase when updating. |
| $bus | no | string | The bus type of the volume (VIRTIO or IDE). Default: VIRTIO. |
| $image | no | string | The image or snapshot ID. |
| $type | no | string | The volume type, HDD or SSD. |
| $licence_type | no | string | The licence type of the volume. Options: LINUX, WINDOWS, WINDOWS2016, UNKNOWN, OTHER |
| $availability_zone | no | string | The storage availability zone assigned to the volume. Valid values: AUTO, ZONE_1, ZONE_2, or ZONE_3. This only applies to HDD volumes. Leave blank or set to AUTO when provisioning SSD volumes. |

After retrieving a volume, either by getting it by id, or as a create response object, you can change its properties and call the `partialUpdate` method:

```
$volume_api->partialUpdate($datacenter_id, $volume_id, $props);
```

**NOTE**: You can also use `update()`, for that operation you will update all the properties.

---

#### Delete a Volume

Deletes the specified volume. This will result in the volume being removed from your data center. Use this with caution.

The following table describes the request arguments:

| Name| Required | Type | Description |
|---|:-:|---|---|
| $datacenter_id | **yes** | string | The ID of the VDC. |
| $volume_id | **yes** | string | The ID of the volume. |

After retrieving a volume, either by getting it by id, or as a create response object, you can call the `delete` method directly.

```
$volume_api->delete($datacenter_id, $volume_id);
```

---

#### Create a Volume Snapshot

Creates a snapshot of a volume within the virtual data center. You can use a snapshot to create a new storage volume or to restore a storage volume.

The following table describes the request arguments:

| Name| Required | Type | Description |
|---|:-:|---|---|
| $datacenter_id | **yes** | string | The ID of the VDC. |
| $volume_id | **yes** | string | The ID of the volume. |
| $name | no | string | The name of the snapshot. |
| $description | no | string | The description of the snapshot. |

After retrieving a volume, either by getting it by id, or as a create response object, you can call the `createSnapshot` method directly.

```
$testSnapshot = $volume_api->createSnapshot($datacenter_id,$volume_id);
```

---

#### Restore a Volume Snapshot

This will restore a snapshot onto a volume. A snapshot is created as just another image that can be used to create new volumes or to restore an existing volume.

The following table describes the request arguments:

| Name| Required | Type | Description |
|---|:-:|---|---|
| $datacenter_id | **yes** | string | The ID of the VDC. |
| $volume_id | **yes** | string | The ID of the volume. |
| $snapshot_id | **yes** | string |  The ID of the snapshot. |

After retrieving a volume, either by getting it by id, or as a create response object, you can call the `restoreSnapshot` method directly.

```
$volume_api->restoreSnapshot($datacenter_id, $volume_id, $snapshot_id);
```

---

### Snapshots

Create an instace of the api class:

         $volume_api = new ProfitBricks\Client\Api\VolumeApi($api_client);
    	 $snapshot_api = new ProfitBricks\Client\Api\SnapshotApi($api_client);

#### List Snapshots

You can retrieve a list of all available snapshots.

The optional `$depth` parameter defines the level, one being the least and five being the most, of information returned with the response.

```
$snapshots = $snapshot_api->findAll();
```

---

#### Get a Snapshot

Retrieves the attributes of a specific snapshot.

The following table describes the request arguments:

| Name| Required | Type | Description |
|---|:-:|---|---|
| $snapshot_id | **yes** | string | The ID of the snapshot. |
| $depth | no | int | The level of details returned. |

```
$snapshot = $snapshot_api->findById($snapshot_id);
```

---

#### Update a Snapshot

Perform updates to attributes of a snapshot.

The following table describes the request arguments:

| Name| Required | Type | Description |
|---|:-:|---|---|
| $snapshot_id | **yes** | string | The ID of the snapshot. |
| $name	 | no | string | The name of the snapshot. |
| $description | no | string | The description of the snapshot. |
| $licence_type | no | string | The snapshot's licence type: LINUX, WINDOWS, WINDOWS2016, or OTHER. |
| $cpu_hot_plug | no | bool | This volume is capable of CPU hot plug (no reboot required) |
| $cpu_hot_unplug | no | bool | This volume is capable of CPU hot unplug (no reboot required) |
| $ram_hot_plug | no | bool |  This volume is capable of memory hot plug (no reboot required) |
| $ram_hot_unplug | no | bool | This volume is capable of memory hot unplug (no reboot required) |
| $nic_hot_plug | no | bool | This volume is capable of NIC hot plug (no reboot required) |
| $nic_hot_unplug | no | bool | This volume is capable of NIC hot unplug (no reboot required) |
| $disc_virtio_hot_plug | no | bool | This volume is capable of VirtIO drive hot plug (no reboot required) |
| $disc_virtio_hot_unplug | no | bool | This volume is capable of VirtIO drive hot unplug (no reboot required) |
| $disc_scsi_hot_plug | no | bool | This volume is capable of SCSI drive hot plug (no reboot required) |
| $disc_scsi_hot_unplug | no | bool | This volume is capable of SCSI drive hot unplug (no reboot required) |

After retrieving a snapshot, either by getting it by id, or as a create response object, you can change its properties and call the `partialUpdate` method:

```
$props = new \ProfitBricks\Client\Model\SnapshotProperties();
$props->setName("new-name");

$snapshot_api->partialUpdate($snapshot_id, $props);
```

**NOTE**: You can also use `update()`, for that operation you will update all the properties.

---

#### Delete a Snapshot

Deletes the specified snapshot.

The following table describes the request arguments:

| Name| Required | Type | Description |
|---|:-:|---|---|
| $snapshot_id | **yes** | string | The ID of the snapshot. |

After retrieving a snapshot, either by getting it by id, or as a create response object, you can call the `delete` method directly.

```
$snapshot_api->delete($testSnapshot->getId());
```

---

### IP Blocks

The IP block operations assist with managing reserved /static public IP addresses.

Create an instace of the api class:

         $ipblocks_api = new ProfitBricks\Client\Api\IPBlocksApi($api_client);

#### List IP Blocks

Retrieve a list of available IP blocks.

The optional `$depth` parameter defines the level, one being the least and five being the most, of information returned with the response.


```
$ipblocks = $ipblocks_api->findAll();
```

#### Get an IP Block

Retrieves the attributes of a specific IP block.

The following table describes the request arguments:

| Name| Required | Type | Description |
|---|:-:|---|---|
| $ipblock_id | **yes** | string | The ID of the IP block. |
| $depth | no | int | The level of details returned. |

```
$block = $ipblocks_api->findById($ipblock_id);
```

---

#### Create an IP Block

Creates an IP block. IP blocks are attached to a location, so you must specify a valid `$location` along with a `$size` parameter indicating the number of IP addresses you want to reserve in the IP block. Servers or other resources using an IP address from an IP block must be in the same `$location`.

The following table describes the request arguments:

| Name| Required | Type | Description |
|---|:-:|---|---|
| $location | **yes** | string | This must be one of the locations: us/las, us/ewr, de/fra, de/fkb. |
| $size | **yes** | int | The size of the IP block you want. |
| $name | no | string | A descriptive name for the IP block |

The following table outlines the locations currently supported:

| Value| Country | City |
|---|---|---|
| us/las | United States | Las Vegas |
| us/ewr | United States | Newark |
| de/fra | Germany | Frankfurt |
| de/fkb | Germany | Karlsruhe |

To create an IP block, establish the parameters and then call `create`.

```
$block = new \ProfitBricks\Client\Model\IpBlock();
$props = new \ProfitBricks\Client\Model\IpBlockProperties();
$props->setSize(2)->setLocation("us/las");
$block->setProperties($props);

$testIpBlock = $ipblocks_api->create($block);
```

---

#### Delete an IP Block

Deletes the specified IP Block.

The following table describes the request arguments:

| Name| Required | Type | Description |
|---|:-:|---|---|
| $ipblock_id | **yes** | string | The ID of the IP block. |

After retrieving an IP block, either by getting it by id, or as a create response object, you can call the `Delete` method directly.

```
$ipblocks_api->delete($ipblock_id);
```

---

### LANs

#### List LANs

Retrieve a list of LANs within the virtual data center.

The following table describes the request arguments:

| Name| Required | Type | Description |
|---|:-:|---|---|
| $datacenter_id | **yes** | string | The ID of the VDC. |
| $depth | no | int | The level of details returned. |

```
$lans = $lan_api->findAll($testDatacenter->getId());
```

---

#### Create a LAN

Creates a LAN within a virtual data center.

The following table describes the request arguments:

| Name| Required | Type | Description |
|---|:-:|---|---|
| $datacenter_id | **yes** | string | The ID of the VDC. |
| $name | no | string | The name of your LAN. |
| $ipFailover | no | array{ip, nicUuid} | Information about IP Failovers can be found [here](https://devops.profitbricks.com/api/cloud/v4/#ip-failover-groups) |
| $public | **Yes** | bool | Boolean indicating if the LAN faces the public Internet or not. |
| $nics | no | object | A collection of NICs associated with the LAN. |

```
$lan = new \ProfitBricks\Client\Model\Lan();
$props = new \ProfitBricks\Client\Model\LanProperties();
$props->setName("jclouds-lan");
$lan->setProperties($props);

$testLan = $lan_api->create($datacenter_id, $lan);
```

---

#### Get a LAN

Retrieves the attributes of a given LAN.

The following table describes the request arguments:

| Name| Required | Type | Description |
|---|:-:|---|---|
| $datacenter_id | **yes** | string | The ID of the VDC. |
| $lan_id | **yes** | int | The ID of the LAN. |
| $depth | no | int | The level of details returned. |

```
$lan = $lan_api->findById($datacenter_id, $lan_id);
```

---

#### Update a LAN

Perform updates to attributes of a LAN.

The following table describes the request arguments:

| Name| Required | Type | Description |
|---|:-:|---|---|
| $datacenter_id | **yes** | string | The ID of the VDC. |
| $lan_id | **yes** | int | The ID of the LAN. |
| $name | no | string | A descriptive name for the LAN. |
| $public | no | bool | Boolean indicating if the LAN faces the public Internet or not. |

After retrieving a LAN, either by getting it by id, or as a create response object, you can change its properties and call the `partialUpdate` method:

```
$lan = new \ProfitBricks\Client\Model\Lan();
$props = new \ProfitBricks\Client\Model\LanProperties();
$props->setName("new-name")->setPublic(false);
$lan->setProperties($props);

$lan_api->partialUpdate($datacenter_id, $lan_id, $props);
```

**NOTE**: You can also use `update()`, for that operation you will update all the properties.

---

#### Delete a LAN

Deletes the specified LAN.

The following table describes the request arguments:

| Name| Required | Type | Description |
|---|:-:|---|---|
| $datacenter_id | **yes** | string | The ID of the VDC. |
| $lan_id | **yes** | string | The ID of the LAN. |

After retrieving a LAN, either by getting it by id, or as a create response object, you can call the `delete` method directly.

```
$lan_api->delete($datacenter_id, $lan_id);
```

---

### Network Interfaces

Create an instance of the api class:

         $nic_api = new ProfitBricks\Client\Api\NetworkInterfacesApi($api_client);

#### List NICs

Retrieve a list of LANs within the virtual data center.

The following table describes the request arguments:

| Name| Required | Type | Description |
|---|:-:|---|---|
| $datacenter_id | **yes** | string | The ID of the VDC. |
| $server_id | **yes** | string | The ID of the server. |
| $depth | no | int | The level of details returned. |

```
$nics = $nic_api->findAll(datacenter_id, $server_id);
```

---

#### Get a NIC

Retrieves the attributes of a given NIC.

The following table describes the request arguments:

| Name| Required | Type | Description |
|---|:-:|---|---|
| $datacenter_id | **yes** | string | The ID of the VDC. |
| $server_id | **yes** | string | The ID of the server. |
| $nic_id | **yes** | string | The ID of the NIC. |
| $depth | no | int | The level of details returned. |

```
$nic = $nic_api->findById($datacenter_id, $server_id, $nic_id);
```

---

#### Create a NIC

Adds a NIC to the target server.

The following table describes the request arguments:

| Name| Required | Type | Description |
|---|:-:|---|---|
| $datacenter_id | **yes** | string | The ID of the VDC. |
| $server_id | **yes** | string| The ID of the server. |
| $name | no | string | The name of the NIC. |
| $ips | no | string collection | IPs assigned to the NIC. This can be a collection. |
| $dhcp | no | bool | Set to FALSE if you wish to disable DHCP on the NIC. Default: TRUE. |
| $lan | **yes** | int | The LAN ID the NIC will sit on. If the LAN ID does not exist it will be created. |
| $nat | no | bool | Indicates the private IP address has outbound access to the public internet. |
| $firewall_active | no | bool | Once you add a firewall rule this will reflect a true value. |
| $firewallrules | no | object| A list of firewall rules associated to the NIC represented as a collection. |

```
$nic = new \ProfitBricks\Client\Model\Nic();
$props = new \ProfitBricks\Client\Model\NicProperties();
$props->setName("jclouds-nic")->setLan(1);
$nic->setProperties($props);

$testNic = $nic_api->create($datacenter_id, $server_id, $nic);
```

---

#### Update a NIC

You can update -- in full or partially -- various attributes on the NIC; however, some restrictions are in place:

The primary address of a NIC connected to a load balancer can only be changed by changing the IP of the load balancer. You can also add additional reserved, public IPs to the NIC.

The user can specify and assign private IPs manually. Valid IP addresses for private networks are 10.0.0.0/8, 172.16.0.0/12 or 192.168.0.0/16.

The following table describes the request arguments:

| Name| Required | Type | Description |
|---|:-:|---|---|
| $datacenter_id | **yes** | string | The ID of the VDC. |
| $server_id | **yes** | string| The ID of the server. |
| $nic_id | **yes** | string| The ID of the NIC. |
| $name | no | string | The name of the NIC. |
| $ips | no | string collection | IPs assigned to the NIC represented as a collection. |
| Dhcp | no | bool | Boolean value that indicates if the NIC is using DHCP or not. |
| $lan | no | int | The LAN ID the NIC sits on. |
| $nat | no | bool | Indicates the private IP address has outbound access to the public internet. |

After retrieving a NIC, either by getting it by id, or as a create response object, you can call the `partialUpdate` method directly.

```
$nic = new \ProfitBricks\Client\Model\Nic();
$props = new \ProfitBricks\Client\Model\NicProperties();
$props->setName("new-name");
$nic->setProperties($props);

$nic_api->partialUpdate($datacenter_id, $server_id, $nic_id, $props);
```

**NOTE**: You can also use `update()`, for that operation you will update all the properties.

---

#### Delete a NIC

Deletes the specified NIC.

The following table describes the request arguments:

| Name| Required | Type | Description |
|---|:-:|---|---|
| $datacenter_id | **yes** | string | The ID of the VDC. |
| $server_id | **yes** | string| The ID of the server. |
| $nic_id | **yes** | string| The ID of the NIC. |

After retrieving a NIC, either by getting it by id, or as a create response object, you can call the `delete` method directly.

```
$nic_api->delete($datacenter_id, $server_id, $nic_id);
```

---

### Firewall Rules

Create an instace of the api class:

         $firewall_api = new ProfitBricks\Client\Api\FirewallRuleApi($api_client);

#### List Firewall Rules

Retrieves a list of firewall rules associated with a particular NIC.

The following table describes the request arguments:

| Name| Required | Type | Description |
|---|:-:|---|---|
| $datacenter_id | **yes** | string | The ID of the VDC. |
| $server_id | **yes** | string | The ID of the server. |
| $nic_id | **yes** | string | The ID of the NIC. |
| $depth | no | int | The level of details returned. |

```
$rules = $firewall_api->findAll($datacenter_id, $server_id, $nic_id);
```

---

#### Get a Firewall Rule

Retrieves the attributes of a given firewall rule.

The following table describes the request arguments:

| Name| Required | Type | Description |
|---|:-:|---|---|
| $datacenter_id | **yes** | string | The ID of the VDC. |
| $server_id | **yes** | string | The ID of the server. |
| $nic_id | **yes** | string | The ID of the NIC. |
| $firewall_rule_id | **yes** | string | The ID of the firewall rule. |
| $depth | no | int | The level of details returned. |

```
$rule = $firewall_api->findById($datacenter_id, $server_id, $nic_id, $firewall_rule_id);
```

---

#### Create a Firewall Rule

This will add a firewall rule to the NIC.

The following table describes the request arguments:

| Name| Required | Type | Description |
|---|:-:|---|---|
| $datacenter_id | **yes** | string | The ID of the VDC. |
| $server_id | **yes** | string | The ID of the server. |
| $nic_id | **yes** | string | The ID of the NIC. |
| $name | no | string | The name of the firewall rule. |
| $protocol | **yes** | string | The protocol for the rule: TCP, UDP, ICMP, ANY. |
| $source_mac | no | string | Only traffic originating from the respective MAC address is allowed. Valid format: aa:bb:cc:dd:ee:ff. A *null* value allows all source MAC address. |
| $source_ip | no | string | Only traffic originating from the respective IPv4 address is allowed. A *null* value allows all source IPs. |
| $target_ip | no | string | In case the target NIC has multiple IP addresses, only traffic directed to the respective IP address of the NIC is allowed. A *null* value allows all target IPs. |
| $port_range_start | no | string | Defines the start range of the allowed port (from 1 to 65534) if protocol TCP or UDP is chosen. Leave `$port_range_start` and `$port_range_end` value as *null* to allow all ports. |
| $port_range_end | no | string | Defines the end range of the allowed port (from 1 to 65534) if the protocol TCP or UDP is chosen. Leave `$port_range_start` and `$port_range_end` value as *null* to allow all ports. |
| $icmp_type | no | string | Defines the allowed type (from 0 to 254) if the protocol ICMP is chosen. A *null* value allows all types. |
| $icmp_code | no | string | Defines the allowed code (from 0 to 254) if protocol ICMP is chosen. A *null* value allows all codes. |

```
$rule = new \ProfitBricks\Client\Model\FirewallRule();
$props = new \ProfitBricks\Client\Model\FirewallruleProperties();
$props->setName("jclouds-firewall")->setProtocol("TCP")->setPortRangeStart(1)->setPortRangeEnd(600);
$rule->setProperties($props);

$testRule = $firewall_api->create($datacenter_id, $server_id, $nic_id, $rule);
```

---

#### Update a Firewall Rule

Perform updates to attributes of a firewall rule.

The following table describes the request arguments:

| Name| Required | Type | Description |
|---|:-:|---|---|
| $datacenter_id | **yes** | string | The ID of the VDC. |
| $server_id | **yes** | string | The ID of the server. |
| $nic_id | **yes** | string | The ID of the NIC. |
| $firewall_rule_id | **yes** | string | The ID of the firewall rule. |
| $name | no | string | The name of the firewall rule. |
| $source_mac | no | string | Only traffic originating from the respective MAC address is allowed. Valid format: aa:bb:cc:dd:ee:ff. A *null* value allows all source MAC address. |
| $source_ip | no | string | Only traffic originating from the respective IPv4 address is allowed. A *null* value allows all source IPs. |
| $target_ip | no | string | In case the target NIC has multiple IP addresses, only traffic directed to the respective IP address of the NIC is allowed. A *null* value allows all target IPs. |
| $port_range_start | no | string | Defines the start range of the allowed port (from 1 to 65534) if protocol TCP or UDP is chosen. Leave `port_range_start` and `port_range_end` value as *null* to allow all ports. |
| $port_range_end | no | string | Defines the end range of the allowed port (from 1 to 65534) if the protocol TCP or UDP is chosen. Leave `port_range_start` and `port_range_end` value as *null* to allow all ports. |
| $icmp_type | no | string | Defines the allowed type (from 0 to 254) if the protocol ICMP is chosen. A *null* value allows all types. |
| $icmp_code | no | string | Defines the allowed code (from 0 to 254) if protocol ICMP is chosen. A *null* value allows all codes. |

After retrieving a firewall rule, either by getting it by id, or as a create response object, you can change its properties and call the `partialUpdate` method:

```
$rule = new \ProfitBricks\Client\Model\FirewallRule();
$props = new \ProfitBricks\Client\Model\FirewallruleProperties();
$props->setName("new-name");
$rule->setProperties($props);

$firewall_api->partialUpdate($datacenter_id, $server_id, $nic_id, $firewall_rule_id, $props);
```

**NOTE**: You can also use `update()`, for that operation you will update all the properties.

---

#### Delete a Firewall Rule

Removes the specific firewall rule.

| Name| Required | Type | Description |
|---|:-:|---|---|
| $datacenter_id | **yes** | string | The ID of the VDC. |
| $server_id | **yes** | string | The ID of the server. |
| $nic_id | **yes** | string | The ID of the NIC. |
| $firewall_rule_id | **yes** | string | The ID of the firewall rule. |

After retrieving a firewall rule, either by getting it by id, or as a create response object, you can call the `delete` method directly.

```
 $firewall_api->delete($datacenter_id, $server_id, $nic_id, $firewall_rule_id);
```

---



### Load Balancers

Create an instace of the api class:

```
$loadbalancer_api = new ProfitBricks\Client\Api\LoadBalancerApi($api_client);

$loadbalancer_nic_api = new ProfitBricks\Client\Api\LoadBalancerNicApi($api_client);
```

#### List Load Balancers

Retrieve a list of load balancers within the data center.

The following table describes the request arguments:

| Name| Required | Type | Description |
|---|:-:|---|---|
| $datacenter_id | **yes** | string | The ID of the VDC. |
| $depth | no | int | The level of details returned. |

```
$balancers = $loadbalancer_api->findAll($datacenter_id);
```

---

#### Get a Load Balancer

Retrieves the attributes of a given load balancer.

The following table describes the request arguments:

| Name| Required | Type | Description |
|---|:-:|---|---|
| $datacenter_id | **yes** | string | The ID of the VDC. |
| $loadbalancer_id | **yes** | string | The ID of the load balancer. |
| $depth | no | int | The level of details returned. |

```
$balancer = $loadbalancer_api->findById($datacenter_id, $loadbalancer_id);
```

---

#### Create a Load Balancer

Creates a load balancer within the virtual data center. Load balancers can be used for public or private IP traffic.

The following table describes the request arguments:

| Name| Required | Type | Description |
|---|:-:|---|---|
| $datacenter_id | **yes** | string | The ID of the VDC. |
| $name | **yes** | string | The name of the load balancer. |
| $ip | no | string | IPv4 address of the load balancer. All attached NICs will inherit this IP. |
| $dhcp | no | bool | Indicates if the load balancer will reserve an IP using DHCP. |
| $balancednics | no | string collection | List of NICs taking part in load-balancing. All balanced NICs inherit the IP of the load balancer. |

```
$balancer = new \ProfitBricks\Client\Model\Loadbalancer();
$props = new \ProfitBricks\Client\Model\LoadbalancerProperties();
$props->setName("jclouds-balancer")->setDhcp(false);
$balancer->setProperties($props);

$testLoadBalancer = $loadbalancer_api->create($datacenter_id, $balancer);
```

---

#### Update a Load Balancer

Perform updates to attributes of a load balancer.

The following table describes the request arguments:

| Name| Required | Type | Description |
|---|:-:|---|---|
| $datacenter_id | **yes** | string | The ID of the VDC. |
| $loadbalancer_id | **yes** | string | The ID of the load balancer. |
| $name | no | string | The name of the load balancer. |
| $ip | no | string | The IP of the load balancer. |
| $dhcp | no | bool | Indicates if the load balancer will reserve an IP using DHCP. |

After retrieving a load balancer, either by getting it by id, or as a create response object, you can change it's properties and call the `partialUpdate` method:

```
$balancer = new \ProfitBricks\Client\Model\Loadbalancer();
$props = new \ProfitBricks\Client\Model\LoadbalancerProperties();
$props->setName("new-name");
$balancer->setProperties($props);

$loadbalancer_api->partialUpdate($datacenter_id, $loadbalancer_id, $props);
```

**NOTE**: You can also use `update()`, for that operation you will update all the properties.

---

#### Delete a Load Balancer

Deletes the specified load balancer.

The following table describes the request arguments:

| Name| Required | Type | Description |
|---|:-:|---|---|
| $datacenter_id | **yes** | string | The ID of the VDC. |
| $loadbalancer_id | **yes** | string | The ID of the load balancer. |

After retrieving a load balancer, either by getting it by id, or as a create response object, you can call the `delete` method directly.

```
$loadbalancer_api->delete($datacenter_id, $loadbalancer_id);
```

---

#### List Load Balanced NICs

This will retrieve a list of NICs associated with the load balancer.

The following table describes the request arguments:

| Name| Required | Type | Description |
|---|:-:|---|---|
| $datacenter_id | **yes** | string | The ID of the VDC. |
| $loadbalancer_id | **yes** | string | The ID of the load balancer. |
| $depth | no | int | The level of details returned. |

After retrieving a load balancer, either by getting it by id, or as a create response object, you can call the `listNics` method directly.

```
$nics = $loadbalancer_nic_api->listNics($datacenter_id, $loadbalancer_id);
```

---

#### Get a Load Balanced NIC

Retrieves the attributes of a given load balanced NIC.

The following table describes the request arguments:

| Name| Required | Type | Description |
|---|:-:|---|---|
| $datacenter_id  | **yes** | string | The ID of the VDC. |
| $loadbalancer_id | **yes** | string | The ID of the load balancer. |
| $nic_id | **yes** | string | The ID of the NIC. |
| $depth | no | int | The level of details returned. |

After retrieving a load balancer, either by getting it by id, or as a create response object, you can call the `getMember` method directly.

```
$testNic = $loadbalancer_nic_api->getMember($datacenter_id, $loadbalancer_id, $nic_id);
```

---

#### Associate NIC to a Load Balancer

This will associate a NIC to a load balancer, enabling the NIC to participate in load-balancing.

The following table describes the request arguments:

| Name| Required | Type | Description |
|---|:-:|---|---|
| $datacenter_id | **yes** | string | The ID of the VDC. |
| $loadbalancer_id | **yes** | string | The ID of the load balancer. |
| $nic_id | **yes** | string | The ID of the NIC. |

After retrieving a load balancer, either by getting it by id, or as a create response object, you can call the `attachNic` method directly.

```
$nic = new ProfitBricks\Client\Model\Nic();
$nic->setId($nic_id);
$loadbalancer_nic_api->attachNic($datacenter_id, $loadbalancer_id, $nic);
```

---

#### Remove a NIC Association

Removes the association of a NIC with a load balancer.

The following table describes the request arguments:

| Name| Required | Type | Description |
|---|:-:|---|---|
| $datacenter_id | **yes** | string | The ID of the VDC. |
| $loadbalancer_id | **yes** | string | The ID of the load balancer. |
| $nic_id | **yes** | string | The ID of the NIC. |

After retrieving a load balancer, either by getting it by id, or as a create response object, you can call the `delete` method directly.

```
$loadbalancer_nic_api->delete($datacenter_id, $loadbalancer_id, $nic_id);
```

---

### Contract Resources

Checking the amount of available resources under a contract can help you to avoid provisioning errors resulting from the attempt to provision more resources than are available.

Create an instance of the api class:

         $contract_resources_api = new ProfitBricks\Client\Api\ContractResourcesApi($api_client);

#### List Contract Resources

Returns information about the resource limits for a particular contract and the current resource usage.

The optional `depth` parameter defines the level, one being the least and five being the most, of information returned with the response.

```
$contract_resources = $contract_resources_api->findAll();
```

---


### User Management

These operations are designed to allow you to orchestrate users and resources via the Cloud API. Previously this functionality required use of the DCD (Data Center Designer) web application.

Create an instance of the api class:

         $user_management_api = new ProfitBricks\Client\Api\UserManagementApi($api_client);

#### List Groups

This retrieves a full list of all groups.

The optional `depth` parameter defines the level, one being the least and five being the most, of information returned with the response.

```
$groups = $user_management_api->findAllGroups();
```

---


#### Retrieve Group

Retrieves detailed information about a specific group.

The following table describes the request arguments:

| Name| Required | Type | Description |
|---|:-:|---|---|
| $group_id | **yes** | string | The ID of the group. |
| $depth | no | int | The level of details returned. |

```
$group = $user_management_api->findGroupById($group_id);
```

---

#### Create Group

Use this operation to create a new group and set group privileges.

The following table describes the request arguments:

| Name| Required | Type | Description |
|---|:-:|---|---|
| $name | **yes** | string | A name for the group. |
| $createDataCenter | no | boolean | The group will be allowed to create virtual data centers. |
| $createSnapshot | no | boolean | The group will be allowed to create snapshots. |
| $reserveIp | no | boolean | The group will be allowed to reserve IP addresses. |
| $accessActivityLog | no | boolean | The group will be allowed to access the activity log. |

**NOTES**:
- The value for `$name` cannot contain the following characters: (@, /, , |, ‘’, ‘).

```    
$props = new \ProfitBricks\Client\Model\GroupItemProperty();
$props->setName("test-group");
$props->setCreateDataCenter(True);
$props->setCreateSnapshot(True);
```
```
$new_group = $user_management_api->createGroup($props);
```

---

#### Update Group

Use this operation to update a group.

The following table describes the available request arguments:

| Name| Required | Type | Description |
|---|:-:|---|---|
| $group_id | **yes** | string | The ID of the group. |
| $name | **yes** | string | A name for the group. |
| $createDataCenter | no | boolean | The group will be allowed to create virtual data centers. |
| $createSnapshot | no | boolean | The group will be allowed to create snapshots. |
| $reserveIp | no | boolean | The group will be allowed to reserve IP addresses. |
| $accessActivityLog | no | boolean | The group will be allowed to access the activity log. |

```    
$props = new \ProfitBricks\Client\Model\GroupItemProperty();
$props->setName("test-group");
$props->setCreateDataCenter(False);
$props->setCreateSnapshot(False);
```
```
$new_group = $user_management_api->updateGroup($group_id, $props);
```

---

#### Delete Group

Use this operation to delete a single group. Resources that are assigned to the group are NOT deleted, but are no longer accessible to the group members unless the member is a Contract Owner, Admin, or Resource Owner.

The following table describes the available request arguments:

| Name| Required | Type | Description |
|---|:-:|---|---|
| $group_id | **yes** | string | The ID of the group that you want to delete. |

```
$user_management_api->deleteGroup($group_id);
```

---

#### List Shares

Retrieves a full list of all the resources that are shared through this group and lists the permissions granted to the group members for each shared resource.

The optional `depth` parameter defines the level, one being the least and five being the most, of information returned with the response.

The following table describes the available request arguments:

| Name| Required | Type | Description |
|---|:-:|---|---|
| $group_id | **yes** | string | The ID of the group. |

```
$shares = $user_management_api->findAllShares($group_id);
```

---


#### Retrieve Share

Retrieves the details of a specific shared resource available to the specified group.

The following table describes the request arguments:

| Name| Required | Type | Description |
|---|:-:|---|---|
| $group_id | **yes** | string | The ID of the group. |
| $share_id | **yes** | string | The ID of the share. |
| $depth | no | int | The level of details returned. |

```
$share = $user_management_api->findShareById($group_id, $share_id);
```

---

#### Create Share

Adds a specific resource share to a group and optionally allows the setting of permissions for that resource. As an example, you might use this to grant permissions to use an image or snapshot to a specific group.

The following table describes the request arguments:

| Name| Required | Type | Description |
|---|:-:|---|---|
| $group_id | **yes** | string | The ID of the group. |
| $resource_id | **yes** | string | The ID of the share. |
| $editPrivilege | no | boolean | The group has permission to edit privileges on this resource. |
| $sharePrivilege | no | boolean | The group has permission to share this resource. |
| $depth | no | int | The level of details returned. |

```    
$props = new \ProfitBricks\Client\Model\ShareProperties();
$props->setEditPrivilege(True);
$props->setSharePrivilege(True);
```
```
$new_share = $user_management_api->addShare($group_id, $resource_id, $props);
```

---

#### Update Share

Use this to update the permissions that a group has for a specific resource share.

The following table describes the available request arguments:

|| Name| Required | Type | Description |
|---|:-:|---|---|
| $group_id | **yes** | string | The ID of the group. |
| $resource_id | **yes** | string | The ID of the share. |
| $editPrivilege | no | boolean | The group has permission to edit privileges on this resource. |
| $sharePrivilege | no | boolean | The group has permission to share this resource. |
| $depth | no | int | The level of details returned. |

```    
$props = new \ProfitBricks\Client\Model\ShareProperties();
$props->setEditPrivilege(False);
$props->setSharePrivilege(False);
```
```
$updated_share = $user_management_api->updateShare($group_id, $resource_id, $props);
```

---

#### Delete Share

Removes a resource share from a specified group.

The following table describes the available request arguments:

| Name| Required | Type | Description |
|---|:-:|---|---|
| $group_id | **yes** | string | The ID of the group. |
| $share_id | **yes** | string | The ID of the share. |
| $depth | no | int | The level of details returned. |

```
$deleted_share = $user_management_api->deleteShare($group_id, $share_id);
```

---

#### List Users

Retrieve a list of all the users that have been created under a contract.

The optional `depth` parameter defines the level, one being the least and five being the most, of information returned with the response.

```
$users = $user_management_api->findAllUsers();
```

---


#### Retrieve User

Retrieve details about a specific user including what groups and resources the user is associated with.

The following table describes the request arguments:

| Name| Required | Type | Description |
|---|:-:|---|---|
| $user_id | **yes** | string | The ID of the user. |
| $depth | no | int | The level of details returned. |

```
$user = $user_management_api->findUserById($user_id);
```

---

#### Create User

Creates a new user under a particular contract.

The following table describes the request arguments:

| Name| Required | Type | Description |
|---|:-:|---|---|
| $firstName | **yes** | string | A name for the user. |
| $lastName | **yes** | string | A name for the user. |
| $email | **yes** | string | An e-mail address for the user. |
| $password | **yes** | string | A password for the user. |
| $administrator | no | boolean | Assigns the user have administrative rights. |
| $forceSecAuth | no | boolean | Indicates if secure authentication should be forced for the user. |
| $depth | no | int | The level of details returned. |

```    
$props = new \ProfitBricks\Client\Model\UserProperties();
$props->setFirstName('Bob');
$props->setLastName('Smith');
$props->setEmail('bob_smith@example.com');
$props->setPassword('testPassword123!');
```
```
$new_user = $user_management_api->createUser($props);
```

---

#### Update User

Update details about a specific user including their privileges.

The following table describes the available request arguments:

| Name| Required | Type | Description |
|---|:-:|---|---|
| $user_id | **yes** | string | ID for the user. |
| $firstName | **yes** | string | A name for the user. |
| $lastName | **yes** | string | A name for the user. |
| $email | **yes** | string | An e-mail address for the user. |
| $password | **yes** | string | A password for the user. |
| $administrator | no | boolean | Assigns the user have administrative rights. |
| $forceSecAuth | no | boolean | Indicates if secure authentication should be forced for the user. |
| $depth | no | int | The level of details returned. |

```    
$props = new \ProfitBricks\Client\Model\UserProperties();
$props->setFirstName('Bob');
$props->setLastName('Smith');
$props->setEmail('bob_smith@example.com');
$props->setPassword("secretpassword123");
$props->setAdministrator(True);
$props->setForceSecAuth(True);
```
```
$updated_user = $user_management_api->updateUser($user_id, $props);
```

---

#### Delete User

Blacklists the user, disabling them. The user is not completely purged, therefore if you anticipate needing to create a user with the same name in the future, we suggest renaming the user before you delete it.

The following table describes the available request arguments:

| Name| Required | Type | Description |
|---|:-:|---|---|
| $user_id | **yes** | string | The ID of the user. |
| $depth | no | int | The level of details returned. |

```
$deleted_user = $user_management_api->deleteUser($user_id);
```

---


#### List Users In Group

Retrieves a full list of all the users that are members of a particular group.

The following table describes the request arguments:

| Name| Required | Type | Description |
|---|:-:|---|---|
| $group_id | **yes** | string | The ID of the group. |
| $depth | no | int | The level of details returned. |

```
$users = $user_management_api->findUsersInGroup($group_id);
```

---

#### Add User To Group

Use this operation to add an existing user to a group.

The following table describes the request arguments:

| Name| Required | Type | Description |
|---|:-:|---|---|
| $group_id | **yes** | string | The ID of the group. |
| $user_id | **yes** | string | The ID of the user to add. |
| $depth | no | int | The level of details returned. |

```
$new_user = $user_management_api->addUserToGroup($group_id, $user_id);
```

---

#### Remove User From Group

Use this operation to remove a user from a group.

The following table describes the available request arguments:

| Name| Required | Type | Description |
|---|:-:|---|---|
| $group_id | **yes** | string | The ID of the group. |
| $user_id | **yes** | string | The ID of the user to add. |
| $depth | no | int | The level of details returned. |

```
$deleted_user = $user_management_api->removeUserFromGroup($group_id, $user_id);
```

---


#### List Resources

Retrieves a list of all resources and optionally their group associations.

The optional `depth` parameter defines the level, one being the least and five being the most, of information returned with the response.

```
$resources = $user_management_api->findAllResources();
```

---


#### List Resources Of Type

Lists all shareable resources of a specific type.

The following table describes the request arguments:

| Name| Required | Type | Description |
|---|:-:|---|---|
| $resource_type | **yes** | string | The specific type of resources to retrieve information about. |
| $depth | no | int | The level of details returned. |

`$resource_type` can be any of the following values:

| Name| Description |
|---|---|
| datacenter | A virtual data center. |
| image | A private image that has been uploaded to ProfitBricks. |
| snapshot | A snapshot of a storage volume. |
| ipblock | An IP block that has been reserved. |

```
$resources = $user_management_api->findAllResourcesByType('datacenter');
```

---

#### Find Resource By Id

Retrieve a shareable resource by Id.

The following table describes the request arguments:

| Name| Required | Type | Description |
|---|:-:|---|---|
| $resource_type | **yes** | string | The specific type of resources to retrieve information about. |
| $resource_id | **yes** | string | ID of resource. |
| $depth | no | int | The level of details returned. |

`$resource_type` can be any of the following values:

| Name| Description |
|---|---|
| datacenter | A virtual data center. |
| image | A private image that has been uploaded to ProfitBricks. |
| snapshot | A snapshot of a storage volume. |
| ipblock | An IP block that has been reserved. |

```
$resource = $user_management_api->findResourceById('datacenter', $resource_id);
```

---


### Requests

Each call to the ProfitBricks Cloud API is assigned a request ID. These operations can be used to get information about the requests that have been submitted and their current status.

Create an instace of the api class:

         $reqiest_api = new ProfitBricks\Client\Api\RequestApi($api_client);

#### List Requests

Retrieve a list of requests.

```
$requests = $reqiest_api->findAll();
```

---

#### Get a Request

Retrieves the attributes of a specific request.

The following table describes the request arguments:

| Name| Required | Type | Description |
|---|:-:|---|---|
| $request_id | **yes** | string | The ID of the request. |

```
$request = $reqiest_api->findById($request_id);
```

---

#### Get a Request Status

Retrieves the status of a request.

The following table describes the request arguments:

| Name| Required | Type | Description |
|---|:-:|---|---|
| $request_id | **yes** | string | The ID of the request. |

```
$request = $reqiest_api->getStatus($request_id);
```

## Examples

### Wait for Resources

ProfitBricks allows servers to be created with individual, customizable components including NICs and volumes. A wait method is necessary to provision components that depends on each other. Below is an example of a `waitTillProvisioned` method that can be used between dependent requests:

```php
function waitTillProvisioned($url)
{
  //regex to get the request id
  preg_match('/\w{8}-\w{4}-\w{4}-\w{4}-\w{12}/', $url, $matches);
  $config = (new ProfitBricks\Client\Configuration())
      ->setHost('https://api.profitbricks.com/cloudapi/v4')
      ->setUsername(getenv('PROFITBRICKS_USERNAME'))
      ->setPassword(getenv('PROFITBRICKS_PASSWORD'));
  $api_client = new ProfitBricks\Client\ApiClient($config);
  $request_api = new ProfitBricks\Client\Api\RequestApi($api_client);
  $counter = 120;
  for ($i = 0; $i < $counter; $i++) {
    $request = $request_api->getStatus($matches[0]);
    sleep(1);
    if ($request->getMetadata()->getStatus() == "DONE") {
      break;
    }
    if ($request->getMetadata()->getStatus() == "FAILED") {
      throw new Exception("The request execution has failed with following message: " + $request->getMetadata()->getMessage());
    }
  }
}
```

### Component Build
```php
<?php

require_once(__DIR__.'/vendor/autoload.php');

$test_location = 'us/las';

$config = (new ProfitBricks\Client\Configuration())
    ->setHost('https://api.profitbricks.com/cloudapi/v4/')
    ->setUsername(getenv('PROFITBRICKS_USERNAME'))
    ->setPassword(getenv('PROFITBRICKS_PASSWORD'));
$api_client = new ProfitBricks\Client\ApiClient($config);

$datacenter_api = new ProfitBricks\Client\Api\DataCenterApi($api_client);
$server_api = new ProfitBricks\Client\Api\ServerApi($api_client);
$volume_api = new ProfitBricks\Client\Api\VolumeApi($api_client);
$attached_volume_api = new ProfitBricks\Client\Api\AttachedVolumesApi($api_client);

echo "Creating DataCenter";
echo PHP_EOL ;

$datacenter = new \ProfitBricks\Client\Model\Datacenter();

$props = new \ProfitBricks\Client\Model\DatacenterProperties();
$props->setName("test-data-center");
$props->setDescription("example description");
$props->setLocation($test_location);
$datacenter->setProperties($props);


$testDatacenter = $datacenter_api->create($datacenter);
waitTillProvisioned($testDatacenter->getRequestId());

echo "DataCenter Ready";
echo PHP_EOL ;

echo "Creating Server";
echo PHP_EOL ;

$server_api = new ProfitBricks\Client\Api\ServerApi($api_client);

$server = new \ProfitBricks\Client\Model\Server();
$props = new \ProfitBricks\Client\Model\ServerProperties();
$props->setName("jclouds-node")->setCores(1)->setRam(1024);
$server->setProperties($props);

$testServer = $server_api->create($testDatacenter->getId(), $server);

waitTillProvisioned($testServer->getRequestId());

echo "Server Ready";
echo PHP_EOL ;

echo "looking for a linux image";
echo PHP_EOL ;

$image_api = new ProfitBricks\Client\Api\ImageApi($api_client);
$images=$image_api->findAll(null,5);
$osImage = null;
foreach ($images->getItems() as $image) {
  if ($image->getProperties()->getPublic() == true
      && $image->getProperties()->getLocation() == "us/las"
      && $image->getProperties()->getLicenceType() == "LINUX"
      && $image->getProperties()->getImageType() == "HDD"
  ) {
    $osImage = $image;
  }
}

echo "image found";
echo PHP_EOL ;

echo "Creating Volume with the os Image installed";
echo PHP_EOL ;
$volume_api = new ProfitBricks\Client\Api\VolumeApi($api_client);

$volume = new ProfitBricks\Client\Model\Volume();
$props = new \ProfitBricks\Client\Model\VolumeProperties();
$props->setName("test-volume")
    ->setSize(3)
    ->setType('HDD')
    ->setImage($osImage->getId())
    ->setImagePassword("testpassword123")
    ->setSshKeys(array("hQGOEJeFL91EG3+l9TtRbWNjzhDVHeLuL3NWee6bekA="));
$volume->setProperties($props);

$testVolume = $volume_api->create($testDatacenter->getId(), $volume);

waitTillProvisioned($testVolume->getRequestId());
echo "Volume Ready";
echo PHP_EOL ;

echo "Attaching volume to server";
echo PHP_EOL ;

$attachedVolume=$attached_volume_api->attachVolume($testDatacenter->getId(), $testServer->getId(), $volume);
waitTillProvisioned($attachedVolume->getRequestId());

echo "Volume attached";
echo PHP_EOL ;


echo "Cleaning example";
echo PHP_EOL ;
$datacenter_api->delete($testDatacenter->getId());

function waitTillProvisioned($url)
{
  //regex to get the request id
  preg_match('/\w{8}-\w{4}-\w{4}-\w{4}-\w{12}/', $url, $matches);
  $config = (new ProfitBricks\Client\Configuration())
      ->setHost('https://api.profitbricks.com/cloudapi/v4')
      ->setUsername(getenv('PROFITBRICKS_USERNAME'))
      ->setPassword(getenv('PROFITBRICKS_PASSWORD'));
  $api_client = new ProfitBricks\Client\ApiClient($config);
  $request_api = new ProfitBricks\Client\Api\RequestApi($api_client);
  $counter = 120;
  for ($i = 0; $i < $counter; $i++) {
    $request = $request_api->getStatus($matches[0]);
    sleep(1);
    if ($request->getMetadata()->getStatus() == "DONE") {
      break;
    }
    if ($request->getMetadata()->getStatus() == "FAILED") {
      throw new Exception("The request execution has failed with following message: " + $request->getMetadata()->getMessage());
    }
  }
}
?>
```

### Composite Build

```php
<?php

require_once(__DIR__.'/vendor/autoload.php');

$test_location = 'us/las';

$config = (new ProfitBricks\Client\Configuration())
    ->setHost('https://api.profitbricks.com/cloudapi/v4/')
    ->setUsername(getenv('PROFITBRICKS_USERNAME'))
    ->setPassword(getenv('PROFITBRICKS_PASSWORD'));
$api_client = new ProfitBricks\Client\ApiClient($config);

$datacenter_api = new ProfitBricks\Client\Api\DataCenterApi($api_client);
$server_api = new ProfitBricks\Client\Api\ServerApi($api_client);
$volume_api = new ProfitBricks\Client\Api\VolumeApi($api_client);
$attached_volume_api = new ProfitBricks\Client\Api\AttachedVolumesApi($api_client);

echo "looking for a linux image";
echo PHP_EOL ;

$image_api = new ProfitBricks\Client\Api\ImageApi($api_client);
$images=$image_api->findAll(null,5);
$osImage = null;
foreach ($images->getItems() as $image) {
  if ($image->getProperties()->getPublic() == true
      && $image->getProperties()->getLocation() == "us/las"
      && $image->getProperties()->getLicenceType() == "LINUX"
      && $image->getProperties()->getImageType() == "HDD"
  ) {
    $osImage = $image;
  }
}

echo "image found";
echo PHP_EOL ;

echo "Creating Composite DataCenter";
echo PHP_EOL ;

$datacenter_composite = new \ProfitBricks\Client\Model\Datacenter();

//Configuring DataCenter properties
$props = new \ProfitBricks\Client\Model\DatacenterProperties();
$props->setName("test-data-center-composite");
$props->setDescription("example description");
$props->setLocation("us/las");

//Creating an array of servers to be added within the DataCenter
$servers=new \ProfitBricks\Client\Model\Servers();
$server_composite = new \ProfitBricks\Client\Model\Server();
$server_props = new \ProfitBricks\Client\Model\ServerProperties();
$server_props->setName("composite-node")->setCores(1)->setRam(1024);
$server_composite->setProperties($server_props);

//Creating an array of volumes to be added within the Server
$server_entities= new \ProfitBricks\Client\Model\ServerEntities();

$volume = new ProfitBricks\Client\Model\Volume();
$v_props = new \ProfitBricks\Client\Model\VolumeProperties();
$v_props->setName("test-volume")
    ->setSize(3)
    ->setType('HDD')
    ->setImage($osImage->getId())
    ->setImagePassword("testpassword123")
    ->setSshKeys(array("hQGOEJeFL91EG3+l9TtRbWNjzhDVHeLuL3NWee6bekA="));
$volume->setProperties($v_props);
$attachedVolumes= new \ProfitBricks\Client\Model\Volumes();
$attachedVolumes->setItems(array($volume));
$server_entities->setVolumes($attachedVolumes);
$server_composite->setEntities($server_entities);

$servers->setItems(array($server_composite));
$entities= new \ProfitBricks\Client\Model\DatacenterEntities();
$entities->setServers($servers);

$datacenter_composite->setProperties($props);
$datacenter_composite->setEntities($entities);
$testDatacenterComposite = $datacenter_api->create($datacenter_composite);
waitTillProvisioned($testDatacenterComposite->getRequestId());

echo "DataCenter Ready";
echo PHP_EOL ;



echo "Cleaning example";
echo PHP_EOL ;
$datacenter_api->delete($testDatacenterComposite->getId());

function waitTillProvisioned($url)
{
  //regex to get the request id
  preg_match('/\w{8}-\w{4}-\w{4}-\w{4}-\w{12}/', $url, $matches);
  $config = (new ProfitBricks\Client\Configuration())
      ->setHost('https://api.profitbricks.com/cloudapi/v4')
      ->setUsername(getenv('PROFITBRICKS_USERNAME'))
      ->setPassword(getenv('PROFITBRICKS_PASSWORD'));
  $api_client = new ProfitBricks\Client\ApiClient($config);
  $request_api = new ProfitBricks\Client\Api\RequestApi($api_client);
  $counter = 120;
  for ($i = 0; $i < $counter; $i++) {
    $request = $request_api->getStatus($matches[0]);
    sleep(1);
    if ($request->getMetadata()->getStatus() == "DONE") {
      break;
    }
    if ($request->getMetadata()->getStatus() == "FAILED") {
      throw new Exception("The request execution has failed with following message: " + $request->getMetadata()->getMessage());
    }
  }
}
?>
```

## Support

You are welcome to contact us with questions or comments at [ProfitBricks DevOps Central](https://devops.profitbricks.com/). Please report any issues via [GitHub's issue tracker](https://github.com/profitbricks/profitbricks-sdk-php/issues)

## Testing

You can find a full list of tests inside the `tests` folder.You can run tests using the `phpunit tests` command.

## Contributing

1. Fork it ( https://github.com/profitbricks/profitbricks-sdk-php/fork )
2. Create your feature branch (`git checkout -b my-new-feature`)
3. Commit your changes (`git commit -am 'Add some feature'`)
4. Push to the branch (`git push origin my-new-feature`)
5. Create a new Pull Request
