<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<?php $this->load->view('partial/head') ?>
</head>
<body>
	<?php $this->load->view('partial/navbar') ?>

	<div class="container-fluid">
		<div class="row justify-content-center" >
			<div class="col-lg-10">
				<h1>Dashboard Admin</h1>
				<h3>Kelola Petugas</h3>
			</div>
		</div>
		

		<div class="row justify-content-center">
			<div class="col-lg-10">
				<!-- <h2>Masyarakat</h2> -->
				<hr>
			</div>
			
			<div class="col-lg-10">
				<table id="petugas">
					<a class="btn btn-outline-primary my-2" href="<?php echo site_url('admin_saya/tambah_petugas/') ?>">tambah petugas</a>
					<thead>
						<tr>
							<th>ID</th>
							<th>Nama</th>
							<th>Username</th>
							<th>Telp</th>
							<th>Level</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach($petugas as $data_petugas): ?>
						<tr>
							<td><?php echo $data_petugas->id_petugas ?></td>
							<td><?php echo $data_petugas->nama_petugas ?></td>
							<td><?php echo $data_petugas->username ?></td>
							<td><?php echo $data_petugas->telp ?></td>
							<td><?php echo $data_petugas->level ?></td>
							<td>
								<a class="btn btn-outline-success" href="<?php echo site_url('admin_saya/edit_petugas/'.$data_petugas->id_petugas) ?>">edit</a>
								<a class="btn btn-outline-danger" href="<?php echo site_url('admin_saya/hapus_petugas/'.$data_petugas->id_petugas) ?>">Hapus</a>
							</td>
						</tr>
						<?php endforeach ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<?php $this->load->view('partial/script') ?>
	<script>
		$(document).ready(function() {
		    $('#petugas').DataTable();
		} );
		
	</script>

</body>
</html>