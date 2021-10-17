<div class="cent"><?=(isset($_GET['id']))?'更新':'新增'?>動態文字廣告</div>
<hr>
<form action="api/manage.php" method="post" enctype="multipart/form-data">
<table>
  <tr>
    <td>動態文字廣告：</td>
    <td><input type="text" name="text[]"></td>
  </tr>
    <td><input type="submit" value="新增"><input type="reset" value="重置"></td>
    <td><input type="hidden" name="id[]" value="<?=$_GET['id']??''?>"><input type="hidden" name="table" value="ad"></td>
  </tr>
</table>
</form>