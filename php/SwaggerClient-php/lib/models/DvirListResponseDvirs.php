<?php
/**
 * DvirListResponseDvirs
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
 * DvirListResponseDvirs Class Doc Comment
 *
 * @category Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class DvirListResponseDvirs implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DvirListResponse_dvirs';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'inspection_type' => 'string',
        'vehicle' => '\Swagger\Client\models\DvirListResponseVehicle',
        'vehicle_defects' => '\Swagger\Client\models\DvirListResponseVehicleDefects[]',
        'odometer_miles' => 'int',
        'trailer_name' => 'string',
        'trailer_defects' => '\Swagger\Client\models\DvirListResponseVehicleDefects[]',
        'mechanic_notes' => 'string',
        'vehicle_condition' => 'string',
        'defects_corrected' => 'bool',
        'defects_need_not_be_corrected' => 'bool',
        'author_signature' => '\Swagger\Client\models\DvirListResponseAuthorSignature',
        'mechanic_or_agent_signature' => '\Swagger\Client\models\DvirListResponseMechanicOrAgentSignature',
        'next_driver_signature' => '\Swagger\Client\models\DvirListResponseNextDriverSignature'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'inspection_type' => null,
        'vehicle' => null,
        'vehicle_defects' => null,
        'odometer_miles' => 'int64',
        'trailer_name' => null,
        'trailer_defects' => null,
        'mechanic_notes' => null,
        'vehicle_condition' => null,
        'defects_corrected' => null,
        'defects_need_not_be_corrected' => null,
        'author_signature' => null,
        'mechanic_or_agent_signature' => null,
        'next_driver_signature' => null
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
        'inspection_type' => 'inspectionType',
        'vehicle' => 'vehicle',
        'vehicle_defects' => 'vehicleDefects',
        'odometer_miles' => 'odometerMiles',
        'trailer_name' => 'trailerName',
        'trailer_defects' => 'trailerDefects',
        'mechanic_notes' => 'mechanicNotes',
        'vehicle_condition' => 'vehicleCondition',
        'defects_corrected' => 'defectsCorrected',
        'defects_need_not_be_corrected' => 'defectsNeedNotBeCorrected',
        'author_signature' => 'authorSignature',
        'mechanic_or_agent_signature' => 'mechanicOrAgentSignature',
        'next_driver_signature' => 'nextDriverSignature'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'inspection_type' => 'setInspectionType',
        'vehicle' => 'setVehicle',
        'vehicle_defects' => 'setVehicleDefects',
        'odometer_miles' => 'setOdometerMiles',
        'trailer_name' => 'setTrailerName',
        'trailer_defects' => 'setTrailerDefects',
        'mechanic_notes' => 'setMechanicNotes',
        'vehicle_condition' => 'setVehicleCondition',
        'defects_corrected' => 'setDefectsCorrected',
        'defects_need_not_be_corrected' => 'setDefectsNeedNotBeCorrected',
        'author_signature' => 'setAuthorSignature',
        'mechanic_or_agent_signature' => 'setMechanicOrAgentSignature',
        'next_driver_signature' => 'setNextDriverSignature'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'inspection_type' => 'getInspectionType',
        'vehicle' => 'getVehicle',
        'vehicle_defects' => 'getVehicleDefects',
        'odometer_miles' => 'getOdometerMiles',
        'trailer_name' => 'getTrailerName',
        'trailer_defects' => 'getTrailerDefects',
        'mechanic_notes' => 'getMechanicNotes',
        'vehicle_condition' => 'getVehicleCondition',
        'defects_corrected' => 'getDefectsCorrected',
        'defects_need_not_be_corrected' => 'getDefectsNeedNotBeCorrected',
        'author_signature' => 'getAuthorSignature',
        'mechanic_or_agent_signature' => 'getMechanicOrAgentSignature',
        'next_driver_signature' => 'getNextDriverSignature'
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
        $this->container['inspection_type'] = isset($data['inspection_type']) ? $data['inspection_type'] : null;
        $this->container['vehicle'] = isset($data['vehicle']) ? $data['vehicle'] : null;
        $this->container['vehicle_defects'] = isset($data['vehicle_defects']) ? $data['vehicle_defects'] : null;
        $this->container['odometer_miles'] = isset($data['odometer_miles']) ? $data['odometer_miles'] : null;
        $this->container['trailer_name'] = isset($data['trailer_name']) ? $data['trailer_name'] : null;
        $this->container['trailer_defects'] = isset($data['trailer_defects']) ? $data['trailer_defects'] : null;
        $this->container['mechanic_notes'] = isset($data['mechanic_notes']) ? $data['mechanic_notes'] : null;
        $this->container['vehicle_condition'] = isset($data['vehicle_condition']) ? $data['vehicle_condition'] : null;
        $this->container['defects_corrected'] = isset($data['defects_corrected']) ? $data['defects_corrected'] : null;
        $this->container['defects_need_not_be_corrected'] = isset($data['defects_need_not_be_corrected']) ? $data['defects_need_not_be_corrected'] : null;
        $this->container['author_signature'] = isset($data['author_signature']) ? $data['author_signature'] : null;
        $this->container['mechanic_or_agent_signature'] = isset($data['mechanic_or_agent_signature']) ? $data['mechanic_or_agent_signature'] : null;
        $this->container['next_driver_signature'] = isset($data['next_driver_signature']) ? $data['next_driver_signature'] : null;
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
     * Gets inspection_type
     *
     * @return string
     */
    public function getInspectionType()
    {
        return $this->container['inspection_type'];
    }

    /**
     * Sets inspection_type
     *
     * @param string $inspection_type Inspection type of the DVIR.
     *
     * @return $this
     */
    public function setInspectionType($inspection_type)
    {
        $this->container['inspection_type'] = $inspection_type;

        return $this;
    }

    /**
     * Gets vehicle
     *
     * @return \Swagger\Client\models\DvirListResponseVehicle
     */
    public function getVehicle()
    {
        return $this->container['vehicle'];
    }

    /**
     * Sets vehicle
     *
     * @param \Swagger\Client\models\DvirListResponseVehicle $vehicle vehicle
     *
     * @return $this
     */
    public function setVehicle($vehicle)
    {
        $this->container['vehicle'] = $vehicle;

        return $this;
    }

    /**
     * Gets vehicle_defects
     *
     * @return \Swagger\Client\models\DvirListResponseVehicleDefects[]
     */
    public function getVehicleDefects()
    {
        return $this->container['vehicle_defects'];
    }

    /**
     * Sets vehicle_defects
     *
     * @param \Swagger\Client\models\DvirListResponseVehicleDefects[] $vehicle_defects Defects registered for the vehicle which was part of the DVIR.
     *
     * @return $this
     */
    public function setVehicleDefects($vehicle_defects)
    {
        $this->container['vehicle_defects'] = $vehicle_defects;

        return $this;
    }

    /**
     * Gets odometer_miles
     *
     * @return int
     */
    public function getOdometerMiles()
    {
        return $this->container['odometer_miles'];
    }

    /**
     * Sets odometer_miles
     *
     * @param int $odometer_miles The odometer reading in miles for the vehicle when the DVIR was done.
     *
     * @return $this
     */
    public function setOdometerMiles($odometer_miles)
    {
        $this->container['odometer_miles'] = $odometer_miles;

        return $this;
    }

    /**
     * Gets trailer_name
     *
     * @return string
     */
    public function getTrailerName()
    {
        return $this->container['trailer_name'];
    }

    /**
     * Sets trailer_name
     *
     * @param string $trailer_name The name of the trailer which was part of the DVIR.
     *
     * @return $this
     */
    public function setTrailerName($trailer_name)
    {
        $this->container['trailer_name'] = $trailer_name;

        return $this;
    }

    /**
     * Gets trailer_defects
     *
     * @return \Swagger\Client\models\DvirListResponseVehicleDefects[]
     */
    public function getTrailerDefects()
    {
        return $this->container['trailer_defects'];
    }

    /**
     * Sets trailer_defects
     *
     * @param \Swagger\Client\models\DvirListResponseVehicleDefects[] $trailer_defects Defects registered for the trailer which was part of the DVIR.
     *
     * @return $this
     */
    public function setTrailerDefects($trailer_defects)
    {
        $this->container['trailer_defects'] = $trailer_defects;

        return $this;
    }

    /**
     * Gets mechanic_notes
     *
     * @return string
     */
    public function getMechanicNotes()
    {
        return $this->container['mechanic_notes'];
    }

    /**
     * Sets mechanic_notes
     *
     * @param string $mechanic_notes The mechanics notes on the DVIR.
     *
     * @return $this
     */
    public function setMechanicNotes($mechanic_notes)
    {
        $this->container['mechanic_notes'] = $mechanic_notes;

        return $this;
    }

    /**
     * Gets vehicle_condition
     *
     * @return string
     */
    public function getVehicleCondition()
    {
        return $this->container['vehicle_condition'];
    }

    /**
     * Sets vehicle_condition
     *
     * @param string $vehicle_condition The condition of vechile on which DVIR was done.
     *
     * @return $this
     */
    public function setVehicleCondition($vehicle_condition)
    {
        $this->container['vehicle_condition'] = $vehicle_condition;

        return $this;
    }

    /**
     * Gets defects_corrected
     *
     * @return bool
     */
    public function getDefectsCorrected()
    {
        return $this->container['defects_corrected'];
    }

    /**
     * Sets defects_corrected
     *
     * @param bool $defects_corrected Signifies if the defects on the vehicle corrected after the DVIR is done.
     *
     * @return $this
     */
    public function setDefectsCorrected($defects_corrected)
    {
        $this->container['defects_corrected'] = $defects_corrected;

        return $this;
    }

    /**
     * Gets defects_need_not_be_corrected
     *
     * @return bool
     */
    public function getDefectsNeedNotBeCorrected()
    {
        return $this->container['defects_need_not_be_corrected'];
    }

    /**
     * Sets defects_need_not_be_corrected
     *
     * @param bool $defects_need_not_be_corrected Signifies if the defects on this vehicle can be ignored.
     *
     * @return $this
     */
    public function setDefectsNeedNotBeCorrected($defects_need_not_be_corrected)
    {
        $this->container['defects_need_not_be_corrected'] = $defects_need_not_be_corrected;

        return $this;
    }

    /**
     * Gets author_signature
     *
     * @return \Swagger\Client\models\DvirListResponseAuthorSignature
     */
    public function getAuthorSignature()
    {
        return $this->container['author_signature'];
    }

    /**
     * Sets author_signature
     *
     * @param \Swagger\Client\models\DvirListResponseAuthorSignature $author_signature author_signature
     *
     * @return $this
     */
    public function setAuthorSignature($author_signature)
    {
        $this->container['author_signature'] = $author_signature;

        return $this;
    }

    /**
     * Gets mechanic_or_agent_signature
     *
     * @return \Swagger\Client\models\DvirListResponseMechanicOrAgentSignature
     */
    public function getMechanicOrAgentSignature()
    {
        return $this->container['mechanic_or_agent_signature'];
    }

    /**
     * Sets mechanic_or_agent_signature
     *
     * @param \Swagger\Client\models\DvirListResponseMechanicOrAgentSignature $mechanic_or_agent_signature mechanic_or_agent_signature
     *
     * @return $this
     */
    public function setMechanicOrAgentSignature($mechanic_or_agent_signature)
    {
        $this->container['mechanic_or_agent_signature'] = $mechanic_or_agent_signature;

        return $this;
    }

    /**
     * Gets next_driver_signature
     *
     * @return \Swagger\Client\models\DvirListResponseNextDriverSignature
     */
    public function getNextDriverSignature()
    {
        return $this->container['next_driver_signature'];
    }

    /**
     * Sets next_driver_signature
     *
     * @param \Swagger\Client\models\DvirListResponseNextDriverSignature $next_driver_signature next_driver_signature
     *
     * @return $this
     */
    public function setNextDriverSignature($next_driver_signature)
    {
        $this->container['next_driver_signature'] = $next_driver_signature;

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

