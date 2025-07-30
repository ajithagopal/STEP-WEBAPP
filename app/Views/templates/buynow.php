<div id="myModal" class="modal">
    <div class="buynowpage">
        <div id="formWrapper">
            <div id="form">
                <span id="close">&times</span>
                <div class="pricedetails">
                    <div class="top-menu-logos">
                        <a href="/" title="STEP"><img src="assets/images/STEP.svg" alt="STEP"></a>
                        <a href="https://thehindu.com/" title="The Hindu Group"><img src="assets/images/hindu-newspaper.svg" alt="The Hindu" /></a>
                    </div>
                    <div class="buynowpage-head">
                        <h2 class="heading" id="data-title"></h2>
                        
                         <div class="offerPriceDiv"><span id="data-offerprice" ></span></div> 
                        <!-- <div class="offerPriceDiv"><span id="data-offerprice" class="offerPrice <?php echo $countryCode; ?>"></span></div>  -->

                        <div class="savedOffer" id="saved-price"></div>
                        <div class="originalPrice" id="data-price"></div>
                    </div>
                </div>
                <div class="form-item">
                    <p class="formLabel">Email/Phone no</p>
                    <input type="email" name="email" id="p-email" class="form-style" autocomplete="off"/> 
                    <input type="hidden" name="txtProductId" id="data-product-id">
                    <input type="hidden" name="countryCode" id="country-code">
                </div>
                <div class="form-item">
                    <p class="formLabel">Coupon code</p>
                    <input type="text" name="txtCoupon" id="txtCoupon" class="form-style coupon"/>
                    <button type="button" class="login pull-right  couponbtn" id="txtCoupon">Apply</button> 
                </div>
                <div class="form-item1">
                    <div class="buynowpage-footer">
                        <span>You just saved <span id="saved-price"></span></span>
                        <input type="submit" class="login c-button" value="Buy Now"/> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
