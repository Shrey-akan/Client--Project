<?php 

$con=mysqli_connect('127.0.0.1:3308','root','','marble_db');

if(!empty($_POST['submit1'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $q = " INSERT INTO `contact_details`( `name`, `email`, `message`) VALUES ('$name','$email','$message')";
    $run = mysqli_query($con,$q);
    if($run){
                // Send email
                $to = "shereyansjain0904@gmail.com"; // Replace with the owner's email address
                $subject = "New message from website";
                $body = "Name: $name\n\nEmail: $email\n\nMessage: $message";
                $headers = "From: $email";
        
                if (mail($to, $subject, $body, $headers)) {
                    echo "Successfully sent the message and email.";
                } else {
                    echo "Successfully saved the message but failed to send the email.";
                }
    }
    else{
        echo "not";
    }
        // Redirect to the same page with the alert message
        echo "<script>window.location.href='index.php?alert=" . urlencode($alertMessage) . "';</script>";
        exit;
}
?>