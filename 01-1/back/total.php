<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
  <p class="t cent botli">進站總人數管理</p>
  <form method="post" action="../api/manage.php">
    <div class="cent"><span class="yt" style="width:49%">進站總人數：</span><span style="width:49%"><input type="text" name="total[]" value="<?=$Total->find(1)['total']?>"></span></div>
    <input type="hidden" name="id[]" value="1">
    <input type="hidden" name="table" value="total">
    <div class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置"></div>
  </form>
</div>