<?php
/**
 * Userset
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
 * Userset Class Doc Comment
 *
 * Required Attributes:
 *
 * @category Class
 * @package  RuncloudIO\SDK\OPENFGA
 * @author   Runcloud Engineering Team
 * @link     https://github.com/swagger-api/swagger-codegen
 *
 *
 * @method \RuncloudIO\SDK\OPENFGA\Model\DirectUserset getThis()
 * @method $this setThis($this)
 * @method \RuncloudIO\SDK\OPENFGA\Model\ObjectRelation getComputedUserset()
 * @method $this setComputedUserset($computed_userset)
 * @method \RuncloudIO\SDK\OPENFGA\Model\V1TupleToUserset getTupleToUserset()
 * @method $this setTupleToUserset($tuple_to_userset)
 * @method \RuncloudIO\SDK\OPENFGA\Model\Usersets getUnion()
 * @method $this setUnion($union)
 * @method \RuncloudIO\SDK\OPENFGA\Model\Usersets getIntersection()
 * @method $this setIntersection($intersection)
 * @method \RuncloudIO\SDK\OPENFGA\Model\V1Difference getDifference()
 * @method $this setDifference($difference)
 *
 */
class Userset implements ModelInterface
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Userset';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'this' => '\RuncloudIO\SDK\OPENFGA\Model\DirectUserset',
        'computed_userset' => '\RuncloudIO\SDK\OPENFGA\Model\ObjectRelation',
        'tuple_to_userset' => '\RuncloudIO\SDK\OPENFGA\Model\V1TupleToUserset',
        'union' => '\RuncloudIO\SDK\OPENFGA\Model\Usersets',
        'intersection' => '\RuncloudIO\SDK\OPENFGA\Model\Usersets',
        'difference' => '\RuncloudIO\SDK\OPENFGA\Model\V1Difference'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'this' => null,
        'computed_userset' => null,
        'tuple_to_userset' => null,
        'union' => null,
        'intersection' => null,
        'difference' => null
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
        'this' => 'this',
        'computed_userset' => 'computedUserset',
        'tuple_to_userset' => 'tupleToUserset',
        'union' => 'union',
        'intersection' => 'intersection',
        'difference' => 'difference'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'this' => 'setThis',
        'computed_userset' => 'setComputedUserset',
        'tuple_to_userset' => 'setTupleToUserset',
        'union' => 'setUnion',
        'intersection' => 'setIntersection',
        'difference' => 'setDifference'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'this' => 'getThis',
        'computed_userset' => 'getComputedUserset',
        'tuple_to_userset' => 'getTupleToUserset',
        'union' => 'getUnion',
        'intersection' => 'getIntersection',
        'difference' => 'getDifference'
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
     * @param \RuncloudIO\SDK\OPENFGA\Model\DirectUserset $this this 
     * @param \RuncloudIO\SDK\OPENFGA\Model\ObjectRelation $computed_userset computed_userset 
     * @param \RuncloudIO\SDK\OPENFGA\Model\V1TupleToUserset $tuple_to_userset tuple_to_userset 
     * @param \RuncloudIO\SDK\OPENFGA\Model\Usersets $union union 
     * @param \RuncloudIO\SDK\OPENFGA\Model\Usersets $intersection intersection 
     * @param \RuncloudIO\SDK\OPENFGA\Model\V1Difference $difference difference 
     *   Associated array of property values initializing the model
     */
    public function __construct(\RuncloudIO\SDK\OPENFGA\Model\DirectUserset $this = null, \RuncloudIO\SDK\OPENFGA\Model\ObjectRelation $computed_userset = null, \RuncloudIO\SDK\OPENFGA\Model\V1TupleToUserset $tuple_to_userset = null, \RuncloudIO\SDK\OPENFGA\Model\Usersets $union = null, \RuncloudIO\SDK\OPENFGA\Model\Usersets $intersection = null, \RuncloudIO\SDK\OPENFGA\Model\V1Difference $difference = null)
    {
        if(!is_null($this)) {
            $this->container['this'] = $this;
        }
        if(!is_null($computed_userset)) {
            $this->container['computed_userset'] = $computed_userset;
        }
        if(!is_null($tuple_to_userset)) {
            $this->container['tuple_to_userset'] = $tuple_to_userset;
        }
        if(!is_null($union)) {
            $this->container['union'] = $union;
        }
        if(!is_null($intersection)) {
            $this->container['intersection'] = $intersection;
        }
        if(!is_null($difference)) {
            $this->container['difference'] = $difference;
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
     * Gets this
     *
     * @return \RuncloudIO\SDK\OPENFGA\Model\DirectUserset
     */
    public function getThis()
    {
        return $this->container['this'];
    }

    /**
     * Sets this
     *
     * @param \RuncloudIO\SDK\OPENFGA\Model\DirectUserset $this this
     *
     * @return $this
     */
    public function setThis($this)
    {
        $this->container['this'] = $this;

        return $this;
    }

    /**
     * Gets computed_userset
     *
     * @return \RuncloudIO\SDK\OPENFGA\Model\ObjectRelation
     */
    public function getComputedUserset()
    {
        return $this->container['computed_userset'];
    }

    /**
     * Sets computed_userset
     *
     * @param \RuncloudIO\SDK\OPENFGA\Model\ObjectRelation $computed_userset computed_userset
     *
     * @return $this
     */
    public function setComputedUserset($computed_userset)
    {
        $this->container['computed_userset'] = $computed_userset;

        return $this;
    }

    /**
     * Gets tuple_to_userset
     *
     * @return \RuncloudIO\SDK\OPENFGA\Model\V1TupleToUserset
     */
    public function getTupleToUserset()
    {
        return $this->container['tuple_to_userset'];
    }

    /**
     * Sets tuple_to_userset
     *
     * @param \RuncloudIO\SDK\OPENFGA\Model\V1TupleToUserset $tuple_to_userset tuple_to_userset
     *
     * @return $this
     */
    public function setTupleToUserset($tuple_to_userset)
    {
        $this->container['tuple_to_userset'] = $tuple_to_userset;

        return $this;
    }

    /**
     * Gets union
     *
     * @return \RuncloudIO\SDK\OPENFGA\Model\Usersets
     */
    public function getUnion()
    {
        return $this->container['union'];
    }

    /**
     * Sets union
     *
     * @param \RuncloudIO\SDK\OPENFGA\Model\Usersets $union union
     *
     * @return $this
     */
    public function setUnion($union)
    {
        $this->container['union'] = $union;

        return $this;
    }

    /**
     * Gets intersection
     *
     * @return \RuncloudIO\SDK\OPENFGA\Model\Usersets
     */
    public function getIntersection()
    {
        return $this->container['intersection'];
    }

    /**
     * Sets intersection
     *
     * @param \RuncloudIO\SDK\OPENFGA\Model\Usersets $intersection intersection
     *
     * @return $this
     */
    public function setIntersection($intersection)
    {
        $this->container['intersection'] = $intersection;

        return $this;
    }

    /**
     * Gets difference
     *
     * @return \RuncloudIO\SDK\OPENFGA\Model\V1Difference
     */
    public function getDifference()
    {
        return $this->container['difference'];
    }

    /**
     * Sets difference
     *
     * @param \RuncloudIO\SDK\OPENFGA\Model\V1Difference $difference difference
     *
     * @return $this
     */
    public function setDifference($difference)
    {
        $this->container['difference'] = $difference;

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
