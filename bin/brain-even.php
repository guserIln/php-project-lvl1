<?php

print("Welcome to the Brain Games!\n"); 
$name = readline("May I have your name?");
print("Hello, " . $name . "!\n");
print("Answer yes if the number is even, otherwise answer no. \n ");
$count = 0;

while ($count<3) {
	 $r = rand(5, 55);
	$correctanswer = "";

	if ($r % 2 === 0) {
   		$correctanswer = "yes";
   		
	} else {
		 $correctanswer = "no";
   	
	}

	print("Question: ".$r."\n");
	$answer = readline("Your answer: ");
	if ($answer !== $correctanswer) {
	    print("'{$answer}' is wrong answer ;(. Correct answer was '{$correctanswer}'. Let's try again, " . $name . "!");
	    return;
	} else if ($answer ===  $correctanswer) {
	    print("Correct!\n");
	    $count++;
	}
}
 print("Congratulations, {$name}!");


?>