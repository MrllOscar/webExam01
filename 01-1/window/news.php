<div class="cent"><?=(isset($_GET['id']))?'更新':'新增'?>最新消息資料</div>
<hr>
<form action="api/manage.php" method="post" enctype="multipart/form-data">
<table>
  <tr>
    <td>最新消息資料：</td>
    <td><textarea name="text[]" cols="30" rows="10"></textarea></td>
  </tr>
    <td><input type="submit" value="新增"><input type="reset" value="重置"></td>
    <td><input type="hidden" name="id[]" value="<?=$_GET['id']??''?>">
    <input type="hidden" name="table" value="news"></td>
  </tr>
</table>
</form>