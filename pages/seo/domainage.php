<?php include("../../header.php"); ?>
<div class="main-panel">
  <div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title"> Domain Age Checker </h3>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Seo Tools</a></li>
          <li class="breadcrumb-item active" aria-current="page">Domain Age Checker</li>
        </ol>
      </nav>
    </div>
    <div class="content">
      <div class="col-md-12 grid-margin stretch-card">
      <div class="card">
      <div class="card-body">

   <h2 class="text-center">Domain Age Checker</h2>
   <div class="tile">
     <div class="col-md-12">
         <?php
         error_reporting(0);
         // API from https://ipty.de/domage/
         $domain = htmlentities($_GET["domain"]);

         $location = json_decode(file_get_contents("https://ipty.de/domage/api.php?domain={$domain}&mode=full"));

         if(isset($_GET['domain']))
         {
         echo '<small>(without http://)</small><br><form method="get" action="">
         <input type="text" name="domain" id="domain" class="form-control mb-3" placeholder="Domain name here" title="Enter Domain here" />
         <center><input type="submit" class="btn btn-outline-primary" value="Check" /></center>
         </form>';
         $calling_code = $location->result->creation->years; // :)
         echo "<br>Years: " .$calling_code;
         echo "<br>Days: " .$location->result->creation->days;
         echo "<br>Fulldays: " .$location->result->creation->fulldays;
         echo "<br>Creation Date: " .$location->result->creation->date;
         }

         else {

         print ('<small>(without http://)</small><br><form method="get" action="">
         <input type="text" name="domain" id="domain" class="form-control mb-3" placeholder="Domain name only" title="Enter Domain here" />
         <center><input type="submit" class="btn btn-outline-primary" value="Check" /></center>
         </form>');
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
