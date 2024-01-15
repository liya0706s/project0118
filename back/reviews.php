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
                $rows = $Reviews->all();
                foreach ($rows as $row) {
                ?>
                    <tr>
                        <td>
                            <input type="text" name="title[]" value="<?= $row['title']; ?>">
                            <input type="hidden" name="id[]" value="<?= $row['id']; ?>">
                            <!-- 隱藏的id才知道是哪一筆對應的title, subtitle和圖片 -->
                        </td>
                        <td><input type="text" name="subti[]" value="<?= $row['subti']; ?>"></td>
                        <td><input type="text" name="review[]" value="<?= $row['review']; ?>"></td>
                        <td>
                            <img src="./img/<?= $row['img']; ?>">
                        </td>
                        <td>
                            <input type="checkbox" name="sh[]" value="<?= $row['id']; ?>" <?= ($row['sh'] == 1) ? 'checked' : ''; ?>>
                        </td>
                        <td>
                            <input type="checkbox" name="del[]" value="<?= $row['id']; ?>">
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
        <table>
            <tbody>
                <tr>
                    <td>
                        <input type="submit" value="修改確定">
                        <input type="reset" value="重置">
                    </td>
                </tr>
            </tbody>
        </table>


    </form>
</div>