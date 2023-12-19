<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
	  <link href="/form pengaduan/css/menu.css" rel="stylesheet">
    <link href="/form pengaduan/css/style.css" rel="stylesheet">
	  <link href="/form pengaduan/css/vendors.css" rel="stylesheet">
    <title>Ahass</title>
</head>
<body>
    <div class="ahm-honda">
        <a data-v-d48eda90="" href="https://www.astra-honda.com/" class="logo honda"><img data-v-d48eda90="" width="320" height="53" src="https://ik.imagekit.io/zlt25mb52fx/ahmcdn/assets/images/logo/honda.svg" alt="Astra Honda Motor"></a>
        <a data-v-d48eda90="" href="https://www.astra-honda.com/" class="logo ahm" style="margin-left: 800px;"><img data-v-d48eda90="" width="160" height="40" src="https://ik.imagekit.io/zlt25mb52fx/ahmcdn/assets/images/logo/ahm.svg" alt="Astra Honda Motor"></a>
    </div>
    <div class="navbar">
        <div class="navbar-left">
          <a href="#home">Home</a>
          <a href="#about">About</a>
          <a href="#service">Service</a>
          <a href="#contact">Contact</a>
          <!-- <a href="#after-sales">After Sales</a>
          <a href="#corporate">Corporate</a> -->
        </div>
        <div class="login">
          <button type="submit"><a href="login.php">Login</a></button>
        </div>
    </div>

        <div class="slideshow-container">

            <div class="mySlides fade">
              <img src="img/1.png" style="width:100%">
            </div>
            
            <div class="mySlides fade">
              <img src="img/2.png" style="width:100%">
            </div>
            
            <div class="mySlides fade">
              <img src="img/3.png" style="width:100%">
            </div>
            
        </div>
            <br>
            
            <div style="text-align:center">
              <span class="dot"></span> 
              <span class="dot"></span> 
              <span class="dot"></span> 
            </div>

            <script>
                var slideIndex = 0;
                showSlides();
                
                function showSlides() {
                  var i;
                  var slides = document.getElementsByClassName("mySlides");
                  var dots = document.getElementsByClassName("dot");
                  for (i = 0; i < slides.length; i++) {
                     slides[i].style.display = "none";  
                  }
                  slideIndex++;
                  if (slideIndex > slides.length) {slideIndex = 1}    
                  for (i = 0; i < dots.length; i++) {
                      dots[i].className = dots[i].className.replace(" active", "");
                  }
                  slides[slideIndex-1].style.display = "block";  
                  dots[slideIndex-1].className += " active";
                  setTimeout(showSlides, 3000); // Change image every 2 seconds
                }
                </script>


    <div class="burger-section">
      <div class="text-content">
          <h1>Welcome!</h1>
          <h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit,</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
          <button>CONTACT NOW</button>
      </div>
      <div class="grid-images">
          <div class="item1"><img src="img/benhkel.jpg" alt="Description 1"></div>
          <div class="item2"><img src="img/bengkel1.jpg" alt="Description 2"></div>
          <div class="item3"><img src="img/dandan.jpg" alt="Description 3"></div>
      </div>
    </div>

    <div class="hero-section">
      <img src="img/1.jpg" alt="Pizza background" class="hero-bg">
      <div class="content-wrapper">
          <h1>Make the thing Anything is Possible</h1>
          <p>Enjoy our service to best performance</p>
          <button class="order-button">CONTACT NOW</button>
      </div>
    </div>


    <div class="burger-section">
      <div class="image-wrapper-2">
          <img src="img/vario.jpg" alt="">
      </div>
      <div class="text-wrapper-2">
          <h2>Our Quality</h2>
          <h1>Parts</h1>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
          </p>
          <button>ORDER NOW</button>
      </div>
  </div>

  <main id="general_page">
		<iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d126917.87768874432!2d106.8934359523473!3d-6.239506048065323!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sahass%20bekasi!5e0!3m2!1sid!2sid!4v1702107715449!5m2!1sid!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
		<!-- end map-->
		<div class="container margin_60_35">
			<div class="row">
				<div class="col-lg-8">
					<h3>Contact us</h3>
					<p>
						Mussum ipsum cacilds, vidis litro abertis.
					</p>
					<div>
						<div id="message-contact"></div>
						<form method="post" action="assets/contact.php" id="contactform">
							<div class="row">
								<div class="col-md-6 col-sm-6">
									<div class="form-group">
										<label for="name_contact">First Name</label>
										<input type="text" class="form-control" id="name_contact" name="name_contact">
									</div>
								</div>
								<div class="col-md-6 col-sm-6">
									<div class="form-group">
										<label for="lastname_contact">Last Name</label>
										<input type="text" class="form-control" id="lastname_contact" name="lastname_contact">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6 col-sm-6">
									<div class="form-group">
										<label for="email_contact">Email</label>
										<input type="email" id="email_contact" name="email_contact" class="form-control">
									</div>
								</div>
								<div class="col-md-6 col-sm-6">
									<div class="form-group">
										<label for="phone_contact">Phone number</label>
										<input type="text" id="phone_contact" name="phone_contact" class="form-control">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label for="message_contact">Your message</label>
										<textarea rows="5" id="message_contact" name="message_contact" class="form-control" style="height:100px;"></textarea>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<p><input type="submit" value="Submit" class="btn_1 add_bottom_15" id="submit-contact"></p>
								</div>
							</div>
						</form>
					</div>
				</div>
				<!-- End col lg 9 -->
				<aside class="col-lg-4">
					<div class="box_style_2">
						<h4>Contacts info</h4>
						<p>
							Jl. Abdul Fatah No. 10
							<br>Bogor, Indonesia 16370
							<br>
							<a href="#">info@domain.com</a>
						</p>
						<h5>Get directions</h5>
						<form action="http://maps.google.com/maps" method="get" target="_blank">
							<div class="form-group">
								<input type="text" name="saddr" placeholder="Enter your location" class="form-control" style="background:none;">
								<input type="hidden" name="daddr" value="New York, NY 11430">
								<!-- Write here your end point -->
							</div>
							<input type="submit" value="Get directions" class="btn_1 add_bottom_15">
						</form>
						<hr class="styled">
						<h4>Departmens</h4>
						<ul class="contacts_info">
							<li>Administration
								<br>
								<a href="tel://003823932342">0038 23932342</a>
								<br><a href="tel://003823932342">admin@potenza.com</a>
								<br>
								<small>Monday to Friday 9am - 7pm</small>
							</li>
							<li>General questions
								<br>
								<a href="tel://003823932342">0038 23932342</a>
								<br><a href="tel://003823932342">questions@potenza.com</a>
								<br>
								<small>Monday to Friday 9am - 7pm</small>
							</li>
						</ul>
					</div>
				</aside>
				<!--End aside -->
			</div>
			<!-- end row-->
		</div>
		<!-- end container-->
	</main>




  <footer>
    <div class="footer-section">
        <h3>ADDRESS</h3>
        <address>
            Jl. Abdul Fatah No. 10<br>
            Bogor, Indonesia 16370<br>
            <a href="tel:+089677277727">0896 7727 7727</a>
        </address>
    </div>
    <!-- <div class="footer-section">
        <h3>FOLLOW US</h3>
        <div class="social-icons">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
        </div>
    </div> -->
    <div class="footer-section">
        <h3>OPENING HOURS</h3>
        <p>Monday - Friday: 8am - 4pm</p>
        <p>Saturday: 9am - 5pm</p>
    </div>
    <div class="footer-section">
        <h3>NEWSLETTER</h3>
        <div class="newsletter-input">
            <input type="email" placeholder="Your Email">
            <button type="submit">SUBSCRIBE</button>
        </div>
    </div>
</footer>

<div class="footer-bar">
    <div class="copyright">Copyright &copy; 2023 SM TECH. All Rights Reserved.</div>
</div>
  
  
  
</body>
</html>