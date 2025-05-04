<?php

class Begifc{

    function sendmail(){


        if(isset($_REQUEST['send'])){
            
            
            $name = htmlspecialchars($_POST["name"]);
            $phone = htmlspecialchars($_POST["phone"]);
            $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
            $subjects = htmlspecialchars($_POST["subject"]);
            $message = htmlspecialchars($_POST["message"]);

            $to = "info@begistarsfc.com"; // Replace with your email
            $subject = "New BegiStarFC Contact Form Submission"." || Subject ::". $subjects;
            $headers = "From: info@begistarsfc.com". "\r\n";
            $headers .= "Reply-To: " . "info@begistarsfc.com" . "\r\n";
            $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
            
            
            

            $body = "Name: $name\n";
            $body .= "Phone: $phone\n";
            $body .= "Email: $email\n";
            $body .= "Subject: $subject\n";
            $body .= "Message:\n$message\n";

            if (mail($to, $subject, $body, $headers)) {
                //echo "Message sent successfully!";
                echo('<div class="dzFormMsg"><div class="gen alert alert-success">Message sent successfully!..</div></div>');
            } else {
                //echo "Error sending message.";
                echo('<div class="dzFormMsg"><div class="gen alert alert-success">Message not sent </div></div>');
            }

            // <div class="dzFormMsg"><div class="gen alert alert-success">Submitting..</div></div>


        }



    }




}//end of class




// $to = "macdon302@gmail.com";
            // $subject = "My subject";
            // $txt = "Hello world!";
            // $headers = "From: Begistarsfc@begistarsfc.com" . "\r\n" .
            // "CC: somebodyelse@example.com";
            
            // mail($to,$subject,$txt,$headers);
            
            // if (mail($to, $subject, $body, $headers)) {
            //     //echo "Message sent successfully!";
            //     echo($to .  $subject. $body .$headers.'<div class="dzFormMsg"><div class="gen alert alert-success">Message sent successfully!..</div></div>');
            // } else {
            //     //echo "Error sending message.";
            //     echo('<div class="dzFormMsg"><div class="gen alert alert-success">Message not sent </div></div>');
            // }









// if ($_SERVER["REQUEST_METHOD"] == "POST") {

//     echo("hello mac");
//     $name = htmlspecialchars($_POST["name"]);
//     $phone = htmlspecialchars($_POST["phone"]);
//     $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
//     $subject = htmlspecialchars($_POST["subject"]);
//     $message = htmlspecialchars($_POST["message"]);

//     $to = "macdon302@gmail.com"; // Replace with your email
//     $subject = "New BegiStarFC Contact Form Submission";
//     $headers = "From: " . $email . "\r\n";
//     $headers .= "Reply-To: " . $email . "\r\n";
//     $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

//     $body = "Name: $name\n";
//     $body .= "Phone: $phone\n";
//     $body .= "Email: $email\n";
//     $body .= "Subject: $subject\n";
//     $body .= "Message:\n$message\n";

//     if (mail($to, $subject, $body, $headers)) {
//         echo "Message sent successfully!";
//     } else {
//         echo "Error sending message.";
//     }
// } else {
//     echo "Invalid request.";
// }
?>
