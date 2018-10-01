<div class='container_log'> 
	<div class="login-form">
		<div class="main-div">
			<div class="panel">
				<h2>Admin Login</h2>
				<p>Please enter your email and password</p>
			</div>
				<form id="Login" method="post" action="../mvc/login">
					<div class="form-group">
						<input type="email" class="form-control" id="inputEmail" name='inputEmail' placeholder="Email Address">
					</div>
					<div class="form-group">
						<input type="password" class="form-control" id="inputPassword" name='inputPassword' placeholder="Password">
					</div>
					<div class="forgot">
					<a href="reset.html">Forgot password?</a>
					</div>
					<?php if(isset($this->mensage)){
						print '<div class="form-group"><p style="color:red;">'.$this->mensage.'</p> </div>';
					 } ?>
					<a href='javascript:void(0);' onclick='submit();'><button type='button' class="btn btn-primary">Login</button></a>
				</form>
		</div>
	</div>
</div>