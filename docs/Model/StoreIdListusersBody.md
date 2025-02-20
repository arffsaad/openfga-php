# StoreIdListusersBody

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**authorization_model_id** | **string** |  | [optional] 
**object** | [**\RuncloudIO\SDK\OPENFGA\Model\Object**](Object.md) |  | 
**relation** | **string** |  | 
**user_filters** | [**\RuncloudIO\SDK\OPENFGA\Model\UserTypeFilter[]**](UserTypeFilter.md) | The type of results returned. Only accepts exactly one value. | 
**contextual_tuples** | [**\RuncloudIO\SDK\OPENFGA\Model\TupleKey[]**](TupleKey.md) |  | [optional] 
**context** | **object** | Additional request context that will be used to evaluate any ABAC conditions encountered in the query evaluation. | [optional] 
**consistency** | [**\RuncloudIO\SDK\OPENFGA\Model\ConsistencyPreference**](ConsistencyPreference.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

