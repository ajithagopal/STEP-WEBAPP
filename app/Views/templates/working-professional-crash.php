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
          <a  href="working-professional-crash"  class="tab-btn active" data-target="crashcourse" data-course="course-crashcourse">Crash Course</a>
          <a  href="working-professional-unlimited" class="tab-btn" data-target="unlimited" data-course="course-unlimited">Unlimited</a>
        </nav>
      </div>
       <div class="offer-tabs-container">
       <div id="crashcourse" class="offer active">
        <div class="row outer-container">
          <div class="left-container">
            <div class="mobile-heading">
              <p>Crash Course</p>
            </div>
            <h3>This is the right course for you if you are</h3>
            <p>if you are a working professional who is looking to develop English language skills at your own pace and schedule with some support from trainers and classmates. You will have access to 20 hours of content online. You will get 6 one-on-one phone lessons with a personalised trainer and the opportunity to interact with other learners and a trainer over 6 live classes. </p>
          </div>
          <div class="right-container">
            <div class="hours-of-content">
              <h3>Hours of content </h3>
              <p>Online lessons<span> 20 hrs</span></p>
              <p>Coach calls(One on one)<span> 6</span></p>
              <p>Live classes<span> 6 hrs</span></p>
            </div>
            <div class="offer-container">
  <form id="offerForm">
    <?php 
      foreach ($CourseDetails as $course) {
        if ($course['product_id'] == 607 ):          
    ?>
      <div class="form-group">
        <input 
          class="form-control coupon-number p-email" 
          type="number" 
          name="number" 
          min="1" 
          max="10" 
          placeholder="Enter Mobile Number" 
          required 
          autocomplete="tel"
        />
      </div>

      <input type="hidden" name="txtProductId" value="<?= $course['product_id'] ?>" class="data-product-id">
      <input type="hidden" name="countryCode" value="<?= $countryCode ?>" class="country-code">

      <div class="form-group">
        <div class="input-group styled-input">
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

      <div class="price">
        <p>
          <s class="data-price">
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
    <?php
        endif;
      } 
    ?>  
  </form>
</div>


    <!-- <div class="offer-container">
               <?php 
              foreach ($CourseDetails as $course) {
                if ($course['product_id'] == 607 ):          
                  ?>
              <div id="buttons" class="coupon">
              <input class="coupon-number p-email" type="number"  name="number" min="1" max="10" placeholder="Enter Mobile number" required>
               <input type="hidden" name="txtProductId" value="<?= $course['product_id']?>" class="data-product-id">
                    <input type="hidden" name="countryCode" value="<?= $countryCode?>" class="country-code">
                 <div class="coupon-code">
                      <input class="coupon-input txtCoupon" type="text"  placeholder="Have a Coupon code?">
                      <button class="apply-btn" onclick="couponbtn('offer-container')">APPLY</button>
                  </div>
                <div class="price">
                 
                  <p><s class="data-offerprice"><?= $countryCode === 'IN' ? '₹' .round($course['original_price']) : '$' . round($course['original_price_usd']) ?></s> <span class="data-price"> <?= $countryCode === 'IN' ? '₹' .round($course['offer_price']) : '$' . round($course['offer_price_usd']) ?></span></p>       
                   
             </div>
             <button onclick="buyybtn('offer-container')" id="submitButton" type="button"  >BUY</button>
               <?php
             endif;
             } ?>      
           </div>
         </div> -->
          </div>
        </div>
      </div>
       </div>
    </div>
  </div>

  <div class="course-description">
    <div class="title">Course description</div>
    <div class="description-container">
      <p> Whether you are a fresher looking to understand how to crack your placements process, or you’re a seasoned workplace professional who wants to enhance your skills, this course is the right one for you. This course consists of three components – the online course, Live class and STEP coach calls (one-on-one phone lessons with a personalised trainer).</p>
      <div class="double-sections">
        <p class="after-border">  <strong>Online class:</strong> The online course consists of a series of video-based webisodes or lessons which you can take at your own pace and convenience. Each webisode focuses on language and speaking skills for various situations at the workplace.This will be followed by a practice exercise to ensure that you know how to use what you learnt.</p>
      </div>
        <div class="double-sections">
        <p class="after-border"><strong>Live classes:</strong>There are 6 weekly live classes where learners can interact with the trainer and with other learners through chat and polls.  The live classes will cover key elements of speaking skills i.e. phrases and vocabulary that can be used in everyday conversation.</p>
      </div>
        <div class="double-sections">
        <p class="after-border"><strong>Coach calls:</strong> In the coach calls, an expert English trainer will be assigned to you as your very own English Coach! You will be able to book 6 one-on-one sessions with our expert coaches as per your convenience. During each call, an aspect of speaking in English (accent, pronunciation, intonation, etc.) will be covered. Each call will be followed with an assignment, which will provide speaking and also consolidate learning. Assignments will need to be completed and uploaded before the next call can be booked.</p>
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
            <p>The course includes 6 coach calls which can be scheduled as per the learner’s convenience. In each call, you will do either a speaking or writing activity. The coach will evaluate your speaking or writing by not only correcting errors but also developing various aspects of your language abilities. </p>
            <div class="space"></div>
            <p>The 6 coach calls consist of: </p>
            <ul>
              <li>3 speaking-skill calls</li>
              <li>3 writing-skill calls </li>
            </ul>
            <div class="space"></div>
              <div class="course-description">
              <div class="detailed-course offer active" id="course-online">
