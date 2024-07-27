<!DOCTYPE html>
<html lang="en">
<head>
	<title>Registration</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/img-01.png" alt="IMG">
				</div>
                <form  class="login100-form validate-form" action="add_books.php" method="POST" enctype='multipart/form-data'>
					<span class="login100-form-title">
						Add books
					</span>

					<div class="wrap-input100 validate-input">
						<input class="input100" type="text" name="name" placeholder="Title">
						<span class="focus-input100"></span>
					</div>

                    <div class="wrap-input100 validate-input">
						<input class="input100" type="text" name="author" placeholder="Author">
						<span class="focus-input100"></span>
					</div>
                    
                    <div class="wrap-input100 validate-input">
						<input class="input100" type="text" name="about" placeholder="About">
						<span class="focus-input100"></span>
					</div>
                    
                    <div class="wrap-input100 validate-input">
						<input class="input100" type="text" name="year" placeholder="Year">
						<span class="focus-input100"></span>
					</div>

                    <div class="wrap-input100 validate-input">
						<input class="input100" type="text" name="photo" placeholder="Photo">
						<span class="focus-input100"></span>
					</div>

                    <div class="wrap-input100 validate-input">
						<input class="input100" type="date" name="add_date" placeholder="Current Date">
						<span class="focus-input100"></span>
					</div>
					
					<div class="wrap-input100 validate-input">
						<input class="input100" type="file" name="filename" placeholder="Book">
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							<input class="login100-form-btn" type="submit"  value="Add" name="add" >
						</button>
					</div>
					</form>
				
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 0.9
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>