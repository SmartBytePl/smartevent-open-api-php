# SmartEventSDK\OrdersApi

All URIs are relative to http://test-se2.smartevent.pl/open-api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**orderCreate()**](OrdersApi.md#orderCreate) | **GET** /order/create | Create order in system
[**orderGetByToken()**](OrdersApi.md#orderGetByToken) | **GET** /order/{tokenValue} | Get details about created order
[**orderGetCalculation()**](OrdersApi.md#orderGetCalculation) | **GET** /order/calculate | Calculate order


## `orderCreate()`

```php
orderCreate($customerName, $customerSurname, $customerPhone, $customerEmail, $deliveryName, $deliverySurname, $deliveryPhone, $channelCode, $id, $qty, $participantName, $participantSurname, $participantEmail, $participantPhone, $participantComment, $participantStreet, $participantCity, $participantPostcode, $participantCountryCode, $participantClothesSize, $customerCompany, $customerStreet, $customerCity, $customerPostcode, $customerCountryCode, $customerVatid, $customerNewsletter, $customerFacebook, $customerLinkedin, $customerTwitter, $customerInstagram, $customerGoogleplus, $deliveryCompany, $deliveryStreet, $deliveryCity, $deliveryPostcode, $deliveryCountryCode, $deliveryVatid, $notes, $currencyCode, $localeCode, $coupon, $ref, $ga): string
```

Create order in system

This endpoint will allow you to create new order in system. Will return tokenValue.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartEventSDK\Client\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customerName = John; // string | Customer name
$customerSurname = Smith; // string | Customer surname
$customerPhone = 456456456; // string | Customer phone number
$customerEmail = john.smith@example.com; // string | Customer email
$deliveryName = Jane; // string | Name
$deliverySurname = Doe; // string | Surname
$deliveryPhone = 867987321; // string | Phone number
$channelCode = 'channelCode_example'; // string | Code of the channel which should be used. If not passed it is resolved on domain base.
$id = [123]; // int[] | Array of tickets ids
$qty = [123]; // int[] | Array of tickets quantitys
$participantName = John; // string[] | If not passed, copied from customer_name. Number of participant should be equal number of tickets (sum of values in qty field).
$participantSurname = Smith; // string[] | If not passed, copied from customer_surname. Number of participant should be equal number of tickets (sum of values in qty field).
$participantEmail = john.smith@example.com; // string[] | If not passed, copied from customer_email. Number of participant should be equal number of tickets (sum of values in qty field).
$participantPhone = 234234234; // string[] | If not passed, copied from customer_phone. Number of participant should be equal number of tickets (sum of values in qty field).
$participantComment = User comment; // string[] | Number of participant should be equal number of tickets (sum of values in qty field).
$participantStreet = Participant address street; // string[] | Number of participant should be equal number of tickets (sum of values in qty field).
$participantCity = Participant address city; // string[] | Number of participant should be equal number of tickets (sum of values in qty field).
$participantPostcode = Participant address postcode; // string[] | Number of participant should be equal number of tickets (sum of values in qty field).
$participantCountryCode = Participant address country code like PL; // string[] | Number of participant should be equal number of tickets (sum of values in qty field).
$participantClothesSize = Additional participant attributes like shirt size; // string[] | Number of participant should be equal number of tickets (sum of values in qty field).
$customerCompany = Company Ltd.; // string | Customer company name
$customerStreet = 5th Avenue; // string | Street address
$customerCity = New York; // string | City name
$customerPostcode = 12-312; // string | Post code
$customerCountryCode = PL; // string | Country code
$customerVatid = PL12312312332; // string | Vat ID only digits and signs
$customerNewsletter = true; // string | If user sign in to newsletter
$customerFacebook = 'customerFacebook_example'; // string | Facebook identificator
$customerLinkedin = 'customerLinkedin_example'; // string | LinkedIn identificator
$customerTwitter = 'customerTwitter_example'; // string | Twitter identificator
$customerInstagram = 'customerInstagram_example'; // string | Instagram identificator
$customerGoogleplus = 'customerGoogleplus_example'; // string | GooglePlus identificator
$deliveryCompany = Company Ltd.; // string | Company Name
$deliveryStreet = 5th Avenue; // string | Street address
$deliveryCity = New York; // string | City name
$deliveryPostcode = 12-312; // string | Post code
$deliveryCountryCode = PL; // string | Country code
$deliveryVatid = PL12312312332; // string | Vat ID only digits and signs
$notes = 'notes_example'; // string | customer comments for order
$currencyCode = 'currencyCode_example'; // string | Currency of the order. If not passed default channel currency will be used.
$localeCode = pl_PL; // string | Locale of the order. If not passed default channel locale wii be used.
$coupon = SECRET COUPON; // string | Name of the coupon to be applied
$ref = janedoe1; // string | Affiliate referer identficator
$ga = adfdfgwe5gsfgdfgsdfgdf; // string | Google Analytics conversion code

try {
    $result = $apiInstance->orderCreate($customerName, $customerSurname, $customerPhone, $customerEmail, $deliveryName, $deliverySurname, $deliveryPhone, $channelCode, $id, $qty, $participantName, $participantSurname, $participantEmail, $participantPhone, $participantComment, $participantStreet, $participantCity, $participantPostcode, $participantCountryCode, $participantClothesSize, $customerCompany, $customerStreet, $customerCity, $customerPostcode, $customerCountryCode, $customerVatid, $customerNewsletter, $customerFacebook, $customerLinkedin, $customerTwitter, $customerInstagram, $customerGoogleplus, $deliveryCompany, $deliveryStreet, $deliveryCity, $deliveryPostcode, $deliveryCountryCode, $deliveryVatid, $notes, $currencyCode, $localeCode, $coupon, $ref, $ga);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->orderCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customerName** | **string**| Customer name |
 **customerSurname** | **string**| Customer surname |
 **customerPhone** | **string**| Customer phone number |
 **customerEmail** | [**string**](../Model/.md)| Customer email |
 **deliveryName** | **string**| Name |
 **deliverySurname** | **string**| Surname |
 **deliveryPhone** | **string**| Phone number |
 **channelCode** | **string**| Code of the channel which should be used. If not passed it is resolved on domain base. |
 **id** | [**int[]**](../Model/int.md)| Array of tickets ids |
 **qty** | [**int[]**](../Model/int.md)| Array of tickets quantitys |
 **participantName** | [**string[]**](../Model/string.md)| If not passed, copied from customer_name. Number of participant should be equal number of tickets (sum of values in qty field). | [optional]
 **participantSurname** | [**string[]**](../Model/string.md)| If not passed, copied from customer_surname. Number of participant should be equal number of tickets (sum of values in qty field). | [optional]
 **participantEmail** | [**string[]**](../Model/string.md)| If not passed, copied from customer_email. Number of participant should be equal number of tickets (sum of values in qty field). | [optional]
 **participantPhone** | [**string[]**](../Model/string.md)| If not passed, copied from customer_phone. Number of participant should be equal number of tickets (sum of values in qty field). | [optional]
 **participantComment** | [**string[]**](../Model/string.md)| Number of participant should be equal number of tickets (sum of values in qty field). | [optional]
 **participantStreet** | [**string[]**](../Model/string.md)| Number of participant should be equal number of tickets (sum of values in qty field). | [optional]
 **participantCity** | [**string[]**](../Model/string.md)| Number of participant should be equal number of tickets (sum of values in qty field). | [optional]
 **participantPostcode** | [**string[]**](../Model/string.md)| Number of participant should be equal number of tickets (sum of values in qty field). | [optional]
 **participantCountryCode** | [**string[]**](../Model/string.md)| Number of participant should be equal number of tickets (sum of values in qty field). | [optional]
 **participantClothesSize** | [**string[]**](../Model/string.md)| Number of participant should be equal number of tickets (sum of values in qty field). | [optional]
 **customerCompany** | **string**| Customer company name | [optional]
 **customerStreet** | **string**| Street address | [optional]
 **customerCity** | **string**| City name | [optional]
 **customerPostcode** | **string**| Post code | [optional]
 **customerCountryCode** | **string**| Country code | [optional]
 **customerVatid** | **string**| Vat ID only digits and signs | [optional]
 **customerNewsletter** | **string**| If user sign in to newsletter | [optional]
 **customerFacebook** | **string**| Facebook identificator | [optional]
 **customerLinkedin** | **string**| LinkedIn identificator | [optional]
 **customerTwitter** | **string**| Twitter identificator | [optional]
 **customerInstagram** | **string**| Instagram identificator | [optional]
 **customerGoogleplus** | **string**| GooglePlus identificator | [optional]
 **deliveryCompany** | **string**| Company Name | [optional]
 **deliveryStreet** | **string**| Street address | [optional]
 **deliveryCity** | **string**| City name | [optional]
 **deliveryPostcode** | **string**| Post code | [optional]
 **deliveryCountryCode** | **string**| Country code | [optional]
 **deliveryVatid** | **string**| Vat ID only digits and signs | [optional]
 **notes** | **string**| customer comments for order | [optional]
 **currencyCode** | **string**| Currency of the order. If not passed default channel currency will be used. | [optional]
 **localeCode** | **string**| Locale of the order. If not passed default channel locale wii be used. | [optional]
 **coupon** | **string**| Name of the coupon to be applied | [optional]
 **ref** | **string**| Affiliate referer identficator | [optional]
 **ga** | **string**| Google Analytics conversion code | [optional]

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

## `orderGetByToken()`

```php
orderGetByToken($tokenValue): \SmartEventSDK\Models\Order
```

Get details about created order

This endpoint will response with all order details

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartEventSDK\Client\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tokenValue = dt9mNQUYzm; // string | Registration identifier.

try {
    $result = $apiInstance->orderGetByToken($tokenValue);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->orderGetByToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tokenValue** | **string**| Registration identifier. |

### Return type

[**\SmartEventSDK\Models\Order**](../Model/Order.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `orderGetCalculation()`

```php
orderGetCalculation($id, $qty): \SmartEventSDK\Models\CalculateResponse
```

Calculate order

This endpoint will allow you to get order totals.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartEventSDK\Client\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = [123]; // int[] | array of tickets ids
$qty = [123]; // int[] | array of tickets quantitys

try {
    $result = $apiInstance->orderGetCalculation($id, $qty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->orderGetCalculation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**int[]**](../Model/int.md)| array of tickets ids |
 **qty** | [**int[]**](../Model/int.md)| array of tickets quantitys |

### Return type

[**\SmartEventSDK\Models\CalculateResponse**](../Model/CalculateResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
