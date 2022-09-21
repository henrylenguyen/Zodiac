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
    $data = file("questions.txt") or die("Cannot read file");
    $point = 0;
    array_shift($data);

    foreach($data as $key => $value){
      $tmp = explode("|",$value);
      $id = $tmp[0];
      $point += (int)$_POST[$id];
    }
    $data = file("result.txt") or die("Cannot read file");
    array_shift($data);
    foreach($data as $key => $value){
      $tmp = explode("|",$value);
      $min = $tmp[0];
      $max = $tmp[1];
      $content = $tmp[2];
      if($point>=$min && $point<=$max){
        $result = $content;
        break;
      }

    }
    
  ?>
  <div class="content">
    <h1 class="content__title">kết quả trắc nghiệm tính cách</h1>
    <p class="content__text"><b>Tổng điểm của bạn là: </b>
    <?php
      echo $point;  
    ?></p>
    <p class="content__text"><b>Kết quả trắc nghiệm là: </b>
    <?php
     echo $result; 
    ?>  
  </p>
  </div>

</body>

</html>