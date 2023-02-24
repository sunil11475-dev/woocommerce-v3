# ShopOrder2

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**parent_id** | **int** | Parent order ID. | [optional] 
**status** | **string** | Order status. | [optional] 
**currency** | **string** | Currency the order was created with, in ISO format. | [optional] 
**customer_id** | **int** | User ID who owns the order. 0 for guests. | [optional] 
**customer_note** | **string** | Note left by customer during checkout. | [optional] 
**billing** | [**\Swagger\Client\Model\OrdersBilling**](OrdersBilling.md) |  | [optional] 
**shipping** | [**\Swagger\Client\Model\OrdersShipping**](OrdersShipping.md) |  | [optional] 
**payment_method** | **string** | Payment method ID. | [optional] 
**payment_method_title** | **string** | Payment method title. | [optional] 
**transaction_id** | **string** | Unique transaction ID. | [optional] 
**meta_data** | [**\Swagger\Client\Model\CouponsMetaData[]**](CouponsMetaData.md) | Meta data. | [optional] 
**line_items** | [**\Swagger\Client\Model\OrdersLineItems[]**](OrdersLineItems.md) | Line items data. | [optional] 
**shipping_lines** | [**\Swagger\Client\Model\OrdersShippingLines[]**](OrdersShippingLines.md) | Shipping lines data. | [optional] 
**fee_lines** | [**\Swagger\Client\Model\OrdersFeeLines[]**](OrdersFeeLines.md) | Fee lines data. | [optional] 
**coupon_lines** | [**\Swagger\Client\Model\OrdersCouponLines[]**](OrdersCouponLines.md) | Coupons line data. | [optional] 
**set_paid** | **bool** | Define if the order is paid. It will set the status to processing and reduce stock items. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

