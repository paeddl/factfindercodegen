<?php
/**
 * LandingPageClickEvent
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
 * LandingPageClickEvent Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LandingPageClickEvent implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'LandingPageClickEvent';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'campaign' => 'string',
        'id' => 'string',
        'master_id' => 'string',
        'page_id' => 'string',
        'purchaser_id' => 'string',
        'sid' => 'string',
        'title' => 'string',
        'user_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'campaign' => null,
        'id' => null,
        'master_id' => null,
        'page_id' => null,
        'purchaser_id' => null,
        'sid' => null,
        'title' => null,
        'user_id' => null
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
        'campaign' => 'campaign',
        'id' => 'id',
        'master_id' => 'masterId',
        'page_id' => 'pageId',
        'purchaser_id' => 'purchaserId',
        'sid' => 'sid',
        'title' => 'title',
        'user_id' => 'userId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'campaign' => 'setCampaign',
        'id' => 'setId',
        'master_id' => 'setMasterId',
        'page_id' => 'setPageId',
        'purchaser_id' => 'setPurchaserId',
        'sid' => 'setSid',
        'title' => 'setTitle',
        'user_id' => 'setUserId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'campaign' => 'getCampaign',
        'id' => 'getId',
        'master_id' => 'getMasterId',
        'page_id' => 'getPageId',
        'purchaser_id' => 'getPurchaserId',
        'sid' => 'getSid',
        'title' => 'getTitle',
        'user_id' => 'getUserId'
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
        $this->container['campaign'] = isset($data['campaign']) ? $data['campaign'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['master_id'] = isset($data['master_id']) ? $data['master_id'] : null;
        $this->container['page_id'] = isset($data['page_id']) ? $data['page_id'] : null;
        $this->container['purchaser_id'] = isset($data['purchaser_id']) ? $data['purchaser_id'] : null;
        $this->container['sid'] = isset($data['sid']) ? $data['sid'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['user_id'] = isset($data['user_id']) ? $data['user_id'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['campaign'] === null) {
            $invalidProperties[] = "'campaign' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['page_id'] === null) {
            $invalidProperties[] = "'page_id' can't be null";
        }
        if ($this->container['sid'] === null) {
            $invalidProperties[] = "'sid' can't be null";
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
     * Gets campaign
     *
     * @return string
     */
    public function getCampaign()
    {
        return $this->container['campaign'];
    }

    /**
     * Sets campaign
     *
     * @param string $campaign The ID of the campaign, which added the product to the landing page.
     *
     * @return $this
     */
    public function setCampaign($campaign)
    {
        $this->container['campaign'] = $campaign;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id The ID of the product.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets master_id
     *
     * @return string
     */
    public function getMasterId()
    {
        return $this->container['master_id'];
    }

    /**
     * Sets master_id
     *
     * @param string $master_id Contains the master ID, if the article is a variant and 'ID' refers to the variant.
     *
     * @return $this
     */
    public function setMasterId($master_id)
    {
        $this->container['master_id'] = $master_id;

        return $this;
    }

    /**
     * Gets page_id
     *
     * @return string
     */
    public function getPageId()
    {
        return $this->container['page_id'];
    }

    /**
     * Sets page_id
     *
     * @param string $page_id The ID of the landing page.
     *
     * @return $this
     */
    public function setPageId($page_id)
    {
        $this->container['page_id'] = $page_id;

        return $this;
    }

    /**
     * Gets purchaser_id
     *
     * @return string
     */
    public function getPurchaserId()
    {
        return $this->container['purchaser_id'];
    }

    /**
     * Sets purchaser_id
     *
     * @param string $purchaser_id The ID for customer specific pricing.
     *
     * @return $this
     */
    public function setPurchaserId($purchaser_id)
    {
        $this->container['purchaser_id'] = $purchaser_id;

        return $this;
    }

    /**
     * Gets sid
     *
     * @return string
     */
    public function getSid()
    {
        return $this->container['sid'];
    }

    /**
     * Sets sid
     *
     * @param string $sid The session ID.
     *
     * @return $this
     */
    public function setSid($sid)
    {
        $this->container['sid'] = $sid;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string $title The title of the product.
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets user_id
     *
     * @return string
     */
    public function getUserId()
    {
        return $this->container['user_id'];
    }

    /**
     * Sets user_id
     *
     * @param string $user_id The ID of the user who issued the request.
     *
     * @return $this
     */
    public function setUserId($user_id)
    {
        $this->container['user_id'] = $user_id;

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
