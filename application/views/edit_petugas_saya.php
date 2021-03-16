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
				<h3>Form Edit Petugas</h3>
			</div>
		</div>
		

		<div class="row justify-content-center">
			<div class="col-lg-10">
				<!-- <h2>Masyarakat</h2> -->
				<hr>
			</div>
			
			<div class="col-lg-10">
				<form action="<?php echo site_url('admin_saya/update_petugas') ?>" method="post">
					<?php foreach ($petugas as $data): ?>
						
					<?php endforeach ?>
					<div class="form-group">
						<label for="nama_petugas">Nama Lengkap Petugas</label>
						<input type="text" name="id_petugas" value="<?php echo $data->id_petugas ?>">
						<input type="text" class="form-control" id="nama_petugas" placeholder="Masukan Nama Petugas" name="nama_petugas" value="<?php echo $data->nama_petugas ?>">
					</div>
					<div class="form-group">
						<label for="username">Username</label>
						<input type="text" class="form-control" id="username" placeholder="Masukan Username" name="username" value="<?php echo $data->username ?>">
					</div>
					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" class="form-control" id="password"  placeholder="Masukan Password" name="password" value="<?php echo $data->password ?>">
					</div>
					<div class="form-group">
						<label for="telp">Nomor Telepon</label>
						<input type="text" class="form-control" id="telp" placeholder="Enter email" name="telp" value="<?php echo $data->telp ?>">
					</div>
					<div class="form-group">
						<label for="telp">level</label>
						<select name="level" id="">
							<option value="admin" <?php if($data->level == 'admin'){echo 'selected';} ?> >admin</option>
							<option value="petugas" <?php if($data->level == 'petugas'){echo 'selected';} ?> >petugas</option>
						</select>
					</div>
					
					<div class="form-group">
						<button type="submit" class="btn btn-outline-success">Update Data</button>
					</div>


				</form>
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