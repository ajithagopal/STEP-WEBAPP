$(document).ready(function() {

  window.addEventListener('load', function() {
    var ga = window[window['GoogleAnalyticsObject']];
    if (ga && ga.getAll) {
      var linkerParam = ga.getAll()[0].get('linkerParam');
      $("#txtLinkerParam").val(linkerParam);
    }
  });

  $(".step2").hide();
  $(".step1").hide();
  $(".stepcentre").hide();
  $("#loading").hide();
  $("#message_box").hide();
  $("#message_box_coupon").hide();
  $("#loading_coupon").hide();
  $("#not_available").hide();
  $(".back-button").hide();
  $(".byclick_modal").hide();
$(".btnStepNew").click(function() {
    $(".step2").hide();
    $(".stepcentre").hide();
    $(".step-1").hide();
	$(".step1").show();
	$("#login_back").hide();
	$(".oldUser").hide();
	$(".sendNewPin").show();
	$(".byclick_modal").hide();
	$("#login_back-1").show();
  });
	$(".btnStepOld").click(function() {
    $(".step1").show();
    $(".stepcentre").hide();
    $(".step-1").hide();
	$(".step2").hide();
	$("#login_back").hide();
	$(".modal-social-icons").show();
	$(".sendNewPin").hide();
	$(".oldUser").show();
	$(".byclick_modal").hide();
	$("#login_back-1").show();
  });
  $('.login-modal .input-field input').click(function(){
    $('.modal-next-btn').removeClass('grey');
  });

  $('.get-free-button').click(function() {
    $(".abcRioButtonIcon").html('<i class="fa fa-google-plus modal-icons"></i>');
  });
  $('.modal_login').click(function() {
    $(".abcRioButtonIcon").html('<i class="fa fa-google-plus modal-icons"></i>');
  });

  $(".btnStepOne").click(function() {
	$("#login_back-1").hide();
	$("#login_back").show();
    handleUserName($("#txtUserName").val());
    return false;
  });

  $("#txtUserName").keydown(function(event) {
    if (event.keyCode === 13) {
      event.preventDefault();
      handleUserName($("#txtUserName").val());
    }
  });

  $(".btnStepTwo").click(function() {
    handlePin($("#txpPin").val());
    return false;
  });

  $("#txpPin").keydown(function(event) {
    if (event.keyCode === 13) {
      event.preventDefault();
      handlePin($("#txpPin").val());
    }
  });

  $("#login_back").click(function() {
    $(".step2").hide();
    $(".stepcentre").hide();
    $(".step1").show();
	$("#login_back-1").show();
	$("#login_back").hide();
	$("#message_box").hide();
  });
	 $("#login_back-1").click(function() {
    $(".step2").hide();
    $(".stepcentre").hide();
    $(".step1").hide();
    $(".step-1").show();
    $("#login_back-1").hide();
    $("#message_box").hide();
  });
  $(".btnForgotPin").click(function() {
    if($("#txtIsStepCentre").val()=='true') {
      $(".step2").hide();
      $(".stepcentre").show();
    } else {
      sendPin();
    }
    return false;
  });
  $(".sendNewPin").click(function() {
	  handleUserName($("#txtUserName").val(), 'new_user');
      return false;
  });
  $(".btnStepCentre").click(function() {
    handleStepCentre();
    return false;
  });

  $("#txtCentreCode").keydown(function(event) {
    if (event.keyCode === 13) {
      event.preventDefault();
      handleStepCentre();
    }
  });

  $(".g-signin2").click(function() {
    $("#txtIsGoogle").val('yes');
  });
});
function onSignIn(googleUser) {
  if($("#txtIsGoogle").val()!='') {
    var profile = googleUser.getBasicProfile();
    var data = {
      login_id:profile.getEmail(),
      user_token:profile.getId(),
      user_name:profile.getName(),
      photo_url:profile.getImageUrl(),
      social_domain:'google'
    }
    handleServerRequest(data);
  }
}
function handleUserName(username, user_type='') {
  var stepTwo     = false;
  var stepCentre  = false;
  var login_id    = username.replace(/\s/g, '');
  var int_reg     = /^\d+$/;
  var email_reg   = /^[_a-zA-Z0-9-]+(\.[_a-zA-Z0-9-]+)*@[a-zA-Z0-9-]+(\.[a-zA-Z0-9-]+)*(\.[a-zA-Z]{2,4})$/;
  $("#message_box").hide();
  if(login_id==='') {
    $("#message_box").html('<div class="alert alert-danger">Please enter email</div>');
    $("#message_box").show();
  } else if(int_reg.test(login_id)) {
    if(login_id.length===10 || login_id.length===12 || login_id.length===16) {
      if(login_id.length===12 && !validateAadharNumber(login_id)) {
        $("#message_box").html('<div class="alert alert-danger">Please enter valid aadhaar number</div>');
        $("#message_box").show();
      } else if(login_id.length === 10 && login_id.charAt(0)<6 && login_id.charAt(0)!=1) {        
        $("#message_box").html('<div class="alert alert-danger">That looks like an invalid Phone Number, please try again</div>');
        $("#message_box").show();
      } else {
        stepTwo = true;
        stepCentre = (login_id.length!==10 || login_id.charAt(0)===1)?true:false
      }
    } else {
      $("#message_box").html('<div class="alert alert-danger">Please enter 10 digit mobile number</div>');
      $("#message_box").show();
    }
  } else if(!email_reg.test(login_id)) {
    $("#message_box").html('<div class="alert alert-danger">That looks like an invalid email ID, please try again</div>');
    $("#message_box").show();
  } else {
    stepTwo = true;
  }
  if(stepTwo==true) {
    if(user_type=='new_user') {
	  sendPin();
	  $(".forgototp").hide();
	  $("#login_back-1").hide();
	  $("#login_back").show();
	} 
    	$(".email_text").html(login_id);
    	$("#txtIsStepCentre").val(stepCentre);
    	$(".step1").hide();
    	$(".step2").show();
		$(".byclick_modal").show();
  }
}

