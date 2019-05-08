<?php include( "header.php"); ?>
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
       contact List
      </h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Home</a>
			</li>
			<li class="active">Contact List</li>
		</ol>
	</section>
	<!-- Main content -->
	<section class="content">
		<div class="box">
			<div class="box-header bg-primary">
				<div class="col-md-10">
				</div>
				<div class="col-md-2">
					<div class="">	<a class="btn btn-default st-btn add-student-btn" href="add-contact.php"><i class="fa fa-plus"></i> Add contact</a>
						
					</div>
				</div>
			</div>
			<!-- /.box-header -->
			<div class="box-body table-responsive">
				<table id="example1" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>Phone number</th>
							<th>EmailId</th>
							<th>Facebook link</th>
							<th>Twitter Link</th>
							<th>Google plus</th>
							<th>Linked In</th>
							<th>Youtube link</th>
							<th>Edit / Delete</th>
						</tr>
					</thead>
					<tbody>
						
					</tbody>
					<tfoot>
						<tr>
							<th>Phone number</th>
							<th>EmailId</th>
							<th>Facebook link</th>
							<th>Twitter Link</th>
							<th>Google plus</th>
							<th>Linked In</th>
							<th>Youtube link</th>
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