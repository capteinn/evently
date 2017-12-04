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
								<th>Id</th>
								<th>NIM</th>
								<th>Nama</th>
								<th>CV</th>
								<th>KRS</th>
								<th>Status</th>
								<th>Event</th>
								<th>Sie</th>
								<th class="text-center">Aksi</th>
							</tr>
							<?php
							if(!empty($pendaftaranRecords))
							{
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
									
									$no = 1;
							?>
							<tr>
								<td><?php echo $no ?></td>
								<td><?php echo $record->nim ?></td>
								<td><?php echo $record->nama_mahasiswa ?></td>
								<td>
									<a href="<?php echo base_url();?>assets/mahasiswa/cv<?php echo $record->cv ?>" target="_blank" style="max-width: 25px;">
									<img src="<?php echo base_url();?>/assets/images/pdf.png" style="max-width: 50px;"></a> 
								</td>
								<td>
									<a href="<?php echo base_url();?>assets/mahasiswa/krs<?php echo $record->krs ?>" target="_blank" style="max-width: 25px;">
									<img src="<?php echo base_url();?>/assets/images/pdf.png" style="max-width: 50px;"></a>
								</td>
								<td><?php 
										if($record->status == "diterima"){
											echo "<span class='label label-success'>Diterima</span>";
										}else if($record->status == "ditolak"){
											echo "<span class='label label-danger'>Ditolak</span>";
										}else{
											echo "<span class='label label-warning'>Proses</span>";
										}
								?></td>
								<td><?php echo $record->nama_event ?></td>
								<td><?php echo $record->nama_sie ?></td>
								<td class="text-center">
									<a style="visibility: <?php echo $diterima; ?>" class="btn btn-sm btn-success" href="<?php echo base_url(); ?>diterima/<?php echo $record->id_pendaftaran; ?>"><i class="fa fa-check"> Diterima</i></a>
									<a style="visibility: <?php echo $ditolak; ?>" class="btn btn-sm btn-danger" href="<?php echo base_url(); ?>ditolak/<?php echo $record->id_pendaftaran; ?>"><i class="fa fa-close"> Ditolak</i></a>
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
