<?php $this->view("header", $data); ?>

	<section>
		<div class="container" style="padding-top: 30px;">
			<div class="row">
			<?php $this->view("sidebar.inc", $data); ?>
				
				<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Features Items</h2>
						
						<?php if(isset($ROWS) && is_array($ROWS)): ?>
						<?php foreach($ROWS as $row): ?>
							
							<?php $this->view("product.inc", $row); ?>

						<?php endforeach; ?>
						<?php endif; ?>
						
						<?php Page::show_links()?>
						
					</div><!--features_items-->
				</div>
			</div>
		</div>
	</section>
	
<?php $this->view("footer", $data); ?>