<?php
// Show PHP errors
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);

require_once 'classes/user.php';

$objUser = new User();

// GET
if(isset($_GET['delete_id'])){
  $id = $_GET['delete_id'];
  try{
    if($id != null){
      if($objUser->delete($id)){
        $objUser->redirect('tables-data.php?deleted');
      }
    }else{
      var_dump($id);
    }
  }catch(PDOException $e){
    echo $e->getMessage();
  }
}


?>






<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Admin Database</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/loginassets/img/favicon.png" rel="icon">
  <link href="assets/loginassets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/loginassets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/loginassets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/loginassets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/loginassets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/loginassets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/loginassets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/loginassets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/loginassets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.1.0
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.php" class="logo d-flex align-items-center">
        <span class="d-none d-lg-block">Admin</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-bell"></i>
            <span class="badge bg-primary badge-number"></span>
          </a><!-- End Notification Icon -->

        </li><!-- End Notification Nav -->



        <li class="nav-item dropdown pe-3">

  </header><!-- End Header -->



  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed" href="tables-data.php">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->






      <li class="nav-heading">Pages</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="./tables-data.php">
          <i class="bi bi-person"></i>
          <span>Booking list</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="">
          <i class="bi-person-plus-fill"></i>
          <span>Add booking</span>
        </a>
      </li><!-- End F.A.Q Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="">

          <i class="bi-trash"></i>
          <span>Cancel booking</span>
        </a>
      </li><!-- End Contact Page Nav -->



      <li class="nav-item">
        <a class="nav-link collapsed" href="">
          <i class="bi-people-fill"></i>
          <span>Extend booking</span>
        </a>
      </li><!-- End Contact Page Nav -->




      </li><!-- End Blank Page Nav -->

    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Booking List</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>

        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Booking List</h5>


              <?php
                      if(isset($_GET['updated'])){
                        echo '<div class="alert alert-info alert-dismissable fade show" role="alert">
                        <strong>Booking!<trong> Updated with success.
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true"> &times; </span>
                          </button>
                        </div>';
                      }else if(isset($_GET['deleted'])){
                        echo '<div class="alert alert-info alert-dismissable fade show" role="alert">
                        <strong>Booking!<trong> Deleted with success.
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true"> &times; </span>
                          </button>
                        </div>';
                      }else if(isset($_GET['inserted'])){
                        echo '<div class="alert alert-info alert-dismissable fade show" role="alert">
                        <strong>Booking!<trong> Inserted with success.
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true"> &times; </span>
                          </button>
                        </div>';
                      }else if(isset($_GET['error'])){
                        echo '<div class="alert alert-info alert-dismissable fade show" role="alert">
                        <strong>Error<trong> Something went wrong with your action. Try again!
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true"> &times; </span>
                          </button>
                        </div>';
                      }
                    ?>

              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">id</th>
                    <th scope="col">Customer Name&nbsp;&nbsp;&nbsp;</th>
                    <th scope="col">Phone number</th>

                    <th scope="col">Aadhar No &nbsp;&nbsp;&nbsp;&nbsp;</th>
                    <th scope="col">Start Date &nbsp;&nbsp;&nbsp;</th>
                    <th scope="col">End Date</th>
                   <th scope="col">Paymentmode&nbsp;&nbsp;&nbsp;&nbsp;</th>
                   

                  </tr>
                </thead>
                <?php
                            $query = "SELECT * FROM crud_users";
                            $stmt = $objUser->runQuery($query);
                            $stmt->execute();
                          ?>
                <tbody>
                  <?php if($stmt->rowCount() > 0){
                                  while($rowUser = $stmt->fetch(PDO::FETCH_ASSOC)){
                                 ?>
                                 <tr>
                                    <td><?php print($rowUser['id']); ?></td>

                                    <td>

                                      <?php print($rowUser['name']); ?>

                                    </td>

                                    <td><?php print($rowUser['email']); ?></td>
                                    <td><?php print($rowUser['aadharno']); ?></td>

                                      <td><?php print($rowUser['startdate']); ?></td>

                                        <td><?php print($rowUser['enddate']); ?></td>

                                          <td><?php print($rowUser['paymentmode']); ?></td>

                                           

                                    <td>
                                      <a class="confirmation" href="tables-data.php?delete_id=<?php print($rowUser['id']); ?>">
                                        <i class="bi-trash"></i>
                                      </a>
                                    </td>
                                 </tr>


                          <?php } } ?>

                          <script src="js/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<!-- Icons -->
<script src="js/feather.min.js"></script>
<script>
    feather.replace()
</script>
                          <script>
                                  // JQuery confirmation
                                  $('.confirmation').on('click', function () {
                                      return confirm('Are you sure you want do delete this user?');
                                  });
                              </script>
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>Bocxy </span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/admin-bootstrap-admin-html-template/ -->
      Designed by <a href="https://bocxy.com/">BOCXY</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/loginassets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
  <script src="assets/loginassets/vendor/php-email-form/validate.js"></script>
  <script src="assets/loginassets/vendor/quill/quill.min.js"></script>
  <script src="assets/loginassets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/loginassets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/loginassets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/loginassets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/loginassets/vendor/echarts/echarts.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/loginassets/js/main.js"></script>



</body>

</html>
