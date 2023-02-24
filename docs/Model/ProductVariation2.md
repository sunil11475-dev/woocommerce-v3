# ProductVariation2

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**description** | **string** | Variation description. | [optional] 
**sku** | **string** | Unique identifier. | [optional] 
**regular_price** | **string** | Variation regular price. | [optional] 
**sale_price** | **string** | Variation sale price. | [optional] 
**date_on_sale_from** | **string** | Start date of sale price, in the site&#x27;s timezone. | [optional] 
**date_on_sale_from_gmt** | **string** | Start date of sale price, as GMT. | [optional] 
**date_on_sale_to** | **string** | End date of sale price, in the site&#x27;s timezone. | [optional] 
**date_on_sale_to_gmt** | **string** | End date of sale price, in the site&#x27;s timezone. | [optional] 
**status** | **string** | Variation status. | [optional] 
**virtual** | **bool** | If the variation is virtual. | [optional] 
**downloadable** | **bool** | If the variation is downloadable. | [optional] 
**downloads** | [**\Swagger\Client\Model\ProductsDownloads[]**](ProductsDownloads.md) | List of downloadable files. | [optional] 
**download_limit** | **int** | Number of times downloadable files can be downloaded after purchase. | [optional] 
**download_expiry** | **int** | Number of days until access to downloadable files expires. | [optional] 
**tax_status** | **string** | Tax status. | [optional] 
**tax_class** | **string** | Tax class. | [optional] 
**manage_stock** | **bool** | Stock management at variation level. | [optional] 
**stock_quantity** | **int** | Stock quantity. | [optional] 
**stock_status** | **string** | Controls the stock status of the product. | [optional] 
**backorders** | **string** | If managing stock, this controls if backorders are allowed. | [optional] 
**low_stock_amount** | **int** | Low Stock amount for the variation. | [optional] 
**weight** | **string** | Variation weight (kg). | [optional] 
**dimensions** | [**\Swagger\Client\Model\ProductsproductIdvariationsDimensions**](ProductsproductIdvariationsDimensions.md) |  | [optional] 
**shipping_class** | **string** | Shipping class slug. | [optional] 
**image** | [**\Swagger\Client\Model\ProductsproductIdvariationsImage**](ProductsproductIdvariationsImage.md) |  | [optional] 
**attributes** | [**\Swagger\Client\Model\ProductsDefaultAttributes[]**](ProductsDefaultAttributes.md) | List of attributes. | [optional] 
**menu_order** | **int** | Menu order, used to custom sort products. | [optional] 
**meta_data** | [**\Swagger\Client\Model\CouponsMetaData[]**](CouponsMetaData.md) | Meta data. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

