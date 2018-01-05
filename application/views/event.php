<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
		<h1>
			<i class="fa fa-list"></i> Daftar Event
			<small>Lihat, Tambah, Edit Event</small>
		</h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12 text-right">
                <div class="form-group">
                    <a class="btn btn-primary" href="<?php echo base_url(); ?>addNewEvent"><i class="fa fa-plus"></i> Tambah Event</a>
                </div>
            </div>
        </div>
		<div class="row">
            <div class="col-xs-12">
				<div class="box">
					<!-- <div class="box-header">
						<h3 class="box-title">Daftar Event</h3>
					</div> --><!-- /.box-header -->
					<div class="box-body table-responsive no-padding">
						<table class="table table-hover">
							<tr>
								<th>No</th>
								<th>Nama Event</th>
								<th>Deskripsi</th>
								<th class="text-center">Aksi</th>
							</tr>
							<?php
							if(!empty($eventRecords))
							{
								foreach($eventRecords as $record)
								{
							?>
							<tr>
								<td><?php echo $page ?></td>
								<td><?php echo $record->nama ?></td>
								<td><?php echo $record->deskripsi ?></td>
								<td class="text-center">
									<a class="btn btn-sm btn-info" href="<?php echo base_url(); ?>editOldEvent/<?php echo $record->id_event; ?>"><i class="fa fa-pencil"></i></a>
								</td>
							</tr>
							<?php
								$page++;
								}
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
