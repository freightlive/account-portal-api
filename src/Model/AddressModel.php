<?php
/**
 * AddressModel
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
 * AddressModel Class Doc Comment
 *
 * @category    Class
 * @package     BumbalAccountPortal
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class AddressModel implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'AddressModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name_1' => 'string',
        'name_2' => 'string',
        'street_1' => 'string',
        'street_2' => 'string',
        'house_nr' => 'string',
        'house_nr_addendum' => 'string',
        'zipcode' => 'string',
        'city' => 'string',
        'state' => 'string',
        'iso_country' => 'string',
        'latitude' => 'float',
        'longitude' => 'float',
        'contact_person' => 'string',
        'emails' => '\BumbalAccountPortal\Model\EmailModel[]',
        'phone_nrs' => '\BumbalAccountPortal\Model\PhoneNrModel[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'name_1' => null,
        'name_2' => null,
        'street_1' => null,
        'street_2' => null,
        'house_nr' => null,
        'house_nr_addendum' => null,
        'zipcode' => null,
        'city' => null,
        'state' => null,
        'iso_country' => null,
        'latitude' => 'float',
        'longitude' => 'float',
        'contact_person' => null,
        'emails' => null,
        'phone_nrs' => null
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
        'name_1' => 'name_1',
        'name_2' => 'name_2',
        'street_1' => 'street_1',
        'street_2' => 'street_2',
        'house_nr' => 'house_nr',
        'house_nr_addendum' => 'house_nr_addendum',
        'zipcode' => 'zipcode',
        'city' => 'city',
        'state' => 'state',
        'iso_country' => 'iso_country',
        'latitude' => 'latitude',
        'longitude' => 'longitude',
        'contact_person' => 'contact_person',
        'emails' => 'emails',
        'phone_nrs' => 'phone_nrs'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'name_1' => 'setName1',
        'name_2' => 'setName2',
        'street_1' => 'setStreet1',
        'street_2' => 'setStreet2',
        'house_nr' => 'setHouseNr',
        'house_nr_addendum' => 'setHouseNrAddendum',
        'zipcode' => 'setZipcode',
        'city' => 'setCity',
        'state' => 'setState',
        'iso_country' => 'setIsoCountry',
        'latitude' => 'setLatitude',
        'longitude' => 'setLongitude',
        'contact_person' => 'setContactPerson',
        'emails' => 'setEmails',
        'phone_nrs' => 'setPhoneNrs'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'name_1' => 'getName1',
        'name_2' => 'getName2',
        'street_1' => 'getStreet1',
        'street_2' => 'getStreet2',
        'house_nr' => 'getHouseNr',
        'house_nr_addendum' => 'getHouseNrAddendum',
        'zipcode' => 'getZipcode',
        'city' => 'getCity',
        'state' => 'getState',
        'iso_country' => 'getIsoCountry',
        'latitude' => 'getLatitude',
        'longitude' => 'getLongitude',
        'contact_person' => 'getContactPerson',
        'emails' => 'getEmails',
        'phone_nrs' => 'getPhoneNrs'
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
        $this->container['name_1'] = isset($data['name_1']) ? $data['name_1'] : null;
        $this->container['name_2'] = isset($data['name_2']) ? $data['name_2'] : null;
        $this->container['street_1'] = isset($data['street_1']) ? $data['street_1'] : null;
        $this->container['street_2'] = isset($data['street_2']) ? $data['street_2'] : null;
        $this->container['house_nr'] = isset($data['house_nr']) ? $data['house_nr'] : null;
        $this->container['house_nr_addendum'] = isset($data['house_nr_addendum']) ? $data['house_nr_addendum'] : null;
        $this->container['zipcode'] = isset($data['zipcode']) ? $data['zipcode'] : null;
        $this->container['city'] = isset($data['city']) ? $data['city'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['iso_country'] = isset($data['iso_country']) ? $data['iso_country'] : null;
        $this->container['latitude'] = isset($data['latitude']) ? $data['latitude'] : null;
        $this->container['longitude'] = isset($data['longitude']) ? $data['longitude'] : null;
        $this->container['contact_person'] = isset($data['contact_person']) ? $data['contact_person'] : null;
        $this->container['emails'] = isset($data['emails']) ? $data['emails'] : null;
        $this->container['phone_nrs'] = isset($data['phone_nrs']) ? $data['phone_nrs'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

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

        return true;
    }


    /**
     * Gets name_1
     * @return string
     */
    public function getName1()
    {
        return $this->container['name_1'];
    }

    /**
     * Sets name_1
     * @param string $name_1
     * @return $this
     */
    public function setName1($name_1)
    {
        $this->container['name_1'] = $name_1;

        return $this;
    }

    /**
     * Gets name_2
     * @return string
     */
    public function getName2()
    {
        return $this->container['name_2'];
    }

    /**
     * Sets name_2
     * @param string $name_2
     * @return $this
     */
    public function setName2($name_2)
    {
        $this->container['name_2'] = $name_2;

        return $this;
    }

    /**
     * Gets street_1
     * @return string
     */
    public function getStreet1()
    {
        return $this->container['street_1'];
    }

    /**
     * Sets street_1
     * @param string $street_1
     * @return $this
     */
    public function setStreet1($street_1)
    {
        $this->container['street_1'] = $street_1;

        return $this;
    }

    /**
     * Gets street_2
     * @return string
     */
    public function getStreet2()
    {
        return $this->container['street_2'];
    }

    /**
     * Sets street_2
     * @param string $street_2
     * @return $this
     */
    public function setStreet2($street_2)
    {
        $this->container['street_2'] = $street_2;

        return $this;
    }

    /**
     * Gets house_nr
     * @return string
     */
    public function getHouseNr()
    {
        return $this->container['house_nr'];
    }

    /**
     * Sets house_nr
     * @param string $house_nr
     * @return $this
     */
    public function setHouseNr($house_nr)
    {
        $this->container['house_nr'] = $house_nr;

        return $this;
    }

    /**
     * Gets house_nr_addendum
     * @return string
     */
    public function getHouseNrAddendum()
    {
        return $this->container['house_nr_addendum'];
    }

    /**
     * Sets house_nr_addendum
     * @param string $house_nr_addendum
     * @return $this
     */
    public function setHouseNrAddendum($house_nr_addendum)
    {
        $this->container['house_nr_addendum'] = $house_nr_addendum;

        return $this;
    }

    /**
     * Gets zipcode
     * @return string
     */
    public function getZipcode()
    {
        return $this->container['zipcode'];
    }

    /**
     * Sets zipcode
     * @param string $zipcode
     * @return $this
     */
    public function setZipcode($zipcode)
    {
        $this->container['zipcode'] = $zipcode;

        return $this;
    }

    /**
     * Gets city
     * @return string
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     * @param string $city
     * @return $this
     */
    public function setCity($city)
    {
        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets state
     * @return string
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     * @param string $state
     * @return $this
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets iso_country
     * @return string
     */
    public function getIsoCountry()
    {
        return $this->container['iso_country'];
    }

    /**
     * Sets iso_country
     * @param string $iso_country
     * @return $this
     */
    public function setIsoCountry($iso_country)
    {
        $this->container['iso_country'] = $iso_country;

        return $this;
    }

    /**
     * Gets latitude
     * @return float
     */
    public function getLatitude()
    {
        return $this->container['latitude'];
    }

    /**
     * Sets latitude
     * @param float $latitude Latitude
     * @return $this
     */
    public function setLatitude($latitude)
    {
        $this->container['latitude'] = $latitude;

        return $this;
    }

    /**
     * Gets longitude
     * @return float
     */
    public function getLongitude()
    {
        return $this->container['longitude'];
    }

    /**
     * Sets longitude
     * @param float $longitude Longitude
     * @return $this
     */
    public function setLongitude($longitude)
    {
        $this->container['longitude'] = $longitude;

        return $this;
    }

    /**
     * Gets contact_person
     * @return string
     */
    public function getContactPerson()
    {
        return $this->container['contact_person'];
    }

    /**
     * Sets contact_person
     * @param string $contact_person
     * @return $this
     */
    public function setContactPerson($contact_person)
    {
        $this->container['contact_person'] = $contact_person;

        return $this;
    }

    /**
     * Gets emails
     * @return \BumbalAccountPortal\Model\EmailModel[]
     */
    public function getEmails()
    {
        return $this->container['emails'];
    }

    /**
     * Sets emails
     * @param \BumbalAccountPortal\Model\EmailModel[] $emails
     * @return $this
     */
    public function setEmails($emails)
    {
        $this->container['emails'] = $emails;

        return $this;
    }

    /**
     * Gets phone_nrs
     * @return \BumbalAccountPortal\Model\PhoneNrModel[]
     */
    public function getPhoneNrs()
    {
        return $this->container['phone_nrs'];
    }

    /**
     * Sets phone_nrs
     * @param \BumbalAccountPortal\Model\PhoneNrModel[] $phone_nrs
     * @return $this
     */
    public function setPhoneNrs($phone_nrs)
    {
        $this->container['phone_nrs'] = $phone_nrs;

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