function handlePin(pin) {
  $("#message_box").hide();
    if(pin==='') {
      $("#message_box").html('<div class="alert alert-danger">Please enter pin</div>');
      $("#message_box").show();
    } else {
      var data = {
        login_id:$("#txtUserName").val(),
        pin:pin,
        keepalive:true
      }
      handleServerRequest(data);
    }
}

function handleStepCentre() {
  $("#message_box").hide();
    if($("#txtCentreCode").val()==='') {
      $("#message_box").html('<div class="alert alert-danger">Please enter Centre Code</div>');
      $("#message_box").show();
    } else {
      sendPin()
    }
}

function sendPin() {
  $("#content").hide();
  $("#loading").show();
  $.ajax({
    type:'post',
    url:api_url+'v1/forgotpassword',
    data:{'user_name':$("#txtUserName").val(),'center_code':$("#txtCentreCode").val()},
    headers: {'platform':'w1'},
    success:function(res) {
      $("#loading").hide();
      $("#content").show();
      $("#message_box").html('<div class="alert alert-success">PIN sent to the registered email/mobile number.</div>');
      $("#message_box").show();
      $(".stepcentre").hide();
      $(".step2").show();
    },
    error:function(res) {
      $("#loading").hide();
      $("#content").show();
      if(res.responseJSON) {
        if(!res.responseJSON.status) {
          $("#message_box").html('<div class="alert alert-danger">'+JSON.stringify(res.responseJSON.message)+'</div>');
        }
        else if(res.responseJSON.status!='success') {
          $("#message_box").html('<div class="alert alert-danger">'+res.responseJSON.message+'</div>');
        } else {
          $("#message_box").html('<div class="alert alert-danger">Oops, something went wrong. Please try again</div>');
        }
      } else {
        $("#message_box").html('<div class="alert alert-danger">Oops, something went wrong. Please try again</div>');
      }
      $("#message_box").show();
    }
  });
}

function validateEmail(email) {
  var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  return re.test(email);
}
function handleServerRequest(data) {
  $("#content").hide();
  $("#loading").show();
  $.ajax({
    type:'post',
    url:api_url+'v1/login',
    data:data,
    headers: {'platform':'w1'},
    success:function(res) {
      var login_type  = ''
      var user_mail   = ''
      var user_phone  = ''
      var user_name = data.login_id
      if(validateEmail(user_name)) {
        login_type = (data.social_domain!==undefined)?data.social_domain:'email'
        user_mail = user_name
      } else if(user_name.match(/\d/g).length==user_name.length) {
        if(user_name.length==10) {
          login_type = 'phone'
          user_phone = user_name
        } else if(user_name.length==12) {
          login_type = 'aadhar_num'
        } else {
          login_type = 'stepathon_id'
        }
      }
      window.dataLayer = window.dataLayer || [];
      window.dataLayer.push({
        'event': 'web_signin',
        'user_id': res.data.user_id,
        'user_name': user_name,
        'user_mail': user_mail,
        'full_name': res.data.user_name,
        'user_phone': user_phone,
        'login_type': login_type,
        'signup': res.data.new_user
      });

      $.ajax({
        type:'get',
        url:api_url+'v1/products/'+$("#txtProductId").val(),
        headers: {'access-token':res.data.token,'platform':'w1'},
        success:function(d) {
          if(d.data!==undefined && d.data.product_id!==undefined) {
            setTimeout(function() {
              $("#loading").hide();
              $("#content").show();
              window.location.href = client_url+'sso?'+$("#txtLinkerParam").val()+'&'+$("#txtQueryString").val()+'&token='+res.data.token+'&referer=landing&return_path=/purchase%3fproductID%3d'+$("#txtProductId").val()+'%26coupon%3d'+$("#txtCoupon").val();
            },3000);
          } else {
            $("#loading").hide();
            $("#not_available").html('<div class="alert alert-danger">This product is not available for you. Please call us at 1800 3000 6063 for more details.</div>');
            $("#not_available").show();
          }
        },
        error:function(res) {
          $("#loading").hide();
          $("#content").show();
          $("#message_box").html('<div class="alert alert-danger">Oops, something went wrong. Please try again</div>');
          $("#message_box").show();
        }
      });
    },
    error:function(res) {
      $("#loading").hide();
      $("#content").show();
      if(res.responseJSON) {
        if(!res.responseJSON.status) {
          $("#message_box").html('<div class="alert alert-danger">'+JSON.stringify(res.responseJSON.message)+'</div>');
        }
        else if(res.responseJSON.status!='success') {
          $("#message_box").html('<div class="alert alert-danger">'+res.responseJSON.message+'</div>');
        } else {
          $("#message_box").html('<div class="alert alert-danger">Oops, something went wrong. Please try again</div>');
        }
      } else {
        $("#message_box").html('<div class="alert alert-danger">Oops, something went wrong. Please try again</div>');
      }
      $("#message_box").show();
    }
  });
}

