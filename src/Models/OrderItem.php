<?php
/**
 * OrderItem
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
 * OrderItem Class Doc Comment
 *
 * @category Class
 * @package  SmartEventSDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class OrderItem implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'OrderItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'quantity' => 'int',
        'unitPrice' => 'int',
        'taxTotal' => 'int',
        'subtotal' => 'int',
        'total' => 'int',
        'discountedUnitPrice' => 'int',
        'adjustments' => 'object[]',
        'adjustmentsTotal' => 'int',
        'adjustmentsTotalRecursively' => 'int',
        'participant' => '\SmartEventSDK\Models\Participant[]',
        'ticket' => '\SmartEventSDK\Models\Ticket[]',
        'event' => '\SmartEventSDK\Models\Event[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'quantity' => null,
        'unitPrice' => null,
        'taxTotal' => null,
        'subtotal' => null,
        'total' => null,
        'discountedUnitPrice' => null,
        'adjustments' => null,
        'adjustmentsTotal' => null,
        'adjustmentsTotalRecursively' => null,
        'participant' => null,
        'ticket' => null,
        'event' => null
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
        'quantity' => 'quantity',
        'unitPrice' => 'unit_price',
        'taxTotal' => 'tax_total',
        'subtotal' => 'subtotal',
        'total' => 'total',
        'discountedUnitPrice' => 'discounted_unit_price',
        'adjustments' => 'adjustments',
        'adjustmentsTotal' => 'adjustments_total',
        'adjustmentsTotalRecursively' => 'adjustments_total_recursively',
        'participant' => 'participant',
        'ticket' => 'ticket',
        'event' => 'event'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'quantity' => 'setQuantity',
        'unitPrice' => 'setUnitPrice',
        'taxTotal' => 'setTaxTotal',
        'subtotal' => 'setSubtotal',
        'total' => 'setTotal',
        'discountedUnitPrice' => 'setDiscountedUnitPrice',
        'adjustments' => 'setAdjustments',
        'adjustmentsTotal' => 'setAdjustmentsTotal',
        'adjustmentsTotalRecursively' => 'setAdjustmentsTotalRecursively',
        'participant' => 'setParticipant',
        'ticket' => 'setTicket',
        'event' => 'setEvent'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'quantity' => 'getQuantity',
        'unitPrice' => 'getUnitPrice',
        'taxTotal' => 'getTaxTotal',
        'subtotal' => 'getSubtotal',
        'total' => 'getTotal',
        'discountedUnitPrice' => 'getDiscountedUnitPrice',
        'adjustments' => 'getAdjustments',
        'adjustmentsTotal' => 'getAdjustmentsTotal',
        'adjustmentsTotalRecursively' => 'getAdjustmentsTotalRecursively',
        'participant' => 'getParticipant',
        'ticket' => 'getTicket',
        'event' => 'getEvent'
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
        $this->container['quantity'] = $data['quantity'] ?? null;
        $this->container['unitPrice'] = $data['unitPrice'] ?? null;
        $this->container['taxTotal'] = $data['taxTotal'] ?? null;
        $this->container['subtotal'] = $data['subtotal'] ?? null;
        $this->container['total'] = $data['total'] ?? null;
        $this->container['discountedUnitPrice'] = $data['discountedUnitPrice'] ?? null;
        $this->container['adjustments'] = $data['adjustments'] ?? null;
        $this->container['adjustmentsTotal'] = $data['adjustmentsTotal'] ?? null;
        $this->container['adjustmentsTotalRecursively'] = $data['adjustmentsTotalRecursively'] ?? null;
        $this->container['participant'] = $data['participant'] ?? null;
        $this->container['ticket'] = $data['ticket'] ?? null;
        $this->container['event'] = $data['event'] ?? null;
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
     * Gets quantity
     *
     * @return int|null
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param int|null $quantity quantity
     *
     * @return self
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets unitPrice
     *
     * @return int|null
     */
    public function getUnitPrice()
    {
        return $this->container['unitPrice'];
    }

    /**
     * Sets unitPrice
     *
     * @param int|null $unitPrice unitPrice
     *
     * @return self
     */
    public function setUnitPrice($unitPrice)
    {
        $this->container['unitPrice'] = $unitPrice;

        return $this;
    }

    /**
     * Gets taxTotal
     *
     * @return int|null
     */
    public function getTaxTotal()
    {
        return $this->container['taxTotal'];
    }

    /**
     * Sets taxTotal
     *
     * @param int|null $taxTotal taxTotal
     *
     * @return self
     */
    public function setTaxTotal($taxTotal)
    {
        $this->container['taxTotal'] = $taxTotal;

        return $this;
    }

    /**
     * Gets subtotal
     *
     * @return int|null
     */
    public function getSubtotal()
    {
        return $this->container['subtotal'];
    }

    /**
     * Sets subtotal
     *
     * @param int|null $subtotal subtotal
     *
     * @return self
     */
    public function setSubtotal($subtotal)
    {
        $this->container['subtotal'] = $subtotal;

        return $this;
    }

    /**
     * Gets total
     *
     * @return int|null
     */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
     * Sets total
     *
     * @param int|null $total total
     *
     * @return self
     */
    public function setTotal($total)
    {
        $this->container['total'] = $total;

        return $this;
    }

    /**
     * Gets discountedUnitPrice
     *
     * @return int|null
     */
    public function getDiscountedUnitPrice()
    {
        return $this->container['discountedUnitPrice'];
    }

    /**
     * Sets discountedUnitPrice
     *
     * @param int|null $discountedUnitPrice discountedUnitPrice
     *
     * @return self
     */
    public function setDiscountedUnitPrice($discountedUnitPrice)
    {
        $this->container['discountedUnitPrice'] = $discountedUnitPrice;

        return $this;
    }

    /**
     * Gets adjustments
     *
     * @return object[]|null
     */
    public function getAdjustments()
    {
        return $this->container['adjustments'];
    }

    /**
     * Sets adjustments
     *
     * @param object[]|null $adjustments adjustments
     *
     * @return self
     */
    public function setAdjustments($adjustments)
    {
        $this->container['adjustments'] = $adjustments;

        return $this;
    }

    /**
     * Gets adjustmentsTotal
     *
     * @return int|null
     */
    public function getAdjustmentsTotal()
    {
        return $this->container['adjustmentsTotal'];
    }

    /**
     * Sets adjustmentsTotal
     *
     * @param int|null $adjustmentsTotal adjustmentsTotal
     *
     * @return self
     */
    public function setAdjustmentsTotal($adjustmentsTotal)
    {
        $this->container['adjustmentsTotal'] = $adjustmentsTotal;

        return $this;
    }

    /**
     * Gets adjustmentsTotalRecursively
     *
     * @return int|null
     */
    public function getAdjustmentsTotalRecursively()
    {
        return $this->container['adjustmentsTotalRecursively'];
    }

    /**
     * Sets adjustmentsTotalRecursively
     *
     * @param int|null $adjustmentsTotalRecursively adjustmentsTotalRecursively
     *
     * @return self
     */
    public function setAdjustmentsTotalRecursively($adjustmentsTotalRecursively)
    {
        $this->container['adjustmentsTotalRecursively'] = $adjustmentsTotalRecursively;

        return $this;
    }

    /**
     * Gets participant
     *
     * @return \SmartEventSDK\Models\Participant[]|null
     */
    public function getParticipant()
    {
        return $this->container['participant'];
    }

    /**
     * Sets participant
     *
     * @param \SmartEventSDK\Models\Participant[]|null $participant participant
     *
     * @return self
     */
    public function setParticipant($participant)
    {
        $this->container['participant'] = $participant;

        return $this;
    }

    /**
     * Gets ticket
     *
     * @return \SmartEventSDK\Models\Ticket[]|null
     */
    public function getTicket()
    {
        return $this->container['ticket'];
    }

    /**
     * Sets ticket
     *
     * @param \SmartEventSDK\Models\Ticket[]|null $ticket ticket
     *
     * @return self
     */
    public function setTicket($ticket)
    {
        $this->container['ticket'] = $ticket;

        return $this;
    }

    /**
     * Gets event
     *
     * @return \SmartEventSDK\Models\Event[]|null
     */
    public function getEvent()
    {
        return $this->container['event'];
    }

    /**
     * Sets event
     *
     * @param \SmartEventSDK\Models\Event[]|null $event event
     *
     * @return self
     */
    public function setEvent($event)
    {
        $this->container['event'] = $event;

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


