<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
/* @var $this yii\web\View */
/* @var $model app\models\Type */
/* @var $form yii\widgets\ActiveForm */
use yii\widgets\Pjax;

$this->registerJS(
    '$("document").ready(function(){
        $("#new_type").on("pjax:end", function(){
           $.pjax.reload({container:"#types"});
        });
    });'
);
?>

<div class="type-form">

<div class='panel'>
    <div class='panel-body'>
    
        <?php PJax::begin(['id' => 'new_type']) ?>
        
        <?php
        foreach (Yii::$app->session->getAllFlashes() as $key => $message) {
            echo '<div class="alert alert-' . $key . '">' . $message . '</div>';
        }
        ?>
        
            <?php $form = ActiveForm::begin(['options' => ['data-pjax' => true]]); ?>
        
            <?= $form->field($model, 'type')->textInput(['maxlength' => true]) ?>
        
            <div class="form-group">
                <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
            </div>
        
            <?php ActiveForm::end(); ?>
        
        <?php PJax::end() ?>
    
    </div>
</div>

</div>