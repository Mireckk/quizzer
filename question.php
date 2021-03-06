<?php include 'database.php'; ?>
<?php
	//Set question number
	$number = (int) $_GET['n'];

	// Get question
	$query = "SELECT * FROM `questions` WHERE question_number = $number";

	// Get result
	$result = $mysqli->query($query) or die($mysqli->error.__LINE__);

	$question = $result->fetch_assoc();

	// Get choices
	$query = "SELECT * FROM `choices` WHERE question_number = $number";

	// Get result
	$choices = $mysqli->query($query) or die($mysqli->error.__LINE__);




?>
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
			<div class="current">Question 1 of 5</div>
			<p class="question">
				<?php echo $question['text'];?>
			</p>
			<form method="post" action="process.php">
				<ul class="choices">
				<?php  while($row = $choices->fetch_assoc()): ?>
					<li><input name="choice" type="radio" value="<?php echo $row['id']?>" />
						<?php echo $row['text'];?>
					</li>
				<?php endwhile; ?>
				</ul>
				<input type="submit" value="submit">
				<input type="hidden" name="number" value="<?php echo $number; ?>" />
			</form>
		</div>
	</main>
	<footer>
		<div class="container">
			Copyright &copy; 2015 Mirek
		</div>
	</footer>
</body>
</html>