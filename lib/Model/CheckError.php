<?php
/**
 * CheckError
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
 * CheckError Class Doc Comment
 *
 * Required Attributes:
 *
 * @category Class
 * @package  RuncloudIO\SDK\OPENFGA
 * @author   Runcloud Engineering Team
 * @link     https://github.com/swagger-api/swagger-codegen
 *
 *
 * @method \RuncloudIO\SDK\OPENFGA\Model\ErrorCode getInputError()
 * @method $this setInputError($input_error)
 * @method \RuncloudIO\SDK\OPENFGA\Model\InternalErrorCode getInternalError()
 * @method $this setInternalError($internal_error)
 * @method string getMessage()
 * @method $this setMessage($message)
 *
 */
class CheckError implements ModelInterface
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CheckError';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'input_error' => '\RuncloudIO\SDK\OPENFGA\Model\ErrorCode',
        'internal_error' => '\RuncloudIO\SDK\OPENFGA\Model\InternalErrorCode',
        'message' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'input_error' => null,
        'internal_error' => null,
        'message' => null
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
        'input_error' => 'input_error',
        'internal_error' => 'internal_error',
        'message' => 'message'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'input_error' => 'setInputError',
        'internal_error' => 'setInternalError',
        'message' => 'setMessage'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'input_error' => 'getInputError',
        'internal_error' => 'getInternalError',
        'message' => 'getMessage'
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
     * @param \RuncloudIO\SDK\OPENFGA\Model\ErrorCode $input_error input_error 
     * @param \RuncloudIO\SDK\OPENFGA\Model\InternalErrorCode $internal_error internal_error 
     * @param string $message message 
     *   Associated array of property values initializing the model
     */
    public function __construct(\RuncloudIO\SDK\OPENFGA\Model\ErrorCode $input_error, \RuncloudIO\SDK\OPENFGA\Model\InternalErrorCode $internal_error, string $message)
    {
        if(!is_null($input_error)) {
            $this->container['input_error'] = $input_error;
        }
        if(!is_null($internal_error)) {
            $this->container['internal_error'] = $internal_error;
        }
        if(!is_null($message)) {
            $this->container['message'] = $message;
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
     * Gets input_error
     *
     * @return \RuncloudIO\SDK\OPENFGA\Model\ErrorCode
     */
    public function getInputError()
    {
        return $this->container['input_error'];
    }

    /**
     * Sets input_error
     *
     * @param \RuncloudIO\SDK\OPENFGA\Model\ErrorCode $input_error input_error
     *
     * @return $this
     */
    public function setInputError($input_error)
    {
        $this->container['input_error'] = $input_error;

        return $this;
    }

    /**
     * Gets internal_error
     *
     * @return \RuncloudIO\SDK\OPENFGA\Model\InternalErrorCode
     */
    public function getInternalError()
    {
        return $this->container['internal_error'];
    }

    /**
     * Sets internal_error
     *
     * @param \RuncloudIO\SDK\OPENFGA\Model\InternalErrorCode $internal_error internal_error
     *
     * @return $this
     */
    public function setInternalError($internal_error)
    {
        $this->container['internal_error'] = $internal_error;

        return $this;
    }

    /**
     * Gets message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
     * Sets message
     *
     * @param string $message message
     *
     * @return $this
     */
    public function setMessage($message)
    {
        $this->container['message'] = $message;

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
