<div class="card">
   <div class="card-header bg-success text-white">
      <i class="fas fa-table me-1"></i>
      Posts Table
   </div>
   <div class="card-body">
      <table class="table table-bordered table-striped text-center">
         <thead>
            <tr>
               <th>Post ID</th>
               <th>Category ID</th>
               <th>Post Image</th>
               <th>Post Date</th>
               <th>Post Title</th>
               <th>Post Tags</th>
               <th>Post Status</th>
            </tr>
         </thead>
         <tbody>

            <?php
            
            // select data from the post database
            
            $query = "SELECT * FROM posts";
            $select_posts_query = mysqli_query($connection, $query);
            
            while($row = mysqli_fetch_assoc($select_posts_query)){

               $post_id = $row['post_id'];
               $post_category_id = $row['post_category_id'];
               $post_image = $row['post_image'];
               $post_date = $row['post_date'];
               $post_title = $row['post_title'];
               $post_tags = $row['post_tags'];
               $post_status = $row['post_status'];

               echo "<tr>";
               echo "<td>$post_id</td>";


               $query = "SELECT * FROM categories WHERE cat_id = {$post_category_id}";
               $select_category_id = mysqli_query($connection, $query);

               while($row = mysqli_fetch_assoc($select_category_id)){

                  $cat_id = $row['cat_id'];
                  $cat_title = $row['cat_title'];

                  echo "<td>$cat_title</td>";
               }

               
               echo "<td><img width='50vw' src='../Admin/images/$post_image' alt='image'></td>";
               echo "<td>$post_date</td>";
               echo "<td>$post_title</td>";
               echo "<td>$post_tags</td>";
               echo "<td>$post_status</td>";
               echo "<td>
               <a href='posts.php?source=edit_post&posts_id=$post_id' class='text-decoration-none'>Edit</a>
               </td>";
               echo "<td>
               <a href='posts.php?delete=$post_id' class='text-decoration-none'>Delete</a>
               </td>";
               echo "</tr>";
            }
            
            ?>

         </tbody>
      </table>


      <?php 
      
      if(isset($_GET['delete'])){

         $the_post_id = $_GET['delete'];

         $query = "DELETE FROM posts WHERE post_id = $the_post_id";

         $delete_post_query = mysqli_query($connection, $query);

         if(!$delete_post_query){

            die("Error: ". $query . "<br>" . mysqli_error($connection));
         }

         header("Location: posts.php");

      }          
      
      
      
      ?>


      
   </div>
</div>