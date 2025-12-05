<!DOCTYPE html>
<html >
<head>
	<meta charset="UTF-8">
	<title>Registraton Page</title>
	<link rel="icon" type="image/png" sizes="96x96" href="images/favicon.ico">
	<link rel="stylesheet" href="css/rg_style.css">
	<link rel="stylesheet" href="css/style.css">

  
</head>

<body>
  	

<form action="action.php" method="post">
  <h2>User Registraton</h2>
		<!--<p>
			<label for="ID" class="floatLabel">ID</label>
			<input id="id" name="U_id" type="text">
		</p>-->
		<p>
			<label for="Name" class="floatLabel">Name</label>
			<input id="name" name="U_Name" type="text">
		</p>
		<p>
			<label for="Email" class="floatLabel">Email</label>
			<input id="Email" name="U_mail" type="email">
		</p>
		<p>
			<label for="password" class="floatLabel">Password</label>
			<input id="password" name="u_pass" type="password">
			<span>Enter a password longer than 8 characters</span>
		</p>
		<p>
			<label for="confirm_password" class="floatLabel">Confirm Password</label>
			<input id="confirm_password" name="confirm_password" type="password">
			<span>Your passwords do not match</span>
		</p>
		<p>
			<label for="cell_no" class="floatLabel">Phone Number</label>
			<input id="cell_no" name="cell_no" type="text">
		</p>
		<p>
			<label for="Dept" class="floatLabel">Department</label>
			<select type="text" name="Dept">
			  <option value="CSE" name="dept" type="text">CSE</option>
			  <option value="EEE" name="dept" type="text">EEE</option>
			  <option value="TEXTILE" name="dept" type="text">TEXTILE</option>
			  <option value="ARC" name="dept" type="text">ARC</option>
			  <option value="ADMIN" name="dept" type="text">ADMIN</option>
			  <option value="IT" name="dept" type="text">IT</option>
			  <option value="LAW" name="dept" type="text">LAW</option>
			  <option value="BBS" name="dept" type="text">BBS</option>
			</select>
			<!---<input id="dept" name="Dept" type="text">-->
		</p>
		<p>
			<label for="post" class="floatLabel">Designation</label>
			<select type="text" name="Post" id="post">
				<option>Officer</option>
				<option>Jr. Officer</option>
				<option>Jr. Lecturer</option>
				<option>Lecturer</option>
				<option>Sr. Lecturer</option>
				<option>Professor</option>
				<option>Associate Professor</option>
				<option>Deen</option>
				<option>V.C.</option>
			</select>
			<!---<input id="post" name="Post" type="text">-->
		</p>
		<p>
			<label for="room" class="floatLabel">Setting Place</label>
			<select type="text" name="room" id="room">
				<option>101</option>
				<option>102</option>
				<option>103</option>
				<option>201</option>
				<option>202</option>
				<option>203</option>
				<option>301</option>
				<option>302</option>
			</select>
			<!--<input id="room" name="room" type="text">-->
		</p>
		<p>
			<input type="submit" value="Create My Account" id="submit">
		</p>
		<a href="login.php" value="login">Go to home page</a>
	</form>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>

</body>
</html>
