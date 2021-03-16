
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>uji_kompetensi</title>
</head>
<?php $this->load->view('partial/head') ?>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-3 mx-auto">
				<div class="card mt-5">
					<div class="card-body">
						<center>
						<h1 class="text-center">login admin</h1>
						</center>
						<form action="<?php echo site_url('login/ceklogin') ?>" method="post">
						<div class="form-group">
							<center>
							<label for="username">
								username
							</label>
							<input class="form-control" type="text" name="username" id="username" placeholder="masukan username">
						</div> 
							</center>
							<br>
							<center>
						<div class="form-group">
							<label for="password">
								password
							</label>
							<input class="form-control" type="password" name="password" id="password" placeholder="masukan password">
						</div>
							</center>
							<br>
							<center>
						<input class="form-control btn btn-primary" type="submit" value="masuk">
							</center>
							<br>
						</form>
						<center>
							<a href="<?php echo site_url('registrasi') ?>"modul/registrasi>registrasi</a>
						</center>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php $this->load->view('partial/script') ?>
</body>
</html>