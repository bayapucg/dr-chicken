<?php include( "header.php"); ?>
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
       Order History
      </h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Home</a>
			</li>
			<li class="active">Order History</li>
		</ol>
	</section>
	<!-- Main content -->
	<section class="content">
		<div class="box">
			<div class="box box-primary">
				
			</div>
			<!-- /.box-header -->
			<div class="box-body table-responsive">
				<table id="example1" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>Sno</th>
							<th>Order No</th>
							<th>Mobile Number</th>
							<th>Shop Name</th>
							<th>Product Name</th>
							<th>Quality Price</th>
							<th>Ph Images</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>01</td>
							<td>OR 05</td>
							<td>8976564534</td>
							<td>Olive</td>
							<td>Tandoori Chicken</td>
							<td>300</td>
							<td><img src="../dist/img/phimg.jpg" style="height:50px;width:50px"/>
							<td>Accepted</td>
						</tr>
					</tbody>
					<tfoot>
						<tr>
							<th>Sno</th>
							<th>Order No</th>
							<th>Mobile Number</th>
							<th>Shop Name</th>
							<th>Product Name</th>
							<th>Quality Price</th>
							<th>Ph Images</th>
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
</script>
<?php include( "footer.php"); ?>