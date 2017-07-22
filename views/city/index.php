<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\ArrayHelper;
use app\models\State;
use app\models\City;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CitySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Список городов';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="city-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Создать', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'name',
            [
                'attribute' => 'stateId',
                'value' => 'state.name',
                'filter' => ArrayHelper::map(
                        State::find()->orderBy('name')->all(),
                        'id',
                        'name'
                )
            ],
            'population',
            'telephoneCode',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]);
    ?>
</div>
