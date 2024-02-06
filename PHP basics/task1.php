<?php
//$firstName= "Bimesh";
//$lastName= "Upreti";
//print ($firstName.  " "  .$lastName . "\n");
//print ("$lastName, $firstName");

$foo= "This is a string written in PHP";
$bar= "an another string";
$logLine = "2024-01-16, 14:00, Helsinki, -14"; 
// print strpos($foo, 'is');
//print strlen($foo);
//print strToUpper($foo);
// print strtolower($foo);
// $baz = str_replace('This', 'That', $foo);
// print $baz;
// print var_dump($baz);
// print "\n";
// print $foo;
// print $foo . $bar . "\n";
// print 'HHH'  . trim($bar) . 'HHH';
// trim(strtolower(searchString));
print var_dump(explode(' ', $foo));
print var_dump(explode(',', $logLine));