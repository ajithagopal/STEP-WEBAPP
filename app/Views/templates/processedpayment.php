<!doctype html>
<html>
<head>
   <!-- Google Tag Manager -->
<script type="text/javascript">
   (function(w, d, s, l, i) {
         w[l] = w[l] || [];
         w[l].push({
               'gtm.start': new Date().getTime(),
               event: 'gtm.js'
         });
         var f = d.getElementsByTagName(s)[0],
               j = d.createElement(s),
               dl = l != 'dataLayer' ? '&l=' + l : '';
         j.async = true;
         j.src =
               '//www.googletagmanager.com/gtm.js?id=' + i + dl;
         f.parentNode.insertBefore(j, f);
   })(window, document, 'script', 'dataLayer', 'GTM-WC3S6GN');
</script>
<!-- End Google Tag Manager -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>STEP - Payment Status</title>
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
	<style type="text/css">

    body
    {
        background:#f2f2f2;
    }

    .payment
	{
		border:1px solid #f2f2f2;
        border-radius:20px;
        background:#fff;
      margin-bottom: 20px;
	}
   .payment_header
   {
	   background: #4caf50;
	   padding:20px;
       border-radius:20px 20px 0px 0px;
	   
   }
   
   .check
   {
	   margin:0px auto;
	   width:50px;
	   height:50px;
	   border-radius:100%;
	   background:#fff;
	   text-align:center;
   }
   
   .check i
   {
	   vertical-align:middle;
	   line-height:50px;
	   font-size:30px;
      color: #8bc34a;
   }

    .content 
    {
        text-align:center;
    }

    .content  h1
    {
        font-size:25px;
        padding-top:25px;
    }
   
	</style>
	
</head>

<body>
   <!-- Google Tag Manager (noscript) -->
<noscript>
<iframe src="//www.googletagmanager.com/ns.html?id=GTM-WC3S6GN" height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
   <div class="container">
   <div class="row">
      <div class="col-md-10 mx-auto mt-5">
         <center><img src="https://d266qgalneck7k.cloudfront.net/static/assets/images/STEP_logo.png"></center>
         <div class="payment">
            <div class="payment_header">
               <div class="check"><i class="fa fa-check" aria-hidden="true"></i></div>
            </div>
            <div class="content">
               <img src="<?=$pdata['product_new_icon']?>" class="rounded" height="100">
               <h1>Congratulations!</h1>
               <p>Your payment has been processed already!</p>
                <a class="btn btn-danger" href="https://english.steptest.in/?referrer=newpayment&loginId=<?=$user?>&pname=<?=$pdata['product_name']?>">Continue</a>
            </div>
         </div>
          <div class="alert alert-info"><p>If you have any questions or problems, don't hesitate to email us at <a href="mailto:info@steptest.in" target="_top">info@steptest.in</a> or whatsapp us at</p><a href="https://web.whatsapp.com/send?phone=+919789883344&amp;amp;text=I%20was%20on%20the%20STEP%20website%2C%20and%20I%20wish%20to%20know%20more" target="_blank" rel="noopener noreferrer"><img alt="whatsapp" src="https://english.steptest.in/assets/img/whatsapp-icon.png"> +91 9789883344</a> with your order details.</div>
      </div>
   </div>
</div>
</body>
</html>
