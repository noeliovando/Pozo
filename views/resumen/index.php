<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\data\ArrayDataProvider;
use miloschuman\highcharts\Highcharts;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ResumenSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Resumen 2016';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="resumen-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>


    <?php
    $siglas =[
        'J10',
        'ZPZ',
        'ZSD',
        'J13'
    ];
    $areas =[
        'Junin Sur',
        'Petro San Felix',
        'San Diego',
        'J13'
    ];
    $atributos = ['area','enero','febrero','marzo','abril','mayo','junio','julio','agosto','septiembre','octubre','noviembre','diciembre'];
    /*************************************
     * Pozos perforados en el año actual
     *************************************/
    for($i=0;$i<4;$i++) {
        $resultDataPerf[]=[
            $atributos[0] => $areas[$i],
            $atributos[1]=>$searchModel->getPozosPerf('1', $siglas[$i]),
            $atributos[2]=>$searchModel->getPozosPerf('2', $siglas[$i]),
            $atributos[3]=>$searchModel->getPozosPerf('3', $siglas[$i]),
            $atributos[4]=>$searchModel->getPozosPerf('4', $siglas[$i]),
            $atributos[5]=>$searchModel->getPozosPerf('5', $siglas[$i]),
            $atributos[6]=>$searchModel->getPozosPerf('6', $siglas[$i]),
            $atributos[7]=>$searchModel->getPozosPerf('7', $siglas[$i]),
            $atributos[8]=>$searchModel->getPozosPerf('8', $siglas[$i]),
            $atributos[9]=>$searchModel->getPozosPerf('9', $siglas[$i]),
            $atributos[10]=>$searchModel->getPozosPerf('10', $siglas[$i]),
            $atributos[11]=>$searchModel->getPozosPerf('11', $siglas[$i]),
            $atributos[12]=>$searchModel->getPozosPerf('12', $siglas[$i]),
        ];
    }
    $dataProviderPerf = new ArrayDataProvider([
        'allModels' => $resultDataPerf,
        'sort' => [
            'attributes' => ['area', 'enero','febrero','marzo','abril','mayo','junio','julio','agosto','septiembre','octubre','noviembre','diciembre']
        ],
        'pagination' => [
            'pageSize' => 10,
        ],
    ]);
    echo '<div><h3>Pozos Perforados en '.date('Y').'</h3></div>';
    echo GridView::widget([
            'dataProvider' => $dataProviderPerf,
            //'filterModel' => $searchModel,
            'columns' => ['area', 'enero','febrero','marzo','abril','mayo','junio','julio','agosto','septiembre','octubre','noviembre','diciembre']
        ]
    );
    /*************************************
     * Pozos Inicializados En el año actual
     * perforados en el año actual
     *************************************/
    for($i=0;$i<4;$i++) {
        $resultDataIni[]=[
            $atributos[0] => $areas[$i],
            $atributos[1]=>$searchModel->getPozosIni('1', $siglas[$i]),
            $atributos[2]=>$searchModel->getPozosIni('2', $siglas[$i]),
            $atributos[3]=>$searchModel->getPozosIni('3', $siglas[$i]),
            $atributos[4]=>$searchModel->getPozosIni('4', $siglas[$i]),
            $atributos[5]=>$searchModel->getPozosIni('5', $siglas[$i]),
            $atributos[6]=>$searchModel->getPozosIni('6', $siglas[$i]),
            $atributos[7]=>$searchModel->getPozosIni('7', $siglas[$i]),
            $atributos[8]=>$searchModel->getPozosIni('8', $siglas[$i]),
            $atributos[9]=>$searchModel->getPozosIni('9', $siglas[$i]),
            $atributos[10]=>$searchModel->getPozosIni('10', $siglas[$i]),
            $atributos[11]=>$searchModel->getPozosIni('11', $siglas[$i]),
            $atributos[12]=>$searchModel->getPozosIni('12', $siglas[$i]),
        ];
    }
    $dataProviderIni = new ArrayDataProvider([
        'allModels' => $resultDataIni,
        'sort' => [
            'attributes' => ['area', 'enero','febrero','marzo','abril','mayo','junio','julio','agosto','septiembre','octubre','noviembre','diciembre']
        ],
        'pagination' => [
            'pageSize' => 10,
        ],
    ]);
    echo '<div><h3>Pozos Perforados '.date('Y').' Inicializados en Finder</h3></div>';
    echo GridView::widget([
            'dataProvider' => $dataProviderIni,
            //'filterModel' => $searchModel,
            'columns' => ['area', 'enero','febrero','marzo','abril','mayo','junio','julio','agosto','septiembre','octubre','noviembre','diciembre']
        ]
    );
