<?php include '../Admin/includes/admin_header.php'; ?>


		<!-- Navigation -->
		<?php include './includes/admin_navigationbar.php'; ?>

        	<div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                
               <?php include './includes/admin_sidebar.php'; ?>

            </div>

            <div id="layoutSidenav_content">
               <main>
                    
                  <div class="container-fluid px-4">
							<h1 class="mt-4">
								Welcome To Admin
								<small class="text-muted"><?php echo $_SESSION['username']; ?></small>
							</h1>
							<ol class="breadcrumb mb-4">
								<li class="breadcrumb-item active">Dashboard</li>
							</ol>
                     <hr>
							<div class="row">
								<div class="col-xl-4">
									<div class="card bg-primary text-white mb-4">
										<div class="card-body d-flex justify-content-between align-items-center">
											<i class="fa fa-file-text fa-3x"></i>
											<div class="lh-1">

												<?php 
												
												$query = "SELECT * FROM posts";

												$select_all_post = mysqli_query($connection, $query);

												$post_counts = mysqli_num_rows($select_all_post); 
												
												echo "<p class='h1'>{$post_counts}</p> ";
												
												?>
												<span>Posts</span> 

											</div>
										</div>
										<div class="card-footer d-flex align-items-center justify-content-between">
											<a class="small text-white stretched-link" href="./posts.php">View Details</a>
											<div class="small text-white"><i class="fas fa-angle-right"></i></div>
										</div>
									</div>
								</div>


								<div class="col-xl-4">
									<div class="card bg-warning text-white mb-4">
										<div class="card-body d-flex justify-content-between align-items-center">
											<i class="fa-solid fa-user fa-3x"></i>
											<div class="lh-1">

												<?php 
												
												$query = "SELECT * FROM users";

												$select_all_user = mysqli_query($connection, $query);

												$user_counts = mysqli_num_rows($select_all_user); 
												
												echo "<p class='h1'>{$user_counts}</p> ";
												
												?>

												<span>Users</span>

											</div>
										</div>
										<div class="card-footer d-flex align-items-center justify-content-between">
											<a class="small text-white stretched-link" href="users.php">View Details</a>
											<div class="small text-white"><i class="fas fa-angle-right"></i></div>
										</div>
									</div>
								</div>


								<div class="col-xl-4">
									<div class="card bg-success text-white mb-4">
										<div class="card-body d-flex justify-content-between align-items-center">
											<i class="fa-sharp fa-solid fa-list fa-3x"></i>
											<div class="lh-1">

												<?php 
												
												$query = "SELECT * FROM categories";

												$select_all_categories = mysqli_query($connection, $query);
												
												$category_counts = mysqli_num_rows($select_all_categories); 
												
												echo "<p class='h1'>{$category_counts}</p> ";
												
												?>

												<span>Categories</span>

											</div>
										</div>
										<div class="card-footer d-flex align-items-center justify-content-between">
												<a class="small text-white stretched-link" href="categories.php">View Details</a>
												<div class="small text-white"><i class="fas fa-angle-right"></i></div>
										</div>
									</div>
								</div>


								<!-- <div class="col-xl-3 col-md-6">
									<div class="card bg-danger text-white mb-4">
										<div class="card-body">Danger Card</div>
										<div class="card-footer d-flex align-items-center justify-content-between">
												<a class="small text-white stretched-link" href="#">View Details</a>
												<div class="small text-white"><i class="fas fa-angle-right"></i></div>
										</div>
									</div>
								</div> -->

							</div>



							<?php
							
							// Display data on the bar chart 

							$query = "SELECT * FROM posts WHERE post_status = 'publish' ";
							$publish_post_query = mysqli_query($connection, $query);
							$publish_post_counts = mysqli_num_rows($publish_post_query); 
							
							$query = "SELECT * FROM posts WHERE post_status = 'draft' ";
							$select_all_draft_post = mysqli_query($connection, $query);
							$post_draft_counts = mysqli_num_rows($select_all_draft_post); 
							
							$query = "SELECT * FROM users WHERE user_role = 'subscriber' ";
							$subscriber_query = mysqli_query($connection, $query);
							$subscriber_counts = mysqli_num_rows($subscriber_query);

							$query = "SELECT * FROM users WHERE user_role = 'admin' ";
							$admin_query = mysqli_query($connection, $query);
							$admin_counts = mysqli_num_rows($admin_query);
							
							?>


							<div class="row">
								<script type="text/javascript">
									google.charts.load('current', {'packages':['bar']});
									google.charts.setOnLoadCallback(drawChart);

									function drawChart() {

										var data = google.visualization.arrayToDataTable([
											
											['Data', 'Counts'],

											<?php 
											
											$element_text = ['Active Posts', 'Published Posts', 'Draft Posts', 'Users', 'Subscribers', 'Admin', 'Categories'];
											$element_count = [$post_counts, $publish_post_counts, $post_draft_counts, $user_counts, $subscriber_counts, $admin_counts, $category_counts];
											
											for($i = 0; $i < 7; $i++){

												echo "['{$element_text[$i]}'" . " ," . "{$element_count[$i]}],";
											}
											
											?>

											// ['Posts', 1000],
												
										]);

										var options = {
											chart: {
												title: '',
												subtitle: '',
											}
										};

										var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

										chart.draw(data, google.charts.Bar.convertOptions(options));
									}
								</script>

								<div class="col-xl-12">
									<div class="card mb-4">
										<div class="card-header bg-success text-white">
											<i class="fas fa-chart-area me-1"></i>
											Bar Chart Activities
										</div>
										<div class="card-body">
												<div id="columnchart_material" style="width: 'auto'; height: 500px;"></div>
										</div>
									</div>
								</div>
								
							</div>


							<!-- <div class="card mb-4">
									<div class="card-header">
										<i class="fas fa-table me-1"></i>
										DataTable Example
									</div>
									<div class="card-body">
										
									</div>
							</div> -->

                  </div>

               </main>

                <!-- footer -->
<?php include './includes/admin_footer.php'; ?>
