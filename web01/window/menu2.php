
<h1 class="ct">新增次選單</h1>
<hr>
<form action="api/manage.php" method="post" >
<table class="ct lol">
  <tr>
    <td>次選單名稱</td>
    <td>次選單連結網址</td>
    <td>刪除</td>
  </tr>
  
    <?php 
    include_once '../base.php';
    $rows=$Menu->all(['MID'=>$_GET['id']]);
      foreach($rows as $row){
        printf('<tr><td><input type="text" name="title[]"value="%s"></td>',$row['title']);
        printf('<td><input type="text" name="text[]" value="%s"></td>',$row['text']);
        printf('<td><input type="checkbox" name="del[]" value="%s"><input type="hidden" name="id[]" value="%s"></td></tr>',$row['id'],$row['id']);
      }
    ?>
</table>
<div>
<input type="submit" value="修改確定">
<input type="reset" value="重置">
<input type="button" onclick="moremenu()" value="更多次選單">
<!-- 要傳送表單讓後台判斷 -->

<input type="hidden" name="MID[]" value="<?= $_GET['id']?>">
<input type="hidden" name="table" value="menu">
</div>
</form>

<script>
  function moremenu(){
    $('.lol').append('<tr><td><input type="text" name="title[]"value=""></td><td><input type="text" name="text[]" value=""><input type="hidden" name="id[]" value=""><input type="hidden" name="MID[]" value="<?=$_GET['id']?>"></td></tr>')
  }
</script>