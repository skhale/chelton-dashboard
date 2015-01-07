<?php
namespace app\models;

class Patient extends \yii\db\ActiveRecord
{
	const GENDER_MALE = 'Male';
	const GENDER_FEMALE = 'Female';

	public static function tableName() {
		return '{{%patients}}';
	}

	public function rules() {
		return [
			['dateOfBirth', 'date']
		];
	}

	public function getAllergies() {
		return $this->hasMany(\app\models\Patient\Allergy::className(), ['patientId' => 'id']);
	}

	public function getNotes() {
		return $this->hasMany(\app\models\Patient\Note::className(), ['patientId' => 'id']);
	}
}