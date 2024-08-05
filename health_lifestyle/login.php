<?php include 'includes/connect.php'; ?>

<?php include 'includes/login_header.php'; ?>

   <!--::breadcrumb part start::-->
   <section class="breadcrumb breadcrumb_bg">
      <div class="container">
         <div class="row">
            <div class="col-lg-12">
               <div class="breadcrumb_iner">
                  <div class="breadcrumb_iner_item">
                     <h1>Login Form</h1>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!--::breadcrumb part start::-->

   <!--::header part start::-->
   <?php include 'includes/login_navbar.php'; ?>
   <!-- Header part end-->
   <!--================Blog Area =================-->
   <section class="blog_area single-post-area section_padding">
      <div class="container">
         <div class="row">
            <div class="col-md-8 mx-auto posts-list">
               <div class="card">
                  <div class="card-header">
                     <h3>Login</h3>
                  </div>
                  <div class="card-body">
                     <form action="includes/login_page.php" method="POST">
                        <div class="form-group">
                           <label for="">Username</label>
                           <input type="text" name="username" class="form-control" placeholder="Username">
                        </div>
                        <div class="form-group">
                           <label for="">Password</label>
                           <input type="password" name="password" class="form-control" placeholder="Password">
                        </div>
                        <button name="login" class="button rounded-0 primary-bg text-white w-100" type="submit">Login</button>
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
  <?php include 'includes/login_footer.php'; ?> 