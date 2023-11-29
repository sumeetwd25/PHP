<?php
echo "Functions in php <br>";

function totalMarks($marksArr)
{
    $sum = 0;
    foreach ($marksArr as $marks) {
        $sum += $marks;
    }
    return $sum;
}

function avgMarks($marksArr)
{
    $sum = 0;
    foreach ($marksArr as $marks) {
        $sum += $marks;
    }
    return $sum / count($marksArr);
}

$sam_marks = array(60, 70, 65, 75, 80);
$sam_total = totalMarks($sam_marks);
$sam_avg = avgMarks($sam_marks);
echo "Sam's total score marks are $sam_total & his average is $sam_avg <br>";

$john_marks = array(70, 75, 65, 70, 85);
$john_total = totalMarks($john_marks);
$john_avg = avgMarks($john_marks);
echo "John's total score marks are $john_total & his average is $john_avg <br> ";
