<?php $this->beginContent('//patient/common/panel', [
        'title' => Yii::t('app', 'In Patient Admissions'),
        'name' => 'in-paitent-admissions',
        'total' => 4,
        'closed' => true
    ]);
?>
    <table class="table">
        <thead>
            <tr>
                <th><?= Yii::t('app', 'Admit Date'); ?></th>
                <th><?= Yii::t('app', 'Facility'); ?></th>
                <th><?= Yii::t('app', 'LOS'); ?></th>
                <th><?= Yii::t('app', 'Admit Diagnosis'); ?></th>
                <th><?= Yii::t('app', 'LOC'); ?></th>
                <th><?= Yii::t('app', 'Attending Physician'); ?></th>
                <th><?= Yii::t('app', 'Referral Code'); ?></th>
                <th><?= Yii::t('app', 'Status'); ?></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1/27/2014</td>
                <td>ALHALMBRA HOSPITAL</td>
                <td>5</td>
                <td>564.2</td>
                <td>IN PATIENT</td>
                <td>Adam Albert</td>
                <td>2014012122237630</td>
                <td>CLOSED</td>
            </tr>
            <tr>
                <td>3/4/2014</td>
                <td>SANTA MARIA HOSPITAL</td>
                <td>2</td>
                <td>250</td>
                <td>IN PATIENT</td>
                <td>Damian Vela</td>
                <td>2014012122237630</td>
                <td>CLOSED</td>
            </tr>
            <tr>
                <td>4/15/2014</td>
                <td>ADELANTO HOSPITAL</td>
                <td>64</td>
                <td>724.5</td>
                <td>SNF</td>
                <td>Damian Vela</td>
                <td>2014012122237630</td>
                <td>CLOSED</td>
            </tr>
            <tr>
                <td>7/5/2014</td>
                <td>AZUA HOSPITAL</td>
                <td>30</td>
                <td>250</td>
                <td>SNF</td>
                <td>Adam Albert</td>
                <td>2014012122237630</td>
                <td>OPEN</td>
            </tr>
        </tbody>
    </table>
<?php $this->endContent(); ?>