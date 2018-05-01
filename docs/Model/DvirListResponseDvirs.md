# DvirListResponseDvirs

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**inspection_type** | **string** | Inspection type of the DVIR. | [optional] 
**vehicle** | [**\Swagger\Client\Model\DvirListResponseVehicle**](DvirListResponseVehicle.md) |  | [optional] 
**vehicle_defects** | [**\Swagger\Client\Model\DvirListResponseVehicleDefects[]**](DvirListResponseVehicleDefects.md) | Defects registered for the vehicle which was part of the DVIR. | [optional] 
**odometer_miles** | **int** | The odometer reading in miles for the vehicle when the DVIR was done. | [optional] 
**trailer_name** | **string** | The name of the trailer which was part of the DVIR. | [optional] 
**trailer_defects** | [**\Swagger\Client\Model\DvirListResponseVehicleDefects[]**](DvirListResponseVehicleDefects.md) | Defects registered for the trailer which was part of the DVIR. | [optional] 
**mechanic_notes** | **string** | The mechanics notes on the DVIR. | [optional] 
**vehicle_condition** | **string** | The condition of vechile on which DVIR was done. | [optional] 
**defects_corrected** | **bool** | Signifies if the defects on the vehicle corrected after the DVIR is done. | [optional] 
**defects_need_not_be_corrected** | **bool** | Signifies if the defects on this vehicle can be ignored. | [optional] 
**author_signature** | [**\Swagger\Client\Model\DvirListResponseAuthorSignature**](DvirListResponseAuthorSignature.md) |  | [optional] 
**mechanic_or_agent_signature** | [**\Swagger\Client\Model\DvirListResponseMechanicOrAgentSignature**](DvirListResponseMechanicOrAgentSignature.md) |  | [optional] 
**next_driver_signature** | [**\Swagger\Client\Model\DvirListResponseNextDriverSignature**](DvirListResponseNextDriverSignature.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


