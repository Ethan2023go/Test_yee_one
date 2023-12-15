<?php include_once "db.php";

if(isset($_POST['id'])){
    foreach($_POST['id'] as $idx => $id){
        if(isset($_POST)['del'] && in_array($id,$_POST['del'])){
            $Menu->del($id);
        }else{
            $row=$Menu->find($id);
            $row=['text']
            
        } 
    }
}

if(isset($_POST['add_text'])){
    foreach($_POST['add_text'] as $idx => $text){

    }
}

to("../back.php?do=menu");

?>