<?php include("../header.php"); ?>
<div class="main-panel">
  <div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title"> Reverse Shell Generator </h3>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Reverse Shell Generator</a></li>
          <li class="breadcrumb-item active" aria-current="page">Reverse Shell Generator</li>
        </ol>
      </nav>
    </div>
    <div class="content">
      <div class="col-md-12 grid-margin stretch-card">
      <div class="card">
      <div class="card-body">
      <div class="col-12 col-md-12 mb-4">
      <!-- <div class="col-12 col-md-6 mb-4"> -->
      <!-- <div class="row"> -->
                <div class="card shadow h-100">
                    <div class="card-body">
                        <h5 class="card-title mb-0">
                            <b>IP & Port</b>
                        </h5>

                        <!-- card-text -->
                        <div class="card-text h-100">
                            <form class="row justify-content-center align-items-center h-100">
                            <div class="col-md-12">
                                <!-- IP -->
                                <div class="col-auto mt-4">
                                  
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span id="ip-label" class="input-group-text">IP</span>
                                        </div>
                                        <input id="ip" type="text" class="form-control form-control-lg text-center px-1"
                                            size="12VW" maxlength="15" aria-label="IP"
                                            aria-describedby="ip-label">
                                    </div>
                                </div>

                                <!-- Port -->
                                <div class="col-auto mt-4">
                                    <div class="input-group" data-toggle="tooltip">
                                        <div class="input-group-prepend">
                                            <span id="port-label" class="input-group-text">Port</span>
                                        </div>
                                        <input id="port" type="text" class="form-control form-control-lg text-center"
                                            size="4vw" maxlength="5" aria-label="Port"
                                            aria-describedby="port-label">
                                        <div class="input-group-append">
                                            <button id="inc-port" class="btn btn-secondary btn-sm" type="button"
                                                style="font-size: 1rem" data-toggle="tooltip"
                                                title="Increase port number by one">
                                                +1
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                
                                <div id="port-privileges-warning" class="col-12 small text-center"
                                style="visibility: hidden">
                                <span class="highlighted-warning">root</span>
                                privileges required.
                              </div>
                              
                            </form>
                          </div>
                        </div>
                        <!-- /card-text -->

                    </div>
                </div>
            </div>
            <!-- /IP & Port Configuration -->

            <!-- Listener -->
            <div class="col-12 col-md-12 mb-4">
                <div class="card shadow h-100">
                    <div class="card-body">

                        <!-- Advanced switch -->
                        <div class="custom-control custom-switch float-right">
                            <input id="listener-advanced-switch" type="checkbox" class="custom-control-input" checked>
                            <!-- <label for="listener-advanced-switch" class="custom-control-label small pr-2 pb-1"
                                style="padding-top:2px" data-toggle="tooltip" title="Display advanced settings" >
                                Advanced
                            </label> -->
                        </div>

                        <h5 class="card-title"><b>Listener</b></h5>

                        <div class="card-text">
                            <div class="col-auto mt-12">
                                <div class="input-group" data-toggle="tooltip">
                                    <div class="container  mt-4">
                                            
                                            <pre id="listener-command"  class="bg-default text-break text-center" spellcheck="false"
                                                style="display: flex; justify-content: center;" contenteditable="true"></pre>
                                        
                                        </div>
                                        
                                        
                                    </div>
                                </div>
                                <!-- <div class="mb-3" data-toggle="tooltip">
    <textarea class="form-control form-control-lg text-center px-1" id="listener-command" readonly></textarea>
  
  </div> -->
                            <!-- Command -->
                            <div class="row justify-content-center">
                                <div class="col-auto position-relative" style="min-width: 15vw">
                                    <!-- <pre class="prompt-sign">🚀</pre> -->
                                    <!-- <pre id="listener-command" class=" text-wrap text-break p-4 pl-5 mb-2" spellcheck="false"
                                        style="outline: none; font-size:1em;" contenteditable="true" ></pre> -->

                                </div>
                            </div>

                            <!-- Advanced section-->
                            <form class="row justify-content-center collapse" id="listener-advanced">
                                <!-- <label for="listener-selection" class="col-auto col-form-label ">Type</label> -->
                                <div class="container">
                                    <select class="custom-select text-center" id="listener-selection">
                                        <!-- filled by init()-->
                                    </select>
                                </div>
                            </form>

                        </div>
                        <!-- /card-text -->

                        <!-- Copy button -->
                        <button id="copy-listener" type="button" class="btn btn-primary float-right"
                            data-toggle="tooltip" title="Copy to clipboard">
                            Copy
                        </button>
                    </div>
                </div>
            </div>
            <!-- /listener -->

        </div>

        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="reverse-tab" data-toggle="tab" href="#reverse" role="tab"
                    aria-controls="reverse" aria-selected="true">Reverse</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="bind-tab" data-toggle="tab" href="#bind" role="tab" aria-controls="bind"
                    aria-selected="false">Bind</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="msfvenom-tab" data-toggle="tab" href="#msfvenom" role="tab"
                    aria-controls="msfvenom" aria-selected="false">MSFVenom</a>
            </li>
            <!-- <li class="nav-item">
                <a class="nav-link " id="settings-tab" data-toggle="tab" href="#settings" role="tab"
                    aria-controls="settings" aria-selected="false" aria-disabled="true">Settings</a>
            </li> -->
        </ul>

        <div class="tab-content">
            <!-- Reverse Shell Tab-->
            <div class="tab-pane active" id="reverse" role="tabpanel" aria-labelledby="reverse-tab">
                <div class="card shadow mb-5">
                    <div class="card-body">

                        <!-- Show all advanced switch -->
                        <div class="custom-control custom-switch float-right">
                            <input id="revshell-advanced-switch" type="checkbox" class="custom-control-input" checked>
                            <label for="revshell-advanced-switch" class="custom-control-label small pr-2 pb-1"
                                style="padding-top:2px" data-toggle="tooltip" title="Display all advanced settings">
                                Show Advanced
                            </label>
                            <!-- <img src="assets/floppy-disk-solid.svg" class="download-svg" data-toggle="tooltip" title="Download Payload"> -->
                        </div>
                        <!-- /Show all advanced switch -->

                        <!---Filter OS-->
                        <div class="row">
                            <label for="os-options" class="col-auto col-form-label float-left"
                                style="font-size:1rem">OS</label>
                            <div class="col-auto">
                                <select id="os-options" class="custom-select">
                                    <option class="os-item" value="all">All</option>
                                    <option class="os-item" value="linux">Linux</option>
                                    <option class="os-item" value="windows">Windows</option>
                                    <option class="os-item" value="mac">Mac</option>
                                </select>
                            </div>
                        </div>
                        <!---/Filter OS-->

                        <div class="card-text mt-4">
                            <div class="row">

                                <!-- Left column: Reverse shell selection -->
                                <div class="col-12 col-md-3">
                                    <div id="reverse-shell-selection" class="list-group overflow-auto"
                                        style="max-height: 520px">
                                        <!-- filled by init()-->
                                    </div>
                                </div>

                                <!-- Right column -->
                                <div class="col-12 col-md-9 d-flex flex-column">

                                    <!-- Reverse Shell Command -->
                                    <div class="row flex-grow-1">
                                        <div class="col position-relative">
                                            <!-- <pre class="prompt-sign">🚀</pre> -->
                                            <pre id="reverse-shell-command"
                                                class=" border pre-wrap text-break p-4 pl-5" spellcheck="false"
                                                style="outline: none; font-size:1em;" contenteditable="true"></pre>
                                        </div>
                                    </div>

                                    <!-- Advanced section -->
                                    <form class="row justify-content-center collapse" id="revshell-advanced">

                                        <!-- Shell -->
                                        <div class="col-auto mr-3">
                                            <div class="row">
                                                <label for="shell" class="col-auto col-form-label">Shell</label>
                                                <div class="col-auto">
                                                    <select id="shell" class="custom-select">
                                                        <!-- filled by init() -->
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Encoding -->
                                        <div class="col-auto ml-3">
                                            <div class="form-group row">
                                                <label for="encoding" class="col-auto col-form-label">Encoding</label>
                                                <div class="col-auto">
                                                    <select id="encoding" class="custom-select">
                                                        <option value="None">None</option>
                                                        <option value="encodeURL">URL Encode</option>
                                                        <option value="encodeURLDouble">Double URL Encode</option>
                                                        <option value="Base64">Base64</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                    </form>
                                    <!-- /Advanced section -->

                                    <div class="row justify-content-end mr-1">
                                            <!-- Toasts for Reverse Shell Auto Copy -->
                                    <div id="clipboard-toast" class="toast position-fixed text-white" data-delay="1200"
                                    style="bottom: 16px; left: 50%; transform: translateX(-50%); background: rgba(32, 32, 32, .85)">
                                    <div class="toast-body">
                                        Copied to clipboard
                                    </div>
                                    </div>

                                    <div id="clipboard-failure-toast" class="toast position-fixed text-white" data-delay="1200"
                                    style="bottom: 16px; left: 50%; transform: translateX(-50%); background: rgba(255, 0, 0, .85)">
                                    <div class="toast-body">
                                        Error copying to clipboard
                                    </div>
                                    </div>
                                    <!-- Auto-copy switch -->
                                        <!-- <div class="custom-control custom-switch mt-2 mr-3" data-toggle="tooltip"
                                            title="Auto-copy to clipboard when selecting a new shell type">
                                            <input id="auto-copy-switch" class="custom-control-input" type="checkbox"
                                                checked>
                                            <label for="auto-copy-switch" class="custom-control-label small pr-2 pb-1"
                                                style="padding-top: 2px">Auto-copy</label>
                                        </div> -->
