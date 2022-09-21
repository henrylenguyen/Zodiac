<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="./style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
  <?php
    require_once("function-a.php"); //arrayQuestions
    require_once("function-b.php"); // arrayOptions
    /*  [18] => Array
        (
            [Question] => Bạn thường mơ mình:
        )
    */

    /*
           [18] => Array
        (
            [a] => Array
                (
                    [Option] => Nhẹ nhàng
                    [Point] => 2
                )
        )

    */
    $newArr = array();
   foreach($arrayQuestions as $key => $value){
      $newArr[$key]["Question"] = $value["Question"];
      $newArr[$key]["Sentences"] = $arrayOptions[$key];
   }

  ?>
  <div class="content">
    <h1 class="content__title">trắc nghiệm tính cách</h1>
    <form action="result.php" method="POST">
      <?php
        $i = 1;
        foreach($newArr as $key => $value){
          echo '<div class="question">';
          echo '
            <p>
              <span class="question__number">Câu hỏi '.$i.':</span> '.$value["Question"].'
            </p>
          ';
          echo '<ul>';
          foreach($value["Sentences"] as $keyC => $valueC){
              echo '<li>
                  <label class="question__text">
                  <input type="radio" name="' . $key . '" value="' . $valueC['Point'] . '">'.$valueC['Option'].'</label>
                </li>';
          }
          
          echo '</ul>';
          echo '</div>';
          $i++;
        }
      ?>
      
      <input type="submit" value="Kiểm tra" class="question__submit">
    </form>
  </div>

</body>

</html>