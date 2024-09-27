<?php
  $page='contact';
  include('includes/header.php');
?>
    
    <div class="hero-wrap js-fullheight" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start" data-scrollax-parent="true">
          <div class="col-md-8 ftco-animate text-center text-md-left mb-5" data-scrollax=" properties: { translateY: '70%' }">
          	<p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-3"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Contact</span></p>
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Contact Us</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section contact-section bg-light">
      <div class="container">
        <div class="row d-flex mb-5 contact-info">
          <div class="col-md-12 mb-4">
            <h2 class="h3">Contact Information</h2>
          </div>
          <div class="w-100"></div>
          <div class="col-md-3">
            <p><span>Address:</span> 210 Parvat Patiya 2nd Street,Near Amezia ,Parvat Patiya Road,Surat.</p>
          </div>
          <div class="col-md-3">
            <p><span>Phone:</span> <a href="tel://1234567920">+ 1235 2355 98</a></p>
          </div>
          <div class="col-md-3">
            <p><span>Email:</span> <a href="mailto:jobdekho@gmail.com">jobdekho@gmail.com</a></p>
          </div>
          <div class="col-md-3">
            <p><span>Website</span> <a href="http://localhost/Jobdekho/index.php">JobDekho</a></p>
          </div>
        </div>
        <div class="row block-9">
          <div class="col-md-6 order-md-last d-flex">
            <form action="contact_add.php" method="post" class="bg-white p-5 contact-form">
              <div class="form-group">
                <input type="text" name="name" id="name" class="form-control" placeholder="Your Name">
              </div>
              <div class="form-group">
                <input type="text" name="email" id="email" class="form-control" placeholder="Your Email">
              </div>
              <div class="form-group">
                <input type="text" name="sub" id="sub" class="form-control" placeholder="Subject">
              </div>
              <div class="form-group">
                <textarea name="msg" id="msg" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" name="sendmsg" id="sendmsg" value="Send Message" class="btn btn-primary py-3 px-5">
              </div>
            </form>
          
          </div>

          <div class="col-md-6 d-flex">
          <div class="google-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14880.237854502224!2d72.85360131866803!3d21.18979663669621!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be04fb09f6e05d5%3A0x7f1297a24491d240!2sParvat%20Patiya%2C%20Surat%2C%20Gujarat%20395101!5e0!3m2!1sen!2sin!4v1694802613597!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade " width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
          	<!-- <div id="map" class="bg-white">
              <script src="https://www.google.com/maps/place/Parvat+Patiya,+Surat,+Gujarat+395101/@21.1897966,72.8536013,15z/data=!3m1!4b1!4m6!3m5!1s0x3be04fb09f6e05d5:0x7f1297a24491d240!8m2!3d21.1902742!4d72.864442!16s%2Fg%2F1tyyvl5t?entry=ttu"></script>
            </div> -->
          </div>
        </div>
      </div>
    </section>
		
		<section class="ftco-section-parallax">
      <div class="parallax-img d-flex align-items-center">
        <div class="container">
          <div class="row d-flex justify-content-center">
            <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
              <h2>Subcribe to our Newsletter</h2>
              <p>By subscribing, you consent to be contacted by Workable about our relevant Jobs,employees and events.You can opt-out any time.For more information please Contact us.</p>
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