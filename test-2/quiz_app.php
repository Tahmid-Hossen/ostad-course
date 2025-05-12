<?php
echo "Welcome to the Terminal Quiz!\n";
echo "Answer each question by typing a, b, or c.\n\n";

$score = 0;
$totalQuestions = 3;

// Question 1
echo "1. What is the capital of France?\n";
echo "a) London\n";
echo "b) Paris\n";
echo "c) Berlin\n";
echo "Your answer: ";
$answer1 = trim(fgets(STDIN));

if (strtolower($answer1) === 'b') {
    echo "Correct!\n\n";
    $score++;
} else {
    echo "Incorrect! The correct answer is b) Paris.\n\n";
}

// Question 2
echo "2. Which planet is known as the Red Planet?\n";
echo "a) Venus\n";
echo "b) Mars\n";
echo "c) Jupiter\n";
echo "Your answer: ";
$answer2 = trim(fgets(STDIN));

if (strtolower($answer2) === 'b') {
    echo "Correct!\n\n";
    $score++;
} else {
    echo "Incorrect! The correct answer is b) Mars.\n\n";
}

// Question 3
echo "3. What is 2 + 2?\n";
echo "a) 3\n";
echo "b) 4\n";
echo "c) 5\n";
echo "Your answer: ";
$answer3 = trim(fgets(STDIN));

if (strtolower($answer3) === 'b') {
    echo "Correct!\n\n";
    $score++;
} else {
    echo "Incorrect! The correct answer is b) 4.\n\n";
}

echo "Quiz complete!\n";
echo "You got $score out of $totalQuestions correct.\n";
?>