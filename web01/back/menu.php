
        <div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
          <p class="t cent botli">選單管理</p>
          <!-- action位置要改到自己要送去的地方 -->
          <form method="post" action="../api/manage.php">
            <table width="100%">
              <tbody>
                <tr class="yel">
                  <td width="40%">主選單</td>
                  <td width="23%">選單連結網址</td>
                  <td width="">次選單數</td>
                  <td width="7%">顯示</td>
                  <td width="7%">刪除</td>
                  <td></td>
                </tr>
        <!-- 建立第二欄位 -->
        <?php 
        $rows=$Menu->all(["MID"=>0]);
        foreach($rows as $row){
          printf('<tr><td><input type="text" name="title[]" value="%s"></td>',$row['title']);
          printf('<td><input type="text" name="text[]" value="%s"></td>',$row['text']);
          printf('<td>%s</td>',$Menu->count(['MID'=>$row['id']]));
          printf('<td><input type="checkbox" name="sh[]" value="%s" %s></td>',$row['id'],($row['sh'])?'checked':'');
          printf('<td><input type="checkbox" name="del[]" value="%s"></td>',$row['id']);
          printf('<td><input type="button" onclick="op(\'%s\',\'%s\',\'%s\')" value="編輯次選單"><input type="hidden" name="id[]" value="%s"></td></tr>','#cover','#cvr','../window/menu2.php?id='.$row['id'],$row['id']);
        }
              ?>
              </tbody> 
              <!-- 先暫時寫著讓後面去判斷table名稱自動新增或修改哪張資料表 -->
              <input type="hidden" name="table" value="menu">
            </table>
            <table style="margin-top:40px; width:70%;">
              <tbody>
                <tr>
                  <!-- 按鈕改要去的位置，會呈現跳出視窗，table直接用get給 -->
                  <td width="200px"><input type="button" onclick="op('#cover','#cvr','../window/menu.php')" value="新增主選單"></td>
                  <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置"></td>
                </tr>
              </tbody>
            </table>
          </form>
        </div>
      </div>

