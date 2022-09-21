
<?php
  $data = file("questions.txt") or die("Cannot read file");

  array_shift($data);

  $arrayQuestions = array();
  foreach($data as $key => $value){
 
    $tmp = explode("|",$value);

    $id = $tmp[0];
    $question = $tmp[1];
    $arrayQuestions[$id] = array("Question" => $question);

  }

?>