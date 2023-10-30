<?php
/**
 * TemplatePatch
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
 * TemplatePatch Class Doc Comment
 *
 * @category Class
 * @package  Svix\ApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class TemplatePatch implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'TemplatePatch';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'logo' => 'string',
        'description' => 'string',
        'kind' => '\Svix\ApiClient\Model\TransformationTemplateKind',
        'instructions' => 'string',
        'instructions_link' => 'string',
        'filter_types' => 'string[]',
        'transformation' => 'string',
        'feature_flag' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'name' => null,
        'logo' => 'uri',
        'description' => null,
        'kind' => null,
        'instructions' => null,
        'instructions_link' => 'uri',
        'filter_types' => null,
        'transformation' => null,
        'feature_flag' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'name' => false,
		'logo' => false,
		'description' => false,
		'kind' => false,
		'instructions' => false,
		'instructions_link' => false,
		'filter_types' => false,
		'transformation' => false,
		'feature_flag' => false
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
        'name' => 'name',
        'logo' => 'logo',
        'description' => 'description',
        'kind' => 'kind',
        'instructions' => 'instructions',
        'instructions_link' => 'instructionsLink',
        'filter_types' => 'filterTypes',
        'transformation' => 'transformation',
        'feature_flag' => 'featureFlag'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'logo' => 'setLogo',
        'description' => 'setDescription',
        'kind' => 'setKind',
        'instructions' => 'setInstructions',
        'instructions_link' => 'setInstructionsLink',
        'filter_types' => 'setFilterTypes',
        'transformation' => 'setTransformation',
        'feature_flag' => 'setFeatureFlag'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'logo' => 'getLogo',
        'description' => 'getDescription',
        'kind' => 'getKind',
        'instructions' => 'getInstructions',
        'instructions_link' => 'getInstructionsLink',
        'filter_types' => 'getFilterTypes',
        'transformation' => 'getTransformation',
        'feature_flag' => 'getFeatureFlag'
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
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('logo', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('kind', $data ?? [], null);
        $this->setIfExists('instructions', $data ?? [], null);
        $this->setIfExists('instructions_link', $data ?? [], null);
        $this->setIfExists('filter_types', $data ?? [], null);
        $this->setIfExists('transformation', $data ?? [], null);
        $this->setIfExists('feature_flag', $data ?? [], null);
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

        if (!is_null($this->container['transformation']) && (mb_strlen($this->container['transformation']) > 51200)) {
            $invalidProperties[] = "invalid value for 'transformation', the character length must be smaller than or equal to 51200.";
        }

        if (!is_null($this->container['transformation']) && (mb_strlen($this->container['transformation']) < 10)) {
            $invalidProperties[] = "invalid value for 'transformation', the character length must be bigger than or equal to 10.";
        }

        if (!is_null($this->container['feature_flag']) && (mb_strlen($this->container['feature_flag']) > 256)) {
            $invalidProperties[] = "invalid value for 'feature_flag', the character length must be smaller than or equal to 256.";
        }

        if (!is_null($this->container['feature_flag']) && !preg_match("/^[a-zA-Z0-9\\-_.]+$/", $this->container['feature_flag'])) {
            $invalidProperties[] = "invalid value for 'feature_flag', must be conform to the pattern /^[a-zA-Z0-9\\-_.]+$/.";
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
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name name
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets logo
     *
     * @return string|null
     */
    public function getLogo()
    {
        return $this->container['logo'];
    }

    /**
     * Sets logo
     *
     * @param string|null $logo logo
     *
     * @return self
     */
    public function setLogo($logo)
    {
        if (is_null($logo)) {
            throw new \InvalidArgumentException('non-nullable logo cannot be null');
        }
        $this->container['logo'] = $logo;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description description
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
     * Gets kind
     *
     * @return \Svix\ApiClient\Model\TransformationTemplateKind|null
     */
    public function getKind()
    {
        return $this->container['kind'];
    }

    /**
     * Sets kind
     *
     * @param \Svix\ApiClient\Model\TransformationTemplateKind|null $kind kind
     *
     * @return self
     */
    public function setKind($kind)
    {
        if (is_null($kind)) {
            throw new \InvalidArgumentException('non-nullable kind cannot be null');
        }
        $this->container['kind'] = $kind;

        return $this;
    }

    /**
     * Gets instructions
     *
     * @return string|null
     */
    public function getInstructions()
    {
        return $this->container['instructions'];
    }

    /**
     * Sets instructions
     *
     * @param string|null $instructions instructions
     *
     * @return self
     */
    public function setInstructions($instructions)
    {
        if (is_null($instructions)) {
            throw new \InvalidArgumentException('non-nullable instructions cannot be null');
        }
        $this->container['instructions'] = $instructions;

        return $this;
    }

    /**
     * Gets instructions_link
     *
     * @return string|null
     */
    public function getInstructionsLink()
    {
        return $this->container['instructions_link'];
    }

    /**
     * Sets instructions_link
     *
     * @param string|null $instructions_link instructions_link
     *
     * @return self
     */
    public function setInstructionsLink($instructions_link)
    {
        if (is_null($instructions_link)) {
            throw new \InvalidArgumentException('non-nullable instructions_link cannot be null');
        }
        $this->container['instructions_link'] = $instructions_link;

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
     * Gets transformation
     *
     * @return string|null
     */
    public function getTransformation()
    {
        return $this->container['transformation'];
    }

    /**
     * Sets transformation
     *
     * @param string|null $transformation transformation
     *
     * @return self
     */
    public function setTransformation($transformation)
    {
        if (is_null($transformation)) {
            throw new \InvalidArgumentException('non-nullable transformation cannot be null');
        }
        if ((mb_strlen($transformation) > 51200)) {
            throw new \InvalidArgumentException('invalid length for $transformation when calling TemplatePatch., must be smaller than or equal to 51200.');
        }
        if ((mb_strlen($transformation) < 10)) {
            throw new \InvalidArgumentException('invalid length for $transformation when calling TemplatePatch., must be bigger than or equal to 10.');
        }

        $this->container['transformation'] = $transformation;

        return $this;
    }

    /**
     * Gets feature_flag
     *
     * @return string|null
     */
    public function getFeatureFlag()
    {
        return $this->container['feature_flag'];
    }

    /**
     * Sets feature_flag
     *
     * @param string|null $feature_flag feature_flag
     *
     * @return self
     */
    public function setFeatureFlag($feature_flag)
    {
        if (is_null($feature_flag)) {
            throw new \InvalidArgumentException('non-nullable feature_flag cannot be null');
        }
        if ((mb_strlen($feature_flag) > 256)) {
            throw new \InvalidArgumentException('invalid length for $feature_flag when calling TemplatePatch., must be smaller than or equal to 256.');
        }
        if ((!preg_match("/^[a-zA-Z0-9\\-_.]+$/", ObjectSerializer::toString($feature_flag)))) {
            throw new \InvalidArgumentException("invalid value for \$feature_flag when calling TemplatePatch., must conform to the pattern /^[a-zA-Z0-9\\-_.]+$/.");
        }

        $this->container['feature_flag'] = $feature_flag;

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


