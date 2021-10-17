<h1 class="ct">新增動態文字廣告</h1>
<hr>
<form action="api/manage.php" method="post" >
<table class="ct">
  <tr>
    <td>動態文字廣告：</td>
    <td><input type="text" name="text[]"></td>
  </tr>
</table>
<div>
<input type="submit" value="新增">
<input type="reset" value="重置">
<!-- 要傳送表單讓後台判斷 -->
<input type="hidden" name="id[]" value="<?= $_GET['id']??''?>">
<input type="hidden" name="table" value="ad">
</div>
</form>