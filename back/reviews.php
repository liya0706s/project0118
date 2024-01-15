<link rel="stylesheet" href="../css/back_style.css">
<div class="container-fluid">
    <h1 class="text-center mt-3 mb-3">課程評論管理</h1>
    <hr>
    <form action="./api/edit.php" method="post">
        <table>
            <tbody>
                <tr>
                    <th class="">標題</th>
                    <th class="">次標題</th>
                    <th class="">敘述</th>
                    <th class="">圖片</th>
                    <th class="">顯示</th>
                    <th class="">刪除</th>
                </tr>
                <?php
                $rows=$Reviews->all();
                foreach($rows as $row){
                ?>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>


                <?php
                }
                ?>
            </tbody>
        </table>
    </form>
</div>