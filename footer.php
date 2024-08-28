<!--End Other Project-->
   <!--Start Footer-->
   <footer>
      <div class="container">
         <div class="row">
            <div class="col-lg-4">
               <div class="footer-">
                  <a href="javascript:void(0)"><img src="images/common/footer-logo.png" alt="logo"></a>
               </div>
               <p>View Properties is a responsive real estate landing page template.</p>
            </div>
            <div class="col-lg-4 col-md-6">
               <h3>Contact Us</h3>
               <ul class="footer-address-list">
                  <li><i class="fas fa-map-marker-alt"></i> 41/A Kirloskar layout omhr layout Bangalore karnataka 560073</li>
                  <li><i class="fas fa-phone-alt"></i> <a href="tel:+919555032215">+91 95550 32215</a></li>
                  <li><i class="fas fa-envelope"></i> <a href="mailto:viewpropblr@gmail.com">viewpropblr@gmail.com</a></li>
                  <li><i class="fa fa-link"></i> <a href="privacy_policy.php" target="_blank">Privacy Policy</a></li>
               </ul>
            </div>
            <div class="col-lg-4 col-md-6">
               <h3>Follow Us</h3>
               <div class="footer-social-media-icons"> <a href="javascript:void(0)" target="blank" class="facebook"><i class="fab fa-facebook"></i></a> <a href="javascript:void(0)" target="blank" class="twitter"><i class="fab fa-twitter"></i></a> <a href="javascript:void(0)" target="blank" class="instagram"><i class="fab fa-instagram"></i></a> <a href="javascript:void(0)" target="blank" class="linkedin"><i class="fab fa-linkedin"></i></a> </div>
            </div>
         </div>
      </div>
      <div class="copyright">
         <div class="container">
            <div class="row">
               <div class="col-lg-12">
                  <div class="footer-- text-center pt20">
                     <p>Copyright © 2024-2025 View Properties. All rights reserved. By <a href="https://amanyasoftech.com" target="blank">Amanaya RA Softech</a></p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </footer>


   <!--End Footer-->

   <!-- boucher modal -->
   <div class="modal" id="boucherModal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      
      <div class="modal-body">
         <div class="form-block">
                  <div class="form-header">
                     <button style="color:#000;background-color:inherit;line-height: 0;text-align: right;position: absolute;font-size:30px;right: -10px;" type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
                     <h3 class="mb10"><span>ENQUIRE NOW</span></h3>
                     <p>Our Sample Flat is Ready for Viewing</p>
                  </div>
                 <form id="contactFormFooter" data-toggle="validator" class="shake" >

                     <div class="row">
                        <div class="fieldsets col-sm-12">
                           <input type="text" id="full_name" name="name" placeholder="Enter your name" required data-error="Please fill out this field">
                           <div class="help-block with-errors"></div>
                        </div>
                        <div class="fieldsets col-sm-12">
                           <input type="email" id="email_id" name="email" placeholder="Enter your email" required>
                           <div class="help-block with-errors"></div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="fieldsets col-sm-12">
                           <input type="text" id="mobile_mobile" name="mobile" placeholder="Enter your mobile number" required data-error="Please fill out this field">
                           <div class="help-block with-errors"></div>
                        </div>
                        <div class="fieldsets col-sm-12">
                           <select name="requirment" id="requirment_two" required>
                              <option value="">Select Your Requirement</option>
                              <option value="2_BHK">2 BHK</option>
                              <option value="3_BHK">3 BHK</option>
                              <option value="4_BHK">4 BHK</option>
                           </select>
                           <div class="help-block with-errors"></div>
                        </div>
                     </div>
                     <div class="fieldsets">
                        <textarea id="message_user" name="message" rows="4" placeholder="Enter your message" required></textarea>
                        <div class="help-block with-errors"></div>
                     </div>
                     <input type="hidden" name="submit" value="submit">
                     <input type="hidden" name="boucher_type" id="boucher_type">
                     <button type="submit" id="form-submit" class="btn lnk btn-main bg-btn">Submit <span class="circle"></span></button>
                     <div id="msgSubmit" class="h3 text-center hidden"></div>
                     <div class="clearfix"></div>
                     <p class="trm"><i class="fas fa-lock"></i> We respect your privacy and are committed to protecting it.</p>
                  </form>
               </div>
      </div>
     
    </div>
  </div>
</div>

   <!-- js placed at the end of the document so the pages load faster -->
   <script src="js/jquery.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
   <script src="js/popper.min.js"></script>
   <script src="js/jquery.magnific-popup.min.js"></script>
   <script src="js/owl.carousel.js"></script>
   <script src="js/swiper.min.js"></script>
   <script src="js/SmoothScroll.min.js"></script>
   <script src="js/parallax.min.js"></script>
   <script src="js/validator.min.js"></script>
   <script src="js/form.js"></script>
   <!--common script file-->
   <script src="js/main.js"></script>
   <script src="js/hero-script.js"></script>
   <script>
      function checkform(argument) {
         $("#boucher_type").val(argument);
         $('#boucherModal').modal('show');
      }
   </script>
</body>

</html>