<?php
/* @var $this yii\web\View */
$this->title = 'First Page';
$this->params['breadcrumbs'][] = $this->title;

$link1 = Yii::$app->urlManager->createUrl
([
    'first/page1'
]);

$link2 = Yii::$app->urlManager->createUrl
([
    'first/page2'
]);

$link3 = Yii::$app->urlManager->createUrl
([
    'first/page3'
]);

$link4 = Yii::$app->urlManager->createUrl
([
    'first/page4'
]);

?>
<!-- ส่วนแสดงค่าเมนู -->
<h1>Menu</h1>
<p>1. การแสดงค่าจาก view</p>

<a href="<?= $link1 ?>">Page 1<a/>
<hr/>
<a href="<?= $link2 ?>">Page 2<a/>
<hr/>
<a href="<?= $link3 ?>">Page 3<a/>
<hr/>
<a href="<?= $link4 ?>">Page 4<a/>
<hr/>
