<?php
@session_start();
if (isset($_SESSION["login"])) {


?>






<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
  <div id="liveAlertPlaceholder"></div>

  <!-- form -->
	<h4 class="text-center m-3">Input Data Barang Masuk</h4>
	 <form action="vendor/sistem.php" method="post" class="container rounded mt-3 p-3" 
	 style=" width:500px; border:solid black 2px; color: ;"> 
	 <input type="hidden" name="form" value="form1">
		<div class="mb-3"> 
			<label for="exampleInputEmail1" class="form-label">Nama Barang</label>
			<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="namaweb"> 
		</div>
		<div class="mb-3">
			<label for="exampleInputPassword1" class="form-label">Kategori Barang</label>
			<input type="text" class="form-control" id="exampleInputPassword1" name="kategoriweb">
		</div> 
		<div class="mb-3">
			<label for="exampleInputPassword1" class="form-label">Stok Barang</label>
			<input type="text" class="form-control" id="exampleInputPassword1" name="stokweb">
		</div>
		<div class="mb-3">
			<label for="exampleInputPassword1" class="form-label">Harga Satuan</label>
			<input type="text" class="form-control" id="exampleInputPassword1" name="hargaweb">
		</div> 
		<div class="mb-3">
			<label for="exampleInputPassword1" class="form-label">Tanggal Barang Masuk</label>
			<input type="text" class="form-control" id="exampleInputPassword1" name="tanggalweb">
		</div> 
		<div class="mb-3">
			<label for="exampleInputPassword1" class="form-label">Uploader</label>
			<input type="text" class="form-control" id="exampleInputPassword1" name="uploaderweb">
		</div> 

		
		<button type="submit" class="btn btn-outline-info" id="liveAlertBtn">Simpan</button>

		
	</form> 
<!-- form end -->

<!-- alert -->


<!-- alert end -->

<?php include "vendor/konek.php"; ?> 

	<div class="container"> 
		<h4 class="text-center m-3">Tabel Barang Masuk</h4>

		<table class="table table-bordered table-info text-center">
 
 	    	<tr class="table table-light">
 				<td>Id Barang</td>
 				<td>Nama Barang</td>
 				<td>Kategori Barang</td>
				<td>Stok Barang</td>
 				<td>Harga Satuan</td>
 				<td>Tanggal Barang Masuk</td>
 				<td>Uploader</td>
				<td>Action</td>

 			</tr>

 	    	<?php
 	    		$sql = "SELECT * FROM tb_barang_masuk";

 	    		$ambil = mysqli_query($kon,$sql);
				$nomorurut=0;
 	    		foreach ($ambil as $key) {
					$nomorurut ++;
 	    			$id = $key['ID_BARANG'];
 	    			$nama = $key['NAMA_BARANG'];
					$kategori = $key['KATEGORI_BARANG'];
 	    			$stok = $key['STOK_BARANG'];
 	    			$harga = $key['HARGA_BARANG_SATUAN'];
 	    			$tanggal = $key['TANGGAL_MASUK'];
 	    			$uploader = $key['UPLOADER'];

 	    		
 			
 			 ?>

 			 <tr>
 				<td><?= $nomorurut; ?></td>
 				<td><?= $nama; ?></td> 
				<td><?= $kategori; ?></td> 
 				<td><?= $stok; ?></td>
 				<td><?= $harga; ?></td>
 				<td><?= $tanggal; ?></td>
 				<td> <?= $uploader; ?></td> 
				<td>
					<button type="submit" class="btn btn-outline-warning"> 
					<a href="edit.php?id=<?=$id?>" style="text-decoration: none; color:red;">edit</button></a>

					<button type="submit" class="btn btn-outline-warning"> 
					<a href="vendor/delete.php?del=<?=$id?>" style="text-decoration: none; color:red;">delete</button></a>
				</td>
 			</tr>

			<?php }; ?> 
		</table>
	</div>	
      
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" 
	integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

	<!-- <script>
		const alertPlaceholder = document.getElementById('liveAlertPlaceholder')
const appendAlert = (message, type) => {
  const wrapper = document.createElement('div')
  wrapper.innerHTML = [
    `<div class="alert alert-${type} alert-dismissible" role="alert">`,
    `   <div>${message}</div>`,
    '   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>',
    '</div>'
  ].join('')

  alertPlaceholder.append(wrapper)
}

const alertTrigger = document.getElementById('liveAlertBtn')
if (alertTrigger) {
  alertTrigger.addEventListener('click', () => {
    appendAlert('Nice, you triggered this alert message!', 'success')
  })
}

	</script> -->
  </body>
</html>

<?php
}else{
	header("location: login.php");
	exit();
}

?>


