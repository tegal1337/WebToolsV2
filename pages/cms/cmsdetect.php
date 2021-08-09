<?php include("../../header.php"); ?>
<div class="main-panel">
  <div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title"> CMS Detector </h3>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Cms Test</a></li>
          <li class="breadcrumb-item active" aria-current="page">CMS Detector</li>
        </ol>
      </nav>
    </div>
    <div class="content">
      <div class="col-md-12 grid-margin stretch-card">
      <div class="card">
      <div class="card-body">

<h2 class="text-center">CMS Detector</h2>
<div class="tile">
<div class="col-md-12">
  <form method="post">
    <input type="url" class="form-control mb-3" required="required" autocomplete="off" placeholder="Url Target" name="url">
  </div>
  <div class="col-md-12">
    <center>
    <button class="btn btn-outline-primary" name="start">Start</button></center>
    <h6>For cli version <a href="https://github.com/tegal1337/CmsNani/">CmsNani</a> </h6>
    <?php
    error_reporting(0);
    if(isset($_POST['start']))
    {
        $tags = get_meta_tags($_POST['url']);
        if($tags['generator'])
             echo "CMS is: " . $tags['generator'] . "<br>";
        else
             echo "No CMS info available.<br>";
    }
    ?>



        </div>
      </div>
    </div>
</div>
  </div>
    </div>
    </div>
    </div>
    </div>
    </div>
<?php include("../../footer.php"); ?>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../../assets/js/off-canvas.js"></script>
    <script src="../../assets/js/hoverable-collapse.js"></script>
    <script src="../../assets/js/misc.js"></script>
    <script src="../../assets/js/settings.js"></script>
    <script src="../../assets/js/todolist.js"></script>
    <!-- endinject -->
  </body>
</html>
