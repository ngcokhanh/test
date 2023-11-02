<?php
function insert_binhluan($noidung, $iduser, $idpro, $ngaybinhluan)
{
    $sql = "insert into binhluan(noidung,iduser,idpro,ngaybinhluan) values('$noidung', '$iduser', '$idpro', '$ngaybinhluan')";
    pdo_execute($sql);
}

function loadall_binhluan($idpro)
{
    $sql = "select * from binhluan where idpro='".$idpro."' order by id desc";
    $lisbinhluan = pdo_query($sql);
    return $lisbinhluan;
}

function loadall_binhluanadmin()
{
    $sql = "select * from binhluan";
    $lisbinhluan = pdo_query($sql);
    return $lisbinhluan;
}

function delete_binhluan($id){
    $sql="delete from binhluan where id=".$id;
    pdo_execute($sql);
}
?>