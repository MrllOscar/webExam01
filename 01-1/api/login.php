<?php include_once '../base.php';
echo $Admin->count(['acc'=>$_POST['acc'],'pw'=>$_POST['pw']]);
