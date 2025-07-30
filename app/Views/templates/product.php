<?php 
    helper('productTitle_helper');
    include('oldheader.php'); 
/*    include('buyModal.php');
*/?>

<style type="text/css">
  .get-preview-button {
        background-color: #b9b8b8;
    padding: 15px 60px;
    font-size: 16px;
    line-height: normal;
    font-weight: 500;
    border: 0;
    border-radius: 3px;
    color: #fff;
    cursor: pointer;
    text-transform: uppercase;
    margin: 10px auto;
    display: block;
    width: 90%;
  }
  #fc_frame {
  z-index: 21474836 !important;
  /* Unlimited Product */
}
</style>
<?php 
            $originalPrice = $productData['original_price'];
            $offerPrice = $productData['offer_price'];
            if($originalPrice != $offerPrice){
              $offerPercent = round((($originalPrice - $offerPrice)/$originalPrice)*100);
            }
            else{
              $offerPercent = 0;
            }

        ?>
<link rel="stylesheet" href="<?php echo config('Siteconfig')->CLOUD_URL;?>assets/css/flipclock.css?v=<?= 3 ?>">
<section>
    <div class="product-detail-page">
        <div class="page-header-product-left">
          <div class="container"> <a href="/"><i class="fa fa-repeat"></i> Home</a></div>
        </div>
        <!-- <div class="container" id="product-loading" style="display: none;">
          <div class="row">
            <img src="<?php echo config('Siteconfig')->CLOUD_URL;?>assets/images/product_loading.gif" style="margin:30px auto">
          </div>
        </div>
        <div class="container" id="no-product" style="display:none">
          <div class="row">
            <div style="font-size:30px;margin:100px auto;">No Product Available</div>
          </div>
        </div> -->

        <div class="product-logo-block product-div" style="display:block">
          <form name="frm_buy" id="frm_buy" action="" method="post">
            <div class="container">
          <div class="row step-supreme">
            <div class="col-lg-8 col-md-8 col-sm-12 col-12">
                 <img src="<?php echo $productData['product_bg_image'];?>" class="product-image-mobile" 
                 alt="Product Image" fetchpriority="high">
              <div class="course-ribbon course-ribbon-mobile left_ribbon">
                <img src="<?php echo $productData['product_new_icon'];?>"   
                  loading="lazy"
                  alt="New Product Icon">
              </div>
                  <span class="product-title"><?php echo  $productData['product_name'];?></span>
                  <h5 class="product-tagline"><?php echo $productData['product_new_tag_line'];?></h5>  
                   <!-- <p class="custom-adv-1" id="custom-adv-1"></p> -->
                   <p class="product-desc"><?php echo $productData['product_new_desc'];?></p>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                  <div class="product-payment-block">
                      <div class="appbanner" style="display: none;"> 
                        <div class="product-price-block">
                          <div class="product-detail-price">
                            
                            <div class="product-price-original"> <?php echo $countryCode === 'IN' ? '₹' .round($productData['original_price']) : '$' . round($productData['original_price_usd']) ?></div>
                            
                            <div class="product-price-offers"> <span style="font-size: 22px;font-weight: 400;"> ₹</span><span class="prod-off-price"> <?php echo $countryCode === 'IN' ? '₹' : '$'  ?></span><span class="prod-off-price"><?php echo $countryCode === 'IN' ? '₹' .round($productData['offer_price']) : '$' . round($productData['offer_price_usd']) ?></span>/- 
                              
                            <button type="button" name="courseType" value="normal" class="btn get-free-button gotoBuynow">Buy Now</button>
                            

                        

                            <span class="product-detail-tax">Inclusive of GST</span> 
                            </div>
                          </div>
                        </div>
                      </div>
                    
                      <div class="product-price-block" id="divscroll"> <img src="<?php echo $productData['product_bg_image'];?>" class="product-image">

                          <div class="ribbon"><?php echo $offerPercent; ?>% off</div>
                
                          <div class="product-detail-price">
                              <div class="course-ribbon left_ribbon desktop"><img src="<?php echo  $productData['product_new_icon'];?>"></div>
                               <?php if($offerPercent != 0):?>
                              <div class="product-price-original"> <?php echo $countryCode === 'IN' ? '₹' .round($productData['original_price']) : '$' . round($productData['original_price_usd']) ?></div>
                               <?php endif; ?>
                              <div class="product-price-offers"> <span style="font-size: 22px;font-weight: 400;">
                             </span><span class="prod-off-price" id="final-offer-price"> <?php echo $countryCode === 'IN' ? '₹' .round($productData['offer_price']) : '$' . round($productData['offer_price_usd']) ?></span> <?php if ($countryCode == "IN"){ ?><span class="product-detail-tax">Inclusive of GST</span>  <?php } ?> </div>
                              <div id="message_box_coupon" style="display: none;"></div>
                          </div>
                          <div class="product-detail-padding">
                            <p id="errormsg" style="color:#ff0000; display: none;"><?php if ($countryCode !="IN" && $productData['product_id'] == 645) { ?>Kindly provide your email address. <?php } else  { ?>Please enter Mobile <?php } ?>  </p>
                                <div class="input-group" style="margin-bottom:10px" id="kktextbox">
                                  

                        <?php if ($countryCode=="IN" && $productData['product_id'] != 645) { ?>
                        <input type="text" class="form-control" name="txtEmail" id="txtEmail" value="" placeholder="Enter Mobile Number" onkeypress="removeErrorMsg()">
                        <?php } else if ($productData['product_id'] == 645) { ?>
                       <input type="text" class="form-control" name="txtEmail" id="txtEmail" value="" placeholder="name@ahduni.edu.in" onkeypress="removeErrorMsg()">
                       <?php } else { ?>
                       <input type="text" class="form-control" name="txtEmail" id="txtEmail" value="" placeholder="Enter Email" onkeypress="removeErrorMsg()">
                       <?php } ?>

                                    <input type="hidden" class="form-control" name="txtProductId" id="txtProductId" value="<?= $productData['product_id']; ?>">
                                    <input type="hidden" name="txtLinkerParam" id="txtLinkerParam" value="">
                                    <input type="hidden" name="txtQueryString" id="txtQueryString" value="">
                                    <input type="hidden" name="is_subscription" id="is_subscription" value="0">
                                    <input type="hidden" name="admitad_uid" id="admitad_uid" value="step">
                                    <input type="hidden" name="actual_price" id="actual_price" value="<?= $productData['original_price'] ?>">
                                    <input type="hidden" name="usd_price" id="usd_price" value="<?= $productData['original_price_usd']; ?>">

                                    <input type="hidden" name="country_code" id="country_code" value="<?= $countryCode; ?>">
                                                  </div>
                             <!--  <div class="form-group">
                                <div class="input-group styled-input-1">
                                  <input type="text" class="form-control coupon-input txtCoupon" id="couponCode" placeholder="Have a Coupon Code?" />
                                  <button type="button" class="btn apply-btn" onclick="couponbtn('product-detail-padding')"> APPLY </button>
                                </div>
                              </div> -->
                                   <div class="input-group" id="coupon-text">
                                Have a coupon code?
                                </div>
                                <div class="input-group" id="coupon-input">
                                <input type="text" class="form-control txtCoupon" name="txtCoupon" value="<?php if($couponValue != ''){ echo $couponValue; }?>" id="txtCoupon" onkeyup="nospaces(this)" placeholder="Enter Coupon" autocomplete="off">
                                <span class="input-group-btn">
                                <button class="product-apply btn" type="button" id="btnApply">Apply</button>
                                </span>
                              </div> 
                                <!--  <button class="btn get-free-button"  type="button" class="btn btn-success" onclick="buyybtn('product-detail-padding')"> BUY Now</button>  --> 
                          </div>
                      </div>
                      <div id="loading_coupon" style="margin: 0px auto; display: none;">
                        <img src="<?php echo config('Siteconfig')->CLOUD_URL;?>assets/images/product_loading.gif" style="width:65px;margin:0px auto">
                      </div>
                    
                         <button type="button" name="courseType" value="normal" class="btn get-free-button" id="btnSubmit">Buy Now</button>
 
                        <div class="offer-container">
                          
                            

                           
                        </div>

                       <!--  <button onclick="myFunction(this)" type="submit" class="btn get-free-button"  country-code = "<?=  $countryCode === 'IN' ?  'IN' :  'INT'?>" data-title-new="<?= !empty($productData['product_name']) ? $productData['product_name'] : 'Default Product Name' ?>" data-offerprice="<?= $countryCode === 'IN' ? '₹' .round($productData['offer_price']) : '$' . round($productData['offer_price_usd']) ?>" data-price="<?= $countryCode === 'IN' ? '₹' .round($productData['original_price']) : '$' . round($productData['original_price_usd']) ?>"  data-product-id="<?= $productData['product_id']?>">BUY Now</button> -->
                        

                    
                    
                    <div class="includes-component">
                      <h2>Includes</h2>
                      <ul class="prod-feature">
                        <?php $feature =  explode('|', $productData['product_features']);
                foreach ($feature as $i ) {?>
                    <li class="includes_item"><?php  echo $i;?></li>
                   <?php } ?>
                        
                      </ul>
                    </div>
                    <div class="paytm-secure"> <img src="<?php echo config('Siteconfig')->CLOUD_URL;?>assets/images/paytm-secure.jpg">  </div>
                  </div>
            </div>   
                  </div>
                  
              </div>
          </form>
        </div>
        <div class="container product-div" style="">
          <div class="row">
            <div class="col-lg-8 col-md-8">
              <div class="product-description">
                <div class="what-you-get">
                  <div class="what-you-get__title">What will you learn?</div>
                  <ul class="what-you-get__items prod-learn">
                    
                      
                     <?php $learn =  explode('|', $productData['product_user_learn']);
                foreach ($learn as $ln ) {?>
            
                <li class="what-you-get__item what-you-get__item--columns"><?php  echo $ln;?></li>
                 <?php } ?>
                    
                </ul></div>
              </div>
              <div class="product-description prod-desc"><?php echo $productData['product_summary']; ?></div>
            </div>
          </div>
        </div>   


    </div>
