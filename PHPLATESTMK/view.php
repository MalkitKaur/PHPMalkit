<?php
require_once('database.php');
$res = $database->read(); // Retrieve data from the database using the read() method
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Malkit Pizzeria</title>
	<meta name="description" content="Malkit Pizza Webform"> <!-- Description of the web page -->
	<meta name="robots" content="noindex, nofollow">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="./css/style.css">
</head>

<body>
	<header>
		<nav>
			<div>
				<a href="index.php"><img src="./img/pizzalogo.png" alt="header logo"></a> <!-- Logo image -->
				<div>
					<ul>
						<li><a href="index.html">Home</a></li> <!-- Home link -->
						<li><a href="view.php">View</a></li> <!-- View link -->
					</ul>
				</div>
			</div>
		</nav>
	</header>
	<div>
		<div>
			<table>
				<tr>
					<th>#</th> <!-- Table column header -->
					<th>Full Name</th> <!-- Table column header -->
					<th>Address</th> <!-- Table column header -->
					<th>Contact Number</th> <!-- Table column header -->
					<th>Size</th> <!-- Table column header -->
					<th>Crust</th> <!-- Table column header -->
					<th>Cheese</th> <!-- Table column header -->
					<th>Toppings</th> <!-- Table column header -->
					<th>Dips</th> <!-- Table column header -->
				</tr>
				<?php
				while ($r = mysqli_fetch_assoc($res)) {
					?>
					<tr>
						<td>
							<?php echo $r['id']; ?>
						</td> <!-- Display the 'id' column value -->
						<td>
							<?php echo $r['fullName']; ?>
						</td> <!-- Display the 'fullName' column value -->
						<td>
							<?php echo $r['addr'] ?>
						</td> <!-- Display the 'addr' column value -->
						<td>
							<?php echo $r['contactNum'] ?>
						</td> <!-- Display the 'contactNum' column value -->
						<td>
							<?php echo $r['size'] ?>
						</td> <!-- Display the 'size' column value -->
						<td>
							<?php echo $r['crust'] ?>
						</td> <!-- Display the 'crust' column value -->
						<td>
							<?php echo $r['cheese'] ?>
						</td> <!-- Display the 'cheese' column value -->
						<td>
							<?php echo $r['pizzaToppings'] ?>
						</td> <!-- Display the 'pizzaToppings' column value -->
						<td>
							<?php echo $r['pizzaDips'] ?>
						</td> <!-- Display the 'pizzaDips' column value -->
					</tr>
					<?php
				}
				?>
			</table>
		</div>
	</div>
</body>

</html>