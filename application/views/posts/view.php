<!DOCTYPE html>
<html>
<head>
	<title><?= $title; ?> | <?= $site_name; ?></title>
	<?php $this->load->view('_partials/head'); ?>
</head>
<body>
	<?php $this->load->view('_partials/navbar'); ?>
	
	<div class="container mt-3 mb-3">
		<div class="row">
			<!-- Main Articles -->
			<div class="col-md-8 col-sm-12 p-2">
				<img class="img img-fluid mb-3" src="<?php echo site_url('assets/images/'.$posts['image']); ?>">
				<h3><?php echo $posts['title']; ?></h3>
				<small>Posted at: <?php echo $posts['created_at']; ?> | Posted by: <?php echo $posts['posted_by']; ?></small>
				<hr>
				<p class="mt-3">
					<?php echo $posts['body']; ?>
				</p>
			</div>
			<!-- Sidebar -->
			<div class="col-md-4 col-sm-12 p-2">
				<h3>Sidebar</h3>
			</div>
		</div>
	</div>
	

	<?php $this->load->view('_partials/footer'); ?>

	<?php $this->load->view('_partials/js'); ?>
</body>
</html>