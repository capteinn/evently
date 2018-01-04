<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
		<h1>
			<i class="fa fa-list"></i> Daftar Mahasiswa
			<small>Lihat Daftar Mahasiswa</small>
		</h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
				<div class="box">
					<div class="box-header">
						<h3 class="box-title">Daftar Mahasiswa </h3>
					</div><!-- /.box-header -->
					<div class="box-body table-responsive no-padding">
						<table class="table table-hover">
							<tr>
								<th>No</th>
								<th>NIM</th>
								<th>Nama</th>
								<th>Kelas</th>
								<th>Angkatan</th>
								<th>Jenis Kelamin</th>
								<th>Telepon</th>
								<th>Prodi</th>
								<th class="text-center">Detail</th>
							</tr>
							<?php
							if(!empty($mahasiswaRecords))
							{
								foreach($mahasiswaRecords as $record)
								{	
							?>
							<tr>
								<td><?php echo $page ?></td>
								<td><?php echo $record->nim ?></td>
								<td><?php echo $record->nama_mahasiswa ?></td>
								<td><?php echo $record->kelas ?></td>
								<td><?php echo $record->angkatan ?></td>
								<td><?php echo $record->jenkel ?></td>
								<td><?php echo $record->no_telp ?></td>
								<td><?php echo $record->nama_prodi ?></td>
								<td class="text-center">
									<a class="btn btn-sm btn-info" href="<?php echo base_url(); ?>mahasiswa_detail/<?php echo $record->nim; ?>"><i class="fa fa-pencil"></i></a>
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
