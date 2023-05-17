<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DJ POOJA</title>
    <link rel="icon" href="./img/headphones.png" />
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="./include/footer.css">
    <!-- <link rel="stylesheet" href="style2.css"> -->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;1,400&family=Merriweather:ital,wght@1,900&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="contactUs.css">
</head>


<body>
    <?php
    include 'include/navbar.php';
    ?>

    <section id="home" class="home">
        <!-- modal -->
        <!-- Modal -->
        <?php include 'modal.php' ?>

        <!--  -->
        <div class="home-text">
            <div class="slide">
                <span class="one">Hello</span>
                <span class="two">I'm</span>
            </div>
            <h1><span id="dj">DJ</span> POOJA </h1>
            <h3 data-text="Your party Our music">Your party <span> Our music</span></h3>
            <p>The fun comes first because the crowd <span> can’t have fun without me </span></p>
            <div class="button">
                <a href="#" class="btn">Stay Tune</a>
                <a href="#" class="btn2" data-toggle="modal" data-target="#exampleModalCenter"><span><i class="bx bx-play"></i></span> Watch my Work</a>

                <!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/yAyikITldq8?start=21" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> -->
            </div>
        </div>
    </section>

    <section class="about" id="about">
        <div class="about-img">
            <img src="img/3.png" style="width:60%" alt="A beautiful mountain peak">

        </div>
        <div class="about-text">
            <h2 id="bio">Bio <span>Graphy</span></h2>
            <h3 id="bio">Hi I am DJ</h3>
            <p id="p">DJ Pooja is a music fan, female DJ and Producer. Born and raised in INDIA.she started performing as a Dj in 2018. After Achieving the title of Winner of "The War Of Djs" competition at her hometown in Nagpur. She came into lime light and everyone was encouraging her to move ahead in this field as a full time profession. Dj Pooja is connected with music since her school time;
                she has won innumerable prizes as a singer in inter-school events.
                She was the member of music group of her college which was just a kick start for her career in the world of music. She realized her forte; capabilities; decided to learn DJing and now she has been able to establish herself as a professional DJ. Learning new skills is not just an option but a habit of her.
                She loves to play all music genres like Progressive house, Deep house, Tech house, Commercial house, Trance, Dubstep and Bollywood. Undoubtedly, Dj Pooja is a golden talent from central India.
                She believes in reaching greater heights because she sees herself spinning in all over the world and making everyone dance over her tunes.</p>
            <a href="./img/2022 POOJA PROFILE .pdf" class="btn" download>Download PressKit</a>
        </div>
    </section>


    <!-- Modal -->
    <div class="container">
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">

                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <iframe width="660" height="415" src="https://www.youtube.com/embed/yAyikITldq8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <section class="services" id="services">

        <div class="main-text">
            <div class="contact-icons">
                <a href="https://www.facebook.com/djpoojaofficialpage/" target="_blank"><i class="bx bxl-facebook"></i></a>
                <a href="#"><i class="bx bxl-twitter" target="_blank"></i></a>
                <a href="mailto:djpoojaofficial@gmail.com" target="_blank"><i class="bx bxl-gmail"></i></a>
                <a href="https://instagram.com/dj.poojaofficial?igshid=yxm6kiuu5rn" target="_blank"><i class="bx bxl-instagram-alt"></i></a>
                <a href="https://youtube.com/channel/UC7t-OY_ukZwnbAAXINeU_sg" target="_blank"><i class="bx bxl-youtube"></i></a>
            </div>
            <hr>
            <p>By following me, you're going to realize how elusive I am</p>
            <h2 class="la-re"><span>LATEST REMIXES</span></h2>

        </div>
        <div class="services-content">
            <section id="speakers" class="wow fadeInUp" style="background: black; visibility: visible; animation-name: fadeInUp;">

                <div class="row">

                    <iframe scrolling="no" id="hearthis_at_track_6284043" width="100%" height="130" src="https://hearthis.at/embed/6284043/transparent_black/?hcolor=&amp;color=&amp;style=2&amp;block_size=2&amp;block_space=1&amp;background=0&amp;waveform=0&amp;cover=0&amp;autoplay=0&amp;css=" frameborder="0" allowtransparency="" allow="autoplay">
                        <p>Listen to <a href="https://hearthis.at/djsnkyofficial/tum-se-hi-deep-house-mix-dj-ravish-dj-chico-dj-snky/" target="_blank">Tum Se Hi - (Deep House Mix) Dj Ravish, DJ Chico & DJ Snky - 320kbps</a> <span>by</span><a href="https://hearthis.at/djsnkyofficial/" target="_blank">DJ SNKY</a> <span>on</span> <a href="https://hearthis.at/" target="_blank">hearthis.at</a></p>
                    </iframe>
                    <hr>
                    <iframe scrolling="no" id="hearthis_at_track_6215749" width="100%" height="130" src="https://hearthis.at/embed/6215749/transparent_black/?hcolor=&amp;color=&amp;style=2&amp;block_size=2&amp;block_space=1&amp;background=0&amp;waveform=0&amp;cover=0&amp;autoplay=0&amp;css=" frameborder="0" allowtransparency="" allow="autoplay">
                        <p>Listen to <a href="https://hearthis.at/djsnkyofficial/bad-munda-dj-snky-remix-320-kbps/" target="_blank">BAD MUNDA - DJ SNKY (Remix) Jass Manak & Emiway Bantai - 320 kbps</a> <span>by</span><a href="https://hearthis.at/djsnkyofficial/" target="_blank">DJ SNKY</a> <span>on</span> <a href="https://hearthis.at/" target="_blank">hearthis.at</a></p>
                    </iframe>
                    <hr>
                    <iframe scrolling="no" id="hearthis_at_track_6176488" width="100%" height="130" src="https://hearthis.at/embed/6176488/transparent_black/?hcolor=&amp;color=&amp;style=2&amp;block_size=2&amp;block_space=1&amp;background=0&amp;waveform=0&amp;cover=0&amp;autoplay=0&amp;css=" frameborder="0" allowtransparency="" allow="autoplay">
                        <p>Listen to <a href="https://hearthis.at/djsnkyofficial/aankhon-mein-teri-dj-snky-x-dj-sharo-amex-2021-remix/" target="_blank">Aankhon Mein Teri - DJ SNKY x Dj Sharo & Amex (2021 Remix)</a> <span>by</span><a href="https://hearthis.at/djsnkyofficial/" target="_blank">DJ SNKY</a> <span>on</span> <a href="https://hearthis.at/" target="_blank">hearthis.at</a></p>
                    </iframe>
                    <hr>
                    <iframe scrolling="no" id="hearthis_at_track_6145377" width="100%" height="130" src="https://hearthis.at/embed/6145377/transparent_black/?hcolor=&amp;color=&amp;style=2&amp;block_size=2&amp;block_space=1&amp;background=0&amp;waveform=0&amp;cover=0&amp;autoplay=0&amp;css=" frameborder="0" allowtransparency="" allow="autoplay">
                        <p>Listen to <a href="https://hearthis.at/djsnkyofficial/tu-aake-dekh-le-x-peaches-dj-snky-remix/" target="_blank">Tu Aake Dekh Le x Peaches - DJ SNKY (Remix) - 320kbps</a> <span>by</span><a href="https://hearthis.at/djsnkyofficial/" target="_blank">DJ SNKY</a> <span>on</span> <a href="https://hearthis.at/" target="_blank">hearthis.at</a></p>
                    </iframe>
                    <hr>
                    <iframe scrolling="no" id="hearthis_at_track_5968176" width="100%" height="130" src="https://hearthis.at/embed/5968176/transparent_black/?hcolor=&amp;color=&amp;style=2&amp;block_size=2&amp;block_space=1&amp;background=0&amp;waveform=0&amp;cover=0&amp;autoplay=0&amp;css=" frameborder="0" allowtransparency="" allow="autoplay">
                        <p>Listen to <a href="https://hearthis.at/djsnkyofficial/chhor-denge-dj-snky-remix-320kbps/" target="_blank">Chhor Denge - DJ SNKY (Remix) - 320kbps</a> <span>by</span><a href="https://hearthis.at/djsnkyofficial/" target="_blank">DJ SNKY</a> <span>on</span> <a href="https://hearthis.at/" target="_blank">hearthis.at</a></p>
                    </iframe>
                    <hr>
                    <iframe scrolling="no" id="hearthis_at_track_5821579" width="100%" height="130" src="https://hearthis.at/embed/5821579/transparent_black/?hcolor=&amp;color=&amp;style=2&amp;block_size=2&amp;block_space=1&amp;background=0&amp;waveform=0&amp;cover=0&amp;autoplay=0&amp;css=" frameborder="0" allowtransparency="" allow="autoplay">
                        <p>Listen to <a href="https://hearthis.at/djsnkyofficial/nadiyon-paar-let-the-music-play-dj-snky-shubham-daksh-remix/" target="_blank">Nadiyon Paar (Let The Music Play) - Dj Snky & Shubham Daksh (Remix)</a> <span>by</span><a href="https://hearthis.at/djsnkyofficial/" target="_blank">DJ SNKY</a> <span>on</span> <a href="https://hearthis.at/" target="_blank">hearthis.at</a></p>
                    </iframe>
                    <hr>
                </div>

                <center><a href="music.php" class="about-btn scrollto">View All</a></center>
            </section>
        </div>
    </section>

    <section class="portfolio" id="up-events">
        <div class="main-text">

            <h2><span>Upcoming </span><span id="event">Events</span></h2>
        </div>
        <div class="portfolio-content">
            <div class="container">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="./img/e1.jpeg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="./img/e2.jpeg" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="./img/e3.jpeg" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <hr>
    <?php
    include 'include/footer.php';
    ?>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="script.js"></script>
    <script src="./js/main.js"></script>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Bootstrap JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            $(window).scroll(function() {
                // Get the current scroll position
                var scroll = $(window).scrollTop();

                // Add or remove the "navbar-scrolled" class based on the scroll position
                if (scroll >= 100) {
                    $(".navbar").addClass("navbar-scrolled");
                } else {
                    $(".navbar").removeClass("navbar-scrolled");
                }
            });
        });
    </script>
    <script>
        // Close navbar when clicking outside of it
        $(document).click(function(e) {
            var target = e.target;
            if (!$(target).is('.navbar') && !$(target).parents().is('.navbar') && $('.navbar-collapse').hasClass('show')) {
                $('.navbar-toggler').click();
            }
        });
    </script>

    <script>
        // Get the modal
        var modal = document.getElementById("exampleModalCenter");

        // Get the button that opens the modal
        var btn = document.querySelector(".btn2");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // Get the iframe element
        var iframe = document.querySelector('iframe');

        // Store the video URL in a separate variable
        var videoUrl = iframe.src;

        // When the user clicks on the button, open the modal and set the video URL
        btn.onclick = function() {
            modal.style.display = "block";
            iframe.src = videoUrl;
        }

        // When the user clicks on <span> (x), close the modal and stop the video
        span.onclick = function() {
            modal.style.display = "none";
            stopVideo();
        }

        // When the user clicks anywhere outside of the modal, close it and stop the video
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
                stopVideo();
            }
        }

        // Function to stop the video
        function stopVideo() {
            iframe.src = '';
        }
    </script>

</body>

</html>