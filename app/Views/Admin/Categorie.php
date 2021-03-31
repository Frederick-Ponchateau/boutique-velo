<section role="main" class="content-body content-body-modern mt-0">
					<header class="page-header page-header-left-inline-breadcrumb">
						<h2 class="font-weight-bold text-6">Categories</h2>
						<div class="right-wrapper">
							<ol class="breadcrumbs">
								<li><span>Home</span></li>
								<li><span>eCommerce</span></li>
								<li><span>Categories</span></li>
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
										<form action="<?=base_url("Admin/Categorie/edit")?>" method="POST">
										<input type="hidden" value="create" name='save'>
											<div class="datatable-header">
												<div class="row align-items-center mb-3">
													<div class="col-12 col-lg-auto mb-3 mb-lg-0">
														<input type="texte" class="form-control" name="nomCategory" placeholder="Categorie">
													</div>
													<div class="col-12 col-lg-auto mb-3 mb-lg-0">
														<button type="submit" class="btn btn-primary btn-md font-weight-semibold btn-py-2 px-4">+ Add Category</button>
													</div>
												</div>
											</div>
										</form>
										<table class="table table-ecommerce-simple table-striped mb-0" id="datatable-ecommerce-list" style="min-width: 550px;">
											<thead>
												<tr>
													
													<th width="60%">Nom</th>
													
													<th width="40%">Modifier / Supprimé</th>
												</tr>
											</thead>
											<tbody>
											<?php if(isset($tableCategorie)):
														foreach($tableCategorie as $categorie):?>
											
												<tr>
													<form action="<?=base_url("Admin/Categorie/edit/".$categorie['category_id'])?>" method="POST">
														<?php if(isset($categorie['category_id'])){   ?>
                                               			 <input type="hidden" value="update" name='save'>
                                                		<?php }?>
														<td><input type="text" name="nomCategory" class="form-control"value="<?=$categorie["category_name"]?>" placeholder="<?=$categorie["category_name"]?>" aria-label="Recipient's username with two button addons"></td>
														<td> <button class="btn btn-outline-success" type="submit">Update</button>
															<a class="btn btn-outline-danger" href="<?=base_url("Admin/Categorie/delete/".$categorie['category_id'])?>" type="button">X</a>
															</td>
													</form>	
												</tr>

												<?php endforeach;
												endif?>
											</tbody>
										</table>
										<hr class="solid mt-5 opacity-4">
										<div class="datatable-footer">
											<div class="row align-items-center justify-content-between mt-3">
												<div class="col-md-auto order-1 mb-3 mb-lg-0">
													<div class="d-flex align-items-stretch">
														<select class="form-control select-style-1 bulk-action mr-3" name="bulk-action" style="min-width: 170px;">
															<option value="" selected>Bulk Actions</option>
															<option value="delete">Delete</option>
														</select>
														<a href="#" class="bulk-action-apply btn btn-light btn-px-4 py-3 border font-weight-semibold text-color-dark text-3">Apply</a>
													</div>
												</div>
												<div class="col-lg-auto text-center order-3 order-lg-2">
													<div class="results-info-wrapper"></div>
												</div>
												<div class="col-lg-auto order-2 order-lg-3 mb-3 mb-lg-0">
													<div class="pagination-wrapper"></div>
												</div>
											</div>
										</div>
									</table>
								</div>
							</div>

						</div>
					</div>
					<!-- end: page -->
				</section>
			</div>