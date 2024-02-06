<?php
// $cars = ['volvo', 'BMW', 'Toyota'];
// print $cars[1] . "\n";
// $cars[1]= 'Ford';
// print var_dump($cars);


// $words = [];
// $words [13] = 'Business';
// $words ["42"] = 'College';
// $words['Helsinki'] = 'Helsinki';
// print var_dump($words); 
// $words2 = ['Business', 'College', 'Helsinki'];
// print var_dump($words2);

// $team = [ 7=> "Ronaldo, 10=>"Messi"];

// $words = ['Business', 'College', 'Helsinki'];
// $words[5] = 'Pasila';
// print var_dump($words);
// unset($words);


// $foobar = 'foobar  \n';    // removing or deleting items from array 
// print $foobar;
// unset ($foobar);
// print $foobar;


// $a = [1, 2, 3, 4];
// $b = $a;
// $c = sort($b); $c is always true
// $b[0] = 100;
// $a[1] = 1;
// print var_dump($a);
// print var_dump($b);



$customersAges = [10,33,42,45,54,52,61,67];
$customers_sorted = $customersAges;
sort($customers_sorted);
print var_dump($customers_sorted);
$last = count($customers_sorted) - 1;
print "Youngest is $customers_sorted[0] years old. \n" ; 
print "Oldest is $customers_sorted[$last] years old.";


$sales2023 = [
    "Jan" => 123,
    "Feb" => 232,
    "Mar" => 332,
];

$sales2024 = [
    "Jan" => 0,
    "Feb" => null,
    "Mar" => null,
];

$sales = [2023 => $sales2023, 2024 => $sales2024];
var_dump($sales);
print $sales[2023]["Jan"];
print "/n";
$sales[2024]["Jan"] = $sales[2023]["Jan"] + 42;
print $sales[2024]["Jan"];


// example 2

$gameboard = [['','',''], ['','',''],['','','']];
$gameboard[0][0] = 'x';
$gameboard[0][1] = 'o';