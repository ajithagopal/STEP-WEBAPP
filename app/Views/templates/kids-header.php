<?php 
$uri = service('uri'); 
$slug = $uri->getSegment(1);
$meta_data = array(
        '' => array(
            'title' => 'Improve Your English with STEP by The Hindu',
            'description' => 'Enhance your English communication skills with STEP by The Hindu. Learn at your own pace with expert guidance and interactive courses.',
            'keywords' => 'English learning, Spoken English, The Hindu STEP, Online English course, English proficiency, Business English',
            'image' => 'assets/images/step-logo.png'
        ),
        'steplearn' => array(
            'title' => 'Master General Communication Skills – STEP by The Hindu',
            'description' => 'Build strong communication skills with STEP’s General Communication course. Perfect for students, professionals, and job seekers.',
            'keywords' => 'English speaking skills, Learn English online, Virtual learning, Improve spoken English, STEP by The Hindu',
            'image' => 'assets/images/general-communication.png'
        ),
        'general-communication-online' => array(
            'title' => 'Learn English Online – General Communication Course',
            'description' => 'Improve your English skills online with our General Communication course. Learn from anywhere with expert guidance.',
            'keywords' => 'Online English course, English speaking online, Improve communication, Spoken English class',
            'image' => 'assets/images/online-learning.png'
        ),
        'general-communication-crash-course' => array(
            'title' => 'Quick English Skills Boost – Crash Course',
            'description' => 'Short on time? Boost your English communication skills quickly with our crash course designed for rapid learning.',
            'keywords' => 'English crash course, Quick learning, Improve English fast, Short-term English course',
            'image' => 'assets/images/crash-course.png'
        ),
        'general-communication-unlimited' => array(
            'title' => 'Unlimited English Learning – Master Communication',
            'description' => 'Get unlimited access to expert-led English courses and take your communication skills to the next level at your own pace.',
            'keywords' => 'Unlimited English course, Full access English course, Learn anytime, Improve English skills, Fluency in English',
            'image' => 'assets/images/unlimited-access.png'
        ),
        'stepforworkingprofessionals' => array(
            'title' => 'English for Professionals – Improve Workplace Communication',
            'description' => 'Enhance your workplace communication skills with our tailored English courses for professionals and executives.',
            'keywords' => 'English for professionals, Business communication, Workplace English, Corporate English training',
            'image' => 'assets/images/business-learning.png'
        ),
        'working-professional-crash' => array(
            'title' => 'Quick English Skills for Professionals',
            'description' => 'A fast-track English crash course designed to improve communication skills for professionals in just a few days.',
            'keywords' => 'Business English crash course, Quick learning, Corporate English, English for workplace',
            'image' => 'assets/images/professional-crash.png'
        ),
        'working-professional-unlimited' => array(
            'title' => 'Unlimited Access – English for Professionals',
            'description' => 'Get unlimited access to expert-led business English courses and improve your workplace communication skills.',
            'keywords' => 'Unlimited English course, Business English, Workplace fluency, Corporate English training',
            'image' => 'assets/images/business-fluency.png'
        ),
        'stepforcompexams' => array(
            'title' => 'Excel in Competitive Exams – English Preparation',
            'description' => 'Prepare for competitive exams with expert-guided English training. Improve vocabulary, comprehension, and communication.',
            'keywords' => 'English for exams, Exam preparation, Test English skills, STEP English, Competitive exam English',
            'image' => 'assets/images/competitive-exam.png'
        ),
        'exam-preparation-crash-course' => array(
            'title' => 'Quick Exam Preparation – English Crash Course',
            'description' => 'Need a quick boost? This crash course helps you improve your English skills for competitive exams in no time.',
            'keywords' => 'Exam English crash course, Competitive test prep, English skills for exams, STEP course',
            'image' => 'assets/images/exam-crash.png'
        ),
        'exam-preparation-unlimited' => array(
            'title' => 'Unlimited English Training for Exams',
            'description' => 'Get unlimited access to comprehensive English courses designed to help you succeed in competitive exams.',
            'keywords' => 'Unlimited exam prep, English for tests, Competitive exam English, English fluency for exams',
            'image' => 'assets/images/unlimited-exam.png'
        ),
        'stepforielts' => array(
            'title' => 'Ace Your IELTS – Expert-Led Preparation',
            'description' => 'Boost your IELTS score with expert coaching and structured learning. Get ready for speaking, listening, reading, and writing.',
            'keywords' => 'IELTS course, IELTS online preparation, IELTS coaching, Improve IELTS score, The Hindu STEP IELTS',
            'image' => 'assets/images/ielts-prep.png'
        ),
        'forcorporate' => array(
            'title' => 'Corporate English Training – Improve Workplace Communication',
            'description' => 'Enhance your team\'s communication skills with our corporate English training programs. Customized for businesses.',
            'keywords' => 'Corporate English course, Business communication, Workplace training, STEP for companies',
            'image' => 'assets/images/corporate-training.png'
        ),
        'forinstitution' => array(
            'title' => 'English Training for Institutions',
            'description' => 'Tailored English training programs for institutions to improve student and faculty communication skills.',
            'keywords' => 'English for schools, College English training, Institutional learning, Communication training',
            'image' => 'assets/images/institutional-training.png'
        ),
        'signup' => array(
            'title' => 'Sign Up for STEP by The Hindu – Learn English Today',
            'description' => 'Sign up today and start your journey towards mastering English with expert guidance and interactive lessons.',
            'keywords' => 'English learning platform, Sign up for English course, Join STEP The Hindu, Online English training',
            'image' => 'assets/images/step-platform.png'
        ),
         'kids' => array(
            'title' => 'English Courses for Kids | STEP - The Hindu',
            'description' => '"Best online English courses personalised based on your kids strengths and weaknesses. Start for free today. English program for kids between the ages of 10 to 16',
            'keywords' => 'Live online english classes for kids, English for kids, Courses for Kids, Live Online Classes, Personalized programs for kids, Unlimited live classes for kids',
            'image' => 'assets/images/kids-landing.png'
        )
    );


    // Default meta details
    $default_meta = array(
        'title' => 'Welcome to STEP Platform | Learn English Online | Beginner to Advanced Courses | Online Certification | STEP - The Hindu',
        'description' => 'Explore STEP Platform for learning, jobs, and mentorship.',
        'keywords' => 'education, jobs, mentorship, english course, learn english',
        'image' => 'assets/images/default.png'
    );

    // Use meta details based on slug
    $meta = isset($meta_data[$slug]) ? $meta_data[$slug] : $default_meta;
    ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
   <meta name="title" content="<?php echo $meta['title']; ?>">
    <meta name="description" content="<?php echo $meta['description']; ?>">
    <meta name="keywords" content="<?php echo $meta['keywords']; ?>">
    <meta property="og:image" content="https://d266qgalneck7k.cloudfront.net/<?php echo $meta['image']; ?>">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> 

    <!-- Add fetchpriority for modern browsers -->
     <?php
        $uriPath = service('uri')->getPath();
        if($uriPath == "/") {
    ?>
    <link rel="preload" fetchpriority="high" as="image" href="https://d266qgalneck7k.cloudfront.net/assets/images/STEP-Banner-bg-mobile-2.webp">
<?php } ?>

    <link rel="icon" type="image/png" href="https://d266qgalneck7k.cloudfront.net/assets/images/STEP-Fav.png"> 
    <title><?php echo $meta['title']; ?> | STEP - The Hindu</title> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://d266qgalneck7k.cloudfront.net"> 
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
    <link rel="dns-prefetch" href="https://www.googletagmanager.com/" >
    <link  rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600&family=Roboto:wght@300;400;500&family=Rubik:wght@300;400;500&Nunito:wght@200;300;400;500;600&family=Rubik+Doodle+Shadow&display=swap" crossorigin="anonymous">
    <style type="text/css">
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */button,hr,input{overflow:visible}progress,sub,sup{vertical-align:baseline}[type=checkbox],[type=radio],legend{box-sizing:border-box;padding:0}html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}details,main{display:block}h1{font-size:2em;margin:.67em 0}hr{box-sizing:content-box;height:0}code,kbd,pre,samp{font-family:monospace,monospace;font-size:1em}a{background-color:transparent}abbr[title]{border-bottom:none;text-decoration:underline;text-decoration:underline dotted}b,strong{font-weight:bolder}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative}sub{bottom:-.25em}sup{top:-.5em}img{border-style:none}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;line-height:1.15;margin:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button}[type=button]::-moz-focus-inner,[type=reset]::-moz-focus-inner,[type=submit]::-moz-focus-inner,button::-moz-focus-inner{border-style:none;padding:0}[type=button]:-moz-focusring,[type=reset]:-moz-focusring,[type=submit]:-moz-focusring,button:-moz-focusring{outline:ButtonText dotted 1px}fieldset{padding:.35em .75em .625em}legend{color:inherit;display:table;max-width:100%;white-space:normal}textarea{overflow:auto}[type=number]::-webkit-inner-spin-button,[type=number]::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}[type=search]::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}[hidden],template{display:none}
        .owl-carousel,.owl-carousel .owl-item{-webkit-tap-highlight-color:transparent;position:relative}.owl-carousel{display:none;width:100%;z-index:1}.owl-carousel .owl-stage{position:relative;-ms-touch-action:pan-Y;touch-action:manipulation;-moz-backface-visibility:hidden}.owl-carousel .owl-stage:after{content:".";display:block;clear:both;visibility:hidden;line-height:0;height:0}.owl-carousel .owl-stage-outer{position:relative;overflow:hidden;-webkit-transform:translate3d(0,0,0)}.owl-carousel .owl-item,.owl-carousel .owl-wrapper{-webkit-backface-visibility:hidden;-moz-backface-visibility:hidden;-ms-backface-visibility:hidden;-webkit-transform:translate3d(0,0,0);-moz-transform:translate3d(0,0,0);-ms-transform:translate3d(0,0,0)}.owl-carousel .owl-item{min-height:1px;float:left;-webkit-backface-visibility:hidden;-webkit-touch-callout:none}.owl-carousel .owl-item img{display:block;width:100%}.owl-carousel .owl-dots.disabled,.owl-carousel .owl-nav.disabled{display:none}.no-js .owl-carousel,.owl-carousel.owl-loaded{display:block}.owl-carousel .owl-dot,.owl-carousel .owl-nav .owl-next,.owl-carousel .owl-nav .owl-prev{cursor:pointer;-webkit-user-select:none;-khtml-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none}.owl-carousel .owl-nav button.owl-next,.owl-carousel .owl-nav button.owl-prev,.owl-carousel button.owl-dot{background:0 0;color:inherit;border:none;padding:0!important;font:inherit}.owl-carousel.owl-loading{opacity:0;display:block}.owl-carousel.owl-hidden{opacity:0}.owl-carousel.owl-refresh .owl-item{visibility:hidden}.owl-carousel.owl-drag .owl-item{-ms-touch-action:pan-y;touch-action:pan-y;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none}.owl-carousel.owl-grab{cursor:move;cursor:grab}.owl-carousel.owl-rtl{direction:rtl}.owl-carousel.owl-rtl .owl-item{float:right}.owl-carousel .animated{animation-duration:1s;animation-fill-mode:both}.owl-carousel .owl-animated-in{z-index:0}.owl-carousel .owl-animated-out{z-index:1}.owl-carousel .fadeOut{animation-name:fadeOut}@keyframes fadeOut{0%{opacity:1}100%{opacity:0}}.owl-height{transition:height .5s ease-in-out}.owl-carousel .owl-item .owl-lazy{opacity:0;transition:opacity .4s ease}.owl-carousel .owl-item .owl-lazy:not([src]),.owl-carousel .owl-item .owl-lazy[src^=""]{max-height:0}.owl-carousel .owl-item img.owl-lazy{transform-style:preserve-3d}.owl-carousel .owl-video-wrapper{position:relative;height:100%;background:#000}.owl-carousel .owl-video-play-icon{position:absolute;height:80px;width:80px;left:50%;top:50%;margin-left:-40px;margin-top:-40px;background:url(owl.video.play.png) no-repeat;cursor:pointer;z-index:1;-webkit-backface-visibility:hidden;transition:transform .1s ease}.owl-carousel .owl-video-play-icon:hover{-ms-transform:scale(1.3,1.3);transform:scale(1.3,1.3)}.owl-carousel .owl-video-playing .owl-video-play-icon,.owl-carousel .owl-video-playing .owl-video-tn{display:none}.owl-carousel .owl-video-tn{opacity:0;height:100%;background-position:center center;background-repeat:no-repeat;background-size:contain;transition:opacity .4s ease}.owl-carousel .owl-video-frame{position:relative;z-index:1;height:100%;width:100%}
        .owl-theme .owl-nav,.owl-theme .owl-nav.disabled+.owl-dots{margin-top:10px}.owl-theme .owl-dots,.owl-theme .owl-nav{text-align:center;-webkit-tap-highlight-color:transparent}.owl-theme .owl-nav [class*=owl-]{color:#fff;font-size:14px;margin:5px;padding:4px 7px;background:#d6d6d6;display:inline-block;cursor:pointer;border-radius:3px}.owl-theme .owl-nav [class*=owl-]:hover{background:#869791;color:#fff;text-decoration:none}.owl-theme .owl-nav .disabled{opacity:.5;cursor:default}.owl-theme .owl-dots .owl-dot{display:inline-block;zoom:1}.owl-theme .owl-dots .owl-dot span{width:10px;height:10px;margin:5px 7px;background:#d6d6d6;display:block;-webkit-backface-visibility:visible;transition:opacity .2s;border-radius:30px}.owl-theme .owl-dots .owl-dot.active span,.owl-theme .owl-dots .owl-dot:hover span{background:#869791}
    </style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />
<!-- <link rel="preload" as="style" href="https://d266qgalneck7k.cloudfront.net/assets/css/style-min.css?v=11.1">
<link rel="stylesheet" href="https://d266qgalneck7k.cloudfront.net/assets/css/style-min.css?v=11.1"> -->


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- <link rel="preload" as="style" href="https://d266qgalneck7k.cloudfront.net/assets/css/style-min.css?v=11"> -->
<link rel="stylesheet" href="<?=base_url()?>./assets/css/kids/style.css">
<link rel="stylesheet" href="<?=base_url()?>./assets/css/kids/module-css/animate.min.css">
<link rel="stylesheet" href="<?=base_url()?>./assets/css/kids/bootstrap.min.css" />
   <link rel="stylesheet" href="<?=base_url()?>./assets/css/kids/custom-animate.css" />
   <!-- <link rel="stylesheet" href="<?=base_url()?>./assets/css/kids/font-awesome-all.css" /> -->
    <link rel="stylesheet" href="<?=base_url()?>./assets/css/kids/jarallax.css" />
    <link rel="stylesheet" href="<?=base_url()?>./assets/css/kids/jquery.magnific-popup.css" />
    <link rel="stylesheet" href="<?=base_url()?>./assets/css/kids/odometer.min.css" />
    <link rel="stylesheet" href="<?=base_url()?>./assets/css/kids/flaticon.css">
    <link rel="stylesheet" href="<?=base_url()?>./assets/css/kids/owl.carousel.min.css" />
    <link rel="stylesheet" href="<?=base_url()?>./assets/css/kids/owl.theme.default.min.css" />
    <link rel="stylesheet" href="<?=base_url()?>./assets/css/kids/nice-select.css" />
    <link rel="stylesheet" href="<?=base_url()?>./assets/css/kids/jquery-ui.css" />
    <link rel="stylesheet" href="<?=base_url()?>./assets/css/kids/aos.css" />


    <link rel="stylesheet" href="<?=base_url()?>./assets/css/kids/module-css/banner.css" />
    <link rel="stylesheet" href="<?=base_url()?>./assets/css/kids/module-css/sliding-text.css" />
    <link rel="stylesheet" href="<?=base_url()?>./assets/css/kids/module-css/about.css" />
    <link rel="stylesheet" href="<?=base_url()?>./assets/css/kids/module-css/courses.css" />
    <link rel="stylesheet" href="<?=base_url()?>./assets/css/kids/module-css/why-choose.css" />
    <link rel="stylesheet" href="<?=base_url()?>./assets/css/kids/module-css/counter.css" />
    <link rel="stylesheet" href="<?=base_url()?>./assets/css/kids/module-css/team.css" />
   <link rel="stylesheet" href="<?=base_url()?>./assets/css/kids/module-css/testimonial.css" />
   
    <!-- template styles -->
    <link rel="stylesheet" href="<?=base_url()?>./assets/css/kids/style.css" />
    <link rel="stylesheet" href="<?=base_url()?>./assets/css/kids/responsive.css" />


<meta name="google-signin-client_id" content="785754638109-mqkqlfm75n28ckj4ilneh26f1p7sss3h.apps.googleusercontent.com">
<meta name="facebook-domain-verification" content="k22hm1hx40jur48zwaj696v7c9f2cn" />
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-WC3S6GN');</script>
<!-- End Google Tag Manager -->
    
</head> 
<body> 
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WC3S6GN" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

 <!-- Global site tag (gtag.js) - AdWords: 859614801 -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-859614801"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'AW-859614801');
    </script>
  
<div class="container home-page home-page-v2">

    <?php
        $uriPath = service('uri')->getPath();
        if($uriPath == "/") {
    ?>
    <div class="top-menu"> <?php
        } else { ?>
    <div class="top-menu def-active"> <?php
        } ?>

        <div class="top-menu-logos">
            <a href="/" class="step-bg-white">
                <img src="https://d266qgalneck7k.cloudfront.net/assets/images/STEP.svg" loading="lazy" alt="STEP">
            </a>
            <a href="/" class="step-bg-black">
                <img src="https://d266qgalneck7k.cloudfront.net/assets/images/STEP-logo-bg-black.png" alt="STEP">
            </a>
            <a href="https://www.thehindu.com/" target="_blank">
                <img src="https://d266qgalneck7k.cloudfront.net/assets/images/hindu-newspaper-bg-white.png" alt="The Hindu" class="step-bg-black" />
                <img src="https://d266qgalneck7k.cloudfront.net/assets/images/hindu-newspaper.svg" loading="lazy" alt="The Hindu" class="step-bg-white" />
            </a>
        </div>
        <div class="top-menu-items">

            <div class="dropdown menu-item-mobile">
                <button class="dropbtn" title="Solutions">
                    <p class="flag-alt">Solutions</p>
                    <span class="flagindia">&#9662;</span>
                </button>
                <div class="dropdown-content">
                    <a href="<?=base_url()?>forcorporate" title="For Corporate">For Corporate</a>
                    <a href="<?=base_url()?>forinstitution" title="For Institutions">For Institutions</a>
                    <a href="<?=base_url()?>kids" title="For KIds">For Kids</a>

                </div>
            </div>

            <a href="<?=base_url()?>forcorporate" class="menu-item-desktop" title="For Corporate">For Corporate</a>
            <a href="<?=base_url()?>forinstitution" class="menu-item-desktop" title="For Institutions">For Institutions</a>
            <a href="<?=base_url()?>kids" class="menu-item-desktop" title="For Kids">For Kids</a>
            <a href="https://english.steptest.in/signup" id="loginbtn" title="Login" class="highlight">Login</a>
              <span class="tollfree">
                <a href="https://web.whatsapp.com/send?phone=+919789883344&text=Hello%2C%20I%27m%20Interested%20in%20buying%20this%20course" target="_blank">
                  <i class="fa fa-whatsapp"></i> +91 9789883344
                </a><br>
                <a href="mailto:info@steptest.in">
                  <i class="fa fa-envelope-o"></i> info@steptest.in
                </a>
              </span>


        </div>
    </div> 
 

<script>
document.getElementById("loginbtn").addEventListener("click", function(event) {
    event.preventDefault(); 
    window.dataLayer = window.dataLayer || [];
    window.dataLayer.push({
        'event': 'buttonClick',
        'eventCategory': 'Button',
        'eventAction': 'Click',
        'eventLabel': 'Login'
    });

    setTimeout(function() {
        window.location.href = "https://english.steptest.in/signup";
    }, 200);
});
</script>