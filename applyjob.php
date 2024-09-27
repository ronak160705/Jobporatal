
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>JobSeeker</title>

    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<style>      
a,
a:focus,
a:hover {
  color: #fff;
}

/* Custom default button */
.btn-secondary,
.btn-secondary:hover,
.btn-secondary:focus {
  color: #333;
  text-shadow: none; /* Prevent inheritance from `body` */
  background-color: #fff;
  border: .05rem solid #fff;
}

html,
body {
  height: 100%;
  background-color: #333;
}

body {
  display: -ms-flexbox;
  display: -webkit-box;
  display: flex;
  -ms-flex-pack: center;
  -webkit-box-pack: center;
  justify-content: center;
  color: #fff;
  text-shadow: 0 .05rem .1rem rgba(0, 0, 0, .5);
  box-shadow: inset 0 0 5rem rgba(0, 0, 0, .5);
}

.cover-container {
  max-width: 42em;
}

.cover {
  padding: 0 1.5rem;
}
.cover .btn-lg {
  padding: .75rem 1.25rem;
  font-weight: 700;
}

/* Footer */

.mastfoot {
  color: rgba(255, 255, 255, .5);
}
</style>
    
  </head>

  <body class="text-center">

    <div class="cover-container d-flex h-100 p-3 mx-auto flex-column">
      

      <main role="main" class="inner cover">
        <h1 class="cover-heading">JobSeeker Update</h1>        
       
       <?php
            include('connection/db.php');

            // $sql="create table applyjob(
            //     Ap_job_id int(100) primary key AUTO_INCREMENT,
            //     Firstname varchar(111),
            //     Lastname varchar(111),
            //     DOB varchar(111),
            //     ResumeFile varchar(111),
            //     JobSeeker varchar(111),
            //     Job_id int(100)
            // )";
            // $query=mysqli_query($con,$sql);
            // echo"created";

            // $sql="drop table applyjob";
            // $query=mysqli_query($con,$sql);
            // echo"deleted";

            if(isset($_POST['submit'])){
                $fname=$_POST['fname'];
                $lname=$_POST['lname'];
                $dob=$_POST['dob'];
                $mobile=$_POST['mobile'];
                $file=$_FILES['file']['name'];
                $tmp_name=$_FILES['file']['tmp_name'];
                $jobseeker=$_POST['jobseeker'];
                $jid=$_POST['jid'];
                //$folder="files/".$file;
               
                $query=mysqli_query($con,"select * from applyjob where JobSeeker_Email='$jobseeker' and Job_id='$jid'");
                if(mysqli_num_rows($query)>0){
                  echo"<h1>Already Applied..!!</h1>";
                  // header('location:http://localhost/Jobdekho');
                }else{

               
                  move_uploaded_file($tmp_name,"admin/files/".$file);

                    $sql="insert into applyjob (FirstName,Lastname,DOB,Mobile,ResumeFile,JobSeeker_Email,Job_id) values ('$fname','$lname','$dob','$mobile','$file','$jobseeker','$jid')" ;
                    $query=mysqli_query($con,$sql);

                    if($query){ ?>
                          <p class="lead">Your Form Successfully Added..!</p>
                        
                    <?php }else{
                        echo"<script>alert('Not Done..!');</script>";
                    }
                } 
              } 

        ?>
        <p class="lead">
          <a href="http://localhost/Jobdekho/job-single.php?id=<?php echo $jid;?>" class="btn btn-lg btn-secondary">Back</a>
        </p>
      </main>

     
    </div>    
  
  </body>
</html>
