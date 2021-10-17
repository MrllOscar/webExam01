
        <div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
          <p class="t cent botli">選單管理</p>
          <form method="post" action="../api/manage.php">
            <table width="100%">
              <tbody>
                <tr class="yel">
                  <td width="30%">主選單名稱</td>
                  <td width="30%">主選單連結</td>
                  <td>次選單數</td>
                  <td width="7%">顯示</td>
                  <td width="7%">刪除</td>
                  <td width="15%"></td>
                <?php 
                $rows=$Menu->all(["MID"=>0]);
                  foreach($rows as $row){
                    printf('<tr> <td class="cent"><input type="text" name="title[]" value="%s"></td>',$row['title']);
                    printf('<td class="cent"><input type="text" name="text[]" value="%s"></td>',$row['text']);
                    printf('<td class="cent">%s</td>',$Menu->count(['MID'=>$row['id']]));
                    printf('<td><input type="checkbox" name="sh[]" value="%s" %s></td>',$row['id'],($row['sh']==1)?'checked':'');
                    printf('<td><input type="checkbox" name="del[]" value="%s"><input type="hidden" name="id[]" value="%s"></td>',$row['id'],$row['id']);
                    printf('<td><input type="button" onclick="op(\'#cover\',\'#cvr\',\'%s\')" value="編輯次選單"></td></tr>','../window/menu.php?id='.$row['id']);
                  }
                ?>
              </tbody>
            </table>
            <div class="cent">
            </div>
            <input type="hidden" name="table" value="menu">
            <table style="margin-top:40px; width:70%;">
              <tbody>
                <tr>
                  <td width="200px"><input type="button" onclick="op('#cover','#cvr','../window/menu.php')" value="新增主選單"></td>
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