<button type="button" class="raw-listener btn btn-primary float-right mr-3"
                                        data-toggle="tooltip" title="Download Payload">
                                                <i class="mdi mdi-folder-download "></i>
                                            Download 
                                        </button>
                                        <!-- Raw button -->
                                        <button type="button" class="raw-listener btn btn-primary float-right mr-3"
                                                data-toggle="tooltip" title="View raw">
                                            Raw
                                        </button>

                                        <!-- Copy button -->
                                        <button id="copy-reverse-shell-command" data-toggle="tooltip"
                                            title="Copy to clipboard" type="button" class="btn btn-primary float-right">
                                            Copy
                                        </button>
                                    </div>

                                </div>
                                <!-- /Right column -->

                            </div>
                        </div>
                        <!-- /card-text -->

                    </div>
                </div>
            </div>
            <!-- /Reverse Shell Tab -->

            <!-- Bind Shell Tab -->
            <div class="tab-pane" id="bind" role="tabpanel" aria-labelledby="bind-tab">
                <div class="card shadow mb-5">
                    <div class="card-body">
                        <!-- <img  class="download-svg float-right " data-toggle="tooltip" title="Download Payload"> -->
                        <div class="card-text mt-4">
                            <div class="row">
                                <!-- Left column: Bind selection -->
                                <div class="col-12 col-md-3">
                                    <div id="bind-shell-selection" class="list-group overflow-auto" style="max-height: 520px">
                                        <!-- filled by init()-->
                                    </div>
                                </div>
                                <!-- Right column -->
                                <div class="col-12 col-md-9 d-flex flex-column">
                                    <!-- Command -->
                                    <div class="row flex-grow-1">
                                        <div class="col position-relative">
                                            <!-- <pre class="prompt-sign">🚀</pre> -->
                                            <pre id="bind-shell-command" class=" border pre-wrap text-break p-4 pl-5" spellcheck="false"
                                                style="outline: none; font-size:1em;" contenteditable="true"></pre>
                                        </div>
                                    </div>

                                    <div class="row justify-content-end mr-1">
                                        <!-- Auto-copy switch -->
                                        <!-- <div class="custom-control custom-switch mt-2 mr-3" data-toggle="tooltip"
                                            title="Auto-copy to clipboard when selecting a new shell type">
                                            <input id="auto-copy-switch" class="custom-control-input" type="checkbox" checked>
                                            <label for="auto-copy-switch" class="custom-control-label small pr-2 pb-1"
                                                style="padding-top: 2px">Auto-copy</label>
                                        </div> -->
                                        <!-- Raw button -->
                                        <button type="button" class="raw-listener btn btn-primary float-right mr-3"
                                        data-toggle="tooltip" title="Download Payload">
                                                <i class="mdi mdi-folder-download "></i>
                                            Download 
                                        </button>
                                        <button type="button" class="raw-listener btn btn-primary float-right mr-3"
                                                data-toggle="tooltip" title="View raw">
                                            Raw
                                        </button>

                                        <!-- Copy button -->
                                        <button id="copy-bind-shell-command" data-toggle="tooltip" title="Copy to clipboard"
                                            type="button" class="btn btn-primary float-right">
                                            Copy
                                        </button>
                                    </div>
                                </div>
                                <!-- /Right column -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Bind Shell Tab -->

            <!-- MSFVenom Tab -->
            <div class="tab-pane" id="msfvenom" role="tabpanel" aria-labelledby="msfvenom-tab">
                <div class="card shadow mb-5">
                    <div class="card-body">
                        <!-- <img src="assets/floppy-disk-solid.svg" class="download-svg float-right" data-toggle="tooltip" title="Download Payload"> -->
                        <div class="card-text mt-4">
                            <div class="row">
                                    <!-- Left column: MSFVenom selection -->
                                    <div class="col-12 col-md-3">
                                        <div id="msfvenom-selection" class="list-group overflow-auto"
                                            style="max-height: 520px">
                                            <!-- filled by init()-->
                                        </div>
                                    </div>

                                    <!-- Right column -->
                                    <div class="col-12 col-md-9 d-flex flex-column">

                                        <!-- Command -->
                                        <div class="row flex-grow-1">
                                            <div class="col position-relative">
                                                <!-- <pre class="prompt-sign">🚀</pre> -->
                                                <pre id="msfvenom-command"
                                                    class=" border pre-wrap text-break p-4 pl-5" spellcheck="false"
                                                    style="outline: none; font-size:1em;" contenteditable="true"></pre>
                                            </div>
                                        </div>

                                        <div class="row justify-content-end mr-1">
                                            <!-- Auto-copy switch -->
                                            <!-- <div class="custom-control custom-switch mt-2 mr-3" data-toggle="tooltip"
                                                title="Auto-copy to clipboard when selecting a new shell type">
                                                <input id="auto-copy-switch" class="custom-control-input"
                                                    type="checkbox" checked>
                                                <label for="auto-copy-switch"
                                                    class="custom-control-label small pr-2 pb-1"
                                                    style="padding-top: 2px">Auto-copy</label>
                                            </div> -->
                                            <button type="button" class="raw-listener btn btn-primary float-right mr-3"
                                        data-toggle="tooltip" title="Download Payload">
                                                <i class="mdi mdi-folder-download "></i>
                                            Download 
                                        </button>
                                            <!-- Raw button -->
                                            <button type="button" class="raw-listener btn btn-primary float-right mr-3"
                                                    data-toggle="tooltip" title="View raw">
                                                Raw
                                            </button>

                                            <!-- Copy button -->
                                            <button id="copy-msfvenom-command" data-toggle="tooltip"
                                                title="Copy to clipboard" type="button"
                                                class="btn btn-primary float-right">
                                                Copy
                                            </button>
                                        </div>
                                    </div>
                                    <!-- /Right column -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /MSFVenom Tab -->
    </div>


        </div>
      </div>
    </div>
    <!-- </div> -->
