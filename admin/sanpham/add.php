<div class="row">
            <div class="row frmtitle">
                <h1>Them moi san pham</h1>
            </div>
            <div class="row frmcontent">
                <form action="index.php?act=addsp" method="POST" enctype="multipart/form-data">

                    <div class="row mb10">
                        danh muc <br>
                        <select name="iddm">
                            <?php 
                                foreach($lisdanhmuc as $danhmuc){
                                    extract($danhmuc);
                                    echo '<option value="'.$id.'">'.$name.'.</option>.';
                                }
                            ?>
                        </select>
                    </div>

                    <div class="row2 mb10">
                        <label for="">Ten san pham</label><br>
                        <input type="text" name="tensp">
                    </div>

                    <div class="row mb10">
                        Gia<br>
                        <input type="text" name="giasp">
                    </div>

                    <div class="row mb10">
                        Hinh<br>
                        <input type="file" name="hinh">
                    </div>

                    <div class="row mb10">
                        Mo ta<br>
                        <textarea class="row" name="mota" cols="30" rows="10"></textarea>
                    </div>

                    <div class="row mb10">
                        <input type="submit" value="them moi" name="themmoi">
                        <input type="reset" value="nhap lai">
                      <a href="index.php?act=lissp"><input type="button" value="Danh sach"></a>  
                    </div>
                  <?php
                  if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
                  ?>


                </form>
            </div>
        </div>
    </div>