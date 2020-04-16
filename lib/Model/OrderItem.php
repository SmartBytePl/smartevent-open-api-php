<?php
/**
 * OrderItem
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Smart Event Open API
 *
 * Smart Event Open API documentation
 *
 * OpenAPI spec version: 2.0.15
 * Contact: info@smartevent.pl
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.19
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * OrderItem Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OrderItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'OrderItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'quantity' => 'int',
'unit_price' => 'int',
'tax_total' => 'int',
'subtotal' => 'int',
'total' => 'int',
'discounted_unit_price' => 'int',
'adjustments' => 'object[]',
'adjustments_total' => 'int',
'adjustments_total_recursively' => 'int',
'participant' => '\Swagger\Client\Model\Participant[]',
'ticket' => '\Swagger\Client\Model\Ticket[]',
'event' => '\Swagger\Client\Model\Event[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'quantity' => null,
'unit_price' => null,
'tax_total' => null,
'subtotal' => null,
'total' => null,
'discounted_unit_price' => null,
'adjustments' => null,
'adjustments_total' => null,
'adjustments_total_recursively' => null,
'participant' => null,
'ticket' => null,
'event' => null    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'quantity' => 'quantity',
'unit_price' => 'unit_price',
'tax_total' => 'tax_total',
'subtotal' => 'subtotal',
'total' => 'total',
'discounted_unit_price' => 'discounted_unit_price',
'adjustments' => 'adjustments',
'adjustments_total' => 'adjustments_total',
'adjustments_total_recursively' => 'adjustments_total_recursively',
'participant' => 'participant',
'ticket' => 'ticket',
'event' => 'event'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'quantity' => 'setQuantity',
'unit_price' => 'setUnitPrice',
'tax_total' => 'setTaxTotal',
'subtotal' => 'setSubtotal',
'total' => 'setTotal',
'discounted_unit_price' => 'setDiscountedUnitPrice',
'adjustments' => 'setAdjustments',
'adjustments_total' => 'setAdjustmentsTotal',
'adjustments_total_recursively' => 'setAdjustmentsTotalRecursively',
'participant' => 'setParticipant',
'ticket' => 'setTicket',
'event' => 'setEvent'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'quantity' => 'getQuantity',
'unit_price' => 'getUnitPrice',
'tax_total' => 'getTaxTotal',
'subtotal' => 'getSubtotal',
'total' => 'getTotal',
'discounted_unit_price' => 'getDiscountedUnitPrice',
'adjustments' => 'getAdjustments',
'adjustments_total' => 'getAdjustmentsTotal',
'adjustments_total_recursively' => 'getAdjustmentsTotalRecursively',
'participant' => 'getParticipant',
'ticket' => 'getTicket',
'event' => 'getEvent'    ];

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
        return self::$swaggerModelName;
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
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['unit_price'] = isset($data['unit_price']) ? $data['unit_price'] : null;
        $this->container['tax_total'] = isset($data['tax_total']) ? $data['tax_total'] : null;
        $this->container['subtotal'] = isset($data['subtotal']) ? $data['subtotal'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
        $this->container['discounted_unit_price'] = isset($data['discounted_unit_price']) ? $data['discounted_unit_price'] : null;
        $this->container['adjustments'] = isset($data['adjustments']) ? $data['adjustments'] : null;
        $this->container['adjustments_total'] = isset($data['adjustments_total']) ? $data['adjustments_total'] : null;
        $this->container['adjustments_total_recursively'] = isset($data['adjustments_total_recursively']) ? $data['adjustments_total_recursively'] : null;
        $this->container['participant'] = isset($data['participant']) ? $data['participant'] : null;
        $this->container['ticket'] = isset($data['ticket']) ? $data['ticket'] : null;
        $this->container['event'] = isset($data['event']) ? $data['event'] : null;
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
     * @return int
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param int $quantity quantity
     *
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets unit_price
     *
     * @return int
     */
    public function getUnitPrice()
    {
        return $this->container['unit_price'];
    }

    /**
     * Sets unit_price
     *
     * @param int $unit_price unit_price
     *
     * @return $this
     */
    public function setUnitPrice($unit_price)
    {
        $this->container['unit_price'] = $unit_price;

        return $this;
    }

    /**
     * Gets tax_total
     *
     * @return int
     */
    public function getTaxTotal()
    {
        return $this->container['tax_total'];
    }

    /**
     * Sets tax_total
     *
     * @param int $tax_total tax_total
     *
     * @return $this
     */
    public function setTaxTotal($tax_total)
    {
        $this->container['tax_total'] = $tax_total;

        return $this;
    }

    /**
     * Gets subtotal
     *
     * @return int
     */
    public function getSubtotal()
    {
        return $this->container['subtotal'];
    }

    /**
     * Sets subtotal
     *
     * @param int $subtotal subtotal
     *
     * @return $this
     */
    public function setSubtotal($subtotal)
    {
        $this->container['subtotal'] = $subtotal;

        return $this;
    }

    /**
     * Gets total
     *
     * @return int
     */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
     * Sets total
     *
     * @param int $total total
     *
     * @return $this
     */
    public function setTotal($total)
    {
        $this->container['total'] = $total;

        return $this;
    }

    /**
     * Gets discounted_unit_price
     *
     * @return int
     */
    public function getDiscountedUnitPrice()
    {
        return $this->container['discounted_unit_price'];
    }

    /**
     * Sets discounted_unit_price
     *
     * @param int $discounted_unit_price discounted_unit_price
     *
     * @return $this
     */
    public function setDiscountedUnitPrice($discounted_unit_price)
    {
        $this->container['discounted_unit_price'] = $discounted_unit_price;

        return $this;
    }

    /**
     * Gets adjustments
     *
     * @return object[]
     */
    public function getAdjustments()
    {
        return $this->container['adjustments'];
    }

    /**
     * Sets adjustments
     *
     * @param object[] $adjustments adjustments
     *
     * @return $this
     */
    public function setAdjustments($adjustments)
    {
        $this->container['adjustments'] = $adjustments;

        return $this;
    }

    /**
     * Gets adjustments_total
     *
     * @return int
     */
    public function getAdjustmentsTotal()
    {
        return $this->container['adjustments_total'];
    }

    /**
     * Sets adjustments_total
     *
     * @param int $adjustments_total adjustments_total
     *
     * @return $this
     */
    public function setAdjustmentsTotal($adjustments_total)
    {
        $this->container['adjustments_total'] = $adjustments_total;

        return $this;
    }

    /**
     * Gets adjustments_total_recursively
     *
     * @return int
     */
    public function getAdjustmentsTotalRecursively()
    {
        return $this->container['adjustments_total_recursively'];
    }

    /**
     * Sets adjustments_total_recursively
     *
     * @param int $adjustments_total_recursively adjustments_total_recursively
     *
     * @return $this
     */
    public function setAdjustmentsTotalRecursively($adjustments_total_recursively)
    {
        $this->container['adjustments_total_recursively'] = $adjustments_total_recursively;

        return $this;
    }

    /**
     * Gets participant
     *
     * @return \Swagger\Client\Model\Participant[]
     */
    public function getParticipant()
    {
        return $this->container['participant'];
    }

    /**
     * Sets participant
     *
     * @param \Swagger\Client\Model\Participant[] $participant participant
     *
     * @return $this
     */
    public function setParticipant($participant)
    {
        $this->container['participant'] = $participant;

        return $this;
    }

    /**
     * Gets ticket
     *
     * @return \Swagger\Client\Model\Ticket[]
     */
    public function getTicket()
    {
        return $this->container['ticket'];
    }

    /**
     * Sets ticket
     *
     * @param \Swagger\Client\Model\Ticket[] $ticket ticket
     *
     * @return $this
     */
    public function setTicket($ticket)
    {
        $this->container['ticket'] = $ticket;

        return $this;
    }

    /**
     * Gets event
     *
     * @return \Swagger\Client\Model\Event[]
     */
    public function getEvent()
    {
        return $this->container['event'];
    }

    /**
     * Sets event
     *
     * @param \Swagger\Client\Model\Event[] $event event
     *
     * @return $this
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
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
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
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
