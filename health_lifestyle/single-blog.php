<?php include './includes/connect.php'; ?>

<?php include './includes/single-blog_header.php'; ?>
    <!--::breadcrumb part start::-->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner">
                        <div class="breadcrumb_iner_item">
                            <h1>blog details</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--::breadcrumb part start::-->

    <!--::header part start::-->

    <?php include './includes/single-blog_navbar.php'; ?>

    <!-- Header part end-->
      <!--================Blog Area =================-->
      <section class="blog_area single-post-area section_padding">
         <div class="container">
            <div class="row">
               <div class="col-lg-8 posts-list">

                  <?php
                  
                  if(isset($_GET['posts_id'])){

                     $the_post_id = $_GET['posts_id'];
                  }
            
                  $query = "SELECT * FROM posts WHERE post_id = $the_post_id";
                  $select_all_posts_query = mysqli_query($connection, $query);
                  
                  while($row = mysqli_fetch_assoc($select_all_posts_query)){

                     $post_image = $row['post_image'];
                     $post_date = $row['post_date'];
                     $post_title = $row['post_title'];
                     $post_content = $row['post_content'];
                     $post_category_id = $row['post_category_id'];

                     ?>

                     <div class="single-post">
                        <div class="feature-img">
                           <img class="img-fluid" src="./Admin/images/<?php echo $post_image; ?>" alt="">
                        </div>
                        <div class="blog_details">
                           <h2> <?php echo $post_title; ?> </h2>
                           <ul class="blog-info-link mt-3 mb-4">
                              <li>
                                 <a href="#">
                                    <i class="far fa-user"></i>

                                    <?php 

                                    $query = "SELECT * FROM categories WHERE cat_id = {$post_category_id}";
                                    $select_category_id = mysqli_query($connection, $query);

                                    while($row = mysqli_fetch_assoc($select_category_id)){

                                       $cat_id = $row['cat_id'];
                                       $cat_title = $row['cat_title'];

                                       echo "<td>$cat_title</td>";
                                    }

                                    ?>
                                 </a>
                              </li>
                              <li><a href="#"><i class="far fa-comments"></i>         <?php echo $post_date; ?>        
                              </a></li>
                           </ul>
                           <p class="excert">
                              <?php echo $post_content; ?>
                           </p>
                           <!-- <p>
                              Why cucumber avocado salad?
                              This is the perfect quick and easy salad to throw together when you’re hungry but you don’t want to cook anything. The crisp cucumbers are crunchy and refreshing and the avocados add heft and creaminess. You might not think of salads as satisfying, but this one definitely is.
                           </p> -->
                           <!-- <p>Prep Time:10 mins; Cook Time:2 mins;Total Time:12 mins</p> -->
                           <!-- <div class="preparation">
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
                           </div><br> -->
                           <!-- <div class="nutrition-fact">
                              <img src="img/food/nu_facts.png" style="height: 400px;"/>
                           </div> -->
                        </div>
                     </div>


                  <?php }; ?>   

               </div>

               

               <div class="col-lg-4">
                  <div class="blog_right_sidebar">
                     <aside class="single_sidebar_widget search_widget">
                        <form action="search.php" method="POST">
                           <div class="form-group">
                              <div class="input-group mb-3">
                                 <input name="search" type="text" class="form-control" placeholder = 'Search Keyword' onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search Keyword'">
                                 <div class="input-group-append">
                                    <button class="btn" type="button"><i class="ti-search"></i></button>
                                 </div>
                              </div>
                           </div>
                           <button name="submit" class="button rounded-0 primary-bg text-white w-100" type="submit">
                              Search
                           </button>
                        </form>
                     </aside>

                     <aside class="single_sidebar_widget post_category_widget">
                        <h4 class="widget_title">Category</h4>

                        <?php
                        
                        // select categories from the database
                           
                        $query = "SELECT * FROM categories";
                        
                        $select_categories_sidebar = mysqli_query($connection, $query);
 
                        ?>

                        <ul class="list cat-list">

                           <?php 
                           
                           while($row = mysqli_fetch_assoc($select_categories_sidebar)){

                              $cat_title = $row['cat_title'];
                              $cat_id = $row['cat_id'];
                              
                              ?>

                              <li>
                                 <a href="category.php?category=<?php echo $cat_id; ?>" class="d-flex">
                                    <p><?php echo $cat_title; ?></p>
                                    <p></p>
                                 </a>
                              </li>

                           <?php }; ?>

                           <!-- <li>
                              <a href="#" class="d-flex">
                                 <p></p>
                                 <p>(10)</p>
                              </a>
                           </li> -->
                           <!-- <li>
                              <a href="#" class="d-flex">
                                 <p></p>
                                 <p>(03)</p>
                              </a>
                           </li> -->
                           <!-- <li>
                              <a href="#" class="d-flex">
                                 <p></p>
                                 <p>(11)</p>
                              </a>
                           </li> -->

                        </ul>
                     </aside>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--================Blog Area end =================-->
  
  <!-- footer part start-->
 <?php include './includes/single-blog_footer.php'; ?>



