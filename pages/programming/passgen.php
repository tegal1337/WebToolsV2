<?php include("../../header.php"); ?>
<div class="main-panel">
  <div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title"> Password Generator
 </h3>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Programming</a></li>
          <li class="breadcrumb-item active" aria-current="page">Password Generator
</li>
        </ol>
      </nav>
    </div>
    <div class="content">
      <div class="col-md-12 grid-margin stretch-card">
      <div class="card">
      <div class="card-body">

      <!-- </div> -->
   <h2 class="text-center">Password Generator</h2>
   <div class="tile">
     <div class="col-md-12">
         <?php
         function randomPassword() {
             $alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789-~!@#$%^&*()+|[]{}=";
             $pass = array(); // remember to declare $pass as an array
             $alphaLength = strlen($alphabet) - 1; // put the length -1 in cache
             for ($i = 0; $i < 32; $i++) {
                 $n = rand(0, $alphaLength);
                 $pass[] = $alphabet[$n];
             }
             return implode($pass); // turn the array into a string
         }
         // echo randomPassword();
         echo '<input type="text" size=35 value="'.randomPassword().'" onclick="this.select()" class="form-control bg-transparent" readonly>';

         echo "<br><br>";

         function rand_string( $length ) {
             $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
             return substr(str_shuffle($chars),0,$length);

         }
         // echo "32 symbols string only letters and numbers:<br><br>" .rand_string(32);
         echo '<input type="text" size=35 value="'.rand_string(32).'" onclick="this.select()" class="form-control bg-transparent" readonly>';
         ?>

         <br><br>
        <center> <button class="btn btn-outline-primary" onclick=location=URL>Generate new string</button></center>
         <br><br>


         <script>

         var keylist="abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789-~!@#$%^&*()+|[]{}="
         var temp=''

         function generatepass(plength){
         temp=''
         for (i=0;i<plength;i++)
         temp+=keylist.charAt(Math.floor(Math.random()*keylist.length))
         return temp
         }

         function populateform(enterlength){
         document.pgenerate.output.value=generatepass(enterlength)
         }
         </script>

         <form name="pgenerate">
         Password Length: <input class="input2" type="text" name="thelength" size="4" value="32" class="form-control bg-transparent">
         <center><input type="button" class="btn btn-outline-primary " value="Go" onClick="populateform(this.form.thelength.value)"><br><br></center>
         <input type="text" size=35 name="output" onclick="this.select()" class="form-control bg-transparent" readonly><br><br>
         </form>

         <br>



         		<form action="#" method="get" onsubmit="doGenerate(event);">
         			<div id="charset" class="section" style="margin:0.8em 0em">
         				<p style="margin:0.3em 0em">Character set:</p>
         				<table style="line-height:1.5">
         					<tbody>
         						<tr>
         							<td><input type="checkbox" id="custom"></td>
         							<td><label for="custom"> Custom:</label> <input class="form-control bg-transparent" type="text" id="customchars" value="" size="15" style="width:10em; font-size:80%" oninput="document.getElementById('custom').checked=true;"></td>
         						</tr>
         					</tbody>
         				</table>
         			</div>
         			<div class="section">
         				<table id="type">
         					<tbody>
         						<tr>
         							<td><input type="radio" name="type" id="by-length" checked="checked"> <label for="by-length">Length:&#xA0;</label></td>
         							<td><input type="number" min="0" value="32" step="1" id="length" style="width:4em" oninput="document.getElementById('by-length').checked=true;"> characters</td>
         						</tr>
         						<tr>
         							<td><input type="radio" name="type" id="by-entropy"> <label for="by-entropy">Entropy:</label>&#xA0;</td>
         							<td><input type="number" min="0" value="128" step="any" id="entropy" style="width:4em" oninput="document.getElementById('by-entropy').checked=true;"> bits</td>
         						</tr>
         					</tbody>
         				</table>
         			</div>
         			<p style="max-width:unset; line-height:1.35; word-break:break-all">
         				<center><input type="submit" class="btn btn-outline-primary" value="Generate"></center>
         			<center>	<input type="button" class="btn btn-outline-primary" value="Copy" id="copy-button" onclick="doCopy();" disabled="disabled"><br><br></center>
         				Password: <span id="password"></span>
         			</p>
         			<p id="statistics" class="lowlight">&#xA0;</p>
         		</form>

         		<!--==== JavaScript code ====-->

         		<script type="text/javascript">
         		"use strict";

         		/*-- Configuration --*/

         		var CHARACTER_SETS = [
         			[true, "Numbers", "0123456789"],
         			[true, "Lowercase", "abcdefghijklmnopqrstuvwxyz"],
         			[true, "Uppercase", "ABCDEFGHIJKLMNOPQRSTUVWXYZ"],
         			[false, "ASCII symbols", "!\"#$%" + String.fromCharCode(38) + "'()*+,-./:;" + String.fromCharCode(60) + "=>?@[\\]^_`{|}~"],
         			[false, "Space", " "],
         		];

         		/*-- Global variables --*/

         		var passwordElem   = document.getElementById("password"   );
         		var statisticsElem = document.getElementById("statistics" );
         		var copyElem       = document.getElementById("copy-button")
         		var cryptoObject    = null;
         		var currentPassword = null;

         		/*-- Initialization --*/

         		function initCharsets() {
         			function createElem(tagName, attribs) {
         				var result = document.createElement(tagName);
         				if (attribs !== undefined) {
         					for (var key in attribs)
         						result[key] = attribs[key];
         				}
         				return result;
         			}

         			var container = document.querySelector("#charset tbody");
         			var endElem = document.querySelector("#charset tbody > tr:last-child");
         			CHARACTER_SETS.forEach(function(entry, i) {
         				var tr = createElem("tr");
         				var td = tr.appendChild(createElem("td"));
         				var input = td.appendChild(createElem("input", {
         					type: "checkbox",
         					checked: entry[0],
         					id: "charset-" + i}));
         				var td = tr.appendChild(createElem("td"));
         				var label = td.appendChild(createElem("label", {
         					htmlFor: "charset-" + i,
         					textContent: " " + entry[1] + " "}));
         				var small = label.appendChild(createElem("small", {
         					textContent: "(" + entry[2] + ")"}));
         				container.insertBefore(tr, endElem);
         			});
         		}

         		function initCrypto() {
         			var elem = document.getElementById("crypto-getrandomvalues-entropy");
         			elem.textContent = "\u2717";  // X mark

         			if ("crypto" in window)
         				cryptoObject = crypto;
         			else if ("msCrypto" in window)
         				cryptoObject = msCrypto;
         			else
         				return;

         			if (!("getRandomValues" in cryptoObject) || !("Uint32Array" in window) || typeof Uint32Array != "function")
         				cryptoObject = null;
         			else
         				elem.textContent = "\u2713";
         		}

         		/*-- Entry points from HTML code --*/

         		function doGenerate(ev) {
         			ev.preventDefault();

         			// Get and check character set
         			var charset = getPasswordCharacterSet();
         			if (charset.length == 0) {
         				alert("Error: Character set is empty");
         				return;
         			} else if (document.getElementById("by-entropy").checked ? charset.length == 1 : false) {
         				alert("Error: Need at least 2 distinct characters in set");
         				return;
         			}

         			// Calculate desired length
         			var length;
         			if (document.getElementById("by-length").checked)
         				length = parseInt(document.getElementById("length").value, 10);
         			else if (document.getElementById("by-entropy").checked)
         				length = Math.ceil(parseFloat(document.getElementById("entropy").value) * Math.log(2) / Math.log(charset.length));
         			else
         				throw "Assertion error";

         			// Check length
         			if (0 > length) {
         				alert("Negative password length");
         				return;
         			} else if (length > 10000) {
         				alert("Password length too large");
         				return;
         			}

         			// Generate password
         			currentPassword = generatePassword(charset, length);

         			// Calculate and format entropy
         			var entropy = Math.log(charset.length) * length / Math.log(2);
         			var entropystr;
         			if (70 > entropy)
         				entropystr = entropy.toFixed(2);
         			else if (200 > entropy)
         				entropystr = entropy.toFixed(1);
         			else
         				entropystr = entropy.toFixed(0);

         			// Set output elements
         			passwordElem.textContent = currentPassword;
         			statisticsElem.textContent = "Length = " + length + " chars, \u00A0\u00A0Charset size = " +
         				charset.length + " symbols, \u00A0\u00A0Entropy = " + entropystr + " bits";
         			copyElem.disabled = false;
         		}

         		function doCopy() {
         			var container = document.querySelector("body");
         			var textarea = document.createElement("textarea");
         			textarea.style.position = "fixed";
         			textarea.style.opacity = "0";
         			container.insertBefore(textarea, container.firstChild);
         			textarea.value = currentPassword;
         			textarea.focus();
         			textarea.select();
         			document.execCommand("copy");
         			container.removeChild(textarea);
         		}
            function doCopy(){
              document.getElementById("password").select();
                document.execCommand("copy");
                swal("Copied!","Success","success");
              }
         		/*-- Low-level functions --*/

         		function getPasswordCharacterSet() {
         			// Concatenate characters from every checked entry
         			var rawCharset = "";
         			CHARACTER_SETS.forEach(function(entry, i) {
         				if (document.getElementById("charset-" + i).checked)
         					rawCharset += entry[2];
         			});
         			if (document.getElementById("custom").checked)
         				rawCharset += document.getElementById("customchars").value;
         			rawCharset = rawCharset.replace(/ /g, "\u00A0");  // Replace space with non-breaking space

         			// Parse UTF-16, remove duplicates, convert to array of strings
         			var charset = [];
         			for (var i = 0; rawCharset.length > i; i++) {
         				var c = rawCharset.charCodeAt(i);
         				if (0xD800 > c || c >= 0xE000) {  // Regular UTF-16 character
         					var s = rawCharset.charAt(i);
         					if (charset.indexOf(s) == -1)
         						charset.push(s);
         					continue;
         				}
         				if (0xDC00 > c ? rawCharset.length > i + 1 : false) {  // High surrogate
         					var d = rawCharset.charCodeAt(i + 1);
         					if (d >= 0xDC00 ? 0xE000 > d : false) {  // Low surrogate
         						var s = rawCharset.substring(i, i + 2);
         						i++;
         						if (charset.indexOf(s) == -1)
         							charset.push(s);
         						continue;
         					}
         				}
         				throw "Invalid UTF-16";
         			}
         			return charset;
         		}

         		function generatePassword(charset, len) {
         			var result = "";
         			for (var i = 0; len > i; i++)
         				result += charset[randomInt(charset.length)];
         			return result;
         		}


         		// Returns a random integer in the range [0, n) using a variety of methods.
         		function randomInt(n) {
         			var x = randomIntMathRandom(n);
         			x = (x + randomIntBrowserCrypto(n)) % n;
         			return x;
         		}


         		// Not secure or high quality, but always available.
         		function randomIntMathRandom(n) {
         			var x = Math.floor(Math.random() * n);
         			if (0 > x || x >= n)
         				throw "Arithmetic exception";
         			return x;
         		}

         		// Uses a secure, unpredictable random number generator if available; otherwise returns 0.
         		function randomIntBrowserCrypto(n) {
         			if (cryptoObject == null)
         				return 0;
         			// Generate an unbiased sample
         			var x = new Uint32Array(1);
         			do cryptoObject.getRandomValues(x);
         			while (x[0] - x[0] % n > 4294967296 - n);
         			return x[0] % n;
         		}

         		/*-- Initialization --*/

         		initCharsets();
         		initCrypto();
         		copyElem.disabled = true;
         		</script>




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
