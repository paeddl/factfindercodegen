# Swagger\Client\CampaignApi

All URIs are relative to *//f4k.fact-finder.de/fact-finder*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getPageCampaignsUsingGET**](CampaignApi.md#getpagecampaignsusingget) | **GET** /rest/v5/campaign/{channel}/page | Get page campaigns
[**getProductCampaignsUsingGET**](CampaignApi.md#getproductcampaignsusingget) | **GET** /rest/v5/campaign/{channel}/product | Get product campaigns
[**getShoppingCartCampaignsUsingGET**](CampaignApi.md#getshoppingcartcampaignsusingget) | **GET** /rest/v5/campaign/{channel}/shoppingcart | Get shopping cart campaigns

# **getPageCampaignsUsingGET**
> \Swagger\Client\Model\CampaignsResult getPageCampaignsUsingGET($channel, $page_id, $exclude_products_not_in_range, $ids_only, $latitude, $longitude, $market_id, $max_distance, $purchaser_id, $sid)

Get page campaigns

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

$apiInstance = new Swagger\Client\FactFinder\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$channel = "channel_example"; // string | channel
$page_id = "page_id_example"; // string | Use this parameter to pass a page ID for which you wish to obtain campaigns.
$exclude_products_not_in_range = true; // bool | Use this parameter to override the geo setting \"exclude products not in range\" for this request.
$ids_only = false; // bool | If the value true is passed, then only the record IDs will be returned, streamlining the results. Additionally, if the Geo module is enabled, the IDs of all markets the product is mapped to will be also included. If you do not need the other information in the results, this will help you to improve performance.
$latitude = 1.2; // double | The latitude coordinate of the current location.
$longitude = 1.2; // double | The longitude coordinate of the current location.
$market_id = array("market_id_example"); // string[] | Currently selected markets
$max_distance = 1.2; // double | Use this parameter to override the geo setting \"maximum distance\" for this request.
$purchaser_id = "purchaser_id_example"; // string | Use this parameter to pass the purchaser ID. This ID is only needed, if the 'customer specific pricing' module is active. Otherwise it will be ignored.
$sid = "sid_example"; // string | This parameter is used to pass an id for the user session. This is important for recognising the user, if you want to trigger personalised campaigns, as well as for FACT-Finder tracking.

try {
    $result = $apiInstance->getPageCampaignsUsingGET($channel, $page_id, $exclude_products_not_in_range, $ids_only, $latitude, $longitude, $market_id, $max_distance, $purchaser_id, $sid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->getPageCampaignsUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel** | **string**| channel |
 **page_id** | **string**| Use this parameter to pass a page ID for which you wish to obtain campaigns. |
 **exclude_products_not_in_range** | **bool**| Use this parameter to override the geo setting \&quot;exclude products not in range\&quot; for this request. | [optional]
 **ids_only** | **bool**| If the value true is passed, then only the record IDs will be returned, streamlining the results. Additionally, if the Geo module is enabled, the IDs of all markets the product is mapped to will be also included. If you do not need the other information in the results, this will help you to improve performance. | [optional] [default to false]
 **latitude** | **double**| The latitude coordinate of the current location. | [optional]
 **longitude** | **double**| The longitude coordinate of the current location. | [optional]
 **market_id** | [**string[]**](../Model/string.md)| Currently selected markets | [optional]
 **max_distance** | **double**| Use this parameter to override the geo setting \&quot;maximum distance\&quot; for this request. | [optional]
 **purchaser_id** | **string**| Use this parameter to pass the purchaser ID. This ID is only needed, if the &#x27;customer specific pricing&#x27; module is active. Otherwise it will be ignored. | [optional]
 **sid** | **string**| This parameter is used to pass an id for the user session. This is important for recognising the user, if you want to trigger personalised campaigns, as well as for FACT-Finder tracking. | [optional]

### Return type

[**\Swagger\Client\Model\CampaignsResult**](../Model/CampaignsResult.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [oAuth2](../../README.md#oAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProductCampaignsUsingGET**
> \Swagger\Client\Model\CampaignsResult getProductCampaignsUsingGET($channel, $id, $exclude_products_not_in_range, $id_type, $ids_only, $latitude, $longitude, $market_id, $max_distance, $purchaser_id, $sid)

Get product campaigns

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

$apiInstance = new Swagger\Client\FactFinder\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$channel = "channel_example"; // string | channel
$id = "id_example"; // string | Use this parameter to pass a ID (master or product) for which you wish to obtain campaigns.
$exclude_products_not_in_range = true; // bool | Use this parameter to override the geo setting \"exclude products not in range\" for this request.
$id_type = "productNumber"; // string | Use this parameter to determine the type of ID passed to the method. Use 'productNumber' if the given ID is from the field with 'productNumber' role. Use 'id' if it is from the field with 'masterId' role.
$ids_only = false; // bool | If the value true is passed, then only the record IDs will be returned, streamlining the results. Additionally, if the Geo module is enabled, the IDs of all markets the product is mapped to will be also included. If you do not need the other information in the results, this will help you to improve performance.
$latitude = 1.2; // double | The latitude coordinate of the current location.
$longitude = 1.2; // double | The longitude coordinate of the current location.
$market_id = array("market_id_example"); // string[] | Currently selected markets
$max_distance = 1.2; // double | Use this parameter to override the geo setting \"maximum distance\" for this request.
$purchaser_id = "purchaser_id_example"; // string | Use this parameter to pass the purchaser ID. This ID is only needed, if the 'customer specific pricing' module is active. Otherwise it will be ignored.
$sid = "sid_example"; // string | This parameter is used to pass an id for the user session. This is important for recognising the user, if you want to trigger personalised campaigns, as well as for FACT-Finder tracking.

try {
    $result = $apiInstance->getProductCampaignsUsingGET($channel, $id, $exclude_products_not_in_range, $id_type, $ids_only, $latitude, $longitude, $market_id, $max_distance, $purchaser_id, $sid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->getProductCampaignsUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel** | **string**| channel |
 **id** | **string**| Use this parameter to pass a ID (master or product) for which you wish to obtain campaigns. |
 **exclude_products_not_in_range** | **bool**| Use this parameter to override the geo setting \&quot;exclude products not in range\&quot; for this request. | [optional]
 **id_type** | **string**| Use this parameter to determine the type of ID passed to the method. Use &#x27;productNumber&#x27; if the given ID is from the field with &#x27;productNumber&#x27; role. Use &#x27;id&#x27; if it is from the field with &#x27;masterId&#x27; role. | [optional] [default to productNumber]
 **ids_only** | **bool**| If the value true is passed, then only the record IDs will be returned, streamlining the results. Additionally, if the Geo module is enabled, the IDs of all markets the product is mapped to will be also included. If you do not need the other information in the results, this will help you to improve performance. | [optional] [default to false]
 **latitude** | **double**| The latitude coordinate of the current location. | [optional]
 **longitude** | **double**| The longitude coordinate of the current location. | [optional]
 **market_id** | [**string[]**](../Model/string.md)| Currently selected markets | [optional]
 **max_distance** | **double**| Use this parameter to override the geo setting \&quot;maximum distance\&quot; for this request. | [optional]
 **purchaser_id** | **string**| Use this parameter to pass the purchaser ID. This ID is only needed, if the &#x27;customer specific pricing&#x27; module is active. Otherwise it will be ignored. | [optional]
 **sid** | **string**| This parameter is used to pass an id for the user session. This is important for recognising the user, if you want to trigger personalised campaigns, as well as for FACT-Finder tracking. | [optional]

### Return type

[**\Swagger\Client\Model\CampaignsResult**](../Model/CampaignsResult.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [oAuth2](../../README.md#oAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getShoppingCartCampaignsUsingGET**
> \Swagger\Client\Model\CampaignsResult getShoppingCartCampaignsUsingGET($channel, $product_number, $exclude_products_not_in_range, $ids_only, $latitude, $longitude, $market_id, $max_distance, $purchaser_id, $sid)

Get shopping cart campaigns

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

$apiInstance = new Swagger\Client\FactFinder\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$channel = "channel_example"; // string | channel
$product_number = array("product_number_example"); // string[] | Use this parameter to pass product ID(s) for which you wish to obtain campaigns.
$exclude_products_not_in_range = true; // bool | Use this parameter to override the geo setting \"exclude products not in range\" for this request.
$ids_only = false; // bool | If the value true is passed, then only the record IDs will be returned, streamlining the results. Additionally, if the Geo module is enabled, the IDs of all markets the product is mapped to will be also included. If you do not need the other information in the results, this will help you to improve performance.
$latitude = 1.2; // double | The latitude coordinate of the current location.
$longitude = 1.2; // double | The longitude coordinate of the current location.
$market_id = array("market_id_example"); // string[] | Currently selected markets
$max_distance = 1.2; // double | Use this parameter to override the geo setting \"maximum distance\" for this request.
$purchaser_id = "purchaser_id_example"; // string | Use this parameter to pass the purchaser ID. This ID is only needed, if the 'customer specific pricing' module is active. Otherwise it will be ignored.
$sid = "sid_example"; // string | This parameter is used to pass an id for the user session. This is important for recognising the user, if you want to trigger personalised campaigns, as well as for FACT-Finder tracking.

try {
    $result = $apiInstance->getShoppingCartCampaignsUsingGET($channel, $product_number, $exclude_products_not_in_range, $ids_only, $latitude, $longitude, $market_id, $max_distance, $purchaser_id, $sid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->getShoppingCartCampaignsUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel** | **string**| channel |
 **product_number** | [**string[]**](../Model/string.md)| Use this parameter to pass product ID(s) for which you wish to obtain campaigns. |
 **exclude_products_not_in_range** | **bool**| Use this parameter to override the geo setting \&quot;exclude products not in range\&quot; for this request. | [optional]
 **ids_only** | **bool**| If the value true is passed, then only the record IDs will be returned, streamlining the results. Additionally, if the Geo module is enabled, the IDs of all markets the product is mapped to will be also included. If you do not need the other information in the results, this will help you to improve performance. | [optional] [default to false]
 **latitude** | **double**| The latitude coordinate of the current location. | [optional]
 **longitude** | **double**| The longitude coordinate of the current location. | [optional]
 **market_id** | [**string[]**](../Model/string.md)| Currently selected markets | [optional]
 **max_distance** | **double**| Use this parameter to override the geo setting \&quot;maximum distance\&quot; for this request. | [optional]
 **purchaser_id** | **string**| Use this parameter to pass the purchaser ID. This ID is only needed, if the &#x27;customer specific pricing&#x27; module is active. Otherwise it will be ignored. | [optional]
 **sid** | **string**| This parameter is used to pass an id for the user session. This is important for recognising the user, if you want to trigger personalised campaigns, as well as for FACT-Finder tracking. | [optional]

### Return type

[**\Swagger\Client\Model\CampaignsResult**](../Model/CampaignsResult.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [oAuth2](../../README.md#oAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

