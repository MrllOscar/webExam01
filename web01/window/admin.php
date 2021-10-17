<h1 class="ct">新增管理者帳號</h1>
<hr>
<form action="api/manage.php" method="post" >
<table class="ct">
  <tr>
    <td>帳號：</td>
    <td><input type="text" name="acc[]"></td>
  </tr>
  <tr>
    <td>密碼：</td>
    <td><input type="text" name="pw[]"></td>
  </tr>
  <tr>
    <td>確認密碼：</td>
    <td><input type="text"></td>
  </tr>
</table>
<div>
<input type="submit" value="新增">
<input type="reset" value="重置">
<!-- 要傳送表單讓後台判斷 -->
<input type="hidden" name="id[]" value="<?= $_GET['id']??''?>">
<input type="hidden" name="table" value="admin">
</div>
</form>