<?php
$row = isset($Data['Row']) ? $Data['Row'] : null;
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Report</title>
</head>
<body style="height: 100%; width: 100%; padding: 0; margin: 0;">
	<embed width="100%" height="100%" src="<?php echo $row['PROJECT_LINK'] ?>" type="">
</body>
</html>