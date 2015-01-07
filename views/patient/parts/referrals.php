<?php $this->beginContent('@app/views/patient/common/panel.php', [
		'title' => Yii::t('app', 'Referrals'),
		'subtitle' => 'Authorizations',
		'name' => 'referrals',
		'total' => 8
	]);
?>
	<table class="table">
		<thead>
			<tr>
				<th>&nbsp;</th>
				<th><?= Yii::t('app', 'Status'); ?></th>
				<th><?= Yii::t('app', 'Start Date'); ?></th>
				<th><?= Yii::t('app', 'End Date'); ?></th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Consult to Clincial Pharmacist</td>
				<td><?= Yii::t('app', 'Ordered'); ?></td>
				<td>04/11/14 10:11</td>
				<td>04/11/14 10:11</td>
			</tr>
			<tr>
				<td>Nutrition Eval/Initial</td>
				<td><?= Yii::t('app', 'Ordered'); ?></td>
				<td>04/10/14 13:12</td>
				<td>04/11/14 10:11</td>
			</tr>
			<tr>
				<td>Transitional Eval/Initial</td>
				<td><?= Yii::t('app', 'Ordered'); ?></td>
				<td>04/10/14 13:11</td>
				<td>04/11/14 10:11</td>
			</tr>
			<tr>
				<td>Social Work Eval/Initial</td>
				<td><?= Yii::t('app', 'Ordered'); ?></td>
				<td>04/10/14 13:04</td>
				<td>04/11/14 10:11</td>
			</tr>
			<tr>
				<td>Consult to PT</td>
				<td><?= Yii::t('app', 'Ordered'); ?></td>
				<td>04/10/14 12:43</td>
				<td>04/11/14 10:11</td>
			</tr>
			<tr>
				<td>Consult to OT</td>
				<td><?= Yii::t('app', 'Ordered'); ?></td>
				<td>04/10/14 12:43</td>
				<td>04/11/14 10:11</td>
			</tr>
			<tr>
				<td>Consult Behavioral Health</td>
				<td><?= Yii::t('app', 'Ordered'); ?></td>
				<td>04/10/14 12:43</td>
				<td>04/11/14 10:11</td>
			</tr>
			<tr>
				<td>Consult to Medical Managment</td>
				<td><?= Yii::t('app', 'Ordered'); ?></td>
				<td>04/10/14 12:22</td>
				<td>04/11/14 10:11</td>
			</tr>
		</tbody>
	</table>
<?php $this->endContent(); ?>