<!-- </div>
  </div>
    </div>
    </div>
    </div>
    </div> -->
    <!-- </div> -->
<?php include("../footer.php"); ?>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="../assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../assets/js/off-canvas.js"></script>
    <script src="../assets/js/hoverable-collapse.js"></script>
    <script src="../assets/js/misc.js"></script>
    <script src="../assets/js/settings.js"></script>
    <script src="../assets/js/todolist.js"></script>
    <script src="js/data.js"></script>

<!-- RSG raw link generator -->
<script src="js/raw-link.js"></script>

<!-- Light switch -->
<script src="js/light-mode-switch.js"></script>

<!-- Main js -->
<script src="js/script.js"></script>
    <!-- endinject -->
    <!-- <link href="assets/bootstrap.min.css" rel="stylesheet"> -->
    <script src="assets/jquery-3.5.1.slim.min.js"></script>
    <script src="assets/popper-1.16.1.min.js"></script>
    <script src="assets/bootstrap-4.5.2.min.js"></script>
    <script src="assets/axios.min.js"></script>
    <script src="https://www.bootstrapdash.com/demo/corona/jquery/template/assets/vendors/codemirror/codemirror.js"></script>
    <script src="https://www.bootstrapdash.com/demo/corona/jquery/template/assets/vendors/codemirror/shell.js"></script>
    <script src="https://www.bootstrapdash.com/demo/corona/jquery/template/assets/js/codeEditor.js"></script>
  </body>
</html>
