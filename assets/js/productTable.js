 function buyybtn(tab) {
    //alert(tab.trim());
    //return false;
    // body...
        var email = $("." + tab.trim()+ " .p-email").val();
        var productId = $("." + tab.trim()+ " .data-product-id").val();
        var countrycode = $("." + tab.trim() + " .country-code").val();
        //alert(countrycode);
        //return false;
        if (email == "") {
            swal("Oops!", "Mobile Number cannot be empty!", "error").then(function () { });
            return false;
        }

        var coupon = $("." + tab.trim() + " .txtCoupon").val().replace(/\s/g, '');

       //alert(email);
        $.ajax({
            url:   baseURL+'securepayment',
            type: 'post',
            data: {
                email: email,
                coupon: coupon,
                txtProductId: productId,
            },
            dataType: 'json',
           success: function (resp) {  
           //alert(JSON.stringify(resp));              
              if (resp.status === 'error') {
            swal("Oops!", resp.message, "error");
            $("." + tab.trim()+ " .p-email").focus();
        }  else {
         

                    var token = resp.token;
                    var nuser = resp.new_user;
                    var txtEmailPhone = email;
                    var p_product_id = productId;
                    var is_subscription = "0";
                    startPaymentserver(token, txtEmailPhone, coupon, is_subscription, p_product_id);
                    
                }
            },
            error: function (jqXhr, textStatus, errorThrown) {
                swal("Oops!", "An error occurred. Please try again.", "error");
                console.log(errorThrown);
            },
            beforeSend: function () {
                $(".Lmodal").show();
            },
            complete: function () {
                $(".Lmodal").hide();
            }
        });
        console.log('Product ID:', productId);

        return false;
  }

    function startPaymentserver(token, username, coupon, is_subscription=0, pid) {
        
        /*var countrycode = $("." + tab.trim() + " .country-code").val();
        //var countryCode = $("#country-code").val();
        alert(countryCode);
        console.log(countryCode);*/
       /* if (countryCode=='IN'){
            payment_type = 'paytm';
        }else{
            payment_type = 'stripe';
        }*/
        payment_type = 'paytm';
        console.log('payment_type:', payment_type);
       // alert();
        /*alert(token);
        alert(username);
        alert(coupon);*/
        var postForm = { //Fetch form data
            'product_id'     : pid,
            'is_mobile': "no",
            'coupon': coupon,
            'is_subscription': is_subscription,
            'payment_type' : payment_type,
            'is_gst' : 'Y',
            'payment_method' : 'DC'
        };

        $.ajax({ //Process the form using $.ajax()
            type : 'POST', //Method type
            url : API_URL+'v1/startwebpayment', //Your form processing file URL
            data : postForm, //Forms name
            dataType : 'json',
            headers: {"access-token": token},
            success : function(resp) {
                if(resp.status=='success'){
                    var dataT = resp.data
                    //alert(dataT);
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
                          'product_id': $(".data-product-id").val(),
                          'product_name': $(".data-title").text(),
                          'coupon_code': $(".txtCoupon").val().replace(/\s/g, ''),
                          'actual_product_value': $("data-price").text().replace('₹',''),
                          'final_product_value': amount,
                          'admitad_uid': 'step',
                          'email': email,
                          'phone': phone,
                          'status': 'popup_close'
                      });
                     $('#sorryModal').modal('show');
                    }
                 }
            }
        };

        if (window.Paytm && window.Paytm.CheckoutJS) {
            // initialze configuration using init method
            window.Paytm.CheckoutJS.init(config).then(function onSuccess() {
                console.log('Before JS Checkout invoke');
                //alert($(".data-product-id").val());
                //alert(uid);

                 setTimeout(function(){
                /*Purchase start event */
                 window.dataLayer = window.dataLayer || [];
                        window.dataLayer.push({
                            'event': "purchase_started",
                            'user_id': ""+uid+"",
                            'product_id': $(".data-product-id").val(),
                            'product_name': $(".data-title").text(),
                            'coupon_code': $(".txtCoupon").val().replace(/\s/g, ''),
                            'actual_product_value': $("data-price").text().replace('₹',''),
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
        function couponbtn(tab){

            var email = $("." + tab.trim()+ " .p-email").val();
            var txtCoupon = $("." + tab.trim() + " .txtCoupon").val().replace(/\s/g, '');

            /*var email = $("#p-email").val()
            var txtCoupon = $("#txtCoupon").val().replace(/\s/g, '');*/
             //alert(tab);
            //return false;
            if(email == "")
            {
                swal({
                    title: 'Mobile Number cannot be empty!',
                    type: 'error',
                }).then(function () {
                    $("." + tab.trim()+ " .p-email").focus();
                })
                
                return false;
            }

            if(txtCoupon == "")
            {
                swal({
                    title: 'Coupon code cannot be empty!',
                    type: 'error',
                }).then(function () {
                    $("." + tab.trim() + " .txtCoupon").focus();
                })
                
                return false;
            }

            handleCoupon(tab,"IN")

        };


        function handleCoupon(tab,country="IN", eventname="apply_coupon") {
            //alert(tab);
            //return false;
          //var coupon    = $("#txtCoupon").val().replace(/\s/g, '');
          var coupon = $("." + tab.trim() + " .txtCoupon").val().replace(/\s/g, '');

          console.log(coupon)
          //var productId = $("#data-product-id").val();
          var productId = $("." + tab.trim()+ " .data-product-id").val();
          console.log(productId)

          var apiUrl = API_URL+'v1/coupon/'+coupon+'/'+productId;
          

          $.ajax({
            type:'get',
            url:apiUrl,
            headers: {'platform':'w1'},
            success:function(res) {
              if(res.data.result!='valid') {
                swal("Oops!", res.message, "error");
                return false;
              } else {



                if(country == "IN")
          {
                //percentage change in amount
                var OrginalProductPrice = parseFloat($("." + tab.trim() + " .data-offerprice").text().replace('₹', ''));
                /*alert(OrginalProductPrice);
                return false;*/
                var percentageChange=(OrginalProductPrice-res.data.discounted_price)/OrginalProductPrice*100.0;
                var AmountSaved = OrginalProductPrice-res.data.discounted_price;
                //alert('₹' +Math.round(res.data.discounted_price));
                swal("Congratulations!", 'You just saved ₹'+AmountSaved, "success");

                $("." + tab.trim() + " .data-offerprice").html('₹' +Math.round( res.data.discounted_price))
          }
                  window.dataLayer = window.dataLayer || [];
                  window.dataLayer.push({
                    'event': eventname,
                    'product_id': productId,
                    'product_name': $("." + tab.trim() + " .data-title").text(),
                    'coupon_code': coupon,
                    'actual_product_value': $("." + tab.trim() + " .data-offerprice").val(),
                    'final_product_value': res.data.discounted_price
                  });
              }
              //$("#message_box_coupon").show();
            },
            error:function(res) {
              $("#loading_coupon").hide(); //gif
              $(".get-free-button").show();
              $(".prod-off-price").html($("." + tab.trim() + " .data-offerprice").val());
              if(res.responseJSON) {
                if(!res.responseJSON.status) {
                  $("#message_box_coupon").html('<div class="alert alert-danger">'+JSON.stringify(res.responseJSON.message)+'</div>');
                }
                else if(res.responseJSON.status!='success') {
                          $("#message_box_coupon").html('<div class="alert alert-danger">'+res.responseJSON.message+'</div>');
                } else {
                  $("#message_box_coupon").html('<div class="alert alert-danger">Oops, something went wrong. Please try again</div>');
                }
              } else {
                $("#message_box_coupon").html('<div class="alert alert-danger">Oops, something went wrong. Please try again</div>');
              }
              $("#message_box_coupon").show();
              $("." + tab.trim() + " .txtCoupon").val('')
            }
          });
        }

 $(document).ready(function() {



    var nowScrollTop = $(this).scrollTop();
    var nowScrollTopLimit = 100

    if(nowScrollTop > nowScrollTopLimit) {
        $(".top-menu").addClass("active")
    } else {
        $(".top-menu").removeClass("active")
    }

    $(window).scroll(function(){
        var nowScrollTop = $(this).scrollTop();
        if(nowScrollTop > nowScrollTopLimit) {
            $(".top-menu").addClass("active")
        } else {
            $(".top-menu").removeClass("active")
        }
    });

    $(".ppp-top-section-bg").addClass("ppp-top-section-bg-active")

    var owl = $('.owl-carousel');
    owl.owlCarousel({
        items:5,
        loop:true,
        margin:10,
        autoplay:true,
        autoplayTimeout:2000,
        autoplayHoverPause:true,
        responsiveClass:true,
        responsive:{
            0:{
                items:2,
                nav:true
            },
            600:{
                items:3,
                nav:false
            },
            1000:{
                items:5,
                nav:true,
                loop:false
            }
        }
    });

    $(".scrollToContactSection").click(function(e) {
        e.preventDefault()
        var top = $("#contact-section").offset().top - 70

        $('html').animate(
            {
              scrollTop: top,
            },
            800 //speed
        );

    })
})

function gotoURL(url) {
    window.location.href = url
}

$(document).ready(function(){
    var formInputs = $('input[type="email"],input[type="text"]');
    formInputs.focus(function() {
       $(this).parent().children('p.formLabel').addClass('formTop');
    });
    $('p.formLabel').click(function(){
         $(this).parent().children('.form-style').focus();
    });
});    


   
document.addEventListener('DOMContentLoaded', function () {
    const openModalButtons = document.querySelectorAll('.bottom-box');
    const modal = document.getElementById('open');

    openModalButtons.forEach((button) => {
        button.addEventListener('click', function () {
            const title = this.getAttribute('data-title');
            const price = this.getAttribute('data-price');
            const offerPrice = this.getAttribute('data-offerprice');
            const savedPrice = this.getAttribute('saved-price');
            const productId = this.getAttribute('data-product-id');
            const countryCode = this.getAttribute('country-code');

            //console.log('Product ID:', productId);
            //console.log('Product ID:', 'data-product-id');
           // die();

            document.getElementById('data-title').textContent = title;
            // document.getElementById('data-originalprice').textContent = price;
            document.getElementById('data-offerprice').textContent = offerPrice;
            document.getElementById('saved-price').textContent = savedPrice;
            document.getElementById('data-product-id').value = productId;
            document.getElementById('country-code').value = countryCode;

            modal.style.display = 'block';
        });
    });

 

    const closeButton = modal.querySelector('#close');
    closeButton.addEventListener('click', function () {
        modal.style.display = 'none';
    });
    window.addEventListener('click', function (event) {
        if (event.target === modal) {
            modal.style.display = 'none';
        }
    });
        //pay_type  = 'stripe'

  

   
});




function toggleFlagDropdown() {
    var dropdown = document.querySelector('.dropdown-content');
    dropdown.classList.toggle('show');
}
 
function selectFlag(countryCode, flagUrl) {

    var flagImage = document.querySelector('.flag-image');
    var flagAlt = document.querySelector('.flag-alt');
    flagImage.src = flagUrl;
    flagAlt.textContent = countryCode;
    flagAlt.title = (countryCode === 'In') ? 'India' : 'International'
 
    var dropdown = document.querySelector('.dropdown-content');
    dropdown.classList.remove('show');
}
 
document.addEventListener('DOMContentLoaded', function () {
    var flagButton = document.querySelector('.dropbtn');
    flagButton.addEventListener('click', toggleFlagDropdown);
});
 


//contact form 

$("#btnsubmit").click(function(e) {
    var name = $('#txtName').val();
    if(name == '') { $('#error_name').text(' Name is required').fadeIn('slow').delay(7000).hide(1);$('#txtName').focus();  return false;  }

    var txtEmail = $('#txtEmail').val();

    if(txtEmail == '') { $('#error_email').text(' Email is required').fadeIn('slow').delay(7000).hide(1);$('#txtEmail').focus();  return false;  }
   var emailReg = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
     if(!txtEmail.match(emailReg)){ $('#error_email').text('Invalid Email format').fadeIn('slow').delay(7000).hide(1);$('#txtEmail').focus(); return false; }

    var txtPhone = $('#txtPhone').val();
    if(txtPhone == '') { $('#error_phone').text(' Phone Number is required').fadeIn('slow').delay(7000).hide(1);$('#txtPhone').focus();  return false;  }
    var NumberRegex = /^[0-9]*$/;
      if(txtPhone.length < 10  || txtPhone.length > 12 ){$('#error_phone').text('Invalid phone number format').fadeIn('slow').delay(7000).hide(1);$('#txtPhone').focus();  return false;  } 
      if(!NumberRegex.test(txtPhone)){  $('#error_phone').text('Invalid phone number format').fadeIn('slow').delay(7000).hide(1);$('#txtPhone').focus(); return false; }

    e.preventDefault()
    var formData = {
        contact_type: $("#selContactFor").val(),
        name: $("#txtPerson").val(),
        contact_person: $("#txtName").val(),
        phone: $("#txtPhone").val(),
        email_id: $("#txtEmail").val(),
        message: $("#txtMessage").val()
    };
    
    var serializedData = $.param(formData);

    $.ajax({
        url: API_URL+'/send_enquiry',
        type: "POST",
        dataType: "json",
        data: serializedData,
        success: function(response) {
            if (response.status === "success") {
                console.log("Form submitted successfully");
                $(".contact-section-form-container").addClass("hideNow")
                $(".contact-section-form-status").addClass("showNow")
                setTimeout(function(){// wait for 5 secs(2)
           location.reload(); // then reload the page.(3)
      }, 7000); 
            } else {
                console.log("Form submission failed");
                $(".contact-section-form-container").addClass("hideNow")
                $(".contact-section-form-status").addClass("submit-error")
                setTimeout(function(){// wait for 5 secs(2)
           location.reload(); // then reload the page.(3)
      }, 7000); 
            }
        },
        error: function() {
            console.log("An error occurred while submitting the form");
        }
    });
});

$("#btnsubmit_1").click(function(e) {
    var name = $('#txtName_1').val();
    if(name == '') { $('#error_name_1').text(' Name is required').fadeIn('slow').delay(7000).hide(1);$('#txtName_1').focus();  return false;  }

    var txtEmail = $('#txtEmail_1').val();

    if(txtEmail == '') { $('#error_email_1').text(' Email is required').fadeIn('slow').delay(7000).hide(1);$('#txtEmail_1').focus();  return false;  }
   var emailReg = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
     if(!txtEmail.match(emailReg)){ $('#error_email_1').text('Invalid Email format').fadeIn('slow').delay(7000).hide(1);$('#txtEmail_1').focus(); return false; }

    var txtPhone1 = $('#txtPhone_1').val();
    if(txtPhone1 == '') { $('#error_phone_1').text(' Phone Number is required').fadeIn('slow').delay(7000).hide(1);$('#txtPhone_1').focus();  return false;  }
    var NumberRegex = /^[0-9]*$/;
      if(txtPhone1.length < 10  || txtPhone1.length > 12){$('#error_phone_1').text('Invalid phone number format').fadeIn('slow').delay(7000).hide(1);$('#txtPhone_1').focus();  return false;  } 
      if(!NumberRegex.test(txtPhone1)){  $('#error_phone_1').text('Invalid phone number format').fadeIn('slow').delay(7000).hide(1);$('#txtPhone_1').focus(); return false; }

    e.preventDefault()
    var formData = {
        contact_type: $("#selContactFor").val(),
        name: $("#txtPerson_1").val(),
        contact_person: $("#txtName_1").val(),
        phone: $("#txtPhone_1").val(),
        email_id: $("#txtEmail_1").val(),
        message: $("#txtMessage_1").val()
    };
    
    var serializedData = $.param(formData);

    $.ajax({
        url: API_URL+'/send_enquiry',
        type: "POST",
        dataType: "json",
        data: serializedData,
        success: function(response) {
            if (response.status === "success") {
                console.log("Form submitted successfully");
                $(".contact-section-form-container").addClass("hideNow")
                $(".contact-section-form-status").addClass("showNow")
                setTimeout(function(){// wait for 5 secs(2)
                       location.reload(); // then reload the page.(3)
                  }, 5000); 

            } else {
                console.log("Form submission failed");
                $(".contact-section-form-container").addClass("hideNow")
                $(".contact-section-form-status").addClass("submit-error")
                setTimeout(function(){// wait for 5 secs(2)
           location.reload(); // then reload the page.(3)
      }, 5000); 
            }
        },
        error: function() {
            console.log("An error occurred while submitting the form");
        }
    });
});

// const btnSubmit = document.getElementById('btnsubmit');
    
//     btnSubmit.addEventListener('click', function() {
//         location.reload();
//     });


