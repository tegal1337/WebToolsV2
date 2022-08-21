<?php include("../../header.php"); ?>
<div class="main-panel">
  <div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title"> PHP Obfuscate </h3>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Encryption</a></li>
          <li class="breadcrumb-item active" aria-current="page">PHP Obfuscate</li>
        </ol>
      </nav>
    </div>
    <?php
    error_reporting(0);
    if(isset($_POST["enc"])){
    	$karakter = $_POST["input"];
    	$enc = base64_encode(convert_uuencode(str_rot13(str_rot13(base64_encode(convert_uuencode($karakter))))));

    $sec = '
    <?php
    // Secure By Tegal1337
    // From '.$_SERVER["SERVER_NAME"].'
    $1337 = base64_decode(str_rot13(str_rot13(convert_uudecode(base64_decode(convert_uudecode("'.$enc.'"))))));
    echo $1337;
    ?>';

    }
    ?>
    <div class="content">
      <div class="col-md-12 grid-margin stretch-card">
      <div class="card">
      <div class="card-body">

          	<h2 class="text-center">PHP Obfuscate</h2>
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-body">
                       <form method="post">
    	<div class="row">
    		<div class="col-md-6">
    			<div class="">
    				<textarea class="form-control" rows="8" name="input" placeholder="Plain Text"></textarea>
    			</div>
    		</div>
    		<div class="col-md-6">
    			<div class="card">
    				<textarea class="form-control bg-transparent" rows="8" id="copeh" readonly="readonly" placeholder="Hasil Obfuscate"><?= $sec; ?></textarea>
    			</div>
    		</div>
    	</div>
    <div class="tile">
    	<div class="row">
    		<div class="col text-center"><br>
    			<button type="submit" name="enc" class="btn btn-outline-primary">Obfuscate</button>
    		</div>
    		</form>
    		<div class="col text-center"><br>
    			<button type="button" onclick="Copy()" name="enc" class="btn btn-outline-success">Copy Code</button>
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
    <script>
function Copy(){
  document.getElementById("copeh").select();
    document.execCommand("copy");
    swal("Copied!","Success","success");
  }
function runCharCodeAt() {
    input = document.charCodeAt.input.value;
    output = "";
    for(i=0; i <input.length; ++i) {
      if (output != "") output += ", ";
      output += input.charCodeAt(i);
    }
    document.charCodeAt.output.value = output;
}
</script>
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
