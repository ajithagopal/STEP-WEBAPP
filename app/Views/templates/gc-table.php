<?php 
    helper('productTitle_helper');
    include('header.php'); 
    include('buyModal.php');
?>

<div class="product-plans-page">
    <div class="ppp-top-section">
        <div class="ppp-top-section-bg ppp-top-section-bg-active">
            <div class="course-type-box-highlight course-type-box-examPrep"></div>
        </div>
        <h1 class="ppp-title">English for <span class="pinkHigh">General Communication</span></h1>
        <p class="ppp-description">Courses focus on English language skills for daily communication.</p>
    </div>

    <div class="title-tab-contents">

        <div class="title-tab-main title-tab-main-label pad-rgt">
            <div class="title-tab-header align-flx-end"></div>
            <div class="title-tab-row">
              Coach calls
              <span class="popover-element" data-content="Coach calls are 30-minute one-on-one phone calls with an English coach (expert English trainer). Calls can be scheduled at your convenience. One topic in English will be taught in each call. The topics are chosen based on your background, requirements, and language levels. An assignment needs to be completed after each call, and the coach will correct and discuss your assignment in your next call.">
                i
              </span>
            </div>
           <!--  <div class="title-tab-row">
                Coach calls <span class="popover-element" data-toggle="popover" data-content="Coach calls are 30-minute one-on-one phone calls with an English coach (expert English trainer). Calls can be scheduled at your convenience. One topic in English will be taught in each call. The topics are chosen based on your background, requirements, and language levels. An assignment needs to be completed after each call, and the coach will correct and discuss your assignment in your next call.">+</span>
            </div> -->
            <div class="title-tab-row">
                Live classes <span class="popover-element" data-toggle="popover" data-content="">+</span>
            </div>
            <div class="title-tab-row">
                Online lessons <span class="popover-element" data-toggle="popover" data-content="">+</span>
            </div>
            <div class="title-tab-row">
                Validity (days)
            </div>
            <div class="title-tab-row tab-height">
                Skills covered
            </div>
            <div class="title-tab-row tab-height">
                Buy this if you
            </div>
        </div>
        <div class="title-tab-main-texts">
            <?php 
            $productLinks = [600 => 'general-communication-online' ,639 => 'general-communication-crash-course', 608 => 'general-communication-unlimited']; 
            $productDetails = [600 => ['product_name' => 'Online','coach_calls' => 'None','live_calls' => 'None','online_classes' => '40 hours','Validity'=>'3 months','course_covers'=>'- speaking skills <br /> - listening skills <br /> - reading skills <br /> - writing skills <br /> - grammar <br /> - vocabulary','sub_para' => 'Can only manage flexible online lessons'],639 =>['product_name' => 'Crash Course','coach_calls' => '6','live_calls' => '6','online_classes' => '17 hours','Validity'=>'6 months','course_covers'=>'- speaking skills <br /> - listening skills <br /> - reading skills <br /> - writing skills <br /> - grammar <br /> - vocabulary','sub_para' => 'Want flexible online lessons PLUS some personalised one-on-one coaching and interactive live session with experienced trainer'],608 => ['product_name' => 'Unlimited','coach_calls' => 'Unlimited','live_calls' => 'Unlimited','online_classes' => '60 hours','Validity'=>'3/6/12 months','course_covers'=>'- speaking skills <br /> - listening skills <br /> - reading skills <br /> - writing skills <br /> - grammar <br /> - vocabulary','sub_para' => 'Want flexible online lessons PLUS unlimited personalised one-on-one coaching and interactive live session with experienced trainer'],613 => ['original_price' => 10999,'offer_price' => 9499,'original_price_usd' => 132,'offer_price_usd' => 114],634 => ['original_price' => 21999,'offer_price' => 12999,'original_price_usd' => 263,'offer_price_usd' => 156]];
            /*$order = array(639, 608, 600);
*/
            foreach ($CourseDetails as $index => $course) { 
                if($course['product_id'] == 600  || $course['product_id'] == 639 ||$course['product_id'] == 608 ): 
                    $details = $productDetails[$course['product_id']];
                    $countrySymbol = $countryCode === 'IN' ? '₹' : '$';
                    ?>
                   <div class="title-tab-main" data-target="generalcommunication" data-id="title-tab-main-texts-<?= $index ?>" id="title-tab-main-texts-<?= $index ?>">
                        <div class="title-tab-main-flex-1">
                            <div class="title-tab-header"> 
                                <?php if ($index === 2) {  ?>
                                    <span class="bestSeller"></span>
                                <?php } ?>
                                <span class="title-tab-result-header"><?=  $details['product_name'] ?></span>
                            </div>
                            <div class="title-tab-row"><?= $details['coach_calls'] ? $details['coach_calls'] : 'None' ?></div>
                            <div class="title-tab-row"><?= $details['live_calls'] ? $details['live_calls'] : 'None' ?></div>
                            <div class="title-tab-row"><?= $details['online_classes'] ? $details['online_classes'] : 'None' ?></div>
                            <div class="title-tab-row title-tab-row-months">
                                <a href="javascript:void(0)" class="border-btn active"
                                    data-validity="<?= $details['Validity'] ?>"
                                    ><?= $details['Validity'] ?></a>
                            </div>
                            <div class="title-tab-row">
                                <p class="title-tab-row-content-para"><?=  $details['course_covers'] ?></p>
                            </div>
                            <div class="title-tab-row title-tab-row-content">
                                <p class="title-tab-row-content-para"><?= convert_accented_characters($details['sub_para']) ?></p>
                                <a href="<?= $productLinks[$course['product_id']] ?>" target="_blank" title="Click for more details" class="default-anchor">Click here to see course contents</a>
                            </div>    
                             <?php if ($course['product_id'] == 608): ?>
                             <div class="title-tab-row">
                              <label> <span class="text-danger"></span></label>
                              <select name="semester" id="semester" class="form-control" onchange="priceChange(this.value)">
                                <option value="">--Select--*</option>
                                <option value="1" >3 Months</option>
                                <option value="2" >6 Months</option>
                                <option value="3" >12 Months</option>
                            </select>
                            <span id="error_semester" class="text-danger"></span>
                          </div>  
                        
                      <?php endif; ?>
                        </div>
                        <div class="title-tab-footer">
                             <?php if ($course['product_id'] == 608): ?>

                            <div class="tab-footer-price-container a1">
                                    <div id="613og" class="strikeOriginalPrice <?=$countryCode?>">
                                        <?php if ($countryCode === 'IN') { ?>
                                            <?= $countrySymbol .round($productDetails[613]['original_price']) ?> 
                                        <?php } else { ?>
                                            <?= $countrySymbol .round($productDetails[613]['original_price_usd']) ?> 
                                        <?php } ?> 
                                    </div>
                                    <div id="613off" class="cellOfferPrice <?=$countryCode?>">
                                        <?php 
                                        if ($countryCode === 'IN') { ?>
                                            <?= $countrySymbol .round($productDetails[613]['offer_price']) ?>  <?php 
                                        } else { ?>
                                            <?= $countrySymbol .round($productDetails[613]['offer_price_usd']) ?> <?php 
                                        } ?>
                                    </div>
                                </div>
                                <div class="tab-footer-price-container a2">
                                    <div id="634og" class="strikeOriginalPrice <?=$countryCode?>">
                                        <?php if ($countryCode === 'IN') { ?>
                                            ₹<?= round($productDetails[634]['original_price']) ?> 
                                        <?php } else { ?>
                                            $<?= round($productDetails[634]['original_price_usd']) ?> 
                                        <?php } ?> 
                                    </div>
                                    <div id="634off" class="cellOfferPrice <?=$countryCode?>">
                                        <?php 
                                        if ($countryCode === 'IN') { ?>
                                            ₹<?= round($productDetails[634]['offer_price']) ?>  <?php 
                                        } else { ?>
                                            $<?= round($productDetails[634]['offer_price_usd']) ?> <?php 
                                        } ?>
                                    </div>
                                </div>
                            <div class="tab-footer-price-container a3">
                                <div id="608og" class="strikeOriginalPrice <?=$countryCode?>">
                                        <?php if ($countryCode === 'IN') { ?>
                                        ₹<?= round($course['original_price']) ?> 
                                    <?php } else { ?>
                                        $<?= round($course['original_price_usd']) ?> 
                                    <?php } ?> 
                                </div>
                                <div id="608off" class="cellOfferPrice <?=$countryCode?>">
                                    <?php 
                                    if ($countryCode === 'IN') { ?>
                                        ₹<?= round($course['offer_price']) ?>  <?php 
                                    } else { ?>
                                        $<?= round($course['offer_price_usd']) ?> <?php 
                                    } ?>
                                </div>
                            </div>
                             <button  id = "buy" class="btn-default open-modal" country-code = "<?=  $countryCode === 'IN' ?  'IN' :  'INT'?>" data-title="<?= $course['product_name']?>"  data-price=""  data-offerprice=" "   saved-price="Please,Select duration" data-product-id="" >BUY</button>
                             <?php endif; ?>
                            <?php if ($course['product_id'] == 600  || $course['product_id'] == 639 ): ?> 

                            <?php
                            if ($countryCode === 'IN') {
                                $savedPrice = $course['original_price'] - $course['offer_price'];
                                $savedPrice = '₹' . round($savedPrice);
                            } else {
                                $savedPrice = $course['original_price_usd'] - $course['offer_price_usd'];
                                $savedPrice = '$' . round($savedPrice);
                            }  ?>
                            <div class="tab-footer-price-container">
                                <div class="strikeOriginalPrice <?=$countryCode?>">
                                        <?php if ($countryCode === 'IN') { ?>
                                        ₹<?= round($course['original_price']) ?> 
                                    <?php } else { ?>
                                        $<?= round($course['original_price_usd']) ?> 
                                    <?php } ?> 
                                </div>
                                <div class="cellOfferPrice <?=$countryCode?>">
                                    <?php 
                                    if ($countryCode === 'IN') { ?>
                                        ₹<?= round($course['offer_price']) ?>  <?php 
                                    } else { ?>
                                        $<?= round($course['offer_price_usd']) ?> <?php 
                                    } ?>
                                </div>
                            </div>
                            <button class="btn-default open-modal" country-code = "<?=  $countryCode === 'IN' ?  'IN' :  'INT'?>" data-title="<?= $course['product_name']?>"  data-price="<?= $countryCode === 'IN' ? '₹' .round($course['original_price']) : '$' . round($course['original_price_usd']) ?>"  data-offerprice="<?= $countryCode === 'IN' ? '₹' .round($course['offer_price']) : '$' . round($course['offer_price_usd']) ?>"   saved-price="<?= $savedPrice ?>" data-product-id="<?= $course['product_id']?>" >BUY</button>
                          <?php endif; ?>

                        </div>
                    </div>

                <?php 
                endif; 
            } ?>

             <script>
    function priceChange(val) {
        var originalPrice, offerPrice, savedPrice;
        var countryCode = '<?= $countryCode === 'IN' ? 'IN' : 'INT' ?>';
        var currencySymbol = countryCode === 'IN' ? '₹' : '$';

        var text = document.getElementById('semester').value;
        if(text == 1){
            $(".a1").css({"display":"flex"}); 
            $('.a2').hide();
            $('.a3').hide();
            originalPrice = $('#613og').text();
            offerPrice = $('#613off').text();
            product_id = 613;
        } else if (text == 2){
            $(".a2").css({"display":"flex"}); 
            $('.a1').hide();
            $('.a3').hide();
            originalPrice = $('#634og').text();
            offerPrice = $('#634off').text();
            product_id = 634;
        } else if (text == 3){
            $(".a3").css({"display":"flex"}); 
            $('.a2').hide();
            $('.a1').hide();
            originalPrice = $('#608og').text();
            offerPrice = $('#608off').text();
            product_id = 608;
        }

        savedPrice = parseFloat(originalPrice.replace(currencySymbol, '')) - parseFloat(offerPrice.replace(currencySymbol, ''));
        $("#buy").attr("data-offerprice",  offerPrice);
        $("#buy").attr("saved-price", currencySymbol + savedPrice);
        $("#buy").attr("data-pr", currencySymbol + savedPrice);
        $("#buy").attr("data-product-id", product_id);

    }
