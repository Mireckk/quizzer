<?php include 'database.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />

	<title>PHP Quizzer</title>

	<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>
<body>
	<header>
		<div class="container">
			<h1>PHP Quizzer</h1>
		</div>
	</header>
	<main>
		<div class="container">
			<h2>Test your PHP knwledge</h2>
			<p>This is a multiple choice quiz to test your knowledge of PHP</p>
			<ul>
				<li><strong>Number of Questions: </strong>5</li>
				<li><strong>Type: </strong>Multiple choice</li>
				<li><strong>Estimated Time: </strong>4 minutes</li>
			</ul>
			<a href="question.php?n=1" class="start">Strat Quiz</a>
		</div>
	</main>
	<footer>
		<div class="container">
			Copyright &copy; 2015 Mirek
		</div>
	</footer>
</body>
</html>