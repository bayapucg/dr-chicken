<?php include( "header.php"); ?>
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
       Order List
      </h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Home</a>
			</li>
			<li class="active">Order List</li>
		</ol>
	</section>
	<!-- Main content -->
	<section class="content">
		<div class="box">
			<div class="box box-primary">
				
			<div class="  ">
			
								<div class="col-md-4">
									<div class="form-group ">
									
										<label>Period</label>
										<input type="text" class="form-control pull-right datepicker">
									</div>
								</div>
								<div class="col-md-5">
									<div class="form-group ">
										<label>&nbsp;</label>
										<div>
											<a href="order_view.php"><button class="btn btn-primary">Go</button></a>
										</div>
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group ">
										<label>&nbsp;</label>
										<div>
											<p class="text-center" style="background-color:#557a95;color:#fff;padding:7px;">Total Amount : 25000 </p>
										</div>
									</div>
								</div>
								</div>	
			</div>
			<!-- /.box-header -->
			<div class="box-body table-responsive">
				<table id="example1" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>Sno</th>
							<th>Customer Name</th>
							<th>Mobile Number</th>
							<th>Product Name</th>
							<th>Net Weight</th>
							<th>No of pieces</th>
							<th>Order Type</th>
							<th>Price</th>
							<th>Payment Mode</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>01</td>
							<td>Rajendra</td>
							<td>8976564534</td>
							<td>Thandoori chicken</td>
							<td>250 gms</td>
							<td>5</td>
							<td>Online</td>
							<td>300/-</td>
							<td>Card</td>
							<td>Accepted
 </td>
						</tr>
					</tbody>
					<tfoot>
						<tr>
							<th>Sno</th>
							<th>Customer Name</th>
							<th>Mobile Number</th>
							<th>Product Name</th>
							<th>Net Weight</th>
							<th>No of pieces</th>
							<th>Order Type</th>
							<th>Price</th>
							<th>Payment Mode</th>
							<th>Action</th>
						</tr>
					</tfoot>
				</table>
			</div>
			<!-- /.box-body -->
		</div>
		<!-- /.row -->
	</section>
	<!-- /.content -->
</div>
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
  $('.datepicker').datepicker({
	      autoclose: true
	    });
</script>
<?php include( "footer.php"); ?>