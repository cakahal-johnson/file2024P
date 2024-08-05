<div class="col-xl-6 w-75 mx-auto">

   <?php 

   if(isset($_POST['create_user'])){
      
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

      if($user_firstname == "" or empty($user_firstname) or $user_lastname == "" or empty($user_lastname) or $username == "" or empty($username) or $user_password == "" or empty($user_password) or $user_email == "" or empty($user_email)){
         echo "<div class='alert alert-danger alert-dismissible fade show'>
         <button type='button' class='btn-close' data-bs-dismiss='alert'></button>
         Please fill the required fields.
         </div>";
      }else{
         $query = "INSERT INTO users (username, user_password, user_firstname, user_lastname, user_email, user_role)";
         $query .= "VALUES ('$username', '$user_password', '$user_firstname', '$user_lastname', '$user_email', '$user_role')";

         $insert_user_query = mysqli_query($connection, $query);

         if(!$insert_user_query){
            die("Error: " . $query . "<br>" . mysqli_error($connection));
         }else{
            echo "<div class='alert alert-success alert-dismissible fade show'>
            <button type='button' class='btn-close' data-bs-dismiss='alert'></button>
            User created successfully. <a href='users.php' class='alert-link'>View Users</a>
            </div>";
         }
      }

   }

   ?>


   <div class="card mb-4 shadow-sm">
      <div class="card-header bg-success text-white">
         Add Users
      </div>
      <div class="card-body">
         <form action="" method="POST" enctype="multipart/form-data">
            <div class="form-group mb-3">
               <label for="user_role">Role</label> <br>
               <select name="user_role" id="" class="mt-3 w-50 py-2 px-2">

                  <option value="">Select role</option>
                  <option value="admin"> Admin</option>
                  <option value="subscriber">Subscriber</option>

                  <?php 
                  
                     // $query = "SELECT * FROM users";

                     // $select_users = mysqli_query($connection, $query);

                     // while($row = mysqli_fetch_assoc($select_users)){

                     //    $user_id = $row['user_id'];

                     //    $user_role = $row['user_role'];

                     //    echo "<option value='$user_id'>$user_role</option>";
                     // }

                     // if(!$select_users){

                     //    die("Error: " . $query . "<br>" . mysqli_error($connection));
                     // }
                  
                  ?>
                  
               </select>
            </div>
            <!-- <div class="form-group mb-2">
               <label for="post_image">Post Image</label>
               <input type="file" name="post_image" class="form-control">
            </div> -->
            <div class="form-group mb-2">
               <label for="post_title">First name</label>
               <input type="text" name="user_firstname" class="form-control">
            </div>
            <div class="form-group mb-2">
               <label for="post_content">Last name</label>
               <input type="text" name="user_lastname" class="form-control">
            </div>
            <div class="form-group mb-2">
               <label for="post_tags">Username</label>
               <input type="text" name="username" class="form-control">
            </div>
            <div class="form-group mb-2">
               <label for="post_status">Email</label>
               <input type="email" name="user_email" class="form-control">
            </div>
            <div class="form-group mb-2">
               <label for="post_status">Password</label>
               <input type="password" name="user_password" class="form-control">
            </div>
            <div class="form-group mb-2">
               <input type="submit" name="create_user" value="Add user" class="btn btn-success w-25">
            </div>
         </form>
      </div>
   </div>
</div>