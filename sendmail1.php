<?php

$to = $_POST['txtEmail1'];
$subject = 'Contact Us Confirmation';
$name = $_POST['first_name'];
$telephone = $_POST['telephone'];
$from = 'Ronak Dental Clinic.<rushil@barodaweb.net>'; //Company mail Adress
$comments = $_POST['comments'];
$service = $_POST['service'];
 
// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 
// Create email headers
$headers .= 'From: '.$from."\r\n".
    'Reply-To: '.$from."\r\n" .
    'X-Mailer: PHP/' . phpversion();
 
 
// Compose a simple HTML email message For Client
$message = '
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title></title>
</head>
<body>
    <div bgcolor="#FFFFFF" marginwidth="0" marginheight="0">
        <table width="900" border="5" align="center" cellpadding="0" cellspacing="0" style="border-color: #0a0f4e; padding: 10px">
            <tr>
                <td>
                    <table width="900" style="padding: 5px">
                        <tbody>
                            <tr>
                                <td colspan="3">
                                  
                                    <img src="https://ronakdental.com/images/logo/em-logo.png" alt="" title="" style="max-width: 100%" />
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 100px" colspan="2">
                                    <h3>
                                      Dear <label style="font-size: 14px; font-weight: bold">'. $name .',</label>
                                    </h3>
                                </td>
                                <td style="width: 290px">
                                    <h5 style="font-size: 15px; float: right; text-align: right">Date:&nbsp;&nbsp;'.date("d/m/Y").'</h5>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="3">
                                    <hr style="border-color:#0a0f4e;" />
                                </td>
                            </tr>
                            <td colspan="3">
                                 We thank you for enquiring with Ronak Dental Clinic through our contact us form on our website.<br /><br />
                                        Please be rest assured that your enquiry will have our best attention and we shall get in touch with you shortly.<br /><br />
                                        If you do not receive a response from us within two working days we request you to write to us on <a href="mailto:rushil@barodaweb.net">rushil@barodaweb.net</a><br /><br />
                                        We look forward to building a strong business association with your organization.
                                        <br /><br />
                                        Best Regards,<br /><br /><br />
                                        Team  Ronak Dental Clinic
                                </td>
                             <tr>
                                <td colspan="3">
                                       <hr style="border-color: #0a0f4e;" />
                                    <h3> Ronak Dental Clinic.</h3>
                                   
                                     
                                </td>
                            </tr>
                            <tr>
                                <td colspan="3">
                                    <span style="font-size: 11px; color: #0a0f4e">
                                        <b>Please do not reply to this email address as this is an automated email.</b></span>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                </td>
            </tr>
        </table>

    </div>
</body>
</html>
';
 
 if (isset($_POST["email"]) && $_POST["email"] == "") 
 {
// Sending email
   if(mail($to, $subject, $message, $headers))
   {
    AdminSendMail();
    echo 'Your mail has been sent successfully.';
   } 
   else
   {
   header("Location: https://ronakdental.com/contact.html");
    echo 'Unable to send email. Please try again.';
   }
}
 else 
 {
header("Location: https://ronakdental.com/contact.html");
  echo 'Wrong Try';
}


