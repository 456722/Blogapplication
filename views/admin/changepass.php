




<!DOCTYPE html>
<html lang="en">
<head>
<title>Login </title>
<meta charset="UTF-8">


<link  href="<?php echo base_url(
    "Assets/css/bootstrap.min.css"
); ?>" rel="stylesheet">

 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="
 sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<style type="text/css">
	.error{
		color: red;
	}

	.ak{
		color: red;
	}
</style>

 <h2 align="center" style="margin-top:40px;">Create  your new password</h2>
<div class="container" align="" style="margin-left:400px;">
   <br><br>
   <form method="post" action="<?php echo base_url("login/changepassword"); ?>">
      <div class="row">
         <div class="col-md-8 col-md-offset-2">
            <div class="form-group">
               <label class="col-md-3">Old password</label>
               <div class="col-md-9">
                  <input type="text" name="oldpass" class="form-control" value="<?php echo set_value(
                      "oldpass"
                  ); ?>" align="center">
               </div>
               <?php echo form_error("oldpass"); ?>
               <div class="form-group">
                  <label class="col-md-3">New Password</label>
                  <div class="col-md-9">
                     <input type="text" name="newpass" class="form-control" value="<?php echo set_value(
                         "newpass"
                     ); ?>">

                  </div>
                    <?php echo form_error("newpass"); ?>


                      <div class="form-group">
                  <label class="col-md-3">Confirm Password</label>
                  <div class="col-md-9">
                     <input type="text" name="cpass" class="form-control" value="<?php echo set_value(
                         "cpass"
                     ); ?>">

                  </div>
                    <?php echo form_error("cpass"); ?>
                  <br>
                  <input type="submit" name="submit" value="change password" class="btn btn-success">
              </div>

<!--end log form -->

</body>
</html>



  