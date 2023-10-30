# # EndpointPatch

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**description** | **string** |  | [optional]
**rate_limit** | **int** |  | [optional]
**uid** | **string** | The ep&#39;s UID | [optional]
**url** | **string** |  | [optional]
**version** | **int** |  | [optional]
**disabled** | **bool** |  | [optional]
**filter_types** | **string[]** |  | [optional]
**channels** | **string[]** |  | [optional]
**secret** | **string** | The endpoint&#39;s verification secret. If &#x60;null&#x60; is passed, a secret is automatically generated. Format: &#x60;base64&#x60; encoded random bytes optionally prefixed with &#x60;whsec_&#x60;. Recommended size: 24. | [optional]
**metadata** | **array<string,string>** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
