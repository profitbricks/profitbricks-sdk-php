<?php
/**
 * UserEntities
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
 * UserEntities Class Doc Comment
 *
 * @category    Class
 * @description
 * @package     ProfitBricks\Client
 * @author      http://github.com/ProfitBricks-api/ProfitBricks-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/ProfitBricks-api/ProfitBricks-codegen
 */
class UserEntities implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    static $ProfitBricksTypes = array(
        'owns' => '\ProfitBricks\Client\Model\UserEntityOwns',
        'groups' => '\ProfitBricks\Client\Model\UserEntityGroups'
    );

    static function ProfitBricksTypes() {
        return self::$ProfitBricksTypes;
    }

    /**
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[]
      */
    static $attributeMap = array(
        'owns' => 'owns',
        'groups' => 'groups'
    );

    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
      'owns' => 'setOwns',
      'groups' => 'setGroups'
    );

    static function setters() {
        return self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
      'owns' => 'getOwns',
      'groups' => 'getGroups'
    );

    static function getters() {
        return self::$getters;
    }


    /**
      * $owns A collection of resources that this user owns.
      * @var \ProfitBricks\Client\Model\UserEntityOwns
      */
    protected $owns;

    /**
      * $groups A collection of groups that this user is a member of.
      * @var \ProfitBricks\Client\Model\UserEntityGroups
      */
    protected $groups;


    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {

        if ($data != null) {
            $this->owns = $data["owns"];
            $this->groups = $data["groups"];
        }
    }

    /**
     * Gets owns
     * @return \ProfitBricks\Client\Model\UserEntityOwns
     */
    public function getOwns()
    {
        return $this->owns;
    }

    /**
     * Sets owns
     * @param \ProfitBricks\Client\Model\UserEntityOwns $owns A collection of resources that this user owns.
     * @return $this
     */
    public function setOwns($owns)
    {

        $this->owns = $owns;
        return $this;
    }

    /**
     * Gets groups
     * @return \ProfitBricks\Client\Model\UserEntityGroups
     */
    public function getGroups()
    {
        return $this->groups;
    }

    /**
     * Sets groups
     * @param \ProfitBricks\Client\Model\UserEntityGroups $groups A collection of groups that this user is a member of.
     * @return $this
     */
    public function setGroups($groups)
    {
        $this->groups = $groups;
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
