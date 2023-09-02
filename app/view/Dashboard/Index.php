<?php 
$row = isset($Data['Row']) ? $Data['Row'] : null;
?>
<div class="overview">
	<div class="title">
		<i class="uil uil-tachometer-fast-alt"></i>
		<span class="text">Dashboard</span>
	</div>

	<div class="boxes">
		<div class="box box2">
			<i class="uil uil-transaction"></i>
			<span class="text">Transactions</span>
			<span class="number"><?php echo $row['CCOUNT'] ?></span>
		</div>
		<div class="box box1">
			<i class="uil uil-minus-circle"></i>
			<span class="text"><?php echo $row['DEBIT'] ?></span>
			<span class="number">5,000</span>
		</div>
		<div class="box box3">
			<i class="uil uil-plus-circle"></i>
			<span class="text"><?php echo $row['CREDIT'] ?></span>
			<span class="number">10,120</span>
		</div>
	</div>
</div>