<?php

include("header.php");
?>
 <script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>
    <script src="js/jssor.slider-27.5.0.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        jQuery(document).ready(function ($) {

            var jssor_1_options = {
              $AutoPlay: 1,
              $Idle: 0,
              $SlideDuration: 5000,
              $SlideEasing: $Jease$.$Linear,
              $PauseOnHover: 4,
              $SlideWidth: 140,
              $Align: 0
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*#region responsive code begin*/

            var MAX_WIDTH = 980;

            function ScaleSlider() {
                var containerElement = jssor_1_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;

                if (containerWidth) {

                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                    jssor_1_slider.$ScaleWidth(expectedWidth);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }

            ScaleSlider();

            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            /*#endregion responsive code end*/
        });

  
 

    </script>
	<style>
        /*jssor slider loading skin spin css*/
        .jssorl-009-spin img {
            animation-name: jssorl-009-spin;
            animation-duration: 1.6s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
        }

        @keyframes jssorl-009-spin {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }
        

    </style>
<html>
<body>
  <!-- header end -->

  <!-- Start Slider Area -->
  <div id="home" class="slider-area">
    <div class="bend niceties preview-2">
      <div id="ensign-nivoslider" class="slides">
        <img src="img/background/head.jpg" alt=""  width=100% />
        <img src="img/background/gs1.png" alt=""  />
		<img src="img/background/auto_expo.jpg" alt=""  />
				
<!--        <img src="img/background/back3.jpg" alt=""  />
-->      </div>

      <!-- direction 1 -->
      <div id="slider-direction-1" class="slider-direction slider-one">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="slider-content">
                <!-- layer 1 -->
                <div class="layer-1-1 hidden-xs wow slideInDown" data-wow-duration="2s" data-wow-delay=".2s">
                  <!--<h2 class="title1">The Best Business Information </h2>-->
                </div>
                <!-- layer 2 -->
                <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                  <!--<h1 class="title2">We're In The Business Of Helping You Start Your Business</h1>-->
                </div>
                <!-- layer 3 -->
                <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                  <!--<a class="ready-btn right-btn page-scroll" href="#services">See Services</a>
                  <a class="ready-btn page-scroll" href="#about">Learn More</a>-->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- direction 2 -->
      <div id="slider-direction-2" class="slider-direction slider-two">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="slider-content text-center">
                <!-- layer 1 -->
                <div class="layer-1-1 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                  <!--<h2 class="title1">The Best Business Information </h2>-->
                </div>
                <!-- layer 2 -->
                <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
<!--                  <h1 class="title2">We're In The Business Of Get Quality Business Service</h1>
-->                </div>
                <!-- layer 3 -->
                <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
<!--                  <a class="ready-btn right-btn page-scroll" href="#services">See Services</a>
                  <a class="ready-btn page-scroll" href="#about">Learn More</a>
-->                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- direction 3 -->
      <div id="slider-direction-3" class="slider-direction slider-two">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="slider-content">
                <!-- layer 1 -->
                <div class="layer-1-1 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
<!--                  <h2 class="title1">The Best business Information </h2>
-->                </div>
                <!-- layer 2 -->
                <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
