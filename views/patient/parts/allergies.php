<?php $this->beginContent('@app/views/patient/common/panel.php', [
		'title' => Yii::t('app', 'Allergies'),
		'name' => 'allergies',
		'total' => count($patient->allergies)
	]);
?>
	<?php if (count($patient->allergies) > 0): ?>
		<table class="table">
			<thead>
				<th width="25%"><?= Yii::t('app', 'Name'); ?></th>
				<th width="75%"><?= Yii::t('app', 'Description'); ?></th>
			</thead>
			<tbody>
				<?php foreach ($patient->allergies as $allergy): ?>
					<tr>
						<td><?= $allergy->name; ?></td>
						<td><?= $allergy->description; ?></td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	<?php else: ?>
		<?= Yii::t('app', 'No Known Allergies'); ?>
	<?php endif; ?>
<?php $this->endContent(); ?>