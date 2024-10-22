<!DOCTYPE html>


<!-- =========================================================
* Frest Docs - Bootstrap Admin Template | v3.0.0
==============================================================

* Product Page: https://1.envato.market/frest_admin
* Created by: PIXINVENT
* License: You must have a valid license purchased in order to legally use the theme for your project.
* Copyright PIXINVENT (https://pixinvent.com)

=========================================================
 -->
<!-- beautify ignore:start -->
<html lang="en" class="light-style docs-page  layout-menu-fixed-offcanvas " data-assets-path="assets/">

  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Kavala Weather</title>

    <meta name="description" content="Start your development with a Dashboard for Bootstrap" />
    <meta name="keywords" content="dashboard, bootstrap 5 dashboard, bootstrap 5 design, bootstrap 5">

  

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;display=swap" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="assets/vendor/fonts/boxicons.css" />
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="assets/vendor/css/core.css" />
    <link rel="stylesheet" href="assets/css/demo.css" />
    <link rel="stylesheet" href="assets/css/docs.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/docsearch.js@2/dist/cdn/docsearch.min.css" />
    <link rel="stylesheet" href="assets/vendor/libs/leaflet/leaflet.css" />

    <!-- Page CSS -->
    

    <!-- Core JS -->
    <script src="assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: Don't remove unless you are aware of it, To hide customizer set displayCustomizer value false in config.js.  -->
    <!-- <script src="assets/vendor/js/template-customizer.js"></script> -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="assets/js/config.js"></script>

  </head>

  <body>

    

    <!-- Layout wrapper -->
<div class="layout-wrapper layout-navbar-full ">
  <div class="layout-container">

    
    


<!-- Navbar main -->

<nav class="layout-navbar navbar navbar-expand-lg align-items-lg-center bg-primary" id="layout-navbar">
  <div class="container-fluid">
    
    <!-- Menu toggle (see assets/css/demo/demo.css) -->
    <div class="layout-menu-toggle navbar-nav d-lg-none align-items-lg-center">
      <a class="nav-item nav-link px-0 me-lg-4" href="javascript:void(0)">
        <i class="bx bx-menu bx-sm align-middle"></i>
      </a>
    </div>
    

    <!-- Brand demo (see assets/css/demo/demo.css) -->
    <div class="navbar-brand app-brand demo py-0 me-4">
      <a href="index.html" class="app-brand-link gap-2">
        <span class="app-brand-logo demo bg-primary">
<svg width="26px" height="26px" viewBox="0 0 26 26" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
  <title>icon</title>
  <defs>
    <linearGradient x1="50%" y1="0%" x2="50%" y2="100%" id="linearGradient-1">
      <stop stop-color="#5A8DEE" offset="0%"></stop>
      <stop stop-color="#699AF9" offset="100%"></stop>
    </linearGradient>
    <linearGradient x1="0%" y1="0%" x2="100%" y2="100%" id="linearGradient-2">
      <stop stop-color="#FDAC41" offset="0%"></stop>
      <stop stop-color="#E38100" offset="100%"></stop>
    </linearGradient>
  </defs>
  <g id="Pages" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
    <g id="Login---V2" transform="translate(-667.000000, -290.000000)">
      <g id="Login" transform="translate(519.000000, 244.000000)">
        <g id="Logo" transform="translate(148.000000, 42.000000)">
          <g id="icon" transform="translate(0.000000, 4.000000)">
            <path d="M13.8863636,4.72727273 C18.9447899,4.72727273 23.0454545,8.82793741 23.0454545,13.8863636 C23.0454545,18.9447899 18.9447899,23.0454545 13.8863636,23.0454545 C8.82793741,23.0454545 4.72727273,18.9447899 4.72727273,13.8863636 C4.72727273,13.5423509 4.74623858,13.2027679 4.78318172,12.8686032 L8.54810407,12.8689442 C8.48567157,13.19852 8.45300462,13.5386269 8.45300462,13.8863636 C8.45300462,16.887125 10.8856023,19.3197227 13.8863636,19.3197227 C16.887125,19.3197227 19.3197227,16.887125 19.3197227,13.8863636 C19.3197227,10.8856023 16.887125,8.45300462 13.8863636,8.45300462 C13.5386269,8.45300462 13.19852,8.48567157 12.8689442,8.54810407 L12.8686032,4.78318172 C13.2027679,4.74623858 13.5423509,4.72727273 13.8863636,4.72727273 Z" id="Combined-Shape" fill="#4880EA"></path>
            <path d="M13.5909091,1.77272727 C20.4442608,1.77272727 26,7.19618701 26,13.8863636 C26,20.5765403 20.4442608,26 13.5909091,26 C6.73755742,26 1.18181818,20.5765403 1.18181818,13.8863636 C1.18181818,13.540626 1.19665566,13.1982714 1.22574292,12.8598734 L6.30410592,12.859962 C6.25499466,13.1951893 6.22958398,13.5378796 6.22958398,13.8863636 C6.22958398,17.8551125 9.52536149,21.0724191 13.5909091,21.0724191 C17.6564567,21.0724191 20.9522342,17.8551125 20.9522342,13.8863636 C20.9522342,9.91761479 17.6564567,6.70030817 13.5909091,6.70030817 C13.2336969,6.70030817 12.8824272,6.72514561 12.5388136,6.77314791 L12.5392575,1.81561642 C12.8859498,1.78721495 13.2366963,1.77272727 13.5909091,1.77272727 Z" id="Combined-Shape2" fill="#fff"></path>
            <rect id="Rectangle" fill="url(#linearGradient-2)" x="0" y="0" width="7.68181818" height="7.68181818"></rect>
          </g>
        </g>
      </g>
    </g>
  </g>
</svg>

</span>
      <span class="app-brand-text demo menu-text fw-bold">Δημήτριος Μαρκόπουλος ΑΕΜ 8354</span>
      </a>
    </div>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="navbar-collapse collapse" id="navbar-collapse">
      <!-- Divider -->
      <hr class="d-lg-none w-100 my-2" />

      <div class="navbar-nav align-items-lg-center ms-auto">

        <!-- Divider -->
        <div class="nav-item d-none d-lg-block text-big fw-light lh-1 opacity-25 me-3 ms-1">|</div>

        
        <div class="buy-now-btn">
        Διαχείριση δεδομένων μεγάλου όγκου          
        </div>
        
      </div>
    </div>
  </div>
</nav>
<!-- / Navbar main -->
    

    <!-- Layout page -->
    <div class="layout-page">

<!-- Menu -->
<aside id="layout-menu" class="layout-menu menu-doc menu menu-vertical bg-menu-theme">

  
  <div class="menu-divider mt-0   d-xl-none ">
  </div>


  <!-- Links -->
  <ul class="menu-inner py-1">
    <li class="menu-item">
      <a href="index.php" class="menu-link">
        <div>Αρχική</div>
      </a>
    </li>
    <li class="menu-item">
      <a href="submitdata.php" class="menu-link">
        <div>Καταχώριση</div>
      </a>
    </li>
  </ul>
</aside>
<!-- / Menu -->
      

      <!-- Content wrapper -->
      <div class="content-wrapper">

        <!-- Content -->
        
          <div class="container-xxl flex-grow-1 container-p-y">
            
            
<div class="row flex-xl-nowrap">
  <div class="DocSearch-content col-12 col-xl-10 container-p-y">
    <h2 class="mb-4 doc-page-title">
      Leaflet Maps
    </h2>
    
        <form id="submitData" name="submitData" method="post">
            <div class="row g-3">
            <div class="col-md-6">
                <div class="row">
                  <label class="col-sm-3 col-form-label text-sm-end" for="formtabs-birthdate">Ημερομηνία</label>
                  <div class="col-sm-9">
                    <input type="date" id="formtabs-birthdate" id="date" name="date" class="form-control dob-picker flatpickr-input" placeholder="YYYY-MM-DD">
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="row">
                  <label class="col-sm-3 col-form-label text-sm-end" for="formtabs-last-name">Θερμοκρασία</label>
                  <div class="col-sm-9">
                  <input class="form-control" type="number" id="temp" name="temp" step=".1">
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="row">
                  <label class="col-sm-3 col-form-label text-sm-end" for="formtabs-last-name">Μέγιστη Θερμοκρασία</label>
                  <div class="col-sm-9">
                  <input class="form-control" type="number" id="tmax" name="tmax" step=".1">
                  </div>
                </div>
              </div>   
              <div class="col-md-6">
                <div class="row">
                  <label class="col-sm-3 col-form-label text-sm-end" for="formtabs-last-name">Ελάχιστη Θερμοκρασία</label>
                  <div class="col-sm-9">
                  <input class="form-control" type="number"  id="tmin" name="tmin" step=".1">
                  </div>
                </div>
              </div>  
              <div class="col-md-6">
                <div class="row">
                  <label class="col-sm-3 col-form-label text-sm-end" for="formtabs-last-name">Υετός</label>
                  <div class="col-sm-9">
                  <input class="form-control" type="number" id="precipitation" name="precipitation" step=".01">
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="row">
                  <label class="col-sm-3 col-form-label text-sm-end" for="formtabs-last-name">Χιονόπτωση</label>
                  <div class="col-sm-9">
                  <input class="form-control" type="number" step=".01" id="snow" name="snow">
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="row">
                  <label class="col-sm-3 col-form-label text-sm-end" for="formtabs-last-name">Κατεύθυνση ανέμου</label>
                  <div class="col-sm-9">
                  <input class="form-control" type="number" id="wdir" name="wdir">
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="row">
                  <label class="col-sm-3 col-form-label text-sm-end" for="formtabs-last-name">Ταχύτητα ανέμου</label>
                  <div class="col-sm-9">
                  <input class="form-control" type="number" id="wspeed" name="wspeed">
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="row">
                  <label class="col-sm-3 col-form-label text-sm-end" for="formtabs-last-name">Ατμοσφαιρική πίεση</label>
                  <div class="col-sm-9">
                  <input class="form-control" type="number" id="pressure" name="pressure">
                  </div>
                </div>
              </div>

            <div class="row mt-4">
              <div class="col-md-6">
                <div class="row justify-content-end">
                  <div class="col-sm-9">
                    <button type="submit" id="submitBtn" class="btn btn-primary me-sm-3 me-1">Καταχώριση</button>
                    <button type="reset" class="btn btn-label-secondary">Καθαρισμός</button>
                  </div>
                </div>
              </div>
            </div>
          </form>

</div>
          </div>
          <!-- / Content -->

          
          <footer class="content-footer footer">
  <div class="container-fluid d-flex flex-wrap justify-content-between align-items-center text-center py-3">
  </div>
</footer>

          
        </div>
        <!-- Content wrapper -->

      </div>
      <!-- / Layout page -->

    </div>

     
     <!-- Overlay -->
     <div class="layout-overlay layout-menu-toggle"></div>
    
    <!-- Drag Target Area To SlideIn Menu On Small Screens -->
    <div class="drag-target"></div>
  </div>
  <!-- / Layout wrapper -->
    <script src="assets/vendor/libs/jquery/jquery.js"></script>
    
    <script src="assets/vendor/js/bootstrap.js"></script>
    <script src="assets/vendor/js/menu.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/docsearch.js@2/dist/cdn/docsearch.min.js"></script>
    <!-- Vendors JS -->
    <script src="assets/vendor/libs/leaflet/leaflet.js"></script>

    <!-- Page JS -->
    <script src="assets/js/map-custom.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/ol@v7.4.0/dist/ol.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/ol@v7.4.0/ol.css">


    <!-- DataTables  & js -->
<!--<script src="../assets/js/datatables/jquery.dataTables.min.js"></script>-->
<script src="https://cdn.datatables.net/v/bs4/dt-1.13.4/datatables.min.js"></script>
<script src="assets/js/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="assets/js/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="assets/js/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="assets/js/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="assets/js/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="assets/js/pdfmake/pdfmake.min.js"></script>
<script src="assets/js/pdfmake/vfs_fonts.js"></script>
<script src="assets/js/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="assets/js/datatables-buttons/js/buttons.print.min.js"></script>
<script src="assets/js/datatables-buttons/js/buttons.colVis.min.js"></script>

<script src="assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js"></script>

</body>

</html>


<!-- beautify ignore:end -->