</script>

 <script type="text/javascript">
        $(document).ready(function() {
          alert();
            $("#semester").click(function(e) {
              alert();
                event.preventDefault(); 
                window.dataLayer = window.dataLayer || [];
                window.dataLayer.push({
                    'event': 'group_price_select'
                });

                return true; 
            });
        });
      </script>

       </div>
    </div>
    <div class="ppp-top-section ppp-footer-section">
        <h3 class="ppp-subtitle">Explore</h3>
        <div class="category-card-container">
            <?php 
            $productNames = ['Working Professionals', 'Exam Preparation', 'IELTS']; 
            $nameIndex = 0;
            foreach ($productData as $index => $product): 
                if ($product['product_name_slug'] != 'steplearn' ): ?>
                    <div class="category-card category-card-v2">
                        <div class="category-card-inner" onclick="gotoURL('<?= $product['product_name_slug'] ?>')">
                            <h1><?php echo  $productNames[$nameIndex]; ?></h1>
                            <span>Starting from</span>
                            <div class="price-div" countryCode="<?= $countryCode === 'IN' ? 'IN' : 'INT' ?>">
                              <?php if ($countryCode === 'IN'): ?>
                                ₹<?= round($product['offer_price']) ?>
                            <?php else: ?>
                                $<?= round($product['offer_price_usd']) ?> 
                            <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <?php 
                    $nameIndex = ($nameIndex + 1) % count($productNames); 
                    ?>
                <?php 
                endif; 
            endforeach; ?>
        </div>
    </div>

</div>

<?php include('footer.php'); ?>    