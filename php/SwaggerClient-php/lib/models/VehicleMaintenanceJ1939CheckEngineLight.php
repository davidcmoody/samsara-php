<?php
/**
 * VehicleMaintenanceJ1939CheckEngineLight
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

namespace Swagger\Client\models;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * VehicleMaintenanceJ1939CheckEngineLight Class Doc Comment
 *
 * @category Class
 * @description J1939 check engine lights.
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class VehicleMaintenanceJ1939CheckEngineLight implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'VehicleMaintenance_j1939_checkEngineLight';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'emissions_is_on' => 'bool',
        'protect_is_on' => 'bool',
        'stop_is_on' => 'bool',
        'warning_is_on' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'emissions_is_on' => null,
        'protect_is_on' => null,
        'stop_is_on' => null,
        'warning_is_on' => null
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
        'emissions_is_on' => 'emissionsIsOn',
        'protect_is_on' => 'protectIsOn',
        'stop_is_on' => 'stopIsOn',
        'warning_is_on' => 'warningIsOn'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'emissions_is_on' => 'setEmissionsIsOn',
        'protect_is_on' => 'setProtectIsOn',
        'stop_is_on' => 'setStopIsOn',
        'warning_is_on' => 'setWarningIsOn'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'emissions_is_on' => 'getEmissionsIsOn',
        'protect_is_on' => 'getProtectIsOn',
        'stop_is_on' => 'getStopIsOn',
        'warning_is_on' => 'getWarningIsOn'
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
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['emissions_is_on'] = isset($data['emissions_is_on']) ? $data['emissions_is_on'] : null;
        $this->container['protect_is_on'] = isset($data['protect_is_on']) ? $data['protect_is_on'] : null;
        $this->container['stop_is_on'] = isset($data['stop_is_on']) ? $data['stop_is_on'] : null;
        $this->container['warning_is_on'] = isset($data['warning_is_on']) ? $data['warning_is_on'] : null;
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

        return true;
    }


    /**
     * Gets emissions_is_on
     *
     * @return bool
     */
    public function getEmissionsIsOn()
    {
        return $this->container['emissions_is_on'];
    }

    /**
     * Sets emissions_is_on
     *
     * @param bool $emissions_is_on emissions_is_on
     *
     * @return $this
     */
    public function setEmissionsIsOn($emissions_is_on)
    {
        $this->container['emissions_is_on'] = $emissions_is_on;

        return $this;
    }

    /**
     * Gets protect_is_on
     *
     * @return bool
     */
    public function getProtectIsOn()
    {
        return $this->container['protect_is_on'];
    }

    /**
     * Sets protect_is_on
     *
     * @param bool $protect_is_on protect_is_on
     *
     * @return $this
     */
    public function setProtectIsOn($protect_is_on)
    {
        $this->container['protect_is_on'] = $protect_is_on;

        return $this;
    }

    /**
     * Gets stop_is_on
     *
     * @return bool
     */
    public function getStopIsOn()
    {
        return $this->container['stop_is_on'];
    }

    /**
     * Sets stop_is_on
     *
     * @param bool $stop_is_on stop_is_on
     *
     * @return $this
     */
    public function setStopIsOn($stop_is_on)
    {
        $this->container['stop_is_on'] = $stop_is_on;

        return $this;
    }

    /**
     * Gets warning_is_on
     *
     * @return bool
     */
    public function getWarningIsOn()
    {
        return $this->container['warning_is_on'];
    }

    /**
     * Sets warning_is_on
     *
     * @param bool $warning_is_on warning_is_on
     *
     * @return $this
     */
    public function setWarningIsOn($warning_is_on)
    {
        $this->container['warning_is_on'] = $warning_is_on;

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

