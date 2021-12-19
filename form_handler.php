<?php
  $email_error = $first_name_error = $last_name_error = $number_error = $budget_error = $subject_error = $message_error = $recaptcha_error = "";
  $email = $first_name = $last_name = $number = $budget = $subject = $message = $success = "";

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

    if (empty($_POST["first_name"])) {
      $first_name_error = "First name is required";
    }
    else {
      $first_name = test_input($_POST["first_name"]);
      }

      if (empty($_POST["last_name"])) {
        $last_name_error = "Last name is required";
      }
      else {
        $last_name = test_input($_POST["last_name"]);
        }

        if (empty($_POST["number"])) {
          $number_error = "Number is required";
        }
        else {
          $number = test_input($_POST["number"]);
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



    if($email_error == "" and $first_name_error == "" and $last_name_error == "" and $number_error == "" and $budget_error == "" and $response->success) {
      $message_body = "";
      unset ($_POST['submit']);
      foreach ($_POST as $key => $value){
        $message_body .= "$key: $value\n";
      }



      $to = 'webdev@rhys-clark.com';
      $subject = test_input($_POST["budget"]);


      $message = "<html>
      <body>
      <br>
      <br>
      <h2>DETAILS</h2>
      <p><span style='font-weight:bold'> Name:</span> $first_name $last_name</p>
      <p><span style='font-weight:bold'> Phone:</span> $number</p>
      <p><span style='font-weight:bold'> Budget:</span> $budget</p>
      <br>
      <br>
      <h2>MESSAGE</h2>
      <p>$message</p>


      </body>
      </html>";



      $headers = "From: $email" . "\r\n";
      $headers .= "MIME-Version: 1.0\r\n";
      $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
      $headers .= "CC: rhysclark14@yahoo.com\r\n";

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
