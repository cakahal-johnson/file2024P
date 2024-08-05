<?php include 'includes/connect.php'; ?>

<?php include 'includes/headers.php'; ?>

    <!--::breadcrumb part start::-->
    <section class="breadcrumb breadcrumb_bg">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="breadcrumb_iner">
              <div class="breadcrumb_iner_item">
                <img src="img/food/Logo Healthy Lifestylers.png" alt="" />
                <p>THE BLOG ABOUT PEOPLE WHO CARES ABOUT HEALTHY FOOD</p>
              </div>
            </div> 
          </div>
        </div>
      </div>
    </section>
    <!--::breadcrumb part start::-->

    <!--::header part start::-->

    <?php include 'includes/navbar.php'; ?>

    <!-- Header part end-->

    <!--================Blog Area =================-->
    <section class="blog_area section_padding">
      <div class="container">
        <div class="row">

          <?php
          
          $query = "SELECT * FROM posts";
          $select_all_posts_query = mysqli_query($connection, $query);
          
          while($row = mysqli_fetch_assoc($select_all_posts_query)){

            $post_id = $row['post_id'];
            $post_image = $row['post_image'];
            $post_date = $row['post_date'];
            $post_title = $row['post_title'];
            $post_content = substr($row['post_content'], 0, 50);
            $post_category_id = $row['post_category_id'];
            $post_status = $row['post_status'];

            if($post_status == 'publish'){

            ?>

            <div class="col-lg-6 mb-5 mb-lg-0">
              <div class="blog_left_sidebar">
                <article class="blog_item">
                  <div class="blog_item_img">
                    <img class="card-img rounded-0" src="./Admin/images/<?php echo $post_image; ?>" alt=""/>
                    <a href="#" class="blog_item_date">
                      <h3> <?php echo $post_date; ?> </h3>
                      <p></p>
                    </a>
                  </div>
                  <div class="blog_details">
                    <a class="d-inline-block" href="single-blog.php?posts_id=<?php echo $post_id; ?>">
                      <h2> <?php echo $post_title; ?> </h2>
                    </a>
                    <p>
                      <?php echo $post_content; ?>
                    </p>
                    <ul class="blog-info-link">
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
                      
                    </ul>
                  </div>
                </article>
                
              </div>
            </div>


          <?php }} ?>



          <!-- <div class="col-lg-6 mb-5 mb-lg-0">
            <div class="blog_left_sidebar">
              <article class="blog_item">
                <div class="blog_item_img">
                  <img class="card-img rounded-0" src="img/food/Post 4.jpg" alt=""/>
                  <a href="#" class="blog_item_date">
                    <h3>20</h3>
                    <p>Jan</p>
                  </a>
                </div>

                <div class="blog_details">
                  <a class="d-inline-block" href="single-blog.php">
                    <h2>Strewberry Feista</h2>
                  </a>
                  <p>
                    That dominion stars lights dominion divide years for fourth
                    have don't stars is that he earth it first without heaven in
                    place seed it second morning saying.
                  </p>
                  <ul class="blog-info-link">
                    <li>
                      <a href="#"><i class="far fa-user"></i>FRUITS</a>
                    </li>
                    <li>
                      <a href="#"><i class="far fa-comments"></i> 03 Comments</a>
                    </li>
                  </ul>
                </div>
              </article>
            </div>
          </div> -->


          <!-- <div class="col-lg-6 mb-5 mb-lg-0">
            <div class="blog_left_sidebar">
              <article class="blog_item">
                <div class="blog_item_img">
                  <img class="card-img rounded-0" src="img/food/Post 5.jpg" alt=""/>
                  <a href="#" class="blog_item_date">
                    <h3>15</h3>
                    <p>Aug</p>
                  </a>
                </div>

                <div class="blog_details">
                  <a class="d-inline-block" href="single-blog.html">
                    <h2>Is Rice Salads really healthy for Breakfast</h2>
                  </a>
                  <p>
                    That dominion stars lights dominion divide years for fourth
                    have don't stars is that he earth it first without heaven in
                    place seed it second morning saying.
                  </p>
                  <ul class="blog-info-link">
                    <li>
                      <a href="#"><i class="far fa-user"></i>BREAKFAST</a>
                    </li>
                  </ul>
                </div>
              </article>
            </div>
          </div> -->


          <!-- <div class="col-lg-6 mb-5 mb-lg-0">
            <div class="blog_left_sidebar">
              <article class="blog_item">
                <div class="blog_item_img">
                  <img class="card-img rounded-0" src="img/food/Post 7.jpg" alt=""/>
                  <a href="#" class="blog_item_date">
                    <h3>15</h3>
                    <p>Jan</p>
                  </a>
                </div>

                <div class="blog_details">
                  <a class="d-inline-block" href="single-blog.html">
                    <h2>Can watermelons cure a headache</h2>
                  </a>
                  <p>
                    That dominion stars lights dominion divide years for fourth
                    have don't stars is that he earth it first without heaven in
                    place seed it second morning saying.
                  </p>
                  <ul class="blog-info-link">
                    <li>
                      <a href="#"><i class="far fa-user"></i> Travel, Lifestyle</a>
                    </li>
                    <li>
                      <a href="#"><i class="far fa-comments"></i> 03 Comments</a>
                    </li>
                  </ul>
                </div>
              </article>
            </div>
          </div> -->


          <!-- <div class="col-lg-6 mb-5 mb-lg-0">
            <div class="blog_left_sidebar">
              <article class="blog_item">
                <div class="blog_item_img">
                  <img class="card-img rounded-0" src="img/food/Post 7.jpg" alt=""/>
                  <a href="#" class="blog_item_date">
                    <h3>15</h3>
                    <p>Jan</p>
                  </a>
                </div>

                <div class="blog_details">
                  <a class="d-inline-block" href="single-blog.html">
                    <h2>Can watermelons cure a headache</h2>
                  </a>
                  <p>
                    That dominion stars lights dominion divide years for fourth
                    have don't stars is that he earth it first without heaven in
                    place seed it second morning saying.
                  </p>
                  <ul class="blog-info-link">
                    <li>
                      <a href="#"><i class="far fa-user"></i> Travel, Lifestyle</a>
                    </li>
                    <li>
                      <a href="#"><i class="far fa-comments"></i> 03 Comments</a>
                    </li>
                  </ul>
                </div>
              </article>
            </div>
          </div> -->


          <!-- <div class="col-lg-6 mb-5 mb-lg-0">
            <div class="blog_left_sidebar">
              <article class="blog_item">
                <div class="blog_item_img">
                  <img class="card-img rounded-0" src="img/food/Post 7.jpg" alt=""/>
                  <a href="#" class="blog_item_date">
                    <h3>15</h3>
                    <p>Jan</p>
                  </a>
                </div>

                <div class="blog_details">
                  <a class="d-inline-block" href="single-blog.html">
                    <h2>Can watermelons cure a headache</h2>
                  </a>
                  <p>
                    That dominion stars lights dominion divide years for fourth
                    have don't stars is that he earth it first without heaven in
                    place seed it second morning saying.
                  </p>
                  <ul class="blog-info-link">
                    <li>
                      <a href="#"><i class="far fa-user"></i> Travel, Lifestyle</a>
                    </li>
                    <li>
                      <a href="#"><i class="far fa-comments"></i> 03 Comments</a>
                    </li>
                  </ul>
                </div>
              </article>
            </div>
          </div> -->


          <!-- <div class="col-lg-6 mb-5 mb-lg-0">
            <div class="blog_left_sidebar">
              <article class="blog_item">
                <div class="blog_item_img">
                  <img class="card-img rounded-0" src="img/food/Post 7.jpg" alt=""/>
                  <a href="#" class="blog_item_date">
                    <h3>15</h3>
                    <p>Jan</p>
                  </a>
                </div>

                <div class="blog_details">
                  <a class="d-inline-block" href="single-blog.html">
                    <h2>Can watermelons cure a headache</h2>
                  </a>
                  <p>
                    That dominion stars lights dominion divide years for fourth
                    have don't stars is that he earth it first without heaven in
                    place seed it second morning saying.
                  </p>
                  <ul class="blog-info-link">
                    <li>
                      <a href="#"><i class="far fa-user"></i> Travel, Lifestyle</a>
                    </li>
                    <li>
                      <a href="#"><i class="far fa-comments"></i> 03 Comments</a>
                    </li>
                  </ul>
                </div>
              </article>
            </div>
          </div> -->


          <!-- <div class="col-lg-6 mb-5 mb-lg-0">
            <div class="blog_left_sidebar">
              <article class="blog_item">
                <div class="blog_item_img">
                  <img class="card-img rounded-0" src="img/food/Post 7.jpg" alt=""/>
                  <a href="#" class="blog_item_date">
                    <h3>15</h3>
                    <p>Jan</p>
                  </a>
                </div>

                <div class="blog_details">
                  <a class="d-inline-block" href="single-blog.html">
                    <h2>Can watermelons cure a headache</h2>
                  </a>
                  <p>
                    That dominion stars lights dominion divide years for fourth
                    have don't stars is that he earth it first without heaven in
                    place seed it second morning saying.
                  </p>
                  <ul class="blog-info-link">
                    <li>
                      <a href="#"><i class="far fa-user"></i> Travel, Lifestyle</a>
                    </li>
                    <li>
                      <a href="#"><i class="far fa-comments"></i> 03 Comments</a>
                    </li>
                  </ul>
                </div>
              </article>
            </div>
          </div> -->

          <!-- <div class="col-lg-4">
            <div class="blog_right_sidebar">
              <aside class="single_sidebar_widget search_widget">
                <form action="#">
                  <div class="form-group">
                    <div class="input-group mb-3">
                      <input type="text" class="form-control" placeholder="Search Keyword" onfocus="this.placeholder = ''"onblur="this.placeholder = 'Search Keyword'"/>
                      <div class="input-group-append">
                        <button class="btn" type="button">
                          <i class="ti-search"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                  <button class="button rounded-0 primary-bg text-white w-100" type="submit">
                    Search
                  </button>
                </form>
              </aside>

              <aside class="single_sidebar_widget post_category_widget">
                <h4 class="widget_title">Category</h4>
                <ul class="list cat-list">
                  <li>
                    <a href="#" class="d-flex">
                      <p>Resaurant food</p>
                      <p>(37)</p>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="d-flex">
                      <p>Breakfast</p>
                      <p>(10)</p>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="d-flex">
                      <p>Lunch</p>
                      <p>(03)</p>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="d-flex">
                      <p>Fruits</p>
                      <p>(11)</p>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="d-flex">
                      <p>Homemade</p>
                      <p>(21)</p>
                    </a>
                  </li>
                </ul>
              </aside>

          
              <aside class="single_sidebar_widget tag_cloud_widget">
                <h4 class="widget_title">Tag Clouds</h4>
                <ul class="list">
                  <li>
                    <a href="#">Health</a>
                  </li>
                  <li>
                    <a href="#">Fruit</a>
                  </li>
                  <li>
                    <a href="#">Vegetrian</a>
                  </li>
                  <li>
                    <a href="#">travel</a>
                  </li>
                  <li>
                    <a href="#">restaurant</a>
                  </li>
                </ul>
              </aside>

              

              <aside class="single_sidebar_widget newsletter_widget">
                <h4 class="widget_title">Newsletter</h4>

                <form action="#">
                  <div class="form-group">
                    <input type="email" class="form-control" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email'" placeholder="Enter email" required/>
                  </div>
                  <button
                    class="button rounded-0 primary-bg text-white w-100" type="submit">
                    Subscribe
                  </button>
                </form>
              </aside>
              <img src="img/food/Logo Healthy Lifestylers.png" alt="" />
            </div>
          </div> -->

        </div>
      </div>
    </section>
    <!--================Blog Area =================-->

<?php include 'includes/footer.php'; ?>
