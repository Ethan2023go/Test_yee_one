<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
    <p class="t cent botli">頁尾版權資料管理</p>
    <form method="post"  action="./api/edit_info.php">
        <!-- action執行後進入指定back這個檔案並使用iframe顯示這個頁面  -->
        <table style="width:50%;margin:auto">
            <tbody>
                <tr class="yel">
                <td width="50%">網站標題</td>
                <td width="50%">
                <input type="text" name="bottom" value="<?=$Bottom->find(1)['bottom'];?>">
                <input type="hidden" name="table" value="<?=$do;?>">                
                </tr>
            </tbody>
        </table>
        <table style="margin-top:40px; width:70%;margin:auto;">
            <tbody>
                <tr>
                    <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置"></td>
                </tr>
            </tbody>
        </table>

    </form>
</div>