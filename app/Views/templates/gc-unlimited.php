<?php 
  include('header.php'); 
  // include('buyModal.php');
?>

<div class="product-lineup-container">
 <!--  <h1>English for</h1>
  <?php
  $detailPageNaviActive = 'gc';
  include('detail-page-navi.php'); ?> -->
  
  <div class="product-category-container-bg">
     <div class="product-category-top-container">
      <div class="product-category-picture">
        <img src="assets/images/student-image.png" alt="">
      </div>
      <div class="product-content">
        <div class="title">English for
          <span class="pinkHigh">
            General Communication
          </span>
        </div>
        <div class="description">
          Courses focusing on English language skills for daily communication.
        </div>
      </div>
    </div>
     </div>

       <div class="plan-container">
    <div class="tab-system">
      <h2>Choose your plan</h2>
      <div class="tabs-container">
        <nav class="tabs">
          <div class="selector"></div>
          <a href="general-communication-online" class="tab-btn " data-target="online" data-course="course-online">Online</a>
          <a  href="general-communication-crash-course" class="tab-btn" data-target="crashcourse" data-course="course-crashcourse">Crash Course</a>
          <a  href="general-communication-unlimited" class="tab-btn active" data-target="unlimited" data-course="course-unlimited">Unlimited</a>
        </nav>
      </div>
       <div class="offer-tabs-container">
       <div id="online" class="offer active">
        <div class="row outer-container">
          <div class="left-container">
            <div class="mobile-heading">
              <p>Unlimited</p>
            </div>
            <div class="left-container-content">
            <h3>This is the right course for you if you are</h3>
            <p>an adult learner who is looking to develop English language skills at your own pace and schedule with lots of guidance and support from trainers and classmates. You will get unlimited one-on-one phone lessons with a personalised trainer and interact with other learners and a trainer over unlimited live classes.</p>
            </div>
            </div>
          <div class="right-container">
            <div class="hours-of-content">
              <h3>Hours of content </h3>
              <p>Online lessons<span> 60 hrs</span></p>
              <p>Coach calls(One on one)<span> Unlimited</span></p>
              <p>Live classes<span> Unlimited</span></p>
            </div>
            <div class="offer-container">
            <?php 
                   $productDetails = [613 => ['original_price' => 10999,'offer_price' => 9499,'original_price_usd' => 132,'offer_price_usd' => 114],634 => ['original_price' => 21999,'offer_price' => 12999,'original_price_usd' => 263,'offer_price_usd' => 156]];
            foreach ($CourseDetails as $course) {
               if ($course['product_id'] == 608 ):     
               $model = model(Product::class);      
                    $unlimitedDetails = $model->getUnlimited();      
                  ?>
            <form id="offerForm">
              <div class="form-group">
                <input 
                  class="form-control coupon-number p-email" 
                  type="number" 
                  name="number" 
                  min="1" 
                  max="10" 
                  placeholder="Enter Mobile Number" 
                  required 
                  pattern="\d{10}" 
                  autocomplete="tel"
                />
              </div>

              <input type="hidden" name="txtProductId" value="<?= $course['product_id'] ?>" class="data-product-id">
              <input type="hidden" name="countryCode" value="<?= $countryCode ?>" class="country-code">

              <div class="form-group">
                        <div class="input-group styled-input coupon-code">
                          <input 
                            type="text" 
                            class="form-control coupon-input txtCoupon" 
                            placeholder="Have a Coupon Code?"
                          />
                          <button 
                            type="button" 
                            class="btn apply-btn" 
                            onclick="couponbtn('offer-container')"
                          >
                            APPLY
                          </button>
                        </div>
                      </div>

              <div class="form-group title-tab-row select">
                <label for="semester">
                  <span class="text-danger"></span>
                </label>
                <select name="semester" id="semester" class="form-control" onchange="priceChange(this.value)">
                  <option value="1" selected>3 Months</option>
                  <option value="2">6 Months</option>
                  <option value="3">12 Months</option>
                </select>
                <span id="error_semester" class="text-danger"></span>
              </div>

              <div class="price a1" style="display:none;">          
                  <p>
                    <s id="613og" class="data-price">
                    <?= $countryCode === 'IN' ? '₹' .round($unlimitedDetails[1]['original_price']) : '$' . round($unlimitedDetails[1]['original_price_usd'])?>
                                      </s>
                    <span class="data-offerprice">
                    <?= $countryCode === 'IN' ? '₹' .round($unlimitedDetails[1]['offer_price']) : '$' . round($unlimitedDetails[1]['offer_price_usd'])?>
                                      </span>
                  </p>
                </div>

                <div class="price a2">
                  <p>
                    <s id="634og" class="data-price">
                    <?= $countryCode === 'IN' ? '₹' .round($unlimitedDetails[0]['original_price']) : '$' .round($unlimitedDetails[0]['original_price_usd'])?>
                     </s>
                    <span class="data-offerprice">
                    <?= $countryCode === 'IN' ? '₹' .round($unlimitedDetails[0]['offer_price']) : '$' .round($unlimitedDetails[0]['offer_price_usd'])?>                   
                   </span>
                  </p>
                </div>

              <div class="price a3">
                <p>
                  <s id="608og" class="data-price">
                    <?= $countryCode === 'IN' ? '₹' . round($course['original_price']) : '$' . round($course['original_price_usd']) ?>
                  </s>
                  <span class="data-offerprice">
                    <?= $countryCode === 'IN' ? '₹' . round($course['offer_price']) : '$' . round($course['offer_price_usd']) ?>
                  </span>
                </p>
              </div>

              <button 
                id="submitButton" 
                type="button" 
                class="btn btn-success" 
                onclick="buyybtn('offer-container')"
              >
                BUY
              </button>
            </form>
            <?php endif;
                      } ?>  
          </div>

            <!-- <div class="offer-container">
                     <?php 
                   $productDetails = [613 => ['original_price' => 10999,'offer_price' => 9499,'original_price_usd' => 132,'offer_price_usd' => 114],634 => ['original_price' => 21999,'offer_price' => 12999,'original_price_usd' => 263,'offer_price_usd' => 156]];
            foreach ($CourseDetails as $course) {
               if ($course['product_id'] == 608 ):    
               $model = model(Product::class);      
                    $unlimitedDetails = $model->getUnlimited();      
                  ?>

              <div id="buttons" class="coupon">
              <input class="coupon-number p-email" type="number"  name="number" min="1" max="10" placeholder="Enter Mobile number" required>
               <input type="hidden" name="txtProductId" value="<?= $course['product_id']?>" class="data-product-id">
                    <input type="hidden" name="countryCode" value="<?= $countryCode?>" class="country-code">
                 <div class="coupon-code">
                      <input class="coupon-input txtCoupon" type="text"  placeholder="Have a Coupon code?">
                      <button class="apply-btn" onclick="couponbtn('offer-container')">APPLY</button>
                  </div>
                     <div class="title-tab-row select">
                              <label> <span class="text-danger"></span></label>
                              <select name="semester" id="semester" class="form-control" onchange="priceChange(this.value)">
                                <option selected value="1" >3 Months</option>
                                <option value="2" >6 Months</option>
                                <option value="3" >12 Months</option>
                            </select>
                            <span id="error_semester" class="text-danger"></span>
                          </div>  

                             <div class="price a1" style="display:none;">
                                   <p id="613og" ><s <?=$countryCode?> ><?= $countryCode === 'IN' ? '₹' .round($unlimitedDetails[1]['original_price']) : '$' . round($unlimitedDetails[1]['original_price_usd'])?></s> 
                                    <span> <?= $countryCode === 'IN' ? '₹' .round($unlimitedDetails[1]['offer_price']) : '$' . round($unlimitedDetails[1]['offer_price_usd'])?></span></p>       
                                    
                              </div>

                             <div class="price a2">
                                   <p  ><s id="634og <?=$countryCode?> "><?= $countryCode === 'IN' ? '₹' .round($unlimitedDetails[0]['original_price']) : '$' .round($unlimitedDetails[0]['original_price_usd'])?></s> 
                                    <span id="634off  <?=$countryCode?>"> <?= $countryCode === 'IN' ? '₹' .round($unlimitedDetails[0]['offer_price']) : '$' .round($unlimitedDetails[0]['offer_price_usd'])?></span></p>       
                                    
                              </div>

                             <div class="price a3">
                                   <p ><s id="608og<?=$countryCode?>" ><?= $countryCode === 'IN' ? '₹' .round($course['original_price']) : '$' . round($course['original_price_usd']) ?></s> 
                                    <span id="608off <?=$countryCode?>"> <?= $countryCode === 'IN' ? '₹' .round($course['offer_price']) : '$' . round($course['offer_price_usd'])?></span></p>       
                                    
                              </div>
                              <button onclick="buyybtn('offer-container')" id="submitButton" type="button"  >BUY</button>
                <?php endif;
                } ?>  
              </div>
            </div> -->
          </div>
        </div>
      </div>
       </div>
    </div>

       <script>

        document.addEventListener("DOMContentLoaded", function() {
        priceChange(document.getElementById('semester').value);
    });


    function priceChange(val) {
        var originalPrice, offerPrice, savedPrice,productId;
        var countryCode = '<?= $countryCode === 'IN' ? 'IN' : 'INT' ?>';
        var currencySymbol = countryCode === 'IN' ? '₹' : '$';

        var text = document.getElementById('semester').value;
        if(text == 1){
            $(".a1").css({"display":"flex"}); 
            $('.a2').hide();
            $('.a3').hide();
            originalPrice = $('#613og').text();
            offerPrice = $('#613off').text();
            productId = 634;
        } else if (text == 2){
            $(".a2").css({"display":"flex"}); 
            $('.a1').hide();
            $('.a3').hide();
            originalPrice = $('#634og').text();
            offerPrice = $('#634off').text();
            productId = 613;
        } else if (text == 3){
            $(".a3").css({"display":"flex"}); 
            $('.a2').hide();
            $('.a1').hide();
            originalPrice = $('#608og').text();
            offerPrice = $('#608off').text();
            productId = 608;
        }

        savedPrice = parseFloat(originalPrice.replace(currencySymbol, '')) - parseFloat(offerPrice.replace(currencySymbol, ''));
        $(".buy").attr("data-offerprice",  offerPrice);
        $(".buy").attr("saved-price", currencySymbol + savedPrice);
        $(".buy").attr("data-pr", currencySymbol + savedPrice);
        $(".data-product-id").val(productId);
    }
