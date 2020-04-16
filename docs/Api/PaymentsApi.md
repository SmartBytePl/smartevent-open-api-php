# Swagger\Client\PaymentsApi

All URIs are relative to *http://test-se2.smartevent.pl/open-api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**payuCreate**](PaymentsApi.md#payucreate) | **GET** /payments/payu/create/{tokenValue} | Create payment for order

# **payuCreate**
> payuCreate($token_value)

Create payment for order

This endpoint will redirect to start payment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token_value = "token_value_example"; // string | order identifcator

try {
    $apiInstance->payuCreate($token_value);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->payuCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token_value** | **string**| order identifcator |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

