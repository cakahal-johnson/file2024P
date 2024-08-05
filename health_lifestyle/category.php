<?php include './includes/connect.php'; ?>

<?php include './includes/category_header.php'; ?>
    <!--::breadcrumb part start::-->
    <style>

      .blog_right_sidebar .tag_cloud_widget ul li a:hover {
        background: #95ddab;
        color: #fff;
      }
      a:hover, a :hover {
        color: #95ddab;
        text-decoration: none;
        -webkit-transition: 0.5s;
        transition: 0.5s;
      }
            
      .blog_details a:hover {
        color: #b2e6c2!important;
      }

      .menu_fixed ul li a:hover {
        color: #b2e6c2!important;
      }
      .main_menu ul li :hover {
        color: #b2e6c2 !important;
      }
      .breadcrumb_bg {
        background-image: url(img/food/Header-image.jpg);
        background-position: center center;
        background-repeat: no-repeat;
        background-size: cover;
      }

      .breadcrumb_iner_item {
        display: flex !important;
        flex-direction: column;
        justify-content: center;
        align-items: center;
      }

      .breadcrumb_iner_item img {
        width: 300px;
      }

      .breadcrumb:after {
        background: none !important;
      }

      .breadcrumb .breadcrumb_iner {
        height: 300px;
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
      }

      .main_menu {
        background-color: #6caa7f;
      }

      .button {
        display: inline-block;
        border: 1px solid transparent;
        font-size: 15px;
        font-weight: 500;
        padding: 12px 54px;
        border-radius: 4px;
        color: #fff;
        border: 1px solid #6caa7f;
        text-transform: uppercase;
        background-color: #6caa7f;
        cursor: pointer;
        -webkit-transition: 0.5s;
        transition: 0.5s;
      }

      .blog_item_date {
        background-color: #6caa7f !important;
      }
      h2 {
        font-size: 36px;
        line-height: 28px;
        color: #3e9458;
        font-weight: 500 !important;
      }

      .footer_area {
        /* background-image: url(../img/footer_bg.png); */

        background: #79b88c !important;
      }

      .footer_area .subscribe_part_text .subscribe_form .btn_1 {
        padding: 25px 35px;
        border-radius: 0 5px 5px 0;
        background-color: #6caa7f;
        cursor: pointer;
      }
    </style>
    <section class="breadcrumb breadcrumb_bg">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="breadcrumb_iner">
              <div class="breadcrumb_iner_item">
                <h1>Fruits</h1>
                <p>THE BLOG ABOUT PEOPLE WHO CARES ABOUT HEALTHY FOOD</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--::breadcrumb part start::-->

    <!--::header part start::-->

    <?php include './includes/category_navbar.php'; ?>

    <!-- Header part end-->

    <!--================Blog Area =================-->
    <section class="blog_area section_padding">
      <div class="container">
        <div class="row">

          <?php
          
          // Select posts based on category id
          
          if(isset($_GET['category'])){

            $post_category_id = $_GET['category'];
          }
          
          $query = "SELECT * FROM posts WHERE post_category_id = $post_category_id";
          
          $select_all_posts_query = mysqli_query($connection, $query);
          
          while($row = mysqli_fetch_assoc($select_all_posts_query)){

            $post_id = $row['post_id'];
            $post_image = $row['post_image'];
            $post_date = $row['post_date'];
            $post_title = $row['post_title'];
            $post_content = substr($row['post_content'], 0, 50);
            $post_category_id = $row['post_category_id'];


            ?>

            <div class="col-lg-6 mb-5 mb-lg-0">
              <div class="blog_left_sidebar">
                <article class="blog_item">
                  <div class="blog_item_img">
                    <img class="card-img rounded-0" src="./Admin/images/<?php echo $post_image; ?>" alt=""/>
                    <a href="#" class="blog_item_date">
                      <h3><?php echo $post_date; ?></h3>
                      <p></p>
                    </a>
                  </div>
  
                  <div class="blog_details">
                    <a class="d-inline-block" href="single-blog.php?posts_id=<?php echo $post_id; ?>">
                      <h2><?php echo $post_title; ?></h2>
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

          <?php }; ?>

          
        </div>
      </div>
    </section>
    <!--================Blog Area =================-->

    <!-- footer part start-->
<?php include './includes/category_footer.php'; ?>