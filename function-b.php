
<?php
  $data = file("options.txt") or die("Cannot read file");
  array_shift($data);
  
  $arrayOptions = array();

  foreach($data as $key => $value){
    $tmp = explode("|",$value);
    $questionID = $tmp[0];
    $optionID = $tmp[1];
    $answer = $tmp[2];
    $point = $tmp[3];

    $arrayOptions[$questionID][$optionID]["Option"] = $answer;
    $arrayOptions[$questionID][$optionID]["Point"] = $point;
  }
?>