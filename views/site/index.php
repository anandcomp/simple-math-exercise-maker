<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<div class="card">
    <?php
    $form = ActiveForm::begin(); ?>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12 col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="email">Basic arithmetic operations</label>
                    <?= Html::dropDownList('math_type', $math_type, [
                        '1' => 'Addition',
                        '2' => 'Subtraction',
                        '3' => 'Multiplication'
                    ], ['class' => 'form-select mt-2 form-select-md']) ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-6 col-xs-12 col-sm-12 col-md-6">
                <div class="form-group">
                    <label for="email">First number</label>
                    <?= Html::dropDownList('first_number', $first_number, [
                        '1' => '1 to 10',
                        '2' => '10 to 100',
                        '3' => '100 to 1000',
                        '4' => 'Any'
                    ], ['class' => 'form-select mt-2 form-select-md']) ?>
                </div>
            </div>
            <div class="col-6 col-xs-12 col-sm-12 col-md-6">
                <div class="form-group">
                    <label for="pwd">Second number</label>
                    <?= Html::dropDownList('second_number', $second_number, [
                        '1' => '1 to 9',
                        '2' => '10 to 99',
                        '3' => '100 to 999',
                        '4' => 'Any'
                    ], ['class' => 'form-select mt-2 form-select-md']) ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-6 col-xs-12 col-sm-12 col-md-6">
                <div class="form-group">
                    <label for="pwd">Number of problems</label>
                    <?= Html::dropDownList('number_of_problems', $number_of_problems, [
                        '12' => '12',
                        '16' => '16',
                        '24' => '24',
                        '32' => '32',
                        '48' => '48'
                    ], ['class' => 'form-select mt-2 form-select-md']) ?>
                </div>
            </div>
            <div class="col-6 col-xs-12 col-sm-12 col-md-6">
                <div class="form-group">
                    <label for="pwd">Need answer sheet ?</label>
                    <?= Html::dropDownList('need_answer_sheet', $need_answer_sheet, [
                        '1' => 'No',
                        '2' => 'Yes'
                    ], ['class' => 'form-select mt-2 form-select-md']) ?>
                </div>
            </div>
        </div>
        <div class="row pt-4">
            <div class="col-12">
                <div class="form-group">
                    <?= Html::submitButton('Generate Math PDF', ['class' => 'btn btn-primary btn-block btn-sm', 'style' => 'width: 100%;']) ?>
                </div>
            </div>
        </div>
        <?php ActiveForm::end(); ?>
    </div>
</div>