<?php
include('header.php');
// include('buyModal.php');
?>


<div class="product-lineup-container">
  <!-- <h1>English for</h1>
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
          <a href="general-communication-online" class="tab-btn active" data-target="online" data-course="course-online">Online</a>
          <a  href="general-communication-crash-course"  class="tab-btn" data-target="crashcourse" data-course="course-crashcourse">Crash Course</a>
          <a  href="general-communication-unlimited" class="tab-btn" data-target="unlimited" data-course="course-unlimited">Unlimited</a>
        </nav>
      </div>
      <div class="offer-tabs-container">
        <div id="online" class="offer active">
          <div class="row outer-container">
            <div class="left-container">
              <div class="mobile-heading">
                <p>Online</p>
              </div>
              <div class="left-container-content">
                <h3>This is the right course for you</h3>
                <p>If you are an adult learner who is looking to develop English language skills independently at your own pace and schedule, and don’t require the support of trainers or classmates.</p>
              </div>
            </div>
            <div class="right-container">
              <div class="hours-of-content">
                <h3>Hours of content </h3>
                <p>Online lessons <span> 40 hrs</span>
                </p>
                <p>Coach calls(One on one) <span> None</span>
                </p>
                <p>Live classes <span> None</span>
                </p>
              </div>
              <div class="offer-container">
                <form id="offerForm"> <?php 
                    foreach ($CourseDetails as $course) {
                      if ($course['product_id'] == 600 ):          
                        ?> <div class="form-group">
                    <input class="form-control coupon-number p-email" type="number" id="mobileNumber" name="number" min="1" max="10" placeholder="Enter Mobile Number" required autocomplete="tel" pattern="\d{10}" />
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
                  <button id="submitButton" type="button" class="btn btn-success" onclick="buyybtn('offer-container')"> BUY </button> 
                  <?php
                          endif;
                          } ?>
                </form>
              </div>
              <!-- <div class="offer-container">
                  <?php 
                    foreach ($CourseDetails as $course) {
                      if ($course['product_id'] == 600 ):          
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
      <p>This adaptive course has a series of video-based webisodes or lessons which you can take at your own pace and convenience. Each webisode focuses on reading, writing, listening, speaking, grammar or vocabulary and will be followed by a practice exercise to ensure that you know how to use what you learnt.</p>
      <div class="double-sections">
        <p class="after-border">You will take a test before you start the course, based on which your course will be designed for you and certain webisodes will be highlighted as ‘Recommended’.</p>
        <p>You will also take a test halfway through the course to see your progress. At the end of the course, you will have to take a certification test to earn a prestigious certificate from The Hindu Group.</p>
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
        <span>Online Course</span>
        <span class="border-hide"></span>
      </div>
    </div>

     <div class="course-content-container">
  <div class="course-content active" id="online-course">
   <div class="detailed-course offer active" id="course-online">
<!--       <div class="heading">Online Course Comprehension</div>
 -->      <div class="section">
        <h3 class="title" onclick="toggleSection(this)">Listening lessons
        <div class="arrow">
            <img src="assets/images/down-arrow.png" alt="">
          </div>
        </h3>
        <div class="content">
          <h3>CEFR Level</h3>
          <div class="two-section">
            <div class="sub-section">
              <h4>A1</h4>
              <div class="course-content-table-rowContent">
                <ul>
                  <li>A person describing themselves </li>
                  <li>A person introducing themselves to others </li>
                  <li>A talk about the location of things .</li>
                  <li>A talk about our surroundings .</li>
                  <li>An announcement about figures and prices </li>
                  <li>Travel Announcement </li>
                  <li>Giving careful instructions</li>
                  <li>A call to the hospital </li>
                  <li>A family discussion </li>
                  <li>Talking about colleges </li>
                  <li>A conversation between friends</li>
                  <li>A conversation about time </li>
                  <li>Travel tips.</li>
                </ul>
              </div>
            </div>
            <div class="sub-section">
              <h4>A2</h4>
              <div class="course-content-table-rowContent">
                <ul>
                  <li>A talk with a travel agent</li>
                  <li>A guide at a tourist location </li>
                  <li>A presentation</li>
                  <li>A specialist's talk.</li>
                  <li>A TV advertisement.</li>
                  <li>Discussing plans </li>
                  <li>Giving Explanations </li>
                  <li>An interview on hobbies </li>
                  <li>A discussion about the office party .</li>
                  <li>A conversation about some office news </li>
                  <li>A conversation about some office news </li>
                  <li>A conversation about a meeting at the office .</li>
                  <li>A conversation about project reports </li>
                  <li>A conversation about the office sports event </li>
                  <li>A discussion about a place .</li>
                  <li>A radio interview </li>
                  <li>Giving directions </li>
                  <li>A radio announcement
                  </li>
                  <li>Information about a place </li>
                  <li>A short conversation about a job </li>
                  <li>Instructions on times and dates </li>
                  <li>Cancelling plans.</li>
                  <li>Supermarket announcement </li>
                  <li>A talk about hobbies </li>
                  <li>Sports announcements .</li>
                  <li>Cinema programme on the radio </li>
                  <li>An advertisement on the radio </li>
                  <li>Talk about routine tasks </li>
                  <li>Talk about daily routines </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="two-section">
            <div class="sub-section">
              <h4>B1</h4>
              <div class="course-content-table-rowContent">
                <ul>
                  <li>Strategies to listen better - Part 1 </li>
                  <li>Strategies to listen better - Part 2 </li>
                  <li>Announcements on the plane </li>
                  <li>Announcements on the metro</li>
                  <li>A radio announcement</li>
                  <li>A phone conversation </li>
                  <li>A phone conversation with a service provider </li>
                  <li>A conversation about a missing pet .</li>
                  <li>A discussion on scooters.</li>
                  <li>A conversation with a new friend </li>
                  <li>A conversation while waiting in a queue </li>
                  <li>Consoling a friend .</li>
                  <li>Rescheduling an appointment .</li>
                  <li>Organising a party</li>
                  <li>A conversation at a train station .</li>
                  <li>A talk about the Rann Utsav</li>
                  <li>A conversation about TV programmes</li>
                  <li>Giving technical instructions</li>
                  <li>Instructions on operating a camera</li>
                  <li>Expressing feelings</li>
                  <li>A news bulletin on the radio</li>
                  <li>A talk on hobbies</li>
                  <li>Expressing concern for a friend</li>
                  <li>A travel experience</li>
                  <li>A discussion on food and health</li>
                  <li>A conversation about renting an apartment</li>
                  <li>A talk on staying motivated at work</li>
                  <li>A conversation at the supermarket</li>
                  <li>A conversation at a studio</li>
                  <li>A discussion at a restaurant</li>
                  <li>A conversation about exercise</li>
                  <li>Arranging a team outing</li>
                  <li>Apologising to the manager</li>
                  <li>A conversation with the boss about leave</li>
                  <li>A conversation about better work performance</li>
                </ul>
              </div>
            </div>
            <div class="sub-section">
              <h4>B2</h4>
              <div class="course-content-table-rowContent">
                <ul>
                  <li>Active Listening .</li>
                  <li>A public service announcement </li>
                  <li>A conversation about a vacation </li>
                  <li>A conversation in an apartment </li>
                  <li>A story </li>
                  <li>A conversation about dealing with disappointment</li>
                  <li>An argument with an acquaintance</li>
                  <li>A conversation about being assertive</li>
                  <li>Mediating an argument between friends</li>
                  <li>A conversation about using social media</li>
                  <li>A conversation about grocery shopping</li>

                  <li>A talk on the Taj Mahal</li>
                  <li>An interview with a singer</li>
                  <li>A talk show</li>

                  <li>Arranging a team outing</li>
                  <li>Consoling a colleague</li>

                  <li>A conversation with the manager about a project</li>
                  <li>A conversation about the workload</li>
                  <li>A conversation about missing deadlines at work</li>
                  <li>Giving feedback to a colleague</li>
                  <li>An argument about sharing workspace in the office</li>
                  <li>A conversation about using office resources</li>
                  <li>A conversation about missing a meeting at work</li>
                  <li>Asking permission to not attend a meeting</li>
                  <li>Making a successful sale</li>
                  <li>Pitching a product to an eager client</li>
                  <li>Pitching a product to a client who is not the <br>decision-maker</li>
                  <li>Inferring a client's lack of interest</li>
                  <li>Following-up with the client</li>
                  <li>Managing contradicting expectations of customers</li>
                  <li>Asking for a discount in a subtle way</li>
                  <li>Talking about a competitor's product</li>
                  <li>Dealing with a hesitant client</li>
                  <li>An understanding salesperson</li>
                  <li>Starting a business</li>
                  <li>Giving instructions to a colleague</li>
                  <li>A complex argument</li>
                  <li>Giving detailed instructions to the architect</li>
                  <li>A talk on a popular topic</li>
                  <li>A debate on speaking English at school</li>
                  <li>Understanding someone else's point of view</li>
                  <li>A professional presentation</li>
                </ul>
              </div>
            </div>

          </div>
          <div class="two-section">
            <div class="sub-section">
              <h4>C1</h4>
              <div class="course-content-table-rowContent">
                <ul>
                  <li>A talk about mental health</li>
                  <li>A talk about reclaiming female prerogatives</li>
                  <li>A team meeting</li>
                  <li>A talk on the challenges in providing healthcare</li>
                  <li>A panel discussion</li>
                  <li>A discussion on movies</li>
                  <li>A conversation about a misunderstanding</li>
                  <li>A conversation between a mother and daughter</li>
                  <li>An interview with a prospective room mate</li>
                  <li>A conversation at an art gallery</li>
                  <li>A conversation about choosing movies for a team outing</li>
                  <li>A talk on finance: LoU</li>
                  <li>A talk on finance: Section 80C</li>
                  <li>A talk on finance: Income tax slabs</li>
                  <li>A talk on finance: Standard Deductions</li>
                  <li>A talk on finance: The twin balance sheet problem</li>
                  <li>A talk on finance: Fiscal deficit</li>
                  <li>A debate on unemployment</li>
                  <li>A lecture on the mysteries of space</li>
                  <li>A talk about social media</li>
                  <li>A conversation at the airport</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="section">
        <h3 class="title" onclick="toggleSection(this)">Speaking Lessons<div class="arrow">
            <img src="assets/images/down-arrow.png" alt="">
          </div></h3>
        <div class="content">
          <h3>CEFR Level</h3>
          <div class="two-section">
            <div class="sub-section">
              <h4>A1</h4>
              <div class="course-content-table-rowContent">
                <ul>
                  <li>Introducing yourself</li>
                   <li>Greeting others</li>
                   <li>Talk about likes and dislikes</li>
                   <li>Talk about what you do</li>
                   <li>Talk about where you live</li>
                   <li>Talk about colours</li>
                   <li>Talk about cost</li>
                   <li>Talk about  quantities</li>
                   <li>Talk about time</li>
                   <li>Talk about yourself in an interview</li>              
                   <li>Ask 'wh' questions</li>
                   <li>Ask 'yes' or 'no' questions</li>
                   <li>Ask people for things</li>
                   <li>Ask for food</li>
                   <li>Ask specific questions</li>
                   <li>React to news</li>
                   <li>Giving instructions</li>
                   <li>Paraphrasing</li>

                </ul>
              </div>
            </div>
            <div class="sub-section">
              <h4>A2</h4>
              <div class="course-content-table-rowContent">
                <ul>
                     <li>Describe experiences</li>
                   <li>Describe people</li>
                   <li>Talk about what you are good at</li>
                   <li>Talk about your weekend plans</li>
                   <li>Talk about your pastimes</li>
                   <li>Invite people</li>
                   <li>Ask for the price of things</li>
                   <li>Ask simple questions</li>
                   <li>Ask for explanations</li>
                   <li>Enquire about routines</li>
                   <li>Make plans</li>
                   <li>Make suggestions</li>
                   <li>Compare people</li>
                   <li>Compare things</li>
                   <li>Agree and disagree</li>
                   <li>Exchange news</li>
                   <li>Make plans and arrangements</li>
                   <li>Ask to repeat for clarification</li>
                   <li>Discuss what to do next</li>
                   <li>What to say when things go wrong</li>
                   <li>Ask for and respond to a favour</li>
                   <li>Giving directions</li>
                   <li>Apologising and responding to apologies</li>
                   <li>Paraphrasing</li>
                </ul>
              </div>
            </div>
          </div>
           <div class="two-section">
            <div class="sub-section">
              <h4>B1</h4>
              <div class="course-content-table-rowContent">
                <ul>
                 <li>Introduce a speaker</li>
                      <li>What to say in an argument</li>
                       <li>Express emotions</li>
                       <li>Describe the plot of a book</li>
                       <li>Express doubt</li>
                       <li>Narrate a story</li>
                       <li>Describe feelings and emotions</li>
                       <li>Make your conversations more descriptive</li>
                       <li>Make requests and give orders</li>
                       <li>Give reasons for something</li>
                       <li>Express likes and dislikes</li>
                       <li>Talk about possibility</li>
                       <li>Give advice on simple matters</li>
                       <li>Give reasons for plans</li>
                       <li>Handle conflicts at work</li>
                       <li>Express strong feelings</li>
                       <li>Talk about unpredictable details</li>
                       <li>Words to describe reactions</li>
                       <li>Initiate and maintain conversations</li>
                       <li>Explain a problem</li>
                       <li>Ask follow-up questions</li>
                       <li>Handle meetings</li>
                       <li>Lead meetings</li>
                       <li>Respond with ease</li>
                       <li>Appreciate the arts</li>
                       <li>Express agreement and disagreement politely</li>
                       <li>Compare and contrast things</li>
                       <li>Clarify points to make a decision</li>
                      <li>Make travel plans</li>
                       <li>Make a complaint</li>
                       <li>Phrases related to travelling</li>
                       <li>Invite others to share their views</li>
                       <li>Confirm mutual understanding</li>
                       <li>Express reactions</li>
                       <li>Summarise a point</li>

                </ul>
              </div>
            </div>
            <div class="sub-section">
              <h4>B2</h4>
              <div class="course-content-table-rowContent">
                <ul>
                   <li>Answer the interview question: Tell me about yourself</li>
                       <li>Answer the interview question: What are your strengths and weaknesses?</li>
                       <li>Answer interview questions related to your background</li>
                       <li>Give precise information</li>
                       <li>Discuss and evaluate solutions</li>
                       <li>Give a detailed description</li>
                       <li>Give advice and complex information</li>
                       <li>Express opinions</li>
                       <li>Explain viewpoints</li>
                       <li>Indicate reluctance</li>
                       <li>What to say about things that are important to us</li>
                       <li>What to say in a workplace meeting</li>
                         <li>Express certainty and doubt</li>
                       <li>Express abstract ideas at work</li>
                       <li>Speculate about consequences</li>
                       <li>Group discussion</li>
                       <li>Make requests and grant permissions</li>
                       <li>Participate in conversations</li>
                       <li>Establish a rapport by asking sympathetic questions</li>
                       <li>State your case and ask for information</li>
                       <li>How to interrupt politely</li>
                       <li>Say 'no' politely and effectively</li>
                       <li>Change the topic</li>
                       <li>Give a review</li>
                       <li>Indicate a viewpoint</li>
                       <li>Develop a complex argument</li>
                       <li>Make a case for compensation</li>
                       <li>Telephone tricks in business</li>
                          <li>Help your customer</li>
                       <li>Tones: Condescending vs Informative</li>
                       <li>Build rapport instantly</li>
                       <li>Know your customer</li>
                       <li>Tones: Repeating Information</li>
                       <li>Make small talk</li>
                       <li>Satisfy your customer</li>
                       <li>Tones: Helping with online forms</li>
                         <li>Handle unhappy customers</li>
                       <li>Pacify your customer</li>
                       <li>Tones: Urging vs Pushing</li>
                       <li>Negotiate successfully</li>
                       <li>Motivate your customer</li>
                       <li>Tones: Interested vs Disinterested</li>
                       <li>Handle multiple questions in team meetings</li>
                       <li>Refuse your customer politely</li>
                       <li>Tones: Rude vs Polite</li>
                          <li>Negotiate a solution</li>
                       <li>What to say while critiquing</li>
                       <li>Make a hypothesis</li>
                       <li>Make clear presentations</li>
                       <li>Give supporting and opposing points in a presentation</li>
                       <li>Reiterate a point of view</li>
                </ul>
              </div>
            </div>
          </div>
                    <div class="two-section">
            <div class="sub-section">
              <h4>C1</h4>
              <div class="course-content-table-rowContent">
                <ul>
                  <li>Group Discussion: When you don't know much about the topic</li>
                       <li>Group Discussion: Language to make an impression</li>
                       <li>Group Discussion: Structure</li>
                       <li>Group Discussion: Mock situation</li>
                       <li>Group Discussion: Tone</li>
                       <li>Give reasons and explanations</li>
                       <li>Express Opinions</li>
                       <li>Negotiate Skilfully</li>
                       <li>Give feedback</li>
                        <li>Report an incident</li>
                       <li>Use idiomatic expressions - 1</li>
                       <li>Use idiomatic expressions - 2</li>
                       <li>Use idiomatic expressions - 3</li>
                       <li>Give complex instructions</li>
                       <li>Use stress and intonation</li>
                       <li>Agree and disagree</li>
                       <li>Ask for information</li>              
                       <li>Paraphrasing</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="section">
        <h3 class="title" onclick="toggleSection(this)">Reading Lessons<div class="arrow">
            <img src="assets/images/down-arrow.png" alt="">
          </div></h3>
        <div class="content">
          <h3>CEFR Level</h3>
          <div class="two-section">
            <div class="sub-section">
              <h4>A1</h4>
              <div class="course-content-table-rowContent">
                <ul>
                  <li>Read a postcard</li>
                       <li>Read a store guide</li>
                       <li>Read information about a hotel</li>
                </ul>
              </div>
            </div>
            <div class="sub-section">
              <h4>A2</h4>
              <div class="course-content-table-rowContent">
                <ul>
                   <li>Read a prospectus</li>
                       <li>Read Recipes</li>
                       <li>Read an enquiry email</li>
                       <li>Read a brochure about travelling</li>
                       <li>Read written directions</li>
                       <li>Read Descriptions</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="two-section">
            <div class="sub-section">
              <h4>B1</h4>
              <div class="course-content-table-rowContent">
                <ul>
                   <li>Skimming - 1</li>
                       <li>Scanning - 1</li>
                       <li>Scanning: Demonstration - 1</li>
                       <li>Main idea: Strategy - Part 1</li>
                       <li>Main idea: Demonstration</li>
                       <li>Supporting idea: Strategy</li>
                       <li>Supporting idea: Demonstration</li>
                       <li>Infographics: Strategy</li>
                       <li>Skimming - 2</li>
                       <li>Scanning: Demonstration - 2</li>
                       <li>Main idea: Strategy - Part 2</li>
                       <li>A letter of appointment</li>
                       <li>Product Labels</li>
                       <li>A newspaper article</li>
                       <li>The events of a journey</li>
                       <li>Articles with contrasting arguments</li>
                </ul>
              </div>
            </div>
            <div class="sub-section">
              <h4>B2</h4>
              <div class="course-content-table-rowContent">
                <ul>
                    <li>Infographics: Demonstration</li>
                       <li>Scanning - 2</li>
                       <li>An email with instructions</li>
                       <li>An employee review</li>
                       <li>A project proposal</li>
                       <li>A company report</li>
                       <li>Reading to infer meaning: Demonstration</li>
                       <li>An article on the consumer protection bill</li>
                       <li>An article on agriculture</li>
                       <li>An article on women freedom fighters</li>
                         <li>An article on tennis players</li>
                       <li>A personal email</li>
                       <li>An article on a specialised topic</li>
                       <li>An article about contemporary problems</li>
                       <li>An article with an effective problem-solution</li>
                </ul>
              </div>
            </div>
          </div>
           <div class="two-section">
            <div class="sub-section">
              <h4>C1</h4>
              <div class="course-content-table-rowContent">
                <ul>
                 <li>Read instructions on a procedure</li>
                       <li>Read an article on art</li>
                       <li>Read about bills</li>
                       <li>Read about international conventions</li>
                       <li>Read about the achievements of India in space</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="section">
        <h3 class="title" onclick="toggleSection(this)">Writing Lessons<div class="arrow">
            <img src="assets/images/down-arrow.png" alt="">
          </div></h3>
        <div class="content">
          <h3>CEFR Level</h3>
          <div class="two-section">
            <div class="sub-section">
              <h4>A1</h4>
              <div class="course-content-table-rowContent">
                <ul>
                  <li>Describe a room</li>
                       <li>Write about what we like</li>
                       <li>Write about hobbies</li>
                       <li>Ask for information</li>
                       <li>Ask Questions</li>
                </ul>
              </div>
            </div>
            <div class="sub-section">
              <h4>A2</h4>
              <div class="course-content-table-rowContent">
                <ul>
                 <li>Write a diary entry</li>
                       <li>Write about things that interest us</li>
                       <li>Write about family</li>
                       <li>Write about past events</li>
                       <li>Write about work and school</li>
                       <li>Write to give personal information</li>
                       <li>Write about something that happened during a holiday</li>
                       <li>Write a thank you letter</li>
                       <li>Write an apology letter</li>
                       <li>Write formal emails</li>
                       <li>Write informal emails</li>
                       <li>Write simple emails</li>
                       <li>Write to exchange information</li>
                </ul>
              </div>
            </div>
          </div>
           <div class="two-section">
            <div class="sub-section">
              <h4>B1</h4>
              <div class="course-content-table-rowContent">
                <ul>
                   <li>Organise your thoughts before writing</li>
                       <li>Write a short report</li>
                       <li>Summarise information</li>
                       <li>Write about feelings and reactions</li>
                       <li>Write a letter asking for information</li>
                       <li>Narrate sequentially</li>
                       <li>Use images effectively</li>
                       <li>Report and summarise</li>
                       <li>Write a descriptive email</li>
                       <li>Ask for further information</li>
                       <li>Ask for and give confirmation</li>
                       <li>Write about advantages and disadvantages</li>
                       <li>Write a brief report - minutes of a meeting</li>
                       <li>Write an apology email - General</li>
                       <li>Write a letter of opinion</li>
                       <li>Write a simple review</li>
                       <li>Write a thank you email</li>
                       <li>Give information</li>
                       <li>Share news and express thoughts</li>
                </ul>
              </div>
            </div>
            <div class="sub-section">
              <h4>B2</h4>
              <div class="course-content-table-rowContent">
                <ul>
                  <li>Emails: purpose</li>
                       <li>Emails: structure</li>
                       <li>Emails: tone</li>
                       <li>Write using idiomatic expressions</li>
                       <li>Write a letter of complaint - General</li>
                       <li>Convey emotions</li>
                       <li>Write reviews</li>
                       <li>Write formal messages</li>
                       <li>Write an apology email - Workplace</li>
                       <li>Parajumbles - 1</li>
                       <li>Sentence structure - 1</li>
                       <li>Paraphrasing</li>
                       <li>Parajumbles - 2</li>
                       <li>Sentence structure - 2</li>
                       <li>Summarise an article</li>
                          <li>Parajumbles - 3</li>
                       <li>Sentence structure - 3</li>
                       <li>Precis Writing</li>
                       <li>Parajumbles - 4</li>
                       <li>Sentence structure - 4</li>
                       <li>Expository Essay</li>
                       <li>Parajumbles - 5</li>
                       <li>Sentence structure - 5</li>
                       <li>Use linking words in writing</li>
                       <li>Parajumbles - 6</li>
                       <li>Sentence structure - 6</li>
                       <li>Language to be used in essays</li>
                       <li>Write a detailed email report</li>
                       <li>Write a letter of request</li>
                       <li>Synthesise information in writing</li>
                       <li>Evaluate solutions</li>
                       <li>Write a letter of application</li>
                       <li>Make clarifications</li>
                       <li>Give feedback</li>
                       <li>Address grievances</li>
                       <li>Allocate work in the workplace by email</li>
                       <li>Respond to a client requesting extra time</li>
                       <li>Accept responsibility for a mistake</li>
                       <li>Respond to a suggestion</li>
                       <li>Request a meeting</li>
                       <li>Connect with a client by email</li>
                       <li>Turn down a project politely</li>
                       <li>Politely backtrack about a business deal</li>
                          <li>Say 'no' politely</li>
                       <li>Tips to improve your emails - 1</li>
                       <li>Tips to improve your emails - 2</li>
                       <li>Formal Invitations</li>
                       <li>Write a letter of complaint - Workplace</li>
                       <li>Write a letter of thanks</li>
                       <li>Write a letter of enquiry</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="two-section">
            <div class="sub-section">
              <h4>C1</h4>
              <div class="course-content-table-rowContent">
                <ul>
                   <li>Persuasive Writing</li>
                       <li>Use the tone for different audiences</li>
                       <li>Narrative Writing</li>
                       <li>Visual presentation while writing</li>
                       <li>Email for different audiences</li>
                       <li>Write introductions and conclusions</li>
                       <li>Communicate on social media</li>
                             <li>Support a point of view</li>
                       <li>Write Introductions </li>
                       <li>Write Conclusions</li>
                       <li>Write Expositions</li>
                </ul>
              </div>
            </div>
           
        </div>
      </div>
    </div>
     <div class="section">
        <h3 class="title" onclick="toggleSection(this)">Grammar Lessons<div class="arrow">
            <img src="assets/images/down-arrow.png" alt="">
          </div></h3>
        <div class="content">
          <h3>CEFR Level</h3>
          <div class="two-section">
            <div class="sub-section">
              <h4>A1</h4>
              <div class="course-content-table-rowContent">
                <ul>
                  <li>Determiners - very and adjectives</li>
                </ul>
              </div>
            </div>
            <div class="sub-section">
              <h4>A2</h4>
              <div class="course-content-table-rowContent">
                <ul>
                <li>Nouns</li>
                       <li>Singular Nouns</li>
                       <li>Plurals - 's' and 'es'</li>
                       <li>Plurals - 'ies'</li>
                       <li>Irregular Plural Nouns</li>
                       <li>Verbs</li>
                       <li>Adjectives</li>
                       <li>Comparative Adjectives - Part 1</li>
                       <li>Comparative Adjectives - Part 2</li>
                       <li>Modifying Adjectives</li>
                        <li>Position Adjectives</li>
                       <li>Predicative Adjectives</li>
                       <li>Superlative Adjectives</li>
                       <li>Superlatives and their rules</li>
                       <li>More about Superlatives</li>
                       <li>Adverbs</li>
                       <li>Adverbs of Time</li>
                       <li>Adverbs of Frequency</li>
                       <li>Adverbs of Degree with Adjectives</li>
                       <li>Adverbs of Degree with Verbs</li>
                       <li>Adverbs of Manner</li>
                       <li>Adverbs of Certainty</li>
                       <li>Conjunctions</li>
                       <li>Position Prepositions</li>
                </ul>
              </div>
            </div>
          </div>
           <div class="two-section">
            <div class="sub-section">
              <h4>B1</h4>
              <div class="course-content-table-rowContent">
                <ul>
                    <li>Adverbs - 1</li>
                       <li>Adverbial Phrases</li>
                       <li>Determiners</li>
                       <li>Adverbs - 2</li>
                       <li>Modals - May, might</li>
                       <li>Wh- Questions</li>
                       <li>Conditionals: General overview</li>
                       <li>Past continuous tense - 1</li>
                       <li>Comparative Clauses</li>
                       <li>Coordinating Clauses</li>
                       <li>Declarative and imperative clauses</li>
                       <li>Interrogative Clauses</li>
                       <li>Clauses: Phrases/Exclamations</li>
                       <li>Relative Clauses</li>
                       <li>Using 'plus' as a coordinating conjunction</li>
                       <li>Conjunctions - Either ... or</li>
                       <li>Conjunctions - Both/And</li>
                       <li>Past perfect tense - 1</li>
                       <li>1st Conditional: To give advice</li>
                       <li>1st Conditional: To talk about results</li>
                       <li>1st Conditional: While using modals</li>
                       <li>2nd Conditional - To give advice</li>
                       <li>3rd Conditional - To express regret</li>
                       <li>Present continuous tense</li>
                        <li>Question Types</li>
                       <li>Quantifiers</li>
                       <li>Mixed Conditionals</li>
                       <li>Negative Adverbials</li>
                       <li>Subject Verb Agreement - 1</li>
                        <li>Forms of Adjectives</li>
                       <li>Subject Verb Agreement - 2</li>
                       <li>Active Voice</li>
                       <li>Subject Verb Agreement - 3</li>
                       <li>Passive Voice</li>
                        <li>Subject Verb Agreement - 4</li>
                       <li>Converting one voice to the other</li>
                       <li>Subject Verb Agreement - 5</li>
                       <li>Reported Speech - Rules and form</li>
                       <li>Subject Verb Agreement - 6</li>

                </ul>
              </div>
            </div>
            <div class="sub-section">
              <h4>B2</h4>
              <div class="course-content-table-rowContent">
                <ul>
                  <li>Reported to Direct Speech</li>
                       <li>Future continuous tense</li>
                       <li>Future perfect simple tense</li>
                       <li>Future expressions with 'be'</li>
                       <li>Using 'can' with adverbs</li>

                       <li>Using 'can' with negative forms</li>
                       <li>Future tense in the past</li>
                       <li>Past tense - possibility</li>
                       <li>Future perfect continuous tense</li>
                       <li>Present continuous tense in the future</li>
                       <li>Past continuous tense - 2</li>
                       <li>Past perfect tense - 2</li>
                       <li>Past perfect continuous</li>
                       <li>Present perfect tense</li>
                       <li>Present perfect continuous tense</li>

                       <li>Reported Speech - Usage</li>
                       <li>Subject Verb Agreement - General overview</li>
                       <li>Modal Verbs: A general overview</li>
                       
                </ul>
              </div>
            </div>
          </div>
          <div class="two-section">
            <div class="sub-section">
              <h4>C1</h4>
              <div class="course-content-table-rowContent">
                <ul>
                   <li>Intensifiers</li>
                       <li>Adjective Collocation</li>
                       <li>Modals: general overview</li>
                       <li>Modals: would, must, should, ought</li>
                       <li>Modals: can, could, may, might</li>
                       <li>Confusing Adverbs</li>
                       <li>Ellipsis and tags</li>
                       <li>Idioms and Phrases - 1</li>
                       <li>Idioms and Phrases - 2</li>
                       <li>Idioms and Phrases - 3</li>
                        <li>Idioms and Phrases - 4</li>
                       <li>Idioms and Phrases - 5</li>
                       <li>Idioms and Phrases - 6</li>
                       <li>Idioms and Phrases - 7</li>
                       <li>Idioms and Phrases - 8</li>
                       <li>Idioms and Phrases - 9</li>
                       <li>Idioms and Phrases - 10</li>
                </ul>
              </div>
            </div>
           
        </div>
      </div>
    </div>
     <div class="section">
        <h3 class="title" onclick="toggleSection(this)">Vocabulary Lessons<div class="arrow">
            <img src="assets/images/down-arrow.png" alt="">
          </div></h3>
        <div class="content">
          <h3>CEFR Level</h3>
          <div class="two-section">
            <div class="sub-section">
              <h4>A1</h4>
              <div class="course-content-table-rowContent">
                <ul>
                 <li>Parts of the body</li>
                       <li>Parts of the head</li>
                       <li>Parts of the leg</li>
                       <li>Parts of the hand</li>
                       <li>Types of pets</li>
                       <li>Types of wild animals - part 1</li>
                       <li>Types of wild animals - part 2</li>
                       <li>Types of farm animals</li>
                       <li>Types of sea animals</li>
                       <li>Types of birds</li>
                       <li>Insects</li>
                       <li>Words for colours</li>
                        <li>Types of fruits - Part 1</li>
                       <li>Types of fruits - Part 2</li>
                        <li>Things we see in a city</li>
                       <li>Things that we use in school</li>
                </ul>
              </div>
            </div>
            <div class="sub-section">
              <h4>A2</h4>
              <div class="course-content-table-rowContent">
                <ul>
                  <li>Type of vegetables - Part 1</li>
                       <li>Type of vegetables - Part 2</li>
                       <li>Types of sweets</li>
                       <li>Words about food</li>
                       <li>Things in a park</li>
                       <li>Things we can find in a restaurant</li>
                       <li>Weekend plans</li>
                       <li>Words to use while travelling</li>
                       <li>Different places we can go to</li>
                        <li>Words to use while sewing</li>
                       <li>Types of sports - Part 1</li>
                       <li>Types of sports - Part 2</li>
                       <li>Words to talk about tools</li>
                       <li>Types of vehicles - Part 1</li>
                       <li>Types of vehicles - Part 2</li>
                       <li>Places where we can find water</li>
                       <li>Words to talk about the weather</li>
                       <li>Things in a house - Part 1</li>
                       <li>Things in a house - Part 2</li>
                       <li>Types of appliances around the house</li>
                       <li>Shapes</li>
                       <li>Words to talk about art</li>
                       <li>Types of containers</li>
                       <li>Parts of a car</li>
                       <li>Computer Words - Part 1</li>
                       <li>Computer Words - Part 2</li>
                       <li>Words about accessories</li>
                       <li>Words about clothes</li>
                </ul>
              </div>
            </div>
          </div>
           <div class="two-section">
            <div class="sub-section">
              <h4>B1</h4>
              <div class="course-content-table-rowContent">
                <ul>
                   <li>Words to talk about fashion</li>
                       <li>Words to talk about education</li>
                       <li>Words used in recipes</li>
                       <li>Common vocabulary errors</li>
                       <li>Words used to describe people</li>
                       <li>Words used while travelling</li>
                       <li>Tips to improve your vocabulary</li>
                       <li>Homonyms - 2</li>
                       <li>Idioms and phrases</li>
                         <li>Colloquialisms</li>
                       <li>Using slang in conversation</li>
                       <li>Commonly used words in social situations</li>
                       <li>Words used in the workplace</li>
                       <li>Words related to the medical profession</li>
                       <li>Modes of transportation</li>
                       <li>Words to use while shopping</li>
                       <li>Vocabulary to talk about the weather</li>
                       <li>Words to give directions</li>
                         <li>Words to introduce yourself</li>
                       <li>Commonly mispronounced words - General</li>
                       <li>Prefixes and Suffixes - 1</li>
                       <li>Types of musical instruments</li>
                       <li>Shapes</li>
                       <li>Types of baby animals</li>

                </ul>
              </div>
            </div>
            <div class="sub-section">
              <h4>B2</h4>
              <div class="course-content-table-rowContent">
                <ul>
                  <li>Commonly mispronounced words in the workplace</li>
                       <li>Business jargon</li>
                       <li>Financial terms</li>
                         <li>Prefixes and Suffixes - 2</li>
                       <li>Homonyms - 1</li>
                       <li>Learn advanced vocabulary - 1</li>
                       <li>Learn advanced vocabulary - 2</li>
                       <li>Learn advanced vocabulary - 3</li>
                       <li>Learn advanced vocabulary - 4</li>
                       <li>Learn advanced vocabulary - 5</li>
                       <li>Learn advanced vocabulary - 6</li>
                       <li>Collocations</li>
                        <li>Intensity of adjectives</li>
                       <li>Learning words through context</li>
                       <li>Root words</li>
                       <li>Dealing with an angry customer</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="two-section">
            <div class="sub-section">
              <h4>C1</h4>
              <div class="course-content-table-rowContent">
                <ul>
                    <li>Tips to expand your vocabulary</li>
                       <li>Words to use while house hunting</li>
                       <li>Words to talk about art</li>
                       <li>Words to use while talking about books and film</li>
                       <li>Words to use while applying for a loan</li>
                       <li>Business Jargon</li>
                       <li>Words to talk about crypto currency</li>
                       <li>Words to talk about the environment</li>
                       <li>Words to talk about food</li>
                       <li>Words to talk about music</li>
                        <li>Words to talk about technology</li>
                       <li>Political and legal jargon</li>
                       <li>Words from the Indian Constitution - 1</li>
                       <li>Words from the Indian Constitution - 2</li>
                       <li>Words from the Indian Constitution - 3</li>
                       <li>Words from the Indian Constitution - 4</li>
                       <li>Words from the Indian Constitution - 5</li>
                       <li>Words from the Indian Constitution - 6</li>
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

<?php
$includeProdPageJS = true;
include('footer.php'); ?>
<?php include('buyLoader.php'); ?>  
