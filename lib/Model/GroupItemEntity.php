<?php
/**
 * GroupItemEntity
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
 * GroupItemEntity Class Doc Comment
 *
 * @category    Class
 * @description
 * @package     ProfitBricks\Client
 * @author      http://github.com/ProfitBricks-api/ProfitBricks-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/ProfitBricks-api/ProfitBricks-codegen
 */
class GroupItemEntity implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    static $ProfitBricksTypes = array(
        'users' => '\ProfitBricks\Client\Model\GroupItemUser',
        'resources' => '\ProfitBricks\Client\Model\GroupItemResource'
    );

    static function ProfitBricksTypes() {
        return self::$ProfitBricksTypes;
    }

    /**
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[]
      */
    static $attributeMap = array(
        'users' => 'users',
        'resources' => 'resources'
    );

    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
      'users' => 'setUsers',
      'resources' => 'setResources'
    );

    static function setters() {
        return self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
      'users' => 'getUsers',
      'resources' => 'getResources'
    );

    static function getters() {
        return self::$getters;
    }


    /**
      * $users A collection of users that belong to this group.
      * @var \ProfitBricks\Client\Model\GroupItemUser
      */
    protected $users;

    /**
      * $resources A collection of resources that are assigned to this group.
      * @var \ProfitBricks\Client\Model\GroupItemResource
      */
    protected $resources;


    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {

        if ($data != null) {
            $this->users = $data["users"];
            $this->resources = $data["resources"];
        }
    }

    /**
     * Gets users
     * @return \ProfitBricks\Client\Model\GroupItemUser
     */
    public function getUsers()
    {
        return $this->users;
    }

    /**
     * Sets users
     * @param \ProfitBricks\Client\Model\GroupItemUser $users A collection of users that belong to this group.
     * @return $this
     */
    public function setUsers($users)
    {

        $this->users = $users;
        return $this;
    }


    /**
     * Gets resources
     * @return \ProfitBricks\Client\Model\GroupItemResource
     */
    public function getResources()
    {
        return $this->resources;
    }

    /**
     * Sets resources
     * @param \ProfitBricks\Client\Model\GroupItemResource $resources A collection of resources that are assigned to this group.
     * @return $this
     */
    public function setResources($resources)
    {

        $this->resources = $resources;
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
