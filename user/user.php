<?php

$conn = mysqli_connect("localhost", "root", "", "sistem-service");

$result = mysqli_query($conn, "SELECT * FROM tb_keluhan");	

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
    <link href="css/bootstrap.min.css" rel="stylesheet">
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
	            <div id="wizard_container">
	                <div id="top-wizard">
	                    <span id="location"></span>
	                </div>
	 
						<div class="biodata">
                            <p>Halo Anda Login Sebagai : User
                            
                            <table class="table table-borderless">
                                
                            </table>
                        </div>
                        <div class="data">
                            <h4>Status Laporan Anda</h4>
                            <table class="table table-borderless">
                            <thead>
                                <tr>
                                    <th scope="col">Keluhan</th>
                                    <th scope="col">Photo</th>
                                    <th scope="col">Catatan</th>
                                    <th scope="col">Status</th>
                                </tr>
                            </thead>
							<?php while( $row = mysqli_fetch_assoc($result)) : ?>
							<tr>
                                <td><?= $row["complaint"]; ?></td>
                                <td><?= $row["photo"]; ?></td>
                                <td><?= $row["pesan"]; ?></td>
								<td><div class="form-button">
                                	<button href="../user/user.php" class="submit" id="" name="">Selesai</button>
                                	</div></td>
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

	<!-- Wizard script-->
	<script src="js/func_1.js"></script>

</body>
</html>