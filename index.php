<?php

// Starting the session, to use and
// store data in session variable
session_start();

// If the session variable is empty, this
// means the user is yet to login
// User will be sent to 'login.php' page
// to allow the user to login
if (!isset($_SESSION['username'])) {
	$_SESSION['msg'] = "You have to log in first";
	header('location: login.php');
}

// Logout button will destroy the session, and
// will unset the session variables
// User will be headed to 'login.php'
// after loggin out
if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['username']);
	header("location: login.php");
}
?>


<?php if (isset($_SESSION['success'])) : ?>
	<div class="error success" >
		<h3>
			<?php
			echo $_SESSION['success'];
			unset($_SESSION['success']);
			?>
		</h3>
	</div>
<?php endif ?>

<!-- information of the user logged in -->
<!-- welcome message for the logged in user -->
<?php if (isset($_SESSION['username'])) : ?>


	<p>
		Welcome
		<strong>
			<?php echo $_SESSION['username']; ?>
		</strong>
		
	</p>




	<p>
		<a href="index.php?logout='1'" style="color: red;">
			Click here to Logout
		</a>
	</p>


<?php endif ?>
</div>




<?php
$page_title = "Learn with Saurabh";
include_once('includes/header.php');
?>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
	<!-- Indicators -->
	<ol class="carousel-indicators">
		<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		<li data-target="#myCarousel" data-slide-to="1"></li>
		<li data-target="#myCarousel" data-slide-to="2"></li>
	</ol>
	<div class="carousel-inner" role="listbox">
		<div class="item active">
			<img src="assets/img/img1.jpg" alt="First slide">
			<div class="jumbotron">
				<div class="container">
					<div class="carousel-caption">
						<h1>Learn with Saurabh</h1>
						<p>Welcome to theLearn with Saurabh elearning Service!</p>
					</div>
				</div>
			</div>
		</div>
		<div class="item">
			<img src="assets/img/img2.jpg" alt="Second slide">
			<div class="jumbotron">
				<div class="container">
					<div class="carousel-caption">

						<p>Create an account </p>
						<p><a class="btn btn-lg btn-info" href="register.php" role="button">Sign up today</a></p>
					</div>
				</div>
			</div>
		</div>
		<div class="item">
			<img src="assets/img/img3.jpg" alt="Third slide">
			<div class="jumbotron">
				<div class="container">
					<div class="carousel-caption">

						<p>Browse all of our Services and learn more !</p>
						<p><a class="btn btn-lg btn-info" href="subjects.php" role="button">VIEW SUBJECTS &raquo;</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div><!-- /.carousel -->



<?php
include_once("tutorial.php");
include_once('includes/footer.php');
?>