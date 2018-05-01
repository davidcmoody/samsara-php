# Swagger\Client\DefaultApi

All URIs are relative to *https://api.samsara.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addFleetAddress**](DefaultApi.md#addFleetAddress) | **POST** /fleet/add_address | /fleet/add_address
[**createDispatchRoute**](DefaultApi.md#createDispatchRoute) | **POST** /fleet/dispatch/routes | /fleet/dispatch/routes
[**createDriver**](DefaultApi.md#createDriver) | **POST** /fleet/drivers/create | /fleet/drivers/create
[**createDriverDispatchRoute**](DefaultApi.md#createDriverDispatchRoute) | **POST** /fleet/drivers/{driver_id}/dispatch/routes | /fleet/drivers/{driver_id:[0-9]+}/dispatch/routes
[**createVehicleDispatchRoute**](DefaultApi.md#createVehicleDispatchRoute) | **POST** /fleet/vehicles/{vehicle_id}/dispatch/routes | /fleet/vehicles/{vehicle_id:[0-9]+}/dispatch/routes
[**deactivateDriver**](DefaultApi.md#deactivateDriver) | **DELETE** /fleet/drivers/{driver_id} | /fleet/drivers/{driver_id:[0-9]+}
[**deleteDispatchRouteById**](DefaultApi.md#deleteDispatchRouteById) | **DELETE** /fleet/dispatch/routes/{route_id} | /fleet/dispatch/routes/{route_id:[0-9]+}/
[**fetchAllDispatchRoutes**](DefaultApi.md#fetchAllDispatchRoutes) | **GET** /fleet/dispatch/routes | /fleet/dispatch/routes
[**getAllAssets**](DefaultApi.md#getAllAssets) | **GET** /fleet/assets | /v1/fleet/assets
[**getAllDeactivatedDrivers**](DefaultApi.md#getAllDeactivatedDrivers) | **GET** /fleet/drivers/inactive | /fleet/drivers/inactive
[**getAssetLocation**](DefaultApi.md#getAssetLocation) | **GET** /fleet/assets/{asset_id}/locations | /fleet/assets/{assetId:[0-9]+}/locations
[**getAssetReefer**](DefaultApi.md#getAssetReefer) | **GET** /fleet/assets/{asset_id}/reefer | /fleet/assets/{assetId:[0-9]+}/reefer
[**getDeactivatedDriverById**](DefaultApi.md#getDeactivatedDriverById) | **GET** /fleet/drivers/inactive/{driver_id} | /fleet/drivers/inactive/{driver_id:[0-9]+}
[**getDispatchRouteById**](DefaultApi.md#getDispatchRouteById) | **GET** /fleet/dispatch/routes/{route_id} | /fleet/dispatch/routes/{route_id:[0-9]+}
[**getDispatchRouteHistory**](DefaultApi.md#getDispatchRouteHistory) | **GET** /fleet/dispatch/routes/{route_id}/history | /fleet/dispatch/routes/{route_id:[0-9]+}/history
[**getDispatchRoutesByDriverId**](DefaultApi.md#getDispatchRoutesByDriverId) | **GET** /fleet/drivers/{driver_id}/dispatch/routes | /fleet/drivers/{driver_id:[0-9]+}/dispatch/routes
[**getDispatchRoutesByVehicleId**](DefaultApi.md#getDispatchRoutesByVehicleId) | **GET** /fleet/vehicles/{vehicle_id}/dispatch/routes | /fleet/vehicles/{vehicle_id:[0-9]+}/dispatch/routes
[**getDriverById**](DefaultApi.md#getDriverById) | **GET** /fleet/drivers/{driver_id} | /fleet/drivers/{driver_id:[0-9]+}
[**getDvirs**](DefaultApi.md#getDvirs) | **GET** /fleet/maintenance/dvirs | /fleet/maintenance/dvirs
[**getFleet**](DefaultApi.md#getFleet) | **POST** /fleet/list | /fleet/list
[**getFleetDrivers**](DefaultApi.md#getFleetDrivers) | **POST** /fleet/drivers | /fleet/drivers
[**getFleetDriversHosDailyLogs**](DefaultApi.md#getFleetDriversHosDailyLogs) | **POST** /fleet/drivers/{driver_id}/hos_daily_logs | /fleet/drivers/{driver_id:[0-9]+}/hos_daily_logs
[**getFleetDriversSummary**](DefaultApi.md#getFleetDriversSummary) | **POST** /fleet/drivers/summary | /fleet/drivers/summary
[**getFleetHosAuthenticationLogs**](DefaultApi.md#getFleetHosAuthenticationLogs) | **POST** /fleet/hos_authentication_logs | /fleet/hos_authentication_logs
[**getFleetHosLogs**](DefaultApi.md#getFleetHosLogs) | **POST** /fleet/hos_logs | /fleet/hos_logs
[**getFleetHosLogsSummary**](DefaultApi.md#getFleetHosLogsSummary) | **POST** /fleet/hos_logs_summary | /fleet/hos_logs_summary
[**getFleetLocations**](DefaultApi.md#getFleetLocations) | **POST** /fleet/locations | /fleet/locations
[**getFleetMaintenanceList**](DefaultApi.md#getFleetMaintenanceList) | **POST** /fleet/maintenance/list | /fleet/maintenance/list
[**getFleetTrips**](DefaultApi.md#getFleetTrips) | **POST** /fleet/trips | /fleet/trips
[**getMachines**](DefaultApi.md#getMachines) | **POST** /machines/list | /machines/list
[**getMachinesHistory**](DefaultApi.md#getMachinesHistory) | **POST** /machines/history | /machines/history
[**getSensors**](DefaultApi.md#getSensors) | **POST** /sensors/list | /sensors/list
[**getSensorsHistory**](DefaultApi.md#getSensorsHistory) | **POST** /sensors/history | /sensors/history
[**getSensorsHumidity**](DefaultApi.md#getSensorsHumidity) | **POST** /sensors/humidity | /sensors/humidity
[**getSensorsTemperature**](DefaultApi.md#getSensorsTemperature) | **POST** /sensors/temperature | /sensors/temperature
[**reactivateDriverById**](DefaultApi.md#reactivateDriverById) | **PUT** /fleet/drivers/inactive/{driver_id} | /fleet/drivers/inactive/{driver_id:[0-9]+}
[**updateDispatchRouteById**](DefaultApi.md#updateDispatchRouteById) | **PUT** /fleet/dispatch/routes/{route_id} | /fleet/dispatch/routes/{route_id:[0-9]+}/
[**updateVehicles**](DefaultApi.md#updateVehicles) | **POST** /fleet/set_data | /fleet/set_data


# **addFleetAddress**
> addFleetAddress($access_token, $address_param)

/fleet/add_address

This method adds an address book entry to the specified group.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$access_token = "access_token_example"; // string | Samsara API access token.
$address_param = new \Swagger\Client\models\AddressParam(); // \Swagger\Client\models\AddressParam | 

try {
    $apiInstance->addFleetAddress($access_token, $address_param);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->addFleetAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **access_token** | **string**| Samsara API access token. |
 **address_param** | [**\Swagger\Client\models\AddressParam**](../Model/AddressParam.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createDispatchRoute**
> \Swagger\Client\models\DispatchRoute createDispatchRoute($access_token, $create_dispatch_route_params)

/fleet/dispatch/routes

Create a new dispatch route.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$access_token = "access_token_example"; // string | Samsara API access token.
$create_dispatch_route_params = new \Swagger\Client\models\DispatchRouteCreate(); // \Swagger\Client\models\DispatchRouteCreate | 

try {
    $result = $apiInstance->createDispatchRoute($access_token, $create_dispatch_route_params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createDispatchRoute: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **access_token** | **string**| Samsara API access token. |
 **create_dispatch_route_params** | [**\Swagger\Client\models\DispatchRouteCreate**](../Model/DispatchRouteCreate.md)|  |

### Return type

[**\Swagger\Client\models\DispatchRoute**](../Model/DispatchRoute.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createDriver**
> \Swagger\Client\models\Driver createDriver($access_token, $create_driver_param)

/fleet/drivers/create

Create a new driver.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$access_token = "access_token_example"; // string | Samsara API access token.
$create_driver_param = new \Swagger\Client\models\DriverForCreate(); // \Swagger\Client\models\DriverForCreate | Driver creation body

try {
    $result = $apiInstance->createDriver($access_token, $create_driver_param);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createDriver: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **access_token** | **string**| Samsara API access token. |
 **create_driver_param** | [**\Swagger\Client\models\DriverForCreate**](../Model/DriverForCreate.md)| Driver creation body |

### Return type

[**\Swagger\Client\models\Driver**](../Model/Driver.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createDriverDispatchRoute**
> \Swagger\Client\models\DispatchRoute createDriverDispatchRoute($access_token, $driver_id, $create_dispatch_route_params)

/fleet/drivers/{driver_id:[0-9]+}/dispatch/routes

Create a new dispatch route for the driver with driver_id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$access_token = "access_token_example"; // string | Samsara API access token.
$driver_id = 789; // int | ID of the driver with the associated routes.
$create_dispatch_route_params = new \Swagger\Client\models\DispatchRouteCreate(); // \Swagger\Client\models\DispatchRouteCreate | 

try {
    $result = $apiInstance->createDriverDispatchRoute($access_token, $driver_id, $create_dispatch_route_params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createDriverDispatchRoute: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **access_token** | **string**| Samsara API access token. |
 **driver_id** | **int**| ID of the driver with the associated routes. |
 **create_dispatch_route_params** | [**\Swagger\Client\models\DispatchRouteCreate**](../Model/DispatchRouteCreate.md)|  |

### Return type

[**\Swagger\Client\models\DispatchRoute**](../Model/DispatchRoute.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createVehicleDispatchRoute**
> \Swagger\Client\models\DispatchRoute createVehicleDispatchRoute($access_token, $vehicle_id, $create_dispatch_route_params)

/fleet/vehicles/{vehicle_id:[0-9]+}/dispatch/routes

Create a new dispatch route for the vehicle with vehicle_id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$access_token = "access_token_example"; // string | Samsara API access token.
$vehicle_id = 789; // int | ID of the vehicle with the associated routes.
$create_dispatch_route_params = new \Swagger\Client\models\DispatchRouteCreate(); // \Swagger\Client\models\DispatchRouteCreate | 

try {
    $result = $apiInstance->createVehicleDispatchRoute($access_token, $vehicle_id, $create_dispatch_route_params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createVehicleDispatchRoute: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **access_token** | **string**| Samsara API access token. |
 **vehicle_id** | **int**| ID of the vehicle with the associated routes. |
 **create_dispatch_route_params** | [**\Swagger\Client\models\DispatchRouteCreate**](../Model/DispatchRouteCreate.md)|  |

### Return type

[**\Swagger\Client\models\DispatchRoute**](../Model/DispatchRoute.md)

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

$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$access_token = "access_token_example"; // string | Samsara API access token.
$driver_id = 789; // int | ID of the driver.

try {
    $apiInstance->deactivateDriver($access_token, $driver_id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deactivateDriver: ', $e->getMessage(), PHP_EOL;
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

# **deleteDispatchRouteById**
> deleteDispatchRouteById($access_token, $route_id)

/fleet/dispatch/routes/{route_id:[0-9]+}/

Delete a dispatch route and its associated jobs.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$access_token = "access_token_example"; // string | Samsara API access token.
$route_id = 789; // int | ID of the dispatch route.

try {
    $apiInstance->deleteDispatchRouteById($access_token, $route_id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteDispatchRouteById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **access_token** | **string**| Samsara API access token. |
 **route_id** | **int**| ID of the dispatch route. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **fetchAllDispatchRoutes**
> \Swagger\Client\models\DispatchRoutes fetchAllDispatchRoutes($access_token, $group_id, $end_time, $duration)

/fleet/dispatch/routes

Fetch all of the dispatch routes for the group.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$access_token = "access_token_example"; // string | Samsara API access token.
$group_id = 789; // int | Optional group ID if the organization has multiple groups (uncommon).
$end_time = 789; // int | Time in unix milliseconds that represents the oldest routes to return. Used in combination with duration. Defaults to now.
$duration = 789; // int | Time in milliseconds that represents the duration before end_time to query. Defaults to 24 hours.

try {
    $result = $apiInstance->fetchAllDispatchRoutes($access_token, $group_id, $end_time, $duration);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->fetchAllDispatchRoutes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **access_token** | **string**| Samsara API access token. |
 **group_id** | **int**| Optional group ID if the organization has multiple groups (uncommon). | [optional]
 **end_time** | **int**| Time in unix milliseconds that represents the oldest routes to return. Used in combination with duration. Defaults to now. | [optional]
 **duration** | **int**| Time in milliseconds that represents the duration before end_time to query. Defaults to 24 hours. | [optional]

### Return type

[**\Swagger\Client\models\DispatchRoutes**](../Model/DispatchRoutes.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllAssets**
> \Swagger\Client\models\InlineResponse2005 getAllAssets($access_token, $group_param)

/v1/fleet/assets

Fetch all of the assets for the group.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$access_token = "access_token_example"; // string | Samsara API access token.
$group_param = new \Swagger\Client\models\GroupParam(); // \Swagger\Client\models\GroupParam | Group ID to query.

try {
    $result = $apiInstance->getAllAssets($access_token, $group_param);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getAllAssets: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **access_token** | **string**| Samsara API access token. |
 **group_param** | [**\Swagger\Client\models\GroupParam**](../Model/GroupParam.md)| Group ID to query. |

### Return type

[**\Swagger\Client\models\InlineResponse2005**](../Model/InlineResponse2005.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllDeactivatedDrivers**
> \Swagger\Client\models\Driver[] getAllDeactivatedDrivers($access_token, $group_id)

/fleet/drivers/inactive

Fetch all deactivated drivers for the group.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DefaultApi(
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
    echo 'Exception when calling DefaultApi->getAllDeactivatedDrivers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **access_token** | **string**| Samsara API access token. |
 **group_id** | **int**| Optional group ID if the organization has multiple groups (uncommon). | [optional]

### Return type

[**\Swagger\Client\models\Driver[]**](../Model/Driver.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAssetLocation**
> \Swagger\Client\models\AssetLocationResponse getAssetLocation($access_token, $asset_id, $start_ms, $end_ms)

/fleet/assets/{assetId:[0-9]+}/locations

Fetch the historical locations for the asset.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$access_token = "access_token_example"; // string | Samsara API access token.
$asset_id = 789; // int | ID of the asset
$start_ms = 789; // int | Timestamp in milliseconds representing the start of the period to fetch, inclusive. Used in combination with endMs.
$end_ms = 789; // int | Timestamp in milliseconds representing the end of the period to fetch, inclusive. Used in combination with startMs.

try {
    $result = $apiInstance->getAssetLocation($access_token, $asset_id, $start_ms, $end_ms);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getAssetLocation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **access_token** | **string**| Samsara API access token. |
 **asset_id** | **int**| ID of the asset |
 **start_ms** | **int**| Timestamp in milliseconds representing the start of the period to fetch, inclusive. Used in combination with endMs. |
 **end_ms** | **int**| Timestamp in milliseconds representing the end of the period to fetch, inclusive. Used in combination with startMs. |

### Return type

[**\Swagger\Client\models\AssetLocationResponse**](../Model/AssetLocationResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAssetReefer**
> \Swagger\Client\models\AssetReeferResponse getAssetReefer($access_token, $asset_id, $start_ms, $end_ms)

/fleet/assets/{assetId:[0-9]+}/reefer

Fetch the reefer-specific stats of an asset.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$access_token = "access_token_example"; // string | Samsara API access token.
$asset_id = 789; // int | ID of the asset
$start_ms = 789; // int | Timestamp in milliseconds representing the start of the period to fetch, inclusive. Used in combination with endMs.
$end_ms = 789; // int | Timestamp in milliseconds representing the end of the period to fetch, inclusive. Used in combination with startMs.

try {
    $result = $apiInstance->getAssetReefer($access_token, $asset_id, $start_ms, $end_ms);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getAssetReefer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **access_token** | **string**| Samsara API access token. |
 **asset_id** | **int**| ID of the asset |
 **start_ms** | **int**| Timestamp in milliseconds representing the start of the period to fetch, inclusive. Used in combination with endMs. |
 **end_ms** | **int**| Timestamp in milliseconds representing the end of the period to fetch, inclusive. Used in combination with startMs. |

### Return type

[**\Swagger\Client\models\AssetReeferResponse**](../Model/AssetReeferResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDeactivatedDriverById**
> \Swagger\Client\models\Driver getDeactivatedDriverById($access_token, $driver_id)

/fleet/drivers/inactive/{driver_id:[0-9]+}

Fetch deactivated driver by driver_id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DefaultApi(
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
    echo 'Exception when calling DefaultApi->getDeactivatedDriverById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **access_token** | **string**| Samsara API access token. |
 **driver_id** | **int**| ID of the deactivated driver. |

### Return type

[**\Swagger\Client\models\Driver**](../Model/Driver.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDispatchRouteById**
> \Swagger\Client\models\DispatchRoute getDispatchRouteById($access_token, $route_id)

/fleet/dispatch/routes/{route_id:[0-9]+}

Fetch a dispatch route by id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$access_token = "access_token_example"; // string | Samsara API access token.
$route_id = 789; // int | ID of the dispatch route.

try {
    $result = $apiInstance->getDispatchRouteById($access_token, $route_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getDispatchRouteById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **access_token** | **string**| Samsara API access token. |
 **route_id** | **int**| ID of the dispatch route. |

### Return type

[**\Swagger\Client\models\DispatchRoute**](../Model/DispatchRoute.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDispatchRouteHistory**
> \Swagger\Client\models\DispatchRouteHistory getDispatchRouteHistory($access_token, $route_id, $start_time, $end_time)

/fleet/dispatch/routes/{route_id:[0-9]+}/history

Fetch the history of a dispatch route.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$access_token = "access_token_example"; // string | Samsara API access token.
$route_id = 789; // int | ID of the route with history.
$start_time = 789; // int | Timestamp representing the start of the period to fetch, inclusive. Used in combination with end_time. Defaults to 0.
$end_time = 789; // int | Timestamp representing the end of the period to fetch, inclusive. Used in combination with start_time. Defaults to nowMs.

try {
    $result = $apiInstance->getDispatchRouteHistory($access_token, $route_id, $start_time, $end_time);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getDispatchRouteHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **access_token** | **string**| Samsara API access token. |
 **route_id** | **int**| ID of the route with history. |
 **start_time** | **int**| Timestamp representing the start of the period to fetch, inclusive. Used in combination with end_time. Defaults to 0. | [optional]
 **end_time** | **int**| Timestamp representing the end of the period to fetch, inclusive. Used in combination with start_time. Defaults to nowMs. | [optional]

### Return type

[**\Swagger\Client\models\DispatchRouteHistory**](../Model/DispatchRouteHistory.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDispatchRoutesByDriverId**
> \Swagger\Client\models\DispatchRoutes getDispatchRoutesByDriverId($access_token, $driver_id, $end_time, $duration)

/fleet/drivers/{driver_id:[0-9]+}/dispatch/routes

Fetch all of the dispatch routes for a given driver.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$access_token = "access_token_example"; // string | Samsara API access token.
$driver_id = 789; // int | ID of the driver with the associated routes.
$end_time = 789; // int | Time in unix milliseconds that represents the oldest routes to return. Used in combination with duration. Defaults to now.
$duration = 789; // int | Time in milliseconds that represents the duration before end_time to query. Defaults to 24 hours.

try {
    $result = $apiInstance->getDispatchRoutesByDriverId($access_token, $driver_id, $end_time, $duration);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getDispatchRoutesByDriverId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **access_token** | **string**| Samsara API access token. |
 **driver_id** | **int**| ID of the driver with the associated routes. |
 **end_time** | **int**| Time in unix milliseconds that represents the oldest routes to return. Used in combination with duration. Defaults to now. | [optional]
 **duration** | **int**| Time in milliseconds that represents the duration before end_time to query. Defaults to 24 hours. | [optional]

### Return type

[**\Swagger\Client\models\DispatchRoutes**](../Model/DispatchRoutes.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDispatchRoutesByVehicleId**
> \Swagger\Client\models\DispatchRoutes getDispatchRoutesByVehicleId($access_token, $vehicle_id, $end_time, $duration)

/fleet/vehicles/{vehicle_id:[0-9]+}/dispatch/routes

Fetch all of the dispatch routes for a given vehicle.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$access_token = "access_token_example"; // string | Samsara API access token.
$vehicle_id = 789; // int | ID of the vehicle with the associated routes.
$end_time = 789; // int | Time in unix milliseconds that represents the oldest routes to return. Used in combination with duration. Defaults to now.
$duration = 789; // int | Time in milliseconds that represents the duration before end_time to query. Defaults to 24 hours.

try {
    $result = $apiInstance->getDispatchRoutesByVehicleId($access_token, $vehicle_id, $end_time, $duration);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getDispatchRoutesByVehicleId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **access_token** | **string**| Samsara API access token. |
 **vehicle_id** | **int**| ID of the vehicle with the associated routes. |
 **end_time** | **int**| Time in unix milliseconds that represents the oldest routes to return. Used in combination with duration. Defaults to now. | [optional]
 **duration** | **int**| Time in milliseconds that represents the duration before end_time to query. Defaults to 24 hours. | [optional]

### Return type

[**\Swagger\Client\models\DispatchRoutes**](../Model/DispatchRoutes.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDriverById**
> \Swagger\Client\models\Driver getDriverById($access_token, $driver_id)

/fleet/drivers/{driver_id:[0-9]+}

Fetch driver by id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DefaultApi(
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
    echo 'Exception when calling DefaultApi->getDriverById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **access_token** | **string**| Samsara API access token. |
 **driver_id** | **int**| ID of the driver. |

### Return type

[**\Swagger\Client\models\Driver**](../Model/Driver.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDvirs**
> \Swagger\Client\models\DvirListResponse getDvirs($access_token, $end_ms, $duration_ms, $group_id)

/fleet/maintenance/dvirs

Get the DVIR for the org with the time constraints

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$access_token = "access_token_example"; // string | Samsara API access token.
$end_ms = 56; // int | time in millis until the last dvir log.
$duration_ms = 56; // int | time in millis which corresponds to the duration before the end_ms.
$group_id = 56; // int | Group ID to query.

try {
    $result = $apiInstance->getDvirs($access_token, $end_ms, $duration_ms, $group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getDvirs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **access_token** | **string**| Samsara API access token. |
 **end_ms** | **int**| time in millis until the last dvir log. |
 **duration_ms** | **int**| time in millis which corresponds to the duration before the end_ms. |
 **group_id** | **int**| Group ID to query. | [optional]

### Return type

[**\Swagger\Client\models\DvirListResponse**](../Model/DvirListResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFleet**
> \Swagger\Client\models\InlineResponse2001 getFleet($access_token, $group_param)

/fleet/list

Get list of the vehicles. This method returns a list of the vehicles in the Samsara Cloud and information about them.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$access_token = "access_token_example"; // string | Samsara API access token.
$group_param = new \Swagger\Client\models\GroupParam(); // \Swagger\Client\models\GroupParam | Group ID to query.

try {
    $result = $apiInstance->getFleet($access_token, $group_param);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getFleet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **access_token** | **string**| Samsara API access token. |
 **group_param** | [**\Swagger\Client\models\GroupParam**](../Model/GroupParam.md)| Group ID to query. |

### Return type

[**\Swagger\Client\models\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFleetDrivers**
> \Swagger\Client\models\DriversRespose getFleetDrivers($access_token, $group_drivers_param)

/fleet/drivers

Get all the drivers for the specified group.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$access_token = "access_token_example"; // string | Samsara API access token.
$group_drivers_param = new \Swagger\Client\models\GroupDriversParam(); // \Swagger\Client\models\GroupDriversParam | 

try {
    $result = $apiInstance->getFleetDrivers($access_token, $group_drivers_param);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getFleetDrivers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **access_token** | **string**| Samsara API access token. |
 **group_drivers_param** | [**\Swagger\Client\models\GroupDriversParam**](../Model/GroupDriversParam.md)|  |

### Return type

[**\Swagger\Client\models\DriversRespose**](../Model/DriversRespose.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFleetDriversHosDailyLogs**
> \Swagger\Client\models\DriverDailyLogResponse getFleetDriversHosDailyLogs($access_token, $driver_id, $hos_logs_param)

/fleet/drivers/{driver_id:[0-9]+}/hos_daily_logs

Get summarized daily HOS charts for a specified driver.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$access_token = "access_token_example"; // string | Samsara API access token.
$driver_id = 789; // int | ID of the driver with HOS logs.
$hos_logs_param = new \Swagger\Client\models\HosLogsParam(); // \Swagger\Client\models\HosLogsParam | 

try {
    $result = $apiInstance->getFleetDriversHosDailyLogs($access_token, $driver_id, $hos_logs_param);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getFleetDriversHosDailyLogs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **access_token** | **string**| Samsara API access token. |
 **driver_id** | **int**| ID of the driver with HOS logs. |
 **hos_logs_param** | [**\Swagger\Client\models\HosLogsParam**](../Model/HosLogsParam.md)|  |

### Return type

[**\Swagger\Client\models\DriverDailyLogResponse**](../Model/DriverDailyLogResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFleetDriversSummary**
> \Swagger\Client\models\DriversSummaryResponse getFleetDriversSummary($access_token, $drivers_summary_param, $snap_to_day_bounds)

/fleet/drivers/summary

Get the distance and time each driver in an organization has driven in a given time period.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$access_token = "access_token_example"; // string | Samsara API access token.
$drivers_summary_param = new \Swagger\Client\models\DriversSummaryParam(); // \Swagger\Client\models\DriversSummaryParam | Org ID and time range to query.
$snap_to_day_bounds = true; // bool | Snap query result to HOS day boundaries.

try {
    $result = $apiInstance->getFleetDriversSummary($access_token, $drivers_summary_param, $snap_to_day_bounds);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getFleetDriversSummary: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **access_token** | **string**| Samsara API access token. |
 **drivers_summary_param** | [**\Swagger\Client\models\DriversSummaryParam**](../Model/DriversSummaryParam.md)| Org ID and time range to query. |
 **snap_to_day_bounds** | **bool**| Snap query result to HOS day boundaries. | [optional]

### Return type

[**\Swagger\Client\models\DriversSummaryResponse**](../Model/DriversSummaryResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFleetHosAuthenticationLogs**
> \Swagger\Client\models\HosAuthenticationLogsResponse getFleetHosAuthenticationLogs($access_token, $hos_authentication_logs_param)

/fleet/hos_authentication_logs

Get the HOS (hours of service) signin and signout logs for the specified driver. Only signout logs include location information.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$access_token = "access_token_example"; // string | Samsara API access token.
$hos_authentication_logs_param = new \Swagger\Client\models\HosAuthenticationLogsParam(); // \Swagger\Client\models\HosAuthenticationLogsParam | 

try {
    $result = $apiInstance->getFleetHosAuthenticationLogs($access_token, $hos_authentication_logs_param);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getFleetHosAuthenticationLogs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **access_token** | **string**| Samsara API access token. |
 **hos_authentication_logs_param** | [**\Swagger\Client\models\HosAuthenticationLogsParam**](../Model/HosAuthenticationLogsParam.md)|  |

### Return type

[**\Swagger\Client\models\HosAuthenticationLogsResponse**](../Model/HosAuthenticationLogsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFleetHosLogs**
> \Swagger\Client\models\HosLogsResponse getFleetHosLogs($access_token, $hos_logs_param)

/fleet/hos_logs

Get the HOS (hours of service) logs for the specified driver.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$access_token = "access_token_example"; // string | Samsara API access token.
$hos_logs_param = new \Swagger\Client\models\HosLogsParam1(); // \Swagger\Client\models\HosLogsParam1 | 

try {
    $result = $apiInstance->getFleetHosLogs($access_token, $hos_logs_param);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getFleetHosLogs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **access_token** | **string**| Samsara API access token. |
 **hos_logs_param** | [**\Swagger\Client\models\HosLogsParam1**](../Model/HosLogsParam1.md)|  |

### Return type

[**\Swagger\Client\models\HosLogsResponse**](../Model/HosLogsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFleetHosLogsSummary**
> \Swagger\Client\models\HosLogsSummaryResponse getFleetHosLogsSummary($access_token, $hos_logs_param)

/fleet/hos_logs_summary

Get the current HOS status for all drivers in the group.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$access_token = "access_token_example"; // string | Samsara API access token.
$hos_logs_param = new \Swagger\Client\models\HosLogsParam2(); // \Swagger\Client\models\HosLogsParam2 | 

try {
    $result = $apiInstance->getFleetHosLogsSummary($access_token, $hos_logs_param);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getFleetHosLogsSummary: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **access_token** | **string**| Samsara API access token. |
 **hos_logs_param** | [**\Swagger\Client\models\HosLogsParam2**](../Model/HosLogsParam2.md)|  |

### Return type

[**\Swagger\Client\models\HosLogsSummaryResponse**](../Model/HosLogsSummaryResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFleetLocations**
> \Swagger\Client\models\InlineResponse2002 getFleetLocations($access_token, $group_param)

/fleet/locations

Get current location of vehicles in a group. This method returns the current location in latitude and longitude of all vehicles in a requested group.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$access_token = "access_token_example"; // string | Samsara API access token.
$group_param = new \Swagger\Client\models\GroupParam(); // \Swagger\Client\models\GroupParam | Group ID to query.

try {
    $result = $apiInstance->getFleetLocations($access_token, $group_param);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getFleetLocations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **access_token** | **string**| Samsara API access token. |
 **group_param** | [**\Swagger\Client\models\GroupParam**](../Model/GroupParam.md)| Group ID to query. |

### Return type

[**\Swagger\Client\models\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFleetMaintenanceList**
> \Swagger\Client\models\InlineResponse2003 getFleetMaintenanceList($access_token, $group_param)

/fleet/maintenance/list

Get list of the vehicles with any engine faults or check light data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$access_token = "access_token_example"; // string | Samsara API access token.
$group_param = new \Swagger\Client\models\GroupParam(); // \Swagger\Client\models\GroupParam | Group ID to query.

try {
    $result = $apiInstance->getFleetMaintenanceList($access_token, $group_param);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getFleetMaintenanceList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **access_token** | **string**| Samsara API access token. |
 **group_param** | [**\Swagger\Client\models\GroupParam**](../Model/GroupParam.md)| Group ID to query. |

### Return type

[**\Swagger\Client\models\InlineResponse2003**](../Model/InlineResponse2003.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFleetTrips**
> \Swagger\Client\models\TripResponse getFleetTrips($access_token, $trips_param)

/fleet/trips

Get historical trips data for specified vehicle. This method returns a set of historical trips data for the specified vehicle in the specified time range.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$access_token = "access_token_example"; // string | Samsara API access token.
$trips_param = new \Swagger\Client\models\TripsParam(); // \Swagger\Client\models\TripsParam | Group ID, vehicle ID and time range to query.

try {
    $result = $apiInstance->getFleetTrips($access_token, $trips_param);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getFleetTrips: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **access_token** | **string**| Samsara API access token. |
 **trips_param** | [**\Swagger\Client\models\TripsParam**](../Model/TripsParam.md)| Group ID, vehicle ID and time range to query. |

### Return type

[**\Swagger\Client\models\TripResponse**](../Model/TripResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMachines**
> \Swagger\Client\models\InlineResponse2004 getMachines($access_token, $group_param)

/machines/list

Get machine objects. This method returns a list of the machine objects in the Samsara Cloud and information about them.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$access_token = "access_token_example"; // string | Samsara API access token.
$group_param = new \Swagger\Client\models\GroupParam(); // \Swagger\Client\models\GroupParam | Group ID to query.

try {
    $result = $apiInstance->getMachines($access_token, $group_param);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getMachines: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **access_token** | **string**| Samsara API access token. |
 **group_param** | [**\Swagger\Client\models\GroupParam**](../Model/GroupParam.md)| Group ID to query. |

### Return type

[**\Swagger\Client\models\InlineResponse2004**](../Model/InlineResponse2004.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMachinesHistory**
> \Swagger\Client\models\MachineHistoryResponse getMachinesHistory($access_token, $history_param)

/machines/history

Get historical data for machine objects. This method returns a set of historical data for all machines in a group

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$access_token = "access_token_example"; // string | Samsara API access token.
$history_param = new \Swagger\Client\models\HistoryParam1(); // \Swagger\Client\models\HistoryParam1 | Group ID and time range to query for events

try {
    $result = $apiInstance->getMachinesHistory($access_token, $history_param);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getMachinesHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **access_token** | **string**| Samsara API access token. |
 **history_param** | [**\Swagger\Client\models\HistoryParam1**](../Model/HistoryParam1.md)| Group ID and time range to query for events |

### Return type

[**\Swagger\Client\models\MachineHistoryResponse**](../Model/MachineHistoryResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSensors**
> \Swagger\Client\models\InlineResponse200 getSensors($access_token, $group_param)

/sensors/list

Get sensor objects. This method returns a list of the sensor objects in the Samsara Cloud and information about them.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$access_token = "access_token_example"; // string | Samsara API access token.
$group_param = new \Swagger\Client\models\GroupParam(); // \Swagger\Client\models\GroupParam | Group ID to query.

try {
    $result = $apiInstance->getSensors($access_token, $group_param);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getSensors: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **access_token** | **string**| Samsara API access token. |
 **group_param** | [**\Swagger\Client\models\GroupParam**](../Model/GroupParam.md)| Group ID to query. |

### Return type

[**\Swagger\Client\models\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSensorsHistory**
> \Swagger\Client\models\SensorHistoryResponse getSensorsHistory($access_token, $history_param)

/sensors/history

Get historical data for specified sensors. This method returns a set of historical data for the specified sensors in the specified time range and at the specified time resolution.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$access_token = "access_token_example"; // string | Samsara API access token.
$history_param = new \Swagger\Client\models\HistoryParam(); // \Swagger\Client\models\HistoryParam | Group ID, time range and resolution, and list of sensor ID, field pairs to query.

try {
    $result = $apiInstance->getSensorsHistory($access_token, $history_param);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getSensorsHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **access_token** | **string**| Samsara API access token. |
 **history_param** | [**\Swagger\Client\models\HistoryParam**](../Model/HistoryParam.md)| Group ID, time range and resolution, and list of sensor ID, field pairs to query. |

### Return type

[**\Swagger\Client\models\SensorHistoryResponse**](../Model/SensorHistoryResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSensorsHumidity**
> \Swagger\Client\models\HumidityResponse getSensorsHumidity($access_token, $sensor_param)

/sensors/humidity

Get humidity for requested sensors. This method returns the current relative humidity for the requested sensors.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$access_token = "access_token_example"; // string | Samsara API access token.
$sensor_param = new \Swagger\Client\models\SensorParam(); // \Swagger\Client\models\SensorParam | Group ID and list of sensor IDs to query.

try {
    $result = $apiInstance->getSensorsHumidity($access_token, $sensor_param);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getSensorsHumidity: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **access_token** | **string**| Samsara API access token. |
 **sensor_param** | [**\Swagger\Client\models\SensorParam**](../Model/SensorParam.md)| Group ID and list of sensor IDs to query. |

### Return type

[**\Swagger\Client\models\HumidityResponse**](../Model/HumidityResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSensorsTemperature**
> \Swagger\Client\models\TemperatureResponse getSensorsTemperature($access_token, $sensor_param)

/sensors/temperature

Get temperature for requested sensors. This method returns the current ambient temperature (and probe temperature if applicable) for the requested sensors.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$access_token = "access_token_example"; // string | Samsara API access token.
$sensor_param = new \Swagger\Client\models\SensorParam(); // \Swagger\Client\models\SensorParam | Group ID and list of sensor IDs to query.

try {
    $result = $apiInstance->getSensorsTemperature($access_token, $sensor_param);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getSensorsTemperature: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **access_token** | **string**| Samsara API access token. |
 **sensor_param** | [**\Swagger\Client\models\SensorParam**](../Model/SensorParam.md)| Group ID and list of sensor IDs to query. |

### Return type

[**\Swagger\Client\models\TemperatureResponse**](../Model/TemperatureResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reactivateDriverById**
> \Swagger\Client\models\Driver reactivateDriverById($access_token, $driver_id, $reactivate_driver_param)

/fleet/drivers/inactive/{driver_id:[0-9]+}

Reactivate the inactive driver having driver_id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$access_token = "access_token_example"; // string | Samsara API access token.
$driver_id = 789; // int | ID of the deactivated driver.
$reactivate_driver_param = new \Swagger\Client\models\ReactivateDriverParam(); // \Swagger\Client\models\ReactivateDriverParam | Driver reactivation body

try {
    $result = $apiInstance->reactivateDriverById($access_token, $driver_id, $reactivate_driver_param);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->reactivateDriverById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **access_token** | **string**| Samsara API access token. |
 **driver_id** | **int**| ID of the deactivated driver. |
 **reactivate_driver_param** | [**\Swagger\Client\models\ReactivateDriverParam**](../Model/ReactivateDriverParam.md)| Driver reactivation body |

### Return type

[**\Swagger\Client\models\Driver**](../Model/Driver.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateDispatchRouteById**
> \Swagger\Client\models\DispatchRoute updateDispatchRouteById($access_token, $route_id, $update_dispatch_route_params)

/fleet/dispatch/routes/{route_id:[0-9]+}/

Update a dispatch route and its associated jobs.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$access_token = "access_token_example"; // string | Samsara API access token.
$route_id = 789; // int | ID of the dispatch route.
$update_dispatch_route_params = new \Swagger\Client\models\DispatchRoute(); // \Swagger\Client\models\DispatchRoute | 

try {
    $result = $apiInstance->updateDispatchRouteById($access_token, $route_id, $update_dispatch_route_params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->updateDispatchRouteById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **access_token** | **string**| Samsara API access token. |
 **route_id** | **int**| ID of the dispatch route. |
 **update_dispatch_route_params** | [**\Swagger\Client\models\DispatchRoute**](../Model/DispatchRoute.md)|  |

### Return type

[**\Swagger\Client\models\DispatchRoute**](../Model/DispatchRoute.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateVehicles**
> updateVehicles($access_token, $vehicle_update_param)

/fleet/set_data

This method enables the mutation of metadata for vehicles in the Samsara Cloud.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$access_token = "access_token_example"; // string | Samsara API access token.
$vehicle_update_param = new \Swagger\Client\models\VehicleUpdateParam(); // \Swagger\Client\models\VehicleUpdateParam | 

try {
    $apiInstance->updateVehicles($access_token, $vehicle_update_param);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->updateVehicles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **access_token** | **string**| Samsara API access token. |
 **vehicle_update_param** | [**\Swagger\Client\models\VehicleUpdateParam**](../Model/VehicleUpdateParam.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

