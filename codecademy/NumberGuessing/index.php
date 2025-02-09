<?php
$play_count = 0;
$correct_guesses = 0;
$guess_high = 0;
$guess_low = 0;
$play_number = 0;
$correct_percent = 0;
echo "Welcome to this number guessing game! Pick a number between 1 and 10!\n";

function guessNumber(){
  global $guess_high, $guess_low, $correct_guesses, $play_count, $play_number;
  $play_count += 1;
  $play_number = rand(1,10);
 
 echo 'Enter you\'re guess, good luck!';
 echo "\n";
 $guess = readline('Guess ->> ');
 $guess = intval($guess);
 if($guess < $play_number){
    $guess_low += 1;
 }elseif($guess > $play_number){
    $guess_high += 1;
 }elseif($guess === $play_number){
    $correct_guesses += 1;
 }
 $correct_percent = $correct_guesses / $play_count;
 echo 'Rounds Played: '.$play_count;
 echo "\n";
 echo 'You\'re guess: '.$guess;
 echo "\n";
 echo 'Number Rolled: '.$play_number;
 echo "\n";
 echo 'Correct Guesses: '.$correct_guesses;
 echo "\n";
 echo 'Success Rate: '.$correct_percent.'%';
 echo "\n";
 echo 'Low Guesses: '.$guess_low;
 echo "\n";
 echo 'High Guesses: '.$guess_high;
 echo "\n";
 if($guess_high > $guess_low){
    echo 'When you guessed wrong, you tended to guess high.';
    echo "\n";
 }elseif($guess_high < $guess_low){
    echo 'When you guessed wrong, you tended to guess low';
    echo "\n";
 }
}

guessNumber();
guessNumber();
guessNumber();
guessNumber();
guessNumber();