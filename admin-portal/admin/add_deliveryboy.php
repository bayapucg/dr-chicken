<?php include( "header.php"); ?>
<div class="content-wrapper">
	<section class="content-header">
		<h1>
       Deliveryboy 
      </h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Home</a>
			</li>
			<li class="active">Deliveryboy</li>
		</ol>
	</section>
	<section class="content">
		<div class="row">
			<!-- left column -->
			<div class="col-md-12">
				<!-- general form elements -->
				<div class="box box-primary">
					<div class="box-header with-border">
						<h3 class="box-title">Add Deliveryboy</h3>
						<a href="deliveryboy_list.php" class=" pull-right btn btn-primary btn-sm"> Delivaryboy List</a>
					</div>
					<!-- /.box-header -->
					<!-- form start -->
					<div style="padding:20px;">
						<form id="defaultForm" method="post" class="" action="add-student.php">
							<div class="col-md-6">
								<div class="form-group">
									<label class=" control-label">Name</label>
									<div class="">
										<input type="text" class="form-control" name="name" placeholder="Enter name" />
									</div>
								</div>
								<div class="form-group ">
									<label class=" control-label">Mobile Number</label>
									<div class="">
										<input type="text" class="form-control" name="mobilenumber" placeholder="Enter MobileNumber" />
									</div>
								</div>
								<div class="form-group ">
									<label class=" control-label">Alternate Number</label>
									<div class="">
										<input type="text" class="form-control" name="alternatenumber" placeholder="Enter Alternate Number" />
									</div>
								</div>
								<div class="form-group ">
									<label class=" control-label">Vehicle Number</label>
									<div class="">
										<input type="text" class="form-control" name="alternatenumber" placeholder="Enter Vehicle Number" />
									</div>
								</div>
							</div>
							<!--school details-->
							<div class="col-md-6">
								<div class="form-group">
									<label class=" control-label">Email Id</label>
									<div class="">
										<input type="text" class="form-control" name="email" placeholder="Enter Email ID" />
									</div>
								</div>
								<div class="form-group">
									<label class=" control-label">Address</label>
									<div class="">
										<input type="text" class="form-control" name="address" placeholder="Enter Address" />
									</div>
								</div>
								<div class="form-group ">
									<label class=" control-label">Driving license number</label>
									<div class="">
										<input type="text" class="form-control" name="drivinglicenseno" placeholder="Enter Driving License No" />
									</div>
								</div>
								<div class="form-group ">
									<label class=" control-label">Vehicle Type</label>
									<div class="">
										<input type="text" class="form-control" name="alternatenumber" placeholder="Enter Vehicle Type" />
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="col-lg-4 col-lg-offset-10">
									<button type="submit" class="btn btn-primary" name="signup" value="Sign up">Add Deliveryboy</button>
								</div>
							</div>
						</form>
						<div class="clearfix">&nbsp;</div>
					</div>
				</div>
				<!-- /.box -->
			</div>
		</div>
		<!--/.col (right) -->
</div>
<!-- /.row -->
</section>
</div>
<script type="text/javascript">
	$(document).ready(function() {
	    // Generate a simple captcha
	    function randomNumber(min, max) {
	        return Math.floor(Math.random() * (max - min + 1) + min);
	    };
	    $('#captchaOperation').html([randomNumber(1, 100), '+', randomNumber(1, 200), '='].join(' '));
	
	    $('#defaultForm').bootstrapValidator({
	//        live: 'disabled',
	        message: 'This value is not valid',
	        feedbackIcons: {
	            valid: 'glyphicon glyphicon-ok',
	            invalid: 'glyphicon glyphicon-remove',
	            validating: 'glyphicon glyphicon-refresh'
	        },
	        fields: {
	            firstName: {
	                group: '.col-lg-4',
	                validators: {
	                    notEmpty: {
	                        message: 'The first name is required and cannot be empty'
	                    }
	                }
	            },
	            lastName: {
	                group: '.col-lg-4',
	                validators: {
	                    notEmpty: {
	                        message: 'The last name is required and cannot be empty'
	                    }
	                }
	            },
	            shopname: {
	                message: 'The username is not valid',
	                validators: {
	                    notEmpty: {
	                        message: 'The shopname is required and cannot be empty'
	                    },
	                    stringLength: {
	                        min: 6,
	                        max: 30,
	                        message: 'The username must be more than 6 and less than 30 characters long'
	                    },
	                    regexp: {
	                        regexp: /^[a-zA-Z0-9_\.]+$/,
	                        message: 'The username can only consist of alphabetical, number, dot and underscore'
	                    },
	                    remote: {
	                        type: 'POST',
	                        url: 'remote.php',
	                        message: 'The username is not available'
	                    },
	                    different: {
	                        field: 'password,confirmPassword',
	                        message: 'The username and password cannot be the same as each other'
	                    }
	                }
	            },
	            email: {
	                validators: {
	                    emailAddress: {
	                        message: 'The input is not a valid email address'
	                    }
	                }
	            },
	            password: {
	                validators: {
	                    notEmpty: {
	                        message: 'The password is required and cannot be empty'
	                    },
	                    identical: {
	                        field: 'confirmPassword',
	                        message: 'The password and its confirm are not the same'
	                    },
	                    different: {
	                        field: 'username',
	                        message: 'The password cannot be the same as username'
	                    }
	                }
	            },
	            confirmPassword: {
	                validators: {
	                    notEmpty: {
	                        message: 'The confirm password is required and cannot be empty'
	                    },
	                    identical: {
	                        field: 'password',
	                        message: 'The password and its confirm are not the same'
	                    },
	                    different: {
	                        field: 'username',
	                        message: 'The password cannot be the same as username'
	                    }
	                }
	            },
	            birthday: {
	                validators: {
	                    date: {
	                        format: 'YYYY/MM/DD',
	                        message: 'The birthday is not valid'
	                    }
	                }
	            },
	            gender: {
	                validators: {
	                    notEmpty: {
	                        message: 'The gender is required'
	                    }
	                }
	            },
	            'languages[]': {
	                validators: {
	                    notEmpty: {
	                        message: 'Please specify at least one language you can speak'
	                    }
	                }
	            },
	            'programs[]': {
	                validators: {
	                    choice: {
	                        min: 2,
	                        max: 4,
	                        message: 'Please choose 2 - 4 programming languages you are good at'
	                    }
	                }
	            },
	            captcha: {
	                validators: {
	                    callback: {
	                        message: 'Wrong answer',
	                        callback: function(value, validator) {
	                            var items = $('#captchaOperation').html().split(' '), sum = parseInt(items[0]) + parseInt(items[2]);
	                            return value == sum;
	                        }
	                    }
	                }
	            }
	        }
	    });
	
	    // Validate the form manually
	    $('#validateBtn').click(function() {
	        $('#defaultForm').bootstrapValidator('validate');
	    });
	
	    $('#resetBtn').click(function() {
	        $('#defaultForm').data('bootstrapValidator').resetForm(true);
	    });
	});
</script>

<?php include( "footer.php"); ?>