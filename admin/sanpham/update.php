<div class="row">
    <div class="row frmtitle">
        <h1>cap nhat san pham</h1>
    </div>
    <div class="row frmcontent">
        <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">

            <div class="row mb10">
                <select name="iddm">
                    <?php
                    foreach ($lisdanhmuc as $danhmuc) {
                        extract($danhmuc);
                        ?>
                        <option <?php echo $sanpham['iddm'] == $id ? "selected" : '' ?> value="<?php echo $id ?>">
                            <?php echo $name ?>
                        </option>
                        <?php
                    }
                    ?>
                </select>
            </div>
            <?php
            if (is_array($sanpham)) {
                extract($sanpham);
            }
            $hinhpath = "../upload/" . $img;
            if (is_file($hinhpath)) {
                $hinh = "<img src='" . $hinhpath . "' height='80'>";
            } else {
                $hinh = "no photo";
            }
            ?>
            <div class="row mb10">
                Ten san pham<br>
                <input type="text" name="tensp" value="<?php echo $name ?>">
            </div>

            <div class="row mb10">
                Gia<br>
                <input type="text" name="giasp" value="<?php echo $price ?>">
            </div>

            <div class="row mb10">
                Hinh<br>
                <input type="file" name="hinh">

                <?= $hinh ?>
            </div>

            <div class="row mb10">
                Mo ta<br>
                <textarea name="mota" cols="30" rows="10"><?= $mota ?></textarea>
            </div>

            <div class="row mb10">
                <input type="hidden" name="id" value="<?php echo $id ?>">
                <input type="submit" value="cap nhat" name="capnhat">
                <input type="reset" value="nhap lai">
                <a href="index.php?act=lissp"><input type="button" value="Danh sach"></a>
            </div>
            <?php
            if (isset($thongbao) && ($thongbao != ""))
                echo $thongbao;
            ?>


        </form>
    </div>
</div>
</div>