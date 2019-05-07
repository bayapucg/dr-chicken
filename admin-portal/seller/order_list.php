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
				<div class="col-md-3">
				 <select class="form-control">
				<option>Select Day</option>
				<option>1</option>
				<option>2</option>
				<option>3</option>
				<option>4</option>
				<option>5</option>
				<option>6</option>
				<option>7</option>
				<option>8</option>
				<option>9</option>
				<option>10</option>
				<option>11</option>
				<option>12</option>
				<option>13</option>
				<option>14</option>
				<option>15</option>
				<option>16</option>
				<option>17</option>
				<option>18</option>
				<option>19</option>
				<option>20</option>
				<option>21</option>
				<option>22</option>
				<option>23</option>
				<option>24</option>
				<option>25</option>
				<option>26</option>
				<option>27</option>
				<option>28</option>
				<option>29</option>
				<option>30</option>
				<option>31</option>
              </select>
				</div>
				<div class="col-md-3">
				 <select class="form-control">
				<option>Select Month</option>
				<option>January</option>
				<option>Febrary</option>
				<option>March</option>
				<option>April</option>
				<option>May</option>
				<option>June</option>
				<option>July</option>
				<option>August</option>
				<option>September</option>
				<option>October</option>
				<option>November</option>
				<option>December</option>
              </select>
				</div>
				<div class="col-md-3">
					 <select class="form-control">
				<option>Select Year</option>
				<option>2016</option>
				<option>2017</option>
				<option>2018</option>
				<option>2019</option>
              </select>
				</div>
				<div class="col-md-3">
				<div class="col-md-6">
				<button class="btn btn-default">Submit</button></div>
				<div class="col-md-6">
				<button class="btn btn-default"><i class="fa fa-print" aria-hidden="true"></i>Print</button></div>
				</div>
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
							<td>Accepted</td>
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
<?php include( "footer.php"); ?>