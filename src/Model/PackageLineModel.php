<?php
/**
 * PackageLineModel
 *
 * PHP version 5
 *
 * @category Class
 * @package  BumbalAccountPortal
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Bumbal Account Portal API
 *
 * Bumbal Account API documentation
 *
 * OpenAPI spec version: 1.0
 * Contact: gerb@bumbal.eu
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace BumbalAccountPortal\Model;

use \ArrayAccess;

/**
 * PackageLineModel Class Doc Comment
 *
 * @category    Class
 * @package     BumbalAccountPortal
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class PackageLineModel implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'PackageLineModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'nr' => 'string',
        'package_type' => 'string',
        'description' => 'string',
        'nr_of_packages' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'nr' => null,
        'package_type' => null,
        'description' => null,
        'nr_of_packages' => 'int64'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'nr' => 'nr',
        'package_type' => 'package_type',
        'description' => 'description',
        'nr_of_packages' => 'nr_of_packages'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'nr' => 'setNr',
        'package_type' => 'setPackageType',
        'description' => 'setDescription',
        'nr_of_packages' => 'setNrOfPackages'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'nr' => 'getNr',
        'package_type' => 'getPackageType',
        'description' => 'getDescription',
        'nr_of_packages' => 'getNrOfPackages'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    const PACKAGE_TYPE_PALLET = 'pallet';
    const PACKAGE_TYPE_BOX = 'box';
    const PACKAGE_TYPE_GENERAL = 'general';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getPackageTypeAllowableValues()
    {
        return [
            self::PACKAGE_TYPE_PALLET,
            self::PACKAGE_TYPE_BOX,
            self::PACKAGE_TYPE_GENERAL,
        ];
    }
    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['nr'] = isset($data['nr']) ? $data['nr'] : null;
        $this->container['package_type'] = isset($data['package_type']) ? $data['package_type'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['nr_of_packages'] = isset($data['nr_of_packages']) ? $data['nr_of_packages'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['package_type'] === null) {
            $invalid_properties[] = "'package_type' can't be null";
        }
        $allowed_values = $this->getPackageTypeAllowableValues();
        if (!in_array($this->container['package_type'], $allowed_values)) {
            $invalid_properties[] = sprintf(
                "invalid value for 'package_type', must be one of '%s'",
                implode("', '", $allowed_values)
            );
        }

        if ($this->container['nr_of_packages'] === null) {
            $invalid_properties[] = "'nr_of_packages' can't be null";
        }
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        if ($this->container['package_type'] === null) {
            return false;
        }
        $allowed_values = $this->getPackageTypeAllowableValues();
        if (!in_array($this->container['package_type'], $allowed_values)) {
            return false;
        }
        if ($this->container['nr_of_packages'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets nr
     * @return string
     */
    public function getNr()
    {
        return $this->container['nr'];
    }

    /**
     * Sets nr
     * @param string $nr
     * @return $this
     */
    public function setNr($nr)
    {
        $this->container['nr'] = $nr;

        return $this;
    }

    /**
     * Gets package_type
     * @return string
     */
    public function getPackageType()
    {
        return $this->container['package_type'];
    }

    /**
     * Sets package_type
     * @param string $package_type Package Type
     * @return $this
     */
    public function setPackageType($package_type)
    {
        $allowed_values = $this->getPackageTypeAllowableValues();
        if (!in_array($package_type, $allowed_values)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'package_type', must be one of '%s'",
                    implode("', '", $allowed_values)
                )
            );
        }
        $this->container['package_type'] = $package_type;

        return $this;
    }

    /**
     * Gets description
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets nr_of_packages
     * @return int
     */
    public function getNrOfPackages()
    {
        return $this->container['nr_of_packages'];
    }

    /**
     * Sets nr_of_packages
     * @param int $nr_of_packages
     * @return $this
     */
    public function setNrOfPackages($nr_of_packages)
    {
        $this->container['nr_of_packages'] = $nr_of_packages;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\BumbalAccountPortal\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\BumbalAccountPortal\ObjectSerializer::sanitizeForSerialization($this));
    }
}

