<?php
/**
 * ServerProperties
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
 * ServerProperties Class Doc Comment
 *
 * @category    Class
 * @description
 * @package     ProfitBricks\Client
 * @author      http://github.com/ProfitBricks-api/ProfitBricks-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/ProfitBricks-api/ProfitBricks-codegen
 */
class ServerProperties implements ArrayAccess
{
    /**
     * Array of property to type mappings. Used for (de)serialization
     * @var string[]
     */
    static $ProfitBricksTypes = array(
        'name' => 'string',
        'cores' => 'int',
        'ram' => 'int',
        'availability_zone' => 'string',
        'vm_state' => 'string',
        'cpu_family' => 'string',
        'boot_cdrom' => '\ProfitBricks\Client\Model\ResourceReference',
        'boot_volume' => '\ProfitBricks\Client\Model\ResourceReference'
    );
    
    static function ProfitBricksTypes()
    {
        return self::$ProfitBricksTypes;
    }
    
    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    static $attributeMap = array(
        'name' => 'name',
        'cores' => 'cores',
        'ram' => 'ram',
        'availability_zone' => 'availabilityZone',
        'vm_state' => 'vmState',
        'boot_cdrom' => 'bootCdrom',
        'boot_volume' => 'bootVolume',
        'cpu_family' => 'cpuFamily'
    );
    
    static function attributeMap()
    {
        return self::$attributeMap;
    }
    
    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    static $setters = array(
        'name' => 'setName',
        'cores' => 'setCores',
        'ram' => 'setRam',
        'availability_zone' => 'setAvailabilityZone',
        'vm_state' => 'setVmState',
        'boot_cdrom' => 'setBootCdrom',
        'boot_volume' => 'setBootVolume',
        'cpu_family' => 'setCpuFamily'
    );
    
    static function setters()
    {
        return self::$setters;
    }
    
    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    static $getters = array(
        'name' => 'getName',
        'cores' => 'getCores',
        'ram' => 'getRam',
        'availability_zone' => 'getAvailabilityZone',
        'vm_state' => 'getVmState',
        'boot_cdrom' => 'getBootCdrom',
        'boot_volume' => 'getBootVolume',
        'cpu_family' => 'getCpuFamily'
    );
    
    static function getters()
    {
        return self::$getters;
    }
    
    
    /**
     * $name A name of that resource
     * @var string
     */
    protected $name;
    
    /**
     * $cores The total number of cores for the server
     * @var int
     */
    protected $cores;
    
    /**
     * $ram The amount of memory for the server in MB, e.g. 2048. Size must be specified in multiples of 256 MB with a minimum of 256 MB; however, if you set ramHotPlug to TRUE then you must use a minimum of 1024 MB
     * @var int
     */
    protected $ram;
    
    /**
     * $availability_zone The availability zone in which the server should exist
     * @var string
     */
    protected $availability_zone;
    
    /**
     * $vm_state Status of the virtual Machine
     * @var string
     */
    protected $vm_state;
    
    /**
     * $boot_cdrom Reference to a CD-ROM used for booting. If not 'null' then bootVolume has to be 'null'
     * @var \ProfitBricks\Client\Model\ResourceReference
     */
    protected $boot_cdrom;
    
    /**
     * $boot_volume Reference to a Volume used for booting. If not 'null' then bootCdrom has to be 'null'
     * @var \ProfitBricks\Client\Model\ResourceReference
     */
    protected $boot_volume;
    
