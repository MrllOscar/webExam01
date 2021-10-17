<?php include_once '../base.php';
echo $Admin->count(['acc'=>$_POST['acc'],'pw'=>$_POST['pw']]);
//底下可有可無
// if(($Admin->count(['acc'=>$_POST['acc'],'pw'=>$_POST['pw']]))>=1){
//   $_SESSION['user']==1;
// }
