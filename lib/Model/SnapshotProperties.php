<?php
/**
 * SnapshotProperties
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
 * SnapshotProperties Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     ProfitBricks\Client
 * @author      http://github.com/ProfitBricks-api/ProfitBricks-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/ProfitBricks-api/ProfitBricks-codegen
 */
class SnapshotProperties implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $ProfitBricksTypes = array(
        'name' => 'string',
        'description' => 'string',
        'location' => 'string',
        'size' => 'double',
        'cpu_hot_plug' => 'bool',
        'cpu_hot_unplug' => 'bool',
        'ram_hot_plug' => 'bool',
        'ram_hot_unplug' => 'bool',
        'nic_hot_plug' => 'bool',
        'nic_hot_unplug' => 'bool',
        'disc_virtio_hot_plug' => 'bool',
        'disc_virtio_hot_unplug' => 'bool',
        'disc_scsi_hot_plug' => 'bool',
        'disc_scsi_hot_unplug' => 'bool',
        'licence_type' => 'string'
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
        'description' => 'description',
        'location' => 'location',
        'size' => 'size',
        'cpu_hot_plug' => 'cpuHotPlug',
        'cpu_hot_unplug' => 'cpuHotUnplug',
        'ram_hot_plug' => 'ramHotPlug',
        'ram_hot_unplug' => 'ramHotUnplug',
        'nic_hot_plug' => 'nicHotPlug',
        'nic_hot_unplug' => 'nicHotUnplug',
        'disc_virtio_hot_plug' => 'discVirtioHotPlug',
        'disc_virtio_hot_unplug' => 'discVirtioHotUnplug',
        'disc_scsi_hot_plug' => 'discScsiHotPlug',
        'disc_scsi_hot_unplug' => 'discScsiHotUnplug',
        'licence_type' => 'licenceType'
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
        'description' => 'setDescription',
        'location' => 'setLocation',
        'size' => 'setSize',
        'cpu_hot_plug' => 'setCpuHotPlug',
        'cpu_hot_unplug' => 'setCpuHotUnplug',
        'ram_hot_plug' => 'setRamHotPlug',
        'ram_hot_unplug' => 'setRamHotUnplug',
        'nic_hot_plug' => 'setNicHotPlug',
        'nic_hot_unplug' => 'setNicHotUnplug',
        'disc_virtio_hot_plug' => 'setDiscVirtioHotPlug',
        'disc_virtio_hot_unplug' => 'setDiscVirtioHotUnplug',
        'disc_scsi_hot_plug' => 'setDiscScsiHotPlug',
        'disc_scsi_hot_unplug' => 'setDiscScsiHotUnplug',
        'licence_type' => 'setLicenceType'
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
        'description' => 'getDescription',
        'location' => 'getLocation',
        'size' => 'getSize',
        'cpu_hot_plug' => 'getCpuHotPlug',
        'cpu_hot_unplug' => 'getCpuHotUnplug',
        'ram_hot_plug' => 'getRamHotPlug',
        'ram_hot_unplug' => 'getRamHotUnplug',
        'nic_hot_plug' => 'getNicHotPlug',
        'nic_hot_unplug' => 'getNicHotUnplug',
        'disc_virtio_hot_plug' => 'getDiscVirtioHotPlug',
        'disc_virtio_hot_unplug' => 'getDiscVirtioHotUnplug',
        'disc_scsi_hot_plug' => 'getDiscScsiHotPlug',
        'disc_scsi_hot_unplug' => 'getDiscScsiHotUnplug',
        'licence_type' => 'getLicenceType'
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
      * $description Human readable description
      * @var string
      */
    protected $description;
    
    /**
      * $location Location of that image/snapshot. 
      * @var string
      */
    protected $location;
    
    /**
      * $size The size of the image in GB
      * @var double
      */
    protected $size;
    
    /**
      * $cpu_hot_plug Is capable of CPU hot plug (no reboot required)
      * @var bool
      */
    protected $cpu_hot_plug = false;
    
    /**
      * $cpu_hot_unplug Is capable of CPU hot unplug (no reboot required)
      * @var bool
      */
    protected $cpu_hot_unplug = false;
    
    /**
      * $ram_hot_plug Is capable of memory hot plug (no reboot required)
      * @var bool
      */
    protected $ram_hot_plug = false;
    
    /**
      * $ram_hot_unplug Is capable of memory hot unplug (no reboot required)
      * @var bool
      */
    protected $ram_hot_unplug = false;
    
    /**
      * $nic_hot_plug Is capable of nic hot plug (no reboot required)
      * @var bool
      */
    protected $nic_hot_plug = false;
    
    /**
      * $nic_hot_unplug Is capable of nic hot unplug (no reboot required)
      * @var bool
      */
    protected $nic_hot_unplug = false;
    
    /**
      * $disc_virtio_hot_plug Is capable of Virt-IO drive hot plug (no reboot required)
      * @var bool
      */
    protected $disc_virtio_hot_plug = false;
    
    /**
      * $disc_virtio_hot_unplug Is capable of Virt-IO drive hot unplug (no reboot required)
      * @var bool
      */
    protected $disc_virtio_hot_unplug = false;
    
    /**
      * $disc_scsi_hot_plug Is capable of SCSI drive hot plug (no reboot required)
      * @var bool
      */
    protected $disc_scsi_hot_plug = false;
    
    /**
      * $disc_scsi_hot_unplug Is capable of SCSI drive hot unplug (no reboot required)
      * @var bool
      */
    protected $disc_scsi_hot_unplug = false;
    
    /**
      * $licence_type OS type of this Snapshot
      * @var string
      */
    protected $licence_type;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        if ($data != null) {
            $this->name = $data["name"];
            $this->description = $data["description"];
            $this->location = $data["location"];
            $this->size = $data["size"];
            $this->cpu_hot_plug = $data["cpu_hot_plug"];
            $this->cpu_hot_unplug = $data["cpu_hot_unplug"];
            $this->ram_hot_plug = $data["ram_hot_plug"];
            $this->ram_hot_unplug = $data["ram_hot_unplug"];
            $this->nic_hot_plug = $data["nic_hot_plug"];
            $this->nic_hot_unplug = $data["nic_hot_unplug"];
            $this->disc_virtio_hot_plug = $data["disc_virtio_hot_plug"];
            $this->disc_virtio_hot_unplug = $data["disc_virtio_hot_unplug"];
            $this->disc_scsi_hot_plug = $data["disc_scsi_hot_plug"];
            $this->disc_scsi_hot_unplug = $data["disc_scsi_hot_unplug"];
            $this->licence_type = $data["licence_type"];
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
     * Gets description
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }
  
    /**
     * Sets description
     * @param string $description Human readable description
     * @return $this
     */
    public function setDescription($description)
    {
        
        $this->description = $description;
        return $this;
    }
    
    /**
     * Gets location
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }
  
    /**
     * Sets location
     * @param string $location Location of that image/snapshot. 
     * @return $this
     */
    public function setLocation($location)
    {
        
        $this->location = $location;
        return $this;
    }
    
    /**
     * Gets size
     * @return double
     */
    public function getSize()
    {
        return $this->size;
    }
  
    /**
     * Sets size
     * @param double $size The size of the image in GB
     * @return $this
     */
    public function setSize($size)
    {
        
        $this->size = $size;
        return $this;
    }
    
    /**
     * Gets cpu_hot_plug
     * @return bool
     */
    public function getCpuHotPlug()
    {
        return $this->cpu_hot_plug;
    }
  
    /**
     * Sets cpu_hot_plug
     * @param bool $cpu_hot_plug Is capable of CPU hot plug (no reboot required)
     * @return $this
     */
    public function setCpuHotPlug($cpu_hot_plug)
    {
        
        $this->cpu_hot_plug = $cpu_hot_plug;
        return $this;
    }
    
    /**
     * Gets cpu_hot_unplug
     * @return bool
     */
    public function getCpuHotUnplug()
    {
        return $this->cpu_hot_unplug;
    }
  
    /**
     * Sets cpu_hot_unplug
     * @param bool $cpu_hot_unplug Is capable of CPU hot unplug (no reboot required)
     * @return $this
     */
    public function setCpuHotUnplug($cpu_hot_unplug)
    {
        
        $this->cpu_hot_unplug = $cpu_hot_unplug;
        return $this;
    }
    
    /**
     * Gets ram_hot_plug
     * @return bool
     */
    public function getRamHotPlug()
    {
        return $this->ram_hot_plug;
    }
  
    /**
     * Sets ram_hot_plug
     * @param bool $ram_hot_plug Is capable of memory hot plug (no reboot required)
     * @return $this
     */
    public function setRamHotPlug($ram_hot_plug)
    {
        
        $this->ram_hot_plug = $ram_hot_plug;
        return $this;
    }
    
    /**
     * Gets ram_hot_unplug
     * @return bool
     */
    public function getRamHotUnplug()
    {
        return $this->ram_hot_unplug;
    }
  
    /**
     * Sets ram_hot_unplug
     * @param bool $ram_hot_unplug Is capable of memory hot unplug (no reboot required)
     * @return $this
     */
    public function setRamHotUnplug($ram_hot_unplug)
    {
        
        $this->ram_hot_unplug = $ram_hot_unplug;
        return $this;
    }
    
    /**
     * Gets nic_hot_plug
     * @return bool
     */
    public function getNicHotPlug()
    {
        return $this->nic_hot_plug;
    }
  
    /**
     * Sets nic_hot_plug
     * @param bool $nic_hot_plug Is capable of nic hot plug (no reboot required)
     * @return $this
     */
    public function setNicHotPlug($nic_hot_plug)
    {
        
        $this->nic_hot_plug = $nic_hot_plug;
        return $this;
    }
    
    /**
     * Gets nic_hot_unplug
     * @return bool
     */
    public function getNicHotUnplug()
    {
        return $this->nic_hot_unplug;
    }
  
    /**
     * Sets nic_hot_unplug
     * @param bool $nic_hot_unplug Is capable of nic hot unplug (no reboot required)
     * @return $this
     */
    public function setNicHotUnplug($nic_hot_unplug)
    {
        
        $this->nic_hot_unplug = $nic_hot_unplug;
        return $this;
    }
    
    /**
     * Gets disc_virtio_hot_plug
     * @return bool
     */
    public function getDiscVirtioHotPlug()
    {
        return $this->disc_virtio_hot_plug;
    }
  
    /**
     * Sets disc_virtio_hot_plug
     * @param bool $disc_virtio_hot_plug Is capable of Virt-IO drive hot plug (no reboot required)
     * @return $this
     */
    public function setDiscVirtioHotPlug($disc_virtio_hot_plug)
    {
        
        $this->disc_virtio_hot_plug = $disc_virtio_hot_plug;
        return $this;
    }
    
    /**
     * Gets disc_virtio_hot_unplug
     * @return bool
     */
    public function getDiscVirtioHotUnplug()
    {
        return $this->disc_virtio_hot_unplug;
    }
  
    /**
     * Sets disc_virtio_hot_unplug
     * @param bool $disc_virtio_hot_unplug Is capable of Virt-IO drive hot unplug (no reboot required)
     * @return $this
     */
    public function setDiscVirtioHotUnplug($disc_virtio_hot_unplug)
    {
        
        $this->disc_virtio_hot_unplug = $disc_virtio_hot_unplug;
        return $this;
    }
    
    /**
     * Gets disc_scsi_hot_plug
     * @return bool
     */
    public function getDiscScsiHotPlug()
    {
        return $this->disc_scsi_hot_plug;
    }
  
    /**
     * Sets disc_scsi_hot_plug
     * @param bool $disc_scsi_hot_plug Is capable of SCSI drive hot plug (no reboot required)
     * @return $this
     */
    public function setDiscScsiHotPlug($disc_scsi_hot_plug)
    {
        
        $this->disc_scsi_hot_plug = $disc_scsi_hot_plug;
        return $this;
    }
    
    /**
     * Gets disc_scsi_hot_unplug
     * @return bool
     */
    public function getDiscScsiHotUnplug()
    {
        return $this->disc_scsi_hot_unplug;
    }
  
    /**
     * Sets disc_scsi_hot_unplug
     * @param bool $disc_scsi_hot_unplug Is capable of SCSI drive hot unplug (no reboot required)
     * @return $this
     */
    public function setDiscScsiHotUnplug($disc_scsi_hot_unplug)
    {
        
        $this->disc_scsi_hot_unplug = $disc_scsi_hot_unplug;
        return $this;
    }
    
    /**
     * Gets licence_type
     * @return string
     */
    public function getLicenceType()
    {
        return $this->licence_type;
    }
  
    /**
     * Sets licence_type
     * @param string $licence_type OS type of this Snapshot
     * @return $this
     */
    public function setLicenceType($licence_type)
    {
        $allowed_values = array("UNKNOWN", "WINDOWS", "LINUX", "OTHER");
        if (!in_array($licence_type, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'licence_type', must be one of 'UNKNOWN', 'WINDOWS', 'LINUX', 'OTHER'");
        }
        $this->licence_type = $licence_type;
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
