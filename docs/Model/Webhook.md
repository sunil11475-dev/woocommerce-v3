# Webhook

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Unique identifier for the resource. | [optional] 
**name** | **string** | A friendly name for the webhook. | [optional] 
**status** | **string** | Webhook status. | [optional] 
**topic** | **string** | Webhook topic. | [optional] 
**resource** | **string** | Webhook resource. | [optional] 
**event** | **string** | Webhook event. | [optional] 
**hooks** | **string[]** | WooCommerce action names associated with the webhook. | [optional] 
**delivery_url** | **string** | The URL where the webhook payload is delivered. | [optional] 
**secret** | **string** | Secret key used to generate a hash of the delivered webhook and provided in the request headers. This will default to a MD5 hash from the current user&#x27;s ID|username if not provided. | [optional] 
**date_created** | **string** | The date the webhook was created, in the site&#x27;s timezone. | [optional] 
**date_created_gmt** | **string** | The date the webhook was created, as GMT. | [optional] 
**date_modified** | **string** | The date the webhook was last modified, in the site&#x27;s timezone. | [optional] 
**date_modified_gmt** | **string** | The date the webhook was last modified, as GMT. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

