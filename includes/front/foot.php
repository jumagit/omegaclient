 <!-- Footer
  ============================================= -->
 <footer id="footer" class="bg-danger">
     <div class="container">
         <div class="row">
             <div class="col-lg d-lg-flex align-items-center">
                 <ul class="nav justify-content-center justify-content-lg-start text-3">
                     <li class="nav-item"> <a class="nav-link active" href="#">About Us</a></li>
                     <li class="nav-item"> <a class="nav-link" href="#">Support</a></li>
                     <li class="nav-item"> <a class="nav-link" href="#">Help</a></li>
                     <li class="nav-item"> <a class="nav-link" href="#">Careers</a></li>
                     <li class="nav-item"> <a class="nav-link" href="#">Affiliate</a></li>
                     <li class="nav-item"> <a class="nav-link" href="#">Fees</a></li>
                 </ul>
             </div>
             <div class="col-lg d-lg-flex justify-content-lg-end mt-3 mt-lg-0">
                 <ul class="social-icons justify-content-center text-white">
                     <li class="social-icons-facebook"><a data-toggle="tooltip" href="http://www.facebook.com/"
                             target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                     <li class="social-icons-twitter"><a data-toggle="tooltip" href="http://www.twitter.com/"
                             target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                     <li class="social-icons-google"><a data-toggle="tooltip" href="http://www.google.com/"
                             target="_blank" title="Google"><i class="fab fa-google"></i></a></li>
                     <li class="social-icons-youtube"><a data-toggle="tooltip" href="http://www.youtube.com/"
                             target="_blank" title="Youtube"><i class="fab fa-youtube"></i></a></li>
                 </ul>
             </div>
         </div>
         <div class="footer-copyright pt-3 pt-lg-2 mt-2">
             <div class="row">
                 <div class="col-lg">
                     <p class="text-center text-lg-left text-white mb-2 mb-lg-0">Copyright &copy;
                         <?php echo date('Y') ?> <a href="#" class="h5 text-white">Omega</a>. All Rights Reserved.</p>
                 </div>
                 <div class="col-lg d-lg-flex align-items-center justify-content-lg-end">
                     <ul class="nav justify-content-center text-white">
                         <li class="nav-item"> <a class="nav-link active" href="#">Security</a></li>
                         <li class="nav-item"> <a class="nav-link" href="#">Terms</a></li>
                         <li class="nav-item"> <a class="nav-link" href="#">Privacy</a></li>
                     </ul>
                 </div>
             </div>
         </div>
     </div>
 </footer>
 <!-- Footer end -->

 </div>
 <!-- Document Wrapper end -->

 <!-- Back to Top
============================================= -->
 <a id="back-to-top" data-toggle="tooltip" title="Back to Top" href="javascript:void(0)"><i
         class="fa fa-chevron-up"></i></a>

 <!-- Video Modal
============================================= -->
 <div class="modal fade" id="videoModal" tabindex="-1" role="dialog">
     <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
         <div class="modal-content bg-transparent border-0">
             <button type="button" class="close text-white opacity-10 ml-auto mr-n3 font-weight-400"
                 data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
             <div class="modal-body p-0">
                 <div class="embed-responsive embed-responsive-16by9">
                     <iframe class="embed-responsive-item" id="video" allow="autoplay"></iframe>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- Video Modal end -->

 <!-- Script -->
 <script src="new/vendor/jquery/jquery.min.js"></script>
 <script src="new/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
 <script src="new/vendor/bootstrap-select/js/bootstrap-select.min.js"></script>
 <script src="new/vendor/owl.carousel/owl.carousel.min.js"></script>
 <script src="new/js/theme.js"></script>

 <script>
tday = new Array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");
tmonth = new Array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October",
    "November", "December");

function GetClock() {
    var d = new Date();
    var nday = d.getDay(),
        nmonth = d.getMonth(),
        ndate = d.getDate(),
        nyear = d.getYear();
    if (nyear < 1000) nyear += 1900;
    var nhour = d.getHours(),
        nmin = d.getMinutes(),
        nsec = d.getSeconds(),
        ap;
    if (nhour == 0) {
        ap = " AM";
        nhour = 12;
    } else if (nhour < 12) {
        ap = " AM";
    } else if (nhour == 12) {
        ap = " PM";
    } else if (nhour > 12) {
        ap = " PM";
        nhour -= 12;
    }
    if (nmin <= 9) nmin = "0" + nmin;
    if (nsec <= 9) nsec = "0" + nsec;
    document.getElementById('clock').innerHTML = "" + tday[nday] + ", " + tmonth[nmonth] + " " + ndate + ", " + nyear +
        " " + nhour + ":" + nmin + ":" + nsec + ap + "";
}
window.onload = function() {
    GetClock();
    setInterval(GetClock, 1000);
}

//tool tips

$('#username').tooltip({
    'trigger': 'hover',
    'title': 'Enter the Email associated with your account',
    'placement': 'right',
    'container': 'body'
});
$('#password').tooltip({
    'trigger': 'hover',
    'title': 'Enter the corresponding password to gain access',
    'placement': 'right',
    'container': 'body'
});
 </script>
 </body>

 <!-- Mirrored from demo.harnishdesign.net/html/payyed/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 May 2020 05:37:06 GMT -->

 </html>