<?php include("../../header.php"); ?>
<div class="main-panel">
  <div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title"> BackLinks Generator </h3>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Seo Tools</a></li>
          <li class="breadcrumb-item active" aria-current="page">BackLinks Generator</li>
        </ol>
      </nav>
    </div>
    <div class="content">
      <div class="col-md-12 grid-margin stretch-card">
      <div class="card">
      <div class="card-body">

   <h2 class="text-center">BackLinks Generator</h2>
   <div class="tile">
     <div class="col-md-12">
       <form method="POST" action="">
       <i>Enter URL: </i>
          <input type="text" name="url" id="url" class="form-control mb-3"  title="Enter URL without http://" placeholder="Enter URL without http://" />
          <center><input type="submit" name="submit" class="btn btn-outline-primary" value="Start" title="Go Add URL!" /></center>
       </form>

       <br />

       <?php
       error_reporting(0);
       $url = htmlentities($_POST['url'], ENT_QUOTES, 'UTF-8');

       if (isset($_POST['url'])){

       echo "Please wait, and don't close this page about ~1 min<br />";
       echo "Your website will be added to other sites and this is not so bad for your unknown, unpopular website :) so be patient :)<br /><hr><br />";
       echo "<a href='https://validator.w3.org/check?uri={$url}' target='_blank'>https://validator.w3.org/check?uri={$url}</a> - OK<iframe src='https://validator.w3.org/check?uri={$url}' width='0' height='0' FRAMEBORDER=NO FRAMESPACING=0 BORDER=0 ></iframe><br />";
       echo "<a href='https://www.builtwith.com/{$url}' target='_blank'>https://www.builtwith.com/{$url}</a> - OK<iframe src='https://www.builtwith.com/{$url}' width='0' height='0' FRAMEBORDER=NO FRAMESPACING=0 BORDER=0 ></iframe><br />";
       echo "<a href='https://www.alexa.com/siteinfo/{$url}' target='_blank'>https://www.alexa.com/siteinfo/{$url}</a> - OK<iframe src='https://www.alexa.com/siteinfo/{$url}' width='0' height='0' FRAMEBORDER=NO FRAMESPACING=0 BORDER=0 ></iframe><br />";
       echo "<a href='https://www.google.com/webmasters/tools/mobile-friendly/?url={$url}' target='_blank'>https://www.google.com/webmasters/tools/mobile-friendly/?url={$url}</a> - OK<iframe src='https://www.google.com/webmasters/tools/mobile-friendly/?url={$url}' width='0' height='0' FRAMEBORDER=NO FRAMESPACING=0 BORDER=0 ></iframe><br />";
       echo "<a href='https://developers.google.com/speed/pagespeed/insights/?url={$url}' target='_blank'>https://developers.google.com/speed/pagespeed/insights/?url={$url}</a> - OK<iframe src='https://developers.google.com/speed/pagespeed/insights/?url={$url}' width='0' height='0' FRAMEBORDER=NO FRAMESPACING=0 BORDER=0 ></iframe><br />";
       echo "<a href='http://www.who.is/whois/{$url}/' target='_blank'>http://www.who.is/whois/{$url}/</a> - OK<iframe src='http://www.who.is/whois/{$url}/' width='0' height='0' FRAMEBORDER=NO FRAMESPACING=0 BORDER=0 ></iframe><br />";
       echo "<a href='http://www.onlinewebcheck.com/check.php?url={$url}' target='_blank'>http://www.onlinewebcheck.com/check.php?url={$url}</a> - OK<iframe src='http://www.onlinewebcheck.com/check.php?url={$url}' width='0' height='0' FRAMEBORDER=NO FRAMESPACING=0 BORDER=0 ></iframe><br />";
       echo "<a href='http://informe.com/{$url}/' target='_blank'>http://informe.com/{$url}/</a> - OK<iframe src='http://informe.com/{$url}/' width='0' height='0' FRAMEBORDER=NO FRAMESPACING=0 BORDER=0 ></iframe><br />";
       echo "<a href='http://search.monstercrawler.com/search/web?q={$url}' target='_blank'>http://search.monstercrawler.com/search/web?q={$url}</a> - OK<iframe src='http://search.monstercrawler.com/search/web?q={$url}' width='0' height='0' FRAMEBORDER=NO FRAMESPACING=0 BORDER=0 ></iframe><br />";
       echo "<a href='http://www.statshow.com/www/{$url}' target='_blank'>http://www.statshow.com/www/{$url}</a> - OK<iframe src='http://www.statshow.com/www/{$url}' width='0' height='0' FRAMEBORDER=NO FRAMESPACING=0 BORDER=0 ></iframe><br />";
       echo "<a href='http://free.pagepeeker.com/v2/thumbs.php?size=x&url={$url}' target='_blank'>http://free.pagepeeker.com/v2/thumbs.php?size=x&url={$url}</a> - OK<iframe src='http://free.pagepeeker.com/v2/thumbs.php?size=x&url={$url}' width='0' height='0' FRAMEBORDER=NO FRAMESPACING=0 BORDER=0 ></iframe><br />";
       echo "<a href='http://www.gigablast.com/addurl?u=http%3A%2F%2F{$url}' target='_blank'>http://www.gigablast.com/addurl?u=http%3A%2F%2F{$url}</a> - OK<iframe src='http://www.gigablast.com/addurl?u=http%3A%2F%2F{$url}' width='0' height='0' FRAMEBORDER=NO FRAMESPACING=0 BORDER=0 ></iframe><br />";
       echo "<a href='http://www.urlrate.com/www/{$url}' target='_blank'>http://www.urlrate.com/www/{$url}</a> - OK<iframe src='http://www.urlrate.com/www/{$url}' width='0' height='0' FRAMEBORDER=NO FRAMESPACING=0 BORDER=0 ></iframe><br />";
       echo "<a href='http://w3techs.com/sites/info/{$url}' target='_blank'>http://w3techs.com/sites/info/{$url}</a> - OK<iframe src='http://w3techs.com/sites/info/{$url}' width='0' height='0' FRAMEBORDER=NO FRAMESPACING=0 BORDER=0 ></iframe><br />";
       echo "<a href='https://blogs.yandex.ru/pings/?status=success&url={$url}' target='_blank'>https://blogs.yandex.ru/pings/?status=success&url={$url}</a> - OK<iframe src='https://blogs.yandex.ru/pings/?status=success&url={$url}' width='0' height='0' FRAMEBORDER=NO FRAMESPACING=0 BORDER=0 ></iframe><br />";
       echo "<a href='http://www.aboutus.com/{$url}' target='_blank'>http://www.aboutus.com/{$url}</a> - OK<iframe src='http://www.aboutus.com/{$url}' width='0' height='0' FRAMEBORDER=NO FRAMESPACING=0 BORDER=0 ></iframe><br />";
       echo "<a href='http://blogsearch.google.com/ping?url={$url}&btnG=Submit+Blog&hl=en' target='_blank'>http://blogsearch.google.com/ping?url={$url}&btnG=Submit+Blog&hl=en</a> - OK<iframe src='http://blogsearch.google.com/ping?url={$url}&btnG=Submit+Blog&hl=en' width='0' height='0' FRAMEBORDER=NO FRAMESPACING=0 BORDER=0 ></iframe><br />";
       echo "<a href='http://www.2pagerank.com/process.php?q={$url}&t=auto' target='_blank'>http://www.2pagerank.com/process.php?q={$url}&t=auto</a> - OK<iframe src='http://www.2pagerank.com/process.php?q={$url}&t=auto' width='0' height='0' FRAMEBORDER=NO FRAMESPACING=0 BORDER=0 ></iframe><br />";
       echo "<a href='http://www.aboutthedomain.com/{$url}' target='_blank'>http://www.aboutthedomain.com/{$url}</a> - OK<iframe src='http://www.aboutthedomain.com/{$url}' width='0' height='0' FRAMEBORDER=NO FRAMESPACING=0 BORDER=0 ></iframe><br />";
       echo "<a href='http://www.sitedossier.com/site/{$url}' target='_blank'>http://www.sitedossier.com/site/{$url}</a> - OK<iframe src='http://www.sitedossier.com/site/{$url}' width='0' height='0' FRAMEBORDER=NO FRAMESPACING=0 BORDER=0 ></iframe><br />";
       echo "<a href='http://www.site-seo-analysis.com/page-seo-analysis/{$url}' target='_blank'>http://www.site-seo-analysis.com/page-seo-analysis/{$url}</a> - OK<iframe src='http://www.site-seo-analysis.com/page-seo-analysis/{$url}' width='0' height='0' FRAMEBORDER=NO FRAMESPACING=0 BORDER=0 ></iframe><br />";
       echo "<a href='http://seo.eti.pw/analyser.php?site={$url}' target='_blank'>http://seo.eti.pw/analyser.php?site={$url}</a> - OK<iframe src='http://seo.eti.pw/analyser.php?site={$url}' width='0' height='0' FRAMEBORDER=NO FRAMESPACING=0 BORDER=0 ></iframe><br />";
       echo "<a href='http://indexed.toolsky.com/?domain={$url}' target='_blank'>http://indexed.toolsky.com/?domain={$url}</a> - OK<iframe src='http://indexed.toolsky.com/?domain={$url}' width='0' height='0' FRAMEBORDER=NO FRAMESPACING=0 BORDER=0 ></iframe><br />";
       echo "<a href='http://www.copyscape.com/?q={$url}' target='_blank'>http://www.copyscape.com/?q={$url}</a> - OK<iframe src='http://www.copyscape.com/?q={$url}' width='0' height='0' FRAMEBORDER=NO FRAMESPACING=0 BORDER=0 ></iframe><br />";
       echo "<a href='http://www.siteliner.com/{$url}?siteliner=site-dashboard&siteliner-sort=scan_time&siteliner-from=1&siteliner-message=' target='_blank'>http://www.siteliner.com/{$url}?siteliner=site-dashboard&siteliner-sort=scan_time&siteliner-from=1&siteliner-message=</a> - OK<iframe src='http://www.siteliner.com/{$url}?siteliner=site-dashboard&siteliner-sort=scan_time&siteliner-from=1&siteliner-message=' width='0' height='0' FRAMEBORDER=NO FRAMESPACING=0 BORDER=0 ></iframe><br />";
       echo "<a href='http://www.siteworthtraffic.com/report/{$url}' target='_blank'>http://www.siteworthtraffic.com/report/{$url}</a> - OK<iframe src='http://www.siteworthtraffic.com/report/{$url}' width='0' height='0' FRAMEBORDER=NO FRAMESPACING=0 BORDER=0 ></iframe><br />";
       echo "<a href='http://seo2.qwebdev.eu/analyser.php?site={$url}' target='_blank'>http://seo2.qwebdev.eu/analyser.php?site={$url}</a> - OK<iframe src='http://seo2.qwebdev.eu/analyser.php?site={$url}' width='0' height='0' FRAMEBORDER=NO FRAMESPACING=0 BORDER=0 ></iframe><br />";
       echo "<a href='http://website.informer.com/{$url}' target='_blank'>http://website.informer.com/{$url}</a> - OK<iframe src='http://website.informer.com/{$url}' width='0' height='0' FRAMEBORDER=NO FRAMESPACING=0 BORDER=0 ></iframe><br />";
       echo "<a href='http://addurl.cf/add?url={$url}' target='_blank'>http://addurl.cf/add?url={$url}</a> - OK<iframe src='http://addurl.cf/add?url={$url}' width='0' height='0' FRAMEBORDER=NO FRAMESPACING=0 BORDER=0 ></iframe><br />";
       echo "<a href='https://www.similarweb.com/website/{$url}' target='_blank'>https://www.similarweb.com/website/{$url}</a> - OK<iframe src='https://www.similarweb.com/website/{$url}' width='0' height='0' FRAMEBORDER=NO FRAMESPACING=0 BORDER=0 ></iframe><br />";
       echo "<a href='http://spyonweb.com/{$url}' target='_blank'>http://spyonweb.com/{$url}</a> - OK<iframe src='http://spyonweb.com/{$url}' width='0' height='0' FRAMEBORDER=NO FRAMESPACING=0 BORDER=0 ></iframe><br />";
       echo "<a href='http://www.mustat.com/{$url}' target='_blank'>http://www.mustat.com/{$url}</a> - OK<iframe src='http://www.mustat.com/{$url}' width='0' height='0' FRAMEBORDER=NO FRAMESPACING=0 BORDER=0 ></iframe><br />";
       echo "<a href='http://www.gotowww.site/site/{$url}' target='_blank'>http://www.gotowww.site/site/{$url}</a> - OK<iframe src='http://www.gotowww.site/site/{$url}' width='0' height='0' FRAMEBORDER=NO FRAMESPACING=0 BORDER=0 ></iframe><br />";
       echo "<a href='http://www.similarsites.com/site/{$url}' target='_blank'>http://www.similarsites.com/site/{$url}</a> - OK<iframe src='http://www.similarsites.com/site/{$url}' width='0' height='0' FRAMEBORDER=NO FRAMESPACING=0 BORDER=0 ></iframe><br />";
       echo "<a href='http://www.siteshowinfo.net/sites/{$url}' target='_blank'>http://www.siteshowinfo.net/sites/{$url}</a> - OK<iframe src='http://www.siteshowinfo.net/sites/{$url}' width='0' height='0' FRAMEBORDER=NO FRAMESPACING=0 BORDER=0 ></iframe><br />";
       echo "<a href='https://isdownorblocked.eti.pw/index.php?addr={$url}&port=80' target='_blank'>https://isdownorblocked.eti.pw/index.php?addr={$url}&port=80</a> - OK<iframe src='https://isdownorblocked.eti.pw/index.php?addr={$url}&port=80' width='0' height='0' FRAMEBORDER=NO FRAMESPACING=0 BORDER=0 ></iframe><br />";
       echo "<a href='https://www.semrush.com/info/{$url}' target='_blank'>https://www.semrush.com/info/{$url}</a> - OK<iframe src='https://www.semrush.com/info/{$url}' width='0' height='0' FRAMEBORDER=NO FRAMESPACING=0 BORDER=0 ></iframe><br />";
       echo "<a href='http://seo-links.xyz/{$url}' target='_blank'>http://seo-links.xyz/{$url}</a> - OK<iframe src='http://seo-links.xyz/{$url}' width='0' height='0' FRAMEBORDER=NO FRAMESPACING=0 BORDER=0 ></iframe><br />";

       }

       else {

       print ("");

       }
       ?>

       <br />
       Recommend:
       <a href='https://www.real-backlinks.com' target='_blank'>www.real-backlinks.com</a> |
       <a href='https://www.backlinkr.net' target='_blank'>www.backlinkr.net</a> |
       <a href='http://www.pingfarm.com' target='_blank'>www.pingfarm.com</a> |
       <a href='https://www.excitesubmit.com' target='_blank'>www.excitesubmit.com</a> |
       <a href='https://www.directorylib.com/backlink/' target='_blank'>www.directorylib.com</a> |
       <a href='http://www.indexkings.com' target='_blank'>www.indexkings.com</a> |
       <a href='https://www.pingmyurls.com' target='_blank'>www.pingmyurls.com</a> |
       <a href='https://www.pingmylinks.com/addurl/' target='_blank'>www.pingmylinks.com</a> |
       <a href='https://useme.org' target='_blank'>www.useme.org</a> |
       <a href='http://addurl.cf' target='_blank'>www.addurl.cf</a>


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
