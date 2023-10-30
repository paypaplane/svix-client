# Svix\ApiClient\MessageAttemptApi

All URIs are relative to https://api.eu.svix.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**v1MessageAttemptExpungeContent()**](MessageAttemptApi.md#v1MessageAttemptExpungeContent) | **DELETE** /api/v1/app/{app_id}/msg/{msg_id}/attempt/{attempt_id}/content/ | Delete attempt response body |
| [**v1MessageAttemptGet()**](MessageAttemptApi.md#v1MessageAttemptGet) | **GET** /api/v1/app/{app_id}/msg/{msg_id}/attempt/{attempt_id}/ | Get Attempt |
| [**v1MessageAttemptListAttemptedDestinations()**](MessageAttemptApi.md#v1MessageAttemptListAttemptedDestinations) | **GET** /api/v1/app/{app_id}/msg/{msg_id}/endpoint/ | List Attempted Destinations |
| [**v1MessageAttemptListAttemptedMessages()**](MessageAttemptApi.md#v1MessageAttemptListAttemptedMessages) | **GET** /api/v1/app/{app_id}/endpoint/{endpoint_id}/msg/ | List Attempted Messages |
| [**v1MessageAttemptListByEndpoint()**](MessageAttemptApi.md#v1MessageAttemptListByEndpoint) | **GET** /api/v1/app/{app_id}/attempt/endpoint/{endpoint_id}/ | List Attempts By Endpoint |
| [**v1MessageAttemptListByEndpointDeprecated()**](MessageAttemptApi.md#v1MessageAttemptListByEndpointDeprecated) | **GET** /api/v1/app/{app_id}/msg/{msg_id}/endpoint/{endpoint_id}/attempt/ | List Attempts For Endpoint |
| [**v1MessageAttemptListByMsg()**](MessageAttemptApi.md#v1MessageAttemptListByMsg) | **GET** /api/v1/app/{app_id}/attempt/msg/{msg_id}/ | List Attempts By Msg |
| [**v1MessageAttemptListByMsgDeprecated()**](MessageAttemptApi.md#v1MessageAttemptListByMsgDeprecated) | **GET** /api/v1/app/{app_id}/msg/{msg_id}/attempt/ | List Attempts |
| [**v1MessageAttemptResend()**](MessageAttemptApi.md#v1MessageAttemptResend) | **POST** /api/v1/app/{app_id}/msg/{msg_id}/endpoint/{endpoint_id}/resend/ | Resend Webhook |


## `v1MessageAttemptExpungeContent()`

```php
v1MessageAttemptExpungeContent($app_id, $msg_id, $attempt_id)
```

Delete attempt response body

Deletes the given attempt's response body. Useful when an endpoint accidentally returned sensitive content.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = Svix\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Svix\ApiClient\Api\MessageAttemptApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = unique-app-identifier; // string | The app's ID or UID
$msg_id = unique-msg-identifier; // string | The msg's ID or UID
$attempt_id = atmpt_1srOrx2ZWZBpBUvZwXKQmoEYga2; // string | The attempt's ID

try {
    $apiInstance->v1MessageAttemptExpungeContent($app_id, $msg_id, $attempt_id);
} catch (Exception $e) {
    echo 'Exception when calling MessageAttemptApi->v1MessageAttemptExpungeContent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_id** | **string**| The app&#39;s ID or UID | |
| **msg_id** | **string**| The msg&#39;s ID or UID | |
| **attempt_id** | **string**| The attempt&#39;s ID | |

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

## `v1MessageAttemptGet()`

```php
v1MessageAttemptGet($app_id, $msg_id, $attempt_id): \Svix\ApiClient\Model\MessageAttemptOut
```

Get Attempt

`msg_id`: Use a message id or a message `eventId`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = Svix\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Svix\ApiClient\Api\MessageAttemptApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = unique-app-identifier; // string | The app's ID or UID
$msg_id = unique-msg-identifier; // string | The msg's ID or UID
$attempt_id = atmpt_1srOrx2ZWZBpBUvZwXKQmoEYga2; // string | The attempt's ID

try {
    $result = $apiInstance->v1MessageAttemptGet($app_id, $msg_id, $attempt_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageAttemptApi->v1MessageAttemptGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_id** | **string**| The app&#39;s ID or UID | |
| **msg_id** | **string**| The msg&#39;s ID or UID | |
| **attempt_id** | **string**| The attempt&#39;s ID | |

### Return type

[**\Svix\ApiClient\Model\MessageAttemptOut**](../Model/MessageAttemptOut.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1MessageAttemptListAttemptedDestinations()`

```php
v1MessageAttemptListAttemptedDestinations($app_id, $msg_id, $limit, $iterator): \Svix\ApiClient\Model\ListResponseMessageEndpointOut
```

List Attempted Destinations

List endpoints attempted by a given message. Additionally includes metadata about the latest message attempt. By default, endpoints are listed in ascending order by ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = Svix\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Svix\ApiClient\Api\MessageAttemptApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = unique-app-identifier; // string | The app's ID or UID
$msg_id = unique-msg-identifier; // string | The msg's ID or UID
$limit = 56; // int | Limit the number of returned items
$iterator = ep_1srOrx2ZWZBpBUvZwXKQmoEYga2; // string | The iterator returned from a prior invocation

try {
    $result = $apiInstance->v1MessageAttemptListAttemptedDestinations($app_id, $msg_id, $limit, $iterator);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageAttemptApi->v1MessageAttemptListAttemptedDestinations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_id** | **string**| The app&#39;s ID or UID | |
| **msg_id** | **string**| The msg&#39;s ID or UID | |
| **limit** | **int**| Limit the number of returned items | [optional] |
| **iterator** | **string**| The iterator returned from a prior invocation | [optional] |

### Return type

[**\Svix\ApiClient\Model\ListResponseMessageEndpointOut**](../Model/ListResponseMessageEndpointOut.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1MessageAttemptListAttemptedMessages()`

```php
v1MessageAttemptListAttemptedMessages($app_id, $endpoint_id, $limit, $iterator, $channel, $status, $before, $after, $with_content, $event_types): \Svix\ApiClient\Model\ListResponseEndpointMessageOut
```

List Attempted Messages

List messages for a particular endpoint. Additionally includes metadata about the latest message attempt.  The `before` parameter lets you filter all items created before a certain date and is ignored if an iterator is passed.  Note that by default this endpoint is limited to retrieving 90 days' worth of data relative to now or, if an iterator is provided, 90 days before/after the time indicated by the iterator ID. If you require data beyond those time ranges, you will need to explicitly set the `before` or `after` parameter as appropriate.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = Svix\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Svix\ApiClient\Api\MessageAttemptApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = unique-app-identifier; // string | The app's ID or UID
$endpoint_id = unique-ep-identifier; // string | The ep's ID or UID
$limit = 56; // int | Limit the number of returned items
$iterator = msg_1srOrx2ZWZBpBUvZwXKQmoEYga2; // string | The iterator returned from a prior invocation
$channel = project_1337; // string | Filter response based on the channel
$status = new \Svix\ApiClient\Model\MessageStatus(); // MessageStatus | Filter response based on the delivery status
$before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only include items created before a certain date
$after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only include items created after a certain date
$with_content = true; // bool | When `true` message payloads are included in the response
$event_types = array('event_types_example'); // string[] | Filter response based on the event type

try {
    $result = $apiInstance->v1MessageAttemptListAttemptedMessages($app_id, $endpoint_id, $limit, $iterator, $channel, $status, $before, $after, $with_content, $event_types);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageAttemptApi->v1MessageAttemptListAttemptedMessages: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_id** | **string**| The app&#39;s ID or UID | |
| **endpoint_id** | **string**| The ep&#39;s ID or UID | |
| **limit** | **int**| Limit the number of returned items | [optional] |
| **iterator** | **string**| The iterator returned from a prior invocation | [optional] |
| **channel** | **string**| Filter response based on the channel | [optional] |
| **status** | [**MessageStatus**](../Model/.md)| Filter response based on the delivery status | [optional] |
| **before** | **\DateTime**| Only include items created before a certain date | [optional] |
| **after** | **\DateTime**| Only include items created after a certain date | [optional] |
| **with_content** | **bool**| When &#x60;true&#x60; message payloads are included in the response | [optional] [default to true] |
| **event_types** | [**string[]**](../Model/string.md)| Filter response based on the event type | [optional] |

### Return type

[**\Svix\ApiClient\Model\ListResponseEndpointMessageOut**](../Model/ListResponseEndpointMessageOut.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1MessageAttemptListByEndpoint()`

```php
v1MessageAttemptListByEndpoint($app_id, $endpoint_id, $limit, $iterator, $status, $status_code_class, $channel, $before, $after, $with_content, $event_types): \Svix\ApiClient\Model\ListResponseMessageAttemptOut
```

List Attempts By Endpoint

List attempts by endpoint id  Note that by default this endpoint is limited to retrieving 90 days' worth of data relative to now or, if an iterator is provided, 90 days before/after the time indicated by the iterator ID. If you require data beyond those time ranges, you will need to explicitly set the `before` or `after` parameter as appropriate.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = Svix\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Svix\ApiClient\Api\MessageAttemptApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = unique-app-identifier; // string | The app's ID or UID
$endpoint_id = unique-ep-identifier; // string | The ep's ID or UID
$limit = 56; // int | Limit the number of returned items
$iterator = atmpt_1srOrx2ZWZBpBUvZwXKQmoEYga2; // string | The iterator returned from a prior invocation
$status = new \Svix\ApiClient\Model\MessageStatus(); // MessageStatus | Filter response based on the delivery status
$status_code_class = new \Svix\ApiClient\Model\StatusCodeClass(); // StatusCodeClass | Filter response based on the HTTP status code
$channel = project_1337; // string | Filter response based on the channel
$before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only include items created before a certain date
$after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only include items created after a certain date
$with_content = true; // bool | When `true` attempt content is included in the response
$event_types = array('event_types_example'); // string[] | Filter response based on the event type

try {
    $result = $apiInstance->v1MessageAttemptListByEndpoint($app_id, $endpoint_id, $limit, $iterator, $status, $status_code_class, $channel, $before, $after, $with_content, $event_types);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageAttemptApi->v1MessageAttemptListByEndpoint: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_id** | **string**| The app&#39;s ID or UID | |
| **endpoint_id** | **string**| The ep&#39;s ID or UID | |
| **limit** | **int**| Limit the number of returned items | [optional] |
| **iterator** | **string**| The iterator returned from a prior invocation | [optional] |
| **status** | [**MessageStatus**](../Model/.md)| Filter response based on the delivery status | [optional] |
| **status_code_class** | [**StatusCodeClass**](../Model/.md)| Filter response based on the HTTP status code | [optional] |
| **channel** | **string**| Filter response based on the channel | [optional] |
| **before** | **\DateTime**| Only include items created before a certain date | [optional] |
| **after** | **\DateTime**| Only include items created after a certain date | [optional] |
| **with_content** | **bool**| When &#x60;true&#x60; attempt content is included in the response | [optional] [default to true] |
| **event_types** | [**string[]**](../Model/string.md)| Filter response based on the event type | [optional] |

### Return type

[**\Svix\ApiClient\Model\ListResponseMessageAttemptOut**](../Model/ListResponseMessageAttemptOut.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1MessageAttemptListByEndpointDeprecated()`

```php
v1MessageAttemptListByEndpointDeprecated($app_id, $msg_id, $endpoint_id, $limit, $iterator, $channel, $status, $before, $after, $event_types): \Svix\ApiClient\Model\ListResponseMessageAttemptEndpointOut
```

List Attempts For Endpoint

DEPRECATED: please use list_attempts with endpoint_id as a query parameter instead.  List the message attempts for a particular endpoint.  Returning the endpoint.  The `before` parameter lets you filter all items created before a certain date and is ignored if an iterator is passed.  Note that by default this endpoint is limited to retrieving 90 days' worth of data relative to now or, if an iterator is provided, 90 days before/after the time indicated by the iterator ID. If you require data beyond those time ranges, you will need to explicitly set the `before` or `after` parameter as appropriate.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = Svix\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Svix\ApiClient\Api\MessageAttemptApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = unique-app-identifier; // string | The app's ID or UID
$msg_id = unique-msg-identifier; // string | The msg's ID or UID
$endpoint_id = unique-ep-identifier; // string | The ep's ID or UID
$limit = 56; // int | Limit the number of returned items
$iterator = atmpt_1srOrx2ZWZBpBUvZwXKQmoEYga2; // string | The iterator returned from a prior invocation
$channel = project_1337; // string | Filter response based on the channel
$status = new \Svix\ApiClient\Model\MessageStatus(); // MessageStatus | Filter response based on the delivery status
$before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only include items created before a certain date
$after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only include items created after a certain date
$event_types = array('event_types_example'); // string[] | Filter response based on the event type

try {
    $result = $apiInstance->v1MessageAttemptListByEndpointDeprecated($app_id, $msg_id, $endpoint_id, $limit, $iterator, $channel, $status, $before, $after, $event_types);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageAttemptApi->v1MessageAttemptListByEndpointDeprecated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_id** | **string**| The app&#39;s ID or UID | |
| **msg_id** | **string**| The msg&#39;s ID or UID | |
| **endpoint_id** | **string**| The ep&#39;s ID or UID | |
| **limit** | **int**| Limit the number of returned items | [optional] |
| **iterator** | **string**| The iterator returned from a prior invocation | [optional] |
| **channel** | **string**| Filter response based on the channel | [optional] |
| **status** | [**MessageStatus**](../Model/.md)| Filter response based on the delivery status | [optional] |
| **before** | **\DateTime**| Only include items created before a certain date | [optional] |
| **after** | **\DateTime**| Only include items created after a certain date | [optional] |
| **event_types** | [**string[]**](../Model/string.md)| Filter response based on the event type | [optional] |

### Return type

[**\Svix\ApiClient\Model\ListResponseMessageAttemptEndpointOut**](../Model/ListResponseMessageAttemptEndpointOut.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1MessageAttemptListByMsg()`

```php
v1MessageAttemptListByMsg($app_id, $msg_id, $limit, $iterator, $status, $status_code_class, $channel, $endpoint_id, $before, $after, $with_content, $event_types): \Svix\ApiClient\Model\ListResponseMessageAttemptOut
```

List Attempts By Msg

List attempts by message id  Note that by default this endpoint is limited to retrieving 90 days' worth of data relative to now or, if an iterator is provided, 90 days before/after the time indicated by the iterator ID. If you require data beyond those time ranges, you will need to explicitly set the `before` or `after` parameter as appropriate.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = Svix\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Svix\ApiClient\Api\MessageAttemptApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = unique-app-identifier; // string | The app's ID or UID
$msg_id = unique-msg-identifier; // string | The msg's ID or UID
$limit = 56; // int | Limit the number of returned items
$iterator = atmpt_1srOrx2ZWZBpBUvZwXKQmoEYga2; // string | The iterator returned from a prior invocation
$status = new \Svix\ApiClient\Model\MessageStatus(); // MessageStatus | Filter response based on the delivery status
$status_code_class = new \Svix\ApiClient\Model\StatusCodeClass(); // StatusCodeClass | Filter response based on the HTTP status code
$channel = project_1337; // string | Filter response based on the channel
$endpoint_id = unique-ep-identifier; // string | Filter the attempts based on the attempted endpoint
$before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only include items created before a certain date
$after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only include items created after a certain date
$with_content = true; // bool | When `true` attempt content is included in the response
$event_types = array('event_types_example'); // string[] | Filter response based on the event type

try {
    $result = $apiInstance->v1MessageAttemptListByMsg($app_id, $msg_id, $limit, $iterator, $status, $status_code_class, $channel, $endpoint_id, $before, $after, $with_content, $event_types);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageAttemptApi->v1MessageAttemptListByMsg: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_id** | **string**| The app&#39;s ID or UID | |
| **msg_id** | **string**| The msg&#39;s ID or UID | |
| **limit** | **int**| Limit the number of returned items | [optional] |
| **iterator** | **string**| The iterator returned from a prior invocation | [optional] |
| **status** | [**MessageStatus**](../Model/.md)| Filter response based on the delivery status | [optional] |
| **status_code_class** | [**StatusCodeClass**](../Model/.md)| Filter response based on the HTTP status code | [optional] |
| **channel** | **string**| Filter response based on the channel | [optional] |
| **endpoint_id** | **string**| Filter the attempts based on the attempted endpoint | [optional] |
| **before** | **\DateTime**| Only include items created before a certain date | [optional] |
| **after** | **\DateTime**| Only include items created after a certain date | [optional] |
| **with_content** | **bool**| When &#x60;true&#x60; attempt content is included in the response | [optional] [default to true] |
| **event_types** | [**string[]**](../Model/string.md)| Filter response based on the event type | [optional] |

### Return type

[**\Svix\ApiClient\Model\ListResponseMessageAttemptOut**](../Model/ListResponseMessageAttemptOut.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1MessageAttemptListByMsgDeprecated()`

```php
v1MessageAttemptListByMsgDeprecated($app_id, $msg_id, $limit, $iterator, $endpoint_id, $channel, $status, $before, $after, $status_code_class, $event_types): \Svix\ApiClient\Model\ListResponseMessageAttemptOut
```

List Attempts

Deprecated: Please use \"List Attempts by Endpoint\" and \"List Attempts by Msg\" instead.  Note that by default this endpoint is limited to retrieving 90 days' worth of data relative to now or, if an iterator is provided, 90 days before/after the time indicated by the iterator ID. If you require data beyond those time ranges, you will need to explicitly set the `before` or `after` parameter as appropriate.  `msg_id`: Use a message id or a message `eventId`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = Svix\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Svix\ApiClient\Api\MessageAttemptApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = unique-app-identifier; // string | The app's ID or UID
$msg_id = unique-msg-identifier; // string | The msg's ID or UID
$limit = 56; // int | Limit the number of returned items
$iterator = atmpt_1srOrx2ZWZBpBUvZwXKQmoEYga2; // string | The iterator returned from a prior invocation
$endpoint_id = unique-ep-identifier; // string | Filter the attempts based on the attempted endpoint
$channel = project_1337; // string | Filter response based on the channel
$status = new \Svix\ApiClient\Model\MessageStatus(); // MessageStatus | Filter response based on the delivery status
$before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only include items created before a certain date
$after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only include items created after a certain date
$status_code_class = new \Svix\ApiClient\Model\StatusCodeClass(); // StatusCodeClass | Filter response based on the HTTP status code
$event_types = array('event_types_example'); // string[] | Filter response based on the event type

try {
    $result = $apiInstance->v1MessageAttemptListByMsgDeprecated($app_id, $msg_id, $limit, $iterator, $endpoint_id, $channel, $status, $before, $after, $status_code_class, $event_types);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageAttemptApi->v1MessageAttemptListByMsgDeprecated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_id** | **string**| The app&#39;s ID or UID | |
| **msg_id** | **string**| The msg&#39;s ID or UID | |
| **limit** | **int**| Limit the number of returned items | [optional] |
| **iterator** | **string**| The iterator returned from a prior invocation | [optional] |
| **endpoint_id** | **string**| Filter the attempts based on the attempted endpoint | [optional] |
| **channel** | **string**| Filter response based on the channel | [optional] |
| **status** | [**MessageStatus**](../Model/.md)| Filter response based on the delivery status | [optional] |
| **before** | **\DateTime**| Only include items created before a certain date | [optional] |
| **after** | **\DateTime**| Only include items created after a certain date | [optional] |
| **status_code_class** | [**StatusCodeClass**](../Model/.md)| Filter response based on the HTTP status code | [optional] |
| **event_types** | [**string[]**](../Model/string.md)| Filter response based on the event type | [optional] |

### Return type

[**\Svix\ApiClient\Model\ListResponseMessageAttemptOut**](../Model/ListResponseMessageAttemptOut.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1MessageAttemptResend()`

```php
v1MessageAttemptResend($app_id, $msg_id, $endpoint_id, $idempotency_key)
```

Resend Webhook

Resend a message to the specified endpoint.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = Svix\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Svix\ApiClient\Api\MessageAttemptApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = unique-app-identifier; // string | The app's ID or UID
$msg_id = unique-msg-identifier; // string | The msg's ID or UID
$endpoint_id = unique-ep-identifier; // string | The ep's ID or UID
$idempotency_key = 'idempotency_key_example'; // string | The request's idempotency key

try {
    $apiInstance->v1MessageAttemptResend($app_id, $msg_id, $endpoint_id, $idempotency_key);
} catch (Exception $e) {
    echo 'Exception when calling MessageAttemptApi->v1MessageAttemptResend: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_id** | **string**| The app&#39;s ID or UID | |
| **msg_id** | **string**| The msg&#39;s ID or UID | |
| **endpoint_id** | **string**| The ep&#39;s ID or UID | |
| **idempotency_key** | **string**| The request&#39;s idempotency key | [optional] |

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
