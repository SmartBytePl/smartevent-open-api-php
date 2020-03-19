# Swagger\Client\OrdersApi

All URIs are relative to *http://test-se2.smartevent.pl/open-api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**orderCreate**](OrdersApi.md#ordercreate) | **GET** /order/create | Create order in system
[**orderGetByToken**](OrdersApi.md#ordergetbytoken) | **GET** /order/{tokenValue} | Get details about created order
[**orderGetCalculation**](OrdersApi.md#ordergetcalculation) | **GET** /order/calculate | Calculate order

# **orderCreate**
> string orderCreate($customer_name, $customer_surname, $customer_phone, $customer_email, $delivery_name, $delivery_surname, $delivery_phone, $id, $qty, $participant_name, $participant_surname, $participant_email, $participant_phone, $participant_comment, $participant_attributes, $customer_company, $customer_street, $customer_city, $customer_postcode, $customer_country_code, $customer_vatid, $customer_newsletter, $customer_facebook, $customer_linkedin, $customer_twitter, $customer_instagram, $customer_googleplus, $delivery_company, $delivery_street, $delivery_city, $delivery_postcode, $delivery_country_code, $delivery_vatid, $additional_info, $_channel_code, $currency_code, $locale_code, $coupon, $ref)

Create order in system

This endpoint will allow you to create new order in system. Will return tokenValue.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_name = "customer_name_example"; // string | Customer name
$customer_surname = "customer_surname_example"; // string | Customer surname
$customer_phone = "customer_phone_example"; // string | Customer phone number
$customer_email = "customer_email_example"; // string | Customer email
$delivery_name = "delivery_name_example"; // string | Name
$delivery_surname = "delivery_surname_example"; // string | Surname
$delivery_phone = "delivery_phone_example"; // string | Phone number
$id = array(56); // int[] | Array of tickets ids
$qty = array(56); // int[] | Array of tickets quantitys
$participant_name = array("participant_name_example"); // string[] | If not passed, copied from customer_name. Number of participant should be equal number of tickets (sum of values in qty field).
$participant_surname = array("participant_surname_example"); // string[] | If not passed, copied from customer_surname. Number of participant should be equal number of tickets (sum of values in qty field).
$participant_email = array("participant_email_example"); // string[] | If not passed, copied from customer_email. Number of participant should be equal number of tickets (sum of values in qty field).
$participant_phone = array("participant_phone_example"); // string[] | If not passed, copied from customer_phone. Number of participant should be equal number of tickets (sum of values in qty field).
$participant_comment = array("participant_comment_example"); // string[] | Number of participant should be equal number of tickets (sum of values in qty field).
$participant_attributes = array("participant_attributes_example"); // string[] | Number of participant should be equal number of tickets (sum of values in qty field).
$customer_company = "customer_company_example"; // string | Customer company name
$customer_street = "customer_street_example"; // string | Street address
$customer_city = "customer_city_example"; // string | City name
$customer_postcode = "customer_postcode_example"; // string | Post code
$customer_country_code = "customer_country_code_example"; // string | Country code
$customer_vatid = "customer_vatid_example"; // string | Vat ID only digits and signs
$customer_newsletter = "customer_newsletter_example"; // string | If user sign in to newsletter
$customer_facebook = "customer_facebook_example"; // string | Facebook identificator
$customer_linkedin = "customer_linkedin_example"; // string | LinkedIn identificator
$customer_twitter = "customer_twitter_example"; // string | Twitter identificator
$customer_instagram = "customer_instagram_example"; // string | Instagram identificator
$customer_googleplus = "customer_googleplus_example"; // string | GooglePlus identificator
$delivery_company = "delivery_company_example"; // string | Company Name
$delivery_street = "delivery_street_example"; // string | Street address
$delivery_city = "delivery_city_example"; // string | City name
$delivery_postcode = "delivery_postcode_example"; // string | Post code
$delivery_country_code = "delivery_country_code_example"; // string | Country code
$delivery_vatid = "delivery_vatid_example"; // string | Vat ID only digits and signs
$additional_info = "additional_info_example"; // string | customer comments for order
$_channel_code = "_channel_code_example"; // string | Code of the channel which should be used. If not passed it is resolved on domain base.
$currency_code = "currency_code_example"; // string | Currency of the order. If not passed default channel currency will be used.
$locale_code = "locale_code_example"; // string | Locale of the order. If not passed default channel locale wii be used.
$coupon = "coupon_example"; // string | Name of the coupon to be applied
$ref = "ref_example"; // string | Affiliate referer identficator

try {
    $result = $apiInstance->orderCreate($customer_name, $customer_surname, $customer_phone, $customer_email, $delivery_name, $delivery_surname, $delivery_phone, $id, $qty, $participant_name, $participant_surname, $participant_email, $participant_phone, $participant_comment, $participant_attributes, $customer_company, $customer_street, $customer_city, $customer_postcode, $customer_country_code, $customer_vatid, $customer_newsletter, $customer_facebook, $customer_linkedin, $customer_twitter, $customer_instagram, $customer_googleplus, $delivery_company, $delivery_street, $delivery_city, $delivery_postcode, $delivery_country_code, $delivery_vatid, $additional_info, $_channel_code, $currency_code, $locale_code, $coupon, $ref);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->orderCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_name** | **string**| Customer name |
 **customer_surname** | **string**| Customer surname |
 **customer_phone** | **string**| Customer phone number |
 **customer_email** | **string**| Customer email |
 **delivery_name** | **string**| Name |
 **delivery_surname** | **string**| Surname |
 **delivery_phone** | **string**| Phone number |
 **id** | [**int[]**](../Model/int.md)| Array of tickets ids |
 **qty** | [**int[]**](../Model/int.md)| Array of tickets quantitys |
 **participant_name** | [**string[]**](../Model/string.md)| If not passed, copied from customer_name. Number of participant should be equal number of tickets (sum of values in qty field). | [optional]
 **participant_surname** | [**string[]**](../Model/string.md)| If not passed, copied from customer_surname. Number of participant should be equal number of tickets (sum of values in qty field). | [optional]
 **participant_email** | [**string[]**](../Model/string.md)| If not passed, copied from customer_email. Number of participant should be equal number of tickets (sum of values in qty field). | [optional]
 **participant_phone** | [**string[]**](../Model/string.md)| If not passed, copied from customer_phone. Number of participant should be equal number of tickets (sum of values in qty field). | [optional]
 **participant_comment** | [**string[]**](../Model/string.md)| Number of participant should be equal number of tickets (sum of values in qty field). | [optional]
 **participant_attributes** | [**string[]**](../Model/string.md)| Number of participant should be equal number of tickets (sum of values in qty field). | [optional]
 **customer_company** | **string**| Customer company name | [optional]
 **customer_street** | **string**| Street address | [optional]
 **customer_city** | **string**| City name | [optional]
 **customer_postcode** | **string**| Post code | [optional]
 **customer_country_code** | **string**| Country code | [optional]
 **customer_vatid** | **string**| Vat ID only digits and signs | [optional]
 **customer_newsletter** | **string**| If user sign in to newsletter | [optional]
 **customer_facebook** | **string**| Facebook identificator | [optional]
 **customer_linkedin** | **string**| LinkedIn identificator | [optional]
 **customer_twitter** | **string**| Twitter identificator | [optional]
 **customer_instagram** | **string**| Instagram identificator | [optional]
 **customer_googleplus** | **string**| GooglePlus identificator | [optional]
 **delivery_company** | **string**| Company Name | [optional]
 **delivery_street** | **string**| Street address | [optional]
 **delivery_city** | **string**| City name | [optional]
 **delivery_postcode** | **string**| Post code | [optional]
 **delivery_country_code** | **string**| Country code | [optional]
 **delivery_vatid** | **string**| Vat ID only digits and signs | [optional]
 **additional_info** | **string**| customer comments for order | [optional]
 **_channel_code** | **string**| Code of the channel which should be used. If not passed it is resolved on domain base. | [optional]
 **currency_code** | **string**| Currency of the order. If not passed default channel currency will be used. | [optional]
 **locale_code** | **string**| Locale of the order. If not passed default channel locale wii be used. | [optional]
 **coupon** | **string**| Name of the coupon to be applied | [optional]
 **ref** | **string**| Affiliate referer identficator | [optional]

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderGetByToken**
> \Swagger\Client\Model\Order orderGetByToken($token_value)

Get details about created order

This endpoint will response with all order details

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token_value = "token_value_example"; // string | 

try {
    $result = $apiInstance->orderGetByToken($token_value);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->orderGetByToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token_value** | **string**|  |

### Return type

[**\Swagger\Client\Model\Order**](../Model/Order.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderGetCalculation**
> \Swagger\Client\Model\CalculateResponse orderGetCalculation($id, $qty)

Calculate order

This endpoint will allow you to get order totals.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = array(56); // int[] | array of tickets ids
$qty = array(56); // int[] | array of tickets quantitys

try {
    $result = $apiInstance->orderGetCalculation($id, $qty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->orderGetCalculation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**int[]**](../Model/int.md)| array of tickets ids |
 **qty** | [**int[]**](../Model/int.md)| array of tickets quantitys |

### Return type

[**\Swagger\Client\Model\CalculateResponse**](../Model/CalculateResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

