
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
				$value = $row['DATE'];
				echo '<a href="' . _Root . 'Dashboard/Transaction/' . $id . '" class="data-list">' . $value . '</a>';
			}
			?>
		</div>
		<div class="data names">
			<span class="data-title">Debit</span>
			<?php
			foreach  ($Data['Rows']as $row)
			{
				$value = $row['DEBIT_ACCOUNT_ID'];
				echo "<span class=\"data-list\">$value</span>";
			}
			?>
		</div>
		<div class="data names">
			<span class="data-title">Credit</span>
			<?php
			foreach  ($Data['Rows']as $row)
			{
				$value = $row['CREDIT_ACCOUNT_ID'];
				echo "<span class=\"data-list\">$value</span>";
			}
			?>
		</div>
		<div class="data names">
			<span class="data-title">Notes</span>
			<?php
			foreach  ($Data['Rows']as $row)
			{
				$value = $row['NOTES'];
				echo "<span class=\"data-list\">$value</span>";
			}
			?>
		</div>
	</div>
</div>