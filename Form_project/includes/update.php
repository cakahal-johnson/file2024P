<div class="card">
   <!-- <div class="card-head">Edit Account</div> -->

   <div class="card-body">
      <form action="" method="POST">


         <!-- SELECT/FETCH EACH DATA WHILE LOOPING THROUGH  -->

         <?php 
         
            if(isset($_GET['edit'])){

               $get_user_id = $_GET['edit'];

               $query = "SELECT * FROM users WHERE user_id = $get_user_id";

               $select_user_id = mysqli_query($connection, $query);

               while($row = mysqli_fetch_assoc($select_user_id)){

                  $get_user_id = $row['user_id'];
                  $username = $row['username'];
                  $password = $row['password'];


                ?> 
               

                  <div class="form-group mb-3">
                     <label for="">Username</label>
                     <input value="<?php if(isset($username)){echo $username;} ?>" type="text" name="username" class="form-control mb-2">
                  </div>

                  <div class="form-group mb-3">
                     <label for="">Password</label>
                     <input value="<?php if(isset($password)){echo $password;} ?>" type="password" name="password" class="form-control mb-2">
                  </div>



               <?php }

            }

            ?>



            <!-- UPDATE USERNAME AND PASSWORD ACCORDING TO USER_ID -->

            <?php
            
               if(isset($_POST['update_account'])){

                  $username = $_POST['username'];
                  $password = $_POST['password'];

                  $query = "UPDATE users SET username='$username', password='$password' WHERE user_id=$get_user_id";

                  $update_query = mysqli_query($connection, $query);

                  if(!$update_query){

                     die("Query Failed: " . mysqli_error($connection));
                  }

               
               }
            
            ?>

         <input type="submit" name="update_account" value="Update Account" class="btn btn-primary">
      </form>
   </div>
</div>
      


