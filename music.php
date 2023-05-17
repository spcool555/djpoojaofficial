<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DJ POOJA</title>
    <link rel="icon" href="./img/headphones.png" />
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./music.css">
    <link rel="stylesheet" href="./include/footer.css">
    <!-- <link rel="stylesheet" href="style2.css"> -->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;1,400&family=Merriweather:ital,wght@1,900&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="contactUs.css">
</head>

<body>
    <?php
    include 'include/navbar.php';
    ?>
    <div class="cantainer">
        <section id="speakers" class="wow fadeInUp" style="background: black">
            <div class="container">
                <center>
                    <div class="section-header"><br><br>
                        <h2><span> Top </span> <span id="event"> Remixes </span></h2>
                        <p><span id="event"> 100+ Mixes from Hearthis Free (Listen/Download) </span></p>
                    </div>
                </center>

                <div class="row">

                    <iframe scrolling="no" id="hearthis_at_user_dj-pooja" width="100%" height="350" src="https://app.hearthis.at/dj-pooja/embed/?hcolor=ba1010&css=&skin=black" frameborder="0" allowtransparency></iframe>
                </div>
            </div>

        </section>
    </div>
    <?php
    include 'include/footer.php';
    ?>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="script.js"></script>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Bootstrap JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
    <script src="./script.js"></script>
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