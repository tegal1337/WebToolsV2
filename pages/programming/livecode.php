<?php include("header.php"); ?>
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
          <div class="card card-plain">
            <div class="card-header">
              { Live C<\>ding }
            </div>
            <div class="card-body">
                  <h1 class="text-center mt-3" >{ Live C<\>ding }</h1><hr>
      <center>
        <label>Text Editor</label>
      </center>
      <textarea class="form-control mb-4 ml-3" rows="8" id="TextEditor" onkeyup="RunCode()" autofocus="autofocus" placeholder="
      Mulai menulis ...
      "></textarea>
    <div class="col">
      <center>
        <label>Preview</label>
      </center>
       <iframe class="form-control mb-4 ml-3" id="result"></iframe>
    </div>
  <div class="container">
<div class="row">
<div class="col">
  <button type="button" class="btn btn-outline-primary btn-block" onclick="Encbase64()">Encode (Base64)</button>
</div>
<div class="col">
  <button type="button" class="btn btn-outline-primary btn-block" onclick="CopyCode()">Copy Code</button>
  </div>
  <div class="col">
    <button type="button" class="btn btn-outline-primary btn-block" onclick="Decbase64()">Decode (Base64)</button>
  </div>
</div>
</div>
<?php include("footer.php"); ?>
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
