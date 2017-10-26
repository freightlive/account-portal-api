# ActivityModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | ID of this Activity | [optional] 
**nr** | **string** | Number of this Activity | [optional] 
**activity_type_id** | **int** | Type ID of this Activity | [optional] 
**activity_type_name** | **string** | Type of this Activity | [optional] 
**status_name** | **string** | Status of this Activity | [optional] 
**reference** | **string** | Reference number | [optional] 
**duration** | **int** | Max duration of the activity in minutes | [optional] 
**date_time_from** | [**\DateTime**](\DateTime.md) | Planned start time of this activity | [optional] 
**date_time_to** | [**\DateTime**](\DateTime.md) | Planned stop time of this activity | [optional] 
**address** | [**\BumbalAccountPortal\Model\AddressModel**](AddressModel.md) |  | [optional] 
**tags** | [**\BumbalAccountPortal\Model\TagModel**](TagModel.md) |  | [optional] 
**communication** | [**\BumbalAccountPortal\Model\CommunicationModel**](CommunicationModel.md) |  | [optional] 
**package_lines** | [**\BumbalAccountPortal\Model\PackageLineModel[]**](PackageLineModel.md) |  | [optional] 
**notes** | [**\BumbalAccountPortal\Model\NoteModel[]**](NoteModel.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


