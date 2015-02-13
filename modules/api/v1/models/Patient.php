<?php
namespace app\modules\api\v1\models;

use \yii\helpers\ArrayHelper;

class Patient extends \app\models\Patient\DeactivatedPatient
{
    public function fields() {
        return [
            'id',
            'EmailAddress',
            'Gender',
            'Title',
            'GivenName',
            'MiddleInitial',
            'Surname',
            'StreetAddress',
            'City',
            'State',
            'ZipCode',
            'Country'
        ];
    }

    public function extraFields() {
        return ArrayHelper::merge(
            parent::extraFields(),
            [
                'DeID', 'BloodType', 'Birthday', 'NationalID', 'Pounds',
                'Username', 'Password', 'TelephoneNumber', 'MothersMaiden',
                'Occupation', 'Company', 'Vehicle', 'FeetInches', 'GUID', 'used',
                'notes', 'allergies'
            ]
        );
    }
}