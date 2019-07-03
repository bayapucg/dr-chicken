<?php include( "header.php"); ?>
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
       Report View
      </h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Home</a>
			</li>
			<li class="active">Report View</li>
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
							<th>Order item/name  </th>
							<th>No of kgs</th>
							<th>Given rate</th>
							<th>Delivered date & time</th>
							
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>01</td>
							<td>apple</td>
							<td>20</td>
							<td>1000</td>
							<td>05/07/2019</td>
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