  <!--正中央-->
  <div class="cent">更多最新消息顯示區</div>
  <?php 
                $big=$News->count(['sh'=>1]);
                $small=5;
                $page=ceil($big/$small);
                $now=$_GET['p']??'1';
                $start=($now-1)*$small;
                $rows=$News->all(['sh'=>1]," LIMIT $start,$small");
                foreach($rows as $k => $row){
                  // 尺寸注意
                  printf('<div class="sswww">%s.%s<span class="all" style="display:none">%s</span></div>',$k+1+$start,mb_substr($row['text'],0,20),$row['text']);
                }
                ?>
  <div style="text-align:center;">
  <?php 
                if($now-1>0)printf('<a href="?do=news&p=%s" class="bl"><</a>',$now-1);
                for($i=1;$i<=$page;$i++)printf('<a href="?do=news&p=%s" class="bl" %s>%s</a>',$i,($now==$i)?'style="font-size:32px;"':'',$i);
                if($now+1<= $page)printf('<a href="?do=news&p=%s" class="bl">></a>',$now+1);
                ?>  </div>
  </div>
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
  </script>