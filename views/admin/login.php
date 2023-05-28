






<!DOCTYPE html>
<html lang="en">
<head>
<title>Login </title>
<meta charset="UTF-8">


<link  href="http://localhost/codeigniter3-13/Assets/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="
sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<style type="text/css">
  .error{
    color: red;
  }

 
</style>

                

 <style type="text/css">
       

       .error{

         color: red;
       }
   </style>


           <section class="">

              <div class="container">
                <div class="row">
                <div class="col-6">

               <div id="test-popup1" class="">
               
                                <h4 style="margin-top:30px">Login</h4>
             <?php $message = $this->session->userdata('message'); ?>
              <?php  if($message){

                ?>  <p class="alert alert-danger" role="alert">   <?php  

                 echo $message;
              }  else{

              }  ?></p>
        <div class="container">

        <form class="subscribe-popup-form" method="post" action="<?php  echo base_url('login');  ?>">
         <div class="form-group">
        <input type="text" name="username" class="form-control"  placeholder="Enter Username" value="<?php echo set_value('username');  ?>">
        </div>
         <?php echo form_error('username');   ?>
          <div class="form-group">
         <input type="password" name="password" class="form-control" align="center"
         placeholder="Enter Your Password" value="<?php echo set_value('username');  ?>">
         </div>
         <?php echo form_error('password');   ?>
                                    <div class="form-check text-left">
                                        <label>Remember me
         <input class="defult-check" type="checkbox" checked="checked">
         <span class="checkmark"></span>
        </label>
         <a href="<?php echo base_url('login/changepassword') ?>" class="forgot-password float-right">Reset password</a>
        </div>
       <button  type="submit" class="btn btn-primary">Login</button>
       </form>

       </div>
       </div>
       </div>
       <br><br>

                   
                
       </div>
       </section>




                   
<!--end log form -->

</body>
</html>

