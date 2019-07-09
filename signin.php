<?php include("header.php"); ?>
<div class="clearfix">&nbsp;</div>
    <div class="container">
      <div class="sign-in-page ">
			<div class="row px-4 ">
				<!-- Sign-in -->			
<div class="col-md-6 col-sm-6 sign-in" >
<div class="px-4" >
	<h2 class="text-center">Sign in</h2>
	<p class="text-center">Hello, Welcome to your account.</p>

	<form id="defaultForm" method="post" class="form-horizontal" action="target.php">
                      

                        <div class="form-group">
                            <label class="control-label">Login As</label>
                            <div class="">
                                <select class="form-control">
									<option>Select</option>
									<option>wholesale </option>
									<option>Retail</option>
								</select>
                            </div>
                        </div>                        <div class="form-group">
                            <label class="control-label">Username</label>
                            <div class="">
                                <input type="text" class="form-control" name="username" />
                            </div>
                        </div>


                        <div class="form-group">
                            <label class=" control-label">Password</label>
                            <div class="">
                                <input type="password" class="form-control" name="password" />
                            </div>
                        </div> 
						<div class="form-group">
                             <a href="forgot-password.php" class="pull-right"><b>Forgot password?</b></a>
                            
                        </div>

                        <div class="form-group">
                            <div class="col-lg-8 col-lg-offset-2">
                                <button type="submit" class="btn btn-primary btn-block" name="signup" value="Sign up">Sign in</button>
                              
                            </div>
                        </div>
						<div class="py-2">
						<hr>
						<h4 class="text-center" style="background:#fff;width:40px;height:40px;margin:-40px auto 0 auto; background:#fff;border-radius:50%;line-height:34px;border:1px solid #ddd;">Or</h4>
						</div>
						<h3 class="py-2 text-center">Login with us</h3>
						  <div class="form-group">
                            <div class="col-lg-6 ">
                               <button type="submit" class="btn btn-info"><span class="fa fa-facebook"></span> </span>Login with Facebook </button> 
                              
                            </div> 
							<div class="col-lg-6 ">
                              <button type="submit" class="btn btn-danger"><span class="fa fa-google-plus"></span> Login with Google  </button>
                    </form>				
                              
                            </div>
                        </div>
						    
</div>
</div>
<!-- Sign-in -->

<!-- create a new account -->
<div class="col-md-6 col-sm-6 create-new-account" style="background:#f5f5f5" >
	<h2 class="text-center">Create a new account</h2>
	<p class="text-center">Create your new account.</p>
	<form class="register-form outer-top-xs" role="form">
	
		<div class="form-group">
	    	<label class="info-title" for="exampleInputEmail2">Signup As <span>*</span></label>
			<select class="form-control unicase-form-control text-input">
				<option>Select</option>
				<option>wholesale </option>
				<option>Retail</option>
			</select>
	  	</div>
		<div class="form-group">
	    	<label class="info-title" for="exampleInputEmail2">Email Address <span>*</span></label>
	    	<input type="email" class="form-control unicase-form-control text-input" id="exampleInputEmail2" >
	  	</div>
        <div class="form-group">
		    <label class="info-title" for="exampleInputEmail1">Name <span>*</span></label>
		    <input type="email" class="form-control unicase-form-control text-input" id="exampleInputEmail1" >
		</div>
        <div class="form-group">
		    <label class="info-title" for="exampleInputEmail1">Phone Number <span>*</span></label>
		    <input type="email" class="form-control unicase-form-control text-input" id="exampleInputEmail1" >
		</div>
        <div class="form-group">
		    <label class="info-title" for="exampleInputEmail1">Password <span>*</span></label>
		    <input type="email" class="form-control unicase-form-control text-input" id="exampleInputEmail1" >
		</div>
         <div class="form-group">
		    <label class="info-title" for="exampleInputEmail1">Confirm Password <span>*</span></label>
		    <input type="email" class="form-control unicase-form-control text-input" id="exampleInputEmail1" >
		</div>
	  	<button type="submit" class="btn-upper btn btn-primary checkout-page-button">Sign Up</button>
	</form>
	
	
</div>	
<!-- create a new account -->			</div><!-- /.row -->
		</div>
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
            username: {
                message: 'The username is not valid',
                validators: {
                    notEmpty: {
                        message: 'The username is required and cannot be empty'
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
<?php include("footer.php"); ?>