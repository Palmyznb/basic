<?php
$this->title = 'Page1';
$this->params['breadcrumbs'][] = $this->title;
?>


<h1>Page1</h1>
<hr>
<p>ไม่ว่าง กำลังเรียนอยู่</p>
<hr>


<?php 

echo 'รัก เข้าใจ อภัย';

?>
<hr>
<?= 'สามัคคีคือพลัง';?>
<hr>
<?php Yii::$app->db->open() ?>