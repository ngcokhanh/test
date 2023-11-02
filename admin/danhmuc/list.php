<div class="row">
            <div class="row frmtitle">
                <h1>quan ly loai hang</h1>
            </div>
            <div class="row frmcontent">

                <div class="row mb10 frmdsloai">
                    <table>
                        <tr>
                            <th></th>
                            <th>Ma loai</th>
                            <th>Ten loai</th>
                            <th></th>
                        </tr>
                            <?php
                                foreach($lisdanhmuc as $danhmuc){
                                    extract($danhmuc);
                                    $suadm="index.php?act=suadm&id=".$id;
                                    $xoadm="index.php?act=xoadm&id=".$id;

                                    echo '
                                    <tr>
                                    <td><input type="checkbox" name="" id=""></td>
                                    <td>'.$id.'</td>
                                    <td>'.$name.'</td>
                                    <td><a href="'.$suadm.'">
                                        <input type="button" value="sua"> 
                                        </a>
                                        <a href="'.$xoadm.'">
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
                    <a href="index.php?act=adddm"><input type="button" value="nhap them"></a>
                </div>
            </div>
        </div>