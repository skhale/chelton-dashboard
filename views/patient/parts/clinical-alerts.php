<?php $this->beginContent('@app/views/patient/common/panel.php', [
		'title' => Yii::t('app', 'Clinical Alerts'),
		'name' => 'clinical-alerts',
		'total' => 7
	]);
?>
	<div class="list-group">
		<a href="#" class="list-group-item">
			<span class="badge">1</span>
			<h5 class="list-group-item-heading">
				<i class="fa fa-exclamation-triangle"></i>
				Perforated Appendix Admission Rate
			</h5>
			<p class="list-group-item-text">Percentage of patients aged 18 and older who are screened for high blood pressure</p>
		</a>
		<a href="#" class="list-group-item">
			<span class="badge">3</span>
			<h5 class="list-group-item-heading">
				<i class="fa fa-exclamation-triangle"></i>
				Diabetes High Blood Pressure Control
			</h5>
			<p class="list-group-item-text">Percentage of patients ages 18 to 75 years of age with Diabetes Mellitus who had a blood pressure less than 140/90 mmHg</p>
		</a>
		<a href="#" class="list-group-item">
			<span class="badge">1</span>
			<h5 class="list-group-item-heading">
				<i class="fa fa-exclamation-triangle"></i>
				Case Findings
			</h5>
			<p class="list-group-item-text">Depression stage-specific-depression</p>
		</a>
		<a href="#" class="list-group-item">
			<span class="badge">1</span>
			<h5 class="list-group-item-heading">
				<i class="fa fa-exclamation-triangle"></i>
				Case Findings
			</h5>
			<p class="list-group-item-text">Low back pain and 1 low back pain related admission</p>
		</a>
		<a href="#" class="list-group-item">
			<span class="badge">1</span>
			<h5 class="list-group-item-heading">
				<i class="fa fa-exclamation-triangle"></i>
				Treatment Opportunities
			</h5>
			<p class="list-group-item-text">Age 60 or older and no glaucoma screening in past 24 months</p>
		</a>
		<a href="#" class="list-group-item">
			<span class="badge">1</span>
			<h5 class="list-group-item-heading">
				<i class="fa fa-exclamation-triangle"></i>
				Preventative Health &amp; Wellness
			</h5>
			<p class="list-group-item-text">Adult 50 or older and no colon cancer screening (FOBT within the past 12 months of flexible sigmoidoscopy or colonoscopy in the past 27 months)</p>
		</a>
		<a href="#" class="list-group-item">
			<span class="badge">1</span>
			<h5 class="list-group-item-heading">
				<i class="fa fa-exclamation-triangle"></i>
				Preventative Health &amp; Wellness
			</h5>
			<p class="list-group-item-text">Age 65 or 66 and no pneumococcal vaccine in the past 24 months</p>
		</a>
	</div>
<?php $this->endContent(); ?>