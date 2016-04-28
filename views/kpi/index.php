<?php
/* @var $this yii\web\View */
$this->title = 'KPI System';
$this->params['breadcrumbs'][] = [
    'label' => 'KPI System',
    'url' => [
        'kpi/index'
    ]];

$link1 = Yii::$app->urlManager->createUrl
([
    'kpi/kpi1'
]);

$link2 = Yii::$app->urlManager->createUrl
([
    'kpi/kpi2'
]);

$link3 = Yii::$app->urlManager->createUrl
([
    'kpi/kpi3'
]);

$link4 = Yii::$app->urlManager->createUrl
([
    'kpi/kpi4'
]);

?>
<!-- ส่วนแสดงค่าเมนู -->
<h1>Menu</h1>
<hr/>
<a href="<?= $link1 ?>">KPI 1<a/>
<hr/>
<a href="<?= $link2 ?>">KPI 2<a/>
<hr/>
<a href="<?= $link3 ?>">KPI 3<a/>
<hr/>
<a href="<?= $link4 ?>">KPI 4<a/>
<hr/>
