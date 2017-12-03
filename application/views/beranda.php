<!DOCTYPE HTML>
<html lang="en">
    <head>
		<meta charset="utf-8">
		<title>Evently | Good event for you</title>
		
		<!-- Styles -->
		<link href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
		<style>
			body {
				padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
			}
		</style>
		
		<link rel="shortcut icon" href="<?php echo base_url(); ?>img/favicon.ico">
    </head>
    <body>
    <!--******************** NAVBAR ********************-->
    <div class="navbar-wrapper">
      <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="navbar-inner">
          <div class="container">
            <!-- Responsive Navbar Part 1: Button for triggering responsive navbar (not covered in tutorial). Include responsive CSS to utilize. -->
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </a>
            <h1 class="brand"><a href="#top">Evently</a></h1>
            <!-- Responsive Navbar Part 2: Place all navbar contents you want collapsed withing .navbar-collapse.collapse. -->
            <nav class="pull-right nav-collapse collapse">
              <ul id="menu-main" class="nav">
                <li><a title="event" href="#event">Event</a></li>
                <li><a title="about" href="#services">Tentang</a></li>
                <li><a title="contact" href="#contact">Contact</a></li>
              </ul>
            </nav>
          </div>
          <!-- /.container -->
        </div>
        <!-- /.navbar-inner -->
      </div>
      <!-- /.navbar -->
    </div>
    <!-- /.navbar-wrapper -->
    <div id="top"></div>
    <!-- ******************** HeaderWrap ********************-->
    <div id="headerwrap">
      <header class="clearfix">
        <h1><span>Evently</span>, Let's make a good Event.</h1>
      </header>
    </div>
    <!--******************** News Section ********************-->
    <section id="events" class="single-page scrollblock">
      <div class="container">
        <h1>Event</h1>
        <!-- Three columns -->
        <div class="row">
          <article class="span4 post"> <img class="img-news img-responsive" src="img/algorithm.jpg" alt="">
            <div class="inside">
              <p class="post-date"><i class="icon-calendar"></i> March 17, 2013</p>
              <h2>Algorithm</h2>
              <div class="entry-content">
                <p>Algorithm adalah acara tahunan yang diselenggarakan oleh HIMAKOMSI. &hellip;</p>
                <center><a href="#" class="btn more-link">LIHAT DETAIL</a> </div></center>
            </div>
            <!-- /.inside -->
          </article>
          <!-- /.span4 -->
        </div>
        <!-- /.row -->
      <!-- /.container -->
    </section>
    <div class="footer-wrapper">
        <footer>
          <small>&copy; 2013 Proyek SI	 Network. All rights reserved.</small>
        </footer>
      <!-- ./container -->
    </div>
	<script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.min.js" type="text/javascro"></script>
    </body>
</html>
