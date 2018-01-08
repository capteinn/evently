<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>Form Registration Evently</title>
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap-theme.min.css"> -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrapValidator.min.css">

	<!-- Custom styles for this template -->
	<link href="<?php echo base_url();?>assets/css/modern-business.css" rel="stylesheet">
	<link rel="shortcut icon" href="assets/images/lambangevent.ico">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/bootstrap/css/styles.css">
	<style>
		body {
			margin: 0;
			padding: 0;
		}

		.navbar {
			padding-top: 5px;
		}

		.navbarnya {
			display: inline-block;
		}

		.well {
			width: 700px;
			margin: auto;
		}

		#cssmenu {
			float: right;
		}
	</style>
</head>

<body>
	<nav class="navbar navbar-expand-lg fixed-top">
		<div class="container">

			<!-- LOGO -->
			<div class="navbarnya" style="margin-left: 4%;">
				<a href="<?php echo base_url(); ?>" title="Evently"><img src="<?php echo base_url(); ?>assets/images/evently.png" alt="Evently" /></a>
			</div>

			<div class="collapse" id='cssmenu'>
				<ul>
					<li><a href='<?php echo base_url();?>'>Event</a></li>
					<li><a href='<?php echo base_url();?>about'>Tentang</a></li>
					<li><a href='<?php echo base_url();?>contact'>Contact</a></li>
				</ul>
			</div>
		</div>
	</nav>

	<div class="container" style="margin-top: 3%;">

		<form enctype="multipart/form-data" class="well form-horizontal" action="<?php echo base_url() ?>upload/do_upload/<?php echo $this->uri->segment('2');?>" method="post" id="contact_form">

			<fieldset>
				<!-- Form Name -->
				<legend>Lengkapi Identitas Anda</legend>

				<!-- Text input-->

				<div class="form-group">
					<label class="col-md-4 control-label">Nama</label>
					<div class="col-md-6 inputGroupContainer">
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
							<input name="nama" placeholder="Nama Lengkap" class="form-control" type="text">
						</div>
					</div>
				</div>

				<!-- Text input-->

				<div class="form-group">
					<label class="col-md-4 control-label">NIM</label>
					<div class="col-md-6 inputGroupContainer">
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
							<input name="nim" data-bv-digits="true" placeholder="Nim Fakultas (contoh : 09434)" class="form-control" type="text">
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
							<input name="telepon" data-bv-digits="true" placeholder="0838-9555-1212" class="form-control" type="text">
						</div>
					</div>
				</div>

				<!-- Text input-->
				<div class="form-group">
					<label class="col-md-4 control-label">Prodi</label>
					<div class="col-md-6 inputGroupContainer">
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
							<select class="form-control required" id="prodi" name="prodi">
                                            <option value="">Pilih Prodi</option>
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
					<label class="col-md-4 control-label">Angkatan</label>
					<div class="col-md-6 inputGroupContainer">
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
							<input name="angkatan" data-bv-digits="true" placeholder="(contoh : 2015)" class="form-control" type="text">
						</div>
					</div>
				</div>

				<!-- Text input-->

				<div class="form-group">
					<label class="col-md-4 control-label">Kelas</label>
					<div class="col-md-6 inputGroupContainer">
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
							<input name="kelas" placeholder="(contoh : A 2015)" class="form-control" type="text">
						</div>
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-4 control-label">Kelas</label>
					<div class="col-md-6 inputGroupContainer">
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
							<input name="kelas" placeholder="(contoh : A 2015)" class="form-control" type="text">
						</div>
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-4 control-label">CV</label>
					<div class="col-md-6 inputGroupContainer">
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
							<input name="cv" class="form-control" type="file">
						</div>
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-4 control-label">KRS</label>
					<div class="col-md-6 inputGroupContainer">
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
							<input name="krs" placeholder="Ekstensi PDF" class="form-control" type="file">
						</div>
					</div>
				</div>

				<!-- Text input-->
				<legend>Pilih Sie Anda!</legend>

				<!-- Text input-->

				<div class="form-group">
					<label class="col-md-4 control-label">Event</label>
					<div class="col-md-6 inputGroupContainer">
						<div class="input-group">
							<?php
                                if(!empty($event)){
                                    	foreach ($event as $ev){?>
								<p class="form-control"><b><?php echo $ev->nama ?></b></p>
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
						<button type="submit" class="btn btn-success">DAFTAR SEKARANG <span class="glyphicon glyphicon-send"></span></button>
					</div>
				</div>

			</fieldset>
		</form>
	</div>

</body>
<!-- Footer -->
<footer style="padding: 15px 0 10px;margin-top: 20px; background-color: #343a40; color: white; font-size:120%;">
	<p class="text-center">Copyright &copy; Evently 2017</p>

	<!-- /.container -->
</footer>
<!-- Bootstrap core JavaScript -->

<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jQuery-2.1.4.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrapvalidator.min.js"></script>
<script type="text/javascript">
	$(':checkbox').change(function() {
		var len = $(':checkbox:checked').length;
		$(':checkbox').not(':checked').prop('disabled', len >= 2)
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
						regexp: {
							regexp: /^[a-z\s]+$/i,
							message: 'Nama lengkap hanya berisi huruf dan spasi'
						},
						stringLength: {
							min: 4,
							max: 50,
							message: 'Minimal 4 karakter, Maksimal 50 karakter'
						},
						notEmpty: {
							message: 'Nama tidak boleh kosong'
						}
					}
				},
				nim: {
					validators: {
						number: {
							message: 'Inputan harus angka',
							thousandsSeparator: '', //maksudnya ini ga boleh ada spasi
							decimalSeparator: '.' //ini ga boleh ada titik
						},
						stringLength: {
							min: 5,
							max: 5,
							message: 'NIM hanya terdiri dari 5 angka'
						},
						notEmpty: {
							message: 'NIM tidak boleh kosong'
						}
					}
				},
				angkatan: {
					validators: {
						number: {
							message: 'Inputan harus angka',
							thousandsSeparator: '', //maksudnya ini ga boleh ada spasi
							decimalSeparator: '.' //ini ga boleh ada titik
						},
						stringLength: {
							min: 4,
							max: 4,
							message: 'Salah'
						},
						notEmpty: {
							message: 'Angkatan tidak boleh kosong'
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
				telepon: {
					validators: {
						number: {
							message: 'Nomor kurang tepat',
							thousandsSeparator: '', //maksudnya ini ga boleh ada spasi
							decimalSeparator: '.' //ini ga boleh ada titik
						},
						stringLength: {
							min: 10,
							max: 13,
							message: 'Nomor Salah'
						},
						notEmpty: {
							message: 'Nomer telfon tidak boleh kosong'
						}
					}
				},
				kelas: {
					validators: {
						stringLength: {
							min: 4,
						},
						notEmpty: {
							message: 'Mohon isi kelas Anda'
						}
					}
				},
				cv: {
					validators: {
						notEmpty: {
							message: 'Mohon lampirkan cv anda (.pdf)'
						},
						file: {
							extension: 'pdf',
							message: 'Input file harus pdf'
						}
					}
				},
				krs: {
					validators: {
						notEmpty: {
							message: 'Mohon lampirkan krs anda (.pdf)'
						},
						file: {
							extension: 'pdf',
							message: 'Input file harus pdf'
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
							message: 'Mohon masukan minimal 10 karakter dan maksimal 50 karakter'
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
