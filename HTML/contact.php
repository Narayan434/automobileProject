<?php
include 'header.php';
?>

<section class="page-title" style="background-image:url(../Images/car.jpg)">
    <div class="auto-container">
        <h2>Contact</h2>
        <ul class="page-breadcrumb">
            <li><a href="../index.php">home</a></li>
            <li>Contact</li>
        </ul>
    </div>
</section>


<section class="contact-section-two">
    <div class="auto-container">
        <div class="inner-container">
            <div class="sectionTitle text-center">
                <h2>Contact Us</h2>
                <span class="divider"><span></span></span>
                <div class="text">Roadies has 5+ years of experience with providing wide <br>area of
                    specialty services works listed below</div>
            </div>

            <!-- Contact Form -->
            <div class="contact-form-two">
                <form method="post" id="contact-form">
                    <div class="row clearfix">
                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                            <input type="text" name="username" placeholder="Name" required="">
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                            <input type="text" name="phone" placeholder="Phone" required="">
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                            <input type="email" name="email" placeholder="Email" required="">
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                            <input type="text" name="subject" placeholder="Subject" required="">
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                            <textarea name="message" placeholder="Message"></textarea>
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                            <button class="theme-btn btn-style-two" type="submit" name="submit-form"><span
                                    class="btn-title">Send Message</span></button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="contact-info-outer">
                <div class="contact-info clearfix">
                    <div class="row">
                        <div class="col-md-3 li col-sm-6">
                            <span class="icon fa fa-map-marker-alt"></span>
                            <p><strong>Milanchowk , Butwal,</strong></p>
                            <p>Rupandehi , Nepal 32907</p>
                        </div>

                        <div class="col-md-3 li col-sm-6">
                            <span class="icon fa fa-phone"></span>
                            <p><strong>Call Us</strong></p>
                            <p><a href="tel:+9779899999999">(+977) 9899999999</a></p>
                        </div>

                        <div class="col-md-3 li col-sm-6">
                            <span class="icon fa fa-envelope"></span>
                            <p><strong>Mail Us</strong></p>
                            <p><a href="mailto:roadies@email.com">Roadies@email.com</a></p>
                        </div>

                        <div class="col-md-3 li col-sm-6">
                            <span class="icon fa fa-clock"></span>
                            <p><strong>Opening Time</strong></p>
                            <p>Sun - Fri : 10.00am to 06.00pm</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="map">
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1473.4828536243647!2d83.4646674313739!3d27.691583163580233!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x467edfc387446570!2sLumbini%20Tech!5e0!3m2!1sen!2snp!4v1602759071310!5m2!1sen!2snp"
        width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="true" aria-hidden="false"
        tabindex="0"></iframe>
</section>


<?php
include 'footer.php';
?>

</html>