<?php
use yii\helpers\Url;

$this->title = Yii::$app->name;
?>

<ul class="patient-tabs nav nav-tabs">
	<li class="active"><a href="#patient-home" data-toggle="tab"><i class="fa fa-search"></i></a></li>
	<?php foreach ($patients as $idx => $patient): ?>
		<li>
			<a href="#patient-<?= $idx; ?>" data-toggle="tab">
				<?php $tabName = $patient->lastName . ', ' . $patient->firstName; ?>
				<?= strlen($tabName) > 11 ? substr($tabName, 0, 11) . '...' : $tabName; ?>
				<i class="glyphicon glyphicon-remove"></i>
			</a>
			<!-- <button type="button" class="close" aria-hidden="true">&times;</button> -->
		</li>
	<?php endforeach; ?>
</ul>

<div class="patient-panes tab-content">
	<div id="patient-home" class="tab-pane active" style="padding: 25px;">
		<div class="container">
		<form id="simple-search" method="post" action="<?= Url::to('patient/search'); ?>" role="form">
			<div class="input-group">
				<input name="searchTerm" class="form-control input-lg" type="text" placeholder="Searching <?= number_format($total); ?> Patient Records"/>
				<span class="input-group-btn">

					<button class="btn btn-lg" type="submit">
						<i class="fa fa-search"></i>
					</button>
				</span>
			</div>
		</form>

			<div id="patient-search-results"></div>
		</div>
	</div>

	<?php foreach ($patients as $idx => $patient): ?>
		<div id="patient-<?= $idx; ?>" class="tab-pane">
			<?php $this->renderPartial('/patient/index', array('patient' => $patient)); ?>
		</div>
	<?php endforeach; ?>
</div>