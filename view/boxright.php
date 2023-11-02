<div class="row mb">
    <div class="boxtitle">tai khoan</div>
    <div class="boxcontent formtaikhoan">
        <?php
        if (isset($_SESSION['user'])) {
            extract($_SESSION['user']);
            ?>
            <div class="row mb10">
                xin chao <br>
                <?= $user ?>
            </div>
            <div class="row mb10">
                <li><a href="index.php?act=quenmk">quen mat khau</a></li>
                <li><a href="index.php?act=edit_taikhoan">cap nhat tai khoan</a></li>
                <?php
                    if($role==1){
                ?>
                <li><a href="admin/index.php">dang nhap admin</a></li>
                <?php
                    }
                ?>
                <li><a href="index.php?act=thoat">dang xuat</a></li>

            </div>

            <?php
        } else {

            ?>

            <form action="index.php?act=dangnhap" method="post">
                <div class="row mb10">
                    ten dang nhap <br>
                    <input type="text" name="user" id="">
                </div>
                <div class="row mb10">
                    mat khau <br>
                    <input type="password" name="pass">
                </div>
                <div class="row mb10">
                    <input type="checkbox">ghi nho tai khoan ?
                </div>
                <div class="row mb10">
                    <input type="submit" value="dang nhap" name="dangnhap">
                </div>
            </form>
            <li><a href="#">quen mat khau</a></li>
            <li><a href="index.php?act=dangky">dang ky thanh vien</a></li>
        <?php } ?>
    </div>
</div>
<div class="row mb">
    <div class="boxtitle">danh muc</div>
    <div class="boxcontent2 menudoc">
        <ul>
            <?php
            foreach ($dsdm as $dm) {
                # code...
                extract($dm);
                $linkdm = "index.php?act=sanpham&iddm=" . $id;
                echo '<li><a href="' . $linkdm . '">' . $name . '</a></li>';
            }
            ?>
            <!-- <li><a href="#">dong ho</a></li>
                    <li><a href="#">laptop</a></li>
                    <li><a href="#">dien thoai</a></li>
                    <li><a href="#">ba lo</a></li>
                    <li><a href="#">dong ho</a></li>
                    <li><a href="#">laptop</a></li>
                    <li><a href="#">dien thoai</a></li>
                    <li><a href="#">ba lo</a></li> -->
        </ul>
    </div>
    <div class="boxfooter searbox">
        <form action="index.php?act=sanpham" method="post">
            <input type="text" name="kyw">
            <input type="submit" name="timkiem" value="tim kiem">
        </form>
    </div>
</div>
<div class="row">
    <div class="boxtitle">top 10 ua thich</div>
    <div class="row boxcontent">
        <?php
        foreach ($dstop10 as $sp) {
            # code...
            extract($sp);
            $linksp = "index.php?act=sanphamct&idsp=" . $id;
            $img = $img_path . $img;
            echo '<div class="row mb10 top10">
                        <img src="' . $img . '" alt="">
                        <a href="' . $linksp . '">' . $name . '</a>
                    </div>
    ';
        }
        ?>
        <!-- <div class="row mb10 top10">
                    <img src="#" alt="">
                    <a href="#">sir rodned's marmalade</a>
                </div>

                <div class="row mb10 top10">
                    <img src="#" alt="">
                    <a href="#">kjnjakla</a>
                </div>

                <div class="row mb10 top10">
                    <img src="#" alt="">
                    <a href="#">sas,mnjansfdaf</a>
                </div>

                <div class="row mb10 top10">
                    <img src="#" alt="">
                    <a href="#">asfnl;;q lqmva</a>
                </div>

                <div class="row mb10 top10">
                    <img src="#" alt="">
                    <a href="#">akmkflalk akmvkna</a>
                </div>

                <div class="row mb10 top10">
                    <img src="#" alt="">
                    <a href="#">sir kjabsdalade</a>
                </div>

                <div class="row mb10 top10">
                    <img src="#" alt="">
                    <a href="#">ooapnv</a>
                </div>

                <div class="row mb10 top10">
                    <img src="#" alt="">
                    <a href="#">sas,qnoc aooqlsn</a>
                </div>

                <div class="row mb10 top10">
                    <img src="#" alt="">
                    <a href="#">iuanjwi;;q lqmva</a>
                </div>

                <div class="row mb10 top10">
                    <img src="#" alt="">
                    <a href="#">ambatokam kwno</a>
                </div> -->


    </div>