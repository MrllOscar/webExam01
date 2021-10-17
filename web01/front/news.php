<!-- 轉為include頁面，保留 class=di裡面那段就好 -->
<marquee scrolldelay="120" direction="left" style="position:absolute; width:100%; height:40px;">
        </marquee>
        <div style="height:32px; display:block;"></div>
        <!--正中央-->
        <?php
        $big=$News->count();
        $small=5;
        $now=$_GET['p']??1;
        $page=ceil($big/$small);
        $start=($now-1)*$small;
        $news=$News->all("LIMIT $start,$small");
        foreach($news as $nw){
          printf('<div>%s</div>',$nw['text']);
        }
        ?>
        <div style="text-align:center;">
          <a class="bl" style="font-size:30px;" href="?do=meg&p=0">&lt;&nbsp;</a>
          <a class="bl" style="font-size:30px;" href="?do=meg&p=0">&nbsp;&gt;</a>
        </div>