<?php
	// include config file
	require_once 'config.php';

	//a PHP Super Global variable which used to collect data after submitting it from the form
	$request = $_REQUEST;
	//student ID we are using it to get the student record
	$student_id = $request['id'];
	//get the first name value
	$first_name = $request['first_name'];
	//get the last name value
	$last_name = $request['last_name'];
	//get the birthday value
	$birthday = $request['birthday'];
	//get the address value
	$address = $request['address'];
    //get the course value
    $course = $request['course'];
    //get the year value
    $year = $request['year'];
    //get the email value
    $email = $request['email'];
    //get the phone number value
    $phone_number = $request['phone_number'];

	// Set the UPDATE SQL data
	$sql = "UPDATE tbl_students SET first_name='".$first_name."', last_name='".$last_name."', birthday='".$birthday."', address='".$address."', course='".$course."' , year='".$year."' , email='".$email."', phone_number='".$phone_number."' WHERE id='".$id."'";

	// Process the query
	if ($db->query($sql)) {
	  echo "Student has been updated.";
	} else {
	  echo "Error: " . $sql . "<br>" . $db->error;
	}

	// Close the connection after using it
	$db->close();
?>