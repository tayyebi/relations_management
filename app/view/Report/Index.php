<?php
$row = isset($Data['Row']) ? $Data['Row'] : null;
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Report</title>
	<style>
		html,
		body,
		embed {
			height: 100%;
			width: 100%;
			padding: 0;
			margin: 0;
		}
	</style>
</head>

<body>
	<embed src="<?php echo $row['PROJECT_LINK'] ?>" type="">
</body>

</html>