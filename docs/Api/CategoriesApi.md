# SmartEventSDK\CategoriesApi

All URIs are relative to http://test-se2.smartevent.pl/open-api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**categoriesGet()**](CategoriesApi.md#categoriesGet) | **GET** /categories | Get list of all categories
[**categoriesGetByCode()**](CategoriesApi.md#categoriesGetByCode) | **GET** /categories/{code} | Get category details


## `categoriesGet()`

```php
categoriesGet(): \SmartEventSDK\Models\Category[]
```

Get list of all categories

This endpoint will return all categories list

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartEventSDK\Client\CategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->categoriesGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoriesApi->categoriesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\SmartEventSDK\Models\Category[]**](../Model/Category.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `categoriesGetByCode()`

```php
categoriesGetByCode($code): \SmartEventSDK\Models\Category[]
```

Get category details

This endpoint will return details about specific category

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartEventSDK\Client\CategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$code = example-code; // string

try {
    $result = $apiInstance->categoriesGetByCode($code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoriesApi->categoriesGetByCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **code** | **string**|  |

### Return type

[**\SmartEventSDK\Models\Category[]**](../Model/Category.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
