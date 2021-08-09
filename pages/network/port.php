<?php include("../../header.php"); ?>
<div class="main-panel">
  <div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title"> Port Scanner </h3>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Network</a></li>
          <li class="breadcrumb-item active" aria-current="page">Port Scanner</li>
        </ol>
      </nav>
    </div>
    <div class="col-md-12 grid-margin stretch-card">
    <div class="card">
    <div class="card-body">

  <?php
     @set_time_limit(0);
     @error_reporting(0);
     function sws_domain_info($site)
     {
     $getip = @file_get_contents("http://networktools.nl/whois/$site");
     flush();
     $ip = @findit($getip,'<pre>','</pre>');
     return $ip;
     flush();
     }
     function sws_net_info($site)
     {
     $getip = @file_get_contents("http://networktools.nl/asinfo/$site");
     $ip = @findit($getip,'<pre>','</pre>');
     return $ip;
     flush();
     }
     function sws_site_ser($site)
     {
     $getip = @file_get_contents("http://networktools.nl/reverseip/$site");
     $ip = @findit($getip,'<pre>','</pre>');
     return $ip;
     flush();
     }
     function sws_sup_dom($site)
     {
     $getip = @file_get_contents("http://www.magic-net.info/dns-and-ip-tools.dnslookup?subd=".$site."&Search+subdomains=Find+subdomains");
     $ip = @findit($getip,'<strong>Nameservers found:</strong>','<script type="text/javascript">');
     return $ip;
     flush();
     }
     function sws_port_scan($ip)
     {
     $list_post = array('80','21','22','2082','25','53','110','443','143');
     foreach ($list_post as $o_port)
     {
     $connect = @fsockopen($ip,$o_port,$errno,$errstr,5);
     if($connect)
     {
     echo " $ip : $o_port ??? <u style=\"color: #00ff00\">Open</u> <br /><br />";
     flush();
     }
     }
     }
     function findit($mytext,$starttag,$endtag) {
     $posLeft = @stripos($mytext,$starttag)+strlen($starttag);
     $posRight = @stripos($mytext,$endtag,$posLeft+1);
     return @substr($mytext,$posLeft,$posRight-$posLeft);
     flush();
     }
     echo '
     <div class="col-md-12 grid-margin stretch-card">
     <div class="card">
     <div class="card-body text-center">
     <h2> Port Scanner</h2>
      <form method="post">
      <td><input type="text" name="site" placeholder="Enter Host" class="form-control"  /><center><br><input class="btn btn-outline-primary" type="submit" name="scan" value="Scan" /></td></tr>
      </table></form></center>';
     if(isset($_POST['scan']))
     {
     $site = @htmlentities($_POST['site']);
     if (empty($site)){die('<br /><br /> Not add IP .. !');}
     $ip_port = @gethostbyname($site);
     echo "
     <br /><div class=\"sc2\">Scanning [ $site IP $ip_port ]  </div>
     <div class=\"ru\"> <br /><br /><p>
     ";
     echo "".sws_port_scan($ip_port)." </p> ";
     flush();

     }
     echo '</center>';

  ?>
  <br/></tr>
  </div>
  </div>
  </div>
  </div>
  </div>
  </div>
  </div>

  </center><br/>
  <br>
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
