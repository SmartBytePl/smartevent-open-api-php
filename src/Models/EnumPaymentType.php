<?php
/**
 * EnumPaymentType
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  SmartEventSDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Smart Event Open API
 *
 * Smart Event Open API documentation
 *
 * The version of the OpenAPI document: 2.0.20
 * Contact: info@smartevent.pl
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SmartEventSDK\Models;
use \SmartEventSDK\ObjectSerializer;

/**
 * EnumPaymentType Class Doc Comment
 *
 * @category Class
 * @package  SmartEventSDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class EnumPaymentType
{
    /**
     * Possible values of this enum
     */
    const PAYU = 'payu';
    const PAYPAL = 'paypal';
    const PAYCOXI = 'paycoxi';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::PAYU,
            self::PAYPAL,
            self::PAYCOXI,
        ];
    }
}


