# Svix\ApiClient\AuthenticationApi

All URIs are relative to https://api.eu.svix.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**v1AuthenticationAppPortalAccess()**](AuthenticationApi.md#v1AuthenticationAppPortalAccess) | **POST** /api/v1/auth/app-portal-access/{app_id}/ | Get Consumer App Portal Access |
| [**v1AuthenticationDashboardAccess()**](AuthenticationApi.md#v1AuthenticationDashboardAccess) | **POST** /api/v1/auth/dashboard-access/{app_id}/ | Dashboard Access |
| [**v1AuthenticationExpireAll()**](AuthenticationApi.md#v1AuthenticationExpireAll) | **POST** /api/v1/auth/app/{app_id}/expire-all/ | Expire All |
| [**v1AuthenticationLogout()**](AuthenticationApi.md#v1AuthenticationLogout) | **POST** /api/v1/auth/logout/ | Logout |


## `v1AuthenticationAppPortalAccess()`

```php
v1AuthenticationAppPortalAccess($app_id, $app_portal_access_in, $idempotency_key): \Svix\ApiClient\Model\AppPortalAccessOut
```

Get Consumer App Portal Access

Use this function to get magic links (and authentication codes) for connecting your users to the Consumer Application Portal.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = Svix\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Svix\ApiClient\Api\AuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = unique-app-identifier; // string | The app's ID or UID
$app_portal_access_in = new \Svix\ApiClient\Model\AppPortalAccessIn(); // \Svix\ApiClient\Model\AppPortalAccessIn
$idempotency_key = 'idempotency_key_example'; // string | The request's idempotency key

try {
    $result = $apiInstance->v1AuthenticationAppPortalAccess($app_id, $app_portal_access_in, $idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->v1AuthenticationAppPortalAccess: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_id** | **string**| The app&#39;s ID or UID | |
| **app_portal_access_in** | [**\Svix\ApiClient\Model\AppPortalAccessIn**](../Model/AppPortalAccessIn.md)|  | |
| **idempotency_key** | **string**| The request&#39;s idempotency key | [optional] |

### Return type

[**\Svix\ApiClient\Model\AppPortalAccessOut**](../Model/AppPortalAccessOut.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1AuthenticationDashboardAccess()`

```php
v1AuthenticationDashboardAccess($app_id, $idempotency_key): \Svix\ApiClient\Model\DashboardAccessOut
```

Dashboard Access

DEPRECATED: Please use `app-portal-access` instead.  Use this function to get magic links (and authentication codes) for connecting your users to the Consumer Application Portal.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = Svix\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Svix\ApiClient\Api\AuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = unique-app-identifier; // string | The app's ID or UID
$idempotency_key = 'idempotency_key_example'; // string | The request's idempotency key

try {
    $result = $apiInstance->v1AuthenticationDashboardAccess($app_id, $idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->v1AuthenticationDashboardAccess: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_id** | **string**| The app&#39;s ID or UID | |
| **idempotency_key** | **string**| The request&#39;s idempotency key | [optional] |

### Return type

[**\Svix\ApiClient\Model\DashboardAccessOut**](../Model/DashboardAccessOut.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1AuthenticationExpireAll()`

```php
v1AuthenticationExpireAll($app_id, $application_token_expire_in, $idempotency_key)
```

Expire All

Expire all of the tokens associated with a specific Application

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = Svix\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Svix\ApiClient\Api\AuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = unique-app-identifier; // string | The app's ID or UID
$application_token_expire_in = new \Svix\ApiClient\Model\ApplicationTokenExpireIn(); // \Svix\ApiClient\Model\ApplicationTokenExpireIn
$idempotency_key = 'idempotency_key_example'; // string | The request's idempotency key

try {
    $apiInstance->v1AuthenticationExpireAll($app_id, $application_token_expire_in, $idempotency_key);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->v1AuthenticationExpireAll: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_id** | **string**| The app&#39;s ID or UID | |
| **application_token_expire_in** | [**\Svix\ApiClient\Model\ApplicationTokenExpireIn**](../Model/ApplicationTokenExpireIn.md)|  | |
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

## `v1AuthenticationLogout()`

```php
v1AuthenticationLogout($idempotency_key)
```

Logout

Logout an app token.  Trying to log out other tokens will fail.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = Svix\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Svix\ApiClient\Api\AuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idempotency_key = 'idempotency_key_example'; // string | The request's idempotency key

try {
    $apiInstance->v1AuthenticationLogout($idempotency_key);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->v1AuthenticationLogout: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
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
