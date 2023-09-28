<aside id="sidebar" class="sidebar">

	<ul class="sidebar-nav" id="sidebar-nav">

	<li class="nav-item">
		<a class="nav-link <?php echo (uri_string() == '') ? "" : "collapsed" ?>" href="<?php echo base_url() ?>">
		<i class="bi bi-grid"></i>
		<span>Home</span>
		</a>
	</li>

	<li class="nav-item">
		<a class="nav-link <?php echo (uri_string() == 'keranjang') ? "" : "collapsed" ?>" href="<?php echo base_url() ?>keranjang">
		<i class="bi bi-cart-check"></i>
		<span>Keranjang</span>
		</a>
	</li>

	<?php
	if (session()->get('role') == 'admin') {
	?>
		<li class="nav-item">
		<a class="nav-link <?php echo (uri_string() == 'produk') ? "" : "collapsed" ?>" href="<?php echo base_url() ?>produk">
			<i class="bi bi-receipt"></i>
			<span>Produk</span>
		</a>
		</li>
	<?php
	}
	?>

	<li class="nav-item">
		<a class="nav-link <?php echo (uri_string() == 'historibelanja') ? "" : "collapsed" ?>" href="<?php echo base_url() ?>historibelanja">
			<i class="bi bi-clock-history"></i>
			<span>Histori Belanja</span>
		</a>
	</li>

	<?php
		if($_SESSION['role'] == "admin"){
	?>
	<li class="nav-item">
		<a class="nav-link <?php echo (uri_string() == 'historibelanja') ? "" : "collapsed" ?>" href="<?php echo base_url() ?>transaksi">
			<i class="bi bi-journals"></i>
			<span>Transaksi</span>
		</a>
	</li>
	<li class="nav-item">
		<a class="nav-link <?php echo (uri_string() == 'manajemenuser') ? "" : "collapsed" ?>" href="<?php echo base_url() ?>manajemenuser">
			<i class="bi bi-justify"></i>
			<span>Manajemen User</span>
		</a>
	</li>
	<?php
		}	
	?>

	</ul>

</aside><!-- End Sidebar-->