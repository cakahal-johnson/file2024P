<?php include 'includes/connect.php'; ?>

<?php include 'includes/helpers.php'; ?>

<?php include 'includes/header.php'; ?>





    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4> Create Account </h4>    
                    </div>
                    <div class="card-body">
                        <form action="" method="POST">
                            <div class="form-group mb-2">
                                <label for="username">Username</label>
                                <input type="text" name="username" class="form-control">
                            </div>
                            <div class="form-group mb-2">
                                <label for="password">password</label>
                                <input type="password" name="password" class="form-control">
                            </div>

                            <button type="submit" name="submit" value="Create Account" class="btn btn-primary mt-2"> Create Account</button>
                        </form>
                    </div>
                </div>
            </div>    
        
    
            <div class="col-md-6">
                <?php 
                    if (isset($_POST['update_account'])){
                        $username = $_POST['username'];
                        $password = $_POST['password'];
                        $id = $_POST['user_id'];

                        $query = "UPDATE users SET username = '$username', password = '$password' WHERE user_id = $id ";

                        $resultQuery = mysqli_query($connection, $query);

                        if(!$resultQuery){
                            die("Query failed " . mysqli_error($connection));
                        }

                    }

                    if (isset($_POST['delete_account'])){
                        // $username = $_POST['username'];
                        // $password = $_POST['password'];
                        $id = $_POST['user_id'];

                        $query = "DELETE FROM users WHERE user_id = $id ";

                        $resultQuery = mysqli_query($connection, $query);

                        if(!$resultQuery){
                            die("Query failed " . mysqli_error($connection));
                        }

                    }

                    
                
                
                ?>



                <div class="card">
                    <div class="card-header">
                        <h4> Update Table </h4>
                    </div>
                    <div class=" card-body">
                        <form action="index.php" method="POST">
                            <div class="form-group mb-2>
                                <label for="username">Username</label>
                                <input type="text" name="username" class="form-control">
                            </div>

                            <div.class="form-group mb-2>
                                <label for="password">password</label>
                                <input type="text" name="password" class="form-control">
                            </div>

                            <div class="form-group m-3">
                                <select name="user_id" id="">
                                    <?php 

                                        $query = "SELECT * FROM users";

                                        $select_id = mysqli_query($connection, $query);

                                        while($row = mysqli_fetch_assoc($select_id)){

                                            $id = $row['user_id'];

                                            echo "<option value='$id'>$id</option>";
                                        }

                                        
                                    
                                    
                                    
                                    ?>


                                    <!-- <option value="">1</option> -->
                                </select>
                            </div>

                            <button type="submit" name="update_account" value="Update Account" class="btn btn-primary mt-1"> Update Account </button>

                            <button type="submit" name="delete_account" value="Delete Account" class="btn btn-primary mt-1"> Delete Account </button>

                        </form>
                    </div>
                </div>
            </div>

                <!-- THE TABLE SECTION -->
            <div class="col-md-6 mt-4">
                <?php 
                        $query = "SELECT * FROM users";

                        $fetch_users = mysqli_query($connection, $query);

                    
                ?>

                <div class="card">
                        <div class="card-header">
                            <h4> DATA TABLE </h4>    
                        </div>
                        <div class="card-body">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Username</th>
                                        <th>Password</th>
                                        <!-- <th>Action</th> -->
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php

                                    while($row = mysqli_fetch_assoc($fetch_users)){

                                        $id = $row['user_id'];
                                        $username = $row['username'];
                                        $password = $row['password'];

                                        echo "<tr>
                                            <td>{$id}</td>
                                            <td>$username</td>
                                            <td>$password</td>
                                        </tr>";
                                    }
                                    ?>
                                        
                                </tbody>
                            </table>
                        </div>
                </div>
            </div>
        </div>    
    </div>


<?php include 'includes/footer.php'; ?>
