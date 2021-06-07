<?php $this->view("header", $data); ?>
	
	<section id="form"><!--form-->
		<div class="container">
            <div class="row" style="text-align: center;">

				<span class="err-message" style="font-size: 21px; color: var(--red);"><?php check_error()?></span>
				
				<div class="col-sm-4" style="float: none; display: inline-block;">
					<div class="signup-form" style="padding-top: 30px;"><!--sign up form-->
						<h2>New User Signup!</h2>
						<form action="#" method="post">
							<input name="name" value="<?= isset($_POST['name']) ? $_POST['name'] : '';?>" type="text" placeholder="Name"/>
							<input name="email" value="<?= isset($_POST['email']) ? $_POST['email'] : '';?>" type="email" placeholder="Email Address"/>
							<input name="password" type="password" placeholder="Password"/>
                            <input name="password2" type="password" placeholder="Confirm password"/>
							<button type="submit" class="btn btn-default">Sign Up</button>
						</form>
					</div><!--/sign up form-->
				</div>
			</div>
		</div>
	</section><!--/form-->

<?php $this->view("footer", $data); ?>