# ShopCoupon4

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**code** | **string** | Coupon code. | [optional] 
**amount** | **string** | The amount of discount. Should always be numeric, even if setting a percentage. | [optional] 
**discount_type** | **string** | Determines the type of discount that will be applied. | [optional] 
**description** | **string** | Coupon description. | [optional] 
**date_expires** | **string** | The date the coupon expires, in the site&#x27;s timezone. | [optional] 
**date_expires_gmt** | **string** | The date the coupon expires, as GMT. | [optional] 
**individual_use** | **bool** | If true, the coupon can only be used individually. Other applied coupons will be removed from the cart. | [optional] 
**product_ids** | **int[]** | List of product IDs the coupon can be used on. | [optional] 
**excluded_product_ids** | **int[]** | List of product IDs the coupon cannot be used on. | [optional] 
**usage_limit** | **int** | How many times the coupon can be used in total. | [optional] 
**usage_limit_per_user** | **int** | How many times the coupon can be used per customer. | [optional] 
**limit_usage_to_x_items** | **int** | Max number of items in the cart the coupon can be applied to. | [optional] 
**free_shipping** | **bool** | If true and if the free shipping method requires a coupon, this coupon will enable free shipping. | [optional] 
**product_categories** | **int[]** | List of category IDs the coupon applies to. | [optional] 
**excluded_product_categories** | **int[]** | List of category IDs the coupon does not apply to. | [optional] 
**exclude_sale_items** | **bool** | If true, this coupon will not be applied to items that have sale prices. | [optional] 
**minimum_amount** | **string** | Minimum order amount that needs to be in the cart before coupon applies. | [optional] 
**maximum_amount** | **string** | Maximum order amount allowed when using the coupon. | [optional] 
**email_restrictions** | **string[]** | List of email addresses that can use this coupon. | [optional] 
**meta_data** | [**\Swagger\Client\Model\CouponsMetaData[]**](CouponsMetaData.md) | Meta data. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

