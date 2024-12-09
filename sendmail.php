<?php

require_once('includes/connect.php');

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$msg = $_POST['message'];

$errors = [];

$fname = trim($fname);
$lname = trim($lname);
$email = trim($email);
$msg = trim($msg);

if(empty($fname)) {
    $errors['fname'] = 'First Name cannot be empty';
}
if(empty($lname)) {
    $errors['lname'] = 'Last Name cannot be empty';
}
if(empty($msg)) {
    $errors['message'] = 'Message field cannot be empty';
}
if(empty($email)) {
    $errors['email'] = 'You must provide an email';
} else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors['legit_email'] = 'You must provide a REAL email';
}

if(empty($errors)) {
    $query = "INSERT INTO contact (fname, lname, email, message) VALUES('.$fname', '.$lname', '.$email', '.$msg')";

    if(mysqli_query($connect, $query)) {
        $to = 'm_gabbassova@fanshaweonline.ca';
        $subject = 'Message from your Portfolio Website!';

        $message = "You have received a new contact form submission:\n\n";
        $message .= "Name: ".$fname." ".$lname."\n";
        $message .= "Email ".$email."\n\n";

        mail($to,$subject,$message);
        header('Location: thank_you.php');
        } else {
        echo "Database insertion failed!";
        }
        
        } else {
            foreach ($errors as $error) {
                echo $error . '<br>';
            }
        }

?>