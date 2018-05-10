<?php use Fisharebest\Webtrees\I18N; ?>

<h2><?= $title ?></h2>

<form method="post">
	<?= csrf_field() ?>

	<table>
		<tr>
			<th>
				<label for="subject">
					<?= I18N::translate('Title') ?>
				</label>
			</th>
		<tr>
		<tr>
			<td>
				<input type="text" id="subject" name="subject" size="50" dir="auto" autofocus value="<?= e($subject) ?>">
			</td>
		</tr>
		<tr>
			<th>
				<label for="body">
					<?= I18N::translate('Content') ?>
				</label>
			</th>
		</tr>
		<tr>
			<td>
				<textarea id="body" name="body" class="html-edit form-control" rows="10" dir="auto"><?= e($body) ?></textarea>
			</td>
		</tr>

		<tr>
			<td>
				<button class="btn btn-primary" type="submit">
					<?= I18N::translate('save') ?>
				</button>

				<a class="btn btn-secondary" href="<?= e(route('tree-page', ['ged' => $tree->getName()])) ?>">
					<?= I18N::translate('cancel') ?>
				</a>
			</td>
		</tr>
	</table>
</form>
