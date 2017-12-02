<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
		<h1>
			<i class="fa fa-list"></i> List Mapping Event
			<small>Lihat, Tambah, Edit Mapping Event</small>
		</h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12 text-right">
                <div class="form-group">
                    <a class="btn btn-primary" href="<?php echo base_url(); ?>addNewMapping"><i class="fa fa-plus"></i> Tambah Mapping Event</a>
                </div>
            </div>
        </div>
		<div class="row">
            <div class="col-xs-12">
				<div class="box">
					<div class="box-header">
						<h3 class="box-title">List Mapping Event</h3>
					</div><!-- /.box-header -->
					<div class="box-body table-responsive no-padding">
						<table class="table table-hover">
							<tr>
								<th>No</th>
								<th>Nama Event</th>
								<th>Sie</th>
								<th>Deskripsi</th>
								<th class="text-center">Actions</th>
							</tr>
							<?php
							if(!empty($mappingRecords))
							{
								$no = 1;
								foreach($mappingRecords as $record)
								{
							?>
							<tr>
								<td><?php echo $no ?></td>
								<td><?php echo $record->nama_event ?></td>
								<td><?php echo $record->nama_sie ?></td>
								<td><?php echo $record->deskripsi ?></td>
								<td class="text-center">
									<a class="btn btn-sm btn-info" href="<?php echo base_url(); ?>editOldMapping/<?php echo $record->id_mapping_event; ?>"><i class="fa fa-pencil"></i></a>
								</td>
							</tr>
							<?php
								$no++;
								}
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
