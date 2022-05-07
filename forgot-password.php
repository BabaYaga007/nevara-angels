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
        <div class="main-breadcrumb mb-100">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb-content text-center ptb-70">
                            <ul class="breadcrumb-list breadcrumb">
                                <li><a href="#">home</a></li>
                                <li><a href="#">account</a></li>
                                <li><a href="#">Forgotten Password</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Row End -->
            </div>
            <!-- Container End -->
        </div>
        <!-- Page Breadcrumb End -->
        <!-- Register Account Start -->
        <div class="register-account">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="register-title">
                            <h3 class="mb-10">REGISTER ACCOUNT</h3>
                            <p class="mb-10">If you already have an account with us, please login at the login page.</p>
                        </div>
                        <form class="form-horizontal pb-100" action="https://template.hasthemes.com/Angels/Angels/mail.php">
                            <fieldset>
                                <legend>Your Personal Details</legend>
                                <div class="form-group d-md-flex">
                                    <label class="control-label px-2" for="email"><span class="require">*</span>Enter you email address here...</label>
                                    <input type="email" class="form-control" id="email" placeholder="Enter you email address here...">
                                </div>
                            </fieldset>
                            <div class="buttons newsletter-input">
                               <div class="pull-left">
                                    <a class="return-customer-btn mr-20" href="log-in.php">Back</a>
                                </div>
                                <div class="pull-right">
                                    <input type="submit" value="Continue" class="newsletter-btn">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Container End -->
        </div>
        <!-- Register Account End -->
        <!-- Footer Start -->
        <?php include 'footer.php'; ?>
        <!-- Footer End -->
    </div>
    <!-- Wrapper End -->
    <?php include 'footer_scripts.php'; ?>
</body>
</html>