<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Evently | E-Recruitment </title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url();?>assets/css/modern-business.css" rel="stylesheet">
    <link rel="shortcut icon" href="assets/images/lambangevent.ico">
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/styles.css">
      <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
      <style type="text/css">
        /*disamping*/
        #wktBeranda{font-size:10px;  float: right; margin-top: 8px; background-color: #b1b1b1; padding: 3px 5px 3px 5px; border-radius: 3px;}
        /*dibawah*/
        /*#wktBeranda{font-size:10px;  display: block; margin-top: 3px; background-color: #b1b1b1; padding: 1px 5px 1px 5px; border-radius: 3px; width: 190px; text-align: center;}*/
		
	  </style>

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar fixed-top bg-dark navbar-expand-lg bg-dark fixed-top">
      <div class="container">

        <!-- LOGO -->
        <div class="logo" style="width: 250px"> 
          <a href="<?php echo base_url();?>" title="Evently"><img src="<?php echo base_url();?>assets/images/eventlly.png" alt="Evently" /></a>
        </div>


    
         <div class="collapse" id='cssmenu'>
      <ul>
          <li class='active'><a href='#'>Event</a></li>
          <li><a href='<?php echo base_url(); ?>about'>Tentang</a></li>
          <li><a href="<?php echo base_url(); ?>contact">Kontak</a></li>
      </ul>
    </div>
    </nav>
    <br>

    <header>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <!-- Slide One - Set the background image for this slide in the line below -->
          <div class="carousel-item active">
            <img src="<?php echo base_url();?>assets/poster/vocomfest.jpg">
          </div>
          <!-- Slide Two - Set the background image for this slide in the line below -->
          <div class="carousel-item" >
            <img src="<?php echo base_url();?>assets/poster/child.jpg">
          </div>
          <!-- Slide Three - Set the background image for this slide in the line below -->
          <div class="carousel-item">
            <img src="<?php echo base_url();?>assets/poster/algorithm.jpg">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </header>

    <div class="container">
    <!-- Page Content 

		<!-- Portfolio Section -->
		<br>
		<center><h2>Evently</h2></center>
		<br>
      <div class="row">
		<?php
			if(!empty($threadRecords))
			{
				foreach($threadRecords as $record)
				{
		?>
		<div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="<?php echo base_url(); ?>assets/poster/<?php echo $record->poster; ?>" alt=""></a>
            <div class="card-footer text-muted">
              <p style="float: right; padding: 0; margin: 0; font-size: 12px;" ><?php echo DateTime::createFromFormat('Y-m-d', $record->tgl_mulai)->format('j F Y')." - ".DateTime::createFromFormat('Y-m-d', $record->tgl_selesai)->format('j F Y'); ?></p>
            </div>
			<div class="card-body">
				<h4 class="card-title">
					<font color="#007bff"><?php echo $record->nama; ?></font>
				</h4>
				<p ><i>"<?php echo $record->judul; ?>"</i></p>
				<p ><?php echo $record->deskripsi; ?></p>

            </div>
			    <a href="<?php echo base_url(); ?>detail_event/<?php echo $record->id_thread; ?>" type="button" class="btn btn-info">DETAIL</a>
          </div>
        </div>
		<?php
				}
			}
		?>
      <!-- /.row -->

    </div>
	</div>
    <!-- /.container -->

  </body>
    <!-- Footer -->
    <footer class="py-3 bg-dark">
        <p class="m-0 text-center text-white">Copyright &copy; Evently 2017</p>

      <!-- /.container -->
    </footer>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="<?php echo base_url(); ?>/assets/jQueryUI/jquery.min.js">
  </script>
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.bundle.min.js">
  </script>
</html>
