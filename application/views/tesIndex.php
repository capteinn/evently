<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <title>Evently | E-Recruitment </title>
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
  <!-- Bootstrap core CSS -->
  <link href="<?php echo base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url();?>assets/css/modern-business.css" rel="stylesheet">
    <link rel="shortcut icon" href="assets/images/lambangevent.ico">
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/styles.css">
      <!-- <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script> -->
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
        /* @media screen and (min-width: @grid-float-breakpoint) {
          .nav-collapse {
            .navbar-toggle + & {
              margin-top: 0;
            }
          }
        } */
        #btn{
          background-color: Transparent;
          background-repeat:no-repeat;
          border: none;
          cursor:pointer;
          overflow: hidden;
          outline:none;
        }
/* Team member css */
h1.team-h1 {
  margin: 0;

  position: absolute;
  top: -25px;
  text-align: center;
  left: 40%;
  font-family: georgia;
  font-style: italic;
  background-color: white;
  padding: 0px 20px;
  color: #222;
}

.cf:before,
.cf:after {
    content: " "; /* 1 */
    display: table; /* 2 */
}

.cf:after {
    clear: both;
}

/**
 * For IE 6/7 only
 * Include this rule to trigger hasLayout and contain floats.
 */
.cf {
    *zoom: 1;
}

.team-container {
  max-width: 1000px;
  margin: auto;
  border-top: 1px #e9e9e9 solid;
  border-bottom: 1px #e9e9e9 solid;
  padding-top: 5em;
  padding-bottom: 5em;
  margin-top: 3em;
  position: relative;
}

.team-member {
  width: 16%;
  float: left;
  text-align: center;
  margin-right: 5%;
}

.team-member:last-child {margin-right: 0;}


.team-member span,
.team-member h3 {
  max-width: 200px;
  font-family: sans-serif;
  letter-spacing: -1px;
}

.team-member h3 {
  color: #1CA3A3;
}

.email {
  color: #EA2678;

}

.team-member span {
  display: block;

}
.team-photo {
  border-radius: 80%;
  text-align: center;
  margin: auto;
  max-width: 100%;
  height: auto;
  transition: 0.1s transform ease-in-out;
}


.team-photo:hover {
  transform: scale(0.9);
  cursor: pointer;
}


/* code for phone layout */
@media (max-width:850px){
  .team-member {
    width:25%;
    margin-left: 4%;
    margin-right: 4%;
    margin-bottom: 40px;

  }

}



@media (max-width:650px){
  .team-member {
    float: none;
    display: block;
    margin: 50px auto;
    width: 100%;
    text-align: center;
  }

  .team-member h3,
  .team-member span {
    margin: 15px auto;
  }
}
/* ENDS Team Member CSS
===========================*/

	  </style>

  </head>
  <body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-md bg-white fixed-top">
        <!-- LOGO -->
        <a class="navbar-brand" style="margin-left: 3%;" href="<?php echo base_url();?>" title="Evently"><img src="<?php echo base_url();?>assets/images/evently.png" alt="Evently"/></a>
        <button style="font-size: 25px;" id="btn" class="navbar-toggler fa fa-bars" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
          <div id="cssmenu" style="position: absolute; right: 0;margin-right: 3%;">
       <ul class="navbar-nav">
           <li class="nav-item active"><a class="nav-link" href='#'>Event</a></li>
           <li class="nav-item"><a class="nav-link" href='<?php echo base_url(); ?>about'>Tentang</a></li>
           <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>contact">Kontak</a></li>
       </ul>
       <!-- end of div collapse -->
       </div>
        </div>
      <!-- end of navbar -->
    </nav>
      <br>
    <header>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="margin-top: 1%;">
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
          <!-- this section wraps the team members as a container-->

<section class="cf team-container">
  <h1 class="team-h1">Our Team</h1>

    <!-- member-->
    <div class="team-member">
      <img class="team-photo" src="<?php echo base_url();?>assets/pp/fadli.jpg">
      <h3>Muhammad Nur Fadli</h3>
      <span>Front End Developer</span>
      <a class="email" href="mailto:muhammadnurfadlifadli@gmail.com"><span>email</span></a>
    </div>


    <!-- member-->
    <div class="team-member">
    <img class="team-photo" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/44742/profile/profile-512_2.jpg">
      <h3>Person's Name</h3>
      <span>This section could be used to show a very short bio description for each member</span>
       <a class="email" href="mailto:email@something.com"><span >email</span></a>
    </div>


    <!-- member-->
    <div class="team-member">
    <img class="team-photo" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/44742/profile/profile-512_2.jpg">
      <h3>Person's Name</h3>
      <span>This section could be used to show a very short bio description for each member</span>
      <a class="email" href="mailto:email@something.com"><span >email</span></a>
    </div>



    <!-- member-->
    <div class="team-member">
    <img class="team-photo" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/44742/profile/profile-512_2.jpg">
      <h3>Person's Name</h3>
      <span>This section could be used to show a very short bio description for each member</span>
       <a class="email" href="mailto:email@something.com"><span >email</span></a>
    </div>


    <!-- member-->
    <div class="team-member">
    <img class="team-photo" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/44742/profile/profile-512_2.jpg">
      <h3>Person's Name</h3>
      <span>This section could be used to show a very short bio description for each member</span>
       <a class="email" href="mailto:email@something.com"><span >email</span></a>
    </div>

 </section>
          <!-- ./ div our team -->
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
