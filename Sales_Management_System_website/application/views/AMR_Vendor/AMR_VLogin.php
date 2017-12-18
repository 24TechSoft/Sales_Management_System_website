<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login </title>

    <link href="<?php echo base_url();?>Vendor_Main/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>Vendor_Main/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>Vendor_Main/vendors/nprogress/nprogress.css" rel="stylesheet">
    <link href="<?php echo base_url();?>Vendor_Main/vendors/animate.css/animate.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>Vendor_Main/build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
			<img src="<?php echo base_url();?>images/logo.png" class="img-circle profile_img">
            <form action="<?php echo base_url();?>AMR_VendorController/login" method="post" enctype="multipart/form-data"  class="form-horizontal form-label-left">
                <div class="form-group">

                 <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">User ID <span class="required">*</span>

                 </label>

                 <div class="col-md-9 col-sm-6 col-xs-12">

                   <input type="text" id="first-name" name="UserID" required="required" class="form-control">

                 </div>

                </div>
				<div class="form-group">

                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Password <span class="required">*</span>

                    </label>

                    <div class="col-md-9 col-sm-6 col-xs-12">

                     <input type="password" name="Password" class="form-control" value="passwordonetwo">

                    </div>
                </div>
				<div class="ln_solid"></div>
				<div class="form-group">

                    <div class="col-md-9 col-sm-6 col-xs-12 col-md-offset-3">
                      <button type="submit" class="btn btn-success">Login</button>
                    </div>
				</div>

			</form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
