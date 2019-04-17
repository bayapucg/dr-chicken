<?php include("header.php"); ?>

<div class="body-content outer-top-xs ">
  <div class="container">
		<div class="breadcrumb">
			<div class="container">
				<div class="breadcrumb-inner">
					<ul class="list-inline list-unstyled">
						<li><a href="#">Home</a></li>
						<li class='active'>Checkout</li>
					</ul>
				</div><!-- /.breadcrumb-inner -->
			</div><!-- /.container -->
		</div>
		<div class="body-content bg-white py-4">
		<div class="col-xs-12 col-sm-12 col-md-3 sidebar ">
	
        <div class="side-menu animate-dropdown outer-bottom-xs">
          <div class="head"> My Account</div>
		    <div class="span3 well">
        <center>
        <a href="#aboutModal" data-toggle="modal" data-target="#myModal"><img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcRbezqZpEuwGSvitKy3wrwnth5kysKdRqBW54cAszm_wiutku3R" name="aboutme" width="60" height="60" class="img-circle"></a>
        <h4>Joe Sixpack</h4>
       
		</center>
    </div>	
			<nav class="yamm megamenu-horizontal">
				<ul class="nav active-class-ul">
				  <li class="dropdown menu-item " > 
					<a href="profile.php"  class="active-class"><i class="icon fa fa-paper-plane"></i>Profile</a> 
				  </li>
				  <li class="dropdown menu-item"> 
					<a href="order.php" ><i class="icon fa fa-paper-plane"></i>Orders</a> 
				  </li> 
				  <li class="dropdown menu-item"> 
					<a href="complete-orders.php" ><i class="icon fa fa-paper-plane"></i>Complete Orders</a> 
				  </li>
				</ul>
			</nav>
		</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-9 sidebar "> 
	 <form class="form" action="##" method="post" id="registrationForm">
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="first_name"><h4> Name</h4></label>
                              <input type="text" class="form-control" name="first_name" id="first_name" value="Bayapureddy" title="Bayapureddy">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="last_name"><h4>Mobile</h4></label>
                              <input type="text" class="form-control" name="last_name" id="last_name" value="8500226782" title="8500226782">
                          </div>
                      </div>
          
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="phone"><h4>Email</h4></label>
                              <input type="text" class="form-control" name="phone" id="phone" value="bayapureddy004@gmail.com" title="bayapureddy004@gmail.com">
                          </div>
                      </div>
          
                      <div class="form-group">
                          <div class="col-xs-6">
							<label for="email"><h4>Gender</h4></label>
							<div class="row mt-3">
							<div class="form-check-inline col-md-3">
							  <label class="form-check-label" for="radio1">
								<input type="radio" class="form-check-input" id="radio1" name="optradio" value="option1" checked>Male
							  </label>
							</div>
							<div class="form-check-inline col-md-3">
							  <label class="form-check-label" for="radio2">
								<input type="radio" class="form-check-input" id="radio2" name="optradio" value="option2">Female
							  </label>
							</div>
							<div class="form-check-inline col-md-4">
							  <label class="form-check-label" for="radio2">
								<input type="radio" class="form-check-input" id="radio2" name="optradio" value="option2">Third Person
							  </label>
							</div>
							</div>
                          </div>
                      </div>
                     
                      
                      <div class="form-group">
                           <div class="col-md-6">
                                 <label for="phone"><h4>Profile Pic</h4></label>
                            <input type="file" class="form-control" >
                               	
                            </div>
                      </div>   
					  <div class="form-group">
                           <div class="col-md-6">
                                 <label for="phone"><h4>Date of Birth</h4></label>
                           <input type="date" class="form-control" name="first_name" id="first_name" value="Bayapureddy" title="Bayapureddy">
                               	
                            </div>
                      </div>  
					  <div class="form-group">
                           <div class="col-md-12">
                                 <label for="phone"><h4>Address</h4></label>
                             <textarea class="form-control" value="">Flat-306, Fortune Signature Building, Nizampet X Roads, Sardar Patel Nagar (Near JNTU Metro station), KPHB,Hyderabad- 500072, Telangana, INDIA</textarea>
                               	
                            </div>
                      </div>
					  <div class="form-group">
                           <div class="col-xs-12">
                                <br>
                              	<button class="btn btn-sm btn-success" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Update </button>
                               	
                            </div>
                      </div>
              	</form>
              
              <hr>
              
             </div><!--/tab-pane-->
           <div class="clearfix">&nbsp;</div>
		</div>
	</div>
</div>
<div class="clearfix">&nbsp;</div>
<!-- /.body-content --> 

<?php include("footer.php"); ?>
<script>
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>