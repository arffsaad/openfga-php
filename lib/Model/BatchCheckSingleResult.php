<?php
/**
 * BatchCheckSingleResult
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
 * BatchCheckSingleResult Class Doc Comment
 *
 * Required Attributes:
 *
 * @category Class
 * @package  RuncloudIO\SDK\OPENFGA
 * @author   Runcloud Engineering Team
 * @link     https://github.com/swagger-api/swagger-codegen
 *
 *
 * @method bool getAllowed()
 * @method $this setAllowed($allowed)
 * @method \RuncloudIO\SDK\OPENFGA\Model\CheckError getError()
 * @method $this setError($error)
 *
 */
class BatchCheckSingleResult implements ModelInterface
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'BatchCheckSingleResult';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'allowed' => 'bool',
        'error' => '\RuncloudIO\SDK\OPENFGA\Model\CheckError'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'allowed' => null,
        'error' => null
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
        'allowed' => 'allowed',
        'error' => 'error'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'allowed' => 'setAllowed',
        'error' => 'setError'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'allowed' => 'getAllowed',
        'error' => 'getError'
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
     * @param bool $allowed allowed 
     * @param \RuncloudIO\SDK\OPENFGA\Model\CheckError $error error 
     *   Associated array of property values initializing the model
     */
    public function __construct(bool $allowed = null, \RuncloudIO\SDK\OPENFGA\Model\CheckError $error = null)
    {
        if(!is_null($allowed)) {
            $this->container['allowed'] = $allowed;
        }
        if(!is_null($error)) {
            $this->container['error'] = $error;
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
     * Gets allowed
     *
     * @return bool
     */
    public function getAllowed()
    {
        return $this->container['allowed'];
    }

    /**
     * Sets allowed
     *
     * @param bool $allowed allowed
     *
     * @return $this
     */
    public function setAllowed($allowed)
    {
        $this->container['allowed'] = $allowed;

        return $this;
    }

    /**
     * Gets error
     *
     * @return \RuncloudIO\SDK\OPENFGA\Model\CheckError
     */
    public function getError()
    {
        return $this->container['error'];
    }

    /**
     * Sets error
     *
     * @param \RuncloudIO\SDK\OPENFGA\Model\CheckError $error error
     *
     * @return $this
     */
    public function setError($error)
    {
        $this->container['error'] = $error;

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
