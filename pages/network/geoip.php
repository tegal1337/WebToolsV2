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
           <div class="row">
             <div class="col-md-12">
               <div class="card card">
                 <h3 class="card-header text-center ">
                   Chek My IP
                 </h3><hr>

                 <!-- <div class="card-body">
                      <center>
       <div class="col-md-4">
         <div class="tile"> -->
         <div class="col-md-12 text-center">
               <div class="tile">
                 <form method="post">
                   <input class="form-control" type="text" name="ip" placeholder="Enter Ip Addreas" value=""><br>
                 <?php if(isset($_POST["check"])){
    // $ch = curl_init();
    // curl_setopt($ch, CURLOPT_URL, "https://ipapi.co/36.71.238.191/json");
    // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    // curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    // $hc = curl_exec($ch);
    // $js = json_decode($hc);
    function curl($url){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $output = curl_exec($ch);
        curl_close($ch);
        return $output;
    }

    $send = curl("https://ipapi.co/36.71.238.191/json");
    $data = json_decode($send, TRUE);
    $b = $data['ip'];
    echo "Judul   : ".$b;
  //   foreach($js as $key){
  //     echo '<h3 class="text-center">'.$key.'</h3>';
  //   }
  // }else{
  //   echo '<h3 class="text-center"></h3>';
  // }
  ?>
  <br>
  <button type="submit" name="check" class="btn btn-outline-primary">Check</button> <br>
</form>
               </div>
               </div>
               </div>
               </div>
               </div>
               </div>
               <!-- </center> -->
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
