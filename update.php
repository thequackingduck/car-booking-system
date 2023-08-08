<?php
include 'db_connect.php';
$id=$_GET['updateid'];
$sql="SELECT * FROM booking WHERE id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$name = $row['name'];
$email = $row['email'];
$phone = $row['phone'];
$pickup = $row['pickup'];
$destination = $row['destination'];
$date = $row['date'];

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $pickup = $_POST['pickup'];
    $destination = $_POST['destination'];
    $date = $_POST['date'];

    $sql = "UPDATE booking SET id=$id, name='$name', email='$email', phone='$phone', pickup='$pickup', 
    destination='$destination', date='$date'
    WHERE id=$id";
    $result = mysqli_query($con, $sql);
    if($result){
        echo "Data updated successfully";
	  // header('location:display.php');
    }else{
        die(mysqli_error($con));
    }
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">


	<title>Car Booking Ssytem</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/style.css" />


</head>

<body>
	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="booking-form">
						<div class="form-header">
							<h1>Reservation Information</h1>
						</div>
						<form method="POST">
							<div class="row">
								<div class="col-sm-6">
									<div class="form-group">
										<span class="form-label">Name</span>
										<input class="form-control" type="text" name="name" value=<?php echo $name; ?> placeholder="Enter your name">
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<span class="form-label">Email</span>
										<input class="form-control" type="email" name="email" value=<?php echo $email; ?> placeholder="Enter your email">
									</div>
								</div>
							</div>
							<div class="form-group">
								<span class="form-label">Phone</span>
								<input class="form-control" type="tel" name="phone" value=<?php echo $phone; ?> placeholder="Enter your phone number">
							</div>
							<div class="form-group">
								<span class="form-label">Pickup Location</span>
								<input class="form-control" type="text" name="pickup" value=<?php echo $pickup; ?> placeholder="Enter ZIP/Location">
							</div>
							<div class="form-group">
								<span class="form-label">Destination</span>
								<input class="form-control" type="text" name="destination" value=<?php echo $destination; ?> placeholder="Enter ZIP/Location">
							</div>
							<div class="row">
								<div class="col-sm-12">
									<div class="form-group">
										<span class="form-label">Pickup Date</span>
										<input class="form-control" type="date" name="date" value=<?php echo $date; ?> required>
									</div>
								</div>
								
							</div>
							<div class="form-btn">
								<button class="submit-btn" name="submit">Update</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

</html>