<?php include("../../header.php"); ?>
<div class="main-panel">
  <div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title"> Title </h3>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">category</a></li>
          <li class="breadcrumb-item active" aria-current="page">title</li>
        </ol>
      </nav>
    </div>
    <div class="content">
   <h2 class="text-center">Alexa Rank Checker</h2>
   <div class="tile">
     <div class="col-md-12">
       <form method="get">
         <input type="url" class="form-control mb-3" required="required" autocomplete="off" placeholder="Url " name="url">
       </div>
       <div class="col-md-12 text-center">
         <button class="btn btn-outline-primary" name="start">Start</button>
         <?php
         error_reporting(0);
         // $url = htmlentities($_GET['url']);
         // $xml = simplexml_load_file('http://data.alexa.com/data?cli=10&dat=snbamz&url='.$url);
         // $rank=isset($xml->SD[1]->POPULARITY)?$xml->SD[1]->POPULARITY->attributes()->TEXT:0;
         // $web=(string)$xml->SD[0]->attributes()->HOST;
         // echo $web." has Alexa Rank ".$rank;
         $url="http://stackoverflow.com/";
         $xml = simplexml_load_file('http://data.alexa.com/data?cli=10&dat=snbamz&url='.$url);
         $rank=isset($xml->SD[1]->POPULARITY)?$xml->SD[1]->POPULARITY->attributes()->TEXT:0;
         $web=(string)$xml->SD[0]->attributes()->HOST;
         echo $web." has Alexa Rank ".$rank;
         ?>



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
