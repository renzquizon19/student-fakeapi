<?php
	// include config file
	require_once 'config.php';

	//a PHP Super Global variable which used to collect data after submitting it from the form
	$request = $_REQUEST;
	//employee ID we are using it to get the employee record
	$student_id = $request['id'];

	// Set the DELETE SQL data
	$sql = "DELETE FROM tbl_students WHERE id='".$student_id."'";

	// Process the query so that we will save the date of birth
	if ($db->query($sql)) {
	  echo "Student has been deleted.";
	} else {
	  echo "Error: " . $sql . "<br>" . $db->error;
	}

	// Close the connection after using it
	$db->close();
?>