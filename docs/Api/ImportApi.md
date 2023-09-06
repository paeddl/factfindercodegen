# Swagger\Client\ImportApi

All URIs are relative to *//f4k.fact-finder.de/fact-finder*

Method | HTTP request | Description
------------- | ------------- | -------------
[**isImportRunningUsingGET**](ImportApi.md#isimportrunningusingget) | **GET** /rest/v5/import/running | Check if an import is running in any of the supplied channels
[**refreshRecommendationDatabasesUsingPOST**](ImportApi.md#refreshrecommendationdatabasesusingpost) | **POST** /rest/v5/import/refreshRecommendations | Refresh recommendation databases
[**startCustomerSpecificPricingImportUsingPOST**](ImportApi.md#startcustomerspecificpricingimportusingpost) | **POST** /rest/v5/import/customerprices | Start customer specific pricing import
[**startGeoImportUsingPOST**](ImportApi.md#startgeoimportusingpost) | **POST** /rest/v5/import/geo | Start geo import
[**startRankingImportUsingPOST**](ImportApi.md#startrankingimportusingpost) | **POST** /rest/v5/import/ranking | Start ranking import
[**startRecommendationImportUsingPOST**](ImportApi.md#startrecommendationimportusingpost) | **POST** /rest/v5/import/recommendation | Start recommendation import
[**startSearchImportUsingPOST**](ImportApi.md#startsearchimportusingpost) | **POST** /rest/v5/import/search | Start search import
[**startSuggestImportUsingPOST**](ImportApi.md#startsuggestimportusingpost) | **POST** /rest/v5/import/suggest | Start suggest import

# **isImportRunningUsingGET**
> bool isImportRunningUsingGET($channel)

Check if an import is running in any of the supplied channels

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

$apiInstance = new Swagger\Client\FactFinder\ImportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$channel = array("channel_example"); // string[] | channel

try {
    $result = $apiInstance->isImportRunningUsingGET($channel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImportApi->isImportRunningUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel** | [**string[]**](../Model/string.md)| channel |

### Return type

**bool**

### Authorization

[basicAuth](../../README.md#basicAuth), [oAuth2](../../README.md#oAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **refreshRecommendationDatabasesUsingPOST**
> refreshRecommendationDatabasesUsingPOST($channel)

Refresh recommendation databases

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

$apiInstance = new Swagger\Client\FactFinder\ImportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$channel = array("channel_example"); // string[] | channel

try {
    $apiInstance->refreshRecommendationDatabasesUsingPOST($channel);
} catch (Exception $e) {
    echo 'Exception when calling ImportApi->refreshRecommendationDatabasesUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel** | [**string[]**](../Model/string.md)| channel | [optional]

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth), [oAuth2](../../README.md#oAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **startCustomerSpecificPricingImportUsingPOST**
> \Swagger\Client\Model\ImportChannelResult[] startCustomerSpecificPricingImportUsingPOST($cache_flush, $channel, $download, $import_stage, $quiet)

Start customer specific pricing import

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

$apiInstance = new Swagger\Client\FactFinder\ImportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cache_flush = false; // bool | if true: causes a cache flush after a channel has been imported
$channel = array("channel_example"); // string[] | channel
$download = false; // bool | if true: causes the import file to be updated first. If no URL is stored in the FACT-Finder configuration, this parameter has no effect.
$import_stage = "FULL"; // string | IMPORT_ONLY only fills the intermediate DB, LOAD_ONLY imports that database into memory, and FULL combines both stages
$quiet = false; // bool | if true: only receive a filled response if an error occurs during the import otherwise the response is just empty

try {
    $result = $apiInstance->startCustomerSpecificPricingImportUsingPOST($cache_flush, $channel, $download, $import_stage, $quiet);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImportApi->startCustomerSpecificPricingImportUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cache_flush** | **bool**| if true: causes a cache flush after a channel has been imported | [optional] [default to false]
 **channel** | [**string[]**](../Model/string.md)| channel | [optional]
 **download** | **bool**| if true: causes the import file to be updated first. If no URL is stored in the FACT-Finder configuration, this parameter has no effect. | [optional] [default to false]
 **import_stage** | **string**| IMPORT_ONLY only fills the intermediate DB, LOAD_ONLY imports that database into memory, and FULL combines both stages | [optional] [default to FULL]
 **quiet** | **bool**| if true: only receive a filled response if an error occurs during the import otherwise the response is just empty | [optional] [default to false]

### Return type

[**\Swagger\Client\Model\ImportChannelResult[]**](../Model/ImportChannelResult.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [oAuth2](../../README.md#oAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **startGeoImportUsingPOST**
> \Swagger\Client\Model\ImportChannelResult[] startGeoImportUsingPOST($cache_flush, $channel, $download, $import_stage, $quiet)

Start geo import

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

$apiInstance = new Swagger\Client\FactFinder\ImportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cache_flush = false; // bool | if true: causes a cache flush after a channel has been imported
$channel = array("channel_example"); // string[] | channel
$download = false; // bool | if true: causes the import file to be updated first. If no URL is stored in the FACT-Finder configuration, this parameter has no effect.
$import_stage = "FULL"; // string | IMPORT_ONLY only fills the intermediate DB, LOAD_ONLY imports that database into memory, and FULL combines both stages
$quiet = false; // bool | if true: only receive a filled response if an error occurs during the import otherwise the response is just empty

try {
    $result = $apiInstance->startGeoImportUsingPOST($cache_flush, $channel, $download, $import_stage, $quiet);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImportApi->startGeoImportUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cache_flush** | **bool**| if true: causes a cache flush after a channel has been imported | [optional] [default to false]
 **channel** | [**string[]**](../Model/string.md)| channel | [optional]
 **download** | **bool**| if true: causes the import file to be updated first. If no URL is stored in the FACT-Finder configuration, this parameter has no effect. | [optional] [default to false]
 **import_stage** | **string**| IMPORT_ONLY only fills the intermediate DB, LOAD_ONLY imports that database into memory, and FULL combines both stages | [optional] [default to FULL]
 **quiet** | **bool**| if true: only receive a filled response if an error occurs during the import otherwise the response is just empty | [optional] [default to false]

### Return type

[**\Swagger\Client\Model\ImportChannelResult[]**](../Model/ImportChannelResult.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [oAuth2](../../README.md#oAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **startRankingImportUsingPOST**
> \Swagger\Client\Model\ImportChannelResult[] startRankingImportUsingPOST($cache_flush, $channel, $quiet)

Start ranking import

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

$apiInstance = new Swagger\Client\FactFinder\ImportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cache_flush = false; // bool | if true: causes a cache flush after a channel has been imported
$channel = array("channel_example"); // string[] | channel
$quiet = false; // bool | if true: only receive a filled response if an error occurs during the import otherwise the response is just empty

try {
    $result = $apiInstance->startRankingImportUsingPOST($cache_flush, $channel, $quiet);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImportApi->startRankingImportUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cache_flush** | **bool**| if true: causes a cache flush after a channel has been imported | [optional] [default to false]
 **channel** | [**string[]**](../Model/string.md)| channel | [optional]
 **quiet** | **bool**| if true: only receive a filled response if an error occurs during the import otherwise the response is just empty | [optional] [default to false]

### Return type

[**\Swagger\Client\Model\ImportChannelResult[]**](../Model/ImportChannelResult.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [oAuth2](../../README.md#oAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **startRecommendationImportUsingPOST**
> \Swagger\Client\Model\ImportChannelResult[] startRecommendationImportUsingPOST($channel, $quiet)

Start recommendation import

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

$apiInstance = new Swagger\Client\FactFinder\ImportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$channel = array("channel_example"); // string[] | channel
$quiet = false; // bool | if true: only receive a filled response if an error occurs during the import otherwise the response is just empty

try {
    $result = $apiInstance->startRecommendationImportUsingPOST($channel, $quiet);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImportApi->startRecommendationImportUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel** | [**string[]**](../Model/string.md)| channel | [optional]
 **quiet** | **bool**| if true: only receive a filled response if an error occurs during the import otherwise the response is just empty | [optional] [default to false]

### Return type

[**\Swagger\Client\Model\ImportChannelResult[]**](../Model/ImportChannelResult.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [oAuth2](../../README.md#oAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **startSearchImportUsingPOST**
> \Swagger\Client\Model\ImportChannelResult[] startSearchImportUsingPOST($cache_flush, $channel, $download, $import_stage, $include_customer_prices, $include_geo, $quiet)

Start search import

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

$apiInstance = new Swagger\Client\FactFinder\ImportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cache_flush = false; // bool | if true: causes a cache flush after a channel has been imported
$channel = array("channel_example"); // string[] | channel
$download = false; // bool | if true: causes the import file to be updated first. If no URL is stored in the FACT-Finder configuration, this parameter has no effect.
$import_stage = "FULL"; // string | IMPORT_ONLY only fills the intermediate DB, LOAD_ONLY imports that database into memory, and FULL combines both stages
$include_customer_prices = false; // bool | if true: executes a customer specific pricing import after the search import. If customer specific pricing is not enabled for a given channel, this parameter has no effect.
$include_geo = false; // bool | if true: executes a geo import after the search import. If the geo module is not enabled for a given channel, this parameter has no effect.
$quiet = false; // bool | if true: only receive a filled response if an error occurs during the import otherwise the response is just empty

try {
    $result = $apiInstance->startSearchImportUsingPOST($cache_flush, $channel, $download, $import_stage, $include_customer_prices, $include_geo, $quiet);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImportApi->startSearchImportUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cache_flush** | **bool**| if true: causes a cache flush after a channel has been imported | [optional] [default to false]
 **channel** | [**string[]**](../Model/string.md)| channel | [optional]
 **download** | **bool**| if true: causes the import file to be updated first. If no URL is stored in the FACT-Finder configuration, this parameter has no effect. | [optional] [default to false]
 **import_stage** | **string**| IMPORT_ONLY only fills the intermediate DB, LOAD_ONLY imports that database into memory, and FULL combines both stages | [optional] [default to FULL]
 **include_customer_prices** | **bool**| if true: executes a customer specific pricing import after the search import. If customer specific pricing is not enabled for a given channel, this parameter has no effect. | [optional] [default to false]
 **include_geo** | **bool**| if true: executes a geo import after the search import. If the geo module is not enabled for a given channel, this parameter has no effect. | [optional] [default to false]
 **quiet** | **bool**| if true: only receive a filled response if an error occurs during the import otherwise the response is just empty | [optional] [default to false]

### Return type

[**\Swagger\Client\Model\ImportChannelResult[]**](../Model/ImportChannelResult.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [oAuth2](../../README.md#oAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **startSuggestImportUsingPOST**
> \Swagger\Client\Model\ImportChannelResult[] startSuggestImportUsingPOST($channel, $quiet)

Start suggest import

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

$apiInstance = new Swagger\Client\FactFinder\ImportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$channel = array("channel_example"); // string[] | channel
$quiet = false; // bool | if true: only receive a filled response if an error occurs during the import otherwise the response is just empty

try {
    $result = $apiInstance->startSuggestImportUsingPOST($channel, $quiet);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImportApi->startSuggestImportUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel** | [**string[]**](../Model/string.md)| channel | [optional]
 **quiet** | **bool**| if true: only receive a filled response if an error occurs during the import otherwise the response is just empty | [optional] [default to false]

### Return type

[**\Swagger\Client\Model\ImportChannelResult[]**](../Model/ImportChannelResult.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [oAuth2](../../README.md#oAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

