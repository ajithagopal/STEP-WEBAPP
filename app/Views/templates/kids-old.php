<?php 
  helper('productTitle_helper');
  include('header.php'); 
?>
<link rel="preload" href="https://storage.googleapis.com/assets.thehindustep.in/img%2Fproducts%2Fpd_bg_w_0cd066d2663817c4a9b8fb9e49e27f1a.png" as="image" media="(min-width: 901px)">
<link rel="preload" href="https://storage.googleapis.com/assets.thehindustep.in/img%2Fproducts%2Fpd_bg_w_0cd066d2663817c4a9b8fb9e49e27f1a.png" as="image" media="(max-width: 900px)">
<link rel="preload" href="https://storage.googleapis.com/assets.thehindustep.in/img%2Fproducts%2Fpd_bg_w_0cd066d2663817c4a9b8fb9e49e27f1a.png" as="image" media="(max-width: 600px)">

  </style>
      <div class="banner-area banner-area-bg-1" id="tbanner">
        <div class="banner-area-text animate__animated animate__fadeInUp">
          <h1>Discover your superpowers by learning English!</h1>
          <span style="font-size: 24px;">Live English Courses for Children in Classes 4 to 7</span>
        </div>
      </div>
      <style type="text/css">
            .banner-area {
        background: url(https://storage.googleapis.com/assets.thehindustep.in/img%2Fproducts%2Fpd_bg_w_0cd066d2663817c4a9b8fb9e49e27f1a.png) no-repeat center center;
    }
    p.ticktick {
      padding: 20px;
      font-size: 22px;
    }
    @media only screen and (max-width: 600px) {
    .banner-area.banner-area-bg-1 {
        background: url(https://storage.googleapis.com/assets.thehindustep.in/img%2Fproducts%2Fpd_bg_w_0cd066d2663817c4a9b8fb9e49e27f1a.png) no-repeat center center;
        background-size: cover;
    }
    p.ticktick {
      padding: 20px;
      font-size: 16px;
    }
}

@media only screen and (max-width: 900px) {
    .banner-area.banner-area-bg-1 {
        background: url(https://storage.googleapis.com/assets.thehindustep.in/img%2Fproducts%2Fpd_bg_w_0cd066d2663817c4a9b8fb9e49e27f1a.png) no-repeat center center;
        background-size: cover;
    }
    p.ticktick {
      padding: 20px;
      font-size: 20px;
    }
}
        .summer-offer-box {
            max-width: 600px;
            margin: 20px auto;
            padding: 25px;
            border-radius: 15px;
            background: linear-gradient(135deg, #a1c4fd 0%, #c2e9fb 50%, #a1c4fd 100%);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
            text-align: center;
            border: 3px dashed #fff;
            position: relative;
            overflow: hidden;
            animation: rainbowBorder 8s infinite linear;
        }

        .summer-offer-box::before {
            content: "";
            position: absolute;
            top: -10px;
            left: -10px;
            right: -10px;
            bottom: -10px;
            background: linear-gradient(45deg, #a1c4fd, #c2e9fb, #84fab0, #8fd3f4);
            background-size: 400% 400%;
            z-index: -1;
            border-radius: 18px;
            opacity: 0.3;
            animation: rainbowBg 6s ease infinite;
        }

        .summer-offer-box h2 {
            color: #1565c0;
            font-size: 28px;
            margin-bottom: 15px;
            text-shadow: 2px 2px 0px rgba(255,255,255,0.8);
        }

        .summer-offer-box p {
            color: #333;
            font-size: 18px;
            line-height: 1.6;
            margin-bottom: 0;
        }

        .highlight {
            font-weight: bold;
            color: #1976d2;
            text-decoration: underline;
        }

        .emoji {
            font-size: 24px;
            vertical-align: middle;
            margin: 0 5px;
        }

        @keyframes rainbowBorder {
            0% { border-color: #a1c4fd; }
            20% { border-color: #c2e9fb; }
            40% { border-color: #84fab0; }
            60% { border-color: #8fd3f4; }
            80% { border-color: #a1c4fd; }
            100% { border-color: #c2e9fb; }
        }

        @keyframes rainbowBg {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        @media (max-width: 600px) {
            .summer-offer-box {
                padding: 15px;
                margin: 15px;
            }
            
            .summer-offer-box h2 {
                font-size: 24px;
            }
            
            .summer-offer-box p {
                font-size: 16px;
            }
        }

      </style>

      <!-- Inserting the new card section -->
<section class="section grey-gradient-bg section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="services-text section-header text-center">
                        <div>
                            <h2 class="section-title">STEP for Kids – Summer Special 2025</h2>
                            <div class="desc-text">
                                <p>
                                    Batch Starts: April 28th, 2025 | Weekday Live Sessions
                                </p>

                            </div>
                           <div class="summer-offer-box">
        <h2>Make this summer count! <span class="emoji">☀️</span></h2>
        <p> <span class="highlight">STEP by The Hindu</span> offers short, impactful courses to help your child improve <span class="highlight">grammar</span>, <span class="highlight">vocabulary</span>, <span class="highlight">writing</span>, and <span class="highlight">communication skills</span> — through <span class="highlight">fun, interactive live classes</span>! </p>
    </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
      
       <div class="title-tabs-container">
          <div class="category-card-container">
              <?php foreach ($productData as $index => $product) { ?>
                <?php
                  $courseLinks = ['general-communication','working-professionals'];
                  $className = "category-card-item-" . ($index + 1); ?>
                  <div class="category-card kids <?= $className ?>">
                      <div class="category-card-inner" onclick="gotoURL('<?= baseURL .'product/'.$product['product_name_slug']; ?>')">
                         <h1><?php echo $product['product_name']; ?></h1> 
                          <p><?php echo $product['product_new_tag_line']; ?></p>
                          <span>Starting from</span>
                          <div class="price-div" countryCode="<?= $countryCode === 'IN' ? 'IN' : 'INT' ?>">
                            <?php if ($countryCode === 'IN'): ?>
                                ₹<?= round($product['original_price']) ?>
                            <?php else: ?>
                                $<?= round($product['original_price_usd']) ?>
                            <?php endif; ?>
                          </div>
                          <a href="<?= 'product/' . $product['product_name_slug'] ?>" class=""><?php echo $product['product_name']; ?></a>
                      </div>
                  </div>
              <?php } ?>
          </div>
        </div>

        <script type="text/javascript">
        $(document).ready(function() {
            $(".category-card-inner").click(function(e) {
                event.preventDefault(); 
              /*  var currentPageName = $(this).find('h1').text();
                var nextPageName = $(this).find('a').text().trim();
                console.log(currentPageName);
                console.log(nextPageName);
*/
                window.dataLayer = window.dataLayer || [];
                window.dataLayer.push({
                    'event': 'group_page_select'
                });

                return true; 
            });
        });
      </script>
      

      <div class="new-modal">
        <a class="new-modal-close" rel="nofollow">&times;</a>
        <div class="youtube-section">
          <iframe id="youtubeFrame" style="width: 100%; max-width: 100%; height: 250px;" src="" title="STEP Live Class" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
      </div>

      <div class="why-step" id="whyStep">
        <div class="why-step-intro">
          <h1>Why STEP?</h1>
          <p>With STEP, you’ll find yourself communicating confidently! STEP determines<br> your current language level and provides learning content personalized for you.</p>
          <p>Impacted over 3-million learners to date!</p>
        </div>
        <div class="why-step-elements">
          <div class="why-step-element why-step-options">
            <img class="why-step-element-icon" loading="lazy" src="https://d266qgalneck7k.cloudfront.net/assets/images/learning-options.png" alt="Variety of learning options" />
            <div>Variety of <strong>learning options</strong>: video lessons, one-on-one phone calls with trainers, live classes</div>
          </div>

          <div class="why-step-element why-step-options">
            <img class="why-step-element-icon"  loading="lazy" src="https://d266qgalneck7k.cloudfront.net/assets/images/Flexible-learning.png" alt="Flexible learning" />
            <div><strong>Flexible learning</strong> Access from anywhere at a time convenient for you (Tablet / Mobile / Laptop / Desktop)</div>
          </div>

          <div class="why-step-element why-step-options">
            <img class="why-step-element-icon" loading="lazy" src="https://d266qgalneck7k.cloudfront.net/assets/images/Indian.png" alt="Content relevant for Indian" />
            <div>Content relevant for <strong>Indian</strong> contexts - relatable accents and situations</div>
          </div>

          <div class="why-step-element why-step-options">
            <img class="why-step-element-icon" loading="lazy" src="https://d266qgalneck7k.cloudfront.net/assets/images/Interactive-Audio-Video.png" alt="Interactive Audio/Video assessment" />
            <div><strong>Interactive Audio/Video assessment</strong> for better engagement and effective learning</div>
          </div>

          <div class="why-step-element why-step-options">
            <img class="why-step-element-icon" loading="lazy" src="https://d266qgalneck7k.cloudfront.net/assets/images/International-Standards.png" alt="International Standards" />
            <div>Learning and assessment aligned to <strong>International Standards</strong> (CEFR Scale)</div>
          </div>

          <div class="why-step-element why-step-options">
            <img class="why-step-element-icon" loading="lazy" src="https://d266qgalneck7k.cloudfront.net/assets/images/Very-affordable.png" alt="Very affordable" />
            <div>Plenty of options - <strong>Very affordable</strong></div>
          </div>

          <div class="why-step-element why-step-options">
            <img class="why-step-element-icon" loading="lazy" src="https://d266qgalneck7k.cloudfront.net/assets/images/customizable-adaptive-learning.png" alt="Customizable adaptive learning" />
            <div>Completely <strong>customizable adaptive learning content</strong> to suit YOUR needs</div>
          </div>

          <div class="why-step-element why-step-options">
            <img class="why-step-element-icon" loading="lazy" src="https://d266qgalneck7k.cloudfront.net/assets/images/Hindu-Group.png" alt="The Hindu Group" />
            <div>From <strong>The Hindu Group,</strong> a brand built on trust and integrity <img loading="lazy" src="https://d266qgalneck7k.cloudfront.net/assets/images/hindu-newspaper.svg" alt="The Hindu Group" /></div>
          </div>

        </div>
      </div>



      <div class="contact-section" id="contact-section">
          <div class="contact-section-details">
            <h2>General contact / support</h2>
            <strong>Whatsapp or Phone</strong>
            <a href="tel:919789883344">+91 9789883344</a>

            <strong>Email</strong>
            <a href="mailto:info@steptest.in">info@steptest.in</a>

            <h2 class="mar-top">Operational hours</h2>
            <span>10AM - 7.30PM (Weekdays)</span>

            <h2 class="mar-top">Frequently asked questions (FAQs)</h2>
            <a href="javascript:void(0)" rel="nofollow">Visit our Help Center</a>
          </div>
          <?php
            $isGetInTouchTitle = 'Get in touch';
            include('getInTouch.php');
          ?>
      </div>
      <?php include('footer.php'); ?>