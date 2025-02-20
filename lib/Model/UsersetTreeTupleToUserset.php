<?php
/**
 * UsersetTreeTupleToUserset
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
 * UsersetTreeTupleToUserset Class Doc Comment
 *
 * Required Attributes:
 * - tupleset
 * - computed
 *
 * @category Class
 * @package  RuncloudIO\SDK\OPENFGA
 * @author   Runcloud Engineering Team
 * @link     https://github.com/swagger-api/swagger-codegen
 *
 *
 * @method string getTupleset()
 * @method $this setTupleset($tupleset)
 * @method \RuncloudIO\SDK\OPENFGA\Model\Computed[] getComputed()
 * @method $this setComputed($computed)
 *
 */
class UsersetTreeTupleToUserset implements ModelInterface
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'UsersetTree.TupleToUserset';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'tupleset' => 'string',
        'computed' => '\RuncloudIO\SDK\OPENFGA\Model\Computed[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'tupleset' => null,
        'computed' => null
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
        'tupleset' => 'tupleset',
        'computed' => 'computed'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'tupleset' => 'setTupleset',
        'computed' => 'setComputed'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'tupleset' => 'getTupleset',
        'computed' => 'getComputed'
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
     * @param string $tupleset tupleset 
     * @param \RuncloudIO\SDK\OPENFGA\Model\Computed[] $computed computed 
     *   Associated array of property values initializing the model
     */
    public function __construct(string $tupleset, array $computed)
    {
        if(!is_null($tupleset)) {
            $this->container['tupleset'] = $tupleset;
        }
        if(!is_null($computed)) {
            $this->container['computed'] = $computed;
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

        if ($this->container['tupleset'] === null) {
            $invalidProperties[] = "'tupleset' can't be null";
        }
        if ($this->container['computed'] === null) {
            $invalidProperties[] = "'computed' can't be null";
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
     * Gets tupleset
     *
     * @return string
     */
    public function getTupleset()
    {
        return $this->container['tupleset'];
    }

    /**
     * Sets tupleset
     *
     * @param string $tupleset tupleset
     *
     * @return $this
     */
    public function setTupleset($tupleset)
    {
        $this->container['tupleset'] = $tupleset;

        return $this;
    }

    /**
     * Gets computed
     *
     * @return \RuncloudIO\SDK\OPENFGA\Model\Computed[]
     */
    public function getComputed()
    {
        return $this->container['computed'];
    }

    /**
     * Sets computed
     *
     * @param \RuncloudIO\SDK\OPENFGA\Model\Computed[] $computed computed
     *
     * @return $this
     */
    public function setComputed($computed)
    {
        $this->container['computed'] = $computed;

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
