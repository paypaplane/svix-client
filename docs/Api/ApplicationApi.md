# Svix\ApiClient\ApplicationApi

All URIs are relative to https://api.eu.svix.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**v1ApplicationCreate()**](ApplicationApi.md#v1ApplicationCreate) | **POST** /api/v1/app/ | Create Application |
| [**v1ApplicationDelete()**](ApplicationApi.md#v1ApplicationDelete) | **DELETE** /api/v1/app/{app_id}/ | Delete Application |
| [**v1ApplicationGet()**](ApplicationApi.md#v1ApplicationGet) | **GET** /api/v1/app/{app_id}/ | Get Application |
| [**v1ApplicationList()**](ApplicationApi.md#v1ApplicationList) | **GET** /api/v1/app/ | List Applications |
| [**v1ApplicationPatch()**](ApplicationApi.md#v1ApplicationPatch) | **PATCH** /api/v1/app/{app_id}/ | Patch Application |
| [**v1ApplicationUpdate()**](ApplicationApi.md#v1ApplicationUpdate) | **PUT** /api/v1/app/{app_id}/ | Update Application |


## `v1ApplicationCreate()`

```php
v1ApplicationCreate($application_in, $get_if_exists, $idempotency_key): \Svix\ApiClient\Model\ApplicationOut
```

Create Application

Create a new application.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = Svix\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Svix\ApiClient\Api\ApplicationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$application_in = new \Svix\ApiClient\Model\ApplicationIn(); // \Svix\ApiClient\Model\ApplicationIn
$get_if_exists = false; // bool | Get an existing application, or create a new one if doesn't exist. It's two separate functions in the libs.
$idempotency_key = 'idempotency_key_example'; // string | The request's idempotency key

try {
    $result = $apiInstance->v1ApplicationCreate($application_in, $get_if_exists, $idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationApi->v1ApplicationCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **application_in** | [**\Svix\ApiClient\Model\ApplicationIn**](../Model/ApplicationIn.md)|  | |
| **get_if_exists** | **bool**| Get an existing application, or create a new one if doesn&#39;t exist. It&#39;s two separate functions in the libs. | [optional] [default to false] |
| **idempotency_key** | **string**| The request&#39;s idempotency key | [optional] |

### Return type

[**\Svix\ApiClient\Model\ApplicationOut**](../Model/ApplicationOut.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1ApplicationDelete()`

```php
v1ApplicationDelete($app_id)
```

Delete Application

Delete an application.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = Svix\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Svix\ApiClient\Api\ApplicationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = unique-app-identifier; // string | The app's ID or UID

try {
    $apiInstance->v1ApplicationDelete($app_id);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationApi->v1ApplicationDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_id** | **string**| The app&#39;s ID or UID | |

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

## `v1ApplicationGet()`

```php
v1ApplicationGet($app_id): \Svix\ApiClient\Model\ApplicationOut
```

Get Application

Get an application.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = Svix\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Svix\ApiClient\Api\ApplicationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = unique-app-identifier; // string | The app's ID or UID

try {
    $result = $apiInstance->v1ApplicationGet($app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationApi->v1ApplicationGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_id** | **string**| The app&#39;s ID or UID | |

### Return type

[**\Svix\ApiClient\Model\ApplicationOut**](../Model/ApplicationOut.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1ApplicationList()`

```php
v1ApplicationList($limit, $iterator, $order): \Svix\ApiClient\Model\ListResponseApplicationOut
```

List Applications

List of all the organization's applications.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = Svix\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Svix\ApiClient\Api\ApplicationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int | Limit the number of returned items
$iterator = app_1srOrx2ZWZBpBUvZwXKQmoEYga2; // string | The iterator returned from a prior invocation
$order = new \Svix\ApiClient\Model\Ordering(); // Ordering | The sorting order of the returned items

try {
    $result = $apiInstance->v1ApplicationList($limit, $iterator, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationApi->v1ApplicationList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| Limit the number of returned items | [optional] |
| **iterator** | **string**| The iterator returned from a prior invocation | [optional] |
| **order** | [**Ordering**](../Model/.md)| The sorting order of the returned items | [optional] |

### Return type

[**\Svix\ApiClient\Model\ListResponseApplicationOut**](../Model/ListResponseApplicationOut.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1ApplicationPatch()`

```php
v1ApplicationPatch($app_id, $application_patch): \Svix\ApiClient\Model\ApplicationOut
```

Patch Application

Partially update an application.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = Svix\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Svix\ApiClient\Api\ApplicationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = unique-app-identifier; // string | The app's ID or UID
$application_patch = new \Svix\ApiClient\Model\ApplicationPatch(); // \Svix\ApiClient\Model\ApplicationPatch

try {
    $result = $apiInstance->v1ApplicationPatch($app_id, $application_patch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationApi->v1ApplicationPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_id** | **string**| The app&#39;s ID or UID | |
| **application_patch** | [**\Svix\ApiClient\Model\ApplicationPatch**](../Model/ApplicationPatch.md)|  | |

### Return type

[**\Svix\ApiClient\Model\ApplicationOut**](../Model/ApplicationOut.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1ApplicationUpdate()`

```php
v1ApplicationUpdate($app_id, $application_in): \Svix\ApiClient\Model\ApplicationOut
```

Update Application

Update an application.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = Svix\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Svix\ApiClient\Api\ApplicationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = unique-app-identifier; // string | The app's ID or UID
$application_in = new \Svix\ApiClient\Model\ApplicationIn(); // \Svix\ApiClient\Model\ApplicationIn

try {
    $result = $apiInstance->v1ApplicationUpdate($app_id, $application_in);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationApi->v1ApplicationUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_id** | **string**| The app&#39;s ID or UID | |
| **application_in** | [**\Svix\ApiClient\Model\ApplicationIn**](../Model/ApplicationIn.md)|  | |

### Return type

[**\Svix\ApiClient\Model\ApplicationOut**](../Model/ApplicationOut.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
