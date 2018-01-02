<?php
/**
 * CustomerSession
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * production-customer-sessions-api
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 2017-11-20T16:48:53Z
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;

/**
 * CustomerSession Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CustomerSession implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'customerSession';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'sessionId' => 'string',
        'ip' => 'string',
        'created' => 'float',
        'modified' => 'float',
        'expiredAt' => 'float',
        'merchantId' => 'float',
        'partnerId' => 'float',
        'affiliateInfoId' => 'float',
        'productId' => 'float',
        'destinationId' => 'float',
        'networkId' => 'float',
        'httpReferer' => 'string',
        'httpUserAgent' => 'string',
        'httpAcceptLanguage' => 'string',
        'queryString' => 'string',
        'void' => 'bool',
        'tid' => 'string',
        'isCPA' => 'bool',
        'subIds' => '\Swagger\Client\Model\CustomerSessionSubIds',
        'clickId' => 'string',
        'merchantSubId' => 'string',
        'merchantAliasId' => 'string'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'sessionId' => 'sessionId',
        'ip' => 'ip',
        'created' => 'created',
        'modified' => 'modified',
        'expiredAt' => 'expiredAt',
        'merchantId' => 'merchantId',
        'partnerId' => 'partnerId',
        'affiliateInfoId' => 'affiliateInfoId',
        'productId' => 'productId',
        'destinationId' => 'destinationId',
        'networkId' => 'networkId',
        'httpReferer' => 'httpReferer',
        'httpUserAgent' => 'httpUserAgent',
        'httpAcceptLanguage' => 'httpAcceptLanguage',
        'queryString' => 'queryString',
        'void' => 'void',
        'tid' => 'tid',
        'isCPA' => 'isCPA',
        'subIds' => 'subIds',
        'clickId' => 'clickId',
        'merchantSubId' => 'merchantSubId',
        'merchantAliasId' => 'merchantAliasId'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'sessionId' => 'setSessionId',
        'ip' => 'setIp',
        'created' => 'setCreated',
        'modified' => 'setModified',
        'expiredAt' => 'setExpiredAt',
        'merchantId' => 'setMerchantId',
        'partnerId' => 'setPartnerId',
        'affiliateInfoId' => 'setAffiliateInfoId',
        'productId' => 'setProductId',
        'destinationId' => 'setDestinationId',
        'networkId' => 'setNetworkId',
        'httpReferer' => 'setHttpReferer',
        'httpUserAgent' => 'setHttpUserAgent',
        'httpAcceptLanguage' => 'setHttpAcceptLanguage',
        'queryString' => 'setQueryString',
        'void' => 'setVoid',
        'tid' => 'setTid',
        'isCPA' => 'setIsCPA',
        'subIds' => 'setSubIds',
        'clickId' => 'setClickId',
        'merchantSubId' => 'setMerchantSubId',
        'merchantAliasId' => 'setMerchantAliasId'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'sessionId' => 'getSessionId',
        'ip' => 'getIp',
        'created' => 'getCreated',
        'modified' => 'getModified',
        'expiredAt' => 'getExpiredAt',
        'merchantId' => 'getMerchantId',
        'partnerId' => 'getPartnerId',
        'affiliateInfoId' => 'getAffiliateInfoId',
        'productId' => 'getProductId',
        'destinationId' => 'getDestinationId',
        'networkId' => 'getNetworkId',
        'httpReferer' => 'getHttpReferer',
        'httpUserAgent' => 'getHttpUserAgent',
        'httpAcceptLanguage' => 'getHttpAcceptLanguage',
        'queryString' => 'getQueryString',
        'void' => 'getVoid',
        'tid' => 'getTid',
        'isCPA' => 'getIsCPA',
        'subIds' => 'getSubIds',
        'clickId' => 'getClickId',
        'merchantSubId' => 'getMerchantSubId',
        'merchantAliasId' => 'getMerchantAliasId'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['sessionId'] = isset($data['sessionId']) ? $data['sessionId'] : null;
        $this->container['ip'] = isset($data['ip']) ? $data['ip'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['modified'] = isset($data['modified']) ? $data['modified'] : null;
        $this->container['expiredAt'] = isset($data['expiredAt']) ? $data['expiredAt'] : null;
        $this->container['merchantId'] = isset($data['merchantId']) ? $data['merchantId'] : null;
        $this->container['partnerId'] = isset($data['partnerId']) ? $data['partnerId'] : null;
        $this->container['affiliateInfoId'] = isset($data['affiliateInfoId']) ? $data['affiliateInfoId'] : null;
        $this->container['productId'] = isset($data['productId']) ? $data['productId'] : null;
        $this->container['destinationId'] = isset($data['destinationId']) ? $data['destinationId'] : null;
        $this->container['networkId'] = isset($data['networkId']) ? $data['networkId'] : null;
        $this->container['httpReferer'] = isset($data['httpReferer']) ? $data['httpReferer'] : null;
        $this->container['httpUserAgent'] = isset($data['httpUserAgent']) ? $data['httpUserAgent'] : null;
        $this->container['httpAcceptLanguage'] = isset($data['httpAcceptLanguage']) ? $data['httpAcceptLanguage'] : null;
        $this->container['queryString'] = isset($data['queryString']) ? $data['queryString'] : null;
        $this->container['void'] = isset($data['void']) ? $data['void'] : false;
        $this->container['tid'] = isset($data['tid']) ? $data['tid'] : null;
        $this->container['isCPA'] = isset($data['isCPA']) ? $data['isCPA'] : false;
        $this->container['subIds'] = isset($data['subIds']) ? $data['subIds'] : null;
        $this->container['clickId'] = isset($data['clickId']) ? $data['clickId'] : null;
        $this->container['merchantSubId'] = isset($data['merchantSubId']) ? $data['merchantSubId'] : null;
        $this->container['merchantAliasId'] = isset($data['merchantAliasId']) ? $data['merchantAliasId'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['id'] === null) {
            $invalid_properties[] = "'id' can't be null";
        }
        if ($this->container['sessionId'] === null) {
            $invalid_properties[] = "'sessionId' can't be null";
        }
        if ($this->container['ip'] === null) {
            $invalid_properties[] = "'ip' can't be null";
        }
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        if ($this->container['id'] === null) {
            return false;
        }
        if ($this->container['sessionId'] === null) {
            return false;
        }
        if ($this->container['ip'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets id
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param string $id
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets sessionId
     * @return string
     */
    public function getSessionId()
    {
        return $this->container['sessionId'];
    }

    /**
     * Sets sessionId
     * @param string $sessionId
     * @return $this
     */
    public function setSessionId($sessionId)
    {
        $this->container['sessionId'] = $sessionId;

        return $this;
    }

    /**
     * Gets ip
     * @return string
     */
    public function getIp()
    {
        return $this->container['ip'];
    }

    /**
     * Sets ip
     * @param string $ip
     * @return $this
     */
    public function setIp($ip)
    {
        $this->container['ip'] = $ip;

        return $this;
    }

    /**
     * Gets created
     * @return float
     */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
     * Sets created
     * @param float $created
     * @return $this
     */
    public function setCreated($created)
    {
        $this->container['created'] = $created;

        return $this;
    }

    /**
     * Gets modified
     * @return float
     */
    public function getModified()
    {
        return $this->container['modified'];
    }

    /**
     * Sets modified
     * @param float $modified
     * @return $this
     */
    public function setModified($modified)
    {
        $this->container['modified'] = $modified;

        return $this;
    }

    /**
     * Gets expiredAt
     * @return float
     */
    public function getExpiredAt()
    {
        return $this->container['expiredAt'];
    }

    /**
     * Sets expiredAt
     * @param float $expiredAt
     * @return $this
     */
    public function setExpiredAt($expiredAt)
    {
        $this->container['expiredAt'] = $expiredAt;

        return $this;
    }

    /**
     * Gets merchantId
     * @return float
     */
    public function getMerchantId()
    {
        return $this->container['merchantId'];
    }

    /**
     * Sets merchantId
     * @param float $merchantId
     * @return $this
     */
    public function setMerchantId($merchantId)
    {
        $this->container['merchantId'] = $merchantId;

        return $this;
    }

    /**
     * Gets partnerId
     * @return float
     */
    public function getPartnerId()
    {
        return $this->container['partnerId'];
    }

    /**
     * Sets partnerId
     * @param float $partnerId
     * @return $this
     */
    public function setPartnerId($partnerId)
    {
        $this->container['partnerId'] = $partnerId;

        return $this;
    }

    /**
     * Gets affiliateInfoId
     * @return float
     */
    public function getAffiliateInfoId()
    {
        return $this->container['affiliateInfoId'];
    }

    /**
     * Sets affiliateInfoId
     * @param float $affiliateInfoId
     * @return $this
     */
    public function setAffiliateInfoId($affiliateInfoId)
    {
        $this->container['affiliateInfoId'] = $affiliateInfoId;

        return $this;
    }

    /**
     * Gets productId
     * @return float
     */
    public function getProductId()
    {
        return $this->container['productId'];
    }

    /**
     * Sets productId
     * @param float $productId
     * @return $this
     */
    public function setProductId($productId)
    {
        $this->container['productId'] = $productId;

        return $this;
    }

    /**
     * Gets destinationId
     * @return float
     */
    public function getDestinationId()
    {
        return $this->container['destinationId'];
    }

    /**
     * Sets destinationId
     * @param float $destinationId
     * @return $this
     */
    public function setDestinationId($destinationId)
    {
        $this->container['destinationId'] = $destinationId;

        return $this;
    }

    /**
     * Gets networkId
     * @return float
     */
    public function getNetworkId()
    {
        return $this->container['networkId'];
    }

    /**
     * Sets networkId
     * @param float $networkId
     * @return $this
     */
    public function setNetworkId($networkId)
    {
        $this->container['networkId'] = $networkId;

        return $this;
    }

    /**
     * Gets httpReferer
     * @return string
     */
    public function getHttpReferer()
    {
        return $this->container['httpReferer'];
    }

    /**
     * Sets httpReferer
     * @param string $httpReferer
     * @return $this
     */
    public function setHttpReferer($httpReferer)
    {
        $this->container['httpReferer'] = $httpReferer;

        return $this;
    }

    /**
     * Gets httpUserAgent
     * @return string
     */
    public function getHttpUserAgent()
    {
        return $this->container['httpUserAgent'];
    }

    /**
     * Sets httpUserAgent
     * @param string $httpUserAgent
     * @return $this
     */
    public function setHttpUserAgent($httpUserAgent)
    {
        $this->container['httpUserAgent'] = $httpUserAgent;

        return $this;
    }

    /**
     * Gets httpAcceptLanguage
     * @return string
     */
    public function getHttpAcceptLanguage()
    {
        return $this->container['httpAcceptLanguage'];
    }

    /**
     * Sets httpAcceptLanguage
     * @param string $httpAcceptLanguage
     * @return $this
     */
    public function setHttpAcceptLanguage($httpAcceptLanguage)
    {
        $this->container['httpAcceptLanguage'] = $httpAcceptLanguage;

        return $this;
    }

    /**
     * Gets queryString
     * @return string
     */
    public function getQueryString()
    {
        return $this->container['queryString'];
    }

    /**
     * Sets queryString
     * @param string $queryString
     * @return $this
     */
    public function setQueryString($queryString)
    {
        $this->container['queryString'] = $queryString;

        return $this;
    }

    /**
     * Gets void
     * @return bool
     */
    public function getVoid()
    {
        return $this->container['void'];
    }

    /**
     * Sets void
     * @param bool $void
     * @return $this
     */
    public function setVoid($void)
    {
        $this->container['void'] = $void;

        return $this;
    }

    /**
     * Gets tid
     * @return string
     */
    public function getTid()
    {
        return $this->container['tid'];
    }

    /**
     * Sets tid
     * @param string $tid
     * @return $this
     */
    public function setTid($tid)
    {
        $this->container['tid'] = $tid;

        return $this;
    }

    /**
     * Gets isCPA
     * @return bool
     */
    public function getIsCPA()
    {
        return $this->container['isCPA'];
    }

    /**
     * Sets isCPA
     * @param bool $isCPA
     * @return $this
     */
    public function setIsCPA($isCPA)
    {
        $this->container['isCPA'] = $isCPA;

        return $this;
    }

    /**
     * Gets subIds
     * @return \Swagger\Client\Model\CustomerSessionSubIds
     */
    public function getSubIds()
    {
        return $this->container['subIds'];
    }

    /**
     * Sets subIds
     * @param \Swagger\Client\Model\CustomerSessionSubIds $subIds
     * @return $this
     */
    public function setSubIds($subIds)
    {
        $this->container['subIds'] = $subIds;

        return $this;
    }

    /**
     * Gets clickId
     * @return string
     */
    public function getClickId()
    {
        return $this->container['clickId'];
    }

    /**
     * Sets clickId
     * @param string $clickId
     * @return $this
     */
    public function setClickId($clickId)
    {
        $this->container['clickId'] = $clickId;

        return $this;
    }

    /**
     * Gets merchantSubId
     * @return string
     */
    public function getMerchantSubId()
    {
        return $this->container['merchantSubId'];
    }

    /**
     * Sets merchantSubId
     * @param string $merchantSubId
     * @return $this
     */
    public function setMerchantSubId($merchantSubId)
    {
        $this->container['merchantSubId'] = $merchantSubId;

        return $this;
    }

    /**
     * Gets merchantAliasId
     * @return string
     */
    public function getMerchantAliasId()
    {
        return $this->container['merchantAliasId'];
    }

    /**
     * Sets merchantAliasId
     * @param string $merchantAliasId
     * @return $this
     */
    public function setMerchantAliasId($merchantAliasId)
    {
        $this->container['merchantAliasId'] = $merchantAliasId;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}


