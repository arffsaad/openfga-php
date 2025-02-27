# RuncloudIO\SDK\OPENFGA\AssertionsApi

All URIs are relative to *my-openfga.infrastructure.svc.cluster.local:8081*

Method | HTTP request | Description
------------- | ------------- | -------------
[**readAssertions**](AssertionsApi.md#readassertions) | **GET** /stores/{store_id}/assertions/{authorization_model_id} | Read assertions for an authorization model ID
[**writeAssertions**](AssertionsApi.md#writeassertions) | **PUT** /stores/{store_id}/assertions/{authorization_model_id} | Upsert assertions for an authorization model ID

# **readAssertions**
> \RuncloudIO\SDK\OPENFGA\Model\ReadAssertionsResponse readAssertions($store_id, $authorization_model_id)

Read assertions for an authorization model ID

The ReadAssertions API will return, for a given authorization model id, all the assertions stored for it.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new RuncloudIO\SDK\OPENFGA\Api\AssertionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$store_id = "store_id_example"; // string | 
$authorization_model_id = "authorization_model_id_example"; // string | 

try {
    $result = $apiInstance->readAssertions($store_id, $authorization_model_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssertionsApi->readAssertions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**|  |
 **authorization_model_id** | **string**|  |

### Return type

[**\RuncloudIO\SDK\OPENFGA\Model\ReadAssertionsResponse**](../Model/ReadAssertionsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **writeAssertions**
> writeAssertions($body, $store_id, $authorization_model_id)

Upsert assertions for an authorization model ID

The WriteAssertions API will upsert new assertions for an authorization model id, or overwrite the existing ones. An assertion is an object that contains a tuple key, the expectation of whether a call to the Check API of that tuple key will return true or false, and optionally a list of contextual tuples.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new RuncloudIO\SDK\OPENFGA\Api\AssertionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \RuncloudIO\SDK\OPENFGA\Model\AssertionsAuthorizationModelIdBody(); // \RuncloudIO\SDK\OPENFGA\Model\AssertionsAuthorizationModelIdBody | 
$store_id = "store_id_example"; // string | 
$authorization_model_id = "authorization_model_id_example"; // string | 

try {
    $apiInstance->writeAssertions($body, $store_id, $authorization_model_id);
} catch (Exception $e) {
    echo 'Exception when calling AssertionsApi->writeAssertions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\RuncloudIO\SDK\OPENFGA\Model\AssertionsAuthorizationModelIdBody**](../Model/AssertionsAuthorizationModelIdBody.md)|  |
 **store_id** | **string**|  |
 **authorization_model_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