</script>
  </div>
  <div class="course-description">
    <div class="title">Course description</div>
    <div class="description-container">
      <p>This course consists of three components - the online course, Live classes and STEP coach calls (one-on-one phone lessons with a personalised trainer).</p>
      <div class="double-sections">
        <p class="after-border">This course includes unlimited access to two live class series: the General English live class and the Email Writing series.In the live classes, a trainer will teach you English grammar and vocabulary concepts, or  email writing, and you will be able to interact with the trainer, ask and answer questions through chat and polls. You will also complete a practice exercise to ensure that you know how to use what you learnt.</p>
      </div>
        <div class="double-sections">
        <p class="after-border">The online course will have a series of video-based webisodes or lessons which you can take at your own pace and convenience. Each webisode focuses on reading, writing, listening, speaking, grammar or vocabulary and will be followed by a practice exercise to ensure that you know how to use what you learnt.</p>
      </div>
        <div class="double-sections">
        <p class="after-border">In the STEP coach calls, an expert English Trainer will be assigned to you as your very own English Coach! These one-on-one calls can be booked with our expert coaches as per your convenience and during each call, an aspect of English would be covered.<br/>The 3-month unlimited course includes up to 50 calls, the 6-month unlimited course includes up to 100 calls and the 1-year unlimited course includes up to 140 calls.The topics covered in each call will be personalised to your background, requirements, and level of expertise. You will not only receive useful tips and techniques on how to improve your speaking skills but will also receive tailor-made input, based on your strengths and weaknesses, to develop your grammar and pronunciation. Each call will be followed with an assignment, which will not only provide speaking or writing practice but also consolidate learning. Assignments will need to be completed and uploaded before the next call can be booked.</p>

      </div>
    </div>
    <div class="title">You will develop the following skills:</div>
    <div class="skills-container">
      <div class="row skills-outer">
       <div class="col-lg-12 col-sm-6 col-md-12 skills-inner">
       <div class="col-sm-4 col-md-4 col-lg-3 skills">
          <div class="square-holder">
            <img src="assets/images/book-image.svg" alt="reading-image">
            <p>Reading</p>
          </div>
        </div>
        <div class="col-sm-4 col-md-4 col-lg-3 skills">
          <div class="square-holder">
            <img src="assets/images/writing-image.svg" alt="writing-image">
            <p>Writing</p>
          </div>
        </div>
        <div class="col-sm-4 col-md-4 col-lg-3 skills">
          <div class="square-holder">
            <img src="assets/images/listening-image.svg" alt="listening-image">
            <p>Listening</p>
          </div>
        </div>
       </div>
       <div class="col-lg-12 col-sm-6 col-md-12 skills-inner">
       <div class="col-sm-4 col-md-4 col-lg-3 skills">
          <div class="square-holder">
            <img src="assets/images/speaking-image.svg" alt="speaking-image">
            <p>Speaking</p>
          </div>
        </div>
        <div class="col-sm-4 col-md-4 col-lg-3 skills">
          <div class="square-holder">
            <img src="assets/images/vocabulary-image.svg" alt="Vocabulary-image">
            <p>Vocabulary</p>
          </div>
        </div>
        <div class="col-sm-4 col-md-4 col-lg-3 skills">
          <div class="square-holder">
            <img src="assets/images/grammar-image.svg" alt="Grammar-image">
            <p>Grammar</p>
          </div>
        </div>
       </div>
      </div>
    </div>
    <div class="product-category-container">
      <div class="product-category-content">
        <div class="course-content-tabs">
          <div class="course-content-tab" data-id="online-course">
            <span>Online Course</span>
            <span class="border-hide"></span>
          </div>
          <div class="course-content-tab active" data-id="coach-calls">
            <span>Coach Calls</span>
            <span class="border-hide"></span>
          </div>
          <div class="course-content-tab" data-id="live-clases">
            <span>Live Classes</span>
            <span class="border-hide"></span>
          </div>
        </div>
     <div class="course-content-container">
          <div class="course-content active" id="coach-calls">
            <div class="space"></div>
        <h1>Components of Coach calls</h1>
            
                      <h1>Free talk</h1>
            <p>The aim of this part of the call is to put the learner at ease by giving him/her the chance to talk about things they are familiar with.</p>
            <div class="space"></div>

            <h1>Feedback on assignments</h1>
            <p>The aim of this part of the call is to provide:</p>
            <ul>
              <li>Feedback on the assignment submitted: on fluency aspects such as cohesion, coherence etc.</li>
              <li>Error correction: on accuracy aspects such as grammar, vocabulary, punctuation etc.</li>
            </ul>
            <div class="space"></div>

            <h1>Mini teach</h1>
            <p>The aim of this part of the call is to:</p>
            <ul>
              <li>Improve fluency by providing input on the specific aspects of English that the learners appear to need support with</li>
              <li>Improve accuracy by providing guidance about aspects of language such as grammar, vocabulary etc.</li>
            </ul>
            <div class="space"></div>

            <h1>Input on functional language</h1>
            <p>Each call provides input for a particular speaking function such as expressing opinion, making choices etc. The aim of this part of the call is to introduce learners to phrases and vocabulary used for this speaking function.<br/>This will equip the learner to be able to speak effectively when engaged in this particular language function.</p>
            <div class="space"></div>            
            <h1>The topics are</h1>
             <div class="course-description">
              <div class="detailed-course offer active" id="course-online">

