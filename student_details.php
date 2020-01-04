<?php include 'includes/header.php'; 
include 'includes/navbar.php'; ?>



<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Student Details</h1>


  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3 row">
      <div class="col-md-4">
        <h6 class="m-0 font-weight-bold text-primary">Student Details </h6>
      </div>
      <div class="col-md-4"></div>
      <div class="col-md-4 pull-right">
        <form method="POST" action="student_details.php">
          <select class="form-control validate" name="class_fk_id" style="border: none;border-bottom: 1px solid gray;">

            <option>Select Class</option> 
            <?php 
            $con = mysqli_connect('localhost','root','','practice');
            $query = "SELECT * FROM classes;";
            $run = mysqli_query($con,$query);
            $data = mysqli_num_rows($run);
            if($data != 0){
              ?>
              <?php 
              while( $result = mysqli_fetch_assoc($run))
              {
                ?>

                <option value="<?php echo $result['id']; ?>"> <?php echo $result['class_name']; ?> </option> 
              <?php }
            }
            
            ?>
          </select>
          <button type="submit" name="search">Search</button>
        </form>
      </div>
    </div>
    <?php 
    if (isset($_POST['search'])) {
      
    
              $class_id=$_POST['class_fk_id'];
              $con = mysqli_connect('localhost','root','','practice');
              $query = "SELECT * FROM `students` INNER JOIN classes ON classes.id=students.class_fk_id WHERE students.class_fk_id='$class_id'";
              $run = mysqli_query($con,$query);
              $data = mysqli_num_rows($run);
              if($data != 0){
             ?>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th><strong>Name</strong></th>
                      <th><strong>Father Name</strong></th>
                      <th><strong>Email Address</strong></th>
                      <th><strong>Class</strong></th>
                      <th><strong>Age</strong></th>
                      <th><strong>Phone Number</strong></th>
                      <th><strong>Action</strong></th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                     
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php 
                     while( $result = mysqli_fetch_assoc($run))
                    {
                    ?>      
                    <tr>
                      <td><?php echo $result['student_name']; ?></td>
                      <td><?php echo $result['father_name']; ?></td>
                      <td><?php echo $result['email']; ?></td>
                      <td><?php echo $result['class_name']; ?></td>
                      <td><?php echo $result['age']; ?></td>
                      <td><?php echo $result['phone_number']; ?></td>
                      <td><a href="edit_form.php?id=<?php echo $result['id']?>" class="btn btn-primary ">Edit</a>
                    <a href="delete_student.php?id=<?php echo $result['id']?>" class="btn btn-danger " >Delete</a></td>
                    </tr>
                  <?php }
                }
              }
                ?>

                  </tbody>
                </table>
              </div>
            </div>
  </div>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Footer -->


</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->










</body>

</html>
<?php include('includes/scripts.php'); ?>
<?php include('includes/footer.php'); ?>