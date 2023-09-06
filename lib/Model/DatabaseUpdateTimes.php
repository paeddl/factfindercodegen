<?php
/**
 * DatabaseUpdateTimes
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * FACT-Finder REST-API
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: v5
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.46
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
 * DatabaseUpdateTimes Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DatabaseUpdateTimes implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DatabaseUpdateTimes';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'database' => 'string',
        'date_intermediate' => '\DateTime',
        'date_loaded' => '\DateTime',
        'last_update' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'database' => null,
        'date_intermediate' => 'date-time',
        'date_loaded' => 'date-time',
        'last_update' => 'date-time'
    ];

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
        'database' => 'database',
        'date_intermediate' => 'dateIntermediate',
        'date_loaded' => 'dateLoaded',
        'last_update' => 'lastUpdate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'database' => 'setDatabase',
        'date_intermediate' => 'setDateIntermediate',
        'date_loaded' => 'setDateLoaded',
        'last_update' => 'setLastUpdate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'database' => 'getDatabase',
        'date_intermediate' => 'getDateIntermediate',
        'date_loaded' => 'getDateLoaded',
        'last_update' => 'getLastUpdate'
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
        $this->container['database'] = isset($data['database']) ? $data['database'] : null;
        $this->container['date_intermediate'] = isset($data['date_intermediate']) ? $data['date_intermediate'] : null;
        $this->container['date_loaded'] = isset($data['date_loaded']) ? $data['date_loaded'] : null;
        $this->container['last_update'] = isset($data['last_update']) ? $data['last_update'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['database'] === null) {
            $invalidProperties[] = "'database' can't be null";
        }
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
     * Gets database
     *
     * @return string
     */
    public function getDatabase()
    {
        return $this->container['database'];
    }

    /**
     * Sets database
     *
     * @param string $database Name of the Database.
     *
     * @return $this
     */
    public function setDatabase($database)
    {
        $this->container['database'] = $database;

        return $this;
    }

    /**
     * Gets date_intermediate
     *
     * @return \DateTime
     */
    public function getDateIntermediate()
    {
        return $this->container['date_intermediate'];
    }

    /**
     * Sets date_intermediate
     *
     * @param \DateTime $date_intermediate Date the intermediate DB was imported.
     *
     * @return $this
     */
    public function setDateIntermediate($date_intermediate)
    {
        $this->container['date_intermediate'] = $date_intermediate;

        return $this;
    }

    /**
     * Gets date_loaded
     *
     * @return \DateTime
     */
    public function getDateLoaded()
    {
        return $this->container['date_loaded'];
    }

    /**
     * Sets date_loaded
     *
     * @param \DateTime $date_loaded Date loaded into worldmatch.
     *
     * @return $this
     */
    public function setDateLoaded($date_loaded)
    {
        $this->container['date_loaded'] = $date_loaded;

        return $this;
    }

    /**
     * Gets last_update
     *
     * @return \DateTime
     */
    public function getLastUpdate()
    {
        return $this->container['last_update'];
    }

    /**
     * Sets last_update
     *
     * @param \DateTime $last_update Date of the last delta update.
     *
     * @return $this
     */
    public function setLastUpdate($last_update)
    {
        $this->container['last_update'] = $last_update;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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