<?php include("../../header.php"); ?>
<div class="main-panel">
  <div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title"> Byte Converter </h3>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Programming</a></li>
          <li class="breadcrumb-item active" aria-current="page">Byte Converter</li>
        </ol>
      </nav>
    </div>
    <div class="content">
      <div class="col-md-12 grid-margin stretch-card">
      <div class="card">
      <div class="card-body">
   <h2 class="text-center">Byte Converter</h2>
   <div class="tile">
     <div class="col-md-12">
         <script language="JavaScript"><!--
           function convert(f) {
             f.kb.value=Math.round(f.byte.value/1024*100000)/100000
             f.mb.value=Math.round(f.byte.value/1048576*100000)/100000
             f.gb.value=Math.round(f.byte.value/1073741824*100000)/100000
           }
         function convertkb(f) {
             f.byte.value=Math.round(f.kb.value*1024*100000)/100000
             f.mb.value=Math.round(f.kb.value/1024*100000)/100000
             f.gb.value=Math.round(f.kb.value/1048576*100000)/100000
           }
         function convertmb(f) {
             f.byte.value=Math.round(f.mb.value*1048576*100000)/100000
             f.kb.value=Math.round(f.mb.value*1024*100000)/100000
             f.gb.value=Math.round(f.mb.value/1024*100000)/100000
           }
         function convertgb(f) {
             f.byte.value=Math.round(f.gb.value*1073741824*100000)/100000
             f.kb.value=Math.round(f.gb.value*1048576*100000)/100000
             f.mb.value=Math.round(f.gb.value*1024*100000)/100000
           }
         // --></script>
           <form>
           <!-- <table border="3" bgcolor="#A5F2F3" cellpadding="3" cellspacing="3">
             <tr>
               <td align="center"><font size="5" face="Arial, Helvetica, sans-serif"><strong>Byte</strong></font></td>
               <td align="center"><b><font size="5" face="Arial, Helvetica, sans-serif"><strong>Kilobyte</strong></font></b></td>
               <td align="center"><b><font size="5" face="Arial, Helvetica, sans-serif">Megabyte</font></b></td>
               <td align="center"><font size="5" face="Arial, Helvetica, sans-serif"><b>Gigabyte</b></font></td>
             </tr>
             <tr>
               <td align="center">
                 <input style="width: 100px" type="text" name="byte" value="0">
               </td>
               <td align="center">
                 <input type="text" style="width: 100px" name="kb" value="0">
               </td>
               <td align="center">
                 <input type="text" style="width: 100px" name="mb" value="0">
               </td>
               <td align="center">
                 <input type="text" style="width: 100px" name="gb" value="0">
               </td>
             </tr>
             <tr>
               <td align="center">
                 <input type="button" style="width: 100px;" name="B2" value="   &gt;   "
                 onClick="convert(this.form)">
               </td>
               <td align="center">
                 <input type="button" style="width: 100px" name="B22" value="   &lt; &gt;   "
                 onClick="convertkb(this.form)">
               </td>
               <td align="center">
                 <input type="button" style="width: 100px" name="B23" value="   &lt; &gt;   "
                 onClick="convertmb(this.form)">
               </td>
               <td align="center">
                 <input type="button" style="width: 100px" name="B24" value="   &lt;   "
                 onClick="convertgb(this.form)">
               </td>
             </tr>
           </table> -->
           </form>
         <p><font color="#308CCF" face="Arial, Helvetica, sans-serif" size="2">
           1 Byte = 8 Bits<br>
           1 Kilobyte (kb) = 1024 Bytes<br />
           1 Megabyte (Mb) = 1048576 Bytes<br />
           1 Gigabyte (Gb) = 1073741824 Bytes<br />
           1 Terabyte (Tb) = 1024 Gb = 1099511627776 Bytes<br />
           1 Petabyte (Pb) = 1024 Tb = 1125899906842624 Bytes<br />
         </font></p>
         <p>&nbsp;</p>
         <p><strong>Byte Converter::.</strong></p>
         <script LANGUAGE="JavaScript">
         function calcul()
         {
         var n=document.getElementById("N").value;
         var t=document.getElementById("t").value;
         var nb=parseInt(n);
            if(isNaN(nb))
            {
            alert("Enter digits!");
            }
            else
            {
             if(t=='Ko')
         	{nb=nb*1024;}
         	else {if(t=='Mo')
         		{ nb=nb*1024*1024}
         		else {if(t=='Go')
         		{ nb=nb*1024*1024*1024}
         			else {if(t=='To')
         			{ nb=nb*1024*1024*1024*1024}
         			else {if(t=='Po')
         			{ nb=nb*1024*1024*1024*1024*1024}
         			}}}}
         			        document.getElementById("bits").innerHTML =nb*8+" bits";
         				document.getElementById("octets").innerHTML =nb+" Bytes";
         				document.getElementById("ko").innerHTML =nb/1024+" Kb";
         				document.getElementById("mo").innerHTML =nb/(1024*1024)+" Mb";
         				document.getElementById("go").innerHTML =nb/(1024*1024*1024)+" Gb";
         				document.getElementById("to").innerHTML =nb/(1024*1024*1024*1024)+" Tb";
         				document.getElementById("po").innerHTML =nb/(1024*1024*1024*1024*1024)+" Pb";
            }
         }
         </script>
         <form name="form" >
         <div>
                   <input type="number" id="N" class="form-control mb-3">
                    <select name="t" id="t" class="form-control mb-3">
                     <option value="octets" >Bytes</option>
                     <option value="Ko">Kb</option>
                     <option value="Mo">Mb</option>
                     <option value="Go">Gb</option>
                     <option value="To">Tb</option>
         	    <option value="Po">Pb</option>
            </select><center>
                   <input type="button" name="b" class="btn btn-outline-primary mt-3" value="Convert" onClick="calcul()"></center>
         </div>
         </form>
         <div id="bits">bits</div>
         <div id="octets">Bytes</div>
         <div id="ko">Kb</div>
         <div id="mo">Mb</div>
         <div id="go">Gb</div>
         <div id="to">Tb</div>
         <div id="po">Pb</div>
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
