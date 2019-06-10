<?php include( "header.php"); ?>
<head>
<link rel="stylesheet" href="../dist/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="../dist/css/buttons.dataTables.min.css">
</head>
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
       Order 
      </h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Home</a>
			</li>
			<li class="active">Order </li>
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
							<td> <div class="dropdown ">
    <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Action
    <i class="fa fa-ellipsis-v" aria-hidden="true"></i></button>
    <ul class="dropdown-menu dropdown-menu-right">
      <li><a href="#">accepted</a></li>
      <li><a href="#">Rejected</a></li>
    </ul>
  </div> 	</td>
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
</script>
<?php include( "footer.php"); ?><script src="../dist/js/dataTables.buttons.min.js"></script>
<script src="dist/js/buttons.print.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    $('#example1').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'print'
        ]
    } );
} );
</script>