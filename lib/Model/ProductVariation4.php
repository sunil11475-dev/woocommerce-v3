<?php
/**
 * ProductVariation4
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
 * ProductVariation4 Class Doc Comment
 *
 * @category Class
 * @package  WooCommerce\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ProductVariation4 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'product_variation_4';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'description' => 'string',
'sku' => 'string',
'regular_price' => 'string',
'sale_price' => 'string',
'date_on_sale_from' => 'string',
'date_on_sale_from_gmt' => 'string',
'date_on_sale_to' => 'string',
'date_on_sale_to_gmt' => 'string',
'status' => 'string',
'virtual' => 'bool',
'downloadable' => 'bool',
'downloads' => '\WooCommerce\Client\Model\ProductsDownloads[]',
'download_limit' => 'int',
'download_expiry' => 'int',
'tax_status' => 'string',
'tax_class' => 'string',
'manage_stock' => 'bool',
'stock_quantity' => 'int',
'stock_status' => 'string',
'backorders' => 'string',
'low_stock_amount' => 'int',
'weight' => 'string',
'dimensions' => '\WooCommerce\Client\Model\ProductsproductIdvariationsDimensions',
'shipping_class' => 'string',
'image' => '\WooCommerce\Client\Model\ProductsproductIdvariationsImage',
'attributes' => '\WooCommerce\Client\Model\ProductsDefaultAttributes[]',
'menu_order' => 'int',
'meta_data' => '\WooCommerce\Client\Model\CouponsMetaData[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'description' => null,
'sku' => null,
'regular_price' => null,
'sale_price' => null,
'date_on_sale_from' => null,
'date_on_sale_from_gmt' => null,
'date_on_sale_to' => null,
'date_on_sale_to_gmt' => null,
'status' => null,
'virtual' => null,
'downloadable' => null,
'downloads' => null,
'download_limit' => null,
'download_expiry' => null,
'tax_status' => null,
'tax_class' => null,
'manage_stock' => null,
'stock_quantity' => null,
'stock_status' => null,
'backorders' => null,
'low_stock_amount' => null,
'weight' => null,
'dimensions' => null,
'shipping_class' => null,
'image' => null,
'attributes' => null,
'menu_order' => null,
'meta_data' => null    ];

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
        'description' => 'description',
'sku' => 'sku',
'regular_price' => 'regular_price',
'sale_price' => 'sale_price',
'date_on_sale_from' => 'date_on_sale_from',
'date_on_sale_from_gmt' => 'date_on_sale_from_gmt',
'date_on_sale_to' => 'date_on_sale_to',
'date_on_sale_to_gmt' => 'date_on_sale_to_gmt',
'status' => 'status',
'virtual' => 'virtual',
'downloadable' => 'downloadable',
'downloads' => 'downloads',
'download_limit' => 'download_limit',
'download_expiry' => 'download_expiry',
'tax_status' => 'tax_status',
'tax_class' => 'tax_class',
'manage_stock' => 'manage_stock',
'stock_quantity' => 'stock_quantity',
'stock_status' => 'stock_status',
'backorders' => 'backorders',
'low_stock_amount' => 'low_stock_amount',
'weight' => 'weight',
'dimensions' => 'dimensions',
'shipping_class' => 'shipping_class',
'image' => 'image',
'attributes' => 'attributes',
'menu_order' => 'menu_order',
'meta_data' => 'meta_data'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'description' => 'setDescription',
'sku' => 'setSku',
'regular_price' => 'setRegularPrice',
'sale_price' => 'setSalePrice',
'date_on_sale_from' => 'setDateOnSaleFrom',
'date_on_sale_from_gmt' => 'setDateOnSaleFromGmt',
'date_on_sale_to' => 'setDateOnSaleTo',
'date_on_sale_to_gmt' => 'setDateOnSaleToGmt',
'status' => 'setStatus',
'virtual' => 'setVirtual',
'downloadable' => 'setDownloadable',
'downloads' => 'setDownloads',
'download_limit' => 'setDownloadLimit',
'download_expiry' => 'setDownloadExpiry',
'tax_status' => 'setTaxStatus',
'tax_class' => 'setTaxClass',
'manage_stock' => 'setManageStock',
'stock_quantity' => 'setStockQuantity',
'stock_status' => 'setStockStatus',
'backorders' => 'setBackorders',
'low_stock_amount' => 'setLowStockAmount',
'weight' => 'setWeight',
'dimensions' => 'setDimensions',
'shipping_class' => 'setShippingClass',
'image' => 'setImage',
'attributes' => 'setAttributes',
'menu_order' => 'setMenuOrder',
'meta_data' => 'setMetaData'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'description' => 'getDescription',
'sku' => 'getSku',
'regular_price' => 'getRegularPrice',
'sale_price' => 'getSalePrice',
'date_on_sale_from' => 'getDateOnSaleFrom',
'date_on_sale_from_gmt' => 'getDateOnSaleFromGmt',
'date_on_sale_to' => 'getDateOnSaleTo',
'date_on_sale_to_gmt' => 'getDateOnSaleToGmt',
'status' => 'getStatus',
'virtual' => 'getVirtual',
'downloadable' => 'getDownloadable',
'downloads' => 'getDownloads',
'download_limit' => 'getDownloadLimit',
'download_expiry' => 'getDownloadExpiry',
'tax_status' => 'getTaxStatus',
'tax_class' => 'getTaxClass',
'manage_stock' => 'getManageStock',
'stock_quantity' => 'getStockQuantity',
'stock_status' => 'getStockStatus',
'backorders' => 'getBackorders',
'low_stock_amount' => 'getLowStockAmount',
'weight' => 'getWeight',
'dimensions' => 'getDimensions',
'shipping_class' => 'getShippingClass',
'image' => 'getImage',
'attributes' => 'getAttributes',
'menu_order' => 'getMenuOrder',
'meta_data' => 'getMetaData'    ];

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

    const STATUS_DRAFT = 'draft';
const STATUS_PENDING = 'pending';
const STATUS__PRIVATE = 'private';
const STATUS_PUBLISH = 'publish';
const TAX_STATUS_TAXABLE = 'taxable';
const TAX_STATUS_SHIPPING = 'shipping';
const TAX_STATUS_NONE = 'none';
const STOCK_STATUS_INSTOCK = 'instock';
const STOCK_STATUS_OUTOFSTOCK = 'outofstock';
const STOCK_STATUS_ONBACKORDER = 'onbackorder';
const BACKORDERS_NO = 'no';
const BACKORDERS_NOTIFY = 'notify';
const BACKORDERS_YES = 'yes';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_DRAFT,
self::STATUS_PENDING,
self::STATUS__PRIVATE,
self::STATUS_PUBLISH,        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTaxStatusAllowableValues()
    {
        return [
            self::TAX_STATUS_TAXABLE,
self::TAX_STATUS_SHIPPING,
self::TAX_STATUS_NONE,        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStockStatusAllowableValues()
    {
        return [
            self::STOCK_STATUS_INSTOCK,
self::STOCK_STATUS_OUTOFSTOCK,
self::STOCK_STATUS_ONBACKORDER,        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getBackordersAllowableValues()
    {
        return [
            self::BACKORDERS_NO,
self::BACKORDERS_NOTIFY,
self::BACKORDERS_YES,        ];
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
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['sku'] = isset($data['sku']) ? $data['sku'] : null;
        $this->container['regular_price'] = isset($data['regular_price']) ? $data['regular_price'] : null;
        $this->container['sale_price'] = isset($data['sale_price']) ? $data['sale_price'] : null;
        $this->container['date_on_sale_from'] = isset($data['date_on_sale_from']) ? $data['date_on_sale_from'] : null;
        $this->container['date_on_sale_from_gmt'] = isset($data['date_on_sale_from_gmt']) ? $data['date_on_sale_from_gmt'] : null;
        $this->container['date_on_sale_to'] = isset($data['date_on_sale_to']) ? $data['date_on_sale_to'] : null;
        $this->container['date_on_sale_to_gmt'] = isset($data['date_on_sale_to_gmt']) ? $data['date_on_sale_to_gmt'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['virtual'] = isset($data['virtual']) ? $data['virtual'] : null;
        $this->container['downloadable'] = isset($data['downloadable']) ? $data['downloadable'] : null;
        $this->container['downloads'] = isset($data['downloads']) ? $data['downloads'] : null;
        $this->container['download_limit'] = isset($data['download_limit']) ? $data['download_limit'] : null;
        $this->container['download_expiry'] = isset($data['download_expiry']) ? $data['download_expiry'] : null;
        $this->container['tax_status'] = isset($data['tax_status']) ? $data['tax_status'] : null;
        $this->container['tax_class'] = isset($data['tax_class']) ? $data['tax_class'] : null;
        $this->container['manage_stock'] = isset($data['manage_stock']) ? $data['manage_stock'] : null;
        $this->container['stock_quantity'] = isset($data['stock_quantity']) ? $data['stock_quantity'] : null;
        $this->container['stock_status'] = isset($data['stock_status']) ? $data['stock_status'] : null;
        $this->container['backorders'] = isset($data['backorders']) ? $data['backorders'] : null;
        $this->container['low_stock_amount'] = isset($data['low_stock_amount']) ? $data['low_stock_amount'] : null;
        $this->container['weight'] = isset($data['weight']) ? $data['weight'] : null;
        $this->container['dimensions'] = isset($data['dimensions']) ? $data['dimensions'] : null;
        $this->container['shipping_class'] = isset($data['shipping_class']) ? $data['shipping_class'] : null;
        $this->container['image'] = isset($data['image']) ? $data['image'] : null;
        $this->container['attributes'] = isset($data['attributes']) ? $data['attributes'] : null;
        $this->container['menu_order'] = isset($data['menu_order']) ? $data['menu_order'] : null;
        $this->container['meta_data'] = isset($data['meta_data']) ? $data['meta_data'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getTaxStatusAllowableValues();
        if (!is_null($this->container['tax_status']) && !in_array($this->container['tax_status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'tax_status', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getStockStatusAllowableValues();
        if (!is_null($this->container['stock_status']) && !in_array($this->container['stock_status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'stock_status', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getBackordersAllowableValues();
        if (!is_null($this->container['backorders']) && !in_array($this->container['backorders'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'backorders', must be one of '%s'",
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
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description Variation description.
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets sku
     *
     * @return string
     */
    public function getSku()
    {
        return $this->container['sku'];
    }

    /**
     * Sets sku
     *
     * @param string $sku Unique identifier.
     *
     * @return $this
     */
    public function setSku($sku)
    {
        $this->container['sku'] = $sku;

        return $this;
    }

    /**
     * Gets regular_price
     *
     * @return string
     */
    public function getRegularPrice()
    {
        return $this->container['regular_price'];
    }

    /**
     * Sets regular_price
     *
     * @param string $regular_price Variation regular price.
     *
     * @return $this
     */
    public function setRegularPrice($regular_price)
    {
        $this->container['regular_price'] = $regular_price;

        return $this;
    }

    /**
     * Gets sale_price
     *
     * @return string
     */
    public function getSalePrice()
    {
        return $this->container['sale_price'];
    }

    /**
     * Sets sale_price
     *
     * @param string $sale_price Variation sale price.
     *
     * @return $this
     */
    public function setSalePrice($sale_price)
    {
        $this->container['sale_price'] = $sale_price;

        return $this;
    }

    /**
     * Gets date_on_sale_from
     *
     * @return string
     */
    public function getDateOnSaleFrom()
    {
        return $this->container['date_on_sale_from'];
    }

    /**
     * Sets date_on_sale_from
     *
     * @param string $date_on_sale_from Start date of sale price, in the site's timezone.
     *
     * @return $this
     */
    public function setDateOnSaleFrom($date_on_sale_from)
    {
        $this->container['date_on_sale_from'] = $date_on_sale_from;

        return $this;
    }

    /**
     * Gets date_on_sale_from_gmt
     *
     * @return string
     */
    public function getDateOnSaleFromGmt()
    {
        return $this->container['date_on_sale_from_gmt'];
    }

    /**
     * Sets date_on_sale_from_gmt
     *
     * @param string $date_on_sale_from_gmt Start date of sale price, as GMT.
     *
     * @return $this
     */
    public function setDateOnSaleFromGmt($date_on_sale_from_gmt)
    {
        $this->container['date_on_sale_from_gmt'] = $date_on_sale_from_gmt;

        return $this;
    }

    /**
     * Gets date_on_sale_to
     *
     * @return string
     */
    public function getDateOnSaleTo()
    {
        return $this->container['date_on_sale_to'];
    }

    /**
     * Sets date_on_sale_to
     *
     * @param string $date_on_sale_to End date of sale price, in the site's timezone.
     *
     * @return $this
     */
    public function setDateOnSaleTo($date_on_sale_to)
    {
        $this->container['date_on_sale_to'] = $date_on_sale_to;

        return $this;
    }

    /**
     * Gets date_on_sale_to_gmt
     *
     * @return string
     */
    public function getDateOnSaleToGmt()
    {
        return $this->container['date_on_sale_to_gmt'];
    }

    /**
     * Sets date_on_sale_to_gmt
     *
     * @param string $date_on_sale_to_gmt End date of sale price, in the site's timezone.
     *
     * @return $this
     */
    public function setDateOnSaleToGmt($date_on_sale_to_gmt)
    {
        $this->container['date_on_sale_to_gmt'] = $date_on_sale_to_gmt;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status Variation status.
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($status) && !in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets virtual
     *
     * @return bool
     */
    public function getVirtual()
    {
        return $this->container['virtual'];
    }

    /**
     * Sets virtual
     *
     * @param bool $virtual If the variation is virtual.
     *
     * @return $this
     */
    public function setVirtual($virtual)
    {
        $this->container['virtual'] = $virtual;

        return $this;
    }

    /**
     * Gets downloadable
     *
     * @return bool
     */
    public function getDownloadable()
    {
        return $this->container['downloadable'];
    }

    /**
     * Sets downloadable
     *
     * @param bool $downloadable If the variation is downloadable.
     *
     * @return $this
     */
    public function setDownloadable($downloadable)
    {
        $this->container['downloadable'] = $downloadable;

        return $this;
    }

    /**
     * Gets downloads
     *
     * @return \WooCommerce\Client\Model\ProductsDownloads[]
     */
    public function getDownloads()
    {
        return $this->container['downloads'];
    }

    /**
     * Sets downloads
     *
     * @param \WooCommerce\Client\Model\ProductsDownloads[] $downloads List of downloadable files.
     *
     * @return $this
     */
    public function setDownloads($downloads)
    {
        $this->container['downloads'] = $downloads;

        return $this;
    }

    /**
     * Gets download_limit
     *
     * @return int
     */
    public function getDownloadLimit()
    {
        return $this->container['download_limit'];
    }

    /**
     * Sets download_limit
     *
     * @param int $download_limit Number of times downloadable files can be downloaded after purchase.
     *
     * @return $this
     */
    public function setDownloadLimit($download_limit)
    {
        $this->container['download_limit'] = $download_limit;

        return $this;
    }

    /**
     * Gets download_expiry
     *
     * @return int
     */
    public function getDownloadExpiry()
    {
        return $this->container['download_expiry'];
    }

    /**
     * Sets download_expiry
     *
     * @param int $download_expiry Number of days until access to downloadable files expires.
     *
     * @return $this
     */
    public function setDownloadExpiry($download_expiry)
    {
        $this->container['download_expiry'] = $download_expiry;

        return $this;
    }

    /**
     * Gets tax_status
     *
     * @return string
     */
    public function getTaxStatus()
    {
        return $this->container['tax_status'];
    }

    /**
     * Sets tax_status
     *
     * @param string $tax_status Tax status.
     *
     * @return $this
     */
    public function setTaxStatus($tax_status)
    {
        $allowedValues = $this->getTaxStatusAllowableValues();
        if (!is_null($tax_status) && !in_array($tax_status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'tax_status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['tax_status'] = $tax_status;

        return $this;
    }

    /**
     * Gets tax_class
     *
     * @return string
     */
    public function getTaxClass()
    {
        return $this->container['tax_class'];
    }

    /**
     * Sets tax_class
     *
     * @param string $tax_class Tax class.
     *
     * @return $this
     */
    public function setTaxClass($tax_class)
    {
        $this->container['tax_class'] = $tax_class;

        return $this;
    }

    /**
     * Gets manage_stock
     *
     * @return bool
     */
    public function getManageStock()
    {
        return $this->container['manage_stock'];
    }

    /**
     * Sets manage_stock
     *
     * @param bool $manage_stock Stock management at variation level.
     *
     * @return $this
     */
    public function setManageStock($manage_stock)
    {
        $this->container['manage_stock'] = $manage_stock;

        return $this;
    }

    /**
     * Gets stock_quantity
     *
     * @return int
     */
    public function getStockQuantity()
    {
        return $this->container['stock_quantity'];
    }

    /**
     * Sets stock_quantity
     *
     * @param int $stock_quantity Stock quantity.
     *
     * @return $this
     */
    public function setStockQuantity($stock_quantity)
    {
        $this->container['stock_quantity'] = $stock_quantity;

        return $this;
    }

    /**
     * Gets stock_status
     *
     * @return string
     */
    public function getStockStatus()
    {
        return $this->container['stock_status'];
    }

    /**
     * Sets stock_status
     *
     * @param string $stock_status Controls the stock status of the product.
     *
     * @return $this
     */
    public function setStockStatus($stock_status)
    {
        $allowedValues = $this->getStockStatusAllowableValues();
        if (!is_null($stock_status) && !in_array($stock_status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'stock_status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['stock_status'] = $stock_status;

        return $this;
    }

    /**
     * Gets backorders
     *
     * @return string
     */
    public function getBackorders()
    {
        return $this->container['backorders'];
    }

    /**
     * Sets backorders
     *
     * @param string $backorders If managing stock, this controls if backorders are allowed.
     *
     * @return $this
     */
    public function setBackorders($backorders)
    {
        $allowedValues = $this->getBackordersAllowableValues();
        if (!is_null($backorders) && !in_array($backorders, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'backorders', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['backorders'] = $backorders;

        return $this;
    }

    /**
     * Gets low_stock_amount
     *
     * @return int
     */
    public function getLowStockAmount()
    {
        return $this->container['low_stock_amount'];
    }

    /**
     * Sets low_stock_amount
     *
     * @param int $low_stock_amount Low Stock amount for the variation.
     *
     * @return $this
     */
    public function setLowStockAmount($low_stock_amount)
    {
        $this->container['low_stock_amount'] = $low_stock_amount;

        return $this;
    }

    /**
     * Gets weight
     *
     * @return string
     */
    public function getWeight()
    {
        return $this->container['weight'];
    }

    /**
     * Sets weight
     *
     * @param string $weight Variation weight (kg).
     *
     * @return $this
     */
    public function setWeight($weight)
    {
        $this->container['weight'] = $weight;

        return $this;
    }

    /**
     * Gets dimensions
     *
     * @return \WooCommerce\Client\Model\ProductsproductIdvariationsDimensions
     */
    public function getDimensions()
    {
        return $this->container['dimensions'];
    }

    /**
     * Sets dimensions
     *
     * @param \WooCommerce\Client\Model\ProductsproductIdvariationsDimensions $dimensions dimensions
     *
     * @return $this
     */
    public function setDimensions($dimensions)
    {
        $this->container['dimensions'] = $dimensions;

        return $this;
    }

    /**
     * Gets shipping_class
     *
     * @return string
     */
    public function getShippingClass()
    {
        return $this->container['shipping_class'];
    }

    /**
     * Sets shipping_class
     *
     * @param string $shipping_class Shipping class slug.
     *
     * @return $this
     */
    public function setShippingClass($shipping_class)
    {
        $this->container['shipping_class'] = $shipping_class;

        return $this;
    }

    /**
     * Gets image
     *
     * @return \WooCommerce\Client\Model\ProductsproductIdvariationsImage
     */
    public function getImage()
    {
        return $this->container['image'];
    }

    /**
     * Sets image
     *
     * @param \WooCommerce\Client\Model\ProductsproductIdvariationsImage $image image
     *
     * @return $this
     */
    public function setImage($image)
    {
        $this->container['image'] = $image;

        return $this;
    }

    /**
     * Gets attributes
     *
     * @return \WooCommerce\Client\Model\ProductsDefaultAttributes[]
     */
    public function getAttributes()
    {
        return $this->container['attributes'];
    }

    /**
     * Sets attributes
     *
     * @param \WooCommerce\Client\Model\ProductsDefaultAttributes[] $attributes List of attributes.
     *
     * @return $this
     */
    public function setAttributes($attributes)
    {
        $this->container['attributes'] = $attributes;

        return $this;
    }

    /**
     * Gets menu_order
     *
     * @return int
     */
    public function getMenuOrder()
    {
        return $this->container['menu_order'];
    }

    /**
     * Sets menu_order
     *
     * @param int $menu_order Menu order, used to custom sort products.
     *
     * @return $this
     */
    public function setMenuOrder($menu_order)
    {
        $this->container['menu_order'] = $menu_order;

        return $this;
    }

    /**
     * Gets meta_data
     *
     * @return \WooCommerce\Client\Model\CouponsMetaData[]
     */
    public function getMetaData()
    {
        return $this->container['meta_data'];
    }

    /**
     * Sets meta_data
     *
     * @param \WooCommerce\Client\Model\CouponsMetaData[] $meta_data Meta data.
     *
     * @return $this
     */
    public function setMetaData($meta_data)
    {
        $this->container['meta_data'] = $meta_data;

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
