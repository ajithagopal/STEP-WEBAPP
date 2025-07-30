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
          <a  href="general-communication-crash-course"  class="tab-btn active" data-target="crashcourse" data-course="course-crashcourse">Crash Course</a>
          <a  href="general-communication-unlimited" class="tab-btn" data-target="unlimited" data-course="course-unlimited">Unlimited</a>
        </nav>
      </div>
      <div class="offer-tabs-container">
        <div id="crashcourse" class="offer active">
          <div class="row outer-container">
            <div class="left-container">
              <div class="mobile-heading">
                <p>Crash Course</p>
              </div>
              <div class="left-container-content">
                <h3>This is the right course for you if you are</h3>
                <p>an adult learner who is looking to develop English language skills at your own pace and schedule with some support from trainers and classmates. You will have access to 20 hours of content online. You will also get 6 one-on-one phone lessons with a personalised trainer and the opportunity to interact with other learners and a trainer over 6 live classes.</p>
              </div>
            </div>
            <div class="right-container">
              <div class="hours-of-content">
                <h3>Hours of content </h3>
                <p>Online lessons <span> 20 hrs</span>
                </p>
                <p>Coach calls(One on one) <span> 6</span>
                </p>
                <p>Live classes <span> 6 hrs</span>
                </p>
              </div>
              <div class="offer-container">
                <form id="offerForm"> <?php 
                  foreach ($CourseDetails as $course) {
                    if ($course['product_id'] == 639 ):          
                      ?> <div class="form-group">
                    <input class="form-control coupon-number p-email" type="number" id="mobileNumber" name="number" min="1" max="10" placeholder="Enter Mobile Number" required autocomplete="tel" />
                  </div>
                  <input type="hidden" name="txtProductId" value="<?= $course['product_id'] ?>" class="data-product-id">
                  <input type="hidden" name="countryCode" value="<?= $countryCode ?>" class="country-code">
                  <div class="form-group">
                    <div class="input-group styled-input">
                      <input type="text" class="form-control coupon-input txtCoupon" id="couponCode" placeholder="Have a Coupon Code?" />
                      <button type="button" class="btn apply-btn" onclick="couponbtn('offer-container')"> APPLY </button>
                    </div>
                  </div>
                  <div class="price">
                    <p>
                      <s class="data-price"> <?= $countryCode === 'IN' ? '₹' . round($course['original_price']) : '$' . round($course['original_price_usd']) ?> </s>
                      <span class="data-offerprice"> <?= $countryCode === 'IN' ? '₹' . round($course['offer_price']) : '$' . round($course['offer_price_usd']) ?> </span>
                    </p>
                  </div>
                  <button id="submitButton" type="button" class="btn btn-success" onclick="buyybtn('offer-container')"> BUY </button> <?php
                endif;
                } ?>
                </form>
              </div>
              <!-- <div class="offer-container">
                <?php 
                  foreach ($CourseDetails as $course) {
                    if ($course['product_id'] == 639 ):          
                      ?><div id="buttons" class="coupon"><input class="coupon-number p-email" type="number"  name="number" min="1" max="10" placeholder="Enter Mobile number" required><input type="hidden" name="txtProductId" value="
                <?= $course['product_id']?>" class="data-product-id"><input type="hidden" name="countryCode" value="
                <?= $countryCode?>" class="country-code"><div class="coupon-code"><input class="coupon-input txtCoupon" type="text"  placeholder="Have a Coupon code?"><button class="apply-btn" onclick="couponbtn('offer-container')">APPLY</button></div><div class="price"><p><s class="data-offerprice">
                <?= $countryCode === 'IN' ? '₹' .round($course['original_price']) : '$' . round($course['original_price_usd']) ?></s><span class="data-price">
                <?= $countryCode === 'IN' ? '₹' .round($course['offer_price']) : '$' . round($course['offer_price_usd']) ?></span></p></div><button onclick="buyybtn('offer-container')" id="submitButton" type="button"  >BUY</button>
                <?php
                endif;
                } ?></div></div> -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="course-description">
    <div class="title">Course description</div>
    <div class="description-container">
      <p>This course consists of three components - the online course, Live classes and STEP coach calls (one-on-one phone lessons with a personalised trainer).</p>
      <div class="double-sections">
        <p class="after-border">There are 6 weekly live classes where learners can interact with the trainer and with other learners through chat and polls.The live classes will cover key elements of speaking skills i.e. phrases and vocabulary that can be used in everyday conversation.</p>
      </div>
        <div class="double-sections">
        <p class="after-border">The online course will have a series of video-based webisodes or lessons which you can take at your own pace and convenience. Each webisode focuses on reading, writing, listening, speaking, grammar or vocabulary and will be followed by a practice exercise to ensure that you know how to use what you learnt.</p>
      </div>
        <div class="double-sections">
        <p class="after-border">In the STEP coach calls, an expert English Trainer will be assigned to you as your very own English Coach! You will be able to book 6 one-on-one sessions with our expert coaches as per your convenience. During each call, an aspect of speaking in English (accent, pronunciation, intonation, etc.) will be covered. Each call will be followed with an assignment, which will provide speaking and also consolidate learning. Assignments will need to be completed and uploaded before the next call can be booked.</p>
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
            <p>
         The course includes 6 coach calls which can be scheduled as per the learner’s convenience. Each call will focus on the learner’s pronunciation skills. Each call will be followed with a speaking assignment, which will not only provide speaking practice but also consolidate learning. Assignments will need to be completed and uploaded before the next call can be booked.Learners will get personalised feedback for these speaking activities. Following this, learners will not only receive useful tips and techniques on how to improve their speaking skills but will also receive tailor-made input, based on their strengths and weaknesses, to develop their pronunciation.</p>
            <div class="space"></div>

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
        <h3 class="title" onclick="toggleSection(this)">COACH CALLS
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
                   <li>1.General introduction to course + Commonly mispronounced words</li>
                    <li>2.Feedback for assignment 1 + Sentence stress</li>
                    <li>3.Feedback for assignment 2 + Intonation</li>
                    <li>4.Feedback for assignment 3 + Accent neutralization</li>
                    <li>5.Feedback for assignment 4 + Customized pronunciation topic 1</li>
                    <li>6.Feedback for assignment 5 + Customized pronunciation topic 2</li>
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
            <p>The online course consists of a series of video-based webisodes or lessons which you can take at your own pace and convenience. Each webisode focuses on language and speaking skills for situations in everyday conversations and will be followed by a practice exercise to ensure that you know how to use what you learnt. </p>
            <div class="course-description">

        <div class="detailed-course offer active" id="course-online">                
