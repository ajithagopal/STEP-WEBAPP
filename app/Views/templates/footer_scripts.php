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

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha256-xaF9RpdtRxzwYMWg4ldJoyPWqyDPCRD0Cv7YEEe6Ie8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js" integrity="sha256-jDnOKIOq2KNsQZTcBTEnsp76FnfMEttF6AV2DF2fFNE=" crossorigin="anonymous"></script>
<script src="{{ config.CLOUD_URL }}assets/js/front.js?v={{ config.CDN_VERSION }}"></script> 
<script src="{{ config.CLOUD_URL }}assets/js/dropdown.js?v={{ config.CDN_VERSION }}"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/mobile-detect/1.4.3/mobile-detect.min.js" integrity="sha256-NjqA02fmZY5y2RjNM/lIHOeSkZmphYEisNzGHf+mL94=" crossorigin="anonymous"></script>
<script src="{{ config.CLOUD_URL }}assets/js/multislider.js?v={{ config.CDN_VERSION }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.10/jquery.lazy.min.js" integrity="sha256-ZPvH+DBiXs1v8yk7lmZa6+wqm+kzbwL9R1COtZ9+wjo=" crossorigin="anonymous"></script>
<script type="application/javascript" src="{{ config.PAYTM_SCRIPT }}"></script>
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
var CCode = "{{ session['countryCode'] }}";

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

<!-- UDMP tracking -->
<script type="text/javascript" src="{{ config.UDMP_URL }}/feeder/step/js/feed.js"></script>
<script type="text/javascript">
    (function(w,d,l,i) {
       w[l]=w[l]||[];
      w[l].push({start: new Date().getTime(), siteId: 'STT-R6VOO3'});
    })(window, document, 'taiDataLayer', 'STT-R6VOO3');
    var taiData = (typeof window.taiDataLayer != 'undefined') ? 
    window.taiDataLayer : [];

    taiData.push({
      msisdn:'183434121343',
      {% if resultdata['sitetype'] == 'product' %}
      pageName: "{{ productData['product_name'] }}",
      {% else %}
      pageName: "{{ resultdata['siteTitle'] }}",
      {% endif %}
      pageUrl: window.location.href.split('?')[0],
      pageTitle: "{{ resultdata['siteTitle'] }}",
      event: 'onload'
    });

    sendTaiData(taiData,'onload'); 
  </script>
<!-- UDMP tracking Ends -->
<script>
$(document).ready(function() {
  var options = {
      origin: "{{ config.CLIENT_URL }}",
      path: "/iframe.html"
  };
  Storage = crossDomainStorage(options);
   
  //...
  //Storage.setItem('from_website', 'Yes');
   
  //...
  Storage.getItem('token', function(key, value) {
    if(value!=null && value!=undefined && value!="") {
      $.ajax({
        type:'get',
        url:"{{ config.API_URL }}"+'v1/validateuser',
        headers: {'access-token':value,'platform':'w1'},
        success:function(res) {
          console.log(res)
          var wc_uname = res.data.user_name;
          if(wc_uname == '')
          {
            wc_uname = 'Learner'
          }
          if($('#txtEmail')) {
            $('#txtEmail').val(res.data.login_id)
            //$("#txtEmail").prop('readonly', true);
            $("<p class=\"notyou\"><a class=\"notyoua\" href=\"{{ config.CLIENT_URL }}/logout\">(Not You?)</a></p>").insertAfter("#kktextbox");
          }
          $(".btnSignInUrl").hide()
          $(".clsUserName").html('Hi, '+wc_uname)
          $(".contact-padding").hide()
          if(res.data.is_active_course===true) {
            $(".btnSignUp").html('View Active Course')
            $(".introbutton").text("View Active Course")
            $(".btnSignUpUrl, .introbuttonlink").attr('href',"{{ config.CLIENT_URL }}/mycourse?course_id="+res.data.course_id)
          } else {
            $(".btnSignUp").html('Take Free Test')
            $(".introbutton").text("Take Free Test")
            $(".btnSignUpUrl, .introbuttonlink").attr('href',"{{ config.CLIENT_URL }}/mycourse?course_id=0")
          }
          window.dataLayer = window.dataLayer || [];
          window.dataLayer.push({
            'event': 'is_signedin',
            'user_id':res.data.user_id,
            'phone':res.data.phone,
            'email':res.data.email,
            'has_active_course':res.data.is_active_course,
            'is_retail':res.data.is_retail
          });
        }
      });
    }
  })  
})
</script>

