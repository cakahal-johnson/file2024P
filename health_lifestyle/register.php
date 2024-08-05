<?php include 'includes/connect.php'; ?>

<?php include 'includes/register_header.php'; ?>

   <!--::breadcrumb part start::-->
   <section class="breadcrumb breadcrumb_bg">
      <div class="container">
         <div class="row">
            <div class="col-lg-12">
               <div class="breadcrumb_iner">
                  <div class="breadcrumb_iner_item">
                     <h1>Registration Form</h1> 
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!--::breadcrumb part start::-->

   <!--::header part start::-->
   <?php include 'includes/register_navbar.php'; ?>
   <!-- Header part end-->
   <!--================Blog Area =================-->
   <section class="blog_area single-post-area section_padding">
      <div class="container">
         <div class="row">
            <div class="col-md-8 mx-auto posts-list">

               <?php 
               
               if(isset($_POST['register'])){

                  $user_firstname = $_POST['user_firstname'];
                  $user_lastname = $_POST['user_lastname'];
                  $username = $_POST['username'];
                  $email = $_POST['user_email'];
                  $password = $_POST['user_password'];

                  if($user_firstname == "" or empty($user_firstname) or $user_lastname == "" or empty($user_lastname) or $username == "" or empty($username) or $password == "" or empty($password) or $email == "" or empty($email)){
                     echo "<div class='alert alert-danger'>
                     Please fill the required fields.
                     </div>";
                  }else{

                     $username = mysqli_real_escape_string($connection, $username);
                     $email = mysqli_real_escape_string($connection, $email);
                     $password = mysqli_real_escape_string($connection, $password);

                     $query = "SELECT randSalt FROM users";
                     $select_randsalt_query = mysqli_query($connection, $query);

                     if(!$select_randsalt_query){

                        die("Error: " . mysqli_error($connection));
                     }

                     $row = mysqli_fetch_array($select_randsalt_query);

                     $salt = $row['randSalt'];

                     $query = "INSERT INTO users (user_firstname, user_lastname, username, user_email, user_password, user_role) ";
                     $query .= "VALUES ('{$user_firstname}', '{$user_lastname}', '{$username}', '{$email}', '{$password}', 'subscriber' )";

                     $register_user_query = mysqli_query($connection, $query);

                     if(!$register_user_query){

                        die("Error: " . mysqli_error($connection) . " " . mysqli_errno($connection));
                     }else{
                        
                        echo "<div class='alert alert-success'>
                        Registration submitted successfully
                        </div>";
                     }

                     

                  }
                  
               }
               
               ?>



               <div class="card">
                  <div class="card-header">
                     <h3>Register</h3>
                  </div>
                  <div class="card-body">
                     <form action="register.php" method="POST" id="" autocomplete="off">
                        <div class="form-group">
                           <label for="">First name</label>
                           <input type="text" name="user_firstname" class="form-control" placeholder="John">
                        </div>
                        <div class="form-group">
                           <label for="">Last name</label>
                           <input type="text" name="user_lastname" class="form-control" placeholder="Doe">
                        </div>
                        <div class="form-group">
                           <label for="">Username</label>
                           <input type="text" name="username" class="form-control" placeholder="Username">
                        </div>
                        <div class="form-group">
                           <label for="">Email</label>
                           <input type="email" name="user_email" class="form-control" placeholder="somebody@example.com">
                        </div>
                        <div class="form-group">
                           <label for="">Password</label>
                           <input type="password" name="user_password" class="form-control" placeholder="Password">
                        </div>
                        <button name="register" class="button rounded-0 primary-bg text-white w-100" type="submit">Register</button>
                     </form>
                  </div>
               </div>
               <!-- <div class="single-post">
                  <div class="feature-img">
                     <img class="img-fluid" src="img/food/pexels-furkan-tumer-7364359.webp" alt="">
                  </div>
                  <div class="blog_details">
                     <h2>Chinese Cucumber Avocado Salad
                     </h2>
                     <ul class="blog-info-link mt-3 mb-4">
                        <li><a href="#"><i class="far fa-user"></i>FRUITS</a></li>
                        <li><a href="#"><i class="far fa-comments"></i>                 August 2, 2020 
                        </a></li>
                     </ul>
                     <p class="excert">
                        I LOVE cucumbers. They’re crunchy, almost sweet, juicy, and so refreshing. Especially when they’re fridge-cold and coated in an addictive sesame-soy dressing. Cucumbers are the ideal hot-weather food and Chinese smashed cucumber salad is the epitome of the whole cool-as-a-cucumber saying. Smashed cucumber salad is one of the most popular cold dishes in China and really, it’s no surprise because it’s great on its own or at the table alongside pretty much any Chinese dish.
                     </p>
                     <p>
                        Why cucumber avocado salad?
                        This is the perfect quick and easy salad to throw together when you’re hungry but you don’t want to cook anything. The crisp cucumbers are crunchy and refreshing and the avocados add heft and creaminess. You might not think of salads as satisfying, but this one definitely is.
                     </p>
                     <p>Prep Time:10 mins; Cook Time:2 mins;Total Time:12 mins</p>
                     <div class="preparation">
                        <div class="ingredients">
                           <h3>Ingredients</h3>
                           <ul>
                              <li>1 clove garlic minced</li>
                              <li>2 tsp black Chinese vinegar or rice vinegar</li>
                              <li>2 tsp soy sauce</li>
                              <li>1 tsp toasted sesame oil</li>
                              <li>1 tsp chili oil optional</li>
                              <li>1 avocado sliced</li>
                              <li>1/2 English cucumber sliced</li>
                              <li>2 tbsp red onion thinly sliced or finely diced</li>
                              <li>fresh cilantro chopped</li>
                              <li>toasted sesame seeds</li>
                           </ul>
                        </div><br>
                        <div class="instructions">
                           <h3>Instructions</h3>
                           <ul>
                              <li>In a small bowl, whisk together the garlic, vinegar, soy sauce, sesame oil, and chili oil (if using). Taste and season with a pinch of salt if needed.</li>
                              <li>Prep the vegetables: Pit, peel, and slice the avocado; cut the cucumber; slice the red onion; and chop the cilantro.</li>
                              <li>Toss the cucumbers, avocado, red onion, and cilantro in a bowl with the dressing. Finish with toasted sesame seeds, if desired and enjoy!</li>
                           </ul>
                        </div>
                     </div><br>
                     <div class="nutrition-fact">
                           <img src="img/food/nu_facts.png" style="height: 400px;"/>
                     </div>
                  </div>
               </div> -->
            </div>

            <!-- <div class="col-lg-4">
               <div class="blog_right_sidebar">
                  <aside class="single_sidebar_widget search_widget">
                     <form action="#">
                        <div class="form-group">
                           <div class="input-group mb-3">
                              <input type="text" class="form-control" placeholder = 'Search Keyword' onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search Keyword'">
                              <div class="input-group-append">
                                 <button class="btn" type="button"><i class="ti-search"></i></button>
                              </div>
                           </div>
                        </div>
                        <button class="button rounded-0 primary-bg text-white w-100" type="submit">Search</button>
                     </form>
                  </aside>

                  <aside class="single_sidebar_widget post_category_widget">
                     <h4 class="widget_title">Category</h4>
                     <ul class="list cat-list">
                        <li>
                           <a href="#" class="d-flex">
                              <p>BREAKFAST</p>
                              <p>(37)</p>
                           </a>
                        </li>
                        <li>
                           <a href="#" class="d-flex">
                              <p>LUNCH</p>
                              <p>(10)</p>
                           </a>
                        </li>
                        <li>
                           <a href="#" class="d-flex">
                              <p>FRUITS</p>
                              <p>(03)</p>
                           </a>
                        </li>
                        <li>
                           <a href="#" class="d-flex">
                              <p>HOMEMADE</p>
                              <p>(11)</p>
                           </a>
                        </li>
                     </ul>
                  </aside>
               </div>
            </div> -->
         </div>
      </div>
   </section>
   <!--================Blog Area end =================-->
  
  <!-- footer part start-->
  <?php include 'includes/register_footer.php'; ?> 
  