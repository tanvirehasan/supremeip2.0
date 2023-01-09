 <!-- [ Layout footer ] Start -->
                    <nav class="layout-footer footer footer-light">
                        <div class="container-fluid d-flex flex-wrap justify-content-between text-center container-p-x pb-3">
                            <div class="pt-3">
                                <span class="float-md-right d-none d-lg-block">Development by Tanvir &amp; Made with <i class="fas fa-heart text-danger mr-2"></i></span>
                            </div>
                            <div>
                                <a href="javascript:" class="footer-link pt-3">About Us</a>
                                <a href="javascript:" class="footer-link pt-3 ml-4">Help</a>
                                <a href="javascript:" class="footer-link pt-3 ml-4">Contact</a>
                                <a href="javascript:" class="footer-link pt-3 ml-4">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </nav>
                    <!-- [ Layout footer ] End -->
                </div>
                <!-- [ Layout content ] Start -->
            </div>
            <!-- [ Layout container ] End -->
        </div>
        <!-- Overlay -->
        <div class="layout-overlay layout-sidenav-toggle"></div>
    </div>
    <!-- [ Layout wrapper] End -->


    <!-- Core scripts -->
    <script src="assets/js/imgdragdrup.js"></script>
    <script src="assets/js/pace.js"></script>
    <!-- <script src="assets/js/jquery-3.3.1.min.js"></script> -->
    <script src="assets/libs/popper/popper.js"></script>
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/sidenav.js"></script>
    <script src="assets/js/layout-helpers.js"></script>
    <script src="assets/js/material-ripple.js"></script>

    <!-- Libs -->
    <script src="assets/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="assets/libs/eve/eve.js"></script>
    <script src="assets/libs/flot/flot.js"></script>
    <script src="assets/libs/flot/curvedLines.js"></script>
    <script src="assets/libs/chart-am4/core.js"></script>
    <script src="assets/libs/chart-am4/charts.js"></script>
    <script src="assets/libs/chart-am4/animated.js"></script>

    <!-- Demo -->
    <script src="assets/js/demo.js"></script>
    <script src="assets/js/analytics.js"></script>

  <script>
        $(document).ready(function() {
            $('#summernote').summernote();
        });

        jQuery('#summernote').summernote({
              height: 300,                
              minHeight: null,          
              maxHeight: null,             
              focus: false                
        });
        
        $(document).ready(function() {
            $('#contactus').summernote();
        });

        jQuery('#contactus').summernote({
              height: 200,                
              minHeight: null,          
              maxHeight: null,             
              focus: false                
        });

  </script>


  <script>
    tinymce.init({
        selector: 'textarea#neweditor',
        height:800,
        plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
        toolbar: 'insertfile blocks fontfamily fontsize forecolor backcolor | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
    });
  </script>

  <script>
    tinymce.init({
        selector: 'textarea#neweditordeflt',
        height:200,
        plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
        toolbar: 'insertfile blocks fontfamily fontsize forecolor backcolor | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
    });
  </script>




    <script>
        $(document).ready(function() {
            // checkCookie();
            $('#exampleModalCenter').modal();
        });

        function setCookie(cname, cvalue, exdays) {
            var d = new Date();
            d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
            var expires = "expires=" + d.toGMTString();
            document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
        }

        function getCookie(cname) {
            var name = cname + "=";
            var decodedCookie = decodeURIComponent(document.cookie);
            var ca = decodedCookie.split(';');
            for (var i = 0; i < ca.length; i++) {
                var c = ca[i];
                while (c.charAt(0) == ' ') {
                    c = c.substring(1);
                }
                if (c.indexOf(name) == 0) {
                    return c.substring(name.length, c.length);
                }
            }
            return "";
        }

        function checkCookie() {
            var ticks = getCookie("modelopen");
            if (ticks != "") {
                ticks++;
                setCookie("modelopen", ticks, 1);
                if (ticks == "2" || ticks == "1" || ticks == "0") {
                    $('#exampleModalCenter').modal();
                }
            } else {
                // user = prompt("Please enter your name:", "");
                $('#exampleModalCenter').modal();
                ticks = 1;
                setCookie("modelopen", ticks, 1);
            }
        }
    </script>
    <script src="assets/js/pages/dashboards_index.js"></script>
    <script src="dist/js/jquery.dataTables.min.js"></script>
    <script> $('#data_table').DataTable();</script>


</body>

</html>
