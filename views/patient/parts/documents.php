<?php $this->beginContent('@app/views/patient/common/panel.php', [
		'title' => Yii::t('app', 'Documents'),
		'name' => 'documents',
		'total' => 5
	]);
?>
	<label class="checkbox-inline">
		<input type="checkbox"/> My Documents
	</label>

	<table class="table">
		<thead>
			<tr>
				<th><?= Yii::t('app', 'Note Type'); ?></th>
				<th><?= Yii::t('app', 'Author'); ?></th>
				<th><?= Yii::t('app', 'Date/Time'); ?></th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><a href="#">CM IDT Mtg Prep Checklist - Text</a></td>
				<td>Beckles, Ruth</td>
				<td>04/11/14 10:14</td>
			</tr>
			<tr>
				<td><a href="#">Home Safety Evaluation</a></td>
				<td>Physical Therapist</td>
				<td>04/10/14 16:49</td>
			</tr>
			<tr>
				<td><a href="#">CHN Assessment Visit Checklist - Text</a></td>
				<td>Beckles, Ruth</td>
				<td>04/10/14 12:59</td>
			</tr>
			<tr>
				<td><a href="#">Supplemental Questions on Nutrition - Text</a></td>
				<td>Goss, Mary A.</td>
				<td>04/10/14 11:58</td>
			</tr>
			<tr>
				<td><a href="#">Nurse CM Phone Call - Text</a></td>
				<td>Beckles, Ruth</td>
				<td>04/10/14 10:46</td>
			</tr>
		</tbody>
	</table>
<?php $this->endContent(); ?>