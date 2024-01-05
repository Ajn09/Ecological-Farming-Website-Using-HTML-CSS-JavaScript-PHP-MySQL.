<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Ecological Farming-Field Officer </title>
	<link rel="sr icon" href="img/doa.png">
</head>
<body>

 <div class="landing">
 	<header>
		<input type="checkbox" name="" id="toggler">
        <label for="toggler" class="fas fa-bars"></label>

 		<a href="af.html" id="logo"><font color=orange>Ecological <span><font color=green>Farming </span></a>
		<div>
		<!-- Nav Bar Start -->
 	    <nav>
		<div >
		<a><h1 ><center> Welcome <span>Field Officer</h1></a>
		</div>

						<a type="submit" href=index.html>Logout</a>
						
						</div>
						</div>
			</nav>
			<script src="js/script.js"></script>
			</body>
			<!-- Nav Bar End -->
<br>
							</div>
                            <div>
                            <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Details</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 15px; /* Increase padding for more height */
            text-align: left;
        }

        th {
            background-color: #333;
            color: white;
        }

        /* Responsive styles */
        @media (max-width: 768px) {
            table {
                font-size: 14px;
            }

            th,
            td {
                padding: 8px;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Data from Database</h1>

<!-- Include the PHP script to display details -->
<?php
$con = mysqli_connect("localhost", "root", "", "ef");

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}

$sql = "SELECT * FROM queries";
$result = mysqli_query($con, $sql);

if (!$result) {
    echo "Error: " . mysqli_error($con);
} else {
    echo "<table border='1'>
            <tr>
                <th>First Name</th>
                <th>Phone Number</th>
                <th>Service</th>
                <th>Queries</th>
            </tr>";

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
                <td>{$row['fname']}</td>
                <td>{$row['pno']}</td>
                <td>{$row['serve']}</td>
                <td>{$row['quer']}</td>
              </tr>";
    }

    echo "</table>";
}

mysqli_close($con);
?>
                            </div>

</body>
</html>
