<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<?php $this->load->view('partial/head') ?>
</head>
<body>
	<?php $this->load->view('partial/navbar'); ?>
	<div class="container">
		<div class="row my-5">
			<div class="col-lg-8 mx-auto text-center">
				<?php foreach ($pengaduan as $data): ?>
				<img src="<?php echo base_url('assets/upload/pengaduan/').$data->foto; ?>" alt="..." width="70%" class="mx-auto">
				<?php $id = $data->id_pengaduan; ?>
				<div>
					<h3 >pengaduan</h3>
					<p><?php echo $data->tgl_pengaduan ?></p>
				</div>

				<div>
					<p>
						<?php echo $data->isi_laporan ?>
					</p>
				</div>
				<?php endforeach ?>
			</div>	
		</div>

		<div class="row my-5">
			<div class="col-lg-8 mx-auto text-center">
				<?php foreach ($tanggapan as $data): ?>
				<!-- <img src="<?php echo base_url('assets/upload/pengaduan/').$data->foto; ?>" alt="..." width="70%" class="mx-auto"> -->
				<div>
					<p>
						<h4>tanggapan_oleh<?php echo $data->id_petugas?> </h4>
						<?php echo $data->tgl_tanggapan ?>
					</p>
					<p>
						<h5><?php echo $data->tanggapan?></h5>
					</p>
				</div>
				<?php endforeach ?>
			</div>	
		</div>

	</div>
</div>

	<?php $this->load->view('partial/script') ?>
    <script src="//cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
    <script>
        // Replace the <textarea id="editor1"> with a CKEditor 4
        // instance, using default configuration.
        CKEDITOR.replace( 'isi' );
    </script>
	
</body>
</html>