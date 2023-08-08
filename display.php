<?php
include 'db_connect.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">


	<title>Car Booking System</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

	<!-- Custom stlylesheet -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
	<link type="text/css" rel="stylesheet" href="css/style_display.css" />


</head>

<body>
    
<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css /> -->
<div class="container">
    <div class="row">
        <div>
            <div class="panel">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col col-sm-3 col-xs-12">
                            <h4 class="title">List of Reservations</h4>
                        </div>
                        <div class="col-sm-9 col-xs-12 text-right">
                            <div class="btn_group">
                                <input type="text" id="search" class="form-control" placeholder="Search">
                                <a href="index.php" class="text-light"> <button class="btn btn-default" title="Add"><i class="fa fa-plus"></i></a></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-body table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                
                                <th>Full Name</th>
                                <th>Email</th>
                                <th>Phone Number</th>
                                <th>Pickup Location</th>
                                <th>Destination Address</th>
                                <th>Pickup Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                        <?php
                        $sql="SELECT * FROM booking";
                        $result=mysqli_query($con,$sql);
                        if($result){
                           while($row=mysqli_fetch_assoc($result)){
                            $id=$row['id'];
                            $name=$row['name'];
                            $email=$row['email'];
                            $phone=$row['phone'];
                            $pickup=$row['pickup'];
                            $destination=$row['destination'];
                            $date=$row['date'];

                            echo'
                            <tr class="reservation-row">
                               
                                <td>'.$name.'</td>
                                <td>'.$email.'</td>
                                <td>'.$phone.'</td>
                                <td>'.$pickup.'</td>
                                <td>'.$destination.'</td>
                                <td>'.$date.'</td>
                                <td>
                                    <ul class="action-list">
                                        <li><a href="update.php?updateid='.$id.'" data-tip="edit"><i class="fa fa-edit"></i></a></li>
                                        <li><a href="delete.php?deleteid='.$id.'" data-tip="delete"><i class="fa fa-trash"></i></a></li>
                                    </ul>
                                </td>
                            </tr>
                            ';
                           }
                        }


                        ?>
                        
                            
                            
                            
                            
                        </tbody>
                    </table>
                </div>
                
            </div>
        </div>
    </div>
</div>
    </body>
    <script>
        
    document.addEventListener("DOMContentLoaded", function() {
        const searchInput = document.getElementById("search");
        const reservationRows = document.querySelectorAll(".reservation-row");

        searchInput.addEventListener("input", function() {
            const searchTerm = searchInput.value.trim().toLowerCase();

            reservationRows.forEach(function(row) {
                const rowContent = row.textContent.toLowerCase();
                if (rowContent.includes(searchTerm)) {
                    row.style.display = ""; // Show row
                } else {
                    row.style.display = "none"; // Hide row
                }
            });
        });
    });


    </script>
    </html>