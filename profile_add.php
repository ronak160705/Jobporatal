<?php
session_start();
include('connection/db.php');
    $name=$_POST['name'];
    $dob=$_POST['dob'];
    $mobile=$_POST['mobile'];
    $email=$_POST['email'];
    $useremail=$_SESSION['email'];
    $img=$_FILES['profile']['name'];
    $tmp_name=$_FILES['profile']['tmp_name'];

    $sql=mysqli_query($con,"select * from profile where User_Email='".$_SESSION['email']."'");
    $sql_check=mysqli_num_rows($sql);
    if(!empty($sql_check)){
        move_uploaded_file($tmp_name,"admin/profile_img/".$img); 
        $update="update profile set Name='$name' ,DOB='$dob' ,Mobile='$mobile' ,Email='$email' ,Image='$img' where User_Email='$useremail'";
        //print_r($update);
        $query=mysqli_query($con,$update);
        if($query){
            echo "<script> alert('Your Profile has been Updated..!');</script>";
            header('location:myprofile.php');
        }else{
            echo"<script> alert('Something Went Wrong Please Try Again..!');</script>";
            // header('location:myprofile.php');
        }
     }
    
    else{    
 
        move_uploaded_file($tmp_name,"admin/profile_img/".$img);    
        $insert="insert into profile (Name,DOB,Mobile,Email,User_Email,Image) values ('$name','$dob','$mobile','$email','$useremail','$img')";
        //print_r($insert);
        $query=mysqli_query($con,$insert);
        if($query){
            echo "<script> alert('Your Profile has been Added..!');</script>";
            header('location:myprofile.php');
        }else{
            echo"<script> alert('Something Went Wrong Please Try Again..!');</script>";
            // header('location:myprofile.php');
        }

}


?>


