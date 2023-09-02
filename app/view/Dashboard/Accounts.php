
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
				echo '<a href="' . _Root . 'Dashboard/Account/' . $id . '" class="data-list">View</a>';
			}
			?>
		</div>
		<div class="data names">
			<span class="data-title">Name</span>
			<?php
			foreach  ($Data['Rows']as $row)
			{
				$value = $row['NAME'];
				echo "<span class=\"data-list\">$value</span>";
			}
			?>
		</div>
		<div class="data email">
			<span class="data-title">Project</span>
			<?php
			foreach  ($Data['Rows']as $row)
			{
				$value = $row['PROJECT_LINK'];
				echo '<a href="' . $value . '" class="data-list">Navigate ⧉</a>';
			}
			?>
		</div>
	</div>
</div>