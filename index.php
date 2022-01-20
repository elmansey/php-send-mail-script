<?php 


require_once 'mail.php';




if($_POST['name'] && $_POST['email'] && $_POST['address']){
    // put your email resever show when reseve massege
    $mail->setFrom('هنا الاميل العايز يظهر انه هوا الراسل ', 'name sender');

    $mail->addAddress('هتحط هنا الاميل العايز تبعتله');     //Add a recipient

    $mail->Subject = 'هنا هيكون العنوان';

    $mail->Body    = 
    "name  = " .  $_POST['name'] . "<br />"
    . "email  = " . $_POST['email'] .  "<br />"
    . "address  = " .   $_POST['address'];

    if($mail->send()){
        header('LOCATION:mail.html');
    }
}





