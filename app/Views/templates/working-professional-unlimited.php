<?php 
  include('header.php'); 
  // include('buyModal.php');
?>

<div class="product-lineup-container">
  <div class="product-category-container-bg">
    <div class="product-category-top-container">
      <div class="product-category-picture">
        <img src="assets/images/student-image.png" alt="">
      </div>
      <div class="product-content">
        <div class="title">English for
          <span class="pinkHigh">
            Working Professionals 
          </span>
        </div>
        <div class="description">
        Courses focusing on English language skills for the workplace. 
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
        <a href="general-communication-online" class="tab-btn " data-target="online" data-course="course-online" style="visibility: hidden;">Online</a> 
          <a  href="working-professional-crash"  class="tab-btn " data-target="crashcourse" data-course="course-crashcourse">Crash Course</a>
          <a  href="working-professional-unlimited" class="tab-btn active" data-target="unlimited" data-course="course-unlimited">Unlimited</a>
        </nav>
      </div>
       <div class="offer-tabs-container">
       <div id="crashcourse" class="offer active">
        <div class="row outer-container">
          <div class="left-container">
            <div class="mobile-heading">
              <p>Unlimited</p>
            </div>
            <h3>This is the right course for you if you are</h3>
            <p> A working professional who is looking to develop English language skills at your own pace and schedule with some support from trainers and classmates.You will have access to 20 hours of content online. You will get 6 one-on-one phone lessons with a personalised trainer and the opportunity to interact with other learners and a trainer over 6 live classes.</p>
          </div>
          <div class="right-container">
            <div class="hours-of-content">
              <h3>Hours of content </h3>
              <p>Online lessons<span> 20 hrs</span></p>
              <p>Coach calls(One on one)<span> Unlimited</span></p>
              <p>Live classes<span> 12 hrs</span></p>
            </div>
            <div class="offer-container">
  <?php 
    $productDetails = [
      613 => ['original_price' => 10999, 'offer_price' => 9499, 'original_price_usd' => 132, 'offer_price_usd' => 114],
      634 => ['original_price' => 21999, 'offer_price' => 12999, 'original_price_usd' => 263, 'offer_price_usd' => 156]
    ];
    foreach ($CourseDetails as $course) {
      if ($course['product_id'] == 608):
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
        <label>
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
  <?php 
      endif; 
    } 
  ?>
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
       </div>
    </div>
  </div>
 <div class="course-description">
    <div class="title">Course description</div>
    <div class="description-container">
      <p>Whether you are a fresher looking to understand how to crack your placements process, or you’re a seasoned workplace professional who wants to enhance your skills, this course is the right one for you. This course consists of three components – the online course, Live class and STEP coach calls (one-on-one phone lessons with a personalised trainer).</p>
      <div class="double-sections">
        <p class="after-border">The online course consists of a series of video-based webisodes or lessons which you can take at your own pace and convenience. Each webisode focuses on language and speaking skills for various situations at the workplace.This will be followed by a practice exercise to ensure that you know how to use what you learnt. </p>
      </div>
        <div class="double-sections">
        <p class="after-border"> In the STEP coach calls, an expert English Trainer will be assigned to you as your very own English Coach! These one-on-one calls can be booked with our expert coaches as per your convenience and during each call, an aspect of English would be covered.The 3-month unlimited course includes up to 50 calls, the 6-month unlimited course includes up to 100 calls and the 1-year unlimited course includes up to 140 calls.<br/>The topics covered in each call will be personalised to your background, requirements, and level of expertise. You will not only receive useful tips and techniques on how to improve your speaking skills but will also receive tailor-made input, based on your strengths and weaknesses, to develop your grammar and pronunciation. Each call will be followed with an assignment, which will not only provide speaking or writing practice but also consolidate learning. Assignments will need to be completed and uploaded before the next call can be booked. </p>
      </div>
        <div class="double-sections">
        <p class="after-border">This course also includes unlimited access to two live class series: the General English live class and the Email Writing series. In the live classes, a trainer will teach you English grammar and vocabulary concepts, or email writing, and you will be able to interact with the trainer, ask and answer questions through chat and polls. You will also complete a practice exercise to ensure that you know how to use what you learnt. </p>

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
       <p>The STEP coach program offers unlimited one-on-one phone interactions with a coach. Learners will not only receive useful tips and techniques on how to improve their speaking skills but will also receive personalised input, based on their strengths and weaknesses, to develop their vocabulary, grammar, and other aspects of language. The calls can focus on either speaking/writing skills based on the learner’s preference. Each call will be followed with an assignment, which will consolidate learning and provide speaking/writing practice based on the topic. Assignments will need to be completed and uploaded before the next call can be booked.</p>
            <h1>Free talk</h1>
            <p> The aim of this part of the call is to put the learner at ease by giving him/her the chance to talk about things they are familiar with. </p>
            <div class="space"></div>
            <h1>Feedback on assignments</h1>
            <p>The aim of this part of the call is to provide:</p>
            <ul>
              <li> Feedback on the assignment submitted: on fluency aspects such as cohesion, coherence etc. </li>
              <li> Error correction: on accuracy aspects such as grammar, vocabulary, punctuation etc. </li>
            </ul>
            <div class="space"></div>
            <h1>Mini teach</h1>
            <p>The aim of this part of the call is to:</p>
            <ul>
              <li> Improve fluency by providing input on the specific aspects of English that the learners appear to need support with </li>
              <li> Improve accuracy by providing guidance about aspects of language such as grammar, vocabulary etc. </li>
            </ul>
            <div class="space"></div>
            <h1>Input on functional language</h1>
            <p> Each call provides input for a particular aspect of language such as grammar, speaking skills, writing skills, workplace skills etc. The aim of this part of the call is to teach various concepts so as to improve the learners’ understanding of that particular language aspect as well as their ability to use the same into their day-to-day communication. </p>
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
          <!-- <h3>GRAMMAR</h3>  -->
          <div class="two-section">
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
             <p> The online course offers 96 modules which are split into 6 units of 16 modules as outlined below: </p>
            <div class="space"></div>
            <ul>
              <li>1 presentation-skill module</li>
              <li>1 Meetings and Discussions module</li>
              <li>1 Write Better: Emails module</li>
              <li>1 Read Better: Emails and Reports module</li>
              <li>1 Listen Better module</li>
              <li>5 Placement modules</li>
              <li>2 Grammar modules</li>
              <li>1 Vocabulary module</li>
              <li>1 Speak Better: Series (9-5 with Aryan)</li>
              <li>1 Speak Better: Series (Ananya @ Work)</li>
              <li>1 practice test</li>
            </ul>
            <div class="space"></div>
            <h1>Speak Better: Presentation (6 lessons)</h1>
            <p> These modules cover the step-by-step process for the essential workplace requirement of creating presentations. </p>
            <div class="space"></div>
            <h1>Speak better: Meetings and Discussions (6 lessons)</h1>
            <p> These modules focus on functional language and enable learners to develop their speaking skills. </p>
            <div class="space"></div>
            <h1>Write Better: Emails (6 lessons)</h1>
            <p> Hone email writing skills in the workplace by watching these webisodes. Additionally, the users will have a review video (as a part of the lesson) that will go through the questions that they answer. </p>
            <div class="space"></div>
            <h1>Read Better: Emails and Reports (6 lessons)</h1>
            <p> Wholly immersive lessons where the user answers the questions and then goes to the review video that will take them through the steps to the correct answer. </p>
            <div class="space"></div>
            <h1>Listen Better (6 lessons)</h1>
            <p> Immersive lessons depicting everyday workplace interactions that will help the user learn key listening skills. </p>
            <div class="space"></div>
            <h1>Grammar (12 lessons)</h1>
            <p> These modules focus on core grammar competencies needed for intermediate level language learners. Additionally, the users will have a review video (as a part of the lesson) that will go through the questions that they answer. </p>
            <div class="space"></div>
            <h1>Vocabulary (6 lessons)</h1>
            <p> These lessons focus on core vocabulary to be acquired by intermediate level language learners. Additionally, the users will have a review video (as a part of the lesson) that will go through the questions that they answer. </p>
            <div class="space"></div>
            <h1>Speak Better: Series (Ananya@Work)</h1>
            <p> Follow the workplace adventures of Ananya and her friends while learning functional language phrases for workplace communication. </p>
            <div class="space"></div>
            <h1>Speak Better: Series (9-5 with Aryan)</h1>
            <p> Follow the workplace adventures of Aryan and his colleagues while learning functional language phrases for workplace communication. </p>
            <div class="space"></div>
            <h1>Placement series (30 lessons)</h1>
            <p>These modules cover an array of topics useful for:</p>
            <ul>
              <li> placement process on campus, for e.g., screening process, group discussion </li>
              <li> finding jobs outside of campus placement, for e.g., understanding advertisements, applying to jobs, follow-up to job applications </li>
              <li> Interviews – body language, phone interviews, dos and don’ts during interviews </li>
              <li> Skills for job readiness - presentation, collaboration, and business etiquette </li>
            </ul>
            <div class="space"></div>
            <h1>Speak Better (12 lessons)</h1>
            <p> Improve speaking skills by learning functional language phrases for workplace communication. </p>
            <div class="space"></div>
            <h1>Practice (6 sets)</h1>
            <p> Provide practice for various language components such as reading, listening, grammar etc. </p>
            <h1>Detailed online course outline</h1>

        <div class="detailed-course offer active" id="course-online">                
