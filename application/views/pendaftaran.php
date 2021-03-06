<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
		<h1>
			<i class="fa fa-list"></i> Daftar Pendaftaran
			<small>Lihat Daftar Pendaftaran</small>
		</h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
				<div class="box">
					<div class="box-header">
						<h3 class="box-title">List Pendaftaran <b><?php echo $this->uri->segment(3); ?> </b></h3>
						<br />
						<br />
						<div class="row">
							<div class="col-md-4">
							</div>
							<div class="col-md-1">
								<p>Filter List : </p>
							</div>
							<div class="col-md-2">
								<form action="<?php echo base_url(); ?>pendaftaranListing/semua" method="post">
									<select id="filterEvent" name="filterEvent" onChange="window.location.href=this.value" >
										<option value="">Pilih Event</option>
										<?php
											if(!empty($eventRecords)){
												foreach($eventRecords as $record){
													
										?>
										<option value="<?php echo base_url(); ?>pendaftaranListing/<?php echo $this->uri->segment(2); ?>/<?php echo $record->nama; ?>" <?php if($record->nama == $this->uri->segment(3)) {echo "selected=selected";} ?>><?php echo $record->nama; ?></option>
										<?php
												}
											}
										?>
									</select>
								</form>
							</div>
						</div>
					</div><!-- /.box-header -->
					<div class="box-body table-responsive no-padding">
						<table class="table table-hover">
							<tr>
								<th></th>
								<th>No</th>
								<th>NIM</th>
								<th>Nama</th>
								<th>Prodi</th>
								<th>Event</th>
								<th>Tanggal Mendaftar</th>
								<th>Jam Mendaftar</th>
								<th>BERKAS</th>
								<th>Status</th>
								<th class="text-center">Detail</th>
								<th></th>
							</tr>
							<?php
							if(!empty($pendaftaranRecords))
							{
								foreach($pendaftaranRecords as $record)
								{
							?>
							<tr>
								<td></td>
								<td><?php echo $page ?></td>
								<td><?php echo $record->nim ?></td>
								<td><?php echo $record->nama_mahasiswa ?></td>
								<td><?php echo $record->prodi ?></td>
								<td><?php echo $record->event ?></td>
								<td><?php echo date('j M Y', strtotime($record->createdDtm)); ?></td>
								<td><?php echo date('g:i A', strtotime($record->createdDtm)); ?></td>
								<td>
									<a href="<?php echo base_url();?>assets/mahasiswa/<?php echo $record->cv ?>" target="_blank" style="max-width: 5px;">
									<img src="<?php echo base_url();?>/assets/images/pdf.png" style="max-width: 30px;"></a>

									<a href="<?php echo base_url();?>assets/mahasiswa/<?php echo $record->krs ?>" target="_blank" style="max-width: 5px;">
									<img src="<?php echo base_url();?>/assets/images/pdf.png" style="max-width: 30px;"></a>
								</td>
								<td>
								<?php
									
									//------------ STATUS PENDAFTARAN -----------------//
									
									if($record->status == "diterima"){
										echo "<span class='label label-success'>Diterima</span>";
									}else if($record->status == "ditolak"){
										echo "<span class='label label-danger'>Ditolak</span>";
									}else{
										echo "<span class='label label-warning'>Proses</span>";
									}
								?>
								</td>
								<td class="text-center">
									<a class="btn btn-sm btn-info" href="<?php echo base_url(); ?>pendaftaran_detail/<?php echo $record->id_pendaftaran; ?>"><i class="fa fa-pencil"></i></a>
								</td>
								<!-- sepertinya kita beralih gak usah pake modal, tapi halaman baru ya :v -->
								<!--<td width="100px" >
									<button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-default">
										<i class="fa fa-check"></i> Detail
									</button>
								</td>-->
								<td>
								</td>
							</tr>
							<?php
								$page++;}
							}
							?>
						</table> 
					</div><!-- /.box-body -->
					<div class="box-footer clearfix">
						<?php echo $this->pagination->create_links(); ?>
					</div>
				</div><!-- /.box -->
            </div>
        </div>
    </section>
</div>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/common.js" charset="utf-8"></script>
