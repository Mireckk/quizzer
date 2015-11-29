<?php include 'database.php'; ?>
<?php session_start(); ?>
<?php 
//Check to see of score is set set_error_handler
if(!isset($_SESSION['score'])){
	$_SESSION['score'] = 0;
}


//get the total number of questions
$query = "SELECT * FROM `questions`";
//get result
$results = $mysqli->query($query) or die($mysqli->error.__LINE__);
$total = $results->num_rows;

if($_POST){
	$number = $_POST['number'];
	$selected_choice = $_POST['choice'];
	$next = $number+1;


	// Get correct choice

	$query = "SELECT * FROM `choices` WHERE question_number = $number AND is_correct = 1";

	//get result
	$result = $mysqli->query($query) or die($mysqli->error.__LINE__);


	// get row
	$row = $result->fetch_assoc();

	//Set correct choice
	$correct_choice = $row['id'];

	//compare
	if ($correct_choice == $selected_choice) {
		$_SESSION['score']++;
	}


	if ($number == $total) {
		header("Location: final.php");
	} else {
		header("Location: question.php?n=".$next);
	}




	echo $number.'abc<br>';
	echo $selected_choice.'def<br>';

	print_r($_POST);
}

