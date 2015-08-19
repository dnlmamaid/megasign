<div class="container">
	<div class="col-md-8 col-md-offset-2" style="margin-top: 160px">

		<div class="panel panel-default">
			<div class="panel-body">
				<div class="col-lg-10 col-lg-offset-1" style="margin-bottom: 20px">

				</div>

				<div class"container">
					<div class="col-lg-6 col-lg-offset-3">
						<form class="form-signin"  method="post" accept-charset="utf-8" action="login">
							<div class="row">
								
									<img class="img-responsive" src="<?php echo base_url(); ?>assets/images/Megasign(Logo).jpg">
									<br>
									<div class="form-group">
										
										<input type="text" name="identity" value="<?php echo set_value('identity'); ?>"  id='login' class="form-control" placeholder="Username/Email" required autofocus>
									</div>

									<div class="form-group">
										<input type="password"  name="password" id="password" class="form-control" placeholder="Password" required>
										
										<div class="form-group">
											<div class="col-md-6" style="margin-top:5px;">
												<input type="checkbox" name="remember" value="1" id="remember"> <b>Remember me</b>
												 
											</div>
											<div class="col-md-8"  style="margin-top:5px;">
												<a href="forgot_password"><?php echo lang('login_forgot_password');?></a>
											</div>
										</div>
										
										<div class="text-right" style="margin-top:10px; margin-bottom:10px;">
											<button class="btn  btn-1" type="submit" >
												Login
											</button>
										</div>
										
										<?php echo form_close(); ?>
									</div>
								
						</form>
					</div>
				</div>

			</div>
		</div>
	</div>
</div>



