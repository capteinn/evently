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
        /* #wktBeranda{font-size:10px;  float: right; margin-top: 8px; background-color: #b1b1b1; padding: 3px 5px 3px 5px; border-radius: 3px;} */
        /*dibawah*/
        /*#wktBeranda{font-size:10px;  display: block; margin-top: 3px; background-color: #b1b1b1; padding: 1px 5px 1px 5px; border-radius: 3px; width: 190px; text-align: center;}*/
        /* #text{
          color: rgba(254, 82, 76, 1);
          font-family: "Raleway", "Helvetica Neue", Helvetica, Arial, sans-serif;
        } */
        /* html,body{
          width: 100%;
          height: 100%;
          padding: 0;
          margin: 0;
        } */

/* css our team     */
.anaglyphic {
	color: #f9689a;
	text-shadow: -3px -3px 0 #77caff;
}
#hexGrid {
    overflow: hidden;
    width: 90%;
    margin: 0 auto;
    padding:0.866% 0;
    font-family: 'Raleway', sans-serif;
    font-size: 15px;
}
#hexGrid:after {
    content: "";
    display: block;
    clear: both;
}
.hex {
    position: relative;
    list-style-type: none;
    float: left;
    overflow: hidden;
    visibility: hidden;
    outline:1px solid transparent; /* fix for jagged edges in FF on hover transition */
    -webkit-transform: rotate(-60deg) skewY(30deg) translatez(-1px);
        -ms-transform: rotate(-60deg) skewY(30deg) translatez(-1px);
            transform: rotate(-60deg) skewY(30deg) translatez(-1px);
}
.hex * {
    position: absolute;
    visibility: visible;
    outline:1px solid transparent; /* fix for jagged edges in FF on hover transition */
}
.hexIn {
    display:block;
    width: 100%;
    height: 100%;
    text-align: center;
    color: #fff;
    overflow: hidden;
    -webkit-transform: skewY(-30deg) rotate(60deg);
        -ms-transform: skewY(-30deg) rotate(60deg);
            transform: skewY(-30deg) rotate(60deg);
}

/*** HEX CONTENT **********************************************************************/
.hex img {
    left: -100%;
    right: -100%;
    width: auto;
    height: 100%;
    margin: 0 auto;
}

.hex h1, .hex p {
    width: 102%;
    left:-1%; /* prevent line on the right where background doesn't cover image */
    padding: 5%;
    box-sizing:border-box;
    background-color: rgba(255, 255, 255, 0.8);
    font-weight: 300;
    -webkit-transition:  -webkit-transform .2s ease-out, opacity .3s ease-out;
            transition:          transform .2s ease-out, opacity .3s ease-out;
}
.hex h1 {
    bottom: 50%;
    padding-top:50%;
    font-size: 1.5em;
    z-index: 1;
    -webkit-transform:translateY(-100%) translatez(-1px);
        -ms-transform:translateY(-100%) translatez(-1px);
            transform:translateY(-100%) translatez(-1px);
}
.hex h1:after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 45%;
    width: 10%;
    text-align: center;
    border-bottom: 1px solid #fff;
}
.hex p {
    top: 50%;
    padding-bottom:50%;
    -webkit-transform:translateY(100%) translatez(-1px);
        -ms-transform:translateY(100%) translatez(-1px);
            transform:translateY(100%) translatez(-1px);
}


/*** HOVER EFFECT  **********************************************************************/
.hexIn:hover h1, .hexIn:focus h1,
.hexIn:hover p, .hexIn:focus p{
    -webkit-transform:translateY(0%) translatez(-1px);
        -ms-transform:translateY(0%) translatez(-1px);
            transform:translateY(0%) translatez(-1px);
}

