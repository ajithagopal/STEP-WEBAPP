<!DOCTYPE html>
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
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title><?= $resultdata['siteTitle'] ?></title>
<meta name="description" content="<?= $resultdata['siteDesc']; ?>">
<meta name="viewport" content="width=device-width, initial-scale = 1.0, maximum-scale=1.0, user-scalable=no" />
<meta name="title" content="<?= $resultdata['siteTitle'] ?>">
<meta name="keywords" content="<?= $resultdata['siteKeywords'] ?>">
<!-- SEO Open Graph -->
<meta property="og:type" content="<?= $resultdata['sitetype'] ?>">
<meta property="og:title" content="<?= $resultdata['siteTitle'] ?>">
<meta property="og:description" content="<?= $resultdata['siteDesc'] ?>">
<meta property="og:url" content="<?= current_url(); ?>">
<meta property="og:site_name" content="STEP - The Hindu">
<meta property="article:publisher" content="https://www.facebook.com/theSTEPtest/">
<meta property="article:author" content="https://www.facebook.com/theSTEPtest/">
<meta property="og:image" content="<?= $resultdata['siteMetaimg'] ?>">
<meta property="og:image:width" content="869">
<meta property="og:image:height" content="466">

<meta property="product:price:amount" content="<?= $productData['offer_price'] ?>">
<meta property="product:price:currency" content="&#8377;">

<meta name="twitter:card" content="summary">
<meta name="twitter:title" content="<?= $resultdata['siteTitle'] ?>">
<meta name="twitter:description" content="<?= $resultdata['siteDesc'] ?>">
<meta name="twitter:image:src" content="<?= $resultdata['siteMetaimg'] ?>">
<meta name="twitter:site" content="@The_Hindu_STEP">
<!-- SEO open graph ends -->
<meta name="google-signin-client_id" content="785754638109-mqkqlfm75n28ckj4ilneh26f1p7sss3h.apps.googleusercontent.com">
<meta name="facebook-domain-verification" content="k22hm1hx40jur48zwaj696v7c9f2cn" />
<link rel="dns-prefetch" href="https://d266qgalneck7k.cloudfront.net">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<!-- Favicon-->
<link rel="shortcut icon" href="https://storage.googleapis.com/assets.thehindustep.in/img/favicon.ico">
<!-- Google fonts -->
<link rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'"  href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100..900&family=Open+Sans:wght@300..800&display=swap">
<!-- Bootstrap CSS-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha256-Md8eaeo67OiouuXAi8t/Xpd8t2+IaJezATVTWbZqSOw=" crossorigin="anonymous" />
<!-- theme stylesheet-->
<link rel="stylesheet" href="<?php echo config('Siteconfig')->CLOUD_URL;?>assets/css/style.css?v=5.5">
<link rel="preload" as="image" href="<?php echo $productData['product_bg_image'];?>" />

<!-- <link rel="stylesheet" href="<?php echo base_url();?>/static/assets/css/style.css"> -->
<script defer src="<?php echo config('Siteconfig')->CLOUD_URL;?>assets/js/crossDomainStorage.js?v=3"></script>
<!-- Global site tag (gtag.js) - AdWords: 859614801 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-859614801"></script>
<script defer>
			window.dataLayer = window.dataLayer || [];
			function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'AW-859614801');
		</script>
</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript>
<iframe src="//www.googletagmanager.com/ns.html?id=GTM-WC3S6GN" height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>

<!-- header -->
<div class="header">
	<header class="header">
  <nav class="navbar navbar-expand-lg fixed-top"> <a href="/" class="scrollTo"> <img src="<?php echo config('Siteconfig')->CLOUD_URL;?>assets/images/STEP_logo.png" alt="logo" class="img-fluid img-logo"> </a>
      <button type="button" data-toggle="collapse" data-target="#navbarcollapse" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right collapsed">
    <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
  </button>
   
    <div id="navbarcollapse" class="collapse navbar-collapse">
      <ul class="navbar-nav ml-auto">

<!--         <li class="nav-item dropdown">
          
          <a class="nav-link link dropdown-toggle text-black" href="" data-toggle="dropdown-submenu" aria-expanded="false">IN <img src="https://storage.googleapis.com/assets.thehindustep.in/flags/in.svg" width="18"></a>
          
          <div class="dropdown-menu"> 
        <a class="text-black dropdown-item" href="/changecountry?cc=IN">India <img src="https://storage.googleapis.com/assets.thehindustep.in/flags/in.svg" class="cflag" width="18"></a>
        <a class="text-black dropdown-item" href="/changecountry?cc=US">International <img src="https://storage.googleapis.com/assets.thehindustep.in/flags/worldwide.svg" class="cflag" width="18"></a>
       </div>
        </li> -->

    <li class="nav-item dropdown"> <a class="nav-link link dropdown-toggle text-black" href="" data-toggle="dropdown-submenu" aria-expanded="false">ENGLISH COURSES</a>
          <div class="dropdown-menu"> 
           
        <a class="text-black dropdown-item" href="/steplearn">General Communication</a>
        <a class="text-black dropdown-item" href="/stepforworkingprofessionals">Working Professionals</a>
        <a class="text-black dropdown-item" href="/stepforcompexams">Exam Preparation</a>
        <a class="text-black dropdown-item" href="/stepforielts">IELTS</a>
        
       </div>
        </li>
        <li class="nav-item dropdown"> <a class="nav-link link dropdown-toggle text-black" href="" data-toggle="dropdown-submenu" aria-expanded="false">FOR ORGANISATIONS</a>
          <ul class="dropdown-menu current-item"> 
       <li><a class="text-black dropdown-item" href="<?php echo base_url();?>forcorporate">FOR CORPORATES</a></li>
        <li><a class="text-black dropdown-item" href="<?php echo base_url();?>forinstitution">FOR COLLEGES</a></li>
        <li><a class="text-black dropdown-item" href="<?php echo base_url();?>kids">FOR Kids</a></li>
       </ul>
        </li>
        <li class="nav-item signup-padding bigscreen_welcome_menu">
          <a style="display: none;" class="btnSignInUrl" href="https://english.steptest.in">
            <button class="green-signin-button btnSignIn mr-3">Sign in</button>
          </a>
           <a class="btnSignUpUrl" onclick="activateLink(); return false;" href="https://english.steptest.in/signup">
            <button class="orange-signup-button btnSignUp">Log In</button>
          </a>
        </li>
        <li class="nav-item welcome-padding bigscreen_welcome_menu clsUserName"></li>
        <li class="nav-item contact-padding">
          <span class="tollfree">
            <a href="https://web.whatsapp.com/send?phone=+919789883344&text=Hello%2C%20I%27m%20Interested%20in%20buying%20this%20course" target="_blank"><i class="fa fa-whatsapp"></i> +91 9789883344</a><br>
            <a href="mailto:info@steptest.in"><i class="fa fa-envelope-o"></i> info@steptest.in</a></span>
        </li>
      </ul>      
    </div>
    <ul class="mobile_welcome_menu">
      <li class="clsUserName"></li>
      <li class="dynamic_button">
        <a style="display: none;" class="btnSignInUrl" href="https://english.steptest.in">
          <button class="green-signin-button btnSignIn">Sign in</button>
        </a>
        <a class="btnSignUpUrl" onclick="activateLink(); return false;" href="https://english.steptest.in/signup">
          <button class="orange-signup-button btnSignUp">Log In</button>
        </a>
      </li>
    </ul>

  </nav>
</header>