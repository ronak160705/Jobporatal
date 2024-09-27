<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="css/signin.css">
    <!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
    <title>Login Form</title>
   


</head>
<body>
    <div id="logreg-forms">
        <form class="form-signin" method="post" name="signin">
            <h1 class="h3 mb-3 font-weight-normal" style="text-align: center"> Sign in</h1>
            <div class="social-login">
                <button class="btn facebook-btn social-btn" type="button"><span><i class="fab fa-facebook-f"></i> Sign in with Facebook</span> </button>
                <button class="btn google-btn social-btn" type="button"><span><i class="fab fa-google-plus-g"></i> Sign in with Google+</span> </button>
            </div>
            <p style="text-align:center"> OR  </p>
            <input type="email" id="email" name="email" class="form-control" placeholder="Enter Email" autofocus="" Required >
            <input type="password" id="pass" name="pass" class="form-control" placeholder="Enter Password" Required>
            
            <input type="submit" value="Sign in" id="submit" name="submit" class="btn btn-success btn-block"> 
            <a href="repass.php" id="forgot_pswd">Forgot password?</a>
            <hr>
            <!-- <p>Don't have an account!</p>  -->
            <button class="btn btn-primary btn-block" type="button" id="btn-signup" name="btn-signup"> <a  href="signup.php" style="color:white; align-item:center;">Sign up New Account</a></button>
            <!-- <i class="fas fa-sign-in-alt"></i><i class="fas fa-user-plus"></i><i class="fas fa-user-plus"></i> </button>  -->
            </form>            
            
    </div> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>
<?php

include('connection/db.php');
   if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $sql="select * from jobseeker where Email='$email' and Pass='$pass'";
    $res=mysqli_query($con,$sql);
    if($res){
      if(mysqli_num_rows($res)>=1){
        $_SESSION['email']=$email;
        header('location:http://localhost/Jobdekho/index.php');
      }
      else{
        echo"<script>alert('Invalid credinitial.. Please Try Again..!');</script>";
      }
    }
  }
?>