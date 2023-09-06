# Swagger\Client\SearchApi

All URIs are relative to *//f4k.fact-finder.de/fact-finder*

Method | HTTP request | Description
------------- | ------------- | -------------
[**categoryNavigationUsingGET**](SearchApi.md#categorynavigationusingget) | **GET** /rest/v5/navigation/category/{channel} | Category ASN for Navigation
[**getSuggestionsUsingGET**](SearchApi.md#getsuggestionsusingget) | **GET** /rest/v5/suggest/{channel} | Get suggestions
[**getSuggestionsUsingPOST**](SearchApi.md#getsuggestionsusingpost) | **POST** /rest/v5/suggest/{channel} | Get suggestions with POST
[**navigationUsingGET**](SearchApi.md#navigationusingget) | **GET** /rest/v5/navigation/{channel} | Navigation
[**navigationUsingPOST**](SearchApi.md#navigationusingpost) | **POST** /rest/v5/navigation/{channel} | Navigation with POST
[**searchUsingGET**](SearchApi.md#searchusingget) | **GET** /rest/v5/search/{channel} | Search
[**searchUsingPOST**](SearchApi.md#searchusingpost) | **POST** /rest/v5/search/{channel} | Search with POST

# **categoryNavigationUsingGET**
> \Swagger\Client\Model\CategoryNavigation categoryNavigationUsingGET($channel, $cache_irrelevant, $end_level, $exclude_products_not_in_range, $filter, $latitude, $longitude, $market_id, $max_distance, $purchaser_id, $sid, $split_documents_at, $start_level, $substring_filter, $use_ab_test, $use_cache, $use_geo, $user_id)

Category ASN for Navigation

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure OAuth2 access token for authorization: oAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\FactFinder\SearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$channel = "channel_example"; // string | channel
$cache_irrelevant = array("cache_irrelevant_example"); // string[] | Flag parameters as cache irrelevant
$end_level = 56; // int | Category end level
$exclude_products_not_in_range = true; // bool | Use this parameter to override the geo setting \"exclude products not in range\" for this request.
$filter = array("filter_example"); // string[] | Filter for the whole field value; a filter can have multiple values, the values can be separated with the following characters (they are configurable in the config.xml) 'and' = \\_\\_\\_ 'or' = ~~~ the filter value can be excluded with the prefix ! format: facetid:value; example Red~~~!Green = red or not green. If the filter name equals '*', the filter will be applied on any field; example: *:Red~~~Green. This filter type does not support the exclusion prefix. Be aware that filter values for category path filters have to be URL encoded, so a '100%' category path filter value would be '100%25'. It will be encoded a second time when used via 'GET', Swagger will do this second encoding automatically, so the URL contains '100%2525'. Numeric filters use standard mathematical interval notation, but only intervals that are closed on the left and open on the right are allowed inputs. So only intervals of the form [a,b), [a,) or [a,] are allowed. Square brackets mean that the value is included and round brackets mean that the value is not included. E.g. if you want to cover the range 20.00-49.99 please insert [20.00,50.00).
$latitude = 1.2; // double | The latitude coordinate of the location.
$longitude = 1.2; // double | The longitude coordinate of the location.
$market_id = array("market_id_example"); // string[] | Only show products that have values for these market IDs.
$max_distance = 1.2; // double | Use this parameter to override the geo setting \"maximum distance\" for this request.
$purchaser_id = "purchaser_id_example"; // string | Use this parameter to pass the purchaser ID. This ID is only needed, if the 'customer specific pricing' module is active. Otherwise it will be ignored.
$sid = "sid_example"; // string | The session id
$split_documents_at = 56; // int | Threshold for variant splitting of documents.
$start_level = 56; // int | Category start level
$substring_filter = array("substring_filter_example"); // string[] | Filter for a sub string of the field value; a filter can have multiple values, the values can be separated with the following characters (they are configurable in the config.xml) 'and' = \\_\\_\\_ 'or' = ~~~ the filter value can be excluded with the prefix ! format: facetid:value; example Red~~~!Green = red or not green. If the filter name equals '*', the filter will be applied on any field; example: *:Red~~~Green. This filter type does not support the exclusion prefix. Be aware that filter values for category path filters have to be URL encoded, so a '100%' category path filter value would be '100%25'. It will be encoded a second time when used via 'GET', Swagger will do this second encoding automatically, so the URL contains '100%2525'. Numeric filters use standard mathematical interval notation, but only intervals that are closed on the left and open on the right are allowed inputs. So only intervals of the form [a,b), [a,) or [a,] are allowed. Square brackets mean that the value is included and round brackets mean that the value is not included. E.g. if you want to cover the range 20.00-49.99 please insert [20.00,50.00).
$use_ab_test = true; // bool | If true AbTest features will be active.
$use_cache = true; // bool | If true, the search result will be returned from cache memory, if a possible matching result exists.
$use_geo = true; // bool | If true geoSearch features will be active.
$user_id = "user_id_example"; // string | The user id

try {
    $result = $apiInstance->categoryNavigationUsingGET($channel, $cache_irrelevant, $end_level, $exclude_products_not_in_range, $filter, $latitude, $longitude, $market_id, $max_distance, $purchaser_id, $sid, $split_documents_at, $start_level, $substring_filter, $use_ab_test, $use_cache, $use_geo, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->categoryNavigationUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel** | **string**| channel |
 **cache_irrelevant** | [**string[]**](../Model/string.md)| Flag parameters as cache irrelevant | [optional]
 **end_level** | **int**| Category end level | [optional]
 **exclude_products_not_in_range** | **bool**| Use this parameter to override the geo setting \&quot;exclude products not in range\&quot; for this request. | [optional]
 **filter** | [**string[]**](../Model/string.md)| Filter for the whole field value; a filter can have multiple values, the values can be separated with the following characters (they are configurable in the config.xml) &#x27;and&#x27; &#x3D; \\_\\_\\_ &#x27;or&#x27; &#x3D; ~~~ the filter value can be excluded with the prefix ! format: facetid:value; example Red~~~!Green &#x3D; red or not green. If the filter name equals &#x27;*&#x27;, the filter will be applied on any field; example: *:Red~~~Green. This filter type does not support the exclusion prefix. Be aware that filter values for category path filters have to be URL encoded, so a &#x27;100%&#x27; category path filter value would be &#x27;100%25&#x27;. It will be encoded a second time when used via &#x27;GET&#x27;, Swagger will do this second encoding automatically, so the URL contains &#x27;100%2525&#x27;. Numeric filters use standard mathematical interval notation, but only intervals that are closed on the left and open on the right are allowed inputs. So only intervals of the form [a,b), [a,) or [a,] are allowed. Square brackets mean that the value is included and round brackets mean that the value is not included. E.g. if you want to cover the range 20.00-49.99 please insert [20.00,50.00). | [optional]
 **latitude** | **double**| The latitude coordinate of the location. | [optional]
 **longitude** | **double**| The longitude coordinate of the location. | [optional]
 **market_id** | [**string[]**](../Model/string.md)| Only show products that have values for these market IDs. | [optional]
 **max_distance** | **double**| Use this parameter to override the geo setting \&quot;maximum distance\&quot; for this request. | [optional]
 **purchaser_id** | **string**| Use this parameter to pass the purchaser ID. This ID is only needed, if the &#x27;customer specific pricing&#x27; module is active. Otherwise it will be ignored. | [optional]
 **sid** | **string**| The session id | [optional]
 **split_documents_at** | **int**| Threshold for variant splitting of documents. | [optional]
 **start_level** | **int**| Category start level | [optional]
 **substring_filter** | [**string[]**](../Model/string.md)| Filter for a sub string of the field value; a filter can have multiple values, the values can be separated with the following characters (they are configurable in the config.xml) &#x27;and&#x27; &#x3D; \\_\\_\\_ &#x27;or&#x27; &#x3D; ~~~ the filter value can be excluded with the prefix ! format: facetid:value; example Red~~~!Green &#x3D; red or not green. If the filter name equals &#x27;*&#x27;, the filter will be applied on any field; example: *:Red~~~Green. This filter type does not support the exclusion prefix. Be aware that filter values for category path filters have to be URL encoded, so a &#x27;100%&#x27; category path filter value would be &#x27;100%25&#x27;. It will be encoded a second time when used via &#x27;GET&#x27;, Swagger will do this second encoding automatically, so the URL contains &#x27;100%2525&#x27;. Numeric filters use standard mathematical interval notation, but only intervals that are closed on the left and open on the right are allowed inputs. So only intervals of the form [a,b), [a,) or [a,] are allowed. Square brackets mean that the value is included and round brackets mean that the value is not included. E.g. if you want to cover the range 20.00-49.99 please insert [20.00,50.00). | [optional]
 **use_ab_test** | **bool**| If true AbTest features will be active. | [optional] [default to true]
 **use_cache** | **bool**| If true, the search result will be returned from cache memory, if a possible matching result exists. | [optional] [default to true]
 **use_geo** | **bool**| If true geoSearch features will be active. | [optional] [default to true]
 **user_id** | **string**| The user id | [optional]

### Return type

[**\Swagger\Client\Model\CategoryNavigation**](../Model/CategoryNavigation.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [oAuth2](../../README.md#oAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSuggestionsUsingGET**
> \Swagger\Client\Model\SuggestionResult getSuggestionsUsingGET($channel, $query, $advisor_status, $article_number_search, $cache_irrelevant, $exclude_products_not_in_range, $filter, $follow_search, $hits_per_page, $latitude, $longitude, $market_id, $max_count_variants, $max_distance, $page, $purchaser_id, $search_field, $sid, $sort, $split_documents_at, $substring_filter)

Get suggestions

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure OAuth2 access token for authorization: oAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\FactFinder\SearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$channel = "channel_example"; // string | channel
$query = "query_example"; // string | The search term
$advisor_status = "advisor_status_example"; // string | For specifying the current campaign id and answer path; format: campaignId-answerPath; example = '4-_0_1'
$article_number_search = "DETECT"; // string | Specifies if the query should be interpreted as article number
$cache_irrelevant = array("cache_irrelevant_example"); // string[] | Flag parameters as cache irrelevant
$exclude_products_not_in_range = true; // bool | Use this parameter to override the geo setting \"exclude products not in range\" for this request.
$filter = array("filter_example"); // string[] | Filter for the whole field value; a filter can have multiple values, the values can be separated with the following characters (they are configurable in the config.xml) 'and' = \\_\\_\\_ 'or' = ~~~ the filter value can be excluded with the prefix ! format: facetid:value; example Red~~~!Green = red or not green. If the filter name equals '*', the filter will be applied on any field; example: *:Red~~~Green. This filter type does not support the exclusion prefix. Be aware that filter values for category path filters have to be URL encoded, so a '100%' category path filter value would be '100%25'. It will be encoded a second time when used via 'GET', Swagger will do this second encoding automatically, so the URL contains '100%2525'. Numeric filters use standard mathematical interval notation, but only intervals that are closed on the left and open on the right are allowed inputs. So only intervals of the form [a,b), [a,) or [a,] are allowed. Square brackets mean that the value is included and round brackets mean that the value is not included. E.g. if you want to cover the range 20.00-49.99 please insert [20.00,50.00).
$follow_search = "follow_search_example"; // string | Optional request linking param from a previous search result or search param object. Can improve request performance.
$hits_per_page = 56; // int | In the FACT-Finder Management Interface you can define how many results will be returned on a page by default. If you prefer another number, you can set it with this parameter.
$latitude = 1.2; // double | The latitude coordinate of the location.
$longitude = 1.2; // double | The longitude coordinate of the location.
$market_id = array("market_id_example"); // string[] | Only show products that have values for these market IDs.
$max_count_variants = 56; // int | The maximum number of variants to return for every record
$max_distance = 1.2; // double | Use this parameter to override the geo setting \"maximum distance\" for this request.
$page = 56; // int | If a search result contains many results these will be divided into pages. This limits the amount of data that has to be sent in one go. You can indicate which page should be returned. Page numbering starts at 1.
$purchaser_id = "purchaser_id_example"; // string | Use this parameter to pass the purchaser ID. This ID is only needed, if the 'customer specific pricing' module is active. Otherwise it will be ignored.
$search_field = "search_field_example"; // string | Normally FACT-Finder searches all fields defined as searchable. However it is possible to search only one specific field as well.
$sid = "sid_example"; // string | the session id from the user
$sort = array("sort_example"); // string[] | Sort the result; use FieldName Relevancy to sort the relevancy; format: FieldName:order order must be either asc or desc; example Manufacturer:asc
$split_documents_at = 56; // int | Threshold for variant splitting of documents.
$substring_filter = array("substring_filter_example"); // string[] | Filter for a sub string of the field value; a filter can have multiple values, the values can be separated with the following characters (they are configurable in the config.xml) 'and' = \\_\\_\\_ 'or' = ~~~ the filter value can be excluded with the prefix ! format: facetid:value; example Red~~~!Green = red or not green. If the filter name equals '*', the filter will be applied on any field; example: *:Red~~~Green. This filter type does not support the exclusion prefix. Be aware that filter values for category path filters have to be URL encoded, so a '100%' category path filter value would be '100%25'. It will be encoded a second time when used via 'GET', Swagger will do this second encoding automatically, so the URL contains '100%2525'. Numeric filters use standard mathematical interval notation, but only intervals that are closed on the left and open on the right are allowed inputs. So only intervals of the form [a,b), [a,) or [a,] are allowed. Square brackets mean that the value is included and round brackets mean that the value is not included. E.g. if you want to cover the range 20.00-49.99 please insert [20.00,50.00).

try {
    $result = $apiInstance->getSuggestionsUsingGET($channel, $query, $advisor_status, $article_number_search, $cache_irrelevant, $exclude_products_not_in_range, $filter, $follow_search, $hits_per_page, $latitude, $longitude, $market_id, $max_count_variants, $max_distance, $page, $purchaser_id, $search_field, $sid, $sort, $split_documents_at, $substring_filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->getSuggestionsUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel** | **string**| channel |
 **query** | **string**| The search term |
 **advisor_status** | **string**| For specifying the current campaign id and answer path; format: campaignId-answerPath; example &#x3D; &#x27;4-_0_1&#x27; | [optional]
 **article_number_search** | **string**| Specifies if the query should be interpreted as article number | [optional] [default to DETECT]
 **cache_irrelevant** | [**string[]**](../Model/string.md)| Flag parameters as cache irrelevant | [optional]
 **exclude_products_not_in_range** | **bool**| Use this parameter to override the geo setting \&quot;exclude products not in range\&quot; for this request. | [optional]
 **filter** | [**string[]**](../Model/string.md)| Filter for the whole field value; a filter can have multiple values, the values can be separated with the following characters (they are configurable in the config.xml) &#x27;and&#x27; &#x3D; \\_\\_\\_ &#x27;or&#x27; &#x3D; ~~~ the filter value can be excluded with the prefix ! format: facetid:value; example Red~~~!Green &#x3D; red or not green. If the filter name equals &#x27;*&#x27;, the filter will be applied on any field; example: *:Red~~~Green. This filter type does not support the exclusion prefix. Be aware that filter values for category path filters have to be URL encoded, so a &#x27;100%&#x27; category path filter value would be &#x27;100%25&#x27;. It will be encoded a second time when used via &#x27;GET&#x27;, Swagger will do this second encoding automatically, so the URL contains &#x27;100%2525&#x27;. Numeric filters use standard mathematical interval notation, but only intervals that are closed on the left and open on the right are allowed inputs. So only intervals of the form [a,b), [a,) or [a,] are allowed. Square brackets mean that the value is included and round brackets mean that the value is not included. E.g. if you want to cover the range 20.00-49.99 please insert [20.00,50.00). | [optional]
 **follow_search** | **string**| Optional request linking param from a previous search result or search param object. Can improve request performance. | [optional]
 **hits_per_page** | **int**| In the FACT-Finder Management Interface you can define how many results will be returned on a page by default. If you prefer another number, you can set it with this parameter. | [optional]
 **latitude** | **double**| The latitude coordinate of the location. | [optional]
 **longitude** | **double**| The longitude coordinate of the location. | [optional]
 **market_id** | [**string[]**](../Model/string.md)| Only show products that have values for these market IDs. | [optional]
 **max_count_variants** | **int**| The maximum number of variants to return for every record | [optional]
 **max_distance** | **double**| Use this parameter to override the geo setting \&quot;maximum distance\&quot; for this request. | [optional]
 **page** | **int**| If a search result contains many results these will be divided into pages. This limits the amount of data that has to be sent in one go. You can indicate which page should be returned. Page numbering starts at 1. | [optional]
 **purchaser_id** | **string**| Use this parameter to pass the purchaser ID. This ID is only needed, if the &#x27;customer specific pricing&#x27; module is active. Otherwise it will be ignored. | [optional]
 **search_field** | **string**| Normally FACT-Finder searches all fields defined as searchable. However it is possible to search only one specific field as well. | [optional]
 **sid** | **string**| the session id from the user | [optional]
 **sort** | [**string[]**](../Model/string.md)| Sort the result; use FieldName Relevancy to sort the relevancy; format: FieldName:order order must be either asc or desc; example Manufacturer:asc | [optional]
 **split_documents_at** | **int**| Threshold for variant splitting of documents. | [optional]
 **substring_filter** | [**string[]**](../Model/string.md)| Filter for a sub string of the field value; a filter can have multiple values, the values can be separated with the following characters (they are configurable in the config.xml) &#x27;and&#x27; &#x3D; \\_\\_\\_ &#x27;or&#x27; &#x3D; ~~~ the filter value can be excluded with the prefix ! format: facetid:value; example Red~~~!Green &#x3D; red or not green. If the filter name equals &#x27;*&#x27;, the filter will be applied on any field; example: *:Red~~~Green. This filter type does not support the exclusion prefix. Be aware that filter values for category path filters have to be URL encoded, so a &#x27;100%&#x27; category path filter value would be &#x27;100%25&#x27;. It will be encoded a second time when used via &#x27;GET&#x27;, Swagger will do this second encoding automatically, so the URL contains &#x27;100%2525&#x27;. Numeric filters use standard mathematical interval notation, but only intervals that are closed on the left and open on the right are allowed inputs. So only intervals of the form [a,b), [a,) or [a,] are allowed. Square brackets mean that the value is included and round brackets mean that the value is not included. E.g. if you want to cover the range 20.00-49.99 please insert [20.00,50.00). | [optional]

### Return type

[**\Swagger\Client\Model\SuggestionResult**](../Model/SuggestionResult.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [oAuth2](../../README.md#oAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSuggestionsUsingPOST**
> \Swagger\Client\Model\SuggestionResult getSuggestionsUsingPOST($body, $channel)

Get suggestions with POST

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure OAuth2 access token for authorization: oAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\FactFinder\SearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\SuggestParams(); // \Swagger\Client\Model\SuggestParams | params
$channel = "channel_example"; // string | channel

try {
    $result = $apiInstance->getSuggestionsUsingPOST($body, $channel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->getSuggestionsUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\SuggestParams**](../Model/SuggestParams.md)| params |
 **channel** | **string**| channel |

### Return type

[**\Swagger\Client\Model\SuggestionResult**](../Model/SuggestionResult.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [oAuth2](../../README.md#oAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **navigationUsingGET**
> \Swagger\Client\Model\Result navigationUsingGET($channel, $advisor_status, $cache_irrelevant, $deduplication_field, $exclude_products_not_in_range, $filter, $follow_search, $hits_per_page, $ids_only, $latitude, $longitude, $market_id, $max_count_variants, $max_distance, $page, $purchaser_id, $sid, $sort, $split_documents_at, $substring_filter, $use_ab_test, $use_asn, $use_aso, $use_cache, $use_campaigns, $use_deduplication, $use_found_words, $use_geo, $use_personalization, $use_ranking, $use_search, $use_semantic_enhancer, $user_id)

Navigation

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure OAuth2 access token for authorization: oAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\FactFinder\SearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$channel = "channel_example"; // string | channel
$advisor_status = "advisor_status_example"; // string | For specifying the current campaign id and answer path; format: campaignId-answerPath; example = '4-_0_1'
$cache_irrelevant = array("cache_irrelevant_example"); // string[] | Flag parameters as cache irrelevant
$deduplication_field = "deduplication_field_example"; // string | Specifies on which field variants should be deduplicated.
$exclude_products_not_in_range = true; // bool | Use this parameter to override the geo setting \"exclude products not in range\" for this request.
$filter = array("filter_example"); // string[] | Filter for the whole field value; a filter can have multiple values, the values can be separated with the following characters (they are configurable in the config.xml) 'and' = \\_\\_\\_ 'or' = ~~~ the filter value can be excluded with the prefix ! format: facetid:value; example Red~~~!Green = red or not green. If the filter name equals '*', the filter will be applied on any field; example: *:Red~~~Green. This filter type does not support the exclusion prefix. Be aware that filter values for category path filters have to be URL encoded, so a '100%' category path filter value would be '100%25'. It will be encoded a second time when used via 'GET', Swagger will do this second encoding automatically, so the URL contains '100%2525'. Numeric filters use standard mathematical interval notation, but only intervals that are closed on the left and open on the right are allowed inputs. So only intervals of the form [a,b), [a,) or [a,] are allowed. Square brackets mean that the value is included and round brackets mean that the value is not included. E.g. if you want to cover the range 20.00-49.99 please insert [20.00,50.00).
$follow_search = "follow_search_example"; // string | Optional request linking param from a previous search result or search param object. Can improve request performance.
$hits_per_page = 56; // int | In the FACT-Finder Management Interface you can define how many results will be returned on a page by default. If you prefer another number, you can set it with this parameter.
$ids_only = false; // bool | If true, the returned records will contain only record IDs.
$latitude = 1.2; // double | The latitude coordinate of the location.
$longitude = 1.2; // double | The longitude coordinate of the location.
$market_id = array("market_id_example"); // string[] | Only show products that have values for these market IDs.
$max_count_variants = 56; // int | The maximum number of variants to return for every record
$max_distance = 1.2; // double | Use this parameter to override the geo setting \"maximum distance\" for this request.
$page = 56; // int | If a search result contains many results these will be divided into pages. This limits the amount of data that has to be sent in one go. You can indicate which page should be returned. Page numbering starts at 1.
$purchaser_id = "purchaser_id_example"; // string | Use this parameter to pass the purchaser ID. This ID is only needed, if the 'customer specific pricing' module is active. Otherwise it will be ignored.
$sid = "sid_example"; // string | The session id
$sort = array("sort_example"); // string[] | Sort the result; use FieldName Relevancy to sort the relevancy; format: FieldName:order order must be either asc or desc; example Manufacturer:asc
$split_documents_at = 56; // int | Threshold for variant splitting of documents.
$substring_filter = array("substring_filter_example"); // string[] | Filter for a sub string of the field value; a filter can have multiple values, the values can be separated with the following characters (they are configurable in the config.xml) 'and' = \\_\\_\\_ 'or' = ~~~ the filter value can be excluded with the prefix ! format: facetid:value; example Red~~~!Green = red or not green. If the filter name equals '*', the filter will be applied on any field; example: *:Red~~~Green. This filter type does not support the exclusion prefix. Be aware that filter values for category path filters have to be URL encoded, so a '100%' category path filter value would be '100%25'. It will be encoded a second time when used via 'GET', Swagger will do this second encoding automatically, so the URL contains '100%2525'. Numeric filters use standard mathematical interval notation, but only intervals that are closed on the left and open on the right are allowed inputs. So only intervals of the form [a,b), [a,) or [a,] are allowed. Square brackets mean that the value is included and round brackets mean that the value is not included. E.g. if you want to cover the range 20.00-49.99 please insert [20.00,50.00).
$use_ab_test = true; // bool | If true AbTest features will be active.
$use_asn = true; // bool | If true, filters should be generated for the result.
$use_aso = true; // bool | If true, automatic search optimization will be used.
$use_cache = true; // bool | If true, the search result will be returned from cache memory, if a possible matching result exists.
$use_campaigns = true; // bool | If true, campaigns corresponding to this search result will be returned.
$use_deduplication = true; // bool | If true, the configured deduplication of variants will be used.
$use_found_words = false; // bool | If true, the words that led to the records in the search results will be determined; this may require a large amount of processing time.
$use_geo = true; // bool | If true geoSearch features will be active.
$use_personalization = true; // bool | If true, the relevant products in the result will be personalized.
$use_ranking = true; // bool | If true, ranking will be applied.
$use_search = true; // bool | If true, search will be executed for the query.
$use_semantic_enhancer = true; // bool | If true, the semantic enhancer will be used.
$user_id = "user_id_example"; // string | The user id

try {
    $result = $apiInstance->navigationUsingGET($channel, $advisor_status, $cache_irrelevant, $deduplication_field, $exclude_products_not_in_range, $filter, $follow_search, $hits_per_page, $ids_only, $latitude, $longitude, $market_id, $max_count_variants, $max_distance, $page, $purchaser_id, $sid, $sort, $split_documents_at, $substring_filter, $use_ab_test, $use_asn, $use_aso, $use_cache, $use_campaigns, $use_deduplication, $use_found_words, $use_geo, $use_personalization, $use_ranking, $use_search, $use_semantic_enhancer, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->navigationUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel** | **string**| channel |
 **advisor_status** | **string**| For specifying the current campaign id and answer path; format: campaignId-answerPath; example &#x3D; &#x27;4-_0_1&#x27; | [optional]
 **cache_irrelevant** | [**string[]**](../Model/string.md)| Flag parameters as cache irrelevant | [optional]
 **deduplication_field** | **string**| Specifies on which field variants should be deduplicated. | [optional]
 **exclude_products_not_in_range** | **bool**| Use this parameter to override the geo setting \&quot;exclude products not in range\&quot; for this request. | [optional]
 **filter** | [**string[]**](../Model/string.md)| Filter for the whole field value; a filter can have multiple values, the values can be separated with the following characters (they are configurable in the config.xml) &#x27;and&#x27; &#x3D; \\_\\_\\_ &#x27;or&#x27; &#x3D; ~~~ the filter value can be excluded with the prefix ! format: facetid:value; example Red~~~!Green &#x3D; red or not green. If the filter name equals &#x27;*&#x27;, the filter will be applied on any field; example: *:Red~~~Green. This filter type does not support the exclusion prefix. Be aware that filter values for category path filters have to be URL encoded, so a &#x27;100%&#x27; category path filter value would be &#x27;100%25&#x27;. It will be encoded a second time when used via &#x27;GET&#x27;, Swagger will do this second encoding automatically, so the URL contains &#x27;100%2525&#x27;. Numeric filters use standard mathematical interval notation, but only intervals that are closed on the left and open on the right are allowed inputs. So only intervals of the form [a,b), [a,) or [a,] are allowed. Square brackets mean that the value is included and round brackets mean that the value is not included. E.g. if you want to cover the range 20.00-49.99 please insert [20.00,50.00). | [optional]
 **follow_search** | **string**| Optional request linking param from a previous search result or search param object. Can improve request performance. | [optional]
 **hits_per_page** | **int**| In the FACT-Finder Management Interface you can define how many results will be returned on a page by default. If you prefer another number, you can set it with this parameter. | [optional]
 **ids_only** | **bool**| If true, the returned records will contain only record IDs. | [optional] [default to false]
 **latitude** | **double**| The latitude coordinate of the location. | [optional]
 **longitude** | **double**| The longitude coordinate of the location. | [optional]
 **market_id** | [**string[]**](../Model/string.md)| Only show products that have values for these market IDs. | [optional]
 **max_count_variants** | **int**| The maximum number of variants to return for every record | [optional]
 **max_distance** | **double**| Use this parameter to override the geo setting \&quot;maximum distance\&quot; for this request. | [optional]
 **page** | **int**| If a search result contains many results these will be divided into pages. This limits the amount of data that has to be sent in one go. You can indicate which page should be returned. Page numbering starts at 1. | [optional]
 **purchaser_id** | **string**| Use this parameter to pass the purchaser ID. This ID is only needed, if the &#x27;customer specific pricing&#x27; module is active. Otherwise it will be ignored. | [optional]
 **sid** | **string**| The session id | [optional]
 **sort** | [**string[]**](../Model/string.md)| Sort the result; use FieldName Relevancy to sort the relevancy; format: FieldName:order order must be either asc or desc; example Manufacturer:asc | [optional]
 **split_documents_at** | **int**| Threshold for variant splitting of documents. | [optional]
 **substring_filter** | [**string[]**](../Model/string.md)| Filter for a sub string of the field value; a filter can have multiple values, the values can be separated with the following characters (they are configurable in the config.xml) &#x27;and&#x27; &#x3D; \\_\\_\\_ &#x27;or&#x27; &#x3D; ~~~ the filter value can be excluded with the prefix ! format: facetid:value; example Red~~~!Green &#x3D; red or not green. If the filter name equals &#x27;*&#x27;, the filter will be applied on any field; example: *:Red~~~Green. This filter type does not support the exclusion prefix. Be aware that filter values for category path filters have to be URL encoded, so a &#x27;100%&#x27; category path filter value would be &#x27;100%25&#x27;. It will be encoded a second time when used via &#x27;GET&#x27;, Swagger will do this second encoding automatically, so the URL contains &#x27;100%2525&#x27;. Numeric filters use standard mathematical interval notation, but only intervals that are closed on the left and open on the right are allowed inputs. So only intervals of the form [a,b), [a,) or [a,] are allowed. Square brackets mean that the value is included and round brackets mean that the value is not included. E.g. if you want to cover the range 20.00-49.99 please insert [20.00,50.00). | [optional]
 **use_ab_test** | **bool**| If true AbTest features will be active. | [optional] [default to true]
 **use_asn** | **bool**| If true, filters should be generated for the result. | [optional] [default to true]
 **use_aso** | **bool**| If true, automatic search optimization will be used. | [optional] [default to true]
 **use_cache** | **bool**| If true, the search result will be returned from cache memory, if a possible matching result exists. | [optional] [default to true]
 **use_campaigns** | **bool**| If true, campaigns corresponding to this search result will be returned. | [optional] [default to true]
 **use_deduplication** | **bool**| If true, the configured deduplication of variants will be used. | [optional] [default to true]
 **use_found_words** | **bool**| If true, the words that led to the records in the search results will be determined; this may require a large amount of processing time. | [optional] [default to false]
 **use_geo** | **bool**| If true geoSearch features will be active. | [optional] [default to true]
 **use_personalization** | **bool**| If true, the relevant products in the result will be personalized. | [optional] [default to true]
 **use_ranking** | **bool**| If true, ranking will be applied. | [optional] [default to true]
 **use_search** | **bool**| If true, search will be executed for the query. | [optional] [default to true]
 **use_semantic_enhancer** | **bool**| If true, the semantic enhancer will be used. | [optional] [default to true]
 **user_id** | **string**| The user id | [optional]

### Return type

[**\Swagger\Client\Model\Result**](../Model/Result.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [oAuth2](../../README.md#oAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **navigationUsingPOST**
> \Swagger\Client\Model\Result navigationUsingPOST($body, $channel)

Navigation with POST

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure OAuth2 access token for authorization: oAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\FactFinder\SearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\NavigationRequest(); // \Swagger\Client\Model\NavigationRequest | navigationRequest
$channel = "channel_example"; // string | channel

try {
    $result = $apiInstance->navigationUsingPOST($body, $channel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->navigationUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\NavigationRequest**](../Model/NavigationRequest.md)| navigationRequest |
 **channel** | **string**| channel |

### Return type

[**\Swagger\Client\Model\Result**](../Model/Result.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [oAuth2](../../README.md#oAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchUsingGET**
> \Swagger\Client\Model\Result searchUsingGET($channel, $query, $advisor_status, $article_number_search, $cache_irrelevant, $deduplication_field, $exclude_products_not_in_range, $filter, $follow_search, $hits_per_page, $ids_only, $latitude, $longitude, $market_id, $max_count_variants, $max_distance, $page, $purchaser_id, $query_from_suggest, $search_field, $sid, $sort, $split_documents_at, $substring_filter, $use_ab_test, $use_asn, $use_aso, $use_cache, $use_campaigns, $use_deduplication, $use_found_words, $use_geo, $use_personalization, $use_ranking, $use_search, $use_semantic_enhancer, $user_id, $user_input)

Search

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure OAuth2 access token for authorization: oAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\FactFinder\SearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$channel = "channel_example"; // string | channel
$query = "query_example"; // string | The search term
$advisor_status = "advisor_status_example"; // string | For specifying the current campaign id and answer path; format: campaignId-answerPath; example = '4-_0_1'
$article_number_search = "DETECT"; // string | Specifies if the query should be interpreted as article number
$cache_irrelevant = array("cache_irrelevant_example"); // string[] | Flag parameters as cache irrelevant
$deduplication_field = "deduplication_field_example"; // string | Specifies on which field variants should be deduplicated.
$exclude_products_not_in_range = true; // bool | Use this parameter to override the geo setting \"exclude products not in range\" for this request.
$filter = array("filter_example"); // string[] | Filter for the whole field value; a filter can have multiple values, the values can be separated with the following characters (they are configurable in the config.xml) 'and' = \\_\\_\\_ 'or' = ~~~ the filter value can be excluded with the prefix ! format: facetid:value; example Red~~~!Green = red or not green. If the filter name equals '*', the filter will be applied on any field; example: *:Red~~~Green. This filter type does not support the exclusion prefix. Be aware that filter values for category path filters have to be URL encoded, so a '100%' category path filter value would be '100%25'. It will be encoded a second time when used via 'GET', Swagger will do this second encoding automatically, so the URL contains '100%2525'. Numeric filters use standard mathematical interval notation, but only intervals that are closed on the left and open on the right are allowed inputs. So only intervals of the form [a,b), [a,) or [a,] are allowed. Square brackets mean that the value is included and round brackets mean that the value is not included. E.g. if you want to cover the range 20.00-49.99 please insert [20.00,50.00).
$follow_search = "follow_search_example"; // string | Optional request linking param from a previous search result or search param object. Can improve request performance.
$hits_per_page = 56; // int | In the FACT-Finder Management Interface you can define how many results will be returned on a page by default. If you prefer another number, you can set it with this parameter.
$ids_only = false; // bool | If true, the returned records will contain only record IDs.
$latitude = 1.2; // double | The latitude coordinate of the location.
$longitude = 1.2; // double | The longitude coordinate of the location.
$market_id = array("market_id_example"); // string[] | Only show products that have values for these market IDs.
$max_count_variants = 56; // int | The maximum number of variants to return for every record
$max_distance = 1.2; // double | Use this parameter to override the geo setting \"maximum distance\" for this request.
$page = 56; // int | If a search result contains many results these will be divided into pages. This limits the amount of data that has to be sent in one go. You can indicate which page should be returned. Page numbering starts at 1.
$purchaser_id = "purchaser_id_example"; // string | Use this parameter to pass the purchaser ID. This ID is only needed, if the 'customer specific pricing' module is active. Otherwise it will be ignored.
$query_from_suggest = true; // bool | This parameter indicates that the FACT-Finder query was triggered through a selection from the suggestion list. In this case send the parameter with the value true.
$search_field = "search_field_example"; // string | Normally FACT-Finder searches all fields defined as searchable. However it is possible to search only one specific field as well.
$sid = "sid_example"; // string | The session id
$sort = array("sort_example"); // string[] | Sort the result; use FieldName Relevancy to sort the relevancy; format: FieldName:order order must be either asc or desc; example Manufacturer:asc
$split_documents_at = 56; // int | Threshold for variant splitting of documents.
$substring_filter = array("substring_filter_example"); // string[] | Filter for a sub string of the field value; a filter can have multiple values, the values can be separated with the following characters (they are configurable in the config.xml) 'and' = \\_\\_\\_ 'or' = ~~~ the filter value can be excluded with the prefix ! format: facetid:value; example Red~~~!Green = red or not green. If the filter name equals '*', the filter will be applied on any field; example: *:Red~~~Green. This filter type does not support the exclusion prefix. Be aware that filter values for category path filters have to be URL encoded, so a '100%' category path filter value would be '100%25'. It will be encoded a second time when used via 'GET', Swagger will do this second encoding automatically, so the URL contains '100%2525'. Numeric filters use standard mathematical interval notation, but only intervals that are closed on the left and open on the right are allowed inputs. So only intervals of the form [a,b), [a,) or [a,] are allowed. Square brackets mean that the value is included and round brackets mean that the value is not included. E.g. if you want to cover the range 20.00-49.99 please insert [20.00,50.00).
$use_ab_test = true; // bool | If true AbTest features will be active.
$use_asn = true; // bool | If true, filters should be generated for the result.
$use_aso = true; // bool | If true, automatic search optimization will be used.
$use_cache = true; // bool | If true, the search result will be returned from cache memory, if a possible matching result exists.
$use_campaigns = true; // bool | If true, campaigns corresponding to this search result will be returned.
$use_deduplication = true; // bool | If true, the configured deduplication of variants will be used.
$use_found_words = false; // bool | If true, the words that led to the records in the search results will be determined; this may require a large amount of processing time.
$use_geo = true; // bool | If true geoSearch features will be active.
$use_personalization = true; // bool | If true, the relevant products in the result will be personalized.
$use_ranking = true; // bool | If true, ranking will be applied.
$use_search = true; // bool | If true, search will be executed for the query.
$use_semantic_enhancer = true; // bool | If true, the semantic enhancer will be used.
$user_id = "user_id_example"; // string | The user id
$user_input = "user_input_example"; // string | Use this parameter to send the characters, the shop user entered until the search query was triggered.

try {
    $result = $apiInstance->searchUsingGET($channel, $query, $advisor_status, $article_number_search, $cache_irrelevant, $deduplication_field, $exclude_products_not_in_range, $filter, $follow_search, $hits_per_page, $ids_only, $latitude, $longitude, $market_id, $max_count_variants, $max_distance, $page, $purchaser_id, $query_from_suggest, $search_field, $sid, $sort, $split_documents_at, $substring_filter, $use_ab_test, $use_asn, $use_aso, $use_cache, $use_campaigns, $use_deduplication, $use_found_words, $use_geo, $use_personalization, $use_ranking, $use_search, $use_semantic_enhancer, $user_id, $user_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->searchUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel** | **string**| channel |
 **query** | **string**| The search term |
 **advisor_status** | **string**| For specifying the current campaign id and answer path; format: campaignId-answerPath; example &#x3D; &#x27;4-_0_1&#x27; | [optional]
 **article_number_search** | **string**| Specifies if the query should be interpreted as article number | [optional] [default to DETECT]
 **cache_irrelevant** | [**string[]**](../Model/string.md)| Flag parameters as cache irrelevant | [optional]
 **deduplication_field** | **string**| Specifies on which field variants should be deduplicated. | [optional]
 **exclude_products_not_in_range** | **bool**| Use this parameter to override the geo setting \&quot;exclude products not in range\&quot; for this request. | [optional]
 **filter** | [**string[]**](../Model/string.md)| Filter for the whole field value; a filter can have multiple values, the values can be separated with the following characters (they are configurable in the config.xml) &#x27;and&#x27; &#x3D; \\_\\_\\_ &#x27;or&#x27; &#x3D; ~~~ the filter value can be excluded with the prefix ! format: facetid:value; example Red~~~!Green &#x3D; red or not green. If the filter name equals &#x27;*&#x27;, the filter will be applied on any field; example: *:Red~~~Green. This filter type does not support the exclusion prefix. Be aware that filter values for category path filters have to be URL encoded, so a &#x27;100%&#x27; category path filter value would be &#x27;100%25&#x27;. It will be encoded a second time when used via &#x27;GET&#x27;, Swagger will do this second encoding automatically, so the URL contains &#x27;100%2525&#x27;. Numeric filters use standard mathematical interval notation, but only intervals that are closed on the left and open on the right are allowed inputs. So only intervals of the form [a,b), [a,) or [a,] are allowed. Square brackets mean that the value is included and round brackets mean that the value is not included. E.g. if you want to cover the range 20.00-49.99 please insert [20.00,50.00). | [optional]
 **follow_search** | **string**| Optional request linking param from a previous search result or search param object. Can improve request performance. | [optional]
 **hits_per_page** | **int**| In the FACT-Finder Management Interface you can define how many results will be returned on a page by default. If you prefer another number, you can set it with this parameter. | [optional]
 **ids_only** | **bool**| If true, the returned records will contain only record IDs. | [optional] [default to false]
 **latitude** | **double**| The latitude coordinate of the location. | [optional]
 **longitude** | **double**| The longitude coordinate of the location. | [optional]
 **market_id** | [**string[]**](../Model/string.md)| Only show products that have values for these market IDs. | [optional]
 **max_count_variants** | **int**| The maximum number of variants to return for every record | [optional]
 **max_distance** | **double**| Use this parameter to override the geo setting \&quot;maximum distance\&quot; for this request. | [optional]
 **page** | **int**| If a search result contains many results these will be divided into pages. This limits the amount of data that has to be sent in one go. You can indicate which page should be returned. Page numbering starts at 1. | [optional]
 **purchaser_id** | **string**| Use this parameter to pass the purchaser ID. This ID is only needed, if the &#x27;customer specific pricing&#x27; module is active. Otherwise it will be ignored. | [optional]
 **query_from_suggest** | **bool**| This parameter indicates that the FACT-Finder query was triggered through a selection from the suggestion list. In this case send the parameter with the value true. | [optional]
 **search_field** | **string**| Normally FACT-Finder searches all fields defined as searchable. However it is possible to search only one specific field as well. | [optional]
 **sid** | **string**| The session id | [optional]
 **sort** | [**string[]**](../Model/string.md)| Sort the result; use FieldName Relevancy to sort the relevancy; format: FieldName:order order must be either asc or desc; example Manufacturer:asc | [optional]
 **split_documents_at** | **int**| Threshold for variant splitting of documents. | [optional]
 **substring_filter** | [**string[]**](../Model/string.md)| Filter for a sub string of the field value; a filter can have multiple values, the values can be separated with the following characters (they are configurable in the config.xml) &#x27;and&#x27; &#x3D; \\_\\_\\_ &#x27;or&#x27; &#x3D; ~~~ the filter value can be excluded with the prefix ! format: facetid:value; example Red~~~!Green &#x3D; red or not green. If the filter name equals &#x27;*&#x27;, the filter will be applied on any field; example: *:Red~~~Green. This filter type does not support the exclusion prefix. Be aware that filter values for category path filters have to be URL encoded, so a &#x27;100%&#x27; category path filter value would be &#x27;100%25&#x27;. It will be encoded a second time when used via &#x27;GET&#x27;, Swagger will do this second encoding automatically, so the URL contains &#x27;100%2525&#x27;. Numeric filters use standard mathematical interval notation, but only intervals that are closed on the left and open on the right are allowed inputs. So only intervals of the form [a,b), [a,) or [a,] are allowed. Square brackets mean that the value is included and round brackets mean that the value is not included. E.g. if you want to cover the range 20.00-49.99 please insert [20.00,50.00). | [optional]
 **use_ab_test** | **bool**| If true AbTest features will be active. | [optional] [default to true]
 **use_asn** | **bool**| If true, filters should be generated for the result. | [optional] [default to true]
 **use_aso** | **bool**| If true, automatic search optimization will be used. | [optional] [default to true]
 **use_cache** | **bool**| If true, the search result will be returned from cache memory, if a possible matching result exists. | [optional] [default to true]
 **use_campaigns** | **bool**| If true, campaigns corresponding to this search result will be returned. | [optional] [default to true]
 **use_deduplication** | **bool**| If true, the configured deduplication of variants will be used. | [optional] [default to true]
 **use_found_words** | **bool**| If true, the words that led to the records in the search results will be determined; this may require a large amount of processing time. | [optional] [default to false]
 **use_geo** | **bool**| If true geoSearch features will be active. | [optional] [default to true]
 **use_personalization** | **bool**| If true, the relevant products in the result will be personalized. | [optional] [default to true]
 **use_ranking** | **bool**| If true, ranking will be applied. | [optional] [default to true]
 **use_search** | **bool**| If true, search will be executed for the query. | [optional] [default to true]
 **use_semantic_enhancer** | **bool**| If true, the semantic enhancer will be used. | [optional] [default to true]
 **user_id** | **string**| The user id | [optional]
 **user_input** | **string**| Use this parameter to send the characters, the shop user entered until the search query was triggered. | [optional]

### Return type

[**\Swagger\Client\Model\Result**](../Model/Result.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [oAuth2](../../README.md#oAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchUsingPOST**
> \Swagger\Client\Model\Result searchUsingPOST($body, $channel)

Search with POST

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure OAuth2 access token for authorization: oAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\FactFinder\SearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\SearchRequest(); // \Swagger\Client\Model\SearchRequest | searchRequest
$channel = "channel_example"; // string | channel

try {
    $result = $apiInstance->searchUsingPOST($body, $channel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->searchUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\SearchRequest**](../Model/SearchRequest.md)| searchRequest |
 **channel** | **string**| channel |

### Return type

[**\Swagger\Client\Model\Result**](../Model/Result.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [oAuth2](../../README.md#oAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

