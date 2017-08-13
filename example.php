<?php

// Basic example of PHP script to handle with jQuery-Tabledit plug-in.
// Note that is just an example. Should take precautions such as filtering the input data.

header('Content-Type: application/json');

// CHECK REQUEST METHOD
if ($_SERVER['REQUEST_METHOD']=='POST') {
  $input = filter_input_array(INPUT_POST);
} else {
  $input = filter_input_array(INPUT_GET);
}

// PHP QUESTION TO MYSQL DB

// Connect to DB
$mysqli = new mysqli('localhost', 'user', 'password', 'database');

if (mysqli_connect_errno()) {
  echo json_encode(array('mysqli' => 'Failed to connect to MySQL: ' . mysqli_connect_error()));
  exit;
}

// Php question
if ($input['action'] === 'edit') {

  $mysqli->query("UPDATE users SET username='" . $input['username'] . "', email='" . $input['email'] . "', avatar='" . $input['avatar'] . "' WHERE id='" . $input['id'] . "'");

} else if ($input['action'] === 'delete') {

  $mysqli->query("UPDATE users SET deleted=1 WHERE id='" . $input['id'] . "'");

} else if ($input['action'] === 'restore') {

  $mysqli->query("UPDATE users SET deleted=0 WHERE id='" . $input['id'] . "'");

}

// Close connection to DB
mysqli_close($mysqli);

// RETURN OUTPUT
echo json_encode($input);

?>