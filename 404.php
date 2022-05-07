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
                                <li><a href="#">error 404</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Row End -->
            </div>
            <!-- Container End -->
        </div>
        <!-- Page Breadcrumb End -->
        <!-- Error 404 Area Start -->
        <div class="error404-area ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="error-wrapper text-center">
                            <div class="error-text">
                                <h1>404</h1>
                                <h2>Opps! PAGE NOT BE FOUND</h2>
                                <p>Sorry but the page you are looking for does not exist, have been removed, <br> name
                                    changed or is temporarity unavailable.</p>
                            </div>
                            <div class="search-error">
                                <form id="search-form" action="#">
                                    <input type="text" placeholder="Search">
                                    <button><i class="fa fa-search"></i></button>
                                </form>
                            </div>
                            <div class="error-button">
                                <a href="index.php">Back to home page</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Error 404 Area End -->
        <!-- Footer Start -->
        <?php include 'footer.php'; ?>
        <!-- Footer End -->
    </div>
    <!-- Wrapper End -->
    <?php include 'footer_scripts.php'; ?>
</body>

</html>