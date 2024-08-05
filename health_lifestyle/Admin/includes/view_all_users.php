<div class="card">
   <div class="card-header bg-success text-white">
      <i class="fas fa-table me-1"></i>
      Users Table
   </div>
   <div class="card-body">
      <table class="table table-bordered table-striped text-center">
         <thead>
            <tr>
               <th>User ID</th>
               <th>Username</th>
               <th>First name</th>
               <th>Last name</th>
               <th>Email</th>
               <th>Role</th>
               <!-- <th>Date</th> -->
            </tr>
         </thead>
         <tbody>

            <?php
            
            // select data from the post database
            
            $query = "SELECT * FROM users";
            $select_users_query = mysqli_query($connection, $query);
            
            while($row = mysqli_fetch_assoc($select_users_query)){

               $user_id = $row['user_id'];
               $username = $row['username'];
               $user_password = $row['user_password'];
               $user_firstname = $row['user_firstname'];
               $user_lastname = $row['user_lastname'];
               $user_email = $row['user_email'];
               // $user_image = $row['user_image'];
               $user_role = $row['user_role'];

               echo "<tr>";
               echo "<td>$user_id</td>";
               echo "<td>$username</td>";

               // $query = "SELECT * FROM categories WHERE cat_id = {$post_category_id}";
               // $select_category_id = mysqli_query($connection, $query);

               // while($row = mysqli_fetch_assoc($select_category_id)){

               //    $cat_id = $row['cat_id'];
               //    $cat_title = $row['cat_title'];

               //    echo "<td>$cat_title</td>";
               // }

               
               // echo "<td><img width='50vw' src='../Admin/images/$post_image' alt='image'></td>";
               echo "<td>$user_firstname</td>";
               echo "<td>$user_lastname</td>";
               echo "<td>$user_email</td>";
               echo "<td>$user_role</td>";
               echo "<td>
               <a href='users.php?admin_role=$user_id' class='text-decoration-none'>Admin</a> 
               </td>";
               echo "<td>
               <a href='users.php?subscriber_role=$user_id' class='text-decoration-none'>Subscriber</a>
               </td>";
               echo "<td>
               <a href='users.php?source=edit_user&users_id=$user_id' class='text-decoration-none'>Edit</a>
               </td>";
               echo "<td>
               <a href='users.php?delete=$user_id' class='text-decoration-none'>Delete</a>
               </td>";
               echo "</tr>";
            }
            
            ?>

         </tbody>
      </table>



      <?php
      
      // Change to admin role for users
      
      if(isset($_GET['admin_role'])){

         $the_user_id = $_GET['admin_role'];

         $query = "UPDATE users SET user_role = 'admin' WHERE user_id = $the_user_id";

         $admin_role_query = mysqli_query($connection, $query);

         header("Location: users.php");
      }
      
      ?>



      <?php
      
      // change to subscriber role for users
      
      if(isset($_GET['subscriber_role'])){

         $the_user_id = $_GET['subscriber_role'];

         $query = "UPDATE users SET user_role = 'subscriber' WHERE user_id = $the_user_id";

         $subscriber_role_query = mysqli_query($connection, $query);

         header("Location: users.php");
      }
      
      ?>




      <?php 
      
      if(isset($_GET['delete'])){

         $the_user_id = $_GET['delete'];

         $query = "DELETE FROM users WHERE user_id = $the_user_id";

         $delete_user_query = mysqli_query($connection, $query);

         if(!$delete_user_query){

            die("Error: ". $query . "<br>" . mysqli_error($connection));
         }

         header("Location: users.php");

      }          
      
      
      
      ?>


      
   </div>
</div>