# Svix\ApiClient\StatisticsApi

All URIs are relative to https://api.eu.svix.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**calculateAggregateAppStats()**](StatisticsApi.md#calculateAggregateAppStats) | **POST** /api/v1/stats/usage/app/ | Calculate Aggregate App Stats |


## `calculateAggregateAppStats()`

```php
calculateAggregateAppStats($app_usage_stats_in, $idempotency_key): \Svix\ApiClient\Model\AppUsageStatsOut
```

Calculate Aggregate App Stats

Creates a background task to calculate the message destinations for all applications in the environment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = Svix\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Svix\ApiClient\Api\StatisticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_usage_stats_in = new \Svix\ApiClient\Model\AppUsageStatsIn(); // \Svix\ApiClient\Model\AppUsageStatsIn
$idempotency_key = 'idempotency_key_example'; // string | The request's idempotency key

try {
    $result = $apiInstance->calculateAggregateAppStats($app_usage_stats_in, $idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatisticsApi->calculateAggregateAppStats: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_usage_stats_in** | [**\Svix\ApiClient\Model\AppUsageStatsIn**](../Model/AppUsageStatsIn.md)|  | |
| **idempotency_key** | **string**| The request&#39;s idempotency key | [optional] |

### Return type

[**\Svix\ApiClient\Model\AppUsageStatsOut**](../Model/AppUsageStatsOut.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
