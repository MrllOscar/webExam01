
        <div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
          <p class="t cent botli">校園映像資料管理</p>
          <form method="post" action="../api/manage.php">
            <table width="100%">
              <tbody>
                <tr class="yel">
                  <td width="45%">校園映像資料圖片</td>
                  <td width="7%">顯示</td>
                  <td width="7%">刪除</td>
                  <td></td>
                </tr>
                <?php 
                $big=$Image->count();
                $small=3;
                $page=ceil($big/$small);
                $now=$_GET['p']??1;
                $start=($now-1)*$small;
                $rows=$Image->all(" LIMIT $start,$small");
                  foreach($rows as $row){
                    printf('<tr> <td class="cent"><img src="../icon/%s" style="width: 150px;height:103px"></td>',$row['img']);
                    printf('<td><input type="checkbox" name="sh[]" value="%s" %s></td>',$row['id'],($row['sh']==1)?'checked':'');
                    printf('<td><input type="checkbox" name="del[]" value="%s"><input type="hidden" name="id[]" value="%s"></td>',$row['id'],$row['id']);
                    printf('<td><input type="button" onclick="op(\'#cover\',\'#cvr\',\'%s\')" value="更新圖片"></td></tr>','../window/image.php?id='.$row['id']);
                  }
                ?>
              </tbody>
            </table>
            <div class="cent">
            <?php
              if($now-1>0)printf('<a href="?do=image&p=%s"><</a>',$now-1);
              for($i=1;$i<=$page;$i++)printf('<a href="?do=image&p=%s" %s>%s</a>',$i,($now==$i)?'style="font-size:36px"':'',$i);
              if($now+1<=$page)printf('<a href="?do=image&p=%s">></a>',$now+1);
            ?>
            </div>
            <input type="hidden" name="table" value="image">
            <table style="margin-top:40px; width:70%;">
              <tbody>
                <tr>
                  <td width="200px"><input type="button" onclick="op('#cover','#cvr','../window/image.php')" value="新增校園映像圖片"></td>
                  <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置"></td>
                </tr>
              </tbody>
            </table>

          </form>
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
    </div>