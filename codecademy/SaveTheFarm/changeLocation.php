<?php
  // Change player location
function changeLocation(){	
  // Write your code here:
  global $location;
  echo "Where do you want to go?\n";
  $go_to = readline(' -->');
  $go_to = strtolower($go_to);
  
  if($location === 'kitchen' AND $go_to === "bathroom"){
    echo "You go to: bathroom.\n";
    $location = "bathroom";
    
  }elseif($location === 'kitchen' AND $go_to === 'woods'){
    echo "You follow the winding path, shivering as you make your way deep into the Terror Woods.\n";
    $location = 'woods';
    
  }elseif($location === 'bathroom' AND $go_to === 'kitchen'){
    echo "You go to: kitchen.\n";
    $location = 'kitchen';
    
  }elseif($location === 'woods' AND $go_to === 'kitchen'){
    echo "You go to: kitchen.\n";
    $location = 'kitchen';
    
  }elseif($go_to == 'woods' OR $go_to == 'kitchen' OR $go_to == 'bathroom'){
    echo "You can't go directly to there from your current location. Try going somewhere else first.\n";
    $location = 'kitchen';
    
  }else{
    echo "That doesn't make sense. Are you confused? Try 'look around'.\n";
  }
}