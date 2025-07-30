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
         <ul class="breadcrumb">
            <li><a href="javascript:history.go(-1)">HOME</a></li>
            <li><a href="#" class="active">EXPLORE PLANS</a></li>
        </ul>
        <h1 class="ppp-title">English for <span class="pinkHigh"><?php echo $productDetails['product_title']; ?> </span></h1>
        <p class="ppp-description"><?php echo  $productDetails['product_sub_para']; ?> </p>
    </div>

    <div class="title-tab-contents">

        <div class="title-tab-main title-tab-main-label pad-rgt">
            <div class="title-tab-header align-flx-end"></div>
            <!-- <div class="title-tab-row">
              Coach calls
              <span class="popover-element" data-content="Coach calls are 30-minute one-on-one phone calls with an English coach (expert English trainer). Calls can be scheduled at your convenience. One topic in English will be taught in each call. The topics are chosen based on your background, requirements, and language levels. An assignment needs to be completed after each call, and the coach will correct and discuss your assignment in your next call.">
                i
              </span>
            </div> -->
          <div class="title-tab-row">
                Coach calls <span class="popover-element" data-toggle="popover" data-content="Coach calls are 30-minute one-on-one phone calls with an expert English trainer. Calls can be scheduled at your convenience. One customised topic will be taught in each call .An assignment must be completed after each call. The coach will discuss your assignment in your next call.">+</span>
            </div> 
               <?php  if($pid != 638){  ?>
            <div class="title-tab-row">
                Live classes <span class="popover-element" data-toggle="popover" data-content="Live Classes are live online lessons taught by an expert trainer. You can ask and answer questions through chat, vote through polls and complete activities to practice what you learnt.">+</span>
            </div>
              <?php } ?>
            <div class="title-tab-row">
                Online lessons <span class="popover-element" data-toggle="popover" data-content="Our online course consists of hundreds of webisodes, or video-based lessons. You will take a test at the start to get a course customised to your level. You will also take a test at the end of the course and earn a prestigious certificate from The Hindu Group.">+</span>
            </div>
             <?php  if($pid == 638){  ?>
            <div class="title-tab-row">
                Reference material 
            </div>
             <?php } ?>
            <div class="title-tab-row">
                Validity (months)
            </div>
          <!--   <div class="title-tab-row tab-height">
                Skills covered
            </div> -->
            <div class="title-tab-row tab-height">
                Buy this if you
            </div>
        </div>
        <div class="title-tab-main-texts">
            <?php 
           
            $highestPrice = 0;
            $bestsellerIndex = null;

            foreach ($CourseDetails as $index => $course) { 
                 $details = $productDetails[$course['product_id']];

                 $Highestvalue = max($course['offer_price'] ,$details['offer_price'] );
                if( $Highestvalue > $highestPrice){
                    $highestPrice = $course['offer_price'];
                    $bestsellerIndex = $index; 
                }  
                }
            foreach ($CourseDetails as $index => $course) { 
                 $details = $productDetails[$course['product_id']];
                    $countrySymbol = $countryCode === 'IN' ? '₹' : '$';  
                    $model = model(Product::class);      
                    $unlimitedDetails = $model->getUnlimited(); 

                    ?>
                   <div class="title-tab-main" data-target="generalcommunication" data-id="title-tab-main-texts-<?= $index ?>" id="title-tab-main-texts-<?= $index ?>">
                        <div class="title-tab-main-flex-1">
                            <div class="title-tab-header"> 

                                <?php if($index === $bestsellerIndex) {  ?>
                                    <span class="bestSeller"></span>
                                <?php } ?>
                                <span class="title-tab-result-header"><?=  $details['product_name']; ?></span>
                            </div>
                            <div class="title-tab-row"><?= $details['coach_calls'] ? $details['coach_calls'] : 'None' ?></div>
                            <?php  if($pid != 638){  ?>
                            <div class="title-tab-row"><?= $details['live_calls'] ? $details['live_calls'] : 'None' ?></div>
                              <?php } ?>
                            <div class="title-tab-row"><?= $details['online_classes'] ? $details['online_classes'] : 'None' ?></div>

                             <?php  if($pid == 638){  ?>
                             <div class="title-tab-row"><?= $details['reference_material'] ? $details['reference_material'] : 'None' ?></div>
                              <?php } ?>
                            <div class="title-tab-row title-tab-row-months">
                                <a href="javascript:void(0)" class="border-btn active"
                                    data-validity="<?= $details['Validity'] ?>"
                                    ><?= $details['Validity'] ?></a>
                            </div>
                         <!--    <div class="title-tab-row">
                                <p class="title-tab-row-content-para"><?=  $details['course_covers'] ?></p>
                            </div> -->
                            <div class="title-tab-row title-tab-row-content">
                                <p class="title-tab-row-content-para"><?= convert_accented_characters($details['sub_para']) ?></p>
                            </div>    
                            <div class="title-tab-row title-tab-row-link">
                                 <a href="<?= $productLinks[$course['product_id']] ?>" target="_blank" title="Click for more details" class="default-anchor">Click here to see course contents</a>
                            </div>
                             <?php if ($course['product_id'] == 608): ?>
                             <div class="title-tab-row">
                              <label> <span class="text-danger"></span></label>
                              <select name="semester" id="semester" class="form-control" onchange="priceChange(this.value)">
<!--                                 <option value="">--Select--*</option>
 -->                                <option selected value="1" >3 Months</option>
                                <option value="2" >6 Months</option>
                                <option value="3" >12 Months</option>
                            </select>
                            <span id="error_semester" class="text-danger"></span>
                          </div>  
                        
                      <?php endif; ?>
                        </div>
                        <div class="title-tab-footer">
                             <?php if ($course['product_id'] == 608): ?>

                            <div class="tab-footer-price-container a1" style="display:flex;">
                                    <div id="613og" class="strikeOriginalPrice <?=$countryCode?>">
                                        <?php if ($countryCode === 'IN') { ?>
                                            <?= $countrySymbol .round($unlimitedDetails[1]['original_price']) ?> 
                                        <?php } else { ?>
                                            <?= $countrySymbol .round($unlimitedDetails[1]['original_price_usd']) ?> 
                                        <?php } ?> 
                                    </div>
                                    <div id="613off" class="cellOfferPrice <?=$countryCode?>">
                                        <?php 
                                        if ($countryCode === 'IN') { ?>
                                            <?= $countrySymbol .round($unlimitedDetails[1]['offer_price']) ?>  <?php 
                                        } else { ?>
                                            <?= $countrySymbol .round($unlimitedDetails[1]['offer_price_usd']) ?> <?php 
                                        } ?>
                                    </div>
                                </div>
                                <div class="tab-footer-price-container a2" style="display:none;">
                                    <div id="634og" class="strikeOriginalPrice <?=$countryCode?>">
                                        <?php if ($countryCode === 'IN') { ?>
                                            ₹<?= round($unlimitedDetails[0]['original_price']) ?> 
                                        <?php } else { ?>
                                            $<?= round($unlimitedDetails[0]['original_price_usd']) ?> 
                                        <?php } ?> 
                                    </div>
                                    <div id="634off" class="cellOfferPrice <?=$countryCode?>">
                                        <?php 
                                        if ($countryCode === 'IN') { ?>
                                            ₹<?= round($unlimitedDetails[0]['offer_price']) ?>  <?php 
                                        } else { ?>
                                            $<?= round($unlimitedDetails[0]['offer_price_usd']) ?> <?php 
                                        } ?>
                                    </div>
                                </div>
                            <div class="tab-footer-price-container a3" style="display:none;">
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
                         <!--  <button  id = "buy" class="btn-default open-modal" country-code = "<?=  $countryCode === 'IN' ?  'IN' :  'INT'?>" data-title="<?= $course['product_name']?>"  data-price=""  data-offerprice=" "   saved-price="Please,Select duration" data-product-id="" >BUY</button>  -->

                             <button onclick="myFunction(this)" type="submit" class="buy" id="submitButton"  data-title-new="<?= !empty($course['product_name']) ? $course['product_name'] : 'Default Product Name' ?>" country-code = "<?=  $countryCode === 'IN' ?  'IN' :  'INT'?>" data-price=""  data-offerprice=" " data-product-id=""   >BUY</button>

                             <?php endif; ?>
                            <?php if ($course['product_id'] != 608): ?> 

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
                            <!-- <button class="btn-default open-modal" country-code = "<?=  $countryCode === 'IN' ?  'IN' :  'INT'?>" data-title="<?= $course['product_name']?>"  data-price="<?= $countryCode === 'IN' ? '₹' .round($course['original_price']) : '$' . round($course['original_price_usd']) ?>"  data-offerprice="<?= $countryCode === 'IN' ? '₹' .round($course['offer_price']) : '$' . round($course['offer_price_usd']) ?>"   saved-price="<?= $savedPrice ?>" data-product-id="<?= $course['product_id']?>" >BUY</button> -->
                          <!--   <button onclick="myFunction(this)" type="submit" class="c-button submitButton" country-code = "<?=  $countryCode === 'IN' ?  'IN' :  'INT'?>" data-offerprice="<?= $countryCode === 'IN' ? '₹' .round($course['offer_price']) : '$' . round($course['offer_price_usd']) ?>" data-price="<?= $countryCode === 'IN' ? '₹' .round($course['original_price']) : '$' . round($course['original_price_usd']) ?>"  data-product-id="<?= $course['product_id']?>">BUY</button> -->

                               <button onclick="myFunction(this)" type="submit" id="submitButton" country-code = "<?=  $countryCode === 'IN' ?  'IN' :  'INT'?>" data-title-new="<?= !empty($course['product_name']) ? $course['product_name'] : 'Default Product Name' ?>" data-offerprice="<?= $countryCode === 'IN' ? '₹' .round($course['offer_price']) : '$' . round($course['offer_price_usd']) ?>" data-price="<?= $countryCode === 'IN' ? '₹' .round($course['original_price']) : '$' . round($course['original_price_usd']) ?>"  data-product-id="<?= $course['product_id']?>">BUY</button>

                              
                          <?php endif; ?>

                        </div>
                    </div>

                <?php 
/*                endif; 
*/            } ?>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        priceChange(document.getElementById('semester').value);
    });

    function priceChange(val) {
        var originalPrice, offerPrice, savedPrice;
        var countryCode = '<?= $countryCode === 'IN' ? 'IN' : 'INT' ?>';
        var currencySymbol = countryCode === 'IN' ? '₹' : '$';

        var text = document.getElementById('semester').value;
        if(text == 1){
            $(".a1").css({"display":"flex"}); 
            $('.a2').hide();
            $('.a3').hide();
            originalPrice = $('#613og').text().trim();
            offerPrice = $('#613off').text();
            product_id = 634;
        } else if (text == 2){
            $(".a2").css({"display":"flex"}); 
            $('.a1').hide();
            $('.a3').hide();
            originalPrice = $('#634og').text().trim();
            offerPrice = $('#634off').text();
            product_id = 613;
        } else if (text == 3){
            $(".a3").css({"display":"flex"}); 
            $('.a2').hide();
            $('.a1').hide();
            originalPrice = $('#608og').text().trim();
            offerPrice = $('#608off').text();
            product_id = 608;
        }

        savedPrice = parseFloat(originalPrice.replace(currencySymbol, '')) - parseFloat(offerPrice.replace(currencySymbol, ''));
        $(".buy").attr("data-offerprice",  offerPrice);
        $(".buy").attr("data-price",  originalPrice);
        $(".buy").attr("data-product-id", product_id);

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
   <!--  <div class="ppp-top-section ppp-footer-section">
        <h3 class="ppp-subtitle">Explore</h3>
        <div class="category-card-container">
            <?php 

            foreach ($exploreData as $index => $product): 
            ?>
                    <div class="category-card category-card-v2">
                        <div class="category-card-inner" onclick="gotoURL('<?= $product['product_name_slug'] ?>')">
                            <h1>
                                 <?php
                            echo productTitle($product['product_name']);
                          ?>
                            </h1>
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
            endforeach; ?>
        </div>
    </div>
 -->
 <div class="ppp-top-section ppp-footer-section">
    <h3 class="ppp-subtitle" id="explore-link" onclick="toggleCourses(event)">Explore other courses</h3>
    
    <div class="category-card-container" id="course-cards" style="display: none;">
        <?php foreach ($exploreData as $index => $product): ?>
            <div class="category-card category-card-v2">
                <div class="category-card-inner" onclick="gotoURL('<?= $product['product_name_slug'] ?>')">
                    <h1>
                        <?php echo productTitle($product['product_name']); ?>
                    </h1>
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
        <?php endforeach; ?>
    </div>
</div>

</div>

<?php include('footer.php'); ?>    
<?php include('buyLoader.php'); ?>   
