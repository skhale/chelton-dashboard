<?php $this->beginContent('//patient/common/panel', [
        'title' => Yii::t('app', 'Claims'),
        'name' => 'claims',
        'total' => 8
    ]);
?>
    <table class="table">
        <thead>
            <tr>
                <th><?= Yii::t('app', 'Date'); ?></th>
                <th><?= Yii::t('app', 'CPT / Description'); ?></th>
                <th><?= Yii::t('app', 'ICD Code / Description'); ?></th>
                <th><?= Yii::t('app', 'Physician'); ?></th>
                <th><?= Yii::t('app', 'Specialty'); ?></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>10/13/2013</td>
                <td>99212 / OFFICE/OUTPATIEN...</td>
                <td>465. / AC URI MULT SITES...</td>
                <td>PETERS<br/>INA</td>
                <td>FAMILY PRACTICE</td>
            </tr>
            <tr>
                <td>10/13/2013</td>
                <td>99212 / OFFICE/OUTPATIEN...</td>
                <td>272.4 / HYPERLIPIDEMIA N...</td>
                <td>PETERS<br/>INA</td>
                <td>FAMILY PRACTICE</td>
            </tr>
            <tr>
                <td rowspan="4">11/13/2013</td>
                <td>81002 / URINALYSIS NONAU...</td>
                <td>280.1 / IRON DEF ANEMIA ...</td>
                <td rowspan="4">PETERS<br/>INA</td>
                <td rowspan="4">FAMILY PRACTICE</td>
            </tr>
            <tr>
                <td>85025 / COMPLETE CBC W/A...</td>
                <td>599.7 / HEMATURIA</td>
            </tr>
            <tr>
                <td>99203 / OFFICE/OUTPATIEN...</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td>99212 / OFFICE/OUTPATIEN...</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td>11/13/2005</td>
                <td>99212 / OFFICE/OUTPATIEN...</td>
                <td>465. / AC URI MULT SITES...</td>
                <td>PETERS<br/>INA</td>
                <td>FAMILY PRACTICE</td>
            </tr>
            <tr>
                <td>06/13/2005</td>
                <td>99212 / OFFICE/OUTPATIEN...</td>
                <td>314.00 / ATTN DEFIC NONH...</td>
                <td>CONNORS<br/>ANNA</td>
                <td>GENERAL PRACTICE</td>
            </tr>
        </tbody>
    </table>
<?php $this->endContent(); ?>