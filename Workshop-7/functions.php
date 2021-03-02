<?php
require_once ('Students.php');

$limit = $argv[1];

$students = Students::getStudents($limit);

foreach ($students as $student) {
    $newStudent = new Students($student[0], $student[1], $student[2], $student[3], $student[4]);
    echo $newStudent->toCsv().PHP_EOL;
}