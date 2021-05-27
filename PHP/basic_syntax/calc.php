<?php

  echo '연산 관련 페이지 입니다.<br>';
  echo '--------------------------------------<br>';

  $sum = 5+6;
  echo $sum.'<br>';

  $minus = 6-3;
  echo $minus.'<br>';

  $times = 2*5;
  echo $times.'<br>';

  $divide = 5/3;
  echo $divide.'<br>';

  //% 연산자는 앞의 값을 뒤의 값으로 나눈 나머지 값을 반환한다.
  $percent = 5%3;
  echo $percent.'<br>';

  //% 연산 시 앞의 수가 뒤의 수보다 작으면 앞의 수를 반환한다.
  $percent = 2%5;
  echo $percent.'<br>';


  $a = 5;

  if($a % 2 ==0){
    echo "짝수";
  } else {
    echo "홀수";
  }

?>