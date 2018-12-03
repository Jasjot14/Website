<?php

include("header.php");
?>
  <!-- header end -->

  <!-- Start Slider Area -->
 
        
		<img src="img/gs/contact-banner.jpg" height="550" alt=""  />
<!--        <img src="img/background/back3.jpg" alt=""  />
-->      
  <div id="contact" class="contact-area">
    <div class="contact-inner area-padding">
      <div class="contact-overly"></div>
      <div class="container ">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <h2>Contact G.S. Auto International Ltd.</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- Start contact icon column -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="contact-icon text-center">
              <div class="single-icon">
                <i class="fa fa-mobile"></i>
                <p>
                  Phone: +91-161-2511001/2/3/4/5<br />
Fax: +91-161-2510885
                </p>
              </div>
            </div>
          </div>
          <!-- Start contact icon column -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="contact-icon text-center">
              <div class="single-icon">
                <i class="fa fa-envelope-o"></i>
                <p>
                  Email: info@gsgroupindia.com<br>
				  mkt@gsgroupindia.com<br>
                  <span>Web: www.gsauto.in</span>
                </p>
              </div>
            </div>
          </div>
          <!-- Start contact icon column -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="contact-icon text-center">
              <div class="single-icon">
                <i class="fa fa-map-marker"></i>
                <p>
                  G.S. Estate, G.T. Road,<br />
Ludhiana - 141 010<br />
India.<br />
                </p>
              </div>
            </div>
          </div>
        </div>
       

          <!-- Start Google Map -->
         <div class="col-md-6 col-sm-6 col-xs-12">
            <!-- Start Map -->
            <iframe style="border:1px solid #7E9A0A;" width="525" height="260" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.in/maps?q=gs+auto+international+ltd+ludhiana&amp;ie=UTF8&amp;hq=gs+auto+international+ltd&amp;hnear=Ludhiana,+Punjab&amp;t=m&amp;cid=4623519713938160433&amp;ll=30.905023,75.856905&amp;spn=0.019148,0.053644&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe><br /><small><a href="https://maps.google.co.in/maps?q=gs+auto+international+ltd+ludhiana&amp;ie=UTF8&amp;hq=gs+auto+international+ltd&amp;hnear=Ludhiana,+Punjab&amp;t=m&amp;cid=4623519713938160433&amp;ll=30.905023,75.856905&amp;spn=0.019148,0.053644&amp;z=14&amp;iwloc=A&amp;source=embed" style="color:#666666; text-align:right; font-size:12px; width:100%; float:right;" style="color:#666666; text-align:right; font-size:12px; width:100%; float:right;" target="_blank">View Larger Map</a></small>
            <!-- End Map -->
          </div>
          <!-- End Google Map -->

          <!-- Start  contact -->
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="form contact-form">
              
              <form action="" method="post" role="form">
                <div class="form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="number" class="form-control" name="phone" id="phone" placeholder="phone" data-rule="minlen:10" data-msg="Please enter at least 8 chars of subject" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                  <div class="validation"></div>
                </div>
                <div class="text-center"><input type="submit" name="s2" value="submit"></div>
              </form>
			  
            </div>
		
          </div>
          <!-- End Left contact -->
        </div>
      </div>
    </div>
  </div>
 
 
  <!-- Start About area -->
  
  <!-- End About area -->

  <!-- Start Service area -->
  
  <!-- End Contact Area -->

  <!-- Start Footer bottom Area -->
<?php

include("footer.php");
?>
  
  
  <?php
if (isset($_POST['s2'])){
	$name=$_POST['name'];
	$mobile_no=$_POST['phone'];
	$email=$_POST['email'];
   $message=$_POST['message'];
    
include 'config.php';
$insert="insert into contact values ('$name','$email','$mobile_no','$message')";
mysqli_query ($conn,$insert)or die(mysqli_error($conn));
}
else{echo "";}
?>
</body>

</html>
