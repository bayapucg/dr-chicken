<?php include( "header.php"); ?>
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
       Product List
      </h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Home</a>
			</li>
			<li class="active">Product List</li>
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
							<th>CATEGORIES</th>
							<th>Image</th>
							<th>Name</th>
							<th>Price</th>
							<th>Net Weight</th>
							<th>No of Pieces</th>
							<th>Discount</th>
							<th>Preorder</th>
							<th>Images</th>
							<th>Edit / Delete</th>
						</tr>
					</thead>
					<tbody>
						<tr>
						<td>chicken</td>
							<td><img src="..\dist\img\chicken.jpg" style="width:60px;height:50px"/></td>
							<td>Thadoori chicken</td>
							<td>300</td>
							<td>250 gms</td>
							<td>4</td>
							<td>20%</td>
							<td>Yes</td>
							<td><img src="..\dist\img\chicken.jpg" style="width:60px;height:50px"/>
							<img src="..\dist\img\chicken.jpg" style="width:60px;height:50px"/></td>
							<td> <a href="edit-product.php" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil btn btn-warning"></i></a>
								<a href="" data-toggle="tooltip" title="Delete"><i class="fa fa-trash btn btn-danger"></i></a>
							</td>
						</tr>
						<tr>
						<td>chicken</td>
							<td><img src="..\dist\img\chicken.jpg" style="width:60px;height:50px"/></td>
							<td>Thadoori chicken</td>
							<td>300</td>
							<td>250 gms</td>
							<td>4</td>
							<td>20%</td>
							<td>Yes</td>
							<td><img src="..\dist\img\chicken.jpg" style="width:60px;height:50px"/>
							<img src="..\dist\img\chicken.jpg" style="width:60px;height:50px"/></td>
							<td> <a href="edit-product.php" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil btn btn-warning"></i></a>
								<a href="" data-toggle="tooltip" title="Delete"><i class="fa fa-trash btn btn-danger"></i></a>
							</td>
						</tr>
					</tbody>
					<tfoot>
						<tr>
							<th>CATEGORIES</th>
							<th>Image</th>
							<th>Name</th>
							<th>Price</th>
							<th>Net Weight</th>
							<th>No of Pieces</th>
							<th>Discount</th>
							<th>Preorder</th>
							<th>Images</th>
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
<<<<<<< HEAD
      "searching": true,
=======
      "searching": false,
>>>>>>> f6dc2c5c452f5b858ca78a91e8fb95f739a57359
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>
<<<<<<< HEAD
<?php include( "footer.php"); ?>
=======
<?php include( "footer.php"); ?>
>>>>>>> f6dc2c5c452f5b858ca78a91e8fb95f739a57359
