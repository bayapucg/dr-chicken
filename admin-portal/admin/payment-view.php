<?php include( "header.php"); ?>
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
       Payments View
      </h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Home</a>
			</li>
			<li class="active">Payments View</li>
		</ol>
	</section>
	<!-- Main content -->
	<section class="content">
		<div class="box">
			
			<!-- /.box-header -->
			<div class="box-body table-responsive">
				<table id="example1" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>Sno</th>
							<th>Order by/ Product name   </th>
							<th>Qty   </th>
							<th>Amount </th>
							<th>Taken by  </th>
							<th>Order date time </th>
							<th>Amount taken date time  </th>
						
						
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>1</td>
							<td>Product1</td>
							<td>150</td>
							<td>130</td>
							<td>5</td>
							<td>750</td>
							<td>450</td>
					
							
						</tr>
						<tr>
							<td>2</td>
							<td>Product2</td>
							<td>150</td>
							<td>130</td>
							<td>5</td>
							<td>750</td>
							<td>450</td>
					
							
						</tr>
					
					</tbody>
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