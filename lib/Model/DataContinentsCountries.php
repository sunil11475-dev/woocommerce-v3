<?php
/**
 * DataContinentsCountries
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
 * DataContinentsCountries Class Doc Comment
 *
 * @category Class
 * @package  WooCommerce\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DataContinentsCountries implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'data_continents_countries';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'code' => 'string',
'currency_code' => 'string',
'currency_pos' => 'string',
'decimal_sep' => 'string',
'dimension_unit' => 'string',
'name' => 'string',
'num_decimals' => 'int',
'states' => '\WooCommerce\Client\Model\DataContinentsStates[]',
'thousand_sep' => 'string',
'weight_unit' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'code' => null,
'currency_code' => null,
'currency_pos' => null,
'decimal_sep' => null,
'dimension_unit' => null,
'name' => null,
'num_decimals' => null,
'states' => null,
'thousand_sep' => null,
'weight_unit' => null    ];

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
        'code' => 'code',
'currency_code' => 'currency_code',
'currency_pos' => 'currency_pos',
'decimal_sep' => 'decimal_sep',
'dimension_unit' => 'dimension_unit',
'name' => 'name',
'num_decimals' => 'num_decimals',
'states' => 'states',
'thousand_sep' => 'thousand_sep',
'weight_unit' => 'weight_unit'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'code' => 'setCode',
'currency_code' => 'setCurrencyCode',
'currency_pos' => 'setCurrencyPos',
'decimal_sep' => 'setDecimalSep',
'dimension_unit' => 'setDimensionUnit',
'name' => 'setName',
'num_decimals' => 'setNumDecimals',
'states' => 'setStates',
'thousand_sep' => 'setThousandSep',
'weight_unit' => 'setWeightUnit'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'code' => 'getCode',
'currency_code' => 'getCurrencyCode',
'currency_pos' => 'getCurrencyPos',
'decimal_sep' => 'getDecimalSep',
'dimension_unit' => 'getDimensionUnit',
'name' => 'getName',
'num_decimals' => 'getNumDecimals',
'states' => 'getStates',
'thousand_sep' => 'getThousandSep',
'weight_unit' => 'getWeightUnit'    ];

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
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['currency_code'] = isset($data['currency_code']) ? $data['currency_code'] : null;
        $this->container['currency_pos'] = isset($data['currency_pos']) ? $data['currency_pos'] : null;
        $this->container['decimal_sep'] = isset($data['decimal_sep']) ? $data['decimal_sep'] : null;
        $this->container['dimension_unit'] = isset($data['dimension_unit']) ? $data['dimension_unit'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['num_decimals'] = isset($data['num_decimals']) ? $data['num_decimals'] : null;
        $this->container['states'] = isset($data['states']) ? $data['states'] : null;
        $this->container['thousand_sep'] = isset($data['thousand_sep']) ? $data['thousand_sep'] : null;
        $this->container['weight_unit'] = isset($data['weight_unit']) ? $data['weight_unit'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     *
     * @param string $code ISO3166 alpha-2 country code.
     *
     * @return $this
     */
    public function setCode($code)
    {
        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets currency_code
     *
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->container['currency_code'];
    }

    /**
     * Sets currency_code
     *
     * @param string $currency_code Default ISO4127 alpha-3 currency code for the country.
     *
     * @return $this
     */
    public function setCurrencyCode($currency_code)
    {
        $this->container['currency_code'] = $currency_code;

        return $this;
    }

    /**
     * Gets currency_pos
     *
     * @return string
     */
    public function getCurrencyPos()
    {
        return $this->container['currency_pos'];
    }

    /**
     * Sets currency_pos
     *
     * @param string $currency_pos Currency symbol position for this country.
     *
     * @return $this
     */
    public function setCurrencyPos($currency_pos)
    {
        $this->container['currency_pos'] = $currency_pos;

        return $this;
    }

    /**
     * Gets decimal_sep
     *
     * @return string
     */
    public function getDecimalSep()
    {
        return $this->container['decimal_sep'];
    }

    /**
     * Sets decimal_sep
     *
     * @param string $decimal_sep Decimal separator for displayed prices for this country.
     *
     * @return $this
     */
    public function setDecimalSep($decimal_sep)
    {
        $this->container['decimal_sep'] = $decimal_sep;

        return $this;
    }

    /**
     * Gets dimension_unit
     *
     * @return string
     */
    public function getDimensionUnit()
    {
        return $this->container['dimension_unit'];
    }

    /**
     * Sets dimension_unit
     *
     * @param string $dimension_unit The unit lengths are defined in for this country.
     *
     * @return $this
     */
    public function setDimensionUnit($dimension_unit)
    {
        $this->container['dimension_unit'] = $dimension_unit;

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
     * @param string $name Full name of country.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets num_decimals
     *
     * @return int
     */
    public function getNumDecimals()
    {
        return $this->container['num_decimals'];
    }

    /**
     * Sets num_decimals
     *
     * @param int $num_decimals Number of decimal points shown in displayed prices for this country.
     *
     * @return $this
     */
    public function setNumDecimals($num_decimals)
    {
        $this->container['num_decimals'] = $num_decimals;

        return $this;
    }

    /**
     * Gets states
     *
     * @return \WooCommerce\Client\Model\DataContinentsStates[]
     */
    public function getStates()
    {
        return $this->container['states'];
    }

    /**
     * Sets states
     *
     * @param \WooCommerce\Client\Model\DataContinentsStates[] $states List of states in this country.
     *
     * @return $this
     */
    public function setStates($states)
    {
        $this->container['states'] = $states;

        return $this;
    }

    /**
     * Gets thousand_sep
     *
     * @return string
     */
    public function getThousandSep()
    {
        return $this->container['thousand_sep'];
    }

    /**
     * Sets thousand_sep
     *
     * @param string $thousand_sep Thousands separator for displayed prices in this country.
     *
     * @return $this
     */
    public function setThousandSep($thousand_sep)
    {
        $this->container['thousand_sep'] = $thousand_sep;

        return $this;
    }

    /**
     * Gets weight_unit
     *
     * @return string
     */
    public function getWeightUnit()
    {
        return $this->container['weight_unit'];
    }

    /**
     * Sets weight_unit
     *
     * @param string $weight_unit The unit weights are defined in for this country.
     *
     * @return $this
     */
    public function setWeightUnit($weight_unit)
    {
        $this->container['weight_unit'] = $weight_unit;

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
