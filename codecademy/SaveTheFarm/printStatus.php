<?php
// Print Current Status
function printStatus(){
    global $location, $wearing_glasses, $wearing_contacts, $has_mushrooms, $has_soup, $is_hungry, $needs_to_pee;
  
    echo "You are in: $location\n";
  
  // Write your code here:
    if($wearing_glasses xor $wearing_contacts){
      if($wearing_glasses){
        echo 'You are wearing glasses.';
        echo "\n";
      }elseif($wearing_contacts){
        echo 'You are wearing contacts.';
        echo "\n";
      }
    }elseif(!$wearing_glasses && !$wearing_contacts){

    }else{
      echo 'You should not wear both glasses and contacts!';
      echo "\n";
    }
    if($has_mushrooms){
      echo 'You are holding mushrooms.';
      echo "\n";
    }
    if($has_soup){
      echo 'You are holding a scalding-hot bowl of mushroom soup.';
      echo "\n";
    }
    if($needs_to_pee){
      echo 'You need to pee!';
      echo "\n";
    }
    if($is_hungry){
      echo 'You are hungry';
      echo "\n";
    }elseif(!$is_hungry){
      echo 'You are well-fed and energetic.';
      echo "\n";
    }
}