<!--       <div class="heading">Crash Course Comprehension</div>
 -->      <div class="section">
        <h3 class="title" onclick="toggleSection(this)">GENERAL ENGLISH
        <div class="arrow">
            <img src="assets/images/down-arrow.png" alt="">
          </div>
        </h3>
        <div class="content">
<!--           <h3>GRAMMAR</h3> 
 -->          <div class="two-section">
            <div class="sub-section">
             <h3>GRAMMAR</h3> 
              <div class="course-content-table-rowContent">
                <ul>
                  <li>Grammar refresher - 1: A quick refresher to basic grammar concepts</li>
                    <li>Grammar refresher - 2: A quick refresher to the parts of speech</li>
                    <li>Grammar specialisation 1: One of the parts of speech topic will be chosen based on the learner's area of improvement</li>
                    <li>Grammar specialisation 2: One of the parts of speech topic will be chosen based on the learner's area of improvement</li>
                    <li>Grammar specialisation 3: One of the parts of speech topic will be chosen based on the learner's area of improvement</li>
                    <li>Grammar specialisation 4: One of the parts of speech topic will be chosen based on the learner's area of improvement</li>
                    <li>Adjectives</li>
                    <li>Adverb of manner</li>
                    <li>Word order 1: Basic sentence structure</li>
                    <li>Word order 2: Order of adjectives</li>
                    <li>Subject verb agreement - 1</li>
                    <li>Subject verb agreement - 2</li>
                    <li>Subject verb agreement - 3</li>
                    <li>Tenses - Simple present</li>
                    <li>Tenses - Simple present continuous</li>
                    <li>Tenses - Simple past</li>
                    <li>Tenses - Simple past continuous</li>
                    <li>Tenses - Present perfect tense</li>
                    <li>Tenses - Present perfect continuous tense</li>
                    <li>Tenses - Simple future</li>
                    <li>Tenses - Future continuous</li>
                    <li>Tenses - Past perfect tense</li>
                    <li>Active voice</li>
                    <li>Passive voice</li>
                    <li>Modals</li>
                    <li>Using 0 Conditional</li>
                    <li>Using 1st conditional</li>
                    <li>Using 2nd conditional</li>
                    <li>Using 3rd conditional</li>
                </ul>
              </div>
            </div>
            <div class="sub-section">
             <h3>FUNCTIONAL LANGUAGE</h3> 
              <div class="course-content-table-rowContent">
                <ul>
                 <li>Introducing to yourself</li>
                    <li>Talking about study/work experience</li>
                    <li>Talking about hopes, dreams and ambition</li>
                    <li>Expressing Likes and dislikes</li>
                    <li>Expressing feelings and emotions</li>
                    <li>Talking about wishes, hopes & regrets</li>
                    <li>Describing - places</li>
                    <li>Describing- sequence of events</li>
                    <li>Describing - personal experiences</li>
                    <li>Describing unpredictable occurrences</li>
                    <li>Book/film review plot</li>
                    <li>Book/film describe reactions</li>
                    <li>Small talk</li>
                    <li>Asking for directions</li>
                    <li>Checking understanding</li>
                    <li>Making Enquiries while booking accommodation</li>
                    <li>Making Enquiries during travel</li>
                </ul>
              </div>
            </div>
          </div>
           <div class="two-section">
            <div class="sub-section">
             <h3>INTERVIEW SKILLS</h3> 
              <div class="course-content-table-rowContent">
                <ul>
                  <li>Interview 1 - Tell me about yourself</li>
                    <li>Interview 2 - Questions related to achievement</li>
                    <li>Interview 3 - Questions related to learning</li>
                    <li>Interview 4 - Questions related to productivity</li>
                    <li>Interview 5 - Questions related to communication</li>
                    <li>Interview 6 - Questions related to fitment</li>
                    <li>Interview 7 - Questions related to being a team player</li>
                    <li>Interview 8 - Questions related to Problems solving</li>
                    <li>Mock Interview</li>
                </ul>
              </div>
            </div>
            <div class="sub-section">
             <h3>WRITING SKILLS</h3> 
              <div class="course-content-table-rowContent">
                <ul>
                  <li>Formal & Informal letter format</li>
                    <li>Letter requesting information</li>
                    <li>Letter of application</li>
                    <li>Resume writing</li>
                    <li>Summary writing</li>
                    <li>Paraphrasing</li>
                    <li>Precis Writing</li>
                    <li>Argumentative essays</li>
                    <li>Linking words</li>
                    <li>Language in essays</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="two-section"></div>
            <div class="sub-section">
             <h3>PRONUNCIATION</h3> 
              <div class="course-content-table-rowContent">
                <ul>
                  <li>Pronunciation 1 - letter sounds based on learner's area of improvement</li>
                    <li>Pronunciation 2 - letter sounds based on learner's area of improvement</li>
                    <li>Pronunciation 3 - Accent neutralisation</li>
                    <li>Pronunciation 4 - Commonly mispronounced words</li>
                    <li>Pronunciation 5 - Using Intonation</li>
                    <li>Pronunciation 6 - Using stress</li>
                </ul>
              </div>
            </div>
          </div>
          </div>
       <div class="section">
        <h3 class="title" onclick="toggleSection(this)">WORKPLACE SKILLS
        <div class="arrow">
            <img src="assets/images/down-arrow.png" alt="">
          </div>
        </h3>
        <div class="content">
         <!--  <h3>FORMAL<br/>FUNCTIONAL<br/>LANGUAGE</h3>  -->
          <div class="two-section">
            <div class="sub-section">
             <h3>FORMAL FUNCTIONAL LANGUAGE</h3> 
              <div class="course-content-table-rowContent">
                <ul>
                 <li>Thanks & Apology</li>
                    <li>Invitations</li>
                    <li>Accepting & Declining invitations</li>
                    <li>Making requests and asking permissions</li>
                    <li>Granting requests and permission</li>
                    <li>Giving Instructions</li>
                    <li>Making complaints</li>
                </ul>
              </div>
            </div>
            <div class="sub-section">
             <h3>CONVERSATION FUNCTIONAL LANGUAGE </h3> 
              <div class="course-content-table-rowContent">
                <ul>
                <li>Giving suggestions & advice</li>
                    <li>Giving Reasons</li>
                    <li>Giving opinions</li>
                    <li>Making choices</li>
                    <li>Explaining a problem</li>
                    <li>Evaluating solutions</li>
                    <li>Asking Questions</li>
                    <li>Asking for views</li>
                    <li>Asking for clarification</li>
                </ul>
              </div>
            </div>
          </div>
           <div class="two-section">
            <div class="sub-section">
             <h3>PERSUADING</h3> 
              <div class="course-content-table-rowContent">
                <ul>
                  <li>Persuading 1 - Structure</li>
                    <li>Persuading 2 - Modes of persuasion</li>
                    <li>Persuading 3 - Language for persuasion</li>
                    <li>Persuading 4 - Using figures of speech</li>
                    <li>Persuading 5 - Useful words and phrases</li>
                    <li>Persuading 6 - Formality in interpersonal communication</li>
                </ul>
              </div>
            </div>
            <div class="sub-section">
             <h3>PRESENTATION SERIES</h3> 
              <div class="course-content-table-rowContent">
                <ul>
                   <li>Presentation 1 - Planning for a presentation</li>
                    <li>Presentation 2 - How to structure your presentation</li>
                    <li>Presentation 3 - Off to a good start</li>
                    <li>Presentation 4 - Using texts & Visuals</li>
                    <li>Presentation 5 - eye contact & voice</li>
                    <li>Presentation 6 - Body language</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="two-section"></div>
            <div class="sub-section">
             <h3>REPORT WRITING SERIES</h3> 
              <div class="course-content-table-rowContent">
                <ul>
                 <li>Report Writing 1 - Introduction to structure and report writing formats</li>
                    <li>Report Writing 2 - Report writing format - Inductive & deductive</li>
                    <li>Report writing 3 - Developing arguments</li>
                    <li>Report writing 4 - Interpreting visuals to data</li>
                    <li>Report writing 5 - Converting data into visuals</li>
                    <li>Report writing 6 - Functional language for report writing</li>
                </ul>
              </div>
            </div>
              <div class="sub-section">
             <h3>EMAIL WRITING SERIES</h3> 
              <div class="course-content-table-rowContent">
                <ul>
                 <li>Email Writing 1 - Best practices</li>
                    <li>Email writing 2 - Structure of an email</li>
                    <li>Email writing 3 - Different audiences</li>
                    <li>Email writing 4 - Phrases for different situations</li>
                    <li>Email writing 5 - Informing</li>
                    <li>Email writing 6 - Reporting past events</li>
                    <li>Email writing 7 - How to say No</li>
                    <li>Email writing 8 - Giving feedback</li>
                    <li>Email writing 9 - Allocating work</li>
                    <li>Email writing 10 - Accepting mistakes</li>
                    <li>Email writing 11 - Requesting meeting across teams</li>
                </ul>
              </div>
            </div>
          </div>
          </div>
          <div class="section">
        <h3 class="title" onclick="toggleSection(this)">ASSIGNMENTS
        <div class="arrow">
            <img src="assets/images/down-arrow.png" alt="">
          </div>
        </h3>
        <div class="content">
         <!--  <h3>FORMAL<br/>FUNCTIONAL<br/>LANGUAGE</h3>  -->
          <div class="two-section">
            <div class="sub-section">
             <!-- <h4>FORMAL<br/>FUNCTIONAL<br/>LANGUAGE</h4>  -->
              <div class="course-content-table-rowContent">
                <ul>
                   <li>Aims to provide an opportunity to put into practice what was taught during the call and consolidate learning.</li>
                <li>Offers a chance to practise speaking/writing skills.</li>
                <li>Helps learners to understand their strengths and weaknesses, as feedback on the assignment will be given during the next call.</li>
                </ul>
              </div>
            </div>
          </div>
          </div>
          </div>

        </div>
      </div>
     
    </div>
   
       
