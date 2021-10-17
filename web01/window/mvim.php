<!-- **純手刻 -->
<?php if(!isset($_GET['id'])){?>
<h1 class="ct">新增動畫圖片</h1>
<?php }else{ ?>
<h1 class="ct">更換動畫圖片</h1>
  <?php } ?>
<hr>
<!-- **enctype="multipart/form-data"要背 -->
<form action="api/manage.php" method="post" enctype="multipart/form-data">
<table class="ct">
  <tr>
    <td>動畫圖片：</td>
    <td><input type="file" name="img"></td>
  </tr>
</table>
<div>
<input type="submit" value="新增">
<input type="reset" value="重置">
<!-- 要傳送表單讓後台判斷 -->
<input type="hidden" name="id[]" value="<?= $_GET['id']??''?>">
<input type="hidden" name="table" value="mvim">
</div>
</form>