/*************************************
 * Pozos Inicializados En el año actual
 * perforados en años anteriores
 *************************************/
    for($i=0;$i<4;$i++) {
        $resultDataIniRest[]=[
            $atributos[0] => $areas[$i],
            $atributos[1]=>$searchModel->getPozosIniRest('1', $siglas[$i]),
            $atributos[2]=>$searchModel->getPozosIniRest('2', $siglas[$i]),
            $atributos[3]=>$searchModel->getPozosIniRest('3', $siglas[$i]),
            $atributos[4]=>$searchModel->getPozosIniRest('4', $siglas[$i]),
            $atributos[5]=>$searchModel->getPozosIniRest('5', $siglas[$i]),
            $atributos[6]=>$searchModel->getPozosIniRest('6', $siglas[$i]),
            $atributos[7]=>$searchModel->getPozosIniRest('7', $siglas[$i]),
            $atributos[8]=>$searchModel->getPozosIniRest('8', $siglas[$i]),
            $atributos[9]=>$searchModel->getPozosIniRest('9', $siglas[$i]),
            $atributos[10]=>$searchModel->getPozosIniRest('10', $siglas[$i]),
            $atributos[11]=>$searchModel->getPozosIniRest('11', $siglas[$i]),
            $atributos[12]=>$searchModel->getPozosIniRest('12', $siglas[$i]),
        ];
    }
    $dataProviderIniRest = new ArrayDataProvider([
        'allModels' => $resultDataIniRest,
        'sort' => [
            'attributes' => ['area', 'enero','febrero','marzo','abril','mayo','junio','julio','agosto','septiembre','octubre','noviembre','diciembre']
        ],
        'pagination' => [
            'pageSize' => 10,
        ],
    ]);
    echo '<div><h3>Pozos Inicializados en '.date('Y').' pendientes años anteriores</h3></div>';
    echo GridView::widget([
            'dataProvider' => $dataProviderIniRest,
            //'filterModel' => $searchModel,
            'columns' => ['area', 'enero','febrero','marzo','abril','mayo','junio','julio','agosto','septiembre','octubre','noviembre','diciembre']
        ]
    );
    $atributos = ['area','Pozos Perforados','Pozos Inicializados'];

    for($i=0;$i<4;$i++) {
        $resultDataTotal[]=[
            $atributos[0] => $areas[$i],
            $atributos[1]=>$searchModel->getPozosTotalPerf($siglas[$i]),
            $atributos[2]=>$searchModel->getPozosTotalIni($siglas[$i]),
        ];
    }
    $dataProviderTotal = new ArrayDataProvider([
        'allModels' => $resultDataTotal,
        'sort' => [
            'attributes' => ['area','Pozos Perforados','Pozos Inicializados']
        ],
        'pagination' => [
            'pageSize' => 10,
        ],
    ]);
    echo '<div><h3>Perforados vs Inicializados '.date('Y').'</h3></div>';
    echo GridView::widget([
            'dataProvider' => $dataProviderTotal,
            //'filterModel' => $searchModel,
            'columns' => ['area','Pozos Perforados','Pozos Inicializados']
        ]
    );
    
    $perforados=[
        $searchModel->getPozosTotalPerf($siglas[0])+0,
        $searchModel->getPozosTotalPerf($siglas[1])+0,
        $searchModel->getPozosTotalPerf($siglas[2])+0,
        $searchModel->getPozosTotalPerf($siglas[3])+0,
        ];
    $inicializados=[
        $searchModel->getPozosTotalIni($siglas[0])+0,
        $searchModel->getPozosTotalIni($siglas[1])+0,
        $searchModel->getPozosTotalIni($siglas[2])+0,
        $searchModel->getPozosTotalIni($siglas[3])+0,
    ];

    
    echo Highcharts::widget([
        'options' => [
            'title' => ['text' => 'Perforados vs Inicializados '.date('Y')],
            'credits' => ['enabled' => false],

            'xAxis' => [
                'categories' => $areas
            ],
            'yAxis' => [
                'title' => ['text' => 'Pozos']
            ],
            'plotOptions'=>[
                'column'=> [
                    'dataLabels'=> [
                        'enabled'=> true
                    ]
                ]
            ],
            'series' => [

                ['name' => 'Pozos Perforados', 'data' => $perforados,'type'=> 'column',],
                ['name' => 'Pozos Inicializados', 'data' => $inicializados,'type'=> 'column',],

            ],

        ]
    ]);
    ?>
</div>
