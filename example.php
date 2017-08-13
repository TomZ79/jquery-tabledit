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

  /*  Your code for new connection to DB*/


// Php question
if ($input['action'] === 'edit') {

  // PHP code for edit action

} else if ($input['action'] === 'delete') {

  // PHP code for edit delete

} else if ($input['action'] === 'restore') {

  // PHP code for edit restore

}

// Close connection to DB

/*  Your code for close connection to DB*/

// RETURN OUTPUT
echo json_encode($input);

?>