<?php include_once '../base.php';
// 一定要給他table值去找到對應表格，且用POST
$db=new DB($_POST['table']);

//判斷有沒有上傳進來的檔案
if(isset($_FILES['img']['tmp_name'])){
  // 涵式要背，東西，位置，本來名稱
  move_uploaded_file($_FILES['img']['tmp_name'],"../icon/",$_FILES['img']['name']);
  $data['img']=$_FILES['img']['name'];
}

//分辨過來的資料表決定做什麼事情
  switch($_POST['table']){

  }

