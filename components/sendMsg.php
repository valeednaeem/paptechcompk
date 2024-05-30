<?php

    header('Access-Control-Allow-Origin: localhost');
    header('Access-Control-Allow-Methods: POST, GET, DELETE, PUT, PATCH, OPTIONS');
    header('Access-Control-Allow-Headers: token, Content-Type');
    header('Access-Control-Max-Age: 1728000');
    header('Content-Length: 0');
    header('Content-Type: text/plain');


    $to             = "info@paptech.com.pk";
    $subject        = "Client Query from $name - Paptech IT Solutions";
    $email          = $_REQUEST['email'];
    $name           = $_REQUEST['name'];
    $service        = $_REQUEST['service'];
    $msg            = $_REQUEST['msg'];

    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // More headers
    $headers .= 'From: $name<$email>' . "\r\n";
    $headers .= 'Cc: info@paptech.edu.pk, valeednaeem@gmail.com' . "\r\n";
    $headers .= 'ReplyTo: $email' . "\r\n";

    $message = "
<html>
<head>
<title>Paptech IT Solutions - $name</title>
</head>
<body>
<h2>Services Inquery - Paptech IT Solutions</h2>
<div>

<h3>Visitor Name</h3>
<p>$name</p>

<h3>Service Requested</h3>
<td>$service</td>

<h3>Short Message</h3>
<td>$msg</td>

</div>
</body>
</html>
";

    if(mail($to,$subject,$message,$headers))
    {
        return true;
    }
    else
    {
        return false;
    }

?>