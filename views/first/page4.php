<?php
echo 'Show : ';
echo $name;

$link1 = Yii::$app->urlManager->createUrl
([
    'first/page4',
    'xname' => 'Nattakan',
    'yname' => 'Buajun'
]);

$link2 = Yii::$app->urlManager->createUrl
([
    'first/page4',
    'xname' => 'ณัฐกานต์',
    'yname' => 'บัวจุน'
]);
echo '<hr/>';

?>
<a href="<?= $link1 ?>">English<a/>
<hr/>
<a href="<?= $link2 ?>">ไทย<a/>
<hr/>