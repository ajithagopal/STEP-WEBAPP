<?php 
  helper('productTitle_helper');
  include('header.php'); 
?>

<div class="banner-area banner-area-bg-1" id="tbanner">
        <div class="banner-area-text animate__animated animate__fadeInUp">
          <h1>Unleash your potential</h1>
          <span>by improving your English language skills</span>
        </div>
      </div>
      
       <div class="title-tabs-container">
          <h1>English for</h1>
          <div class="category-card-container">
              <?php foreach ($productData as $index => $product) { ?>
                <?php
                  $courseLinks = ['general-communication','working-professionals', 'exam-preparation', 'ielts-preparation'];
                  $className = "category-card-item-" . ($index + 1); ?>
                  <div class="category-card <?= $className ?>">
                      <div class="category-card-inner" 
                      onclick="gotoURL('<?= ($product['product_name'] == 'STEP Live Junior - 2025') ? base_url() . 'kids' : $product['product_name_slug']; ?>')">  
                          <?php
                            echo productTitle($product['product_name']);
                          ?>
                          <span>Starting from</span>
                          <div class="price-div" countryCode="<?= $countryCode === 'IN' ? 'IN' : 'INT' ?>">
                            <?php if ($countryCode === 'IN'): ?>
                                ₹<?= round($product['offer_price']) ?>
                            <?php else: ?>
                                $<?= round($product['offer_price_usd']) ?>
                            <?php endif; ?>
                          </div>
                        
                         <?php if ($product['product_name'] != 'STEP Live Junior - 2025'){?>
                          <a href="<?= $product['product_name_slug']; ?>" class=""><?php echo $product['product_name'];?></a>
                        <?php }else{?>
                          <a href="<?= base_url() . 'kids'  ?>" class=""><?php echo 'STEP for Kids'?></a>
                        <?php } ?>
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
      <div class="new-formats-sections">
        <div class="new-formats-patch">
          <h1>Formats to match your Learning Style</h1>
        </div>
        <div class="new-formats-containers">
          <div class="new-formats-item">
            <div class="new-formats-item-header">
              <div class="set-image-overlay">

                <div class="boton-container">
                  <div class="boton yutubeBtn" data-src="https://www.youtube.com/embed/OzwcF0XUiGQ">
                      <img src="https://d266qgalneck7k.cloudfront.net/assets/images/youtubeButton.svg" loading="lazy" alt="STEP - Sample coach calls" class="formats-tab-content-banner">
                 <!--    <div class="fondo" x="0" y="0" width="200" height="200"></div>
                    <div class="icono" width="100" height="100">
                      <div class="parte izquierda" x="0" y="0" width="100" height="100" fill="#fff"></div>
                      <div class="parte derecha" x="0" y="0" width="100" height="100" fill="#fff"></div>
                    </div> -->
                    <div class="puntero"></div>
                  </div>
                </div>

                <img src="https://d266qgalneck7k.cloudfront.net/assets/images/online-video-lessons-thumbnail.webp" width="389" height="216" loading="lazy" alt="STEP - Sample coach calls" class="formats-tab-content-banner">
              </div>
            </div>
            <div class="new-formats-item-body">
              <div class="new-formats-item-bodyheader">
                <span>ONLINE VIDEO LESSONS</span>
              </div>
              <div class="new-formats-item-content">
                <p>Learn at your own pace!</p>
                <ol>
                  <li><p>800+ on-demand, engaging online video lessons using real-life contexts.</p></li>
                  <li><p>Activities and tests to practise your English.</p></li>
                  <li><p>Unlimited access, available on both web and app.</p></li>
                  <li><p>All courses customised by our experts, just for you!</p></li>
                </ol>
              </div>
            </div>
          </div>


          <div class="new-formats-item">
            <div class="new-formats-item-header">
              <div class="set-image-overlay">

                <div class="boton-container">
                  <div class="boton yutubeBtn" data-src="https://www.youtube.com/embed/NFJgIeFu1os">
                    <img src="https://d266qgalneck7k.cloudfront.net/assets/images/youtubeButton.svg" loading="lazy" alt="STEP - Sample coach calls" class="formats-tab-content-banner">
                   
                    <div class="puntero"></div>
                  </div>
                </div>

                <img src="https://d266qgalneck7k.cloudfront.net/assets/images/face-to-face-thumbnail.webp"  width="389" height="216" loading="lazy" alt="STEP - Sample coach calls" class="formats-tab-content-banner">
              </div>
            </div>
            <div class="new-formats-item-body">
              <div class="new-formats-item-bodyheader">
                <span>FACE TO FACE CLASSES</span>
              </div>
                <div class="new-formats-item-content">
                <p>Interact with your trainers face-to-face!</p>
                <ol>
                  <li><p>Face-to-face training for groups at colleges and corporates.</p></li>
                  <li><p>Courses customized as per organization's needs.</p></li>
                </ol>
              </div>
           
            </div>
          </div>

          <div class="new-formats-item">
            <div class="new-formats-item-header">
              <div class="set-image-overlay">

                <div class="boton-container">
                  <div class="boton yutubeBtn" data-src="https://www.youtube.com/embed/F7ud5DSobRU">
                    <img src="https://d266qgalneck7k.cloudfront.net/assets/images/youtubeButton.svg" loading="lazy" alt="STEP - Sample coach calls" class="formats-tab-content-banner">
                    <div class="puntero"></div>
                  </div>
                </div>

                <img src="https://d266qgalneck7k.cloudfront.net/assets/images/live-classes-thumbnail.webp"  width="389" height="216" loading="lazy" alt="STEP - Sample coach calls" class="formats-tab-content-banner">
              </div>
            </div>
            <div class="new-formats-item-body">
              <div class="new-formats-item-bodyheader">
                <span>LIVE CLASSES</span>
              </div>
               <div class="new-formats-item-content">
                <p>A great way to supplement your English learning!</p>
                <ol>
                  <li><p>Scheduled Online Classes where you can see your trainer live.</p></li>
                  <li><p>Enjoy interacting with the trainer and fellow learners through chat, polls and online exercises.</p></li>
                </ol>
              </div>
            </div>
          </div>

          <div class="new-formats-item">
            <div class="new-formats-item-header">
              <audio
                preload="none"
                id="sample-coach-call"
                controls="false"
                src="https://d266qgalneck7k.cloudfront.net/assets/5c211728fe820ad73b2ad3157b0b1465.mp3"
                type="audio/mpeg">
              </audio>
              <div class="set-image-overlay">
                <div class="boton-container">
                  <div class="boton" id="sample-coach-call-btn">
                    <img src="https://d266qgalneck7k.cloudfront.net/assets/images/youtubeButton.svg" loading="lazy" alt="STEP - Sample coach calls" class="formats-tab-content-banner">
                    <div class="puntero"></div>
                  </div>
                </div>
                <div class="coach-calls-item set-image-overlay-overItem">
                  <div class='audioAttributes'>
                    <!-- <h5>{isPlaying ? 'Playing' : (currentTime !== '00:00' ? 'Resume' : 'Listen')}</h5> -->
                    <div>
                      <span class='audioDuration'><span class="audioCurrentTime">00:00</span> / <span class="audioDurationTime">36:43</span></span>
                    </div>
                  </div>
                </div>
                <img src="https://d266qgalneck7k.cloudfront.net/assets/images/coach-calls-thumbnail.webp"  width="389" height="216" loading="lazy" alt="STEP - Sample coach calls" class="formats-tab-content-banner">
              </div>
            </div>
            <div class="new-formats-item-body">
              <div class="new-formats-item-bodyheader">
                <span>COACH CALLS</span>
              </div>
              <div class="new-formats-item-content">
                <p>Possibilities are endless with STEP Coach!</p>
                <ol>
                  <li><p>One-on-one phone calls with English experts (Coach).</p></li>
                  <li><p>Scheduled as per your convenience.</p></li>
                  <li><p>Personalised to your requirements and capabilities.</p></li>
                </ol>
              </div>
            </div>
          </div>

        </div>
      </div>

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

      <div id="solutionsFor">
        <h1 class="solutions-for-title">Are you a corporate/institution?</h1>
        <div class="solutions-for">
          <div class="solutions-for-item">
            <img src="https://d266qgalneck7k.cloudfront.net/assets/images/ForCorporate.webp" loading="lazy" alt="Solutions for Corporate" class="solutions-for-item-image"/>
            <div class="solutions-for-text">
              <h1>Solutions for Corporate</h1>
              <p>Empower your employees with better English with our comprehensive English training programme. Our training programme will equip your staff to communicate confidently in any professional context.</p>
              <a href="javascript:void(0)" rel="nofollow" class="scrollToContactSection">Contact us</a>
            </div>
          </div>
          <div class="solutions-for-item">
            <div class="solutions-for-text solutions-for-text-right">
              <h1>Solutions for Institutions</h1>
              <p>Students with good communications skills get placed first and move up faster in their career. Our power packed English training programme will measurably improve their communication skills.</p>
              <a href="javascript:void(0)" rel="nofollow" class="scrollToContactSection">Contact us</a>
            </div>
            <img src="https://d266qgalneck7k.cloudfront.net/assets/images/ForInstitutions.webp" loading="lazy" alt="Solutions for Institutions" class="solutions-for-item-image"/>
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