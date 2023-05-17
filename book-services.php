<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>DJ POOJA</title>
	<link rel="icon" href="./img/headphones.png" />
	<link rel="stylesheet" href="./style.css">
	<link rel="stylesheet" href="./gallary.css">
	<link rel="stylesheet" href="./include/footer.css">
	<link rel="stylesheet" href="./css/book-services.css">
	<!-- <link rel="stylesheet" href="style2.css"> -->
	<link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="./lightbox2/dist/css/lightbox.min.css" />
	<!-- stylesheet -->
	<link rel="stylesheet" href="./css/style.css" />
	<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;1,400&family=Merriweather:ital,wght@1,900&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
	<!-- <link rel="stylesheet" href="contactUs.css"> -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
	<?php
	include 'include/navbar.php';
	?>


	<?php
	session_start();
	error_reporting(0);
	include('include/dbconnection.php');

	if (isset($_POST['submit'])) {
		$bid = $_GET['bookid'];

		$name = $_POST['name'];
		$mobnum = $_POST['mobnum'];
		$email = $_POST['email'];
		$edate = $_POST['edate'];
		$est = $_POST['est'];
		$eetime = $_POST['eetime'];
		$vaddress = $_POST['vaddress'];
		$eventtype = $_POST['eventtype'];
		$addinfo = $_POST['addinfo'];
		$bookingid = mt_rand(100000000, 999999999);
		$sql = "insert into tblbooking(BookingID,ServiceID,Name,MobileNumber,Email,EventDate,EventStartingtime,EventEndingtime,VenueAddress,EventType,AdditionalInformation)values(:bookingid,:bid,:name,:mobnum,:email,:edate,:est,:eetime,:vaddress,:eventtype,:addinfo)";
		$query = $dbh->prepare($sql);
		$query->bindParam(':bookingid', $bookingid, PDO::PARAM_STR);
		$query->bindParam(':bid', $bid, PDO::PARAM_STR);
		$query->bindParam(':name', $name, PDO::PARAM_STR);
		$query->bindParam(':mobnum', $mobnum, PDO::PARAM_STR);
		$query->bindParam(':email', $email, PDO::PARAM_STR);
		$query->bindParam(':edate', $edate, PDO::PARAM_STR);
		$query->bindParam(':est', $est, PDO::PARAM_STR);
		$query->bindParam(':eetime', $eetime, PDO::PARAM_STR);
		$query->bindParam(':vaddress', $vaddress, PDO::PARAM_STR);
		$query->bindParam(':eventtype', $eventtype, PDO::PARAM_STR);
		$query->bindParam(':addinfo', $addinfo, PDO::PARAM_STR);

		$query->execute();
		$LastInsertId = $dbh->lastInsertId();
		if ($LastInsertId > 0) {
			echo '<script>alert("Your Booking Request Has Been Send. We Will Contact You Soon")</script>';
			echo "<script>window.location.href ='services.php'</script>";
		} else {
			echo '<script>alert("Something Went Wrong. Please try again")</script>';
		}
	}

	?>
	<!DOCTYPE html>
	<html>

	<head>
		<title>Online DJ Management System || Contact Us</title>
		<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
		<!-- Custom Theme files -->
		<link href="./css/services.css" rel="stylesheet" type="text/css" media="all" />
		<link rel="stylesheet" href="./css/touchTouch.css" type="text/css" media="all" />
		<!-- Custom Theme files -->
		<script src="./js/jquery.min.js"></script>

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
		<link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
		<!---//End-css-style-switecher----->
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
		<?php include_once('includes/header.php'); ?>

		<div class="contact">
			<div class="container">



				<div class="contact-grids">
					<div class="col-md-6 contact-left">
						<p>Book Your Events now. </p>
						<form method="post">

							<ul>
								<li class="text-inf">Name: </li>
								<li><input type="text" class="form-control" name="name" required="true"></li>
							</ul>
							<ul>
								<li class="text-inf">Email: </li>
								<li><input type="email" class="form-control" name="email" required="true"></li>
							</ul>
							<ul>
								<ul>
									<li class="text-inf">Mobile Number: </li>
									<li><input type="text" class="form-control" name="mobnum" required="true" maxlength="10" pattern="[0-9]+"></li>
								</ul>
								<li class="text-inf">Event Date: </li>
								<li><input type="date" class="form-control" name="edate" required="true"></li>
							</ul>
							<ul>
								<li class="text-inf">Event Starting Time:</li>
								<li><select type="text" class="form-control" name="est" required="true">
										<option value="">Select Starting Time</option>
										<option value="1 a.m">1 a.m</option>
										<option value="2 a.m">2 a.m</option>
										<option value="3 a.m">3 a.m</option>
										<option value="4 a.m">4 a.m</option>
										<option value="5 a.m">5 a.m</option>
										<option value="6 a.m">6 a.m</option>
										<option value="7 a.m">7 a.m</option>
										<option value="8 a.m">8 a.m"</option>
										<option value="9 a.m">9 a.m</option>
										<option value="10 a.m">10 a.m</option>
										<option value="11 a.m">11 a.m</option>
										<option value="12 p.m">12 a.m</option>
										<option value="1 p.m">1 p.m</option>
										<option value="2 p.m">2 p.m</option>
										<option value="3 p.m">3 p.m</option>
										<option value="4 p.m">4 p.m</option>
										<option value="5 p.m">5 p.m</option>
										<option value="6 p.m">6 p.m</option>
										<option value="7 p.m">7 p.m</option>
										<option value="8 p.m">8 p.m</option>
										<option value="9 p.m">9 p.m</option>
										<option value="10 p.m">10 p.m</option>
										<option value="10 p.m">10 p.m</option>
										<option value="12 a.m">12 a.m</option>
									</select></li>
							</ul>
							<ul>
								<li class="text-inf">Event Finish Time:</li>
								<li><select type="text" class="form-control" name="eetime" required="true">
										<option value="">Select Finish Time</option>
										<option value="1 a.m">1 a.m</option>
										<option value="2 a.m">2 a.m</option>
										<option value="3 a.m">3 a.m</option>
										<option value="4 a.m">4 a.m</option>
										<option value="5 a.m">5 a.m</option>
										<option value="6 a.m">6 a.m</option>
										<option value="7 a.m">7 a.m</option>
										<option value="8 a.m">8 a.m"</option>
										<option value="9 a.m">9 a.m</option>
										<option value="10 a.m">10 a.m</option>
										<option value="11 a.m">11 a.m</option>
										<option value="12 p.m">12 a.m</option>
										<option value="1 p.m">1 p.m</option>
										<option value="2 p.m">2 p.m</option>
										<option value="3 p.m">3 p.m</option>
										<option value="4 p.m">4 p.m</option>
										<option value="5 p.m">5 p.m</option>
										<option value="6 p.m">6 p.m</option>
										<option value="7 p.m">7 p.m</option>
										<option value="8 p.m">8 p.m</option>
										<option value="9 p.m">9 p.m</option>
										<option value="10 p.m">10 p.m</option>
										<option value="10 p.m">10 p.m</option>
										<option value="12 a.m">12 a.m</option>
									</select></li>
							</ul>
							<ul>
								<li class="text-inf">Venue Address:</li>
								<li><textarea type="text" class="form-control" name="vaddress" required="true"></textarea></li>
							</ul>
							<ul>
								<li class="text-inf">Type of Event:</li>
								<li><select type="text" class="form-control" name="eventtype" required="true">
										<option value="">Choose Event Type</option>
										<?php

										$sql2 = "SELECT * from   tbleventtype ";
										$query2 = $dbh->prepare($sql2);
										$query2->execute();
										$result2 = $query2->fetchAll(PDO::FETCH_OBJ);

										foreach ($result2 as $row) {
										?>
											<option value="<?php echo htmlentities($row->EventType); ?>"><?php echo htmlentities($row->EventType); ?></option>
										<?php } ?>
									</select></li>
							</ul>
							<ul>
								<li class="text-inf">Additional Information:</li>
								<li><textarea type="text" class="form-control" name="addinfo" required="true"></textarea></li>
							</ul>
							<center><input type="submit" name="submit" value="Book" class="button"></center>

						</form>
					</div>

					<div class="clearfix"></div>
				</div>
			</div>
			<?php include_once('includes/footer.php'); ?>
		</div>
		</div>
		<!---->

		<!---->
	</body>

	</html>
	<hr>

	<?php
	include 'include/footer.php';
	?>
	<!-- jQuery CDN Link -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
	<!-- Lightbox JS -->
	<script src="lightbox2/dist/js/lightbox.min.js"></script>
	<!-- Custom js -->
	<script src="js/main.js"></script>

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


</body>

</html>