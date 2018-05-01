# Swagger\Client\FleetApi

All URIs are relative to *https://api.samsara.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addFleetAddress**](FleetApi.md#addFleetAddress) | **POST** /fleet/add_address | /fleet/add_address
[**createDispatchRoute**](FleetApi.md#createDispatchRoute) | **POST** /fleet/dispatch/routes | /fleet/dispatch/routes
[**createDriver**](FleetApi.md#createDriver) | **POST** /fleet/drivers/create | /fleet/drivers/create
[**createDriverDispatchRoute**](FleetApi.md#createDriverDispatchRoute) | **POST** /fleet/drivers/{driver_id}/dispatch/routes | /fleet/drivers/{driver_id:[0-9]+}/dispatch/routes
[**createVehicleDispatchRoute**](FleetApi.md#createVehicleDispatchRoute) | **POST** /fleet/vehicles/{vehicle_id}/dispatch/routes | /fleet/vehicles/{vehicle_id:[0-9]+}/dispatch/routes
[**deactivateDriver**](FleetApi.md#deactivateDriver) | **DELETE** /fleet/drivers/{driver_id} | /fleet/drivers/{driver_id:[0-9]+}
[**deleteDispatchRouteById**](FleetApi.md#deleteDispatchRouteById) | **DELETE** /fleet/dispatch/routes/{route_id} | /fleet/dispatch/routes/{route_id:[0-9]+}/
[**fetchAllDispatchRoutes**](FleetApi.md#fetchAllDispatchRoutes) | **GET** /fleet/dispatch/routes | /fleet/dispatch/routes
[**getAllAssets**](FleetApi.md#getAllAssets) | **GET** /fleet/assets | /v1/fleet/assets
[**getAllDeactivatedDrivers**](FleetApi.md#getAllDeactivatedDrivers) | **GET** /fleet/drivers/inactive | /fleet/drivers/inactive
[**getAssetLocation**](FleetApi.md#getAssetLocation) | **GET** /fleet/assets/{asset_id}/locations | /fleet/assets/{assetId:[0-9]+}/locations
[**getAssetReefer**](FleetApi.md#getAssetReefer) | **GET** /fleet/assets/{asset_id}/reefer | /fleet/assets/{assetId:[0-9]+}/reefer
[**getDeactivatedDriverById**](FleetApi.md#getDeactivatedDriverById) | **GET** /fleet/drivers/inactive/{driver_id} | /fleet/drivers/inactive/{driver_id:[0-9]+}
[**getDispatchRouteById**](FleetApi.md#getDispatchRouteById) | **GET** /fleet/dispatch/routes/{route_id} | /fleet/dispatch/routes/{route_id:[0-9]+}
[**getDispatchRouteHistory**](FleetApi.md#getDispatchRouteHistory) | **GET** /fleet/dispatch/routes/{route_id}/history | /fleet/dispatch/routes/{route_id:[0-9]+}/history
[**getDispatchRoutesByDriverId**](FleetApi.md#getDispatchRoutesByDriverId) | **GET** /fleet/drivers/{driver_id}/dispatch/routes | /fleet/drivers/{driver_id:[0-9]+}/dispatch/routes
[**getDispatchRoutesByVehicleId**](FleetApi.md#getDispatchRoutesByVehicleId) | **GET** /fleet/vehicles/{vehicle_id}/dispatch/routes | /fleet/vehicles/{vehicle_id:[0-9]+}/dispatch/routes
[**getDriverById**](FleetApi.md#getDriverById) | **GET** /fleet/drivers/{driver_id} | /fleet/drivers/{driver_id:[0-9]+}
[**getDvirs**](FleetApi.md#getDvirs) | **GET** /fleet/maintenance/dvirs | /fleet/maintenance/dvirs
[**getFleet**](FleetApi.md#getFleet) | **POST** /fleet/list | /fleet/list
[**getFleetDrivers**](FleetApi.md#getFleetDrivers) | **POST** /fleet/drivers | /fleet/drivers
[**getFleetDriversHosDailyLogs**](FleetApi.md#getFleetDriversHosDailyLogs) | **POST** /fleet/drivers/{driver_id}/hos_daily_logs | /fleet/drivers/{driver_id:[0-9]+}/hos_daily_logs
[**getFleetDriversSummary**](FleetApi.md#getFleetDriversSummary) | **POST** /fleet/drivers/summary | /fleet/drivers/summary
[**getFleetHosAuthenticationLogs**](FleetApi.md#getFleetHosAuthenticationLogs) | **POST** /fleet/hos_authentication_logs | /fleet/hos_authentication_logs
[**getFleetHosLogs**](FleetApi.md#getFleetHosLogs) | **POST** /fleet/hos_logs | /fleet/hos_logs
[**getFleetHosLogsSummary**](FleetApi.md#getFleetHosLogsSummary) | **POST** /fleet/hos_logs_summary | /fleet/hos_logs_summary
[**getFleetLocations**](FleetApi.md#getFleetLocations) | **POST** /fleet/locations | /fleet/locations
[**getFleetMaintenanceList**](FleetApi.md#getFleetMaintenanceList) | **POST** /fleet/maintenance/list | /fleet/maintenance/list
[**getFleetTrips**](FleetApi.md#getFleetTrips) | **POST** /fleet/trips | /fleet/trips
[**reactivateDriverById**](FleetApi.md#reactivateDriverById) | **PUT** /fleet/drivers/inactive/{driver_id} | /fleet/drivers/inactive/{driver_id:[0-9]+}
[**updateDispatchRouteById**](FleetApi.md#updateDispatchRouteById) | **PUT** /fleet/dispatch/routes/{route_id} | /fleet/dispatch/routes/{route_id:[0-9]+}/
[**updateVehicles**](FleetApi.md#updateVehicles) | **POST** /fleet/set_data | /fleet/set_data


# **addFleetAddress**
> addFleetAddress($access_token, $address_param)

/fleet/add_address

This method adds an address book entry to the specified group.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\FleetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$access_token = "access_token_example"; // string | Samsara API access token.
$address_param = new \Swagger\Client\Model\AddressParam(); // \Swagger\Client\Model\AddressParam | 

try {
    $apiInstance->addFleetAddress($access_token, $address_param);
} catch (Exception $e) {
    echo 'Exception when calling FleetApi->addFleetAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **access_token** | **string**| Samsara API access token. |
 **address_param** | [**\Swagger\Client\Model\AddressParam**](../Model/AddressParam.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createDispatchRoute**
> \Swagger\Client\Model\DispatchRoute createDispatchRoute($access_token, $create_dispatch_route_params)

/fleet/dispatch/routes

Create a new dispatch route.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\FleetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$access_token = "access_token_example"; // string | Samsara API access token.
$create_dispatch_route_params = new \Swagger\Client\Model\DispatchRouteCreate(); // \Swagger\Client\Model\DispatchRouteCreate | 

try {
    $result = $apiInstance->createDispatchRoute($access_token, $create_dispatch_route_params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FleetApi->createDispatchRoute: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **access_token** | **string**| Samsara API access token. |
 **create_dispatch_route_params** | [**\Swagger\Client\Model\DispatchRouteCreate**](../Model/DispatchRouteCreate.md)|  |

### Return type

[**\Swagger\Client\Model\DispatchRoute**](../Model/DispatchRoute.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createDriver**
> \Swagger\Client\Model\Driver createDriver($access_token, $create_driver_param)

/fleet/drivers/create

Create a new driver.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\FleetApi(
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
    echo 'Exception when calling FleetApi->createDriver: ', $e->getMessage(), PHP_EOL;
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

# **createDriverDispatchRoute**
> \Swagger\Client\Model\DispatchRoute createDriverDispatchRoute($access_token, $driver_id, $create_dispatch_route_params)

/fleet/drivers/{driver_id:[0-9]+}/dispatch/routes

Create a new dispatch route for the driver with driver_id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\FleetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$access_token = "access_token_example"; // string | Samsara API access token.
$driver_id = 789; // int | ID of the driver with the associated routes.
$create_dispatch_route_params = new \Swagger\Client\Model\DispatchRouteCreate(); // \Swagger\Client\Model\DispatchRouteCreate | 

try {
    $result = $apiInstance->createDriverDispatchRoute($access_token, $driver_id, $create_dispatch_route_params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FleetApi->createDriverDispatchRoute: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **access_token** | **string**| Samsara API access token. |
 **driver_id** | **int**| ID of the driver with the associated routes. |
 **create_dispatch_route_params** | [**\Swagger\Client\Model\DispatchRouteCreate**](../Model/DispatchRouteCreate.md)|  |

### Return type

[**\Swagger\Client\Model\DispatchRoute**](../Model/DispatchRoute.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createVehicleDispatchRoute**
> \Swagger\Client\Model\DispatchRoute createVehicleDispatchRoute($access_token, $vehicle_id, $create_dispatch_route_params)

/fleet/vehicles/{vehicle_id:[0-9]+}/dispatch/routes

Create a new dispatch route for the vehicle with vehicle_id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\FleetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$access_token = "access_token_example"; // string | Samsara API access token.
$vehicle_id = 789; // int | ID of the vehicle with the associated routes.
$create_dispatch_route_params = new \Swagger\Client\Model\DispatchRouteCreate(); // \Swagger\Client\Model\DispatchRouteCreate | 

try {
    $result = $apiInstance->createVehicleDispatchRoute($access_token, $vehicle_id, $create_dispatch_route_params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FleetApi->createVehicleDispatchRoute: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **access_token** | **string**| Samsara API access token. |
 **vehicle_id** | **int**| ID of the vehicle with the associated routes. |
 **create_dispatch_route_params** | [**\Swagger\Client\Model\DispatchRouteCreate**](../Model/DispatchRouteCreate.md)|  |

### Return type

[**\Swagger\Client\Model\DispatchRoute**](../Model/DispatchRoute.md)

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

$apiInstance = new Swagger\Client\Api\FleetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$access_token = "access_token_example"; // string | Samsara API access token.
$driver_id = 789; // int | ID of the driver.

try {
    $apiInstance->deactivateDriver($access_token, $driver_id);
} catch (Exception $e) {
    echo 'Exception when calling FleetApi->deactivateDriver: ', $e->getMessage(), PHP_EOL;
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

$apiInstance = new Swagger\Client\Api\FleetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$access_token = "access_token_example"; // string | Samsara API access token.
$route_id = 789; // int | ID of the dispatch route.

try {
    $apiInstance->deleteDispatchRouteById($access_token, $route_id);
} catch (Exception $e) {
    echo 'Exception when calling FleetApi->deleteDispatchRouteById: ', $e->getMessage(), PHP_EOL;
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
> \Swagger\Client\Model\DispatchRoutes fetchAllDispatchRoutes($access_token, $group_id, $end_time, $duration)

/fleet/dispatch/routes

Fetch all of the dispatch routes for the group.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\FleetApi(
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
    echo 'Exception when calling FleetApi->fetchAllDispatchRoutes: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\DispatchRoutes**](../Model/DispatchRoutes.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllAssets**
> \Swagger\Client\Model\InlineResponse2005 getAllAssets($access_token, $group_param)

/v1/fleet/assets

Fetch all of the assets for the group.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\FleetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$access_token = "access_token_example"; // string | Samsara API access token.
$group_param = new \Swagger\Client\Model\GroupParam5(); // \Swagger\Client\Model\GroupParam5 | Group ID to query.

try {
    $result = $apiInstance->getAllAssets($access_token, $group_param);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FleetApi->getAllAssets: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **access_token** | **string**| Samsara API access token. |
 **group_param** | [**\Swagger\Client\Model\GroupParam5**](../Model/GroupParam5.md)| Group ID to query. |

### Return type

[**\Swagger\Client\Model\InlineResponse2005**](../Model/InlineResponse2005.md)

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

$apiInstance = new Swagger\Client\Api\FleetApi(
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
    echo 'Exception when calling FleetApi->getAllDeactivatedDrivers: ', $e->getMessage(), PHP_EOL;
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

# **getAssetLocation**
> \Swagger\Client\Model\AssetLocationResponse getAssetLocation($access_token, $asset_id, $start_ms, $end_ms)

/fleet/assets/{assetId:[0-9]+}/locations

Fetch the historical locations for the asset.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\FleetApi(
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
    echo 'Exception when calling FleetApi->getAssetLocation: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\AssetLocationResponse**](../Model/AssetLocationResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAssetReefer**
> \Swagger\Client\Model\AssetReeferResponse getAssetReefer($access_token, $asset_id, $start_ms, $end_ms)

/fleet/assets/{assetId:[0-9]+}/reefer

Fetch the reefer-specific stats of an asset.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\FleetApi(
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
    echo 'Exception when calling FleetApi->getAssetReefer: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\AssetReeferResponse**](../Model/AssetReeferResponse.md)

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

$apiInstance = new Swagger\Client\Api\FleetApi(
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
    echo 'Exception when calling FleetApi->getDeactivatedDriverById: ', $e->getMessage(), PHP_EOL;
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

# **getDispatchRouteById**
> \Swagger\Client\Model\DispatchRoute getDispatchRouteById($access_token, $route_id)

/fleet/dispatch/routes/{route_id:[0-9]+}

Fetch a dispatch route by id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\FleetApi(
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
    echo 'Exception when calling FleetApi->getDispatchRouteById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **access_token** | **string**| Samsara API access token. |
 **route_id** | **int**| ID of the dispatch route. |

### Return type

[**\Swagger\Client\Model\DispatchRoute**](../Model/DispatchRoute.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDispatchRouteHistory**
> \Swagger\Client\Model\DispatchRouteHistory getDispatchRouteHistory($access_token, $route_id, $start_time, $end_time)

/fleet/dispatch/routes/{route_id:[0-9]+}/history

Fetch the history of a dispatch route.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\FleetApi(
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
    echo 'Exception when calling FleetApi->getDispatchRouteHistory: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\DispatchRouteHistory**](../Model/DispatchRouteHistory.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDispatchRoutesByDriverId**
> \Swagger\Client\Model\DispatchRoutes getDispatchRoutesByDriverId($access_token, $driver_id, $end_time, $duration)

/fleet/drivers/{driver_id:[0-9]+}/dispatch/routes

Fetch all of the dispatch routes for a given driver.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\FleetApi(
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
    echo 'Exception when calling FleetApi->getDispatchRoutesByDriverId: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\DispatchRoutes**](../Model/DispatchRoutes.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDispatchRoutesByVehicleId**
> \Swagger\Client\Model\DispatchRoutes getDispatchRoutesByVehicleId($access_token, $vehicle_id, $end_time, $duration)

/fleet/vehicles/{vehicle_id:[0-9]+}/dispatch/routes

Fetch all of the dispatch routes for a given vehicle.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\FleetApi(
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
    echo 'Exception when calling FleetApi->getDispatchRoutesByVehicleId: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\DispatchRoutes**](../Model/DispatchRoutes.md)

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

$apiInstance = new Swagger\Client\Api\FleetApi(
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
    echo 'Exception when calling FleetApi->getDriverById: ', $e->getMessage(), PHP_EOL;
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

# **getDvirs**
> \Swagger\Client\Model\DvirListResponse getDvirs($access_token, $end_ms, $duration_ms, $group_id)

/fleet/maintenance/dvirs

Get the DVIR for the org with the time constraints

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\FleetApi(
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
    echo 'Exception when calling FleetApi->getDvirs: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\DvirListResponse**](../Model/DvirListResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFleet**
> \Swagger\Client\Model\InlineResponse2001 getFleet($access_token, $group_param)

/fleet/list

Get list of the vehicles. This method returns a list of the vehicles in the Samsara Cloud and information about them.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\FleetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$access_token = "access_token_example"; // string | Samsara API access token.
$group_param = new \Swagger\Client\Model\GroupParam1(); // \Swagger\Client\Model\GroupParam1 | Group ID to query.

try {
    $result = $apiInstance->getFleet($access_token, $group_param);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FleetApi->getFleet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **access_token** | **string**| Samsara API access token. |
 **group_param** | [**\Swagger\Client\Model\GroupParam1**](../Model/GroupParam1.md)| Group ID to query. |

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFleetDrivers**
> \Swagger\Client\Model\DriversRespose getFleetDrivers($access_token, $group_drivers_param)

/fleet/drivers

Get all the drivers for the specified group.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\FleetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$access_token = "access_token_example"; // string | Samsara API access token.
$group_drivers_param = new \Swagger\Client\Model\GroupDriversParam(); // \Swagger\Client\Model\GroupDriversParam | 

try {
    $result = $apiInstance->getFleetDrivers($access_token, $group_drivers_param);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FleetApi->getFleetDrivers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **access_token** | **string**| Samsara API access token. |
 **group_drivers_param** | [**\Swagger\Client\Model\GroupDriversParam**](../Model/GroupDriversParam.md)|  |

### Return type

[**\Swagger\Client\Model\DriversRespose**](../Model/DriversRespose.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFleetDriversHosDailyLogs**
> \Swagger\Client\Model\DriverDailyLogResponse getFleetDriversHosDailyLogs($access_token, $driver_id, $hos_logs_param)

/fleet/drivers/{driver_id:[0-9]+}/hos_daily_logs

Get summarized daily HOS charts for a specified driver.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\FleetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$access_token = "access_token_example"; // string | Samsara API access token.
$driver_id = 789; // int | ID of the driver with HOS logs.
$hos_logs_param = new \Swagger\Client\Model\HosLogsParam(); // \Swagger\Client\Model\HosLogsParam | 

try {
    $result = $apiInstance->getFleetDriversHosDailyLogs($access_token, $driver_id, $hos_logs_param);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FleetApi->getFleetDriversHosDailyLogs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **access_token** | **string**| Samsara API access token. |
 **driver_id** | **int**| ID of the driver with HOS logs. |
 **hos_logs_param** | [**\Swagger\Client\Model\HosLogsParam**](../Model/HosLogsParam.md)|  |

### Return type

[**\Swagger\Client\Model\DriverDailyLogResponse**](../Model/DriverDailyLogResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFleetDriversSummary**
> \Swagger\Client\Model\DriversSummaryResponse getFleetDriversSummary($access_token, $drivers_summary_param, $snap_to_day_bounds)

/fleet/drivers/summary

Get the distance and time each driver in an organization has driven in a given time period.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\FleetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$access_token = "access_token_example"; // string | Samsara API access token.
$drivers_summary_param = new \Swagger\Client\Model\DriversSummaryParam(); // \Swagger\Client\Model\DriversSummaryParam | Org ID and time range to query.
$snap_to_day_bounds = true; // bool | Snap query result to HOS day boundaries.

try {
    $result = $apiInstance->getFleetDriversSummary($access_token, $drivers_summary_param, $snap_to_day_bounds);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FleetApi->getFleetDriversSummary: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **access_token** | **string**| Samsara API access token. |
 **drivers_summary_param** | [**\Swagger\Client\Model\DriversSummaryParam**](../Model/DriversSummaryParam.md)| Org ID and time range to query. |
 **snap_to_day_bounds** | **bool**| Snap query result to HOS day boundaries. | [optional]

### Return type

[**\Swagger\Client\Model\DriversSummaryResponse**](../Model/DriversSummaryResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFleetHosAuthenticationLogs**
> \Swagger\Client\Model\HosAuthenticationLogsResponse getFleetHosAuthenticationLogs($access_token, $hos_authentication_logs_param)

/fleet/hos_authentication_logs

Get the HOS (hours of service) signin and signout logs for the specified driver. Only signout logs include location information.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\FleetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$access_token = "access_token_example"; // string | Samsara API access token.
$hos_authentication_logs_param = new \Swagger\Client\Model\HosAuthenticationLogsParam(); // \Swagger\Client\Model\HosAuthenticationLogsParam | 

try {
    $result = $apiInstance->getFleetHosAuthenticationLogs($access_token, $hos_authentication_logs_param);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FleetApi->getFleetHosAuthenticationLogs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **access_token** | **string**| Samsara API access token. |
 **hos_authentication_logs_param** | [**\Swagger\Client\Model\HosAuthenticationLogsParam**](../Model/HosAuthenticationLogsParam.md)|  |

### Return type

[**\Swagger\Client\Model\HosAuthenticationLogsResponse**](../Model/HosAuthenticationLogsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFleetHosLogs**
> \Swagger\Client\Model\HosLogsResponse getFleetHosLogs($access_token, $hos_logs_param)

/fleet/hos_logs

Get the HOS (hours of service) logs for the specified driver.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\FleetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$access_token = "access_token_example"; // string | Samsara API access token.
$hos_logs_param = new \Swagger\Client\Model\HosLogsParam1(); // \Swagger\Client\Model\HosLogsParam1 | 

try {
    $result = $apiInstance->getFleetHosLogs($access_token, $hos_logs_param);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FleetApi->getFleetHosLogs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **access_token** | **string**| Samsara API access token. |
 **hos_logs_param** | [**\Swagger\Client\Model\HosLogsParam1**](../Model/HosLogsParam1.md)|  |

### Return type

[**\Swagger\Client\Model\HosLogsResponse**](../Model/HosLogsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFleetHosLogsSummary**
> \Swagger\Client\Model\HosLogsSummaryResponse getFleetHosLogsSummary($access_token, $hos_logs_param)

/fleet/hos_logs_summary

Get the current HOS status for all drivers in the group.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\FleetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$access_token = "access_token_example"; // string | Samsara API access token.
$hos_logs_param = new \Swagger\Client\Model\HosLogsParam2(); // \Swagger\Client\Model\HosLogsParam2 | 

try {
    $result = $apiInstance->getFleetHosLogsSummary($access_token, $hos_logs_param);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FleetApi->getFleetHosLogsSummary: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **access_token** | **string**| Samsara API access token. |
 **hos_logs_param** | [**\Swagger\Client\Model\HosLogsParam2**](../Model/HosLogsParam2.md)|  |

### Return type

[**\Swagger\Client\Model\HosLogsSummaryResponse**](../Model/HosLogsSummaryResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFleetLocations**
> \Swagger\Client\Model\InlineResponse2002 getFleetLocations($access_token, $group_param)

/fleet/locations

Get current location of vehicles in a group. This method returns the current location in latitude and longitude of all vehicles in a requested group.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\FleetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$access_token = "access_token_example"; // string | Samsara API access token.
$group_param = new \Swagger\Client\Model\GroupParam2(); // \Swagger\Client\Model\GroupParam2 | Group ID to query.

try {
    $result = $apiInstance->getFleetLocations($access_token, $group_param);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FleetApi->getFleetLocations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **access_token** | **string**| Samsara API access token. |
 **group_param** | [**\Swagger\Client\Model\GroupParam2**](../Model/GroupParam2.md)| Group ID to query. |

### Return type

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFleetMaintenanceList**
> \Swagger\Client\Model\InlineResponse2003 getFleetMaintenanceList($access_token, $group_param)

/fleet/maintenance/list

Get list of the vehicles with any engine faults or check light data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\FleetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$access_token = "access_token_example"; // string | Samsara API access token.
$group_param = new \Swagger\Client\Model\GroupParam3(); // \Swagger\Client\Model\GroupParam3 | Group ID to query.

try {
    $result = $apiInstance->getFleetMaintenanceList($access_token, $group_param);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FleetApi->getFleetMaintenanceList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **access_token** | **string**| Samsara API access token. |
 **group_param** | [**\Swagger\Client\Model\GroupParam3**](../Model/GroupParam3.md)| Group ID to query. |

### Return type

[**\Swagger\Client\Model\InlineResponse2003**](../Model/InlineResponse2003.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFleetTrips**
> \Swagger\Client\Model\TripResponse getFleetTrips($access_token, $trips_param)

/fleet/trips

Get historical trips data for specified vehicle. This method returns a set of historical trips data for the specified vehicle in the specified time range.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\FleetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$access_token = "access_token_example"; // string | Samsara API access token.
$trips_param = new \Swagger\Client\Model\TripsParam(); // \Swagger\Client\Model\TripsParam | Group ID, vehicle ID and time range to query.

try {
    $result = $apiInstance->getFleetTrips($access_token, $trips_param);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FleetApi->getFleetTrips: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **access_token** | **string**| Samsara API access token. |
 **trips_param** | [**\Swagger\Client\Model\TripsParam**](../Model/TripsParam.md)| Group ID, vehicle ID and time range to query. |

### Return type

[**\Swagger\Client\Model\TripResponse**](../Model/TripResponse.md)

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

$apiInstance = new Swagger\Client\Api\FleetApi(
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
    echo 'Exception when calling FleetApi->reactivateDriverById: ', $e->getMessage(), PHP_EOL;
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

# **updateDispatchRouteById**
> \Swagger\Client\Model\DispatchRoute updateDispatchRouteById($access_token, $route_id, $update_dispatch_route_params)

/fleet/dispatch/routes/{route_id:[0-9]+}/

Update a dispatch route and its associated jobs.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\FleetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$access_token = "access_token_example"; // string | Samsara API access token.
$route_id = 789; // int | ID of the dispatch route.
$update_dispatch_route_params = new \Swagger\Client\Model\DispatchRoute(); // \Swagger\Client\Model\DispatchRoute | 

try {
    $result = $apiInstance->updateDispatchRouteById($access_token, $route_id, $update_dispatch_route_params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FleetApi->updateDispatchRouteById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **access_token** | **string**| Samsara API access token. |
 **route_id** | **int**| ID of the dispatch route. |
 **update_dispatch_route_params** | [**\Swagger\Client\Model\DispatchRoute**](../Model/DispatchRoute.md)|  |

### Return type

[**\Swagger\Client\Model\DispatchRoute**](../Model/DispatchRoute.md)

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

$apiInstance = new Swagger\Client\Api\FleetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$access_token = "access_token_example"; // string | Samsara API access token.
$vehicle_update_param = new \Swagger\Client\Model\VehicleUpdateParam(); // \Swagger\Client\Model\VehicleUpdateParam | 

try {
    $apiInstance->updateVehicles($access_token, $vehicle_update_param);
} catch (Exception $e) {
    echo 'Exception when calling FleetApi->updateVehicles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **access_token** | **string**| Samsara API access token. |
 **vehicle_update_param** | [**\Swagger\Client\Model\VehicleUpdateParam**](../Model/VehicleUpdateParam.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