</section>
 <div id="OTPModal" class="modal fade" role="dialog">  
      <div class="modal-dialog">  
   <!-- Modal content-->  
           <div class="modal-content">  
                <div class="modal-header" style="display:block;">  
                     <button type="button" class="close" data-dismiss="modal">&times;</button>  
                     <h4 class="modal-title" style="font-size:1rem">Preview STEP for Study Abroad</h4>  
                </div>  
                <div class="modal-body"> 
                  <p>An OTP has been sent to verify <span id="stk"></span>. Please enter this OTP to continue.</p>
                     <label>Enter OTP</label>  
                     <input type="text" name="ieltsPIN" id="ieltsPIN" class="form-control" />  
                     <br />  
                     
                     <button type="button" name="ieltsPreview" id="ieltsPreview" class="btn btn-warning">Preview Course</button>  
                </div>  
           </div>  
      </div>  
 </div> 
<div class="Lmodal" style="display: none">
    <div class="centerT">
        <center><img alt="loading.." src="<?=base_url()?>/assets/images/loading.gif" /></center>
        <p>Please wait while we load the payment page. Do not close this page or click on refresh. </p>
    </div>
</div>

<div class="LmodalP" style="display: none">
    <div class="centerT">
        <center><img alt="loading.." src="<?=base_url()?>/assets/images/loading.gif" /></center>
        <p>Please wait while we load the preview page. Do not close this page or click on refresh. </p>
    </div>
