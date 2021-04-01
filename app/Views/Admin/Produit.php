<section role="main" class="content-body content-body-modern mt-0">
					<header class="page-header page-header-left-inline-breadcrumb">
						<h2 class="font-weight-bold text-6"><?php  if(empty($tableProduit)){ $page_title = "Ajouter Produits"  ; } echo $page_title;  ?></h2>
						<div class="right-wrapper">
							<ol class="breadcrumbs">
								<li><span>Home</span></li>
								<li><span>eCommerce</span></li>
								<li><span><?php  echo $page_title;  ?></span></li>
							</ol>
					
							<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fas fa-chevron-left"></i></a>
						</div>
					</header>

					<!-- start: page -->
						<form class="" action="<?=base_url("Admin/Home/edit/".$tableProduit["product_id"])?>" method="post"enctype="multipart/form-data">
						<!-- Je cache mon champ(hidden) pour dire que je suis dans le mode modifier -->
                                                <!-- je modifie -->
                                                <?php if(isset($tableProduit["product_id"])){  ?>
                                                <input type="hidden" value="update" name='save'>
                                                <?php }else{ ?>
                                                <!-- Je crée un nouvelle enregistrement -->
                                                <input type="hidden" value="create" name='save'>
                                                <?php } ?>
							<div class="row">
								<div class="col">
									<section class="card card-modern card-big-info">
										<div class="card-body">
											<div class="row">
												<div class="col-lg-2-5 col-xl-1-5">
													<i class="card-big-info-icon bx bx-box"></i>
													<h2 class="card-big-info-title">General Info</h2>
													<p class="card-big-info-desc">Add here the product description with all details and necessary information.</p>
												</div>
												<div class="col-lg-3-5 col-xl-4-5">
													<div class="form-group row align-items-center">
														<label class="col-lg-5 col-xl-3 control-label text-lg-right mb-0">Product Name</label>
														<div class="col-lg-7 col-xl-6">
															<input type="text" class="form-control form-control-modern" name="productName" value="<?=$tableProduit['product_name']?>"  />
														</div>
													</div>
													<div class="form-group row">
														<label class="col-lg-5 col-xl-3 control-label text-lg-right pt-2 mt-1 mb-0">Product Description</label>
														<div class="col-lg-7 col-xl-6">
															<textarea class="form-control form-control-modern" value="<?=$tableProduit['Description']?>" name="productDescription" rows="6"><?=$tableProduit['Description']?></textarea>
														</div>
													</div>
                                                    
                                                    <div class="form-group row">
                                                        <label class="col-lg-5 col-xl-3 control-label text-lg-right pt-2 mt-1 mb-0"> Prix (€)</label>
                                                        <div class="col-lg-7 col-xl-6">
                                                            <input type="text" class="form-control form-control-modern" name="salePrice" value="<?=$tableProduit['price']?>" />
                                                        </div>
                                                    </div>
											        
                                                    <div class="form-group row">
                                                        <label class="col-lg-5 col-xl-3 control-label text-lg-right pt-2 mt-1 mb-0">Category</label>
                                                        <div class="col-lg-7 col-xl-6">
														<select class="form-control  mb-3" name="categorie">
														<option value="square">Selectionnez une categorie</option>
														
																 <?php foreach($tableCategorie as $categorie){
                                                              $select= "";
                                                              /****************** Je test si mes id sont identique puis j'insère le seclected afin de recupere */
                                                              if($tableProduit['category_id'] == $categorie["category_id"]){
                                                                  $select = 'selected' ;
																  
                                                              }
                                                           ?>
                                                            
                                                        
                                                        <option value= "<?=$categorie["category_id"]?>"<?=$select?>><?= $categorie["category_name"]?></option>
                                                        <?php } ?>
                                                            </select>
                                                        </div>
											        </div>
                                                    <div class="form-group row">
                                                        <label class="col-lg-5 col-xl-3 control-label text-lg-right pt-2 mt-1 mb-0">Sous Category</label>
                                                        <div class="col-lg-7 col-xl-6">
                                                            <select class="form-control mb-3" name="sousCategorie">
														<option value="square">Selectionnez une sous categorie</option>
														
																 <?php foreach($sousCategorie as $categorie){
                                                              $select= "";
                                                              /****************** Je test si mes id sont identique puis j'insère le seclected afin de recupere */
                                                              if($tableProduit['sous_categorie_id'] == $categorie["sous_categorie_id"]){
                                                                  $select = 'selected' ;
																  
                                                              }
                                                           ?>
                                                            
                                                        
                                                        <option value= "<?=$categorie["sous_categorie_id"]?>"<?=$select?>><?= $categorie["sous_categorie_name"]?></option>
                                                        <?php } ?>
														
                                                            </select>
                                                        </div>
											        </div>
                                                    <div class="form-group row">
														<label class="col-sm-4 control-label">Disponibilité</label>
														<div class="col-sm-8">
															<div class="radio-custom radio-success">
																<input  <?php if($tableProduit["Disponibility"] == 1){ echo "checked ="; } ?> value=1 type="radio" id="radioExample3" name="Disponibility">
																<label  for="radioExample3">En Stock</label>
															</div>
															<div class="radio-custom radio-danger">
																<input  <?php if($tableProduit["Disponibility"] == 0){ echo "checked="; } ?>  value=0 type="radio" id="radioExample5" name="Disponibility">
																<label  for="radioExample5">Rupture de Stock</label>
															</div>
														</div>
													</div>
                                                    
												</div>
                                                
											</div>		
										</div>
									</section>
								</div>
							</div>
							<div class="row">
								<div class="col">
									<section class="card card-modern card-big-info">
										<div class="card-body">
											<div class="row">
												<div class="col-lg-2-5 col-xl-1-5">
													<i class="card-big-info-icon bx bx-camera"></i>
													<h2 class="card-big-info-title">Product Image</h2>
													<p class="card-big-info-desc">Upload your Product image. You can add multiple images</p>
												</div>
												<div class="col-lg-3-5 col-xl-4-5">
													<div class="form-group row align-items-center">
														<div class="col">
															<div id="dropzone-form-image" class="dropzone-modern dz-square">
																<span class="dropzone-upload-message text-center">
																	<i class="bx bxs-cloud-upload"></i>
																	<b name='image' class="text-color-primary">Drag/Upload</b> your images here.
																</span>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</section>
								</div>
							</div>
							
							<div class="row action-buttons">
								<div class="col-12 col-md-auto">
									<button type="submit" class="submit-button btn btn-primary btn-px-4 py-3 d-flex align-items-center font-weight-semibold line-height-1">
										<i class="bx bx-save text-4 mr-2"></i> Save Product
									</button>
								</div>
								<div class="col-12 col-md-auto px-md-0 mt-3 mt-md-0">
									<a href="ecommerce-products-list.html" class="cancel-button btn btn-light btn-px-4 py-3 border font-weight-semibold text-color-dark text-3">Cancel</a>
								</div>
								<div class="col-12 col-md-auto ml-md-auto mt-3 mt-md-0">
									<a href="#" class="delete-button btn btn-danger btn-px-4 py-3 d-flex align-items-center font-weight-semibold line-height-1">
										<i class="bx bx-trash text-4 mr-2"></i> Delete Product
									</a>
								</div>
							</div>
						</form>
					<!-- end: page -->
				</section>
			</div>
