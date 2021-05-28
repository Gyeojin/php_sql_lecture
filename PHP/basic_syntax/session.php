<?php

  //세션은 쿠키와 비슷하나 정보를 사용자 컴퓨터가 아닌 서버에 저장한다.
  //웹 브라우저 설정 시 쿠키를 차단하면 쿠키는 무용지물이 된다.
  //따라서 로그인 정보와 같은 민감한 정보를 저장할 때는 세션으로 저장하는 것이 일반적이다.
  //세션을 저장 방법 : 1.session_start() 함수 작성

  session_start();
  $_SESSION['userid'] = 'marshall';

  //isset() 함수 : 특정 변수의 존재 여부를 boolean(true/false)으로 알려준다.

  if(isset($_SESSION['userid'])){
    $userid =$_SESSION['userid'];
  }else{
    echo "저장된 세션이 없습니다.";
  }
  echo $userid;
?>

<button onClick="goLogout()">go to logout</button>
<script>
  function goLogout(){
    location.href="logout.php";
  }
  // const btn = document.querySelector('botton');

</script>