</div>
<script type="text/javascript">
  function nospaces(t){
  if(t.value.match(/\s/g)){
    t.value=t.value.replace(/\s/g,'');
  }
}
</script>

<!--Footer-->
<div class="footer">
  <style type="text/css">
  .bg-instagram {
    width: 40px; height: 40px;
}
.fa-3x {
    font-size: 2.6em !important;
}
</style>
<div class="footer">
  <div class="footer-container">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-12 col-12">
          <h2>Individuals</h2>
          <ul class="product_list_ul">
           
          </ul>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-6 col-6">
          <h2>Organizations</h2>
          <ul>
            <li><a href="/stepworks" class="base_url" alt="English test certificate">Corporate</a></li>
            <li><a href="/stepforschools" alt="Online English training for Schools" class="base_url">School</a></li>
            <li><a href="/stepforcolleges" alt="English training for college students" class="base_url">College</a></li>
            <li><a href="/kids" alt="Online English training for Kids" class="base_url">Kids</a></li>
          </ul>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-6 col-6">
          <h2>About</h2>
          <ul>
            <li><a href="https://blog.steptest.in/" alt="" class="base_url" target="_blank">Blog</a></li>
            <li><a href="https://angel.co/step-6/jobs" alt="" class="base_url" target="_blank">Careers</a></li>
          </ul>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-6 col-6">
          <h2>Support</h2>
          <ul>
            <li><a target="_blank" href="http://support.steptest.in/support/home" alt="Support & Help Center">Help Center</a></li>
            <li><a href="/contactus" class="base_url" alt="English test certificate">Contact Us</a></li>
            <li><a href="/privacy" alt="Business English training" class="base_url">Privacy</a></li>
            <li><a href="/termsandconditions" alt="Business English training" class="base_url">Terms and Conditions</a></li>
          </ul>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-12 app-link-box ">
          <div class="playstore-link"> <span>Follow Us</span>
            <ul>
              <a href="https://www.facebook.com/theSTEPtest/" target="_blank"><li class="bg-facebook"></li></a>
              <a href="https://www.instagram.com/the_hindu_step/" target="_blank"><li class="bg-instagram"></li></a>
              <a href="https://blog.steptest.in/" target="_blank"><li class="bg-blog"></li></a>
              <a href="https://twitter.com/The_Hindu_STEP" target="_blank"><li class="bg-twitter"></li>
               <a href="https://t.me/step4english" target="_blank"><li class="bg-telegram"><i class="fa fa-telegram fa-3x" aria-hidden="true"></i>
