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
						<h3 class="box-title">Daftar Pendaftaran</h3>
						<br />
						<br />
						<div class="row">
							<div class="col-md-6">
							</div>
							<div class="col-md-1">
								<p>Filter List : </p>
							</div>
							<div class="col-md-1">
								<form action="<?php echo base_url(); ?>pendaftaranListing/semua" method="post">
									<input id="semua" type="radio" name="filterStatus" onclick="javascript:submit()" value="semua"<?php if (isset($_POST['filterStatus']) && $_POST['filterStatus'] == 'semua') echo ' checked="checked"';?>/><label for="dateasc">Semua</label>
									<br>
								</form>
							</div>
							<div class="col-md-1">
								<form action="<?php echo base_url(); ?>pendaftaranListing/proses" method="post">
									<input id="proses" type="radio" name="filterStatus" onclick="javascript:submit()" value="proses" <?php if (isset($_POST['filterStatus']) && $_POST['filterStatus'] == 'proses') echo ' checked="checked"';?> /><label for="datedesc">Proses</label>
									<br>
								</form>
							</div>
							<div class="col-md-1">
								<form action="<?php echo base_url(); ?>pendaftaranListing/ditolak" method="post">
									<input id="ditolak" type="radio" name="filterStatus" onclick="javascript:submit()" value="ditolak" <?php if (isset($_POST['filterStatus']) && $_POST['filterStatus'] == 'ditolak') echo ' checked="checked"';?> /><label for="datedesc">Ditolak</label>
								</form>
							</div>
							<div class="col-md-2">
								<form action="<?php echo base_url(); ?>pendaftaranListing/diterima" method="post">
									<input id="diterima" type="radio" name="filterStatus" onclick="javascript:submit()" value="diterima" <?php if (isset($_POST['filterStatus']) && $_POST['filterStatus'] == 'diterima') echo ' checked="checked"';?> /><label for="datedesc">Diterima</label>
									<br>
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
								<th>CV</th>
								<th>KRS</th>
								<th>Status</th>
								<th class="text-center">Detail</th>
								<th></th>
							</tr>
							<?php
							if(!empty($pendaftaranRecords))
							{
								$no = 1;
								foreach($pendaftaranRecords as $record)
								{
									if ($record->status=="ditolak") {
										$diterima = "block";
										$ditolak = "hidden";
									} else if ($record->status=="diterima") {
										$diterima = "hidden";
										$ditolak = "block";
									} else {
										$diterima = "block";
										$ditolak = "block";
									}
							?>
							<tr>
								<td></td>
								<td><?php echo $no ?></td>
								<td><?php echo $record->nim ?></td>
								<td><?php echo $record->nama_mahasiswa ?></td>
								<td>
									<a href="<?php echo base_url();?>assets/mahasiswa/cv<?php echo $record->cv ?>" target="_blank" style="max-width: 5px;">
									<img src="<?php echo base_url();?>/assets/images/pdf.png" style="max-width: 30px;"></a> 
								</td>
								<td>
									<a href="<?php echo base_url();?>assets/mahasiswa/krs<?php echo $record->krs ?>" target="_blank" style="max-width: 5px;">
									<img src="<?php echo base_url();?>/assets/images/pdf.png" style="max-width: 30px;"></a>
								</td>
								<td>
								<?php
									
									//------------ STATUS PENDAFTARAN -----------------//
									
									//----- mengambil status pendaftaran -----
									
									$status_pendaftaran = $this->pendaftaran_model->status_pendaftaran($record->id_pendaftaran);
									
									//----- cek user mendaftar 1 / 2 sie -----
									
									if (!empty($status_pendaftaran[1])) {
										if($status_pendaftaran[0]->status=='proses' && $status_pendaftaran[1]->status=='proses' || $status_pendaftaran[0]->status=='ditolak' && $status_pendaftaran[1]->status=='proses' || $status_pendaftaran[0]->status=='proses' && $status_pendaftaran[1]->status=='ditolak') {
											$statusnya = "proses";
										} else if ($status_pendaftaran[0]->status=='ditolak' && $status_pendaftaran[1]->status=='ditolak') {
											$statusnya = "ditolak";
										}else{
											$statusnya = "diterima";
										}
									}else{
										$statusnya = $sp[0]->status;
									}
									
									// echo $statusnya;

									//----- cek statusnya dan dioutputkan ----
									
									if($statusnya == "diterima"){
										echo "<span class='label label-success'>Diterima</span>";
									}else if($statusnya == "ditolak"){
										echo "<span class='label label-danger'>Ditolak</span>";
									}else{
										echo "<span class='label label-warning'>Proses</span>";
									}
								?>
								</td>
								<td width="100px" >
									<button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-default">
										<i class="fa fa-check"></i> Detail
									</button>
								</td>
								<td>
									<div class="col-md-1">
								</td>
								<div class="modal modal-default fade" id="modal-default">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header ">
												<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<span aria-hidden="true">&times;</span></button>
												<center><h4 class="modal-title">Detail Pendaftaran</h4></center>
											</div>
											<div class="modal-body">
												<center><div class="row">
													<div class="col-md-6">
														<p style="font-size: 20px;">Nama : <?php echo $record->nama_mahasiswa; ?></p>
													</div>
													<div class="col-md-6">
														<p style="font-size: 20px;">Nim : <?php echo $record->nim; ?></p>
													</div>
												</div></center>
												<div class="row">
													<div class="col-md-1">
													</div>
													<div class="col-md-10" style="border-bottom: solid #f1f1f1 1px; margin-bottom: 10px;">
													<center><p>Mendaftar pada Event</p></center>
													<center><h3><strong><?php echo $record->nama_event ?></strong></h3></center>
													<br>
													<div class="col-md-4">
														<p><b>Sie</b></p>
													</div>
													<div class="col-md-3 text-center">
														<p><b>Status</b></p>
													</div>
													<div class="col-sm-3">
														<p><b>Diterima</b></p>
													</div>
													<div class="col-md-2">
														<p><b>Ditolak </b></p>
													</div>
													</div>
												</div>
												<?php
												$detailPendaftaran = $this->pendaftaran_model->detailPendaftaran($record->id_pendaftaran);
												
												foreach($detailPendaftaran as $records)
													{
												?>
												<div class="row" >
													<div class="col-md-1">
													</div>
													<div class="col-md-4">
														<p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $records->nama_sie; ?></p>
													</div>
													<div class="col-md-2">
														<?php 
															if($records->status == "diterima"){
																echo "<span class='label label-success'>Diterima</span>";
															}else if($records->status == "ditolak"){
																echo "<span class='label label-danger'>Ditolak</span>";
															}else{
																echo "<span class='label label-warning'>Proses</span>";
															}
														?>
													</div>
													<div class="col-md-2">
														<a href="<?php echo base_url(); ?>diterima/<?php echo $records->id_pendaftaran ."/" . $records->id_sie; ?>"><span class='label label-success'>Diterima</span></a>
													</div>
													<div class="col-md-1">
														<a href="<?php echo base_url(); ?>ditolak/<?php echo $records->id_pendaftaran ."/" . $records->id_sie; ?>"><span class='label label-danger'>Ditolak</span></a>
													</div>
												</div>
												<?php
													}
												?>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
											</div>
										</div>
										<!-- /.modal-content -->
									</div>
									<!-- /.modal-dialog -->
								</div>
								<!-- /.modal -->
							</tr>
							<?php
								$no++;}
							}
							?>
						</table> 
					</div><!-- /.box-body -->
				</div><!-- /.box -->
            </div>
        </div>
    </section>
</div>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/common.js" charset="utf-8"></script>
