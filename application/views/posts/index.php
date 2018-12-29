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
				<h3>Latest Posts</h3>
				<?php foreach($posts as $post): ?>

					<div class="row mb-3">
						<div class="col-md-5 col-sm-12">
							<img class="img img-fluid" src="<?php echo site_url('assets/images/'.$post['image']); ?>">
						</div>
						<div class="col-md-7 col-sm-12">
							<h3><?php echo $post['title']; ?></h3>
							<small>
								Posted at: <?php echo $post['created_at']; ?> | Posted by: <?php echo $post['posted_by']; ?>
							</small>
							<p><?php echo word_limiter($post['body'], 20); ?></p>

							<a href="<?php echo site_url('posts/'.$post['slug']); ?>" class="btn btn-outline-info float-right">Read more</a>

						</div>
					</div>

				<?php endforeach; ?>
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