<?php
/**
 * MessageEndpointOut
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Svix\ApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Svix API
 *
 * Welcome to the Svix API documentation!  Useful links: [Homepage](https://www.svix.com) | [Support email](mailto:support+docs@svix.com) | [Blog](https://www.svix.com/blog/) | [Slack Community](https://www.svix.com/slack/)  # Introduction  This is the reference documentation and schemas for the [Svix webhook service](https://www.svix.com) API. For tutorials and other documentation please refer to [the documentation](https://docs.svix.com).  ## Main concepts  In Svix you have four important entities you will be interacting with:  - `messages`: these are the webhooks being sent. They can have contents and a few other properties. - `application`: this is where `messages` are sent to. Usually you want to create one application for each user on your platform. - `endpoint`: endpoints are the URLs messages will be sent to. Each application can have multiple `endpoints` and each message sent to that application will be sent to all of them (unless they are not subscribed to the sent event type). - `event-type`: event types are identifiers denoting the type of the message being sent. Event types are primarily used to decide which events are sent to which endpoint.   ## Authentication  Get your authentication token (`AUTH_TOKEN`) from the [Svix dashboard](https://dashboard.svix.com) and use it as part of the `Authorization` header as such: `Authorization: Bearer ${AUTH_TOKEN}`. For more information on authentication, please refer to the [authentication token docs](https://docs.svix.com/api-keys).  <SecurityDefinitions />   ## Code samples  The code samples assume you already have the respective libraries installed and you know how to use them. For the latest information on how to do that, please refer to [the documentation](https://docs.svix.com/).   ## Idempotency  Svix supports [idempotency](https://en.wikipedia.org/wiki/Idempotence) for safely retrying requests without accidentally performing the same operation twice. This is useful when an API call is disrupted in transit and you do not receive a response.  To perform an idempotent request, pass the idempotency key in the `Idempotency-Key` header to the request. The idempotency key should be a unique value generated by the client. You can create the key in however way you like, though we suggest using UUID v4, or any other string with enough entropy to avoid collisions.  Svix's idempotency works by saving the resulting status code and body of the first request made for any given idempotency key for any successful request. Subsequent requests with the same key return the same result.  Please note that idempotency is only supported for `POST` requests.   ## Cross-Origin Resource Sharing  This API features Cross-Origin Resource Sharing (CORS) implemented in compliance with [W3C spec](https://www.w3.org/TR/cors/). And that allows cross-domain communication from the browser. All responses have a wildcard same-origin which makes them completely public and accessible to everyone, including any code on any site.
 *
 * The version of the OpenAPI document: 1.13.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.1.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Svix\ApiClient\Model;

use \ArrayAccess;
use \Svix\ApiClient\ObjectSerializer;

/**
 * MessageEndpointOut Class Doc Comment
 *
 * @category Class
 * @package  Svix\ApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class MessageEndpointOut implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'MessageEndpointOut';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'status' => '\Svix\ApiClient\Model\MessageStatus',
        'next_attempt' => '\DateTime',
        'description' => 'string',
        'rate_limit' => 'int',
        'uid' => 'string',
        'url' => 'string',
        'version' => 'int',
        'disabled' => 'bool',
        'filter_types' => 'string[]',
        'channels' => 'string[]',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'status' => null,
        'next_attempt' => 'date-time',
        'description' => null,
        'rate_limit' => 'uint16',
        'uid' => null,
        'url' => 'uri',
        'version' => 'int32',
        'disabled' => null,
        'filter_types' => null,
        'channels' => null,
        'created_at' => 'date-time',
        'updated_at' => 'date-time'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
		'status' => false,
		'next_attempt' => false,
		'description' => false,
		'rate_limit' => false,
		'uid' => false,
		'url' => false,
		'version' => false,
		'disabled' => false,
		'filter_types' => false,
		'channels' => false,
		'created_at' => false,
		'updated_at' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'status' => 'status',
        'next_attempt' => 'nextAttempt',
        'description' => 'description',
        'rate_limit' => 'rateLimit',
        'uid' => 'uid',
        'url' => 'url',
        'version' => 'version',
        'disabled' => 'disabled',
        'filter_types' => 'filterTypes',
        'channels' => 'channels',
        'created_at' => 'createdAt',
        'updated_at' => 'updatedAt'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'status' => 'setStatus',
        'next_attempt' => 'setNextAttempt',
        'description' => 'setDescription',
        'rate_limit' => 'setRateLimit',
        'uid' => 'setUid',
        'url' => 'setUrl',
        'version' => 'setVersion',
        'disabled' => 'setDisabled',
        'filter_types' => 'setFilterTypes',
        'channels' => 'setChannels',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'status' => 'getStatus',
        'next_attempt' => 'getNextAttempt',
        'description' => 'getDescription',
        'rate_limit' => 'getRateLimit',
        'uid' => 'getUid',
        'url' => 'getUrl',
        'version' => 'getVersion',
        'disabled' => 'getDisabled',
        'filter_types' => 'getFilterTypes',
        'channels' => 'getChannels',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt'
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
        return self::$openAPIModelName;
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('next_attempt', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('rate_limit', $data ?? [], null);
        $this->setIfExists('uid', $data ?? [], null);
        $this->setIfExists('url', $data ?? [], null);
        $this->setIfExists('version', $data ?? [], null);
        $this->setIfExists('disabled', $data ?? [], false);
        $this->setIfExists('filter_types', $data ?? [], null);
        $this->setIfExists('channels', $data ?? [], null);
        $this->setIfExists('created_at', $data ?? [], null);
        $this->setIfExists('updated_at', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
        if (!is_null($this->container['rate_limit']) && ($this->container['rate_limit'] < 0)) {
            $invalidProperties[] = "invalid value for 'rate_limit', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['uid']) && (mb_strlen($this->container['uid']) > 256)) {
            $invalidProperties[] = "invalid value for 'uid', the character length must be smaller than or equal to 256.";
        }

        if (!is_null($this->container['uid']) && (mb_strlen($this->container['uid']) < 1)) {
            $invalidProperties[] = "invalid value for 'uid', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['uid']) && !preg_match("/^[a-zA-Z0-9\\-_.]+$/", $this->container['uid'])) {
            $invalidProperties[] = "invalid value for 'uid', must be conform to the pattern /^[a-zA-Z0-9\\-_.]+$/.";
        }

        if ($this->container['url'] === null) {
            $invalidProperties[] = "'url' can't be null";
        }
        if ((mb_strlen($this->container['url']) > 65536)) {
            $invalidProperties[] = "invalid value for 'url', the character length must be smaller than or equal to 65536.";
        }

        if ((mb_strlen($this->container['url']) < 1)) {
            $invalidProperties[] = "invalid value for 'url', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['version'] === null) {
            $invalidProperties[] = "'version' can't be null";
        }
        if (($this->container['version'] < 1)) {
            $invalidProperties[] = "invalid value for 'version', must be bigger than or equal to 1.";
        }

        if ($this->container['created_at'] === null) {
            $invalidProperties[] = "'created_at' can't be null";
        }
        if ($this->container['updated_at'] === null) {
            $invalidProperties[] = "'updated_at' can't be null";
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
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id The ep's ID
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets status
     *
     * @return \Svix\ApiClient\Model\MessageStatus
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \Svix\ApiClient\Model\MessageStatus $status status
     *
     * @return self
     */
    public function setStatus($status)
    {
        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets next_attempt
     *
     * @return \DateTime|null
     */
    public function getNextAttempt()
    {
        return $this->container['next_attempt'];
    }

    /**
     * Sets next_attempt
     *
     * @param \DateTime|null $next_attempt next_attempt
     *
     * @return self
     */
    public function setNextAttempt($next_attempt)
    {
        if (is_null($next_attempt)) {
            throw new \InvalidArgumentException('non-nullable next_attempt cannot be null');
        }
        $this->container['next_attempt'] = $next_attempt;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description An example endpoint name
     *
     * @return self
     */
    public function setDescription($description)
    {
        if (is_null($description)) {
            throw new \InvalidArgumentException('non-nullable description cannot be null');
        }
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets rate_limit
     *
     * @return int|null
     */
    public function getRateLimit()
    {
        return $this->container['rate_limit'];
    }

    /**
     * Sets rate_limit
     *
     * @param int|null $rate_limit rate_limit
     *
     * @return self
     */
    public function setRateLimit($rate_limit)
    {
        if (is_null($rate_limit)) {
            throw new \InvalidArgumentException('non-nullable rate_limit cannot be null');
        }

        if (($rate_limit < 0)) {
            throw new \InvalidArgumentException('invalid value for $rate_limit when calling MessageEndpointOut., must be bigger than or equal to 0.');
        }

        $this->container['rate_limit'] = $rate_limit;

        return $this;
    }

    /**
     * Gets uid
     *
     * @return string|null
     */
    public function getUid()
    {
        return $this->container['uid'];
    }

    /**
     * Sets uid
     *
     * @param string|null $uid Optional unique identifier for the endpoint
     *
     * @return self
     */
    public function setUid($uid)
    {
        if (is_null($uid)) {
            throw new \InvalidArgumentException('non-nullable uid cannot be null');
        }
        if ((mb_strlen($uid) > 256)) {
            throw new \InvalidArgumentException('invalid length for $uid when calling MessageEndpointOut., must be smaller than or equal to 256.');
        }
        if ((mb_strlen($uid) < 1)) {
            throw new \InvalidArgumentException('invalid length for $uid when calling MessageEndpointOut., must be bigger than or equal to 1.');
        }
        if ((!preg_match("/^[a-zA-Z0-9\\-_.]+$/", ObjectSerializer::toString($uid)))) {
            throw new \InvalidArgumentException("invalid value for \$uid when calling MessageEndpointOut., must conform to the pattern /^[a-zA-Z0-9\\-_.]+$/.");
        }

        $this->container['uid'] = $uid;

        return $this;
    }

    /**
     * Gets url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string $url url
     *
     * @return self
     */
    public function setUrl($url)
    {
        if (is_null($url)) {
            throw new \InvalidArgumentException('non-nullable url cannot be null');
        }
        if ((mb_strlen($url) > 65536)) {
            throw new \InvalidArgumentException('invalid length for $url when calling MessageEndpointOut., must be smaller than or equal to 65536.');
        }
        if ((mb_strlen($url) < 1)) {
            throw new \InvalidArgumentException('invalid length for $url when calling MessageEndpointOut., must be bigger than or equal to 1.');
        }

        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets version
     *
     * @return int
     * @deprecated
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     *
     * @param int $version version
     *
     * @return self
     * @deprecated
     */
    public function setVersion($version)
    {
        if (is_null($version)) {
            throw new \InvalidArgumentException('non-nullable version cannot be null');
        }

        if (($version < 1)) {
            throw new \InvalidArgumentException('invalid value for $version when calling MessageEndpointOut., must be bigger than or equal to 1.');
        }

        $this->container['version'] = $version;

        return $this;
    }

    /**
     * Gets disabled
     *
     * @return bool|null
     */
    public function getDisabled()
    {
        return $this->container['disabled'];
    }

    /**
     * Sets disabled
     *
     * @param bool|null $disabled disabled
     *
     * @return self
     */
    public function setDisabled($disabled)
    {
        if (is_null($disabled)) {
            throw new \InvalidArgumentException('non-nullable disabled cannot be null');
        }
        $this->container['disabled'] = $disabled;

        return $this;
    }

    /**
     * Gets filter_types
     *
     * @return string[]|null
     */
    public function getFilterTypes()
    {
        return $this->container['filter_types'];
    }

    /**
     * Sets filter_types
     *
     * @param string[]|null $filter_types filter_types
     *
     * @return self
     */
    public function setFilterTypes($filter_types)
    {
        if (is_null($filter_types)) {
            throw new \InvalidArgumentException('non-nullable filter_types cannot be null');
        }
        $this->container['filter_types'] = $filter_types;

        return $this;
    }

    /**
     * Gets channels
     *
     * @return string[]|null
     */
    public function getChannels()
    {
        return $this->container['channels'];
    }

    /**
     * Sets channels
     *
     * @param string[]|null $channels channels
     *
     * @return self
     */
    public function setChannels($channels)
    {
        if (is_null($channels)) {
            throw new \InvalidArgumentException('non-nullable channels cannot be null');
        }
        $this->container['channels'] = $channels;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime $created_at created_at
     *
     * @return self
     */
    public function setCreatedAt($created_at)
    {
        if (is_null($created_at)) {
            throw new \InvalidArgumentException('non-nullable created_at cannot be null');
        }
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets updated_at
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param \DateTime $updated_at updated_at
     *
     * @return self
     */
    public function setUpdatedAt($updated_at)
    {
        if (is_null($updated_at)) {
            throw new \InvalidArgumentException('non-nullable updated_at cannot be null');
        }
        $this->container['updated_at'] = $updated_at;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
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
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


