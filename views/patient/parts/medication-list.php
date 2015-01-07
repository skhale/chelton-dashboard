<?php $this->beginContent('@app/views/patient/common/panel.php', [
		'title' => Yii::t('app', 'Medication List'),
		'name' => 'medication-list',
		'total' => 1
	]);
?>
	<table class="table">
		<tbody>
			<tr>
				<td>
					Hx: acetaminophen (Tylenol Caplet Extra Strength 500 mg oral tablet)
					<small>500 mg, Oral, q6hr, PRN: as needed for pain</small>
				</td>
			</tr>
		</tbody>
	</table>
<?php $this->endContent(); ?>