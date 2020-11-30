# SmartEventSDK\PromotionsApi

All URIs are relative to http://test-se2.smartevent.pl/open-api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**couponValidate()**](PromotionsApi.md#couponValidate) | **GET** /promotions/coupon/{coupon} | Verify coupon validiation


## `couponValidate()`

```php
couponValidate($coupon): string
```

Verify coupon validiation

This endpoint will response with string what is the status of sended coupon

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartEventSDK\Client\PromotionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$coupon = coupon-code; // string

try {
    $result = $apiInstance->couponValidate($coupon);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionsApi->couponValidate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **coupon** | **string**|  |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
