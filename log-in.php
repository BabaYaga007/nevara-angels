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
                                <li><a href="#">log in</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Row End -->
            </div>
            <!-- Container End -->
        </div>
        <!-- Page Breadcrumb End -->
        <!-- LogIn Page Start -->
        <div class="log-in pb-100">
            <div class="container">
                <div class="row">
                    <!-- New Customer Start -->
                    <div class="col-md-6">
                        <div class="well">
                            <div class="new-customer">
                                <h3>NEW CUSTOMER</h3>
                                <p class="mtb-10"><strong>Register</strong></p>
                                <p>By creating an account you will be able to shop faster, be up to date on an order's status, and keep track of the orders you have previously made</p>
                                <a class="customer-btn" href="register.php">continue</a>
                            </div>
                        </div>
                    </div>
                    <!-- New Customer End -->
                    <!-- Returning Customer Start -->
                    <div class="col-md-6 mt-4 mt-md-0">
                        <div class="well">
                            <div class="return-customer">
                                <h3 class="mb-10">RETURNING CUSTOMER</h3>
                                <p class="mb-10"><strong>I am a returning customer</strong></p>
                                <form action="#">
                                    <div class="form-group">
                                        <label class="control-label">Enter you email address here...</label>
                                        <input type="text" name="email" placeholder="Enter you email address here..." id="input-email" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Password</label>
                                        <input type="text" name="pass" placeholder="Password" id="input-password" class="form-control">
                                    </div>
                                    <p class="lost-password"><a href="forgot-password.php">Forgot password?</a></p>
                                    <input type="submit" value="Login" class="return-customer-btn">
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Returning Customer End -->
                </div>
                <!-- Row End -->
            </div>
            <!-- Container End -->
        </div>
        <!-- LogIn Page End -->
        <!-- Footer Start -->
        <!-- Footer Start -->
        <?php include 'footer.php'; ?>
        <!-- Footer End -->
    </div>
    <!-- Wrapper End -->
    <?php include 'footer_scripts.php'; ?>
</body>

</html>