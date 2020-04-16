# Ticket

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional] 
**code** | **string** |  | [optional] 
**on_hold** | **int** | Number of sold tickets | [optional] 
**on_hand** | **int** | Number of available tickets | [optional] 
**alternative_on_hand** | **string** | Alternative number of available tickets it is used to show specific value for the user | [optional] 
**tracked** | **bool** |  | [optional] 
**visible_after_sold_out** | **bool** |  | [optional] 
**salable_after_sold_out** | **bool** |  | [optional] 
**tax_category** | [**\Swagger\Client\Model\TaxCategory**](TaxCategory.md) |  | [optional] 
**channel_pricings** | [**map[string,\Swagger\Client\Model\ChannelPricing]**](ChannelPricing.md) | Keys reference to code of a channel | [optional] 
**translations** | [**map[string,\Swagger\Client\Model\TranslationTicket]**](TranslationTicket.md) | Keys reference to code of a translation | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

