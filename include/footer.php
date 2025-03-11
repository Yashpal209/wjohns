 <!-- Footer Start -->
 <div class="container-fluid footer  py-5 wow fadeIn footer" data-wow-delay="0.2s">
     <div class="container">
         <div class="row g-5 mb-5 align-items-center">
             <div class="col-lg-4">
                 <div class="position-relative mx-auto">
                     <input class="form-control w-100 py-2 ps-3 pe-4" type="text" placeholder="Enter your email to subscribe">
                     <button type="button" class="btn btn-primary position-absolute top-0 end-0 py-1 px-3 mt-1 me-1">Subscribe</button>
                 </div>
             </div>
             <div class="col-lg-5">
                 <div class="d-flex align-items-center justify-content-center justify-content-lg-end">
                     <a class="btn btn-light btn-md-square me-3" href="https://www.facebook.com/wjohnboardingschool"><img src="img/icons/facebook.png" width="90%" alt="Facebook"></a>
                     <a class="btn btn-light btn-md-square me-3" href="https://www.youtube.com/@wjohnmultipurposeboardings2305"><img src="img/icons/youtube.png" width="90%" alt="youtube"></a>
                     <a class="btn btn-light btn-md-square me-3" href=""><img src="img/icons/twitter.png" width="90%" alt="twitter"></a>
                     <a class="btn btn-light btn-md-square me-3" href=""><img src="img/icons/instagram.png" width="90%" alt="instagram"></a>
                     
                 </div>
             </div>
         </div>
         <div class="row g-5">
             <div class="col-md-6 col-lg-6 col-xl-3">
                 <div class="footer-item d-flex flex-column">
                     <div class="footer-item">
                         <center>
                             <a href="#">
                                 <img class="logo" src="img/logo.png" alt="Logo">
                                 <h3 class="text-white">W. John Multipurpose Boarding School</h3>
                             </a>
                         </center>
                     </div>
                 </div>
             </div>
             <div class="col-md-6 col-lg-6 col-xl-3">
                 <div class="footer-item d-flex flex-column">
                     <h4 class="text-white mb-4">Quick Links</h4>
                     <a href="index.php"> Home</a>
                     <a href="about.php"> About Us</a>
                     <a href=""> Academics</a>
                     <a href="#"> Admissions</a>
                     <a href="contact.php"> Contact Us</a>
                 </div>
             </div>
             <div class="col-md-6 col-lg-6 col-xl-3">
                 <div class="footer-item d-flex flex-column">
                     <h4 class="text-white mb-4">Our Services</h4>
                     <a href="#"> Modern Classrooms</a>
                     <a href="#"> Safe Boarding Facilities</a>
                     <a href="#"> Sports & Extracurriculars</a>
                     <a href="#"> Digital Learning</a>
                     <a href="#"> Career Counseling</a>
                 </div>
             </div>
             <div class="col-md-6 col-lg-6 col-xl-3">
                 <div class="footer-item d-flex flex-column">
                     <h4 class="text-white mb-4">Contact Info</h4>
                     <a href="#"><i class="fa fa-map-marker-alt text-primary me-2"></i> Piska Nagri Rd, Ranchi, Nagri, Jharkhand 835303</a>
                     <a href="mailto:info@ourschool.com"><i class="fas fa-envelope text-primary me-2"></i> info@wjohnschool.com</a>
                     <a href="tel:+91 9431707068"><i class="fas fa-phone text-primary me-2"></i> +91 9431707068</a>
                     <a href="tel:+91 9431114080"><i class="fas fa-phone text-primary me-2"></i> +91 9431114080</a>
                 </div>
             </div>
         </div>
     </div>
 </div>

 <!-- Footer End -->


 <!-- Copyright Start -->
 <div class="container-fluid copyright py-4">
     <div class="container">
         <div class="row g-4 align-items-center">
             <div class="col-md-6 text-center text-md-start mb-md-0">
                 <span class="text-body"><a href="#" class="border-bottom text-white"><i class="fas fa-copyright text-light me-2"></i>W. John Multipurpose Boarding School</a>, All right reserved.</span>
             </div>
             <div class="col-md-6 text-center text-md-end text-body">
                 Designed By <a class="border-bottom text-white" href="https://www.jharkhanditservices.com/">Jharkhand IT Services Software Pvt. Ltd.</a>
             </div>
         </div>
     </div>
 </div>
 <!-- Copyright End -->


 <!-- Back to Top -->
<a href="#" class="btn btn-primary btn-lg-square back-to-top" style="display: none;">
    <i class="fa fa-arrow-up"></i>
</a>


 <script>
     document.addEventListener("DOMContentLoaded", function() {
         const counters = document.querySelectorAll(".counter");
         counters.forEach(counter => {
             counter.innerText = "0";
             const updateCounter = () => {
                 const target = +counter.getAttribute("data-target");
                 const count = +counter.innerText;
                 const increment = target / 200; // Adjust speed

                 if (count < target) {
                     counter.innerText = Math.ceil(count + increment);
                     setTimeout(updateCounter, 20);
                 } else {
                     counter.innerText = target;
                 }
             };
             updateCounter();
         });
     });
 </script>