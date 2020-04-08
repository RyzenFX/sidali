<?php
    $name= $_POST['name'];
    $email=$_POST['email'] ;
    $message*$_POST['message'] ;
    $email_from ='rqkqnnn@gmail.com';

    $email_subj='MY cv message';
    $email_body="User Name: $name.\n".
                   "User Email: $email.\n".
                        "User Message: $message.\n" ;
                
    $to ="sidalikharef@gmail.com";
     $headers ="From: $email_from  \r\n";
     $headers .="Reply-To: $email \r\n";
     mail($to,$email_subj,$email_body,$headers);
     header("location: index.html");


?>