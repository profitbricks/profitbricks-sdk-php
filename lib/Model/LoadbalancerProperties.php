<?php
/**
 * LoadbalancerProperties
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
 * LoadbalancerProperties Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     ProfitBricks\Client
 * @author      http://github.com/ProfitBricks-api/ProfitBricks-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/ProfitBricks-api/ProfitBricks-codegen
 */
class LoadbalancerProperties implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $ProfitBricksTypes = array(
        'name' => 'string',
        'ip' => 'string',
        'dhcp' => 'bool'
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
        'ip' => 'ip',
        'dhcp' => 'dhcp'
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
        'ip' => 'setIp',
        'dhcp' => 'setDhcp'
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
        'ip' => 'getIp',
        'dhcp' => 'getDhcp'
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
      * $ip IPv4 address of the loadbalancer. All attached NICs will inherit this IP. Leaving value null will assign IP automatically
      * @var string
      */
    protected $ip;
    
    /**
      * $dhcp Indicates if the loadbalancer will reserve an IP using DHCP
      * @var bool
      */
    protected $dhcp = false;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        if ($data != null) {
            $this->name = $data["name"];
            $this->ip = $data["ip"];
            $this->dhcp = $data["dhcp"];
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
     * Gets ip
     * @return string
     */
    public function getIp()
    {
        return $this->ip;
    }
  
    /**
     * Sets ip
     * @param string $ip IPv4 address of the loadbalancer. All attached NICs will inherit this IP. Leaving value null will assign IP automatically
     * @return $this
     */
    public function setIp($ip)
    {
        $allowed_values = array("@Valid IP address@", "null");
        if (!in_array($ip, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'ip', must be one of '@Valid IP address@', 'null'");
        }
        $this->ip = $ip;
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
     * @param bool $dhcp Indicates if the loadbalancer will reserve an IP using DHCP
     * @return $this
     */
    public function setDhcp($dhcp)
    {
        
        $this->dhcp = $dhcp;
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
