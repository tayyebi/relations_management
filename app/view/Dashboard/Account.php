<?php
$row = isset($Data['Row']) ? $Data['Row'] : null;
?>


<div class="activity">
	<div class="title">
		<i class="uil uil-paragraph"></i>
		<span class="text">Amazing Content</span>
	</div>

	<div class="activity-data">
		<form method="post">
			<div>
				<label for="title">Title:<label>
				<input name="title" type="text" value="<?php echo $row ? $row['TITLE'] : '' ?>" />
			</div>

			<div>
				<label for="body">Body:</label>
				<textarea name="body"><?php echo $row ? $row['BODY'] : '' ?></textarea>
			</div>

			<input type="hidden" name="date" value="<?php echo date('Y-m-d') ?>" />
			<input type="submit" value="Save" />

			<?php if ($row) { ?>
			<input type="hidden" name="id" value="<?php echo $row['ID'] ?>" />
			<input type="submit" name="delete" value="Delete" />
			<?php } ?>
		</form>
	</div>
</div>