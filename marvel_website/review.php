<?php 

$con=mysqli_connect('127.0.0.1:3308','root','','marble_db');

if(!empty($_POST['submit2'])){
    $name = $_POST['name'];
    $review = $_POST['review'];
    $message = $_POST['message'];
    $q = " INSERT INTO `review_table`( `name`, `review`, `message`) VALUES ('$name','$review','$message')";
    $run = mysqli_query($con,$q);
    if($run){
                // Send email
                $to = "shereyansjain0904@gmail.com"; // Replace with the owner's email address
                $subject = "New message from website";
                $body = "Name: $name\n\nEmail: $review\n\nMessage: $message";
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
        echo "<script>window.location.href='about.php?alert=" . urlencode($alertMessage) . "';</script>";
        exit;
}
?>