<!DOCTYPE html>
<html>
<head>
	<title><?= $title; ?> | <?= $site_name; ?></title>
	<?php $this->load->view('_partials/head'); ?>
</head>
<body>
	<?php $this->load->view('_partials/navbar'); ?>
	
	<div class="container mt-3 mb-3">
		<h1 class="text-uppercase"><?= $title; ?></h1>
		<hr>
		<?php $this->load->view('_contents/about'); ?>	
	</div>

	<?php $this->load->view('_partials/footer'); ?>

	<?php $this->load->view('_partials/js'); ?>
</body>
</html>