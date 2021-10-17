<form action="../api/manage.php" method="post" enctype="multipart/form-data">
<?php if(!isset($_GET['id'])){ ?>
<h2 class="cent">新增主選單</h2>
<?php }else{?>
<h2 class="cent">編輯次選單</h2>
<?php }?>
<hr>
<table class="more">
<?php if(!isset($_GET['id'])){ ?>
  <tr>
    <td>主選單名稱</td>
    <td>主選單連結網址</td>
    <td>刪除</td>
  </tr>
  <tr>
    <td><input type="text" name="title[]"></td>
    <td><input type="text" name="text[]"></td>
    <td><input type="hidden" name="id[]" value=""></td>
  </tr>
  <?php }else{?>
  <tr>
    <td>次選單名稱</td>
    <td>次選單連結網址</td>
    <td>刪除</td>
  </tr>
  <tr>
    <td><input type="text" name="title[]"></td>
    <td><input type="text" name="text[]"></td>
    <td><input type="checkbox" name="del[]"><input type="hidden" name="id[]" value=""><input type="hidden" name="MID[]" value="<?=$_GET['id']?>"></td>
  </tr>
  <?php }?>
  </table>
  <table>
<tr>
  <td><input type="submit" value="新增"><input type="reset" value="重置">
<?php if(isset($_GET['id'])){ ?>
  <input type="button" onclick="more()" value="更多次選單">
  <?php }?>
</td>
  <td><input type="hidden" name="table" value="menu"></td>
</tr>
</table>
</form>
<script>
  function more(){
    $(".more").append(`
    <tr>
    <td><input type="text" name="title[]"></td>
    <td><input type="text" name="text[]"></td>
    <td><input type="hidden" name="id[]" value=""><input type="hidden" name="MID[]" value="<?=$_GET['id']?>"></td>
  </tr>
    `)
  }
</script>