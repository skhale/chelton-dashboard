<?php
namespace app\controllers;

use Yii;

class PatientController extends \yii\web\Controller
{
    public function actionSearch($searchTerm) 
    {
        $searchTerm = addcslashes($searchTerm, '%_');

        $patients = \app\models\Patient\DeactivatedPatient::find()
        ->select(
            ['*', 'MATCH(`GivenName`, `Surname`) AGAINST (:match IN BOOLEAN MODE) AS relevance']
        )
        ->params([':match' => '%' . $searchTerm . '%'])
        ->having(['>', 'relevance', 0])
        ->orderBy('relevance DESC, GivenName')
        ->limit(10)
        ->all();

        $params = ['patients' => $patients];

        if (Yii::$app->request->isAjax) {
            return $this->renderPartial('search-results', $params);
        } else {
            return $this->render('search-results', $params);
        }
    }

    public function actionView($id) 
    {
        $patient = \app\models\Patient\DeactivatedPatient::findOne($id);
        return $this->renderPartial('index', ['patient' => $patient]);
    }
}