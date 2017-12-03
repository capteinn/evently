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
								<td><?php echo $record->cv ?></td>
								<td><?php echo $record->krs ?></td>
								<td><?php echo $record->status ?></td>
								<td><?php echo $record->nama_event ?></td>
								<td><?php echo $record->nama_sie ?></td>
								<td class="text-center">
									<a style="visibility: <?php echo $diterima; ?>" class="btn btn-sm btn-success" href="<?php echo base_url(); ?>diterima/<?php echo $record->id_pendaftaran; ?>"><i class="fa fa-check"> diterima</i></a>
									<a style="visibility: <?php echo $ditolak; ?>" class="btn btn-sm btn-danger" href="<?php echo base_url(); ?>ditolak/<?php echo $record->id_pendaftaran; ?>"><i class="fa fa-close"> ditolak</i></a>
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
