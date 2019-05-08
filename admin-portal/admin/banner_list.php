<?php include( "header.php"); ?>
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
       Banner List
      </h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Home</a>
			</li>
			<li class="active">Banner List</li>
		</ol>
	</section>
	<!-- Main content -->
	<section class="content">
		<div class="box">
			<div class="box-header bg-primary">
				<div class="col-md-10">
					
				</div>
				<div class="col-md-2">
					<div class="">	<a class="btn btn-default st-btn add-student-btn" href="add-product.php"><i class="fa fa-plus"></i> Add Product</a>
						</div>
				</div>
			</div>
			<!-- /.box-header -->
			<div class="box-body table-responsive">
				<table id="example1" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>Image</th>
							<th>Content</th>
							<th>Edit / Delete</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><img src="..\assets\images\1.png" style="width:60px;height:50px"/></td>
							<td>Thadoori chicken</td>
							<td> <a href="edit-product.php" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil btn btn-warning"></i></a>
								<a href="" data-toggle="tooltip" title="Delete"><i class="fa fa-trash btn btn-danger"></i></a>
							</td>
						</tr>
						<tr>
							<td><img src="..\dist\img\chicken.jpg" style="width:60px;height:50px"/></td>
							<td>Thadoori chicken</td>
							<td> <a href="edit_banner.php" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil btn btn-warning"></i></a>
								<a href="" data-toggle="tooltip" title="Delete"><i class="fa fa-trash btn btn-danger"></i></a>
							</td>
						</tr>
					</tbody>
					<tfoot>
						<tr>
							<th>Image</th>
							<th>Content</th>
							<th>Edit / Delete</th>
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