<?php
/**
 * RequestProperties
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
 * RequestProperties Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     ProfitBricks\Client
 * @author      http://github.com/ProfitBricks-api/ProfitBricks-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/ProfitBricks-api/ProfitBricks-codegen
 */
class RequestProperties implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $ProfitBricksTypes = array(
        'method' => 'string',
        'headers' => 'map[string,string]',
        'body' => 'string',
        'url' => 'string'
    );
  
    static function ProfitBricksTypes() {
        return self::$ProfitBricksTypes;
    }

    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'method' => 'method',
        'headers' => 'headers',
        'body' => 'body',
        'url' => 'url'
    );
  
    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'method' => 'setMethod',
        'headers' => 'setHeaders',
        'body' => 'setBody',
        'url' => 'setUrl'
    );
  
    static function setters() {
        return self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'method' => 'getMethod',
        'headers' => 'getHeaders',
        'body' => 'getBody',
        'url' => 'getUrl'
    );
  
    static function getters() {
        return self::$getters;
    }

    
    /**
      * $method 
      * @var string
      */
    protected $method;
    
    /**
      * $headers 
      * @var map[string,string]
      */
    protected $headers;
    
    /**
      * $body 
      * @var string
      */
    protected $body;
    
    /**
      * $url 
      * @var string
      */
    protected $url;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        if ($data != null) {
            $this->method = $data["method"];
            $this->headers = $data["headers"];
            $this->body = $data["body"];
            $this->url = $data["url"];
        }
    }
    
    /**
     * Gets method
     * @return string
     */
    public function getMethod()
    {
        return $this->method;
    }
  
    /**
     * Sets method
     * @param string $method 
     * @return $this
     */
    public function setMethod($method)
    {
        
        $this->method = $method;
        return $this;
    }
    
    /**
     * Gets headers
     * @return map[string,string]
     */
    public function getHeaders()
    {
        return $this->headers;
    }
  
    /**
     * Sets headers
     * @param map[string,string] $headers 
     * @return $this
     */
    public function setHeaders($headers)
    {
        
        $this->headers = $headers;
        return $this;
    }
    
    /**
     * Gets body
     * @return string
     */
    public function getBody()
    {
        return $this->body;
    }
  
    /**
     * Sets body
     * @param string $body 
     * @return $this
     */
    public function setBody($body)
    {
        
        $this->body = $body;
        return $this;
    }
    
    /**
     * Gets url
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }
  
    /**
     * Sets url
     * @param string $url 
     * @return $this
     */
    public function setUrl($url)
    {
        
        $this->url = $url;
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
