<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
          <p class="t cent botli">選單管理</p>
          <form method="post" action="../api/manage.php">
            <table width="100%">
              <tbody>
                <tr class="yel">
                  <td width="35%">主選單名稱</td>
                  <td width="35%">選單連結網址</td>
                  <td width="">次選單數</td>
                  <td width="">顯示</td>
                  <td width="">刪除</td>
                  <td></td>
                </tr>
                <?php 
                $rows=$Menu->all(["MID"=>0]);
                foreach($rows as $row){
                  // 尺寸注意
                  printf('<tr><td><input type="text" name="title[]" value="%s" style="width:90%%"></td>',$row['title']);
                  printf('<td><input type="text" name="text[]" value="%s" style="width:90%%"></td>',$row['text']);
                  printf('<td>%s</td>',$Menu->count(["MID"=>$row['id']]));
                  printf('<td><input type="checkbox" name="sh[]" value="%s" %s></td>',$row['id'],$row['sh']==1?'checked':'');
                  printf('<td><input type="checkbox" name="del[]" value="%s"><input type="hidden" name="id[]" value="%s"></td>',$row['id'],$row['id']);
                  printf('<td><input type="button" onclick="op(\'%s\',\'%s\',\'%s\')" value="編輯次選單"></td></tr>','#cover','#cvr','../window/menu.php?id='.$row['id']);
                }
                ?>
              </tbody>
            </table>
            <input type="hidden" name="table" value="menu">
            <table style="margin-top:40px; width:70%;">
              <tbody>
                <tr>
                  <td width="200px"><input type="button" onclick="op('#cover','#cvr','../window/menu.php?')" value="新增主選單"></td>
                  <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置"></td>
                </tr>
              </tbody>
            </table>
          </form>
        </div>