<?php $this->beginContent('@app/views/patient/common/panel.php', [
		'title' => Yii::t('app', 'Action Plan'),
		'name' => 'action-plan',
		'total' => 11
	]);
?>
	<table class="table">
		<thead>
			<tr>
				<th><?= Yii::t('app', 'Plan Name'); ?></th>
				<th><?= Yii::t('app', 'Status'); ?></th>
				<th><?= Yii::t('app', 'Date/Time'); ?></th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Ineffective Coping Plan of Care</td>
				<td><?= Yii::t('app', 'In Process'); ?></td>
				<td>04/30/14 08:00</td>
			</tr>
			<tr>
				<td>Pain Plan of Care</td>
				<td><?= Yii::t('app', 'In Process'); ?></td>
				<td>04/30/14 08:00</td>
			</tr>
			<tr>
				<td>Pain Plan of Care</td>
				<td><?= Yii::t('app', 'In Process'); ?></td>
				<td>04/11/14 12:00</td>
			</tr>
			<tr>
				<td>Risk for Altered Skin Integrity Plan of Care</td>
				<td><?= Yii::t('app', 'In Process'); ?></td>
				<td>04/11/14 12:00</td>
			</tr>
			<tr>
				<td>Risk for Altered Skin Integrity Plan of Care</td>
				<td><?= Yii::t('app', 'In Process'); ?></td>
				<td>04/30/14 08:00</td>
			</tr>
			<tr>
				<td>Safety Plan of Care</td>
				<td><?= Yii::t('app', 'In Process'); ?></td>
				<td>04/30/14 11:26</td>
			</tr>
			<tr>
				<td>Safety Plan of Care</td>
				<td><?= Yii::t('app', 'In Process'); ?></td>
				<td>04/11/14 08:18</td>
			</tr>
			<tr>
				<td>Social Relationship Plan of Care</td>
				<td><?= Yii::t('app', 'In Process'); ?></td>
				<td>04/30/14 08:00</td>
			</tr>
			<tr>
				<td>Social Relationship Plan of Care</td>
				<td><?= Yii::t('app', 'In Process'); ?></td>
				<td>04/11/14 09:52</td>
			</tr>
			<tr>
				<td>Total Dependency Related to C4 Injury Plan of Care</td>
				<td><?= Yii::t('app', 'In Process'); ?></td>
				<td>04/30/14 08:00</td>
			</tr>
			<tr>
				<td>Total Dependency Related to C4 Injury Plan of Care</td>
				<td><?= Yii::t('app', 'In Process'); ?></td>
				<td>04/11/14 09:36</td>
			</tr>
		</tbody>
	</table>
<?php $this->endContent(); ?>