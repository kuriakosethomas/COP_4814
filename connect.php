
<?php

$name = filter_input(INPUT_POST, 'name');
$phone = filter_input(INPUT_POST, 'phone');
$email = filter_input(INPUT_POST, 'email');
$department = filter_input(INPUT_POST, 'department');
$start_date = filter_input(INPUT_POST, 'start_date');
$end_date = filter_input(INPUT_POST, 'end_date');
$loc_main = filter_input(INPUT_POST, 'loc_main');
$loc_ballroom = filter_input(INPUT_POST, 'loc_ballroom');
$loc_emb = filter_input(INPUT_POST, 'loc_emb');
$loc_north_vc = filter_input(INPUT_POST, 'loc_north_vc');


if (!empty($username)){
	if (!empty($password)){
			$host = "10.100.103.206";
			$dbusername = "root";
			$dbpassword = "root";
			$dbname = "GC_flyer";
			// Create connection
			$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
			if (mysqli_connect_error()){
			die('Connect Error ('. mysqli_connect_errno() .') '
			. mysqli_connect_error());
			}
			else{
			$sql = "INSERT INTO request (username, password)
			values ('$username','$password')";
			if ($conn->query($sql)){
			echo "Your request has been submitted for review.";
			}
			else{
			echo "Error: ". $sql ."
			". $conn->error;
			}
			$conn->close();
			}
			}
			else{
			echo "Password should not be empty";
			die();
		}
	}
	else{
	echo "Username should not be empty";
	die();
}
?>
