<form action="../api/manage.php" method="post" enctype="multipart/form-data">
<h2 class="cent">新增動畫圖片</h2>
<hr>
<table>
  <tr>
    <td>動畫圖片：</td>
    <td><input type="file" name="img"></td>
  </tr>
<tr>
  <td><input type="submit" value="新增"><input type="reset" value="重置"></td>
  <td><input type="hidden" name="id[]" value="<?=$_GET['id']??''?>"><input type="hidden" name="table" value="mvim"></td>
</tr>
</table>
</form>
