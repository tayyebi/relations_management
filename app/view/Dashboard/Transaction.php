<?php
$row = isset($Data['Row']) ? $Data['Row'] : null;
?>


<div class="activity">
	<div class="title">
		<i class="uil uil-transaction"></i>
		<span class="text">New Transaction</span>
	</div>

	<div class="activity-data">
		<form method="post">
			<div>
				<label for="amount">Amount<label>
						<input name="amount" type="number" min="0" step=".01"
							value="<?php echo $row ? $row['AMOUNT'] : '' ?>" />
			</div>

			<div>
				<label for="debit">Debit Account<label>
						<select name="debit">
							<?php foreach ($Data['Accounts'] as $acc) { ?>
								<option value="<?php echo $acc['ID'] ?>" <?php echo ($row and $row['DEBIT_ACCOUNT_ID'] == $acc['ID']) ? 'selected="selected"' : '' ?>><?php echo $acc['NAME'] ?></option>
							<?php } ?>
						</select>
			</div>

			<div>
				<label for="credit">Credit Account</label>
				<select name="credit">
					<?php foreach ($Data['Accounts'] as $acc) { ?>
						<option value="<?php echo $acc['ID'] ?>" <?php echo ($row and $row['CREDIT_ACCOUNT_ID'] == $acc['ID']) ? 'selected="selected"' : '' ?>><?php echo $acc['NAME'] ?></option>
					<?php } ?>
				</select>
			</div>

			<div>
				<label for="notes">Notes</label>
				<textarea name="notes"><?php echo $row ? $row['NOTES'] : '' ?></textarea>
			</div>

			<div>
				<label for="date">Date</label>
				<input type="text" name="date" value="<?php echo $row ? $row['DATE'] : date('Y-m-d h:i:s a') ?>">
			</div>

			<input type="submit" value="Save" />

			<?php if ($row) { ?>
				<input type="hidden" name="id" value="<?php echo $row['ID'] ?>" />
				<input type="submit" name="delete" value="Delete" />
			<?php } ?>
		</form>
	</div>
</div>