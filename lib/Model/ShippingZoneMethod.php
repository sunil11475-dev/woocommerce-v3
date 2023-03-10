<?php
/**
 * ShippingZoneMethod
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
 * ShippingZoneMethod Class Doc Comment
 *
 * @category Class
 * @package  WooCommerce\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ShippingZoneMethod implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'shipping_zone_method';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
'instance_id' => 'int',
'title' => 'string',
'order' => 'int',
'enabled' => 'bool',
'method_id' => 'string',
'method_title' => 'string',
'method_description' => 'string',
'settings' => '\WooCommerce\Client\Model\ShippingzoneszoneIdmethodsSettings'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
'instance_id' => null,
'title' => null,
'order' => null,
'enabled' => null,
'method_id' => null,
'method_title' => null,
'method_description' => null,
'settings' => null    ];

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
        'id' => 'id',
'instance_id' => 'instance_id',
'title' => 'title',
'order' => 'order',
'enabled' => 'enabled',
'method_id' => 'method_id',
'method_title' => 'method_title',
'method_description' => 'method_description',
'settings' => 'settings'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'instance_id' => 'setInstanceId',
'title' => 'setTitle',
'order' => 'setOrder',
'enabled' => 'setEnabled',
'method_id' => 'setMethodId',
'method_title' => 'setMethodTitle',
'method_description' => 'setMethodDescription',
'settings' => 'setSettings'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'instance_id' => 'getInstanceId',
'title' => 'getTitle',
'order' => 'getOrder',
'enabled' => 'getEnabled',
'method_id' => 'getMethodId',
'method_title' => 'getMethodTitle',
'method_description' => 'getMethodDescription',
'settings' => 'getSettings'    ];

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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['instance_id'] = isset($data['instance_id']) ? $data['instance_id'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['order'] = isset($data['order']) ? $data['order'] : null;
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
        $this->container['method_id'] = isset($data['method_id']) ? $data['method_id'] : null;
        $this->container['method_title'] = isset($data['method_title']) ? $data['method_title'] : null;
        $this->container['method_description'] = isset($data['method_description']) ? $data['method_description'] : null;
        $this->container['settings'] = isset($data['settings']) ? $data['settings'] : null;
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
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id Shipping method instance ID.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets instance_id
     *
     * @return int
     */
    public function getInstanceId()
    {
        return $this->container['instance_id'];
    }

    /**
     * Sets instance_id
     *
     * @param int $instance_id Shipping method instance ID.
     *
     * @return $this
     */
    public function setInstanceId($instance_id)
    {
        $this->container['instance_id'] = $instance_id;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string $title Shipping method customer facing title.
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

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
     * @param int $order Shipping method sort order.
     *
     * @return $this
     */
    public function setOrder($order)
    {
        $this->container['order'] = $order;

        return $this;
    }

    /**
     * Gets enabled
     *
     * @return bool
     */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
     * Sets enabled
     *
     * @param bool $enabled Shipping method enabled status.
     *
     * @return $this
     */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;

        return $this;
    }

    /**
     * Gets method_id
     *
     * @return string
     */
    public function getMethodId()
    {
        return $this->container['method_id'];
    }

    /**
     * Sets method_id
     *
     * @param string $method_id Shipping method ID.
     *
     * @return $this
     */
    public function setMethodId($method_id)
    {
        $this->container['method_id'] = $method_id;

        return $this;
    }

    /**
     * Gets method_title
     *
     * @return string
     */
    public function getMethodTitle()
    {
        return $this->container['method_title'];
    }

    /**
     * Sets method_title
     *
     * @param string $method_title Shipping method title.
     *
     * @return $this
     */
    public function setMethodTitle($method_title)
    {
        $this->container['method_title'] = $method_title;

        return $this;
    }

    /**
     * Gets method_description
     *
     * @return string
     */
    public function getMethodDescription()
    {
        return $this->container['method_description'];
    }

    /**
     * Sets method_description
     *
     * @param string $method_description Shipping method description.
     *
     * @return $this
     */
    public function setMethodDescription($method_description)
    {
        $this->container['method_description'] = $method_description;

        return $this;
    }

    /**
     * Gets settings
     *
     * @return \WooCommerce\Client\Model\ShippingzoneszoneIdmethodsSettings
     */
    public function getSettings()
    {
        return $this->container['settings'];
    }

    /**
     * Sets settings
     *
     * @param \WooCommerce\Client\Model\ShippingzoneszoneIdmethodsSettings $settings settings
     *
     * @return $this
     */
    public function setSettings($settings)
    {
        $this->container['settings'] = $settings;

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
