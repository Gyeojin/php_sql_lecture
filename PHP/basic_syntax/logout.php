<?php

  session_start();
  //세션을 삭제할 때 : unset() 함수 호출

  unset($_SESSION['userid']);

  //echo "
  //  <script>
  //    location.href='loop.php';
  //  </script>
  //";
?>

<p>넘어온 세션 : <?=$userid?> 입니다.</p>