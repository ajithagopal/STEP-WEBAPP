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
           Competitive Exam 
          </span>
        </div>
        <div class="description">
        Courses focusing on English language skills for success in national level competitive exams: UPSC (Prelims and Mains), IBPS/Bank (PO and Clerical), SSC (CGL and CHSL), and other government exams (Insurance, CDS, etc.) 
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
          <a  href="exam-preparation-crash-course"  class="tab-btn active" data-target="crashcourse" data-course="course-crashcourse">Crash Course</a>
          <a  href="exam-preparation-unlimited" class="tab-btn" data-target="unlimited" data-course="course-unlimited">Unlimited</a>
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
                <p>An adult learner looking to develop English language skills needed for competitive exams at your own pace and schedule, without the support of trainers and classmates. You will have access to 10 hours of content online. </p>
              </div>
            </div>
            <div class="right-container">
              <div class="hours-of-content">
                <h3>Hours of content </h3>
                <p>Online lessons <span> 10 hrs</span>
                </p>
              </div>
              <div class="offer-container"> <?php 
                    foreach ($CourseDetails as $course) {
                      if ($course['product_id'] == 617 ):          
                        ?> <form id="offerForm">
                  <div class="form-group">
                    <input class="form-control coupon-number p-email" type="number" id="mobileNumber" name="number" min="1" max="10" placeholder="Enter Mobile Number" required autocomplete="tel" pattern="\d{10}" />
                  </div>
                  <input type="hidden" name="txtProductId" value="<?= $course['product_id'] ?>" class="data-product-id" />
                  <input type="hidden" name="countryCode" value="<?= $countryCode ?>" class="country-code" />
                  <div class="form-group">
                    <div class="input-group styled-input coupon-code">
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
                  <button id="submitButton" type="button" class="btn btn-success" onclick="buyybtn('offer-container')"> BUY </button>
                </form> <?php
                  endif;
                  } ?> </div>
              <!-- <div class="offer-container">
                  <?php 
                    foreach ($CourseDetails as $course) {
                      if ($course['product_id'] == 617 ):          
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
      <p> This is the ultimate online prep course for English in the civil services and bank exams. It consists of a series of video-based webisodes, or lessons, which you can take at your own pace and convenience. Each webisode focuses on language and skills required to tackle the commonly occurring question types in most competitive exams including the objective, written and spoken aspects. <br /> Reading contexts/resources are taken directly from ‘The Hindu newspaper’ which is the gold standard for competitive exams. <br /> Topics have been chosen with care to address general knowledge aspects too. </p>
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
          <div class="course-content-tab active" data-id="online-course">
            <span>Online Course</span>
            <span class="border-hide"></span>
          </div>
        </div>
       
        <div class="course-content-container">

     <div class="course-content active" id="online-course">
            <p> This is the ultimate online prep course for English in the civil services and bank exams. Each webisode focuses on language and skills required to tackle the commonly occurring question types in most competitive exams including the objective, written, and spoken aspects. Reading contexts/resources are taken directly from ‘The Hindu newspaper’ which is the gold standard for competitive exams. Topics have been chosen with care to address general knowledge aspects too. </p>
            <p> The course offers 66 lessons and progresses from the Objective, Written and finally to the Speaking elements of competitive examinations.</p>
            <p>The course offers the following types of lessons:</p>
            <div class="space"></div>
            <p>The Objective Exams units will have: </p>
            <ul>
              <li> 6 Read Better lessons </li>
              <li> 6 Write Better: “Para-jumbles” lessons </li>
              <li> 6 Write Better: Word re-ordering lesson</li>
              <li> 6 Grammar: Idioms and Phrases lessons</li>
              <li> 6 Grammar: Advanced grammar elements lessons </li>
              <li> 6 Vocabulary: Advanced words lessons </li>
              <li> 6 Vocabulary: Words from the Articles of the Indian Constitution lessons </li>
            </ul>
            <div class="space"></div>
            <p>The Written Exams units will have:</p>
            <ul>
              <li> 6 Write Better: Precis and essay-writing lessons </li>
              <li> 6 Grammar: Subject-verb agreement lessons </li>
            </ul>
            <p>The Speaking exams units will have: </p>
            <ul>
              <li> 6 Speak Better lessons </li>
              <li> 6 Listen Better lessons</li>
              <p>Each unit will have 1 Practice test module </p>
            </ul>

        <div class="detailed-course offer active" id="course-online">                
<!--       <div class="heading">Online Course Comprehension</div>
 -->      <div class="section">
        <h3 class="title" onclick="toggleSection(this)">Read Better: (6 lessons)
        <div class="arrow">
            <img src="assets/images/down-arrow.png" alt="">
          </div>
        </h3>
        <div class="content">
          <div class="two-section">
            <div class="sub-section">
              <!-- <h4>A1</h4> -->
               <p>Reading comprehension activity where the user first answers questions. This is followed by a feedback session where a trainer will take them through the steps to arrive at the correct answer. The Read Better module will contain passages related to contemporary issues, such as:</p>
              <div class="course-content-table-rowContent">
               <ul>
                <li>Environmental conventions and agreements </li>
                <li>International groupings </li>
                <li>Achievements by Indians in space</li>
                <li>New Acts or Bills passed by Parliament or pending recommendation reports</li>
                <li>Advances in biotechnology/agriculture</li>
                <li>Freedom movement activities from 1930 to 1947</li>
              </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="section">
        <h3 class="title" onclick="toggleSection(this)">Write Better: Parajumbles (6 lessons)
        <div class="arrow">
            <img src="assets/images/down-arrow.png" alt="">
          </div>
        </h3>
        <div class="content">
        <!--   <h3>Everyday English</h3> -->
          <div class="two-section">
            <div class="sub-section">
              <!-- <h4>A1</h4> -->
               <p>Learn how to solve the parajumbles by watching these webisodes. Users will first have to complete a parajumble activity. Then watch a feedback/review video (as a part of the lesson) that will go through the questions that they answer.</p>
              
            </div>
          </div>
        </div>
      </div>
      <div class="section">
        <h3 class="title" onclick="toggleSection(this)">Write Better: Word Reordering (6 lessons)
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
                  <p>Learn how to solve the word reordering questions by watching these webisodes. Users will have to complete a word-ordering activity and watch a feedback/review video (as a part of the lesson) that will go through the questions that they answer.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="section">
        <h3 class="title" onclick="toggleSection(this)">Grammar: Idioms and Phrases (6 lessons)
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
                  <p>These modules focus on the idioms and phrases needed for upper-intermediate level language learners. These lessons will show a situation where the idiom or phrase is used in a real-life situation, followed by a video where an instructor will clarify the meaning of the idiom or phrase and explain how best to use it. </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="section">
        <h3 class="title" onclick="toggleSection(this)">Grammar: Advanced Grammar Elements (6 lessons)
        <div class="arrow">
            <img src="assets/images/down-arrow.png" alt="">
          </div>
        </h3>
        <div class="content">
          <div class="two-section">
            <div class="sub-section">
              <!-- <h4>A1</h4> -->
               <p>These modules focus on the core grammar competencies needed for upper-intermediate level language learners. Additionally, the users will have a feedback/review video (as a part of the lesson) that will go through the questions that they answer. The topics covered include:</p>
              <div class="course-content-table-rowContent">
                 <ul>
                <li>Adjectives made from nouns and verbs by adding prefixes and suffixes</li>
                <li>Active voice</li>
                <li>Passive voice</li>
                <li>Converting active from passive voice and passive from active voice</li>
                <li>Reported speech</li>
                <li>Converting direct from reported speech and reported from direct speech</li>
              </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
       <div class="section">
        <h3 class="title" onclick="toggleSection(this)">Grammar: Subject-verb Agreement (6 lessons)
        <div class="arrow">
            <img src="assets/images/down-arrow.png" alt="">
          </div>
        </h3>
        <div class="content">
          <div class="two-section">
            <div class="sub-section">
              <!-- <h4>A1</h4> -->
              <div class="course-content-table-rowContent">
                  <p>These modules focus on the concept and rules of subject-verb agreement needed for upper-intermediate level language learners. Additionally, the users will have a feedback/review video (as a part of the lesson) that will go through the questions that they answer.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
       <div class="section">
        <h3 class="title" onclick="toggleSection(this)">Vocabulary (6 lessons)
        <div class="arrow">
            <img src="assets/images/down-arrow.png" alt="">
          </div>
        </h3>
        <div class="content">
          <div class="two-section">
            <div class="sub-section">
              <!-- <h4>A1</h4> -->
              <div class="course-content-table-rowContent">
                   <p>These lessons focus on the core vocabulary to be acquired by intermediate level language learners. These lessons introduce the learner to the meaning and usage of advanced vocabulary through a series of questions that the user will be required to answer.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
       <div class="section">
        <h3 class="title" onclick="toggleSection(this)">Vocabulary from the Indian Constitution (6 lessons)
        <div class="arrow">
            <img src="assets/images/down-arrow.png" alt="">
          </div>
        </h3>
        <div class="content">
          <div class="two-section">
            <div class="sub-section">
              <!-- <h4>A1</h4> -->
              <div class="course-content-table-rowContent">
                 <p>These lessons focus on the core vocabulary to be acquired by intermediate level language learners. These lessons introduce the learner to the meaning and usage of key words that are a part of the Indian Constitution through a series of questions that the user will be required to answer. </p>
              </div>
            </div>
          </div>
        </div>
      </div>
       <div class="section">
        <h3 class="title" onclick="toggleSection(this)">Write Better: Precis and Essay writing (6 lessons) 
        <div class="arrow">
            <img src="assets/images/down-arrow.png" alt="">
          </div>
        </h3>
        <div class="content">
          <div class="two-section">
            <div class="sub-section">
              <!-- <h4>A1</h4> -->
              <div class="course-content-table-rowContent">
                  <p>Hone your precis and essay writing skills by watching these webisodes. Users will get to see a writing sample, after which they will watch a video with an instructor who will take them through the process of creating the model essay. <br>Topics covered include: </p>
              <ul>
                <li>Paraphrasing </li>
                <li>Summarising</li>
                <li>Precis writing</li>
                <li>Expository and argumentative essay writing</li>
                <li>How to use linking words in essays </li>
                <li>The appropriate language to be used in essays</li>
              </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
       <div class="section">
        <h3 class="title" onclick="toggleSection(this)">Speak Better: Interview Skills (6 lessons)
        <div class="arrow">
            <img src="assets/images/down-arrow.png" alt="">
          </div>
        </h3>
        <div class="content">
          <div class="two-section">
            <div class="sub-section">
              <!-- <h4>A1</h4> -->
              <div class="course-content-table-rowContent">
                  <p>These modules focus on specific spoken language used in interviews. These modules will enable learners to develop their speaking skills, specifically in interview situations. Topics covered include:</p>
              <ul>
                <li>How to answer the, “Tell us about yourself” question </li>
                <li> How to answer the, “What are your strengths and weaknesses” question </li>
                <li>How to answer questions related to your background in an interview such as, “What qualities of yours make you a good fit for this role?” </li>
                <li>How to express your opinions clearly </li>
                <li>How to talk about the advantages and disadvantages of a particular topical issue in an interview </li>
                <li>How to build a clear presentation by highlighting significant points and relevant supporting detail </li>
              </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
          <div class="section">
        <h3 class="title" onclick="toggleSection(this)">Listen Better (6 lessons)
        <div class="arrow">
            <img src="assets/images/down-arrow.png" alt="">
          </div>
        </h3>
        <div class="content">
          <div class="two-section">
            <div class="sub-section">
              <!-- <h4>A1</h4> -->
              <div class="course-content-table-rowContent">
                   <p>Immersive lessons that will help the user to not only improve listening skills but also develop knowledge about various socioeconomic issues. </p>
              </div>
            </div>
          </div>
        </div>
      </div>
          <div class="section">
        <h3 class="title" onclick="toggleSection(this)">Practice modules
        <div class="arrow">
            <img src="assets/images/down-arrow.png" alt="">
          </div>
        </h3>
        <div class="content">
          <div class="two-section">
            <div class="sub-section">
              <!-- <h4>A1</h4> -->
              <div class="course-content-table-rowContent">
                  <p>Provide practice for various language components such as reading, listening, grammar etc.</p>
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




</div>

</div>

<?php
$includeProdPageJS = true; 
include('footer.php'); ?>
<?php include('buyLoader.php'); ?>  