<div class="course-content" id="online-course">
      
  <div class="course-description">
    <div class="detailed-course offer active" id="course-online">
<!--       <div class="heading">Online Course Comprehension</div>
 -->      <div class="section">
        <h3 class="title" onclick="toggleSection(this)">LISTENING LESSONS
        <div class="arrow">
            <img src="assets/images/down-arrow.png" alt="">
          </div>
        </h3>
        <div class="content">
          <!-- <h3>Introducing Yourself</h3> -->
          <div class="two-section">
            <div class="sub-section">
              <!-- <h4>A1</h4> -->
              <div class="course-content-table-rowContent">
                <ul>
                 
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="section">
        <h3 class="title" onclick="toggleSection(this)">SPEAKING LESSONS
        <div class="arrow">
            <img src="assets/images/down-arrow.png" alt="">
          </div>
        </h3>
        <div class="content">
         <!--  <h3>Everyday English</h3> -->
          <div class="two-section">
            <div class="sub-section">
              <!-- <h4>A1</h4> -->
              <div class="course-content-table-rowContent">
                <ul>
                     
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="section">
        <h3 class="title" onclick="toggleSection(this)">READING LESSONS
        <div class="arrow">
            <img src="assets/images/down-arrow.png" alt="">
          </div>
        </h3>
        <div class="content">
          <!-- <h3>Being Formal</h3> -->
          <div class="two-section">
            <div class="sub-section">
              <!-- <h4>A1</h4> -->
              <div class="course-content-table-rowContent">
                <ul>
                 
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="section">
        <h3 class="title" onclick="toggleSection(this)">WRITING LESSONS
        <div class="arrow">
            <img src="assets/images/down-arrow.png" alt="">
          </div>
        </h3>
        <div class="content">
        <!--   <h3>Socialising</h3> -->
          <div class="two-section">
            <div class="sub-section">
              <!-- <h4>A1</h4> -->
              <div class="course-content-table-rowContent">
                <ul>
                  
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="section">
        <h3 class="title" onclick="toggleSection(this)">GRAMMAR LESSONS
        <div class="arrow">
            <img src="assets/images/down-arrow.png" alt="">
          </div>
        </h3>
        <div class="content">
         <!--  <h3>Everyday Transactions</h3> -->
          <div class="two-section">
            <div class="sub-section">
              <!-- <h4>A1</h4> -->
              <div class="course-content-table-rowContent">
                <ul>
                 
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
       <div class="section">
        <h3 class="title" onclick="toggleSection(this)">VOCABULARY LESSONS
        <div class="arrow">
            <img src="assets/images/down-arrow.png" alt="">
          </div>
        </h3>
        <div class="content">
         <!--  <h3>Grammar: Avoid common grammar errors in everyday communication </h3> -->
          <div class="two-section">
            <div class="sub-section">
              <!-- <h4>A1</h4> -->
              <div class="course-content-table-rowContent">
                <ul>
                
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>

     
     
    </div>
  </div>
