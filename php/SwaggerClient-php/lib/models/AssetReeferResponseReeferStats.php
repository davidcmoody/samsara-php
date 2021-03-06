<?php
/**
 * AssetReeferResponseReeferStats
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
 * AssetReeferResponseReeferStats Class Doc Comment
 *
 * @category Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class AssetReeferResponseReeferStats implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AssetReeferResponse_reeferStats';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'alarms' => '\Swagger\Client\models\AssetReeferResponseReeferStatsAlarms1[]',
        'engine_hours' => '\Swagger\Client\models\AssetReeferResponseReeferStatsEngineHours[]',
        'fuel_percentage' => '\Swagger\Client\models\AssetReeferResponseReeferStatsFuelPercentage[]',
        'power_status' => '\Swagger\Client\models\AssetReeferResponseReeferStatsPowerStatus[]',
        'return_air_temp' => '\Swagger\Client\models\AssetReeferResponseReeferStatsReturnAirTemp[]',
        'set_point' => '\Swagger\Client\models\AssetReeferResponseReeferStatsSetPoint[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'alarms' => null,
        'engine_hours' => null,
        'fuel_percentage' => null,
        'power_status' => null,
        'return_air_temp' => null,
        'set_point' => null
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
        'alarms' => 'alarms',
        'engine_hours' => 'engineHours',
        'fuel_percentage' => 'fuelPercentage',
        'power_status' => 'powerStatus',
        'return_air_temp' => 'returnAirTemp',
        'set_point' => 'setPoint'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'alarms' => 'setAlarms',
        'engine_hours' => 'setEngineHours',
        'fuel_percentage' => 'setFuelPercentage',
        'power_status' => 'setPowerStatus',
        'return_air_temp' => 'setReturnAirTemp',
        'set_point' => 'setSetPoint'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'alarms' => 'getAlarms',
        'engine_hours' => 'getEngineHours',
        'fuel_percentage' => 'getFuelPercentage',
        'power_status' => 'getPowerStatus',
        'return_air_temp' => 'getReturnAirTemp',
        'set_point' => 'getSetPoint'
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
        $this->container['alarms'] = isset($data['alarms']) ? $data['alarms'] : null;
        $this->container['engine_hours'] = isset($data['engine_hours']) ? $data['engine_hours'] : null;
        $this->container['fuel_percentage'] = isset($data['fuel_percentage']) ? $data['fuel_percentage'] : null;
        $this->container['power_status'] = isset($data['power_status']) ? $data['power_status'] : null;
        $this->container['return_air_temp'] = isset($data['return_air_temp']) ? $data['return_air_temp'] : null;
        $this->container['set_point'] = isset($data['set_point']) ? $data['set_point'] : null;
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
     * Gets alarms
     *
     * @return \Swagger\Client\models\AssetReeferResponseReeferStatsAlarms1[]
     */
    public function getAlarms()
    {
        return $this->container['alarms'];
    }

    /**
     * Sets alarms
     *
     * @param \Swagger\Client\models\AssetReeferResponseReeferStatsAlarms1[] $alarms Reefer alarms
     *
     * @return $this
     */
    public function setAlarms($alarms)
    {
        $this->container['alarms'] = $alarms;

        return $this;
    }

    /**
     * Gets engine_hours
     *
     * @return \Swagger\Client\models\AssetReeferResponseReeferStatsEngineHours[]
     */
    public function getEngineHours()
    {
        return $this->container['engine_hours'];
    }

    /**
     * Sets engine_hours
     *
     * @param \Swagger\Client\models\AssetReeferResponseReeferStatsEngineHours[] $engine_hours Engine hours of the reefer
     *
     * @return $this
     */
    public function setEngineHours($engine_hours)
    {
        $this->container['engine_hours'] = $engine_hours;

        return $this;
    }

    /**
     * Gets fuel_percentage
     *
     * @return \Swagger\Client\models\AssetReeferResponseReeferStatsFuelPercentage[]
     */
    public function getFuelPercentage()
    {
        return $this->container['fuel_percentage'];
    }

    /**
     * Sets fuel_percentage
     *
     * @param \Swagger\Client\models\AssetReeferResponseReeferStatsFuelPercentage[] $fuel_percentage Fuel percentage of the reefer
     *
     * @return $this
     */
    public function setFuelPercentage($fuel_percentage)
    {
        $this->container['fuel_percentage'] = $fuel_percentage;

        return $this;
    }

    /**
     * Gets power_status
     *
     * @return \Swagger\Client\models\AssetReeferResponseReeferStatsPowerStatus[]
     */
    public function getPowerStatus()
    {
        return $this->container['power_status'];
    }

    /**
     * Sets power_status
     *
     * @param \Swagger\Client\models\AssetReeferResponseReeferStatsPowerStatus[] $power_status Power status of the reefer
     *
     * @return $this
     */
    public function setPowerStatus($power_status)
    {
        $this->container['power_status'] = $power_status;

        return $this;
    }

    /**
     * Gets return_air_temp
     *
     * @return \Swagger\Client\models\AssetReeferResponseReeferStatsReturnAirTemp[]
     */
    public function getReturnAirTemp()
    {
        return $this->container['return_air_temp'];
    }

    /**
     * Sets return_air_temp
     *
     * @param \Swagger\Client\models\AssetReeferResponseReeferStatsReturnAirTemp[] $return_air_temp Return air temperature of the reefer
     *
     * @return $this
     */
    public function setReturnAirTemp($return_air_temp)
    {
        $this->container['return_air_temp'] = $return_air_temp;

        return $this;
    }

    /**
     * Gets set_point
     *
     * @return \Swagger\Client\models\AssetReeferResponseReeferStatsSetPoint[]
     */
    public function getSetPoint()
    {
        return $this->container['set_point'];
    }

    /**
     * Sets set_point
     *
     * @param \Swagger\Client\models\AssetReeferResponseReeferStatsSetPoint[] $set_point Set point temperature of the reefer
     *
     * @return $this
     */
    public function setSetPoint($set_point)
    {
        $this->container['set_point'] = $set_point;

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