<!--               <div class="heading">Crash Course Comprehension</div>
 -->            <div class="section">
              <h3 class="title" onclick="toggleSection(this)">Call Type & Description
              <div class="arrow">
                  <img src="assets/images/down-arrow.png" alt="">
                </div>
              </h3>
              <div class="content">
                 <h3>Speaking-skill calls </h3> 
                <div class="two-section">
                  <div class="sub-section">
                    <p>The speaking-skill calls comprise of various components, each of which serves specific functions </p>
                    <div class="course-content-table-rowContent">
                      <h1>Free Talk</h1>
                        <p> The aim of this part of the call is to put the learner at ease by giving him/her the chance to talk about things they are familiar with. </p>
                        <h1>Discussion </h1>
                        <p> The aim of this part of the call is to:
                        <ul>
                          <li>-build a rapport by getting the learner to talk about something that they feel passionately about or talking about opinions, views.</li>
                          <li>-allow learners to engage in an exchange of ideas in a meaningful manner.</li>
                        </ul>
                        </p>
                        <h1>Mini presentation </h1>
                        <p> The aim of this part is to:
                        <ul>
                          <li> -provide opportunity to plan and develop a short discourse by providing support through prompts. </li>
                          <li>-build the learner’s confidence by providing practice to ‘present’.</li>
                        </ul>
                        </p>
                        <h1>Mini teach</h1>
                        <p>The aim of this part is to: </p>
                        <ul>
                          <li>-provide input on the specific aspects of English that the learners appear to need support with. </li>
                          <li>-provide guidance on how to develop a particular aspect of language that appears to need improvement. </li>
                        </ul>
                        <h1>Role Play</h1>
                        <p>The aim of this part is to:</p>
                        <ul>
                          <li> - get learners to effectively use language in workplace context. </li>
                          <li>- build confidence that they can effectively use English in daily life. </li>
                        </ul>
                        <h1>Q & A</h1>
                        <p>The aim of this part is to provide the opportunity for learners to: </p>
                        <ul>
                          <li> - ask questions related to the course. </li>
                          <li> - clarify specific language doubts they may have. </li>
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
            <p>There are 6 weekly live classes where a trainer will help you improve your email writing skills such as tone and language to be used, writing based on audiences etc. You will be able to interact with the trainer, ask and answer questions through chat and polls. You will also complete a practice exercise to ensure that you know how to use what you learnt.</p>
            <div class="course-description">
        <div class="detailed-course offer active" id="course-online">           
<!--         <div class="heading">Live Classes Comprehension</div>
 -->        <h1>The topics are</h1>
        <div class="section">
          <h3 class="title" onclick="toggleSection(this)">Live classes
          <div class="arrow">
              <img src="assets/images/down-arrow.png" alt="">
            </div>
          </h3>
          <div class="content">
           <!--  <h3>CERF Level</h3> -->
            <div class="two-section">
              <div class="sub-section">
                <!-- <h4>A1</h4> -->
                <div class="course-content-table-rowContent">
                  <ul>
                      <li>1.Email Introduction & best practices: An introduction to email, its functionality and best practices</li>
                    <li>2.Email structure: How to organize and structure your email for effective communication</li>
                    <li>3.Email for different audiences: Understanding language and tone for emails to different audiences</li>
                    <li>4.Email phrases for different situations: Learn handy email phrases to use in standard workplace situations</li>
                    <li>5.Emails for different purposes I - Informing: A detailed look at language and format to be used for emails used to provide information</li>
                    <li>6.Emails for different purposes II - Reporting: A detailed look at language and format to be used for emails used to report past events</li>
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
 </div>




</div>


<?php
$includeProdPageJS = true; 
include('footer.php'); ?>

<?php include('buyLoader.php'); ?>  
