<!DOCTYPE html>
<html>
<head>
	<title>Home-page</title>
	<link rel="stylesheet" type="text/css" href="hom.css">
	

</head>

<?php

session_start(); // Start the session

if (isset($_POST['logout'])) {
    // Unset all session variables
    $_SESSION = array();

    // Destroy the session
    session_destroy();

    // Redirect the user to the login page
    header("Location:http://localhost/software/login.php");
    exit;
}

?>





<body>




	<header>
		<h1>Student Management System</h1>
		<nav>
			<ul class="ts">
				<li><a href="http://localhost/software/notes.html">Notes</a></li>
				<li><a href="http://localhost/software/paper.html">Question-paper</a></li>
				<li><a href="http://localhost/software/faculty.html">Faculty</a></li>
				<li><a href="#">Mentor-Mentee</a></li>
				<li><a href="http://localhost/software/profile.php">Profile</a></li>
				<li><a href="http://localhost/software/about.html">About</a></li>
			</ul>
		</nav>
	</header>
	<main>
		<h2 class="hh">Welcome to the Student Management System</h2>
		<div class="frame">
			<div class="photo">

			</div>
			</div>
			<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <input type="submit" name="logout" id="button" class="button" value="Logout">
    </form>
	</main>
	
	
	
</body>
</html>
