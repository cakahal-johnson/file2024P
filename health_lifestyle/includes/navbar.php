   <header class="header_area">
      <div class="main_menu">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <nav class="navbar navbar-expand-lg navbar-light">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <i class="ti-menu"></i>
                </button>

                <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                  <ul class="navbar-nav">
                    <li class="nav-item active">
                      <a class="nav-link" href="index.php">HOME</a>
                    </li>
                  
                    <?php 
                           
                    //  $query = "SELECT * FROM categories";
                     
                    //  $select_categories_query = mysqli_query($connection, $query);

                    //  while($row = mysqli_fetch_assoc($select_categories_query)){

                    //     $cat_title = $row['cat_title'];

                    //     echo "<li class='nav-item'><a href='' class='nav-link'>$cat_title</a></li>";
                    //  }
                     
                     
                    ?>

                    <li class="nav-item">
                      <a href="#" class="nav-link active">BREAKFAST</a>
                    </li>
                    <li class="nav-item">
                      <a href="about.php" class="nav-link">ABOUT</a>
                    </li>
                    <li class="nav-item">
                      <a href="admin" class="nav-link">ADMIN</a>
                    </li>
                    <li class="nav-item">
                      <a href="login.php" class="nav-link">LOGIN</a>
                    </li>
                    <li class="nav-item">
                      <a href="register.php" class="nav-link">REGISTER</a>
                    </li>
                  </ul>
                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>
   </header>