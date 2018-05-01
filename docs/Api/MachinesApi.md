# Swagger\Client\MachinesApi

All URIs are relative to *https://api.samsara.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getMachines**](MachinesApi.md#getMachines) | **POST** /machines/list | /machines/list
[**getMachinesHistory**](MachinesApi.md#getMachinesHistory) | **POST** /machines/history | /machines/history


# **getMachines**
> \Swagger\Client\Model\InlineResponse2004 getMachines($access_token, $group_param)

/machines/list

Get machine objects. This method returns a list of the machine objects in the Samsara Cloud and information about them.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\MachinesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$access_token = "access_token_example"; // string | Samsara API access token.
$group_param = new \Swagger\Client\Model\GroupParam4(); // \Swagger\Client\Model\GroupParam4 | Group ID to query.

try {
    $result = $apiInstance->getMachines($access_token, $group_param);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MachinesApi->getMachines: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **access_token** | **string**| Samsara API access token. |
 **group_param** | [**\Swagger\Client\Model\GroupParam4**](../Model/GroupParam4.md)| Group ID to query. |

### Return type

[**\Swagger\Client\Model\InlineResponse2004**](../Model/InlineResponse2004.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMachinesHistory**
> \Swagger\Client\Model\MachineHistoryResponse getMachinesHistory($access_token, $history_param)

/machines/history

Get historical data for machine objects. This method returns a set of historical data for all machines in a group

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\MachinesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$access_token = "access_token_example"; // string | Samsara API access token.
$history_param = new \Swagger\Client\Model\HistoryParam1(); // \Swagger\Client\Model\HistoryParam1 | Group ID and time range to query for events

try {
    $result = $apiInstance->getMachinesHistory($access_token, $history_param);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MachinesApi->getMachinesHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **access_token** | **string**| Samsara API access token. |
 **history_param** | [**\Swagger\Client\Model\HistoryParam1**](../Model/HistoryParam1.md)| Group ID and time range to query for events |

### Return type

[**\Swagger\Client\Model\MachineHistoryResponse**](../Model/MachineHistoryResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

