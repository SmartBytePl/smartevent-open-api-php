<?php
/**
 * Event
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

use \ArrayAccess;
use \SmartEventSDK\ObjectSerializer;

/**
 * Event Class Doc Comment
 *
 * @category Class
 * @description Event with its basic information
 * @package  SmartEventSDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class Event implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Event';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'city' => 'string',
        'address' => 'string',
        'salable' => 'bool',
        'visible' => 'bool',
        'finished' => 'bool',
        'daysCount' => 'int',
        'availableFrom' => '\DateTime',
        'availableUntil' => '\DateTime',
        'beginDate' => '\DateTime',
        'endDate' => '\DateTime',
        'visibleFrom' => '\DateTime',
        'visibleUntil' => '\DateTime',
        'translations' => 'map[string,\SmartEventSDK\Models\TranslationEvent]',
        'tickets' => '\SmartEventSDK\Models\Ticket[]',
        'images' => '\SmartEventSDK\Models\Image[]',
        'categories' => '\SmartEventSDK\Models\Category[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => 'int32',
        'city' => null,
        'address' => null,
        'salable' => null,
        'visible' => null,
        'finished' => null,
        'daysCount' => null,
        'availableFrom' => 'date-time',
        'availableUntil' => 'date-time',
        'beginDate' => 'date-time',
        'endDate' => 'date-time',
        'visibleFrom' => 'date-time',
        'visibleUntil' => 'date-time',
        'translations' => null,
        'tickets' => null,
        'images' => null,
        'categories' => null
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
        'id' => 'id',
        'city' => 'city',
        'address' => 'address',
        'salable' => 'salable',
        'visible' => 'visible',
        'finished' => 'finished',
        'daysCount' => 'days_count',
        'availableFrom' => 'available_from',
        'availableUntil' => 'available_until',
        'beginDate' => 'begin_date',
        'endDate' => 'end_date',
        'visibleFrom' => 'visible_from',
        'visibleUntil' => 'visible_until',
        'translations' => 'translations',
        'tickets' => 'tickets',
        'images' => 'images',
        'categories' => 'categories'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'city' => 'setCity',
        'address' => 'setAddress',
        'salable' => 'setSalable',
        'visible' => 'setVisible',
        'finished' => 'setFinished',
        'daysCount' => 'setDaysCount',
        'availableFrom' => 'setAvailableFrom',
        'availableUntil' => 'setAvailableUntil',
        'beginDate' => 'setBeginDate',
        'endDate' => 'setEndDate',
        'visibleFrom' => 'setVisibleFrom',
        'visibleUntil' => 'setVisibleUntil',
        'translations' => 'setTranslations',
        'tickets' => 'setTickets',
        'images' => 'setImages',
        'categories' => 'setCategories'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'city' => 'getCity',
        'address' => 'getAddress',
        'salable' => 'getSalable',
        'visible' => 'getVisible',
        'finished' => 'getFinished',
        'daysCount' => 'getDaysCount',
        'availableFrom' => 'getAvailableFrom',
        'availableUntil' => 'getAvailableUntil',
        'beginDate' => 'getBeginDate',
        'endDate' => 'getEndDate',
        'visibleFrom' => 'getVisibleFrom',
        'visibleUntil' => 'getVisibleUntil',
        'translations' => 'getTranslations',
        'tickets' => 'getTickets',
        'images' => 'getImages',
        'categories' => 'getCategories'
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
        $this->container['id'] = $data['id'] ?? null;
        $this->container['city'] = $data['city'] ?? null;
        $this->container['address'] = $data['address'] ?? null;
        $this->container['salable'] = $data['salable'] ?? null;
        $this->container['visible'] = $data['visible'] ?? null;
        $this->container['finished'] = $data['finished'] ?? null;
        $this->container['daysCount'] = $data['daysCount'] ?? null;
        $this->container['availableFrom'] = $data['availableFrom'] ?? null;
        $this->container['availableUntil'] = $data['availableUntil'] ?? null;
        $this->container['beginDate'] = $data['beginDate'] ?? null;
        $this->container['endDate'] = $data['endDate'] ?? null;
        $this->container['visibleFrom'] = $data['visibleFrom'] ?? null;
        $this->container['visibleUntil'] = $data['visibleUntil'] ?? null;
        $this->container['translations'] = $data['translations'] ?? null;
        $this->container['tickets'] = $data['tickets'] ?? null;
        $this->container['images'] = $data['images'] ?? null;
        $this->container['categories'] = $data['categories'] ?? null;
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
     * Gets id
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int|null $id id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets city
     *
     * @return string|null
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string|null $city city
     *
     * @return self
     */
    public function setCity($city)
    {
        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets address
     *
     * @return string|null
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param string|null $address address
     *
     * @return self
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets salable
     *
     * @return bool|null
     */
    public function getSalable()
    {
        return $this->container['salable'];
    }

    /**
     * Sets salable
     *
     * @param bool|null $salable salable
     *
     * @return self
     */
    public function setSalable($salable)
    {
        $this->container['salable'] = $salable;

        return $this;
    }

    /**
     * Gets visible
     *
     * @return bool|null
     */
    public function getVisible()
    {
        return $this->container['visible'];
    }

    /**
     * Sets visible
     *
     * @param bool|null $visible visible
     *
     * @return self
     */
    public function setVisible($visible)
    {
        $this->container['visible'] = $visible;

        return $this;
    }

    /**
     * Gets finished
     *
     * @return bool|null
     */
    public function getFinished()
    {
        return $this->container['finished'];
    }

    /**
     * Sets finished
     *
     * @param bool|null $finished finished
     *
     * @return self
     */
    public function setFinished($finished)
    {
        $this->container['finished'] = $finished;

        return $this;
    }

    /**
     * Gets daysCount
     *
     * @return int|null
     */
    public function getDaysCount()
    {
        return $this->container['daysCount'];
    }

    /**
     * Sets daysCount
     *
     * @param int|null $daysCount daysCount
     *
     * @return self
     */
    public function setDaysCount($daysCount)
    {
        $this->container['daysCount'] = $daysCount;

        return $this;
    }

    /**
     * Gets availableFrom
     *
     * @return \DateTime|null
     */
    public function getAvailableFrom()
    {
        return $this->container['availableFrom'];
    }

    /**
     * Sets availableFrom
     *
     * @param \DateTime|null $availableFrom availableFrom
     *
     * @return self
     */
    public function setAvailableFrom($availableFrom)
    {
        $this->container['availableFrom'] = $availableFrom;

        return $this;
    }

    /**
     * Gets availableUntil
     *
     * @return \DateTime|null
     */
    public function getAvailableUntil()
    {
        return $this->container['availableUntil'];
    }

    /**
     * Sets availableUntil
     *
     * @param \DateTime|null $availableUntil availableUntil
     *
     * @return self
     */
    public function setAvailableUntil($availableUntil)
    {
        $this->container['availableUntil'] = $availableUntil;

        return $this;
    }

    /**
     * Gets beginDate
     *
     * @return \DateTime|null
     */
    public function getBeginDate()
    {
        return $this->container['beginDate'];
    }

    /**
     * Sets beginDate
     *
     * @param \DateTime|null $beginDate beginDate
     *
     * @return self
     */
    public function setBeginDate($beginDate)
    {
        $this->container['beginDate'] = $beginDate;

        return $this;
    }

    /**
     * Gets endDate
     *
     * @return \DateTime|null
     */
    public function getEndDate()
    {
        return $this->container['endDate'];
    }

    /**
     * Sets endDate
     *
     * @param \DateTime|null $endDate endDate
     *
     * @return self
     */
    public function setEndDate($endDate)
    {
        $this->container['endDate'] = $endDate;

        return $this;
    }

    /**
     * Gets visibleFrom
     *
     * @return \DateTime|null
     */
    public function getVisibleFrom()
    {
        return $this->container['visibleFrom'];
    }

    /**
     * Sets visibleFrom
     *
     * @param \DateTime|null $visibleFrom visibleFrom
     *
     * @return self
     */
    public function setVisibleFrom($visibleFrom)
    {
        $this->container['visibleFrom'] = $visibleFrom;

        return $this;
    }

    /**
     * Gets visibleUntil
     *
     * @return \DateTime|null
     */
    public function getVisibleUntil()
    {
        return $this->container['visibleUntil'];
    }

    /**
     * Sets visibleUntil
     *
     * @param \DateTime|null $visibleUntil visibleUntil
     *
     * @return self
     */
    public function setVisibleUntil($visibleUntil)
    {
        $this->container['visibleUntil'] = $visibleUntil;

        return $this;
    }

    /**
     * Gets translations
     *
     * @return map[string,\SmartEventSDK\Models\TranslationEvent]|null
     */
    public function getTranslations()
    {
        return $this->container['translations'];
    }

    /**
     * Sets translations
     *
     * @param map[string,\SmartEventSDK\Models\TranslationEvent]|null $translations Keys reference to locale of a translation
     *
     * @return self
     */
    public function setTranslations($translations)
    {
        $this->container['translations'] = $translations;

        return $this;
    }

    /**
     * Gets tickets
     *
     * @return \SmartEventSDK\Models\Ticket[]|null
     */
    public function getTickets()
    {
        return $this->container['tickets'];
    }

    /**
     * Sets tickets
     *
     * @param \SmartEventSDK\Models\Ticket[]|null $tickets tickets
     *
     * @return self
     */
    public function setTickets($tickets)
    {
        $this->container['tickets'] = $tickets;

        return $this;
    }

    /**
     * Gets images
     *
     * @return \SmartEventSDK\Models\Image[]|null
     */
    public function getImages()
    {
        return $this->container['images'];
    }

    /**
     * Sets images
     *
     * @param \SmartEventSDK\Models\Image[]|null $images images
     *
     * @return self
     */
    public function setImages($images)
    {
        $this->container['images'] = $images;

        return $this;
    }

    /**
     * Gets categories
     *
     * @return \SmartEventSDK\Models\Category[]|null
     */
    public function getCategories()
    {
        return $this->container['categories'];
    }

    /**
     * Sets categories
     *
     * @param \SmartEventSDK\Models\Category[]|null $categories categories
     *
     * @return self
     */
    public function setCategories($categories)
    {
        $this->container['categories'] = $categories;

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


