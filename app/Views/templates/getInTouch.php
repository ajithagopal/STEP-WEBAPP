<div class="contact-section-form">
    <div class="contact-section-form-container"> <?php 
        if(isset($isGetInTouchTitle)) { ?>
        <h2><?=$isGetInTouchTitle?></h2> <?php
        } ?>
        <div class="form-field">
            <label for="selContactFor">Enquiring for</label>
            <select name="selContactFor" id="selContactFor" class="form-control">
                <option value="Retail User">Myself</option>
                <option value="School">My School</option>
                <option value="College/University">My College</option>
                <option value="Corporate">My Company</option>
                <option value="Government">A Government Agency</option>
            </select>
        </div>
        <div class="form-field">
            <input type="text" name="name" id="txtName" class="form-field-text" placeholder="Name" required="" />
            <span id="error_name" class="text-danger" style="color:red"></span>
        </div>
        <div class="form-field">
            <input type="text" name="emailid" id="txtEmail" class="form-field-text"placeholder="Email Id" required="" />
             <span id="error_email" class="text-danger" style="color:red"></span>
        </div>
        <div class="form-field">
            <input type="text" name="phone" id="txtPhone" class="form-field-text" placeholder="Phone" required="" />
             <span id="error_phone" class="text-danger" style="color:red"></span>
        </div>
        <div class="form-field mb-0">
            <textarea name="message" id="txtMessage" class="form-field-text" placeholder="Message" required=""></textarea>
        </div>
        <button class="btn-default" name="btnsubmit" id="btnsubmit" value="submit" >Submit</button>
    </div>
    <div class="contact-section-form-status">
        <img loading="lazy" src="https://d266qgalneck7k.cloudfront.net/assets/images/check-128x128.png" alt="Form submitted successfully" class="form-status-success" />
        <h3 class="form-status-success">Form submitted successfully</h3>

        <img loading="lazy" src="https://d266qgalneck7k.cloudfront.net/assets/images/remove-128x128.png" alt="Form submission failed" class="form-status-failed" />
        <h3 class="form-status-failed">Form submission failed</h3>

        <p class="form-status-success">Our team will get in touch with you shortly!</p>
        <p>In Hurry! call us directly at <a href="tel:919789883344">+91 9789883344</a></p>
    </div>
</div> 

<script type="text/javascript">
    
</script>