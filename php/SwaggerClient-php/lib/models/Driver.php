<?php
/**
 * Driver
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
 * Driver Class Doc Comment
 *
 * @category Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Driver implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Driver';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => 'string',
        'username' => 'string',
        'phone' => 'string',
        'license_number' => 'string',
        'license_state' => 'string',
        'eld_exempt' => 'bool',
        'eld_exempt_reason' => 'string',
        'eld_big_day_exemption_enabled' => 'bool',
        'eld_adverse_weather_exemption_enabled' => 'bool',
        'eld_pc_enabled' => 'bool',
        'eld_ym_enabled' => 'bool',
        'eld_day_start_hour' => 'int',
        'vehicle_id' => 'int',
        'group_id' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'name' => null,
        'username' => null,
        'phone' => null,
        'license_number' => null,
        'license_state' => null,
        'eld_exempt' => null,
        'eld_exempt_reason' => null,
        'eld_big_day_exemption_enabled' => null,
        'eld_adverse_weather_exemption_enabled' => null,
        'eld_pc_enabled' => null,
        'eld_ym_enabled' => null,
        'eld_day_start_hour' => null,
        'vehicle_id' => 'int64',
        'group_id' => 'int64'
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
        'name' => 'name',
        'username' => 'username',
        'phone' => 'phone',
        'license_number' => 'licenseNumber',
        'license_state' => 'licenseState',
        'eld_exempt' => 'eldExempt',
        'eld_exempt_reason' => 'eldExemptReason',
        'eld_big_day_exemption_enabled' => 'eldBigDayExemptionEnabled',
        'eld_adverse_weather_exemption_enabled' => 'eldAdverseWeatherExemptionEnabled',
        'eld_pc_enabled' => 'eldPcEnabled',
        'eld_ym_enabled' => 'eldYmEnabled',
        'eld_day_start_hour' => 'eldDayStartHour',
        'vehicle_id' => 'vehicle_id',
        'group_id' => 'group_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'username' => 'setUsername',
        'phone' => 'setPhone',
        'license_number' => 'setLicenseNumber',
        'license_state' => 'setLicenseState',
        'eld_exempt' => 'setEldExempt',
        'eld_exempt_reason' => 'setEldExemptReason',
        'eld_big_day_exemption_enabled' => 'setEldBigDayExemptionEnabled',
        'eld_adverse_weather_exemption_enabled' => 'setEldAdverseWeatherExemptionEnabled',
        'eld_pc_enabled' => 'setEldPcEnabled',
        'eld_ym_enabled' => 'setEldYmEnabled',
        'eld_day_start_hour' => 'setEldDayStartHour',
        'vehicle_id' => 'setVehicleId',
        'group_id' => 'setGroupId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'username' => 'getUsername',
        'phone' => 'getPhone',
        'license_number' => 'getLicenseNumber',
        'license_state' => 'getLicenseState',
        'eld_exempt' => 'getEldExempt',
        'eld_exempt_reason' => 'getEldExemptReason',
        'eld_big_day_exemption_enabled' => 'getEldBigDayExemptionEnabled',
        'eld_adverse_weather_exemption_enabled' => 'getEldAdverseWeatherExemptionEnabled',
        'eld_pc_enabled' => 'getEldPcEnabled',
        'eld_ym_enabled' => 'getEldYmEnabled',
        'eld_day_start_hour' => 'getEldDayStartHour',
        'vehicle_id' => 'getVehicleId',
        'group_id' => 'getGroupId'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['username'] = isset($data['username']) ? $data['username'] : null;
        $this->container['phone'] = isset($data['phone']) ? $data['phone'] : null;
        $this->container['license_number'] = isset($data['license_number']) ? $data['license_number'] : null;
        $this->container['license_state'] = isset($data['license_state']) ? $data['license_state'] : null;
        $this->container['eld_exempt'] = isset($data['eld_exempt']) ? $data['eld_exempt'] : null;
        $this->container['eld_exempt_reason'] = isset($data['eld_exempt_reason']) ? $data['eld_exempt_reason'] : null;
        $this->container['eld_big_day_exemption_enabled'] = isset($data['eld_big_day_exemption_enabled']) ? $data['eld_big_day_exemption_enabled'] : null;
        $this->container['eld_adverse_weather_exemption_enabled'] = isset($data['eld_adverse_weather_exemption_enabled']) ? $data['eld_adverse_weather_exemption_enabled'] : null;
        $this->container['eld_pc_enabled'] = isset($data['eld_pc_enabled']) ? $data['eld_pc_enabled'] : false;
        $this->container['eld_ym_enabled'] = isset($data['eld_ym_enabled']) ? $data['eld_ym_enabled'] : false;
        $this->container['eld_day_start_hour'] = isset($data['eld_day_start_hour']) ? $data['eld_day_start_hour'] : null;
        $this->container['vehicle_id'] = isset($data['vehicle_id']) ? $data['vehicle_id'] : null;
        $this->container['group_id'] = isset($data['group_id']) ? $data['group_id'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
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

        if ($this->container['name'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name Driver's name.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->container['username'];
    }

    /**
     * Sets username
     *
     * @param string $username Driver's login username into the driver app.
     *
     * @return $this
     */
    public function setUsername($username)
    {
        $this->container['username'] = $username;

        return $this;
    }

    /**
     * Gets phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     *
     * @param string $phone Driver's phone number.
     *
     * @return $this
     */
    public function setPhone($phone)
    {
        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets license_number
     *
     * @return string
     */
    public function getLicenseNumber()
    {
        return $this->container['license_number'];
    }

    /**
     * Sets license_number
     *
     * @param string $license_number Driver's state issued license number.
     *
     * @return $this
     */
    public function setLicenseNumber($license_number)
    {
        $this->container['license_number'] = $license_number;

        return $this;
    }

    /**
     * Gets license_state
     *
     * @return string
     */
    public function getLicenseState()
    {
        return $this->container['license_state'];
    }

    /**
     * Sets license_state
     *
     * @param string $license_state Abbreviation of state that issued driver's license.
     *
     * @return $this
     */
    public function setLicenseState($license_state)
    {
        $this->container['license_state'] = $license_state;

        return $this;
    }

    /**
     * Gets eld_exempt
     *
     * @return bool
     */
    public function getEldExempt()
    {
        return $this->container['eld_exempt'];
    }

    /**
     * Sets eld_exempt
     *
     * @param bool $eld_exempt Flag indicating this driver is exempt from the Electronic Logging Mandate.
     *
     * @return $this
     */
    public function setEldExempt($eld_exempt)
    {
        $this->container['eld_exempt'] = $eld_exempt;

        return $this;
    }

    /**
     * Gets eld_exempt_reason
     *
     * @return string
     */
    public function getEldExemptReason()
    {
        return $this->container['eld_exempt_reason'];
    }

    /**
     * Sets eld_exempt_reason
     *
     * @param string $eld_exempt_reason Reason that this driver is exempt from the Electronic Logging Mandate (see eldExempt).
     *
     * @return $this
     */
    public function setEldExemptReason($eld_exempt_reason)
    {
        $this->container['eld_exempt_reason'] = $eld_exempt_reason;

        return $this;
    }

    /**
     * Gets eld_big_day_exemption_enabled
     *
     * @return bool
     */
    public function getEldBigDayExemptionEnabled()
    {
        return $this->container['eld_big_day_exemption_enabled'];
    }

    /**
     * Sets eld_big_day_exemption_enabled
     *
     * @param bool $eld_big_day_exemption_enabled Flag indicating this driver may use Big Day excemptions in ELD logs.
     *
     * @return $this
     */
    public function setEldBigDayExemptionEnabled($eld_big_day_exemption_enabled)
    {
        $this->container['eld_big_day_exemption_enabled'] = $eld_big_day_exemption_enabled;

        return $this;
    }

    /**
     * Gets eld_adverse_weather_exemption_enabled
     *
     * @return bool
     */
    public function getEldAdverseWeatherExemptionEnabled()
    {
        return $this->container['eld_adverse_weather_exemption_enabled'];
    }

    /**
     * Sets eld_adverse_weather_exemption_enabled
     *
     * @param bool $eld_adverse_weather_exemption_enabled Flag indicating this driver may use Adverse Weather exemptions in ELD logs.
     *
     * @return $this
     */
    public function setEldAdverseWeatherExemptionEnabled($eld_adverse_weather_exemption_enabled)
    {
        $this->container['eld_adverse_weather_exemption_enabled'] = $eld_adverse_weather_exemption_enabled;

        return $this;
    }

    /**
     * Gets eld_pc_enabled
     *
     * @return bool
     */
    public function getEldPcEnabled()
    {
        return $this->container['eld_pc_enabled'];
    }

    /**
     * Sets eld_pc_enabled
     *
     * @param bool $eld_pc_enabled Flag indicating this driver may select the Personal Conveyance duty status in ELD logs.
     *
     * @return $this
     */
    public function setEldPcEnabled($eld_pc_enabled)
    {
        $this->container['eld_pc_enabled'] = $eld_pc_enabled;

        return $this;
    }

    /**
     * Gets eld_ym_enabled
     *
     * @return bool
     */
    public function getEldYmEnabled()
    {
        return $this->container['eld_ym_enabled'];
    }

    /**
     * Sets eld_ym_enabled
     *
     * @param bool $eld_ym_enabled Flag indicating this driver may select the Yard Move duty status in ELD logs.
     *
     * @return $this
     */
    public function setEldYmEnabled($eld_ym_enabled)
    {
        $this->container['eld_ym_enabled'] = $eld_ym_enabled;

        return $this;
    }

    /**
     * Gets eld_day_start_hour
     *
     * @return int
     */
    public function getEldDayStartHour()
    {
        return $this->container['eld_day_start_hour'];
    }

    /**
     * Sets eld_day_start_hour
     *
     * @param int $eld_day_start_hour 0 indicating midnight-to-midnight ELD driving hours, 12 to indicate noon-to-noon driving hours.
     *
     * @return $this
     */
    public function setEldDayStartHour($eld_day_start_hour)
    {
        $this->container['eld_day_start_hour'] = $eld_day_start_hour;

        return $this;
    }

    /**
     * Gets vehicle_id
     *
     * @return int
     */
    public function getVehicleId()
    {
        return $this->container['vehicle_id'];
    }

    /**
     * Sets vehicle_id
     *
     * @param int $vehicle_id ID of the vehicle assigned to the driver for static vehicle assignments. (uncommon).
     *
     * @return $this
     */
    public function setVehicleId($vehicle_id)
    {
        $this->container['vehicle_id'] = $vehicle_id;

        return $this;
    }

    /**
     * Gets group_id
     *
     * @return int
     */
    public function getGroupId()
    {
        return $this->container['group_id'];
    }

    /**
     * Sets group_id
     *
     * @param int $group_id ID of the group if the organization has multiple groups (uncommon).
     *
     * @return $this
     */
    public function setGroupId($group_id)
    {
        $this->container['group_id'] = $group_id;

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

