<?php
/**
 * ContractProperties
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
 * ContractProperties Class Doc Comment
 *
 * @category    Class
 * @description
 * @package     ProfitBricks\Client
 * @author      http://github.com/ProfitBricks-api/ProfitBricks-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/ProfitBricks-api/ProfitBricks-codegen
 */
class ContractProperties implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    static $ProfitBricksTypes = array(
        'contractNumber' => 'int',
        'owner' => 'string',
        'status' => 'string',
        'resourceLimits' => '\ProfitBricks\Client\Model\ResourceLimits'
    );

    static function ProfitBricksTypes() {
        return self::$ProfitBricksTypes;
    }

    /**
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[]
      */
    static $attributeMap = array(
        'contractNumber' => 'contractNumber',
        'owner' => 'owner',
        'status' => 'status',
        'resourceLimits' => 'resourceLimits'
    );

    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'contractNumber' => 'setContractNumber',
        'owner' => 'setOwner',
        'status' => 'setStatus',
        'resourceLimits' => 'setResourceLimits'
    );

    static function setters() {
        return self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'contractNumber' => 'getContractNumber',
        'owner' => 'getOwner',
        'status' => 'getStatus',
        'resourceLimits' => 'getResourceLimits'
    );

    static function getters() {
        return self::$getters;
    }

    /**
      * $contractNumber The contract number that the returned information is from.
      * @var int
      */
    protected $contractNumber;

    /**
      * $owner The username of the "Contract Owner".
      * @var string
      */
    protected $owner;

    /**
      * $status The status of the contract. [ BILLABLE...]
      * @var string
      */
    protected $status;

    /**
      * $resourceLimits An object containing the contract's resource limits.
      * @var \ProfitBricks\Client\Model\ResourceLimits
      */
    protected $resourceLimits;


    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {

        if ($data != null) {
            $this->contractNumber = $data["contractNumber"];
            $this->owner = $data["owner"];
            $this->status = $data["status"];
            $this->resourceLimits = $data["resourceLimits"];
        }
    }


    /**
     * Gets contractNumber
     * @return int
     */
    public function getContractNumber()
    {
        return $this->contractNumber;
    }

    /**
     * Sets contractNumber
     * @param int $contractNumber The contract number that the returned information is from.
     * @return $this
     */
    public function setContractNumber($contractNumber)
    {
        $this->contractNumber = $contractNumber;
        return $this;
    }


    /**
     * Gets owner
     * @return string
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * Sets owner
     * @param string $owner The username of the "Contract Owner".
     * @return $this
     */
    public function setOwner($owner)
    {

        $this->owner = $owner;
        return $this;
    }


    /**
     * Gets status
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets status
     * @param string $status The status of the contract. [ BILLABLE...]
     * @return $this
     */
    public function setStatus($status)
    {

        $this->status = $status;
        return $this;
    }


    /**
     * Gets resourceLimits
     * @return \ProfitBricks\Client\Model\ResourceLimits
     */
    public function getResourceLimits()
    {
        return $this->resourceLimits;
    }

    /**
     * Sets resourceLimits
     * @param \ProfitBricks\Client\Model\ResourceLimits $resourceLimits An object containing the contract's resource limits.
     * @return $this
     */
    public function setResourceLimits($resourceLimits)
    {

        $this->resourceLimits = $resourceLimits;
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
