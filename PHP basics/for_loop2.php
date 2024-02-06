<?php
/* Task 2: Sum of the series

Make a program that calculates and prints the sum of the series from $number1 to $number2. Give values of your choosing to these variables (in real-life case they’d most likely come from a form in web page). E.g. if the values are 1 and 5, the program should calculate 1+2+3+4+5 and print the value 15. */
 
$sum = 0;
for ($x = 1; $x <= 5; $x++) {
$sum += $x;
}
print $sum;

function addition($a, $b) {
	$sum = 0;
    for ($a = $a; $a <= $b; $a++) {
        $sum += $a;
    }
    return $sum;
}
print addition(1, 5);


$num1 = 14;
$num2 = 16;
$sum = 0;
for ($result = $num1; $result <= $num2; $result++) {
    $sum += $result;
    print $result . " ";
}
print $sum . " ";
