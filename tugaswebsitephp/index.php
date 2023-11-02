<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Php CRUD Maieka </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Website CRUD</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <ul class="navbar-nav ms-auto 2">
      <div class="navbar-nav">
        <a class="nav-link  active" aria-current="page" href="index.php">Product</a>
        <a class="nav-link active" aria-current="page" href="tambahcustomer.php">Custumer</a>
        <a class="nav-link active" aria-current="page" href="#">Order</a>
      </div>
    </div>
  </div>
</nav>
</body>
</html>
<div class="container col-md-6 mt-4">
		<h1></h1>
		<div class="card">
			<div class="card-header bg-success text-white">
				Data Product
			</div>
      <div class="card-body">
        <a href="tambahproduk.php" class="btn btn-md btn-success" style="margin-bottom: 10px">+ TAMBAH DATA</a>
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>No</th>
							<th>Nama</th>
							<th>Price</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php
							include('koneksi.php'); //memanggil file koneksi
							$data = mysqli_query($conn, "select * from product") or die(mysqli_error($conn));
							//script untuk menampilkan data barang

							$no = 1;//untuk pengurutan nomor

							//melakukan perulangan
							while($row = mysqli_fetch_assoc($data)) {
						?>	

					<tr>
						<td><?= $no; ?></td>
						<td><?= $row['name']; //untuk menampilkan nama ?></td>
						<td>Rp <?= $row['price']; ?></td>
						<td>
								<a href="edit.php?id=<?= $row['id']; ?>" class="btn btn-sm btn-warning">Edit</a>
								<a href="hapus.php?id=<?= $row['id']; ?>" class="btn btn-sm btn-danger">Hapus</a>
						</td>
					</tr>

						<?php $no++; } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
  <br>
  <br>
  <br>
  <br>
  <br>
<!-- Copyright -->
<div class="text-center p-3" style="background-color: #0dcaf0">
   By Maieka Sari istiqomah
  </div>
  <!-- Copyright -->
