<?php include_once '../base.php'?>
<div class="cent"><?=(isset($_GET['id']))?'編輯次選單':'新增主選單'?></div>
<hr>
<form action="api/manage.php" method="post" enctype="multipart/form-data">
<table class="more">
  <?php if(isset($_GET['id'])){ ?>
  <tr>
    <td>次選單名稱</td>
    <td>次選單連結網址</td>
    <td>刪除</td>
  </tr>
  <tr>
    <?php $rows=$Menu->all(["MID"=>$_GET['id']]);
    foreach($rows as $row){?>
    <td><input type="text" name="title[]" value="<?=$row['title']?>"></td>
    <td><input type="text" name="text[]" value="<?=$row['text']?>"></td>
    <td><input type="checkbox" name="del[]" value=""></td>
  </tr>
  <?php } }else{ ?>
  <tr>
    <td>主選單名稱</td>
    <td>主選單連結網址</td>
    <td>刪除</td>
  </tr>
  <tr>
    <td><input type="text" name="title[]" value=""></td>
    <td><input type="text" name="text[]" value=""></td>
    <td><input type="checkbox" name="del[]" value=""></td>
  </tr>
  <?php } ?>
</table>
    <div><input type="submit" value="修改確定"><input type="reset" value="重置">
    <?php if(isset($_GET['id'])){ ?>
    <input type="button" onclick="more()" value="更多次選單">
    <?php }?>
    <input type="hidden" name="MID[]" value="<?=$_GET['id']??''?>">
    <input type="hidden" name="id[]" value="<?=$row['id']??''?>">
    <input type="hidden" name="table" value="menu"></div>
</form>
<script>
  function more(){
    $('.more').append(`<tr>
    <td><input type="text" name="title[]" value=""></td>
    <td><input type="text" name="text[]" value=""><input type="hidden" name="MID[]" value="<?=$_GET['id']?>"><input type="hidden" name="id[]" value=""></td>
    <td></td>
  </tr>`)
  }
</script>