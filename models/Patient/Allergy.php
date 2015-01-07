<?php
namespace app\models\Patient;

class Allergy extends \yii\db\ActiveRecord
{
	public static function tableName() {
		return '{{%allergies}}';
	}

	public function rules() {
		return [
			['patientId', 'required']
		];
	}

	public function getPatient() {
		return $this->hasOne(\app\models\Patient::className(), ['id' => 'patientId']);
	}
}