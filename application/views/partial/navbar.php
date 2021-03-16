<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<a class="navbar-brand" href="#">Pengaduan Masyarakat</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav ml-auto">
			<?php 
			if($this->session->userdata('level') == 'admin'): 
			?>
			<li class="nav-item">
				<a class="btn btn-primary mx-1" href="<?php echo site_url('admin_saya/masyarakat') ?>">Masyarakat</a>
			</li>

			<li>
				<a class="btn btn-primary mx-1" href="<?php echo site_url('admin_saya/petugas') ?>">Petugas</a>
			</li>
			<li>
				<a class="btn btn-danger mx-1" href="<?php echo site_url('login/logout') ?>">logout</a>
			</li>

			<?php 
			elseif($this->session->userdata('level') == 'petugas') :
			?>
			<li class="nav-item">
				<a class="btn btn-primary mx-1" href="#">Masyarakat</a>
			</li>

			<li>
				<a class="btn btn-primary mx-1"href="">Pengaduan Masyarakat</a>
			</li>
			<li>
				<a class="btn btn-danger mx-1" href="<?php echo site_url('login/logout') ?>">logout</a>
			</li>
			<?php
				elseif ($this->session->userdata('level') == 'masyarakat'):
			 ?>
			 <li class="nav-item mr-2">
			 	<a class="btn btn-primary" href="<?php echo site_url('masyarakat_saya/tulis_pengaduan') ?>">tulis pengaduan</a>
			 </li>
			 <li class="nav-item mr-2">
			 	<a class="btn btn-danger" href="<?php echo site_url('login/logout') ?>">logout</a>
			 </li>
			<?php 
			endif; 
			?>
		</ul>
	</div>
</nav>