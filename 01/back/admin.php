<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
          <p class="t cent botli">管理者帳號管理</p>
          <form method="post" action="../api/manage.php">
            <table width="100%">
              <tbody>
                <tr class="yel">
                  <td width="">帳號</td>
                  <td width="">密碼</td>
                  <td width="10%">刪除</td>
                </tr>
                <?php 
                $rows=$Admin->all();
                foreach($rows as $row){
                  // 尺寸注意
                  printf('<tr><td><input type="text" name="acc[]" value="%s"></td>',$row['acc']);
                  printf('<td><input type="text" value="%s" name="pw[]"></td>',$row['pw']);
                  printf('<td><input type="checkbox" name="del[]" value="%s"><input type="hidden" name="id[]" value="%s"></td></tr>',$row['id'],$row['id']);
                }
                ?>
              </tbody>
            </table>
            <input type="hidden" name="table" value="admin">
            <table style="margin-top:40px; width:70%;">
              <tbody>
                <tr>
                  <td width="200px"><input type="button" onclick="op('#cover','#cvr','../window/admin.php?')" value="新增管理者帳號"></td>
                  <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置"></td>
                </tr>
              </tbody>
            </table>

          </form>
        </div>