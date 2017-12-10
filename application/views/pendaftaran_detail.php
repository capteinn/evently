<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-users"></i> Manajemen Detail Pendaftaran
        <small>Detail Pendaftaran</small>
      </h1>
    </section>
    
    <section class="content">
    
        <div class="row">
            <!-- left column -->
            <div class="col-md-8">
              <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Detail Pendaftaran</h3>
                    </div><!-- /.box-header -->
					<hr style="padding: 0; margin: 0">
                    <div class="box-header">
						<div class="row">
							<div class="col-md-1">
								<h4>Nama</h4>
							</div>
							<div class="col-md-4">
								<h4>: &nbsp;<?php echo $pendaftaranDetailRecords[0]->nama_mahasiswa; ?></h4>
							</div>
						</div>
						<div class="row">
							<div class="col-md-1">
								<h4>NIM</h4>
							</div>
							<div class="col-md-4">
								<h4>: &nbsp;<?php echo $pendaftaranDetailRecords[0]->nim; ?></h4>
							</div>
						</div>
						<div class="row">
							<div class="col-md-1">
								<h4>Event</h4>
							</div>
							<div class="col-md-4">
								<h4>: &nbsp;<?php echo $pendaftaranDetailRecords[0]->nama_event; ?></h4>
							</div>
						</div>
						<div class="row">
							<div class="col-md-1">
								<h4>Alasan</h4>
							</div>
							<div class="col-md-11">
								<h4>: &nbsp;<?php echo $pendaftaranDetailRecords[0]->alasan; ?></h4>
							</div>
						</div>
                    </div><!-- /.box-header -->                    
					
					<!-- form start -->
                    <div class="box-body table-responsive no-padding">
						<table class="table table-hover">
							<tr>
								<th>No</th>
								<th>Sie</th>
								<th>Status</th>
								<th>Diterima</th>
								<th>Ditolak</th>
								<th></th>
							</tr>
							<?php
								if(!empty($pendaftaranDetailRecords))
								{
									$no = 1;
									foreach($pendaftaranDetailRecords as $record)
									{
							?>
							<tr>
								<td><?php echo $no ?></td>
								<td><?php echo $record->nama_sie ?></td>
								<td>
									<?php 
										if($record->status == "diterima"){
											echo "<span class='label label-success'>Diterima</span>";
										}else if($record->status == "ditolak"){
											echo "<span class='label label-danger'>Ditolak</span>";
										}else{
											echo "<span class='label label-warning'>Proses</span>";
										}
									?>
								</td>
								<td width="100px" >
									<a href="<?php echo base_url(); ?>diterima/<?php echo $record->id_detail_pendaftaran . "/" . $record->id_pendaftaran; ?>" type="button" class="btn btn-success" >
										<i class="fa fa-check"></i> Diterima
									</a>
								</td>
								<td width="100px" >
									<a href="<?php echo base_url(); ?>ditolak/<?php echo $record->id_detail_pendaftaran . "/" . $record->id_pendaftaran; ?>" type="button" class="btn btn-danger" >
										<i class="fa fa-close"></i> Ditolak
									</a>
								</td>
								<td></td>
							</tr>
							<?php
								$no++;}
								}
							?>
						</table>
					</div>
                    <div class="box-footer">
                        <a href="<?php echo base_url(); ?>pendaftaranListing/semua" type="button" class="btn btn-primary" />Kembali</a>
                    </div>
                </div>
            </div>
        </div>    
    </section>
</div>
<script src="<?php echo base_url(); ?>assets/js/addUser.js" type="text/javascript"></script>