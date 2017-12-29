<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard
        <small>Control panel</small>
      </h1>
    </section>
    
    <section class="content">
		<div class="row">
			<!-- ./col -->
			<?php
				if ($role != ROLE_ADMIN)
				{
					if(!empty($pendaftaranRecords)){
						foreach ($pendaftaranRecords as $record){
							//max pendaftar
							$max_pendaftar = 50;
							$persentase = ($record->jumlahPendaftar/$max_pendaftar)*100;
			?>
			<!-- /.col -->
			<div class="col-md-4 col-sm-6 col-xs-12">
			  <div class="info-box bg-yellow">
				<span class="info-box-icon"><i class="fa fa-calendar"></i></span>

				<div class="info-box-content">
				  <span class="info-box-text">Event <?php echo $record->event; ?></span>
				  <span class="info-box-number"><?php echo $record->jumlahPendaftar; ?> <small>Pendaftar</small></span>

				  <div class="progress">
					<div class="progress-bar" style="width: <?php echo $persentase; ?>%"></div>
				  </div>
					  <span class="progress-description">
						<?php echo $persentase; ?>% menuju maximum <?php echo $max_pendaftar; ?> Pendaftar
					  </span>
				</div>
				<!-- /.info-box-content -->
			  </div>
			  <!-- /.info-box -->
			</div>
			<?php 
						}
					}
				}
			?>
		</div>
        <div class="row">
            <center><p style="padding-top: 100px; font-size: 30px;" >SELAMAT DATANG ADMIN<br><b><?php echo $name; ?></b></p></center>
        </div>
    </section>
</div>