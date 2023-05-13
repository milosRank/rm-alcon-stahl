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

            <!-- Page header start -->
            <section class="page-header page-header-bg--contact">
                <div class="container-fluid">
                    <div class="wrapper">
                        <div class="container">

                            <!-- Page header inner start -->
                            <div class="page-header__inner">

                                <div class="title">
                                    <h1>Kontakt</h1>
                                </div>

                            </div> <!-- Page header inner end -->

                        </div>
                    </div>
                </div>
            </section> <!-- Page header end -->

            <!-- Map and text start -->
            <section class="map-and-text">
                <div class="container-fluid">
                    <div class="wrapper">
                        <div class="container">

                            <!-- Map and text inner start -->
                            <div class="map-and-text__inner">

                                <div class="map">MAP GOES HERE</div>
                                <div class="text">
                                    <div class="title">
                                        <h2>Magacin veleprodaje, <br> mesto izdavanja robe</h2>
                                    </div>
                                    <div class="location">
                                        <p>
                                            <strong>Šesta industrijska br.2, 22330 Nova Pazova</strong> <br>
                                            Radno vreme: ponedeljak - petak od 8:00h do 16:00 h
                                        </p>
                                    </div>
                                    <div class="contact-info">
                                        <a class="underlined" href="mailto:goran@rmalkon.co.rs">goran@rmalkon.co.rs</a>
                                        <div class="line-separator"></div>
                                        <a class="text-color-black" href="tel:+38163301089">tel: +381 / (0)63 - 301 - 089</a>
                                    </div>
                                    <ul class="pdf-list">
                                        <li><a href="#" download>Kako doći do nas (PDF) </a></li>
                                    </ul>
                                </div>
                            </div> <!-- Map and text inner end -->

                        </div>
                    </div>
                </div>
            </section> <!-- Map and text end -->

            <!-- Map and text start -->
            <section class="map-and-text">
                <div class="container-fluid">
                    <div class="wrapper">
                        <div class="container">

                            <!-- Map and text inner start -->
                            <div class="map-and-text__inner">

                                <div class="map">MAP GOES HERE</div>
                                <div class="text">
                                    <div class="title">
                                        <h2>Magacin veleprodaje, <br> mesto izdavanja robe</h2>
                                    </div>
                                    <div class="location">
                                        <p>
                                            <strong>Šesta industrijska br.2, 22330 Nova Pazova</strong> <br>
                                            Radno vreme: ponedeljak - petak od 8:00h do 16:00 h
                                        </p>
                                    </div>
                                    <div class="contact-info">
                                        <a class="underlined" href="mailto:goran@rmalkon.co.rs">goran@rmalkon.co.rs</a>
                                        <div class="line-separator"></div>
                                        <a class="text-color-black" href="tel:+38163301089">tel: +381 / (0)63 - 301 - 089</a>
                                    </div>
                                    <ul class="pdf-list">
                                        <li><a href="#" download>Kako doći do nas (PDF) </a></li>
                                    </ul>
                                </div>
                            </div> <!-- Map and text inner end -->

                        </div>
                    </div>
                </div>
            </section> <!-- Map and text end -->

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