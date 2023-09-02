<?php
$row = isset($Data['Row']) ? $Data['Row'] : null;
?>


<div class="activity">
	<div class="title">
		<i class="uil uil-user"></i>
		<span class="text">Account</span>
	</div>

	<div class="activity-data">
		<form method="post">
			<div>
				<label for="name">Name:<label>
				<input name="name" type="text" value="<?php echo $row ? $row['NAME'] : '' ?>" />
			</div>

			<div>
				<label for="project">Project:</label>
				<input name="project" type="text" value="<?php echo $row ? $row['PROJECT_LINK'] : '' ?>" />
			</div>

			<div>
				<label for="secret">Secret:</label>
				<input name="secret" type="text" value="<?php echo $row ? $row['SECRET'] : '' ?>" />
			</div>
			
			<input type="submit" value="Save" />

			<?php if ($row) { ?>
			<input type="hidden" name="id" value="<?php echo $row['ID'] ?>" />
			<input type="submit" name="delete" value="Delete" />
			<?php } ?>
		</form>
	</div>
</div>