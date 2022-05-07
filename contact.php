<?php include 'head.php'; ?>

<body>

    <!-- Wrapper Start -->
    <div class="wrapper">
       <!-- Preloader Start -->
        <div class="preloader">
            <div class="loading-center">
                <div class="loading-center-absolute">
                    <div class="object object_one"></div>
                    <div class="object object_two"></div>
                    <div class="object object_three"></div>
                </div>
            </div>
        </div>
        <!-- Preloader End -->
        <!-- Header Area Start -->
            <?php include 'header2.php'; ?>
        <!-- Header Area End -->
        <!-- Page Breadcrumb Start -->
        <div class="main-breadcrumb">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb-content text-center ptb-70">
                            <ul class="breadcrumb-list breadcrumb">
                                <li><a href="#">home</a></li>
                                <li><a href="#">contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Row End -->
            </div>
            <!-- Container End -->
        </div>
        <!-- Page Breadcrumb End -->
        <!-- Google Map Start -->
        <iframe class="contact-map-size mt-100"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193595.15830869428!2d-74.119763973046!3d40.69766374874431!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sbd!4v1613802584124!5m2!1sen!2sbd"
            allowfullscreen="" loading="lazy">
        </iframe>
        <!-- Google Map End -->
        <!-- Contact Email Area Start -->
        <div class="contact-email-area ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h3 class="mb-5">Contact Us</h3>
                        <p class="text-capitalize mb-40">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        <div class="row">
                            <form id="contact-form" class="contact-form" action="" method="post">
                                <div class="address-wrapper">
                                    <div class="col-12">
                                        <div class="address-fname">
                                            <input type="text" name="name" placeholder="Name" required="required">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="address-email">
                                            <input type="email" name="email" placeholder="Email" required="required">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="address-subject">
                                            <input type="text" name="subject" placeholder="Subject" required="required">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="address-textarea">
                                            <textarea name="message" placeholder="Write your message" required="required"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12 footer-content mail-content">
                                        <div class="send-email pull-right">
                                            <button type="submit" class="submit">Send Email</button>
                                        </div>
                                    </div>
                                </div>
                                <!-- <p class="form-messege ml-15"></p> -->
                                <!-- <div class="col-12 footer-content mail-content">
                                    <div class="send-email pull-right">
                                        <button type="submit" class="submit">Send Email</button>
                                    </div>
                                </div> -->
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact Email Area End -->
        <!-- Footer Start -->
            <?php include 'footer.php'; ?>
        <!-- Footer End -->
    </div>
    <!-- Wrapper End -->
    <?php include 'footer_scripts.php'; ?>
</body>

</html>

<!-- <script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script> -->


<?php include 'add.php'; ?>