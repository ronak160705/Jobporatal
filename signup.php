<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    
 <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> 
<link rel="stylesheet" href="css/signin.css">
<title>Sign-Up Form</title>
<style>
    /* sign up FORM */
#logreg-forms1{
    width:412px;
    margin:10vh auto;
    background-color:#f3f3f3;
    box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
  transition: all 0.3s cubic-bezier(.25,.8,.25,1);
}
#logreg-forms1 form {
    width: 100%;
    max-width: 410px;
    padding: 15px;
    margin: auto;
}
#logreg-forms1 .form-control {
    position: relative;
    box-sizing: border-box;
    height: auto;
    padding: 10px;
    font-size: 16px;
}
#logreg-forms1 .form-control:focus { z-index: 2; }


#logreg-forms1 .social-login{
    width:390px;
    margin:0 auto;
    margin-bottom: 14px;
}
#logreg-forms1 .social-btn{
    font-weight: 100;
    color:white;
    width:190px;
    font-size: 0.9rem;
}

#logreg-forms1 a{
    display: block;
    padding-top:10px;
    color:lightseagreen;
}

#logreg-form .lines{
    width:200px;
    border:1px solid red;
}


#logreg-forms1 button[type="submit"]{ margin-top:10px; }

#logreg-forms1 .facebook-btn{  background-color:#3C589C; }

#logreg-forms1 .google-btn{ background-color: #DF4B3B; }

#logreg-forms1 .form-signup .social-btn{ width:210px; }

#logreg-forms1 .form-signup input { margin-bottom: 2px;}

.form-signup .social-login{
    width:210px !important;
    margin: 0 auto;
}

/* Mobile */

@media screen and (max-width:500px){
    #logreg-forms1{
        width:300px;
    }
    
    #logreg-forms1  .social-login{
        width:200px;
        margin:0 auto;
        margin-bottom: 10px;
    }
    #logreg-forms1  .social-btn{
        font-size: 1.3rem;
        font-weight: 100;
        color:white;
        width:200px;
        height: 56px;
        
    }
    #logreg-forms1 .social-btn:nth-child(1){
        margin-bottom: 5px;
    }
    #logreg-forms1 .social-btn span{
        display: none;
    }
    #logreg-forms1  .facebook-btn:after{
        content:'Facebook';
    }
  
    #logreg-forms1  .google-btn:after{
        content:'Google+';
    }
    
}
</style>
<script>
			function matchpass(){
			var password=document.myform.pass.value;
			var con_pass=document.myform.repass.value;
            var mobile=document.myform.mobile.value;
            if(mobile.length==10){
                return true;
            }
            else{
                alert("mobile number must be 10 digit ");
                return false;
            }
			if(password.length<6){
				alert("password must be at least 6 character long.");
				return false;
			}
			if(password==con_pass){
				return true;
			}else{
				alert("password must be same");
                return false;
			}
			}
		</script>
</head>
<body>
     <div id="logreg-forms1"> 
        <form action="signin.php" class="form-signup" name="myform" method="post" onsubmit="return matchpass()">
        <!-- <h1 class="h3 mb-3 font-weight-normal" style="text-align: center"> Sign up</h1> -->
                <div class="social-login">
                    <img class="ml-5" src="images/logo.png" class="img-thumbnail" alt="logo" width="150px" height="150px" >
                </div>
              
                <h3 style="text-align:center">Sign Up</h3><br>
                <!-- <p style="text-align:center">OR</p> -->
                <!-- <div  style="align-item:center;"><img class="mb-4" src="images/logo.png" class="img-thumbnail" alt="logo" width="100px" height="100px" ></div><br> -->
                <input type="text"  name="uname" id="uname" class="form-control" placeholder="Full name" Required autofocus="">
                <input type="email" name="email" id="email" class="form-control" placeholder="Email address" Required autofocus="">
                <input type="password" name="pass" id="pass" class="form-control" placeholder="Password" Required autofocus="">
                <input type="password" name="repass" id="repass" class="form-control" placeholder="Repeat Password" Required autofocus="">
                <input type="text" name="mobile" id="mobile" class="form-control" placeholder="Mobile No" Required autofocus="">
                <input type="date" name="dob" id="dob" class="form-control" placeholder="Date of Birth" Required autofocus="">
                <input class="btn btn-primary btn-block" type="submit" name="signup" id="signup" value="Sign Up"><br>
                <div class="social-login">
                    <button class="btn google-btn social-btn" type="button"><span><i class="fab fa-google-plus-g"></i> Sign up with Google+</span> </button>
                </div>
                <div class="social-login">
                    <button class="btn facebook-btn social-btn" type="button"><span><i class="fab fa-facebook-f"></i> Sign up with Facebook</span> </button>
                </div>
                <a href="signin.php" id="cancel_signup"><i class="fas fa-angle-left"></i> Already exist</a>
               
            </form>
            <br>
         </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!--<script src="/script.js"></script> -->
    </body>
</html>
<?php
include('connection/db.php');
// $sql="create table jobseeker (
//     id int(50) primary key AUTO_INCREMENT,Username varchar(100),Email varchar(100),Pass varchar(100),
//     Mobile varchar(50),DOB varchar(100)
//     ) ";
//     $res=mysqli_query($con,$sql);
//     echo"create table successfully";

if(isset($_POST['signup'])){
    $uname=$_POST['uname'];
    $email=$_POST['email'];
    $pass=$_POST['pass'];
    $mobile=$_POST['mobile'];
    $dob=$_POST['dob'];
$sql="insert into jobseeker (Username,Email,Pass,Mobile,DOB) values('$uname','$email','$pass','$mobile','$dob')";
$query=mysqli_query($con,$sql);

if($query){
    // echo"<script>alert('You are Successfully Sign-Up..!');</script>";
    header('location:signin.php');
}else{
    echo"<script>alert('You are not eligible for Sign-Up..!');</script>";
}
}

?>
