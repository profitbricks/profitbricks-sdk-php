<?php
/**
 * ShareProperties
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
 * ShareProperties Class Doc Comment
 *
 * @category    Class
 * @description
 * @package     ProfitBricks\Client
 * @author      http://github.com/ProfitBricks-api/ProfitBricks-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/ProfitBricks-api/ProfitBricks-codegen
 */
class ShareProperties implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    static $ProfitBricksTypes = array(
      'editPrivilege' => 'bool',
      'sharePrivilege' => 'bool'
    );

    static function ProfitBricksTypes() {
        return self::$ProfitBricksTypes;
    }

    /**
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[]
      */
    static $attributeMap = array(
        'editPrivilege' => 'editPrivilege',
        'sharePrivilege' => 'sharePrivilege'
    );

    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'editPrivilege' => 'setEditPrivilege',
        'sharePrivilege' => 'setSharePrivilege'
    );

    static function setters() {
        return self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'editPrivilege' => 'getEditPrivilege',
        'sharePrivilege' => 'getSharePrivilege'
    );

    static function getters() {
        return self::$getters;
    }


    /**
      * $editPrivilege The group has permission to edit privileges on this resource.
      * @var boolean
      */
    protected $editPrivilege;

    /**
      * $sharePrivilege The group has permission to share this resource.
      * @var boolean
      */
    protected $sharePrivilege;


    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {

        if ($data != null) {
            $this->editPrivilege = $data["editPrivilege"];
            $this->sharePrivilege = $data["sharePrivilege"];
        }
    }

    /**
     * Gets editPrivilege
     * @return boolean
     */
    public function getEditPrivilege()
    {
        return $this->editPrivilege;
    }

    /**
     * Sets editPrivilege
     * @param boolean $editPrivilege The group has permission to edit privileges on this resource.
     * @return $this
     */
    public function setEditPrivilege($editPrivilege)
    {

        $this->editPrivilege = $editPrivilege;
        return $this;
    }

    /**
     * Gets sharePrivilege
     * @return boolean
     */
    public function getSharePrivilege()
    {
        return $this->sharePrivilege;
    }

    /**
     * Sets sharePrivilege
     * @param boolean $sharePrivilege The group has permission to share this resource.
     * @return $this
     */
    public function setSharePrivilege($sharePrivilege)
    {
        $this->sharePrivilege = $sharePrivilege;
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
