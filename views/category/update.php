<?php
use yii\helpers\Html;
/* @var $this yii\web\View */
/* @var $model app\models\Category */
$this->title = Yii::t('app', 'Update Category: {nameAttribute}', [
    'nameAttribute' => $model->category,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Categories'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="category-update">
    <!-- <h1><?= Html::encode($this->title) ?></h1> -->
    <div class="panel">
        <div class="panel-body">
            <?= $this->render('_form', [
                'model' => $model,
            ]) ?>
        </div>
    </div>
</div>