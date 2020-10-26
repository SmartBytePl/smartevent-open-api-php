# SmartEventSDK\PaymentsApi

All URIs are relative to *http://test-se2.smartevent.pl/open-api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**paymentCreate**](PaymentsApi.md#paymentCreate) | **GET** /payments/{paymentType}/create/{tokenValue} | Create payment for order



## paymentCreate

> paymentCreate($tokenValue, $paymentType)

Create payment for order

This endpoint will redirect to start payment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new SmartEventSDK\Api\PaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tokenValue = dt9mNQUYzm; // string | Registration identifier.
$paymentType = payu; // \SmartEventSDK\Models\EnumPaymentType | type of calendar

try {
    $apiInstance->paymentCreate($tokenValue, $paymentType);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->paymentCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tokenValue** | **string**| Registration identifier. |
 **paymentType** | [**\SmartEventSDK\Models\EnumPaymentType**](../Model/.md)| type of calendar |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

