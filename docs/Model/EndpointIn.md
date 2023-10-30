# # EndpointIn

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**description** | **string** |  | [optional] [default to '']
**rate_limit** | **int** |  | [optional]
**uid** | **string** | Optional unique identifier for the endpoint | [optional]
**url** | **string** |  |
**version** | **int** |  | [optional] [default to 1]
**disabled** | **bool** |  | [optional] [default to false]
**filter_types** | **string[]** |  | [optional]
**channels** | **string[]** |  | [optional]
**secret** | **string** | The endpoint&#39;s verification secret. If &#x60;null&#x60; is passed, a secret is automatically generated. Format: &#x60;base64&#x60; encoded random bytes optionally prefixed with &#x60;whsec_&#x60;. Recommended size: 24. | [optional]
**metadata** | **array<string,string>** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
