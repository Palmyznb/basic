<?php

namespace app\controllers;

class FirstController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionPage1()
    {
        return $this->render('page1');
    }
    
    public function actionPage2()
    {
        $hello = "Palm 2 J , JOY";
        $a = 2;
        $b = 1;
        $c = $a + $b;
        return $this->render('page2',
            [
                'hello' => $hello,
                'x' => $a,
                'y' => $b,
                'z' => $c
            ]);
    }
    
    public function actionPage3()
    {
        return $this->render('page3');
    }
    
    public function actionPage4($xname = null, $yname = null)
    {
        $fname = $xname;
        $lname = $yname;
        $name = $fname."  ".$lname;
        return $this->render('page4',
                [
                    'name' => $name
                ]
                );
    }
}
