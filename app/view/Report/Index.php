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
		aside {
			display: none;
		}
		article {

		}
		article.wbs {
			height: 100%;
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
				<li>حسابداری و مالی</li>
				<li>پیشرفت پروژه</li>
			</ul>
		</nav>
	</aside>

	<article>
		<header>
			<h2>Balance Sheet</h2>
		</header>
		<main>
			<h3>DEBIT</h3>
			<span><?php echo $row['DEBIT'] ?></span>
			<h3>CREDIT</h3>
			<span><?php echo $row['CREDIT'] ?></span>
		</main>
	</article>

	<article class="wbs">
		<header>
			<h2>
				Work Break Structure and Progress
			</h2>
		</header>
		<embed src="<?php echo $row['PROJECT_LINK'] ?>" type="">
	</article>

</body>

</html>