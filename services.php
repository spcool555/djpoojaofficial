<?php
session_start();
error_reporting(0);

include('./include/dbconnection.php');
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DJ POOJA</title>
    <link rel="icon" href="./img/headphones.png" />
    <link rel="stylesheet" href="./contactUs.css">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./css/services.css">
    <link rel="stylesheet" href="./include/footer.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;1,400&family=Merriweather:ital,wght@1,900&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="js/jquery.min.js"></script>

    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!--webfont-->
    <link href='http://fonts.googleapis.com/css?family=Monoton' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,900,800,700,600,500,300,100,200' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="js/jquery.fancybox.js"></script>
    <link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css" media="screen" />
    <script type="text/javascript">
        $(document).ready(function() {
            /*
             *  Simple image gallery. Uses default settings
             */

            $('.fancybox').fancybox();

        });
    </script>

</head>

<body>

    <?php
    include 'include/navbar.php';
    ?>
    <div class="flex-container">
        <div class="container">

            <h2>Services</h2>
            <div class="flex-container">
                <?php
                $sql = "SELECT * from tblservice";
                $query = $dbh->prepare($sql);
                $query->execute();
                $results = $query->fetchAll(PDO::FETCH_OBJ);

                $cnt = 1;
                if ($query->rowCount() > 0) {
                    foreach ($results as $row) {               ?>
                        <div class="event-grids">
                            <div class="col-md-3 event-grid">

                                <ul>
                                    <li class="hedding"><?php echo htmlentities($row->ServiceName); ?></li>

                                </ul>
                                <div class="clearfix"> </div>
                            </div>
                            <div class="col-md-4 event-grid small-text">
                                <p><?php echo htmlentities($row->SerDes); ?></p>
                            </div>
                            <div class="col-md-2 event-grid large-text">
                                <p class="text">$ <?php echo htmlentities($row->ServicePrice); ?> USD</p>
                            </div>
                            <div class="col-md-3 event-grid text-button">
                                <ul>

                                    <li class="button "><a href="book-services.php?bookid=<?php echo $row->ID; ?>" id="yellow">Book Services</a></li>
                                </ul>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                <?php $cnt = $cnt + 1;
                    }
                } ?>


            </div>
        </div>
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
    <!---->

    <!---->
</body>

</html>