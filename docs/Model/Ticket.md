# # Ticket

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional]
**code** | **string** |  | [optional]
**onHold** | **int** | Number of sold tickets | [optional]
**onHand** | **int** | Number of available tickets | [optional]
**alternativeOnHand** | **string** | Alternative number of available tickets it is used to show specific value for the user | [optional]
**tracked** | **bool** |  | [optional]
**visibleAfterSoldOut** | **bool** |  | [optional]
**salableAfterSoldOut** | **bool** |  | [optional]
**taxCategory** | [**\SmartEventSDK\Models\TaxCategory**](TaxCategory.md) |  | [optional]
**channelPricings** | [**map[string,\SmartEventSDK\Models\ChannelPricing]**](ChannelPricing.md) | Keys reference to code of a channel | [optional]
**translations** | [**map[string,\SmartEventSDK\Models\TranslationTicket]**](TranslationTicket.md) | Keys reference to code of a translation | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
