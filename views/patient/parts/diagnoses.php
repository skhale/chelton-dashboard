<?php $this->beginContent('@app/views/patient/common/panel.php', [
		'title' => Yii::t('app', 'Diagnoses'),
		'name' => 'diagnoses',
		'total' => 9,
		'closed' => true
	]);
?>
	<table class="table">
		<tbody>
			<tr>
				<td>
					Diabetes
					<small>(309.28)</small>
				</td>
			</tr><tr>
				<td>
					Coronary Heart Disease
					<small>(724.2)</small>
				</td>
			</tr><tr>
				<td>
					Arthropathy
					<small>(54.87)</small>
				</td>
			</tr><tr>
				<td>
					Cirrhosis of the Liver
					<small>(789.87)</small>
				</td>
			</tr><tr>
				<td>
					Ulcerative Colitis
					<small>(478.3)</small>
				</td>
			</tr><tr>
				<td>
					Cardiomyopathy
					<small>(98.4)</small>
				</td>
			</tr><tr>
				<td>
					Cardiac Arrhythmias
					<small>(648.45)</small>
				</td>
			</tr><tr>
				<td>
					Gastrointestinal or Abdominal Symptom
					<small>(787.1)</small>
				</td>
			</tr><tr>
				<td>
					Upper Extremity Injury, Open Would, or Blunt Trauma
					<small>(23.4)</small>
				</td>
			</tr>
		</tbody>
	</table>
<?php $this->endContent(); ?>