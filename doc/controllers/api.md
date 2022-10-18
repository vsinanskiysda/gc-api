# API

```php
$aPIController = $client->getAPIController();
```

## Class Name

`APIController`

## Methods

* [Auth](../../doc/controllers/api.md#auth)
* [Refresh Access Token](../../doc/controllers/api.md#refresh-access-token)
* [Fm 2247 - List](../../doc/controllers/api.md#fm-2247---list)
* [Fm 2247 PO9999 - View](../../doc/controllers/api.md#fm-2247-po9999---view)
* [Fm 2247 PO9999 - Update](../../doc/controllers/api.md#fm-2247-po9999---update)
* [Fm 2247 PO9999 - Upload Result](../../doc/controllers/api.md#fm-2247-po9999---upload-result)
* [Status](../../doc/controllers/api.md#status)


# Auth

Auth and generate tokens

```php
function auth(string $clientId, string $clientSecret, string $grantType): AuthResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `clientId` | `string` | Query, Required | - |
| `clientSecret` | `string` | Query, Required | - |
| `grantType` | `string` | Query, Required | - |

## Response Type

[`AuthResponse`](../../doc/models/auth-response.md)

## Example Usage

```php
$clientId = '0000';
$clientSecret = 'Yzz0fiFuOSh49GEyo22vHuuCCiGT19Y9ECnD6Gj';
$grantType = 'client_credentials';

$result = $aPIController->auth($clientId, $clientSecret, $grantType);
```

## Example Response *(as JSON)*

```json
{
  "access_token": "$2y$10$/6QbjveQC.bno/3WTPgGKeLoA0ZOwE8hQi2f.S3nY/Vg9lqQCHIXW",
  "refresh_token": "$2y$10$2eZw8.r9IrctH/8JAi/YF.3w7rchCMiRtafUp3Ic7V.Z6QMpewIIq",
  "expiration": 1668695430
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Bad request | [`M400ErrorException`](../../doc/models/m400-error-exception.md) |
| 401 | Forbidden | [`M401ErrorException`](../../doc/models/m401-error-exception.md) |
| 404 | Bad request | [`M404ErrorException`](../../doc/models/m404-error-exception.md) |


# Refresh Access Token

Refresh access token tokens

```php
function refreshAccessToken(string $refreshToken): RefreshResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `refreshToken` | `string` | Query, Required | - |

## Response Type

[`RefreshResponse`](../../doc/models/refresh-response.md)

## Example Usage

```php
$refreshToken = 'iOiJodHRwOlwvXC9sb2NhbGhvc3RcL2FwaVwvYXV0aFwv';

$result = $aPIController->refreshAccessToken($refreshToken);
```

## Example Response *(as JSON)*

```json
{
  "access_token": "$2y$10$/6QbjveQC.bno/3WTPgGKeLoA0ZOwE8hQi2f.S3nY/Vg9lqQCHIXW",
  "expiration": 1668695430
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Bad request | [`M400ErrorException`](../../doc/models/m400-error-exception.md) |
| 401 | Forbidden | [`M401ErrorException`](../../doc/models/m401-error-exception.md) |
| 404 | Bad request | [`M404ErrorException`](../../doc/models/m404-error-exception.md) |


# Fm 2247 - List

Show all active entries (Optional)

```php
function fm2247List(string $authorization): array
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `authorization` | `string` | Header, Required | - |

## Response Type

[`Entry[]`](../../doc/models/entry.md)

## Example Usage

```php
$authorization = 'Bearer $2y$10$Yzz0fiFuOSh49GEyo22vHuuCCiGT19Y9ECnD6Gj9rrkxdF7M52Iqa';

$result = $aPIController->fm2247List($authorization);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Bad request | `ApiException` |
| 401 | Forbidden | `ApiException` |
| 404 | Bad request | `ApiException` |


# Fm 2247 PO9999 - View

GET - to retrieve single Entry data. PUT - to update entry

```php
function fm2247PO9999View(string $authorization): Entry
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `authorization` | `string` | Header, Required | - |

## Response Type

[`Entry`](../../doc/models/entry.md)

## Example Usage

```php
$authorization = 'Bearer $2y$10$Yzz0fiFuOSh49GEyo22vHuuCCiGT19Y9ECnD6Gj9rrkxdF7M52Iqa';

$result = $aPIController->fm2247PO9999View($authorization);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Bad request | [`M400ErrorException`](../../doc/models/m400-error-exception.md) |
| 401 | Forbidden | [`M401ErrorException`](../../doc/models/m401-error-exception.md) |
| 404 | Bad request | [`M404ErrorException`](../../doc/models/m404-error-exception.md) |


# Fm 2247 PO9999 - Update

GET - to retrieve single Entry data. PUT - to update entry

```php
function fm2247PO9999Update(string $authorization, array $samples): Entry
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `authorization` | `string` | Header, Required | - |
| `samples` | [`Sample[]`](../../doc/models/sample.md) | Query, Required | - |

## Response Type

[`Entry`](../../doc/models/entry.md)

## Example Usage

```php
$authorization = 'Bearer $2y$10$Yzz0fiFuOSh49GEyo22vHuuCCiGT19Y9ECnD6Gj9rrkxdF7M52Iqa';
$samples = [];

$samples[0] = new Models\Sample();

$samples[1] = new Models\Sample();


$result = $aPIController->fm2247PO9999Update($authorization, $samples);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Bad request | [`M400ErrorException`](../../doc/models/m400-error-exception.md) |
| 401 | Forbidden | [`M401ErrorException`](../../doc/models/m401-error-exception.md) |
| 404 | Bad request | [`M404ErrorException`](../../doc/models/m404-error-exception.md) |


# Fm 2247 PO9999 - Upload Result

Use multipart/form-data to upload a PDF file with laboratory results

```php
function fm2247PO9999UploadResult(string $authorization, ?FileWrapper $file = null): Entry
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `authorization` | `string` | Header, Required | - |
| `file` | `?FileWrapper` | Form, Optional | - |

## Response Type

[`Entry`](../../doc/models/entry.md)

## Example Usage

```php
$authorization = 'Bearer $2y$10$Yzz0fiFuOSh49GEyo22vHuuCCiGT19Y9ECnD6Gj9rrkxdF7M52Iqa';

$result = $aPIController->fm2247PO9999UploadResult($authorization);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Bad request | [`M400ErrorException`](../../doc/models/m400-error-exception.md) |
| 401 | Forbidden | [`M401ErrorException`](../../doc/models/m401-error-exception.md) |
| 404 | Bad request | [`M404ErrorException`](../../doc/models/m404-error-exception.md) |


# Status

Retrieve api status

```php
function status(): StatusResponse
```

## Response Type

[`StatusResponse`](../../doc/models/status-response.md)

## Example Usage

```php
$result = $aPIController->status();
```

