<?php
class StringUtils {
  public static function secondCase($string) {
    $string = strtolower($string);
    if(strlen($string) >= 2){
    $string[1] = strtoupper($string[1]);
    }
    return $string;
  }
}

class Pajamas{
  private $owner, $fit, $color;
  function __construct(
    $owner = "unclaimed",
    $fit = "fine",
    $color = "white"
  ){
    $this->owner = stringUtils::secondCase($owner);
    $this->fit = $fit;
    $this->color = $color;
  }
  
  public function describe(){
    return "$this->owner's $this->color pajamas fit $this->fit.";
  }

  public function setFit($new_fit){
    $this->fit = $new_fit;
  }
}

class ButtonablePajamas extends Pajamas{
  private $button_state = "unbuttoned";

  public function describe(){
    return parent::describe() . " They also have buttons wich are currently $this->button_state.";
  }

  public function changeButton(){
    if($this->button_state === "unbuttoned"){
      $this->button_state = "buttoned";
    }else{
      $this->button_state = "unbuttoned";
    }
  }
}

  echo StringUtils::secondCase("BILLY");
  echo StringUtils::secondCase("silly");
  echo StringUtils::secondCase("Q");


$chicken_PJs = new Pajamas("CHICKEN", "comfortable", "blue");
echo "\n".$chicken_PJs->describe();
echo "\n";
echo "\n...they wash their Pjs all the time....";
echo "\n";
$chicken_PJs->setFit("Not as Comfortable now..");
echo $chicken_PJs->describe();

$moose_PJs = new ButtonablePajamas("moose", "kind of loose", "red");
echo "\n\n";
echo $moose_PJs->describe();
echo "\n";
$moose_PJs->changeButton();
echo "\n";
echo $moose_PJs->describe();