<!--                  <h1 class="title2">Helping Business Security  & Peace of Mind for Your Family</h1>
-->                </div>
                <!-- layer 3 -->
                <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                  <!--<a class="ready-btn right-btn page-scroll" href="#services">See Services</a>
                  <a class="ready-btn page-scroll" href="#about">Learn More</a>-->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Slider Area -->

  <!-- Start About area -->
  
  <!-- End About area -->

  <!-- Start Service area -->
  
  
  
  <div class="faq-area area-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="faq-details">
            <div class="panel-group" id="accordion">
              <!-- Panel Default -->
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="check-title">
											<a data-toggle="collapse" class="active" data-parent="#accordion" href="#check1">
                                                <span class="acc-icons"></span>Manufacturing Facilities
											</a>
										</h4>
                </div>
                <div id="check1" class="panel-collapse collapse in">
                  <div class="panel-body">
                    <p>
                      As a manufacturing company, over the years we have multiplied capacities, built up technologies and invested in equipments that place us in a unique league. <br><a href="manufacturing_facilities.php"><button type="button" class="btn btn-primary">Read More..</button></a>

 
                    </p>
                  </div>
                </div>
              </div>
              <!-- End Panel Default -->
              <!-- Panel Default -->
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="check-title">
											<a data-toggle="collapse" data-parent="#accordion" href="#check2">
                                                <span class="acc-icons"></span> Casting Products
											</a>
										</h4>
                </div>
                <div id="check2" class="panel-collapse collapse">
                  <div class="panel-body">
                    <p>
                     Ductile iron Cast Components Spring hanger Shackle/Bracket, Engine Mounting , Base Plates, Threaded Rings,Compressor Mounting Bracket , casting in Weight Range 1-20 Kgs.<br><a href="casting_products.php"><button type="button" class="btn btn-primary">Read More..</button></a>
                    </p>
                  </div>
                </div>
              </div>
              <!-- End Panel Default -->
              <!-- Panel Default -->
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="check-title">
											<a data-toggle="collapse" data-parent="#accordion" href="#check3">
                                                <span class="acc-icons"></span>About GS Group
											</a>
										</h4>
                </div>
                <div id="check3" class="panel-collapse collapse ">
                  <div class="panel-body">
                    <p>
                     GSAUTO is one of the leading and fastest growing manufacturer of Automotive Suspension and Fastening Components for Indian (§t International Passenger Cars, Utility Vehicles, Commercial Vehicles (LCVs, MCVs, HCVs), Multi-Axle Vehicles, Trailers and Special Purpose Vehicles. ..<br><a href="aboutus.php"><button type="button" class="btn btn-primary">Read More..</button></a>
                    </p>
                  </div>
                </div>
              </div>
              <!-- End Panel Default -->
              <!-- Panel Default -->
             
              <!-- End Panel Default -->
            </div>
          </div>
        </div>
        <div class="col-md-8 col-sm-3 col-xs-3">
          <div class="tab-menu">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
              <li class="active">
                <a href="#p-view-1" role="tab" data-toggle="tab">Our Project Planning</a>
              </li>
              <li>
                <a href="#p-view-2" role="tab" data-toggle="tab">Customer Base</a>
              </li>
              <li>
                <a href="#p-view-3" role="tab" data-toggle="tab">Quality Certification</a>
              </li>
            </ul>
          </div>
          <div class="tab-content">
            <div class="tab-pane active" id="p-view-1">
              <div class="tab-inner">
                <div class="event-content head-team">
                  <h4>Our Project Planning</h4>
                  <p>
                    We specialize in Suspension Components (Machined, Forged and Cast) <br> for Commercial vehicles (LCVs, MCVs and HCVs) and Passenger Cars for various makes/ models of Vehicles...<br><a href="ubolts.php"><button type="button" class="btn btn-primary">Read More..</button></a>
                  </p>
                  
                </div>
              </div>
            </div>
            <div class="tab-pane" id="p-view-2">
              <div class="tab-inner">
                <div class="event-content head-team">
                  <h4>Customer Base</h4>
                  <p>
                    G.S. Auto has strong presence in all 3 business vertical : <br>
1. OEM Segement <br>
2. Replacement Market <br>
3. Export Market <br><a href="customer_base.php"><button type="button" class="btn btn-primary">Read More..</button></a>
                  </p>
                  
                </div>
              </div>
            </div>
            <div class="tab-pane" id="p-view-3">
              <div class="tab-inner">
                <div class="event-content head-team">
                  <h4>Quality Certification</h4>
                  <p>
                    From the very beginning, G.S. Auto has always shown incessant <br> thirst for Product Quality and Customer Satisfaction.<br><b> At G.S., each component passes through series of stringent tests of quality..<br><a href="quality_certification.php"><button type="button" class="btn btn-primary">Read More..</button></a>
                  </p>
                 
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- end Row -->
    </div>
  </div>
   <h3 align="center">Our Buyers</h3>
  <br>  
   <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:980px;height:100px;overflow:hidden;visibility:hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:200%;text-align:center;background-color:rgba(0,0,0,0.7);">
            <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="img/spin.svg" />
        </div>
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:100px;overflow:hidden;">
            <div>
                <img data-u="image" src="img/ashok.png" />
            </div>
            <div>
                <img data-u="image" src="img/arvin.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/dailmar.png" />
            </div>
            <div>
                <img data-u="image" src="img/mahindra.png" />
            </div>
            <div>
                <img data-u="image" src="img/hindustan.png" />
            </div>
            <div>
                <img data-u="image" src="img/maruti.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/volvo.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/sml.png" />
            </div>
            <div>
                <img data-u="image" src="img/tata.png" />
            </div>
            <div>
                <img data-u="image" src="img/ve.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/techo.jpg" />
            </div>
        </div>
    </div>

    <br><br>
    <h3 align="center">Our Products</h3>

    <div class="tcb-product-slider">
        <div class="container">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <div class="row">
                            <div class="col-xs-6 col-sm-3">
                                <div class="tcb-product-item">
                                    <div class="tcb-product-photo">
                                        <a href="#"><img src="img/products/p 5.jpg" class="img-responsive" alt="a" /></a>
                                    </div>
                                    <div class="tcb-product-info">
                                        <div class="tcb-product-title">
                                            <h4><a href="#">u bolt </a></h4></div>
                                        <div class="tcb-product-rating">
                                            <i class="active glyphicon glyphicon-star"></i><i class="active glyphicon glyphicon-star"></i><i class="active glyphicon glyphicon-star"></i><i class="active glyphicon glyphicon-star"></i><i class="glyphicon glyphicon-star"></i>
                                           
                                        </div>
                                        <div class="tcb-hline"></div>
                                        <div class="tcb-product-price">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-3">
                                <div class="tcb-product-item">
                                    <div class="tcb-product-photo">
                                        <a href="#"><img src="img/products/p 6.jpg" class="img-responsive" alt="a" /></a>
                                    </div>
                                    <div class="tcb-product-info">
                                        <div class="tcb-product-title">
                                            <h4><a href="#">Coca Cola Bottle</a></h4></div>
                                        <div class="tcb-product-rating">
                                            <i class="active glyphicon glyphicon-star"></i><i class="active glyphicon glyphicon-star"></i><i class="active glyphicon glyphicon-star"></i><i class="glyphicon glyphicon-star"></i><i class="glyphicon glyphicon-star"></i>
                                     
                                        </div>
                                        <div class="tcb-hline"></div>
                                        <div class="tcb-product-price">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-3">
                                <div class="tcb-product-item">
                                    <div class="tcb-product-photo">
                                        <a href="#"><img src="img/products/p 12.jpg" class="img-responsive" alt="a" /></a>
                                    </div>
                                    <div class="tcb-product-info">
                                        <div class="tcb-product-title">
                                            <h4><a href="#">Jewel from Italy</a></h4></div>
                                        <div class="tcb-product-rating">
                                            <i class="active glyphicon glyphicon-star"></i><i class="active glyphicon glyphicon-star"></i><i class="glyphicon glyphicon-star"></i><i class="glyphicon glyphicon-star"></i><i class="glyphicon glyphicon-star"></i>
                                            
                                        </div>
                                        <div class="tcb-hline"></div>
                                        <div class="tcb-product-price">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-3">
                                <div class="tcb-product-item">
                                    <div class="tcb-product-photo">
                                        <a href="#"><img src="img/products/p 23.jpg" class="img-responsive" alt="a" /></a>
                                    </div>
                                    <div class="tcb-product-info">
                                        <div class="tcb-product-title">
                                            <h4><a href="#">White Pepper</a></h4></div>
                                        <div class="tcb-product-rating">
                                            <i class="active glyphicon glyphicon-star"></i><i class="glyphicon glyphicon-star"></i><i class="glyphicon glyphicon-star"></i><i class="glyphicon glyphicon-star"></i><i class="glyphicon glyphicon-star"></i>
                                          
                                        </div>
                                        <div class="tcb-hline"></div>
                                        <div class="tcb-product-price">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="row">
                            <div class="col-xs-6 col-sm-3">
                                <div class="tcb-product-item">
                                    <div class="tcb-product-photo">
                                        <a href="#"><img src="img/products/p 28.jpg" class="img-responsive" alt="a" /></a>
                                    </div>
                                    <div class="tcb-product-info">
                                        <div class="tcb-product-title">
                                            <h4><a href="#">Belt Improted From Japan</a></h4></div>
                                        <div class="tcb-product-rating">
                                            <i class="active glyphicon glyphicon-star"></i><i class="active glyphicon glyphicon-star"></i><i class="active glyphicon glyphicon-star"></i><i class="glyphicon glyphicon-star"></i><i class="glyphicon glyphicon-star"></i>
                                            
                                        </div>
                                        <div class="tcb-hline"></div>
                                        <div class="tcb-product-price">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-3">
                                <div class="tcb-product-item">
                                    <div class="tcb-product-photo">
                                        <a href="#"><img src="img/products/p 34.jpg" class="img-responsive" alt="a" /></a>
                                    </div>
                                    <div class="tcb-product-info">
                                        <div class="tcb-product-title">
                                            <h4><a href="#">Tomato</a></h4></div>
                                        <div class="tcb-product-rating">
                                            <i class="active glyphicon glyphicon-star"></i><i class="active glyphicon glyphicon-star"></i><i class="glyphicon glyphicon-star"></i><i class="glyphicon glyphicon-star"></i><i class="glyphicon glyphicon-star"></i>
                                            
                                        </div>
                                        <div class="tcb-hline"></div>
                                        <div class="tcb-product-price">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-3">
                                <div class="tcb-product-item">
                                    <div class="tcb-product-photo">
                                        <a href="#"><img src="img/products/p 37.jpg" class="img-responsive" alt="a" /></a>
                                    </div>
                                    <div class="tcb-product-info">
                                        <div class="tcb-product-title">
                                            <h4><a href="#">Tape Line</a></h4></div>
                                        <div class="tcb-product-rating">
                                            <i class="active glyphicon glyphicon-star"></i><i class="active glyphicon glyphicon-star"></i><i class="active glyphicon glyphicon-star"></i><i class="glyphicon glyphicon-star"></i><i class="glyphicon glyphicon-star"></i>
                                           
                                        </div>
                                        <div class="tcb-hline"></div>
                                        <div class="tcb-product-price">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-3">
                                <div class="tcb-product-item">
                                    <div class="tcb-product-photo">
                                        <a href="#"><img src="img/products/traileraxle1.jpeg" class="img-responsive" alt="a" /></a>
                                    </div>
                                    <div class="tcb-product-info">
                                        <div class="tcb-product-title">
                                            <h4><a href="#">Test Glasses For Lab</a></h4></div>
                                        <div class="tcb-product-rating">
                                            <i class="active glyphicon glyphicon-star"></i><i class="active glyphicon glyphicon-star"></i><i class="active glyphicon glyphicon-star"></i><i class="active glyphicon glyphicon-star"></i><i class="active glyphicon glyphicon-star"></i>
                                            
                                        </div>
                                        <div class="tcb-hline"></div>
                                        <div class="tcb-product-price">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="row">
                            <div class="col-xs-6 col-sm-3">
                                <div class="tcb-product-item">
                                    <div class="tcb-product-photo">
                                        <a href="#"><img src="img/products/pin.jpg" class="img-responsive" alt="a" /></a>
                                    </div>
                                    <div class="tcb-product-info">
                                        <div class="tcb-product-title">
                                            <h4><a href="#">Jewel From India</a></h4></div>
                                        <div class="tcb-product-rating">
                                            <i class="active glyphicon glyphicon-star"></i><i class="active glyphicon glyphicon-star"></i><i class="glyphicon glyphicon-star"></i><i class="glyphicon glyphicon-star"></i><i class="glyphicon glyphicon-star"></i>
                                            
                                        </div>
                                        <div class="tcb-hline"></div>
                                        <div class="tcb-product-price">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-3">
                                <div class="tcb-product-item">
                                    <div class="tcb-product-photo">
                                        <a href="#"><img src="img/products/propellershaftcomponents.jpg" class="img-responsive" alt="a" /></a>
                                    </div>
                                    <div class="tcb-product-info">
                                        <div class="tcb-product-title">
                                            <h4><a href="#">Red Pepper</a></h4></div>
                                        <div class="tcb-product-rating">
                                            <i class="active glyphicon glyphicon-star"></i><i class="glyphicon glyphicon-star"></i><i class="glyphicon glyphicon-star"></i><i class="glyphicon glyphicon-star"></i><i class="glyphicon glyphicon-star"></i>
                                           
                                        </div>
                                        <div class="tcb-hline"></div>
                                        <div class="tcb-product-price">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-3">
                                <div class="tcb-product-item">
                                    <div class="tcb-product-photo">
                                        <a href="#"><img src="img/products/casting.jpg" class="img-responsive" alt="a" /></a>
                                    </div>
                                    <div class="tcb-product-info">
                                        <div class="tcb-product-title">
                                            <h4><a href="#">Pro Cell Batteries </a></h4></div>
                                        <div class="tcb-product-rating">
                                            <i class="active glyphicon glyphicon-star"></i><i class="active glyphicon glyphicon-star"></i><i class="active glyphicon glyphicon-star"></i><i class="active glyphicon glyphicon-star"></i><i class="glyphicon glyphicon-star"></i>
                                            </div>
                                        <div class="tcb-hline"></div>
                                        <div class="tcb-product-price">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-3">
                                <div class="tcb-product-item">
                                    <div class="tcb-product-photo">
                                        <a href="#"><img src="img/products/trailer.jpg" class="img-responsive" alt="a" /></a>
                                    </div>
                                    <div class="tcb-product-info">
                                        <div class="tcb-product-title">
                                            <h4><a href="#">Eye Glasses </a></h4></div>
                                        <div class="tcb-product-rating">
                                            <i class="active glyphicon glyphicon-star"></i><i class="active glyphicon glyphicon-star"></i><i class="active glyphicon glyphicon-star"></i><i class="glyphicon glyphicon-star"></i><i class="glyphicon glyphicon-star"></i>
                                            
                                        </div>
                                        <div class="tcb-hline"></div>
                                        <div class="tcb-product-price">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>

<!--international markets-->

<!------ Include the above in your HEAD tag ---------->
<br>
<br>
<h3 align="center"> Our Key International Market Are:</h3>
<br>
<div class="col-sm-2 col-lg-2 col-md-2">
                  <div class="thumbnail">
                    <img src="img/products/usa.png" alt="USA" >
                                        <h6 align="center">United States Of America</h6>
                  </div>
                </div>
            
<div class = "row">
   
  <div class="col-sm-2 col-lg-2 col-md-2">
                  <div class="thumbnail">
                    <img src="img/products/germany.png" alt="Germany" >
                    <h6 align="center">Germany</h6>
                  </div>
                </div>
   
  <div class="col-sm-2 col-lg-2 col-md-2">
                  <div class="thumbnail">
                    <img src="img/products/italy.png" alt="Italy" >
                                        <h6 align="center">Italy</h6>
                  </div>
                </div>
   
   <div class="col-sm-2 col-lg-2 col-md-2">
                  <div class="thumbnail">
                    <img src="img/products/iran.png" alt="Iran" >
                                        <h6 align="center">Iran</h6>
                  </div>
                </div>
   <div class="col-sm-2 col-lg-2 col-md-2">
                  <div class="thumbnail">
                    <img src="img/products/iraq.png" alt="Iraq" align="right" >
                                        <h6 align="center">Iraq</h6>
                  </div>
                </div>
   
   
</div>
  <!-- End Service area -->
<div class="wellcome-area">
    <div class="well-bg">
      <div class="test-overly"></div>
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="wellcome-text">
              <div class="well-text text-center">
                <h2>Subscribe to Our Newsletter</h2>
                <p>
                 Get all the latest news & promotions we have to offer.
                </p>
                <div class="subs-feilds">
                  <div class="suscribe-input">
                    <input type="email" class="email form-control width-80" id="sus_email" placeholder="Email">
                    <button type="submit" id="sus_submit" class="add-btn width-20">Subscribe</button>
                    <div id="msg_Submit" class="h3 text-center hidden"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<!--our key international areas---italy germany usa iran iraq-->
 

 
  <!-- our-skill-area start -->
  
  <!-- End Contact Area -->

  <!-- Start Footer bottom Area -->
  <?php
  include("footer.php");
  ?>
</body>

</html>
