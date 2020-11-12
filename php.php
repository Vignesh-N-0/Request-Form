<?php
$name=$_POST['Name'];
$email=$_POST['Email'];
$Option=$_POST['app']['Sofftware'];
$message=$_POST['Message'];

$email_from='bad420eye@gmail.com';

$email_subject="new form submission";

$email_body="User Name: $name.\n".
              "User Email: $email.\n".
                "User Option: $Option.\n".
                 "User Message: $message.\n";

$to ="420hackernoob@gmail.com";
$headers="From: $email_from \r\n";
'''$headers .="Reply-To: $email \r\n";'''
if(mail($to,$email_subject,$email_body,$headers)){
  echo "Request Send Sucessfuly";
}
else {
  echo "Request Can't Send";
}
header("Location: html.html");
?>
