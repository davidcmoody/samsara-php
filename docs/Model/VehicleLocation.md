# VehicleLocation

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | ID of the vehicle. | 
**name** | **string** | Name of the vehicle. | [optional] 
**latitude** | **float** | Latitude in decimal degrees. | [optional] 
**longitude** | **float** | Longitude in decimal degrees. | [optional] 
**location** | **string** | Text representation of nearest identifiable location to (latitude, longitude) coordinates. | [optional] 
**vin** | **string** | Vehicle Identification Number (VIN) of the vehicle. | [optional] 
**time** | **int** | The time the reported location was logged, reported as a UNIX timestamp in milliseconds. | [optional] 
**on_trip** | **bool** | Whether or not a trip is currently in progress for this vehicle. More information available via /fleet/trips endpoint. | [optional] 
**speed** | **float** | Speed in miles per hour. | [optional] 
**heading** | **float** | Heading in degrees. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


