<?php
		session_start();
		require_once('vendor/autoload.php');
	
		\Dotenv\Dotenv::create(__DIR__)->load();

	$con = mysqli_connect($_ENV['DB_HOST'],$_ENV['DB_USER'],$_ENV['DB_PASS'],$_ENV['DB_NAME']);

	if (!$con) {
		echo "Server error";
	}
	
	$email = $_SESSION['email'];
	$fetchProfile = "SELECT * FROM members WHERE email ='$email'";
	$profile = mysqli_query($con,$fetchProfile);

	$memberId = mysqli_fetch_array($profile)['id'];

	#check member isnt already in mentees
	$fetchMentee = "SELECT * FROM mentees WHERE member_id ='$memberId'";
	$menteeProfile = mysqli_query($con,$fetchMentee);

	if (mysqli_num_rows($menteeProfile) == 0) {
		$insertMember = "INSERT INTO mentees (member_id) VALUES ('$memberId')";

		if(!mysqli_query($con, $insertMember)) {
			echo "Could not insert, please try again.";
		} else {
			echo "";
		}
	}

    header("location: mentoring.php");
?>