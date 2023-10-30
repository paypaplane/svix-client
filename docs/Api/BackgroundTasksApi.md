# Svix\ApiClient\BackgroundTasksApi

All URIs are relative to https://api.eu.svix.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getBackgroundTask()**](BackgroundTasksApi.md#getBackgroundTask) | **GET** /api/v1/background-task/{task_id}/ | Get Background Task |
| [**listBackgroundTasks()**](BackgroundTasksApi.md#listBackgroundTasks) | **GET** /api/v1/background-task/ | List Background Tasks |


## `getBackgroundTask()`

```php
getBackgroundTask($task_id): \Svix\ApiClient\Model\BackgroundTaskOut
```

Get Background Task

Get a background task by ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = Svix\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Svix\ApiClient\Api\BackgroundTasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task_id = 'task_id_example'; // string

try {
    $result = $apiInstance->getBackgroundTask($task_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BackgroundTasksApi->getBackgroundTask: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **task_id** | **string**|  | |

### Return type

[**\Svix\ApiClient\Model\BackgroundTaskOut**](../Model/BackgroundTaskOut.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listBackgroundTasks()`

```php
listBackgroundTasks($status, $task, $limit, $iterator, $order): \Svix\ApiClient\Model\ListResponseBackgroundTaskOut
```

List Background Tasks

List background tasks executed in the past 90 days.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = Svix\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Svix\ApiClient\Api\BackgroundTasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$status = new \Svix\ApiClient\Model\BackgroundTaskStatus(); // BackgroundTaskStatus | Filter the response based on the status
$task = new \Svix\ApiClient\Model\BackgroundTaskType(); // BackgroundTaskType | Filter the response based on the type
$limit = 56; // int | Limit the number of returned items
$iterator = 'iterator_example'; // string | The iterator returned from a prior invocation
$order = new \Svix\ApiClient\Model\Ordering(); // Ordering | The sorting order of the returned items

try {
    $result = $apiInstance->listBackgroundTasks($status, $task, $limit, $iterator, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BackgroundTasksApi->listBackgroundTasks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **status** | [**BackgroundTaskStatus**](../Model/.md)| Filter the response based on the status | [optional] |
| **task** | [**BackgroundTaskType**](../Model/.md)| Filter the response based on the type | [optional] |
| **limit** | **int**| Limit the number of returned items | [optional] |
| **iterator** | **string**| The iterator returned from a prior invocation | [optional] |
| **order** | [**Ordering**](../Model/.md)| The sorting order of the returned items | [optional] |

### Return type

[**\Svix\ApiClient\Model\ListResponseBackgroundTaskOut**](../Model/ListResponseBackgroundTaskOut.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
