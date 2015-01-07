<?php $this->beginContent('@app/views/patient/common/panel.php', [
		'title' => Yii::t('app', 'Notes'),
		'name' => 'notes',
		'total' => count($patient->notes)
	]);
?>
	<?php if (count($patient->notes) > 0): ?>
		<table class="table">
			<thead>
				<tr>
					<th><?= Yii::t('app', 'Subject'); ?></th>
					<th><?= Yii::t('app', 'Category'); ?></th>
					<th><?= Yii::t('app', 'Author'); ?></th>
					<th><?= Yii::t('app', 'Description'); ?></th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($patient->notes as $note): ?>
					<tr>
						<td><a href="#" data-toggle="modal" data-target="#note-modal-<?= $note->id; ?>"><?= $note->subject; ?></a></td>
						<td><?= $note->category->name; ?></td>
						<td><?= $note->author->lastName; ?>, <?= $note->author->firstName; ?></td>
						<td><?= $note->description; ?></td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	<?php else: ?>
		<?= Yii::t('app', 'No Results Found'); ?>
	<?php endif; ?>
<?php $this->endContent(); ?>

<?php if (count($patient->notes) > 0): ?>
	<?php foreach ($patient->notes as $note): ?>
		<div id="note-modal-<?= $note->id; ?>" class="modal fade">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title"><?= $note->subject; ?></h4>
					</div>
					<div class="modal-body">
						<p><?= $note->description; ?></p>
						<p>
							<small><em>User Name:</em> <?= $note->author->lastName; ?>, <?= $note->author->firstName; ?><br/>
							<em>Last Changed On:</em> 4/7/2014 7:44:08 PM</small>
						</p>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn" data-dismiss="modal"><?= Yii::t('app', 'Click to close note'); ?></button>
					</div>
				</div><!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
		</div><!-- /.modal -->
	<?php endforeach; ?>
<?php endif; ?>