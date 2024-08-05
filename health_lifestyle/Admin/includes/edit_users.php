<div class="col-xl-6 w-75 mx-auto">

   <?php

   // Using the GET variable to get the post_id of the post
   
   if(isset($_GET['users_id'])){

      $the_user_id = $_GET['users_id'];
   }

   $query = "SELECT * FROM users WHERE user_id = $the_user_id";
   $select_user_query_id = mysqli_query($connection, $query);

   while($row = mysqli_fetch_assoc($select_user_query_id)){

      $user_role = $row['user_role'];
      $user_firstname = $row['user_firstname'];
      $user_lastname = $row['user_lastname'];
      $username = $row['username'];
      $user_password = $row['user_password'];
      $user_email = $row['user_email'];
   }

   // update & edit posts based on the post_id selected

   if(isset($_POST['update_user'])){

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
       
      $query = "UPDATE users SET username = '{$username}', user_password = '{$user_password}', ";
      $query .= "user_firstname = '{$user_firstname}', user_lastname ='{$user_lastname}', ";
      $query .= "user_email = '{$user_email}', user_role = '{$user_role}' ";
      $query .= "WHERE user_id = {$the_user_id} ";

      $update_user_query = mysqli_query($connection, $query);

      if(!$update_user_query){

         die("Error: " . $query . "<br>" . mysqli_error($connection));
      }else{
         echo "<div class='alert alert-success alert-dismissible fade show'>
         <button type='button' class='btn-close' data-bs-dismiss='alert'></button>
         User updated successfully. <a href='users.php' class='alert-link'>View Users</a>
         </div>";
      }


   }

   ?>

   <div class="card mb-4 shadow-sm">
      <div class="card-header bg-success text-white">
         Edit Users
      </div>
      <div class="card-body">
         <form action="" method="POST" enctype="multipart/form-data">
            <div class="form-group mb-3">
               <label for="user_role">Role</label> <br>
               <select name="user_role" id="" class="mt-3 w-50 py-2 px-2">

                  <option value=""><?php echo $user_role; ?></option>

                  <?php 
                  
                  if($user_role == 'admin'){
                     echo "<option value='subscriber'>Subscriber</option>";
                  }else{
                     echo "<option value='admin'>Admin</option>";
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
               <input type="submit" name="update_user" value="Update user" class="btn btn-success w-25">
            </div>
         </form>
      </div>
   </div>
</div>