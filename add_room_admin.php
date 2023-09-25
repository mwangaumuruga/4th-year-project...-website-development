<!DOCTYPE html>
<html>
<head>
	<title>ADMIN EDIT MENUS</title>
</head>
<style>
	body {
	  margin: 0;
	  background: #f2f2f2;
	}
	table {
		font-size: 22px;
	}
	#td1
	{
		background-color: rgba(09,41,98,0.9);
		color: white;
		border: 10px;
		margin-top: -10px;
		padding: 10px;
	}
	.basic_box {
		border: 1px solid #ccc;
		border-radius: 15px;
		margin: auto;
		width: 600px;
		padding: 50px;
		box-shadow: 0 10px 20px rgba(0,0,0,0.19);
	}
	td {
		text-align: center;
	}
	th {
		font-weight: bold;
		padding-left: 15px;
	}
	ul {
	  	list-style-type: none;
	  	margin: 0;
	  	padding: 0;
	  	width: 22%;
	  	font-size: 24px;
	  	background-color: rgba(09,41,98,0.9);
	  	text-decoration: none;
	  	position: fixed;
	  	height: 100%;
	  	overflow: auto;
	}
	li {
		color: white;
	}
	li a {
	  	display: block;
	  	color: white;
	  	padding: 8px 16px;
	  	text-decoration: none;
	}

	li a.active {
	  	background-color: #e6b800;
	  	color: white;
	}

	li a:hover:not(.active) {
	  	background-color: #e6b800;
	  	color: white;
	  	text-decoration: underline;
	}
</style>
<body>
	<table style="width: 100%;">
		<tr>
			<td id="td1" style="padding: 10px; font-size: 48px;"><p style="color: #e6b800; display: inline;">Admin</p> Page</td>
		</tr>
	</table>
	<ul>
		<li><a href="admin_view.php" class="active">Menu Info</a></li>
		<li><a href="add_room_admin.php">Add A Meal</a></li>
		<li><a href="remove_room_admin.php">Remove Meal</a></li>
		<li><a href="admin_room_status.php">Order Requests</a></li>
		<li><a href="confirmed_bookings.php">Confirmed Orders</a></li>
		<li><a href="booking_history.php">Order History</a></li>
		<li><a href="index.php">Logout</a></li>
	</ul>
	<div style="margin-left:25%;padding:1px 16px;height:1000px;">
		<p style="margin-left: 10%; margin-top: 5%; font-size: 28px;"></p>
		<?php
			$conn = new mysqli("localhost","root","", "iwp");
			if($conn->connect_error)
			{
				die("Connection failed: ".$conn->connect_error);
			}
			$sql = "SELECT * from rooms_count";
			$result=mysqli_query($conn,$sql); ?>
			<div class="basic_box">
		  	<table>
				<tr>
					<th colspan="4"><p style="font-size: 28px; text-align: center; text-decoration: underline;">Add Meal</p></th><!--</tr>
				</tr>
				<tr>
					<th>Meal Type</th>
					<th>Price</th>
				
		 <?php 
			while ($row=mysqli_fetch_row($result))
    		{	?>	
				<tr>
					<td><?php echo $row[0]; ?></td>
					<td><?php echo $row[1]; ?></td>
					<td><?php echo $row[2]; ?></td>
					<td><?php echo $row[3]; 
			} ?></td>
				</tr>
			</table>
		-->
			<br><br><br>
			<form action="admin_room_added.php" method="post">
			<table>
				<tr><br>
					<td style="text-align: left;"><b>Select Meal:</td>
					<td style="text-align: left;">
						<select name="rooms" required> <br>
							<option value="">Select</option><br>
							<option value="Single bed">Breakfast</option>
							<option value="Double bed">Lunch</option>
							<option value="Four bed">Supper</option>
						</select>
					</td>
				</tr>
				<tr>
				<td style="text-align: left;">Enter Name of Meal:<input type="text"></td>
					<td style="text-align: left;">Enter Price:</td>
					<td style="text-align: left;"><input type="text"  name="noofrooms" id="rooms" required></td>
				</tr>
				<tr><td></td></tr><tr><td></td></tr>
			</table>
			<span style="margin-left: 43%"><input align="center" type="submit" value="Add Meal"></span>
			</form>
			<br><br>
		</div>
	</div>
</body>
</html>