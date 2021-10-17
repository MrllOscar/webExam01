<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
  <p class="t cent botli">頁尾版權資料管理</p>
  <form method="post" action="../api/manage.php">
    <div class="cent"><span class="yt" style="width:49%">頁尾版權資料：</span><span style="width:49%"><input type="text" name="text[]" value="<?=$Bottom->find(1)['text']?>"></span></div>
    <input type="hidden" name="id[]" value="1">
    <input type="hidden" name="table" value="bottom">
    <div class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置"></div>
  </form>
</div>