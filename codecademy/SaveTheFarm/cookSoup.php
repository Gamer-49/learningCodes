<?php
  
function cookSoup(){
	// Write your code here:
  global $location, $has_mushrooms, $has_soup;

  if($location != 'kitchen' OR $has_mushrooms != TRUE){
    echo "You can't cook like this! You need something to cook AND to be in the kitchen.\n";
    
  }elseif($location == 'kitchen' AND $has_mushrooms == TRUE){
    echo "You can't cook like this! You need something to cook AND to be in the kitchen.\n";
    $has_soup = TRUE;
    $has_mushrooms = FALSE;
  }
  
  
  
  
  
  
}