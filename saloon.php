<?php
include('connect.php');
// All Variables
$name = $phone = $email = $subject = $message = "";
$nameError = $phoneError = $emailError = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  function test_input($data)
  {
    $data = trim($data); // trim() function is used for remove un-neccessary whitespaces.
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    $data = htmlentities($data);
    return $data;
  }

  $name = test_input($_POST['Name']);
  $phone = test_input($_POST['number']);
  $email = test_input($_POST['Email']);
  $subject = test_input($_POST['subject']);
  $message = test_input($_POST['message']);
  $userIp = test_input($_SERVER['REMOTE_ADDR']);

  // Form Validation...........................

  // Check the form is empty or not
  if (empty($name)) {
    echo "Name is required";
    die();
  } elseif (empty($phone)) {
    echo "Phone number must be required";
    die();
  } elseif (empty($email)) {
    echo "email must be required";
    die();
  } elseif (empty($subject)) {
    echo "Subject is mandatory";
    die();
  } elseif (empty($message)) {
    echo "Write somthing in your message";
    die();
  } else {
    // Check the name should contains only alphabet
    if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
      echo "Only Alphabet allowed in Name.";
      die();
    } 
    // Phone Validation
    elseif(!preg_match("/^(?:\+?1)?[0-9]{10}$/", $phone)){
      echo "Phone number must be numeric and 10 digits"; die();
    }
    // Email Validation
    elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
      echo "Write Your correct Email"; die();
    }
    else {
      // SQL query....
      $sql = "INSERT INTO `contact_form` (`name`, `phone_number`, `email`, `subject`, `message`,`ip_address`) VALUES ('$name', '$phone', '$email', '$subject', '$message','$userIp')";
      $result = mysqli_query($conn, $sql);
      if ($result) {
        session_start();
        $_SESSION['message'] = "Your Responses are successfull recorded.";
        header('Location: index.php');
      } else {
        echo "Something Wrong..!!" . mysqli_error($conn);
      }
    }
  }
}

?>