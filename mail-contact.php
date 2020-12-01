<?php

// inquiry emailed to site admin start
function mailOut($name, $contactNum, $email, $message){
    require_once('phpMailer/PHPMailerAutoload.php');
    $mail = new PHPMailer();
    $mail->isSMTP();
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'TLS';
    $mail->Host = 'smtp.mailtrap.io';
    $mail->Port = '587';
    $mail->isHTML();
    $mail->Username = 'bcb7f96fb10891';
    $mail->Password = 'cee73aefc22470';
    $mail->SetFrom($email);
    $mail->addReplyTo($email);
    $mail->Subject = 'Website Inquiry';
    $mail->AddEmbeddedImage('images/logo.png', 'logo');
    $mail->Body = '<img style="display: block;
                  margin-left: auto;
                  margin-right: auto;
                  " src="cid:logo" alt="Holly Made Cakes logo" 
                  width="150" height="150">'.'<h5>'.'Hello Holly'.'</h5>'.'<br>'.'<p>'.
                  'Please see below an inquiry from your website. If you are having issues seeing the message please contact Simon at simonmorgan1000@hotmail.com'.'</p>'.
                  '<hr>'.'<p>'.'Message From: '.$name.'</p>'.'<p>'.'Contact Number: '.$contactNum.'</p>'
                  .'<p>'.'Email: '.'<a href="mailto:'.$email.'">'.$email.'</a>'.'</p>'.'<p style="margin-bottom:0px;">'.'Message:'.'</p>'.'<p style=" padding:1rem; border:#EFEFEF 0.5px solid; margin-top:0;">'.$message.'</p>';
            
    $mail->AddAddress('simonmorgan1000@hotmail.com');
    $mail->send();
   
    comfirmationReply($name, $contactNum, $email, $message);
    // calling the reply function to the customer
}
// inquiry emailed to site admin end
// comfirmation emailed to customer start
function comfirmationReply($name,$contactNum,$email,$message){
    require_once('phpMailer/PHPMailerAutoload.php');

    $mail = new PHPMailer();
    $mail->isSMTP();
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'TLS';
    $mail->Host = 'smtp.mailtrap.io';
    $mail->Port = '587';
    $mail->isHTML();
    $mail->Username = 'bcb7f96fb10891';
    $mail->Password = 'cee73aefc22470';
    $mail->SetFrom('hollymadecakes@cakes.com');
    $mail->addReplyTo('hollymadecakes@cakes.com');
    $mail->Subject = 'Holly Made Cakes Inquiry';
    $mail->AddEmbeddedImage('images/logo.png', 'logo');
    $mail->Body = '<img style="display: block;
                  margin-left: auto;
                  margin-right: auto;
                  " src="cid:logo" alt="Holly Made Cakes logo" 
                  width="150" height="150">'.'<h5>'.'Hi '.$name.'</h5>'.'<p>'.
                  'Thank you for your inquiry, we have received your message and will be in contact shortly.'.'<br>'.' In the meantime please check out some of our cakes in the'.'<a href="www.projectsi.co.uk">'.' gallery'.'</a>'.', or come a visit us on' .
                  '<a href="https://www.facebook.com/HollymadeCakes">'.' FaceBook'.'</a>'.' or' .'<a href="https://www.instagram.com/hollymadecakes/?hl=en">'.' Instragram.'.'</a>'.'</p>'.'<br>'.'<p>'.'Regards, Holly Made Cakes.'.'</p>';
            
    $mail->AddAddress('simonmorgan1000@hotmail.com');
    $mail->send();   
}
// comfirmation emailed to customer end


// form submit and mailOut function called
if (isset($_POST['contactSubmited'])){
    $name = $_POST['name'];
    $contactNum = $_POST['contactNumber'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    mailOut($name, $contactNum, $email, $message);
}

?>