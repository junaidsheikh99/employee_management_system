<?php
session_start();

// Check if user is already logged in and redirect to index page
if (isset($_SESSION['email'])) {
	header("Location: index.php");
	exit();
}

// Initialize variables
$email = "";
$password = "";
$errors = array();

// Connect to database
$servername = "localhost";
$username = "root";
$dbpassword = "";
$dbname = "ems";

// Create connection
$conn = new mysqli($servername, $username, $dbpassword, $dbname);

// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

// Login validation
if (isset($_POST['login_user'])) {
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$password = mysqli_real_escape_string($conn, $_POST['password']);

	// Check for empty fields
	if (empty($email)) {
		array_push($errors, "Email is required");
	}
	if (empty($password)) {
		array_push($errors, "Password is required");
	}

	// If no errors, validate login credentials
	if (count($errors) == 0) {
		$query = "SELECT * FROM employee WHERE email='$email' AND password='$password'";
		$results = mysqli_query($conn, $query);

		if (mysqli_num_rows($results) == 1) {
			// Set session variables and redirect to index page
			$_SESSION['email'] = $email;
			header("location: index.php");
		} else {
			array_push($errors, "Invalid email or password");
		}
	}
}

// Close connection
mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
</head>
<body>
	<h2>Login Form</h2>

	<form method="post" action="login.php">
		<?php include('errors.php'); ?>
		<label>Email:</label>
		<input type="email" name="email" value="<?php echo $email; ?>"><br><br>
		<label>Password:</label>
		<input type="password" name="password"><br><br>
		<input type="submit" name="login_user" value="Login">
	</form>
