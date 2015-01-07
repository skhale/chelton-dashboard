<?php
namespace app\models\Patient;

class NoteCategory extends \yii\db\ActiveRecord
{
	public static function tableName() {
		return '{{%noteCategories}}';
	}

	public function getNotes() {
		return $this->hasMany(\app\models\Patient\Note::className(), ['id' => 'categoryId']);
	}
}