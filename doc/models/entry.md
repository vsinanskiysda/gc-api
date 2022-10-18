
# Entry

## Structure

`Entry`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `representative` | `?string` | Optional | - | getRepresentative(): ?string | setRepresentative(?string representative): void |
| `territoryNumber` | `?string` | Optional | - | getTerritoryNumber(): ?string | setTerritoryNumber(?string territoryNumber): void |
| `samplingDate` | `?string` | Optional | - | getSamplingDate(): ?string | setSamplingDate(?string samplingDate): void |
| `time` | `?string` | Optional | - | getTime(): ?string | setTime(?string time): void |
| `reportTo` | `?string` | Optional | - | getReportTo(): ?string | setReportTo(?string reportTo): void |
| `poNumber` | `?string` | Optional | - | getPoNumber(): ?string | setPoNumber(?string poNumber): void |
| `customerNumber` | `?string` | Optional | - | getCustomerNumber(): ?string | setCustomerNumber(?string customerNumber): void |
| `customerName` | `?string` | Optional | - | getCustomerName(): ?string | setCustomerName(?string customerName): void |
| `laboratoryEmail` | `?string` | Optional | - | getLaboratoryEmail(): ?string | setLaboratoryEmail(?string laboratoryEmail): void |
| `address` | `?string` | Optional | - | getAddress(): ?string | setAddress(?string address): void |
| `samples` | [`?(Sample[])`](../../doc/models/sample.md) | Optional | - | getSamples(): ?array | setSamples(?array samples): void |
| `analysis` | `?(string[])` | Optional | - | getAnalysis(): ?array | setAnalysis(?array analysis): void |
| `notes` | `?string` | Optional | - | getNotes(): ?string | setNotes(?string notes): void |
| `laboratoryResultsFile` | `?string` | Optional | - | getLaboratoryResultsFile(): ?string | setLaboratoryResultsFile(?string laboratoryResultsFile): void |

## Example (as JSON)

```json
{
  "representative": null,
  "territory_number": null,
  "sampling_date": null,
  "time": null,
  "report_to": null,
  "po_number": null,
  "customer_number": null,
  "customer_name": null,
  "laboratory_email": null,
  "address": null,
  "samples": null,
  "analysis": null,
  "notes": null,
  "laboratory_results_file": null
}
```

