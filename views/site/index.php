<div class="card p-3 py-4">
    <?php

    use yii\helpers\Html;
    use yii\widgets\ActiveForm;

    $need_answer_sheet = $math_type = $first_number = $second_number = $number_of_problems = $language = 1;

    $form = ActiveForm::begin(); ?>
    <div class="container mt-5">
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label for="email">Math Type</label>
                    <?= Html::dropDownList('math_type', $math_type, [
                        '1' => 'Addition',
                        '2' => 'Subtraction',
                        '3' => 'Multiplication',
                        '4' => 'Division'
                    ], ['class' => 'form-select mt-1 form-select-sm']) ?>
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="pwd">Language</label>
                    <?= Html::dropDownList('language', $language, [
                        '1' => 'English'
                    ], ['class' => 'form-select mt-1 form-select-sm']) ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label for="email">First Number (Select range)</label>
                    <?= Html::dropDownList('first_number', $first_number, [
                        '1' => '1 to 10',
                        '2' => '10 to 100',
                        '3' => '100 to 1000',
                        '4' => 'Any'
                    ], ['class' => 'form-select mt-1 form-select-sm']) ?>
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="pwd">Second Number (Select range)</label>
                    <?= Html::dropDownList('second_number', $second_number, [
                        '1' => '1 to 9',
                        '2' => '10 to 99',
                        '3' => '100 to 999',
                        '4' => 'Any'
                    ], ['class' => 'form-select mt-1 form-select-sm']) ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label for="pwd">Number of problems</label>
                    <?= Html::dropDownList('number_of_problems', $number_of_problems, [
                        '1' => '12',
                        '2' => '16',
                        '3' => '24',
                        '4' => '32',
                        '5' => '50'
                    ], ['class' => 'form-select mt-1 form-select-sm']) ?>
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="pwd">Need answer sheet ?</label>
                    <?= Html::dropDownList('need_answer_sheet', $need_answer_sheet, [
                        '1' => 'No',
                        '2' => 'Yes'
                    ], ['class' => 'form-select mt-1 form-select-sm']) ?>
                </div>
            </div>
        </div>
        <div class="form-group text-right">
            <?= Html::submitButton('Generate PDF document', ['class' => 'btn btn-primary btn-sm']) ?>
        </div>
        <?php ActiveForm::end(); ?>
    </div>
</div>