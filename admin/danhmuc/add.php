<div class="row">
            <div class="row frmtitle">
                <h1>Them moi loai hang</h1>
            </div>
            <div class="row frmcontent">
                <form action="index.php?act=adddm" method="post">

                    <div class="row mb10">
                        Ma Loai <br>
                        <input type="text" name="maloai" disabled>
                    </div>

                    <div class="row mb10">
                        Ten loai <br>
                        <input type="text" name="tenloai">
                    </div>

                    <div class="row mb10">
                        <input type="submit" value="them moi" name="themmoi">
                        <input type="reset" value="nhap lai">
                      <a href="index.php?act=lisdm"><input type="button" value="Danh sach"></a>  
                    </div>
                  <?php
                  if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
                  ?>


                </form>
            </div>
        </div>
    </div>