<!DOCTYPE html>
<html lang="en">

<head>
  <title>Form Registration Evently</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https:////maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
  <link rel="stylesheet" href="https:////cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css">
</head>
<body>

  <div class="container" style="width: 70%; margin-top: 3%;">
    <form class="well form-horizontal" action=" " method="post"  id="contact_form">
      <center><h3>FORM PENDAFTARAN</h3></center>
      <fieldset>

        <!-- Form Name -->
        <h3 style="margin-left: 20%;">Identitas</h3>

          <!-- Text input-->

          <div class="form-group" style="margin-top: 3%;">
            <label class="col-md-4 control-label">NIM</label>
            <div class="col-md-4 inputGroupContainer">
              <div class="input-group">
                <input  name="nim" placeholder="NIM" class="form-control"  type="text">
              </div>
              <span>Contoh : 08xxx</span>
            </div>
          </div>

<!-- Text input-->

  <div class="form-group">
    <label class="col-md-4 control-label" >Nama</label>
      <div class="col-md-4 inputGroupContainer">
        <div class="input-group">
          <input name="nama_lengkap" placeholder="Nama lengkap" class="form-control"  type="text">
        </div>
      </div>
    </div>

<!-- Select input-->
       <div class="form-group">
         <label class="col-md-4 control-label">Prodi</label>
         <div class="col-md-4 inputGroupContainer">
           <div class="input-group">
             <select name="prodi" class="form-control selectpicker" >
               <option value=" " >Pilih Prodi</option>
               <option>Komsi</option>
               <option>DTE</option>
               <option>Metins</option>
               <option>Elins</option>
               <option>DTJ</option>
             </select>
           </div>
         </div>
       </div>

      <!-- Select input-->
              <div class="form-group">
                <label class="col-md-4 control-label">Angkatan</label>
                <div class="col-md-4 inputGroupContainer">
                  <div class="input-group">
                    <select name="angkatan" class="form-control selectpicker" >
                      <option value=" " >Pilih angkatan</option>
                      <option>2015</option>
                      <option>2016</option>
                      <option>2017</option>
                    </select>
                  </div>
                </div>
              </div>

<!-- Text input-->

      <div class="form-group">
          <label class="col-md-4 control-label">Kelas</label>
            <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                  <input name="kelas" placeholder="Kelas" class="form-control"  type="text">
                </div>
            </div>
      </div>

<!-- Select input-->
      <div class="form-group">
        <label class="col-md-4 control-label">Jenis Kelamin</label>
          <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
              <select name="jenkel" class="form-control selectpicker" >
                <option value=" ">Jenis Kelamin</option>
                <option>Laki - laki</option>
                <option>Perempuan</option>
              </select>
            </div>
          </div>
     </div>

<!-- Input file-->

    <div class="form-group">
      <label class="col-md-4 control-label" >CV</label>
        <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
			         <input type="file" name="input_pdf">
		      </div>
	      </div>
    </div>
<!-- Input file-->

    <div class="form-group" style="margin-bottom: 3%;">
      <label class="col-md-4 control-label" >KRS</label>
        <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
    			    <input type="file" name="input_krs">
    		    </div>
    	    </div>
    </div>
    <span style="background-color: #fff;"><hr style="display: block;
    margin-top: 0.5em;
    margin-bottom: 0.5em;
    margin-left: auto;
    margin-right: auto;
    border-style: inset;
    border-width: 1px;"></span>

    <h3 style="margin-left: 20%;">Pilihan 1</h3>
    <!-- Select input-->
            <div class="form-group" style="margin-top: 3%;">
              <label class="col-md-4 control-label">Sie</label>
              <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                  <select name="sie" class="form-control selectpicker" >
                    <option value=" " >Pilih sie</option>
                    <option>Acara</option>
                    <option>DDD</option>
                    <option>Humas</option>
                    <option>Transport</option>
                    <option>Konsumsi</option>
                  </select>
                </div>
              </div>
            </div>
<!-- Text area -->

    <div class="form-group">
      <label class="col-md-4 control-label">Alasan</label>
        <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
              <textarea class="form-control" name="comment" placeholder="Project Description"></textarea>
            </div>
          </div>
      </div>

<!-- Success message -->
<!-- <div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Thanks for contacting us, we will get back to you shortly.</div> -->

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4">
    <button type="submit" class="btn btn-warning" >Daftar<span class="glyphicon glyphicon-send"></span></button>
    <button type="submit" class="btn btn-warning" >Pilihan 2<span class="glyphicon glyphicon-send"></span></button>
  </div>
</div>

</fieldset>
</form>
</div>
    </div><!-- /.container -->

</body>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js">
</script>
<script type="text/javascript" src="https:////maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js">
</script>
<script type="text/javascript" src="https:////cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js">
</script>
<script type="text/javascript">


$(document).ready(function() {
$('#contact_form').bootstrapValidator({
    // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
    feedbackIcons: {
        valid: 'glyphicon glyphicon-ok',
        invalid: 'glyphicon glyphicon-remove',
        validating: 'glyphicon glyphicon-refresh'
    },
    fields: {
        nim: {
            validators: {
                    integer: {
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
         nama_lengkap: {
            validators: {
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
        prodi: {
            validators: {
                notEmpty: {
                    message: 'Pilih prodi yang sesuai'
                }
            }
        },
        angkatan: {
          validators: {
            notEmpty: {
              message: 'Pilih angkatan yang sesuai'
            }
          }
        },
        kelas: {
          validators: {
            notEmpty: {
              message: 'Kelas tidak boleh kosong'
            }
          }
        },
        jenkel: {
          validators: {
            notEmpty: {
              message: 'Pilih jenis kelamin'
            }
          }
        },
        sie: {
          validators: {
            notEmpty: {
              message: 'Pilih sie terlebih dahulu'
            }
          }
        },
        input_pdf: {
          validators: {
            notEmpty: {
              message: 'Input file terlebih dahulu (.pdf)'
            },
            file: {
              extension: 'pdf',
              message: 'Input file harus pdf'
            }
          }
        },
        input_krs: {
          validators: {
            notEmpty: {
              message: 'Input file terlebih dahulu (.pdf)'
            },
            file: {
              extension: 'pdf',
              message: 'Input file harus pdf'
            }
          }
        },
        comment: {
            validators: {
                  stringLength: {
                    min: 10,
                    max: 200,
                    message:'Minimal 10 karakter dan maksimal 200 karakter'
                },
                notEmpty: {
                    message: 'Alasan tidak dapat kosong'
                }
                }
            }
        }
    })

    .on('success.form.bv', function(e) {
        $('#success_message').slideDown({ opacity: "show" }, "slow") // Do something ...
            $('#contact_form').data('bootstrapValidator').resetForm();

        // Prevent form submission
        e.preventDefault();

        // Get the form instance
        var $form = $(e.target);

        // Get the BootstrapValidator instance
        var bv = $form.data('bootstrapValidator');

        // Use Ajax to submit form data
        $.post($form.attr('action'), $form.serialize(), function(result) {
            console.log(result);
        }, 'json');
    });

});


</script>
</html>
