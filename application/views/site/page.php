<div class="jumbotron">
	<div class="row">
	<div class="col-lg-12 text-center">
	<?php  foreach($create_page as $key=>$data): ?>

			<h1 class="page-title"><?php echo $data['page_title'] ?></h1>
		<?php endforeach; ?>
			
				<?php foreach($create_page as $key=>$data): ?>
				<p>
							<?php echo $data['page_content'] ?>
						</p>
				
			<?php endforeach; ?>
				
			
</div>
</div>
</div>