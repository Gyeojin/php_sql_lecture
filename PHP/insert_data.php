<?php



?>


<html>
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <a href="insert_form.php">돌아가기</a>

    <?php
      echo "Hello PHP!";
      //get : 보내는 데이터의 양이 적고, '입력 데이터가 아닌' 조회나 업데이트할 데이터를 전달할 때 주로 사용한다.
      //post : 보내는 데이터의 양이 많고, 특히 '데이터베이스에 입력해야 할 데이터'를 보낼 때 사용한다.
    
      //get : $_GET['name data']; (form에서 get을 썼을 때)
      //post : $_POST['name data']; (form에서 post를 썼을 때)
      //둘 다 받을 수 있는 형식 : $_REQUEST['name data'];
    
      //데이터베이스에 전송하기 위해 데이터를 변수 설정 (사용자가 데이터를 직접 입력하기 때문에 고정 X)
      $member_id = $_POST['id'];
      $name = $_POST['name'];
      $member_pass = $_POST['pass'];
      $phone = $_POST['phone'];
      $nati = $_POST['nati'];
    
      // echo $id.'<br>';
      // echo $name.'<br>';
      // echo $pass.'<br>';
      // echo $phone.'<br>';
      // echo $nati.'<br>';
    
      include $_SERVER['DOCUMENT_ROOT'].'/PHPSQL/connect/db_conn.php';
    
      //$sql="INSERT INTO members (id,name,pass,phone,nationality) VALUES ('$member_id','$name','$member_pass','$phone','$nati')";


    
      //1.데이터 조회 : SELECT [FIELD](*) FROM [table_name]
       //$sql = "SELECT * FROM members"; 아스타(*) : 전체 데이터를 조회한 후 필요한 데이터를 추출해 사용하는게 일반적이다.

      //2.데이터 조건 필터링 조회(특정데이터 추출) : SELECT [FIELD](*) FROM [table_name] WHERE [조건 필드명] = [조건값]
      //$sql = "SELECT * FROM members WHERE idx = 4";

      //3.데이터 정렬 : SELECT [FIELD](*) FROM [table_name] ORDER BY [정렬 기준 필드명] DESC(역순) or ASC(정순=디폴트값)
      //$sql = "SELECT * FROM members ORDER BY idx DESC";

      //4.데이터 조회 개수 지정 : SELECT [FIELD](*) FROM [table_name] LIMIT [number]([start(index)],[개수]);
      // 테이블 데이터 중 1번째부터 6개의 데이터를 역순으로 조회
      //$sql="SELECT * FROM members ORDER BY idx DESC LIMIT 0,3";

      //5.데이터 값 변경 : UPDATE [table_name] SET [변경할 필드명] = [변경 값] WHERE [변경할 필드 조건]
      //2번 인덱스 데이터의 이름을 김철수로 변경
      //$sql = "UPDATE members SET name = '김철수' WHERE idx=2";

      //6.데이터 삭제 : DELETE FROM [table name] WHERE [삭제 필드 조건]
      //name이 김철수인 필드 삭제
      $sql="DELETE FROM members WHERE name='김철수'";
      //*삭제 시 idx(고유번호)도 같이 삭제되어 기존 데이터로 채워지지 않는다 (ex->1.3.4.5)

    
      $result = mysqli_query($db_conn, $sql);
      // mysqli_query(); : PHP에서 데이터베이스에 특정 작업을 요청하는 함수 - 첫번째 파라미터로 접속 정보를, 두번째 파라미터로 요청 작업을 전달한다.

      //조회 데이터를 배열 형태로 추출 : mysqli_fetcch_array() 괄호 안의 조건을 계속 만족할때까지 실행
      // while($row = mysqli_fetch_array($result)){
      //   $mem_idx = $row['idx'];
      //   $mem_id = $row['id'];
    ?>
    <div>
      <!-- <p>번호 : <?=$mem_idx?></p>
      <p>아이디 : <?=$mem_id?></p> -->
    </div>
    <?php
     // }
    ?>
  </body>
</html>



