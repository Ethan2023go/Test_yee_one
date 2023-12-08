<?php
// include_once "db.php";

// $total=$Total->find(1);
// $total['total']=$_POST['total'];
// $Total->save($total);
// to("../back.php?do=total");
// header("location:$url") 以包成 function

// $$ XXXX 可變變數


// 修改精簡後
include_once "db.php";
//取得資料表名稱
$table=$_POST['table'];

//將資料表名稱轉成首字大寫的資料表物件變數
$DB=${ucfirst($table)};

//取得id為1的資料
$data=$DB->find(1);

//將資料中對應的欄位修改為post過來的值
$data[$table]=$_POST[$table];

//使用save更新至資料表
$DB->save($data);
to("../back.php?do=$table");

?>