</li></a></a>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="footer-group-container">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 nop clearfix">
          <div class="step-groupsite-container">
            <div class="gs-label">GROUP SITES</div>
            <ul>
              <li><a href="http://www.thehindu.com/" target="_blank">The Hindu</a></li>
              <li><a href="http://tamil.thehindu.com/" target="_blank">தி இந்து</a></li>
              <li><a href="http://www.thehindubusinessline.com/" target="_blank">Business Line</a></li>
              <li><a href="http://www.bloncampus.com/" target="_blank">BL on Campus</a></li>
              <li><a href="http://www.sportstarlive.com/" target="_blank">Sportstar Live</a></li>
              <li><a href="http://www.frontline.in/" target="_blank">Frontline</a></li>
              <li><a href="http://www.thehinducentre.com/" target="_blank">The Hindu Centre</a></li>
              <li><a href="http://www.thehindu.com/publications/" target="_blank">Publications</a></li>
              <li><a href="http://www.thehindu.com/ebooks/" target="_blank">eBooks</a></li>
              <li><a href="http://www.thehinduimages.com/" target="_blank">Images</a></li>
              <li><a href="http://www.thehinduclassifieds.in/" target="_blank">Classifieds</a></li>
              <li><a href="https://roofandfloor.com/?utm_source=step&amp;utm_medium=referral&amp;utm_campaign=Internal-Marketing" target="_blank">Roof and Floor</a></li>
              <li><a href="http://www.youngworldclub.com/" target="_blank">Young World Club</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="footer-copy-container">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 nop clearfix">
          <div class="step-copy-container">
            <div class="footer-copy-text">STEP &copy; 2025 All rights reserved.</div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--<div id="back-top" style="display:none"><a href="#nav_top"><i class="fa fa-angle-up"></i></a></div>--> 
</div>
<!-- Footer Ends -->
</div>
<!-- Footer Ends --> 

  <!-- Font Awesome CSS-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />
