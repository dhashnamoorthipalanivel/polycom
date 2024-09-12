<?php include 'header.php';?>

<div class="uni-banner">
        <div class="container">
            <div class="uni-banner-text">
                <h1>Contact</h1>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li>Contact</li>
                </ul>
            </div>
        </div>
    </div>


    <div class="contact-page ptb-100">
        <div class="container">
            <div class="default-section-title">
                <h6>SEND MESSAGE</h6>
                <h3>We Are Here To Help You</h3>
            </div>
            <div class="section-content">
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                        <div class="contact-card-area">
                            <div class="row justify-content-center">
                                <div class="col-lg-12 col-md-6 col-sm-12 col-12">
                                    <div class="contact-card">
                                        <i class="fas fa-map-marker-alt"></i>
                                        <h4>Our Location</h4>
                                        <p>SH 198,Kumarapalayam: 638183,TN,India</p>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-6 col-sm-12 col-12">
                                    <div class="contact-card">
                                        <i class="fas fa-phone-alt"></i>
                                        <h4>Our Phone</h4>
                                        <p><a href="tel:9629377554">+91 9629377554</a></p>
                                        
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-6 col-sm-12 col-12">
                                    <div class="contact-card">
                                        <i class="far fa-envelope"></i>
                                        <h4>Our Email</h4>
                                        <p><a
                                                href="mailto:info@polycomupvc.com"><span
                                                    class="__cf_email__"
                                                    data-cfemail="553c3b333a15343b22347b363a38">info@polycomupvc.com</span></a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-12 col-sm-12 col-12">
                        <div class="contact-page-form-area">
                            <div class="contact-form bd-form details-text-area">
                                <h2>Send Your Message</h2>
                                <form id="contactForm">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <input type="text" name="name" id="name" class="form-control"
                                                    placeholder="Enter your name here" required
                                                    data-error="Please enter your name">
                                                <div class="help-block with-errors"></div>
                                                <i class="ri-user-3-line"></i>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <input type="email" name="email" id="email" class="form-control"
                                                    placeholder="Enter your email address here" required
                                                    data-error="Please enter your email">
                                                <div class="help-block with-errors"></div>
                                                <i class="ri-mail-send-line"></i>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <input type="tel" name="phone_number" id="phone_number"
                                                    placeholder="8887941284" class="form-control" required
                                                    data-error="Please enter your number">
                                                <div class="help-block with-errors"></div>
                                                <i class="ri-phone-line"></i>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <input type="text" name="msg_subject" id="msg_subject"
                                                    class="form-control" placeholder="write subject" required
                                                    data-error="Please enter your subject">
                                                <div class="help-block with-errors"></div>
                                                <i class="ri-booklet-line"></i>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <textarea name="message" class="form-control" id="message" cols="30"
                                                    rows="4" placeholder="Enter your comment here" required
                                                    data-error="Write your message"></textarea>
                                                <div class="help-block with-errors"></div>
                                                <i class="ri-pencil-line"></i>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <button class="default-button" type="submit"><span>Send
                                                    Message</span></button>
                                            <div id="msgSubmit" class="h3 text-center hidden"></div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

     <div class="google-map">
        <iframe class="g-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3910.676298208019!2d77.68931947481512!3d11.431024488760347!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba969d446a72b99%3A0x221458e3102200a7!2sPolycom%20Windows!5e0!3m2!1sen!2sin!4v1725101888744!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

<?php include 'footer.php';?>