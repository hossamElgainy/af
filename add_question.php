<?php

	include 'includes/config.php';

	//echo "<pre>";
	//var_dump($_POST);

	$question = filter_var($_POST['question'] , FILTER_SANITIZE_STRING );


	if ( !empty($question) && !empty($user_id) ) {
		
		$sql = "INSERT INTO af_questions ( question , user_id) VALUES(?,?)";
		$stmt = $pdo->prepare($sql);
		$stmt->execute([ $question ,$user_id] );
		//$contact_id = $pdo->lastInsertId();
		echo "<div class = 'alert alert-info p-1 m-1'>";
		echo "<h4>"  . $user_name . "<h4>";
		echo  "<p class = 'text-dark'>" . $question  . "</p>";
		echo "</div>";
	}

	
?>




