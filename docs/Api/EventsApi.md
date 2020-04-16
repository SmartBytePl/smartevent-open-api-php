# Swagger\Client\EventsApi

All URIs are relative to *http://test-se2.smartevent.pl/open-api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**eventsCalendarGetByEventId**](EventsApi.md#eventscalendargetbyeventid) | **GET** /open-api/events/{eventId}/calendar/{type} | Get specific event calendar by type_extension
[**eventsGet**](EventsApi.md#eventsget) | **GET** /events | Get Events from the system
[**eventsGetByCategoryCode**](EventsApi.md#eventsgetbycategorycode) | **GET** /category-events/by-code/{code} | Get events data for specied category code
[**eventsGetByEventCode**](EventsApi.md#eventsgetbyeventcode) | **GET** /events/by-code/{code} | Get specific event data from the system by event code
[**eventsGetByEventId**](EventsApi.md#eventsgetbyeventid) | **GET** /events/by-id/{id} | Get specific event data from the system by event id

# **eventsCalendarGetByEventId**
> eventsCalendarGetByEventId($event_id, $type)

Get specific event calendar by type_extension

This endpoint will allow you to get calendar schedule

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$event_id = 56; // int | Id of event
$type = "type_example"; // string | type of calendar

try {
    $apiInstance->eventsCalendarGetByEventId($event_id, $type);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->eventsCalendarGetByEventId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **event_id** | **int**| Id of event |
 **type** | **string**| type of calendar |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **eventsGet**
> \Swagger\Client\Model\Event[] eventsGet()

Get Events from the system

This endpoint will allow you to get details about events.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->eventsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->eventsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\Event[]**](../Model/Event.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **eventsGetByCategoryCode**
> \Swagger\Client\Model\Event[] eventsGetByCategoryCode($code)

Get events data for specied category code

This endpoint will return events for specified category.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$code = "code_example"; // string | Code of event

try {
    $result = $apiInstance->eventsGetByCategoryCode($code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->eventsGetByCategoryCode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **code** | **string**| Code of event |

### Return type

[**\Swagger\Client\Model\Event[]**](../Model/Event.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **eventsGetByEventCode**
> \Swagger\Client\Model\Event[] eventsGetByEventCode($code)

Get specific event data from the system by event code

This endpoint will allow you to get details about specific event.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$code = "code_example"; // string | Code of event

try {
    $result = $apiInstance->eventsGetByEventCode($code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->eventsGetByEventCode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **code** | **string**| Code of event |

### Return type

[**\Swagger\Client\Model\Event[]**](../Model/Event.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **eventsGetByEventId**
> \Swagger\Client\Model\Event[] eventsGetByEventId($id)

Get specific event data from the system by event id

This endpoint will allow you to get details about specific event.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | Id of event

try {
    $result = $apiInstance->eventsGetByEventId($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->eventsGetByEventId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of event |

### Return type

[**\Swagger\Client\Model\Event[]**](../Model/Event.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

