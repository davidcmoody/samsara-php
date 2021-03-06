<?php
/**
 * TripResponseTrips
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
 * TripResponseTrips Class Doc Comment
 *
 * @category Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class TripResponseTrips implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TripResponse_trips';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'start_ms' => 'int',
        'start_coordinates' => '\Swagger\Client\Model\TripResponseStartCoordinates',
        'start_location' => 'string',
        'end_ms' => 'int',
        'end_coordinates' => '\Swagger\Client\Model\TripResponseEndCoordinates',
        'end_location' => 'string',
        'distance_meters' => 'int',
        'fuel_consumed_ml' => 'int',
        'toll_meters' => 'int',
        'driver_id' => 'int',
        'start_odometer' => 'int',
        'end_odometer' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'start_ms' => null,
        'start_coordinates' => null,
        'start_location' => null,
        'end_ms' => null,
        'end_coordinates' => null,
        'end_location' => null,
        'distance_meters' => null,
        'fuel_consumed_ml' => null,
        'toll_meters' => null,
        'driver_id' => null,
        'start_odometer' => null,
        'end_odometer' => null
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
        'start_ms' => 'startMs',
        'start_coordinates' => 'startCoordinates',
        'start_location' => 'startLocation',
        'end_ms' => 'endMs',
        'end_coordinates' => 'endCoordinates',
        'end_location' => 'endLocation',
        'distance_meters' => 'distanceMeters',
        'fuel_consumed_ml' => 'fuelConsumedMl',
        'toll_meters' => 'tollMeters',
        'driver_id' => 'driverId',
        'start_odometer' => 'startOdometer',
        'end_odometer' => 'endOdometer'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'start_ms' => 'setStartMs',
        'start_coordinates' => 'setStartCoordinates',
        'start_location' => 'setStartLocation',
        'end_ms' => 'setEndMs',
        'end_coordinates' => 'setEndCoordinates',
        'end_location' => 'setEndLocation',
        'distance_meters' => 'setDistanceMeters',
        'fuel_consumed_ml' => 'setFuelConsumedMl',
        'toll_meters' => 'setTollMeters',
        'driver_id' => 'setDriverId',
        'start_odometer' => 'setStartOdometer',
        'end_odometer' => 'setEndOdometer'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'start_ms' => 'getStartMs',
        'start_coordinates' => 'getStartCoordinates',
        'start_location' => 'getStartLocation',
        'end_ms' => 'getEndMs',
        'end_coordinates' => 'getEndCoordinates',
        'end_location' => 'getEndLocation',
        'distance_meters' => 'getDistanceMeters',
        'fuel_consumed_ml' => 'getFuelConsumedMl',
        'toll_meters' => 'getTollMeters',
        'driver_id' => 'getDriverId',
        'start_odometer' => 'getStartOdometer',
        'end_odometer' => 'getEndOdometer'
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
        $this->container['start_ms'] = isset($data['start_ms']) ? $data['start_ms'] : null;
        $this->container['start_coordinates'] = isset($data['start_coordinates']) ? $data['start_coordinates'] : null;
        $this->container['start_location'] = isset($data['start_location']) ? $data['start_location'] : null;
        $this->container['end_ms'] = isset($data['end_ms']) ? $data['end_ms'] : null;
        $this->container['end_coordinates'] = isset($data['end_coordinates']) ? $data['end_coordinates'] : null;
        $this->container['end_location'] = isset($data['end_location']) ? $data['end_location'] : null;
        $this->container['distance_meters'] = isset($data['distance_meters']) ? $data['distance_meters'] : null;
        $this->container['fuel_consumed_ml'] = isset($data['fuel_consumed_ml']) ? $data['fuel_consumed_ml'] : null;
        $this->container['toll_meters'] = isset($data['toll_meters']) ? $data['toll_meters'] : null;
        $this->container['driver_id'] = isset($data['driver_id']) ? $data['driver_id'] : null;
        $this->container['start_odometer'] = isset($data['start_odometer']) ? $data['start_odometer'] : null;
        $this->container['end_odometer'] = isset($data['end_odometer']) ? $data['end_odometer'] : null;
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
     * Gets start_ms
     *
     * @return int
     */
    public function getStartMs()
    {
        return $this->container['start_ms'];
    }

    /**
     * Sets start_ms
     *
     * @param int $start_ms Beginning of the trip in UNIX milliseconds.
     *
     * @return $this
     */
    public function setStartMs($start_ms)
    {
        $this->container['start_ms'] = $start_ms;

        return $this;
    }

    /**
     * Gets start_coordinates
     *
     * @return \Swagger\Client\Model\TripResponseStartCoordinates
     */
    public function getStartCoordinates()
    {
        return $this->container['start_coordinates'];
    }

    /**
     * Sets start_coordinates
     *
     * @param \Swagger\Client\Model\TripResponseStartCoordinates $start_coordinates start_coordinates
     *
     * @return $this
     */
    public function setStartCoordinates($start_coordinates)
    {
        $this->container['start_coordinates'] = $start_coordinates;

        return $this;
    }

    /**
     * Gets start_location
     *
     * @return string
     */
    public function getStartLocation()
    {
        return $this->container['start_location'];
    }

    /**
     * Sets start_location
     *
     * @param string $start_location Text representation of nearest identifiable location to the start (latitude, longitude) coordinates.
     *
     * @return $this
     */
    public function setStartLocation($start_location)
    {
        $this->container['start_location'] = $start_location;

        return $this;
    }

    /**
     * Gets end_ms
     *
     * @return int
     */
    public function getEndMs()
    {
        return $this->container['end_ms'];
    }

    /**
     * Sets end_ms
     *
     * @param int $end_ms End of the trip in UNIX milliseconds.
     *
     * @return $this
     */
    public function setEndMs($end_ms)
    {
        $this->container['end_ms'] = $end_ms;

        return $this;
    }

    /**
     * Gets end_coordinates
     *
     * @return \Swagger\Client\Model\TripResponseEndCoordinates
     */
    public function getEndCoordinates()
    {
        return $this->container['end_coordinates'];
    }

    /**
     * Sets end_coordinates
     *
     * @param \Swagger\Client\Model\TripResponseEndCoordinates $end_coordinates end_coordinates
     *
     * @return $this
     */
    public function setEndCoordinates($end_coordinates)
    {
        $this->container['end_coordinates'] = $end_coordinates;

        return $this;
    }

    /**
     * Gets end_location
     *
     * @return string
     */
    public function getEndLocation()
    {
        return $this->container['end_location'];
    }

    /**
     * Sets end_location
     *
     * @param string $end_location Text representation of nearest identifiable location to the end (latitude, longitude) coordinates.
     *
     * @return $this
     */
    public function setEndLocation($end_location)
    {
        $this->container['end_location'] = $end_location;

        return $this;
    }

    /**
     * Gets distance_meters
     *
     * @return int
     */
    public function getDistanceMeters()
    {
        return $this->container['distance_meters'];
    }

    /**
     * Sets distance_meters
     *
     * @param int $distance_meters Length of the trip in meters.
     *
     * @return $this
     */
    public function setDistanceMeters($distance_meters)
    {
        $this->container['distance_meters'] = $distance_meters;

        return $this;
    }

    /**
     * Gets fuel_consumed_ml
     *
     * @return int
     */
    public function getFuelConsumedMl()
    {
        return $this->container['fuel_consumed_ml'];
    }

    /**
     * Sets fuel_consumed_ml
     *
     * @param int $fuel_consumed_ml Amount in milliliters of fuel consumed on this trip.
     *
     * @return $this
     */
    public function setFuelConsumedMl($fuel_consumed_ml)
    {
        $this->container['fuel_consumed_ml'] = $fuel_consumed_ml;

        return $this;
    }

    /**
     * Gets toll_meters
     *
     * @return int
     */
    public function getTollMeters()
    {
        return $this->container['toll_meters'];
    }

    /**
     * Sets toll_meters
     *
     * @param int $toll_meters Length in meters trip spent on toll roads.
     *
     * @return $this
     */
    public function setTollMeters($toll_meters)
    {
        $this->container['toll_meters'] = $toll_meters;

        return $this;
    }

    /**
     * Gets driver_id
     *
     * @return int
     */
    public function getDriverId()
    {
        return $this->container['driver_id'];
    }

    /**
     * Sets driver_id
     *
     * @param int $driver_id ID of the driver.
     *
     * @return $this
     */
    public function setDriverId($driver_id)
    {
        $this->container['driver_id'] = $driver_id;

        return $this;
    }

    /**
     * Gets start_odometer
     *
     * @return int
     */
    public function getStartOdometer()
    {
        return $this->container['start_odometer'];
    }

    /**
     * Sets start_odometer
     *
     * @param int $start_odometer Odometer reading at the beginning of the trip.
     *
     * @return $this
     */
    public function setStartOdometer($start_odometer)
    {
        $this->container['start_odometer'] = $start_odometer;

        return $this;
    }

    /**
     * Gets end_odometer
     *
     * @return int
     */
    public function getEndOdometer()
    {
        return $this->container['end_odometer'];
    }

    /**
     * Sets end_odometer
     *
     * @param int $end_odometer Odometer reading at the end of the trip.
     *
     * @return $this
     */
    public function setEndOdometer($end_odometer)
    {
        $this->container['end_odometer'] = $end_odometer;

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

