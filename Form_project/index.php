<?php include 'includes/connect.php'; ?>

<?php include 'includes/header.php'; ?>



   <div class="container">
      <div class="row mt-5">

         <!-- CREATE ACCOUNT -->
         <div class="col-md-4">

            <?php 

               // INSERT DATA INTO THE DATABASE

               if(isset($_POST['create_account'])){

                  $username = $_POST['username'];
                  $password = $_POST['password'];

                  $query = "INSERT INTO users (username, password) VALUES ('$username', '$password')";

                  $insert_query = mysqli_query($connection, $query);

                  if(!$insert_query){

                     die("Error: " . $insert_query . "<br>" . mysqli_error($connection));

                  }

                  echo "<div class='alert alert-success alert-dismissible'>
                           <button type='button' class='btn-close' data-bs-dismiss='alert'></button>
                           <h5>Record created</h5>
                        </div>";

               }
         
      
            ?>

            <div class="card">

               <div class="card-header">Create Account</div>

               <div class="card-body">
                  <form action="" method="POST">
                     <div class="form-group mb-3">
                        <label for="">Username</label>
                        <input type="text" name="username" class="form-control mb-2">
                     </div>
                     <div class="form-group mb-3">
                        <label for="">Password</label>
                        <input type="password" name="password" class="form-control mb-2">
                     </div>

                     <input type="submit" name="create_account" value="Create Account" class="btn btn-primary">
                  </form>
               </div>
            </div>
         </div>


         <!-- EDIT ACCOUNT -->
         <div class="col-md-4">
               
            <?php
            
               // FETCH DATA USING THE key/value GATEWAY
            
               if(isset($_GET['edit'])){

                  $get_user_id = $_GET['edit'];

                  include 'includes/update.php';

               }
            
            ?>

         </div>

      </div>


      
      <!-- DATA TABLE -->

      <div class="row mt-5">

         <div class="col-md-6">

            <?php 

               $query = "SELECT * FROM users";

               $fetch_query = mysqli_query($connection, $query);

            ?>   

            <div class="card">

               <div class="card-header">Data Table</div>

               <div class="card-body">

                  <table class="table table-bordered table-hover">
                     <thead>
                        <tr>
                           <th>ID</th>
                           <th>Username</th>
                           <th>Password</th>
                        </tr>
                     </thead>
                     <tbody>

                        <?php 
                        
                           while($row = mysqli_fetch_assoc($fetch_query)){

                              $user_id = $row['user_id'];
                              $username = $row['username'];
                              $password = $row['password'];

                              echo "<tr>";
                              echo "<td>$user_id</td>"; 
                              echo "<td>$username</td>";
                              echo "<td>$password</td>";
                              echo "<td>
                                       <a href='index.php?edit=$user_id' class='text-decoration-none'>
                                          Edit
                                       </a>
                                    </td>";
                              echo "<td>
                                       <a href='index.php?delete=$user_id' class='text-decoration-none'>
                                          Delete
                                       </a>
                                    </td>";
                              echo "<tr>";  

                           }
                        
                        ?>


                        <?php 
                        
                           if(isset($_GET['delete'])){

                              $get_user_id = $_GET['delete'];

                              $query = "DELETE FROM users WHERE user_id = $get_user_id";

                              $delete_query = mysqli_query($connection, $query);

                              if(!$delete_query){

                                 die("Query Failed: " .  mysqli_error($connection));
                                 
                              }

                              header("location: index.php");

                           }
                        
                        ?>

                     </tbody>
                  </table>

               </div>

            </div>

         </div>
         

      </div>


   </div>





   <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>