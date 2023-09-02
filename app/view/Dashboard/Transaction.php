<?php
$row = isset($Data['Row']) ? $Data['Row'] : null;
?>


<div class="activity">
	<div class="title">
		<i class="uil uil-paragraph"></i>
		<span class="text">New Transaction</span>
	</div>

	<div class="activity-data">
		<form method="post">
			<div>
				<label for="amount">Amount<label>
				<input name="amount" type="text" value="<?php echo $row ? $row['AMOUNT'] : '' ?>" />
			</div>

			<div>
				<label for="debit">Debit Account<label>
				<input name="debit" type="text" value="<?php echo $row ? $row['DEBTI_ACCOUNT_ID'] : '' ?>" />
			</div>

			<div>
				<label for="credit">Credit Account</label>
				<textarea name="credit"><?php echo $row ? $row['CREDIT_ACCOUNT_ID'] : '' ?></textarea>
			</div>

			<div>
				<label for="notes">Notes</label>
				<textarea name="notes"><?php echo $row ? $row['NOTES'] : '' ?></textarea>
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