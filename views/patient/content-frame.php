<div class="content-top-bar" class="btn-toolbar" role="toolbar">
	<div class="btn-group">
		<button type="button" class="btn">
			<i class="fa fa-search"></i>
		</button>
		<button type="button" class="btn">
			<i class="fa fa-file"></i>
		</button>
	</div>
	<div class="btn-group">
		<button type="button" class="btn">
			<i class="fa fa-undo"></i>
		</button>
		<button type="button" class="btn">
			<i class="fa fa-repeat"></i>
		</button>
	</div>
	<div class="btn-group">
		<button type="button" class="btn">
			<i class="fa fa-search-plus"></i>
		</button>
		<button type="button" class="btn">
			<i class="fa fa-search-minus"></i>
		</button>
	</div>
</div>

<?php $panelParams = ['patient' => $patient]; ?>
<div class="row">
	<div class="col-md-4">
		<?= $this->render('/patient/parts/member-information', $panelParams); ?>
		<?= $this->render('/patient/parts/diagnoses', $panelParams); ?>
		<?= $this->render('/patient/parts/medication-list', $panelParams); ?>
		<?= $this->render('/patient/parts/allergies', $panelParams); ?>
		<?= $this->render('/patient/parts/family-history', $panelParams); ?>
		<?= $this->render('/patient/parts/labs', $panelParams); ?>
	</div>
	<div class="col-md-4">
		<?= $this->render('/patient/parts/identified-caps', $panelParams); ?>
		<?= $this->render('/patient/parts/action-plan', $panelParams); ?>
		<?= $this->render('/patient/parts/clinical-alerts', $panelParams); ?>
		<?= $this->render('/patient/parts/referrals', $panelParams); ?>
	</div>
	<div class="col-md-4">
		<?= $this->render('/patient/parts/idt-meeting', $panelParams); ?>
		<?= $this->render('/patient/parts/notes', $panelParams); ?>
		<?= $this->render('/patient/parts/documents', $panelParams); ?>
		<?= $this->render('/patient/parts/care-team', $panelParams); ?>
		<?= $this->render('/patient/parts/transition-of-care', $panelParams); ?>
		<?= $this->render('/patient/parts/social-history', $panelParams); ?>
	</div>
</div>