<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
          <p class="t cent botli">進站總人數管理</p>
          <form method="post" action="../api/manage.php">
            <table width="100%">
              <tbody>
                <tr class="yel">
                  <td width="45%">進站總人數</td>
                  <td width=""><input type="text" name="total[]" value="" style="width:50%"></td>
                </tr>
              </tbody>
            </table>
            <input type="hidden" name="table" value="total">
            <input type="hidden" name="id[]" value="1">
            <table style="margin-top:40px; width:70%;">
              <tbody>
                <tr>
                  <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置"></td>
                </tr>
              </tbody>
            </table>
          </form>
        </div>