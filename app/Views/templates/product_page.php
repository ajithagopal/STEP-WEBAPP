<?php 
    include('ogheader.php'); 
?>
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
<link rel="stylesheet" href="{{ config.CLOUD_URL }}assets/css/flipclock.css?v=4.6">
<section>
  <div class="product-detail-page">
    <div class="page-header-product-left">
      <div class="container"> <a href="/"><i class="fa fa-repeat"></i> Home</a></div>
    </div>
    <div class="container" id="product-loading" style="display: none;">
      <div class="row">
        <img src="{{ config.CLOUD_URL }}assets/images/product_loading.gif" style="margin:30px auto">
      </div>
    </div>
    <div class="container" id="no-product" style="display:none">
      <div class="row">
        <div style="font-size:30px;margin:100px auto;">No Product Available</div>
      </div>
    </div>

    <div class="product-logo-block product-div" style="display:block">
      <form name="frm_buy" id="frm_buy" action="" method="post">
        <div class="container">
          <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12 col-12"> <img src="<?php echo $productData['product_bg_image'];?>" class="product-image-mobile">
              <div class="course-ribbon course-ribbon-mobile left_ribbon"><img src="<?php echo $productData['product_new_icon'];?>"></div>
              <h2 class="product-title"><?php echo  $productData['product_name'];?></h2>
              <h5 class="product-tagline"><?php echo $productData['product_new_tag_line'];?></h5>
              <p class="custom-adv-1" id="custom-adv-1"></p>
              <p class="product-desc"><?php echo $productData['product_new_desc'];?></p>
               <p class="custom-adv-2" id="custom-adv-2"></p>
              <div class="row counter-timer" style="display: none;">

                <div class="col-md-12 col-sm-12 col-lg-12 col-12" style="margin-top: 20px">
                  <div class="hurry-block"><b>Hurry!</b> Prices Increase in</div>
                  <div class="clock"></div>
                </div>
                <div class="col-md-12 col-sm-12 col-lg-12 col-12">
                  <div class="step-coachlive-hurry"></div>
                </div>
                
              </div>
            </div>

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
            <div class="col-lg-4 col-md-4 col-sm-12 col-12">
              <div class="row product-payment-block">
                <div class="appbanner" style="display: none;"> 
                 <div class="product-price-block">
                  <div class="product-detail-price">
                    <?php if($offerPercent != 0):?>
                    <div class="product-price-original"> <?php echo $countryCode === 'IN' ? '₹' .round($productData['original_price']) : '$' . round($productData['original_price_usd']) ?></div>
                    <?php endif; ?>
                    <div class="product-price-offers"> <span style="font-size: 22px;font-weight: 400;"><?php echo $countryCode === 'IN' ? '₹' : '$'  ?></span><span class="prod-off-price"><?php echo $countryCode === 'IN' ? '₹' .round($productData['offer_price']) : '$' . round($productData['offer_price_usd']) ?></span>/- 
                      
                      <!-- {% if geoblock|string() == "1" %}

                      {% if request.MOBILE is not none %}
                    <a target="_blank" href="https://web.whatsapp.com/send?phone=+919789883344&text= I am interested in {{ productData['product_name'] }} and I am currently in {{session['countryName']}}" class="btn get-free-button">WhatsApp Us</a>
                    {%else%}
                    <a target="_blank" href="https://mail.google.com/mail/?view=cm&fs=1&to=info@steptest.in&su=I am interested in {{ productData['product_name'] }} ({{session['countryName']}})&body=Hi, %0aI am interested in {{ productData['product_name'] }} and I am currently in {{session['countryName']}}.%0a%0a Thanks" class="btn get-free-button">Email Us</a>
                    {% endif %}

                {%else%}
                    <button type="button" name="courseType" value="normal" class="btn get-free-button gotoBuynow">Buy Now</button>
                    {% if productData['product_id']|int == 618 %}
                    <button type="button" name="courseTypePreview" value="preview" class="btn get-preview-button" id="btnpreviewSubmitmobile">Preview Course</button>
                    {% endif %}
 -->
                {% endif %}

                      
                    <?php if ($countryCode == "IN"){ ?><span class="product-detail-tax">Inclusive of GST</span><?php } ?>
                    </div>
                  </div>
                </div>
                </div>
                
                 <div class="product-price-block" id="divscroll"> <img src="<?php echo $productData['product_bg_image'];?>" class="product-image">
                 <?php if($offerPercent != 0):?>
          <div class="ribbon"><?php echo $offerPercent;?>% off</div>
            <?php endif; ?>
                  <div class="product-detail-price">
                    <div class="course-ribbon left_ribbon desktop"><img src="<?php echo  $productData['product_new_icon'];?>"></div>
                     <?php if($offerPercent != 0):?>
                    <div class="product-price-original"> <?php echo $countryCode === 'IN' ? '₹' .round($productData['original_price']) : '$' . round($productData['original_price_usd']) ?></div>
                     <?php endif; ?>
                    <div class="product-price-offers"> <span style="font-size: 22px;font-weight: 400;"> <?php echo $countryCode === 'IN' ? '₹' : '$'  ?>
                   </span><span class="prod-off-price" id="final-offer-price"> <?php echo $countryCode === 'IN' ? '₹' .round($productData['offer_price']) : '$' . round($productData['offer_price_usd']) ?></span> <?php if ($countryCode == "IN"){ ?><span class="product-detail-tax">Inclusive of GST</span>  <?php } ?> </div>
                    <div id="message_box_coupon" style="display: none;"></div>
                  </div>
              <div class="product-detail-padding">
                  <!--   {% if error['message']|string() !="" %}
                    <span class="errormsg" style="color:#ff0000">{{error['message']}}</span>
                    {% endif %} -->
                   <p id="errormsg" style="color:#ff0000; display: none;">
                      <?php if ($countryCode == "IN"){ ?>Please enter Email <?php }else{ ?>Please enter Mobile <?php } ?>  </p>
                    <div class="input-group" style="margin-bottom:10px" id="kktextbox">
                       <?php if ($countryCode == "IN"){ ?>
                        <input type="text" class="form-control" name="txtEmail" id="txtEmail" value="" placeholder="Enter Mobile Number" onkeypress="removeErrorMsg()">
                      <?php }else{ ?>
                       <input type="text" class="form-control" name="txtEmail" id="txtEmail" value="" placeholder="Enter Email" onkeypress="removeErrorMsg()">
                        <?php } ?> 
                        <input type="hidden" class="form-control" name="txtProductId" id="txtProductId" value="<?php echo $productData['product_id'];?>">
                        <input type="hidden" name="txtLinkerParam" id="txtLinkerParam" value="">
                        <input type="hidden" name="txtQueryString" id="txtQueryString" value="">
                        <input type="hidden" name="is_subscription" id="is_subscription" value="0">
                        <input type="hidden" name="admitad_uid" id="admitad_uid" value="step">
                      <input type="hidden" name="actual_price" id="actual_price" value="<?php echo $productData['original_price'];?>">
                        <input type="hidden" name="usd_price" id="usd_price" value="<?php echo $productData['original_price_usd'];?>">

                         <input type="hidden" name="country_code" id="country_code" value="<?php echo $countryCode; ?>">
                      </div>
                      <div class="input-group" id="coupon-text">
                    Have a coupon code?
                    </div>
                <!--     {% if geoblock|string() == "1" %}
                    <p style="color: red; text-align: left">{{resultdata['geoblockmsg']}}</p>
                    {% endif %} -->
                    <div class="input-group" id="coupon-input">
                    <input type="text" class="form-control" name="txtCoupon" id="txtCoupon" value="{% if error['coupon']|string() =='' %}{{couponValue}}{% else %}{{error['coupon']}}{% endif %}" onkeyup="nospaces(this)" placeholder="Enter Coupon" autocomplete="off">
                    <span class="input-group-btn">
                    <button class="product-apply btn" type="button" id="btnApply">Apply</button>
                    </span>
                  </div>
                      
              </div>
                </div>
                <div id="loading_coupon" style="margin: 0px auto; display: none;">
                  <img src="{{ config.CLOUD_URL }}assets/images/product_loading.gif" style="width:65px;margin:0px auto">
                </div>
                {% if geoblock|string() == "1" %}
                {% if request.MOBILE is not none %}
                  <!--   <a target="_blank" href="https://web.whatsapp.com/send?phone=+919789883344&text= I am interested in {{ productData['product_name'] }} and I am currently in {{session['countryName']}}" class="btn get-free-button">WhatsApp Us</a>
                {%else%}

                <a target="_blank" href="https://mail.google.com/mail/?view=cm&fs=1&to=info@steptest.in&su=I am interested in {{ productData['product_name'] }} ({{session['countryName']}})&body=Hi, %0aI am interested in {{ productData['product_name'] }} and I am currently in {{session['countryName']}}.%0a%0a Thanks" class="btn get-free-button">Email Us</a> -->

                {% endif %}
                {%else%}
                    <button type="button" name="courseType" value="normal" class="btn get-free-button" id="btnSubmit">Buy Now</button>
                    <?php if($productData['product_id'] == 638): ?>
                    <a class="btn get-preview-button" id="btnpreviewSubmit">Preview Course</a>
                    <?php endif; ?>

                {% endif %}
                
                <div class="includes-component">
                  <h2>Includes</h2>
                  <ul class="prod-feature">
                    <?php $feature =  explode('|', $productData['product_features']);
                foreach ($feature as $i ) {?>
                    <li class="includes_item"><?php  echo $i;?></li>
                   <?php } ?>
                  </ul>
                </div>
                <div class="paytm-secure"> <img src="{{ config.CLOUD_URL }}assets/images/paytm-secure.jpg"> </div>
              </div>
              <!--/.row--> 
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
            </div>
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
        <center><img alt="loading.." src="/static/assets/images/loading.gif" /></center>
        <p>Please wait while we load the payment page. Do not close this page or click on refresh. </p>
    </div>
</div>

<div class="LmodalP" style="display: none">
    <div class="centerT">
        <center><img alt="loading.." src="/static/assets/images/loading.gif" /></center>
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


<?php include('ogfooter.php'); ?>          

<?php include('footer_scripts.php'); ?>          