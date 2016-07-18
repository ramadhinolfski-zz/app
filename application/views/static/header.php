<header id="header"">
	<div class="headerbar">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="headerbar-left">
			<ul class="header-nav header-nav-options">
				<li class="header-nav-brand" >
					<div class="brand-holder">
						<a href="dashboard">
							<span class="text-lg text-bold text-primary">SMART SCHOOL SYSTEM</span>
						</a>
					</div>
				</li>
			</ul>
		</div>
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="headerbar-right">
			<ul class="header-nav header-nav-options">
				<!-- Sign button -->
				<li>
						<button type="button" class="btn btn-raised btn-primary btn-md" data-target="#login" data-toggle="modal"><i class="fa fa-paper-plane"></i>&nbsp;Sign In</button>
<!-- Modal Form --> 
							<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
											<h4 class="modal-title" id="formModalLabel">Login to system</h4>
										</div>
										<form class="form-horizontal" role="form" method="post" action="auth">
											<div class="modal-body">
												<div class="form-group">
													<div class="col-sm-3">
														<label for="username" class="control-label">Username</label>
													</div>
													<div class="col-sm-9">
														<input type="email" name="username" id="username" class="form-control" placeholder="Username">
													</div>
												</div>
												<div class="form-group">
													<div class="col-sm-3">
														<label for="password" class="control-label">Password</label>
													</div>
													<div class="col-sm-9">
														<input type="password" name="password" id="password" class="form-control" placeholder="Password">
													</div>
												</div>
												<div class="form-group">
													<div class="col-sm-3">
													</div>
													<div class="col-sm-9">
														<div class="checkbox">
															<label>
																<input type="checkbox" id="cb1"> Remember me
															</label>
														</div>
													</div>
												</div>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
												<button type="submit" class="btn btn-primary">Login</button>
											</div>
										</form>
									</div><!-- /.modal-content -->
								</div><!-- /.modal-dialog -->
							</div><!-- /.modal -->
				</li>
			</ul>
		</div><!--end #header-navbar-collapse -->
	</div>
</header>