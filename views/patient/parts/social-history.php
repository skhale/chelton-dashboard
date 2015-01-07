<?php $this->beginContent('@app/views/patient/common/panel.php', [
		'title' => Yii::t('app', 'Social History'),
		'name' => 'social-history',
		'total' => 0
	]);
?>
	<?= Yii::t('app', 'No results found'); ?>
<?php $this->endContent(); ?>