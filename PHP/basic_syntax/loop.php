<?php

  //1.for
  //for($i = 0(초기식); $i < 10(반복 횟수 조건); $i++(증가식)){
  //}


  
  // //Hello World! 앞에 숫자 붙여 10개 찍어주기
  // for($i=0; $i<10; $i++){
  //   echo $i.' '."Hello World!".'<br>';
  // }

  $arr = [2,4,6,8,0,3,9,7];
  for($i=0; $i < count($arr); $i++){
    echo $i." ".$arr[$i].'<br>';
  }
  

  //2.foreach
  echo '-------------------------<br>';
  //참조 : https://www.w3schools.com/php/php_looping_foreach.asp

  foreach ($arr as $value) {
    //index : 
    echo "$value <br>";
  }

  // const sum = 0;
  // for(let i = 1; i <= 100; i++){
  //   sum += i;
  // }
  // console.log(sum);

  //3.while
  $sum = 0;
  $num = 1;
  while($num <= 100){
    $sum += $num;
    $num++;
  }
  echo $sum.'<br>';

?>