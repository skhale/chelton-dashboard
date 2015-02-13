<?php
namespace app\modules\api\v1\controllers;

use yii\web\Response;

class PatientController extends \yii\rest\ActiveController
{
    public $modelClass = 'app\modules\api\v1\models\Patient';

    public $serializer = [
        'class' => 'yii\rest\Serializer',
        'collectionEnvelope' => 'items',
    ];

	public function actionSearch($searchTerm) {
		$searchTerm = addcslashes($searchTerm, '%_');

        $model = new $this->modelClass;
        
		$patients = $model::find()
			->select(['*', 'MATCH(`GivenName`, `Surname`) AGAINST (:match IN BOOLEAN MODE) AS relevance'])
			->params([':match' => '%' . $searchTerm . '%'])
			->having(['>', 'relevance', 0])
			->orderBy('relevance DESC, GivenName')
			->limit(10)
			->all();

        return $patients;
	}
}