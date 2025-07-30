<?php 
    helper('productTitle_helper');
    include('header.php'); 
    include('buyModal.php');
?>

<div class="product-plans-page">
    <div class="ppp-top-section">
        <div class="ppp-top-section-bg ppp-top-section-bg-active">
            <div class="course-type-box-highlight course-type-box-ieltsPrep"></div>
        </div>
        <h1 class="ppp-title">English for <span class="blueHigh">IELTS Preparation</span></h1>
        <p class="ppp-description">A unique course focusing on the speaking section of the IELTS, both the academic and general tests.</p>
    </div>

    <div class="title-tab-contents">
        <div class="title-tab-main title-tab-main-label pad-rgt">
            <div class="title-tab-header align-flx-end"></div>
            <div class="title-tab-row">
                Coach calls <span class="popover-element" data-toggle="popover" data-content="">+</span>
            </div>
            <div class="title-tab-row">
                Online lessons <span class="popover-element" data-toggle="popover" data-content="">+</span>
            </div>
            <div class="title-tab-row">
                Reference material <span class="popover-element" data-toggle="popover" data-content="">+</span>
            </div>
            <div class="title-tab-row">
                Validity
            </div>
            <div class="title-tab-row tab-height">
                Skills covered
            </div>
            <div class="title-tab-row tab-height">
                Buy this if you
            </div>
        </div>

        <?php 
        foreach ($CourseDetails as $index => $course) { 
            if ($course['product_id'] == 638): ?>

            <div class="title-tab-main-texts">
                <div class="title-tab-main" data-target="generalcommunication" data-id="title-tab-main-texts-<?= $index ?>" id="title-tab-main-texts-<?= $index ?>">
                    <div class="title-tab-main-flex-1">
                        <div class="title-tab-header"> 
                            <?php if ($index === 2) {  ?>
                                <span class="bestSeller"></span>
                            <?php } ?>
                            <span class="title-tab-result-header"><?= $course['product_name'] ?></span>
                        </div>
                        <div class="title-tab-row"><?= 31 ?></div>
                        <div class="title-tab-row"><?= "10 hours"; ?></div>
                        <div class="title-tab-row"><?= "Yes" ?></div>
                        <div class="title-tab-row title-tab-row-months">
                            <a href="javascript:void(0)" class="border-btn active"
                                data-validity="<?= $course['licence_expiry_days'] ?>"
                                data-OriginalPrice="<?= $course['original_price'] ?>"
                                data-OfferPrice="<?= $course['offer_price'] ?>"><?= "3 months"; ?></a>
                        </div>
                        <div class="title-tab-row">
                            <p class="title-tab-row-content-para">- IELTS Speaking exam tips & tricks <br / > - speaking skills <br / > - grammar <br /> - vocabulary</p>
                        </div>
                        <div class="title-tab-row title-tab-row-content">
                            <p class="title-tab-row-content-para"><?= "Want to ace your IELTS Speaking test"; ?></p>
                            <a href="<?= $course['product_id'] ?>" target="_blank" title="Click for more details" class="default-anchor">Click here to see course contents</a>
                        </div>    
                    </div>
                    <div class="title-tab-footer">
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
                        <button class="btn-default open-modal" country-code = "<?=  $countryCode === 'IN' ?  'IN' :  'INT'?>" data-title="<?= $course['product_name']?>"  data-price="<?= $countryCode === 'IN' ? '₹' .$course['original_price'] : '$' . $course['original_price_usd'] ?>"  data-offerprice="<?= $countryCode === 'IN' ? '₹' .round($course['offer_price']) : '$' . round($course['offer_price_usd']) ?>"   saved-price="<?= $savedPrice ?>" data-product-id="<?= $course['product_id']?>" >BUY</button>
                    </div>
                </div>
            </div>

            <?php 
            endif; 
        } ?>
    </div>

    <div class="ppp-top-section ppp-footer-section">
        <h3 class="ppp-subtitle">Explore</h3>
        <div class="category-card-container">
            <?php
            $productNames = [ 'General Communication' ,'Working Professionals', 'Exam Preparation']; 
            $nameIndex = 0;
             foreach ($productData as $index => $product): ?>
                <?php if ($product['product_name_slug'] != 'stepforielts' ): ?>
                    <div class="category-card category-card-v2">
                        <div class="category-card-inner" onclick="gotoURL('<?= $product['product_name_slug'] ?>')">
                            <h1><?php echo $productNames[$nameIndex]; ?></h1>
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
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<script src="/assets/js/productTable.js"></script>

<?php include('footer.php'); ?>
