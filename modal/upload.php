<?php
switch($_GET['table']){
    case "title":
    echo "<td>更新網站標題圖片</td>";
    break;
    case "mvim":
    echo "<td>更換動畫圖片</td>";
    break;
    case "image":
    echo "<td>校園映像圖片</td>";
    break;
    
}
?>


<h3>更新網站標題圖片</h3>
<h3>更換動畫圖片</h3>
<hr>
<form action="./api/update.php" method="post" enctype="multipart/form-data">
<table>
    <tr>
        <td>標題區圖片</td>
        <td><input type="file" name="img" id=""></td>
    </tr>
    </table>
    <div>
        <input type="hidden" name="table" value="<?=$_GET['table'];?>">
        <input type="hidden" name="id" value="<?=$_GET['id'];?>">
        <input type="submit" value="更新">
        <input type="reset" value="重置">
    </div>
</form>