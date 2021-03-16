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
        <div class="col-lg-12 mx-auto">
            <div class="card">
                <div class="card-body">
                        <h1>.:REGISTRASI MASYARAKAT:.</h1>
                        <form action="<?php echo site_url('registrasi/registrasi') ?>" method="post">
                            
                                <div class="form-group">
                                <label for="NIK">NIK</label>
                                <input class="form-control" type="text" name="nik" id="NIK" placeholder = "Masukan data NIK">
                                </div>
                                <div class="form-group">
                                <label for="nama">Nama Lengkap</label>
                                <input class="form-control" type="text" name="nama" id="nama" placeholder = "Masukan Nama Lengkap">
                                </div>
                                <div class="form-group">
                                <label for="username">username</label>
                                <input class="form-control" type="text" name="username" id="username" placeholder = "Masukan Username">
                                </div>
                                <div class="form-group">
                                <label for="pass">Password</label>
                                <input class="form-control" type="password" name="password" id="password" placeholder = "Masukan Password">
                                </div>
                                <div class="form-group">
                                <label for="telp">Telepon</label>
                                <input class="form-control" type="number" name="telp" id="telp" placeholder = "Masukan Telepon">
                                </div>
                                <input class="btn btn-info" type="submit" value="daftar">
                                <a href="<?php echo site_url('login') ?>" class="btn btn-warning">menu login</a>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>