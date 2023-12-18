<?php
@session_start();
if (isset($_SESSION["login"])) {


?>





<?php include "vendor/konek.php"; ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>edit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>

  <?php

  $data_barang = mysqli_query($kon,"SELECT * FROM tb_barang_masuk where ID_BARANG =".$_GET['id']);
  foreach ($data_barang as $key) { 
    $id = $key['ID_BARANG'];
    $nama = $key['NAMA_BARANG']; 
    $kategori = $key['KATEGORI_BARANG']; 
    $stok = $key['STOK_BARANG']; 
    $harga = $key['HARGA_BARANG_SATUAN']; 
    $tanggal = $key['TANGGAL_MASUK']; 
    $uploader = $key['UPLOADER'];
 
  } 
  ?> 
  <h1>
     <?= $nama; ?>
  </h1>

  <div id="liveAlertPlaceholder"></div> 
  
  <!-- form -->
	<h4 class="text-center m-3">Ubah Data Barang Masuk</h4>
	 <form action="vendor/sistem.php?id=<?=$id;?>" method="post" class="container rounded mt-3 p-3" 
	 style=" width:500px; border:solid black 2px; color: ;">
	 <input type="hidden" name="form" value="form2">
		<div class="mb-3"> 
			<label for="exampleInputEmail1" class="form-label">Nama Barang</label>
			<input type="text" value="<?= $nama; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
             name="enamaweb"> 
		</div>

		<div class="mb-3">
			<label for="exampleInputPassword1" class="form-label">Kategori Barang</label> 
			<input type="text" value="<?= $kategori; ?>" class="form-control" id="exampleInputPassword1" name="ekategoriweb">
		</div> 

		<div class="mb-3">
			<label for="exampleInputPassword1" class="form-label">Stok Barang</label>
			<input type="text" value="<?= $stok; ?>" class="form-control" id="exampleInputPassword1" name="estokweb">
		</div>

		<div class="mb-3">
			<label for="exampleInputPassword1" class="form-label">Harga Satuan</label>
			<input type="text" value="<?= $harga; ?>" class="form-control" id="exampleInputPassword1" name="ehargaweb">
		</div> 

		<div class="mb-3">
			<label for="exampleInputPassword1" class="form-label">Tanggal Barang Masuk</label>
			<input type="text" value="<?= $tanggal; ?>" class="form-control" id="exampleInputPassword1" name="etanggalweb">
		</div> 

		<div class="mb-3">
			<label for="exampleInputPassword1" class="form-label">Uploader</label>
			<input type="text" value="<?= $uploader; ?>" class="form-control" id="exampleInputPassword1" name="euploaderweb">
		</div> 

		
		<button type="submit" class="btn btn-outline-info" id="liveAlertBtn">Simpan</button>

</form>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" 
	integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    </body>
</html>

<?php
}else{
	header("location: login.php");
	exit();
}

?>
