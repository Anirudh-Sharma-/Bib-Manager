<?php
    require_once('PHPMailer-master/class.phpmailer.php'); //library added in download source.
    $msg  = 'Hello World';
    $subj = 'test mail message';
    $to   = '19.anirudh.sharma@gmail.com';
    $from = '19.anirudh.sharma@gmail.com';
    $name = 'My Name';
    echo "harsh";
    
    echo smtpmailer($to,$from, $name ,$subj, $msg);
 
    function smtpmailer($to, $from, $from_name = 'Example.com', $subject, $body, $is_gmail = true)
    {
        global $error;
        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->SMTPAuth = true; 
        if($is_gmail)
        {
            $mail->SMTPSecure = 'ssl'; 
            $mail->Host = 'smtp.gmail.com';
            $mail->Port = 465;  
            $mail->Username = '19.anirudh.sharma@gmail.com';  
            $mail->Password = 'Ani@Sharma19';   
        }
        else
        {
            $mail->Host = 'smtp.mail.google.com';
            $mail->Username = '19.anirudh.sharma@gmail.com';  
            $mail->Password = 'Ani@Sharma19';
        }
        $mail->IsHTML(true);
        $mail->From="19.anirudh.sharma@gmail.com";
        $mail->FromName="Example.com";
        $mail->Sender=$from; // indicates ReturnPath header
        $mail->AddReplyTo($from, $from_name); // indicates ReplyTo headers
        //$mail->AddCC('cc@site.com.com', 'CC: to site.com');
        $mail->Subject = $subject;
        $mail->Body = $body;
        $mail->AddAddress($to);
        if(!$mail->Send())
        {
            $error = 'Mail error: '.$mail->ErrorInfo;
            return true;
        }
        else
        {
            $error = 'Message sent!';
            return false;
        }
    }
?>
