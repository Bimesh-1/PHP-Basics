<?php
/* Task 2: A bit more challenge

Make a program that prints all positive numbers that are smaller than 100 and even, in this order: 2 98 4 96 6 94... Print result in one line.

Hints: The counter you want to increase by two each round is added to 0 and subtracted from 100, so e.g. $counter . " " . (100 – $counter). In order to print everything in same line, build a string in the loop and print it after the loop. */

/* $num = " ";
for($x = 2; $x < 100; $x += 2) {
    $num .= $x . " " . (100 - $x) . " ";
    }
    print trim($num) ."\n";
    
    ?>
    */

    $num = " ";
    $x = 2;
    while ($x < 100) {
    $num .= $x . " " . (100-$x) . " ";
    $x += 2; 
    }
    print trim($num);