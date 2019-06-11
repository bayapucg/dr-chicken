<?php include("header.php"); ?>

<div class="body-content outer-top-xs ">
  <div class="container">
		<div class="breadcrumb">
	<div class="container">
		<div class="breadcrumb-inner">
			<ul class="list-inline list-unstyled">
				<li><a href="#">Home</a></li>
				<li class='active'> Success</li>
			</ul>
		</div><!-- /.breadcrumb-inner -->
	</div><!-- /.container -->
</div><!-- /.breadcrumb -->

<div class="body-content outer-top-xs">
	<div class="container">
		<div class="row ">
			<div class="shopping-cart">
				<div class=" ">
					<div class="table-responsive">
						<table class="table">
							<thead>
								<tr>
									
									<th class="cart-description item">Order ID</th>
									<th class="cart-description item">Product image</th>
									<th class="cart-product-name item">Product Name</th>
								
									<th class="cart-qty item">Quantity</th>
									<th class="cart-qty item">Date</th>
						
									<th class="cart-total last-item">Grandtotal</th>
									<th class="cart-romove item">Status</th>
								</tr>
							</thead><!-- /thead -->
							
							<tbody>
								<tr>
									<td>SW001</td>
									<td class="cart-image">
										<a class="entry-thumbnail" href="">
											<img src="assets/images/new-arrivals/1.png" alt="">
										</a>
									</td>
									<td class="cart-product-name-info">
										
										<h4><a href="#">Punjabi Tandoori Chicken </a></h4>
									<div>KPHB Phase 3,</div>
									<div class="product-price py-2"> <span class="price"> ₹ 200 </span> <span class="price-before-discount">₹ 250</span> </div>
									<div class="product-price py-2"> <span class="price"> 500 Grms </span> </div>
									</td>
									
									<td class="cart-product-quantity">
										1
									</td>
									<td class="cart-product-quantity">
										11-06-2019
									</td>
						
									<td class="cart-product-grand-total"><span class="cart-grand-total-price">₹300.00</span></td>
									<td class="romove-item"><span class="label label-success ">Success</span></td>
								</tr>
								<tr>
								<td colspan="7"> <Strong>Delivery Address:</strong> Flat-306, Fortune Signature Building, Nizampet X Roads, Sardar Patel Nagar (Near JNTU Metro station), KPHB,Hyderabad- 500072, Telangana, INDIA</td>
								</tr>
								</tr>
								
								
							</tbody>
							
						</table><!-- /table -->
					</div>
</div>
</div>
		</div> <!-- /.row -->
		
</div>
	</div>
</div>
<div class="clearfix">&nbsp;</div>
<!-- /.body-content --> 

<?php include("footer.php"); ?>
<script>
₹(document).ready(function() {
    ₹('#example').DataTable();
} );
</script>