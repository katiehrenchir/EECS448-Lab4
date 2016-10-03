<?php

//solution heavily based on https://css-tricks.com/building-a-simple-quiz/ 
    
    $answer1 = $_POST['whiskers'];
    $answer2 = $_POST['catgroup'];
    $answer3 = $_POST['kitgroup'];
    $answer4 = $_POST['catbreeds'];
    $answer5 = $_POST['facehair'];

    $correctanswer1 = "24";
    $correctanswer2 = "clowder";
    $correctanswer3 = "kindle";
    $correctanswer4 = "beauceron";
    $correctanswer5 = "ruff";

    $totalCorrect = 0;
    
    if ($answer1 == $correctanswer1) { $totalCorrect++; }
    if ($answer2 == $correctanswer2) { $totalCorrect++; }
    if ($answer3 == $correctanswer3) { $totalCorrect++; }
    if ($answer4 == $correctanswer4) { $totalCorrect++; }
    if ($answer5 == $correctanswer5) { $totalCorrect++; }

	echo "Question 1: How many whiskers does a cat have, on average? <br>";
	echo"Your answer: " .$answer1."<br>"; 
	echo"Correct answer: ".$correctanswer1."<br><br>";

	echo "Question 2: A term for a group of cats is: <br>";
	echo"Your answer: " .$answer2."<br>"; 
	echo"Correct answer: ".$correctanswer2."<br><br>";

	echo "Question 3: A term for a group of kittens is: <br>";
	echo"Your answer: " .$answer3."<br>"; 
	echo"Correct answer: ".$correctanswer3."<br><br>";

	echo "Question 4: All of the following are the names of cat breeds, except: <br>";
	echo"Your answer: " .$answer4."<br>"; 
	echo"Correct answer: ".$correctanswer4."<br><br>";

	echo "Question 5: The thick hair around the face of some cats (such as Persians) is called: <br>";
	echo"Your answer: " .$answer5."<br>"; 
	echo"Correct answer: ".$correctanswer5."<br><br>";
    


	$percent = $totalCorrect/5 *100;
	echo "You answered ".$totalCorrect."/5 correctly";
    echo "<div id='results'>$percent% </div>";

?>
