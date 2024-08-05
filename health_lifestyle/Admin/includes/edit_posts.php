<div class="col-xl-6 w-75 mx-auto">

   <?php

   // Using the GET variable to get the post_id of the post
   
   if(isset($_GET['posts_id'])){

      $the_post_id = $_GET['posts_id']; 
   }

   $query = "SELECT * FROM posts WHERE post_id = $the_post_id";
   $select_posts_query_id = mysqli_query($connection, $query);

   while($row = mysqli_fetch_assoc($select_posts_query_id)){

      $post_id = $row['post_id'];
      $post_category_id = $row['post_category_id'];
      $post_image = $row['post_image'];
      $post_date = $row['post_date'];
      $post_title = $row['post_title'];
      $post_tags = $row['post_tags'];
      $post_content = $row['post_content'];
      $post_status = $row['post_status'];
   }

   // update & edit posts based on the post_id selected

   if(isset($_POST['update_post'])){

      $post_category_id = $_POST['post_category_id'];

      $post_image = $_FILES['post_image']['name'];
      $post_image_temp = $_FILES['post_image']['tmp_name'];

      $post_title = $_POST['post_title'];
      $post_content = $_POST['post_content'];
      $post_tags = $_POST['post_tags'];
      $post_status = $_POST['post_status'];

      move_uploaded_file($post_image_temp, "./images/$post_image");

      if(empty($post_image)){

         $query = "SELECT * FROM posts WHERE post_id = $the_post_id";

         $select_image_query = mysqli_query($connection, $query);

         while($row = mysqli_fetch_array($select_image_query)){

            $post_image = $row['post_image'];

         }

      }
       
      $query = "UPDATE posts SET post_category_id = '{$post_category_id}', post_image = '{$post_image}', ";
      $query .= "post_date=now(), post_title = '{$post_title}', post_content ='{$post_content}', ";
      $query .= "post_tags = '{$post_tags}', post_status = '{$post_status}' ";
      $query .= "WHERE post_id = '{$the_post_id}' ";

      $update_post_query = mysqli_query($connection, $query);

      if(!$update_post_query){

         die("Error: " . $query . "<br>" . mysqli_error($connection));
      }else{
         echo "<div class='alert alert-success alert-dismissible fade show'>
         <button type='button' class='btn-close' data-bs-dismiss='alert'></button>
         Post updated successfully. <a href='posts.php' class='alert-link'>View Posts</a>
         </div>";
      }


   }

   ?>

   <div class="card mb-4 shadow-sm">
      <div class="card-header bg-success text-white">
         Edit Posts
      </div>
      <div class="card-body">
         <form action="" method="POST" enctype="multipart/form-data">
            <div class="form-group mb-3">
               <label for="post_category_id">Post Category</label> <br>
               <select name="post_category_id" id="" class="mt-3 w-50 py-2 px-3">

                  <option value="">Select category</option>

                  <?php

                  // select categories from the database to relate as categories_id
                  
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
               <label for="post_image">Post Image</label> <br>
               <img width="100vw" src="./images/<?php echo $post_image; ?>" alt="" class="mb-3">
               <input type="file" name="post_image" class="form-control">
            </div>
            <div class="form-group mb-2">
               <label for="post_title">Post Title</label>
               <input value="<?php echo $post_title; ?>" type="text" name="post_title" class="form-control">
            </div>
            <div class="form-group mb-2">
               <label for="post_content">Post Content</label>
               <textarea name="post_content" class="form-control" id="body" cols="30" rows="10"><?php echo $post_content; ?>"</textarea>
            </div>
            <div class="form-group mb-2">
               <label for="post_tags">Post Tags</label>
               <input value="<?php echo $post_tags; ?>" type="text" name="post_tags" class="form-control">
            </div>
            <div class="form-group mb-2">
               <label for="post_status">Post Status</label> <br>
               <select name="post_status" id="" class="mt-3 w-25 py-2 px-3">
                  <option value="<?php echo $post_status; ?>"><?php echo $post_status; ?></option>

                  <?php 
                  
                  if($post_status == 'publish'){

                     echo "<option value='draft'>draft</option>";
                  }else{
                     
                     echo "<option value='publish'>publish</option>";
                  }
                  
                  
                  ?>

               </select>
               
            </div>
            <div class="form-group mb-2">
               <input type="submit" name="update_post" value="Update post" class="btn btn-success w-25">
            </div>
         </form>
      </div>
   </div>
</div>