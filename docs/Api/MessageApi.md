# Svix\ApiClient\MessageApi

All URIs are relative to https://api.eu.svix.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**v1MessageCreate()**](MessageApi.md#v1MessageCreate) | **POST** /api/v1/app/{app_id}/msg/ | Create Message |
| [**v1MessageExpungeContent()**](MessageApi.md#v1MessageExpungeContent) | **DELETE** /api/v1/app/{app_id}/msg/{msg_id}/content/ | Delete message payload |
| [**v1MessageGet()**](MessageApi.md#v1MessageGet) | **GET** /api/v1/app/{app_id}/msg/{msg_id}/ | Get Message |
| [**v1MessageList()**](MessageApi.md#v1MessageList) | **GET** /api/v1/app/{app_id}/msg/ | List Messages |


## `v1MessageCreate()`

```php
v1MessageCreate($app_id, $message_in, $with_content, $idempotency_key): \Svix\ApiClient\Model\MessageOut
```

Create Message

Creates a new message and dispatches it to all of the application's endpoints.  The `eventId` is an optional custom unique ID. It's verified to be unique only up to a day, after that no verification will be made. If a message with the same `eventId` already exists for any application in your environment, a 409 conflict error will be returned.  The `eventType` indicates the type and schema of the event. All messages of a certain `eventType` are expected to have the same schema. Endpoints can choose to only listen to specific event types. Messages can also have `channels`, which similar to event types let endpoints filter by them. Unlike event types, messages can have multiple channels, and channels don't imply a specific message content or schema.  The `payload` property is the webhook's body (the actual webhook message). Svix supports payload sizes of up to ~350kb, though it's generally a good idea to keep webhook payloads small, probably no larger than 40kb.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = Svix\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Svix\ApiClient\Api\MessageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = unique-app-identifier; // string | The app's ID or UID
$message_in = new \Svix\ApiClient\Model\MessageIn(); // \Svix\ApiClient\Model\MessageIn
$with_content = true; // bool | When `true` message payloads are included in the response
$idempotency_key = 'idempotency_key_example'; // string | The request's idempotency key

try {
    $result = $apiInstance->v1MessageCreate($app_id, $message_in, $with_content, $idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageApi->v1MessageCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_id** | **string**| The app&#39;s ID or UID | |
| **message_in** | [**\Svix\ApiClient\Model\MessageIn**](../Model/MessageIn.md)|  | |
| **with_content** | **bool**| When &#x60;true&#x60; message payloads are included in the response | [optional] [default to true] |
| **idempotency_key** | **string**| The request&#39;s idempotency key | [optional] |

### Return type

[**\Svix\ApiClient\Model\MessageOut**](../Model/MessageOut.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1MessageExpungeContent()`

```php
v1MessageExpungeContent($app_id, $msg_id)
```

Delete message payload

Delete the given message's payload. Useful in cases when a message was accidentally sent with sensitive content.  The message can't be replayed or resent once its payload has been deleted or expired.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = Svix\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Svix\ApiClient\Api\MessageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = unique-app-identifier; // string | The app's ID or UID
$msg_id = unique-msg-identifier; // string | The msg's ID or UID

try {
    $apiInstance->v1MessageExpungeContent($app_id, $msg_id);
} catch (Exception $e) {
    echo 'Exception when calling MessageApi->v1MessageExpungeContent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_id** | **string**| The app&#39;s ID or UID | |
| **msg_id** | **string**| The msg&#39;s ID or UID | |

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

## `v1MessageGet()`

```php
v1MessageGet($app_id, $msg_id, $with_content): \Svix\ApiClient\Model\MessageOut
```

Get Message

Get a message by its ID or eventID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = Svix\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Svix\ApiClient\Api\MessageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = unique-app-identifier; // string | The app's ID or UID
$msg_id = unique-msg-identifier; // string | The msg's ID or UID
$with_content = true; // bool | When `true` message payloads are included in the response

try {
    $result = $apiInstance->v1MessageGet($app_id, $msg_id, $with_content);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageApi->v1MessageGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_id** | **string**| The app&#39;s ID or UID | |
| **msg_id** | **string**| The msg&#39;s ID or UID | |
| **with_content** | **bool**| When &#x60;true&#x60; message payloads are included in the response | [optional] [default to true] |

### Return type

[**\Svix\ApiClient\Model\MessageOut**](../Model/MessageOut.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1MessageList()`

```php
v1MessageList($app_id, $limit, $iterator, $channel, $before, $after, $with_content, $event_types): \Svix\ApiClient\Model\ListResponseMessageOut
```

List Messages

List all of the application's messages.  The `before` and `after` parameters let you filter all items created before or after a certain date. These can be used alongside an iterator to paginate over results within a certain window.  Note that by default this endpoint is limited to retrieving 90 days' worth of data relative to now or, if an iterator is provided, 90 days before/after the time indicated by the iterator ID. If you require data beyond those time ranges, you will need to explicitly set the `before` or `after` parameter as appropriate.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = Svix\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Svix\ApiClient\Api\MessageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = unique-app-identifier; // string | The app's ID or UID
$limit = 56; // int | Limit the number of returned items
$iterator = msg_1srOrx2ZWZBpBUvZwXKQmoEYga2; // string | The iterator returned from a prior invocation
$channel = project_1337; // string | Filter response based on the channel
$before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only include items created before a certain date
$after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only include items created after a certain date
$with_content = true; // bool | When `true` message payloads are included in the response
$event_types = array('event_types_example'); // string[] | Filter response based on the event type

try {
    $result = $apiInstance->v1MessageList($app_id, $limit, $iterator, $channel, $before, $after, $with_content, $event_types);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageApi->v1MessageList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_id** | **string**| The app&#39;s ID or UID | |
| **limit** | **int**| Limit the number of returned items | [optional] |
| **iterator** | **string**| The iterator returned from a prior invocation | [optional] |
| **channel** | **string**| Filter response based on the channel | [optional] |
| **before** | **\DateTime**| Only include items created before a certain date | [optional] |
| **after** | **\DateTime**| Only include items created after a certain date | [optional] |
| **with_content** | **bool**| When &#x60;true&#x60; message payloads are included in the response | [optional] [default to true] |
| **event_types** | [**string[]**](../Model/string.md)| Filter response based on the event type | [optional] |

### Return type

[**\Svix\ApiClient\Model\ListResponseMessageOut**](../Model/ListResponseMessageOut.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
