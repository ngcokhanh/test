<?php
include "../model/pdo.php";
include "../model/danhmuc.php";
include "../model/sanpham.php";
include "../model/taikhoan.php";
include "../model/binhluan.php";
include "../model/thongke.php";
include "header.php";
//controller

if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'adddm':
            //kiem tra nguoi dung co click vao nut add hay khong?
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $tenloai = $_POST['tenloai'];
                insert_danhmuc($tenloai);
                $thongbao = "them thanh cong";

            }
            include "danhmuc/add.php";
            break;
            
        case 'lisdm':
            $lisdanhmuc = loadall_danhmuc();
            include "danhmuc/list.php";
            break;

        case 'xoadm':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_danhmuc($_GET['id']);
            }
            $lisdanhmuc = loadall_danhmuc();
            include "danhmuc/list.php";
            break;

        case 'suadm':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $dm = loadone_danhmuc($_GET['id']);
            }
            include "danhmuc/update.php";
            break;

        case 'updatedm':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $tenloai = $_POST['tenloai'];
                $id = $_POST['id'];
                update_danhmuc($id, $tenloai);
                $thongbao = "cap nhat thanh cong";

            }
            $lisdanhmuc = loadall_danhmuc();
            include "danhmuc/list.php";
            break;

        //controler san pham

        case 'addsp':
            //kiem tra nguoi dung co click vao nut add hay khong?
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $iddm = $_POST['iddm'];
                $tensp = $_POST['tensp'];
                $giasp = $_POST['giasp'];
                $mota = $_POST['mota'];
                $hinh = $_FILES['hinh']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES['hinh']['name']);
                if (move_uploaded_file($_FILES['hinh']['tmp_name'], $target_file)) {
                    //echo ""the file"....
                } else {
                    //echo "sorry....
                }

                insert_sanpham($tensp, $giasp, $hinh, $mota, $iddm);
                $thongbao = "them thanh cong";

            }
            $lisdanhmuc = loadall_danhmuc();
            include "sanpham/add.php";
            break;

        case 'lissp':
            if (isset($_POST['listok']) && ($_POST['listok'])) {
                $kyw = $_POST['kyw'];
                $iddm = $_POST['iddm'];
            } else {
                $kyw = '';
                $iddm = 0;
            }
            $lisdanhmuc = loadall_danhmuc();
            $lissanpham = loadall_sanpham($kyw, $iddm);
            include "sanpham/list.php";
            break;

        case 'xoasp':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_sanpham($_GET['id']);
            }
            $lissanpham = loadall_sanpham("", 0);
            include "sanpham/list.php";
            break;

        case 'suasp':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $sanpham = loadone_sanpham($_GET['id']);
            }
            $lisdanhmuc = loadall_danhmuc();
            include "sanpham/update.php";
            break;

        case 'updatesp':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $id = $_POST['id'];
                $iddm = $_POST['iddm'];
                $tensp = $_POST['tensp'];
                $giasp = $_POST['giasp'];
                $mota = $_POST['mota'];
                $hinh = $_FILES['hinh']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES['hinh']['name']);
                if (move_uploaded_file($_FILES['hinh']['tmp_name'], $target_file)) {
                    //echo ""the file"....
                } else {
                    //echo "sorry....
                }
                update_sanpham($id, $iddm, $tensp, $giasp, $mota, $hinh);
                $thongbao = "cap nhat thanh cong";

            }
            $lisdanhmuc = loadall_danhmuc();
            $lissanpham = loadall_sanpham("", 0);
            include "sanpham/list.php";
            break;

        case 'dskh':
            $listaikhoan = loadall_taikhoan();
            include "taikhoan/list.php";
            break;

        case 'xoatk':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_taikhoan($_GET['id']);
            }
            $listaikhoan = loadall_taikhoan();
            include "taikhoan/list.php";
            break;

            case 'suatk':
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    $taikhoan = loadone_taikhoan($_GET['id']);
                }
                $listaikhoan = loadall_taikhoan();
                include "taikhoan/update.php";
                break;
    
            case 'updatetk':
                if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                    $id = $_POST['id'];
                    $user = $_POST['user'];
                    $pass = $_POST['pass'];
                    $email = $_POST['email'];
                    $address = $_POST['address'];
                    $tel = $_POST['tel'];
                    $role = $_POST['role'];
                   
                    update_taikhoan($id, $user, $pass, $email, $address, $tel, $role);
                    $thongbao = "cap nhat thanh cong";
    
                }
                $listaikhoan = loadall_taikhoan();
                // $lissanpham = loadall_sanpham("", 0);
                include "taikhoan/list.php";
                break;

                case 'dsbl':
                    $lisbinhluan = loadall_binhluanadmin();
                    include "binhluan/list.php";
                    break;

                case 'xoabl':
                    if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                        delete_binhluan($_GET['id']);
                        }
                        header('location:index.php?act=dsbl');
                    break;

                case 'addtk':
                    //kiem tra nguoi dung co click vao nut add hay khong?
                    if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                        $user = $_POST['user'];
                        $pass = $_POST['pass'];
                        $email = $_POST['email'];
                        $address = $_POST['address'];
                        $tel = $_POST['tel'];
                        $role = $_POST['role'];
    
        
                        insert_taikhoan_admin($user, $pass, $email,$address,$tel,$role);
                        $thongbao = "them thanh cong";
        
                    }
                    $listaikhoan = loadall_taikhoan();
                    include "taikhoan/add.php";
                    break;

                case 'thongke':
                    $listhongke = loadall_thongke();
                    include "thongke/list.php";
                    break;

                case 'bieudo':
                    $listhongke = loadall_thongke();
                    include "thongke/bieudo.php";
                    break;

    }
} else {
    include "home.php";
}


include "footer.php";
?>