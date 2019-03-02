<?php 
     

     if(isset($_POST['submit']))

     $name = $_POST['name'];
     $subject = $_POST['subject'];
     $phone = $_POST['phone'];
     $mailFrom = $_POST['email'];
     $message = $_POST['message'];

     $mailTo = "info@caspianpalace.com";
     $headers = "From: ".$mailFrom;
     $text = "Recieved email from ".$name.".\n\n".$message;

     mail($mailTo, $subject, $text, $headers);
     header("Location: index.html");
     

     ?>