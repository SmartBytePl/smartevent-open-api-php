# SmartEventSDK\InvoicesApi

All URIs are relative to *http://test-se2.smartevent.pl/open-api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**invoicesCreate**](InvoicesApi.md#invoicesCreate) | **GET** /invoices/{invoiceType}/create/{tokenValue} | Create invoice by type
[**invoicesDownload**](InvoicesApi.md#invoicesDownload) | **GET** /invoices/{invoiceType}/download/{tokenValue} | Download invoice by type for order



## invoicesCreate

> string invoicesCreate($tokenValue, $invoiceType)

Create invoice by type

This endpoint will return pdf document

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new SmartEventSDK\Api\InvoicesApi(
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
?>
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
- **Accept**: application/pdf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## invoicesDownload

> string invoicesDownload($tokenValue, $invoiceType)

Download invoice by type for order

This endpoint will return pdf document

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new SmartEventSDK\Api\InvoicesApi(
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
?>
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
- **Accept**: application/pdf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

