<div class="row mb ">
    <div class="boxtrai mr">

        <div class="row mb">

            <div class="boxtitle">
                dang ky thanh vien
            </div>
            <div class="row boxcontent formtaikhoan">
                <form action="index.php?act=dangky" method="post">
                    <div class="row mb10">
                        email
                    <input type="email" name="email">
                    </div>
                    <div class="row mb10">
                        ten dang nhap
                    <input type="text" name="user">
                    </div>
                    <div class="row mb10">
                        mat khau
                    <input type="password" name="pass">
                    </div>
                    <input type="submit" value="dang ky" name="dangky">
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