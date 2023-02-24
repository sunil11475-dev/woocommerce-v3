# Webhook2

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | A friendly name for the webhook. | [optional] 
**status** | **string** | Webhook status. | [optional] 
**topic** | **string** | Webhook topic. | [optional] 
**secret** | **string** | Secret key used to generate a hash of the delivered webhook and provided in the request headers. This will default to a MD5 hash from the current user&#x27;s ID|username if not provided. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

