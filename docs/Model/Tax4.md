# Tax4

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**country** | **string** | Country ISO 3166 code. | [optional] 
**state** | **string** | State code. | [optional] 
**postcode** | **string** | Postcode/ZIP, it doesn&#x27;t support multiple values. Deprecated as of WooCommerce 5.3, &#x27;postcodes&#x27; should be used instead. | [optional] 
**city** | **string** | City name, it doesn&#x27;t support multiple values. Deprecated as of WooCommerce 5.3, &#x27;cities&#x27; should be used instead. | [optional] 
**rate** | **string** | Tax rate. | [optional] 
**name** | **string** | Tax rate name. | [optional] 
**priority** | **int** | Tax priority. | [optional] 
**compound** | **bool** | Whether or not this is a compound rate. | [optional] 
**shipping** | **bool** | Whether or not this tax rate also gets applied to shipping. | [optional] 
**order** | **int** | Indicates the order that will appear in queries. | [optional] 
**class** | **string** | Tax class. | [optional] 
**postcodes** | **string[]** | List of postcodes / ZIPs. Introduced in WooCommerce 5.3. | [optional] 
**cities** | **string[]** | List of city names. Introduced in WooCommerce 5.3. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

