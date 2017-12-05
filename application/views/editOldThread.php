<?php

	$id_thread = '';
	$id_event = '';
	$judul = '';
	$poster = '';
	$tgl_mulai = '';
	$tgl_selesai = '';
	$deskripsi = '';

	if(!empty($threadInfo))
	{
		foreach ($threadInfo as $ti)
		{
			$id_thread = $ti->id_thread;
			$id_event = $ti->id_event;
			$judul = $ti->judul;
			$poster = $ti->poster;
			$tgl_mulai = DateTime::createFromFormat('Y-m-d', $ti->tgl_mulai)->format('m/d/Y');
			$tgl_selesai = DateTime::createFromFormat('Y-m-d', $ti->tgl_selesai)->format('m/d/Y');
			$deskripsi = $ti->deskripsi;
		}
	}
?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-users"></i> Manajemen Thread
        <small>Tambah / Ubah Thread</small>
      </h1>
    </section>
    
    <section class="content">
    
        <div class="row">
            <!-- left column -->
            <div class="col-md-8">
              <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Enter Thread Details</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    
                    <form role="form" id="addThread" action="<?php echo base_url() ?>editThread" method="post" enctype="multipart/form-data" >
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="role">Nama Event</label>
                                        <select class="form-control required" id="event" name="event">
                                            <option value="0">Select Event</option>
                                            <?php
                                            if(!empty($event))
                                            {
                                                foreach ($event as $ev)
                                                {
                                                    ?>
                                                    <option value="<?php echo $ev->id_event ?>" <?php if($ev->id_event == $id_event) {echo "selected=selected";} ?> ><?php echo $ev->nama ?></option>
                                                    <?php
                                                }
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                        <label for="fname">Judul Thread</label>
                                        <input type="text" class="form-control required" id="judul" name="judul" maxlength="128" value="<?php echo $judul; ?>" >
										<input type="hidden" id="id_thread" name="id_thread" value="<?php echo $id_thread; ?>">
									</div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">                                
                                    <div class="form-group">
                                        <label for="fname">Poster Thread</label>
                                        <input type="file" class="form-control required" id="poster" name="poster" >
                                    </div>
                                </div>   
                            </div>
							<div class="row">
                                <div class="col-md-6">                                
                                    <!-- Date -->
									<div class="form-group">
										<label>Tanggal Mulai</label>
										<div class="input-group date">
											<div class="input-group-addon">
												<i class="fa fa-calendar"></i>
											</div>
											<input type="text" name="tgl_mulai" class="form-control pull-right required" id="datepicker" value="<?php echo $tgl_mulai; ?>" >
										</div>
										<!-- /.input group -->
									</div>
									<!-- /.form group -->
                                </div>
                                <div class="col-md-6">                                
                                    <!-- Date -->
									<div class="form-group">
										<label>Tanggal Selesai</label>
										<div class="input-group date">
											<div class="input-group-addon">
												<i class="fa fa-calendar"></i>
											</div>
											<input type="text" name="tgl_selesai" class="form-control pull-right required" id="datepicker2" value="<?php echo $tgl_selesai; ?>" >
										</div>
										<!-- /.input group -->
									</div>
									<!-- /.form group -->
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="email">Deskripsi Thread</label>
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
							<?php echo validation_errors('<div class="alert alert-danger alert-dismissable">', ' <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button></div>'); ?>
						</div>
					</div>
				</div>
            </div>
        </div>    
    </section>
    
</div>
<script>
	$(function () {
		$('#datepicker').datepicker();
		$('#datepicker2').datepicker();
		
		//Date picker
		$('#datepicker').datepicker({
		  autoclose: true
		})
		
		//Date picker
		$('#datepicker2').datepicker({
		  autoclose: true
		})
	})
</script>
<script src="<?php echo base_url(); ?>assets/js/addUser.js" type="text/javascript"></script>
<script type="text/javascript">
    function resetz(){
        document.getElementById("judul").value="";
        document.getElementById("deskripsi").value="";
    }
</script>