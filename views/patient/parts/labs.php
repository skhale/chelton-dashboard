<?php $this->beginContent('@app/views/patient/common/panel.php', [
		'title' => Yii::t('app', 'Labs'),
		'name' => 'labs',
		'total' => 6
	]);
?>
	<table class="table">
		<thead>
			<tr>
				<th><?= Yii::t('app', 'Test'); ?></th>
				<th><?= Yii::t('app', 'Test Date'); ?></th>
				<th><?= Yii::t('app', 'Test Result'); ?></th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><?= Yii::t('app', 'Cholesterol'); ?></td>
				<td>1/14/2013</td>
				<td>201 mg/dl</td>
			</tr>
			<tr>
				<td><?= Yii::t('app', 'Cholesterol'); ?></td>
				<td>12/12/2012</td>
				<td>305 mg/dl</td>
			</tr>
			<tr>
				<td><?= Yii::t('app', 'Cholesterol in HDL'); ?></td>
				<td>1/14/2013</td>
				<td>53 mg/dl</td>
			</tr>
			<tr>
				<td><?= Yii::t('app', 'Cholesterol in HDL'); ?></td>
				<td>12/12/2012</td>
				<td>56 mg/dl</td>
			</tr>
			<tr>
				<td><?= Yii::t('app', 'Triglyceride'); ?></td>
				<td>1/14/2013</td>
				<td>276 mg/dl</td>
			</tr>
			<tr>
				<td><?= Yii::t('app', 'Triglyceride'); ?></td>
				<td>12/12/2012</td>
				<td>234 mg/dl</td>
			</tr>
		</tbody>
	</table>
<?php $this->endContent(); ?>