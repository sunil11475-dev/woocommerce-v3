<?php
/**
 * SystemStatusDatabase
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
 * SystemStatusDatabase Class Doc Comment
 *
 * @category Class
 * @description Database.
 * @package  WooCommerce\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SystemStatusDatabase implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'system_status_database';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'wc_database_version' => 'string',
'database_prefix' => 'string',
'maxmind_geoip_database' => 'string',
'database_tables' => 'string[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'wc_database_version' => null,
'database_prefix' => null,
'maxmind_geoip_database' => null,
'database_tables' => null    ];

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
        'wc_database_version' => 'wc_database_version',
'database_prefix' => 'database_prefix',
'maxmind_geoip_database' => 'maxmind_geoip_database',
'database_tables' => 'database_tables'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'wc_database_version' => 'setWcDatabaseVersion',
'database_prefix' => 'setDatabasePrefix',
'maxmind_geoip_database' => 'setMaxmindGeoipDatabase',
'database_tables' => 'setDatabaseTables'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'wc_database_version' => 'getWcDatabaseVersion',
'database_prefix' => 'getDatabasePrefix',
'maxmind_geoip_database' => 'getMaxmindGeoipDatabase',
'database_tables' => 'getDatabaseTables'    ];

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
        $this->container['wc_database_version'] = isset($data['wc_database_version']) ? $data['wc_database_version'] : null;
        $this->container['database_prefix'] = isset($data['database_prefix']) ? $data['database_prefix'] : null;
        $this->container['maxmind_geoip_database'] = isset($data['maxmind_geoip_database']) ? $data['maxmind_geoip_database'] : null;
        $this->container['database_tables'] = isset($data['database_tables']) ? $data['database_tables'] : null;
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
     * Gets wc_database_version
     *
     * @return string
     */
    public function getWcDatabaseVersion()
    {
        return $this->container['wc_database_version'];
    }

    /**
     * Sets wc_database_version
     *
     * @param string $wc_database_version WC database version.
     *
     * @return $this
     */
    public function setWcDatabaseVersion($wc_database_version)
    {
        $this->container['wc_database_version'] = $wc_database_version;

        return $this;
    }

    /**
     * Gets database_prefix
     *
     * @return string
     */
    public function getDatabasePrefix()
    {
        return $this->container['database_prefix'];
    }

    /**
     * Sets database_prefix
     *
     * @param string $database_prefix Database prefix.
     *
     * @return $this
     */
    public function setDatabasePrefix($database_prefix)
    {
        $this->container['database_prefix'] = $database_prefix;

        return $this;
    }

    /**
     * Gets maxmind_geoip_database
     *
     * @return string
     */
    public function getMaxmindGeoipDatabase()
    {
        return $this->container['maxmind_geoip_database'];
    }

    /**
     * Sets maxmind_geoip_database
     *
     * @param string $maxmind_geoip_database MaxMind GeoIP database.
     *
     * @return $this
     */
    public function setMaxmindGeoipDatabase($maxmind_geoip_database)
    {
        $this->container['maxmind_geoip_database'] = $maxmind_geoip_database;

        return $this;
    }

    /**
     * Gets database_tables
     *
     * @return string[]
     */
    public function getDatabaseTables()
    {
        return $this->container['database_tables'];
    }

    /**
     * Sets database_tables
     *
     * @param string[] $database_tables Database tables.
     *
     * @return $this
     */
    public function setDatabaseTables($database_tables)
    {
        $this->container['database_tables'] = $database_tables;

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
