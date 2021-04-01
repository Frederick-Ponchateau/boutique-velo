			<?php  $total= null ?>
			<div role="main" class="main shop pb-4">

				<div class="container">

					<div class="row">
						<div class="col">
							<ul class="breadcrumb font-weight-bold text-6 justify-content-center my-5">
								<li class="text-transform-none mr-2">
									<a href="shop-cart.html" class="text-decoration-none text-color-primary">Shopping Cart</a>
								</li>
								<li class="text-transform-none text-color-grey-lighten mr-2">
									<a href="shop-checkout.html" class="text-decoration-none text-color-grey-lighten text-color-hover-primary">Checkout</a>
								</li>
								<li class="text-transform-none text-color-grey-lighten">
									<a href="shop-order-complete.html" class="text-decoration-none text-color-grey-lighten text-color-hover-primary">Order Complete</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="row pb-4 mb-5">
						<div class="col-lg-8 mb-5 mb-lg-0">
							<form method="post" action="">
								<div class="table-responsive">
									<table class="shop_table cart">
										<thead>
											<tr class="text-color-dark">
												<th class="product-thumbnail" width="15%">
													&nbsp;
												</th>
												<th class="product-name text-uppercase" width="30%">
													Product
												</th>
												<th class="product-price text-uppercase" width="15%">
													Price
												</th>
											</tr>
										</thead>
										<tbody>
											<?php if(isset($ordersItems)):
											foreach($ordersItems as $order):
												$Produit =$tableProduit->where("product_id",$order["product_ID"])->first();
												
												$total += $Produit["price"] ;?>
											<tr class="cart_table_item">
												<td class="product-thumbnail">
													<div class="product-thumbnail-wrapper">
														<a href="#" class="product-thumbnail-remove" title="Remove Product">
															<i class="fas fa-times"></i>
														</a>
														<a href="/Site/produit" class="product-thumbnail-image" title="Photo Camera">
															<img width="90" height="90" alt="" class="img-fluid" src="<?= base_url("site/img/products/product-grey-1.jpg")?>">
														</a>
													</div>
												</td>
												<td class="product-name">
													<a href="/Site/produit" class="font-weight-semi-bold text-color-dark text-color-hover-primary text-decoration-none"><?= $Produit["product_name"] ?></a>
												</td>
												<td class="product-price">
													<span class="amount font-weight-medium text-color-grey"><?= $Produit["price"] ?></span>
												</td>
												
											</tr>
											<?php endforeach;
											endif ?>
										</tbody>
									</table>
								</div>
							</form>
						</div>
						<div class="col-lg-4">
							<div class="card border-width-3 border-radius-0 border-color-hover-dark" data-plugin-sticky data-plugin-options="{'minWidth': 991, 'containerSelector': '.row', 'padding': {'top': 85}}">
								<div class="card-body">
									<h4 class="font-weight-bold text-uppercase text-4 mb-3">Cart Totals</h4>
									<table class="shop_table cart-totals mb-4">
										<tbody>
											<tr class="total">
												<td>
													<strong class="text-color-dark text-3-5">Total</strong>
												</td>
												<td class="text-right">
													<strong class="text-color-dark"><span class="amount text-color-dark text-5"><?=$total." €"?></span></strong>
												</td>
											</tr>
										</tbody>
									</table>
									<a href="/Site/validation" class="btn btn-dark btn-modern btn-block text-uppercase bg-color-hover-primary border-color-hover-primary border-radius-0 text-3 py-3">Proceed to Checkout <i class="fas fa-arrow-right ml-2"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>