{% if resultdata['sitetype'] == 'product' %}
<script type="text/javascript">
  var api_url = "{{ config.API_URL }}";
  var client_url = "{{ config.CLIENT_URL }}";
  var cloudURL = "{{ config.CLOUD_URL }}";

  function removeErrorMsg()
  {
    $("#errormsg").hide();
    $("span.errormsg").hide();
    return false;
  }
</script>
<script src="https://apis.google.com/js/platform.js" async defer></script> 
<script src="{{ config.CLOUD_URL }}assets/js/aadhar_script.js?v={{ config.CDN_VERSION }}"></script> 
<script src="{{ config.CLOUD_URL }}assets/js/login.js?v={{ config.CDN_VERSION }}"></script>
<script src="{{ config.CLOUD_URL }}assets/js/flipclock.js?v={{ config.CDN_VERSION }}"></script> 
{% endif %}
{% if resultdata['template'] == 'foryou.html' %}
<script src="{{ config.CLOUD_URL }}assets/js/jquery.magic-height.min.js"></script> 
{% endif %}
<script type="text/javascript">

	$(document).ready(function() {

{% if ((resultdata['template'] == 'product.html') or (resultdata['template'] == 'product_subs.html')) %}
    function startPaymentserver(token, username, coupon, is_subscription=0)
  {
    /*alert(token);
    alert(username);
    alert(coupon);*/
        var postForm = { //Fetch form data
            'product_id'     : {{ productData['product_id']}},
            'is_mobile': "no",
            'coupon': coupon,
            'is_subscription': is_subscription,
            'payment_type' : 'paytm',
            'is_gst' : 'Y',
            'payment_method' : 'DC'
        };
        $.ajax({ //Process the form using $.ajax()
            type      : 'POST', //Method type
            url       : '{{ config.API_URL }}v1/startwebpayment', //Your form processing file URL
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
                          'product_id': {{ productData['product_id']|int}},
                          'product_name': $(".product-title").text(),
                          'coupon_code': $("#txtCoupon").val().replace(/\s/g, ''),
                          'actual_product_value': "{{ productData['original_price']|int }}",
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
                            'product_id': "{{ productData['product_id']|int}}",
                            'product_name': $(".product-title").text(),
                            'coupon_code': $("#txtCoupon").val().replace(/\s/g, ''),
                            'actual_product_value': "{{ productData['original_price']|int }}",
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
    {% endif %}
    
{% if ((resultdata['template'] == 'product.html') or (resultdata['template'] == 'product_subs.html')) %}
  $(document).ready(function() {
    window.addEventListener('load', function() {
      var ga = window[window['GoogleAnalyticsObject']];
      if (ga && ga.getAll) {
        var linkerParam = ga.getAll()[0].get('linkerParam');
        $("#txtLinkerParam").val(linkerParam);
      }
    });
  });

  
  $("#ieltsPreview").click(function(){
      var pin = $("#ieltsPIN").val();
      var linker = $("#txtLinkerParam").val()
      var txtEmailPhone = $("#txtEmail").val();
      if(pin == "" || pin.length < 6 || pin.length > 6)
      {
        alert("Invalid PIN!");
        return false;
      } else {
          $.ajax({
                    url: '{{ config.API_URL }}v1/login',
                    type: 'post',
                    data: "keepalive=true&login_id="+txtEmailPhone+"&pin="+pin,
                    contentType: 'application/x-www-form-urlencoded',
                    success: function( resp ){
                        /*$('#response pre').html( data );*/
                        console.log(resp)
                        if(resp.status == 'fail')
                        {
                            alert(resp.message)
                            return false;
                        } else {
                          var token = resp.data.token;
                          var nuser = resp.data.new_user;

                           window.dataLayer = window.dataLayer || [];
                            window.dataLayer.push({
                              'event': 'website_preview_success',
                              'user_id': resp.data.user_id,
                              'phone': resp.data.phone,
                              'email': resp.data.email,
                              {% if session['countryCode'] == 'IN' %}
                              'is_international': false,
                              {% endif %}
                              {% if session['countryCode'] != 'IN' %}
                              'is_international': true,
                              {% endif %}
                              'product_id': {{ productData['product_id']|int}},
                              'product_name': $(".product-title").text(),
                              'signup': resp.data.new_user,
                            });

                          window.location.href="{{ config.CLIENT_URL }}/sso?"+linker+"&product_id=638&token="+token+"&new_user="+nuser+"&referer=preview&return_path=/mycourse%3fcourse_id=507%26previewMode=1%26product_id=638"
                        }
                    },
                    error: function( jqXhr, textStatus, errorThrown ){
                        alert(jqXhr.responseJSON.message )
                        console.log( jqXhr );
                    },
                    beforeSend: function () {
                      $(".LmodalP").show();
                    },
                    complete: function () {
                        $(".LmodalP").hide();
                    }
          });
      }
  });

  $("#btnpreviewSubmit").click(function(){
    var txtEmailPhone = $("#txtEmail").val();
    if(txtEmailPhone == '')
    {
          $("span.errormsg").hide();
          $("#errormsg").css("display", "block");
          $("#txtEmail").focus();
          $('html, body').animate({
              scrollTop: $("#divscroll").offset().top
           }, 2000);
          return false;
    } else {
          $("#stk").html(txtEmailPhone);
/*           $("#OTPModal").modal('show'); 
           return false;
*/          $.ajax({
                    url: '/ieltsPreview',
                    type: 'post',
                    data: "txtEmail="+txtEmailPhone,
                    contentType: 'application/x-www-form-urlencoded',
                    success: function( data, textStatus, jQxhr ){
                        /*$('#response pre').html( data );*/
                        console.log(data)
                        if(data.status == 'error')
                        {
                            $("span.errormsg").hide();
                            $("#errormsg").css("display", "block");
                            $("#txtEmail").focus();
                            $('html, body').animate({
                              scrollTop: $("#divscroll").offset().top
                              }, 2000);
                            return false;
                        } else {

                            window.dataLayer = window.dataLayer || [];
                            window.dataLayer.push({
                              'event': 'website_preview_start',
                              'user_id': data.userid,
                              'phone': data.phone,
                              'email': data.email,
                              {% if session['countryCode'] == 'IN' %}
                              'is_international': false,
                              {% endif %}
                              {% if session['countryCode'] != 'IN' %}
                              'is_international': true,
                              {% endif %}
                              'product_id': {{ productData['product_id']|int}},
                              'product_name': $(".product-title").text(),
                              'signup': data.newuser,
                            });

                          $("#OTPModal").modal('show'); 
                        }
                    },
                    error: function( jqXhr, textStatus, errorThrown ){
                        alert(jqXhr.responseJSON.message )
                        console.log( errorThrown );
                    },
                    beforeSend: function () {
                      $(".LmodalP").show();
                    },
                    complete: function () {
                        $(".LmodalP").hide();
                    }
          });
    }
    
  });

{% if session['countryCode'] != 'IN' %}
  $(".gotoBuynow, #btnSubmit").click(function(){
        var txtEmailPhone = $("#txtEmail").val();
        if(txtEmailPhone == '')
        {
          window.dataLayer = window.dataLayer || [];
          window.dataLayer.push({
            'event': 'buy_now_error',
            'product_id': {{ productData['product_id']|int}},
            'product_name': $(".product-title").text(),
            'coupon_code': $("#txtCoupon").val().replace(/\s/g, ''),
            'actual_product_value': "{{ productData['original_price']|int }}",
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
        $("#frm_buy").submit();// Submit the form
    });

{% endif %}

{% if session['countryCode'] == 'IN' %}
  $(".gotoBuynow, #btnSubmit").click(function(){
        var txtEmailPhone = $("#txtEmail").val();
        if(txtEmailPhone == '')
        {
          window.dataLayer = window.dataLayer || [];
          window.dataLayer.push({
            'event': 'buy_now_error',
            'product_id': {{ productData['product_id']|int}},
            'product_name': $(".product-title").text(),
            'coupon_code': $("#txtCoupon").val().replace(/\s/g, ''),
            'actual_product_value': "{{ productData['original_price']|int }}",
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

        $.ajax({
              url: '<?php echo baseURL; ?>securepayment',
              type: 'post',
              data: $("form#frm_buy").serialize(),
              contentType: 'application/x-www-form-urlencoded',
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
{% endif %}

    qry_val = window.location.href.split('?');
    $("#txtQueryString").val(qry_val[1]);
    $("#txtProductId").val({{ productData['product_id']}});
    $("#txtProductPrice").val({{ productData['offer_price']}});
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
    {% endif %}
    {% if resultdata['template'] != 'product.html' %}
		$('#mixedSlider').multislider({
			duration: 1000,
			interval: 5000
		});
	  $('#ClientSlider').multislider({
			duration: 750,
			interval: 3000
		});
    {% endif %}

		$('.lazy').lazy();

	var search = window.location.search.slice(1);
    if(search!="" && search.indexOf("txtEmail")!=-1) {
      localStorage.setItem('showThankyou', "yes");
      window.location.href="stepworks";
      return;
    }
    if(localStorage.getItem('showThankyou')==="yes") {
      $('#launch-modal').trigger('click');
      localStorage.removeItem('showThankyou');
    }

var url = window.location.href;
 url = url.substring(0, (url.indexOf("#") == -1) ? url.length : url.indexOf("#"));
 url = url.substring(0, (url.indexOf("?") == -1) ? url.length : url.indexOf("?"));
 url = url.substr(url.lastIndexOf("/") + 1); 
 $('.navbar-nav li').each(function(){
  var href = $(this).find('a').attr('href');
  if(url == href){
   var parentClass = $(this).parent('ul').attr('class');
   if(parentClass == 'dropdown-menu'){
    $(this).parents('.navbar-nav li').addClass('active');
   }else{
    $(this).addClass('active');
   }
  }
 });

 {% if resultdata['template'] == 'foryouold.html' %}
$(".npt").click(function(){
 $("body, html").animate({
    scrollTop: $("#learningstyle").offset().top
});
}); 
  $.ajax({
      url: '{{ config.BANNER_STORAGE_URL }}banner.json',
      type: 'GET',
      success: function(d) {
        var banners = ''
        var indicators = ''
        var image_link = ''
        $.each(d.data, function(i, item) {
          is_active = ''
          if(i==0) {
            is_active='active'
          }
          indicators+='<li data-target="#banner_carousel" data-slide-to="'+i+'" class="'+is_active+'"></li>'
          image_link = (item.image_link!="")?'href="'+item.image_link+'" target="_blank"':''
          banners+='<div class="carousel-item '+is_active+'"> <a '+image_link+'><img class="w-100 img-fluid banner-desktop" src="'+item.web_banner_image+'" alt="slide"> <img class="w-100 img-fluid banner-mobile" src="'+item.mob_banner_image+'" alt="slide"></a> </div>'
        });
        indicators = '<ol class="carousel-indicators">'+indicators+'</ol>'
        banners = '<div class="carousel-inner" role="listbox">'+banners+'</div><div class="carousel-control"><a class="carousel-control-prev" href="#banner_carousel" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="carousel-control-next" href="#banner_carousel" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a></div>'
        $("#banner-loading").hide()
        $("#banner_carousel").html(indicators+banners);        
        
        $('.carousel-inner').each(function() {
          if ($(this).children('div').length === 1)
            $(this).siblings('.carousel-control, .carousel-indicators').hide();
        });
      },
      error: function() {
      }
    });

  $.ajax({
      url: '{{ config.PRODUCT_STORAGE_URL }}foryou.json',
      type: 'GET',
      success: function(d) {
        var products = ''
        $.each(d.data, function(i, item) {
          category = ""
          {% if session['countryCode'] == 'IN'%}
            if(item.country ==2) {
              return;
            }
          {%endif%}

          {% if session['countryCode'] != 'IN'%}
              if(item.country != 2) {
                return;
              }
          {% endif %}
          if(item.product_category!="" && item.product_category!=null) {
            category = item.product_category.split('|').sort()
            category = category.join(' ')
          }
          products+='<div class="col-lg-3 col-md-6 col-6 product '+category+'"><div class="plan-inner"><div class="entry-title desktop-product-image"><img src="'+item.product_bg_image+'" class="img-fluid"><div class="product-logo-image"><img src="'+item.product_new_icon+'"></div></div><div class="entry-title mobile-product-image"><img src="'+item.product_new_icon+'" class="img-fluid"></div><div class="entry-content foryou-product-shadow"><h5 style="font-size: 16px;color: #8e8a8a;">'+item.product_name+'</h5><ul>'
          if(item.product_desc!="" && item.product_desc!=null) {            
            $.each(item.product_desc.split('|'), function(i, val) {
              products+='<li>'+val+'</li>'
            });
          }
          products+='</ul></div><div class="testing-height"><div class="price-value">';
          if(item.original_price!=item.offer_price) {
            products+='<div class="product-price-original">₹'+item.original_price+'</div>';
          }
          products+='<div class="product-price-offers"><span class="currency">₹</span>'+item.offer_price+' </div></div><a href="product/'+item.product_name_slug+'"><button class="knowmore-button">Know more</button></a></div></div></div>'
        });
        $("#product-loading").hide()
        $("#product_table").html(products+"<div class='foryou-title no_product'>No Products Available</div>");
        $('#product_table').magicHeight({
          itemClass: '.entry-content',
          resize:false,
          load:false
        });
      },
      error: function() {

      }
    });
    $(".prod_filter").change(function() {
      var filter = []
      $(".prod_filter").each(function() {
        if($(this).is(':checked')) {
          filter.push($(this).val())
        }
      })
      filter_test = filter.sort().join('.')
      $(".no_product").hide()
      $(".product").hide();
      if(filter_test!="") {
        $("."+filter_test).show();
      } else {
        $(".product").show();
      }
      if($('#product_table .product:visible').length==0) {
        $(".no_product").show()
      }
      height = 0
      $('#product_table .product:visible').each(function() {
        temp = $(this).find('.entry-content').css('height').split('px')[0]
        if(temp>height) {
          height = temp
        }
      })
      $('#product_table .product:visible').find('.entry-content').css('height', height+'px')
    })


{% endif %}

	{% if resultdata['template'] == 'foryou.html' %}	
	$.ajax({
      url: '{{ config.BANNER_STORAGE_URL }}banner.json',
      type: 'GET',
      success: function(d) {
        var banners = ''
        var indicators = ''
        var image_link = ''
        $.each(d.data, function(i, item) {
          is_active = ''
          if(i==0) {
            is_active='active'
          }
          indicators+='<li data-target="#banner_carousel" data-slide-to="'+i+'" class="'+is_active+'"></li>'
          image_link = (item.image_link!="")?'href="'+item.image_link+'" target="_blank"':''
          banners+='<div class="carousel-item '+is_active+'"> <a '+image_link+'><img class="w-100 img-fluid banner-desktop" src="'+item.web_banner_image+'" alt="slide"> <img class="w-100 img-fluid banner-mobile" src="'+item.mob_banner_image+'" alt="slide"></a> </div>'
        });
        indicators = '<ol class="carousel-indicators">'+indicators+'</ol>'
        banners = '<div class="carousel-inner" role="listbox">'+banners+'</div><div class="carousel-control"><a class="carousel-control-prev" href="#banner_carousel" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="carousel-control-next" href="#banner_carousel" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a></div>'
        $("#banner-loading").hide()
        $("#banner_carousel").html(indicators+banners);        
        
        $('.carousel-inner').each(function() {
          if ($(this).children('div').length === 1)
            $(this).siblings('.carousel-control, .carousel-indicators').hide();
        });
      },
      error: function() {
      }
    });

    $.ajax({
        url: '{{ config.PRODUCT_STORAGE_URL }}footerdata.json',
        type: 'GET',
        success: function(d) {
          var product_list = ''
          $.each(d.data, function(i, item) {
            if(i<=9) {
              product_list+='<li><a href="/product/'+item.product_name_slug+'" alt="'+item.product_name+'">'+item.product_name+'</a></li>'
            }
          });
          $(".product_list_ul").html(product_list);
        },
        error: function() {

        }
      });
    $("#product-loading").hide()

	/*$.ajax({
      url: '{{ config.PRODUCT_STORAGE_URL }}products.json',
      type: 'GET',
      success: function(d) {
        var products = ''
        $.each(d.data, function(i, item) {
          category = ""
          {% if session['countryCode'] == 'IN'%}
            if(item.country ==1) {
              return;
            }
          {%endif%}

          {% if session['countryCode'] != 'IN'%}
              if(item.country == 0) {
                return;
              }
          {% endif %}
          var urlParams = window.location.href.split('?')[1];
          if (typeof urlParams === "undefined") {
            urlParams = '';
          } else {
            urlParams = "?"+urlParams;
          }
          if(item.product_category!="" && item.product_category!=null) {
            category = item.product_category.split('|').sort()
            category = category.join(' ')
          }
          products+='<div class="col-lg-3 col-md-6 col-6 product '+category+'"><div class="plan-inner"><div class="entry-title desktop-product-image"><img src="'+item.product_bg_image+'" class="img-fluid"><div class="product-logo-image"><img src="'+item.product_new_icon+'"></div></div><div class="entry-title mobile-product-image"><img src="'+item.product_new_icon+'" class="img-fluid"></div><div class="entry-content foryou-product-shadow"><ul>'
          if(item.product_desc!="" && item.product_desc!=null) {            
            $.each(item.product_desc.split('|'), function(i, val) {
              products+='<li>'+val+'</li>'
            });
          }
          {% if session['countryCode'] == 'IN' %}
          products+='</ul></div><div class="testing-height"><div class="price-value">';
          if(item.original_price!=item.offer_price) {
            products+='<div class="product-price-original">₹'+item.original_price+'</div>';
          }
          var productUrl = "product/"+item.product_name_slug+""+urlParams;
          products+='<div class="product-price-offers"><span class="currency">₹</span>'+item.offer_price+' </div></div><a href="'+productUrl+'"><button class="knowmore-button">Know more</button></a></div></div></div>'
          {%else%}
          products+='</ul></div><div class="testing-height"><div class="price-value">';
          if(item.original_price_usd!=item.offer_price_usd) {
            products+='<div class="product-price-original">$'+item.original_price_usd+'</div>';
          }
          var productUrl = "product/"+item.product_name_slug+""+urlParams;
          products+='<div class="product-price-offers"><span class="currency">$</span>'+item.offer_price_usd+' </div></div><a href="'+productUrl+'"><button class="knowmore-button">Know more</button></a></div></div></div>'

          {% endif %}
        });
        $("#product-loading").hide()
        $("#product_table").html(products+"<div class='foryou-title no_product'>No Products Available</div>");
        $('#product_table').magicHeight({
          itemClass: '.entry-content',
          resize:false,
          load:false
        });
      },
      error: function() {

      }
    });*/
    $(".prod_filter").change(function() {
      var filter = []
      $(".prod_filter").each(function() {
        if($(this).is(':checked')) {
          filter.push($(this).val())
        }
      })
      filter_test = filter.sort().join('.')
      $(".no_product").hide()
      $(".product").hide();
      if(filter_test!="") {
        $("."+filter_test).show();
      } else {
        $(".product").show();
      }
      if($('#product_table .product:visible').length==0) {
        $(".no_product").show()
      }
      height = 0
      $('#product_table .product:visible').each(function() {
        temp = $(this).find('.entry-content').css('height').split('px')[0]
        if(temp>height) {
          height = temp
        }
      })
      $('#product_table .product:visible').find('.entry-content').css('height', height+'px')
    })


{% endif %}

{% if resultdata['template'] != 'foryou.html' and resultdata['template'] != 'foryouold.html' %}

   

		$.ajax({

      {% if session['countryCode'] != 'IN' %}
			url: '{{ config.PRODUCT_STORAGE_URL }}home_page_international.json?t='+ new Date().getTime(),
      {% else %}
      url: '{{ config.PRODUCT_STORAGE_URL }}home_page.json?t='+ new Date().getTime(),
      {% endif %}
			type: 'GET',
			success: function(d) {
				var products = ''
				$.each(d.data, function(i, item) {
						products+='<div class="col-lg-3 col-md-6"><div class="plan-inner"><div class="entry-title"><img src="'+item.product_home_image+'" class="img-fluid"><div class="product-name">'+item.product_name+'</div></div><div class="entry-content"><ul>'
				        	$.each(item.product_home_desc.split('|'), function(i, val) {
				          		products+='<li>'+val+'</li>'
				        	});

        				products+='</ul><div class="price-value">';
            {% if session['countryCode'] == 'IN' %}
						if(item.original_price!=item.offer_price) {
							products+='<div class="product-price-original">₹'+item.original_price+'</div>';
						}
						products+='<div class="product-price-offers"><span class="currency">₹</span>'+item.offer_price+' </div></div><a href="product/'+item.product_name_slug+'"><button class="knowmore-button">Know more</button></a></div></div></div>'
            {% else %}
            if(item.original_price_usd!=item.offer_price_usd) {
              products+='<div class="product-price-original">US$'+item.original_price_usd+'</div>';
            }
            products+='<div class="product-price-offers"><span class="currency">US$</span>'+item.offer_price_usd+' </div></div><a href="product/'+item.product_name_slug+'"><button class="knowmore-button">Know more</button></a></div></div></div>'
            {% endif %}

				});
				$("#product-loading").hide()
				$("#product_table").html(products);
			},
			error: function() {
					
			}
		});

		$.ajax({
      {% if session['countryCode'] != 'IN' %}
	      url: '{{ config.PRODUCT_STORAGE_URL }}footerdata_international.json?t='+ new Date().getTime(),
        {% else %}
      url: '{{ config.PRODUCT_STORAGE_URL }}footerdata.json?t='+ new Date().getTime(),
      {% endif %}
	      type: 'GET',
	      success: function(d) {
	        var product_list = ''
	        $.each(d.data, function(i, item) {
	          if(i<=9) {
	            product_list+='<li><a href="/product/'+item.product_name_slug+'" alt="'+item.product_name+'">'+item.product_name+'</a></li>'
	          }
	        });
	        $(".product_list_ul").html(product_list);
	      },
	      error: function() {

	      }
	    });
	    {% endif %}

     {% if ((resultdata['template'] == 'product.html') or (resultdata['template'] == 'product_subs.html')) %}

     {% if couponValue != '' %}
      $('#coupon-input').css('display','inline-flex');
      $("#coupon-text").hide();
      handleCoupon(CCode, "auto_apply_coupon")
     {%endif%}

     {% if error['coupon']|string() !='' %}
     $('#coupon-input').css('display','inline-flex');
      $("#coupon-text").hide();
       handleCoupon(CCode)
      {%endif%}

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
      console.log('{{ productData }}')
      console.log("testet")
      {% if productData['timer']|length >0 %}
      var Ptimer = "";
      tomt  = JSON.parse({{ resultdata['timerData']|tojson }});
      //console.log(tomt)
      $.each( tomt, function(i, item) {
            var today       = new Date();
            var start_date  = new Date(item.start_date.split('+')[0]+'+05:30')
            var expiry_date = new Date(item.expiry_date.split('+')[0]+'+05:30')
            var start_time  = parseInt((today - start_date) / (1000));
            var end_time  = parseInt((expiry_date - today) / (1000));
            console.log(start_time)
            console.log(end_time)
            if(start_time>0 && end_time>0) {
              clock.setTime(end_time);
              clock.setCountdown(true);
              clock.start();
              if(end_time<=86400) {
                $('.days, .days + .flip, .days + .flip + .flip').hide()
              }
              $('.counter-timer').show()
              $('.step-coachlive-hurry').html(item.discount_tag)
            }
          });

       {% endif %}
      {% endif %}
	});
	var device = new MobileDetect(window.navigator.userAgent);
	if (device.mobile() && device.os() == 'AndroidOS') {
				 /*$('.appinstall').css({'display':'block'});
				 $('.appinstall i').click(function(){
							$('.appinstall').slideUp(1000);
				 });*/
	}
</script>
<script>
    $(document).ready(function() {
 {% if (resultdata['template'] == 'product_subs.html') %}
  function createItem(x) {
  localStorage.setItem("is_subs", x);
}

function readValue() {
  var x = localStorage.getItem("is_subs");
  console.log(x)
  if(x !== null)
  {
    $("#is_subscription").val(x);
    createItem(x);
  } else {
    $("#is_subscription").val('0');
    createItem('0');
  }
  
  if($("#is_subscription").val() == 0)
  {
    $("#recommendedproduct").prop("checked", true);
    $("#paymethod").hide();
  } else {
    $("#notrecommendedproduct").prop("checked", true);
    $("#paymethod").show();
  }
}

      $("input[type=radio].card-input-element").change(function(){
           //$("#is_subscription").val($(this).val());
           $(this).prop('checked', true);
           createItem($(this).val());
           readValue();
      });
readValue();
{% endif %}
        $('html, body').hide();
        if (window.location.hash) {
            setTimeout(function() {
                $('html, body').scrollTop(0).show();
                $('html, body').animate({
                    scrollTop: $(window.location.hash).offset().top
                    }, 1000)
            }, 0);
        }
        else {
            $('html, body').show();
        }

    });
</script>

<script type="text/javascript">  
	$(document).ready(function() {
		{% if resultdata['template'] == 'contact.html' %}
		
			$("#selContactFor").change(function() {
		      val = $(this).val();
		      if(val!="") {
		        $("#NotMyDiv").hide();
		        $("#FormDiv").show();
		        if(val!="Retail User") {
		          $("#NotMyDiv").show();
		          $(".NotMyDiv").hide();
		          val = val.replace("/","_");
		          $("#"+val+"Div").show();
		        }
		      }
		    });

		{% endif %}
	    $("#contactform").submit(function(e) {
	        e.preventDefault();
          var data = {
          	{% if resultdata['template'] == 'contact.html' %}
              contact_type: $("#selContactFor").val(),
              {% else %}
              contact_type: 'Corporate',
            {% endif %}
              name: $("#txtPerson").val(),
              contact_person: $("#txtName").val(),
              phone: $("#txtPhone").val(),
              email_id: $("#txtEmail").val(),
              message: $("#txtMessage").val()
          }
          $.ajax({
              url: "{{ config.API_URL }}send_enquiry",
              type: 'POST',
              dataType: 'json',
              data: data,
              success: function(d) {
                  window.location.href="{{ resultdata['pageType'] }}?txtEmail="+$("#txtEmail").val();
              },
              error: function() {
                  window.location.href="{{ resultdata['pageType'] }}";
              }
          });
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

  
</script>