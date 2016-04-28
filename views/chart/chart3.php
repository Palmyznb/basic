<?php

use kartik\grid\GridView;
use yii\helpers\Html;
use yii\helpers\ArrayHelper;

$this->title = 'Chart3';
$this->params['breadcrumbs'][] = [
    'label' => 'Chart Menu',
    'url' => [
        'chart/index'
    ]
];

$this->params['breadcrumbs'][] = $this->title;
$gdata = $dataProvider -> getModels(); 

use miloschuman\highcharts\Highcharts;
use miloschuman\highcharts\HighchartsAsset;

HighchartsAsset::register($this)->withScripts([
    'highcharts-more',
    'themes/sand-signika'
]);

$xname = [];
$result = [];
$target = [];

for ($i = 0; $i < count($gdata); $i++){
    $xname[] = $gdata[$i]['kpiname'];
    $result[] = $gdata[$i]['result'];
    $target[] = $gdata[$i]['target'];
}
$xlabel = implode("','", $xname);
$rvalue = implode(",", $result);
$tvalue = implode(",", $target);

$y = isset($_REQUEST['year'])?$_REQUEST['year':date('Y');
?>
<?= Html::beginFrom(); ?>

<div id="container"></div>
<?php
$this->registerJs("
    $(function () {
    $('#container').highcharts({
        title: {
            text: 'Chart3'
        },
        xAxis: {
            categories: ['$xlabel']
        },
        labels: {
            items: [{
                html: 'Total fruit consumption',
                style: {
                    left: '50px',
                    top: '18px',
                    color: (Highcharts.theme && Highcharts.theme.textColor) || 'black'
                }
            }]
        },
        series: [{
            type: 'column',
            name: 'ผลลัพธ์',
            data: [$rvalue]
        }, {
            type: 'spline',
            name: 'เป้าหมาย',
            data: [$tvalue],
            marker: {
                lineWidth: 2,
                lineColor: Highcharts.getOptions().colors[3],
                fillColor: 'white'
            }
        }]
    });
});
");
   
?>
<?= GridView::widget([
    'dataProvider' => $dataProvider,
    'panel' => [
        'before' => '',
    ],
    'tableOptions' => ['class' => 'table table-striped table-bordered table-responsive table-hover'],
    'headerRowOptions' => ['class' => 'warning'],
    'columns' => [
        [
            'label' => 'ตัวชี้วัด',
            'attribute' => 'kpiname',
            'headerOptions' => ['class' => 'text-center'],
            'contentOptions' => ['class' => 'text-left']
        ],
        [
            'label' => 'ตัวตั้ง',
            'attribute' => 'divide',
            'headerOptions' => ['class' => 'text-center'],
            'contentOptions' => ['class' => 'text-right'],
            'format' => ['decimal',0]
        ],
        [
            'label' => 'ตัวหาร',
            'attribute' => 'denom',
            'headerOptions' => ['class' => 'text-center'],
            'contentOptions' => ['class' => 'text-right'],
            'format' => ['decimal',0]
        ],
        [
            'label' => 'ผลลัพธ์',
            'attribute' => 'result',
            'headerOptions' => ['class' => 'text-center'],
            'contentOptions' => ['class' => 'text-right'],
            'format' => ['decimal',2]
        ],
        [
            'label' => 'เป้าหมาย',
            'attribute' => 'target',
            'headerOptions' => ['class' => 'text-center'],
            'contentOptions' => ['class' => 'text-right'],
            'format' => ['decimal',0]
        ],
        
    ]
]);

?>