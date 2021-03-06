# SmartEvent SDK Rest Client

Smart Event Open API documentation

- API version: 2.0.21
- Package version: 1.0

## Requirements

PHP 5.5 and later

## Installation & Usage

### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/SmartBytePl/smartevent-open-api-php.git"
    }
  ],
  "require": {
    "SmartBytePl/smartevent-open-api-php": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/SmartEvent SDK Rest Client/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

?>
```

## Documentation for API Endpoints

All URIs are relative to *http://test-se2.smartevent.pl/open-api*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*CategoriesApi* | [**categoriesGet**](docs/Api/CategoriesApi.md#categoriesget) | **GET** /categories | Get list of all categories
*CategoriesApi* | [**categoriesGetByCode**](docs/Api/CategoriesApi.md#categoriesgetbycode) | **GET** /categories/{code} | Get category details
*EventsApi* | [**eventsCalendarGetByEventId**](docs/Api/EventsApi.md#eventscalendargetbyeventid) | **GET** /events/{id}/calendar/{calendarType} | Get specific event calendar by type_extension
*EventsApi* | [**eventsGet**](docs/Api/EventsApi.md#eventsget) | **GET** /events | Get Events from the system
*EventsApi* | [**eventsGetByCategoryCode**](docs/Api/EventsApi.md#eventsgetbycategorycode) | **GET** /category-events/by-code/{code} | Get events data for specied category code
*EventsApi* | [**eventsGetByEventCode**](docs/Api/EventsApi.md#eventsgetbyeventcode) | **GET** /events/by-code/{code} | Get specific event data from the system by event code
*EventsApi* | [**eventsGetByEventId**](docs/Api/EventsApi.md#eventsgetbyeventid) | **GET** /events/by-id/{id} | Get specific event data from the system by event id
*EventsApi* | [**eventsGetByTicketId**](docs/Api/EventsApi.md#eventsgetbyticketid) | **GET** /events/by-ticket/{id} | Get specific event data from the system by ticket id
*InvoicesApi* | [**invoicesCreate**](docs/Api/InvoicesApi.md#invoicescreate) | **GET** /invoices/{invoiceType}/create/{tokenValue} | Create invoice by type
*InvoicesApi* | [**invoicesDownload**](docs/Api/InvoicesApi.md#invoicesdownload) | **GET** /invoices/{invoiceType}/download/{tokenValue} | Download invoice by type for order
*OrdersApi* | [**orderCreate**](docs/Api/OrdersApi.md#ordercreate) | **GET** /order/create | Create order in system
*OrdersApi* | [**orderGetByToken**](docs/Api/OrdersApi.md#ordergetbytoken) | **GET** /order/{tokenValue} | Get details about created order
*OrdersApi* | [**orderGetCalculation**](docs/Api/OrdersApi.md#ordergetcalculation) | **GET** /order/calculate | Calculate order
*PaymentsApi* | [**paymentCreate**](docs/Api/PaymentsApi.md#paymentcreate) | **GET** /payments/{paymentType}/create/{tokenValue} | Create payment for order
*PromotionsApi* | [**couponValidate**](docs/Api/PromotionsApi.md#couponvalidate) | **GET** /promotions/coupon/{coupon} | Verify coupon validiation


## Documentation For Models

 - [BillingData](docs/Model/BillingData.md)
 - [CalculateResponse](docs/Model/CalculateResponse.md)
 - [Category](docs/Model/Category.md)
 - [CategoryChild](docs/Model/CategoryChild.md)
 - [Channel](docs/Model/Channel.md)
 - [ChannelPricing](docs/Model/ChannelPricing.md)
 - [ChannelPricings](docs/Model/ChannelPricings.md)
 - [Currency](docs/Model/Currency.md)
 - [EnumCalendarType](docs/Model/EnumCalendarType.md)
 - [EnumInvoiceType](docs/Model/EnumInvoiceType.md)
 - [EnumPaymentType](docs/Model/EnumPaymentType.md)
 - [Event](docs/Model/Event.md)
 - [GeneralError](docs/Model/GeneralError.md)
 - [Image](docs/Model/Image.md)
 - [Locale](docs/Model/Locale.md)
 - [Order](docs/Model/Order.md)
 - [OrderItem](docs/Model/OrderItem.md)
 - [Participant](docs/Model/Participant.md)
 - [TaxCategory](docs/Model/TaxCategory.md)
 - [Ticket](docs/Model/Ticket.md)
 - [TranslationCategory](docs/Model/TranslationCategory.md)
 - [TranslationCategoryParent](docs/Model/TranslationCategoryParent.md)
 - [TranslationEvent](docs/Model/TranslationEvent.md)
 - [TranslationTicket](docs/Model/TranslationTicket.md)


## Documentation For Authorization

All endpoints do not require authorization.

## Author

info@smartevent.pl

