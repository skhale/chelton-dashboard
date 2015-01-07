<?php if (!isset($closed)) $closed = !(!isset($total) || $total > 0); ?>
<div class="<?= $name; ?> panel">
	<div class="panel-heading">
		<h4 class="panel-title">
			<?= $title; ?>
			<?php if (isset($total)): ?>
				<span class="badge"><?= $total; ?></span>
			<?php endif; ?>

			<a data-toggle="collapse" data-parent=".<?= $name; ?>" href=".<?= $name; ?> .panel-collapse" class="pull-right">
				<?php if (!$closed): ?>
						<i class="fa fa-chevron-circle-up"></i>
				<?php else: ?>
					<i class="fa fa-chevron-circle-down"></i>
				<?php endif; ?>
			</a>
		</h4>
	</div>
	<div class="panel-collapse collapse<?php if (!$closed): ?> in<?php endif; ?>">
		<?php if (isset($subtitle)): ?>
			<div class="panel-subheading"><?= $subtitle; ?></div>
		<?php endif; ?>
		<div class="panel-body">
			<?= $content; ?>
		</div>
	</div>
</div>