<?php
/**
 * FirewalluleProperties
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
 * FirewalluleProperties Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     ProfitBricks\Client
 * @author      http://github.com/ProfitBricks-api/ProfitBricks-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/ProfitBricks-api/ProfitBricks-codegen
 */
class FirewalluleProperties implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $ProfitBricksTypes = array(
        'name' => 'string',
        'protocol' => 'string',
        'source_mac' => 'string',
        'source_ip' => 'string',
        'target_ip' => 'string',
        'icmp_code' => 'int',
        'icmp_type' => 'int',
        'port_range_start' => 'int',
        'port_range_end' => 'int'
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
        'protocol' => 'protocol',
        'source_mac' => 'sourceMac',
        'source_ip' => 'sourceIp',
        'target_ip' => 'targetIp',
        'icmp_code' => 'icmpCode',
        'icmp_type' => 'icmpType',
        'port_range_start' => 'portRangeStart',
        'port_range_end' => 'portRangeEnd'
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
        'protocol' => 'setProtocol',
        'source_mac' => 'setSourceMac',
        'source_ip' => 'setSourceIp',
        'target_ip' => 'setTargetIp',
        'icmp_code' => 'setIcmpCode',
        'icmp_type' => 'setIcmpType',
        'port_range_start' => 'setPortRangeStart',
        'port_range_end' => 'setPortRangeEnd'
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
        'protocol' => 'getProtocol',
        'source_mac' => 'getSourceMac',
        'source_ip' => 'getSourceIp',
        'target_ip' => 'getTargetIp',
        'icmp_code' => 'getIcmpCode',
        'icmp_type' => 'getIcmpType',
        'port_range_start' => 'getPortRangeStart',
        'port_range_end' => 'getPortRangeEnd'
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
      * $protocol The protocol for the rule. Property cannot be modified after creation (disallowed in update requests)
      * @var string
      */
    protected $protocol;
    
    /**
      * $source_mac Only traffic originating from the respective MAC address is allowed. Valid format: aa:bb:cc:dd:ee:ff. Value null allows all source MAC address
      * @var string
      */
    protected $source_mac;
    
    /**
      * $source_ip Only traffic originating from the respective IPv4 address is allowed. Value null allows all source IPs
      * @var string
      */
    protected $source_ip;
    
    /**
      * $target_ip In case the target NIC has multiple IP addresses, only traffic directed to the respective IP address of the NIC is allowed. Value null allows all target IPs
      * @var string
      */
    protected $target_ip;
    
    /**
      * $icmp_code Defines the allowed code (from 0 to 254) if protocol ICMP is chosen. Value null allows all codes
      * @var int
      */
    protected $icmp_code;
    
    /**
      * $icmp_type Defines the allowed type (from 0 to 254) if the protocol ICMP is chosen. Value null allows all types
      * @var int
      */
    protected $icmp_type;
    
    /**
      * $port_range_start Defines the start range of the allowed port (from 1 to 65534) if protocol TCP or UDP is chosen. Leave portRangeStart and portRangeEnd value null to allow all ports
      * @var int
      */
    protected $port_range_start;
    
    /**
      * $port_range_end Defines the end range of the allowed port (from 1 to 65534) if the protocol TCP or UDP is chosen. Leave portRangeStart and portRangeEnd null to allow all ports
      * @var int
      */
    protected $port_range_end;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        if ($data != null) {
            $this->name = $data["name"];
            $this->protocol = $data["protocol"];
            $this->source_mac = $data["source_mac"];
            $this->source_ip = $data["source_ip"];
            $this->target_ip = $data["target_ip"];
            $this->icmp_code = $data["icmp_code"];
            $this->icmp_type = $data["icmp_type"];
            $this->port_range_start = $data["port_range_start"];
            $this->port_range_end = $data["port_range_end"];
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
     * Gets protocol
     * @return string
     */
    public function getProtocol()
    {
        return $this->protocol;
    }
  
    /**
     * Sets protocol
     * @param string $protocol The protocol for the rule. Property cannot be modified after creation (disallowed in update requests)
     * @return $this
     */
    public function setProtocol($protocol)
    {
        $allowed_values = array("TCP", "UDP", "ICMP", "ANY");
        if (!in_array($protocol, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'protocol', must be one of 'TCP', 'UDP', 'ICMP', 'ANY'");
        }
        $this->protocol = $protocol;
        return $this;
    }
    
    /**
     * Gets source_mac
     * @return string
     */
    public function getSourceMac()
    {
        return $this->source_mac;
    }
  
    /**
     * Sets source_mac
     * @param string $source_mac Only traffic originating from the respective MAC address is allowed. Valid format: aa:bb:cc:dd:ee:ff. Value null allows all source MAC address
     * @return $this
     */
    public function setSourceMac($source_mac)
    {
        $allowed_values = array("@Valid MAC address@", "null");
        if (!in_array($source_mac, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'source_mac', must be one of '@Valid MAC address@', 'null'");
        }
        $this->source_mac = $source_mac;
        return $this;
    }
    
    /**
     * Gets source_ip
     * @return string
     */
    public function getSourceIp()
    {
        return $this->source_ip;
    }
  
    /**
     * Sets source_ip
     * @param string $source_ip Only traffic originating from the respective IPv4 address is allowed. Value null allows all source IPs
     * @return $this
     */
    public function setSourceIp($source_ip)
    {
        $allowed_values = array("@Valid IP address@", "null");
        if (!in_array($source_ip, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'source_ip', must be one of '@Valid IP address@', 'null'");
        }
        $this->source_ip = $source_ip;
        return $this;
    }
    
    /**
     * Gets target_ip
     * @return string
     */
    public function getTargetIp()
    {
        return $this->target_ip;
    }
  
    /**
     * Sets target_ip
     * @param string $target_ip In case the target NIC has multiple IP addresses, only traffic directed to the respective IP address of the NIC is allowed. Value null allows all target IPs
     * @return $this
     */
    public function setTargetIp($target_ip)
    {
        $allowed_values = array("@Valid IP address@", "null");
        if (!in_array($target_ip, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'target_ip', must be one of '@Valid IP address@', 'null'");
        }
        $this->target_ip = $target_ip;
        return $this;
    }
    
    /**
     * Gets icmp_code
     * @return int
     */
    public function getIcmpCode()
    {
        return $this->icmp_code;
    }
  
    /**
     * Sets icmp_code
     * @param int $icmp_code Defines the allowed code (from 0 to 254) if protocol ICMP is chosen. Value null allows all codes
     * @return $this
     */
    public function setIcmpCode($icmp_code)
    {
        
        $this->icmp_code = $icmp_code;
        return $this;
    }
    
    /**
     * Gets icmp_type
     * @return int
     */
    public function getIcmpType()
    {
        return $this->icmp_type;
    }
  
    /**
     * Sets icmp_type
     * @param int $icmp_type Defines the allowed type (from 0 to 254) if the protocol ICMP is chosen. Value null allows all types
     * @return $this
     */
    public function setIcmpType($icmp_type)
    {
        
        $this->icmp_type = $icmp_type;
        return $this;
    }
    
    /**
     * Gets port_range_start
     * @return int
     */
    public function getPortRangeStart()
    {
        return $this->port_range_start;
    }
  
    /**
     * Sets port_range_start
     * @param int $port_range_start Defines the start range of the allowed port (from 1 to 65534) if protocol TCP or UDP is chosen. Leave portRangeStart and portRangeEnd value null to allow all ports
     * @return $this
     */
    public function setPortRangeStart($port_range_start)
    {
        
        $this->port_range_start = $port_range_start;
        return $this;
    }
    
    /**
     * Gets port_range_end
     * @return int
     */
    public function getPortRangeEnd()
    {
        return $this->port_range_end;
    }
  
    /**
     * Sets port_range_end
     * @param int $port_range_end Defines the end range of the allowed port (from 1 to 65534) if the protocol TCP or UDP is chosen. Leave portRangeStart and portRangeEnd null to allow all ports
     * @return $this
     */
    public function setPortRangeEnd($port_range_end)
    {
        
        $this->port_range_end = $port_range_end;
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
