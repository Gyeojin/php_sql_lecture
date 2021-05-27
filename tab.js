$(function () {
  //1. 클릭하는 탭의 인덱스 값 읽어서 변수에 저장
  $(".btns button").on("click", function () {
    const btnIdx = $(this).index();
    // alert(btnIdx);

    //2.버튼 클릭 시 패널 전체를 한번 삭제
    $(".panel").hide();

    //3.btnIdx 로 넘어오는 인덱스의 숫자를 panel의 인덱스 숫자와 맞춰 해당 패널을 보여준다.
    $(".panel").eq(btnIdx).show();
  });

  $(".btns button").eq(0).trigger("click");
});
