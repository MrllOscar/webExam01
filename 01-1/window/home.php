<div class="cent"><?=(isset($_GET['id']))?'更新':'新增'?>標題區圖片</div>
<hr>
<form action="api/manage.php" method="post" enctype="multipart/form-data">
<table>
  <tr>
    <td>標題區圖片：</td>
    <td><input type="file" name="img"></td>
  </tr>
  <?php if(!isset($_GET['id'])){?>
  <tr>
    <td>標題區替代文字</td>
    <td><input type="text" name="text[]"></td>
  </tr>
  <tr>
    <?php } ?>
    <td><input type="submit" value="新增"><input type="reset" value="重置"></td>
    <td><input type="hidden" name="id[]" value="<?=$_GET['id']??''?>"><input type="hidden" name="table" value="home"></td>
  </tr>
</table>
</form>