<?php
	session_start();

	$con = mysqli_connect('localhost','root','','womenintech');

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