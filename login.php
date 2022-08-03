<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Login | Loan Management System</title>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css">
    <link rel="stylesheet" href="assets/css/login.css">
    <title>Log In</title>
	<script src="assets/vendor/jquery/jquery.min.js"></script>
  	<script src="assets/DataTables/datatables.min.js"></script>
	<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
	<script src="assets/vendor/php-email-form/validate.js"></script>
	<script src="assets/vendor/venobox/venobox.min.js"></script>
	<script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
	<script src="assets/vendor/counterup/counterup.min.js"></script>
	<script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
	<script src="assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
	<script type="text/javascript" src="assets/js/select2.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.datetimepicker.full.min.js"></script>
    <script type="text/javascript" src="assets/font-awesome/js/all.min.js"></script>
  	<script type="text/javascript" src="assets/js/jquery-te-1.4.0.min.js" charset="utf-8"></script>
	 <?
	// php include('./header.php');
	 ?> 
	<?php include('./db_connect.php'); 

	?>
	<?php
	session_start();
	if(isset($_SESSION['login_id']))
	header("location:index.php?page=homePage");
	?>
</head>
<body>
    <div class="container">
        <img src="assets/img/avatar.jpg" class="avatar" alt="">
        <h2>Login Here</h2>
        <form class="form" id="login-form" >

            <?php
            if (!empty($errorMessage)) {
            ?>
                <div class="error">
                    <?php echo $errorMessage; ?>
                </div>  
            <?php
            }
            ?>

            <div class="form-control">
                <label for="">Username</label>
                <input type="text" id="username" name="username" placeholder="Enter Username" required>
               

            </div>
            <div class="form-control">
                <label>Password</label>
                <input type="password" id="password" name="password" placeholder="Enter Password" required>
               
            </div>
            <br>
            <input type="submit" name="login-btn" value="Login" class="btn">
            <br>

            <a href="#">Forget password?</a><br />
            <a href="registration.php">Don't have an account?</a>

        </form>
    </div>


</body>
<script>
	$('#login-form').submit(function(e){
		e.preventDefault()
		$('#login-form button[type="button"]').attr('disabled',true).html('Logging in...');
		if($(this).find('.alert-danger').length > 0 )
			$(this).find('.alert-danger').remove();
		$.ajax({
			url:'ajax.php?action=login',
			method:'POST',
			data:$(this).serialize(),
			error:err=>{
				console.log(err)
				$('#login-form button[type="button"]').removeAttr('disabled').html('Login');
				
			},
			success:function(resp){
<<<<<<< HEAD
			
				// $user_type = "SELECT * FROM users WHERE type =='User'";
				// console.log($user_type);

=======
				console.log(resp)
>>>>>>> 21c738b1f972fdcf75ec3feaca78b7431143c4dd
				if(resp == 1){
					console.log(resp);
						location.href= "index.php?page=home";
				}else if(resp == 2){
					location.href ='voting.php';
				}else{
					$('#login-form').prepend('<div class="alert alert-danger">Username or password is incorrect.</div>')
					$('#login-form button[type="button"]').removeAttr('disabled').html('Login');
				}
			}
		})
	})
</script>	

</html>