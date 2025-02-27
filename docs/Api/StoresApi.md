# RuncloudIO\SDK\OPENFGA\StoresApi

All URIs are relative to *my-openfga.infrastructure.svc.cluster.local:8081*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createStore**](StoresApi.md#createstore) | **POST** /stores | Create a store
[**deleteStore**](StoresApi.md#deletestore) | **DELETE** /stores/{store_id} | Delete a store
[**getStore**](StoresApi.md#getstore) | **GET** /stores/{store_id} | Get a store
[**listStores**](StoresApi.md#liststores) | **GET** /stores | List all stores

# **createStore**
> \RuncloudIO\SDK\OPENFGA\Model\CreateStoreResponse createStore($body)

Create a store

Create a unique OpenFGA store which will be used to store authorization models and relationship tuples.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new RuncloudIO\SDK\OPENFGA\Api\StoresApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \RuncloudIO\SDK\OPENFGA\Model\CreateStoreRequest(); // \RuncloudIO\SDK\OPENFGA\Model\CreateStoreRequest | 

try {
    $result = $apiInstance->createStore($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoresApi->createStore: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\RuncloudIO\SDK\OPENFGA\Model\CreateStoreRequest**](../Model/CreateStoreRequest.md)|  |

### Return type

[**\RuncloudIO\SDK\OPENFGA\Model\CreateStoreResponse**](../Model/CreateStoreResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteStore**
> deleteStore($store_id)

Delete a store

Delete an OpenFGA store. This does not delete the data associated with the store, like tuples or authorization models.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new RuncloudIO\SDK\OPENFGA\Api\StoresApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$store_id = "store_id_example"; // string | 

try {
    $apiInstance->deleteStore($store_id);
} catch (Exception $e) {
    echo 'Exception when calling StoresApi->deleteStore: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStore**
> \RuncloudIO\SDK\OPENFGA\Model\GetStoreResponse getStore($store_id)

Get a store

Returns an OpenFGA store by its identifier

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new RuncloudIO\SDK\OPENFGA\Api\StoresApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$store_id = "store_id_example"; // string | 

try {
    $result = $apiInstance->getStore($store_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoresApi->getStore: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**|  |

### Return type

[**\RuncloudIO\SDK\OPENFGA\Model\GetStoreResponse**](../Model/GetStoreResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listStores**
> \RuncloudIO\SDK\OPENFGA\Model\ListStoresResponse listStores($page_size, $continuation_token, $name)

List all stores

Returns a paginated list of OpenFGA stores and a continuation token to get additional stores. The continuation token will be empty if there are no more stores.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new RuncloudIO\SDK\OPENFGA\Api\StoresApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$page_size = 56; // int | 
$continuation_token = "continuation_token_example"; // string | 
$name = "name_example"; // string | The name parameter instructs the API to only include results that match that name.Multiple results may be returned. Only exact matches will be returned; substring matches and regexes will not be evaluated

try {
    $result = $apiInstance->listStores($page_size, $continuation_token, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoresApi->listStores: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page_size** | **int**|  | [optional]
 **continuation_token** | **string**|  | [optional]
 **name** | **string**| The name parameter instructs the API to only include results that match that name.Multiple results may be returned. Only exact matches will be returned; substring matches and regexes will not be evaluated | [optional]

### Return type

[**\RuncloudIO\SDK\OPENFGA\Model\ListStoresResponse**](../Model/ListStoresResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

