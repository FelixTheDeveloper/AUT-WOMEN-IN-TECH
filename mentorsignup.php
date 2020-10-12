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

	#check member isnt already in mentors
	$fetchMentor = "SELECT * FROM mentors WHERE member_id ='$memberId'";
	$mentorProfile = mysqli_query($con,$fetchMentor);

	if (mysqli_num_rows($mentorProfile) == 0) {
		$insertMember = "INSERT INTO mentors (member_id) VALUES ('$memberId')";

		if(!mysqli_query($con, $insertMember)) {
			echo "Could not insert, please try again.";
		} else {
			echo "";
		}
	}

    header("location: mentoring.php");
?>