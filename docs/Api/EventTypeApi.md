# Svix\ApiClient\EventTypeApi

All URIs are relative to https://api.eu.svix.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**v1EventTypeCreate()**](EventTypeApi.md#v1EventTypeCreate) | **POST** /api/v1/event-type/ | Create Event Type |
| [**v1EventTypeDelete()**](EventTypeApi.md#v1EventTypeDelete) | **DELETE** /api/v1/event-type/{event_type_name}/ | Delete Event Type |
| [**v1EventTypeGet()**](EventTypeApi.md#v1EventTypeGet) | **GET** /api/v1/event-type/{event_type_name}/ | Get Event Type |
| [**v1EventTypeImportOpenapi()**](EventTypeApi.md#v1EventTypeImportOpenapi) | **POST** /api/v1/event-type/import/openapi/ | Event Type Import From Openapi |
| [**v1EventTypeList()**](EventTypeApi.md#v1EventTypeList) | **GET** /api/v1/event-type/ | List Event Types |
| [**v1EventTypePatch()**](EventTypeApi.md#v1EventTypePatch) | **PATCH** /api/v1/event-type/{event_type_name}/ | Patch Event Type |
| [**v1EventTypeUpdate()**](EventTypeApi.md#v1EventTypeUpdate) | **PUT** /api/v1/event-type/{event_type_name}/ | Update Event Type |


## `v1EventTypeCreate()`

```php
v1EventTypeCreate($event_type_in, $idempotency_key): \Svix\ApiClient\Model\EventTypeOut
```

Create Event Type

Create new or unarchive existing event type.  Unarchiving an event type will allow endpoints to filter on it and messages to be sent with it. Endpoints filtering on the event type before archival will continue to filter on it. This operation does not preserve the description and schemas.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = Svix\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Svix\ApiClient\Api\EventTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_type_in = new \Svix\ApiClient\Model\EventTypeIn(); // \Svix\ApiClient\Model\EventTypeIn
$idempotency_key = 'idempotency_key_example'; // string | The request's idempotency key

try {
    $result = $apiInstance->v1EventTypeCreate($event_type_in, $idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventTypeApi->v1EventTypeCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **event_type_in** | [**\Svix\ApiClient\Model\EventTypeIn**](../Model/EventTypeIn.md)|  | |
| **idempotency_key** | **string**| The request&#39;s idempotency key | [optional] |

### Return type

[**\Svix\ApiClient\Model\EventTypeOut**](../Model/EventTypeOut.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1EventTypeDelete()`

```php
v1EventTypeDelete($event_type_name, $expunge)
```

Delete Event Type

Archive an event type.  Endpoints already configured to filter on an event type will continue to do so after archival. However, new messages can not be sent with it and endpoints can not filter on it. An event type can be unarchived with the [create operation](#operation/create_event_type_api_v1_event_type__post).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = Svix\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Svix\ApiClient\Api\EventTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_type_name = user.signup; // string | The event type's name
$expunge = false; // bool | By default event types are archived when \"deleted\". Passing this to `true` deletes them entirely.

try {
    $apiInstance->v1EventTypeDelete($event_type_name, $expunge);
} catch (Exception $e) {
    echo 'Exception when calling EventTypeApi->v1EventTypeDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **event_type_name** | **string**| The event type&#39;s name | |
| **expunge** | **bool**| By default event types are archived when \&quot;deleted\&quot;. Passing this to &#x60;true&#x60; deletes them entirely. | [optional] [default to false] |

### Return type

void (empty response body)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1EventTypeGet()`

```php
v1EventTypeGet($event_type_name): \Svix\ApiClient\Model\EventTypeOut
```

Get Event Type

Get an event type.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = Svix\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Svix\ApiClient\Api\EventTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_type_name = user.signup; // string | The event type's name

try {
    $result = $apiInstance->v1EventTypeGet($event_type_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventTypeApi->v1EventTypeGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **event_type_name** | **string**| The event type&#39;s name | |

### Return type

[**\Svix\ApiClient\Model\EventTypeOut**](../Model/EventTypeOut.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1EventTypeImportOpenapi()`

```php
v1EventTypeImportOpenapi($event_type_import_open_api_in, $idempotency_key): \Svix\ApiClient\Model\EventTypeImportOpenApiOut
```

Event Type Import From Openapi

Given an OpenAPI spec, create new or update existing event types. If an existing `archived` event type is updated, it will be unarchvied.  The importer will convert all webhooks found in the either the `webhooks` or `x-webhooks` top-level.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = Svix\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Svix\ApiClient\Api\EventTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_type_import_open_api_in = new \Svix\ApiClient\Model\EventTypeImportOpenApiIn(); // \Svix\ApiClient\Model\EventTypeImportOpenApiIn | Import a list of event types from webhooks defined in an OpenAPI spec.  The OpenAPI spec can be specified as either `spec` given the spec as a JSON object, or as `specRaw` (a `string`) which will be parsed as YAML or JSON by the server. Sending neither or both is invalid, resulting in a `400` **Bad Request**.
$idempotency_key = 'idempotency_key_example'; // string | The request's idempotency key

try {
    $result = $apiInstance->v1EventTypeImportOpenapi($event_type_import_open_api_in, $idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventTypeApi->v1EventTypeImportOpenapi: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **event_type_import_open_api_in** | [**\Svix\ApiClient\Model\EventTypeImportOpenApiIn**](../Model/EventTypeImportOpenApiIn.md)| Import a list of event types from webhooks defined in an OpenAPI spec.  The OpenAPI spec can be specified as either &#x60;spec&#x60; given the spec as a JSON object, or as &#x60;specRaw&#x60; (a &#x60;string&#x60;) which will be parsed as YAML or JSON by the server. Sending neither or both is invalid, resulting in a &#x60;400&#x60; **Bad Request**. | |
| **idempotency_key** | **string**| The request&#39;s idempotency key | [optional] |

### Return type

[**\Svix\ApiClient\Model\EventTypeImportOpenApiOut**](../Model/EventTypeImportOpenApiOut.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1EventTypeList()`

```php
v1EventTypeList($limit, $iterator, $order, $include_archived, $with_content): \Svix\ApiClient\Model\ListResponseEventTypeOut
```

List Event Types

Return the list of event types.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = Svix\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Svix\ApiClient\Api\EventTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int | Limit the number of returned items
$iterator = user.signup; // string | The iterator returned from a prior invocation
$order = new \Svix\ApiClient\Model\Ordering(); // Ordering | The sorting order of the returned items
$include_archived = false; // bool | When `true` archived (deleted but not expunged) items are included in the response
$with_content = false; // bool | When `true` the full item (including the schema) is included in the response

try {
    $result = $apiInstance->v1EventTypeList($limit, $iterator, $order, $include_archived, $with_content);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventTypeApi->v1EventTypeList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| Limit the number of returned items | [optional] |
| **iterator** | **string**| The iterator returned from a prior invocation | [optional] |
| **order** | [**Ordering**](../Model/.md)| The sorting order of the returned items | [optional] |
| **include_archived** | **bool**| When &#x60;true&#x60; archived (deleted but not expunged) items are included in the response | [optional] [default to false] |
| **with_content** | **bool**| When &#x60;true&#x60; the full item (including the schema) is included in the response | [optional] [default to false] |

### Return type

[**\Svix\ApiClient\Model\ListResponseEventTypeOut**](../Model/ListResponseEventTypeOut.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1EventTypePatch()`

```php
v1EventTypePatch($event_type_name, $event_type_patch): \Svix\ApiClient\Model\EventTypeOut
```

Patch Event Type

Partially update an event type.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = Svix\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Svix\ApiClient\Api\EventTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_type_name = user.signup; // string | The event type's name
$event_type_patch = new \Svix\ApiClient\Model\EventTypePatch(); // \Svix\ApiClient\Model\EventTypePatch

try {
    $result = $apiInstance->v1EventTypePatch($event_type_name, $event_type_patch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventTypeApi->v1EventTypePatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **event_type_name** | **string**| The event type&#39;s name | |
| **event_type_patch** | [**\Svix\ApiClient\Model\EventTypePatch**](../Model/EventTypePatch.md)|  | |

### Return type

[**\Svix\ApiClient\Model\EventTypeOut**](../Model/EventTypeOut.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1EventTypeUpdate()`

```php
v1EventTypeUpdate($event_type_name, $event_type_update): \Svix\ApiClient\Model\EventTypeOut
```

Update Event Type

Update an event type.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = Svix\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Svix\ApiClient\Api\EventTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_type_name = user.signup; // string | The event type's name
$event_type_update = new \Svix\ApiClient\Model\EventTypeUpdate(); // \Svix\ApiClient\Model\EventTypeUpdate

try {
    $result = $apiInstance->v1EventTypeUpdate($event_type_name, $event_type_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventTypeApi->v1EventTypeUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **event_type_name** | **string**| The event type&#39;s name | |
| **event_type_update** | [**\Svix\ApiClient\Model\EventTypeUpdate**](../Model/EventTypeUpdate.md)|  | |

### Return type

[**\Svix\ApiClient\Model\EventTypeOut**](../Model/EventTypeOut.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
