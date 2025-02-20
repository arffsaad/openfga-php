# RuncloudIO\SDK\OPENFGA\RelationshipTuplesApi

All URIs are relative to *http://my-openfga.infrastructure.svc.cluster.local:8081*

Method | HTTP request | Description
------------- | ------------- | -------------
[**read**](RelationshipTuplesApi.md#read) | **POST** /stores/{store_id}/read | Get tuples from the store that matches a query, without following userset rewrite rules
[**readChanges**](RelationshipTuplesApi.md#readchanges) | **GET** /stores/{store_id}/changes | Return a list of all the tuple changes
[**write**](RelationshipTuplesApi.md#write) | **POST** /stores/{store_id}/write | Add or delete tuples from the store

# **read**
> \RuncloudIO\SDK\OPENFGA\Model\ReadResponse read($body, $store_id)

Get tuples from the store that matches a query, without following userset rewrite rules

The Read API will return the tuples for a certain store that match a query filter specified in the body of the request.  The API doesn't guarantee order by any field.  It is different from the `/stores/{store_id}/expand` API in that it only returns relationship tuples that are stored in the system and satisfy the query.  In the body: 1. `tuple_key` is optional. If not specified, it will return all tuples in the store. 2. `tuple_key.object` is mandatory if `tuple_key` is specified. It can be a full object (e.g., `type:object_id`) or type only (e.g., `type:`). 3. `tuple_key.user` is mandatory if tuple_key is specified in the case the `tuple_key.object` is a type only. If tuple_key.user is specified, it needs to be a full object (e.g., `type:user_id`). ## Examples ### Query for all objects in a type definition To query for all objects that `user:bob` has `reader` relationship in the `document` type definition, call read API with body of ```json {  \"tuple_key\": {      \"user\": \"user:bob\",      \"relation\": \"reader\",      \"object\": \"document:\"   } } ``` The API will return tuples and a continuation token, something like ```json {   \"tuples\": [     {       \"key\": {         \"user\": \"user:bob\",         \"relation\": \"reader\",         \"object\": \"document:2021-budget\"       },       \"timestamp\": \"2021-10-06T15:32:11.128Z\"     }   ],   \"continuation_token\": \"eyJwayI6IkxBVEVTVF9OU0NPTkZJR19hdXRoMHN0b3JlIiwic2siOiIxem1qbXF3MWZLZExTcUoyN01MdTdqTjh0cWgifQ==\" } ``` This means that `user:bob` has a `reader` relationship with 1 document `document:2021-budget`. Note that this API, unlike the List Objects API, does not evaluate the tuples in the store. The continuation token will be empty if there are no more tuples to query. ### Query for all stored relationship tuples that have a particular relation and object To query for all users that have `reader` relationship with `document:2021-budget`, call read API with body of  ```json {   \"tuple_key\": {      \"object\": \"document:2021-budget\",      \"relation\": \"reader\"    } } ``` The API will return something like  ```json {   \"tuples\": [     {       \"key\": {         \"user\": \"user:bob\",         \"relation\": \"reader\",         \"object\": \"document:2021-budget\"       },       \"timestamp\": \"2021-10-06T15:32:11.128Z\"     }   ],   \"continuation_token\": \"eyJwayI6IkxBVEVTVF9OU0NPTkZJR19hdXRoMHN0b3JlIiwic2siOiIxem1qbXF3MWZLZExTcUoyN01MdTdqTjh0cWgifQ==\" } ``` This means that `document:2021-budget` has 1 `reader` (`user:bob`).  Note that, even if the model said that all `writers` are also `readers`, the API will not return writers such as `user:anne` because it only returns tuples and does not evaluate them. ### Query for all users with all relationships for a particular document To query for all users that have any relationship with `document:2021-budget`, call read API with body of  ```json {   \"tuple_key\": {       \"object\": \"document:2021-budget\"    } } ``` The API will return something like  ```json {   \"tuples\": [     {       \"key\": {         \"user\": \"user:anne\",         \"relation\": \"writer\",         \"object\": \"document:2021-budget\"       },       \"timestamp\": \"2021-10-05T13:42:12.356Z\"     },     {       \"key\": {         \"user\": \"user:bob\",         \"relation\": \"reader\",         \"object\": \"document:2021-budget\"       },       \"timestamp\": \"2021-10-06T15:32:11.128Z\"     }   ],   \"continuation_token\": \"eyJwayI6IkxBVEVTVF9OU0NPTkZJR19hdXRoMHN0b3JlIiwic2siOiIxem1qbXF3MWZLZExTcUoyN01MdTdqTjh0cWgifQ==\" } ``` This means that `document:2021-budget` has 1 `reader` (`user:bob`) and 1 `writer` (`user:anne`).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new RuncloudIO\SDK\OPENFGA\Api\RelationshipTuplesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \RuncloudIO\SDK\OPENFGA\Model\StoreIdReadBody(); // \RuncloudIO\SDK\OPENFGA\Model\StoreIdReadBody | 
$store_id = "store_id_example"; // string | 

try {
    $result = $apiInstance->read($body, $store_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RelationshipTuplesApi->read: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\RuncloudIO\SDK\OPENFGA\Model\StoreIdReadBody**](../Model/StoreIdReadBody.md)|  |
 **store_id** | **string**|  |

### Return type

[**\RuncloudIO\SDK\OPENFGA\Model\ReadResponse**](../Model/ReadResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readChanges**
> \RuncloudIO\SDK\OPENFGA\Model\ReadChangesResponse readChanges($store_id, $type, $page_size, $continuation_token, $start_time)

Return a list of all the tuple changes

The ReadChanges API will return a paginated list of tuple changes (additions and deletions) that occurred in a given store, sorted by ascending time. The response will include a continuation token that is used to get the next set of changes. If there are no changes after the provided continuation token, the same token will be returned in order for it to be used when new changes are recorded. If the store never had any tuples added or removed, this token will be empty. You can use the `type` parameter to only get the list of tuple changes that affect objects of that type. When reading a write tuple change, if it was conditioned, the condition will be returned. When reading a delete tuple change, the condition will NOT be returned regardless of whether it was originally conditioned or not.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new RuncloudIO\SDK\OPENFGA\Api\RelationshipTuplesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$store_id = "store_id_example"; // string | 
$type = "type_example"; // string | 
$page_size = 56; // int | 
$continuation_token = "continuation_token_example"; // string | 
$start_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Start date and time of changes to read. Format: ISO 8601 timestamp (e.g., 2022-01-01T00:00:00Z) If a continuation_token is provided along side start_time, the continuation_token will take precedence over start_time.

try {
    $result = $apiInstance->readChanges($store_id, $type, $page_size, $continuation_token, $start_time);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RelationshipTuplesApi->readChanges: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**|  |
 **type** | **string**|  | [optional]
 **page_size** | **int**|  | [optional]
 **continuation_token** | **string**|  | [optional]
 **start_time** | **\DateTime**| Start date and time of changes to read. Format: ISO 8601 timestamp (e.g., 2022-01-01T00:00:00Z) If a continuation_token is provided along side start_time, the continuation_token will take precedence over start_time. | [optional]

### Return type

[**\RuncloudIO\SDK\OPENFGA\Model\ReadChangesResponse**](../Model/ReadChangesResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **write**
> \RuncloudIO\SDK\OPENFGA\Model\WriteResponse write($body, $store_id)

Add or delete tuples from the store

The Write API will transactionally update the tuples for a certain store. Tuples and type definitions allow OpenFGA to determine whether a relationship exists between an object and an user. In the body, `writes` adds new tuples and `deletes` removes existing tuples. When deleting a tuple, any `condition` specified with it is ignored. The API is not idempotent: if, later on, you try to add the same tuple key (even if the `condition` is different), or if you try to delete a non-existing tuple, it will throw an error. The API will not allow you to write tuples such as `document:2021-budget#viewer@document:2021-budget#viewer`, because they are implicit. An `authorization_model_id` may be specified in the body. If it is, it will be used to assert that each written tuple (not deleted) is valid for the model specified. If it is not specified, the latest authorization model ID will be used. ## Example ### Adding relationships To add `user:anne` as a `writer` for `document:2021-budget`, call write API with the following  ```json {   \"writes\": {     \"tuple_keys\": [       {         \"user\": \"user:anne\",         \"relation\": \"writer\",         \"object\": \"document:2021-budget\"       }     ]   },   \"authorization_model_id\": \"01G50QVV17PECNVAHX1GG4Y5NC\" } ``` ### Removing relationships To remove `user:bob` as a `reader` for `document:2021-budget`, call write API with the following  ```json {   \"deletes\": {     \"tuple_keys\": [       {         \"user\": \"user:bob\",         \"relation\": \"reader\",         \"object\": \"document:2021-budget\"       }     ]   } } ```

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new RuncloudIO\SDK\OPENFGA\Api\RelationshipTuplesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \RuncloudIO\SDK\OPENFGA\Model\StoreIdWriteBody(); // \RuncloudIO\SDK\OPENFGA\Model\StoreIdWriteBody | 
$store_id = "store_id_example"; // string | 

try {
    $result = $apiInstance->write($body, $store_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RelationshipTuplesApi->write: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\RuncloudIO\SDK\OPENFGA\Model\StoreIdWriteBody**](../Model/StoreIdWriteBody.md)|  |
 **store_id** | **string**|  |

### Return type

[**\RuncloudIO\SDK\OPENFGA\Model\WriteResponse**](../Model/WriteResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

