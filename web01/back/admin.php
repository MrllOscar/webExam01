
        <div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
          <p class="t cent botli">管理者帳號管理</p>
          <!-- action位置要改到自己要送去的地方 -->
          <form method="post" action="../api/manage.php">
            <table width="100%">
              <tbody>
                <tr class="yel">
                  <td width="45%">帳號</td>
                  <td width="45%">密碼</td>
                  <td width="7%">刪除</td>
                </tr>
        <!-- 建立第二欄位 -->
        <?php 
        $rows=$Admin->all();
        foreach($rows as $row){
          printf('<tr><td><input type="text" name="acc[]" value="%s"></td>',$row['acc']);
          printf('<td><input type="text" name="pw[]" value="%s"></td>',$row['pw']);
          printf('<td><input type="checkbox" name="del[]" value="%s"><input type="hidden" name="id[]" value="%s"></td></tr>',$row['id'],$row['id']);
        }
              ?>
              </tbody> 
              <!-- 先暫時寫著讓後面去判斷table名稱自動新增或修改哪張資料表 -->
              <input type="hidden" name="table" value="admin">
            </table>
            <table style="margin-top:40px; width:70%;">
              <tbody>
                <tr>
                  <!-- 按鈕改要去的位置，會呈現跳出視窗，table直接用get給 -->
                  <td width="200px"><input type="button" onclick="op('#cover','#cvr','../window/admin.php')" value="新增管理者帳號"></td>
                  <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置"></td>
                </tr>
              </tbody>
            </table>
          </form>
        </div>
      </div>

