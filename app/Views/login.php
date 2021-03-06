<!-- </html -->
			<div role="main" class="main shop py-4">

				<div class="container py-4">

					<div class="row justify-content-center">
						<div class="col-md-6 col-lg-5 mb-5 mb-lg-0">
							<h2 class="font-weight-bold text-5 mb-0">Login</h2>
                            <?php if(session()->getFlashdata('msg')):?>
                                <div class="alert alert-danger"><?= session()->getFlashdata('msg') ?></div>
                            <?php endif;?>
							<form action="/login/auth" method="post" class="needs-validation">
								<div class="form-row">
									<div class="form-group col">
										<label class="text-color-dark text-3">Email address <span class="text-color-danger">*</span></label>
										<input type="email" value="<?= set_value('email') ?>" name="email" class="form-control form-control-lg text-4" required>
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col">
										<label class="text-color-dark text-3">Password <span class="text-color-danger">*</span></label>
										<input type="password" value="" name="password" class="form-control form-control-lg text-4" required>
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col">
										<button type="submit" class="btn btn-dark btn-modern btn-block text-uppercase rounded-0 font-weight-bold text-3 py-3" data-loading-text="Loading...">Login</button>
									</div>
								</div>
							</form>
						</div>

						<div class="col-md-6 col-lg-5">
							<h2 class="font-weight-bold text-5 mb-0">Register</h2>
                            <?php if(isset($validation)):?>
                                <div class="alert alert-danger"><?= $validation->listErrors() ?></div>
                            <?php endif;?>
							<form id="frmSignUp" action="/login/save" method="post">
								<div class="form-row">
									<div class="form-group col">
										<label class="text-color-dark text-3">Username <span class="text-color-danger">*</span></label>
										<input type="text"  name="name" value="<?= set_value('name') ?>" class="form-control form-control-lg text-4" required>
									</div>
                                    <div class="form-group col">
										<label class="text-color-dark text-3"> Address Email <span class="text-color-danger">*</span></label>
										<input type="text" name="email" value="<?= set_value('email') ?>" class="form-control form-control-lg text-4" required>
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col">
										<label class="text-color-dark text-3">Password <span class="text-color-danger">*</span></label>
										<input type="password" name="password" value="" class="form-control form-control-lg text-4" required>
									</div>
                                    <div class="form-group col">
										<label class="text-color-dark text-3">Password <span class="text-color-danger">*</span></label>
										<input type="password" name="confpassword" value="" class="form-control form-control-lg text-4" required>
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col">
										<p class="text-2 mb-2">Your personal data will be used to support your experience throughout this website, to manage access to your account, and for other purposes described in our <a href="#" class="text-decoration-none">privacy policy.</a></p>
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col">
										<button type="submit" class="btn btn-dark btn-modern btn-block text-uppercase rounded-0 font-weight-bold text-3 py-3" data-loading-text="Loading...">Register</button>
									</div>
								</div>
							</form>
						</div>
					</div>

				</div>

			</div>