<!--       <div class="heading">Online Course Comprehension</div>
 -->      <div class="section">
        <h3 class="title" onclick="toggleSection(this)">Unit 1
        <div class="arrow">
            <img src="assets/images/down-arrow.png" alt="">
          </div>
        </h3>
        <div class="content">
          <div class="two-section">
            <div class="sub-section">
              <!-- <h4>A1</h4> -->
              <div class="course-content-table-rowContent">
                 <table>
                <tr>
                  <th class="unlimitedth">Segment</th>
                  <th class="unlimitedth">Topic</th>
                  <th class="unlimitedth">Description</th>
                </tr>
                <tr>
                  <td>Speak Better: Presentations</td>
                  <td>Presentation - 1</td>
                  <td>Involving the audience </td>
                </tr>
                <tr>
                  <td>Speak Better: Meetings and Discussions</td>
                  <td>Giving reasons and explanations</td>
                  <td>Phrases to use while giving reasons and explanations</td>
                </tr>
                <tr>
                  <td>Write Better: Emails</td>
                  <td>Common phrases for emails</td>
                  <td>Common phrases used in emails</td>
                </tr>
                <tr>
                  <td>Read Better: Emails and Reports</td>
                  <td>Email: Appointment/Meetings</td>
                  <td>Learn how to read an email that is all about appointments/meetings</td>
                </tr>
                <tr>
                  <td>Listen Better</td>
                  <td>Being assertive about workload</td>
                  <td>Watch a workplace interaction between a team member who wants to talk to her boss about her excessive workload</td>
                </tr>
                <tr>
                  <td>Grammar</td>
                  <td>Reported speech</td>
                  <td>Learn more about reported speech</td>
                </tr>
                <tr>
                  <td>Vocabulary</td>
                  <td>Commonly mispronounced terms in the workplace</td>
                  <td>What are the most commonly mispronounced terms in the workplace?</td>
                </tr>
                <tr>
                  <td>Speak Better: Series</td>
                  <td>Ananya 1</td>
                  <td>Follow Ananya in an episode where we learn more about the phrases to use while expressing agreement and disagreement</td>
                </tr>
                <tr>
                  <td>Learn Strategies</td>
                  <td>Campus placement processes</td>
                  <td>The screening process done during campus placement</td>
                </tr>
                <tr>
                  <td>Learn Strategies</td>
                  <td>How to find jobs outside of campus placement</td>
                  <td>Other avenues to look for job advertisements</td>
                </tr>
                <tr>
                  <td>Learn Strategies</td>
                  <td>Decoding a job posting</td>
                  <td>How to understand a job advertisement</td>
                </tr>
                <tr>
                  <td>Learn Strategies</td>
                  <td>How to research employers and industry</td>
                  <td>Different ways to know more about the company</td>
                </tr>
                <tr>
                  <td>Learn Strategies</td>
                  <td>Email - 1</td>
                  <td>Introduction to emails</td>
                </tr>
                <tr>
                  <td>Grammar</td>
                  <td>Verbs</td>
                  <td>An introduction to verbs</td>
                </tr>
                <tr>
                  <td>Speak Better</td>
                  <td>Discussing habits and routines</td>
                  <td>Phrases used while discussing habits and routines</td>
                </tr>
                <tr>
                  <td>Speak Better - Series</td>
                  <td>9-5 with Aryan - Travel Experience</td>
                  <td>Follow Aryan in an episode where we learn more about the phrases to use to describe places</td>
                </tr>
              </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="section">
        <h3 class="title" onclick="toggleSection(this)">Unit 2
        <div class="arrow">
            <img src="assets/images/down-arrow.png" alt="">
          </div>
        </h3>
        <div class="content">
        <!--   <h3>Everyday English</h3> -->
          <div class="two-section">
            <div class="sub-section">
              <!-- <h4>A1</h4> -->
              <div class="course-content-table-rowContent">
                <table>
                  <tr>
                    <th class="unlimitedth">Segment</th>
                    <th class="unlimitedth">Topic</th>
                    <th class="unlimitedth">Description</th>
                  </tr>
                  <tr>
                    <td>Speak Better: Presentations</td>
                    <td>Presentation - 2</td>
                    <td>Off to a good start</td>
                  </tr>
                  <tr>
                    <td>Speak Better: Meetings and Discussions</td>
                    <td>Expressing opinions</td>
                    <td>Phrases to use while expressing opinions</td>
                  </tr>
                  <tr>
                    <td>Write Better: Emails</td>
                    <td>Email structure</td>
                    <td>Learn to structure your emails more effectively</td>
                  </tr>
                  <tr>
                    <td>Read Better: Emails and Reports</td>
                    <td>Email: Giving instructions</td>
                    <td>Learn how to read an email that is all about giving instructions</td>
                  </tr>
                  <tr>
                    <td>Listen Better</td>
                    <td>Commiserating with colleague after being yelled at by boss</td>
                    <td>Watch a workplace interaction between two colleagues who discuss the actions of their boss who told off one of them for not informing about taking sick leave</td>
                  </tr>
                  <tr>
                    <td>Grammar</td>
                    <td>Subject-verb agreement</td>
                    <td>Rules of subject-verb agreement: Using indefinite pronouns</td>
                  </tr>
                  <tr>
                    <td>Vocabulary</td>
                    <td>Starting a business</td>
                    <td>Phrases used while starting a business</td>
                  </tr>
                  <tr>
                    <td>Speak Better: Series</td>
                    <td>Ananya 2</td>
                    <td>Follow Ananya in an episode where we learn more about the phrases to use while discussing plans</td>
                  </tr>
                  <tr>
                    <td>Learn Strategies</td>
                    <td>Email - 2</td>
                    <td>Applying for a job/following up with a prospective employer</td>
                  </tr>
                  <tr>
                    <td>Learn Strategies</td>
                    <td>Email - 3</td>
                    <td>Accepting/rejecting a job offer</td>
                  </tr>
                  <tr>
                    <td>Learn Strategies</td>
                    <td>Interview - 1</td>
                    <td>Understanding the various directions</td>
                  </tr>
                  <tr>
                    <td>Learn Strategies</td>
                    <td>Interview - 2</td>
                    <td>How to present - Learning</td>
                  </tr>
                  <tr>
                    <td>Learn Strategies</td>
                    <td>Interview - 3</td>
                    <td>How to present - Achievement</td>
                  </tr>
                  <tr>
                    <td>Grammar</td>
                    <td>Verb - to be</td>
                    <td>An introduction to the verb – to be</td>
                  </tr>
                  <tr>
                    <td>Speak Better</td>
                    <td>Giving advice to a friend who keeps quitting job</td>
                    <td>Phrases used while giving advice</td>
                  </tr>
                  <tr>
                    <td>Speak Better - Series</td>
                    <td>9-5 with Aryan - Office Gossip</td>
                    <td>Follow Aryan in an episode where we learn more about the phrases to use while describing past experiences</td>
                  </tr>
                  </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="section">
        <h3 class="title" onclick="toggleSection(this)">Unit 3
        <div class="arrow">
            <img src="assets/images/down-arrow.png" alt="">
          </div>
        </h3>
        <div class="content">
        <!--   <h3>Being Formal</h3> -->
          <div class="two-section">
            <div class="sub-section">
              <!-- <h4>A1</h4> -->
              <div class="course-content-table-rowContent">
                <table>
                  <tr>
                    <th class="unlimitedth">Segment</th>
                    <th class="unlimitedth">Topic</th>
                    <th class="unlimitedth">Description</th>
                  </tr>
                  <tr>
                    <td>Speak Better: Presentations</td>
                    <td>Presentation - 4</td>
                    <td>Using visuals</td>
                  </tr>
                  <tr>
                    <td>Speak Better: Meetings and Discussions</td>
                    <td>How to say no politely and effectively</td>
                    <td>Phrases to use when saying ‘no’ politely, but effectively</td>
                  </tr>
                  <tr>
                    <td>Write Better: Emails</td>
                    <td>Email - tone</td>
                    <td>What is the correct tone to use in emails?</td>
                  </tr>
                  <tr>
                    <td>Read Better: Emails and Reports</td>
                    <td>Report: Employee performance review</td>
                    <td>Learn how to read an employee performance review</td>
                  </tr>
                  <tr>
                    <td>Listen Better</td>
                    <td>Talking to boss about unreasonable manager</td>
                    <td>Watch a workplace interaction where a team member is in an uncomfortable position of having to talk about her team leader to her boss</td>
                  </tr>
                  <tr>
                    <td>Grammar</td>
                    <td>Subject-verb agreement</td>
                    <td>Rules of subject-verb agreement: · Percentages, fractions, and indefinite qualifiers · Using the words ‘majority’ or ‘minority’ · Nouns such as ‘jeans’, ‘scissors’, ‘shorts’, ‘pants’, ‘tweezers’ etc.</td>
                  </tr>
                  <tr>
                    <td>Vocabulary</td>
                    <td>Business Jargon</td>
                    <td>Business jargon</td>
                  </tr>
                  <tr>
                    <td>Speak Better: Series</td>
                    <td>Ananya 4</td>
                    <td>Follow Ananya in an episode where we learn more about the phrases to use while expressing attitudes and feelings precisely</td>
                  </tr>
                  <tr>
                    <td>Learn Strategies</td>
                    <td>Body language</td>
                    <td>Dos and don'ts during an interview</td>
                  </tr>
                  <tr>
                    <td>Learn Strategies</td>
                    <td>Phone interviews</td>
                    <td>Dos and don’ts during a phone interview</td>
                  </tr>
                  <tr>
                    <td>Learn Strategies</td>
                    <td>Upskilling yourself</td>
                    <td>How to develop new skills that you require for the job</td>
                  </tr>
                  <tr>
                    <td>Learn Strategies</td>
                    <td>Argumentative essay writing</td>
                    <td>Structure and connectors to be used in an argumentative essay</td>
                  </tr>
                  <tr>
                    <td>Learn Strategies</td>
                    <td>Descriptive essay writing</td>
                    <td>How to structure a descriptive essay</td>
                  </tr>
                  <tr>
                    <td>Grammar</td>
                    <td>Prepositions</td>
                    <td>An introduction to prepositions</td>
                  </tr>
                  <tr>
                    <td>Speak Better</td>
                    <td>Inviting a friend to a dance performance</td>
                    <td>Phrases to use when we extend an invitation</td>
                  </tr>
                  <tr>
                    <td>Speak Better - Series</td>
                    <td>9-5 with Aryan - Colleague's dismissal</td>
                    <td>Follow Aryan in an episode where we learn more about the phrases to use while expressing opinions</td>
                  </tr>
                  </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="section">
        <h3 class="title" onclick="toggleSection(this)">Unit 4
        <div class="arrow">
            <img src="assets/images/down-arrow.png" alt="">
          </div>
        </h3>
        <div class="content">
          <!-- <h3>Socialising</h3> -->
          <div class="two-section">
            <div class="sub-section">
              <!-- <h4>A1</h4> -->
              <div class="course-content-table-rowContent">
                <table>
                  <tr>
                    <th class="unlimitedth">Segment</th>
                    <th class="unlimitedth">Topic</th>
                    <th class="unlimitedth">Description</th>
                  </tr>
                  <tr>
                    <td>Speak Better: Presentations</td>
                    <td>Presentation - 4</td>
                    <td>Using visuals</td>
                  </tr>
                  <tr>
                    <td>Speak Better: Meetings and Discussions</td>
                    <td>How to say no politely and effectively</td>
                    <td>Phrases to use when saying ‘no’ politely, but effectively</td>
                  </tr>
                  <tr>
                    <td>Write Better: Emails</td>
                    <td>Email - tone</td>
                    <td>What is the correct tone to use in emails?</td>
                  </tr>
                  <tr>
                    <td>Read Better: Emails and Reports</td>
                    <td>Report: Employee performance review</td>
                    <td>Learn how to read an employee performance review</td>
                  </tr>
                  <tr>
                    <td>Listen Better</td>
                    <td>Talking to boss about unreasonable manager</td>
                    <td>Watch a workplace interaction where a team member is in an uncomfortable position of having to talk about her team leader to her boss</td>
                  </tr>
                  <tr>
                    <td>Grammar</td>
                    <td>Subject-verb agreement</td>
                    <td>Rules of subject-verb agreement: · Percentages, fractions, and indefinite qualifiers · Using the words ‘majority’ or ‘minority’ · Nouns such as ‘jeans’, ‘scissors’, ‘shorts’, ‘pants’, ‘tweezers’ etc.</td>
                  </tr>
                  <tr>
                    <td>Vocabulary</td>
                    <td>Business Jargon</td>
                    <td>Business jargon</td>
                  </tr>
                  <tr>
                    <td>Speak Better: Series</td>
                    <td>Ananya 4</td>
                    <td>Follow Ananya in an episode where we learn more about the phrases to use while expressing attitudes and feelings precisely</td>
                  </tr>
                  <tr>
                    <td>Learn Strategies</td>
                    <td>Body language</td>
                    <td>Dos and don'ts during an interview</td>
                  </tr>
                  <tr>
                    <td>Learn Strategies</td>
                    <td>Phone interviews</td>
                    <td>Dos and don’ts during a phone interview</td>
                  </tr>
                  <tr>
                    <td>Learn Strategies</td>
                    <td>Upskilling yourself</td>
                    <td>How to develop new skills that you require for the job</td>
                  </tr>
                  <tr>
                    <td>Learn Strategies</td>
                    <td>Argumentative essay writing</td>
                    <td>Structure and connectors to be used in an argumentative essay</td>
                  </tr>
                  <tr>
                    <td>Learn Strategies</td>
                    <td>Descriptive essay writing</td>
                    <td>How to structure a descriptive essay</td>
                  </tr>
                  <tr>
                    <td>Grammar</td>
                    <td>Prepositions</td>
                    <td>An introduction to prepositions</td>
                  </tr>
                  <tr>
                    <td>Speak Better</td>
                    <td>Inviting a friend to a dance performance</td>
                    <td>Phrases to use when we extend an invitation</td>
                  </tr>
                  <tr>
                    <td>Speak Better - Series</td>
                    <td>9-5 with Aryan - Colleague's dismissal</td>
                    <td>Follow Aryan in an episode where we learn more about the phrases to use while expressing opinions</td>
                  </tr>
                  </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="section">
        <h3 class="title" onclick="toggleSection(this)">Unit 5
        <div class="arrow">
            <img src="assets/images/down-arrow.png" alt="">
          </div>
        </h3>
        <div class="content">
          <div class="two-section">
            <div class="sub-section">
              <!-- <h4>A1</h4> -->
              <div class="course-content-table-rowContent">
                <table>
                  <tr>
                    <th>Segment</th>
                    <th>Topic</th>
                    <th>Description</th>
                  </tr>
                  <tr>
                    <td>Speak Better: Presentations</td>
                    <td>Presentation - 5</td>
                    <td>Delivery: Eye contact and voice</td>
                  </tr>
                  <tr>
                    <td>Speak Better: Meetings and Discussions</td>
                    <td>Negotiation</td>
                    <td>Phrases to use while negotiating</td>
                  </tr>
                  <tr>
                    <td>Write Better: Emails</td>
                    <td>Email - audience</td>
                    <td>Do different recipients require different emails? Learn more</td>
                  </tr>
                  <tr>
                    <td>Read Better: Emails and Reports</td>
                    <td>Report: Project proposal</td>
                    <td>Learn how to read a project proposal</td>
                  </tr>
                  <tr>
                    <td>Listen Better</td>
                    <td>Telling trainee to do better, work-wise</td>
                    <td>Watch a workplace interaction where a team member talks to a trainee about showing initiative for projects that she likes in the workplace</td>
                  </tr>
                  <tr>
                    <td>Grammar</td>
                    <td>Mixed conditionals</td>
                    <td>An introduction to the modals ‘may’ and ‘might’</td>
                  </tr>
                  <tr>
                    <td>Vocabulary</td>
                    <td>Financial terms</td>
                    <td>Financial terms</td>
                  </tr>
                  <tr>
                    <td>Speak Better: Series</td>
                    <td>Ananya 5</td>
                    <td>Follow Ananya in an episode where we learn more about the phrases to use to express certainty, probability and doubt</td>
                  </tr>
                  <tr>
                    <td>Learn Strategies</td>
                    <td>Presentation - 1</td>
                    <td>Pre-planning</td>
                  </tr>
                  <tr>
                    <td>Learn Strategies</td>
                    <td>Presentation - 2</td>
                    <td>Planning</td>
                  </tr>
                  <tr>
                    <td>Learn Strategies</td>
                    <td>Presentation - 3</td>
                    <td>Off to a good start</td>
                  </tr>
                  <tr>
                    <td>Learn Strategies</td>
                    <td>Presentation - 4</td>
                    <td>Using texts</td>
                  </tr>
                  <tr>
                    <td>Learn Strategies</td>
                    <td>Presentation - 5</td>
                    <td>Using visuals</td>
                  </tr>
                  <tr>
                    <td>Grammar</td>
                    <td>Modals - May, might</td>
                    <td>An introduction to the modals ‘may’ and ‘might’</td>
                  </tr>
                  <tr>
                    <td>Speak Better</td>
                    <td>Making suggestions about choosing an elective</td>
                    <td>Phrases to use while making suggestions</td>
                  </tr>
                  <tr>
                    <td>Speak Better - Series</td>
                    <td>9-5 with Aryan - People Management</td>
                    <td>Follow Aryan in an episode where we learn more about the phrases to use while expressing agreement/ disagreement</td>
                  </tr>
                  </table>
              </div>
            </div>
          </div>
        </div>
      </div>
       <div class="section">
        <h3 class="title" onclick="toggleSection(this)">Unit 6
        <div class="arrow">
            <img src="assets/images/down-arrow.png" alt="">
          </div>
        </h3>
        <div class="content">
          <div class="two-section">
            <div class="sub-section">
              <!-- <h4>A1</h4> -->
              <div class="course-content-table-rowContent">
                <table>
                  <tr>
                    <th class="unlimitedth">Segment</th>
                    <th class="unlimitedth">Topic</th>
                    <th class="unlimitedth">Description</th>
                  </tr>
                  <tr>
                    <td>Speak Better: Presentations</td>
                    <td>Presentation - 6</td>
                    <td>Delivery: Posture</td>
                  </tr>
                  <tr>
                    <td>Speak Better: Meetings and Discussions</td>
                    <td>Giving feedback</td>
                    <td>Phrases to use while giving feedback </td>
                  </tr>
                  <tr>
                    <td>Write Better: Emails</td>
                    <td>Email Conduct</td>
                    <td>The dos and don’ts in email writing </td>
                  </tr>
                  <tr>
                    <td>Read Better: Emails and Reports</td>
                    <td>Report: Annual performance report </td>
                    <td> Read Better: Emails and Reports Report: Annual performance report Learn how to read an annual performance report </td>
                  </tr>
                  <tr>
                    <td>Listen Better</td>
                    <td>Expressing frustration with boss without going overboard </td>
                    <td>Watch a workplace interaction between two colleagues who discuss why their boss lost his temper with one of them</td>
                  </tr>
                  <tr>
                    <td>Grammar</td>
                    <td>Negative adverbials</td>
                    <td>How do we construct simple sentences</td>
                  </tr>
                  <tr>
                    <td>Vocabulary</td>
                    <td>Prefix/Suffix </td>
                    <td>What are prefixes and suffixes?</td>
                  </tr>
                  <tr>
                    <td>Speak Better: Series</td>
                    <td>Ananya 6</td>
                    <td>Follow Ananya in an episode where we learn more about the phrases to use while speculating and hypothesising about causes, consequences and responding to counterarguments</td>
                  </tr>
                  <tr>
                    <td>Learn Strategies</td>
                    <td>Presentation - 6 </td>
                    <td>Involving the audience</td>
                  </tr>
                  <tr>
                    <td>Learn Strategies</td>
                    <td>Presentation - 7 </td>
                    <td>Delivery: eye contact and voice  </td>
                  </tr>
                  <tr>
                    <td>Learn Strategies</td>
                    <td>Presentation - 8 </td>
                    <td>Delivery: posture  </td>
                  </tr>
                  <tr>
                    <td>Learn Strategies</td>
                    <td>Business Etiquette I</td>
                    <td>Behavioral Patterns  </td>
                  </tr>
                  <tr>
                    <td>Learn Strategies</td>
                    <td>Business Etiquette II  </td>
                    <td>Interaction Patterns </td>
                  </tr>
                  <tr>
                    <td>Grammar</td>
                    <td>Simple Sentences</td>
                    <td>How do we construct simple sentences</td>
                  </tr>
                  <tr>
                    <td>Speak Better</td>
                    <td>Requesting the professor for permission</td>
                    <td>Phrases to use while making requests/requesting</td>
                  </tr>
                  <tr>
                    <td>Speak Better - Series</td>
                    <td>9-5 with Aryan - Movie Day</td>
                    <td>Follow Aryan in an episode where we learn more about the phrases to use while talking about films and books</td>
                  </tr>
                  </table>
              </div>
            </div>
          </div>
        </div>
      </div>
     
    </div>
     </div>

 <div class="course-content" id="live-clases">
             <p> This course includes unlimited access to two live class series: the General English live class and the Email Writing series. In the live classes, a trainer will teach you English grammar and vocabulary concepts, or email writing, and you will be able to interact with the trainer, ask and answer questions through chat and polls. You will also complete a practice exercise to ensure that you know how to use what you learnt. </p>
            <h1>The topics are</h1>
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
               <p> This series of live online classes are focused on handpicked grammar and vocabulary topics which are often the source of incorrect usage. </p>
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

