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
					<input type="text" class="form-control" placeholder="Search by Productname.." name="search">
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
							<td>
							<img id="myImg" src="../dist/img/phimg.jpg"  style="height:50px;width:50px">

<!-- The Modal -->
<div id="myModal" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div>
								<img src="../dist/img/phimg.jpg" style="height:50px;width:50px" />
								<td>
									 <div class="dropdown dropdown_list">
    <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Action
   <i class="fa fa-ellipsis-v" aria-hidden="true"></i></button>
    <ul class="dropdown-menu">
      <li><a href="#">Accept</a></li>
      <li><a href="#">Reject</a></li>
    </ul>
  </div>
								</td>
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
// Get the modal
var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = "none";
}
</script>
<?php include( "footer.php"); ?>