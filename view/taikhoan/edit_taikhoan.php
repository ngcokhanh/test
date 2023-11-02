<div class="row mb ">
    <div class="boxtrai mr">

        <div class="row mb">

            <div class="boxtitle">
                cap nhat tai khoan
            </div>
            <div class="row boxcontent formtaikhoan">
                <?php
                    if(isset($_SESSION['user'])&&(is_array($_SESSION['user']))){
                        extract($_SESSION['user']);

                    }
                ?>
                <form action="index.php?act=edit_taikhoan" method="post">
                    <div class="row mb10">
                        email
                    <input type="email" name="email" value="<?=$email?>">
                    </div>
                    <div class="row mb10">
                        ten dang nhap
                    <input type="text" name="user" value="<?=$user?>">
                    </div>
                    <div class="row mb10">
                        mat khau
                    <input type="password" name="pass" value="<?=$pass?>">
                    </div>
                    <div class="row mb10">
                        dia chi
                    <input type="text" name="address" value="<?=$address?>">
                    </div>
                    <div class="row mb10">
                        dien thoai
                    <input type="text" name="tel" value="<?=$tel?>">
                    </div>

                    <input type="hidden" name="id" value="<?=$id?>">
                    <input type="submit" value="cap nhat" name="capnhat">
                    <input type="reset" value="nhap lai">

                </form>
                <h2 class="thongbao">
                <?php 
                    if(isset($thongbao)&&($thongbao!="")){
                        echo $thongbao;
                    }
                ?>
                </h2>
            </div>
        </div>


    </div>
    <div class="boxphai">
    <?php
    include "view/boxright.php";
    ?>
</div>
</div>

</div>