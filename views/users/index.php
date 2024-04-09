<?php

use app\models\Users;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
// use yii\grid\GridView;
use kartik\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\UsersSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Users';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="users-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Users', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); 
    ?>

    <?=
    // GridView::widget([
    //    'dataProvider' => $dataProvider,
    //    'filterModel' => $searchModel,
    //    'columns' => [
    //        ['class' => 'yii\grid\SerialColumn'],

    //        'email:email',
    //        'username',
    //        'password',
    //        'id',
    //        [
    //            'class' => ActionColumn::className(),
    //            'urlCreator' => function ($action, Users $model, $key, $index, $column) {
    //                return Url::toRoute([$action, 'id' => $model->id]);
    //            }
    //        ],
    //    ],
    // ]); 
    GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'email:email',
            'username',
            'password',

            [
                'class' => 'kartik\grid\ActionColumn',
                'dropdown' => true,
                'vAlign' => 'middle',
            ],

        ],
        'pjax' => true,
        'bordered' => true,
        'striped' => false,
        'condensed' => false,
        'responsive' => true,
        'hover' => true,
    ]);
    ?>


</div>