<?php
session_start();

// Check if the user is already logged in
if (isset($_SESSION["email"])) {
  // Redirect to the home page
  header("Location: http://localhost/software/home.php");
  exit;
}

// Database configuration
$host = "localhost";
$username = "root";
$password = "";
$dbname = "sign";

// Create a database connection
$conn = mysqli_connect($host, $username, $password, $dbname);

// Check if the connection was successful
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Define the SQL query
$query = "SELECT email, password FROM son";

// Execute the query
$result = mysqli_query($conn, $query);

// Initialize variables
$email = array();
$password = array();

// Fetch the results and store them in variables
while ($row = mysqli_fetch_assoc($result)) {
  $email[] = $row["email"];
  $password[] = $row["password"];
}

// Check if the form has been submitted
if (isset($_POST["email"]) && isset($_POST["password"])) {
  $email_input = $_POST["email"];
  $password_input = $_POST["password"];

  // Check if the email and password are valid
  if (in_array($email_input, $email) && in_array($password_input, $password)) {
    // Set the session variable
    $_SESSION["email"] = $email_input;

    // Redirect to the home page
    header("Location: http://localhost/software/home.php");
    exit;
  } else {
    $error = "Invalid email or password";
  }
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login-page</title>
    <link rel="stylesheet" href="styl.css" />
  </head>

  <body>
    <section>
      <div class="main-form">
        <div class="form-content">
          <form action="" method="POST">
            <h2>Login</h2>
            <div class="input1">
              <input type="email" required id="username" name="email" />

              <label for="email">Email</label>
              <ion-icon name="mail-outline"></ion-icon>
            </div>
            <div class="input1">
              <input
                type="password"
                required
                id="password"
                class="form-control"
                name="password"
              />
              <label for="password">Password</label>
              <ion-icon name="lock-closed-outline"></ion-icon>
            </div>
            <div class="forgot">
              <input type="checkbox" />
              <label for="remember"
                >Remember | <a href="#">Forgot password</a></label
              >
            </div>

            <?php if (isset($error)) { ?>
              <div class="error"><?php echo $error; ?></div>
            <?php } ?>

            <input
              type="submit"
              class="Login"
              value="Login"
            />

            <div class="register">
              <p>Dont have account | <a href="http://localhost/software/signup.php">Register</a></p>
            </div>
          </form>
        </div>
      </div>
      </section>
    <script
      type="module"
      src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"
    ></script>
  </body>
</html>