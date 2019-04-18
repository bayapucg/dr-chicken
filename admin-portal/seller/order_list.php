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
			<div class="box-header bg-primary">
				<div class="col-md-6">
					<input type="text" class="form-control" placeholder="Search.." name="search">
				</div>
				<div class="col-md-6">
					<div class="">
						<button id="ImportStudent" class="btn btn-default dropdown-toggle impt" title=""><i class="fa fa-print"></i> Print</button>
						<button id="ImportStudent" class="btn btn-default dropdown-toggle impt" title=""><i class="fa fa-upload"></i> Import</button>
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
							<td>Accepted</td>
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
<?php include( "footer.php"); ?>