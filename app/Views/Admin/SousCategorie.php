<section role="main" class="content-body content-body-modern mt-0">
					<header class="page-header page-header-left-inline-breadcrumb">
						<h2 class="font-weight-bold text-6"><?=$page_title?></h2>
						<div class="right-wrapper">
							<ol class="breadcrumbs">
								<li><span>Home</span></li>
								<li><span>eCommerce</span></li>
								<li><span><?=$page_title?></span></li>
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
										<form action="<?=base_url("Admin/Souscategorie/edit")?>" method="POST">
										<input type="hidden" value="create" name='save'>
											<div class="datatable-header">
												<div class="row align-items-center mb-3">
													<div class="col-12 col-lg-auto mb-3 mb-lg-0">
														<input type="texte" class="form-control" name="nomSousCategory" placeholder="Sous-Categorie">
													</div>
													<div class="col-12 col-lg-auto mb-3 mb-lg-0">
														<button type="submit" class="btn btn-primary btn-md font-weight-semibold btn-py-2 px-4">+ Add Sous Category</button>
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
											<?php if(isset($sousCategorie)):
														foreach($sousCategorie as $categorie):?>
											
												<tr>
													<form action="<?=base_url("Admin/Souscategorie/edit/".$categorie['sous_categorie_id'])?>" method="POST">
														<?php if(isset($categorie['sous_categorie_id'])){   ?>
                                               			 <input type="hidden" value="update" name='save'>
                                                		<?php }?>
														<td><input type="text" name="nomSousCategory" class="form-control"value="<?=$categorie["sous_categorie_name"]?>" placeholder="<?=$categorie["sous_categorie_name"]?>" aria-label="Recipient's username with two button addons"></td>
														<td> <button class="btn btn-outline-success" type="submit">Update</button>
															<a class="btn btn-outline-danger" href="<?=base_url("Admin/Souscategorie/delete/".$categorie['sous_categorie_id'])?>" type="button">X</a>
															</td>
													</form>	
												</tr>

												<?php endforeach;
												endif?>
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