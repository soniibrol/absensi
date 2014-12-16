<div class="row">
	<div class="col-md-12">
		<h1>Kehadiran</h1>
		<hr/>
	</div>
</div>
<div class="row">
	<div class="col-md-6">
		<form class="form-horizontal" method="POST" role="form" action="">
			<div class="form-group">
				<label for="presences_date_start" class="col-sm-4 control-label">Date Start</label>
				<div class="col-md-4">
					<input type="text" name="presences_date_start" id="presences_date_start" class="form-control date" data-date-format="DD/MM/YYYY" required="required" placeholder="dd/mm/yyyy" maxlength="10" value="<?php echo $date_start; ?>">
				</div>
				<div class="col-md-4">
					<input type="submit" name="submit" value="Search" class="btn btn-primary">
				</div>
			</div>
			<div class="form-group">
				<label for="presences_date_end" class="col-sm-4 control-label">Date End</label>
				<div class="col-md-4">
					<input type="text" name="presences_date_end" id="presences_date_end" class="form-control date" data-date-format="DD/MM/YYYY" required="required" placeholder="dd/mm/yyyy" maxlength="10" value="<?php echo $date_end; ?>">
				</div>
			</div>
		</form>
	</div>
	<div class="col-md-6">
		<div class="row">
			<div class="col-md-4">
				NIK
			</div>
			<div class="col-md-8">
				<?php echo $user['nik']; ?>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				Nama
			</div>
			<div class="col-md-8">
				<?php echo $user['nama']; ?>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				Periode
			</div>
			<div class="col-md-8">
				<?php echo $date_start.' - '.$date_end; ?>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				Jam Kerja
			</div>
			<div class="col-md-8">
				<?php echo $jam_kerja['keterangan']; ?>
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<table class="table table-bordered table-hover">
			<thead>
				<tr>
					<th style="text-align:center;">Tanggal</th>
					<th style="text-align:center;">Hari</th>
					<th style="text-align:center;">Datang</th>
					<th style="text-align:center;">Pulang</th>
					<th style="text-align:center;">Alasan</th>
				</tr>
			</thead>
			<tbody>
			<?php 
				foreach($kehadiran as $row){
					echo '<tr>';
					echo '<td>'.$row['tanggal'].'</td>';
					echo '<td>'.$row['hari'].'</td>';
					echo '<td>'.$row['datang'].'</td>';
					echo '<td>'.$row['pulang'].'</td>';
					echo '<td>'.$row['alasan'].'</td>';
					echo '</tr>';
				}
			?>
			</tbody>
		</table>
	</div>
</div>