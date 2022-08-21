<?php include("../../header.php"); ?>
<div class="main-panel">
  <div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title"> Remove Duplicate Line </h3>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Programming</a></li>
          <li class="breadcrumb-item active" aria-current="page">Remove Duplicate Line</li>
        </ol>
      </nav>
    </div>
    <div class="content">
      <div class="col-md-12 grid-margin stretch-card">
      <div class="card">
      <div class="card-body">
   <h2 class="text-center">Remove Duplicate Line</h2>
   <div class="tile">
     <div class="col-md-12">
       <script type="text/JavaScript">
       function cleartext(){
       document.getElementById('input_output').value = '';
       document.getElementById('removed').innerHTML = ''
       if(document.getElementById('dis_rem').checked == true) document.getElementById('removed_output').value = '';}
       function rduplin(){
       var text = document.getElementById('input_output').value;
       text = text.replace(/\r/g,'');
       var textinarr = new Array();
       textinarr = text.split('\n');
       var len = textinarr.length;
       var textoutarr = new Array();
       var textoutarrcnt = 0;
       var cachearr = new Array();
       var cachecnt = 0;
       var hash = {};
       var xkey = '';
       var hkey = '';
       var belong2 = 'pbclevtug grkgzrpunavp.pbz';
       var cs = document.getElementById('case_sen').checked;
       var rel = document.getElementById('rel').checked;
       var dis = document.getElementById('dis_rem').checked;
       if(cs == true && rel == true && dis == true){
       for(var x=0;x<len;x++){
       xkey = textinarr[x];
       hkey = ' ' + xkey;
       if(hash[hkey] == null && xkey != '') {hash[hkey] = x+1; textoutarr[textoutarrcnt] = xkey; textoutarrcnt++;} else {if(xkey == '') cachearr[cachecnt] = '(Line ' + (x+1) + ' was an empty line.)'; else cachearr[cachecnt] = '(Line ' + (x+1) + ' was a duplicate of line ' + hash[hkey] + '.) ' + xkey; cachecnt++;}}}
       if(cs == true && rel == true && dis == false){
       for(var x=0;x<len;x++){
       xkey = textinarr[x];
       hkey = ' ' + xkey;
       if(hash[hkey] == null && xkey != '') {hash[hkey] = x+1; textoutarr[textoutarrcnt] = xkey; textoutarrcnt++;} else {cachecnt++;}}}
       if(cs == true && rel == false && dis == true){
       for(var x=0;x<len;x++){
       xkey = textinarr[x];
       hkey = ' ' + xkey;
       if(hash[hkey] == null || xkey == '') {hash[hkey] = x+1; textoutarr[textoutarrcnt] = xkey; textoutarrcnt++;} else {cachearr[cachecnt] = '(Line ' + (x+1) + ' was a duplicate of line ' + hash[hkey] + '.) ' + xkey; cachecnt++;}}}
       if(cs == true && rel == false && dis == false){
       for(var x=0;x<len;x++){
       xkey = textinarr[x];
       hkey = ' ' + xkey;
       if(hash[hkey] == null || xkey == '') {hash[hkey] = x+1; textoutarr[textoutarrcnt] = xkey; textoutarrcnt++;} else {cachecnt++;}}}
       if(cs == false && rel == true && dis == true){
       for(var x=0;x<len;x++){
       xkey = textinarr[x];
       hkey = ' ' + xkey.toUpperCase();
       if(hash[hkey] == null && xkey != '') {hash[hkey] = x+1; textoutarr[textoutarrcnt] = xkey; textoutarrcnt++;} else {if(xkey == '') cachearr[cachecnt] = '(Line ' + (x+1) + ' was an empty line.)'; else cachearr[cachecnt] = '(Line ' + (x+1) + ' was a duplicate of line ' + hash[hkey] + '.) ' + xkey; cachecnt++;}}}
       if(cs == false && rel == true && dis == false){
       for(var x=0;x<len;x++){
       xkey = textinarr[x];
       hkey = ' ' + xkey.toUpperCase();
       if(hash[hkey] == null && xkey != '') {hash[hkey] = x+1; textoutarr[textoutarrcnt] = xkey; textoutarrcnt++;} else {cachecnt++;}}}
       if(cs == false && rel == false && dis == true){
       for(var x=0;x<len;x++){
       xkey = textinarr[x];
       hkey = ' ' + xkey.toUpperCase();
       if(hash[hkey] == null || xkey == '') {hash[hkey] = x+1; textoutarr[textoutarrcnt] = xkey; textoutarrcnt++;} else {cachearr[cachecnt] = '(Line ' + (x+1) + ' was a duplicate of line ' + hash[hkey] + ') ' + xkey; cachecnt++;}}}
       if(cs == false && rel == false && dis == false){
       for(var x=0;x<len;x++){
       xkey = textinarr[x];
       hkey = ' ' + xkey.toUpperCase();
       if(hash[hkey] == null || xkey == '') {hash[hkey] = x+1; textoutarr[textoutarrcnt] = xkey; textoutarrcnt++;} else {cachecnt++;}}}
       document.getElementById('input_output').value = textoutarr.join('\n');
       if(dis == true) document.getElementById('removed_output').value = cachearr.join('\n');
       var lines = 'lines';
       if(cachecnt == 1) lines = 'line';
       document.getElementById('removed').innerHTML = cachecnt + ' duplicate ' + lines + ' removed';}
       function SelectAll(id) {
       document.getElementById(id).focus();
       document.getElementById(id).select();}
       </script>
       <center>
       <div id="menubuttonbar"><span id="menubutton"></span></div>
       <div><input type="checkbox" id="case_sen" />Case sensitive
       <input type="checkbox" id="rel" />Remove empty lines
       <input type="checkbox" id="dis_rem" onClick="if(this.checked==true)document.getElementById('removed_div').style.display='block'; if(this.checked==false)document.getElementById('removed_div').style.display='none';" />Display removed
       <input type="button" class="buttn btn btn-outline-warning" title="Select All Text" value=" Select " onClick="SelectAll('input_output')" /> <input type="button" class="buttn btn btn-outline-danger" title="Clear All Text" value=" Clear " onClick="cleartext();" /> <span id="removed"></span></div>
       <textarea id="input_output" style="width:99%; height:382px; margin-top:3px;" wrap="off" spellcheck="false">
       Example:
       Touch me senpai!!
       Touch me senpai!!
       Touch me senpai!!
       Touch me senpai!!
       Touch me senpai!!
       Touch me senpai!!
       senpai@tegalsec.org
       senpai@tegalsec.org
       senpai@tegalsec.org
       senpai@tegalsec.org
       senpai@tegalsec.org
       senpai@tegalsec.org
       </textarea>
       </center>
       <div id="removed_div" style="display:none;">
       <textarea id="removed_output" rows="6" style="width:99%; margin-top:3px;" wrap="off" spellcheck="false">
       Removed Line Box - Removed lines will display here
       </textarea></div>
       <br>
       <center>
       <button type="button" class="btn btn-outline-primary" onClick="rduplin()" />Remove Duplicate Lines</button>
       </center>
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
