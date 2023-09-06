# RecommendationResultWithFieldRoles

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**field_roles** | **map[string,string]** | A field to role mapping. For example, a field role may be &#x27;brand&#x27;, meaning that the field contains the manufacturer&#x27;s name. (key &#x3D; field role, value &#x3D; field name) | 
**geo** | [**\Swagger\Client\Model\Geo**](Geo.md) |  | [optional] 
**hits** | [**\Swagger\Client\Model\RecordWithId[]**](RecordWithId.md) | Records of the recommended products. | 
**timed_out** | **bool** | Set to true when a timeout occurs. | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

