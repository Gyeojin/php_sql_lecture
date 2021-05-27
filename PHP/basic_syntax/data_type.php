<?php

  echo '데이터 타입 페이지 입니다.<br>';
  echo '--------------------------<br>';

  //원시타입 : 문자(string), 숫자(integer-정수/double-실수), boolean(true,false)
  //데이터 타입 확인 함수 : gettype()
  //명시적 형 변환 : (형태명(int)) 변수 - 문자 형태의 숫자(ex->"123";)일 경우 숫자로 사용할 때 명시적으로 형태를 변화시켜준다.

  $num = 12.5;
  echo gettype ($num).'<br>';

  $str = "hello";
  echo gettype($str).'<br>';

  $str_num = "123"; //큰 따옴표 안엔 문자열로 나타남
  echo gettype($str_num).'<br>';

  $str_num1 = "3";
  $minus = $str_num-$str_num1.'<br>';
  echo $minus;

  echo "---------------------------------".'<br>';

  $str_num = (int) $str_num;

  echo gettype($str_num).'<br>';

  echo "-----------------------------------------<br>";
  $fff = 3 == 2;
  echo gettype($fff).'<br>';

  if($fff){
    echo "a";
  }else{
    echo "b";
  }
?>