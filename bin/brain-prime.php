<?php

function primeCheck($number){

    if ($number == 1)

    return 0;

    for ($i = 2; $i <= $number/2; $i++){

        if ($number % $i == 0)

            return 0;

    }

    return 1;

}

print("Welcome to the Brain Games!\n"); 
$name = readline("May I have your name?");
print("Hello, " . $name . "!\n");
print("Answer yes if given number is prime. Otherwise answer no. \n ");
$count = 0;

while ($count<3) {
	 $r1 = rand(5, 15);
	 $r2 = rand(15, 35);
	 $res = primeCheck($r1,$r2);
	if ($res===1) {
	   $correctanswer =  "yes";
     } else if ($res===0)  {
     	 $correctanswer =  "no";
     }
	print("Question: ".$r1."\n");
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