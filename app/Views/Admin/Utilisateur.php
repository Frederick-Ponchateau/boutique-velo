
				<section role="main" class="content-body content-body-modern mt-0">
					<header class="page-header page-header-left-inline-breadcrumb">
						<h2 class="font-weight-bold text-6"><?=$pagetitle ?></h2>
						<div class="right-wrapper">
							<ol class="breadcrumbs">
								<li><span>Home</span></li>
								<li><span>eCommerce</span></li>
								<li><span><?=$pagetitle ?></span></li>
							</ol>
					
							<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fas fa-chevron-left"></i></a>
						</div>
					</header>

					<!-- start: page -->
					<div class="row">
						<div class="col">
							
							<div class="card card-modern">
								<div class="card-body">
									<div class="datatables-header-footer-wrapper">
										
										<table class="table table-ecommerce-simple table-striped mb-0" id="datatable-ecommerce-list" style="min-width: 640px;">
											<thead>
												<tr>
													
													<th width="8%">ID</th>
													<th width="28%">Email</th>
													<th width="21%">Nom</th>
													<th width="18%">Date</th>
													<th width="15%">Status</th>
												</tr>
											</thead>
											<tbody>
												<?php if(isset($tableUser)):
												foreach($tableUser as $user):?>
												<tr>
													
													<td><strong><?= $user["user_id"]?></strong></td>
													<td><strong><?= $user["user_email"]?></strong></td>
													<td><?= $user["user_name"]?></td>
													<td><?= $user["user_created_at"]?></td>
													<td><?= $user["Role"]?></td>
												</tr>
												<?php endforeach;
												endif ?>
											</tbody>
										</table>
										
									</table>
								</div>
							</div>

						</div>
					</div>
					<!-- end: page -->
				</section>
			</div>