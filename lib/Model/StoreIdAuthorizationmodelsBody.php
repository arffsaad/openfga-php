<?php
/**
 * StoreIdAuthorizationmodelsBody
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
 * StoreIdAuthorizationmodelsBody Class Doc Comment
 *
 * Required Attributes:
 * - type_definitions
 * - schema_version
 *
 * @category Class
 * @package  RuncloudIO\SDK\OPENFGA
 * @author   Runcloud Engineering Team
 * @link     https://github.com/swagger-api/swagger-codegen
 *
 *
 * @method \RuncloudIO\SDK\OPENFGA\Model\TypeDefinition[] getTypeDefinitions()
 * @method $this setTypeDefinitions($type_definitions)
 * @method string getSchemaVersion()
 * @method $this setSchemaVersion($schema_version)
 * @method map[string,\RuncloudIO\SDK\OPENFGA\Model\Condition] getConditions()
 * @method $this setConditions($conditions)
 *
 */
class StoreIdAuthorizationmodelsBody implements ModelInterface
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'store_id_authorizationmodels_body';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'type_definitions' => '\RuncloudIO\SDK\OPENFGA\Model\TypeDefinition[]',
        'schema_version' => 'string',
        'conditions' => 'map[string,\RuncloudIO\SDK\OPENFGA\Model\Condition]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'type_definitions' => null,
        'schema_version' => null,
        'conditions' => null
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
        'type_definitions' => 'type_definitions',
        'schema_version' => 'schema_version',
        'conditions' => 'conditions'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'type_definitions' => 'setTypeDefinitions',
        'schema_version' => 'setSchemaVersion',
        'conditions' => 'setConditions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'type_definitions' => 'getTypeDefinitions',
        'schema_version' => 'getSchemaVersion',
        'conditions' => 'getConditions'
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
     * @param \RuncloudIO\SDK\OPENFGA\Model\TypeDefinition[] $type_definitions type_definitions 
     * @param string $schema_version schema_version 
     * @param map[string,\RuncloudIO\SDK\OPENFGA\Model\Condition] $conditions conditions 
     *   Associated array of property values initializing the model
     */
    public function __construct(array $type_definitions = null, string $schema_version = null, map[string,\RuncloudIO\SDK\OPENFGA\Model\Condition] $conditions = null)
    {
        if(!is_null($type_definitions)) {
            $this->container['type_definitions'] = $type_definitions;
        }
        if(!is_null($schema_version)) {
            $this->container['schema_version'] = $schema_version;
        }
        if(!is_null($conditions)) {
            $this->container['conditions'] = $conditions;
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

        if ($this->container['type_definitions'] === null) {
            $invalidProperties[] = "'type_definitions' can't be null";
        }
        if ($this->container['schema_version'] === null) {
            $invalidProperties[] = "'schema_version' can't be null";
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
     * Gets type_definitions
     *
     * @return \RuncloudIO\SDK\OPENFGA\Model\TypeDefinition[]
     */
    public function getTypeDefinitions()
    {
        return $this->container['type_definitions'];
    }

    /**
     * Sets type_definitions
     *
     * @param \RuncloudIO\SDK\OPENFGA\Model\TypeDefinition[] $type_definitions type_definitions
     *
     * @return $this
     */
    public function setTypeDefinitions($type_definitions)
    {
        $this->container['type_definitions'] = $type_definitions;

        return $this;
    }

    /**
     * Gets schema_version
     *
     * @return string
     */
    public function getSchemaVersion()
    {
        return $this->container['schema_version'];
    }

    /**
     * Sets schema_version
     *
     * @param string $schema_version schema_version
     *
     * @return $this
     */
    public function setSchemaVersion($schema_version)
    {
        $this->container['schema_version'] = $schema_version;

        return $this;
    }

    /**
     * Gets conditions
     *
     * @return map[string,\RuncloudIO\SDK\OPENFGA\Model\Condition]
     */
    public function getConditions()
    {
        return $this->container['conditions'];
    }

    /**
     * Sets conditions
     *
     * @param map[string,\RuncloudIO\SDK\OPENFGA\Model\Condition] $conditions conditions
     *
     * @return $this
     */
    public function setConditions($conditions)
    {
        $this->container['conditions'] = $conditions;

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
