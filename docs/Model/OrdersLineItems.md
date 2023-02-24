# OrdersLineItems

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Item ID. | [optional] 
**name** | **string** | Product name. | [optional] 
**parent_name** | **string** | Parent product name if the product is a variation. | [optional] 
**product_id** | **string** | Product ID. | [optional] 
**variation_id** | **int** | Variation ID, if applicable. | [optional] 
**quantity** | **int** | Quantity ordered. | [optional] 
**tax_class** | **string** | Tax class of product. | [optional] 
**subtotal** | **string** | Line subtotal (before discounts). | [optional] 
**subtotal_tax** | **string** | Line subtotal tax (before discounts). | [optional] 
**total** | **string** | Line total (after discounts). | [optional] 
**total_tax** | **string** | Line total tax (after discounts). | [optional] 
**taxes** | [**\Swagger\Client\Model\OrdersTaxes[]**](OrdersTaxes.md) | Line taxes. | [optional] 
**meta_data** | [**\Swagger\Client\Model\OrdersMetaData[]**](OrdersMetaData.md) | Meta data. | [optional] 
**sku** | **string** | Product SKU. | [optional] 
**price** | **float** | Product price. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

