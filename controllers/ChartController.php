<?php

namespace app\controllers;
use yii\data\ArrayDataProvider;

class ChartController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
    
    public function actionChart1()
    {
        return $this->render('chart1');
    }
    
    public function actionChart2()
    {
        return $this->render('chart2');
    }
    
    public function actionChart3()
    {
        $y = isset($_REQUEST['year'])?$_REQUEST['year']:date('Y');
        $ycal = $y + 543;
        $sql = "Select k.kpiname,k.acol,k.bcol,k.target ,d.divide, d.denom,
d.byear,round(d.divide*100/d.denom,2) as result
From kpi k
join kpidata d on k.id = d.kpiid
where d.byear = $ycal and k.target > 0";
        $data = \Yii::$app->db->createCommand($sql)->queryAll();
        
        $dataProvider = new ArrayDataProvider([
            'allModels' => $data
        ]);
        
        return $this->render('chart3',[
            'dataProvider' => $dataProvider
        ]);
    }

}
