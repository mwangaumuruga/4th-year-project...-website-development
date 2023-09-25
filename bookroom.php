<!DOCTYPE html>
<html>
<head>
	<title>MAKE AN ORDER</title>
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
		text-align: center;
	}
	td {
		text-align: left;
	}
	th {
		font-weight: bold;
		text-align: left;
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
	li a:active {
	  	background-color: #e6b800;
	  	color: white;
	  	text-decoration: underline;		
	}
	li a:hover {
	  	background-color: #e6b800;
	  	color: white;
	  	text-decoration: underline;
	}
	.basic_box {
		border: 1px solid #ccc;
		border-radius: 15px;
		margin: auto;
		width: 600px;
		padding: 50px;
		box-shadow: 0 10px 20px rgba(0,0,0,0.19);
	}
</style>
<body>
	<?php
		$conn = new mysqli("localhost","root","", "iwp");
		if($conn->connect_error)
		{
			die("Connection failed: ".$conn->connect_error);
		}
		$sql = "SELECT * from temp_session";
		$result=mysqli_query($conn, $sql);
		$row=mysqli_fetch_row($result); ?>
	<table style="width: 100%;">
		<tr>
			<td id="td1" style="padding: 10px; font-size: 48px;">My <p style="color: #e6b800; display: inline;">Profile</p></td>
			<td id="td1" style="font-size: 25px; text-align: right;">Hello, <?php echo $row[2]; ?></td>
		</tr>
	</table>
	<ul>
		<li><a href="user_view.php">My Info</a></li>
		<li><a href="bookroom.php">Order a Meal</a></li>
		<li><a href="user_room_status.php">Show Order Status</a></li>
		<li><a href="user_payment.php">Payment</a></li>
		<li><a href="user_booking_history.php">Booking History</a></li>
		<li><a href="index.php">Logout</a></li>
	</ul>
	<div style="margin-left:25%;padding:1px 16px;height:1000px;">
		<p style="margin-left: 10%; margin-top: 5%; font-size: 28px;"></p>
			<table class="basic_box">
				<tr>
					<th colspan="3"><p style="font-size: 28px; text-align: center; text-decoration: underline;"><h2>TODAYS MENU</h2>
<table> 
    <thead> 
        <tr><td>MEAL </td> <td>PRICE</td></tr>
    </thead>
    <tbody> 
        <tr><td>ugali   </td> <td>15</td></tr>
        <tr><td>chapati </td> <td>20</td></tr>
        <tr><td>beans   </td> <td>15</td></tr>
        <tr><td>matumbo </td> <td>40</td></tr>
        <tr><td>beef    </td> <td>30</td></tr>
        <tr><td>githeri </td> <td>40</td></tr>
        <tr><td>noodles </td> <td>70</td></tr>
    </tbody>
</table>
			</table><br><br>
			<form class="basic_box" action="queuestats.php" method="post">
				<table>
					<br><br>
					<tr>
						<td style="text-align: left;">Select Meal type:</td>
						<td style="text-align: left;">
							<select name="meals" required>
								<option value="">Select</option>
								<option value="Breakfast">Breakfast</option>
								<option value="Lunch">Lunch</option>
								<option value="Supper">Supper</option>
							</select>
						</td>
					</tr>
					
						</td>
					</tr>
				</table>
				<table>
					<br>
					<tr>
						<th>MEAL</th>
					</tr>
					<tr>
						<td><input type="checkbox" name="ugali" value="on">ugali </td>
						<td style="text-align: center;">15</td>
					</tr>
					<tr>
						<td><input type="checkbox" name="chapati" value="on">chapati</td>
						<td style="text-align: center;">10</td>
					</tr>
					<tr>
						<td><input type="checkbox" name="beans" value="on">Beans</td>
						<td style="text-align: center;">15</td>
					</tr>
					<tr>
						<td><input type="checkbox" name="matumbo" value="on">matumbo</td>
						<td style="text-align: center;">30</td>
					</tr>
					<tr>
						<td><input type="checkbox" name="noodles" value="on">noodles</td>
						<td style="text-align: center;">75</td>
					</tr>
					<tr>
						<td><input type="checkbox" name="githeri" value="on">githeri</td>
						<td style="text-align: center;">30</td>
					</tr>
					<tr><br></tr>
					<tr>
						<td colspan="2" style="text-align: center;"><input type="submit" value="Submit"></td>
					</tr>
				</table>
			</form>
	</div>
</body>
</html>