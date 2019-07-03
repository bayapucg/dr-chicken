<?php include( "header.php"); ?>
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
       Payments List
      </h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Home</a>
			</li>
			<li class="active">Payments List</li>
		</ol>
	</section>
	<!-- Main content -->
	<section class="content">
		<div class="box">
			<!--<div class="box box-primary">
				<div class="">
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
											<button class="btn btn-primary">Go</button>
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
			 -->
			<div class="box-body table-responsive">
				<table id="example1" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>Sno</th>
							<th>Shop name  </th>
							<th>given rate   </th>
							<th>Our rate  </th>
							<th>No kgs sold </th>
							<th>Amount pending  </th>
							<th>Online  </th>
							<th>Cash on delivery </th>
							<th>View cash details</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td></td>
							<td></td>
							<td>150</td>
							<td>130</td>
							<td>5</td>
							<td>750</td>
							<td>450</td>
							<td>200</td>
							<td><a href="payment-view.php" class="btn btn-primary btn-xs">View</a></td>
							
						</tr>
						<tr>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
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