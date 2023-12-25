
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign-up</title>
    <link rel="stylesheet" href="reg.css">
</head>
<body>
    <section>
        <div class="main-form">
            <div class="form-content">
                <form method="POST">
                    <h2>Sign-Up</h2>
                    <div class="input1">
                        <input type="name" required name="fn">

                        <label for="name">First name</label>
                        
                    
                    </div>
                    <div class="input1">
                        <input type="name" required  name="ln">
                        <label for="name">Last name</label>
                        

                    
                    </div>

                    
                    <div class="input1">
                        <input type="phone" required  name="pn">
                        <label for="name">Phone</label>
                    </div>
                    <div class="input1">
                        <input type="email" required  name="el">

                        <label for="email">Email</label>
                        <ion-icon name="mail-outline"></ion-icon>
                    
                    </div>
                    <div class="input1">
                        <input type="password" required  name="pw">
                        <label for="password">password</label>
                        <ion-icon name="lock-closed-outline"></ion-icon></div>
                        <div class="input1">
                        <input type="text" required  name="brs">
                        <label for="Branch">Branch</label>
                    </div>
                    <div class="input1">
                        <input type="phone" required  name="id">
                        <label for="name">Student ID</label>
                    </div>
                    <div class="input1">
        <input type="name" required  name="dp">
        <label for="name">Department</label>
        </div>
  
                    <div class="input1">
        <input type="name" required  name="ui">
        <label for="name">University ID</label>
    </div>
    

                   
                        <div class="submit"><input type="submit"  class="button" name="submit" >
                    </div>

                        
                                           
                </form>
           
            <?php
    
    $con=mysqli_connect('localhost','root','','sign');
    if(isset($_POST['submit'])){

  $name=$_POST['fn'];
  $last=$_POST['ln'];
  $phone=$_POST['pn'];
  $email=$_POST['el'];
  $password=$_POST['pw'];
  $branch=$_POST['brs'];
  $ids=$_POST['id'];
  $univers=$_POST['ui'];
  $dep=$_POST['dp'];
  header("Location: http://localhost/software/login.php");

  
  $query="INSERT INTO son(Firstname,Lastname,phone,email,password,university,branch,studentid,department	)VALUES ('$name','$last','$phone','$email','$password','$univers','$branch','$ids','$dep')";
  $run=mysqli_query($con,$query);

    }
    
    
    ?> 
            
        
        </div>
    </section>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>