/*** SPACING AND SIZING *****************************************************************/
@media (min-width:1201px) { /* <- 5-4  hexagons per row */
    .hex {
        width: 19.2%; /* = (100-4) / 5 */
        padding-bottom: 22.170%; /* =  width / sin(60deg) */
    }
    .hex:nth-child(9n+6),
    .hex:nth-child(9n+7),
    .hex:nth-child(9n+8),
    .hex:nth-child(9n+9) {
        margin-top: -4.676%;
        margin-bottom: -4.676%;
        -webkit-transform: translateX(50%) rotate(-60deg) skewY(30deg);
            -ms-transform: translateX(50%) rotate(-60deg) skewY(30deg);
                transform: translateX(50%) rotate(-60deg) skewY(30deg);
    }
    .hex:nth-child(9n+6):last-child,
    .hex:nth-child(9n+7):last-child,
    .hex:nth-child(9n+8):last-child,
    .hex:nth-child(9n+9):last-child {
        margin-bottom: 0;
    }
    .hex:nth-child(9n+6) {
        margin-left: 0.5%;
        clear: left;
    }
    .hex:nth-child(9n+10) {
        clear: left;
    }
    .hex:nth-child(9n+2),
    .hex:nth-child(9n+ 7) {
        margin-left: 1%;
        margin-right: 1%;
    }
    .hex:nth-child(9n+3),
    .hex:nth-child(9n+4),
    .hex:nth-child(9n+8) {
        margin-right: 1%;
    }
}
@media (max-width: 1200px) and (min-width:901px) {/* <- 4-3  hexagons per row */
    .hex {
        width: 24.25%; /* = (100-3) / 4 */
        padding-bottom: 28.001%; /* =  width / sin(60deg) */
    }
    .hex:nth-child(7n+5),
    .hex:nth-child(7n+6),
    .hex:nth-child(7n+7) {
        margin-top: -6.134%;
        margin-bottom: -6.134%;
        -webkit-transform: translateX(50%) rotate(-60deg) skewY(30deg);
            -ms-transform: translateX(50%) rotate(-60deg) skewY(30deg);
                transform: translateX(50%) rotate(-60deg) skewY(30deg);
    }
    .hex:nth-child(7n+5):last-child,
    .hex:nth-child(7n+6):last-child,
    .hex:nth-child(7n+7):last-child {
        margin-bottom: 0;
    }
    .hex:nth-child(7n+2),
    .hex:nth-child(7n+6) {
        margin-left: 1%;
        margin-right: 1%;
    }
    .hex:nth-child(7n+3) {
        margin-right: 1%;
    }
    .hex:nth-child(7n+8) {
        clear: left;
    }
    .hex:nth-child(7n+5) {
        clear: left;
        margin-left: 0.5%;
    }
}
@media (max-width: 900px) and (min-width:601px) { /* <- 3-2  hexagons per row */
    .hex {
        width: 32.666%; /* = (100-2) / 3 */
        padding-bottom: 37.720%; /* =  width / sin(60) */
    }
    .hex:nth-child(5n+4),
    .hex:nth-child(5n+5) {
        margin-top: -8.564%;
        margin-bottom: -8.564%;
        -webkit-transform: translateX(50%) rotate(-60deg) skewY(30deg);
            -ms-transform: translateX(50%) rotate(-60deg) skewY(30deg);
                transform: translateX(50%) rotate(-60deg) skewY(30deg);
    }
    .hex:nth-child(5n+4):last-child,
    .hex:nth-child(5n+5):last-child {
        margin-bottom: 0;
    }
    .hex:nth-child(5n+4) {
        margin-right: 1%;
        margin-left: 0.5%;
    }
    .hex:nth-child(5n+2) {
        margin-left: 1%;
        margin-right: 1%;
    }
    .hex:nth-child(5n+6) {
        clear: left;
    }
}
@media (max-width: 600px) { /* <- 2-1  hexagons per row */
    .hex {
        width: 49.5%; /* = (100-1) / 2 */
        padding-bottom: 57.158%; /* =  width / sin(60) */
    }
    .hex:nth-child(3n+3) {
        margin-top: -13.423%;
        margin-bottom: -13.423%;
        -webkit-transform: translateX(50%) rotate(-60deg) skewY(30deg);
            -ms-transform: translateX(50%) rotate(-60deg) skewY(30deg);
                transform: translateX(50%) rotate(-60deg) skewY(30deg);
    }
    .hex:nth-child(3n+3):last-child {
        margin-bottom: 0;
    }
    .hex:nth-child(3n+3) {
        margin-left: 0.5%;
    }
    .hex:nth-child(3n+2) {
        margin-left: 1%;
    }
    .hex:nth-child(3n+4) {
        clear: left;
    }
}
@media (max-width: 400px) {
    #hexGrid {
        font-size: 13px;
    }
}
/* end of css our team */
	  </style>

  </head>

  <body>

    <!-- Navigation -->
    <nav class="page-wrap navbar fixed-top navbar-expand-lg bg-white fixed-top">
      <div class="container">
        <!-- LOGO -->
        <div class="logo" style="width: 250px">
          <a href="<?php echo base_url();?>" title="Evently"><img src="<?php echo base_url();?>assets/images/evently.png" alt="Evently" /></a>
        </div>
         <div class="topnav" id='cssmenu'>
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
            <img src="<?php echo base_url();?>assets/poster/poster1.jpg" style="width:100%; height: 100%;">
          </div>
          <!-- Slide Two - Set the background image for this slide in the line below -->
          <div class="carousel-item" >
            <img src="<?php echo base_url();?>assets/poster/poster2.jpg" style="width:100%; height: 100%;">
          </div>
          <!-- Slide Three - Set the background image for this slide in the line below -->
          <div class="carousel-item">
            <img src="<?php echo base_url();?>assets/poster/ugm1.jpg" style="width:100%; height: 100%;">
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
    <div class="container-fluid">
    <br>
      <div class="row">
        <!-- apa itu evently -->
        <div class="col-sm-12 col-md-12 col-lg-12">
          <center><p>Apa itu Evently?</p></center>
          <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>

        </div>

        <!-- our team -->
        <div class="col-sm-12 col-md-12 col-lg-12" id="backgroundTeam">
          <center><p class="anaglyphic" style="font-weight: bold; margin: 0; font-size: 50px; font-family: "Avant Garde", Avantgarde, "Century Gothic", CenturyGothic, "AppleGothic", sans-serif;">Meet Our Team</p></center>
          <ul id="hexGrid">
            <li class="hex">
                <a class="hexIn" href="#">
                    <img src="<?php echo base_url()?>assets/pp/fadli.jpg" alt="" />
                    <h1>Front End</h1>
                    <p>Some sample text about the article this hexagon leads to</p>
                </a>
            </li>
            <li class="hex">
                <a class="hexIn" href="#">
                    <img src="<?php echo base_url()?>assets/pp/fadli.jpg" alt="" />
                    <h1>Front End</h1>
                    <p>Some sample text about the article this hexagon leads to</p>
                </a>
            </li>
            <li class="hex">
                <a class="hexIn" href="#">
                    <img src="<?php echo base_url()?>assets/pp/fadli.jpg" alt="" />
                    <h1>Front End</h1>
                    <p>Some sample text about the article this hexagon leads to</p>
                </a>
            </li>
            <li class="hex">
                <a class="hexIn" href="#">
                    <img src="<?php echo base_url()?>assets/pp/fadli.jpg" alt="" />
                    <h1>Front End</h1>
                    <p>Some sample text about the article this hexagon leads to</p>
                </a>
            </li>
            <li class="hex">
                <a class="hexIn" href="#">
                    <img src="<?php echo base_url()?>assets/pp/fadli.jpg" alt="" />
                    <h1>Front End</h1>
                    <p>Some sample text about the article this hexagon leads to</p>
                </a>
            </li>
          </ul>
        </div>
    </div>
    <!-- /.row -->
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
