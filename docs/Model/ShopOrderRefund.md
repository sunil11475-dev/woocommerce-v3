# ShopOrderRefund

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Unique identifier for the resource. | [optional] 
**date_created** | **string** | The date the order refund was created, in the site&#x27;s timezone. | [optional] 
**date_created_gmt** | **string** | The date the order refund was created, as GMT. | [optional] 
**amount** | **string** | Refund amount. | [optional] 
**reason** | **string** | Reason for refund. | [optional] 
**refunded_by** | **int** | User ID of user who created the refund. | [optional] 
**refunded_payment** | **bool** | If the payment was refunded via the API. | [optional] 
**meta_data** | [**\Swagger\Client\Model\CouponsMetaData[]**](CouponsMetaData.md) | Meta data. | [optional] 
**line_items** | [**\Swagger\Client\Model\ShopOrderRefundLineItems[]**](ShopOrderRefundLineItems.md) | Line items data. | [optional] 
**api_refund** | **bool** | When true, the payment gateway API is used to generate the refund. | [optional] 
**api_restock** | **bool** | When true, refunded items are restocked. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

