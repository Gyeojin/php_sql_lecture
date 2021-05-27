<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Insert Form</title>
</head>
<body>
  
  <form action="insert_data.php" method="post">
    <!-- method의 default 값은 get : 데이터 제출 시 사이트 주소창에 쿼리형식(사이트형식)으로 전달-->
    아이디 : <input type="text" name="id"><br>
    이름 : <input type="text" name="name"><br>
    비밀번호 : <input type="password" name="pass"><br>
    전화번호 : <input type="text" name="phone"><br>
    국적 : <input type="text" name="nati"><br>
    <input type="submit" value="제출"><br>

    <!-- form 안에 있는 submit type 버튼은 form의 action 경로로 이동시킨다. -->
  </form>

</body>
</html>