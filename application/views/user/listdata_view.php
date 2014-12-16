<div class="row">
	<div class="col-md-12">
		<h1>Kelola Data Karyawan</h1>
		<?php
		if($this->session->flashdata('message_alert')){
			echo $this->session->flashdata('message_alert');
		}
		?>
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>No</th>
					<th>NIK</th>
					<th>Nama</th>
					<th>Jabatan</th>
					<th>Divisi</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
			<?php
			$no = $number;
			foreach ($user as $row) {
				echo '<tr>';
				echo '<td>'.$no.'</td>';
				echo '<td>'.$row['nik'].'</td>';
				echo '<td>'.$row['nama'].'</td>';
				echo '<td>'.$row['nama_jabatan'].'</td>';
				echo '<td>'.$row['nama_divisi'].'</td>';
				echo '<td><a href="'.base_url().'user/edit/'.$row['id_karyawan'].'">Edit</a>&nbsp;&nbsp;';
				if($this->session->userdata('user_id')!=$row['id_karyawan']){
					echo '<a href="'.base_url().'user/delete/'.$row['id_karyawan'].'" class="delete-link">Delete</a>&nbsp;&nbsp;</td>';
				}
				echo '</tr>';
				++$no;
			}
			?>
			</tbody>
		</table>
		<?php echo $paging; ?>
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<a href="<?php echo base_url().'user/add'; ?>" class="btn btn-primary btn-lg">Tambah Data Karyawan</a>
	</div>
</div>