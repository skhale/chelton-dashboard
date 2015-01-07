<?php $this->beginContent('@app/views/patient/common/panel.php', [
		'title' => Yii::t('app', 'Family History'),
		'name' => 'family-history',
		'total' => 0
	]);
?>
	<?= Yii::t('app', 'No results found'); ?>
<?php $this->endContent(); ?>