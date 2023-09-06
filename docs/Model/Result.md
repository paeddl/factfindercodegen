# Result

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**answers** | [**\Swagger\Client\Model\Answer[]**](Answer.md) | The selected answers of this result. | 
**article_number_search** | **bool** | Set to true when an article number search was performed. | 
**bread_crumb_trail** | [**\Swagger\Client\Model\BreadCrumbTrailItem[]**](BreadCrumbTrailItem.md) | Describes the actions that lead to the current result. This may be used to return to an intermediate search result. | 
**campaigns** | [**\Swagger\Client\Model\Campaign[]**](Campaign.md) | Contains the active campaigns for this result. | 
**facets** | [**\Swagger\Client\Model\Facet[]**](Facet.md) | The ASN filters (for after search navigation). | 
**field_roles** | **map[string,string]** | A field to role mapping. For example, a field role may be &#x27;brand&#x27;, meaning that the field contains the manufacturer&#x27;s name. (key &#x3D; field role, value &#x3D; field name) | 
**filters** | [**\Swagger\Client\Model\Filter[]**](Filter.md) | The filter applied for this result. | 
**follow_search** | **string** | Request linking param for follow-up search requests. Can improve request performance. | [optional] 
**geo** | [**\Swagger\Client\Model\Geo**](Geo.md) |  | [optional] 
**hits** | [**\Swagger\Client\Model\SearchRecord[]**](SearchRecord.md) | The relevant products. | 
**paging** | [**\Swagger\Client\Model\Paging**](Paging.md) |  | [optional] 
**score_first_hit** | **double** | The score of the best match in the search result. | 
**score_last_hit** | **double** | The score of the worst match in the search result. | 
**search_control_params** | [**\Swagger\Client\Model\SearchControlParams**](SearchControlParams.md) |  | 
**search_params** | [**\Swagger\Client\Model\SearchParams**](SearchParams.md) |  | [optional] 
**single_word_results** | [**\Swagger\Client\Model\SingleWordSearchResult[]**](SingleWordSearchResult.md) | Contains the result from the single word search. | 
**sort_items** | [**\Swagger\Client\Model\DescribedSortItem[]**](DescribedSortItem.md) | Contains the available sortings. | 
**split_documents** | **bool** | If true, this result was created with variants split into separate documents | 
**timed_out** | **bool** | If true, this search took longer than the timeout currently defined. Therefore, the results may not contain all relevant products. | 
**took_loop54** | **int** | The time required for loop54 personalization (in ms). | 
**took_total** | **int** | The time required to produce the results in the framework (in ms). | 
**took_worldmatch** | **int** | The time required to produce the results in the core (in ms). | 
**total_hits** | **int** | Total number of items in the search result. | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

