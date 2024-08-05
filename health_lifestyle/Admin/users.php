<?php include './includes/admin_header.php'; ?>

      <!-- Navigation -->
      <?php include './includes/admin_navigationbar.php'; ?>

      <div id="layoutSidenav"> 
         <div id="layoutSidenav_nav">
               
            <?php include './includes/admin_sidebar.php'; ?>

         </div>

         <div id="layoutSidenav_content">
            <main>
                  
               <div class="container-fluid px-4">
                  <h1 class="mt-4">Users</h1>
                  <ol class="breadcrumb mb-4">
                     <li class="breadcrumb-item acitve">Users</li>
                  </ol>
                  <hr>

                  <div class="row">
                     <div class="col-md-6 w-100">

                        <?php 
                        
                        if(isset($_GET['source'])){

                           $source = $_GET['source'];
                        }else{
                           $source = "";
                        }
                        
                        switch($source){
                           case 'add_user';
                           include '../Admin/includes/add_users.php';
                           break;

                           case 'edit_user';
                           include '../Admin/includes/edit_users.php';
                           break;

                           case '200';
                           echo 'NICE 200';
                           break;

                           default:
                           include '../Admin/includes/view_all_users.php';
                           break;
                        }
                        
                        ?>

                     </div>

            
                  </div>


                  <div class="row">
                     
                  </div>


                  <div class="card mb-4 shadow-sm">

                     

                  </div>
               </div>

            </main>

            <!-- footer -->
<?php include './includes/admin_footer.php'; ?>