<!--       <div class="heading">Online Course Comprehension</div>
 -->      <div class="section">
        <h3 class="title" onclick="toggleSection(this)">Unit 1
        <div class="arrow">
            <img src="assets/images/down-arrow.png" alt="">
          </div>
        </h3>
        <div class="content">
          <h3>Introducing Yourself</h3>
          <div class="two-section">
            <div class="sub-section">
              <!-- <h4>A1</h4> -->
              <div class="course-content-table-rowContent">
                <ul>
                  <li>Greetings and introductions</li>
                     <li>Habits and routines </li>
                      <li>Describe his/her family, living conditions </li>
                      <li>Describing people, places and things  </li>
                      <li>Describing personal relationships </li>
                      <li>Expressing likes and dislikes </li>
                      <li>Talking about study and work </li>
                      <li>Talking about hobbies </li>
                      <li>Talking about interests </li>
                      <li>Describe everyday aspects of their environment </li>
                      <li>Hopes, aspirations, ambitions </li>
                </ul>
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
          <h3>Everyday English</h3>
          <div class="two-section">
            <div class="sub-section">
              <!-- <h4>A1</h4> -->
              <div class="course-content-table-rowContent">
                <ul>
                   <li>Thanks and apologies </li>
                      <li>Enquiring/asking questions </li>
                      <li>Giving directions </li>
                      <li>Agree/Disagree </li>
                      <li>Explaining something </li>
                      <li>Accepting & Rejecting offers and invitations </li>
                      <li>Short, simple phone conversations </li>
                      <li>Expressing preferences </li>
                      <li>Making simple comparisons </li>
                      <li>Making simple purchases </li>
                      <li>Describing personal experiences </li>
                      <li>Expressing Opinions  </li>
                      <li>Commonly Mispronounced Words </li>
                      <li>Accent Neutralisation </li>
                      <li>Diphthongs</li>   
                       <li>Fricatives </li>
                      <li>Plosives </li>
                      <li>Intonation </li>
                      <li>Stress </li>       
                </ul>
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
          <h3>Being Formal</h3>
          <div class="two-section">
            <div class="sub-section">
              <!-- <h4>A1</h4> -->
              <div class="course-content-table-rowContent">
                <ul>
                  <li>Giving reasons and explanations </li>
                    <li>Presenting and responding to complex lines of argument </li>
                      <li>Making requests and permissions </li>
                      <li>Giving orders </li>
                      <li>Making Complaints  </li>
                      <li>Asking for and giving directions such as in a project</li>
                      <li>Answering interview questions such as "tell me about yourself" </li>
                      <li>Take initiatives in an interview </li>
                      <li>Communicating complex workplace information </li>
                      <li>Explain a viewpoint on a topical issue giving the advantages and disadvantages of various options</li>
                      <li>Make and respond to hypotheses in a formal meeting </li>
                      <li>Exchange complex information </li>
                      <li>Taking follow-up questions after a presentation </li>
                      <li>Synthesise information </li>
                      <li>Clear, systematically developed presentation </li>
                      <li>Saying 'no' politely and effectively </li>  
                       <li>Expressing what you are good and not so good at </li>
                      <li>Negotiating </li>
                      <li>Persuading </li>
                      <li>Presentations – Pre-planning </li>
                      <li>Presentations - Planning </li>
                      <li>Presentations - Off to a good start </li>
                      <li>Presentations - Using texts </li>
                      <li>Presentations - Using visuals </li>
                      <li>Presentations - Involving the audience </li>
                      <li>Presentations - Delivery: eye contact </li>
                      <li>Presentations - Delivery: posture </li> 
                       <li>Business Etiquette - Behavioural Patterns </li>
                      <li>Business Etiquette - Interaction Patterns </li>         
                </ul>
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
          <h3>Socialising</h3>
          <div class="two-section">
            <div class="sub-section">
              <!-- <h4>A1</h4> -->
              <div class="course-content-table-rowContent">
                <ul>
                   <li>Expressing feelings and emotions </li>
                      <li>Giving suggestions and advice </li>
                      <li>Making plans and arrangements </li>
                      <li>Describing weekend plans </li>
                      <li>Discuss what to do next </li>
                      <li>Exchange simple news, make plans, and arrange to meet </li>
                      <li>Short, basic descriptions of events and activities </li>
                      <li>Compare and contrast alternatives, discussing what to do, where to go, who or which to choose etc.  </li>
                      <li>Discussing and evaluating points of view </li>
                </ul>
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
          <h3>Everyday Transactions</h3>
          <div class="two-section">
            <div class="sub-section">
              <!-- <h4>A1</h4> -->
              <div class="course-content-table-rowContent">
                <ul>
                  <li>Using health services </li>
                      <li>Obtain more detailed information </li>
                      <li>State what is wrong with something </li>
                      <li>Transactions while travelling </li>
                      <li>Situations likely to arise when actually travelling, e.g. asking passenger where to get off for unfamiliar destination.  </li>
                      <li>Ask for and respond to favours </li>
                      <li>Describe his/her reactions to book or film </li>
                      <li>Details of unpredictable occurrences, e.g. an accident. </li>
                      <li>Inviting others to share their views </li>
                      <li>Ask in a shop for an explanation of the difference between two or more products in order to make a decision </li>
                      <li>Summarising and answering further questions </li>
                      <li>Establishing a relationship through sympathetic questioning </li>
                      <li>Indicating reluctance </li>            
                      <li>Appreciating the arts </li>
                      <li>Making a case for compensation </li>
                      <li>Develop an argument with justifications well enough to be followed without difficulty</li>
                      <li>Explain why something is a problem</li>
                      <li>Confirming mutual understanding</li>
                      <li>Negotiating a solution to a dispute  </li>
                </ul>
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
          <h3>Grammar: Avoid common grammar errors in everyday communication </h3>
          <div class="two-section">
            <div class="sub-section">
              <!-- <h4>A1</h4> -->
              <div class="course-content-table-rowContent">
                <ul>
                  <li>Superlative Adjectives - 1 </li>
                      <li>Superlative Adjectives - 2</li>
                      <li>Adverbs  </li>
                      <li>Position Prepositions </li>
                      <li>Subject-verb Agreement - 1 </li>
                      <li>Subject-verb Agreement - 2</li>
                      <li>Subject-verb Agreement - 3</li>
                      <li>Subject-verb Agreement - 4</li>
                      <li>Subject-verb Agreement - 5</li>
                      <li>Subject-verb Agreement - 6</li>
                      <li>Using the first conditional - While using modals </li>
                      <li>Using the first conditional - To talk about results </li>
                      <li>Using the first conditional - To give advice </li>  
                      <li>Present continuous tense </li>
                      <li>Past continuous tense </li>
                      <li>Active Voice </li>
                      <li>Passive Voice </li>
                      <li>Converting one voice to the other </li>  
                      <li>Reported Speech - Rules and form </li>
                      <li>Reported to Direct Speech </li>       
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
            <p>There are 6 weekly live classes where learners can interact with the trainer and with other learners through chat and polls.This live class series focuses on learning language that you can use for various situations in everyday communication.</p>
            <div class="course-description">
        <div class="detailed-course offer active" id="course-online">           
<!--         <div class="heading">Live Classes Comprehension</div>
 -->        <h1>The topics are</h1>
        <div class="section">
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
                     <li>1.Greetings, Introductions and Farewell</li>
                      <li>2.Typical Conversation Starters</li>
                      <li>3.Talking about likes and dislikes</li>
                      <li>4.Expressing Opinion</li>
                      <li>5. Making choices</li>
                      <li>6.Giving Reasons</li>  
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
