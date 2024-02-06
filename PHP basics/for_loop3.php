<?php
/* Task 3: Loop inside a loop (optional)

You can also put a loop inside another loop. This is called a nested loop. Make a program to print the following pattern, using nested for loop.

*  
* *  
* * *  
* * * *  
* * * * *

Hint: The upper limit of the inner loop is the current value of the outer loop. So while the “row” is 1, the inner loop prints one star, etc. */

for ($i = 0; $i <=5; $i++) {
for($j = 1; $j <= $i; $j++){
    print "*" ;
    }
    print "\n";
}
?>