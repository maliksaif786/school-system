<?php  include('includes/header.php'); ?>
<?php  include('includes/navbar.php'); ?>
  <div class="container">

    <div class="" id="modalRegister" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Select Dept</h4>
        
      
      </div>
      <div class="modal-body mx-3">
        <div class="md-form mb-5">
          <form style="font-size: 11px;" action="class.php" method="post">


        <div class="md-form mb-4">
          <i class="fas fa-graduation-cap  grey-text"></i>
          <select class="form-control validate" name="department_fk_id" style="border: none;border-bottom: 1px solid gray;">
            
                    <option>Select Dept</option> 
            <?php 
$con = mysqli_connect('localhost','root','','practice');
$query = "SELECT * FROM departments";
$run = mysqli_query($con,$query);
$data = mysqli_num_rows($run);
if($data != 0){
  ?>
  <?php 
                     while( $result = mysqli_fetch_assoc($run))
                    {
                    ?>

           <option value="<?php echo $result['id']; ?>"> <?php echo $result['department_name']; ?> </option> 
           <?php }
                }
              
                ?>
          </select>
          

         
    
           
        </div>
        
        

      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button class="btn btn-primary">submit</button>
      </div>
    </div>
  </div>
</form>
</div>



  </div>



<?php  include('includes/scripts.php'); ?>
<?php  include('includes/footer.php'); ?>