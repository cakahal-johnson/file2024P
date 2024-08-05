<div class="col-xl-6 w-75 mx-auto">

   <?php 

   if(isset($_POST['create_post'])){

      $post_category_id = $_POST['post_category_id'];

      $post_image = $_FILES['post_image']['name'];   
      $post_image_temp = $_FILES['post_image']['tmp_name'];

      $post_date = date('d/m/y');
      $post_title = $_POST['post_title'];
      $post_content = $_POST['post_content'];
      $post_tags = $_POST['post_tags'];
      $post_status = $_POST['post_status'];


      move_uploaded_file($post_image_temp, "./images/$post_image");

      if(empty($post_category_id) or empty($post_image) or $post_title == "" or empty($post_title) or $post_content == "" or empty($post_content) or $post_tags == "" or empty($post_tags) or $post_status == "" or empty($post_status)){
         echo "<div class='alert alert-danger alert-dismissible fade show'>
         <button type='button' class='btn-close' data-bs-dismiss='alert'></button>
         Please fill the required fields.
         </div>";
      }else{
         $query = "INSERT INTO posts (post_category_id, post_image, post_date, post_title, post_content, post_tags, post_status)";
         $query .= "VALUES ('$post_category_id', '$post_image', now(), '$post_title', '$post_content', '$post_tags','$post_status')";

         $insert_post_query = mysqli_query($connection, $query);

         if(!$insert_post_query){
            die("Error: " . $query . "<br>" . mysqli_error($connection));
         }else{
            echo "<div class='alert alert-success alert-dismissible fade show'>
            <button type='button' class='btn-close' data-bs-dismiss='alert'></button>
            Post created successfully. <a href='posts.php' class='alert-link'>View Posts</a>
            </div>";
         }
      }

   }

   ?>


   <div class="card mb-4 shadow-sm">
      <div class="card-header bg-success text-white">
         Add Posts
      </div>
      <div class="card-body">
         <form action="" method="POST" enctype="multipart/form-data">
            <div class="form-group mb-3">
               <label for="post_category_id">Post Category</label> <br>
               <select name="post_category_id" id="" class="mt-3 w-50 py-2 px-2">

                  <option value="">Select category</option>

                  <?php 
                  
                     $query = "SELECT * FROM categories";

                     $select_categories_id = mysqli_query($connection, $query);

                     while($row = mysqli_fetch_assoc($select_categories_id)){

                        $cat_id = $row['cat_id'];

                        $cat_title = $row['cat_title'];

                        echo "<option value='$cat_id'>$cat_title</option>";
                     }

                     if(!$select_categories_id){

                        die("Error: " . $query . "<br>" . mysqli_error($connection));
                     }
                  
                  ?>
               </select>
            </div>
            <div class="form-group mb-2">
               <label for="post_image">Post Image</label>
               <input type="file" name="post_image" class="form-control">
            </div>
            <div class="form-group mb-2">
               <label for="post_title">Post Title</label>
               <input type="text" name="post_title" class="form-control">
            </div>
            <div class="form-group mb-2">
               <label for="post_content">Post Content</label>
               <textarea name="post_content" class="form-control" id="body" cols="30" rows="10"></textarea>
            </div>
            <div class="form-group mb-2">
               <label for="post_tags">Post Tags</label>
               <input type="text" name="post_tags" class="form-control">
            </div>
            <div class="form-group mb-2">
               <label for="post_status">Post Status</label>
               <input type="text" name="post_status" class="form-control">
            </div>
            <div class="form-group mb-2">
               <input type="submit" name="create_post" value="Add post" class="btn btn-success w-25">
            </div>
         </form>
      </div>
   </div>
</div>