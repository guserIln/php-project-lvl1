<?php

print("Welcome to the Brain Games!\n"); 
$name = readline("May I have your name?");
print("Hello, " . $name . "!\n");
print("What is the result of the expression? \n ");
$count = 0;

while ($count<3) {
	 $r1 = rand(5, 55);
	 	 $r2 = rand(5, 55);
	 	  $r3 = rand(1, 5);
	$correctanswer = 0;
	$znak = "";
	if ($r3<2){
		$r3++;
	}
	if ($r3>4){
		$r3--;
	}
    if ($r3 === 2){
    	$znak = "+";
    	$correctanswer = $r1 + $r2;
    }
     if ($r3 === 3){
    	$znak = "-";
    	$correctanswer = $r1 - $r2;
    }
      if ($r3 === 4){
    	$znak = "*";
    	$correctanswer = $r1 * $r2;
    }

	print("Question: {$r1} {$znak} {$r2} \n");
	$answer = readline("Your answer: ");
	$answer = (int) $answer;
	if ($answer !== $correctanswer) {
	    print("'{$answer}' is wrong answer ;(. Correct answer was '{$correctanswer}'. Let's try again, " . $name . "!");
	     die;
	} else if ($answer ===  $correctanswer) {
	    print("Correct!\n");
	    $count++;
	}
}
 print("Congratulations, {$name}!");


?>