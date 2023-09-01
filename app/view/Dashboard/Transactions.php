
<div class="activity">
	<div class="title">
		<i class="uil uil-clock-three"></i>
		<span class="text">Recent Transactions</span>
	</div>

	<div class="activity-data">

		<div class="data names">
			<span class="data-title">#</span>
			<?php
			foreach  ($Data['Rows']as $row)
			{
				$id = $row['ID'];
				$value = $row['Date'];
				echo '<a href="' . _Root . 'Dashboard/Transaction/' . $id . '" class="data-list">' . $value . '</a>';
			}
			?>
		</div>
		<div class="data names">
			<span class="data-title">Debit</span>
			<?php
			foreach  ($Data['Rows']as $row)
			{
				$value = $row['TITLE'];
				echo "<span class=\"data-list\">$value</span>";
			}
			?>
		</div>
		<div class="data email">
			<span class="data-title">Credit</span>
			<?php
			foreach  ($Data['Rows']as $row)
			{
				$value = $row['DATE'];
				echo "<span class=\"data-list\">$value</span>";
			}
			?>
		</div>
	</div>
</div>