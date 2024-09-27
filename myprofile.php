<?php
  include('includes/header.php');
  include('connection/db.php');

  $sql="select * from profile where User_Email='".$_SESSION['email']."'";
  $query=mysqli_query($con,$sql);
  while($r=mysqli_fetch_array($query)){
    $name=$r['Name'];
    $dob=$r['DOB'];
    $mobile=$r['Mobile'];
    $email=$r['Email'];
    $img=$r['Image'];
  }
?>
<div class="hero-wrap js-fullheight" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start" data-scrollax-parent="true">
          <div class="col-md-8 ftco-animate text-center text-md-left mb-5" data-scrollax=" properties: { translateY: '70%' }">
          	<p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-3"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Profile</span></p>
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">MyProfile</h1>
          </div>
        </div>
      </div>
    </div>
   
    <div style="margin:10% 0% 10% 20%; width:70%;">
        <h2 style="text-align:center;">My Profile</h2>
        <form action="profile_add.php" method="post" name="profile_form" id="profile_form" enctype="multipart/form-data" style="border:1px solid black; padding:10px; margin:10px;" >
            <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">                    
                    <img src="admin/profile_img/<?php if(!empty($img)){echo $img;}else{echo 'user.jpeg';}?>" class="img-thumbnail" alt="MyPic" height="100" width="100">
                  </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                 
                  <td><input type="file" class="form-control" name="profile" id="profile"></td>
                  </div>
                </div>           
                <!-- <div class="col-sm-4">
                  <div class="form-group">
                  <td><input type="submit" name="img_upload" id="img_upload" class="btn btn-primary btn-block" value="Upload Image"></td>
                  </div>
                </div> -->
            </div>
            <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="name"> Name :</label>                 
                    <td><input type="text" class="form-control" name="name" id="name" value="<?php if(empty($name)){}else{echo $name;}?>" placeholder="Enter Your Name"></td>
                  </div>
                </div>   
                <div class="col-sm-6">
                  <div class="form-group"> 
                  <label for="dob"> Date Of Birth :</label>                    
                    <td><input type="date" class="form-control" name="dob" id="dob" value="<?php echo $dob;?>" placeholder="Enter Your Date Of Birth"></td>
                  </div>
                </div> 
                <div class="col-sm-6">
                  <div class="form-group"> 
                  <label for="mobile"> Mobile Number :</label>                   
                    <td><input type="number" class="form-control" name="mobile" id="mobile" value="<?php echo $mobile;?>" placeholder="Enter Your Mobile Number"></td>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group"> 
                  <label for="email"> Email :</label>                   
                    <td><input type="email" class="form-control" name="email" id="email" value="<?php if(empty($email)){}else{echo $email;}?>" placeholder="Enter Your Email Id"></td>
                  </div>
                </div>  
            </div>
            <div class="row">        
                <div class="col-sm-6">
                  <div class="form-group">
                  <td><input type="submit" name="submit" id="submit" class="btn btn-primary btn-block" value="Upload"></td>
                  </div>
                </div>
            </div>             
        </form>
    </div>  
    
		
		<section class="ftco-section-parallax">
      <div class="parallax-img d-flex align-items-center">
        <div class="container">
          <div class="row d-flex justify-content-center">
            <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
              <h2>Subcribe to our Newsletter</h2>
              <p>By subscribing, you consent to be contacted by Workable about our relevant Jobs, employees and events. You can opt-out any time. For more information please Contact us.</p>
              <div class="row d-flex justify-content-center mt-4 mb-4">
                <div class="col-md-8">
                  <form action="#" class="subscribe-form">
                    <div class="form-group d-flex">
                      <input type="text" class="form-control" placeholder="Enter email address">
                      <input type="submit" value="Subscribe" class="submit px-3">
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

<?php
  include('includes/footer.php');
?>
<?php
        // include('connection/db.php');
        // $sql="create table profile(Pro_id int(100) primary key AUTO_INCREMENT,
        //                         Name varchar(100),
        //                         DOB varchar(100),
        //                         Mobile varchar(100),
        //                         Email varchar(100),
        //                         User_Email varchar(100),
        //                         Pro_pic varchar(100))";
        // $query=mysqli_query($con,$sql);
        // echo"table created";
?>
<!-- <script>
    $(document).ready(function(){
        $('#submit').click(function(){
            var data=$('#profile_form').serialize();
            $.ajax({
                    type:"POST",
                    url:"profile_add.php",
                    data:data,
                    success:function(data){
                        // alert(data);
                        $('#msg').html(data);
                    }
                });
        });
    });
</script> -->