<!-- animate.css-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" integrity="sha256-PHcOkPmOshsMBC+vtJdVr5Mwb7r0LkSVJPlPrp/IMpU=" crossorigin="anonymous" />
<style type="text/css">
span#stk {
  font-weight: bold;
}
.Lmodal, .LmodalP
    {
        position: fixed;
        z-index: 21474836000;
        height: 100%;
        width: 100%;
        top: 0;
        left: 0;
        background-color: Black;
        filter: alpha(opacity=70);
        opacity: 0.9;
        -moz-opacity: 0.9;
    }
    .centerT
    {
        z-index: 21474836000;
        margin: 300px auto;
        padding: 10px;
        width: 200px;
        background-color: White;
        border-radius: 10px;
        filter: alpha(opacity=100);
        opacity: 1;
        -moz-opacity: 1;
        font-size:  13px;
    }
    .centerT img
    {
        height: 128px;
        width: 128px;
    }
  .mixedSlider{position:relative}.mixedSlider .MS-content{white-space:nowrap;overflow:hidden}.mixedSlider .MS-content .item{display:inline-block;width:25%;position:relative;vertical-align:top;overflow:hidden;height:100%;white-space:normal;padding:0 10px}@media (max-width:991px){.mixedSlider .MS-content .item{width:50%}}@media (max-width:767px){.mixedSlider .MS-content .item{width:100%!important}}.mixedSlider .MS-content .item .imgTitle{position:relative;text-align:center}.testimonials.mixedSlider .MS-controls button{top:calc(100% - 60%)}.testimonials.mixedSlider .MS-content .item{padding:30px;width:33.33%}.college-testimonial.mixedSlider .MS-content .item{padding:30px;width:100%}.mixedSlider .MS-controls button{position:absolute;border:none;background-color:transparent;outline:0;font-size:50px;top:35px;color:rgba(0,0,0,.4);transition:0.15s linear;cursor:pointer}.mixedSlider .MS-controls button:hover{color:rgba(0,0,0,.8)}@media (max-width:992px){.mixedSlider .MS-controls button{font-size:30px}}@media (max-width:767px){.mixedSlider .MS-controls button{font-size:20px}}.mixedSlider .MS-controls .MS-left{left:0}.testimonials.mixedSlider .MS-controls .MS-left{left:-50px}@media (max-width:767px){.mixedSlider .MS-controls .MS-left{left:-10px!important}}.mixedSlider .MS-controls .MS-right{right:0}.testimonials.mixedSlider .MS-controls .MS-right{right:-50px}@media (max-width:767px){.mixedSlider .MS-controls .MS-right{right:-10px!important}}
  .notyou {
    float: right;
    cursor: pointer;
    font-size: 13px;

  }
  a.notyoua {
    color: #5b5252;
    font-size: 13px;
  }
</style>
<script type="text/javascript">
var CCode = "<?php echo $countryCode;?>";
var api_url = "<?php echo config('Siteconfig')->API_URL;?>";
var client_url = "<?php echo config('Siteconfig')->CLIENT_URL;?>";
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha256-xaF9RpdtRxzwYMWg4ldJoyPWqyDPCRD0Cv7YEEe6Ie8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js" integrity="sha256-jDnOKIOq2KNsQZTcBTEnsp76FnfMEttF6AV2DF2fFNE=" crossorigin="anonymous"></script>
<script src="<?php echo config('Siteconfig')->CLOUD_URL;?>assets/js/front.js?v=5.3"></script> 
<script src="<?php echo config('Siteconfig')->CLOUD_URL;?>assets/js/dropdown.js?v=5.3"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/mobile-detect/1.4.3/mobile-detect.min.js" integrity="sha256-NjqA02fmZY5y2RjNM/lIHOeSkZmphYEisNzGHf+mL94=" crossorigin="anonymous"></script>
<script src="<?php echo config('Siteconfig')->CLOUD_URL;?>assets/js/multislider.js?v=5.3"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.10/jquery.lazy.min.js" integrity="sha256-ZPvH+DBiXs1v8yk7lmZa6+wqm+kzbwL9R1COtZ9+wjo=" crossorigin="anonymous"></script>
<script type="application/javascript" src="https://secure.paytmpayments.com/merchantpgpui/checkoutjs/merchants/Kastur90883456339710.js"></script>

<script src="https://apis.google.com/js/platform.js" async defer></script> 
<script src="<?php echo config('Siteconfig')->CLOUD_URL;?>assets/js/aadhar_script.js?v=1"></script> 
<script src="<?php echo config('Siteconfig')->CLOUD_URL;?>assets/js/login.js?v=1"></script>
<script src="<?php echo config('Siteconfig')->CLOUD_URL;?>assets/js/flipclock.js?v=1"></script> 

<script type="text/javascript">

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

  function removeErrorMsg()
  {
    $("#errormsg").hide();
    $("span.errormsg").hide();
    return false;
  }

