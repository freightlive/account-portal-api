# ActivityModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**nr** | **string** | Number of this Activity | [optional] 
**activity_type_name** | **string** | Type of this Activity | [optional] 
**status_name** | **string** | Status of this Activity | [optional] 
**reference** | **string** | Reference number | [optional] 
**duration** | **int** | Max duration of the activity in minutes | [optional] 
**date_time_from** | [**\DateTime**](\DateTime.md) | Planned start time of this activity | [optional] 
**date_time_to** | [**\DateTime**](\DateTime.md) | Planned stop time of this activity | [optional] 
**driver_full_name** | **string** | Name of the driver assigned to this route | [optional] 
**route_status** | **string** | Status of the Route this Activity is planned on | [optional] 
**route_latest_position** | [**\BumbalAccountPortal\Model\GeoPositionModel**](GeoPositionModel.md) |  | [optional] 
**address** | [**\BumbalAccountPortal\Model\AddressModel**](AddressModel.md) |  | [optional] 
**package_lines** | [**\BumbalAccountPortal\Model\PackageLineModel[]**](PackageLineModel.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)

