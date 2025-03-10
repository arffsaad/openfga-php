<?php
/**
 * StoreIdCheckBody
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
 * StoreIdCheckBody Class Doc Comment
 *
 * Required Attributes:
 * - tuple_key
 *
 * @category Class
 * @package  RuncloudIO\SDK\OPENFGA
 * @author   Runcloud Engineering Team
 * @link     https://github.com/swagger-api/swagger-codegen
 *
 *
 * @method \RuncloudIO\SDK\OPENFGA\Model\CheckRequestTupleKey getTupleKey()
 * @method $this setTupleKey($tuple_key)
 * @method \RuncloudIO\SDK\OPENFGA\Model\ContextualTupleKeys getContextualTuples()
 * @method $this setContextualTuples($contextual_tuples)
 * @method string getAuthorizationModelId()
 * @method $this setAuthorizationModelId($authorization_model_id)
 * @method bool getTrace()
 * @method $this setTrace($trace)
 * @method object getContext()
 * @method $this setContext($context)
 * @method \RuncloudIO\SDK\OPENFGA\Model\ConsistencyPreference getConsistency()
 * @method $this setConsistency($consistency)
 *
 */
class StoreIdCheckBody implements ModelInterface
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'store_id_check_body';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'tuple_key' => '\RuncloudIO\SDK\OPENFGA\Model\CheckRequestTupleKey',
        'contextual_tuples' => '\RuncloudIO\SDK\OPENFGA\Model\ContextualTupleKeys',
        'authorization_model_id' => 'string',
        'trace' => 'bool',
        'context' => 'object',
        'consistency' => '\RuncloudIO\SDK\OPENFGA\Model\ConsistencyPreference'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'tuple_key' => null,
        'contextual_tuples' => null,
        'authorization_model_id' => null,
        'trace' => null,
        'context' => null,
        'consistency' => null
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
        'tuple_key' => 'tuple_key',
        'contextual_tuples' => 'contextual_tuples',
        'authorization_model_id' => 'authorization_model_id',
        'trace' => 'trace',
        'context' => 'context',
        'consistency' => 'consistency'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'tuple_key' => 'setTupleKey',
        'contextual_tuples' => 'setContextualTuples',
        'authorization_model_id' => 'setAuthorizationModelId',
        'trace' => 'setTrace',
        'context' => 'setContext',
        'consistency' => 'setConsistency'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'tuple_key' => 'getTupleKey',
        'contextual_tuples' => 'getContextualTuples',
        'authorization_model_id' => 'getAuthorizationModelId',
        'trace' => 'getTrace',
        'context' => 'getContext',
        'consistency' => 'getConsistency'
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
     * @param \RuncloudIO\SDK\OPENFGA\Model\CheckRequestTupleKey $tuple_key tuple_key 
     * @param \RuncloudIO\SDK\OPENFGA\Model\ContextualTupleKeys $contextual_tuples contextual_tuples 
     * @param string $authorization_model_id authorization_model_id 
     * @param bool $trace trace 
     * @param object $context context 
     * @param \RuncloudIO\SDK\OPENFGA\Model\ConsistencyPreference $consistency consistency 
     *   Associated array of property values initializing the model
     */
    public function __construct(\RuncloudIO\SDK\OPENFGA\Model\CheckRequestTupleKey $tuple_key = null, \RuncloudIO\SDK\OPENFGA\Model\ContextualTupleKeys $contextual_tuples = null, string $authorization_model_id = null, bool $trace = null, object $context = null, \RuncloudIO\SDK\OPENFGA\Model\ConsistencyPreference $consistency = null)
    {
        if(!is_null($tuple_key)) {
            $this->container['tuple_key'] = $tuple_key;
        }
        if(!is_null($contextual_tuples)) {
            $this->container['contextual_tuples'] = $contextual_tuples;
        }
        if(!is_null($authorization_model_id)) {
            $this->container['authorization_model_id'] = $authorization_model_id;
        }
        if(!is_null($trace)) {
            $this->container['trace'] = $trace;
        }
        if(!is_null($context)) {
            $this->container['context'] = $context;
        }
        if(!is_null($consistency)) {
            $this->container['consistency'] = $consistency;
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

        if ($this->container['tuple_key'] === null) {
            $invalidProperties[] = "'tuple_key' can't be null";
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
     * Gets tuple_key
     *
     * @return \RuncloudIO\SDK\OPENFGA\Model\CheckRequestTupleKey
     */
    public function getTupleKey()
    {
        return $this->container['tuple_key'];
    }

    /**
     * Sets tuple_key
     *
     * @param \RuncloudIO\SDK\OPENFGA\Model\CheckRequestTupleKey $tuple_key tuple_key
     *
     * @return $this
     */
    public function setTupleKey($tuple_key)
    {
        $this->container['tuple_key'] = $tuple_key;

        return $this;
    }

    /**
     * Gets contextual_tuples
     *
     * @return \RuncloudIO\SDK\OPENFGA\Model\ContextualTupleKeys
     */
    public function getContextualTuples()
    {
        return $this->container['contextual_tuples'];
    }

    /**
     * Sets contextual_tuples
     *
     * @param \RuncloudIO\SDK\OPENFGA\Model\ContextualTupleKeys $contextual_tuples contextual_tuples
     *
     * @return $this
     */
    public function setContextualTuples($contextual_tuples)
    {
        $this->container['contextual_tuples'] = $contextual_tuples;

        return $this;
    }

    /**
     * Gets authorization_model_id
     *
     * @return string
     */
    public function getAuthorizationModelId()
    {
        return $this->container['authorization_model_id'];
    }

    /**
     * Sets authorization_model_id
     *
     * @param string $authorization_model_id authorization_model_id
     *
     * @return $this
     */
    public function setAuthorizationModelId($authorization_model_id)
    {
        $this->container['authorization_model_id'] = $authorization_model_id;

        return $this;
    }

    /**
     * Gets trace
     *
     * @return bool
     */
    public function getTrace()
    {
        return $this->container['trace'];
    }

    /**
     * Sets trace
     *
     * @param bool $trace Defaults to false. Making it true has performance implications.
     *
     * @return $this
     */
    public function setTrace($trace)
    {
        $this->container['trace'] = $trace;

        return $this;
    }

    /**
     * Gets context
     *
     * @return object
     */
    public function getContext()
    {
        return $this->container['context'];
    }

    /**
     * Sets context
     *
     * @param object $context Additional request context that will be used to evaluate any ABAC conditions encountered in the query evaluation.
     *
     * @return $this
     */
    public function setContext($context)
    {
        $this->container['context'] = $context;

        return $this;
    }

    /**
     * Gets consistency
     *
     * @return \RuncloudIO\SDK\OPENFGA\Model\ConsistencyPreference
     */
    public function getConsistency()
    {
        return $this->container['consistency'];
    }

    /**
     * Sets consistency
     *
     * @param \RuncloudIO\SDK\OPENFGA\Model\ConsistencyPreference $consistency consistency
     *
     * @return $this
     */
    public function setConsistency($consistency)
    {
        $this->container['consistency'] = $consistency;

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

    public function toJson()
    {
        return json_encode($this->container);
    }
}
