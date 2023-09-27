<?php
// Declare three test scores
$score1 = 85;
$score2 = 92;
$score3 = 78;

// Calculate the average
$average = ($score1 + $score2 + $score3) / 3;

// Determine the corresponding grade
if ($average >= 90) {
    $grade = 'A';
} elseif ($average >= 80) {
    $grade = 'B';
} elseif ($average >= 70) {
    $grade = 'C';
} elseif ($average >= 60) {
    $grade = 'D';
} else {
    $grade = 'F';
}

// Display the average and corresponding grade
echo "Test Scores:<br>";
echo "Score 1: $score1<br>";
echo "Score 2: $score2<br>";
echo "Score 3: $score3<br>";
echo "Average: $average<br>";
echo "Grade: $grade";
?>