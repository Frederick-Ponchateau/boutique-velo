			<div role="main" class="main shop pb-4">

				<div class="container">

					<div class="row justify-content-center">
						<div class="col-lg-8">
							<ul class="breadcrumb breadcrumb-dividers-no-opacity font-weight-bold text-6 justify-content-center my-5">
								<li class="text-transform-none mr-2">
									<a href="/Site/panier" class="text-decoration-none text-color-dark text-color-hover-primary">Shopping Cart</a>
								</li>
								<li class="text-transform-none text-color-dark mr-2">
									<a href="shop-checkout.html" class="text-decoration-none text-color-dark text-color-hover-primary">Checkout</a>
								</li>
								<li class="text-transform-none text-color-dark">
									<a href="shop-order-complete.html" class="text-decoration-none text-color-primary">Order Complete</a>
								</li>
							</ul>
						</div>
					</div>

					<div class="row justify-content-center">
						<div class="col-lg-8">
							<div class="card border-width-3 border-radius-0 border-color-success">
								<div class="card-body text-center">
									<p class="text-color-dark font-weight-bold text-4-5 mb-0"><i class="fas fa-check text-color-success mr-1"></i> Merci. Nous avons confirmé votre commande.</p>
								</div>
							</div>
							<div class="d-flex flex-column flex-md-row justify-content-between py-3 px-4 my-4">
								<div class="text-center">
									<span>
										Numeros de Commande <br>
										<strong class="text-color-dark"><?= $panier["order_ID"] ?></strong>
									</span>
								</div>
								<div class="text-center mt-4 mt-md-0">
									<span>
										Date <br>
										<strong class="text-color-dark"><?= $panier["date"] ?></strong>
									</span>
								</div>
								<div class="text-center mt-4 mt-md-0">
									<span>
										Email <br>
										<strong class="text-color-dark"><?= $user["user_email"] ?></strong>
									</span>
								</div>
								<div class="text-center mt-4 mt-md-0">
									<span>
										Total <br>
										<strong class="text-color-dark"><?=  $panier["total"] ?> €</strong>
									</span>
								</div>
								
							</div>
							<div class="card border-width-3 border-radius-0 border-color-hover-dark mb-4">
								<div class="card-body">
									<h4 class="font-weight-bold text-uppercase text-4 mb-3">Your Order</h4>
									<table class="shop_table cart-totals mb-0">
										<tbody>
											<tr>
												<td colspan="2" class="border-top-0">
													<strong class="text-color-dark">Product</strong>
												</td>
											</tr>
											<?php if(isset())  ?>
											<tr>
												<td>
													<strong class="d-block text-color-dark line-height-1 font-weight-semibold">Black Porto Smartwatch <span class="product-qty">x1</span></strong>
													<span class="text-1">COLOR BLACK</span>
												</td>
												<td class="text-right align-top">
													<span class="amount font-weight-medium text-color-grey">$15</span>
												</td>
											</tr>
											
											
											<tr class="total">
												<td>
													<strong class="text-color-dark text-3-5">Total</strong>
												</td>
												<td class="text-right">
													<strong class="text-color-dark"><span class="amount text-color-dark text-5"><?=  $panier["total"] ?> €</span></strong>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							
						</div>
					</div>

				</div>

			</div>