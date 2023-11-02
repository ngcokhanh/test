<div class="row">
            <div class="row frmtitle">
                <h1>danh sach tai khoan</h1>
            </div>
            <div class="row frmcontent">

                <div class="row mb10 frmdsloai">
                    <table>
                        <tr>
                            <th></th>
                            <th>Ma tai khoan</th>
                            <th>ten dang nhap</th>
                            <th>mat khau</th>
                            <th>email</th>
                            <th>dia chi</th>
                            <th>dien thoai</th>
                            <th>vai tro</th>
                        </tr>
                            <?php
                                foreach($listaikhoan as $taikhoan){
                                    extract($taikhoan);
                                    $suatk="index.php?act=suatk&id=".$id;
                                    $xoatk="index.php?act=xoatk&id=".$id;

                                    echo '
                                    <tr>
                                    <td><input type="checkbox" name="" id=""></td>
                                    <td>'.$id.'</td>
                                    <td>'.$user.'</td>
                                    <td>'.$pass.'</td>
                                    <td>'.$email.'</td>
                                    <td>'.$address.'</td>
                                    <td>'.$tel.'</td>
                                    <td>'.$role.'</td>
                                    <td><a href="'.$suatk.'">
                                        <input type="button" value="sua"> 
                                        </a>
                                        <a href="'.$xoatk.'">
                                        <input type="button" value="xoa">
                                        </a>
                                    </td>
                                </tr>';
                                }

                                ?>

                    </table>
                </div>

                <div class="row mb10">
                    <input type="button" value="chon tat ca">
                    <input type="button" value="bo chon tat ca">
                    <input type="button" value="xoa cac muc da chon">
                    <a href="index.php?act=addtk"><input type="button" value="nhap them"></a>
                </div>
            </div>
        </div>