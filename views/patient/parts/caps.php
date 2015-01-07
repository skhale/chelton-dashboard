<div class="caps panel">
	<div class="panel-heading">
		<h4 class="panel-title">
			<?= Yii::t('app', 'Identified CAPS'); ?>
			<span class="badge">8</span>
			<a data-toggle="collapse" data-parent=".caps" href=".caps .panel-collapse" class="pull-right">
				<i class="fa fa-chevron-circle-up"></i>
			</a>
		</h4>
	</div>
	<div class="panel-collapse collapse in">
		<div class="panel-body">

		<table class="table">
			<thead>
				<tr>
					<th><?= Yii::t('app', 'CAP'); ?></th>
					<th><?= Yii::t('app', 'Status'); ?></th>
					<th><?= Yii::t('app', 'Triggering Items'); ?></th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>ADL</td>
					<td>Triggered - prevent decline</td>
					<td>Falls frequency, ADL: Limited impairment</td>
				</tr>
				<tr>
					<td>Abusive Relationship</td>
					<td>Triggered - high risk</td>
					<td>
						Fearful of family member or caregiver, Reduced social interaction, Compliance with medications, Better if moved, Primary caregiver distressed, Depression Rating Scale = 7 (range 0-14)
						<ul>
							<li>Negative statements.</li>
							<li>Persistent anger.</li>
							<li>Repetitive health complaints.</li>
							<li>Repetitive anxious complaints.</li>
							<li>Sad, worried facial expressions.</li>
							<li>Crying.</li>
						</ul>
					</td>
				</tr>
				<tr>
					<td>Cardiorespiratory Conditions</td>
					<td>Triggered</td>
					<td>Shortness of breath</td>
				</tr>
				<tr>
					<td>Communication</td>
					<td>Triggered - risk of decline</td>
					<td>Decision making</td>
				</tr>
				<tr>
					<td>Dehydration</td>
					<td>Triggered</td>
					<td>High Fever</td>
				</tr>
				<tr>
					<td>Home Environment Optimization</td>
					<td>Triggered</td>
					<td>
						Total hours of exercise or physical activity in last 3 days, Difficult access to home, Depression Rating Scale = 7 (range 0-14)
						<ul>
							<li>Negative statements.</li>
							<li>Persistent anger.</li>
							<li>Repetitive health complaints.</li>
							<li>Repetitive anxious complaints.</li>
							<li>Sad, worried facial expressions.</li>
							<li>Crying.</li>
						</ul>
					</td>
				</tr>
				<tr>
					<td>Institutional Risk</td>
					<td>Triggered  - Verbally abusive behavior</td>
					<td>Resists care, Behavioral problem count:2, Decision making, Understood, Falls frequency, Institutional risk count: 4</td>
				</tr>
				<tr>
					<td>Prevention</td>
					<td>Triggered - physician visit</td>
					<td>Physician visit (count): 5, Influenza vaccination, Pneumovax, Blood pressure, Dental Exam, Hearing Exam, Eye Exam, Colonoscopy</td>
				</tr>
			</tbody>
		</table>

		</div>
	</div>
</div>