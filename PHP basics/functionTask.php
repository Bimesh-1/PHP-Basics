<?php
/* Write a function called checkAge, which will return 
true if the age is equql or over 18. 
Otherwise it returns false.
examples; 
checkAge(25); This should return true
checkAge(-2); This should return false 
checkAge(12); -"- false
checkAge(12345); -"- true 
*/

function checkAge($age) {
    if (is_numeric($age) && $age >= 18 ) {
        return TRUE;
    }
    return FALSE;
}

print "Age 25 "  .  checkAge(25)  .  "\n";
print "Age -2 "  .  checkAge(-2)  .  "\n";
print "Age 'XLHH' "  .  checkAge('XLHH')  . "\n";
print "Age -2 "  . var_dump(checkAge(-2))  .  "\n";


/* TASK 2
Write a function call boolToString,
which returns string value "true" or "false" based on boolean input.
*/

function boolToString($bool) {
if ($bool){       // if(is_boolean(€bool) && $bool)
    return 'true';
}
    return'false';
}

print "Age 25 "  . boolToString(checkAge(25))  .  "\n";
print "Age -2 "  .  boolToString(checkAge(-2))  .  "\n";
print "Age 'XLHH' "  .  boolToString(checkAge('XLHH'))  . "\n";
print "Age -2 "  . var_dump(checkAge(-2))  .  "\n";


function canPersonVote($personAge) {
    if (checkAge($personAge)) {
        print "Person can vote";
    }
    else{
        print "Person can not vote";
    }
}


print "Age 25 "  . canPersonVote(25)  .  "\n";
canPersonVote(19);
print "\n";
print boolToString([]);        //empty is false
print boolToString("foo");

// Do not randomly name function

$agelimit = 19;

function isAdult($age) {
    global $agelimit;
       if (is_numeric($age) && $age >= $agelimit ) {
        return TRUE;
    }
    return FALSE;
}