function subscriptionPrice(sub_price, price, percent)
{
  /*var pert = Math.round(parseFloat(percent)*parseFloat(price));
  var sub_price_after_discount = Math.round(pert + parseFloat(price));
  $(".prod-off-price-subs").html(sub_price_after_discount);
  var fortypercent = 0.40*Math.floor(sub_price_after_discount);
  var twentypercent = 0.20*Math.floor(sub_price_after_discount);*/
  var newPrice = Math.round(parseFloat(sub_price)-parseFloat(price))
  $(".prod-off-price-subs").html(newPrice);
  var fortypercent = 0.40*Math.floor(newPrice);
  var twentypercent = 0.20*Math.floor(newPrice);
  $("#40amt").html(fortypercent);
  $("#20amt").html(twentypercent);
}

function addZeroes(num) {
   return num.toLocaleString("en", {useGrouping: false, minimumFractionDigits: 2})
}

function handleCoupon(country="IN", eventname="apply_coupon") {
  var coupon    = $("#txtCoupon").val().replace(/\s/g, '');
  if(coupon==='') {
    alert("Please enter coupon")
    return false
  }
  if(country == "IN")
  {
    var apiUrl = api_url+'v1/coupon/'+coupon+'/'+$("#txtProductId").val();
  } else {
    var apiUrl = api_url+'v1/couponintl/'+coupon+'/'+$("#txtProductId").val();
  }
  $(".get-free-button").hide();
  $("#loading_coupon").show();
  $.ajax({
    type:'get',
    url:apiUrl,
    headers: {'platform':'w1'},
    success:function(res) {
      $("#loading_coupon").hide();
      $(".get-free-button").show();
      if(res.data.result!='valid') {
        $(".prod-off-price").html($("#txtProductPrice").val());
        $("#message_box_coupon").html('<div class="alert alert-danger">'+res.message+'</div>');
      } else {
        if($("#txtProductId").val() == 608) {
          var originalPrice = $("#installPrice").val();
          subscriptionPrice(originalPrice,res.data.discount_price, 0.15);
        }


        if(country == "IN")
  {
        //percentage change in amount
        var OrginalProductPrice = $("#actual_price").val();
        var percentageChange=(OrginalProductPrice-res.data.discounted_price)/OrginalProductPrice*100.0;
        $(".ribbon, p.ribb").html(Math.floor(percentageChange)+"% off");
        var AmountSaved = OrginalProductPrice-res.data.discounted_price;
        
        $("#message_box_coupon").html('<div class="product-detail-success"><img src="https://d266qgalneck7k.cloudfront.net/static/assets/images/couponsuccess.png"> Congratulations! You just saved ₹'+AmountSaved+'</div>');
        $(".prod-off-price").html(res.data.discounted_price)
  } else {
    //percentage change in amount
        var OrginalProductPrice = $("#usd_price").val();
        var percentageChange=(OrginalProductPrice-res.data.discounted_price)/OrginalProductPrice*100.0;
        $(".ribbon, p.ribb").html(Math.floor(percentageChange)+"% off");
        var AmountSaved = OrginalProductPrice-res.data.discounted_price;
        
        $("#message_box_coupon").html('<div class="product-detail-success"><img src="https://d266qgalneck7k.cloudfront.net/static/assets/images/couponsuccess.png"> Congratulations! You just saved US$'+AmountSaved+'</div>');
        var ddprice = addZeroes(res.data.discounted_price)
        var resr = ddprice.split(".")
        $(".prod-off-price").html(resr[0]+"<sup>."+resr[1]+"</sup>")

  }

          window.dataLayer = window.dataLayer || [];
          window.dataLayer.push({
            'event': eventname,
            'product_id': $("#txtProductId").val(),
            'product_name': $(".product-title").text(),
            'coupon_code': coupon,
            'actual_product_value': $("#txtProductPrice").val(),
            'final_product_value': res.data.discounted_price
          });
      }
      $("#message_box_coupon").show();
    },
    error:function(res) {
      $("#loading_coupon").hide();
      $(".get-free-button").show();
      $(".prod-off-price").html($("#txtProductPrice").val());
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
      $("#txtCoupon").val('')
    }
  });
}
