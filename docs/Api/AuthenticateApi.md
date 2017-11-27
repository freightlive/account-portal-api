# BumbalAccountPortal\AuthenticateApi

All URIs are relative to *http://local.accountportal.bumbal.eu/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**authenticateSignIn**](AuthenticateApi.md#authenticateSignIn) | **POST** /authenticate/sign-in | Sign in and retrieve an AuthToken


# **authenticateSignIn**
> \BumbalAccountPortal\Model\AuthenticateResult authenticateSignIn($body)

Sign in and retrieve an AuthToken

Sign in and retrieve an AuthToken

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new BumbalAccountPortal\Api\AuthenticateApi();
$body = new \BumbalAccountPortal\Model\AuthenticateModel(); // \BumbalAccountPortal\Model\AuthenticateModel | Authenticate object

try {
    $result = $api_instance->authenticateSignIn($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticateApi->authenticateSignIn: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BumbalAccountPortal\Model\AuthenticateModel**](../Model/AuthenticateModel.md)| Authenticate object |

### Return type

[**\BumbalAccountPortal\Model\AuthenticateResult**](../Model/AuthenticateResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

