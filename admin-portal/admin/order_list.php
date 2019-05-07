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
				
			</div>
			<!-- /.box-header -->
			<div class="box-body table-responsive">
				<table id="example1" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>Sno</th>
							<th>Date</th>
							<th>order received</th>
							<th>Payment Online</th>
							<th>Cash On Delivery</th>
							<th>Amount pending</th>
							<th>Status</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>01</td>
							<td>05/05/2019</td>
							<td>santosh dhaba</td>
							<td>Done</td>
							<td>Yes</td>
							<td>No</td>
							<td>Received</td>
						</tr>
					</tbody>
					<tfoot>
						<tr>
							<th>Sno</th>
							<th>Date</th>
							<th>order received</th>
							<th>Payment Online</th>
							<th>Cash On Delivery</th>
							<th>Amount pending</th>
							<th>Status</th>
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