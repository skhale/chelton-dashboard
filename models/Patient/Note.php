<?php
namespace app\models\Patient;

class Note extends \yii\db\ActiveRecord
{
	public static function tableName() {
		return '{{%notes}}';
	}

	public function rules() {
		return [
			['patientId', 'required']
		];
	}

	public function getPatient() {
		return $this->hasOne(\app\models\Patient::className(), ['id' => 'patientId']);
	}

	public function getCategory() {
		return $this->hasOne(\app\models\Patient\NoteCategory::className(), ['id' => 'categoryId']);
	}

	public function getAuthor() {
		return $this->hasOne(\app\models\User::className(), ['id' => 'authorId']);
	}
}