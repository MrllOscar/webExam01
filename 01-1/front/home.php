
        <div style="width:100%; padding:2px; height:290px;">
          <div id="mwww" loop="true" style="width:100%; height:100%;">
            <div style="width:99%; height:100%; position:relative;" class="cent">沒有資料</div>
          </div>
          <script>
          var lin = new Array();
          var now = 0;
          <?php $mvs=$Mvim->all(['sh'=>1]);
                foreach($mvs as $mv){
                  echo "lin.push('icon/{$mv['img']}');";
                }
            ?>
            ww();
          if (lin.length > 1) {
            setInterval("ww()", 3000);
            now = 1;
          }
          function ww() {
            $("#mwww").html("<embed loop=true src='" + lin[now] + "' style='width:99%; height:100%;'></embed>")
            //$("#mwww").attr("src",lin[now])
            now++;
            if (now >= lin.length)
              now = 0;
          }
        </script>
        <div style="width:95%; padding:2px; height:190px; margin-top:10px; padding:5px 10px 5px 10px; border:#0C3 dashed 3px; position:relative;">
          <span class="t botli">最新消息區<a href="?do=news" style="float:right">More...</a>
          </span>
          <ul class="ssaa" style="list-style-type:decimal;">
          <?php $news=$News->all(['sh'=>1]," LIMIT 5");
            foreach($news as $k => $n){
              printf('<li>%s <span class="all" style="display:none">%s</span></li>',mb_substr($n['text'],0,20),$n['text']);
            }
          ?>
          </ul>
          <div id="altt" style="position: absolute; width: 350px; min-height: 100px; background-color: rgb(255, 255, 204); top: 50px; left: 130px; z-index: 99; display: none; padding: 5px; border: 3px double rgb(255, 153, 0); background-position: initial initial; background-repeat: initial initial;"></div>
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