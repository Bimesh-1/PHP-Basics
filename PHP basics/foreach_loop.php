<?php

$student_grades = array(
    "Alice" => 85,
    "Bob" => 90,
    "Charlie" => 65,
    "Davis" => 70
);

foreach($student_grades as $student => $grades) {
     print "$student: $grades\n";
}