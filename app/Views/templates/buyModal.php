
<div class="bottom-box" id="open" style="display: none;">
       <div class="inner-box">
       <h2 class="online-title data-title-new" >Online</h2>
        <div class="box">
            <button class="close-icon" onclick="closeDiv()">x</button>
            <div class="content-box">
                <input type="text" class="input-box p-email" placeholder="Enter Mobile Number"  onfocus="this.value=''"/>
               <!--  <input type="email" name="email" id="p-email" class="form-style" autocomplete="off"/>  -->
                    <input type="hidden" name="txtProductId" class="data-product-id">
                    <input type="hidden" name="countryCode" class="country-code">
                <div class="coupon-code input-group styled-input">
                        <input class="coupon-input txtCoupon" type="text"  placeholder="Have a Coupon code?">
                        <button class="apply-btn" onclick="couponbtn('bottom-box')">APPLY</button>
                </div>
                <div class="price-box">
                    <div class="price">
                    <p><s class="data-price" ></s> <span class="data-offerprice" > </span></p>
                  </div>
                   <div class="Lmodal" style="display: none">
                        <div class="centerT">
                            <center><img alt="loading.." src="<?=base_url()?>/assets/images/loading.gif" /></center>
                            <p>Please wait while we load the payment page. Do not close this page or click on refresh. </p>
                        </div>
                    </div>
                    <button class="buy-btn" onclick="buyybtn('bottom-box')" type="button">
                        BUY
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

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

<script>

    function myFunction(button) {
        const offerPrice = button.getAttribute("data-offerprice");
        document.getElementsByClassName("data-offerprice")[0].textContent = offerPrice;

        const originalPrice = button.getAttribute("data-price");
        document.getElementsByClassName("data-price")[0].textContent = originalPrice;

        const productId = button.getAttribute("data-product-id");
        document.getElementsByClassName("data-product-id")[0].value = productId;

        const countryCode = button.getAttribute("country-code");
        document.getElementsByClassName("country-code")[0].value = countryCode;

        const productName = button.getAttribute("data-title-new");
        document.getElementsByClassName("data-title-new")[0].textContent = productName;


      document.getElementById("open").style.display = "flex";

    }
    function closeDiv(){
        document.getElementById("open").style.display = "none";
        
    }
</script>


