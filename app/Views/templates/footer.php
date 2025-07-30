
<?php
  $uriPath = service('uri')->getPath();
?>
<!-- 
      <div class="app-store-banner">
        <img src="<?=base_url()?>assets/images/STEP-playstore-icon.webp" alt="STEP available in play store" />
        <div class="app-store-banner-text">
          <h1>STEP available in Play Store</h1>
          <a class="border-btn" id = "downloadApp" href="https://play.google.com/store/apps/details?id=com.hindu.step" target="_blank">Download now!</a>
        </div>
      </div> -->

       <script type="text/javascript">
           $(document).ready(function() {
          $("#downloadApp").click(function(event) {
              alert("Download button clicked!"); 
              event.preventDefault();

              window.dataLayer = window.dataLayer || [];
              window.dataLayer.push({
                  'event': 'download_app'
              });

              window.location.href = $(this).attr("href"); 
          });
      });
      </script>
      <footer>
       <div class="footer-container">
        <div class="footer-logo-section">
            <div class="footer-menu-items footer-menu-items-logo">
            <a href="/" title="STEP"><img src="https://d266qgalneck7k.cloudfront.net/assets/images/STEP.svg" loading="lazy" alt="STEP"></a>
            </div>
            <div class="app-store-banner">
            <div class="app-store-banner-text">
              <h1>STEP also available in Play Store</h1>
            </div>
            <a href="https://play.google.com/store/apps/details?id=com.hindu.step&hl=en_IN" target="_blank"><img loading="lazy" src="https://d266qgalneck7k.cloudfront.net/assets/images/google-playstore-icon.svg" alt="STEP available in play store" /></a>
          
            </div>
        </div>
        <div class="footer-menu-container">
        <div class="footer-menu-items">
          <h5>Courses for Individuals</h5>
          <a href="<?=base_url()?>general-communication-online">English for General Communication</a>
          <a href="<?=base_url()?>working-professional-crash">English for Working Professionals</a>
          <a href="<?=base_url()?>exam-preparation-crash-course">English for Competitive exam</a>        
          <a href="<?=base_url()?>ielts-preparation">English for IELTS</a>
        </div>

        <div class="footer-menu-items">
          <h5>Solutions</h5>
          <a href="<?=base_url()?>forcorporate">For Corporate</a>
          <a href="<?=base_url()?>forinstitution">For Institutions</a>
          <a href="<?=base_url()?>kids">For Kids</a>

          <h5 class="mar-top">Support</h5>
          <a href="https://support.steptest.in/support/home">Help Center</a>
          <a href="<?=base_url()?>contactus">Contact Us</a>
          <a href="<?=base_url()?>privacy">Privacy</a>
          <a href="<?=base_url()?>termsandconditions">Terms and Conditions</a>
        </div>

        <div class="footer-menu-items">
          <h5>About STEP</h5>
          <a href="https://step.thehindu.com/blog/">STEP Blog</a>
          <a href="https://step.thehindu.com/">Testimonials</a>
          <a href="https://wellfound.com/company/step-6/jobs">Careers</a>
        </div>

        <div class="footer-menu-items">
          <h5>The Hindu</h5>
          <a href="https://www.thehindu.com/" target="_blank">The Hindu</a>
          <a href="https://bloncampus.thehindubusinessline.com/" target="_blank">BL on Campus</a>
          <a href="https://sportstar.thehindu.com/" target="_blank">Sportstar</a>
          <a href="https://www.thehindubusinessline.com/" target="_blank">Business Line</a>
          <a href="https://www.hindutamil.in/" target="_blank">இந்து தமிழ் திசை</a>
          <a href="https://www.thehinducentre.com/" target="_blank">The Hindu Centre for Politics<br/>and Public Policy</a>
          <a href="https://frontline.thehindu.com/" target="_blank">Frontline</a>
          <a href="https://ywc.thehindu.com/" target="_blank">Young World Club</a>
          <a href="https://epaper.thehindu.com/?utm_source=Hindu&amp;utm_medium=Menu&amp;utm_campaign=Header" target="_blank">The Hindu E-Paper</a>
          <a href="https://epaper.thehindubusinessline.com/login" target="_blank">BusinessLine E-Paper</a>
          <a href="https://crossword.thehindu.com/?utm_source=thehindu&amp;utm_medium=mainmenu" target="_blank">Crossword+ "Free Games"</a>
          <a href="https://www.thehindu.com/coupons/" target="_blank">Coupons</a>
          <a href="https://bloncampus.thehindubusinessline.com/" target="_blank">BL on Campus</a>
        </div>

        <div class="footer-menu-items">
          <h5>Follow us</h5>
          <a href="https://step.thehindu.com/blog/">Blog</a>
          <a href="https://www.facebook.com/theSTEPtest/">Facebook</a>
          <a href="https://www.instagram.com/the_hindu_step/">Instagram</a>
          <a href="https://x.com/">Twitter</a>
        </div>
        </div>
       </div>

    
      </footer>

    </div>

    <script type="text/javascript">var API_URL ="<?php echo API_URL; ?>";</script>
    <script type="text/javascript">var baseURL ="<?php echo baseURL; ?>";</script>
    <script type="text/javascript">var PAYTM_SCRIPT ="<?php echo PAYTM_SCRIPT; ?>";</script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flickity/3.0.0/flickity.pkgd.min.js" integrity="sha512-achKCfKcYJg0u0J7UDJZbtrffUwtTLQMFSn28bDJ1Xl9DWkl/6VDT3LMfVTo09V51hmnjrrOTbtg4rEgg0QArA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://d266qgalneck7k.cloudfront.net/assets/js/owl.carousel.min.js"></script>
    <?php
      if($uriPath == "/") { ?>
    <script src="https://d266qgalneck7k.cloudfront.net/assets/js/script.js?v=0.0.4.9"></script> <?php
      } else { ?>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>
    <script src="<?= PAYTM_SCRIPT ?>"></script>
    <script src="https://d266qgalneck7k.cloudfront.net/assets/js/productTable.js"></script> <?php
      } ?>

    <?php
      if(isset($includeProdPageJS)) { ?>
      <script src="<?=base_url()?>assets/js/sticky.js"></script>
      <script src="<?=base_url()?>assets/js/productPage.js?v=0.0.4.4"></script> <?php
      } ?>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flickity/3.0.0/flickity.min.css" integrity="sha512-fJcFDOQo2+/Ke365m0NMCZt5uGYEWSxth3wg2i0dXu7A1jQfz9T4hdzz6nkzwmJdOdkcS8jmy2lWGaRXl+nFMQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"> 
     
  </body>
