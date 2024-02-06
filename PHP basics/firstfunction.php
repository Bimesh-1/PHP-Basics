<?php

$foo = "bar";

function printline($line) {
    print $line . "\n";
}

function firstFunction() {
    printline ("HelloWorld!");

}



function helloPerson($name)  {
    global $foo;
    printline ("Hello $name! ($foo)");
}

function doubleNumber($number) {
    if (is_numeric($number)) {
        return 2 * $number;

    } return 0;
    
}


firstFunction();

helloPerson("Jonas");
helloPerson("alex");



printline (doubleNumber(5)); //10
printline (doubleNumber("foobar"));


