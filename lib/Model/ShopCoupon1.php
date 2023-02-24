<?php
/**
 * ShopCoupon1
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
 * ShopCoupon1 Class Doc Comment
 *
 * @category Class
 * @package  WooCommerce\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ShopCoupon1 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'shop_coupon_1';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'code' => 'string',
'amount' => 'string',
'discount_type' => 'string',
'description' => 'string',
'date_expires' => 'string',
'date_expires_gmt' => 'string',
'individual_use' => 'bool',
'product_ids' => 'int[]',
'excluded_product_ids' => 'int[]',
'usage_limit' => 'int',
'usage_limit_per_user' => 'int',
'limit_usage_to_x_items' => 'int',
'free_shipping' => 'bool',
'product_categories' => 'int[]',
'excluded_product_categories' => 'int[]',
'exclude_sale_items' => 'bool',
'minimum_amount' => 'string',
'maximum_amount' => 'string',
'email_restrictions' => 'string[]',
'meta_data' => '\WooCommerce\Client\Model\CouponsMetaData[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'code' => null,
'amount' => null,
'discount_type' => null,
'description' => null,
'date_expires' => null,
'date_expires_gmt' => null,
'individual_use' => null,
'product_ids' => null,
'excluded_product_ids' => null,
'usage_limit' => null,
'usage_limit_per_user' => null,
'limit_usage_to_x_items' => null,
'free_shipping' => null,
'product_categories' => null,
'excluded_product_categories' => null,
'exclude_sale_items' => null,
'minimum_amount' => null,
'maximum_amount' => null,
'email_restrictions' => null,
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
        'code' => 'code',
'amount' => 'amount',
'discount_type' => 'discount_type',
'description' => 'description',
'date_expires' => 'date_expires',
'date_expires_gmt' => 'date_expires_gmt',
'individual_use' => 'individual_use',
'product_ids' => 'product_ids',
'excluded_product_ids' => 'excluded_product_ids',
'usage_limit' => 'usage_limit',
'usage_limit_per_user' => 'usage_limit_per_user',
'limit_usage_to_x_items' => 'limit_usage_to_x_items',
'free_shipping' => 'free_shipping',
'product_categories' => 'product_categories',
'excluded_product_categories' => 'excluded_product_categories',
'exclude_sale_items' => 'exclude_sale_items',
'minimum_amount' => 'minimum_amount',
'maximum_amount' => 'maximum_amount',
'email_restrictions' => 'email_restrictions',
'meta_data' => 'meta_data'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'code' => 'setCode',
'amount' => 'setAmount',
'discount_type' => 'setDiscountType',
'description' => 'setDescription',
'date_expires' => 'setDateExpires',
'date_expires_gmt' => 'setDateExpiresGmt',
'individual_use' => 'setIndividualUse',
'product_ids' => 'setProductIds',
'excluded_product_ids' => 'setExcludedProductIds',
'usage_limit' => 'setUsageLimit',
'usage_limit_per_user' => 'setUsageLimitPerUser',
'limit_usage_to_x_items' => 'setLimitUsageToXItems',
'free_shipping' => 'setFreeShipping',
'product_categories' => 'setProductCategories',
'excluded_product_categories' => 'setExcludedProductCategories',
'exclude_sale_items' => 'setExcludeSaleItems',
'minimum_amount' => 'setMinimumAmount',
'maximum_amount' => 'setMaximumAmount',
'email_restrictions' => 'setEmailRestrictions',
'meta_data' => 'setMetaData'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'code' => 'getCode',
'amount' => 'getAmount',
'discount_type' => 'getDiscountType',
'description' => 'getDescription',
'date_expires' => 'getDateExpires',
'date_expires_gmt' => 'getDateExpiresGmt',
'individual_use' => 'getIndividualUse',
'product_ids' => 'getProductIds',
'excluded_product_ids' => 'getExcludedProductIds',
'usage_limit' => 'getUsageLimit',
'usage_limit_per_user' => 'getUsageLimitPerUser',
'limit_usage_to_x_items' => 'getLimitUsageToXItems',
'free_shipping' => 'getFreeShipping',
'product_categories' => 'getProductCategories',
'excluded_product_categories' => 'getExcludedProductCategories',
'exclude_sale_items' => 'getExcludeSaleItems',
'minimum_amount' => 'getMinimumAmount',
'maximum_amount' => 'getMaximumAmount',
'email_restrictions' => 'getEmailRestrictions',
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

    const DISCOUNT_TYPE_PERCENT = 'percent';
const DISCOUNT_TYPE_FIXED_CART = 'fixed_cart';
const DISCOUNT_TYPE_FIXED_PRODUCT = 'fixed_product';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDiscountTypeAllowableValues()
    {
        return [
            self::DISCOUNT_TYPE_PERCENT,
self::DISCOUNT_TYPE_FIXED_CART,
self::DISCOUNT_TYPE_FIXED_PRODUCT,        ];
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
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['discount_type'] = isset($data['discount_type']) ? $data['discount_type'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['date_expires'] = isset($data['date_expires']) ? $data['date_expires'] : null;
        $this->container['date_expires_gmt'] = isset($data['date_expires_gmt']) ? $data['date_expires_gmt'] : null;
        $this->container['individual_use'] = isset($data['individual_use']) ? $data['individual_use'] : null;
        $this->container['product_ids'] = isset($data['product_ids']) ? $data['product_ids'] : null;
        $this->container['excluded_product_ids'] = isset($data['excluded_product_ids']) ? $data['excluded_product_ids'] : null;
        $this->container['usage_limit'] = isset($data['usage_limit']) ? $data['usage_limit'] : null;
        $this->container['usage_limit_per_user'] = isset($data['usage_limit_per_user']) ? $data['usage_limit_per_user'] : null;
        $this->container['limit_usage_to_x_items'] = isset($data['limit_usage_to_x_items']) ? $data['limit_usage_to_x_items'] : null;
        $this->container['free_shipping'] = isset($data['free_shipping']) ? $data['free_shipping'] : null;
        $this->container['product_categories'] = isset($data['product_categories']) ? $data['product_categories'] : null;
        $this->container['excluded_product_categories'] = isset($data['excluded_product_categories']) ? $data['excluded_product_categories'] : null;
        $this->container['exclude_sale_items'] = isset($data['exclude_sale_items']) ? $data['exclude_sale_items'] : null;
        $this->container['minimum_amount'] = isset($data['minimum_amount']) ? $data['minimum_amount'] : null;
        $this->container['maximum_amount'] = isset($data['maximum_amount']) ? $data['maximum_amount'] : null;
        $this->container['email_restrictions'] = isset($data['email_restrictions']) ? $data['email_restrictions'] : null;
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

        $allowedValues = $this->getDiscountTypeAllowableValues();
        if (!is_null($this->container['discount_type']) && !in_array($this->container['discount_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'discount_type', must be one of '%s'",
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
     * @param string $code Coupon code.
     *
     * @return $this
     */
    public function setCode($code)
    {
        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return string
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param string $amount The amount of discount. Should always be numeric, even if setting a percentage.
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets discount_type
     *
     * @return string
     */
    public function getDiscountType()
    {
        return $this->container['discount_type'];
    }

    /**
     * Sets discount_type
     *
     * @param string $discount_type Determines the type of discount that will be applied.
     *
     * @return $this
     */
    public function setDiscountType($discount_type)
    {
        $allowedValues = $this->getDiscountTypeAllowableValues();
        if (!is_null($discount_type) && !in_array($discount_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'discount_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['discount_type'] = $discount_type;

        return $this;
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
     * @param string $description Coupon description.
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets date_expires
     *
     * @return string
     */
    public function getDateExpires()
    {
        return $this->container['date_expires'];
    }

    /**
     * Sets date_expires
     *
     * @param string $date_expires The date the coupon expires, in the site's timezone.
     *
     * @return $this
     */
    public function setDateExpires($date_expires)
    {
        $this->container['date_expires'] = $date_expires;

        return $this;
    }

    /**
     * Gets date_expires_gmt
     *
     * @return string
     */
    public function getDateExpiresGmt()
    {
        return $this->container['date_expires_gmt'];
    }

    /**
     * Sets date_expires_gmt
     *
     * @param string $date_expires_gmt The date the coupon expires, as GMT.
     *
     * @return $this
     */
    public function setDateExpiresGmt($date_expires_gmt)
    {
        $this->container['date_expires_gmt'] = $date_expires_gmt;

        return $this;
    }

    /**
     * Gets individual_use
     *
     * @return bool
     */
    public function getIndividualUse()
    {
        return $this->container['individual_use'];
    }

    /**
     * Sets individual_use
     *
     * @param bool $individual_use If true, the coupon can only be used individually. Other applied coupons will be removed from the cart.
     *
     * @return $this
     */
    public function setIndividualUse($individual_use)
    {
        $this->container['individual_use'] = $individual_use;

        return $this;
    }

    /**
     * Gets product_ids
     *
     * @return int[]
     */
    public function getProductIds()
    {
        return $this->container['product_ids'];
    }

    /**
     * Sets product_ids
     *
     * @param int[] $product_ids List of product IDs the coupon can be used on.
     *
     * @return $this
     */
    public function setProductIds($product_ids)
    {
        $this->container['product_ids'] = $product_ids;

        return $this;
    }

    /**
     * Gets excluded_product_ids
     *
     * @return int[]
     */
    public function getExcludedProductIds()
    {
        return $this->container['excluded_product_ids'];
    }

    /**
     * Sets excluded_product_ids
     *
     * @param int[] $excluded_product_ids List of product IDs the coupon cannot be used on.
     *
     * @return $this
     */
    public function setExcludedProductIds($excluded_product_ids)
    {
        $this->container['excluded_product_ids'] = $excluded_product_ids;

        return $this;
    }

    /**
     * Gets usage_limit
     *
     * @return int
     */
    public function getUsageLimit()
    {
        return $this->container['usage_limit'];
    }

    /**
     * Sets usage_limit
     *
     * @param int $usage_limit How many times the coupon can be used in total.
     *
     * @return $this
     */
    public function setUsageLimit($usage_limit)
    {
        $this->container['usage_limit'] = $usage_limit;

        return $this;
    }

    /**
     * Gets usage_limit_per_user
     *
     * @return int
     */
    public function getUsageLimitPerUser()
    {
        return $this->container['usage_limit_per_user'];
    }

    /**
     * Sets usage_limit_per_user
     *
     * @param int $usage_limit_per_user How many times the coupon can be used per customer.
     *
     * @return $this
     */
    public function setUsageLimitPerUser($usage_limit_per_user)
    {
        $this->container['usage_limit_per_user'] = $usage_limit_per_user;

        return $this;
    }

    /**
     * Gets limit_usage_to_x_items
     *
     * @return int
     */
    public function getLimitUsageToXItems()
    {
        return $this->container['limit_usage_to_x_items'];
    }

    /**
     * Sets limit_usage_to_x_items
     *
     * @param int $limit_usage_to_x_items Max number of items in the cart the coupon can be applied to.
     *
     * @return $this
     */
    public function setLimitUsageToXItems($limit_usage_to_x_items)
    {
        $this->container['limit_usage_to_x_items'] = $limit_usage_to_x_items;

        return $this;
    }

    /**
     * Gets free_shipping
     *
     * @return bool
     */
    public function getFreeShipping()
    {
        return $this->container['free_shipping'];
    }

    /**
     * Sets free_shipping
     *
     * @param bool $free_shipping If true and if the free shipping method requires a coupon, this coupon will enable free shipping.
     *
     * @return $this
     */
    public function setFreeShipping($free_shipping)
    {
        $this->container['free_shipping'] = $free_shipping;

        return $this;
    }

    /**
     * Gets product_categories
     *
     * @return int[]
     */
    public function getProductCategories()
    {
        return $this->container['product_categories'];
    }

    /**
     * Sets product_categories
     *
     * @param int[] $product_categories List of category IDs the coupon applies to.
     *
     * @return $this
     */
    public function setProductCategories($product_categories)
    {
        $this->container['product_categories'] = $product_categories;

        return $this;
    }

    /**
     * Gets excluded_product_categories
     *
     * @return int[]
     */
    public function getExcludedProductCategories()
    {
        return $this->container['excluded_product_categories'];
    }

    /**
     * Sets excluded_product_categories
     *
     * @param int[] $excluded_product_categories List of category IDs the coupon does not apply to.
     *
     * @return $this
     */
    public function setExcludedProductCategories($excluded_product_categories)
    {
        $this->container['excluded_product_categories'] = $excluded_product_categories;

        return $this;
    }

    /**
     * Gets exclude_sale_items
     *
     * @return bool
     */
    public function getExcludeSaleItems()
    {
        return $this->container['exclude_sale_items'];
    }

    /**
     * Sets exclude_sale_items
     *
     * @param bool $exclude_sale_items If true, this coupon will not be applied to items that have sale prices.
     *
     * @return $this
     */
    public function setExcludeSaleItems($exclude_sale_items)
    {
        $this->container['exclude_sale_items'] = $exclude_sale_items;

        return $this;
    }

    /**
     * Gets minimum_amount
     *
     * @return string
     */
    public function getMinimumAmount()
    {
        return $this->container['minimum_amount'];
    }

    /**
     * Sets minimum_amount
     *
     * @param string $minimum_amount Minimum order amount that needs to be in the cart before coupon applies.
     *
     * @return $this
     */
    public function setMinimumAmount($minimum_amount)
    {
        $this->container['minimum_amount'] = $minimum_amount;

        return $this;
    }

    /**
     * Gets maximum_amount
     *
     * @return string
     */
    public function getMaximumAmount()
    {
        return $this->container['maximum_amount'];
    }

    /**
     * Sets maximum_amount
     *
     * @param string $maximum_amount Maximum order amount allowed when using the coupon.
     *
     * @return $this
     */
    public function setMaximumAmount($maximum_amount)
    {
        $this->container['maximum_amount'] = $maximum_amount;

        return $this;
    }

    /**
     * Gets email_restrictions
     *
     * @return string[]
     */
    public function getEmailRestrictions()
    {
        return $this->container['email_restrictions'];
    }

    /**
     * Sets email_restrictions
     *
     * @param string[] $email_restrictions List of email addresses that can use this coupon.
     *
     * @return $this
     */
    public function setEmailRestrictions($email_restrictions)
    {
        $this->container['email_restrictions'] = $email_restrictions;

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
