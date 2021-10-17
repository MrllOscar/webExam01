<!-- **轉為include頁面，保留 class=di裡面那段就好，名稱改成admin就不用改按鈕標籤 -->
<marquee scrolldelay="120" direction="left" style="position:absolute; width:100%; height:40px;">
        </marquee>
        <div style="height:32px; display:block;"></div>
        <!--正中央-->
        <form method="post" action="?do=check" target="back">
          <p class="t botli">管理員登入區</p>
          <p class="cent">帳號 ： <input name="acc" class="acc" autofocus="" type="text"></p>
          <p class="cent">密碼 ： <input name="ps" class="pw" type="password"></p>
          <!-- **改按鈕 -->
          <p class="cent"><input value="送出" class="submit" type="button"><input type="reset" value="清除"></p>
        </form>

<script>
  $(".submit").on('click',()=>{
    let acc=$(".acc").val(),
        pw=$(".pw").val();
    $.post('../api/chk.php',{acc,pw},(rrr)=>{
      if(rrr!=1){
        alert('帳號或密碼輸入錯誤');
        location.reload;
        // console.log(rrr);
      }else{
        location.href="/backend.php";
      }
    })
  })
</script>