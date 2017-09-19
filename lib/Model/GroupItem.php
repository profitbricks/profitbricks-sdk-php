<?php
/**
 * GroupItem
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
 * GroupItem Class Doc Comment
 *
 * @category    Class
 * @description
 * @package     ProfitBricks\Client
 * @author      http://github.com/ProfitBricks-api/ProfitBricks-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/ProfitBricks-api/ProfitBricks-codegen
 */
class GroupItem implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    static $ProfitBricksTypes = array(
        'id' => 'string',
        'type' => 'string',
        'href' => 'string',
        'properties' => '\ProfitBricks\Client\Model\GroupItemProperty',
        'entities' => '\ProfitBricks\Client\Model\GroupItemEntity'
    );

    static function ProfitBricksTypes() {
        return self::$ProfitBricksTypes;
    }

    /**
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[]
      */
    static $attributeMap = array(
        'id' => 'id',
        'type' => 'type',
        'href' => 'href',
        'properties' => 'properties',
        'entities' => 'entities'
    );

    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'id' => 'setId',
        'type' => 'setType',
        'href' => 'setHref',
        'properties' => 'setProperties',
        'entities' => 'setEntities'
    );

    static function setters() {
        return self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
      'id' => 'getId',
      'type' => 'getType',
      'href' => 'getHref',
      'properties' => 'getProperties',
      'entities' => 'getEntities'
    );

    static function getters() {
        return self::$getters;
    }


    /**
      * $id The group's identifier.
      * @var string
      */
    protected $id;

    /**
      * $type The type of response, in this case it will be "group".
      * @var string
      */
    protected $type;

    /**
      * $href A URI for accessing the object.
      * @var string
      */
    protected $href;

    /**
      * $properties A collection containing the group's properties.
      * @var \ProfitBricks\Client\Model\GroupItemProperty
      */
    protected $properties;

    /**
      * $entities A collection containing users and resources associated with the group.
      * @var \ProfitBricks\Client\Model\GroupItemEntity
      */
    protected $entities;


    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {

        if ($data != null) {
            $this->id = $data["id"];
            $this->type = $data["type"];
            $this->href = $data["href"];
            $this->properties = $data["properties"];
            $this->entities = $data["entities"];
        }
    }

    /**
     * Gets id
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets id
     * @param string $id The resource's unique identifier
     * @return $this
     */
    public function setId($id)
    {

        $this->id = $id;
        return $this;
    }


    /**
     * Gets type
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets type
     * @param string $type The type of object that has been created
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }


    /**
     * Gets href
     * @return string
     */
    public function getHref()
    {
        return $this->href;
    }

    /**
     * Sets href
     * @param string $href URL to the object\u2019s representation (absolute path)
     * @return $this
     */
    public function setHref($href)
    {

        $this->href = $href;
        return $this;
    }

    /**
     * Gets properties
     * @return \ProfitBricks\Client\Model\GroupItemProperty
     */
    public function getProperties()
    {
        return $this->properties;
    }

    /**
     * Sets properties
     * @param \ProfitBricks\Client\Model\GroupItemProperty $properties A collection containing the group's properties.
     * @return $this
     */
    public function setProperties($properties)
    {

        $this->properties = $properties;
        return $this;
    }

    /**
     * Gets entities
     * @return \ProfitBricks\Client\Model\GroupItemEntity
     */
    public function getEntities()
    {
        return $this->entities;
    }

    /**
     * Sets entities
     * @param \ProfitBricks\Client\Model\GroupItemEntity $entities A collection containing users and resources associated with the group.
     * @return $this
     */
    public function setEntities($entities)
    {

        $this->entities = $entities;
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