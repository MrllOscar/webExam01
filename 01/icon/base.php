<?php
//1.先處理所有大項，再針對建構子、撈資料表、計數、搜尋、刪除、存檔2.做內容3.建立DB到對應的資料表
//isset、isarray、sprintf(%s,值)、implode(" && ",字串)、array_keys($ar)
//fetchAll、fetchColumn、fetch(PDO::FETCH_ASSOC)、
session_start();
// PHP.ini 改時區即可
date_default_timezone_set("Asia/Taipei");

class DB{
  //private=不對外使用
  private $dsn="mysql:host=localhost;charset=utf8;dbname=db01",
   $root="root",
   $pw="",
   $table,
   $pdo;
  //$sql為這個function裡面的資料庫語法為何

  //建構式__construct，讓所有db都以這個資料表為主，所以最下面宣告table名稱
  //public 公開的，可直接忽略不打
  public function  __construct($table){
    $this->table=$table;
    $this->pdo=new PDO($this->dsn,$this->root,$this->pw);
  }
  
  public function all(...$arg){//撈整張資料表
    $sql="select * from $this->table ";
    if(isset($arg[0])){//判斷第一個值是否為空
      if(is_array($arg[0])){
        //他是陣列，處理陣列
        //where `欄位`='值' && `欄位`='值'
        foreach($arg[0] as $key => $value){
          $tmp[]=sprintf("`%s`='%s'",$key,$value);
          //字串相加
        }
          $sql=$sql . " where " . implode(" && ",$tmp);
          //將如果兩個以上的陣列以 "空白 && 空白"相加
      }else{
        //當他字串，不是陣列
        $sql= $sql . $arg[0];
      }
      if(isset($arg[1])){
        //$arg[1]有東西
        $sql= $sql . $arg[1];
      }
    }
    return $this->pdo->query($sql)->fetchAll();
  }


public function count(...$arg){//計算符合搜尋條件的數量
  //2-1.直接複製all(函式)
  $sql="select count(*) from $this->table ";
  //2-2.sql內容*改為count(*)
  if(isset($arg[0])){
    if(is_array($arg[0])){
      foreach($arg[0] as $key => $value){
        $tmp[]=sprintf("`%s`='%s'",$key,$value);
      }
        $sql=$sql . " where " . implode(" && ",$tmp);
    }else{
      $sql= $sql . $arg[0];
    }
    if(isset($arg[1])){
      $sql= $sql . $arg[1];
    }
  }
  //2-3.fetchAll->fetchColumn
  return $this->pdo->query($sql)->fetchColumn();
}

public function find($id){//尋找特定資料(值為$id)
    //3-1.直接複製函式
    $sql="select * from $this->table ";
    //3-2.sql內容count(*)改為*
    //3-3.將if(isset($id)){刪除
    //3-4.將所有$arg[0]的變數改為$id
      if(is_array($id)){
        foreach($id as $key => $value){
          $tmp[]=sprintf("`%s`='%s'",$key,$value);
        }
          $sql=$sql . " where " . implode(" && ",$tmp);
      }else{
        //3-5.將$sql語法改成 $sql = $sql . "where `id`='$id'"
        $sql= $sql . " where `id`='$id'" ;
      }
      //3-6.將if(isset($arg[1])){刪除

    //3-7.將fetchColumn()改成fetch(PDO::FETCH_ASSOC)
    return $this->pdo->query($sql)->fetch(PDO::FETCH_ASSOC);

}
public function del($id){//刪除單筆資料
    //4-1.直接複製find函式
    //4-2.sql內容select * 改為delete **注意星號不可留**
    $sql="delete from $this->table";
      if(is_array($id)){
        foreach($id as $key => $value){
          $tmp[]=sprintf("`%s`='%s'",$key,$value);
        }
          $sql=$sql . " where " . implode(" && ",$tmp);
      }else{
        $sql= $sql . " where `id`='$id'" ;
      }
//4-3.將query($sql)->fetch(PDO::FETCH_ASSOC)改為exec($sql)
    return $this->pdo->exec($sql);
}
public function save($ar){//新增或更新資料
    //5-1.將if...else涵式重新輸入，輸入$sql的語法
      if(isset($ar['id'])){//有id更新、沒有就新增
        //5-3.複製foreach，將$id改成$ar拆解
        foreach($ar as $key => $value){
          //5-4.加入if判斷讓id不要再次呈現
          if($key!='id')
          $tmp[]=sprintf("`%s`='%s'",$key,$value);
        }
        //雙引號內有單引號，其中一個需表示變數時，用{}區分
        //implode組合涵式，將條件設為,號針對$tmp涵式
          $sql="update $this->table set " . implode(',',$tmp) . "where `id`='{$ar['id']}'";
        }else{
          
          $sql="insert into $this->table (`" .implode("`,`",array_keys($ar)). "`) values('".implode("','",$ar)."') ";
      }
      //5-2.複製return值
    return $this->pdo->exec($sql);
}

}
function to($url){
    header("location:".$url);
}

// 第一題資料表根據後台管理的總數(9)共9張資料表
$Home=new DB('home');
$Ad=new DB('ad');
$Mvim=new DB('mvim');
$Image=new DB('image');
$Total=new DB('total');
$Bottom=new DB('bottom');
$News=new DB('news');
$Admin=new DB('admin');
$Menu=new DB('menu');

//增加累積人數
if(!isset($_SESSION['total'])){
  $total=$Total->find(1);
  $total['total']++;
  $Total->save(['id'=>1,'total'=>$total['total']]);
  $_SESSION['total']=1;
}
?>