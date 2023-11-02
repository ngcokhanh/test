<div class="row">
            <div class="row frmtitle">
                <h1>Them moi tai khoan</h1>
            </div>
            <div class="row frmcontent">
                <form action="index.php?act=addtk" method="POST" enctype="multipart/form-data">

                    <div class="row2 mb10">
                        <label for="">user name</label><br>
                        <input type="text" name="user">
                    </div>

                    <div class="row mb10">
                        pass<br>
                        <input type="text" name="pass">
                    </div>

                    <div class="row mb10">
                        email<br>
                        <input type="email" name="email">
                    </div>

                    <div class="row mb10">
                        dia chi<br>
                      <input type="text" name="address">
                    </div>

                    <div class="row mb10">
                        dien thoai<br>
                      <input type="text" name="tel">
                    </div>

                    <div class="row mb10">
                        vai tro<br>
                      <input type="text" name="role">
                    </div>

                    <div class="row mb10">
                        <input type="submit" value="them moi" name="themmoi">
                        <input type="reset" value="nhap lai">
                      <a href="index.php?act=dskh"><input type="button" value="Danh sach"></a>  
                    </div>
                  <?php
                  if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
                  ?>


                </form>
            </div>
        </div>
    </div>