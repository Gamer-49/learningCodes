<?php
  
function pee(){
	// Write your code here:
  global $location, $needs_to_pee;
  if($location == 'kitchen'){
    echo "Are you crazy? You can't pee here!\n";
  }else{
    echo "You relieve yourself.\n";
    $needs_to_pee = FALSE;
  }
  
  
  
  
  
}