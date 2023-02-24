# ShopOrderRefund1

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amount** | **string** | Refund amount. | [optional] 
**reason** | **string** | Reason for refund. | [optional] 
**refunded_by** | **int** | User ID of user who created the refund. | [optional] 
**meta_data** | [**\Swagger\Client\Model\CouponsMetaData[]**](CouponsMetaData.md) | Meta data. | [optional] 
**api_refund** | **bool** | When true, the payment gateway API is used to generate the refund. | [optional] 
**api_restock** | **bool** | When true, refunded items are restocked. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

