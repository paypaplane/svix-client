# Svix\ApiClient\EndpointApi

All URIs are relative to https://api.eu.svix.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**v1EndpointCreate()**](EndpointApi.md#v1EndpointCreate) | **POST** /api/v1/app/{app_id}/endpoint/ | Create Endpoint |
| [**v1EndpointDelete()**](EndpointApi.md#v1EndpointDelete) | **DELETE** /api/v1/app/{app_id}/endpoint/{endpoint_id}/ | Delete Endpoint |
| [**v1EndpointGet()**](EndpointApi.md#v1EndpointGet) | **GET** /api/v1/app/{app_id}/endpoint/{endpoint_id}/ | Get Endpoint |
| [**v1EndpointGetHeaders()**](EndpointApi.md#v1EndpointGetHeaders) | **GET** /api/v1/app/{app_id}/endpoint/{endpoint_id}/headers/ | Get Endpoint Headers |
| [**v1EndpointGetSecret()**](EndpointApi.md#v1EndpointGetSecret) | **GET** /api/v1/app/{app_id}/endpoint/{endpoint_id}/secret/ | Get Endpoint Secret |
| [**v1EndpointGetStats()**](EndpointApi.md#v1EndpointGetStats) | **GET** /api/v1/app/{app_id}/endpoint/{endpoint_id}/stats/ | Endpoint Stats |
| [**v1EndpointList()**](EndpointApi.md#v1EndpointList) | **GET** /api/v1/app/{app_id}/endpoint/ | List Endpoints |
| [**v1EndpointPatch()**](EndpointApi.md#v1EndpointPatch) | **PATCH** /api/v1/app/{app_id}/endpoint/{endpoint_id}/ | Patch Endpoint |
| [**v1EndpointPatchHeaders()**](EndpointApi.md#v1EndpointPatchHeaders) | **PATCH** /api/v1/app/{app_id}/endpoint/{endpoint_id}/headers/ | Patch Endpoint Headers |
| [**v1EndpointRecover()**](EndpointApi.md#v1EndpointRecover) | **POST** /api/v1/app/{app_id}/endpoint/{endpoint_id}/recover/ | Recover Failed Webhooks |
| [**v1EndpointReplay()**](EndpointApi.md#v1EndpointReplay) | **POST** /api/v1/app/{app_id}/endpoint/{endpoint_id}/replay-missing/ | Replay Missing Webhooks |
| [**v1EndpointRotateSecret()**](EndpointApi.md#v1EndpointRotateSecret) | **POST** /api/v1/app/{app_id}/endpoint/{endpoint_id}/secret/rotate/ | Rotate Endpoint Secret |
| [**v1EndpointSendExample()**](EndpointApi.md#v1EndpointSendExample) | **POST** /api/v1/app/{app_id}/endpoint/{endpoint_id}/send-example/ | Send Event Type Example Message |
| [**v1EndpointTransformationGet()**](EndpointApi.md#v1EndpointTransformationGet) | **GET** /api/v1/app/{app_id}/endpoint/{endpoint_id}/transformation/ | Get Endpoint Transformation |
| [**v1EndpointTransformationPartialUpdate()**](EndpointApi.md#v1EndpointTransformationPartialUpdate) | **PATCH** /api/v1/app/{app_id}/endpoint/{endpoint_id}/transformation/ | Set Endpoint Transformation |
| [**v1EndpointUpdate()**](EndpointApi.md#v1EndpointUpdate) | **PUT** /api/v1/app/{app_id}/endpoint/{endpoint_id}/ | Update Endpoint |
| [**v1EndpointUpdateHeaders()**](EndpointApi.md#v1EndpointUpdateHeaders) | **PUT** /api/v1/app/{app_id}/endpoint/{endpoint_id}/headers/ | Update Endpoint Headers |


## `v1EndpointCreate()`

```php
v1EndpointCreate($app_id, $endpoint_in, $idempotency_key): \Svix\ApiClient\Model\EndpointOut
```

Create Endpoint

Create a new endpoint for the application.  When `secret` is `null` the secret is automatically generated (recommended)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = Svix\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Svix\ApiClient\Api\EndpointApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = unique-app-identifier; // string | The app's ID or UID
$endpoint_in = new \Svix\ApiClient\Model\EndpointIn(); // \Svix\ApiClient\Model\EndpointIn
$idempotency_key = 'idempotency_key_example'; // string | The request's idempotency key

try {
    $result = $apiInstance->v1EndpointCreate($app_id, $endpoint_in, $idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EndpointApi->v1EndpointCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_id** | **string**| The app&#39;s ID or UID | |
| **endpoint_in** | [**\Svix\ApiClient\Model\EndpointIn**](../Model/EndpointIn.md)|  | |
| **idempotency_key** | **string**| The request&#39;s idempotency key | [optional] |

### Return type

[**\Svix\ApiClient\Model\EndpointOut**](../Model/EndpointOut.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1EndpointDelete()`

```php
v1EndpointDelete($app_id, $endpoint_id)
```

Delete Endpoint

Delete an endpoint.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = Svix\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Svix\ApiClient\Api\EndpointApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = unique-app-identifier; // string | The app's ID or UID
$endpoint_id = unique-ep-identifier; // string | The ep's ID or UID

try {
    $apiInstance->v1EndpointDelete($app_id, $endpoint_id);
} catch (Exception $e) {
    echo 'Exception when calling EndpointApi->v1EndpointDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_id** | **string**| The app&#39;s ID or UID | |
| **endpoint_id** | **string**| The ep&#39;s ID or UID | |

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

## `v1EndpointGet()`

```php
v1EndpointGet($app_id, $endpoint_id): \Svix\ApiClient\Model\EndpointOut
```

Get Endpoint

Get an endpoint.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = Svix\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Svix\ApiClient\Api\EndpointApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = unique-app-identifier; // string | The app's ID or UID
$endpoint_id = unique-ep-identifier; // string | The ep's ID or UID

try {
    $result = $apiInstance->v1EndpointGet($app_id, $endpoint_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EndpointApi->v1EndpointGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_id** | **string**| The app&#39;s ID or UID | |
| **endpoint_id** | **string**| The ep&#39;s ID or UID | |

### Return type

[**\Svix\ApiClient\Model\EndpointOut**](../Model/EndpointOut.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1EndpointGetHeaders()`

```php
v1EndpointGetHeaders($app_id, $endpoint_id): \Svix\ApiClient\Model\EndpointHeadersOut
```

Get Endpoint Headers

Get the additional headers to be sent with the webhook

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = Svix\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Svix\ApiClient\Api\EndpointApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = unique-app-identifier; // string | The app's ID or UID
$endpoint_id = unique-ep-identifier; // string | The ep's ID or UID

try {
    $result = $apiInstance->v1EndpointGetHeaders($app_id, $endpoint_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EndpointApi->v1EndpointGetHeaders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_id** | **string**| The app&#39;s ID or UID | |
| **endpoint_id** | **string**| The ep&#39;s ID or UID | |

### Return type

[**\Svix\ApiClient\Model\EndpointHeadersOut**](../Model/EndpointHeadersOut.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1EndpointGetSecret()`

```php
v1EndpointGetSecret($app_id, $endpoint_id): \Svix\ApiClient\Model\EndpointSecretOut
```

Get Endpoint Secret

Get the endpoint's signing secret.  This is used to verify the authenticity of the webhook. For more information please refer to [the consuming webhooks docs](https://docs.svix.com/consuming-webhooks/).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = Svix\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Svix\ApiClient\Api\EndpointApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = unique-app-identifier; // string | The app's ID or UID
$endpoint_id = unique-ep-identifier; // string | The ep's ID or UID

try {
    $result = $apiInstance->v1EndpointGetSecret($app_id, $endpoint_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EndpointApi->v1EndpointGetSecret: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_id** | **string**| The app&#39;s ID or UID | |
| **endpoint_id** | **string**| The ep&#39;s ID or UID | |

### Return type

[**\Svix\ApiClient\Model\EndpointSecretOut**](../Model/EndpointSecretOut.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1EndpointGetStats()`

```php
v1EndpointGetStats($app_id, $endpoint_id, $since, $until): \Svix\ApiClient\Model\EndpointStats
```

Endpoint Stats

Get basic statistics for the endpoint.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = Svix\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Svix\ApiClient\Api\EndpointApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = unique-app-identifier; // string | The app's ID or UID
$endpoint_id = unique-ep-identifier; // string | The ep's ID or UID
$since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter the range to data starting from this date
$until = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter the range to data ending by this date

try {
    $result = $apiInstance->v1EndpointGetStats($app_id, $endpoint_id, $since, $until);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EndpointApi->v1EndpointGetStats: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_id** | **string**| The app&#39;s ID or UID | |
| **endpoint_id** | **string**| The ep&#39;s ID or UID | |
| **since** | **\DateTime**| Filter the range to data starting from this date | [optional] |
| **until** | **\DateTime**| Filter the range to data ending by this date | [optional] |

### Return type

[**\Svix\ApiClient\Model\EndpointStats**](../Model/EndpointStats.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1EndpointList()`

```php
v1EndpointList($app_id, $limit, $iterator, $order): \Svix\ApiClient\Model\ListResponseEndpointOut
```

List Endpoints

List the application's endpoints.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = Svix\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Svix\ApiClient\Api\EndpointApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = unique-app-identifier; // string | The app's ID or UID
$limit = 56; // int | Limit the number of returned items
$iterator = ep_1srOrx2ZWZBpBUvZwXKQmoEYga2; // string | The iterator returned from a prior invocation
$order = new \Svix\ApiClient\Model\Ordering(); // Ordering | The sorting order of the returned items

try {
    $result = $apiInstance->v1EndpointList($app_id, $limit, $iterator, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EndpointApi->v1EndpointList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_id** | **string**| The app&#39;s ID or UID | |
| **limit** | **int**| Limit the number of returned items | [optional] |
| **iterator** | **string**| The iterator returned from a prior invocation | [optional] |
| **order** | [**Ordering**](../Model/.md)| The sorting order of the returned items | [optional] |

### Return type

[**\Svix\ApiClient\Model\ListResponseEndpointOut**](../Model/ListResponseEndpointOut.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1EndpointPatch()`

```php
v1EndpointPatch($app_id, $endpoint_id, $endpoint_patch): \Svix\ApiClient\Model\EndpointOut
```

Patch Endpoint

Partially update an endpoint.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = Svix\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Svix\ApiClient\Api\EndpointApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = unique-app-identifier; // string | The app's ID or UID
$endpoint_id = unique-ep-identifier; // string | The ep's ID or UID
$endpoint_patch = new \Svix\ApiClient\Model\EndpointPatch(); // \Svix\ApiClient\Model\EndpointPatch

try {
    $result = $apiInstance->v1EndpointPatch($app_id, $endpoint_id, $endpoint_patch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EndpointApi->v1EndpointPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_id** | **string**| The app&#39;s ID or UID | |
| **endpoint_id** | **string**| The ep&#39;s ID or UID | |
| **endpoint_patch** | [**\Svix\ApiClient\Model\EndpointPatch**](../Model/EndpointPatch.md)|  | |

### Return type

[**\Svix\ApiClient\Model\EndpointOut**](../Model/EndpointOut.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1EndpointPatchHeaders()`

```php
v1EndpointPatchHeaders($app_id, $endpoint_id, $endpoint_headers_patch_in)
```

Patch Endpoint Headers

Partially set the additional headers to be sent with the webhook

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = Svix\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Svix\ApiClient\Api\EndpointApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = unique-app-identifier; // string | The app's ID or UID
$endpoint_id = unique-ep-identifier; // string | The ep's ID or UID
$endpoint_headers_patch_in = new \Svix\ApiClient\Model\EndpointHeadersPatchIn(); // \Svix\ApiClient\Model\EndpointHeadersPatchIn

try {
    $apiInstance->v1EndpointPatchHeaders($app_id, $endpoint_id, $endpoint_headers_patch_in);
} catch (Exception $e) {
    echo 'Exception when calling EndpointApi->v1EndpointPatchHeaders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_id** | **string**| The app&#39;s ID or UID | |
| **endpoint_id** | **string**| The ep&#39;s ID or UID | |
| **endpoint_headers_patch_in** | [**\Svix\ApiClient\Model\EndpointHeadersPatchIn**](../Model/EndpointHeadersPatchIn.md)|  | |

### Return type

void (empty response body)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1EndpointRecover()`

```php
v1EndpointRecover($app_id, $endpoint_id, $recover_in, $idempotency_key): \Svix\ApiClient\Model\RecoverOut
```

Recover Failed Webhooks

Resend all failed messages since a given time.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = Svix\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Svix\ApiClient\Api\EndpointApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = unique-app-identifier; // string | The app's ID or UID
$endpoint_id = unique-ep-identifier; // string | The ep's ID or UID
$recover_in = new \Svix\ApiClient\Model\RecoverIn(); // \Svix\ApiClient\Model\RecoverIn
$idempotency_key = 'idempotency_key_example'; // string | The request's idempotency key

try {
    $result = $apiInstance->v1EndpointRecover($app_id, $endpoint_id, $recover_in, $idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EndpointApi->v1EndpointRecover: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_id** | **string**| The app&#39;s ID or UID | |
| **endpoint_id** | **string**| The ep&#39;s ID or UID | |
| **recover_in** | [**\Svix\ApiClient\Model\RecoverIn**](../Model/RecoverIn.md)|  | |
| **idempotency_key** | **string**| The request&#39;s idempotency key | [optional] |

### Return type

[**\Svix\ApiClient\Model\RecoverOut**](../Model/RecoverOut.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1EndpointReplay()`

```php
v1EndpointReplay($app_id, $endpoint_id, $replay_in, $idempotency_key): \Svix\ApiClient\Model\ReplayOut
```

Replay Missing Webhooks

Replays messages to the endpoint. Only messages that were created after `since` will be sent. Messages that were previously sent to the endpoint are not resent.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = Svix\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Svix\ApiClient\Api\EndpointApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = unique-app-identifier; // string | The app's ID or UID
$endpoint_id = unique-ep-identifier; // string | The ep's ID or UID
$replay_in = new \Svix\ApiClient\Model\ReplayIn(); // \Svix\ApiClient\Model\ReplayIn
$idempotency_key = 'idempotency_key_example'; // string | The request's idempotency key

try {
    $result = $apiInstance->v1EndpointReplay($app_id, $endpoint_id, $replay_in, $idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EndpointApi->v1EndpointReplay: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_id** | **string**| The app&#39;s ID or UID | |
| **endpoint_id** | **string**| The ep&#39;s ID or UID | |
| **replay_in** | [**\Svix\ApiClient\Model\ReplayIn**](../Model/ReplayIn.md)|  | |
| **idempotency_key** | **string**| The request&#39;s idempotency key | [optional] |

### Return type

[**\Svix\ApiClient\Model\ReplayOut**](../Model/ReplayOut.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1EndpointRotateSecret()`

```php
v1EndpointRotateSecret($app_id, $endpoint_id, $endpoint_secret_rotate_in, $idempotency_key)
```

Rotate Endpoint Secret

Rotates the endpoint's signing secret.  The previous secret will be valid for the next 24 hours.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = Svix\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Svix\ApiClient\Api\EndpointApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = unique-app-identifier; // string | The app's ID or UID
$endpoint_id = unique-ep-identifier; // string | The ep's ID or UID
$endpoint_secret_rotate_in = new \Svix\ApiClient\Model\EndpointSecretRotateIn(); // \Svix\ApiClient\Model\EndpointSecretRotateIn
$idempotency_key = 'idempotency_key_example'; // string | The request's idempotency key

try {
    $apiInstance->v1EndpointRotateSecret($app_id, $endpoint_id, $endpoint_secret_rotate_in, $idempotency_key);
} catch (Exception $e) {
    echo 'Exception when calling EndpointApi->v1EndpointRotateSecret: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_id** | **string**| The app&#39;s ID or UID | |
| **endpoint_id** | **string**| The ep&#39;s ID or UID | |
| **endpoint_secret_rotate_in** | [**\Svix\ApiClient\Model\EndpointSecretRotateIn**](../Model/EndpointSecretRotateIn.md)|  | |
| **idempotency_key** | **string**| The request&#39;s idempotency key | [optional] |

### Return type

void (empty response body)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1EndpointSendExample()`

```php
v1EndpointSendExample($app_id, $endpoint_id, $event_example_in, $idempotency_key): \Svix\ApiClient\Model\MessageOut
```

Send Event Type Example Message

Send an example message for event

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = Svix\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Svix\ApiClient\Api\EndpointApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = unique-app-identifier; // string | The app's ID or UID
$endpoint_id = unique-ep-identifier; // string | The ep's ID or UID
$event_example_in = new \Svix\ApiClient\Model\EventExampleIn(); // \Svix\ApiClient\Model\EventExampleIn
$idempotency_key = 'idempotency_key_example'; // string | The request's idempotency key

try {
    $result = $apiInstance->v1EndpointSendExample($app_id, $endpoint_id, $event_example_in, $idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EndpointApi->v1EndpointSendExample: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_id** | **string**| The app&#39;s ID or UID | |
| **endpoint_id** | **string**| The ep&#39;s ID or UID | |
| **event_example_in** | [**\Svix\ApiClient\Model\EventExampleIn**](../Model/EventExampleIn.md)|  | |
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

## `v1EndpointTransformationGet()`

```php
v1EndpointTransformationGet($app_id, $endpoint_id): \Svix\ApiClient\Model\EndpointTransformationOut
```

Get Endpoint Transformation

Get the transformation code associated with this endpoint

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = Svix\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Svix\ApiClient\Api\EndpointApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = unique-app-identifier; // string | The app's ID or UID
$endpoint_id = unique-ep-identifier; // string | The ep's ID or UID

try {
    $result = $apiInstance->v1EndpointTransformationGet($app_id, $endpoint_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EndpointApi->v1EndpointTransformationGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_id** | **string**| The app&#39;s ID or UID | |
| **endpoint_id** | **string**| The ep&#39;s ID or UID | |

### Return type

[**\Svix\ApiClient\Model\EndpointTransformationOut**](../Model/EndpointTransformationOut.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1EndpointTransformationPartialUpdate()`

```php
v1EndpointTransformationPartialUpdate($app_id, $endpoint_id, $endpoint_transformation_in)
```

Set Endpoint Transformation

Set or unset the transformation code associated with this endpoint

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = Svix\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Svix\ApiClient\Api\EndpointApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = unique-app-identifier; // string | The app's ID or UID
$endpoint_id = unique-ep-identifier; // string | The ep's ID or UID
$endpoint_transformation_in = new \Svix\ApiClient\Model\EndpointTransformationIn(); // \Svix\ApiClient\Model\EndpointTransformationIn

try {
    $apiInstance->v1EndpointTransformationPartialUpdate($app_id, $endpoint_id, $endpoint_transformation_in);
} catch (Exception $e) {
    echo 'Exception when calling EndpointApi->v1EndpointTransformationPartialUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_id** | **string**| The app&#39;s ID or UID | |
| **endpoint_id** | **string**| The ep&#39;s ID or UID | |
| **endpoint_transformation_in** | [**\Svix\ApiClient\Model\EndpointTransformationIn**](../Model/EndpointTransformationIn.md)|  | |

### Return type

void (empty response body)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1EndpointUpdate()`

```php
v1EndpointUpdate($app_id, $endpoint_id, $endpoint_update): \Svix\ApiClient\Model\EndpointOut
```

Update Endpoint

Update an endpoint.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = Svix\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Svix\ApiClient\Api\EndpointApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = unique-app-identifier; // string | The app's ID or UID
$endpoint_id = unique-ep-identifier; // string | The ep's ID or UID
$endpoint_update = new \Svix\ApiClient\Model\EndpointUpdate(); // \Svix\ApiClient\Model\EndpointUpdate

try {
    $result = $apiInstance->v1EndpointUpdate($app_id, $endpoint_id, $endpoint_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EndpointApi->v1EndpointUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_id** | **string**| The app&#39;s ID or UID | |
| **endpoint_id** | **string**| The ep&#39;s ID or UID | |
| **endpoint_update** | [**\Svix\ApiClient\Model\EndpointUpdate**](../Model/EndpointUpdate.md)|  | |

### Return type

[**\Svix\ApiClient\Model\EndpointOut**](../Model/EndpointOut.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1EndpointUpdateHeaders()`

```php
v1EndpointUpdateHeaders($app_id, $endpoint_id, $endpoint_headers_in)
```

Update Endpoint Headers

Set the additional headers to be sent with the webhook

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = Svix\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Svix\ApiClient\Api\EndpointApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = unique-app-identifier; // string | The app's ID or UID
$endpoint_id = unique-ep-identifier; // string | The ep's ID or UID
$endpoint_headers_in = new \Svix\ApiClient\Model\EndpointHeadersIn(); // \Svix\ApiClient\Model\EndpointHeadersIn

try {
    $apiInstance->v1EndpointUpdateHeaders($app_id, $endpoint_id, $endpoint_headers_in);
} catch (Exception $e) {
    echo 'Exception when calling EndpointApi->v1EndpointUpdateHeaders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_id** | **string**| The app&#39;s ID or UID | |
| **endpoint_id** | **string**| The ep&#39;s ID or UID | |
| **endpoint_headers_in** | [**\Svix\ApiClient\Model\EndpointHeadersIn**](../Model/EndpointHeadersIn.md)|  | |

### Return type

void (empty response body)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
