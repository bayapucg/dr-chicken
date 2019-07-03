<?php include( "header.php"); ?>
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
       Reports List
      </h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Home</a>
			</li>
			<li class="active">Reports List</li>
		</ol>
	</section>
	<section class="content">
		<div class="box">
			<div class="box-body table-responsive">
			 <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab">Weekly</a></li>
              <li><a href="#tab_2" data-toggle="tab">Montly </a></li>
              <li><a href="#tab_3" data-toggle="tab">Yearly </a></li>
         
              
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1">
			  <h3> Weekly</h3>
             <table id="" class="table table-bordered table-striped example1">
					<thead>
						<tr>
							<th>Sno</th>
							<th>Week 1 </th>
							<th>Shop name  </th>
							<th>Given rate </th>
							<th>Our rate </th>
							<th>No kgs sold </th>
							<th>Amount </th>
							<th>Online  </th>
							<th>Cash on delivery </th>
							<th>View order details</th>
						</tr>
					</thead>
					<tbody>
					
						<tr>
							<td>1</td>
							<td>Sanday</td>
							<td> xxxxxx</td>
							<td>25641</td>
							<td>1000</td>
							<td>20</td>
							<td>1500</td>
							<td>yes</td>
							<td>none</td>
							<td> <a href="report-view.php" class="btn btn-primary btn-xs">View</a></td>
						</tr>
					</tbody>
				</table>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_2">
			  <h3> Montly</h3>
                 <table id="" class="table table-bordered table-striped example1">
					<thead>
						<tr>
							<th>Sno</th>
							<th>Week 1 </th>
							<th>Shop name  </th>
							<th>Given rate </th>
							<th>Our rate </th>
							<th>No kgs sold </th>
							<th>Amount </th>
							<th>Online  </th>
							<th>Cash on delivery </th>
							<th>View order details</th>
						</tr>
					</thead>
					<tbody>
					
						<tr>
							<td>1</td>
							<td>Sanday</td>
							<td> xxxxxx</td>
							<td>25641</td>
							<td>1000</td>
							<td>20</td>
							<td>1500</td>
							<td>yes</td>
							<td>none</td>
							<td> <a href="report-view.php" class="btn btn-primary btn-xs">View</a></td>
						</tr>
					</tbody>
				</table>
              </div>  
			  <div class="tab-pane" id="tab_3">
			  <h3> yearly</h3>
                <table id="" class="table table-bordered table-striped example1">
					<thead>
						<tr>
							<th>Sno</th>
							<th>Week 1 </th>
							<th>Shop name  </th>
							<th>Given rate </th>
							<th>Our rate </th>
							<th>No kgs sold </th>
							<th>Amount </th>
							<th>Online  </th>
							<th>Cash on delivery </th>
							<th>View order details</th>
						</tr>
					</thead>
					<tbody>
					
						<tr>
							<td>1</td>
							<td>Sanday</td>
							<td> xxxxxx</td>
							<td>25641</td>
							<td>1000</td>
							<td>20</td>
							<td>1500</td>
							<td>yes</td>
							<td>none</td>
							<td> <a href="report-view.php" class="btn btn-primary btn-xs">View</a></td>
						</tr>
					</tbody>
				</table>
              </div>
             
            </div>
            <!-- /.tab-content -->
          </div>
				
			</div>
		</div>
	</section>
</div>
<script>
  $(function () {
    $(".example1").DataTable();
    $('.example2').DataTable({
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