</html> 

<script type="text/javascript">
/*   window.dataLayer = window.dataLayer || [];
        window.dataLayer.push({
          'event': 'is_signedin',
          'user_id':res.data.user_id,
          'phone':res.data.phone,
          'email':res.data.email,
          'has_active_course':res.data.is_active_course,
          'is_retail':res.data.is_retail
        });*/
</script>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/63a4f9ccdaff0e1306ddfad6/1gku6vj4e';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
<script type="text/javascript">
var CCode = "<?php echo session()->get('countryCode');?>";

function setCookie(name,value,days) {
    var expires = "";
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days*24*60*60*1000));
        expires = "; expires=" + date.toUTCString();
    }
    document.cookie = name + "=" + (value || "")  + expires + "; path=/";
}

function getCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for(var i=0;i < ca.length;i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1,c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
    }
    return null;
}

var urlParamsAdmitAd = new URLSearchParams(window.location.search);
var admitad_uid = urlParamsAdmitAd.get('admitad_uid');
var x = getCookie('admitad_uid');
if(admitad_uid && (x != admitad_uid))
{
    
    setCookie('admitad_uid',admitad_uid,30);
} else if(!x) {
   setCookie('admitad_uid','step',30);
}

function activateLink()
{
  var Slink = $(".btnSignUpUrl").attr('href');
  var AppendValue = getCookie('admitad_uid');
  if(window.location.href.indexOf('?') > 0)
  {
    window.location.href=Slink+"&admitad_uid="+AppendValue;
  } else {
    window.location.href=Slink+"?admitad_uid="+AppendValue;
  }
}
</script>
<!--End of Tawk.to Script-->


<script type="text/javascript">
   var Tawk_API = Tawk_API || {};
   Tawk_API.onLoad = function() {
       Tawk_API.onChatStarted = function() {
           window.dataLayer = window.dataLayer || [];
           window.dataLayer.push({
               'event': 'initiate_chat',
               'screen': 'Tawk Chat'
           });
       };
   };
   </script>


   <script type="text/javascript">
     
      $("#coupon-text").click(function() {
            $('#coupon-input').css('display','inline-flex');
            $("#coupon-text").hide();
        });

      $("#btnApply").click(function() {
          handleCoupon(CCode);
          return false;
      });
   </script>

  <script src="<?=base_url()?>assets/js/kids/jquery-3.6.0.min.js"></script>
   <script src="<?=base_url()?>assets/js/kids/jquery.appear.min.js"></script>
    <script src="<?=base_url()?>assets/js/kids/swiper.min.js"></script>
    <script src="<?=base_url()?>assets/js/kids/jquery.magnific-popup.min.js"></script>
    <script src="<?=base_url()?>assets/js/kids/odometer.min.js"></script>
   <script src="<?=base_url()?>assets/js/kids/wow.js"></script>
    <script src="<?=base_url()?>assets/js/kids/owl.carousel.min.js"></script>
    <script src="<?=base_url()?>assets/js/kids/jquery-ui.js"></script>
    <script src="<?=base_url()?>assets/js/kids/marquee.min.js"></script>
    <script src="<?=base_url()?>assets/js/kids/gsap/gsap.js"></script>
    <script src="<?=base_url()?>assets/js/kids/gsap/ScrollTrigger.js"></script>
    <script src="<?=base_url()?>assets/js/kids/gsap/SplitText.js"></script>

    <script src="<?=base_url()?>assets/js/kids/script.js"></script>