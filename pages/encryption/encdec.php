<?php include("../../header.php"); ?>
<div class="main-panel">
  <div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title"> Encode Decode </h3>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Programming</a></li>
          <li class="breadcrumb-item active" aria-current="page">Encode Decode</li>
        </ol>
      </nav>
    </div>
    <?php
    error_reporting(0);
    if(isset($_POST["enc"])){
      $input = $_POST["input"];
      $type  = $_POST["type"];

      switch($type){
        case 'error':
        $hasil = "Please select type Encode/Decode";
        break;
        case 'url':
        $hasil = urlencode($input);
        break;
        case 'hexa':
        $hasil = bin2hex($input);
        break;
        case 'base64':
        $hasil = base64_encode($input);
        break;
        case 'convert_uu':
        $hasil = convert_uuencode($input);
        break;
        case 'gzbase64':
        $hasil = base64_encode(gzdeflate($input));
        break;
        case 'strbase64':
        $hasil = base64_encode(str_rot13($input));
        break;
        case 'strgzbase64':
        $hasil = base64_encode(gzdeflate(str_rot13($input)));
        break;
        case 'gzstrbase64':
        $hasil = base64_encode(str_rot13(gzdeflate($input)));
        break;
        case 'gzstrgzbase64':
        $hasil = base64_encode(gzdeflate(str_rot13(gzdeflate($input))));
        break;
        case 'strgzstrbase64':
        $hasil = base64_encode(str_rot13(gzdeflate(str_rot13($input))));
        break;
        case 'base64gzstrcongzbase64':
        $hasil = base64_encode(gzdeflate(convert_uuencode(str_rot13(gzdeflate(base64_encode($input))))));
        default; break;
      }
    }else if(isset($_POST["dec"])){
      $input = $_POST["input"];
      $type  = $_POST["type"];

      switch($type){
        case 'url':
        $hasil = urldecode($input);
        break;
        case 'hexa':
        $hasil = hex2bin($input);
        break;
        case 'base64':
        $hasil = base64_decode($input);
        break;
        case 'convert_uu':
        $hasil = convert_uudecode($input);
        break;
        case 'gzbase64':
        $hasil = gzinflate(base64_decode($input));
        break;
        case 'strbase64':
        $hasil = str_rot13(base64_decode($input));
        break;
        case 'strgzbase64':
        $hasil = str_rot13(gzinflate(base64_decode($input)));
        break;
        case 'gzstrbase64':
        $hasil = gzinflate(str_rot13(base64_decode($input)));
        break;
        case 'gzstrgzbase64':
        $hasil = gzinflate(str_rot13(gzinflate(base64_decode($input))));
        break;
        case 'strgzstrbase64':
        $hasil = str_rot13(gzinflate(str_rot13(base64_decode($input))));
        break;
        case 'base64gzstrcongzbase64':
        $hasil = base64_decode(gzinflate(str_rot13(convert_uudecode(gzinflate(base64_decode($input))))));
        default; break;
      }
    }

    ?>
    <div class="content">
      <div class="col-md-12 grid-margin stretch-card">
      <div class="card">
      <div class="card-body">

<h2 class="text-center">Encode Decode</h2>
<div class="row">
   <div class="col-md-6">
     <div class="tile">
       <form method="post">
         <textarea class="form-control" rows="8" name="input" placeholder="Enter Plain Text"></textarea>
     </div>
   </div>

   <div class="col-md-6">
     <div class="tile">
       <select name="type" class="custom-select mb-3">
         <option value="error">Select Type</option>
         <option value="url">Url</option>
         <option value="hexa">Hexa</option>
         <option value="base64">Base64</option>
         <option value="convert_uu">Convert_uu</option>
         <option value="gzbase64">Gzinflate - Base64</option>
         <option value="strbase64">Str_rot13 - Base64</option>
         <option value="strgzbase64">Str_rot13 - Gzinflate - Base64</option>
         <option value="gzstrbase64">Gzinflate - Str_rot13 - Base64</option>
         <option value="gzstrgzbase64">Gzinflate - Str_rot13 - Gzinflate - Base64</option>
         <option value="strgzstrbase64">Str_rot13 - Gzinflate - Str_rot13 - Base64</option>
         <option value="base64gzstrcongzbase64">Base64 - Gzinflate - Str_rot13 - Convert_uu - Gzinflate - Base64</option>
       </select>

       <div class="row">
         <div class="col text-center">
           <button type="submit" name="enc" class="btn btn-outline-primary">Encode</button>
         </div>
         <div class="col text-center">
           <button type="submit" name="dec" class="btn btn-outline-success">Decode</button>
         </div>
       </div>
       </form>

     </div>
   </div>

 <div class="col-md-12 text-center">
     <div class="tile">
         <textarea class="form-control bg-transparent" rows="8" readonly="readonly" id="output" placeholder="Result"><?= $hasil; ?></textarea>
     </div>
     <button onclick="copy()" class="btn btn-outline-success mt-3">Copy</button>
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
function copy(){
  document.getElementById("output").select();
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
