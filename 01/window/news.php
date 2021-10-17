<form action="../api/manage.php" method="post" enctype="multipart/form-data">
<h2 class="cent">新增最新消息資料</h2>
<hr>
<table>
  <tr>
    <td>最新消息資料：</td>
    <td><textarea name="text[]" style="width:90%;height:2rem"></textarea></td>
  </tr>
<tr>
  <td><input type="submit" value="新增"><input type="reset" value="重置"></td>
  <td><input type="hidden" name="id[]" value="<?=$_GET['id']??''?>"><input type="hidden" name="table" value="news"></td>
</tr>
</table>
</form>
