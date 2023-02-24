<?php
/**
 * Tax3
 *
 * PHP version 5
 *
 * @category Class
 * @package  WooCommerce\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * wc/v3
 *
 * OpenAPI documented, based on generated OpenAPI document of the namespace wc/v3 with some manual fixes.
 *
 * OpenAPI spec version: 1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.41
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace WooCommerce\Client\Model;

use \ArrayAccess;
use \WooCommerce\Client\ObjectSerializer;

/**
 * Tax3 Class Doc Comment
 *
 * @category Class
 * @package  WooCommerce\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Tax3 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'tax_3';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'country' => 'string',
'state' => 'string',
'postcode' => 'string',
'city' => 'string',
'rate' => 'string',
'name' => 'string',
'priority' => 'int',
'compound' => 'bool',
'shipping' => 'bool',
'order' => 'int',
'class' => 'string',
'postcodes' => 'string[]',
'cities' => 'string[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'country' => null,
'state' => null,
'postcode' => null,
'city' => null,
'rate' => null,
'name' => null,
'priority' => null,
'compound' => null,
'shipping' => null,
'order' => null,
'class' => null,
'postcodes' => null,
'cities' => null    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'country' => 'country',
'state' => 'state',
'postcode' => 'postcode',
'city' => 'city',
'rate' => 'rate',
'name' => 'name',
'priority' => 'priority',
'compound' => 'compound',
'shipping' => 'shipping',
'order' => 'order',
'class' => 'class',
'postcodes' => 'postcodes',
'cities' => 'cities'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'country' => 'setCountry',
'state' => 'setState',
'postcode' => 'setPostcode',
'city' => 'setCity',
'rate' => 'setRate',
'name' => 'setName',
'priority' => 'setPriority',
'compound' => 'setCompound',
'shipping' => 'setShipping',
'order' => 'setOrder',
'class' => 'setClass',
'postcodes' => 'setPostcodes',
'cities' => 'setCities'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'country' => 'getCountry',
'state' => 'getState',
'postcode' => 'getPostcode',
'city' => 'getCity',
'rate' => 'getRate',
'name' => 'getName',
'priority' => 'getPriority',
'compound' => 'getCompound',
'shipping' => 'getShipping',
'order' => 'getOrder',
'class' => 'getClass',
'postcodes' => 'getPostcodes',
'cities' => 'getCities'    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    const MODEL_CLASS_STANDARD = 'standard';
const MODEL_CLASS_REDUCED_RATE = 'reduced-rate';
const MODEL_CLASS_ZERO_RATE = 'zero-rate';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getClassAllowableValues()
    {
        return [
            self::MODEL_CLASS_STANDARD,
self::MODEL_CLASS_REDUCED_RATE,
self::MODEL_CLASS_ZERO_RATE,        ];
    }

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['postcode'] = isset($data['postcode']) ? $data['postcode'] : null;
        $this->container['city'] = isset($data['city']) ? $data['city'] : null;
        $this->container['rate'] = isset($data['rate']) ? $data['rate'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['priority'] = isset($data['priority']) ? $data['priority'] : null;
        $this->container['compound'] = isset($data['compound']) ? $data['compound'] : null;
        $this->container['shipping'] = isset($data['shipping']) ? $data['shipping'] : null;
        $this->container['order'] = isset($data['order']) ? $data['order'] : null;
        $this->container['class'] = isset($data['class']) ? $data['class'] : null;
        $this->container['postcodes'] = isset($data['postcodes']) ? $data['postcodes'] : null;
        $this->container['cities'] = isset($data['cities']) ? $data['cities'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getClassAllowableValues();
        if (!is_null($this->container['class']) && !in_array($this->container['class'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'class', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param string $country Country ISO 3166 code.
     *
     * @return $this
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets state
     *
     * @return string
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string $state State code.
     *
     * @return $this
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets postcode
     *
     * @return string
     */
    public function getPostcode()
    {
        return $this->container['postcode'];
    }

    /**
     * Sets postcode
     *
     * @param string $postcode Postcode/ZIP, it doesn't support multiple values. Deprecated as of WooCommerce 5.3, 'postcodes' should be used instead.
     *
     * @return $this
     */
    public function setPostcode($postcode)
    {
        $this->container['postcode'] = $postcode;

        return $this;
    }

    /**
     * Gets city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string $city City name, it doesn't support multiple values. Deprecated as of WooCommerce 5.3, 'cities' should be used instead.
     *
     * @return $this
     */
    public function setCity($city)
    {
        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets rate
     *
     * @return string
     */
    public function getRate()
    {
        return $this->container['rate'];
    }

    /**
     * Sets rate
     *
     * @param string $rate Tax rate.
     *
     * @return $this
     */
    public function setRate($rate)
    {
        $this->container['rate'] = $rate;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name Tax rate name.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets priority
     *
     * @return int
     */
    public function getPriority()
    {
        return $this->container['priority'];
    }

    /**
     * Sets priority
     *
     * @param int $priority Tax priority.
     *
     * @return $this
     */
    public function setPriority($priority)
    {
        $this->container['priority'] = $priority;

        return $this;
    }

    /**
     * Gets compound
     *
     * @return bool
     */
    public function getCompound()
    {
        return $this->container['compound'];
    }

    /**
     * Sets compound
     *
     * @param bool $compound Whether or not this is a compound rate.
     *
     * @return $this
     */
    public function setCompound($compound)
    {
        $this->container['compound'] = $compound;

        return $this;
    }

    /**
     * Gets shipping
     *
     * @return bool
     */
    public function getShipping()
    {
        return $this->container['shipping'];
    }

    /**
     * Sets shipping
     *
     * @param bool $shipping Whether or not this tax rate also gets applied to shipping.
     *
     * @return $this
     */
    public function setShipping($shipping)
    {
        $this->container['shipping'] = $shipping;

        return $this;
    }

    /**
     * Gets order
     *
     * @return int
     */
    public function getOrder()
    {
        return $this->container['order'];
    }

    /**
     * Sets order
     *
     * @param int $order Indicates the order that will appear in queries.
     *
     * @return $this
     */
    public function setOrder($order)
    {
        $this->container['order'] = $order;

        return $this;
    }

    /**
     * Gets class
     *
     * @return string
     */
    public function getClass()
    {
        return $this->container['class'];
    }

    /**
     * Sets class
     *
     * @param string $class Tax class.
     *
     * @return $this
     */
    public function setClass($class)
    {
        $allowedValues = $this->getClassAllowableValues();
        if (!is_null($class) && !in_array($class, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'class', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['class'] = $class;

        return $this;
    }

    /**
     * Gets postcodes
     *
     * @return string[]
     */
    public function getPostcodes()
    {
        return $this->container['postcodes'];
    }

    /**
     * Sets postcodes
     *
     * @param string[] $postcodes List of postcodes / ZIPs. Introduced in WooCommerce 5.3.
     *
     * @return $this
     */
    public function setPostcodes($postcodes)
    {
        $this->container['postcodes'] = $postcodes;

        return $this;
    }

    /**
     * Gets cities
     *
     * @return string[]
     */
    public function getCities()
    {
        return $this->container['cities'];
    }

    /**
     * Sets cities
     *
     * @param string[] $cities List of city names. Introduced in WooCommerce 5.3.
     *
     * @return $this
     */
    public function setCities($cities)
    {
        $this->container['cities'] = $cities;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange] 
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    #[\ReturnTypeWillChange] 
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    #[\ReturnTypeWillChange] 
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
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    #[\ReturnTypeWillChange] 
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
