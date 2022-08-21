<?php include "../../header.php"; ?>
<div class="main-panel">
  <div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title"> Dns Lookup </h3>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Network</a></li>
          <li class="breadcrumb-item active" aria-current="page">Dns Lookup</li>
        </ol>
      </nav>
    </div>
    <div class="content">
      <div class="col-md-12 grid-margin stretch-card">
      <div class="card">
      <div class="card-body">

    <h2 class="text-center">Dns Lookup</h2>
    <div class="tile">
      <div class="col-md-12">

          <?php
          error_reporting(0);
          $result = array();
          $result_html = '';
          if (isset($_POST['domain']) && !empty($_POST['domain'])) {
              $domain_regex = '/[a-z\d][a-z\-\d\.]+[a-z\d]/i';
              if (preg_match($domain_regex, $_POST['domain'])) {
                  if ($url = parse_url($_POST['domain'])) {
                      if (isset($url['host'])) {
                          $result = dns_get_record($url['host'], DNS_A + DNS_AAAA + DNS_CNAME);
                      } else if (isset($url['path'])) {
                          $result = dns_get_record($url['path'], DNS_A + DNS_AAAA + DNS_CNAME);
                      }
                  }
              }

              if (empty($result)) {
                  $result_html = '<hr>Nothing found or Domain Invalid';
              } else {
                  foreach($result as $r) {
                      reset($r);
                      $host = current($r);
                      $type = next($r);
                      $value = next($r);
                      $result_html .= sprintf("<tr><td>%s</td><td>%s</td><td>%s</td></tr>\n", $host, $type, $value);
                  }
                  $result_html = "\n<table>\n$result_html</table>\n";
              }
          }

          ?>

          <form method="post">
              <div class="text-center" >
                  <!-- <input id="domain" type="text" name="domain" class="form-control"> -->
                  <input id="domain" placeholder="Domain" type="text" name="domain" class="form-control mb-3" value="<?=empty($_POST['domain'])?'':htmlentities($_POST['domain'])?>">
                  <button type="submit" class="btn btn-outline-primary mb-3">lookup</button>

          </form>

          <br /><br />

          <?=$result_html?$result_html:''?>

          <br />

          <?php
          if(isset($_POST['domain']))
          {
          $file = htmlentities($_POST['domain'], ENT_QUOTES, 'UTF-8');
          # old code with API
          // echo '<iframe allowtransparency="true" height="250px" width="100%" src="https://api.hackertarget.com/dnslookup/?q='.$file.'" frameborder="0"></iframe>';

          $grab = file_get_contents('https://api.hackertarget.com/dnslookup/?q='.$file.'');
          echo "<p>".$grab."</p>";
          }
          ?>

          <br />






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
