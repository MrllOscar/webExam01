<form action="../api/manage.php" method="post" enctype="multipart/form-data">
<?php if(!isset($_GET['id'])){ ?>
<h2 class="cent">新增標題區圖片</h2>
<?php }else{?>
<h2 class="cent">更新標題區圖片</h2>
<?php }?>
<hr>
<table>
  <tr>
    <td>標題區圖片：</td>
    <td><input type="file" name="img"></td>
  </tr>
<?php if(!isset($_GET['id'])){ ?>
  <tr>
    <td>標題區替代文字</td>
    <td><input type="text" name="text[]"></td>
  </tr>
<?php }?>
<tr>
  <td><input type="submit" value="新增"><input type="reset" value="重置"></td>
  <td><input type="hidden" name="id[]" value="<?=$_GET['id']??''?>"><input type="hidden" name="table" value="home"></td>
</tr>
</table>
</form>
