<h1 class="ct">新增主選單</h1>
<hr>
<form action="api/manage.php" method="post" >
<table class="ct">
  <tr>
    <td>主選單名稱：</td>
    <td>選單連結網址：</td>
  </tr>
  <tr>
    <td><input type="text" name="title[]"value="<?= $_GET['id']??''?>"></td>
    <td><input type="text" name="text[]" value="<?= $_GET['id']??''?>"></td>
  </tr>
</table>
<div>
<input type="submit" value="新增">
<input type="reset" value="重置">
<!-- 要傳送表單讓後台判斷 -->
<input type="hidden" name="id[]" value="<?= $_GET['id']??''?>">
<input type="hidden" name="table" value="menu">
</div>
</form>