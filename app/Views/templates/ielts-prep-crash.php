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
          IELTS Preparation 
          </span>
        </div>
        <div class="description">
        A unique course focusing on the speaking section of the IELTS both the academic and general tests. 
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
          <a  href="working-professional-crash"  class="tab-btn active" data-target="crashcourse" data-course="course-crashcourse">Crash Course</a>
          <a  href="working-professional-unlimited" class="tab-btn" data-target="unlimited" data-course="course-unlimited" style="visibility: hidden;">Unlimited</a>
        </nav>
      </div>
      <div class="offer-tabs-container">
      <div id="crashcourse" class="offer active">
     <div class="row outer-container">
       <div class="left-container">
         <div class="mobile-heading">
           <p>Online</p>
         </div>
         <div class="left-container-content">
         <h3>This is the right course for you if you are</h3>
         <p>an adult learner who is looking to prepare for the Speaking section of the IELTS test. You can learn at your own pace and schedule with customised support from trainers. You will have access to over 10 hours of online content and get 31 one-on-one phone lessons with a personalised trainer. </p>
          </div>
       </div>
       <div class="right-container">
         <div class="hours-of-content">
           <h3>Hours of content </h3>
           <p>Online lessons <span> 10 hrs</span>
           </p>
           <p>Coach calls(One on one) <span> 31</span>
           </p>
         </div>
         <div class="offer-container">
           <form id="offerForm"> <?php 
              foreach ($CourseDetails as $course) {
                if ($course['product_id'] == 638 ):          
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
                if ($course['product_id'] == 638 ):          
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
<script>

    function myFunction(button) {
        const offerPrice = button.getAttribute("data-offerprice");
        document.getElementById("data-offerprice").textContent = offerPrice;

        const originalPrice = button.getAttribute("data-price");
        document.getElementById("data-price").textContent = originalPrice;

        const productId = button.getAttribute("data-product-id");
        document.getElementById("data-product-id").value = productId;
        const countryCode = button.getAttribute("country-code");
        document.getElementById("country-code").value = countryCode;
        const productName = button.getAttribute("data-title-new");
        document.getElementById("data-title-new").textContent = productName;


      document.getElementById("open").style.display = "flex";

    }
    function closeDiv(){
        document.getElementById("open").style.display = "none";
        
    }
</script>

  <div class="course-description">
    <div class="title">Course description</div>
    <div class="description-container">
    <p> This course will help you prepare for the IELTS: Speaking Test.<br /> The course has two components: online lessons and coach calls. </p>
    <div class="double-sections">
        <p class="after-border">  <strong>Online course:</strong> The online component consists of a structured series of video-based webisodes or lessons which you can take at your own pace and convenience. Some webisodes aim to help you understand the format and evaluation of each part of the IELTS Speaking test. Others focus on improving your speaking skill, pronunciation and expanding your vocabulary. </p>
      </div>
        <div class="double-sections">
        <p class="after-border">   <strong>Coach calls:</strong> The STEP coach calls need to be scheduled with one of our expert coaches. Each of these one-on-one calls focuses on practising the skills learnt in the webisodes and how to use these effectively in the IELTS: Speaking test. The calls consist of activities such as role-plays, discussions, and presentations as well speaking test practice sessions. You will receive personalised feedback from your coach to help you develop your vocabulary, pronunciation and other aspects based on your strengths and weaknesses.</p>
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
          <div class="course-content-tab active" data-id="online-course">
            <span>Course Contents</span>
            <span class="border-hide"></span>
          </div>
        </div>
       
        <div class="course-content-container">

<div class="course-content active" id="online-course">
           
  <div class="detailed-course offer active" id="course-online">                
<!--  <div class="heading">Online Course Comprehension</div>
 -->      <div class="section">
        <h3 class="title" onclick="toggleSection(this)">Introduction
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
                    <tbody>
                      <tr>
                        <td>Webisode 1</td>
                        <td> Introduction to IELTS Speaking test format <br /> Understanding the evaluation criteria <br /> Introduction to the course format IELTS: Speaking Test Introduction: Test format, Evaluation Criteria, Course Format </td>
                      </tr>
                      <tr>
                        <td>Coach call 1</td>
                        <td> Attempt a mock IELTS Speaking test Receive personalised feedback on your performance in the test </td>
                      </tr>
                      <tr>
                        <td>Assignment 1</td>
                        <td> Watch a complete IELTS Speaking test video and evaluate the candidate’s responses </td>
                      </tr>
                    </tbody>
                  </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="section">
        <h3 class="title" onclick="toggleSection(this)">Introduction to IELTS Speaking Test: Part 1
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
                    <tbody>
                      <td>Webisode</td>
                      <td>IELTS Speaking Test Part 1: format Introduction to IELTS Speaking test Part 1 format Understanding examiner expectations</td>
                      <tr>
                        <td>Coach call 2</td>
                        <td>- Attempt IELTS Speaking test part 1 questions Receive personalised feedback on your performance in the test</td>
                      </tr>
                      <tr>
                        <td>Assignment 2</td>
                        <td>- Watch an IELTS Speaking test part 1 video and evaluate the candidate’s responses</td>
                      </tr>
                      </tr>
                    </tbody>
                  </table>
              </div>
              
            </div>
          </div>
        </div>
      </div>
      <div class="section">
        <h3 class="title" onclick="toggleSection(this)"> Introducing Yourself 
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
                    <tbody>
                      <tr>
                        <td>Webisode 3</td>
                        <td>Commonly mispronounced words Learn and practise the pronunciation of words that are commonly mispronounced </td>
                      </tr>
                      <tr>
                        <td>Webisode 4</td>
                        <td>Vocabulary: Introducing yourself Learn vocabulary required to effectively introduce yourself</td>
                      </tr>
                      <tr>
                        <td>Webisode 5</td>
                        <td>Phrases: Introducing yourself Learn functional language i.e., phrases required to effectively introduce yourself</td>
                      </tr>
                      <tr>
                        <td>Coach Call 3</td>
                        <td>- Answer IELTS sample questions related to introducing yourself, using the phrases and vocabulary learnt in earlier modules Receive personalised feedback on your performance in the speaking activities</td>
                      </tr>
                    </tbody>
                  </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="section">
        <h3 class="title" onclick="toggleSection(this)">Preferences
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
                    <tbody>
                      <tr>
                        <td>Webisode 6</td>
                        <td>Diphthongs Learn and practise the pronunciation of sounds formed by the combination of two vowels like in the words coin, loud etc </td>
                      </tr>
                      <tr>
                        <td>Webisode 7</td>
                        <td>Vocabulary: Preferences Learn vocabulary required to talk about your preferences</td>
                      </tr>
                      <tr>
                        <td>Webisode 8</td>
                        <td>Phrases: Preferences Learn functional language i.e., phrases required to talk about your preferences</td>
                      </tr>
                      <tr>
                        <td>Coach Call 4</td>
                        <td>- Answer IELTS sample questions related to talking about your preferences, using the phrases and vocabulary learnt in earlier modules Receive personalised feedback on your performance in the speaking activities</td>
                      </tr>
                    </tbody>
                  </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="section">
        <h3 class="title" onclick="toggleSection(this)">Places
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
                    <tbody>
                      <tr>
                        <td>Webisode 9</td>
                        <td>Plosives Learn and practise the pronunciation of words with letters p, t, k, b, d, g </td>
                      </tr>
                      <tr>
                        <td>Webisode 10</td>
                        <td>Vocabulary: Places Learn vocabulary required to talk about your Places</td>
                      </tr>
                      <tr>
                        <td>Webisode 11</td>
                        <td>Phrases: Places Learn functional language i.e., phrases required to talk about your Places</td>
                      </tr>
                      <tr>
                        <td>Coach Call 5</td>
                        <td>- Answer IELTS sample questions related to talking about your places, using the phrases and vocabulary learnt in earlier modules Receive personalised feedback on your performance in the speaking activities</td>
                      </tr>
                    </tbody>
                  </table>
              </div>
            </div>
          </div>
        </div>
      </div>
       <div class="section">
        <h3 class="title" onclick="toggleSection(this)">Work/Study
        <div class="arrow">
            <img src="assets/images/down-arrow.png" alt="">
          </div>
        </h3>
        <div class="content">
          <div class="two-section">
            <div class="sub-section">
              <!-- <h4>A1</h4> -->
              <div class="course-content-table-rowContent">
                  <div class="course-content-table-rowContent">
                   <table>
                    <tbody>
                      <tr>
                        <td>Webisode 12</td>
                        <td>Fricatives Learn and practise the pronunciation of words with letters th, s, z, sh, zh, f and v </td>
                      </tr>
                      <tr>
                        <td>Webisode 13</td>
                        <td>Vocabulary: Work/Study Learn vocabulary required to talk about your education or work experience</td>
                      </tr>
                      <tr>
                        <td>Webisode 14</td>
                        <td>Phrases: Work/Study Learn functional language i.e., phrases required to talk about your education or work experience</td>
                      </tr>
                      <tr>
                        <td>Coach Call 6</td>
                        <td>- Answer IELTS sample questions related to talking about your work/study , using the phrases and vocabulary learnt in earlier modules Receive personalised feedback on your performance in the speaking activities</td>
                      </tr>
                    </tbody>
                  </table>
              </div>
              </div>
            </div>
          </div>
        </div>
      </div>
       <div class="section">
        <h3 class="title" onclick="toggleSection(this)"> Hobbies/Leisure Activities
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
                    <tbody>
                      <tr>
                        <td>Webisode 15</td>
                        <td>Accent neutralisation Learn and practise some pronunciation rules that will help in accent neutralisation </td>
                      </tr>
                      <tr>
                        <td>Webisode 16</td>
                        <td>Vocabulary: Leisure/Hobbies Learn vocabulary required to talk about your Leisure/Hobbies</td>
                      </tr>
                      <tr>
                        <td>Webisode 17</td>
                        <td>Phrases: Leisure/Hobbies Learn functional language i.e., phrases required to talk about your Leisure/Hobbies</td>
                      </tr>
                      <tr>
                        <td>Coach Call 7</td>
                        <td>- Answer IELTS sample questions related to talking about your Leisure/Hobbies, using the phrases and vocabulary learnt in earlier modules Receive personalised feedback on your performance in the speaking activities</td>
                      </tr>
                    </tbody>
                  </table>
              </div>
            </div>
          </div>
        </div>
      </div>
       <div class="section">
        <h3 class="title" onclick="toggleSection(this)"> Describing Personal Experience
        <div class="arrow">
            <img src="assets/images/down-arrow.png" alt="">
          </div>
        </h3>
        <div class="content">
          <div class="two-section">
            <div class="sub-section">
               <h4>Speak Better</h4> 
              <div class="course-content-table-rowContent">
                  <table>
                    <tbody>
                      <tr>
                        <td>Webisode 18</td>
                        <td>Stress Learn the importance of stress to speak effectively </td>
                      </tr>
                      <tr>
                        <td>Webisode 19</td>
                        <td>Vocabulary:Personal experience Learn vocabulary required to talk about your personal experiences</td>
                      </tr>
                      <tr>
                        <td>Webisode 20</td>
                        <td>Phrases:Personal experience Learn functional language i.e., phrases required to talk about your personal experiences</td>
                      </tr>
                      <tr>
                        <td>Coach Call 8</td>
                        <td>- Answer IELTS sample questions related to talking about your Personal experience, using the phrases and vocabulary learnt in earlier modules Receive personalised feedback on your performance in the speaking activities</td>
                      </tr>
                    </tbody>
                  </table>
              </div>
            </div>
          </div>
        </div>
      </div>
       <div class="section">
        <h3 class="title" onclick="toggleSection(this)">IELTS Speaking Test Part 1 – Practice test 
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
                    <tbody>
                      <tr>
                        <td>Webisode 18</td>
                        <td>Stress Learn the importance of stress to speak effectively </td>
                      </tr>
                      <tr>
                        <td>Webisode 19</td>
                        <td>Vocabulary:Personal experience Learn vocabulary required to talk about your personal experiences</td>
                      </tr>
                      <tr>
                        <td>Webisode 20</td>
                        <td>Phrases:Personal experience Learn functional language i.e., phrases required to talk about your personal experiences</td>
                      </tr>
                      <tr>
                        <td>Coach Call 8</td>
                        <td>- Answer IELTS sample questions related to talking about your Personal experience, using the phrases and vocabulary learnt in earlier modules Receive personalised feedback on your performance in the speaking activities</td>
                      </tr>
                    </tbody>
                  </table>
              </div>
            </div>
          </div>
        </div>
      </div>
       <div class="section">
        <h3 class="title" onclick="toggleSection(this)">IELTS Speaking Test Part 1 -Practice Test Feedback 
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
                    <tbody>
                      <tr>
                        <td>Webisode 21</td>
                        <td>Intonation Learn the importance of Intonation to speak effectively </td>
                      </tr>
                      <tr>
                        <td>Webisode 22</td>
                        <td>Model answer 1 Watch an IELTS Speaking Test part 1 speaking model answer <br/> Using the evaluation criteria, understand what makes it a good answer</td>
                      </tr>
                      <tr>
                        <td>Coach Call 9</td>
                        <td>- Attempt an IELTS Speaking Test Part 1 test Customised grammar/pronunciation lesson: teaching of a specific grammar or pronunciation topic based on what you need to improve</td>
                      </tr>
                       <tr>
                        <td>Assignment 3</td>
                        <td>-     • Listen and evaluate your responses to the practice test using the IELTS Speaking band descriptors</td>
                      </tr>
                    </tbody>
                  </table>
              </div>
            </div>
          </div>
        </div>
      </div>
          <div class="section">
        <h3 class="title" onclick="toggleSection(this)"> IELTS Speaking Test
     Part 1 -Practice Test Feedback 
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
                    <tbody>
                      <tr>
                        <td>Webisode 23</td>
                        <td>Model answer 2  •     • Watch an IELTS Speaking Test Part 1 Speaking model answer
               • Using the evaluation criteria, understand what makes it a good answer </td>
                      </tr>
                      <tr>
                        <td>Coach Call 10</td>
                        <td>    • Receive personalised feedback on your performance in the test
                 • Customised grammar/pronunciation lesson: teaching of a specific grammar or pronunciation topic based on what you need to improve </td>
                      </tr>
                      
                    </tbody>
                  </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    <div class="section">
        <h3 class="title" onclick="toggleSection(this)"> Introduction to IELTS Speaking Test: Part 2 
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
                    <tbody>
                      <tr>
                        <td>Webisode 24</td>
                        <td>IELTS Speaking Test Part 2: format  • Introduction to IELTS speaking test part 2 format
                       • Understanding examiner expectations  </td>
                      </tr>
                      <tr>
                        <td>Coach Call 11</td>
                        <td>- Attempt IELTS Speaking Test Part 2 questions Receive personalised feedback on your performance in the test  </td>
                      </tr>
                       <tr>
                        <td>Assignment 4</td>
                        <td>• Watch an IELTS Speaking Test part 2 video and evaluate the candidate’s responses  </td>
                      </tr>
                    </tbody>
                  </table>
              </div>
            </div>
          </div>
        </div>
      </div>
     <div class="section">
        <h3 class="title" onclick="toggleSection(this)"> Giving reasons 
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
                    <tbody>
                      <tr>
                        <td>Webisode 25</td>
                        <td>Idioms series I: 1
    • Enhance your vocabulary by learning new idioms such as break a leg, call it a day, cut somebody some slack, cut corners, and get out of hand </td>
                      </tr>
                       <tr>
                        <td>Webisode 26</td>
                        <td>Idioms series II: 1
    • Enhance your vocabulary by learning new idioms such as add insult to injury, barking up the wrong tree, bite off more than you can chew, break the ice, and by the skin of your teeth </td>
                      </tr>
                       <tr>
                        <td>Webisode 27</td>
                        <td>Vocabulary: Giving reasons • Learn vocabulary used when giving reasons </td>
                      </tr>
                       <tr>
                        <td>Webisode 28</td>
                        <td>Phrases: Giving reasons
    • Learn functional language i.e., phrases used when giving reasons </td>
                      </tr>
                      <tr>
                        <td>Coach Call 12</td>
                        <td>-     • Answer IELTS sample questions that require you to giving reasons using the phrases and vocabulary learnt in earlier modules
    • Receive personalised feedback on your performance in the speaking activities

                      </td>
                      </tr>
                    </tbody>
                  </table>
              </div>
            </div>
          </div>
        </div>
      </div><div class="section">
        <h3 class="title" onclick="toggleSection(this)">Grammar focus
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
                    <tbody>
                      <tr>
                        <td>Webisode 29</td>
                        <td>Idioms series I: 2
    • Enhance your vocabulary by learning new idioms such as such as a blessing in disguise, a dime a dozen, beat around the bush, better late than never, and bite the bullet
                  </td>
                      </tr>
                       <tr>
                        <td>Webisode 30</td>
                        <td>Idioms series II: 2
    • Enhance your vocabulary by learning new idioms such as such as don’t cry over spilt milk, don’t put all your eggs in one basket, every cloud has a silver lining, get a taste of your own medicine, and give someone the cold shoulder </td>
                      </tr>
                       <tr>
                        <td>Webisode 31</td>
                        <td>Idioms series II: 3
    • Enhance your vocabulary by learning new idioms such as wild-goose chase, bigger fish to fry, hit the nail on the head, ignorance is bliss, and it’s a piece of cake</td>
                      </tr>
                       <tr>
                        <td>Webisode 32</td>
                        <td>Mind-map and organise your speech
    • Learn how to develop and organise your speech using a mind-map </td>
                      </tr>
                      <tr>
                        <td>Coach Call 13</td>
                        <td>-     • Customised grammar lesson: Teaching of grammar topics based on what you need to improve</td>
                      </tr>
                    </tbody>
                  </table>
              </div>
            </div>
          </div>
        </div>
      </div><div class="section">
        <h3 class="title" onclick="toggleSection(this)">Describing personal relationships
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
                    <tbody>
                      <tr>
                        <td>Webisode 33</td>
                        <td>Idioms series I: 3
    • Enhance your vocabulary by learning new idioms such as easy does it, get something out of your system, get your act together, give someone the benefit of the doubt, and go back to the drawing board </td>
                      </tr>
                       <tr>
                        <td>Webisode 34</td>
                        <td>Idioms series II: 4
    • Enhance your vocabulary by learning new idioms such as it’s raining cats and dogs, kill two birds with one stone, let the cat out of the bag, on thin ice, and once in a blue moon
                       </td>
                      </tr>
                       <tr>
                        <td>Webisode 35</td>
                        <td>Idioms series II: 4
    • Enhance your vocabulary by learning new idioms such as it’s raining cats and dogs, kill two birds with one stone, let the cat out of the bag, on thin ice, and once in a blue moon
                  </td>
                      </tr>
                       <tr>
                        <td>Webisode 36</td>
                        <td>Phrases: Personal relationships
          • Learn functional language i.e., phrases to describe personal relationships
                 </td>
                      </tr>
                      <tr>
                        <td>Coach Call 14</td>
                        <td>-     • Answer IELTS sample questions related to talking about personal relationships using the phrases and vocabulary learnt in earlier modules
                 • Receive personalised feedback on your performance in the speaking activities</td>
                      </tr>
                    </tbody>
                  </table>
              </div>
            </div>
          </div>
        </div>
      </div><div class="section">
        <h3 class="title" onclick="toggleSection(this)">Talking about interests  
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
                    <tbody>
                      <tr>
                        <td>Webisode 37</td>
                        <td>Idioms series I: 4
    • Enhance your vocabulary by learning new idioms such as hang in there, hit the sack, it’s not rocket science, penny for your thoughts, and make a long story short
             </td>
                      </tr>
                       <tr>
                        <td>Webisode 38</td>
                        <td>Idioms series II: 5
              • Enhance your vocabulary by learning new idioms such as play devil’s advocate, put something on ice, rain on someone’s parade, saving for a rainy day and take a rain check
                     </td>
                      </tr>
                       <tr>
                        <td>Webisode 39</td>
                        <td>Vocabulary: Interests
                • Learn vocabulary used to talk about your interests 
                        </td>
                      </tr>
                       <tr>
                        <td>Webisode 40</td>
                         <td>Phrases: Interests
                  • Learn functional language i.e., phrases used to talk about  your interests
                          </td>
                      </tr>
                      <tr>
                        <td>Coach Call 15</td>
                        <td>-Phrases: Interests
                     • Learn functional language i.e., phrases used to talk about your interests
                      </td>
                      </tr>
                    </tbody>
                  </table>
              </div>
            </div>
          </div>
        </div>
      </div><div class="section">
        <h3 class="title" onclick="toggleSection(this)"> Feelings and emotions
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
                    <tbody>
                      <tr>
                        <td>Webisode 41</td>
                        <td>Idioms series I: 5
                 • Enhance your vocabulary by learning new idioms such as burn bridges, calm before the storm, come rain or shine, beat a dead horse and fan the flames
               </td>
                      </tr>
                       <tr>
                        <td>Webisode 42</td>
                        <td>Idioms series II: 6
               • Enhance your vocabulary by learning new idioms such as throw caution to the wind, you can’t have your cake and eat it too, you can’t judge a book by its cover, a snowball effect and a storm in a teacup
                        </td>
                      </tr>
                       <tr>
                        <td>Webisode 43</td>
                        <td>Vocabulary: Feelings and emotions
               • Learn vocabulary used to describe feelings and emotions
             </td>
                      </tr>
                       <tr>
                        <td>Webisode 44</td>
                        <td>Phrases: Feelings and emotions
               • Learn functional language i.e., phrases used to describe feelings and emotions
               </td>
                      </tr>
                      <tr>
                        <td>Coach Call 16</td>
                        <td>    • Answer IELTS sample questions related to talking about feelings and emotions using the phrases and vocabulary learnt in earlier modules
                • Receive personalised feedback on your performance in the speaking activities

                   </td>
                      </tr>
                    </tbody>
                  </table>
              </div>
            </div>
          </div>
        </div>
      </div><div class="section">
        <h3 class="title" onclick="toggleSection(this)">Describing people and things
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
                    <tbody>
                      <tr>
                        <td>Webisode 45</td>
                        <td>Idioms series I: 6
                • Enhance your vocabulary by learning new idioms such as under the weather, no pain, no gain, miss the boat, the best of both worlds, and wrap your head around something
                    </td>
                      </tr>
                       <tr>
                        <td>Webisode 46</td>
                        <td>Idioms series II: 7
                    • Enhance your vocabulary by learning new idioms such as take it with a grain of salt, the ball is in your court, the elephant in the room, the whole nine yards and there are other fish in the sea
              </td>
                      </tr>
                       <tr>
                        <td>Webisode 47</td>
                        <td>Vocabulary: People and things
                • Learn vocabulary used to describe people and things
              </td>
                      </tr>
                       <tr>
                        <td>Webisode 48</td>
                        <td>Phrases: People and things
                 • Learn functional language i.e., phrases to describe people and things
                      </td>
                      </tr>
                      <tr>
                        <td>Coach Call 17</td>
                        <td>    • Answer IELTS sample questions that require you to talk about people and things using the phrases and vocabulary learnt in earlier modules
                 • Receive personalised feedback on your performance in the speaking activities

                 </td>
                      </tr>
                    </tbody>
                  </table>
              </div>
            </div>
          </div>
        </div>
      </div><div class="section">
        <h3 class="title" onclick="toggleSection(this)">IELTS Speaking Test Part 2 Practice test 1
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
                    <tbody>
                      <tr>
                        <td>Webisode 49</td>
                        <td>Model answer 1
                • Watch an IELTS Speaking Test Part 2 model answer
                 • Using the evaluation criteria, understand what makes it a good answer
                </td>
                      </tr>
                      <tr>
                        <td>Coach Call 18</td>
                        <td>    • Attempt an IELTS Speaking Test Part 2 test
                  • Customised grammar lesson: teaching of a specific grammar topic based on what you need to improve


                     </td>
                      </tr>
                        <tr>
                        <td>Assignment 5</td>
                        <td>     • Listen and evaluate your responses to the practice test using the IELTS Speaking band descriptors


                      </td>
                      </tr>
                    </tbody>
                  </table>
              </div>
            </div>
          </div>
        </div>
      </div><div class="section">
        <h3 class="title" onclick="toggleSection(this)"> IELTS Speaking Test Part 2 Practice test 2
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
                    <tbody>
                      <tr>
                        <td>Webisode 50</td>
                        <td>Model answer 2 
                   • Watch an IELTS Speaking Test Part 2 model answer
                • Using the evaluation criteria, understand what makes it a good answer
                     </td>
                      </tr>                   
                      <tr>
                        <td>Coach Call 19</td>
                        <td>     • Receive personalised feedback on your performance in the test
                 • Attempt an IELTS Speaking Test Part 2 test
              </td>
                  <tr>
                        <td>Assignment 6</td>
                        <td>     • Listen and evaluate your responses to the practice test using the IELTS Speaking band descriptors
              </td>
                      </tr>
                      </tr>
                    </tbody>
                  </table>
              </div>
            </div>
          </div>
        </div>
      </div><div class="section">
        <h3 class="title" onclick="toggleSection(this)"> IELTS Speaking Test 
              Part 2 Practice test 3 Feedback
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
                    <tbody>
                      <tr>
                        <td>Webisode 51</td>
                        <td>Model answer 3
                • Watch an IELTS Speaking Test Part 2 model answer
                   • Using the evaluation criteria, understand what makes it a good answer
                       </td>
                      </tr>                   
                      <tr>
                        <td>Coach Call 20</td>
                        <td>   
                      </td>
                      </tr>
                    </tbody>
                  </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="section">
        <h3 class="title" onclick="toggleSection(this)">Part 3 Introduction to IELTS Speaking Test Part 3
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
                    <tbody>
                      <tr>
                        <td>Webisode 52</td>
                        <td>IELTS Speaking Test Part 3: format
    • Introduction to IELTS Speaking Test Part 3: format
    • Understanding examiner expectations
               </td>
                      </tr>                   
                      <tr>
                        <td>Coach Call 21</td>
                        <td>    • Attempt IELTS Speaking Test Part 3 questions 
                     • Receive personalised feedback on your performance in the test  
              </td>
                 <tr>
                        <td>Assignment 7</td>
                        <td>Watch an IELTS Speaking Test Part 3 video and evaluate candidate’s responses
               </td>
                      </tr>
                      </tr>
                    </tbody>
                  </table>
              </div>
            </div>
          </div>
        </div>
      </div>
         <div class="section">
        <h3 class="title" onclick="toggleSection(this)">Giving opinion
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
                    <tbody>
                      <tr>
                        <td>Webisode 53</td>
                        <td>Vocabulary: Giving opinions
                    • Learn vocabulary used to give opinions
                    </td>
                      </tr> 
                         <tr>
                        <td>Webisode 54</td>
                        <td> Phrases: Giving opinions
               • Learn functional language i.e., phrases used to give opinions
      </td>
                      </tr>                  
                      <tr>
                        <td>Coach Call 22</td>
                        <td>     • Answer IELTS sample questions which require you to give opinions using the phrases and vocabulary learnt in earlier modules
                   • Receive personalised feedback on your performance in the speaking activities
                  </td>

                      </tr>
                    </tbody>
                  </table>
              </div>
            </div>
          </div>
        </div>
      </div>
         <div class="section">
        <h3 class="title" onclick="toggleSection(this)">Giving suggestions/advice/recommendations
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
                    <tbody>
                      <tr>
                        <td>Webisode 55</td>
                        <td>Phrases: Giving suggestions
                  • Learn functional language i.e., phrases used to give suggestions/recommendations

        </td>
                      </tr>                   
                      <tr>
                        <td>Coach Call 23</td>
                        <td>     • Answer IELTS sample questions which require you to give suggestions/recommendations using the phrases and vocabulary learnt in earlier modules
                          • Receive personalised feedback on your performance in the speaking activities

                   </td>
                      </tr>
                    </tbody>
                  </table>
              </div>
            </div>
          </div>
        </div>
      </div>
         <div class="section">
        <h3 class="title" onclick="toggleSection(this)">Turn-taking,Asking and responding to opinions
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
                    <tbody>
                      <tr>
                        <td>Webisode 56</td>
                        <td>Vocabulary: Turn-taking, Asking and responding to opinions
          • Learn vocabulary used for turn-taking, asking and responding to opinions

              </td>
                      </tr>     
                        <tr>
                        <td>Webisode 57</td>
                        <td>Phrases: Turn-taking, Asking and responding to opinions
                 • Learn functional language i.e., phrases used for turn-taking, asking and responding to opinions

                     </td>
                      </tr>              
                      <tr>
                        <td>Coach Call 24</td>
                        <td>    • Practice asking and responding to opinions using the phrases and vocabulary learnt in earlier modules
        • Receive personalised feedback on your performance in the speaking activities

                </td>
 
                      </tr>
                    </tbody>
                  </table>
              </div>
            </div>
          </div>
        </div>
      </div>
         <div class="section">
        <h3 class="title" onclick="toggleSection(this)">IELTS Speaking Test Part 3 Practice test 1
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
                    <tbody>
                      <tr>
                        <td>Webisode 58</td>
                        <td>Model answer 1
                 • Watch an IELTS Speaking Test Part 3 model answer
                • Using the evaluation criteria, understand what makes it a good answer </td>
                      </tr>                  
                      <tr>
                        <td>Coach Call 25</td>
                        <td>    • Attempt an IELTS Speaking Test Part 3 test
                   • Customised grammar lesson: teaching of a specific grammar topic based on what you need to improve</td>
                        <tr>
                        <td>Assignment 8</td>
                        <td>    • Listen and evaluate your responses to the practice test using the IELTS Speaking band descriptors </td>
                      </tr>
                      </tr>
                    </tbody>
                  </table>
              </div>
            </div>
          </div>
        </div>
      </div>
         <div class="section">
        <h3 class="title" onclick="toggleSection(this)">IELTS Speaking Test Part 3 Practice test 2
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
                    <tbody>
                      <tr>
                        <td>Webisode 59</td>
                        <td>Model answer 2
                  • Watch an IELTS Speaking Test Part 3 model answer
             • Using the evaluation criteria, understand what makes it a good answer
                          </td>
                      </tr>                  
                      <tr>
                        <td>Coach Call 26</td>
                        <td>    • Receive personalised feedback on your performance in the test
                    • Attempt an IELTS Speaking Test Part 3 test
             </td>
                        <tr>
                        <td>Assignment 9</td>
                        <td>     • Listen and evaluate your responses to the practice test using the IELTS Speaking band descriptors
                </td>
                      </tr>
                      </tr>
                    </tbody>
                  </table>
              </div>
            </div>
          </div>
        </div>
      </div>
         <div class="section">
        <h3 class="title" onclick="toggleSection(this)">IELTS Speaking Test Part 3 Practice test 2 Feedback
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
                    <tbody>
                      <tr>
                        <td>Webisode 60</td>
                        <td>Model answer 3
                        • Watch an IELTS Speaking Test Part 3 model answer
                     • Using the evaluation criteria, understand what makes it a good answer
                   </td>
                      </tr>                  
                      <tr>
                        <td>Coach Call 27</td>
                        <td>    • Receive personalised feedback on your performance in the test
                       • Customised grammar lesson: teaching of a specific grammar or pronunciation topic based on what you need to improve
                  </td>
                       
                      </tr>
                    </tbody>
                  </table>
              </div>
            </div>
          </div>
        </div>
      </div>
         <div class="section">
        <h3 class="title" onclick="toggleSection(this)">PRACTICE TEST IELTS Speaking Test Practice Test 1
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
                    <tbody>
                      <tr>
                        <td>Webisode 60</td>
                        <td>Tips and tricks
                     • Learn tips and tricks to improve your IELTS Speaking score
                  </td>
                      </tr>                  
                      <tr>
                        <td>Coach Call 28</td>
                        <td>      • Attempt a mock IELTS Speaking test 
                 • Q and A with coach
               </td>
                        <tr>
                        <td>Assignment 10</td>
                        <td>    • Listen and evaluate your responses to the practice test using the IELTS Speaking band descriptors
             </td>
                      </tr>
                      </tr>
                    </tbody>
                  </table>
              </div>
            </div>
          </div>
        </div>
      </div>
         <div class="section">
        <h3 class="title" onclick="toggleSection(this)">IELTS Speaking Test Practice test 1- Feedback
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
                    <tbody>
                      <tr>
                        <td>Webisode 62</td>
                        <td>Online evaluation 1
                     • Practise your pronunciation by reading aloud an IELTS Speaking Test model answer
                  • Receive feedback on your pronunciation from our online evaluation tool</td>
                      </tr>                  
                      <tr>
                        <td>Coach Call 29</td>
                        <td>    • Receive personalised feedback on your performance in the test
             • Customised grammar/pronunciation lesson: teaching of a specific grammar or pronunciation topic based on what you need to improve
                 </td>
                        <tr>
                       
                      </tr>
                    </tbody>
                  </table>
              </div>
            </div>
          </div>
        </div>
      </div>
         <div class="section">
        <h3 class="title" onclick="toggleSection(this)">IELTS Speaking Test Practice test 2
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
                    <tbody>
                      <tr>
                        <td>Webisode 63</td>
                        <td>Online evaluation 2
                • Practise your pronunciation by reading aloud an IELTS Speaking Test model answer
                • Receive feedback on your pronunciation from our online evaluation tool
                   </td>
                      </tr>                  
                      <tr>
                        <td>Coach Call 30</td>
                        <td>    • Attempt a mock IELTS Speaking test
                   • Q and A with coach</td>
                        <tr>
                        <td>Assignment 11</td>
                        <td>    • Listen and evaluate your responses to the practice test using the IELTS Speaking band descriptors
                </td>
                      </tr>
                      </tr>
                    </tbody>
                  </table>
              </div>
            </div>
          </div>
        </div>
      </div>
         <div class="section">
        <h3 class="title" onclick="toggleSection(this)">IELTS Speaking Test Practice test 3 Feedback
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
                    <tbody>
                      <tr>
                        <td>Webisode 64</td>
                        <td>Online evaluation 3
                • Practise your pronunciation by reading aloud an IELTS Speaking Test model answer
                • Receive feedback on your pronunciation from our online evaluation tool

                    </td>
                      </tr>                  
                      <tr>
                        <td>Coach Call 31</td>
                        <td>     • Receive personalised feedback on your performance in the test
                     • Customised grammar/pronunciation lesson: teaching of a specific grammar or pronunciation topic based on what you need to improve</td>
                     
                      </tr>
                    </tbody>
                  </table>
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


