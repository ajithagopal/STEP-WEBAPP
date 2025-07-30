
 <?php 
    helper('productTitle_helper');
    include('header.php'); 
?>

   <div class="contact-section" id="contact-section">
          <div class="contact-section-details">
            <h2>General contact / support</h2>
            <strong>Whatsapp or Phone</strong>
            <a href="tel:919789883344">+91 9789883344</a>

            <strong>Email</strong>
            <a href="mailto:info@steptest.in">info@steptest.in</a>

            <h2 class="mar-top">Operational hours</h2>
            <span>10AM - 7.30PM (Weekdays)</span>

            <h2 class="mar-top">Frequently asked questions (FAQs)</h2>
            <a href="javascript:void(0)">Visit our Help Center</a>
          </div>
          <?php
            $isGetInTouchTitle = 'Get in touch';
            include('getInTouch.php');
          ?>
      </div>  


<?php include('footer.php'); ?>