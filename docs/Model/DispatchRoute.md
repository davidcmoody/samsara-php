# DispatchRoute

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**vehicle_id** | **int** | ID of the vehicle assigned to the dispatch route. Note that vehicle_id and driver_id are mutually exclusive. If neither is specified, then the route is unassigned. | [optional] 
**driver_id** | **int** | ID of the driver assigned to the dispatch route. Note that driver_id and vehicle_id are mutually exclusive. If neither is specified, then the route is unassigned. | [optional] 
**scheduled_start_ms** | **int** | The time in Unix epoch milliseconds that the route is scheduled to start. | 
**scheduled_end_ms** | **int** | The time in Unix epoch milliseconds that the last job in the route is scheduled to end. | 
**name** | **string** | Descriptive name of this route. | 
**group_id** | **int** | ID of the group if the organization has multiple groups (optional). | [optional] 
**start_location_name** | **string** | The name of the route&#39;s starting location. | [optional] 
**start_location_address** | **string** | The address of the route&#39;s starting location, as it would be recognized if provided to maps.google.com | [optional] 
**start_location_lat** | **float** | Latitude of the destination in decimal degrees. | 
**start_location_lng** | **float** | Latitude of the destination in decimal degrees. | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


