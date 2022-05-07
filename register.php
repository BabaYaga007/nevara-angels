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
                                <li><a href="#">register</a></li>
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
                        <form class="form-horizontal pb-100" action="#">
                            <fieldset>
                                <legend>Your Personal Details</legend>
                                <div class="form-group row">
                                    <label class="control-label col-md-2" for="f-name"><span class="require">*</span>First Name</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" id="f-name" placeholder="First Name">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label col-md-2" for="l-name"><span class="require">*</span>Last Name</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" id="l-name" placeholder="Last Name">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label col-md-2" for="email"><span class="require">*</span>Enter you email address here...</label>
                                    <div class="col-md-10">
                                        <input type="email" class="form-control" id="email" placeholder="Enter you email address here...">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label col-md-2" for="number"><span class="require">*</span>Telephone</label>
                                    <div class="col-md-10">
                                        <input type="email" class="form-control" id="number" placeholder="Telephone">
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <legend>Your Password</legend>
                                <div class="form-group row">
                                    <label class="control-label col-md-2" for="pwd"><span class="require">*</span>Password:</label>
                                    <div class="col-md-10">
                                        <input type="password" class="form-control" id="pwd" placeholder="Password">
                                    </div>
                                </div>
                                 <div class="form-group row">
                                    <label class="control-label col-md-2" for="pwd-confirm"><span class="require">*</span>Confirm Password</label>
                                    <div class="col-md-10">
                                        <input type="password" class="form-control" id="pwd-confirm" placeholder="Confirm password">
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset class="newsletter-input">
                                <legend>Newsletter</legend>
                                <div class="form-group row">
                                    <label class="col-md-2 control-label">Subscribe</label>
                                    <div class="col-md-10"> <label class="radio-inline">
                                        <input type="radio" name="newsletter" value="1">
                                        Yes</label>
                                        <label class="radio-inline">
                                        <input type="radio" name="newsletter" value="0" checked="checked">
                                        No</label>
                                    </div>
                                </div>
                            </fieldset>
                            
                            <div class="buttons newsletter-input">
                                <div class="pull-right">I have read and agree to the <a href="#" class="agree"><b>Privacy Policy</b></a>
                                    <input type="checkbox" name="agree" value="1"> &nbsp;
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