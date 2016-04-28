<?php

namespace app\controllers;
use yii\data\ArrayDataProvider;

class KpiController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
    
    public function actionKpi1()
    {
        $sql = "Select k.kpiname,k.acol,k.bcol,k.target From kpi k";
        
        $data = \Yii::$app->db->createCommand($sql)->queryAll();
        //$dataProvider = new \yii\data\ArrayDataProvider();
        $dataProvider = new ArrayDataProvider([
            'allModels' => $data
        ]);
        
        return $this->render('kpi1',[
            'dataProvider' => $dataProvider
        ]);
    }
    
    public function actionKpi2()
    {
        $sql = "Select k.kpiname,k.acol,k.bcol,k.target ,d.divide, d.denom,
d.byear,d.divide*100/d.denom as result
From kpi k
join kpidata d on k.id = d.kpiid
where d.byear = 2559";
        $data = \Yii::$app->db->createCommand($sql)->queryAll();
        //$dataProvider = new \yii\data\ArrayDataProvider();
        $dataProvider = new ArrayDataProvider([
            'allModels' => $data
        ]);
        
        return $this->render('kpi2',[
            'dataProvider' => $dataProvider
        ]);
    }
    
    public function actionKpi3()
    {
        $sql = "Select k.kpiname,k.acol,k.bcol,k.target ,d.divide, d.denom,
d.byear,d.divide*100/d.denom as result
From kpi k
join kpidata d on k.id = d.kpiid
where d.byear = 2559";
        $data = \Yii::$app->db->createCommand($sql)->queryAll();
        //$dataProvider = new \yii\data\ArrayDataProvider();
        $dataProvider = new ArrayDataProvider([
            'allModels' => $data
        ]);
        
        return $this->render('kpi3',[
            'dataProvider' => $dataProvider
        ]);
    }
    
    public function actionKpi4()
    {
        $sql = "Select k.kpiname,k.acol,k.bcol,k.target ,d.divide, d.denom,
d.byear,d.divide*100/d.denom as result
From kpi k
join kpidata d on k.id = d.kpiid
where d.byear = 2559";
        $data = \Yii::$app->db->createCommand($sql)->queryAll();
        //$dataProvider = new \yii\data\ArrayDataProvider();
        $dataProvider = new ArrayDataProvider([
            'allModels' => $data
        ]);
        
        return $this->render('kpi4',[
            'dataProvider' => $dataProvider
        ]);
    }

}
