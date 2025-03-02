<?php
/**
 * Assertion
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
 * Assertion Class Doc Comment
 *
 * Required Attributes:
 * - tuple_key
 * - expectation
 *
 * @category Class
 * @package  RuncloudIO\SDK\OPENFGA
 * @author   Runcloud Engineering Team
 * @link     https://github.com/swagger-api/swagger-codegen
 *
 *
 * @method \RuncloudIO\SDK\OPENFGA\Model\AssertionTupleKey getTupleKey()
 * @method $this setTupleKey($tuple_key)
 * @method bool getExpectation()
 * @method $this setExpectation($expectation)
 * @method \RuncloudIO\SDK\OPENFGA\Model\TupleKey[] getContextualTuples()
 * @method $this setContextualTuples($contextual_tuples)
 * @method object getContext()
 * @method $this setContext($context)
 *
 */
class Assertion implements ModelInterface
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Assertion';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'tuple_key' => '\RuncloudIO\SDK\OPENFGA\Model\AssertionTupleKey',
        'expectation' => 'bool',
        'contextual_tuples' => '\RuncloudIO\SDK\OPENFGA\Model\TupleKey[]',
        'context' => 'object'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'tuple_key' => null,
        'expectation' => null,
        'contextual_tuples' => null,
        'context' => null
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
        'expectation' => 'expectation',
        'contextual_tuples' => 'contextual_tuples',
        'context' => 'context'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'tuple_key' => 'setTupleKey',
        'expectation' => 'setExpectation',
        'contextual_tuples' => 'setContextualTuples',
        'context' => 'setContext'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'tuple_key' => 'getTupleKey',
        'expectation' => 'getExpectation',
        'contextual_tuples' => 'getContextualTuples',
        'context' => 'getContext'
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
     * @param \RuncloudIO\SDK\OPENFGA\Model\AssertionTupleKey $tuple_key tuple_key 
     * @param bool $expectation expectation 
     * @param \RuncloudIO\SDK\OPENFGA\Model\TupleKey[] $contextual_tuples contextual_tuples 
     * @param object $context context 
     *   Associated array of property values initializing the model
     */
    public function __construct(\RuncloudIO\SDK\OPENFGA\Model\AssertionTupleKey $tuple_key = null, bool $expectation = null, array $contextual_tuples = null, object $context = null)
    {
        if(!is_null($tuple_key)) {
            $this->container['tuple_key'] = $tuple_key;
        }
        if(!is_null($expectation)) {
            $this->container['expectation'] = $expectation;
        }
        if(!is_null($contextual_tuples)) {
            $this->container['contextual_tuples'] = $contextual_tuples;
        }
        if(!is_null($context)) {
            $this->container['context'] = $context;
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
        if ($this->container['expectation'] === null) {
            $invalidProperties[] = "'expectation' can't be null";
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
     * @return \RuncloudIO\SDK\OPENFGA\Model\AssertionTupleKey
     */
    public function getTupleKey()
    {
        return $this->container['tuple_key'];
    }

    /**
     * Sets tuple_key
     *
     * @param \RuncloudIO\SDK\OPENFGA\Model\AssertionTupleKey $tuple_key tuple_key
     *
     * @return $this
     */
    public function setTupleKey($tuple_key)
    {
        $this->container['tuple_key'] = $tuple_key;

        return $this;
    }

    /**
     * Gets expectation
     *
     * @return bool
     */
    public function getExpectation()
    {
        return $this->container['expectation'];
    }

    /**
     * Sets expectation
     *
     * @param bool $expectation expectation
     *
     * @return $this
     */
    public function setExpectation($expectation)
    {
        $this->container['expectation'] = $expectation;

        return $this;
    }

    /**
     * Gets contextual_tuples
     *
     * @return \RuncloudIO\SDK\OPENFGA\Model\TupleKey[]
     */
    public function getContextualTuples()
    {
        return $this->container['contextual_tuples'];
    }

    /**
     * Sets contextual_tuples
     *
     * @param \RuncloudIO\SDK\OPENFGA\Model\TupleKey[] $contextual_tuples contextual_tuples
     *
     * @return $this
     */
    public function setContextualTuples($contextual_tuples)
    {
        $this->container['contextual_tuples'] = $contextual_tuples;

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
