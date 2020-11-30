# SmartEventSDK\InvoicesApi

All URIs are relative to http://test-se2.smartevent.pl/open-api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**invoicesCreate()**](InvoicesApi.md#invoicesCreate) | **GET** /invoices/{invoiceType}/create/{tokenValue} | Create invoice by type
[**invoicesDownload()**](InvoicesApi.md#invoicesDownload) | **GET** /invoices/{invoiceType}/download/{tokenValue} | Download invoice by type for order


## `invoicesCreate()`

```php
invoicesCreate($tokenValue, $invoiceType): string
```

Create invoice by type

This endpoint will return pdf document

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartEventSDK\Client\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tokenValue = dt9mNQUYzm; // string | Registration identifier.
$invoiceType = proforma; // \SmartEventSDK\Models\EnumInvoiceType | type of invoice vat or proforma

try {
    $result = $apiInstance->invoicesCreate($tokenValue, $invoiceType);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->invoicesCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tokenValue** | **string**| Registration identifier. |
 **invoiceType** | [**\SmartEventSDK\Models\EnumInvoiceType**](../Model/.md)| type of invoice vat or proforma |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/pdf`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `invoicesDownload()`

```php
invoicesDownload($tokenValue, $invoiceType): string
```

Download invoice by type for order

This endpoint will return pdf document

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartEventSDK\Client\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tokenValue = dt9mNQUYzm; // string | Registration identifier.
$invoiceType = proforma; // \SmartEventSDK\Models\EnumInvoiceType | type of invoice vat or proforma

try {
    $result = $apiInstance->invoicesDownload($tokenValue, $invoiceType);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->invoicesDownload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tokenValue** | **string**| Registration identifier. |
 **invoiceType** | [**\SmartEventSDK\Models\EnumInvoiceType**](../Model/.md)| type of invoice vat or proforma |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/pdf`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
