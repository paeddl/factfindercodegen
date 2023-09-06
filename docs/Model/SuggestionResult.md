# SuggestionResult

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**article_number_search_allowed** | **bool** | True, if the field with &#x27;productNumber&#x27; field role provides a regex pattern. | 
**field_roles** | **map[string,string]** | A field to role mapping. For example, a field role may be &#x27;brand&#x27;, meaning that the field contains the manufacturer&#x27;s name. (key &#x3D; field role, value &#x3D; field name) | 
**geo** | [**\Swagger\Client\Model\Geo**](Geo.md) |  | [optional] 
**split_documents** | **bool** | Indicator for document into variant splitting. | [optional] 
**suggestions** | [**\Swagger\Client\Model\ResultSuggestion[]**](ResultSuggestion.md) | The requested suggestions. | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

