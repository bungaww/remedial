<?php

include "konek.php";

$del = $_GET['del'];
// echo $del;

$hapus = "DELETE from tb_barang_masuk WHERE ID_BARANG=".$del;

mysqli_query($kon,$hapus);
header("location:../index.php");


?>