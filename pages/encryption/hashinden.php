<?php include("../../header.php"); ?>
<div class="main-panel">
  <div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title"> Hash Identifier </h3>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Encryption</a></li>
          <li class="breadcrumb-item active" aria-current="page">Hash Identifier</li>
        </ol>
      </nav>
    </div>
    <div class="page-content">
    	<div class="row">
    		<div class="col-md-12 grid-margin">
    	    <div class="card">
    	      <div class="card-body text-center">
    					<h2 class="card-title">Hash Identifier</h2>
    					<form class="needs-validation" novalidate method="post" action="">
    						<div class="form-group ">
    							<input type="text" name="resources" id="" class="form-control mb-3" required="" placeholder="Enter Hash">
    						<button type="submit"class="btn btn-outline-primary mb-3" name="encode">Identify</button>
              </div>
    					</form>
    	      </div>
    	    </div>
    		</div>
    		<?php
    			if (isset($_POST['resources']) && !empty($_POST['resources'])) :
    				$hash = htmlspecialchars($_POST['resources']);
    				if (strlen($hash) == 32) {
    					$hashresult = "MD5 Hash";
    				} elseif (strlen($hash) == 40) {
    					$hashresult = "SHA-1 Hash, MySQL5 Hash";
    				} elseif (strlen($hash) == 13){
    					$hashresult = "DES(Unix) Hash";
    				} elseif (strlen($hash) == 16) {
    					$hashresult = "MySQL Hash, DES(Oracle) Hash";
    				} elseif (strlen($hash) == 41) {
    					$GetHashChar = substr($hash, 40);
    					if ($GetHashChar == "*") {
    						$hashresult = "MySQL5 Hash";
    					}
    				} elseif (strlen($hash) == 64) {
    					$hashresult = "SHA-256 Hash";
    				} elseif (strlen($hash) == 96) {
    					$hashresult = "SHA-384 Hash";
    				} elseif (strlen($hash) == 128) {
    					$hashresult = "SHA-512 Hash";
    				} elseif (strlen($hash) == 37) {
    					if (strstr($hash, '$apr1$')) {
    						$hashresult = "MD5(APR) Hash";
    					}
    				} elseif (strlen($hash) == 34) {
    					if (strstr($hash, '$H$')) {
    						$hashresult = "MD5(phpBB3) Hash";
    					} elseif (strstr($hash, '$P$')) {
    						$hashresult = "MD5(Wordpress) Hash";
    					} elseif (strstr($hash, '$1$')) {
    						$hashresult = "MD5(Unix) Hash";
    					} else {
    						$hashresult = "Can't found possible hash type!";
    					}
    				} elseif (strlen($hash) == 39) {
    					if (strstr($hash, '$5$')) {
    						$hashresult = "SHA-256(Unix) Hash";
    					}	elseif (strstr($hash, '$6$')) {
    						$hashresult = "SHA-512(Unix) Hash";
    					} else {
    						$hashresult = "Can't found possible hash type!";
    					}
    				} elseif (strlen($hash) == 24) {
    					if (strstr($hash, '==')) {
    						$hashresult = "MD5(Base-64) Hash";
    					}
    				} elseif (strstr($hash, '$2y$10$') == 24) {
    					$hashresult = "Bcrypt Hash";
    				} else {
    					$hashresult = "Can't found possible hash type!";
    				}
    		?>
    		<div class="col-md-12 grid-margin">
    			<div class="card">
    				<div class="card-body">
    					<h6 class="card-title">Result</h6>
    					<div class="table-responsive">
    						<table class="table table-hover table-striped">
    							<thead>
    								<tr>
    									<th>Hash</th>
    									<th>Hash Length</th>
    									<th>Possible Hash Type</th>
    								</tr>
    							</thead>
    							<tbody>
    								<tr>
    									<td><?= $hash; ?></td>
    									<td><?= strlen($hash); ?></td>
    									<td><?= $hashresult; ?></td>
    								</tr>
    							</tbody>
    						</table>
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
