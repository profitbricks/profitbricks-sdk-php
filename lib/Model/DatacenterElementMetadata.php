<?php
/**
 * DatacenterElementMetadata
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
 * DatacenterElementMetadata Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     ProfitBricks\Client
 * @author      http://github.com/ProfitBricks-api/ProfitBricks-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/ProfitBricks-api/ProfitBricks-codegen
 */
class DatacenterElementMetadata implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $ProfitBricksTypes = array(
        'created_date' => '\DateTime',
        'created_by' => 'string',
        'etag' => 'string',
        'last_modified_date' => '\DateTime',
        'last_modified_by' => 'string',
        'state' => 'string'
    );
  
    static function ProfitBricksTypes() {
        return self::$ProfitBricksTypes;
    }

    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'created_date' => 'createdDate',
        'created_by' => 'createdBy',
        'etag' => 'etag',
        'last_modified_date' => 'lastModifiedDate',
        'last_modified_by' => 'lastModifiedBy',
        'state' => 'state'
    );
  
    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'created_date' => 'setCreatedDate',
        'created_by' => 'setCreatedBy',
        'etag' => 'setEtag',
        'last_modified_date' => 'setLastModifiedDate',
        'last_modified_by' => 'setLastModifiedBy',
        'state' => 'setState'
    );
  
    static function setters() {
        return self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'created_date' => 'getCreatedDate',
        'created_by' => 'getCreatedBy',
        'etag' => 'getEtag',
        'last_modified_date' => 'getLastModifiedDate',
        'last_modified_by' => 'getLastModifiedBy',
        'state' => 'getState'
    );
  
    static function getters() {
        return self::$getters;
    }

    
    /**
      * $created_date The last time the resource was created
      * @var \DateTime
      */
    protected $created_date;
    
    /**
      * $created_by The user who created the resource.
      * @var string
      */
    protected $created_by;
    
    /**
      * $etag Resource's Entity Tag as defined in http://www.w3.org/Protocols/rfc2616/rfc2616-sec3.html#sec3.11 . Entity Tag is also added as an 'ETag response header to requests which don't use 'depth' parameter. 
      * @var string
      */
    protected $etag;
    
    /**
      * $last_modified_date The last time the resource has been modified
      * @var \DateTime
      */
    protected $last_modified_date;
    
    /**
      * $last_modified_by The user who last modified the resource.
      * @var string
      */
    protected $last_modified_by;
    
    /**
      * $state State of the resource. *AVAILABLE* There are no pending modification requests for this item; *BUSY* There is at least one modification request pending and all following requests will be queued; *INACTIVE* Resource has been de-provisioned.
      * @var string
      */
    protected $state;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        if ($data != null) {
            $this->created_date = $data["created_date"];
            $this->created_by = $data["created_by"];
            $this->etag = $data["etag"];
            $this->last_modified_date = $data["last_modified_date"];
            $this->last_modified_by = $data["last_modified_by"];
            $this->state = $data["state"];
        }
    }
    
    /**
     * Gets created_date
     * @return \DateTime
     */
    public function getCreatedDate()
    {
        return $this->created_date;
    }
  
    /**
     * Sets created_date
     * @param \DateTime $created_date The last time the resource was created
     * @return $this
     */
    public function setCreatedDate($created_date)
    {
        
        $this->created_date = $created_date;
        return $this;
    }
    
    /**
     * Gets created_by
     * @return string
     */
    public function getCreatedBy()
    {
        return $this->created_by;
    }
  
    /**
     * Sets created_by
     * @param string $created_by The user who created the resource.
     * @return $this
     */
    public function setCreatedBy($created_by)
    {
        
        $this->created_by = $created_by;
        return $this;
    }
    
    /**
     * Gets etag
     * @return string
     */
    public function getEtag()
    {
        return $this->etag;
    }
  
    /**
     * Sets etag
     * @param string $etag Resource's Entity Tag as defined in http://www.w3.org/Protocols/rfc2616/rfc2616-sec3.html#sec3.11 . Entity Tag is also added as an 'ETag response header to requests which don't use 'depth' parameter. 
     * @return $this
     */
    public function setEtag($etag)
    {
        
        $this->etag = $etag;
        return $this;
    }
    
    /**
     * Gets last_modified_date
     * @return \DateTime
     */
    public function getLastModifiedDate()
    {
        return $this->last_modified_date;
    }
  
    /**
     * Sets last_modified_date
     * @param \DateTime $last_modified_date The last time the resource has been modified
     * @return $this
     */
    public function setLastModifiedDate($last_modified_date)
    {
        
        $this->last_modified_date = $last_modified_date;
        return $this;
    }
    
    /**
     * Gets last_modified_by
     * @return string
     */
    public function getLastModifiedBy()
    {
        return $this->last_modified_by;
    }
  
    /**
     * Sets last_modified_by
     * @param string $last_modified_by The user who last modified the resource.
     * @return $this
     */
    public function setLastModifiedBy($last_modified_by)
    {
        
        $this->last_modified_by = $last_modified_by;
        return $this;
    }
    
    /**
     * Gets state
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }
  
    /**
     * Sets state
     * @param string $state State of the resource. *AVAILABLE* There are no pending modification requests for this item; *BUSY* There is at least one modification request pending and all following requests will be queued; *INACTIVE* Resource has been de-provisioned.
     * @return $this
     */
    public function setState($state)
    {
        $allowed_values = array("AVAILABLE", "INACTIVE", "BUSY");
        if (!in_array($state, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'state', must be one of 'AVAILABLE', 'INACTIVE', 'BUSY'");
        }
        $this->state = $state;
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
