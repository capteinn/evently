<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-users"></i> Manajemen Detail Mahasiswa
        <small>Detail Mahasiswa</small>
      </h1>
    </section>
    
    <section class="content">
    
        <div class="row">
            <!-- left column -->
            <div class="col-md-9 col-xs-12">
              <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Detail Mahasiswa : <?php echo $mahasiswaDetailRecords[0]->nama; ?> ( <?php echo $mahasiswaDetailRecords[0]->nim; ?> )</h3>
                    </div><!-- /.box-header -->          
					
					<!-- form start -->
                    <div class="box-body table-responsive no-padding">
						<table class="table table-hover">
							<tr>
								<th>No</th>
								<th>Event</th>
								<th>Tanggal Mendaftar</th>
								<th>Jam Mendaftar</th>
								<th>Sie</th>
								<th>Status</th>
							</tr>
							<?php
								if(!empty($mahasiswaDetailRecords))
								{
									$no = 1;
									foreach($mahasiswaDetailRecords as $record)
									{
							?>
							<tr>
								<td><?php echo $no ?></td>
								<td><?php echo $record->nama_event ?></td>
								<td><?php echo date('j M Y', strtotime($record->createdDtm)); ?></td>
								<td><?php echo date('g:i A', strtotime($record->createdDtm)); ?></td>
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
							</tr>
							<?php
								$no++;}
								}
							?>
						</table>
					</div>
                    <div class="box-footer">
                        <a href="<?php echo base_url(); ?>mahasiswaListing" type="button" class="btn btn-primary" />Kembali</a>
                    </div>
                </div>
            </div>
			<div class="col-md-3 col-sm-6 col-xs-12">
			  <div class="info-box">
				<span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>

				<div class="info-box-content">
				  <span class="info-box-text">Event yang diikuti</span>
				  <span style="font-size: 40px;" class="info-box-number"><?php echo $countEvent; ?></span>
				</div>
				<!-- /.info-box-content -->
			  </div>
			  <!-- /.info-box -->
			</div>
			<!-- /.col -->
        </div>    
    </section>
</div>
<script src="<?php echo base_url(); ?>assets/js/addUser.js" type="text/javascript"></script>