<?php
  $email_error = $budget_error = $subject_error = $message_error = "";
  $email = $budget = $subject = $message = $success = "";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["email"])) {
      $email_error = "Email is required";
    }
    else {
      $email = test_input($_POST["email"]);
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $email_error = "Invalid email format";
      }
    }


    if (empty($_POST["budget"])) {
      $budget_error = "Budget is required";
    }
    else {
      $budget = test_input($_POST["budget"]);
      }


    if (empty($_POST["message"])) {
      $message = "";
    }
    else {
      $message = test_input($_POST["message"]);
    }


    $secretKey = "6LcqM-4UAAAAAEtu2TUYysAVepN-pK_7Ef03KCny";
		$responseKey = $_POST['g-recaptcha-response'];
		$url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$responseKey";
		$response = file_get_contents($url);
		$response = json_decode($response);
    if ($response->success)
			;
		else
		 	$recaptcha_error ="Verification Failed, Please Tick the Captcha";



    if($email_error == "" and $budget_error == "" and $response->success) {
      $message_body = "";
      unset ($_POST['submit']);
      foreach ($_POST as $key => $value){
        $message_body .= "$key: $value\n";
      }

      $to = 'webdev@rhys-clark.com';
      $subject = test_input($_POST["budget"]);
      $headers = "From: $email";
      if (mail($to, $subject, $message, $headers)){
        $success = "Message Sent";
        $email = $budget = $subject = $message = '';
      }

    }
  }





function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
