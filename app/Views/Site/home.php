

			<div role="main" class="main shop pt-4">

				<div class="container">

					<div class="masonry-loader masonry-loader-showing">
						<div class="row products product-thumb-info-list" data-plugin-masonry data-plugin-options="{'layoutMode': 'fitRows'}">
							

									<?php if(isset($tableProduit)):
										foreach($tableProduit as $produit):
											$categorie = $tableCategorie->where("category_id",$produit["category_id"])->first();
									?>
							<div class="col-12 col-sm-6 col-lg-3">
									<div class="product mb-0">
										<div class="product-thumb-info border-0 mb-3">

											

											<div class="addtocart-btn-wrapper">
												<a href="<?=base_url("Site/produit/panier/".$produit["product_id"])?>" class="text-decoration-none addtocart-btn" data-tooltip data-original-title="Ajouter au panier">
													<i class="icons icon-bag"></i>
												</a>
											</div>

											<!-- <a href="ajax/shop-product-quick-view.html" class="quick-view text-uppercase font-weight-semibold text-2">
												QUICK VIEW
											</a> -->
											<a href="<?=base_url("Site/produit/index/".$produit["product_id"])?>">
												<div class="product-thumb-info-image">
													<img alt="" class="img-fluid" src="<?= base_url("site/img/products/product-grey-1.jpg")?>">

												</div>
											</a>
										</div>
										<div class="d-flex justify-content-between">
											<div>
												<a href="<?=base_url("Site/Home/categorie/".$categorie["category_id"])?>" class="d-block text-uppercase text-decoration-none text-color-default text-color-hover-primary line-height-1 text-0 mb-1"><?=$categorie["category_name"]?></a>
												<h3 class="text-3-5 font-weight-medium font-alternative text-transform-none line-height-3 mb-0"><a href="<?=base_url("Site/produit/index/".$produit["product_id"])?>" class="text-color-dark text-color-hover-primary"><?=$produit["product_name"]?></a></h3>
											</div>
										</div>
										<p>
											<span class="sale text-color-dark font-weight-semi-bold"><?=$produit["price"]?> €</span>
										</p>
									</div>
							</div>
								<?php endforeach;
								endif?>				
						</div>
						<div class="row mt-4">
							<div class="col">
								<ul class="pagination float-right">
									<li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-left"></i></a></li>
									<li class="page-item active"><a class="page-link" href="#">1</a></li>
									<li class="page-item"><a class="page-link" href="#">2</a></li>
									<li class="page-item"><a class="page-link" href="#">3</a></li>
									<a class="page-link" href="#"><i class="fas fa-angle-right"></i></a>
								</ul>
							</div>
						</div>
					</div>

				</div>

			</div>