    /**
     * $boot_volume Sets the CPU type. "AMD_OPTERON" or "INTEL_XEON". Defaults to "AMD_OPTERON".
     * @var \ProfitBricks\Client\Model\ResourceReference
     */
    protected $cpu_family;
    
    
    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        if ($data != null) {
            $this->name = $data["name"];
            $this->cores = $data["cores"];
            $this->ram = $data["ram"];
            $this->availability_zone = $data["availability_zone"];
            $this->vm_state = $data["vm_state"];
            $this->boot_cdrom = $data["boot_cdrom"];
            $this->boot_volume = $data["boot_volume"];
            $this->cpu_family = $data["cpu_family"];
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
     * Gets cores
     * @return int
     */
    public function getCores()
    {
        return $this->cores;
    }
    
    /**
     * Sets cores
     * @param int $cores The total number of cores for the server
     * @return $this
     */
    public function setCores($cores)
    {
        
        $this->cores = $cores;
        return $this;
    }
    
    /**
     * Gets ram
     * @return int
     */
    public function getRam()
    {
        return $this->ram;
    }
    
    /**
     * Sets ram
     * @param int $ram The amount of memory for the server in MB, e.g. 2048. Size must be specified in multiples of 256 MB with a minimum of 256 MB; however, if you set ramHotPlug to TRUE then you must use a minimum of 1024 MB
     * @return $this
     */
    public function setRam($ram)
    {
        
        $this->ram = $ram;
        return $this;
    }
    
    /**
     * Gets availability_zone
     * @return string
     */
    public function getAvailabilityZone()
    {
        return $this->availability_zone;
    }
    
    /**
     * Sets availability_zone
     * @param string $availability_zone The availability zone in which the server should exist
     * @return $this
     */
    public function setAvailabilityZone($availability_zone)
    {
        $allowed_values = array("AUTO", "ZONE_1", "ZONE_2");
        if (!in_array($availability_zone, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'availability_zone', must be one of 'AUTO', 'ZONE_1', 'ZONE_2'");
        }
        $this->availability_zone = $availability_zone;
        return $this;
    }
    
    /**
     * Gets vm_state
     * @return string
     */
    public function getVmState()
    {
        return $this->vm_state;
    }
    
    /**
     * Sets vm_state
     * @param string $vm_state Status of the virtual Machine
     * @return $this
     */
    public function setVmState($vm_state)
    {
        $allowed_values = array("NOSTATE", "RUNNING", "BLOCKED", "PAUSED", "SHUTDOWN", "SHUTOFF", "CRASHED");
        if (!in_array($vm_state, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'vm_state', must be one of 'NOSTATE', 'RUNNING', 'BLOCKED', 'PAUSED', 'SHUTDOWN', 'SHUTOFF', 'CRASHED'");
        }
        $this->vm_state = $vm_state;
        return $this;
    }
    
    /**
     * Gets boot_cdrom
     * @return \ProfitBricks\Client\Model\ResourceReference
     */
    public function getBootCdrom()
    {
        return $this->boot_cdrom;
    }
    
    /**
     * Sets boot_cdrom
     * @param \ProfitBricks\Client\Model\ResourceReference $boot_cdrom Reference to a CD-ROM used for booting. If not 'null' then bootVolume has to be 'null'
     * @return $this
     */
    public function setBootCdrom($boot_cdrom)
    {
        
        $this->boot_cdrom = $boot_cdrom;
        return $this;
    }
    
    /**
     * Gets boot_volume
     * @return \ProfitBricks\Client\Model\ResourceReference
     */
    public function getBootVolume()
    {
        return $this->boot_volume;
    }
    
    /**
     * Sets boot_volume
     * @param \ProfitBricks\Client\Model\ResourceReference $boot_volume Reference to a Volume used for booting. If not 'null' then bootCdrom has to be 'null'
     * @return $this
     */
    public function setBootVolume($boot_volume)
    {
        
        $this->boot_volume = $boot_volume;
        return $this;
    }
    
    /**
     * Gets boot_volume
     * @return \ProfitBricks\Client\Model\ResourceReference
     */
    public function getCpuFamily()
    {
        return $this->cpu_family;
    }
    
    /**
     * Sets boot_volume
     * @param \ProfitBricks\Client\Model\ResourceReference  the CPU type. "AMD_OPTERON" or "INTEL_XEON". Defaults to "AMD_OPTERON".
     * @return $this
     */
    public function setCpuFamily($cpu_family)
    {
        $allowed_values = array("AMD_OPTERON", "INTEL_XEON");
        if (!in_array($cpu_family, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'vm_state', must be one of 'AMD_OPTERON', 'INTEL_XEON'");
        }
        $this->cpu_family = $cpu_family;
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
     * @param  mixed $value Value to be set
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