function AdminSendMail() 
{  
// a function not part of an object

//ContactDetailAdmin
// $to1 = 'dhaval@barodaweb.net';
// $to1 = 'rushil@barodaweb.net, vikram@haverstandard.com, sudhir.sawant@riseit.in, imran.pasha@riseit.com'; // Email of Company
$to1 = 'rushil@barodaweb.net'; // Email of Company
$subject1 = 'Contact Us Details';
$name1 = $_POST['first_name'];
$telephone1 = $_POST['telephone'];
$from1 = $_POST['txtEmail1']; // Email of Client
$service1 = $_POST['service'];
$comments1 = $_POST['comments'];
 
// To send HTML mail, the Content-type header must be set
$headers1  = 'MIME-Version: 1.0' . "\r\n";
$headers1 .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 
// Create email headers
$headers1 .= 'From: '.$from1."\r\n".
    'Reply-To: '.$from1."\r\n" .
    'X-Mailer: PHP/' . phpversion();
 
// Compose a simple HTML email message For Admin
$message1 = '
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Haver Standard</title>
</head>
<body>
    <div bgcolor="#FFFFFF" marginwidth="0" marginheight="0">
        <table width="900" border="5" align="center" cellpadding="0" cellspacing="0" style="border-color:#021c4f; padding: 10px">
            <tr>
                <td>
                    <table width="900" style="padding: 5px">
                        <tbody>
                            <tr>
                                <td colspan="3">
                                    
                                    <img src="https://ronakdental.com/images/logo/em-logo.png" alt="" title="" style="max-width: 100%" />
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 100px" colspan="2">
                                    <h3>Contact Us Details of:
                                         <label style="font-size: 14px; font-weight: bold">'.$name1.'</label>
                                    </h3>
                                </td>
                                <td style="width: 290px">
                                    <h5 style="font-size: 15px; float: right; text-align: right">Date:&nbsp;'.date("d/m/Y").'</h5>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="3">
                                    <hr />
                                </td>

                            </tr>
                            <tr>
                                <td>
                                    <table width="780" style="padding-left: 10px">
                                        <tr>
                                            <td style="width: 460px">
                                                <span style="font-size: 14px; font-weight: bold;">Name</span>
                                            </td>
                                            <td style="width: 90px">
                                                <span style="font-size: 14px; font-weight: bold; margin-left: 10px;">:</span>
                                            </td>
                                            <td style="width: 3500px">
                                                <label style="font-size: 14px;">'.$name1.'</label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 460px">
                                                <span style="font-size: 14px; font-weight: bold">Email</span>
                                            </td>
                                            <td style="width: 90px">
                                                <span style="font-size: 14px; font-weight: bold; margin-left: 10px;">:</span>
                                            </td>
                                            <td style="width: 3500px">
                                                <label style="font-size: 14px;">'.$_POST['txtEmail1'].'</label>
                                            </td>
                                        </tr>
                                        
                                         <tr>
                                            <td style="width: 460px">
                                                <span style="font-size: 14px; font-weight: bold;">Phone No</span>
                                            </td>
                                            <td style="width: 90px">
                                                <span style="font-size: 14px; font-weight: bold; margin-left: 10px;">:</span>
                                            </td>
                                            <td style="width: 3500px">
                                                <label style="font-size: 14px;">'.$_POST['telephone'].'</label>
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <td style="width: 460px">
                                                <span style="font-size: 14px; font-weight: bold;">Service</span>
                                            </td>
                                            <td style="width: 90px">
                                                <span style="font-size: 14px; font-weight: bold; margin-left: 10px;">:</span>
                                            </td>
                                            <td style="width: 3500px">
                                                <label style="font-size: 14px;">'.$_POST['service'].'</label>
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <td style="width: 460px">
                                                <span style="font-size: 14px; font-weight: bold;">Message</span>
                                            </td>
                                            <td style="width: 90px">
                                                <span style="font-size: 14px; font-weight: bold; margin-left: 10px;">:</span>
                                            </td>
                                            <td style="width: 3500px">
                                                <label style="font-size: 14px;">'.$_POST['comments'].'</label>
                                            </td>
                                        </tr>   
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="3">
                                    <hr />
                                </td>
                            </tr>
                          
                            <tr>
                                <td colspan="3">
                                    <h3>Ronak Dental Clinic</h3>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="3">
                                    <span style="font-size: 11px; color: #545353">
                                        <b>Please do not reply to this email address as this is an automated email.</b></span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
        </table>
    </div>
</body>
</html>
';
// Sending email
   if(mail($to1, $subject1, $message1, $headers1))
   {
  $mmessage = "Your details are successfully sent.";
  echo "<script type='text/javascript'>
  window.top.location.href = 'https://ronakdental.com/thankYou.html';
  //window.location.href='https://ronakdental.com/thankYou.html';
  </script>";
    //echo 'Your mail has been sent successfully.';
  } 
  else
  {
  header("Location: https://ronakdental.com/contact.html");
  echo 'Unable to send email. Please try again.';
  }

}

?>