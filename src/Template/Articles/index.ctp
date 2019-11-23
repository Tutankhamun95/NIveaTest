<!-- File: src/Template/Articles/index.ctp -->

<h1>Articles</h1>
<?= $this->Html->link('Add Article', ['action' => 'add']) ?>

<div class="row"> 
<?php foreach ($articles as $article): ?>
<div class="col-xl-4 col-md-6">

						<div class="product">
                            
							<div class="product_image"><img src="images/product_1.jpg" alt=""></div>
							<div class="product_content">
								<div class="product_info d-flex flex-row align-items-start justify-content-start">
									<div>
										<div>
											<div class="product_name"><?= $this->Html->link($article->title, ['action' => 'view', $article->slug]) ?></div>
											<div class="product_category"><?= $article->created->format(DATE_RFC850) ?></div>
										</div>
									</div>
									<div class="ml-auto text-right">
										<div class="rating_r rating_r_4 home_item_rating"><i></i><i></i><i></i><i></i><i></i></div>
										<div class="product_price text-right">$3<span>.99</span></div>
									</div>
								</div>
								<div class="product_buttons">
									<div class="text-right d-flex flex-row align-items-start justify-content-start">
										<div class="product_button product_fav text-center d-flex flex-column align-items-center justify-content-center">
											<div><div><?= $this->Html->link('Edit', ['action' => 'edit', $article->slug]) ?><div>+</div></div></div>
										</div>
										<div class="product_button product_cart text-center d-flex flex-column align-items-center justify-content-center">
											<div><div><?= $this->Form->postLink(
                'Delete',
                ['action' => 'delete', $article->slug],
                ['confirm' => 'Are you sure?'])
            ?><div>+</div></div></div>
										</div>
									</div>
								</div>
                            </div>
                            
                        </div>
                        
                    </div>              
                    <?php endforeach; ?>
                                            </div>
                    