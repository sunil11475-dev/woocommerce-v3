# Customer

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Unique identifier for the resource. | [optional] 
**date_created** | **string** | The date the customer was created, in the site&#x27;s timezone. | [optional] 
**date_created_gmt** | **string** | The date the customer was created, as GMT. | [optional] 
**date_modified** | **string** | The date the customer was last modified, in the site&#x27;s timezone. | [optional] 
**date_modified_gmt** | **string** | The date the customer was last modified, as GMT. | [optional] 
**email** | **string** | The email address for the customer. | [optional] 
**first_name** | **string** | Customer first name. | [optional] 
**last_name** | **string** | Customer last name. | [optional] 
**role** | **string** | Customer role. | [optional] 
**username** | **string** | Customer login name. | [optional] 
**password** | **string** | Customer password. | [optional] 
**billing** | [**\Swagger\Client\Model\CustomersBilling**](CustomersBilling.md) |  | [optional] 
**shipping** | [**\Swagger\Client\Model\CustomersShipping**](CustomersShipping.md) |  | [optional] 
**is_paying_customer** | **bool** | Is the customer a paying customer? | [optional] 
**avatar_url** | **string** | Avatar URL. | [optional] 
**meta_data** | [**\Swagger\Client\Model\CouponsMetaData[]**](CouponsMetaData.md) | Meta data. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

