<?php

	$id_sie = '';
	$nama = '';
	$deskripsi = '';

	if(!empty($sieInfo))
	{
		foreach ($sieInfo as $uf)
		{
			$id_sie = $uf->id_sie;
			$nama = $uf->nama;
			$deskripsi = $uf->deskripsi;
		}
	}
?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-users"></i> Manajemen Pengguna
        <small>Tambah / Ubah Pengguna</small>
      </h1>
    </section>
    
    <section class="content">
    
        <div class="row">
            <!-- left column -->
            <div class="col-md-8">
              <!-- general form elements -->

                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Enter User Details</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    
                    <form role="form" action="<?php echo base_url() ?>editSie" method="post" id="editSie" role="form">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-12">                                
                                    <div class="form-group">
                                        <label for="fname">Nama Sie</label>
                                        <input type="text" class="form-control required" id="nama" name="nama" maxlength="128" value="<?php echo $nama; ?>" >
                                        <input type="hidden" id="id_sie" name="id_sie" value="<?php echo $id_sie; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="email">Deskripsi Sie</label>
                                        <textarea type="text" class="form-control required" id="deskripsi"  name="deskripsi" rows="5" ><?php echo $deskripsi; ?></textarea>
                                    </div>
                                </div>  
                            </div>
                        </div><!-- /.box-body -->
    
                        <div class="box-footer">
                            <input type="submit" class="btn btn-primary" value="Submit" />
                            <input type="button" class="btn btn-default" onClick="resetz()" value="Reset" />
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-4">
                <?php
                    $this->load->helper('form');
                    $error = $this->session->flashdata('error');
                    if($error)
                    {
                ?>
                <div class="alert alert-danger alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <?php echo $this->session->flashdata('error'); ?>                    
                </div>
                <?php } ?>
                <?php  
                    $success = $this->session->flashdata('success');
                    if($success)
                    {
                ?>
                <div class="alert alert-success alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <?php echo $this->session->flashdata('success'); ?>
                </div>
                <?php } ?>
                
                <div class="row">
                    <div class="col-md-12">
                        <?php echo validation_errors('<div class="alert alert-danger alert-dismissable">', ' <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button></div>'); ?>
                    </div>
                </div>
            </div>
        </div>    
    </section>
</div>

<script src="<?php echo base_url(); ?>assets/js/editUser.js" type="text/javascript"></script>
<script type="text/javascript">
    function resetz(){
        document.getElementById("nama").value="";
        document.getElementById("deskripsi").value="";
    }
</script>