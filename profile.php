<?php
// Start the session and retrieve the user's email
session_start();
$user_id = $_SESSION['email'];

// Connect to the database and retrieve the user's data
$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'sign';
$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
$query = "SELECT * FROM son WHERE email = '$user_id'";
$result = mysqli_query($conn, $query);

// Fetch the results and store them in variables
while ($row = mysqli_fetch_assoc($result)) {
  $Firstname = $row["Firstname"];
  $Lastname = $row["Lastname"];
  $phone = $row["phone"];
  $university = $row["university"];
  $branch = $row["branch"];
  $studentid = $row["studentid"];
  $department = $row["department"];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profile</title>
  <link rel="stylesheet" href="profile.css">
</head>
<body>
  <div class="detail">
    <div class="see">
    
    <h3>Profile</h3>
    <p class="ra">Name: <?php echo $Firstname . ' ' . $Lastname; ?></p>
    <p class="ra">Phone: <?php echo $phone; ?></p>
    <p class="ra">Email: <?php echo $user_id; ?></p>
    <p class="ra">Branch: <?php echo $branch; ?></p>
    <p class="ra">Student ID: <?php echo $studentid; ?></p>
    <p class="ra">Department: <?php echo $department; ?></p>
    <p class="ra">University ID: <?php echo $university; ?></p>
  </div>
</div>
</body>
</html>
