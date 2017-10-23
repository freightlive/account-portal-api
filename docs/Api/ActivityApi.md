# BumbalAccountPortal\ActivityApi

All URIs are relative to *https://accountportal.bumbal.eu/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteActivity**](ActivityApi.md#deleteActivity) | **DELETE** /activity/{activityId} | Delete an activity
[**retrieveActivity**](ActivityApi.md#retrieveActivity) | **GET** /activity/{activityId} | Find activity by ID
[**setActivity**](ActivityApi.md#setActivity) | **POST** /activity/set | Set an activity


# **deleteActivity**
> \BumbalAccountPortal\Model\ApiResponse deleteActivity($activity_id)

Delete an activity

Delete an activity

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new BumbalAccountPortal\Api\ActivityApi();
$activity_id = 789; // int | ID of the activity to delete

try {
    $result = $api_instance->deleteActivity($activity_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivityApi->deleteActivity: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **activity_id** | **int**| ID of the activity to delete |

### Return type

[**\BumbalAccountPortal\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveActivity**
> \BumbalAccountPortal\Model\PortalParameterModel[] retrieveActivity($activity_id)

Find activity by ID

Returns a single activity

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new BumbalAccountPortal\Api\ActivityApi();
$activity_id = 789; // int | ID of activity to return

try {
    $result = $api_instance->retrieveActivity($activity_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivityApi->retrieveActivity: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **activity_id** | **int**| ID of activity to return |

### Return type

[**\BumbalAccountPortal\Model\PortalParameterModel[]**](../Model/PortalParameterModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setActivity**
> \BumbalAccountPortal\Model\PortalParameterModel[] setActivity($token)

Set an activity

Set an activity. Create if no id is specified, otherwise update

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new BumbalAccountPortal\Api\ActivityApi();
$token = "token_example"; // string | Token of the Requested Activity

try {
    $result = $api_instance->setActivity($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivityApi->setActivity: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Token of the Requested Activity |

### Return type

[**\BumbalAccountPortal\Model\PortalParameterModel[]**](../Model/PortalParameterModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

