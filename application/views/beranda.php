<!DOCTYPE HTML>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <title>Evently | Good event for you</title>
	
    <!-- Styles -->
    <link href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
	<style>
    body {
        padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
    }
    </style>
	
    <link rel="shortcut icon" href="img/favicon.ico">
    </head>
    <body>
		<!--******************** NAVBAR ********************-->
		<div class="container">
			<!-- Responsive Navbar Part 1: Button for triggering responsive navbar (not covered in tutorial). Include responsive CSS to utilize. -->
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
		<!-- ******************** HeaderWrap ********************-->
		<div id="headerwrap">
		  <header class="clearfix">
				<h1><span>Evently</span>, Let's make a good Event.</h1>
		  </header>
		</div>
		<!--******************** News Section ********************-->
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
		</div>
		<!-- /.container -->
		<!-- ./container -->
    </body>
	<footer>
		<small>&copy; 2017 Proyek SI Network. All rights reserved.</small>
	</footer>
</html>
