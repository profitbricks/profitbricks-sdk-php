<?php
/**
 * LanProperties
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
 * LanProperties Class Doc Comment
 *
 * @category    Class
 * @description
 * @package     ProfitBricks\Client
 * @author      http://github.com/ProfitBricks-api/ProfitBricks-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/ProfitBricks-api/ProfitBricks-codegen
 */
class LanProperties implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    static $ProfitBricksTypes = array(
        'name' => 'string',
        'ipFailover' => '\ProfitBricks\Client\Model\IpFailover[]',
        'public' => 'bool'
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
        'ipFailover' => 'ipFailover',
        'public' => 'public'
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
        'ipFailover' => 'setIpFailover',
        'public' => 'setPublic'
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
        'ipFailover' => 'getIpFailover',
        'public' => 'getPublic'
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
      * $ipFailover Attributes related to IP failover groups.
      * @var array
      */
    protected $ipFailover;

    /**
      * $public Does this LAN faces the public Internet or not
      * @var bool
      */
    protected $public = false;


    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {

        if ($data != null) {
            $this->name = $data["name"];
            $this->ipFailover = $data["ipFailover"];
            $this->public = $data["public"];
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
     * Gets ipFailover
     * @return string
     */
    public function getIpFailover()
    {
        return $this->ipFailover;
    }

    /**
     * Sets ipFailover
     * @param string $ipFailover Attributes related to IP failover groups.
     * @return $this
     */
    public function setIpFailover($ipFailover)
    {

        $this->ipFailover = $ipFailover;
        return $this;
    }

    /**
     * Gets public
     * @return bool
     */
    public function getPublic()
    {
        return $this->public;
    }

    /**
     * Sets public
     * @param bool $public Does this LAN faces the public Internet or not
     * @return $this
     */
    public function setPublic($public)
    {

        $this->public = $public;
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
