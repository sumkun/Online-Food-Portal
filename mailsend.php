
<?php

require 'vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
  try {

    $order ='';
    $email='wrongData.com';
    if(!empty($_POST)) {
        $order = json_decode($_POST['data']);
        $email = $_POST['email'];
       // $table_no = $_POST['table_no'];
   
    }

  
      $mail = new PHPMailer(true);

      try {
          //Server settings
          $mail->SMTPDebug = 2;                      // Enable verbose debug output
          $mail->isSMTP();                                            // Send using SMTP
          $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
          $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
          $mail->Username   = 'siddhivarma098@gmail.com';                     // SMTP username
          $mail->Password   = 'Pass@123';                               // SMTP password
          $mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
          $mail->Port       = 587;                                    // TCP port to connect to
      
          //Recipients
          $mail->setFrom('siddhivarma098@gmail.com', 'Delish');
          $mail->addAddress("$email");     // Add a recipient
          $mail->AddCC('siddhivarma098@gmail.com', 'Delish');        
         
          // Content
          $mail->isHTML(true);                                  // Set email format to HTML
          $mail->Subject = ' Go 4 Delish Receipts';
          $mail->Body    = $order;
          $mail->send();
          echo 'mail sent';
    
      } catch (Exception $e) {
          echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
      }
    }
  catch(Exception $e) {
    echo 'Message: ' .$e->getMessage();
  }

  ?>


    
    
    
    





