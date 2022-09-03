<?php

function gcd($n, $m) {
    while(true) {
        if($n == $m) {
            return $m;
        }
        if($n > $m) {
            $n -= $m;
        } else {
            $m -= $n;
        }
    }
}


print("Welcome to the Brain Games!\n"); 
$name = readline("May I have your name?");
print("Hello, " . $name . "!\n");
print("Find the greatest common divisor of given numbers. \n ");
$count = 0;

while ($count<3) {
	 $r1 = rand(5, 15);
	 $r2 = rand(15, 35);
	 $res = gcd($r1,$r2);
	
	$correctanswer =  $res;
	print("Question: ".$r1." ".$r2."\n");
	$answer = readline("Your answer: ");
	$answer = (int) $answer;
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