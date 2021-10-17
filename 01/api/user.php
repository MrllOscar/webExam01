<?php include_once '../base.php';
$row=$Admin->count(['acc'=>$_POST['acc'] , 'pw'=>$_POST['pw']]);
if($row==1){
  to('/backend.php');
}