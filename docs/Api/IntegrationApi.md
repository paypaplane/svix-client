# Svix\ApiClient\IntegrationApi

All URIs are relative to https://api.eu.svix.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**v1IntegrationCreate()**](IntegrationApi.md#v1IntegrationCreate) | **POST** /api/v1/app/{app_id}/integration/ | Create Integration |
| [**v1IntegrationDelete()**](IntegrationApi.md#v1IntegrationDelete) | **DELETE** /api/v1/app/{app_id}/integration/{integ_id}/ | Delete Integration |
| [**v1IntegrationGet()**](IntegrationApi.md#v1IntegrationGet) | **GET** /api/v1/app/{app_id}/integration/{integ_id}/ | Get Integration |
| [**v1IntegrationGetKey()**](IntegrationApi.md#v1IntegrationGetKey) | **GET** /api/v1/app/{app_id}/integration/{integ_id}/key/ | Get Integration Key |
| [**v1IntegrationList()**](IntegrationApi.md#v1IntegrationList) | **GET** /api/v1/app/{app_id}/integration/ | List Integrations |
| [**v1IntegrationRotateKey()**](IntegrationApi.md#v1IntegrationRotateKey) | **POST** /api/v1/app/{app_id}/integration/{integ_id}/key/rotate/ | Rotate Integration Key |
| [**v1IntegrationUpdate()**](IntegrationApi.md#v1IntegrationUpdate) | **PUT** /api/v1/app/{app_id}/integration/{integ_id}/ | Update Integration |


## `v1IntegrationCreate()`

```php
v1IntegrationCreate($app_id, $integration_in, $idempotency_key): \Svix\ApiClient\Model\IntegrationOut
```

Create Integration

Create an integration.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = Svix\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Svix\ApiClient\Api\IntegrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = unique-app-identifier; // string | The app's ID or UID
$integration_in = new \Svix\ApiClient\Model\IntegrationIn(); // \Svix\ApiClient\Model\IntegrationIn
$idempotency_key = 'idempotency_key_example'; // string | The request's idempotency key

try {
    $result = $apiInstance->v1IntegrationCreate($app_id, $integration_in, $idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationApi->v1IntegrationCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_id** | **string**| The app&#39;s ID or UID | |
| **integration_in** | [**\Svix\ApiClient\Model\IntegrationIn**](../Model/IntegrationIn.md)|  | |
| **idempotency_key** | **string**| The request&#39;s idempotency key | [optional] |

### Return type

[**\Svix\ApiClient\Model\IntegrationOut**](../Model/IntegrationOut.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1IntegrationDelete()`

```php
v1IntegrationDelete($app_id, $integ_id)
```

Delete Integration

Delete an integration.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = Svix\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Svix\ApiClient\Api\IntegrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = unique-app-identifier; // string | The app's ID or UID
$integ_id = integ_1srOrx2ZWZBpBUvZwXKQmoEYga2; // string | The integ's ID

try {
    $apiInstance->v1IntegrationDelete($app_id, $integ_id);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationApi->v1IntegrationDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_id** | **string**| The app&#39;s ID or UID | |
| **integ_id** | **string**| The integ&#39;s ID | |

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

## `v1IntegrationGet()`

```php
v1IntegrationGet($app_id, $integ_id): \Svix\ApiClient\Model\IntegrationOut
```

Get Integration

Get an integration.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = Svix\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Svix\ApiClient\Api\IntegrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = unique-app-identifier; // string | The app's ID or UID
$integ_id = integ_1srOrx2ZWZBpBUvZwXKQmoEYga2; // string | The integ's ID

try {
    $result = $apiInstance->v1IntegrationGet($app_id, $integ_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationApi->v1IntegrationGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_id** | **string**| The app&#39;s ID or UID | |
| **integ_id** | **string**| The integ&#39;s ID | |

### Return type

[**\Svix\ApiClient\Model\IntegrationOut**](../Model/IntegrationOut.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1IntegrationGetKey()`

```php
v1IntegrationGetKey($app_id, $integ_id): \Svix\ApiClient\Model\IntegrationKeyOut
```

Get Integration Key

Get an integration's key.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = Svix\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Svix\ApiClient\Api\IntegrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = unique-app-identifier; // string | The app's ID or UID
$integ_id = integ_1srOrx2ZWZBpBUvZwXKQmoEYga2; // string | The integ's ID

try {
    $result = $apiInstance->v1IntegrationGetKey($app_id, $integ_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationApi->v1IntegrationGetKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_id** | **string**| The app&#39;s ID or UID | |
| **integ_id** | **string**| The integ&#39;s ID | |

### Return type

[**\Svix\ApiClient\Model\IntegrationKeyOut**](../Model/IntegrationKeyOut.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1IntegrationList()`

```php
v1IntegrationList($app_id, $limit, $iterator): \Svix\ApiClient\Model\ListResponseIntegrationOut
```

List Integrations

List the application's integrations.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = Svix\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Svix\ApiClient\Api\IntegrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = unique-app-identifier; // string | The app's ID or UID
$limit = 56; // int | Limit the number of returned items
$iterator = integ_1srOrx2ZWZBpBUvZwXKQmoEYga2; // string | The iterator returned from a prior invocation

try {
    $result = $apiInstance->v1IntegrationList($app_id, $limit, $iterator);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationApi->v1IntegrationList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_id** | **string**| The app&#39;s ID or UID | |
| **limit** | **int**| Limit the number of returned items | [optional] |
| **iterator** | **string**| The iterator returned from a prior invocation | [optional] |

### Return type

[**\Svix\ApiClient\Model\ListResponseIntegrationOut**](../Model/ListResponseIntegrationOut.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1IntegrationRotateKey()`

```php
v1IntegrationRotateKey($app_id, $integ_id, $idempotency_key): \Svix\ApiClient\Model\IntegrationKeyOut
```

Rotate Integration Key

Rotate the integration's key. The previous key will be immediately revoked.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = Svix\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Svix\ApiClient\Api\IntegrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = unique-app-identifier; // string | The app's ID or UID
$integ_id = integ_1srOrx2ZWZBpBUvZwXKQmoEYga2; // string | The integ's ID
$idempotency_key = 'idempotency_key_example'; // string | The request's idempotency key

try {
    $result = $apiInstance->v1IntegrationRotateKey($app_id, $integ_id, $idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationApi->v1IntegrationRotateKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_id** | **string**| The app&#39;s ID or UID | |
| **integ_id** | **string**| The integ&#39;s ID | |
| **idempotency_key** | **string**| The request&#39;s idempotency key | [optional] |

### Return type

[**\Svix\ApiClient\Model\IntegrationKeyOut**](../Model/IntegrationKeyOut.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1IntegrationUpdate()`

```php
v1IntegrationUpdate($app_id, $integ_id, $integration_update): \Svix\ApiClient\Model\IntegrationOut
```

Update Integration

Update an integration.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = Svix\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Svix\ApiClient\Api\IntegrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = unique-app-identifier; // string | The app's ID or UID
$integ_id = integ_1srOrx2ZWZBpBUvZwXKQmoEYga2; // string | The integ's ID
$integration_update = new \Svix\ApiClient\Model\IntegrationUpdate(); // \Svix\ApiClient\Model\IntegrationUpdate

try {
    $result = $apiInstance->v1IntegrationUpdate($app_id, $integ_id, $integration_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationApi->v1IntegrationUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_id** | **string**| The app&#39;s ID or UID | |
| **integ_id** | **string**| The integ&#39;s ID | |
| **integration_update** | [**\Svix\ApiClient\Model\IntegrationUpdate**](../Model/IntegrationUpdate.md)|  | |

### Return type

[**\Svix\ApiClient\Model\IntegrationOut**](../Model/IntegrationOut.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
