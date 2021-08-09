<?php include("../../header.php"); ?>
<div class="main-panel">
  <div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title"> Reverse IP</h3>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Programming</a></li>
          <li class="breadcrumb-item active" aria-current="page">Reverse IP</li>
        </ol>
      </nav>
    </div>
    <div class="page-content">
    	<div class="row">
    		<div class="col-md-12 grid-margin stretch-card">
    	    <div class="card">
    	      <div class="card-body"><center>
    					<h2 class="card-title">Reverse IP</h2></center>
    					<form class="needs-validation" novalidate method="post" action="">
    						<div class="form-group">
    							<input type="text" name="domain" id="" class="form-control" required placeholder="Enter url">
    						</div>
                <div class="text-center">

    						<button type="submit" class="btn btn-outline-primary mb-3" name="reverse">Reverse</button>
              </div>
    					</form>
    	      </div>
    	    </div>
    		</div>
    		<?php
    			if (isset($_POST['domain']) && !empty($_POST['domain'])) :
    				$filter = htmlspecialchars($_POST['domain']);
    				if (!preg_match('#^http(s)?://#',$filter)) {
    					$site = $filter;
    				} else {
    					$site = preg_replace("#^http(s)?://#", "", $filter);
    				}

    				$ch = curl_init();
    				curl_setopt($ch, CURLOPT_URL, "https://sonar.omnisint.io/reverse/$site");
    				curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    				$exe = curl_exec($ch);
    				curl_close($ch);

    				$json = json_decode($exe, true);
    		?>
    		<div class="col-md-12 grid-margin stretch-card">
    			<div class="card">
    				<div class="card-body">
    					<div class="form-group">
    						<label for="results">Results</label>
    						<textarea name="results" id="results" rows="10" class="form-control"><?php
    							foreach ($json as $res) {
    								echo $res."\n";
    							}
    						?></textarea>
    					</div>
    				</div>
    			</div>
    		</div>
    		<?php endif; ?>
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
