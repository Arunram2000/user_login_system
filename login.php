<?php 

session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration and login</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	 <script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h2>Login</h2>
				<form action="validation.php" method="post">
					<div class="form-group">
						<label>Username</label>
						<input type="text" name="user" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="Password" name="password" class="form-control" required>
					</div>
					<button type="submit" class="btn btn-primary">Login</button>
				</form>
			</div>


			<div class="col-md-6">
				<h2>Register Here</h2>
				<form action="registration.php" method="post" id="form">
					<div class="form-group">
						<label>Username</label>
						<input type="text" name="user" class="form-control" required id="form-username">
						<span class="text-danger" id="username-err-msg"></span>
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="email" name="email" class="form-control" required id="form-email">
						<span class="text-danger" id="email-err-msg"></span>
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="Password" name="password" class="form-control" required id="form-password">
						<span class="text-danger" id="password-err-msg"></span>
					</div>
					<button type="submit" class="btn btn-primary">Register</button><br>
					<?php if (isset($_SESSION['err'])) {
						echo $_SESSION['err'];
					} ?>
				</form>
			</div>
		</div>
	</div>


	<script type="text/javascript">
		$(function(){

			$('#username-err-msg').hide();
			$('#password-err-msg').hide();

			var nameErr=false;
			var passErr=false;

			$('#form-username').focusout(function(){
				check_username();
			});
			$('#form-password').focusout(function(){
				check_password();
			});

			function check_username(){
				var username_len= $('#form-username').val().length;

				if (username_len<5 || username_len>15) {
					$('#username-err-msg').html('name must be 5 to 15 characters');
					$('#username-err-msg').show();
					nameErr=true;
				}else{
					$('#username-err-msg').hide();
				}
			}
			function check_password(){
				var password_len= $('#form-password').val().length;

				if (password_len<8) {
					$('#password-err-msg').html('atleast 8 characters');
					$('#password-err-msg').show();
					nameErr=true;
				}else{
					$('#password-err-msg').hide();
				}
			}
			$('#form').submit(function(){
				var nameErr=false;
				var passErr=false;

				check_username();
				check_password();

				if(nameErr==false && passErr==false){
					return true;
				}else{
					return false;
				}
			})
		});
	</script>
	
</body>
</html>
