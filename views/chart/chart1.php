<?php

use miloschuman\highcharts\Highcharts;

$this->title = 'Chart1';
$this->params['breadcrumbs'][] = [
    'label' => 'Chart Menu',
    'url' => [
        'chart/index'
    ]
];
$this->params['breadcrumbs'][] = $this->title;


echo Highcharts::widget([
   'options'=>'{
      "title": { "text": "Fruit Consumption" },
      "xAxis": {
         "categories": ["Apples", "Bananas", "Oranges"]
      },
      "yAxis": {
         "title": { "text": "Fruit eaten" }
      },
      "series": [
         { "name": "Jane", "data": [1, 0, 4] },
         { "name": "John", "data": [5, 7,3] }
      ]
   }'
]);



?>