function validateAUEmail(email) {
  // Regular expression to check if the email ends with @ahduni.edu.in
  const regex = /^[a-zA-Z0-9._%+-]+@ahduni\.edu\.in$/;
  return regex.test(email);
}

  $(document).ready(function() {
    window.addEventListener('load', function() {
      var ga = window[window['GoogleAnalyticsObject']];
      if (ga && ga.getAll) {
        var linkerParam = ga.getAll()[0].get('linkerParam');
        $("#txtLinkerParam").val(linkerParam);
      }
    });

    <?php if($couponValue != '') { ?>
      $('#coupon-input').css('display','inline-flex');
      $("#coupon-text").hide();
      handleCoupon(CCode, "auto_apply_coupon")
     <?php } ?>
    $("#coupon-text").click(function() {
            $('#coupon-input').css('display','inline-flex');
            $("#coupon-text").hide();
        });

      $("#btnApply").click(function() {
          handleCoupon(CCode);
          return false;
      });

      $("#txtCoupon").keydown(function(event) {
        if (event.keyCode === 13) {
          event.preventDefault();
          handleCoupon(CCode);
        }
      });
  });




 <?php if($countryCode === 'IN') { ?>

  $(document).ready(function() {

   $(".gotoBuynow, #btnSubmit").click(function(){
        var txtEmailPhone = $("#txtEmail").val();

        if(txtEmailPhone == '')
        {
          window.dataLayer = window.dataLayer || [];
          window.dataLayer.push({
            'event': 'buy_now_error',
            'product_id': <?= $productData['product_id'] ?>,
            'product_name': $(".product-title").text(),
            'coupon_code': $("#txtCoupon").val().replace(/\s/g, ''),
            'actual_product_value': "<?php echo $productData['original_price'];?>",
            'final_product_value': $("#final-offer-price").text()
          });
          $("span.errormsg").hide();
          $("#errormsg").css("display", "block");
          $("#txtEmail").focus();
          $('html, body').animate({
              scrollTop: $("#divscroll").offset().top
           }, 2000);
          return false;
        }

        <?php if($productData['product_id'] ==  645) { ?>

          if (!validateAUEmail(txtEmailPhone)) {
            alert("Invalid email address. It must end with @ahduni.edu.in.");
            return false;
          }

        <?php } ?>

        $.ajax({
              url: '<?=base_url()?>initiatepayment',
              type: 'post',
              data: $("form#frm_buy").serialize(),
              contentType: 'application/x-www-form-urlencoded',
              dataType  : 'json',
              success: function( resp, textStatus, jQxhr ){
                  /*$('#response pre').html( data );*/
                  console.log(resp)
                  if(resp.status == 'error')
                  {
                      $("span.errormsg").hide();
                      $("#errormsg").css("display", "block");
                      $("#txtEmail").focus();
                      $('html, body').animate({
                        scrollTop: $("#divscroll").offset().top
                        }, 2000);
                      return false;
                  } else {
                    var token = resp.token;
                    var nuser = resp.new_user;
                    var txtEmailPhone = $("#txtEmail").val();
                    var coupon = $("#txtCoupon").val().replace(/\s/g, '')
                    var is_subscription = $("#is_subscription").val()
                    startPaymentserver(token, txtEmailPhone, coupon, is_subscription)

                  }
              },
              error: function( jqXhr, textStatus, errorThrown ){
                  alert(jqXhr.responseJSON.message )
                  console.log( errorThrown );
              },
              beforeSend: function () {
                $(".Lmodal").show();
              },
              complete: function () {
                  $(".Lmodal").show();
              }
          });

     return false;
        /*$("#frm_buy").submit();*/// Submit the form
    });


       function startPaymentserver(token, username, coupon, is_subscription=0)
  {
        var postForm = { //Fetch form data
            'product_id'     : <?= $productData['product_id'] ?>,
            'is_mobile': "no",
            'coupon': coupon,
            'is_subscription': is_subscription,
            'payment_type' : 'paytm',
            'is_gst' : 'Y',
            'payment_method' : 'DC'
        };
        $.ajax({ //Process the form using $.ajax()
            type      : 'POST', //Method type
            url       : '<?php echo config('Siteconfig')->API_URL;?>v1/startwebpayment', //Your form processing file URL
            data      : postForm, //Forms name
            dataType  : 'json',
            headers: {"access-token": token},
            success   : function(resp) {
              if(resp.status=='success'){
                var dataT = resp.data
                $(".Lmodal").show();
                onScriptLoad(dataT.txnToken,dataT.params.ORDER_ID,dataT.params.TXN_AMOUNT, dataT.params.user_id, dataT.params.user_email, dataT.params.user_phone);
              } else {
                alert("Initiate Transaction Failed");
              }               
            },
            beforeSend: function () {
                $(".Lmodal").show();
            },
            complete: function () {
                 $(".Lmodal").show();
            }
        });

  }

    function onScriptLoad(txnToken, orderId, amount, uid, email, phone) {
      $(".Lmodal").show();
        var config = {
            "root": "",
            "flow": "DEFAULT",
            "merchant":{
                 "name":"The Hindu Group",
                 "logo":"https://english.steptest.in/assets/img/STEP_logo.png"
             },
             "style":{
                 "headerBackgroundColor":"#8dd8ff",
                 "headerColor":"#3f3f40"
            },
            "data": {
                "orderId": orderId,
                "token": txnToken,
                "tokenType": "TXN_TOKEN",
                "amount": amount
            },
            "handler":{
                 "notifyMerchant": function (eventName, data) {
                  console.log("notifyMerchant handler function called");
                  console.log("eventName => ",eventName);
                  console.log("data => ",data);

                    if(eventName == 'APP_CLOSED' || eventName == 'PAYMENT_ERROR' || eventName == 'SESSION_EXPIRED')
                    {
                      $(".Lmodal").hide();
                      window.dataLayer = window.dataLayer || [];
                      window.dataLayer.push({
                          'event': "purchase_failure",
                          'user_id': uid,
                          'product_id': <?= $productData['product_id'] ?>,
                          'product_name': $(".product-title").text(),
                          'coupon_code': $("#txtCoupon").val().replace(/\s/g, ''),
                          'actual_product_value': "<?= $productData['original_price'] ?>",
                          'final_product_value': amount,
                          'admitad_uid': 'step',
                          'email': email,
                          'phone': phone,
                          'status': 'popup_close'
                      });
                    }
                 }
            }
        };

        if (window.Paytm && window.Paytm.CheckoutJS) {
            // initialze configuration using init method
            window.Paytm.CheckoutJS.init(config).then(function onSuccess() {
                console.log('Before JS Checkout invoke');
                setTimeout(function(){
                /*Purchase start event */
                 window.dataLayer = window.dataLayer || [];
                        window.dataLayer.push({
                            'event': "purchase_started",
                            'user_id': ""+uid+"",
                            'product_id': "<?= $productData['product_id'] ?>",
                            'product_name': $(".product-title").text(),
                            'coupon_code': $("#txtCoupon").val().replace(/\s/g, ''),
                            'actual_product_value': "<?= $productData['original_price'] ?>",
                            'final_product_value': amount,
                            'admitad_uid': 'step',
                            'email': email,
                            'phone': phone,
                            'order_id' : orderId
                        });
                  }, 1000);
                // after successfully update configuration invoke checkoutjs
                  window.Paytm.CheckoutJS.invoke();
                  $(".Lmodal").hide();
            }).catch(function onError(error) {
                console.log("Error => ", error);
            });
        }
    }

  qry_val = window.location.href.split('?');
    $("#txtQueryString").val(qry_val[1]);
    $("#txtProductId").val(<?= $productData['product_id'] ?>);
    $("#txtProductPrice").val(<?= $productData['offer_price'] ?>);
    $('.counter-timer').hide();
    var clock = $('.clock').FlipClock({
      clockFace: 'DailyCounter',
      autoStart: false,
      callbacks: {
      stop: function() {
        $('.message').html('The clock has stopped!')
      }
     }
    });

 });


  function appendAdmitAd()
  {
    if ($('#admitad_uid').length)
    {
      $("#admitad_uid").val(getCookie('admitad_uid'));
    }
  }
  appendAdmitAd();

 <?php } ?>
</script>
