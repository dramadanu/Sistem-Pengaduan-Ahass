<?php

require '../database.php';
session_start();
if ($_SESSION['log'] != "logged") {
	header('location:../login.php');
}

// var_dump($_SESSION['idUser']);

$email = $_SESSION['username'];
$idUser = $_SESSION['idUser'];
$user = mysqli_query($conn, "SELECT * FROM tb_user where email = '$email' ");
$fuser = mysqli_fetch_array($user);

$result = mysqli_query($conn, "SELECT * FROM tb_complaint where id_user = $idUser");

if (isset($_POST['submit'])) {
	// Ambil nilai dari formulir
	$id_user = $_POST['id_user']; // ID pengguna dari session
	$complaint = $_POST['complaint']; // Keluhan dari formulir
	$date = date('Y-m-d');

	// Proses file yang diunggah (jika diperlukan)
	if ($_FILES['photo']['name'] !== '') {
		$file_name = $_FILES['photo']['name'];
		$file_temp = $_FILES['photo']['tmp_name'];
		$file_size = $_FILES['photo']['size'];
		$file_error = $_FILES['photo']['error'];

		// Lakukan validasi, pemrosesan, atau penyimpanan file yang diunggah
		// Misalnya, pindahkan file ke direktori yang diinginkan dan simpan nama file di database
		// Contoh:
		$upload_directory = '../complaint-images/'; // Ganti dengan direktori penyimpanan yang diinginkan
		$target_file = $upload_directory . basename($file_name);

		if (move_uploaded_file($file_temp, $target_file)) {
			// File berhasil diunggah, lakukan tindakan yang sesuai (misalnya, simpan nama file di database)
			$sql = mysqli_query($conn, "INSERT INTO tb_complaint values('', $id_user, '$complaint', '$file_name', 'pending', '$date')");
			if ($sql) {
				header('location: index.php');
			}
			// Sesuaikan dengan kebutuhan aplikasi Anda
		} else {
			// Jika gagal mengunggah file, handle kesalahan di sini
			echo "Gagal mengunggah file.";
		}
	}

	// Selanjutnya, gunakan nilai yang diambil dari formulir sesuai kebutuhan Anda.
	// Misalnya, lakukan penyimpanan data ke database dengan nilai $id_user dan $complaint.

	// Setelah melakukan proses yang diperlukan, bisa redirect ke halaman lain atau tampilkan pesan sukses.
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Potenza - Job Application Form Wizard with Resume upload and Branch feature">
	<meta name="author" content="Ansonika">
	<title>AHM HONDA SERVICE</title>

	<!-- Favicons-->
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/honda.png">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/honda.png">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/honda.png">

	<!-- GOOGLE WEB FONT -->
	<link href="https://fonts.googleapis.com/css?family=Work+Sans:400,500,600" rel="stylesheet">


	<!-- BASE CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link href="css/menu.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link href="css/vendors.css" rel="stylesheet">

	<!-- YOUR CUSTOM CSS -->
	<link href="css/custom.css" rel="stylesheet">

	<!-- MODERNIZR MENU -->
	<script src="js/modernizr.js"></script>

</head>

<body>

	<div class="container-fluid">
		<div class="row row-height">
			<div class="col-xl-4 col-lg-4 content-left">
				<div class="content-left-wrapper">
					<div>
						<figure><img src="img/honda.png" alt="" class="img-fluid" width="270" height="270"></figure>
						<h2>AHM HONDA OFFICIAL SERVICE</h2>
						<p>Tation argumentum et usu, dicit viderer evertitur te has. Eu dictas concludaturque usu, facete detracto patrioque an per, lucilius pertinacia eu vel.</p>
						<a href="../index.php" class="btn_1 rounded yellow">Home</a>
						<a href="#start" class="btn_1 rounded mobile_btn yellow">Start Now!</a>
					</div>
					<div class="copy">© 2023</div>
				</div>
				<!-- /content-left-wrapper -->
			</div>
			<!-- /content-left -->
			<div class="col-xl-8 col-lg-8 content-right" id="start">
				<div id="container">
					<div class="biodata">
						<div class="card">
							<div class="card-header">
								Data Account
							</div>
							<div class="card-body">
								<h5 class="card-title">Halo, Selamat Datang di Halaman User Pelanggan</h5>
								<p class="card-text"></p>
								<table class="table">
									<tr>
										<td>Nama</td>
										<td>:</td>
										<td><?= $fuser['name'] ?></td>
									</tr>
									<tr>
										<td>Email</td>
										<td>:</td>
										<td><?= $fuser['email'] ?></td>
									</tr>
									<tr>
										<td>Alamat</td>
										<td>:</td>
										<td><?= $fuser['address'] ?></td>
									</tr>
									<tr>
										<td>Nomor Telephone</td>
										<td>:</td>
										<td><?= $fuser['telephone'] ?></td>
									</tr>
								</table>
								<button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModal">
									Tambahkan Laporan
								</button>
								<a href="../logout.php" class="btn btn-outline-danger btn-sm">
									Logout
								</a>
							</div>
						</div>
					</div>
					<div class="data">
						<h4>Status Laporan Anda</h4>

						<table class="table table-borderless">
							<thead>
								<tr>
									<th scope="col">Photo</th>
									<th scope="col">Keluhan</th>
									<th scope="col">Tanggal</th>
									<th scope="col">Status</th>
								</tr>
							</thead>
							<?php while ($row = mysqli_fetch_assoc($result)) : ?>
								<tr>
									<td><img class="rounded" width="100px" src="../complaint-images/<?= $row["photo"]; ?>" alt="" srcset=""></td>
									<td><?= $row["complaint"]; ?></td>
									<td><?= $row["date"]; ?></td>
									<td>
										<?php
										$status = $row['status'];
										$class = '';

										// Atur kelas berdasarkan status
										switch ($status) {
											case 'pending':
												$class = 'bg-warning text-white'; // Warna kuning sebagai pending
												break;
											case 'sedang diproses':
												$class = 'bg-primary text-white'; // Warna biru sebagai sedang diproses
												break;
											case 'selesai diproses':
												$class = 'bg-success text-white'; // Warna hijau sebagai selesai diproses
												break;
											default:
												$class = 'bg-secondary text-white'; // Warna abu-abu untuk status lainnya
												break;
										}
										?>
										<span class="badge <?= $class; ?>"><?= $status; ?></span>
									</td>
								</tr>
							<?php endwhile; ?>
					</div>
					</form>
				</div>
				<!-- /Wizard container -->
			</div>
			<!-- /content-right-->
		</div>
		<!-- /row-->
	</div>
	<!-- /container-fluid -->


	<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form method="post" action="" enctype="multipart/form-data">
						<!-- Leave for security protection, read docs for details -->
						<div id="middle-wizard">
							<div class="step">
								<h2 class="section_title">Form Pengaduan</h2>
								<h3 class="main_question">Isikan Keluhan Anda</h3>
								<input type="text" name="id_user" value="<?= $_SESSION['idUser'] ?>">
								<div class="form-group">
									<label for="complaint">Keluhan</label>
									<textarea name="complaint" id="complaint" cols="30" rows="3" class="form-control"></textarea>
								</div>
								<div class="form-group">
									<label for="complaint">Keluhan</label>
									<input type="file" name="photo" id="photo" class="form-control">
								</div>
								<div class="form-button">
									<button type="submit" class="submit" id="submit" name="submit">Submit</button>
								</div>
							</div>
					</form>
				</div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
	</div>


	<div class="cd-overlay-nav">
		<span></span>
	</div>
	<!-- /cd-overlay-nav -->

	<div class="cd-overlay-content">
		<span></span>
	</div>
	<!-- /cd-overlay-content -->

	<!-- COMMON SCRIPTS -->
	<script src="js/jquery-3.7.1.min.js"></script>
	<script src="js/common_scripts.min.js"></script>
	<script src="js/velocity.min.js"></script>
	<script src="js/common_functions.js"></script>
	<script src="js/file-validator.js"></script>


	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

<!-- Wizard script-->
<script src="js/func_1.js"></script>

</body>

</html>