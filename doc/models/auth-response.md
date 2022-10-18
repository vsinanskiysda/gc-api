
# Auth Response

## Structure

`AuthResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `accessToken` | `?string` | Optional | - | getAccessToken(): ?string | setAccessToken(?string accessToken): void |
| `refreshToken` | `?string` | Optional | - | getRefreshToken(): ?string | setRefreshToken(?string refreshToken): void |
| `expiration` | `?int` | Optional | - | getExpiration(): ?int | setExpiration(?int expiration): void |

## Example (as JSON)

```json
{
  "access_token": null,
  "refresh_token": null,
  "expiration": null
}
```

