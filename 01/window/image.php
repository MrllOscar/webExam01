<form action="../api/manage.php" method="post" enctype="multipart/form-data">
<h2 class="cent">新增校園映像圖片</h2>
<hr>
<table>
  <tr>
    <td>校園映像圖片：</td>
    <td><input type="file" name="img"></td>
  </tr>
<tr>
  <td><input type="submit" value="新增"><input type="reset" value="重置"></td>
  <td><input type="hidden" name="id[]" value="<?=$_GET['id']??''?>"><input type="hidden" name="table" value="image"></td>
</tr>
</table>
</form>
