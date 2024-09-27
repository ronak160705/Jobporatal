<?php
            include('connection/db.php');

            // $sql="create table contact(
            //     Cont_id int(100) primary key AUTO_INCREMENT,
            //     Name varchar(111),
            //     Email varchar(111),
            //     Subject varchar(111),
            //     Message varchar(111)                
            // )";
            // $query=mysqli_query($con,$sql);
            // echo"created";

            

            if(isset($_POST['sendmsg'])){
                $name=$_POST['name'];
                $email=$_POST['email'];
                $sub=$_POST['sub'];
                $msg=$_POST['msg'];
               
               
                $sql="insert into contact (Name,Email,Subject,Message) values ('$name','$email','$sub','$msg')" ;
                $query=mysqli_query($con,$sql);
                

                if($query){ 
                    echo"<script>alert('Your Query has been Successfully sent..');</script>";   
                    echo"<script>
                    window.setTimeout(function(){
                        window.location.href = 'http://localhost/Jobdekho/contact.php';
                    },1000);
                </script>";
                 }else{
                        echo"<script>alert('Not Sent..!');</script>";
                }
                } 
              

        ?>