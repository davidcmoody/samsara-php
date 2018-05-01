# Swagger\Client\DriversApi

All URIs are relative to *https://api.samsara.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createDriver**](DriversApi.md#createDriver) | **POST** /fleet/drivers/create | /fleet/drivers/create
[**deactivateDriver**](DriversApi.md#deactivateDriver) | **DELETE** /fleet/drivers/{driver_id} | /fleet/drivers/{driver_id:[0-9]+}
[**getAllDeactivatedDrivers**](DriversApi.md#getAllDeactivatedDrivers) | **GET** /fleet/drivers/inactive | /fleet/drivers/inactive
[**getDeactivatedDriverById**](DriversApi.md#getDeactivatedDriverById) | **GET** /fleet/drivers/inactive/{driver_id} | /fleet/drivers/inactive/{driver_id:[0-9]+}
[**getDriverById**](DriversApi.md#getDriverById) | **GET** /fleet/drivers/{driver_id} | /fleet/drivers/{driver_id:[0-9]+}
[**reactivateDriverById**](DriversApi.md#reactivateDriverById) | **PUT** /fleet/drivers/inactive/{driver_id} | /fleet/drivers/inactive/{driver_id:[0-9]+}


# **createDriver**
> \Swagger\Client\Model\Driver createDriver($access_token, $create_driver_param)

/fleet/drivers/create

Create a new driver.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DriversApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$access_token = "access_token_example"; // string | Samsara API access token.
$create_driver_param = new \Swagger\Client\Model\DriverForCreate(); // \Swagger\Client\Model\DriverForCreate | Driver creation body

try {
    $result = $apiInstance->createDriver($access_token, $create_driver_param);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DriversApi->createDriver: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **access_token** | **string**| Samsara API access token. |
 **create_driver_param** | [**\Swagger\Client\Model\DriverForCreate**](../Model/DriverForCreate.md)| Driver creation body |

### Return type

[**\Swagger\Client\Model\Driver**](../Model/Driver.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deactivateDriver**
> deactivateDriver($access_token, $driver_id)

/fleet/drivers/{driver_id:[0-9]+}

Deactivate a driver with the given driver_id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DriversApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$access_token = "access_token_example"; // string | Samsara API access token.
$driver_id = 789; // int | ID of the driver.

try {
    $apiInstance->deactivateDriver($access_token, $driver_id);
} catch (Exception $e) {
    echo 'Exception when calling DriversApi->deactivateDriver: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **access_token** | **string**| Samsara API access token. |
 **driver_id** | **int**| ID of the driver. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllDeactivatedDrivers**
> \Swagger\Client\Model\Driver[] getAllDeactivatedDrivers($access_token, $group_id)

/fleet/drivers/inactive

Fetch all deactivated drivers for the group.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DriversApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$access_token = "access_token_example"; // string | Samsara API access token.
$group_id = 789; // int | Optional group ID if the organization has multiple groups (uncommon).

try {
    $result = $apiInstance->getAllDeactivatedDrivers($access_token, $group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DriversApi->getAllDeactivatedDrivers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **access_token** | **string**| Samsara API access token. |
 **group_id** | **int**| Optional group ID if the organization has multiple groups (uncommon). | [optional]

### Return type

[**\Swagger\Client\Model\Driver[]**](../Model/Driver.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDeactivatedDriverById**
> \Swagger\Client\Model\Driver getDeactivatedDriverById($access_token, $driver_id)

/fleet/drivers/inactive/{driver_id:[0-9]+}

Fetch deactivated driver by driver_id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DriversApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$access_token = "access_token_example"; // string | Samsara API access token.
$driver_id = 789; // int | ID of the deactivated driver.

try {
    $result = $apiInstance->getDeactivatedDriverById($access_token, $driver_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DriversApi->getDeactivatedDriverById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **access_token** | **string**| Samsara API access token. |
 **driver_id** | **int**| ID of the deactivated driver. |

### Return type

[**\Swagger\Client\Model\Driver**](../Model/Driver.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDriverById**
> \Swagger\Client\Model\Driver getDriverById($access_token, $driver_id)

/fleet/drivers/{driver_id:[0-9]+}

Fetch driver by id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DriversApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$access_token = "access_token_example"; // string | Samsara API access token.
$driver_id = 789; // int | ID of the driver.

try {
    $result = $apiInstance->getDriverById($access_token, $driver_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DriversApi->getDriverById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **access_token** | **string**| Samsara API access token. |
 **driver_id** | **int**| ID of the driver. |

### Return type

[**\Swagger\Client\Model\Driver**](../Model/Driver.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reactivateDriverById**
> \Swagger\Client\Model\Driver reactivateDriverById($access_token, $driver_id, $reactivate_driver_param)

/fleet/drivers/inactive/{driver_id:[0-9]+}

Reactivate the inactive driver having driver_id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DriversApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$access_token = "access_token_example"; // string | Samsara API access token.
$driver_id = 789; // int | ID of the deactivated driver.
$reactivate_driver_param = new \Swagger\Client\Model\ReactivateDriverParam(); // \Swagger\Client\Model\ReactivateDriverParam | Driver reactivation body

try {
    $result = $apiInstance->reactivateDriverById($access_token, $driver_id, $reactivate_driver_param);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DriversApi->reactivateDriverById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **access_token** | **string**| Samsara API access token. |
 **driver_id** | **int**| ID of the deactivated driver. |
 **reactivate_driver_param** | [**\Swagger\Client\Model\ReactivateDriverParam**](../Model/ReactivateDriverParam.md)| Driver reactivation body |

### Return type

[**\Swagger\Client\Model\Driver**](../Model/Driver.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

