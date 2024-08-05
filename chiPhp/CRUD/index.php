<?php require_once 'config.php'; ?>
<!-- The require_once statement is identical to require except PHP will check if the file has already been included, and if so, not include (require) it again.

See the include_once documentation for information about the _once behaviour, and how it differs from its non _once siblings. -->

<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
  <header>
    <!-- place navbar here -->
  </header>
  <main>
    <div>
        <!--  here we display the error messages -->
        <?php
              if(isset($_SESSION['$message'])) : ?>
        <div role="alert" class="alert bg-dark text-white alert-<?= $_SESSION['msg_type'] ?>">
                  <p><?= $_SESSION['message'] ;?></p>

            </div>
              <?php endif ?>
        
    </div>

    <div class="container justify-content-center">
        <!-- php function here for selecting the dates from the datebase -->
        <?php
           $mysqli = new mysqli('localhost', 'root', '', 'chidb') or die(mysqli_error($mysqli));

           $result = $mysqli->query("SELECT * FROM students") or die($mysqli->error);
        ?>

        <div class="row md-5 align-content-center">
            <legend class="bg-success md-5 p-2 text-white justify-content-center">Student Name and Location Entry</legend>

            <table class="table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Location</th>
                        <th colspan="2">Action</th>
                    </tr>
                </thead>

                <!-- fetching from the datebase -->
                <?php while($row = $result->fetch_assoc()) : ?>
                    <!-- Fetch the next row of a result set as an associative array
Fetches one row of data from the result set and returns it as an associative array. Each subsequent call to this function will return the next row within the result set, or null if there are no more rows. -->
                <tr>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['location']; ?></td>
                    
                    <td>
                        <a href="" class="btn btn-outline-info">Edit</a>
                        <a href="" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                <?php endwhile; ?>
            </table>

            <!-- here is the form pre_r function -->
            <?php
            function pre_r($array){
                echo '<pre>';
                print_r($array);
                echo '</pre>';
            }
            
            ?>

            <!-- here is to display the information of registered student -->
            <div class="row w-75 mt-5 justify-centent-center">
                <form action="config.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $id; ?>" id="">

                    <div class="md-3 justify-content-center">
                        <label for="" class="form-label">Name</label>
                        <input type="text" name="name" value="<?php echo $name; ?>" id="" class="form-control" placeholder="Enter Name">
                    </div>

                    <div class="md-3 justify-content-center">
                        <label for="" class="form-label">Location</label>
                        <input type="text" name="location" value="<?php echo $location; ?>" id="" class="form-control" placeholder="Enter Name">
                    </div>

                    <div class="md-3 form-group">
                        <button type="submit" class="btn justify-centent-center mt-3 btn-primary" name="save">Register</button>
                    </div>
                </form>
            </div>
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