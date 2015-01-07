<?php $this->beginContent('@app/views/patient/common/panel.php', [
		'title' => Yii::t('app', 'Member Information'),
		'name' => 'member-information'
	]);
?>
	<table class="table">
		<tbody>
			<tr>
				<td><?= Yii::t('app', 'Problem List:'); ?></td>
				<td><?= Yii::t('app', 'No results found'); ?></td>
			</tr>
			<tr>
				<td><?= Yii::t('app', 'Program:'); ?></td>
				<td>
					<?php if ($patient->GUID == 'PACE'): ?>PACE<?php else: ?>FIDA<?php endif; ?>
				</td>
			</tr>
			<tr>
				<td><?= Yii::t('app', 'Admit Date:'); ?></td>
				<td>04/01/14</td>
			</tr>
			<tr>
				<td><?= Yii::t('app', 'Communication Preference:'); ?></td>
				<td>Email</td>
			</tr>
			<tr>
				<td><?= Yii::t('app', 'Email Address:'); ?></td>
				<td><a href="mailto:<?= $patient->EmailAddress; ?>"><?= $patient->EmailAddress; ?></a></td>
			</tr>
			<tr>
				<td><?= Yii::t('app', 'Preferred Language:'); ?></td>
				<td><?= Yii::t('app', 'English'); ?></td>
			</tr>
			<tr>
				<td><?= Yii::t('app', 'Occupation:'); ?></td>
				<td><?= $patient->Occupation; ?></td>
			</tr>
			<tr>
				<td colspan="2"><?= Yii::t('app', 'Diet and Activity'); ?> <span class="badge">0</span></td>
			</tr>
			<tr>
				<td colspan="2">
					<a href="#" data-toggle="collapse" data-target=".emergency-contacts">
						<i class="fa fa-caret-right"></i>
						<?= Yii::t('app', 'Emergency Contact'); ?> <span class="badge">2</span>
					</a>

					<ul class="emergency-contacts list-group collapse">
						<li class="list-group-item">
							GLENN, JUSTIN
							<span class="pull-right">(914) 565-8789</span>
						</li>
						<li class="list-group-item">
							DOE, JOHN
							<span class="pull-right">(786) 555-1234</span>
						</li>
					</ul>
				</td>
			</tr>
		</tbody>
	</table>
<?php $this->endContent(); ?>