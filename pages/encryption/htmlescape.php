<?php include("../../header.php"); ?>
<div class="main-panel">
  <div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title"> HTML Escape </h3>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Encryption</a></li>
          <li class="breadcrumb-item active" aria-current="page">HTML Escape</li>
        </ol>
      </nav>
    </div>
    <?php
    error_reporting(0);

    if(isset($_POST["escape"])){
    	if(empty($input = $_POST["input"])){
    		echo '<script>swal("Failed!", "Input Not Found", "error")</script>';
    	}
    function encode($input)
    {
        $temp = '';
        $length = strlen($input);
        for($i = 0; $i < $length; $i++)
            $temp .= '%' . bin2hex($input[$i]);
        return $temp;
    }
    $str = encode($input);
    $enc = "<script language='javascript'>
    document.write(escape('".$str."'));
    </script>";
    }

    ?>
    <div class="content">
      <div class="col-md-12 grid-margin stretch-card">
      <div class="card">
      <div class="card-body">

      	<h2 class="text-center">HTML Escape</h2>
        <div class="row">
          <div class="col-md-12">
            <div class="card card">
              <div class="card-body">
                   <form method="post">
<div class="row">
	<div class="col-md-6">
		<div class="tile">
			<textarea class="form-control" rows="8" name="input" id="input" placeholder="Plain Text"></textarea>
		</div>
	</div>
	<div class="col-md-6">
		<div class="card">
			<textarea class="form-control bg-transparent" rows="8" name="output" id="output" placeholder="Hasil Escape" readonly="readonly"><?= str_replace("escape","unescape",$enc); ?></textarea>
		</div>
	</div>
</div>
<div class="tile">
	<div class="row">
		<div class="col text-center"><br>
			<button class="btn btn-outline-primary" type="submit" name="escape">Escape</button>
		</div>
		<div class="col text-center"><br>
			<button type="button" class="btn btn-outline-success" onclick="copy()">Copy</button>
		</div>
	</div>
</div>
</form>

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
    <script>
    		function copy() {
    			document.getElementById("output").select();
    			document.execCommand("copy");
    			swal("Copied!","Success","success");
    		}

    </script>
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
