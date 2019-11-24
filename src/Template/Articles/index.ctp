<!-- File: src/Template/Articles/index.ctp -->
<?= $this->Html->css('section')?>





<section id="what-we-do">
		<div class="container-fluid">
			<h2 class="section-title mb-2 h1">Nivea Beauty Contest</h2>
			<p class="text-center text-muted h5">Are you a college student and wish to join Nivea's Beauty Contest?</p>
			<div class="row mt-5">
				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
					<div class="card">
						<div class="card-block block-1">
							<h3 class="card-title">Sign Up Now!</h3>
							<p class="card-text">Sign Up for the Competition Now!</p>
							
							<a href="javascript:void();" title="Read more" class="read-more" ><?= $this->Html->link(__('Join!'), ['controller' => 'Contestants', 'action' => 'add']) ?><i class="fa fa-angle-double-right ml-2"></i></a>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
					<div class="card">
						<div class="card-block block-2">
							<h3 class="card-title">Products</h3>
							<p class="card-text">Check out our Products</p>
							<a href="javascript:void();" title="Read more" class="read-more" ><?= $this->Html->link(__('Products!'), ['controller' => 'Products', 'action' => 'index']) ?><i class="fa fa-angle-double-right ml-2"><i class="fa fa-angle-double-right ml-2"></i></a>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
					<div class="card">
						<div class="card-block block-3">
							<h3 class="card-title">Sign Up/Login</h3>
							<p class="card-text">Sign Up or Login to enjoy our latest deals and products</p>
							<a href="javascript:void();" title="Read more" class="read-more" ><?= $this->Html->link(__('Sign Up'), ['controller' => 'Users', 'action' => 'add']) ?><i class="fa fa-angle-double-right ml-2"><i class="fa fa-angle-double-right ml-2"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>	
	</section>
	<!-- /Services section -->
                        
                    
                    