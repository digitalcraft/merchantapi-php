<?php
/**
 * CheckoutInitiator
 *
 * PHP version 5
 *
 * @category Class
 * @package  zipMoneyPHP
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Merchant API
 *
 * ZipMoney Merchant API Initial build
 *
 * OpenAPI spec version: 2017-03-01
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace zipMoneyPHP/Model;

use \ArrayAccess;

/**
 * CheckoutInitiator Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     zipMoneyPHP
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CheckoutInitiator implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'CheckoutInitiator';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'title' => 'string',
        'first_name' => 'string',
        'last_name' => 'string',
        'middle_name' => 'string',
        'phone' => 'string',
        'email' => 'string',
        'birth_date' => '\DateTime',
        'gender' => 'string',
        'statistics' => '\zipMoneyPHP/Model\CheckoutInitiatorStatistics',
        'billing_address' => '\zipMoneyPHP/Model\Address'
    );

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = array(
        'title' => 'title',
        'first_name' => 'first_name',
        'last_name' => 'last_name',
        'middle_name' => 'middle_name',
        'phone' => 'phone',
        'email' => 'email',
        'birth_date' => 'birth_date',
        'gender' => 'gender',
        'statistics' => 'statistics',
        'billing_address' => 'billing_address'
    );

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = array(
        'title' => 'setTitle',
        'first_name' => 'setFirstName',
        'last_name' => 'setLastName',
        'middle_name' => 'setMiddleName',
        'phone' => 'setPhone',
        'email' => 'setEmail',
        'birth_date' => 'setBirthDate',
        'gender' => 'setGender',
        'statistics' => 'setStatistics',
        'billing_address' => 'setBillingAddress'
    );

    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = array(
        'title' => 'getTitle',
        'first_name' => 'getFirstName',
        'last_name' => 'getLastName',
        'middle_name' => 'getMiddleName',
        'phone' => 'getPhone',
        'email' => 'getEmail',
        'birth_date' => 'getBirthDate',
        'gender' => 'getGender',
        'statistics' => 'getStatistics',
        'billing_address' => 'getBillingAddress'
    );

    public static function getters()
    {
        return self::$getters;
    }

    const GENDER_MALE = 'Male';
    const GENDER_FEMALE = 'Female';
    const GENDER_OTHER = 'Other';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getGenderAllowableValues()
    {
        return [
            self::GENDER_MALE,
            self::GENDER_FEMALE,
            self::GENDER_OTHER,
        ];
    }
    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = array();

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['first_name'] = isset($data['first_name']) ? $data['first_name'] : null;
        $this->container['last_name'] = isset($data['last_name']) ? $data['last_name'] : null;
        $this->container['middle_name'] = isset($data['middle_name']) ? $data['middle_name'] : null;
        $this->container['phone'] = isset($data['phone']) ? $data['phone'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['birth_date'] = isset($data['birth_date']) ? $data['birth_date'] : null;
        $this->container['gender'] = isset($data['gender']) ? $data['gender'] : null;
        $this->container['statistics'] = isset($data['statistics']) ? $data['statistics'] : null;
        $this->container['billing_address'] = isset($data['billing_address']) ? $data['billing_address'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if (!is_null($this->container['phone']) && !preg_match("^[+0-9]+$", $this->container['phone'])) {
            $invalid_properties[] = "invalid value for 'phone', must be conform to the pattern ^[+0-9]+$.";
        }

        $allowed_values = array("Male", "Female", "Other");
        if (!in_array($this->container['gender'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'gender', must be one of #{allowed_values}.";
        }

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        if (!preg_match("^[+0-9]+$", $this->container['phone'])) {
            return false;
        }
        $allowed_values = array("Male", "Female", "Other");
        if (!in_array($this->container['gender'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets title
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     * @param string $title
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets first_name
     * @return string
     */
    public function getFirstName()
    {
        return $this->container['first_name'];
    }

    /**
     * Sets first_name
     * @param string $first_name
     * @return $this
     */
    public function setFirstName($first_name)
    {
        $this->container['first_name'] = $first_name;

        return $this;
    }

    /**
     * Gets last_name
     * @return string
     */
    public function getLastName()
    {
        return $this->container['last_name'];
    }

    /**
     * Sets last_name
     * @param string $last_name
     * @return $this
     */
    public function setLastName($last_name)
    {
        $this->container['last_name'] = $last_name;

        return $this;
    }

    /**
     * Gets middle_name
     * @return string
     */
    public function getMiddleName()
    {
        return $this->container['middle_name'];
    }

    /**
     * Sets middle_name
     * @param string $middle_name
     * @return $this
     */
    public function setMiddleName($middle_name)
    {
        $this->container['middle_name'] = $middle_name;

        return $this;
    }

    /**
     * Gets phone
     * @return string
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     * @param string $phone
     * @return $this
     */
    public function setPhone($phone)
    {

        if (!preg_match("^[+0-9]+$", $phone)) {
            throw new \InvalidArgumentException('invalid value for $phone when calling CheckoutInitiator., must be conform to the pattern ^[+0-9]+$.');
        }
        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets email
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     * @param string $email
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets birth_date
     * @return \DateTime
     */
    public function getBirthDate()
    {
        return $this->container['birth_date'];
    }

    /**
     * Sets birth_date
     * @param \DateTime $birth_date
     * @return $this
     */
    public function setBirthDate($birth_date)
    {
        $this->container['birth_date'] = $birth_date;

        return $this;
    }

    /**
     * Gets gender
     * @return string
     */
    public function getGender()
    {
        return $this->container['gender'];
    }

    /**
     * Sets gender
     * @param string $gender
     * @return $this
     */
    public function setGender($gender)
    {
        $allowed_values = array('Male', 'Female', 'Other');
        if (!in_array($gender, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'gender', must be one of 'Male', 'Female', 'Other'");
        }
        $this->container['gender'] = $gender;

        return $this;
    }

    /**
     * Gets statistics
     * @return \zipMoneyPHP/Model\CheckoutInitiatorStatistics
     */
    public function getStatistics()
    {
        return $this->container['statistics'];
    }

    /**
     * Sets statistics
     * @param \zipMoneyPHP/Model\CheckoutInitiatorStatistics $statistics
     * @return $this
     */
    public function setStatistics($statistics)
    {
        $this->container['statistics'] = $statistics;

        return $this;
    }

    /**
     * Gets billing_address
     * @return \zipMoneyPHP/Model\Address
     */
    public function getBillingAddress()
    {
        return $this->container['billing_address'];
    }

    /**
     * Sets billing_address
     * @param \zipMoneyPHP/Model\Address $billing_address
     * @return $this
     */
    public function setBillingAddress($billing_address)
    {
        $this->container['billing_address'] = $billing_address;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\zipMoneyPHP\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\zipMoneyPHP\ObjectSerializer::sanitizeForSerialization($this));
    }
}


