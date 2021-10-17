<!-- **複製home -->
        <div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
        <!-- **改標題 -->
          <p class="t cent botli">進站總人數管理</p>
          <!-- **改送出位置 -->
          <form method="post" action="api/total.php">
            <table width="100%">
              <tbody>
                <tr class="yel">
                  <!-- **改文字 -->
                  <td width="45%">進站總人數</td>
                  <!-- **其他寬度刪除，放表單 -->
                  <td><input type="text" name="total"></td>
                </tr>
              </tbody>
            </table>
            <table style="margin-top:40px; width:70%;">
              <tbody>
                <tr>
                  <!-- 刪除第一個按鈕 -->
                  <!-- <td width="200px"><input type="button" onclick="op('#cover','#cvr','view.php?do=title')" value="新增網站標題圖片"></td> -->
                  <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置"></td>
                </tr>
              </tbody>
            </table>

          </form>
        </div>
      </div>
