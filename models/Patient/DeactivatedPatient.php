<?php
namespace app\models\Patient;

class DeactivatedPatient extends \app\models\Patient
{
	public $id;
	public $dateOfBirth;
	public $gender;
	public $firstName;
	public $lastName;
	public $memberNumber;

	public static function tableName() {
		return '{{%DeID_FictitiousDemographics}}';
	}

	public function afterFind() {
		$this->id = $this->DeID;
		$this->memberNumber = $this->NationalID;
		$this->firstName = $this->GivenName;
		$this->lastName = $this->Surname;
		$this->dateOfBirth = new \DateTime($this->Birthday);

		if ($this->Gender == 'female') {
			$this->gender = self::GENDER_FEMALE;
		} else {
			$this->gender = self::GENDER_MALE;
		}
	}
}