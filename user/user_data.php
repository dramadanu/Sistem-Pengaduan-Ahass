<?php
	session_start();
	if ($_SESSION['level'] != "user"){
		header("location: login.php");
	} 
?>

<?php
$conn = mysqli_connect("localhost", "root", "", "sistem-service");

if(isset($_POST["forward"])){
	$name = $_POST["name"];
	$complaint = $_POST["keluhan"];
	$photo = $_POST["image"];

	$sql = mysqli_query($conn, "INSERT INTO tb_keluhan VALUES('', '$name', '$keluhan', '$photo')");

    if ($sql){
        echo "<script>
                alert('Registrasi Berhasil');
              </script>";
    } 
 
} 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="MAVIA - Register, Reservation, Questionare, Reviews form wizard">
    <meta name="author" content="Ansonika">
    <title>Dashboard User</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114"
        href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144"
        href="img/apple-touch-icon-144x144-precomposed.png">

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;400;700&display=swap"
        rel="stylesheet">

    <!-- BASE CSS -->
    <link href="css/bootstrap (2).min.css" rel="stylesheet">
    <link href="css/style (2).css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <link href="css/menu (2).css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/icon_fonts/css/all_icons_min.css" rel="stylesheet">
    <link href="css/skins/square/grey.css" rel="stylesheet">


    <!-- YOUR CUSTOM CSS -->
    <link href="css/custom.css" rel="stylesheet">

    <script src="js/modernizr.js"></script>
    <!-- Modernizr -->

</head>

