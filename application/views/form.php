<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Evently | Form Registration</title>
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap-theme.min.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrapValidator.min.css">

		<!-- Custom styles for this template -->
		<link href="<?php echo base_url();?>assets/css/modern-business.css" rel="stylesheet">
		<link rel="shortcut icon" href="assets/images/lambangevent.ico">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/bootstrap/css/styles.css">
		<style>
			body {margin: 0; padding: 0;}
			
			.navbar {padding-top: 5px;}
			
			.navbarnya {display: inline-block;}
			
			.well {width:700px;margin:auto}
			
		</style>
	</head>
		<nav class="navbar fixed-top navbar-expand-lg">
			<div class="container">
				
				<!-- LOGO -->
				<div class="navbarnya" > 
				  <a href="<?php echo base_url(); ?>" title="Evently"><img src="<?php echo base_url(); ?>assets/images/evently.png" alt="Evently" /></a>
				</div>

				<div id='cssmenu'>
					<ul>
						<li class='active'><a href='<?php echo base_url();?>'>Event</a></li>
						<li><a href='<?php echo base_url();?>about'>Tentang</a></li>
						<li><a href='<?php echo base_url();?>contact'>Kontak</a></li>
					</ul>
				</div>
			</div>
		</nav>
	<body>
		<div class="container">

			<form enctype="multipart/form-data" class="well form-horizontal" action="<?php echo base_url() ?>upload/do_upload/<?php echo $this->uri->segment('2');?>" method="post"  id="contact_form">

				<fieldset>
					<!-- Form Name -->
					<legend>Lengkapi Identitas Anda</legend>

					  <!-- Text input-->

					<div class="form-group">
						<label class="col-md-4 control-label">Nama</label>
						<div class="col-md-6 inputGroupContainer">
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
								<input  name="nama" placeholder="Nama Lengkap" class="form-control"  type="text">
							</div>
						</div>
					</div>

					<!-- Text input-->

					<div class="form-group">
						<label class="col-md-4 control-label" >NIM</label>
						<div class="col-md-6 inputGroupContainer">
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
								<input name="nim" placeholder="Nim Fakultas (contoh : 09434)" class="form-control"  type="text">
							</div>
						</div>
					</div>

					<!-- radio checks -->
					<div class="form-group">
						<label class="col-md-4 control-label">Jenis Kelamin</label>
						<div class="col-md-6">
							<div class="radio">
								<label>
								<input type="radio" name="jenkel" value="L" checked /> Laki-Laki
								</label>
							</div>
							<div class="radio">
								<label>
								<input type="radio" name="jenkel" value="P" /> Perempuan
								</label>
							</div>
						</div>
					</div>

					<!-- Text input-->

					<div class="form-group">
						<label class="col-md-4 control-label">Nomor Telpon #</label>
						<div class="col-md-6 inputGroupContainer">
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
								<input name="telepon" placeholder="0838-9555-1212" class="form-control" type="text">
							</div>
						</div>
					</div>

					<!-- Text input-->
					<div class="form-group">
						<label class="col-md-4 control-label" >Prodi</label>
						<div class="col-md-6 inputGroupContainer">
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
								<select class="form-control required" id="prodi" name="prodi">
                                            <option value="0">Pilih Prodi</option>
                                                <option value="1">KOMSI</option>
                                                <option value="2">METINS</option>
                                                <option value="3">DTE</option>
                                                <option value="4">DTJ</option>
                                                <option value="5">ELINS</option>
                                        </select>
							</div>
						</div>
					</div>

					<div class="form-group">
						<label class="col-md-4 control-label" >Angkatan</label>
						<div class="col-md-6 inputGroupContainer">
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
								<input name="angkatan" placeholder="Angkatan (contoh : 2015)" class="form-control"  type="text">
							</div>
						</div>
					</div>

					<!-- Text input-->

					<div class="form-group">
						<label class="col-md-4 control-label" >Kelas</label>
						<div class="col-md-6 inputGroupContainer">
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
								<input name="kelas" class="form-control"  type="text">
							</div>
						</div>
					</div>

					<div class="form-group">
						<label class="col-md-4 control-label" >CV</label>
						<div class="col-md-6 inputGroupContainer">
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
								<input name="cv" class="form-control"  type="file">
							</div>
						</div>
					</div>

					<div class="form-group">
						<label class="col-md-4 control-label" >KRS</label>
						<div class="col-md-6 inputGroupContainer">
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
								<input name="krs" placeholder="Ekstensi PDF" class="form-control"  type="file">
							</div>
						</div>
					</div>

					<!-- Text input-->
					<legend>Pilih Sie Anda!</legend>

					<!-- Text input-->

					<div class="form-group">
						<label class="col-md-4 control-label" >Event</label>
						<div class="col-md-6 inputGroupContainer">
							<div class="input-group">
							<?php
                                if(!empty($event)){
                                    	foreach ($event as $ev){?>
								<p class="form-control" ><b><?php echo $ev->nama ?></b></p>
							<?php
                                        }
                                }
                            ?>
							</div>
						</div>
					</div>

					<!-- Select Radio Button -->

					<div class="form-group">
						<label class="col-md-4 control-label">Pilih Sie</label>
						<div class="col-md-6">
						<?php
                            if(!empty($sie))
                                {
                                    foreach ($sie as $si)
                                        {?>
							<div class="checkbox">
								<label>
                                    <input type="checkbox" id="sie" name="sie[]" value="<?php echo $si->id_sie ?>">  <?php echo $si->nama."=>".$si->id_sie ?>
                            	</label>
							</div>
                        <?php
                                		}
                                }?>
						</div>
					</div>

					<!-- Text area -->

					<div class="form-group">
						<label class="col-md-4 control-label">Alasan</label>
						<div class="col-md-6 inputGroupContainer">
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
								<textarea class="form-control" name="alasan" placeholder="Project Description"></textarea>
							</div>
						</div>
					</div>
					<br>
					<!-- Button -->
					<div class="form-group">
						<label class="col-md-4 control-label"></label>
						<div class="col-md-4">
							<button type="submit" class="btn btn-success" >DAFTAR SEKARANG <span class="glyphicon glyphicon-send"></span></button>
						</div>
					</div>

				</fieldset>
			</form>
		</div>

	</body>
	<!-- Footer -->
    <footer style="padding: 15px 0 10px;margin-top: 20px; background-color: #343a40; color: white;" >
        <p class="text-center" >Copyright &copy; Evently 2017</p>

      <!-- /.container -->
    </footer>
  <!-- Bootstrap core JavaScript -->
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jQuery-2.1.4.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrapvalidator.min.js"></script>
	<script type="text/javascript">
		$(':checkbox').change(function(){
			var len = $(':checkbox:checked').length;
			$(':checkbox').not(':checked').prop('disabled',len >= 2)
		});
		$(document).ready(function() {
		$('#contact_form').bootstrapValidator({
			// To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
			feedbackIcons: {
				valid: 'glyphicon glyphicon-ok',
				invalid: 'glyphicon glyphicon-remove',
				validating: 'glyphicon glyphicon-refresh'
			},
			fields: {
				nama: {
					validators: {
							stringLength: {
							min: 3,
						},
							notEmpty: {
							message: 'Mohon isi nama lengkap Anda'
						}
					}
				},
				nim: {
					validators: {
						 stringLength: {
							min: 5,
						},
						notEmpty: {
							message: 'Mohon isi NIM Fakultas Anda'
						}
					}
				},
				angkatan: {
					validators: {
						stringLength: {
							min: 4,
						},
						notEmpty: {
							message: 'Mohon isi angkatan Anda (contoh : 2015)'
						}
					}
				},
				prodi: {
					validators: {
						notEmpty: {
							message: 'Mohon isi Prodi Anda'
						}
					}
				},
				phone: {
					validators: {
						stringLength: {
							min: 12,
						},
						notEmpty: {
							message: 'Mohon isi nomor telepon Anda'
						}
					}
				},
				kelas: {
					validators: {
						stringLength: {
							min: 1,
						},
						notEmpty: {
							message: 'Mohon isi kelas Anda'
						}
					}
				},
				cv: {
					validators: {
						notEmpty: {
							message: 'Mohon lampirkan CV Anda'
						}
					}
				},
				krs: {
					validators: {
						notEmpty: {
							message: 'Mohon lampirkan KRS Anda'
						}
					}
				},
				sie: {
					validators: {
						notEmpty: {
							message: 'Mohon pilih Sie'
						}
					}
				},
				alasan: {
					validators: {
						  stringLength: {
							min: 10,
							max: 500,
							message:'Please enter at least 10 characters and no more than 200'
						},
						notEmpty: {
							message: 'Mohon isikan alasan Anda'
						}
						}
					}
				}
			});
		});
	</script>
</html>
