<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use kartik\mpdf\Pdf;

class SiteController extends Controller
{
    public function actionIndex()
    {
        $need_answer_sheet = 1;
        $math_type = 1;
        $first_number = 1;
        $second_number = 1;
        $number_of_problems = 12;
        $language = 1;

        if (Yii::$app->request->post()) {
            $data = Yii::$app->request->post();
            $math_array = [];
            $first = $data['first_number'];
            $second = $data['second_number'];
            $operation = $data['math_type'];
            $need_answer_sheet = $data['need_answer_sheet'];

            switch ($first) {
                case 1:
                    $first_min = 1;
                    $first_max = 10;
                    break;
                case 2:
                    $first_min = 10;
                    $first_max = 100;
                    break;
                case 3:
                    $first_min = 100;
                    $first_max = 1000;
                    break;
                default:
                    $first_min = 1;
                    $first_max = 1000;
                    break;
            }

            switch ($second) {
                case 1:
                    $second_min = 1;
                    $second_max = 9;
                    break;
                case 2:
                    $second_min = 10;
                    $second_max = 99;
                    break;
                case 3:
                    $second_min = 100;
                    $second_max = 999;
                    break;
                default:
                    $second_min = 1;
                    $second_max = 999;
                    break;
            }

            for ($i = 0; $i < $data['number_of_problems']; $i++) {
                $first_no = rand($first_min, $first_max);
                $second_no = rand($second_min, $second_max);
                if ($operation == 1) {
                    $operator = "+";
                    $result = $first_no + $second_no;
                } else if ($operation == 2) {
                    while ($first_no < $second_no) {
                        $second_no = rand($second_min, $first_no);
                    }
                    $result = $first_no - $second_no;
                    $operator = "-";
                } else if ($operation == 3) {
                    $result = $first_no * $second_no;
                    $operator = "x";
                } else {
                    while ($first_no < $second_no) {
                        $second_no = rand($second_min, $first_no);
                    }
                    $result = $first_no / $second_no;
                    $operator = "divide";
                }

                $math_array[] = [
                    'first_number' => $first_no,
                    'second_number' => $second_no,
                    'result' => $result,
                    'operation' => $operator
                ];
            }

            $content = $this->renderPartial('_pdf', [
                'data' => $math_array,
                'need_answer_sheet' => $need_answer_sheet
            ]);

            $pdf = new Pdf([
                'mode' => Pdf::MODE_CORE,
                'format' => Pdf::FORMAT_A4,
                'orientation' => Pdf::ORIENT_PORTRAIT,
                'destination' => Pdf::DEST_BROWSER,
                'content' => $content,
                'cssFile' => 'css/pdf.css',
                'options' => ['title' => 'agancode.com'],
                'methods' => [
                    'SetHeader' => ['Math excercise PDF maker'],
                    'SetFooter' => ['agancode.com / Math excercise PDF maker / {PAGENO}'],
                ]
            ]);
            return $pdf->render();
        }

        return $this->render('index', [
            'need_answer_sheet' => $need_answer_sheet,
            'math_type' => $math_type,
            'first_number' => $first_number,
            'second_number' => $second_number,
            'number_of_problems' => $number_of_problems,
            'language' => $language
        ]);
    }
}
