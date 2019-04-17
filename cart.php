<?php include("header.php"); ?>

<div class="body-content outer-top-xs ">
  <div class="container">
		<div class="breadcrumb">
	<div class="container">
		<div class="breadcrumb-inner">
			<ul class="list-inline list-unstyled">
				<li><a href="#">Home</a></li>
				<li class='active'> Cart</li>
			</ul>
		</div><!-- /.breadcrumb-inner -->
	</div><!-- /.container -->
</div><!-- /.breadcrumb -->

<div class="body-content outer-top-xs">
	<div class="container">
		<div class="row ">
			<div class="shopping-cart">
				<div class="shopping-cart-table ">
	<div class="table-responsive">
		<table class="table">
			<thead>
				<tr>
					
					<th class="cart-description item">Image</th>
					<th class="cart-product-name item">Product Name</th>
				
					<th class="cart-qty item">Quantity</th>
					<th class="cart-sub-total item">Subtotal</th>
					<th class="cart-total last-item">Grandtotal</th>
					<th class="cart-romove item">Remove</th>
				</tr>
			</thead><!-- /thead -->
			
			<tbody>
				<tr>
					
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
						<div class="quant-input">
				                <div class="arrows">
				                  <div class="arrow plus gradient"><span class="ir"><i class="icon fa fa-sort-asc"></i></span></div>
				                  <div class="arrow minus gradient"><span class="ir"><i class="icon fa fa-sort-desc"></i></span></div>
				                </div>
				                <input type="text" value="1">
			              </div>
		            </td>
					<td class="cart-product-sub-total"><span class="cart-sub-total-price">₹300.00</span></td>
					<td class="cart-product-grand-total"><span class="cart-grand-total-price">₹300.00</span></td>
					<td class="romove-item"><a href="#" title="cancel" class="icon"><i class="fa fa-trash-o"></i></a></td>
				</tr>
				
			</tbody>
			<tfoot>
				<tr>
					<td colspan="7">
						<div class="shopping-cart-btn">
							<span class="">
								<a href="#" class="btn btn-upper btn-primary pull-right">Continue Shopping</a>
								
							</span>
						</div><!-- /.shopping-cart-btn -->
					</td>
				</tr>
			</tfoot>
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