<?php
function eatSoup(){
	// Write your code here:
  global $has_soup, $is_hungry;

  if($has_soup != TRUE){
    echo "You don't have any cooked food to eat!\n";
  }elseif($has_soup == TRUE){
    echo "You have eaten the soup!\n";
    $has_soup = FALSE;
    $is_hungry = FALSE;
  }
  
  
  
  
  
}