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
				<label for="name">Name:<label>
				<input name="name" type="text" value="<?php echo $row ? $row['TITLE'] : '' ?>" />
			</div>

			<div>
				<label for="project">Project:</label>
				<textarea name="project"><?php echo $row ? $row['PROJECT_LINK'] : '' ?></textarea>
			</div>

			<div>
				<label for="secret">Secret:</label>
				<textarea name="secret"><?php echo $row ? $row['SECRET'] : '' ?></textarea>
			</div>
			
			<input type="submit" value="Save" />

			<?php if ($row) { ?>
			<input type="hidden" name="id" value="<?php echo $row['ID'] ?>" />
			<input type="submit" name="delete" value="Delete" />
			<?php } ?>
		</form>
	</div>
</div>