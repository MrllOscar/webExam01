
        <div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
          <p class="t cent botli">動態文字廣告管理</p>
          <form method="post" action="api/manage.php">
            <table width="100%">
              <tbody>
                <tr class="yel">
                  <td width="">動態文字廣告</td>
                  <td width="10%">顯示</td>
                  <td width="10%">刪除</td>
                </tr>
                <?php
                  $rows=$Ad->all();
                  foreach ($rows as $row){
                    printf('<tr><td><input style="width:80%%;" type="text" name="text[]" value="%s"></td>',$row['text']);
                    printf('<td><input type="checkbox" name="sh[]" value="%s" %s></td>' ,$row['id'],$row['sh']==1?'checked':'');
                    printf('<td><input type="checkbox" name="del[]" value="%s"><input type="hidden" name="id[]" value="%s"></td></tr>' ,$row['id'],$row['id']);
                  }
                ?>
              </tbody>
            </table>
            <table style="margin-top:40px; width:70%;">
              <tbody>
                <tr>
                  <td width="200px"><input type="button" onclick="op('#cover','#cvr','../window/ad.php')" value="新增動態文字廣告"></td>
                  <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置"></td>
                </tr>
              </tbody>
            </table>
<input type="hidden" name="table" value="ad">
          </form>
        </div>
      </div>

