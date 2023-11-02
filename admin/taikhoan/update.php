<div class="row">
    <div class="row frmtitle">
        <h1>cap nhat tai khoan</h1>
    </div>
    <div class="row frmcontent">
        <form action="index.php?act=updatetk" method="post" enctype="multipart/form-data">

   
            <?php
            if (is_array($taikhoan)) {
                extract($taikhoan);
            }
            ?>
            <div class="row mb10">
                user name<br>
                <input type="text" name="user" value="<?php echo $user ?>">
            </div>

            <div class="row mb10">
                mat khau<br>
                <input type="text" name="pass" value="<?php echo $pass ?>">
            </div>

            <div class="row mb10">
                email<br>
                <input type="email" name="email" value="<?php echo $email?>">
            </div>

            <div class="row mb10">
                dia chi<br>
                <input type="text" name="address" value="<?php echo $address?>">
            </div>

            <div class="row mb10">
                dien thoai<br>
                <input type="text" name="tel" value="<?php echo $tel?>">
            </div>

            <div class="row mb10">
                vai tro (role)<br>
                <input type="text" name="role" value="<?php echo $role?>">
            </div>

            <div class="row mb10">
                <input type="hidden" name="id" value="<?php echo $id ?>">
                <input type="submit" value="cap nhat" name="capnhat">
                <input type="reset" value="nhap lai">
                <a href="index.php?act=listk"><input type="button" value="Danh sach"></a>
            </div>
            <?php
            if (isset($thongbao) && ($thongbao != ""))
                echo $thongbao;
            ?>


        </form>
    </div>
</div>
</div>