</div>

 <div class="course-content" id="live-clases">
             <p>This course includes unlimited access to two live class series: the General English live class and the Email Writing series. In the live classes, a trainer will teach you English grammar and vocabulary concepts, or email writing, and you will be able to interact with the trainer, ask and answer questions through chat and polls. You will also complete a practice exercise to ensure that you know how to use what you learnt.</p>
            <h1>The topics are</h1>
            <p>This series of live online classes are focused on handpicked grammar and vocabulary topics which are often the source of incorrect usage.</p>
            <div class="course-description">
        <div class="detailed-course offer active" id="course-online">
<!--       <div class="heading">Live Classes Comprehension</div>
 -->      <div class="section">
        <h3 class="title" onclick="toggleSection(this)">General English
        <div class="arrow">
            <img src="assets/images/down-arrow.png" alt="">
          </div>
        </h3>
        <div class="content">
         <!--  <h3>CEFR Level</h3> -->
          <div class="two-section">
            <div class="sub-section">
              <!-- <h4>A1</h4> -->
              <div class="course-content-table-rowContent">
                <ul>
                    <li>Phrasal Verbs</li>
                    <li>Subject-Verb Agreement</li>
                    <li>Modals</li>
                    <li>Reported Speech</li>
                    <li>Learning through context</li>
                    <li>Collocations</li>
                    <li>Commonly mispronounced words</li>
                    <li>Root words</li>
                    <li>Present Perfect</li>
                    <li>Prefix-Suffix</li>
                    <li>Past Continuous</li>
                    <li>Intensity of adjectives</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
     
      <div class="section">
        <h3 class="title" onclick="toggleSection(this)">Email Writing series
        <div class="arrow">
            <img src="assets/images/down-arrow.png" alt="">
          </div>
        </h3>
        <div class="content">
         <!--  <h3>CEFR Level</h3> -->
          <div class="two-section">
            <div class="sub-section">
              <!-- <h4>A1</h4> -->
              <p>This series of live online classes will help you improve your email writing skills such as tone and language to be used, writing based on audiences etc.</p>
              <div class="course-content-table-rowContent">
                <ul>
                  <li>Email Introduction & best practices: An introduction to email, its functionality and best practices</li>
                    <li>Email structure: How to organize and structure your email for effective communication</li>
                    <li>Email for different audiences: Understanding language and tone for emails to different audiences</li>
                    <li>Email phrases for different situations: Learn handy email phrases to use in standard workplace situations</li>
                    <li>Emails for different purposes I - Informing: A detailed look at language and format to be used for emails used to provide information</li>
                    <li>Emails for different purposes II - Reporting: A detailed look at language and format to be used for emails used to report past events</li>
                    <li>Workplace Emails I - How to say No politely and giving feedback</li>
                    <li>Workplace Email II - Requesting a meeting across teams And asking for clarification</li>
                    <li>Workplace Email III - Allocating work & Accepting mistakes</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
     
    </div>
  </div>
</div>
</div>
</div>

 
  </div>
 </div>


<?php
$includeProdPageJS = true; 
include('footer.php'); ?>
<?php include('buyLoader.php'); ?>  
