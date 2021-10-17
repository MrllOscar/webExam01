<!--正中央-->
<div style="text-align:center;">
<?php 
                $big=$News->count();
                $small=5;
                $page=ceil($big/$small);
                $now=$_GET['p']??1;
                $start=($now-1)*$small;
                $rows=$News->all(" LIMIT $start,$small");
                  foreach($rows as $k => $row){
                    printf('<div class="sswww">%s . %s <pre class="all" style="display:none">%s</pre></div>',$k+1+$start,mb_substr($row['text'],0,15),$row['text']);
                  }
                ?>
            <div class="cent">
            <?php
              if($now-1>0)printf('<a href="?do=news&p=%s"><</a>',$now-1);
              for($i=1;$i<=$page;$i++)printf('<a href="?do=news&p=%s" %s>%s</a>',$i,($now==$i)?'style="font-size:36px"':'',$i);
              if($now+1<=$page)printf('<a href="?do=news&p=%s">></a>',$now+1);
            ?>
            </div>
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