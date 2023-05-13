<?php
	// include config file
	require_once 'config.php';

	//a PHP Super Global variable which used to collect data after submitting it from the form
	$request = $_REQUEST;
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
	// Defined $result as array
	$result = [];

	// Check if no errors
	if(isEmail($email)):
		// SQL Statement
		$sql = "INSERT INTO tbl_students (last_name, first_name, birthday, address, course, year, email, phone_number)
		VALUES ('".$last_name."', '".$first_name."', '".$birthday."', '".$address."','".course."','".year."','".email."','".phone_number."')";

		// Process the query
		if ($db->query($sql)) {
		  $result['response'] = "Student has been created.";
		} else {
		  $result['response'] = "Error: " . $sql . "<br>" . $db->error;
		}

		// Close the connection after using it
		$db->close();

	else://display errors
		$result['has_error'] = 1;
		$result['response'] = "Email address is invalid.";
	endif;

	// Encode array into json format
	echo json_encode($result);


?>