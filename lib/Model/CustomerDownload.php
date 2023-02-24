<?php
/**
 * CustomerDownload
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
 * CustomerDownload Class Doc Comment
 *
 * @category Class
 * @package  WooCommerce\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CustomerDownload implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'customer_download';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'download_id' => 'string',
'download_url' => 'string',
'product_id' => 'int',
'product_name' => 'string',
'download_name' => 'string',
'order_id' => 'int',
'order_key' => 'string',
'downloads_remaining' => 'string',
'access_expires' => 'string',
'access_expires_gmt' => 'string',
'file' => '\WooCommerce\Client\Model\CustomerDownloadFile'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'download_id' => null,
'download_url' => null,
'product_id' => null,
'product_name' => null,
'download_name' => null,
'order_id' => null,
'order_key' => null,
'downloads_remaining' => null,
'access_expires' => null,
'access_expires_gmt' => null,
'file' => null    ];

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
        'download_id' => 'download_id',
'download_url' => 'download_url',
'product_id' => 'product_id',
'product_name' => 'product_name',
'download_name' => 'download_name',
'order_id' => 'order_id',
'order_key' => 'order_key',
'downloads_remaining' => 'downloads_remaining',
'access_expires' => 'access_expires',
'access_expires_gmt' => 'access_expires_gmt',
'file' => 'file'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'download_id' => 'setDownloadId',
'download_url' => 'setDownloadUrl',
'product_id' => 'setProductId',
'product_name' => 'setProductName',
'download_name' => 'setDownloadName',
'order_id' => 'setOrderId',
'order_key' => 'setOrderKey',
'downloads_remaining' => 'setDownloadsRemaining',
'access_expires' => 'setAccessExpires',
'access_expires_gmt' => 'setAccessExpiresGmt',
'file' => 'setFile'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'download_id' => 'getDownloadId',
'download_url' => 'getDownloadUrl',
'product_id' => 'getProductId',
'product_name' => 'getProductName',
'download_name' => 'getDownloadName',
'order_id' => 'getOrderId',
'order_key' => 'getOrderKey',
'downloads_remaining' => 'getDownloadsRemaining',
'access_expires' => 'getAccessExpires',
'access_expires_gmt' => 'getAccessExpiresGmt',
'file' => 'getFile'    ];

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
        $this->container['download_id'] = isset($data['download_id']) ? $data['download_id'] : null;
        $this->container['download_url'] = isset($data['download_url']) ? $data['download_url'] : null;
        $this->container['product_id'] = isset($data['product_id']) ? $data['product_id'] : null;
        $this->container['product_name'] = isset($data['product_name']) ? $data['product_name'] : null;
        $this->container['download_name'] = isset($data['download_name']) ? $data['download_name'] : null;
        $this->container['order_id'] = isset($data['order_id']) ? $data['order_id'] : null;
        $this->container['order_key'] = isset($data['order_key']) ? $data['order_key'] : null;
        $this->container['downloads_remaining'] = isset($data['downloads_remaining']) ? $data['downloads_remaining'] : null;
        $this->container['access_expires'] = isset($data['access_expires']) ? $data['access_expires'] : null;
        $this->container['access_expires_gmt'] = isset($data['access_expires_gmt']) ? $data['access_expires_gmt'] : null;
        $this->container['file'] = isset($data['file']) ? $data['file'] : null;
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
     * Gets download_id
     *
     * @return string
     */
    public function getDownloadId()
    {
        return $this->container['download_id'];
    }

    /**
     * Sets download_id
     *
     * @param string $download_id Download ID.
     *
     * @return $this
     */
    public function setDownloadId($download_id)
    {
        $this->container['download_id'] = $download_id;

        return $this;
    }

    /**
     * Gets download_url
     *
     * @return string
     */
    public function getDownloadUrl()
    {
        return $this->container['download_url'];
    }

    /**
     * Sets download_url
     *
     * @param string $download_url Download file URL.
     *
     * @return $this
     */
    public function setDownloadUrl($download_url)
    {
        $this->container['download_url'] = $download_url;

        return $this;
    }

    /**
     * Gets product_id
     *
     * @return int
     */
    public function getProductId()
    {
        return $this->container['product_id'];
    }

    /**
     * Sets product_id
     *
     * @param int $product_id Downloadable product ID.
     *
     * @return $this
     */
    public function setProductId($product_id)
    {
        $this->container['product_id'] = $product_id;

        return $this;
    }

    /**
     * Gets product_name
     *
     * @return string
     */
    public function getProductName()
    {
        return $this->container['product_name'];
    }

    /**
     * Sets product_name
     *
     * @param string $product_name Product name.
     *
     * @return $this
     */
    public function setProductName($product_name)
    {
        $this->container['product_name'] = $product_name;

        return $this;
    }

    /**
     * Gets download_name
     *
     * @return string
     */
    public function getDownloadName()
    {
        return $this->container['download_name'];
    }

    /**
     * Sets download_name
     *
     * @param string $download_name Downloadable file name.
     *
     * @return $this
     */
    public function setDownloadName($download_name)
    {
        $this->container['download_name'] = $download_name;

        return $this;
    }

    /**
     * Gets order_id
     *
     * @return int
     */
    public function getOrderId()
    {
        return $this->container['order_id'];
    }

    /**
     * Sets order_id
     *
     * @param int $order_id Order ID.
     *
     * @return $this
     */
    public function setOrderId($order_id)
    {
        $this->container['order_id'] = $order_id;

        return $this;
    }

    /**
     * Gets order_key
     *
     * @return string
     */
    public function getOrderKey()
    {
        return $this->container['order_key'];
    }

    /**
     * Sets order_key
     *
     * @param string $order_key Order key.
     *
     * @return $this
     */
    public function setOrderKey($order_key)
    {
        $this->container['order_key'] = $order_key;

        return $this;
    }

    /**
     * Gets downloads_remaining
     *
     * @return string
     */
    public function getDownloadsRemaining()
    {
        return $this->container['downloads_remaining'];
    }

    /**
     * Sets downloads_remaining
     *
     * @param string $downloads_remaining Number of downloads remaining.
     *
     * @return $this
     */
    public function setDownloadsRemaining($downloads_remaining)
    {
        $this->container['downloads_remaining'] = $downloads_remaining;

        return $this;
    }

    /**
     * Gets access_expires
     *
     * @return string
     */
    public function getAccessExpires()
    {
        return $this->container['access_expires'];
    }

    /**
     * Sets access_expires
     *
     * @param string $access_expires The date when download access expires, in the site's timezone.
     *
     * @return $this
     */
    public function setAccessExpires($access_expires)
    {
        $this->container['access_expires'] = $access_expires;

        return $this;
    }

    /**
     * Gets access_expires_gmt
     *
     * @return string
     */
    public function getAccessExpiresGmt()
    {
        return $this->container['access_expires_gmt'];
    }

    /**
     * Sets access_expires_gmt
     *
     * @param string $access_expires_gmt The date when download access expires, as GMT.
     *
     * @return $this
     */
    public function setAccessExpiresGmt($access_expires_gmt)
    {
        $this->container['access_expires_gmt'] = $access_expires_gmt;

        return $this;
    }

    /**
     * Gets file
     *
     * @return \WooCommerce\Client\Model\CustomerDownloadFile
     */
    public function getFile()
    {
        return $this->container['file'];
    }

    /**
     * Sets file
     *
     * @param \WooCommerce\Client\Model\CustomerDownloadFile $file file
     *
     * @return $this
     */
    public function setFile($file)
    {
        $this->container['file'] = $file;

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