<?php include './includes/admin_header.php'; ?>

      <!-- Navigation -->
      <?php include './includes/admin_navigationbar.php'; ?>

      <div id="layoutSidenav">
         <div id="layoutSidenav_nav">
               
            <?php include './includes/admin_sidebar.php'; ?>

         </div>

         <div id="layoutSidenav_content">
            <main>
                  
               <div class="container-fluid px-4">
                  <h1 class="mt-4">Categories</h1>
                  <ol class="breadcrumb mb-4">
                     <li class="breadcrumb-item active">Categories</li>
                  </ol>
                  <hr>

                  <div class="row">
                     <div class="col-md-6">

                        <?php 

                        // insert categories to the database 

                        if(isset($_POST['add_cat'])){

                           $cat_title = $_POST['cat_title'];

                           $query = "SELECT * FROM categories WHERE cat_title = '$cat_title'";
                           $result_category_query = mysqli_query($connection, $query);
                           $number_row = mysqli_num_rows($result_category_query);

                           if($number_row > 0){  

                              // To throw a warning incase of duplicate data entries
                              
                              echo "<div class='alert alert-warning alert-dismissible fade show'>
                              <button type='button' class='btn-close' data-bs-dismiss='alert'></button>
                              Category exist in the database.
                              </div>";
                           }elseif($cat_title == "" or empty($cat_title)){
                              echo "<div class='alert alert-danger alert-dismissible fade show'>
                              <button type='button' class='btn-close' data-bs-dismiss='alert'></button>
                              Please fill the required field.
                              </div>";
                           }else{
                              $query = "INSERT INTO categories (cat_title) VALUES ('$cat_title')";
                              $create_categories_query = mysqli_query($connection, $query);

                              if(!$create_categories_query){
                                 die("Error: " . $query . "<br>" . mysqli_error($connection));
                              }else{
                                 echo "<div class='alert alert-success alert-dismissible fade show'>
                                 <button type='button' class='btn-close' data-bs-dismiss='alert'></button>
                                 Category created successfully.
                                 </div>";
                              }
                           }

                        }

                        ?>

                        <div class="card mb-4 shadow-sm">
                           <div class="card-body">
                              <form action="" method="POST">
                                 <div class="form-group mb-3">
                                    <label for="" class="mb-4">Add Category</label>
                                    <input type="text" name="cat_title" placeholder="add category" class="form-control">
                                 </div>
                                 <div class="form-group mb-3">
                                    <input type="submit" name="add_cat" value="Add Category" class="btn btn-success">
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>

                     <div class="col-md-6">
                        <div class="card mb-4 shadow-sm">
                           <div class="card-body">
                              <form action="" method="POST">
                                 <div class="form-group mb-3">
                                    <label for="" class="mb-4">Edit Category</label>

                                    <?php
                        
                                    // edit categories from the datebase
                                    
                                    if(isset($_GET['edit'])){

                                       $edit_cat_id = $_GET['edit'];

                                       $query = "SELECT * FROM categories WHERE cat_id = $edit_cat_id";
                                       $edit_categories_query = mysqli_query($connection, $query);

                                       while($row = mysqli_fetch_assoc($edit_categories_query)){

                                          $cat_id = $row['cat_id'];
                                          $cat_title = $row['cat_title'];
                                       
                                          ?>

                                          <input value="<?php if(isset($cat_title)){echo $cat_title;} ?>" type="text" name="cat_title" placeholder="update category" class="form-control">

                                       <?php }
                                    
                                    } 
                                 
                                    ?>

                                 </div>

                                 <?php
                                 
                                 // Update categories from the database
                                 
                                 if(isset($_POST['edit_cat'])){

                                    $cat_title = $_POST['cat_title'];

                                    $query = "UPDATE categories SET cat_title = '$cat_title' WHERE cat_id = '$edit_cat_id'";

                                    $update_categories_query = mysqli_query($connection, $query);

                                    if(!$update_categories_query){
                                       die("Error: " . $query . "<br>" . mysqli_error($connection));
                                    }else{
                                       echo "<div class='alert alert-success alert-dismissible fade show'>
                                       <button type='button' class='btn-close' data-bs-dismiss='alert'></button>
                                       Category updated successfully.
                                       </div>";
                                    }

                                 }
                                 
 
                                 ?>

                                 <div class="form-group mb-3">
                                    <input type="submit" name="edit_cat" value="Update Category" class="btn btn-success">
                                 </div>
                              </form>
                           </div>
                        </div>

                     </div>
                  </div>


                  <div class="row">
                     
                  </div>


                  <div class="card mb-4 shadow-sm">

                     <?php
                     
                     $query = "SELECT * FROM categories";
                     
                     $select_categories_query = mysqli_query($connection, $query);
                     
                     
                     ?>


                     <div class="card-header bg-success text-white">
                        <i class="fas fa-table me-1"></i>
                        Category Table
                     </div>
                     <div class="card-body">
                        <table class="table table-bordered table-striped text-center">
                           <thead>
                              <tr>
                                 <th>Category ID</th>
                                 <th>Category Title</th>
                                 <th colspan="2">Actions</th>
                              </tr>
                           </thead>
                           <tbody>

                              <?php 

                              /*
                                 fetch categories from the database and 
                                 display on the table
                              */
                              
                              while($row = mysqli_fetch_assoc($select_categories_query)){

                                 $cat_id = $row['cat_id'];
                                 $cat_title = $row['cat_title'];

                                 echo "<tr>";
                                 echo "<td>$cat_id</td>";
                                 echo "<td>$cat_title</td>";
                                 echo "<td><a href='categories.php?edit=$cat_id' class='text-decoration-none'>Edit</a></td>";
                                 echo "<td><a href='categories.php?delete=$cat_id' class='text-decoration-none'>Delete</a></td>";
                                 echo "</tr>";
                              }
                              
                              ?>




                              <?php 

                              // delete categories from database
                              
                              if(isset($_GET['delete'])){

                                 $delete_cat_id = $_GET['delete'];

                                 $query = "DELETE FROM categories WHERE cat_id = $delete_cat_id";

                                 $delete_categories_query = mysqli_query($connection, $query);

                                 if(!$delete_categories_query){
                                    die("Error: " . $query . "<br>" . mysqli_error($connection));
                                 }

                                 header("Location: categories.php");
                              }
                              
                              
                              
                              ?>

                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>

            </main>

            <!-- footer -->
<?php include './includes/admin_footer.php'; ?>
