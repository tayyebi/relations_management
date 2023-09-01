
<div class="activity">
	<div class="title">
		<i class="uil uil-clock-three"></i>
		<span class="text">Recent Content</span>
	</div>

	<div class="activity-data">

		<div class="data names">
			<span class="data-title">#</span>
			<?php
			foreach  ($Data['Rows']as $row)
			{
				$id = $row['ID'];
				echo '<a href="' . _Root . 'Dashboard/Content/' . $id . '" class="data-list">Edit</a>';
			}
			?>
		</div>
		<div class="data names">
			<span class="data-title">Title</span>
			<?php
			foreach  ($Data['Rows']as $row)
			{
				$title = $row['TITLE'];
				echo "<span class=\"data-list\">$title</span>";
			}
			?>
		</div>
		<div class="data email">
			<span class="data-title">Date</span>
			<?php
			foreach  ($Data['Rows']as $row)
			{
				$date = $row['DATE'];
				echo "<span class=\"data-list\">$date</span>";
			}
			?>
		</div>
	</div>
</div>