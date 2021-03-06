<?php
/**
 * SensorshistorySeries
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Samsara API
 *
 * # Introduction The Samsara REST API lets you interact with the Samsara Cloud from anything that can send an HTTP request. With the Samsara API you can build powerful applications and custom solutions with sensor data.  Samsara has endpoints available to track and analyze sensors, vehicles, and entire fleets. If you’re familiar with what you can build with a REST API, the following API reference guide will be your go-to resource.  API access to the Samsara cloud is available to all Samsara administrators. If you’d like to try the API, [contact us](https://www.samsara.com/free-trial). The API is currently in beta and may be subject to frequent changes.  # Connecting to the API There are two ways to connect to the API. If you prefer to use the API in Javascript or Python, we supply SDKs which you can download here: [Javascript SDK](https://github.com/samsarahq/samsara-js), [Python SDK](https://github.com/samsarahq/samsara-python).  If you’d rather use another language to interact with the Samsara API, the endpoints and examples are in the reference guide below.
 *
 * OpenAPI spec version: 1.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * SensorshistorySeries Class Doc Comment
 *
 * @category Class
 * @description Sensor ID and field to query.
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class SensorshistorySeries implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'sensorshistory_series';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'widget_id' => 'int',
        'field' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'widget_id' => 'int64',
        'field' => null
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
        'widget_id' => 'widgetId',
        'field' => 'field'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'widget_id' => 'setWidgetId',
        'field' => 'setField'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'widget_id' => 'getWidgetId',
        'field' => 'getField'
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

    const FIELD_AMBIENT_TEMPERATURE = 'ambientTemperature';
    const FIELD_PROBE_TEMPERATURE = 'probeTemperature';
    const FIELD_CURRENT_LOOP1_RAW = 'currentLoop1Raw';
    const FIELD_CURRENT_LOOP1_MAPPED = 'currentLoop1Mapped';
    const FIELD_CURRENT_LOOP2_RAW = 'currentLoop2Raw';
    const FIELD_CURRENT_LOOP2_MAPPED = 'currentLoop2Mapped';
    const FIELD_PM_POWER_TOTAL = 'pmPowerTotal';
    const FIELD_PM_PHASE1_POWER = 'pmPhase1Power';
    const FIELD_PM_PHASE2_POWER = 'pmPhase2Power';
    const FIELD_PM_PHASE3_POWER = 'pmPhase3Power';
    const FIELD_PM_PHASE1_POWER_FACTOR = 'pmPhase1PowerFactor';
    const FIELD_PM_PHASE2_POWER_FACTOR = 'pmPhase2PowerFactor';
    const FIELD_PM_PHASE3_POWER_FACTOR = 'pmPhase3PowerFactor';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFieldAllowableValues()
    {
        return [
            self::FIELD_AMBIENT_TEMPERATURE,
            self::FIELD_PROBE_TEMPERATURE,
            self::FIELD_CURRENT_LOOP1_RAW,
            self::FIELD_CURRENT_LOOP1_MAPPED,
            self::FIELD_CURRENT_LOOP2_RAW,
            self::FIELD_CURRENT_LOOP2_MAPPED,
            self::FIELD_PM_POWER_TOTAL,
            self::FIELD_PM_PHASE1_POWER,
            self::FIELD_PM_PHASE2_POWER,
            self::FIELD_PM_PHASE3_POWER,
            self::FIELD_PM_PHASE1_POWER_FACTOR,
            self::FIELD_PM_PHASE2_POWER_FACTOR,
            self::FIELD_PM_PHASE3_POWER_FACTOR,
        ];
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
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['widget_id'] = isset($data['widget_id']) ? $data['widget_id'] : null;
        $this->container['field'] = isset($data['field']) ? $data['field'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['widget_id'] === null) {
            $invalidProperties[] = "'widget_id' can't be null";
        }
        if ($this->container['field'] === null) {
            $invalidProperties[] = "'field' can't be null";
        }
        $allowedValues = $this->getFieldAllowableValues();
        if (!in_array($this->container['field'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'field', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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

        if ($this->container['widget_id'] === null) {
            return false;
        }
        if ($this->container['field'] === null) {
            return false;
        }
        $allowedValues = $this->getFieldAllowableValues();
        if (!in_array($this->container['field'], $allowedValues)) {
            return false;
        }
        return true;
    }


    /**
     * Gets widget_id
     *
     * @return int
     */
    public function getWidgetId()
    {
        return $this->container['widget_id'];
    }

    /**
     * Sets widget_id
     *
     * @param int $widget_id Sensor ID to query.
     *
     * @return $this
     */
    public function setWidgetId($widget_id)
    {
        $this->container['widget_id'] = $widget_id;

        return $this;
    }

    /**
     * Gets field
     *
     * @return string
     */
    public function getField()
    {
        return $this->container['field'];
    }

    /**
     * Sets field
     *
     * @param string $field Field to query.
     *
     * @return $this
     */
    public function setField($field)
    {
        $allowedValues = $this->getFieldAllowableValues();
        if (!in_array($field, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'field', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['field'] = $field;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param  integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param  integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     *
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
     *
     * @param  integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
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

