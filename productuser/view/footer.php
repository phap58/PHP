 <!-- Footer -->
 <div class="container-fluid bg-dark text-light mt-5 pt-5">
     <div class="row px-xl-5 pt-5">
         <div class="col-lg-4 col-md-12 mb-5">
             <h5 class="text-uppercase mb-4">Get in touch</h5>
             <p class="mb-4">
                 No dolore ipsum accusam no lorem. Invidunt sed clita kasd clita et et dolor sed dolor. Rebum tempor no vero est magna amet no
             </p>
             <p class="mb-2">
                 <i class="fas fa-map-marker-alt me-3 text-primary"></i>
                 123 Street, New York, USA
             </p>
             <p class="mb-2">
                 <i class="fas fa-envelope me-3 text-primary"></i>
                 info@example.com
             </p>
             <p class="mb-0">
                 <i class="fas fa-phone-alt me-3 text-primary"></i>
                 +012 345 67890
             </p>
         </div>
         <div class="col-lg-8 col-md-12">
             <div class="row">
                 <div class="col-md-4 mb-5">
                     <h5 class="text-uppercase mb-4">Quick shop</h5>
                     <div class="footer-action d-flex flex-column">
                         <a href="#" class="footer-action__link text-light mb-2">
                             <i class="fas fa-angle-right"></i>
                             Home
                         </a>
                         <a href="#" class="footer-action__link text-light mb-2">
                             <i class="fas fa-angle-right"></i>
                             Our Shop
                         </a>
                         <a href="#" class="footer-action__link text-light mb-2">
                             <i class="fas fa-angle-right"></i>
                             Shopping Cart
                         </a>
                         <a href="#" class="footer-action__link text-light mb-2">
                             <i class="fas fa-angle-right"></i>
                             Checkout
                         </a>
                         <a href="#" class="footer-action__link text-light mb-2">
                             <i class="fas fa-angle-right"></i>
                             Contact us
                         </a>
                     </div>
                 </div>
                 <div class="col-md-4 mb-5">
                     <h5 class="text-uppercase mb-4">My account</h5>
                     <div class="footer-action d-flex flex-column">
                         <a href="#" class="footer-action__link text-light mb-2">
                             <i class="fas fa-angle-right"></i>
                             Home
                         </a>
                         <a href="#" class="footer-action__link text-light mb-2">
                             <i class="fas fa-angle-right"></i>
                             Our Shop
                         </a>
                         <a href="#" class="footer-action__link text-light mb-2">
                             <i class="fas fa-angle-right"></i>
                             Shopping Cart
                         </a>
                         <a href="#" class="footer-action__link text-light mb-2">
                             <i class="fas fa-angle-right"></i>
                             Checkout
                         </a>
                         <a href="#" class="footer-action__link text-light mb-2">
                             <i class="fas fa-angle-right"></i>
                             Contact us
                         </a>
                     </div>
                 </div>
                 <div class="col-md-4 mb-5">
                     <h5 class="text-uppercase mb-4">Newsletter</h5>
                     <p>Duo stet tempor ipsum sit amet magna ipsum tempor est</p>
                     <form>
                         <div class="input-group">
                             <input type="text" class="form-control shadow-none rounded-0" placeholder="Your Email Address">
                             <button class="btn btn-primary shadow-none rounded-0">Sign Up</button>
                         </div>
                     </form>
                     <h6 class="text-uppercase mt-4 mb-3">Follow us</h6>
                     <div class="d-flex">
                         <a href="#" class="btn btn-primary rounded-0 me-2">
                             <i class="fab fa-facebook-f"></i>
                         </a>
                         <a href="#" class="btn btn-primary rounded-0 me-2">
                             <i class="fab fa-instagram"></i>
                         </a>
                         <a href="#" class="btn btn-primary rounded-0 me-2">
                             <i class="fab fa-twitter"></i>
                         </a>
                         <a href="#" class="btn btn-primary rounded-0 me-2">
                             <i class="fab fa-linkedin-in"></i>
                         </a>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <div class="footer-copyright row mx-xl-5 py-4 border-top">
         <div class="col-12">
             <p>
                 © <a href="#" class="text-primary">Domain</a>. All Rights Reserved. Designed by
                 <a href="#" class="text-primary">HTML Codex</a>
             </p>
         </div>
     </div>
 </div>
 <!-- Bootstrap -->

 <script src="./assets/bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js"></script>
 <!-- Jquery -->
 <script src="./assets/js/jquery-3.6.0.min.js"></script>
 <!-- Owl Carousel -->
 <script src="./assets/js/owl.carousel.min.js"></script>
 <!-- Script -->
 <script src="./assets/js/index.js"></script>
 <script>
     document.addEventListener("DOMContentLoaded", function() {
         // Lựa chọn mục menu thứ nhất
         var firstMenuItem = document.querySelector('.nav-item:first-child .nav-link');

         // Tự động kích hoạt sự kiện nhấp chuột
         firstMenuItem.click();
     });
 </script>
 <script>
     function decreaseValue() {
         var input = document.getElementById('quantityInput');
         var currentValue = parseInt(input.value);

         if (currentValue > 1) {
             input.value = currentValue - 1;
         }
     }

     function increaseValue() {
         var input = document.getElementById('quantityInput');
         var currentValue = parseInt(input.value);

         // Giới hạn tùy chỉnh tại đây, ví dụ giá trị tối đa là 10
         var maxValue = 10;

         if (currentValue < maxValue) {
             input.value = currentValue + 1;
         }
     }
 </script>
 </body>

 </html>