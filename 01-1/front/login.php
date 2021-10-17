<!--正中央-->
<form method="post" >
  <p class="t botli">管理員登入區</p>
  <p class="cent">帳號 ： <input name="acc" class="acc" autofocus="" type="text"></p>
  <p class="cent">密碼 ： <input name="pw" class="pw" type="password"></p>
  <p class="cent"><input value="送出" class="chk" type="button"><input type="reset" value="清除"></p>
</form>
<div id="alt" style="position: absolute; width: 350px; min-height: 100px; word-break:break-all; text-align:justify;  background-color: rgb(255, 255, 204); top: 50px; left: 400px; z-index: 99; display: none; padding: 5px; border: 3px double rgb(255, 153, 0); background-position: initial initial; background-repeat: initial initial;"></div>
<script>
  $(".sswww").hover(
    function() {
      $("#alt").html("" + $(this).children(".all").html() + "").css({
        "top": $(this).offset().top - 50
      })
      $("#alt").show()
    }
  )
  $(".sswww").mouseout(
    function() {
      $("#alt").hide()
    }
  )
  $('.chk').on('click',()=>{
    let acc=$('.acc').val(),
    pw=$('.pw').val();
    $.post('../api/login.php',{acc,pw},(rr)=>{
      if(rr==1){
        location.href="/backend.php";
      }else{
        alert('帳號密碼輸入錯誤');
      }
    })
  })
</script>