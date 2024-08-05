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
                  <h1 class="mt-4">
                     Welcome To Admin
                     <small class="text-muted"><?php echo $_SESSION['username']; ?></small>
                  </h1>
                  <ol class="breadcrumb mb-4">
                     <li class="breadcrumb-item acitve">Profile</li>
                  </ol>
                  <hr>

                  <div class="row">
                     <div class="col-md-6 w-75 mx-auto">

                        <?php 
                        
                        if(isset($_SESSION['username'])){

                           $username = $_SESSION['username'];

                           $query = "SELECT * FROM users WHERE username = '{$username}' ";

                           $select_user_profile_query = mysqli_query($connection, $query);

                           while($row = mysqli_fetch_array($select_user_profile_query)){

                              $user_id = $row['user_id'];
                              $username = $row['username'];
                              $user_password = $row['user_password'];
                              $user_firstname = $row['user_firstname'];
                              $user_lastname = $row['user_lastname'];
                              $user_email = $row['user_email'];
                              // $user_image = $row['user_image'];
                              $user_role = $row['user_role'];
                           }
                        }
                        
                        ?>


                        <?php 
                        
                        if(isset($_POST['edit_user'])){

                           $user_role = $_POST['user_role'];
                     
                           // $post_image = $_FILES['post_image']['name'];   
                           // $post_image_temp = $_FILES['post_image']['tmp_name'];
                     
                           // $post_date = date('d-m-y');
                           $user_firstname = $_POST['user_firstname'];
                           $user_lastname = $_POST['user_lastname'];
                           $username = $_POST['username'];
                           $user_password = $_POST['user_password'];
                           $user_email = $_POST['user_email'];
                           
                           // move_uploaded_file($post_image_temp, "./images/$post_image");
                     
                           // if(empty($post_image)){
                     
                           //    $query = "SELECT * FROM posts WHERE post_id = $the_post_id";
                     
                           //    $select_image_query = mysqli_query($connection, $query);
                     
                           //    while($row = mysqli_fetch_array($select_image_query)){
                     
                           //       $post_image = $row['post_image'];
                     
                           //    }
                     
                           // }
                            
                           $query = "UPDATE users SET ";
                           $query .= "user_firstname = '{$user_firstname}', ";
                           $query .= "user_lastname = '{$user_lastname}', ";
                           $query .= "user_role = '{$user_role}', ";
                           $query .= "username = '{$username}', ";
                           $query .= "user_email = '{$user_email}', ";
                           $query .= "user_password = '{$user_password}' ";
                           $query .= "WHERE username = '{$username}' ";
                     
                           $edit_user_query = mysqli_query($connection, $query);
                     
                           if(!$edit_user_query){
                     
                              die("Error: " . $query . "<br>" . mysqli_error($connection));
                           }else{
                              echo "<div class='alert alert-success alert-dismissible fade show'>
                              <button type='button' class='btn-close' data-bs-dismiss='alert'></button>
                              Profile updated successfully.
                              </div>";
                           }
                     
                     
                        }
                        
                        
                        
                        ?>

                        <div class="card mb-4 shadow-sm">
                           <div class="card-header bg-success text-white">
                              Edit Profile
                           </div>
                           <div class="card-body">
                              <form action="" method="POST" enctype="multipart/form-data">
                                 <div class="form-group mb-3">
                                    <label for="user_role">Role</label> <br>
                                    <select name="user_role" id="" class="mt-3 w-50 py-2 px-2">

                                       <option value="subscriber"><?php echo $user_role; ?></option>

                                       <?php 
                                       
                                       if($user_role == 'admin'){
                                          echo "<option value='subscriber'>subscriber</option>";
                                       }else{
                                          echo "<option value='admin'>admin</option>";
                                       }
                                       
                                       ?>

                                    </select>
                                 </div>
                                 <!-- <div class="form-group mb-2">
                                    <label for="post_image">Post Image</label>
                                    <input type="file" name="post_image" class="form-control">
                                 </div> -->
                                 <div class="form-group mb-2">
                                    <label for="post_title">First name</label>
                                    <input value="<?php echo $user_firstname; ?>" type="text" name="user_firstname" class="form-control">
                                 </div>
                                 <div class="form-group mb-2">
                                    <label for="post_content">Last name</label>
                                    <input value="<?php echo $user_lastname; ?>" type="text" name="user_lastname" class="form-control">
                                 </div>
                                 <div class="form-group mb-2">
                                    <label for="post_tags">Username</label>
                                    <input value="<?php echo $username; ?>" type="text" name="username" class="form-control">
                                 </div>
                                 <div class="form-group mb-2">
                                    <label for="post_status">Email</label>
                                    <input value="<?php echo $user_email; ?>" type="email" name="user_email" class="form-control">
                                 </div>
                                 <div class="form-group mb-2">
                                    <label for="post_status">Password</label>
                                    <input value="<?php echo $user_password; ?>" type="password" name="user_password" class="form-control">
                                 </div>
                                 <div class="form-group mb-2">
                                    <input type="submit" name="edit_user" value="Update profile" class="btn btn-success w-25">
                                 </div>
                              </form>
                           </div>
                        </div>

                     </div>

            
                  </div>


                  <div class="row">
                     
                  </div>


                  <div class="card mb-4 shadow-sm">

                     

                  </div>
               </div>

            </main>

            <!-- footer -->
<?php include './includes/admin_footer.php'; ?>
