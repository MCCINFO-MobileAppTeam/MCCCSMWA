<?php
	session_start();
	if (!isset($_SESSION['user']) || ($_SESSION['authorized'] != "true")) {
		redirect('appointment_login.php');
		//echo "Warning!!!!!";
		//die();
	}
	function redirect($page = 'appointment_login.php'){
		$url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']);
		$url = rtrim($url, '/\\');
		$url .= '/' . $page;
		header("Location: $url");
		exit();
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>View Appointment Requests</title>
	<meta charset="utf-8">
	<link href="css/appointments.css" rel="stylesheet"/>
	
	<script type="text/javascript" src="includes/jquery.js"></script>
	<script type="text/javascript" src="includes/appointment.js"></script>
	<script type="text/javascript" src="includes/jquery.tablesorter.min.js"></script> 
	
	<link href="JQueryUI/jquery-ui.min.css" rel="stylesheet">
	
</head>
<body>
	<div id="container">
		<div id="menu">
			<a class="nav-button" href="#">Add User</a>
			<a class="nav-button" href="#">Calendar</a>
			<a class="nav-button" href="#">List</a>
			<a class="nav-button" href="logout.php">Logout</a>
		</div>
		<table id="appointments" class="tablesorter">
			<thead id="thead">
			<tr id="thead">
				<script>var list = [];</script>
				<th>Last Name</th>
				<th>First Name</th>
				<th>Date</th>
				<th>Location</th>
				<th>Status</th>
			</tr>
			</thead>
			<tbody>
				<?php #viewAppointments
						//print Appointment table
						
						//connect DB
						require('includes/mysqli_connect.php');
						
						//query for appointments
						$q = "SELECT appt_request_id, first_name, last_name, email_addr, type_1, type_2, type_3, mcc_status, contact_method, phone, mtg_days, mtg_time, mtg_location, status, last_mod_dt, comments FROM appt_request";
						$r = mysqli_query ($dbc, $q);
						
						//populate appointment table
						if ($r){
							$i=1;
							while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC)){
								echo '<tr id="'.$i.'" class="select">
													'/* store information */.'
													<script>list['.$i.']=[
																						"'.$row['appt_request_id'].'",
																						"'.$row['first_name'].'",
																						"'.$row['last_name'].'",
																						"'.$row['email_addr'].'",
																						"'.$row['type_1'].'",
																						"'.$row['type_2'].'",
																						"'.$row['type_3'].'",
																						"'.$row['mcc_status'].'",
																						"'.$row['contact_method'].'",
																						"'.$row['phone'].'",
																						"'.$row['mtg_days'].'",
																						"'.$row['mtg_time'].'",
																						"'.$row['mtg_location'].'",
																						"'.$row['status'].'",
																						"'.$row['last_mod_dt'].'",
																						"'.$row['comments'].'"
													];</script>
													'/*Display basic table information*/.'
													<td class="fname">' . $row['last_name'] . '</td>
													<td class="lname">' . $row['first_name']. '</td>
													<td class="date">' . $row['last_mod_dt'] . '</td>
													<td class="location capitalize">' . $row['mtg_location'] . '</td>
													<td class="status capitalize">' . $row['status'] . '</td>
													
													
											</tr>
											';
								$i++;
							}
							//clean up DB connection
							mysqli_free_result ($r);
						}else{
							//If no list is found, give error
							echo '<p>Unable to retrieve list</p>';
						}
						echo '</table>';
						
						//close DB connection
						mysqli_close($dbc);
				?>
			</tbody>
		</table>
	</div>
	<div id="box">
			<form id="update" action="update.php" method="post">
				<input type="text" name="TableID" id="TableID">
				<a id="name"></a>
				<table>
					<tr>
						<td>Status:</td>
						<td>
							<select type="text" name="status" id="status">
								<option value="Requested">Requested</option>
								<option value="Scheduled">Scheduled</option>
								<option value="Completed">Completed</option>
								<option value="Canceled">Canceled</option>
							</select>
						</td>
						<td>Last mod date:</td><td><a id="lastmod"></a></td>
					</tr>
					<tr>
						<td>Contact Method:</td>
						<td>
							<a id="contact"></a>
						</td>
						<td>Available Times:</td>
						<td>
							<a id="time"></a>
						</td>
					</tr>
					<tr>
						<td>Days Available:</td><td colspan="3"><a id="days"></a></td>
					</tr>
					<tr>
						<td>Email:</td><td><a id="email"></a></td>
						<td>Phone:</td><td><a id="phone"></a></td>
					</tr>
					
					
					
					
					<tr>
						<td>Prefered Location:</td>
						<td>
							<select type="text" name="location" id="location">
								<option value="None Specified">None Specified</option>
								<option value="Any Location">Any Location</option>
								<option value="Elkhorn Valley Campus">Elkhorn Valley Campus</option>
								<option value="Fort Omaha Campus">Fort Omaha Campus</option>
								<option value="MCC Express">MCC Express</option>
							</select>
						</td>
					</tr>
					
					
					<tr>
						<td>Type 1: <a id="type1"></a></td><td>Type 2: <a id="type2"></a></td><td>Type 3: <a id="type3"></a></td>
					</tr>
					<tr>
						<td colspan="4">Comments:<br /><textarea id="comments" name="comments" rows="5" cols="300" maxlength="500" ></textarea></td>
					</tr>
					
					<tr>
						<td><input type="button" value="cancel" onclick='hideBox();'></td>
						<td><input type="submit" name="submit" value="submit"></td>
					</tr>
				</table>
			</form>
	</div>
</body>
</html>