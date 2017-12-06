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
