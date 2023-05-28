
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Blog Application</title>

   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/blog/">

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <link href="blog.css" rel="stylesheet">
  </head>
  <style type="text/css">/* stylelint-disable selector-list-comma-newline-after */

.blog-header {
  line-height: 1;
  border-bottom: 1px solid #e5e5e5;
}

.blog-header-logo {
  font-family: "Playfair Display", Georgia, "Times New Roman", serif;
  font-size: 2.25rem;
}

.blog-header-logo:hover {
  text-decoration: none;
}

h1, h2, h3, h4, h5, h6 {
  font-family: "Playfair Display", Georgia, "Times New Roman", serif;
}

.display-4 {
  font-size: 2.5rem;
}
@media (min-width: 768px) {
  .display-4 {
    font-size: 3rem;
  }
}

.nav-scroller {
  position: relative;
  z-index: 2;
  height: 2.75rem;
  overflow-y: hidden;
}

.nav-scroller .nav {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: nowrap;
  flex-wrap: nowrap;
  padding-bottom: 1rem;
  margin-top: -1px;
  overflow-x: auto;
  text-align: center;
  white-space: nowrap;
  -webkit-overflow-scrolling: touch;
}

.nav-scroller .nav-link {
  padding-top: .75rem;
  padding-bottom: .75rem;
  font-size: .875rem;
}

.card-img-right {
  height: 100%;
  border-radius: 0 3px 3px 0;
}

.flex-auto {
  -ms-flex: 0 0 auto;
  -webkit-box-flex: 0;
  flex: 0 0 auto;
}

.h-250 { height: 250px; }
@media (min-width: 768px) {
  .h-md-250 { height: 250px; }
}

.border-top { border-top: 1px solid #e5e5e5; }
.border-bottom { border-bottom: 1px solid #e5e5e5; }

.box-shadow { box-shadow: 0 .25rem .75rem rgba(0, 0, 0, .05); }

/*
 * Blog name and description
 */
.blog-title {
  margin-bottom: 0;
  font-size: 2rem;
  font-weight: 400;
}
.blog-description {
  font-size: 1.1rem;
  color: #999;
}

@media (min-width: 40em) {
  .blog-title {
    font-size: 3.5rem;
  }
}

/* Pagination */
.blog-pagination {
  margin-bottom: 4rem;
}
.blog-pagination > .btn {
  border-radius: 2rem;
}

/*
 * Blog posts
 */
.blog-post {
  margin-bottom: 4rem;
}
.blog-post-title {
  margin-bottom: .25rem;
  font-size: 2.5rem;
}
.blog-post-meta {
  margin-bottom: 1.25rem;
  color: #999;
}

/*
 * Footer
 */
.blog-footer {
  padding: 2.5rem 0;
  color: #999;
  text-align: center;
  background-color: #f9f9f9;
  border-top: .05rem solid #e5e5e5;
}
.blog-footer p:last-child {
  margin-bottom: 0;
}  
.error{
  color: red;
} 
</style>
  <body>

     
       
      <h1 style="margin-left:260px; margin-top: 40px;">Blog Application</h1>
    <main role="main" class="container">
      <div class="row">
        <div class="col-md-12 blog-main">
           <?php $message = $this->session->userdata('message'); ?>
              <?php  if($message){

                ?>  <p class="alert alert-success" role="alert">   <?php  

                 echo $message;
              }  else{

              }  ?></p>
          <h3 class="pb-3 mb-4 font-italic border-bottom" style="margin-top:50px;">
            Blog Detail
          </h3>
          
          <div class="blog-post">
            <h2 class="blog-post-title"><?php echo $data->title;  ?></h2>
            <p class="blog-post-meta"><?php echo $data->created_at;  ?> <a href="#"><?php echo $data->aouthor;  ?></a></p>

           <?php echo $data->description;  ?>
          </div><!-- /.blog-post -->
            



         </div>
           <!-- coment-->
           
           <div class="col-md-8 comment-box">
            <h3>Please comment here!</h3>
            <form action="<?php echo base_url('home/blogdetail/').$data->id;   ?>" method="post">
            <div class="form-group" >
            <label>Name</label>

            <input type="" name="name" class="form-control" value="<?php echo set_value('name');  ?>">
              

            </div><?php echo form_error('name');  ?>


            <div class="form-group" >
            <label>Comment</label>

           <textarea class="form-control" name="comment" rows="4"  ?> <?php echo set_value('comment');?>
             
           </textarea><?php echo form_error('comment');?>

           <div class="form-group" >
          


           <br>
              
          <div class="form-group">
           

            <input type="submit" name="Submit" class="btn btn-primary">
              

            </div>
           
      </form>
      


    </div>

       <h4><b>Comments!</b></h4>
       <hr>
        <?php foreach($data as $d){ ?>
        <div class="col-md-12">
        <div class="wrapper">
        <div class="name"><b>Mohit</b><br><span>2019-04-23</span>
        <div class="comment">doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architect
        o beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia volupt</div>
        


        </div>
          
       </div>

        </div><hr>
         <?php } ?>


        <div class="col-md-12">
        <div class="wrapper">
        <div class="name"><b>Mohit</b><br><span>2019-04-23</span>
        <div class="comment">doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architect
        o beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia volupt</div>
        
        </div>
          
       </div>

        </div>


      </div>

    </main>






  <?php $this->load->view('home/footer');   ?>
