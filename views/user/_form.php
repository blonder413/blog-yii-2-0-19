<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use dosamigos\fileinput\FileInput;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use kartik\alert\AlertBlock;
use kartik\growl\Growl;
use app\models\User;

//$this->title = 'Signup';
$this->params['breadcrumbs'][] = $this->title;

if (Yii::$app->session->getFlash('success')) {
            echo Growl::widget([
                'type' => Growl::TYPE_SUCCESS,
                'title' => 'Usuario registrado!',
                'icon' => 'glyphicon glyphicon-ok-sign',
                'body' => Yii::$app->session->getFlash('success'),
                'showSeparator' => true,
                'delay' => 0,           // time before display
                'pluginOptions' => [
                    'placement' => [
                        'from' => 'top',
                        'align' => 'center',
                    ],
                    'showProgressbar' => false,
                    'timer' => 3000,    // screen time
                    
                ]
            ]);
        } elseif (Yii::$app->session->getFlash('error')) {
            echo Growl::widget([
                'type' => Growl::TYPE_DANGER,
                'title' => 'Error al registrar el usuario!',
                'icon' => 'glyphicon glyphicon-ok-sign',
                'body' => Yii::$app->session->getFlash('error'),
                'showSeparator' => true,
                'delay' => 0,           // time before display
                'pluginOptions' => [
                    'placement' => [
                        'from' => 'top',
                        'align' => 'center',
                    ],
                    'showProgressbar' => false,
                    'timer' => 3000,    // screen time
                ]
            ]);
        }
?>
<div class="site-signup">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Please fill out the following fields to signup:</p>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>
            
                <?= $form->field($model, 'name') ?>
            
                <?= $form->field($model, 'username') ?>

                <?= $form->field($model, 'email') ?>

                <?= $form->field($model, 'password_hash')->passwordInput() ?>
            
                <?= $form->field($model, 'repeat_password')->passwordInput() ?>
                
                <?= $form->field($model, 'file')->fileInput() ?>
                
                <?= $form->field($model, 'status')->dropdownList([
                        User::STATUS_ACTIVE => 'Active',
                        User::STATUS_DELETED => 'Deleted',
                      ],
                      ['prompt'=>'Select Status...']
                ) ?>

                <div class="form-group">
                    <?= Html::submitButton('Create', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
