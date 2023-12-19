<?php

require 'database.php';

if(isset($_POST["submit"])){
	$name = $_POST["name"];
	$complaint = $_POST["complaint"];
	$photo = $_POST["photo"];

	$sql = mysqli_query($conn, "INSERT INTO tb_keluhan VALUES('', '$name', '$complaint', '$photo')");

    if ($sql){	
        echo "<script>
                alert('Berhasil Terkirim');
              </script>";
    } 
 
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
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/menu.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
	<link href="css/vendors.css" rel="stylesheet">
	
	<!-- MODERNIZR MENU -->
	<!-- <script src="js/modernizr.js"></script> -->

</head>

<body>
	
	<div id="preloader">
		<div data-loader="circle-side"></div>
	</div><!-- /Preload -->
	
	<div id="loader_form">
		<div data-loader="circle-side-2"></div>
	</div><!-- /loader_form -->
	
	<div class="container-fluid">
	    <div class="row row-height">
	        <div class="col-xl-4 col-lg-4 content-left">
	            <div class="content-left-wrapper">
	                <div>
	                    <figure><img src="img/honda.png" alt="" class="img-fluid" width="270" height="270"></figure>
	                    <h2>AHM HONDA OFFICIAL SERVICE</h2>
	                    <p>Tation argumentum et usu, dicit viderer evertitur te has. Eu dictas concludaturque usu, facete detracto patrioque an per, lucilius pertinacia eu vel.</p>
	                    <a href="../	index.php" class="btn_1 rounded yellow">Home</a>
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
	                    <!-- <div id="progressbar"></div> -->
	                </div>
	                <!-- /top-wizard -->


					<form method="post">
	                    <!-- Leave for security protection, read docs for details -->
	                    <div id="middle-wizard">
	                        <div class="step">
	                            <h2 class="section_title">Form Pengaduan</h2>
	                            <h3 class="main_question">Isikan Keluhan Anda</h3>
                        	<label for="name"><b>Nama</b></label>
                        	<input class="form-control" type="text" name="name" placeholder="Nama" required>
                        	<label for="complaint">Keluhan</label>
                        	<input class="form-control" type="text" name="complaint" placeholder="Keluhan" required>
                        	<div class="form-group add_bottom_30 add_top_20">
	                        <label>Upload Foto<br><small></small></label>
	                        <div class="fileupload">
	                            <input for="photo" type="file" name="photo" accept="file_extension" required>
	                        </div>
	                    	</div>
                            <div class="form-button">
                                <button type="submit" class="submit" id="submit" name="submit">Submit</button>
                            </div>
                        </form>


					

	                    </div>
	                    <!-- /middle-wizard -->
	                    <!-- <div id="bottom-wizard">
	                        <button type="button" name="backward" class="backward">Submit</button>
	                        <button type="button" name="forward" class="forward">Submit</button>
	                        <button type="submit" name="process" class="submit">Submit</button>
	                    </div> -->
	                    <!-- /bottom-wizard -->
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
	<!-- <script src="js/func_1.js"></script> -->

</body>
</html>