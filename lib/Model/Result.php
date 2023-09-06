<?php
/**
 * Result
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
 * Result Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Result implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Result';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'answers' => '\Swagger\Client\Model\Answer[]',
        'article_number_search' => 'bool',
        'bread_crumb_trail' => '\Swagger\Client\Model\BreadCrumbTrailItem[]',
        'campaigns' => '\Swagger\Client\Model\Campaign[]',
        'facets' => '\Swagger\Client\Model\Facet[]',
        'field_roles' => 'map[string,string]',
        'filters' => '\Swagger\Client\Model\Filter[]',
        'follow_search' => 'string',
        'geo' => '\Swagger\Client\Model\Geo',
        'hits' => '\Swagger\Client\Model\SearchRecord[]',
        'paging' => '\Swagger\Client\Model\Paging',
        'score_first_hit' => 'double',
        'score_last_hit' => 'double',
        'search_control_params' => '\Swagger\Client\Model\SearchControlParams',
        'search_params' => '\Swagger\Client\Model\SearchParams',
        'single_word_results' => '\Swagger\Client\Model\SingleWordSearchResult[]',
        'sort_items' => '\Swagger\Client\Model\DescribedSortItem[]',
        'split_documents' => 'bool',
        'timed_out' => 'bool',
        'took_loop54' => 'int',
        'took_total' => 'int',
        'took_worldmatch' => 'int',
        'total_hits' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'answers' => null,
        'article_number_search' => null,
        'bread_crumb_trail' => null,
        'campaigns' => null,
        'facets' => null,
        'field_roles' => null,
        'filters' => null,
        'follow_search' => null,
        'geo' => null,
        'hits' => null,
        'paging' => null,
        'score_first_hit' => 'double',
        'score_last_hit' => 'double',
        'search_control_params' => null,
        'search_params' => null,
        'single_word_results' => null,
        'sort_items' => null,
        'split_documents' => null,
        'timed_out' => null,
        'took_loop54' => 'int64',
        'took_total' => 'int64',
        'took_worldmatch' => 'int64',
        'total_hits' => 'int32'
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
        'answers' => 'answers',
        'article_number_search' => 'articleNumberSearch',
        'bread_crumb_trail' => 'breadCrumbTrail',
        'campaigns' => 'campaigns',
        'facets' => 'facets',
        'field_roles' => 'fieldRoles',
        'filters' => 'filters',
        'follow_search' => 'followSearch',
        'geo' => 'geo',
        'hits' => 'hits',
        'paging' => 'paging',
        'score_first_hit' => 'scoreFirstHit',
        'score_last_hit' => 'scoreLastHit',
        'search_control_params' => 'searchControlParams',
        'search_params' => 'searchParams',
        'single_word_results' => 'singleWordResults',
        'sort_items' => 'sortItems',
        'split_documents' => 'splitDocuments',
        'timed_out' => 'timedOut',
        'took_loop54' => 'tookLoop54',
        'took_total' => 'tookTotal',
        'took_worldmatch' => 'tookWorldmatch',
        'total_hits' => 'totalHits'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'answers' => 'setAnswers',
        'article_number_search' => 'setArticleNumberSearch',
        'bread_crumb_trail' => 'setBreadCrumbTrail',
        'campaigns' => 'setCampaigns',
        'facets' => 'setFacets',
        'field_roles' => 'setFieldRoles',
        'filters' => 'setFilters',
        'follow_search' => 'setFollowSearch',
        'geo' => 'setGeo',
        'hits' => 'setHits',
        'paging' => 'setPaging',
        'score_first_hit' => 'setScoreFirstHit',
        'score_last_hit' => 'setScoreLastHit',
        'search_control_params' => 'setSearchControlParams',
        'search_params' => 'setSearchParams',
        'single_word_results' => 'setSingleWordResults',
        'sort_items' => 'setSortItems',
        'split_documents' => 'setSplitDocuments',
        'timed_out' => 'setTimedOut',
        'took_loop54' => 'setTookLoop54',
        'took_total' => 'setTookTotal',
        'took_worldmatch' => 'setTookWorldmatch',
        'total_hits' => 'setTotalHits'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'answers' => 'getAnswers',
        'article_number_search' => 'getArticleNumberSearch',
        'bread_crumb_trail' => 'getBreadCrumbTrail',
        'campaigns' => 'getCampaigns',
        'facets' => 'getFacets',
        'field_roles' => 'getFieldRoles',
        'filters' => 'getFilters',
        'follow_search' => 'getFollowSearch',
        'geo' => 'getGeo',
        'hits' => 'getHits',
        'paging' => 'getPaging',
        'score_first_hit' => 'getScoreFirstHit',
        'score_last_hit' => 'getScoreLastHit',
        'search_control_params' => 'getSearchControlParams',
        'search_params' => 'getSearchParams',
        'single_word_results' => 'getSingleWordResults',
        'sort_items' => 'getSortItems',
        'split_documents' => 'getSplitDocuments',
        'timed_out' => 'getTimedOut',
        'took_loop54' => 'getTookLoop54',
        'took_total' => 'getTookTotal',
        'took_worldmatch' => 'getTookWorldmatch',
        'total_hits' => 'getTotalHits'
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
        $this->container['answers'] = isset($data['answers']) ? $data['answers'] : null;
        $this->container['article_number_search'] = isset($data['article_number_search']) ? $data['article_number_search'] : null;
        $this->container['bread_crumb_trail'] = isset($data['bread_crumb_trail']) ? $data['bread_crumb_trail'] : null;
        $this->container['campaigns'] = isset($data['campaigns']) ? $data['campaigns'] : null;
        $this->container['facets'] = isset($data['facets']) ? $data['facets'] : null;
        $this->container['field_roles'] = isset($data['field_roles']) ? $data['field_roles'] : null;
        $this->container['filters'] = isset($data['filters']) ? $data['filters'] : null;
        $this->container['follow_search'] = isset($data['follow_search']) ? $data['follow_search'] : null;
        $this->container['geo'] = isset($data['geo']) ? $data['geo'] : null;
        $this->container['hits'] = isset($data['hits']) ? $data['hits'] : null;
        $this->container['paging'] = isset($data['paging']) ? $data['paging'] : null;
        $this->container['score_first_hit'] = isset($data['score_first_hit']) ? $data['score_first_hit'] : null;
        $this->container['score_last_hit'] = isset($data['score_last_hit']) ? $data['score_last_hit'] : null;
        $this->container['search_control_params'] = isset($data['search_control_params']) ? $data['search_control_params'] : null;
        $this->container['search_params'] = isset($data['search_params']) ? $data['search_params'] : null;
        $this->container['single_word_results'] = isset($data['single_word_results']) ? $data['single_word_results'] : null;
        $this->container['sort_items'] = isset($data['sort_items']) ? $data['sort_items'] : null;
        $this->container['split_documents'] = isset($data['split_documents']) ? $data['split_documents'] : null;
        $this->container['timed_out'] = isset($data['timed_out']) ? $data['timed_out'] : null;
        $this->container['took_loop54'] = isset($data['took_loop54']) ? $data['took_loop54'] : null;
        $this->container['took_total'] = isset($data['took_total']) ? $data['took_total'] : null;
        $this->container['took_worldmatch'] = isset($data['took_worldmatch']) ? $data['took_worldmatch'] : null;
        $this->container['total_hits'] = isset($data['total_hits']) ? $data['total_hits'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['answers'] === null) {
            $invalidProperties[] = "'answers' can't be null";
        }
        if ($this->container['article_number_search'] === null) {
            $invalidProperties[] = "'article_number_search' can't be null";
        }
        if ($this->container['bread_crumb_trail'] === null) {
            $invalidProperties[] = "'bread_crumb_trail' can't be null";
        }
        if ($this->container['campaigns'] === null) {
            $invalidProperties[] = "'campaigns' can't be null";
        }
        if ($this->container['facets'] === null) {
            $invalidProperties[] = "'facets' can't be null";
        }
        if ($this->container['field_roles'] === null) {
            $invalidProperties[] = "'field_roles' can't be null";
        }
        if ($this->container['filters'] === null) {
            $invalidProperties[] = "'filters' can't be null";
        }
        if ($this->container['hits'] === null) {
            $invalidProperties[] = "'hits' can't be null";
        }
        if ($this->container['score_first_hit'] === null) {
            $invalidProperties[] = "'score_first_hit' can't be null";
        }
        if ($this->container['score_last_hit'] === null) {
            $invalidProperties[] = "'score_last_hit' can't be null";
        }
        if ($this->container['search_control_params'] === null) {
            $invalidProperties[] = "'search_control_params' can't be null";
        }
        if ($this->container['single_word_results'] === null) {
            $invalidProperties[] = "'single_word_results' can't be null";
        }
        if ($this->container['sort_items'] === null) {
            $invalidProperties[] = "'sort_items' can't be null";
        }
        if ($this->container['split_documents'] === null) {
            $invalidProperties[] = "'split_documents' can't be null";
        }
        if ($this->container['timed_out'] === null) {
            $invalidProperties[] = "'timed_out' can't be null";
        }
        if ($this->container['took_loop54'] === null) {
            $invalidProperties[] = "'took_loop54' can't be null";
        }
        if ($this->container['took_total'] === null) {
            $invalidProperties[] = "'took_total' can't be null";
        }
        if ($this->container['took_worldmatch'] === null) {
            $invalidProperties[] = "'took_worldmatch' can't be null";
        }
        if ($this->container['total_hits'] === null) {
            $invalidProperties[] = "'total_hits' can't be null";
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
     * Gets answers
     *
     * @return \Swagger\Client\Model\Answer[]
     */
    public function getAnswers()
    {
        return $this->container['answers'];
    }

    /**
     * Sets answers
     *
     * @param \Swagger\Client\Model\Answer[] $answers The selected answers of this result.
     *
     * @return $this
     */
    public function setAnswers($answers)
    {
        $this->container['answers'] = $answers;

        return $this;
    }

    /**
     * Gets article_number_search
     *
     * @return bool
     */
    public function getArticleNumberSearch()
    {
        return $this->container['article_number_search'];
    }

    /**
     * Sets article_number_search
     *
     * @param bool $article_number_search Set to true when an article number search was performed.
     *
     * @return $this
     */
    public function setArticleNumberSearch($article_number_search)
    {
        $this->container['article_number_search'] = $article_number_search;

        return $this;
    }

    /**
     * Gets bread_crumb_trail
     *
     * @return \Swagger\Client\Model\BreadCrumbTrailItem[]
     */
    public function getBreadCrumbTrail()
    {
        return $this->container['bread_crumb_trail'];
    }

    /**
     * Sets bread_crumb_trail
     *
     * @param \Swagger\Client\Model\BreadCrumbTrailItem[] $bread_crumb_trail Describes the actions that lead to the current result. This may be used to return to an intermediate search result.
     *
     * @return $this
     */
    public function setBreadCrumbTrail($bread_crumb_trail)
    {
        $this->container['bread_crumb_trail'] = $bread_crumb_trail;

        return $this;
    }

    /**
     * Gets campaigns
     *
     * @return \Swagger\Client\Model\Campaign[]
     */
    public function getCampaigns()
    {
        return $this->container['campaigns'];
    }

    /**
     * Sets campaigns
     *
     * @param \Swagger\Client\Model\Campaign[] $campaigns Contains the active campaigns for this result.
     *
     * @return $this
     */
    public function setCampaigns($campaigns)
    {
        $this->container['campaigns'] = $campaigns;

        return $this;
    }

    /**
     * Gets facets
     *
     * @return \Swagger\Client\Model\Facet[]
     */
    public function getFacets()
    {
        return $this->container['facets'];
    }

    /**
     * Sets facets
     *
     * @param \Swagger\Client\Model\Facet[] $facets The ASN filters (for after search navigation).
     *
     * @return $this
     */
    public function setFacets($facets)
    {
        $this->container['facets'] = $facets;

        return $this;
    }

    /**
     * Gets field_roles
     *
     * @return map[string,string]
     */
    public function getFieldRoles()
    {
        return $this->container['field_roles'];
    }

    /**
     * Sets field_roles
     *
     * @param map[string,string] $field_roles A field to role mapping. For example, a field role may be 'brand', meaning that the field contains the manufacturer's name. (key = field role, value = field name)
     *
     * @return $this
     */
    public function setFieldRoles($field_roles)
    {
        $this->container['field_roles'] = $field_roles;

        return $this;
    }

    /**
     * Gets filters
     *
     * @return \Swagger\Client\Model\Filter[]
     */
    public function getFilters()
    {
        return $this->container['filters'];
    }

    /**
     * Sets filters
     *
     * @param \Swagger\Client\Model\Filter[] $filters The filter applied for this result.
     *
     * @return $this
     */
    public function setFilters($filters)
    {
        $this->container['filters'] = $filters;

        return $this;
    }

    /**
     * Gets follow_search
     *
     * @return string
     */
    public function getFollowSearch()
    {
        return $this->container['follow_search'];
    }

    /**
     * Sets follow_search
     *
     * @param string $follow_search Request linking param for follow-up search requests. Can improve request performance.
     *
     * @return $this
     */
    public function setFollowSearch($follow_search)
    {
        $this->container['follow_search'] = $follow_search;

        return $this;
    }

    /**
     * Gets geo
     *
     * @return \Swagger\Client\Model\Geo
     */
    public function getGeo()
    {
        return $this->container['geo'];
    }

    /**
     * Sets geo
     *
     * @param \Swagger\Client\Model\Geo $geo geo
     *
     * @return $this
     */
    public function setGeo($geo)
    {
        $this->container['geo'] = $geo;

        return $this;
    }

    /**
     * Gets hits
     *
     * @return \Swagger\Client\Model\SearchRecord[]
     */
    public function getHits()
    {
        return $this->container['hits'];
    }

    /**
     * Sets hits
     *
     * @param \Swagger\Client\Model\SearchRecord[] $hits The relevant products.
     *
     * @return $this
     */
    public function setHits($hits)
    {
        $this->container['hits'] = $hits;

        return $this;
    }

    /**
     * Gets paging
     *
     * @return \Swagger\Client\Model\Paging
     */
    public function getPaging()
    {
        return $this->container['paging'];
    }

    /**
     * Sets paging
     *
     * @param \Swagger\Client\Model\Paging $paging paging
     *
     * @return $this
     */
    public function setPaging($paging)
    {
        $this->container['paging'] = $paging;

        return $this;
    }

    /**
     * Gets score_first_hit
     *
     * @return double
     */
    public function getScoreFirstHit()
    {
        return $this->container['score_first_hit'];
    }

    /**
     * Sets score_first_hit
     *
     * @param double $score_first_hit The score of the best match in the search result.
     *
     * @return $this
     */
    public function setScoreFirstHit($score_first_hit)
    {
        $this->container['score_first_hit'] = $score_first_hit;

        return $this;
    }

    /**
     * Gets score_last_hit
     *
     * @return double
     */
    public function getScoreLastHit()
    {
        return $this->container['score_last_hit'];
    }

    /**
     * Sets score_last_hit
     *
     * @param double $score_last_hit The score of the worst match in the search result.
     *
     * @return $this
     */
    public function setScoreLastHit($score_last_hit)
    {
        $this->container['score_last_hit'] = $score_last_hit;

        return $this;
    }

    /**
     * Gets search_control_params
     *
     * @return \Swagger\Client\Model\SearchControlParams
     */
    public function getSearchControlParams()
    {
        return $this->container['search_control_params'];
    }

    /**
     * Sets search_control_params
     *
     * @param \Swagger\Client\Model\SearchControlParams $search_control_params search_control_params
     *
     * @return $this
     */
    public function setSearchControlParams($search_control_params)
    {
        $this->container['search_control_params'] = $search_control_params;

        return $this;
    }

    /**
     * Gets search_params
     *
     * @return \Swagger\Client\Model\SearchParams
     */
    public function getSearchParams()
    {
        return $this->container['search_params'];
    }

    /**
     * Sets search_params
     *
     * @param \Swagger\Client\Model\SearchParams $search_params search_params
     *
     * @return $this
     */
    public function setSearchParams($search_params)
    {
        $this->container['search_params'] = $search_params;

        return $this;
    }

    /**
     * Gets single_word_results
     *
     * @return \Swagger\Client\Model\SingleWordSearchResult[]
     */
    public function getSingleWordResults()
    {
        return $this->container['single_word_results'];
    }

    /**
     * Sets single_word_results
     *
     * @param \Swagger\Client\Model\SingleWordSearchResult[] $single_word_results Contains the result from the single word search.
     *
     * @return $this
     */
    public function setSingleWordResults($single_word_results)
    {
        $this->container['single_word_results'] = $single_word_results;

        return $this;
    }

    /**
     * Gets sort_items
     *
     * @return \Swagger\Client\Model\DescribedSortItem[]
     */
    public function getSortItems()
    {
        return $this->container['sort_items'];
    }

    /**
     * Sets sort_items
     *
     * @param \Swagger\Client\Model\DescribedSortItem[] $sort_items Contains the available sortings.
     *
     * @return $this
     */
    public function setSortItems($sort_items)
    {
        $this->container['sort_items'] = $sort_items;

        return $this;
    }

    /**
     * Gets split_documents
     *
     * @return bool
     */
    public function getSplitDocuments()
    {
        return $this->container['split_documents'];
    }

    /**
     * Sets split_documents
     *
     * @param bool $split_documents If true, this result was created with variants split into separate documents
     *
     * @return $this
     */
    public function setSplitDocuments($split_documents)
    {
        $this->container['split_documents'] = $split_documents;

        return $this;
    }

    /**
     * Gets timed_out
     *
     * @return bool
     */
    public function getTimedOut()
    {
        return $this->container['timed_out'];
    }

    /**
     * Sets timed_out
     *
     * @param bool $timed_out If true, this search took longer than the timeout currently defined. Therefore, the results may not contain all relevant products.
     *
     * @return $this
     */
    public function setTimedOut($timed_out)
    {
        $this->container['timed_out'] = $timed_out;

        return $this;
    }

    /**
     * Gets took_loop54
     *
     * @return int
     */
    public function getTookLoop54()
    {
        return $this->container['took_loop54'];
    }

    /**
     * Sets took_loop54
     *
     * @param int $took_loop54 The time required for loop54 personalization (in ms).
     *
     * @return $this
     */
    public function setTookLoop54($took_loop54)
    {
        $this->container['took_loop54'] = $took_loop54;

        return $this;
    }

    /**
     * Gets took_total
     *
     * @return int
     */
    public function getTookTotal()
    {
        return $this->container['took_total'];
    }

    /**
     * Sets took_total
     *
     * @param int $took_total The time required to produce the results in the framework (in ms).
     *
     * @return $this
     */
    public function setTookTotal($took_total)
    {
        $this->container['took_total'] = $took_total;

        return $this;
    }

    /**
     * Gets took_worldmatch
     *
     * @return int
     */
    public function getTookWorldmatch()
    {
        return $this->container['took_worldmatch'];
    }

    /**
     * Sets took_worldmatch
     *
     * @param int $took_worldmatch The time required to produce the results in the core (in ms).
     *
     * @return $this
     */
    public function setTookWorldmatch($took_worldmatch)
    {
        $this->container['took_worldmatch'] = $took_worldmatch;

        return $this;
    }

    /**
     * Gets total_hits
     *
     * @return int
     */
    public function getTotalHits()
    {
        return $this->container['total_hits'];
    }

    /**
     * Sets total_hits
     *
     * @param int $total_hits Total number of items in the search result.
     *
     * @return $this
     */
    public function setTotalHits($total_hits)
    {
        $this->container['total_hits'] = $total_hits;

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
