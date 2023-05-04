<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Meta -->
    <?php include 'partials/resources/meta.php';?>
    
    <!-- CSS -->
    <?php include 'partials/resources/styles.php';?>

    <!-- FAVICON -->
    <?php include 'partials/resources/favicon.php';?>

    <title>Contact | RM Alcon Stahl</title>

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

            <!-- Contact start -->
            <section class="contact contact-img-background">
                <div class="container-fluid">
                    <div class="wrapper">
                        <div class="container">

                            <!-- Contact inner start -->
                            <div class="contact__inner">

                                <!-- Form start -->  
                                <form id="message-form" action="sendmail.php" method="POST">
                                    <div class="form__inner">

                                        <div class="title">
                                            <h2>Upit</h2>
                                        </div>
                                        <div class="subtitle">
                                            <p>Popunite sledeća polja i uskoro ćemo vam odgovoriti:</p>
                                        </div>

                                        <div class="input-wrapper">
                                            <input id="name" name="name" type="text" placeholder="Ime/firma" required>
                                        </div>
                                        <div class="input-wrapper">
                                            <input id="email" name="email" type="text" placeholder="Email" required>
                                        </div>
                                        <textarea id="message" name="message" cols="30" rows="14" placeholder="Poruka" required></textarea>

                                        <button class="button--primary" type="submit">Pošalji</button>
                                    </div>
                                </form> <!-- Form end -->

                            </div> <!-- Contact inner end -->

                        </div>
                    </div>
                </div>

            </section> <!-- Contact end -->


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