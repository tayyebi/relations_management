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
		article,
		embed {
			height: 100%;
			width: 100%;
			padding: 0;
			margin: 0;
		}
		aside {
			display: none;
		}
		h1 {
			display: block;
			text-align: center;
		}
	</style>
</head>

<body>

	<h1>
		Overall Report of
		<b>
			<?php echo $row['NAME'] ?>
		</b>
	</h1>

	<aside>
		<nav>
			<ul>
				<li>پیشرفت پروژه</li>
				<li>حسابداری و مالی</li>
			</ul>
		</nav>
	</aside>

	<article>
		<header class="state">
			<h2>
				Work Break Structure and Progress
			</h2>
		</header>
		<embed src="<?php echo $row['PROJECT_LINK'] ?>" type="">
	</article>

	<article style="display: none;">
		<header>
			<h2>Financial Report</h2>
		</header>
		<main>
			<table>
				<thead></thead>
				<tbody></tbody>
				<tfoot></tfoot>
			</table>
		</main>
		<footer>به زودی...</footer>
	</article>

</body>

</html>