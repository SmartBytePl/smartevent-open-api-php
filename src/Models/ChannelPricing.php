<?php
/**
 * ChannelPricing
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
 * The version of the OpenAPI document: 2.0.16
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

use \ArrayAccess;
use \SmartEventSDK\ObjectSerializer;

/**
 * ChannelPricing Class Doc Comment
 *
 * @category Class
 * @package  SmartEventSDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class ChannelPricing implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ChannelPricing';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'channelCode' => 'string',
        'price' => 'int',
        'originalPrice' => 'int',
        'priceReduced' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'channelCode' => null,
        'price' => 'int32',
        'originalPrice' => 'int32',
        'priceReduced' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'channelCode' => 'channel_code',
        'price' => 'price',
        'originalPrice' => 'original_price',
        'priceReduced' => 'price_reduced'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'channelCode' => 'setChannelCode',
        'price' => 'setPrice',
        'originalPrice' => 'setOriginalPrice',
        'priceReduced' => 'setPriceReduced'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'channelCode' => 'getChannelCode',
        'price' => 'getPrice',
        'originalPrice' => 'getOriginalPrice',
        'priceReduced' => 'getPriceReduced'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['channelCode'] = $data['channelCode'] ?? null;
        $this->container['price'] = $data['price'] ?? null;
        $this->container['originalPrice'] = $data['originalPrice'] ?? null;
        $this->container['priceReduced'] = $data['priceReduced'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets channelCode
     *
     * @return string|null
     */
    public function getChannelCode()
    {
        return $this->container['channelCode'];
    }

    /**
     * Sets channelCode
     *
     * @param string|null $channelCode channelCode
     *
     * @return self
     */
    public function setChannelCode($channelCode)
    {
        $this->container['channelCode'] = $channelCode;

        return $this;
    }

    /**
     * Gets price
     *
     * @return int|null
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param int|null $price price
     *
     * @return self
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets originalPrice
     *
     * @return int|null
     */
    public function getOriginalPrice()
    {
        return $this->container['originalPrice'];
    }

    /**
     * Sets originalPrice
     *
     * @param int|null $originalPrice originalPrice
     *
     * @return self
     */
    public function setOriginalPrice($originalPrice)
    {
        $this->container['originalPrice'] = $originalPrice;

        return $this;
    }

    /**
     * Gets priceReduced
     *
     * @return bool|null
     */
    public function getPriceReduced()
    {
        return $this->container['priceReduced'];
    }

    /**
     * Sets priceReduced
     *
     * @param bool|null $priceReduced priceReduced
     *
     * @return self
     */
    public function setPriceReduced($priceReduced)
    {
        $this->container['priceReduced'] = $priceReduced;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


