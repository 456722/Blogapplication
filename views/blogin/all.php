<?php  $this->load->view('blogin/header');    ?>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">All Blogs</h1>
      
           
          </div>
             <?php  $message = $this->session->userdata('message');  ?>
             <?php  if($message){

               ?>  <p class="alert alert-success" role="alert">   <?php  

                  echo $message;
                   }  ?></p>

       
          <div class="table-responsive">
            <table  class="table">
              <tr>
                <th>Blog Id</th>
                <th>Title</th>
                <th>Description</th>
                 <th>Special</th>
                <th>Aouthor</th>
                <th></th>
              </tr>

            <?php foreach ($data as $d){ ?>
                <tr>
                  <td><?php  echo $d->id; ?></td>
                  <td><?php  echo $d->title; ?></td>
                  <td><?php  echo $d->description; ?></td>
                  <td><?php  echo $d->special; ?></td>
                  <td> <?php  echo $d->aouthor; ?></td>
                  <td> <a class="btn btn-info btn-xs"    href="<?php echo base_url
                  ('blogin/edit/'.$d->id); ?>">Edit<i class="glyphicon glyphicon-pencil"></i></a></td>
                   <td><a onclick='return confirm("Want to delete?");' class="btn btn-danger btn-xs" 
                   href="<?php echo base_url('blogin/delete/'.$d->id); ?>">Delete<i class="glyphicon glyphicon-remove"></i></a>
                  </td>


                </tr>
                   <?php }  ?>
            </table>

     
             <div>
          
       </main>
     </div>
   </div>
 </div>

    

    <script src="/docs/5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
  </body>
</html>
