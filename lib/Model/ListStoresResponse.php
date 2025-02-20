<?php
/**
 * ListStoresResponse
 *
 * @category Class
 * @package  RuncloudIO\SDK\OPENFGA
 * @author   Runcloud Engineering Team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * OpenFGA
 *
 * A high performance and flexible authorization/permission engine built for developers and inspired by Google Zanzibar.
 *
 * OpenAPI spec version: 1.x
 * Contact: community@openfga.dev
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.67
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace RuncloudIO\SDK\OPENFGA\Model;

use \RuncloudIO\SDK\OPENFGA\ObjectSerializer;

/**
 * ListStoresResponse Class Doc Comment
 *
 * Required Attributes:
 * - stores
 * - continuation_token
 *
 * @category Class
 * @package  RuncloudIO\SDK\OPENFGA
 * @author   Runcloud Engineering Team
 * @link     https://github.com/swagger-api/swagger-codegen
 *
 *
 * @method \RuncloudIO\SDK\OPENFGA\Model\Store[] getStores()
 * @method $this setStores($stores)
 * @method string getContinuationToken()
 * @method $this setContinuationToken($continuation_token)
 *
 */
class ListStoresResponse implements ModelInterface
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ListStoresResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'stores' => '\RuncloudIO\SDK\OPENFGA\Model\Store[]',
        'continuation_token' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'stores' => null,
        'continuation_token' => null
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
        'stores' => 'stores',
        'continuation_token' => 'continuation_token'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'stores' => 'setStores',
        'continuation_token' => 'setContinuationToken'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'stores' => 'getStores',
        'continuation_token' => 'getContinuationToken'
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
     * @param \RuncloudIO\SDK\OPENFGA\Model\Store[] $stores stores 
     * @param string $continuation_token continuation_token 
     *   Associated array of property values initializing the model
     */
    public function __construct(array $stores = null, string $continuation_token = null)
    {
        if(!is_null($stores)) {
            $this->container['stores'] = $stores;
        }
        if(!is_null($continuation_token)) {
            $this->container['continuation_token'] = $continuation_token;
        }
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['stores'] === null) {
            $invalidProperties[] = "'stores' can't be null";
        }
        if ($this->container['continuation_token'] === null) {
            $invalidProperties[] = "'continuation_token' can't be null";
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
     * Gets stores
     *
     * @return \RuncloudIO\SDK\OPENFGA\Model\Store[]
     */
    public function getStores()
    {
        return $this->container['stores'];
    }

    /**
     * Sets stores
     *
     * @param \RuncloudIO\SDK\OPENFGA\Model\Store[] $stores stores
     *
     * @return $this
     */
    public function setStores($stores)
    {
        $this->container['stores'] = $stores;

        return $this;
    }

    /**
     * Gets continuation_token
     *
     * @return string
     */
    public function getContinuationToken()
    {
        return $this->container['continuation_token'];
    }

    /**
     * Sets continuation_token
     *
     * @param string $continuation_token The continuation token will be empty if there are no more stores.
     *
     * @return $this
     */
    public function setContinuationToken($continuation_token)
    {
        $this->container['continuation_token'] = $continuation_token;

        return $this;
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
