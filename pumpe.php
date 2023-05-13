<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Meta -->
    <?php include 'partials/resources/meta.php';?>
    
    <!-- CSS -->
    <?php include 'partials/resources/styles.php';?>

    <!-- FAVICON -->
    <?php include 'partials/resources/favicon.php';?>

    <title>Pumpe | RM Alcon Stahl</title>

</head>

<body>

    <!-- Page wrapper start -->
    <div class="page-warpper">

        <!-- Header start -->
        <?php
            $header_bg_color = "bg-white"; // Set header background color
            include 'partials/elements/header.php';
        ?> <!-- Header end -->


        <!-- Main start -->
        <main>

            <!-- Page header start -->
            <section class="page-header page-header-bg--pumpe">
                <div class="container-fluid">
                    <div class="wrapper">
                        <div class="container">

                            <!-- Page header inner start -->
                            <div class="page-header__inner">

                                <div class="title">
                                    <h1>Pumpe</h1>
                                </div>

                            </div> <!-- Page header inner end -->

                        </div>
                    </div>
                </div>
            </section> <!-- Page header end -->

        </main> <!-- Main end -->


        <!-- Footer -->
        <?php include 'partials/elements/footer.php';?>

        <!-- Postfooter -->
        <?php include 'partials/elements/postfooter.php';?>

    </div> <!-- Page wrapper end -->

    <!-- Scripts -->
    <?php include 'partials/resources/scripts.php';?>
</body>

</html>