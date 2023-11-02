<div class="row">
            <div class="row frmtitle mb">
                <h1>quan ly binh luan</h1>
            </div>
            <div class="row frmcontent">

                <div class="row mb10 frmdsloai">
                   
                    <table>
                        <tr>
                            <th>id</th>
                            <th>noi dung</th>
                            <th>id nguoi dung</th>
                            <th>id mat hang</th>
                            <th>ngay binh luan</th>
                        </tr>
                            <?php
                                foreach($lisbinhluan as $binhluan){
                                    extract($binhluan);
                                   
                                    $xoabl="index.php?act=xoabl&id=".$id;
                                
                                    echo '
                                    <tr>
                                    <td>'.$id.'</td>
                                    <td>'.$noidung.'</td>
                                    
                                    <td>'.$iduser.'</td>
                                    <td>'.$idpro.'</td>

                                    <td>'.$ngaybinhluan.'</td>
                                    <td>
                                        <a href="'.$xoabl.'">
                                        <input type="button" value="xoa">
                                        </a>
                                    </td>
                                </tr>';
                                }

                                ?>

                    </table>
                </div>

            </div>
        </div>