<?php include_once '../base.php';
//複製total，改資料表，欄位
$Bottom->save(['id'=>1,'text'=>$_POST['text']]);
to($_SERVER['HTTP_REFERER']);