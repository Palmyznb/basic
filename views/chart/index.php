<?php
/* @var $this yii\web\View */
$this->title = 'Chart';
$this->params['breadcrumbs'][] = [
    'label' => 'Chart',
    'url' => [
        'chart/index'
    ]];

$link1 = Yii::$app->urlManager->createUrl
([
    'chart/chart1'
]);

$link2 = Yii::$app->urlManager->createUrl
([
    'chart/chart2'
]);

$link3 = Yii::$app->urlManager->createUrl
([
    'chart/chart3'
]);

?>
<!-- ส่วนแสดงค่าเมนู -->
<h1>Menu</h1>
<hr/>
<a href="<?= $link1 ?>">Chart 1<a/>
<hr/>
<a href="<?= $link2 ?>">Chart 2<a/>
<hr/>
<a href="<?= $link3 ?>">Chart 3<a/>
<hr/>

