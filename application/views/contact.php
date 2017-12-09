<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">

		<title>Evently | E-Recruitment</title>

		<!-- Bootstrap core CSS -->
		 <!-- Bootstrap core CSS -->
    	<link href="<?php echo base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

		<!-- Custom styles for this template -->
    	<link href="<?php echo base_url(); ?>assets/css/modern-business.css" rel="stylesheet">
		<link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/lambangevent.ico" />

		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/bootstrap/css/styles.css">
	</head>

  <body>

    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-expand-lg bg-white fixed-top">
      <div class="container">
	  
        <!-- LOGO -->
        <div class="logo" style="width: 250px"> 
			<a href="<?php echo base_url(); ?>" title="Evently"><img src="<?php echo base_url(); ?>assets/images/evently.png" alt="Evently" /></a>
        </div>

        <div class="collapse" id='cssmenu'>
			<ul>
				<li><a href='<?php echo base_url(); ?>'>Event</a></li>
				<li><a href='<?php echo base_url(); ?>about'>Tentang</a></li>
				<li class='active'><a href='#'>Kontak</a></li>
			</ul>
		</div>
    </nav>

    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">Kontak
        <small>Evently</small>
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="<?php echo base_url();?>">Beranda</a>
        </li>
        <li class="breadcrumb-item active">Kontak</li>
      </ol>

      <!-- Content Row -->
      <div class="row">
        <!-- Map Column -->
        <div class="col-lg-8 mb-4">
          <!-- Embedded Google Map -->
			<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15812.589066326691!2d110.3747223!3d-7.7742046!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x294cd98559dc9c8c!2sSekolah+Vokasi+Universitas+Gadjah+Mada!5e0!3m2!1sid!2sid!4v1512758530824" width="100%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
		</div>
        <!-- Contact Details Column -->
        <div class="col-lg-4 mb-4">
          <h3>Kontak Details</h3>
          <p>
            55281 Sleman, Daerah Istimewa Yogyakarta 
            <br>Sekip Unit 1, Catur Tunggal, Depok
            <br>
          </p>
          <p>
            <abbr title="Phone">P</abbr>: (0274) 541020
          </p>
          <p>
            <abbr title="Website">W</abbr>:
            <a href="https://github.com/capteinn/evently" target="_blank">Evently Github</a>
          </p>
          <p>
            <abbr title="Hours">H</abbr>: Senin - Jum'at: 5:00 AM to 5:00 PM
          </p>
        </div>
      </div>
      <!-- /.row -->

      <!-- Contact Form -->
      <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
      <div class="row">
        <div class="col-lg-8 mb-4">
          <h3>Kirim Kita Pesan</h3>
          <form name="sentMessage" id="contactForm" novalidate>
            <div class="control-group form-group">
              <div class="controls">
                <label>Nama Lengkap:</label>
                <input type="text" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
                <p class="help-block"></p>
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Nomor Telepon:</label>
                <input type="tel" class="form-control" id="phone" required data-validation-required-message="Please enter your phone number.">
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Alamat Email:</label>
                <input type="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Pesan:</label>
                <textarea rows="10" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
              </div>
            </div>
            <div id="success"></div>
            <!-- For success/fail messages -->
            <button type="submit" class="btn btn-primary" id="sendMessageButton">Kirim Pesan</button>
          </form>
        </div>

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-3 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Evently 2017</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Contact form JavaScript -->
    <!-- Do not edit these files! In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
    <script src="<?php echo base_url(); ?>assets/js/jqBootstrapValidation.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/contact_me.js"></script>

  </body>

</html>