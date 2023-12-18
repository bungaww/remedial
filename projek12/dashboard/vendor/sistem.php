<?php
include "konek.php";

if (isset($_POST["form"])) {
    $form = $_POST["form"];
    
    if ($form === "form1") {
        include("index.php");


$nama = $_POST['namaweb'];
$kategori = $_POST['kategoriweb'];
$stok = $_POST['stokweb'];
$harga = $_POST['hargaweb'];
$tanggal = $_POST['tanggalweb'];
$uploader = $_POST['uploaderweb'];

// echo $nama.", ".$kategori.", ".$stok.", ".$harga.", ".$tanggal.", ".$uploader; 

$sql = "INSERT INTO tb_barang_masuk (NAMA_BARANG,KATEGORI_BARANG,STOK_BARANG,HARGA_BARANG_SATUAN,TANGGAL_MASUK,UPLOADER)
VALUES('$nama','$kategori','$stok','$harga','$tanggal','$uploader')";
mysqli_query($kon, $sql);

header ("location:../index.php");

}elseif ($form === "form2") {
    include("edit.php");


$id = $_GET['id'];
$enama = $_POST['enamaweb'];
$ekategori = $_POST['ekategoriweb'];
$estok = $_POST['estokweb'];
$eharga = $_POST['ehargaweb'];
$etanggal = $_POST['etanggalweb'];
$euploader = $_POST['euploaderweb'];

$edit = "UPDATE tb_barang_masuk SET NAMA_BARANG='".$enama."', KATEGORI_BARANG='".$ekategori."', STOK_BARANG='".$estok."',
HARGA_BARANG_SATUAN='".$eharga."', TANGGAL_MASUK='".$etanggal."', UPLOADER='".$euploader."' WHERE ID_BARANG =".$id ; 

mysqli_query($kon, $edit);

header ("location:../index.php");

} else {
    echo "tidak ditemukan";
}

} else {
echo "tentukan dengan parameter 'form'.";
}s




?>