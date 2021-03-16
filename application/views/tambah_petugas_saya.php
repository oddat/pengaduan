<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<?php $this->load->view('partial/head') ?>
<body>
	<?php $this->load->view('partial/navbar') ?>

		<div class="container-fluid">
		<div class="row justify-content-center" >
			<div class="col-lg-10">
				<h1>Dashboard Admin</h1>
				<h3>Form Tambah Petugas</h3>
			</div>
		</div>
		

		<div class="row justify-content-center">
			<div class="col-lg-10">
				<!-- <h2>Masyarakat</h2> -->
				<hr>
			</div>
			
			<div class="col-lg-10">
				<form action="<?php echo site_url('admin_saya/save_petugas') ?>" method="post">
					<div class="form-group">
						<label for="nama_petugas">Nama Lengkap Petugas</label>
						<input type="text" class="form-control" id="nama_petugas" placeholder="Masukan Nama Petugas" name="nama_petugas">
					</div>
					<div class="form-group">
						<label for="username">Username</label>
						<input type="text" class="form-control" id="username" placeholder="Masukan Username" name="username">
					</div>
					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" class="form-control" id="password"  placeholder="Masukan Password" name="password">
					</div>
					<div class="form-group">
						<label for="telp">Nomor Telepon</label>
						<input type="text" class="form-control" id="telp" placeholder="Enter email" name="telp">
					</div>
					<div class="form-group">
						<label for="telp">level</label>
						<select name="level" id="">
							<option value="admin">admin</option>
							<option value="petugas">petugas</option>
						</select>
					</div>
					
					<div class="form-group">
						<button type="submit" class="btn btn-outline-success">Daftarkan</button>
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