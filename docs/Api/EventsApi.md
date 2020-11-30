# SmartEventSDK\EventsApi

All URIs are relative to http://test-se2.smartevent.pl/open-api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**eventsCalendarGetByEventId()**](EventsApi.md#eventsCalendarGetByEventId) | **GET** /events/{id}/calendar/{calendarType} | Get specific event calendar by type_extension
[**eventsGet()**](EventsApi.md#eventsGet) | **GET** /events | Get Events from the system
[**eventsGetByCategoryCode()**](EventsApi.md#eventsGetByCategoryCode) | **GET** /category-events/by-code/{code} | Get events data for specied category code
[**eventsGetByEventCode()**](EventsApi.md#eventsGetByEventCode) | **GET** /events/by-code/{code} | Get specific event data from the system by event code
[**eventsGetByEventId()**](EventsApi.md#eventsGetByEventId) | **GET** /events/by-id/{id} | Get specific event data from the system by event id


## `eventsCalendarGetByEventId()`

```php
eventsCalendarGetByEventId($id, $calendarType)
```

Get specific event calendar by type_extension

This endpoint will allow you to get calendar schedule

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartEventSDK\Client\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 123; // int | Recource identificator
$calendarType = google; // \SmartEventSDK\Models\EnumCalendarType | type of calendar

try {
    $apiInstance->eventsCalendarGetByEventId($id, $calendarType);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->eventsCalendarGetByEventId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Recource identificator |
 **calendarType** | [**\SmartEventSDK\Models\EnumCalendarType**](../Model/.md)| type of calendar |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `eventsGet()`

```php
eventsGet(): \SmartEventSDK\Models\Event[]
```

Get Events from the system

This endpoint will allow you to get details about events.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartEventSDK\Client\EventsApi(
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
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\SmartEventSDK\Models\Event[]**](../Model/Event.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `eventsGetByCategoryCode()`

```php
eventsGetByCategoryCode($code): \SmartEventSDK\Models\Event[]
```

Get events data for specied category code

This endpoint will return events for specified category.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartEventSDK\Client\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$code = example-code; // string

try {
    $result = $apiInstance->eventsGetByCategoryCode($code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->eventsGetByCategoryCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **code** | **string**|  |

### Return type

[**\SmartEventSDK\Models\Event[]**](../Model/Event.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `eventsGetByEventCode()`

```php
eventsGetByEventCode($code): \SmartEventSDK\Models\Event[]
```

Get specific event data from the system by event code

This endpoint will allow you to get details about specific event.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartEventSDK\Client\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$code = example-code; // string

try {
    $result = $apiInstance->eventsGetByEventCode($code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->eventsGetByEventCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **code** | **string**|  |

### Return type

[**\SmartEventSDK\Models\Event[]**](../Model/Event.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `eventsGetByEventId()`

```php
eventsGetByEventId($id): \SmartEventSDK\Models\Event[]
```

Get specific event data from the system by event id

This endpoint will allow you to get details about specific event.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartEventSDK\Client\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 123; // int | Recource identificator

try {
    $result = $apiInstance->eventsGetByEventId($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->eventsGetByEventId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Recource identificator |

### Return type

[**\SmartEventSDK\Models\Event[]**](../Model/Event.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
