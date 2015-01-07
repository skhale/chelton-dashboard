<?php
use yii\helpers\Html;
?>

<div class="container-fluid">
	<div class="patient-header">
		<div class="row">
			<div class="patient-name col-md-4"><?= Html::encode($patient->lastName . ', ' . $patient->firstName); ?></div>
			<div class="col-md-2"><?= Yii::t('app', 'DOB:'); ?> <?= date_format($patient->dateOfBirth, Yii::$app->params['dateFormat']); ?></div>
			<div class="col-md-2"><?= Yii::t('app', 'Age:'); ?> <?= $patient->dateOfBirth->diff(new DateTime('today'))->y; ?> <?= Yii::t('app', 'years'); ?></div>
			<div class="col-md-2"><?= Yii::t('app', 'Sex:'); ?> <?= $patient->gender; ?></div>
			<div class="col-md-2"><?= Yii::t('app', 'Member Number:'); ?> <?= $patient->memberNumber; ?></div>
		</div>
		<div class="row">
			<div class="col-md-2">
				<?= Yii::t('app', 'Member Program:'); ?>
				<?php if ($patient->GUID == 'PACE'): ?>PACE<?php else: ?>FIDA<?php endif; ?>
			</div>
			<div class="col-md-10"></div>
		</div>
	</div>

	<div class="patient-content">
	<div class="row">
		<div class="sidebar col-md-2">
			<?= $this->render('/patient/left-navigation'); ?>
		</div>
		<div class="col-md-10">
			<?= $this->render('/patient/content-frame', array('patient' => $patient)); ?>
		</div>
	</div>
	</div>
</div>