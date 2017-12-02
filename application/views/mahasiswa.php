<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
		<h1>
			<i class="fa fa-list"></i> List Mahasiswa
			<small>Lihat List Mahasiswa</small>
		</h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
				<div class="box">
					<div class="box-header">
						<h3 class="box-title">List Mahasiswa</h3>
					</div><!-- /.box-header -->
					<div class="box-body table-responsive no-padding">
						<table class="table table-hover">
							<tr>
								<th>No</th>
								<th>NIM</th>
								<th>Nama</th>
								<th>Kelas</th>
								<th>Angkatan</th>
								<th>Gender</th>
								<th>Nomor Telepon</th>
								<th>Prodi</th>
							</tr>
							<?php
							if(!empty($mahasiswaRecords))
							{
								$no = 1;
								foreach($mahasiswaRecords as $record)
								{	
							?>
							<tr>
								<td><?php echo $no ?></td>
								<td><?php echo $record->nim ?></td>
								<td><?php echo $record->nama_mahasiswa ?></td>
								<td><?php echo $record->kelas ?></td>
								<td><?php echo $record->angkatan ?></td>
								<td><?php echo $record->jenkel ?></td>
								<td><?php echo $record->no_telp ?></td>
								<td><?php echo $record->nama_prodi ?></td>
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
