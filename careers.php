<?php

include("header.php");
?>
    <!-- header-area start -->
    
  <!-- header end -->

  <!-- Start Slider Area -->
  
        
		<img src="img/gs/careers.jpg" alt="" width="100%" height="300px"  />
<!--        <img src="img/background/back3.jpg" alt=""  />
-->      
  
  <br>

  
  <h2 align="center">Careers</h2>
  <div class="col-md-12 col-sm-3 col-xs-3">
          <div class="tab-menu">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
              <li class="active">
                <a href="#p-view-1" role="tab" data-toggle="tab">Current Openings</a>
              </li>
              <li>
                <a href="#p-view-2" role="tab" data-toggle="tab">Work With Us</a>
              </li>
              
            </ul>
          </div>
          <div class="tab-content">
            <div class="tab-pane active" id="p-view-1">
              <div class="tab-inner">
                <div class="event-content head-team">
                  <h4>Current Openings</h4><br>
                  <table class="table table-condensed" border="1">
				  <tr>
				  <th>Position</th>
				  <th>	Work Location</th>
				  <th>Date Posted</th>
				  <th>View job</th>
				  </tr>
				  <tr>
				  	<?php

include "config.php";

$select= "select * from careers";
$result= mysqli_query($conn,$select) or die("Error: ".mysqli_error($conn));

 while ($data =mysqli_fetch_array($result))
{
	?>
				  <td><?php echo $data[0]; ?></td>
				  <td><?php echo $data[1]; ?></td>
				  <td><?php echo $data[2]; ?></td>
				  <td><?php echo $data[3]; ?></td>
				  <?php
				}
				?>
				  </tr>
				  </table>
                  
                </div>
              </div>
            </div>
            <div class="tab-pane" id="p-view-2">
              <div class="tab-inner">
                <div class="event-content head-team">
                  <h4>Work With US</h4>
                  <p>We, at GS GROUP, are committed to understanding customer needs and innovating on our wide range of offerings keeping these needs in mind. This approach has earned us the position of being among the top five medium and heavy commercial vehicle manufacturers in the world. Our products are seen in markets like Europe, Australia, South East Asia, Middle East and Africa.<br />
              We owe our success to the highly motivated and talented staff at Gs Group India. Our recruitment division picks the   cr�me-de-la-cr�me   from premier universities, management and engineering institutes in India. We put them through rigorous training programmes to hone their entrepreneurial skills and impart comprehensive product knowledge.</p>
                  
                </div>
              </div>
            </div>
            <br><br>
          </div>
        </div>
      </div>
	   
  		         
  <!-- End Slider Area -->

  <!-- Start About area -->
  
  <!-- End About area -->

  <!-- Start Service area -->
  
  <!-- End Contact Area -->

  <!-- Start Footer bottom Area -->
 
  <!-- our-skill-area start -->
  
  <!-- End Contact Area -->

  <!-- Start Footer bottom Area -->
 
  <?php

include("footer.php");
?>
</body>

</html>
