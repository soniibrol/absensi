<div class="row">
	<div class="col-md-12">
		<h1>Request Absen Susulan</h1>
		<hr/>
	</div>
</div>
<div class="row">
	<?php
	if($this->session->flashdata('message_alert')){
		echo $this->session->flashdata('message_alert');
	}
	?>
	<?php echo validation_errors(); ?>
	<form class="form-horizontal" role="form" action="" method="POST">
		<div class="form-group">
			<label class="col-sm-2 control-label" for="nik_atasan">NIK Atasan</label>
			<div class="col-sm-2">
				<input type="hidden" name="id_atasan" id="id_atasan">
				<input type="text" name="nik_atasan" id="nik_atasan" class="form-control" placeholder="NIK Atasan" maxlength="6" required="required">
			</div>
			<div class="col-sm-4">
				<input type="text" name="nama_atasan" id="nama_atasan" class="form-control" placeholder="Nama Atasan" required="required" readonly="true">
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-offset-1 col-sm-9">
				<input type="hidden" name="count_alasan_request" id="count_alasan_request" value="0">
				<table class="table table-bordered" id="tabel_request">
					<thead>
						<tr>
							<th style="width:20%;text-align:center;padding:10px;">Tanggal</th>
							<th style="width:30%;text-align:center;padding:10px;">Alasan</th>
							<th style="width:40%;text-align:center;padding:10px;">Keterangan</th>
							<th style="width:10%;text-align:center;padding:10px;">Action</th>
						</tr>
					</thead>
				</table>
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-offset-1 col-sm-9">
				<table>
					<tr>
						<td style="width:20%;text-align:center;padding:10px;">
							<input type="text" name="tanggal_request" id="tanggal_request" class="form-control date" placeholder="dd/mm/yyyy" maxlength="10">
						</td>
						<td style="width:30%;text-align:center;padding:10px;">
							<?php echo $alasan; ?>
						</td>
						<td style="width:40%;text-align:center;padding:10px;">
							<input type="text" name="keterangan_request" id="keterangan_request" class="form-control" placeholder="Keterangan">
						</td>
						<td style="width:10%;text-align:center;padding:10px;">
							<button id="add_alasan_request" class="btn btn-default">Tambah</button>
						</td>
					</tr>
				</table>
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-offset-1 col-sm-2">
				<input type="submit" name="submit" id="submit_attendance_request" class="btn btn-primary" value="Send Request" disabled="true">
			</div>
		</div>
	</form>
</div>