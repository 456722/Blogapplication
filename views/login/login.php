




<!DOCTYPE html>
<html lang="en">
<head>
<title>Login </title>
<meta charset="UTF-8">


<link  href="<?php echo base_url(
    "Assets/css/bootstrap.min.css"
); ?>" rel="stylesheet">

<style type="text/css">
	.error{
		color: red;
	}

	.ak{
		color: red;
	}
</style>

 <h2 align="center" style="margin-top:40px;">Login to your account</h2>
<div class="container" align="" style="margin-left:400px;">
   <br><br>
   <form method="post" action="<?php echo base_url("logss"); ?>">
      <div class="row">
         <div class="col-md-8 col-md-offset-2">
            <div class="form-group">
               <label class="col-md-3">username</label>
               <div class="col-md-9">
                  <input type="text" name="username" class="form-control" value="<?php echo set_value(
                      "username"
                  ); ?>" align="center">
               </div>
               <?php echo form_error("username"); ?>
               <div class="form-group">
                  <label class="col-md-3">password</label>
                  <div class="col-md-9">
                     <input type="text" name="password" class="form-control" value="<?php echo set_value(
                         "password"
                     ); ?>">

                  </div>
                    <?php echo form_error("password"); ?>
                  <br>
                  <input type="submit" name="submit" value="Submit" class="btn btn-primary">
              </div>

<!--end log form -->

</body>
</html>

