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
				<h3>Verifikasi User</h3>
			</div>
		</div>
		

		<div class="row justify-content-center">
			<div class="col-lg-10">
				<h2>Masyarakat</h2>
				<hr>
			</div>
			
			<div class="col-lg-10">
				<table id="masyarakat">
					<thead>
						<tr>
							<th>NIK</th>
							<th>Nama</th>
							<th>Username</th>
							<th>Telp</th>
							<th>Status</th>
							<th>aksi</th>
						</tr>
					</thead>
					<tbody>
					<?php  
						foreach ($masyarakat as $data):
					?>
						<tr>
							<td><?php echo $data->nik ?></td>
							<td><?php echo $data->nama ?></td>
							<td><?php echo $data->username ?></td>
							<td><?php echo $data->telp ?></td>
							<td><?php echo $data->status ?></td>
							<td>
								<?php if ($data->status == 'nonAktif'): ?>
									<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
									  Verifikasi
									</button>

									<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
									  <div class="modal-dialog" role="document">
									    <div class="modal-content">
									      <div class="modal-header">
									        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
									        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
									          <span aria-hidden="true">&times;</span>
									        </button>
									      </div>
									      <div class="modal-body">
									        ingin memverifikasi user dengan NIK <?php echo $data->nik ?>
									      </div>
									      <div class="modal-footer">
									        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
									        <a href="<?= site_url('admin_saya/verfikasi/').$data->nik ?>" type="button" class="btn btn-success">Verifikasi</a>
									      </div>
									    </div>
									  </div>
									</div>
								<?php else: ?>
									<button  class="btn btn-success" disabled>Terverifikasi</button>
								<?php endif ?>
							</td>
						</tr>
					<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<?php $this->load->view('partial/script') ?>
	<script>
		$(document).ready(function() {
		    $('#masyarakat').DataTable();
		} );
		
	</script>

</body>
</html>