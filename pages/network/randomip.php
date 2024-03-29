<?php include("../../header.php"); ?>
<div class="main-panel">
  <div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title"> Random IP Generator </h3>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Network</a></li>
          <li class="breadcrumb-item active" aria-current="page">Random IP Generator</li>
        </ol>
      </nav>
    </div>
    <div class="content">
      <div class="col-md-12 grid-margin stretch-card">
      <div class="card">
      <div class="card-body">

   <h2 class="text-center">Random IP Generator</h2>
   <div class="tile">
     <div class="col-md-12">
       <form method="get">
         <input type="number" class="form-control mb-3" required="required" autocomplete="off" placeholder="Enter Number" name="num">
       </div>
       <div class="col-md-12"><center>
         <button class="btn btn-outline-primary md-3">Start</button></center>
         <h6>For cli version <a href="https://github.com/LoliC0d3/IpGenerator">IP Generator</a></h6>

         <?php
         error_reporting(0);
         //set maximum execution time for the script
         set_time_limit(30);

         //set default number of loops to run
         $numberOfLoops  = 1;

         //get number of loops to run from the url if it's set
         if (isset($_GET["l"])) {
         	$numberOfLoops = $_GET["l"];

         	$scriptTimeLimit = 30 + $numberOfLoops;
         	set_time_limit($scriptTimeLimit);
         }

         //set default number of random IPs to generate
         $numberOfIPsToGenerate = $_GET['num'];

         //get number of random IPs to generate from the url if it's set
         if (isset($_GET["ips"])) {
         	$numberOfIPsToGenerate = $_GET["ips"];
         }

         //function to get the header info
         function headerInfo($ip) {
         	$url = 'http://'.$ip;
         	$header = get_headers($url, 1);
         	return $header;
         }

         //function to implode an array with the keys
         function implode_with_key($assoc, $inglue = ' = ', $outglue = ', ') {
             $return = '';
             foreach ($assoc as $tk => $tv) {
                 $return .= $outglue . $tk . $inglue . $tv;
             }
             return substr($return, strlen($outglue));
         }

         //function to check the http status code of mutiple IP's using multi curl
         function checkHTTPStatusCode($ips) {

         	//count the number of ips to setup multi curl for
         	$numberOfCurlsToDo = count($ips);

         	//setup the user agent string for curl
         	$agent = "Mozilla/4.0 (compatible; MSIE 5.01; Windows NT 5.0)";

         	//create the multiple cURL handle
         	$mh = curl_multi_init();

         	//loop over the ips and setup multi curl
         	$curlLoop = 0;
         	while ($curlLoop < $numberOfCurlsToDo) {

         		//create curl resources
         		$ch[$curlLoop] = curl_init();

         		//set curl opptions
         		curl_setopt ($ch[$curlLoop], CURLOPT_URL,$ips[$curlLoop]);
         		curl_setopt ($ch[$curlLoop], CURLOPT_USERAGENT, $agent);
         		curl_setopt ($ch[$curlLoop], CURLOPT_RETURNTRANSFER, 1);
         		curl_setopt ($ch[$curlLoop], CURLOPT_HEADER, 1);
         		curl_setopt ($ch[$curlLoop], CURLOPT_TIMEOUT_MS, 500);

         		//add the two handles
         		curl_multi_add_handle($mh,$ch[$curlLoop]);

         		$curlLoop++;
         	}

         	//execute the handles
         	$running = null;
         	do {
         		curl_multi_exec($mh, $running);
         	} while($running > 0);


         	//get http status codes
         	$curlHTTPStatusLoop = 0;
         	while ($curlHTTPStatusLoop < $numberOfCurlsToDo) {
         		$httpcodes[] = curl_getinfo($ch[$curlHTTPStatusLoop], CURLINFO_HTTP_CODE);

         		$curlHTTPStatusLoop++;
         	}

         	//close the handles
         	$curlCloseHandlesLoop = 0;
         	while ($curlCloseHandlesLoop < $numberOfCurlsToDo) {
         		curl_multi_remove_handle($mh, $ch[$curlCloseHandlesLoop]);

         		$curlCloseHandlesLoop++;
         	}
         	curl_multi_close($mh);

         	return $httpcodes;
         }

         function generateIP() {
         	do {
             	$q1 = mt_rand(1,223);
         	} while (in_array($q1, array(10, 100, 127, 169, 172, 192, 198, 203)));
         	$q2 = mt_rand(1,255);
             $q3 = mt_rand(1,255);
             $q4 = mt_rand(1,255);
             $ip = $q1.'.'.$q2.'.'.$q3.'.'.$q4;
             return $ip;
         }
         ?>
         <style type="text/css">
         html,
         body {
         	width:100%;
         	height:100%;
         	margin:0;
         	padding:0;
         	background-color:#FFFFFF;
         }
         .green,
         .green a,
         .green:hover {
         	color:green;
         	font-weight:bold;
         }
         </style>
         </head>
         <body>
         <?php

         $i = 0;
         $elapsedLoopExecutionTime = 0;
         while ($i < $numberOfLoops ) {

         	//start microtime to reccord who long it's taking
         	$startTime = microtime(true);

         	//generate array of random IP's for the number of IPs specified
         	$numberOfIPsGenerated = 0;
         	while ($numberOfIPsGenerated < $numberOfIPsToGenerate) {

         		$ips[] = generateIP();

         		$numberOfIPsGenerated++;
         	}

         	//get the status codes from curl
         	$statusCode = checkHTTPStatusCode($ips);

         	//print_r($ips);
         	//print_r($statusCode);

         	echo '<ol>';

         	//echo out the links
         	$i2 = 0;
         	while ($i2 < $numberOfIPsToGenerate) {
         		if ($statusCode[$i2] != '0') {

         			//get header info the live IP's
         			$headerInfo = implode_with_key(headerInfo($ips[$i2]));
         			$headerInfo = str_replace('0 =', '', $headerInfo);

         			echo '<li class="green"><a href="http://'.$ips[$i2].'" target="_blank">'.$ips[$i2 ].'</a> '.$headerInfo.'</li>';
         		} else {
         			echo '<p>'.$ips[$i2].'</p>';

         		}
         		$i2++;
         	}

         	echo '</ol>';

         	$loopExecutionTime = number_format(( microtime(true) - $startTime), 4);

         	// echo '<p>'.$loopExecutionTime.' seconds</p>';

         	$elapsedLoopExecutionTime = $elapsedLoopExecutionTime + $loopExecutionTime;

         	$i++;
         }

         // echo '<p>Total '.$elapsedLoopExecutionTime.' seconds</p>';
         ?>



         <!-- </div> -->
             <!-- </div> -->
         <!-- </div> -->
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
