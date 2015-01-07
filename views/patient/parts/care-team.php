<?php $this->beginContent('@app/views/patient/common/panel.php', [
		'title' => Yii::t('app', 'Care Team'),
		'name' => 'care-team',
		'total' => 5
	]);
?>
	<table class="table">
		<thead>
			<tr>
				<th><?= Yii::t('app', 'Specialty'); ?></th>
				<th><?= Yii::t('app', 'Name'); ?></th>
				<th><?= Yii::t('app', 'Provider ID'); ?></th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><?= Yii::t('app', 'Cardiovascular Discardiology'); ?></td>
				<td>Lucille Faille</td>
				<td>PG9822219007</td>
			</tr>
			<tr>
				<td><?= Yii::t('app', 'Emergency Medecine'); ?></td>
				<td>Dillon Marsek</td>
				<td>PG5648419007</td>
			</tr>
			<tr>
				<td><?= Yii::t('app', 'Gastroenterology'); ?></td>
				<td>Francie Maute</td>
				<td>PG9826589007</td>
			</tr>
			<tr>
				<td><?= Yii::t('app', 'Laboratory'); ?></td>
				<td>Ruthanne Coaker</td>
				<td>PG9885849007</td>
			</tr>
			<tr>
				<td><?= Yii::t('app', 'Radiology'); ?></td>
				<td>Gaylord Amicone</td>
				<td>PG4898419007</td>
			</tr>
		</tbody>
	</table>
<?php $this->endContent(); ?>