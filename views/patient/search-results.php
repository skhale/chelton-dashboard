<h1>Search Results</h1>

<?php if (count($patients)): ?>
	<ul class="search-result-list list-group">
	<a href="#" class="list-group-item active">Patient Records</a>
	<?php foreach ($patients as $patient): ?>
		<a href="#" class="search-result-item list-group-item" data-id="<?= $patient->id; ?>" data-name="<?= $patient->lastName . ', ' . $patient->firstName; ?>">
			<h4 class="list-group-item-heading"><?= $patient->firstName ?> <?= $patient->lastName; ?></h4>
			<?= Yii::t('app', 'DOB:'); ?> <?= date_format($patient->dateOfBirth, Yii::$app->params['dateFormat']); ?>
			<?= Yii::t('app', 'Sex:'); ?> <?= $patient->gender; ?>
		</a>
	<?php endforeach; ?>
	</ul>
<?php else: ?>
	<?= Yii::t('app', 'No Results Found'); ?>
<?php endif; ?>