<body>



    <header>
        <div class="container-fluid">
            <div class="row">
                <div class="col-3">
                    <div id="logo_home">
                        <h1><a href="index.html">MAVIA | Register, Reservation, Questionare, Reviews form wizard</a>
                        </h1>
                    </div>
                </div>
                <div class="col-9">
                    <!-- /social -->
                    <nav>
                        <ul class="cd-primary-nav">
                            <li><a href="index.php" class="animated_link">SPM</a></li>
                            <li><a href="surat_pernyataan.php" class="animated_link">Surat Pernyataan</a></li>
                            <li><a href="sptjm.php" class="animated_link">SPTJM(surat pernyataan tanggung jawab
                                    Mutlak)</a></li>
                            <li><a href="lembar_penelitian.php" class="animated_link">Lembar Penelitian</a></li>
                            <li><a href="pajak_ppn.php" class="animated_link">Pajak PPN</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- container -->
    </header>
    <!-- End Header -->

    <main style="background: white; min-height: 100vh; padding-top: 55px">
        <div class="container" style="background: white;">
            <div class="row">
                <div class="col-lg-12">

                    <div id="wizard_container">
                        <div id="top-wizard">
                            <div id="progressbar"></div>
                        </div>
                        <!-- /top-wizard -->
                        <div class="biodata">
                            <p>Halo Anda Login Sebagai : <a href="logout.php">Logout?</a></p> 
                            
                            <table class="table table-borderless">
                                <?php
									include "koneksi.php";
									$id_user = $_SESSION["id"];
									$sql = mysqli_query($conn, "SELECT * from tb_user where id = $id_user");
									$fetch = mysqli_fetch_array($sql);
								?>
                                <tr>
                                    <th scope="col">Nama</th>
                                    <th scope="col">:</th>
                                    <th scope="col"><?php echo $fetch['name']; ?></th>
                                </tr>
                                <tr>
                                    <th scope="col">Email</th>
                                    <th scope="col">:</th>
                                    <th scope="col"><?php echo $fetch['email']; ?></th>
                                </tr>
                                <tr>
                                    <th scope="col">level</th>
                                    <th scope="col">:</th>
                                    <th scope="col"><?php echo $fetch['level']; ?></th>
                                </tr>
                            </table>
                        </div>
                        <div class="data">
                            <h4>Tabel Laporan Data</h4>
                            <table class="table table-borderless">
                                <thead>

                                    <tr>
                                        <th scope="col">Laporan</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Catatan</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
									$sql_spm = mysqli_query($conn, "SELECT * from spm where id_user = $id_user ORDER BY id_spm DESC");
									if (mysqli_num_rows($sql_spm) < 1) {
										?>
                                    <th>
                                        SPM
                                    </th>
                                    <td>
                                        Data Belum Ada
                                    </td>
                                    <td></td>
                                    <td><a href="spm.php" class="btn btn-sm  btn-success">Input Baru</a></td>
                                    <?php
									} else {
										$fetch_spm = mysqli_fetch_array($sql_spm);
									?>
                                    <tr>
                                        <th scope="row">SPM</th>
                                        <td><?php 
											if ( $fetch_spm['status'] == "pending" ){
												 ?>
                                            <label for=""
                                                style="background: #007BFF; border-radius:5px; padding: 5px; color: #fff;">Pending</label>
                                            <?php
											} else if ( $fetch_spm['status'] == "valid" ){
												?>
                                            <label for=""
                                                style="background: #28A745; border-radius:5px; padding: 5px; color: #fff;">Valid</label>
                                            <?php
											} else {
												?>
                                            <label for=""
                                                style="background: #DC3545; border-radius:5px; padding: 5px; color: #fff;">Revisi</label>
                                            <?php
											}
										?>
                                        </td>
                                        <td><span style="color: red;"><?php echo $fetch_spm['catatan']; ?></span></td>
                                        <td>
                                            <a href="spm.php" class="btn btn-sm  btn-primary">Input Ulang</a>
                                        </td>
                                    </tr>
                                    <?php } ?>

                                    <?php
									$sql_sp = mysqli_query($conn, "SELECT * from surat_pernyataan where id_user = $id_user ORDER BY id_surat_pernyataan DESC");
									
									if (mysqli_num_rows($sql_sp) < 1) {
										?>
                                    <tr>
                                        <th>
                                            Surat Pernyataan
                                        </th>
                                        <td>
                                            Data Belum Ada
                                        </td>
                                        <td></td>
                                        <td>
                                            <a href="surat_pernyataan.php" class="btn btn-sm btn-success">Input Baru</a>
                                        </td>
                                    </tr>
                                    <?php
									} else {
										$fetch_sp = mysqli_fetch_array($sql_sp);

									?>
                                    <tr>
                                        <th scope="row">Surat Pernyataan</th>
                                        <td><?php 
											if ( $fetch_sp['status'] == "pending" ){
												 ?>
                                            <label for=""
                                                style="background: #007BFF; border-radius:5px; padding: 5px; color: #fff;">Pending</label>
                                            <?php
											} else if ( $fetch_sp['status'] == "valid" ){
												?>
                                            <label for=""
                                                style="background: #28A745; border-radius:5px; padding: 5px; color: #fff;">Valid</label>
                                            <?php
											} else {
												?>
                                            <label for=""
                                                style="background: #DC3545; border-radius:5px; padding: 5px; color: #fff;">Revisi</label>
                                            <?php
											}
										?>
                                        </td>
                                        <td><span style="color: red;"><?php echo $fetch_sp['catatan']; ?></span></td>
                                        <td>
                                            <a href="surat_pernyataan.php" class="btn btn-sm btn-primary">Input
                                                Ulang</a>
                                        </td>
                                    </tr>

                                    <?php
									}
									$sql_lp = mysqli_query($conn, "SELECT * from lembar_penelitian where id_user = $id_user ORDER BY id_lembar_penelitian DESC");
									
									if (mysqli_num_rows($sql_lp) < 1) {
										?>
                                    <tr>
                                        <th>Lembar Penelitian</th>
                                        <td>Belum Ada Data</td>
                                        <td></td>
                                        <td>
                                            <a href="lembar_penelitian.php" class="btn btn-sm btn-success">Input
                                                Baru</a>
                                        </td>
                                    </tr>
                                    <?php
									} else {
									$fetch_lp = mysqli_fetch_array($sql_lp);
									?>
                                    <tr>
                                        <th scope="row">Lembar Penelitian</th>
                                        <td><?php 
											if ( $fetch_lp['status'] == "pending" ){
												 ?>
                                            <label for=""
                                                style="background: #007BFF; border-radius:5px; padding: 5px; color: #fff;">Pending</label>
                                            <?php
											} else if ( $fetch_lp['status'] == "valid" ){
												?>
                                            <label for=""
                                                style="background: #28A745; border-radius:5px; padding: 5px; color: #fff;">Valid</label>
                                            <?php
											} else {
												?>
                                            <label for=""
                                                style="background: #DC3545; border-radius:5px; padding: 5px; color: #fff;">Revisi</label>
                                            <?php
											}
										?>
                                        </td>
                                        <td><span style="color: red;"><?php echo $fetch_lp['catatan']; ?></span></td>
                                        <td>
                                            <a href="lembar_penelitian.php" class="btn btn-sm  btn-primary">Input
                                                Ulang</a>
                                        </td>
                                    </tr>
                                    <?php }?>
                                    <?php
									$sql_ppn = mysqli_query($conn, "SELECT * from pajak_ppn where id_user = $id_user ORDER BY id_pajak_ppn DESC");

									if (mysqli_num_rows($sql_ppn) < 1 ) {
										?>
                                    <tr>
                                        <th>Pajak PPN</th>
                                        <td>Data Belum Ada</td>
                                        <td></td>
                                        <td>
                                            <a href="pajak_ppn.php" class="btn btn-sm btn-success">Input Baru</a>
                                        </td>
                                    </tr>
                                    <?php
									} else {
                                        $fetch_ppn = mysqli_fetch_array($sql_ppn);
										?>
                                    <tr>
                                        <th scope="row"> Pajak PPN</th>
                                        <td><?php 
												if ( $fetch_ppn['status'] == "pending" ){
													 ?>
                                            <label for=""
                                                style="background: #007BFF; border-radius:5px; padding: 5px; color: #fff;">Pending</label>
                                            <?php
												} else if ( $fetch_ppn['status'] == "valid" ){
													?>
                                            <label for=""
                                                style="background: #28A745; border-radius:5px; padding: 5px; color: #fff;">Valid</label>
                                            <?php
												} else {
													?>
                                            <label for=""
                                                style="background: #DC3545; border-radius:5px; padding: 5px; color: #fff;">Revisi</label>
                                            <?php
												}
											?>
                                        <td><span style="color: red;"><?php echo $fetch_ppn['catatan']; ?></span></td>
                                        <td>
                                            <a href="pajak_ppn.php" class="btn btn-sm btn-primary">Input Ulang</a>
                                        </td>
                                    </tr>
                                    <?php } 
									$sql_sptjm = mysqli_query($conn, "SELECT * from sptjm where id_user = $id_user ORDER BY id_sptjm DESC");

									if (mysqli_num_rows($sql_sptjm) < 1) {
										?>
                                    <tr>
                                        <th>SPTJM</th>
                                        <td>Data Belum Ada</td>
                                        <td></td>
                                        <td>
                                            <a href="sptjm.php" class="btn btn-sm btn-success">Input Baru</a>
                                        </td>
                                    </tr>
                                    <?php
									} else {
										$fetch_sptjm = mysqli_fetch_array($sql_sptjm);
										?>
                                    <tr>
                                        <th scope="row"> SPTJM</th>
                                        <td><?php 
												if ( $fetch_sptjm['status'] == "pending" ){
													 ?>
                                            <label for=""
                                                style="background: #007BFF; border-radius:5px; padding: 5px; color: #fff;">Pending</label>
                                            <?php
												} else if ( $fetch_sptjm['status'] == "valid" ){
													?>
                                            <label for=""
                                                style="background: #28A745; border-radius:5px; padding: 5px; color: #fff;">Valid</label>
                                            <?php
												} else {
													?>
                                            <label for=""
                                                style="background: #DC3545; border-radius:5px; padding: 5px; color: #fff;">Revisi</label>
                                            <?php
												}
											?>
                                        <td><span style="color: red;"><?php echo $fetch_sptjm['catatan']; ?></span></td>
                                        <td>
                                            <a href="sptjm.php" class="btn btn-sm btn-primary">Input Ulang</a>
                                        </td>
                                    </tr>
                                    <?php } ?>



                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- /Wizard container -->
                </div>
            </div><!-- /Row -->
        </div><!-- /Form_container -->
    </main>

    <!-- SCRIPTS -->
    <!-- Jquery-->
    <script src="js/jquery-3.6.4.min.js"></script>
    <!-- Common script -->
    <script src="js/common_scripts_min.js"></script>
    <!-- Wizard script -->
    <script src="js/registration_wizard_func.js"></script>
    <!-- Menu script -->
    <script src="js/velocity.min.js"></script>
    <script src="js/main.js"></script>
    <!-- Theme script -->
    <script src="js/functions.js"></script>

</body>

</html>