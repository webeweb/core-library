Documentation
=============

```php
use WBW\Library\Highcharts\Model\HighchartsChart;

// Prepare the data.
$data = [["name" => "Female", "y" => 25 ], ["name" => "Male", "y" => 25], ["name" => "Unknown", "y" => 50]];

// Initialize the series.
$series = [["colorByPoint" => true, "data" => $data, "name" => "Gender distribution"]];

// Initialize the chart.
$chart = new HighchartsChart;
$chart->newChart()->setType("pie");
$chart->newPlotOptions()->newPie()
    ->setAllowPointSelect(true)
    ->setCursor("pointer")
    ->setShowInLegend(true)
    ->newDataLabels()->setEnabled(true);
$chart->setSeries($series);
$chart->newTitle()->setText("Gender distribution");
$chart->newTooltip()->setPointFormat("{series.name}: <b>{point.percentage:.1f}%</b>");
```
