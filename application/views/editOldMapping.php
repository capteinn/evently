<?php

$mappingId = '';
$id_event = '';
$id_sie = '';
$deskripsi = '';

if(!empty($mappingInfo))
{
    foreach ($mappingInfo as $mi)
    {
        $mappingId = $mi->id_mapping_event;
        $id_event = $mi->id_event;
        $id_sie = $mi->id_sie;
        $deskripsi = $mi->deskripsi;
    }
}


?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-users"></i> Manajemen Mapping Event
        <small>Tambah / Ubah Mapping Event</small>
      </h1>
    </section>
    
    <section class="content">
    
        <div class="row">
            <!-- left column -->
            <div class="col-md-8">
              <!-- general form elements -->
                
                
                
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Enter Mapping Event Details</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    
                    <form role="form" action="<?php echo base_url() ?>editMapping" method="post" id="editMapping" role="form">
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
                                        <label for="role">Jenis Sie</label>
                                        <select class="form-control required" id="sie" name="sie">
                                            <option value="0">Select Sie</option>
                                            <?php
                                            if(!empty($sie))
                                            {
                                                foreach ($sie as $si)
                                                {
                                                    ?>
                                                    <option value="<?php echo $si->id_sie ?>" <?php if($si->id_sie == $id_sie) {echo "selected=selected";} ?> ><?php echo $si->nama ?></option>
                                                    <?php
                                                }
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div> 
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="email">Deskripsi Mapping Event</label>
                                        <textarea type="text" class="form-control required" id="deskripsi"  name="deskripsi" rows="5" ><?php echo $deskripsi; ?></textarea>
										<input type="hidden" id="id_mapping" name="id_mapping" value="<?php echo $mappingId; ?>">
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
        document.getElementById("deskripsi").value="";
    }
</script>