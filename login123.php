<?php ob_start(); session_start(); ?>
<!doctype html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <title>GS AUTO INTERNATIONAL</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/nivo-slider/css/nivo-slider.css" rel="stylesheet">
  <link href="lib/owlcarousel/owl.carousel.css" rel="stylesheet">
  <link href="lib/owlcarousel/owl.transitions.css" rel="stylesheet">
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/venobox/venobox.css" rel="stylesheet">

  <!-- Nivo Slider Theme -->
  <link href="css/nivo-slider-theme.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <!-- Responsive Stylesheet File -->
  <link href="css/responsive.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: eBusiness
    Theme URL: https://bootstrapmade.com/ebusiness-bootstrap-corporate-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->

	
<style>
.dropbtn {
   box-shadow: none !important;
   	 bg color: none !important;
    padding: 13px;
    font-size: 16px;
    border: none;
    cursor: pointer;
	
}

.dropbtn:hover, .dropbtn:focus {

}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #00CCFF;
    min-width: 160px;
    overflow: auto;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown a:hover {background-color: #ddd;}

.show {display: block;}
</style>
 <script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script> 

</head>

<body data-spy="scroll" data-target="#navbar-example">

  <div id="preloader"></div>

 
  <!-- header end -->

  <!-- Start Slider Area -->
  <div id="home" class="slider-area">
    <div class="bend niceties preview-2">
      <div id="ensign-nivoslider" class="slides">
        
		<img src="img/gs/banner-admin.jpg" height="550" alt=""  />
<!--        <img src="img/background/back3.jpg" alt=""  />
-->      </div>

      <!-- direction 1 -->
     

      <!-- direction 2 -->
      

      <!-- direction 3 -->
     
    </div>
  </div>
  <div id="contact" class="contact-area">
    <div class="contact-inner area-padding">
      <div class="contact-overly"></div>
      <div class="container ">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <h2>Admin Login </h2>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- Start contact icon column -->
          
       

          <!-- Start Google Map -->
         
          <!-- End Google Map -->

          <!-- Start  contact -->
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="form contact-form">
              
              <form action="" method="post" role="form">
                <div class="form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Username" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="password" class="form-control" name="password" id="email" placeholder="Password" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validation"></div>
                </div>
                
                
                <div class="text-center"><input type="submit" name="s3" value="submit" class="btn btn-primary"></div>
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
<footer>
   

  

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/venobox/venobox.min.js"></script>
  <script src="lib/knob/jquery.knob.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/parallax/parallax.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/nivo-slider/js/jquery.nivo.slider.js" type="text/javascript"></script>
  <script src="lib/appear/jquery.appear.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8HeI8o-c1NppZA-92oYlXakhDPYR7XMY"></script>

  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <script src="js/main.js"></script>
   
</body>
<?php
if (isset($_POST['s3'])){
	$username=$_POST['name'];
	$password=$_POST['password'];
	
    
include "config.php";

$select= "select * from admin where username='$username' and password='$password'";
$fet= mysqli_query($conn,$select);



if($data =mysqli_fetch_array($fet))
{
	$_SESSION['admin_id'] = $data[0];
	header("location:abc.php");
	
	 
}else
{echo"Check your username or password";
}
}
?>
</html>
