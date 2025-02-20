# StoreIdCheckBody

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**tuple_key** | [**\RuncloudIO\SDK\OPENFGA\Model\CheckRequestTupleKey**](CheckRequestTupleKey.md) |  | 
**contextual_tuples** | [**\RuncloudIO\SDK\OPENFGA\Model\ContextualTupleKeys**](ContextualTupleKeys.md) |  | [optional] 
**authorization_model_id** | **string** |  | [optional] 
**trace** | **bool** | Defaults to false. Making it true has performance implications. | [optional] 
**context** | **object** | Additional request context that will be used to evaluate any ABAC conditions encountered in the query evaluation. | [optional] 
**consistency** | [**\RuncloudIO\SDK\OPENFGA\Model\ConsistencyPreference**](ConsistencyPreference.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

