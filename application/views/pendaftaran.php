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

						<form action="<?php echo base_url(); ?>pendaftaranListing/semua" method="post">
							<input id="semua" type="radio" name="filterStatus" onclick="javascript:submit()" value="semua"<?php if (isset($_POST['filterStatus']) && $_POST['filterStatus'] == 'semua') echo ' checked="checked"';?>/><label for="dateasc">Semua</label>
							<br>
						</form>
						<form action="<?php echo base_url(); ?>pendaftaranListing/proses" method="post">
							<input id="proses" type="radio" name="filterStatus" onclick="javascript:submit()" value="proses" <?php if (isset($_POST['filterStatus']) && $_POST['filterStatus'] == 'proses') echo ' checked="checked"';?> /><label for="datedesc">Proses</label>
							<br>
						</form>
						<form action="<?php echo base_url(); ?>pendaftaranListing/diterima" method="post">
							<input id="diterima" type="radio" name="filterStatus" onclick="javascript:submit()" value="diterima" <?php if (isset($_POST['filterStatus']) && $_POST['filterStatus'] == 'diterima') echo ' checked="checked"';?> /><label for="datedesc">Diterima</label>
							<br>
						</form>
						<form action="<?php echo base_url(); ?>pendaftaranListing/ditolak" method="post">
							<input id="ditolak" type="radio" name="filterStatus" onclick="javascript:submit()" value="ditolak" <?php if (isset($_POST['filterStatus']) && $_POST['filterStatus'] == 'ditolak') echo ' checked="checked"';?> /><label for="datedesc">Ditolak</label>
						</form>

					</div><!-- /.box-header -->
					<div class="box-body table-responsive no-padding">
						<table class="table table-hover">
							<tr>
								<th>No</th>
								<th>NIM</th>
								<th>Nama</th>
								<th>CV</th>
								<th>KRS</th>
								<!--<th>Status</th>-->
								<th colspan="2" class="text-center">Aksi</th>
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
								<td><?php echo $no ?></td>
								<td><?php echo $record->nim ?></td>
								<td><?php echo $record->nama_mahasiswa ?></td>
								<td>
									<a href="<?php echo base_url();?>assets/mahasiswa/cv<?php echo $record->cv ?>" target="_blank" style="max-width: 5px;">
									<img src="<?php echo base_url();?>/assets/images/pdf.png" style="max-width: 50px;"></a> 
								</td>
								<td>
									<a href="<?php echo base_url();?>assets/mahasiswa/krs<?php echo $record->krs ?>" target="_blank" style="max-width: 5px;">
									<img src="<?php echo base_url();?>/assets/images/pdf.png" style="max-width: 50px;"></a>
								</td>
								<!-- status ini sengaja disembunyikan dulu, kalau mau lihat detailnya klik diterima-->
								<!--<td>
								<?php 
										if($record->status == "diterima"){
											echo "<span class='label label-success'>Diterima</span>";
										}else if($record->status == "ditolak"){
											echo "<span class='label label-danger'>Ditolak</span>";
										}else{
											echo "<span class='label label-warning'>Proses</span>";
										}
								?>
								</td>-->
								<td width="100px" >
									<button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-info">
										<i class="fa fa-check"></i> Detail
									</button>
								</td>
								<td width="100px" >
									<a style="visibility: <?php echo $ditolak; ?>; height: 34px;" class="btn btn-sm btn-danger" href="<?php echo base_url(); ?>ditolak/<?php echo $record->id_pendaftaran; ?>"><i class="fa fa-close"> Ditolak</i></a>
								</td>
								<div class="modal modal-info fade" id="modal-info">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
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
													<center><p>Mendaftar pada Event</p></center>
													<center><h3><strong><?php echo $record->nama_event ?></strong></h3></center>
													<div class="col-md-8">
														<p>Pada Sie : </p>
													</div>
													<div class="col-md-4">
														<p>Aksi </p>
													</div>
												</div>
												<?php
												$detailPendaftaran = $this->pendaftaran_model->detailPendaftaran($record->id_pendaftaran);
												
												foreach($detailPendaftaran as $records)
													{
												?>
												<div class="row" >
													<div class="col-md-4">
														<p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $records->nama_sie; ?></p>
													</div>
													<div class="col-md-4">
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
													<div class="col-md-4">
														<a href="<?php echo base_url(); ?>diterima/<?php echo $records->id_pendaftaran ."/" . $records->id_sie; ?>"><span class='label label-success'>Diterima</span></a>
													</div>
												</div>
												<?php
													}
												?>
												<br>
												<!--untuk menampilkan dia diterimanya di sie yang mana, tapi masih bug, dan angel le mikir :v -->
												<!--<div class="row">
													<center><div class="col-md-12">
														<p>Diterima pada</p>
														<h3>
														<i>
														<?php 
															if($record->status == "diterima"){
																echo $record->nama_sie;
															} else {
																echo "Sedang dalam pemeriksaan";
															}
														?>
														</i></h3>
													</div></center>
												</div>-->
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
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
