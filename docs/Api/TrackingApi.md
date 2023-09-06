# Swagger\Client\TrackingApi

All URIs are relative to *//f4k.fact-finder.de/fact-finder*

Method | HTTP request | Description
------------- | ------------- | -------------
[**trackCartUsingPOST**](TrackingApi.md#trackcartusingpost) | **POST** /rest/v5/track/{channel}/cart | Track a cart event
[**trackCheckoutUsingPOST**](TrackingApi.md#trackcheckoutusingpost) | **POST** /rest/v5/track/{channel}/checkout | Track a checkout event
[**trackClickUsingPOST**](TrackingApi.md#trackclickusingpost) | **POST** /rest/v5/track/{channel}/click | Track a click event
[**trackFeedbackUsingPOST**](TrackingApi.md#trackfeedbackusingpost) | **POST** /rest/v5/track/{channel}/feedback | Track a feedback event
[**trackLandingPageClickUsingPOST**](TrackingApi.md#tracklandingpageclickusingpost) | **POST** /rest/v5/track/{channel}/landingPageClick | Track a click event for products provided by a campaign on a landing page.
[**trackLogUsingPOST**](TrackingApi.md#tracklogusingpost) | **POST** /rest/v5/track/{channel}/log | Track a log event
[**trackLoginUsingPOST**](TrackingApi.md#trackloginusingpost) | **POST** /rest/v5/track/{channel}/login | Track a login event
[**trackPredBasketClickUsingPOST**](TrackingApi.md#trackpredbasketclickusingpost) | **POST** /rest/v5/track/{channel}/predbasketClick | Track a predictive basket click event
[**trackRecommendationClickUsingPOST**](TrackingApi.md#trackrecommendationclickusingpost) | **POST** /rest/v5/track/{channel}/recommendationClick | Track a recommendation click event

# **trackCartUsingPOST**
> trackCartUsingPOST($body, $channel)

Track a cart event

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

$apiInstance = new Swagger\Client\FactFinder\TrackingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \Swagger\Client\Model\CartOrCheckoutEvent()); // \Swagger\Client\Model\CartOrCheckoutEvent[] | events
$channel = "channel_example"; // string | channel

try {
    $apiInstance->trackCartUsingPOST($body, $channel);
} catch (Exception $e) {
    echo 'Exception when calling TrackingApi->trackCartUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\CartOrCheckoutEvent[]**](../Model/CartOrCheckoutEvent.md)| events |
 **channel** | **string**| channel |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth), [oAuth2](../../README.md#oAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **trackCheckoutUsingPOST**
> trackCheckoutUsingPOST($body, $channel)

Track a checkout event

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

$apiInstance = new Swagger\Client\FactFinder\TrackingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \Swagger\Client\Model\CartOrCheckoutEvent()); // \Swagger\Client\Model\CartOrCheckoutEvent[] | events
$channel = "channel_example"; // string | channel

try {
    $apiInstance->trackCheckoutUsingPOST($body, $channel);
} catch (Exception $e) {
    echo 'Exception when calling TrackingApi->trackCheckoutUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\CartOrCheckoutEvent[]**](../Model/CartOrCheckoutEvent.md)| events |
 **channel** | **string**| channel |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth), [oAuth2](../../README.md#oAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **trackClickUsingPOST**
> trackClickUsingPOST($body, $channel)

Track a click event

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

$apiInstance = new Swagger\Client\FactFinder\TrackingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \Swagger\Client\Model\ClickEvent()); // \Swagger\Client\Model\ClickEvent[] | events
$channel = "channel_example"; // string | channel

try {
    $apiInstance->trackClickUsingPOST($body, $channel);
} catch (Exception $e) {
    echo 'Exception when calling TrackingApi->trackClickUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ClickEvent[]**](../Model/ClickEvent.md)| events |
 **channel** | **string**| channel |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth), [oAuth2](../../README.md#oAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **trackFeedbackUsingPOST**
> trackFeedbackUsingPOST($body, $channel)

Track a feedback event

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

$apiInstance = new Swagger\Client\FactFinder\TrackingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \Swagger\Client\Model\FeedbackEvent()); // \Swagger\Client\Model\FeedbackEvent[] | events
$channel = "channel_example"; // string | channel

try {
    $apiInstance->trackFeedbackUsingPOST($body, $channel);
} catch (Exception $e) {
    echo 'Exception when calling TrackingApi->trackFeedbackUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\FeedbackEvent[]**](../Model/FeedbackEvent.md)| events |
 **channel** | **string**| channel |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth), [oAuth2](../../README.md#oAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **trackLandingPageClickUsingPOST**
> trackLandingPageClickUsingPOST($body, $channel)

Track a click event for products provided by a campaign on a landing page.

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

$apiInstance = new Swagger\Client\FactFinder\TrackingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \Swagger\Client\Model\LandingPageClickEvent()); // \Swagger\Client\Model\LandingPageClickEvent[] | events
$channel = "channel_example"; // string | channel

try {
    $apiInstance->trackLandingPageClickUsingPOST($body, $channel);
} catch (Exception $e) {
    echo 'Exception when calling TrackingApi->trackLandingPageClickUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\LandingPageClickEvent[]**](../Model/LandingPageClickEvent.md)| events |
 **channel** | **string**| channel |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth), [oAuth2](../../README.md#oAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **trackLogUsingPOST**
> trackLogUsingPOST($body, $channel)

Track a log event

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

$apiInstance = new Swagger\Client\FactFinder\TrackingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \Swagger\Client\Model\SearchLogEvent()); // \Swagger\Client\Model\SearchLogEvent[] | events
$channel = "channel_example"; // string | channel

try {
    $apiInstance->trackLogUsingPOST($body, $channel);
} catch (Exception $e) {
    echo 'Exception when calling TrackingApi->trackLogUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\SearchLogEvent[]**](../Model/SearchLogEvent.md)| events |
 **channel** | **string**| channel |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth), [oAuth2](../../README.md#oAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **trackLoginUsingPOST**
> trackLoginUsingPOST($body, $channel)

Track a login event

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

$apiInstance = new Swagger\Client\FactFinder\TrackingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \Swagger\Client\Model\LoginEvent()); // \Swagger\Client\Model\LoginEvent[] | events
$channel = "channel_example"; // string | channel

try {
    $apiInstance->trackLoginUsingPOST($body, $channel);
} catch (Exception $e) {
    echo 'Exception when calling TrackingApi->trackLoginUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\LoginEvent[]**](../Model/LoginEvent.md)| events |
 **channel** | **string**| channel |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth), [oAuth2](../../README.md#oAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **trackPredBasketClickUsingPOST**
> trackPredBasketClickUsingPOST($body, $channel)

Track a predictive basket click event

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

$apiInstance = new Swagger\Client\FactFinder\TrackingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \Swagger\Client\Model\PredBasketClickEvent()); // \Swagger\Client\Model\PredBasketClickEvent[] | events
$channel = "channel_example"; // string | channel

try {
    $apiInstance->trackPredBasketClickUsingPOST($body, $channel);
} catch (Exception $e) {
    echo 'Exception when calling TrackingApi->trackPredBasketClickUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\PredBasketClickEvent[]**](../Model/PredBasketClickEvent.md)| events |
 **channel** | **string**| channel |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth), [oAuth2](../../README.md#oAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **trackRecommendationClickUsingPOST**
> trackRecommendationClickUsingPOST($body, $channel)

Track a recommendation click event

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

$apiInstance = new Swagger\Client\FactFinder\TrackingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \Swagger\Client\Model\RecommendationClickEvent()); // \Swagger\Client\Model\RecommendationClickEvent[] | events
$channel = "channel_example"; // string | channel

try {
    $apiInstance->trackRecommendationClickUsingPOST($body, $channel);
} catch (Exception $e) {
    echo 'Exception when calling TrackingApi->trackRecommendationClickUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\RecommendationClickEvent[]**](../Model/RecommendationClickEvent.md)| events |
 **channel** | **string**| channel |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth), [oAuth2](../../README.md#oAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

