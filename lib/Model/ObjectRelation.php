<?php
/**
 * ObjectRelation
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
 * ObjectRelation Class Doc Comment
 *
 * Required Attributes:
 *
 * @category Class
 * @package  RuncloudIO\SDK\OPENFGA
 * @author   Runcloud Engineering Team
 * @link     https://github.com/swagger-api/swagger-codegen
 *
 *
 * @method string getObject()
 * @method $this setObject($object)
 * @method string getRelation()
 * @method $this setRelation($relation)
 *
 */
class ObjectRelation implements ModelInterface
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ObjectRelation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'object' => 'string',
        'relation' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'object' => null,
        'relation' => null
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
        'object' => 'object',
        'relation' => 'relation'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'object' => 'setObject',
        'relation' => 'setRelation'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'object' => 'getObject',
        'relation' => 'getRelation'
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
     * @param string $object object 
     * @param string $relation relation 
     *   Associated array of property values initializing the model
     */
    public function __construct(string $object = null, string $relation = null)
    {
        if(!is_null($object)) {
            $this->container['object'] = $object;
        }
        if(!is_null($relation)) {
            $this->container['relation'] = $relation;
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
     * Gets object
     *
     * @return string
     */
    public function getObject()
    {
        return $this->container['object'];
    }

    /**
     * Sets object
     *
     * @param string $object object
     *
     * @return $this
     */
    public function setObject($object)
    {
        $this->container['object'] = $object;

        return $this;
    }

    /**
     * Gets relation
     *
     * @return string
     */
    public function getRelation()
    {
        return $this->container['relation'];
    }

    /**
     * Sets relation
     *
     * @param string $relation relation
     *
     * @return $this
     */
    public function setRelation($relation)
    {
        $this->container['relation'] = $relation;

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
