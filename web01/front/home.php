
        <!--正中央-->
        <div style="width:100%; padding:2px; height:290px;">
          <div id="mwww" loop="true" style="width:100%; height:100%;">
            <div style="width:99%; height:100%; position:relative;" class="cent">沒有資料</div>
          </div>
        </div>
        <script>
          var lin = new Array();
          // **將值推入陣列，只有這邊
          <?php
            $mvs=$Mvim->all(['sh'=>1]);
            foreach($mvs as $mv){
              // **印出js語法將值(路徑)放入陣列，記得最後一定要印分號
              echo "lin.push('icon/{$mv['img']}');";
            }
          ?>
          var now = 0;
          if (lin.length > 1) {
            setInterval("ww()", 3000);
            now = 1;
          }
          ww();//解決第一張圖片的問題，增加ww並把script放到後面執行
          function ww() {
            $("#mwww").html("<embed loop=true src='" + lin[now] + "' style='width:99%; height:100%;'></embed>")
            //$("#mwww").attr("src",lin[now])
            now++;
            if (now >= lin.length)
              now = 0;
          }
        </script>

        <div style="width:95%; padding:2px; height:190px; margin-top:10px; padding:5px 10px 5px 10px; border:#0C3 dashed 3px; position:relative;">
          <span class="t botli">最新消息區
            <?php
              if($News->count(['sh'=>1])>5){
                echo '<a href="index.php?do=news" style="float:right">More...</a>';
              }
            ?>
          </span>
          <!-- ** ul標籤就是拿來放新聞內容的 -->
          <ul class="ssaa" style="list-style-type:decimal;">
          <!-- **東西寫這 -->
          <?php 
              $news=$News->all(['sh'=>1]," LIMIT 5 ");
              // class=all因為js裡面
              foreach($news as $new){
                printf('<li>%s<span class="all" style="display:none">%s</span></li>',mb_substr($new['text'],0,20),$new['text']);
              }
          ?>
          </ul>
          <div id="altt" style="position: absolute; width: 350px; min-height: 100px; background-color: rgb(255, 255, 204); top: 50px; left: 130px; z-index: 99; display: none; padding: 5px; border: 3px double rgb(255, 153, 0); background-position: initial initial; background-repeat: initial initial;">
        <!-- **內容放這裡 -->

        </div>
          <script>
            $(".ssaa li").hover(
              function() {
                $("#altt").html("<pre>" + $(this).children(".all").html() + "</pre>")
                $("#altt").show()
              }
            )
            $(".ssaa li").mouseout(
              function() {
                $("#altt").hide()
              }
            )
          </script>
        </div>