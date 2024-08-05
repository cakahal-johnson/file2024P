<?php require_once 'process.php'; ?>

<?php //session_start() ?>

<!doctype html>
<html lang="en">

<head>
  <title>Php|Crud</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body >
    
    
    
    <header>
        <!-- place navbar here -->
    </header>
    <main >
        <!-- after this open your php admin -->
        
    
    <div class="mb-2">
        <!-- here we pass the session message -->
            <?php

                if (isset($_SESSION['message'])): ?>
        
                    <!-- where the message will display -->
                    <div role="alert" class="alert bg-dark text-white alert-<?= $_SESSION['msg_type'] ?>">
        
                            
                               <p>
                               <?= 
                                $_SESSION['message'];

                                // unset($_SESSION['message']); 
                               ?>
                               </p> 
                        
                    </div>
                    
                <?php endif ?>


            
        </div>

        <div>
        <?php 
                // session_start();
                // if(isset($_SESSION['message'])){
                //     ?>
                <!-- // <div class="alert alert-info text-center" style="margin-top:20px;">
                //     <?php //echo $_SESSION['message']; ?>
                // </div> -->
                     <?php
 
                //     unset($_SESSION['message']);
                // }

                // if (isset($_SESSION['message'])) {
                //    echo $_SESSION['message'];
                //       die;
                // }
                // unset($_SESSION['message']);
            ?>
        </div>
    
    

<div class="container justify-content-center">    
    <!-- here we select from the database -->
    <?php 
    $mysqli = new mysqli('localhost', 'root', '', 'crud') or die(mysqli_error($mysqli));
    $result = $mysqli->query("SELECT * FROM data") or die($mysqli->error);
    ?>

    <div class="row md-5  align-content-center">
        <legend class="bg-success md-5 p-2 text-white justify-content-center">Student PHP & Myquli Crud </legend>


        
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Location</th>
                    <th colspan="2">Action</th>
                </tr>
            </thead>

            <?php
                while($row = $result->fetch_assoc()) : ?>
                    <tr>
                        <td><?php echo $row['name']; ?> </td>
                        <td><?php echo $row['location']; ?> </td>
                        <td>
                            <a href="index.php?edit=<?php echo $row['id']; ?>" class="btn btn-info">
                                Edit
                            </a>
                            <a href="index.php?delete=<?php echo $row['id']; ?>" class="btn btn-danger">
                                Delete
                            </a>
                        </td>
                    </tr>
                <?php endwhile; ?>    
        </table>
    </div>

    <?php

    // here is form the pre_r function
    function pre_r($array){
        echo '<pre>'; 
        print_r($array);
        echo '</pre>';
    }
    ?>

    


    <div class="row w-75 mt-5 justify-content-center">

        <form action="./process.php" method="POST">

            <input type="hidden" name="id" value="<?php echo $id; ?>">

            <div class="md-3 justify-content-center">
                <label for="" class="form-label">Name</label>
                <input type="text" name="name" id="" value="<?php echo $name; ?>" class="form-control" placeholder="Enter your name">
                <!-- <small id="helpId" class="text-muted">Help text</small> -->
            </div>

            <div class="md-3 justify-content-center">
                <label for="" class="form-label">Location</label>
                <input type="text" name="location" id="" value="<?php echo $location; ?>" class="form-control" placeholder="Enter your location">
                <!-- <small id="helpId" class="text-muted">Help text</small> -->
            </div> 
            
            <div class="md-3 form-group ">
                <?php
                    if ($update == true):
                ?>
                    <button type="submit" class="btn justify-content-center mt-3 btn-info" name="update">Update</button>
                <?php else: ?>
                    <button type="submit" class="btn justify-content-center mt-3 btn-primary" name="save">Save</button>
                <?php endif; ?>    

            </div>

        </form>
    </div>    
</div>
  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>