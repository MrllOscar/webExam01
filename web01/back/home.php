
        <div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
          <p class="t cent botli">網站標題管理</p>
          <!-- action位置要改到自己要送去的地方 -->
          <form method="post" action="../api/manage.php">
            <table width="100%">
              <tbody>
                <tr class="yel">
                  <td width="45%">網站標題</td>
                  <td width="23%">替代文字</td>
                  <td width="7%">顯示</td>
                  <td width="7%">刪除</td>
                  <td></td>
                </tr>
        <!-- 建立第二欄位 -->
        <?php 
        $rows=$Home->all();
        foreach($rows as $row){
          printf('<tr><td><img src="/icon/%s" style="width:300px;height:30px;"></td>',$row['img']);
          printf('<td><input type="text" name="text[]" value="%s"></td>',$row['text']);
          printf('<td><input type="radio" name="sh[]" value="%s" %s></td>',$row['id'],($row['sh'])?'checked':'');
          printf('<td><input type="checkbox" name="del[]" value="%s"></td>',$row['id']);
          printf('<td><input type="button" onclick="op(\'%s\',\'%s\',\'%s\')" value="更換圖片"><input type="hidden" name="id[]" value="%s"></td></tr>','#cover','#cvr','../window/home.php?id='.$row['id'],$row['id']);
        }
              ?>
              </tbody> 
              <!-- 先暫時寫著讓後面去判斷table名稱自動新增或修改哪張資料表 -->
              <input type="hidden" name="table" value="home">
            </table>
            <table style="margin-top:40px; width:70%;">
              <tbody>
                <tr>
                  <!-- 按鈕改要去的位置，會呈現跳出視窗，table直接用get給 -->
                  <td width="200px"><input type="button" onclick="op('#cover','#cvr','../window/home.php')" value="新增網站標題圖片"></td>
                  <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置"></td>
                </tr>
              </tbody>
            </table>
          </form>
        </div>
      </div>

