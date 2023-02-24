# ProductReview

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Unique identifier for the resource. | [optional] 
**date_created** | **string** | The date the review was created, in the site&#x27;s timezone. | [optional] 
**date_created_gmt** | **string** | The date the review was created, as GMT. | [optional] 
**product_id** | **int** | Unique identifier for the product that the review belongs to. | [optional] 
**status** | **string** | Status of the review. | [optional] 
**reviewer** | **string** | Reviewer name. | [optional] 
**reviewer_email** | **string** | Reviewer email. | [optional] 
**review** | **string** | The content of the review. | [optional] 
**rating** | **int** | Review rating (0 to 5). | [optional] 
**verified** | **bool** | Shows if the reviewer bought the product or not. | [optional] 
**reviewer_avatar_urls** | [**\Swagger\Client\Model\ProductReviewReviewerAvatarUrls**](ProductReviewReviewerAvatarUrls.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

