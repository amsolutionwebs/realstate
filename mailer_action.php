<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';


if (isset($_POST['submit'])) {
	$date = date("d-m-y");
	$enquiry_number = time();
	$name  = $_POST['name'];
	$mobile  = $_POST['mobile'];
	$email  = $_POST['email'];
	$requirment  = $_POST['requirment'];
	$message  = $_POST['message'];
	

	$html = '<!DOCTYPE html>
<html amp4email>

<head>
    <meta name="viewport" content="width=device-width" />
    <meta name="robots" content="noindex, nofollow">
    <meta charset="utf-8">
    
    <style>
    @media only screen and (min-width:480px) {
        .mj-column-per-100 {
            width: 100%;
            max-width: 100%
        }
        .mj-column-per-49 {
            width: 49%;
            max-width: 49%
        }
        .mj-column-per-70 {
            width: 70%;
            max-width: 70%
        }
        .mj-column-per-30 {
            width: 30%;
            max-width: 30%
        }
    }
    
    @media only screen and (max-width:480px) {
        table.mj-full-width-mobile {
            width: 100%
        }
        td.mj-full-width-mobile {
            width: auto
        }
    }
    
    div p {
        margin: 0 0
    }
    
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        margin: 0
    }
    
    h1 {
        font-size: 24px
    }
    
    h2 {
        font-size: 20px
    }
    
    h3 {
        font-size: 16px
    }
    
    h4 {
        font-size: 12px
    }
    
    p {
        font-size: 14px
    }
    
    .bl-typography-block-wrapper h1,
    .bl-typography-block-wrapper h2,
    .bl-typography-block-wrapper h3,
    .bl-typography-block-wrapper h4,
    .bl-typography-block-wrapper h5,
    .bl-typography-block-wrapper h6 {
        margin: 0;
        font-family: inherit
    }
    
    .bl-typography-block-wrapper h1 {
        font-size: 24px
    }
    
    .bl-typography-block-wrapper h2 {
        font-size: 20px
    }
    
    .bl-typography-block-wrapper h3 {
        font-size: 16px
    }
    
    .bl-typography-block-wrapper h4 {
        font-size: 12px
    }
    
    .bl-typography-block-wrapper p {
        font-size: 14px
    }
    
    .form-text h1,
    .form-text h2,
    .form-text h3,
    .form-text h4,
    .form-text p {
        color: revert;
        font-size: revert;
        font-family: inherit
    }
    
    .question h1,
    .question h2,
    .question h3,
    .question h4,
    .question p {
        color: revert;
        font-size: revert;
        font-family: inherit
    }
    
    @media (max-width:480px) {
        .bl-typography-block-wrapper h1 {
            font-size: 24px
        }
        .bl-typography-block-wrapper h2 {
            font-size: 20px
        }
        .bl-typography-block-wrapper h3 {
            font-size: 16px
        }
        .bl-typography-block-wrapper h4 {
            font-size: 12px
        }
        .bl-typography-block-wrapper p {
            font-size: 14px
        }
    }
    
    .amp-html-block p {
        font-size: inherit;
        color: revert
    }
    
    .amp-btn-wrapper p {
        font-size: inherit;
        color: revert
    }
    
    a {
        text-decoration: none
    }
    
    ol,
    ul {
        margin-top: 0;
        margin-bottom: 0;
        list-style-position: inside;
        padding-inline-start: 0;
        padding-left: 0
    }
    
    figure.table {
        margin: 0
    }
    
    figure.table table {
        width: 100%
    }
    
    figure.table table td,
    figure.table table th {
        min-width: 2em;
        padding: .4em;
        border: 1px solid #bfbfbf
    }
    
    .hide-on-desktop {
        display: none
    }
    
    @media screen and (max-width:480px) {
        .hide-on-desktop {
            display: revert
        }
        .hide-on-mobile {
            display: none
        }
        .mj-column-per-33 {
            padding: 4px 0 4px 0
        }
        .mj-sa-column-per-10 {
            width: 15%
        }
        .mj-sa-column-per-70 {
            width: 65%
        }
    }
    
    body {
        margin: 0;
        padding: 0
    }
    
    table,
    td {
        border-collapse: collapse
    }
    
    img {
        border: 0;
        height: auto;
        line-height: 100%;
        outline: 0
    }
    
    p {
        display: block;
        margin: 13px 0
    }
    </style>
</head>

<body style="word-spacing:normal;background-color:#f1f5f9"><span style="display:none">Explore interactive templates by Mailmodo</span>
    <div style="background-color:#f1f5f9">
        <div style="background:#fff;background-color:#fff;margin:0 auto;max-width:700px">
            <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="background:#fff;background-color:#fff;width:100%">
                <tbody>
                    <tr>
                        <td style="direction:ltr;font-size:0;padding:0;padding-bottom:0;padding-left:0;padding-right:0;padding-top:0;text-align:center">
                          
                            <div style="background:#f1f5f9;background-color:#f1f5f9;margin:0 auto;max-width:700px">
                                <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="background:#f1f5f9;background-color:#f1f5f9;width:100%">
                                    <tbody>
                                        <tr>
                                            <td style="border:0 solid transparent;direction:ltr;font-size:0;padding-bottom:16px;padding-left:32px;padding-right:32px;padding-top:16px;text-align:center">
                                                <div class="mj-column-per-100 mj-outlook-group-fix" style="font-size:0;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%">
                                                    <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="background-color:transparent;border:0 solid transparent;vertical-align:top" width="100%">
                                                        <tbody>
                                                            <tr>
                                                                <td align="left" style="font-size:0;padding:10px 25px;padding-top:0;padding-right:0;padding-bottom:12px;padding-left:0;word-break:break-word">
                                                                    <div style="font-family:Helvetica;font-size:28px;font-weight:400;letter-spacing:0;line-height:1.5;text-align:left;color:#000">
                                                                        <h1 style="text-align: center;"><span style="color:#3e4a5b;font-family:Helvetica;font-size:16px"><strong>You have new enquiry - </strong>'.$enquiry_number.'</span></h1></div>
                                                                </td>
                                                            </tr>
                                                           
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div style="background:#fff;background-color:#fff;margin:0 auto;max-width:700px">
                                <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="background:#fff;background-color:#fff;width:100%">
                                    <tbody>
                                        <tr>
                                            <td style="border:0 solid transparent;direction:ltr;font-size:0;padding-bottom:4px;padding-left:32px;padding-right:32px;padding-top:24px;text-align:center">
                                                
                                                <div class="mj-column-per-100 mj-outlook-group-fix" style="font-size:0;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%">
                                                    <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="background-color:transparent;border:0 solid transparent;vertical-align:top" width="100%">
                                                        <tbody>
                                                            <tr>
                                                                <td align="left" style="font-size:0;padding:10px 25px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;word-break:break-word">
                                                                    <div style="font-family:Helvetica;font-size:28px;font-weight:400;letter-spacing:0;line-height:1.5;text-align:left;color:#000">
                                                                        <h1><span style="color:#3e4a5b">Enquiry Details:</span></h1></div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
 <div style="background:#fff;background-color:#fff;margin:0 auto;max-width:700px">
    <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="background:#fff;background-color:#fff;width:100%">
        <tbody>
            <tr>
                <td style="border:0 solid transparent;direction:ltr;font-size:0;padding-bottom:0;padding-left:32px;padding-right:32px;padding-top:0;text-align:center">
                    <div class="mj-column-per-100 mj-outlook-group-fix" style="font-size:0;line-height:0;text-align:left;display:inline-block;width:100%;direction:ltr">
                        <div class="mj-column-per-49 mj-outlook-group-fix" style="font-size:0;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%">
                            <table border="0" cellpadding="0" cellspacing="0" role="presentation" width="100%">
                                <tbody>
                                    <tr>
                                        <td style="background-color:transparent;border:0 solid transparent;vertical-align:top;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
                                            <table border="0" cellpadding="0" cellspacing="0" role="presentation" width="100%">
                                                <tbody>
                                                    <tr>
                                                        <td style="font-size:0;padding:10px 25px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;word-break:break-word">
                                                            <div style="font-family:Helvetica;font-size:28px;font-weight:400;letter-spacing:0;line-height:1.5;text-align:left;color:#000">
                                                                <p><span style="font-size:18px">Enquiry number: '.$enquiry_number.'</span></p>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                     <tr>
                                                        <td style="font-size:0;padding:10px 25px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;word-break:break-word">
                                                            <div style="font-family:Helvetica;font-size:28px;font-weight:400;letter-spacing:0;line-height:1.5;text-align:left;color:#000">
                                                                <p><span style="font-size:18px">Enquiry Date: '.$date.'</span></p>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                       
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</div>
<div style="background:#fff;background-color:#fff;margin:0 auto;max-width:700px">
    <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="background:#fff;background-color:#fff;width:100%">
        <tbody>
            <tr>
                <td style="border:0 solid transparent;direction:ltr;font-size:0;padding-bottom:0;padding-left:32px;padding-right:32px;padding-top:0;text-align:center">
                    <div class="mj-column-per-100 mj-outlook-group-fix" style="font-size:0;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%">
                        <table border="0" cellpadding="0" cellspacing="0" role="presentation" width="100%">
                            <tbody>
                                <tr>
                                    <td style="background-color:transparent;border:0 solid transparent;vertical-align:top;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
                                        <table border="0" cellpadding="0" cellspacing="0" role="presentation" width="100%">
                                            <tbody>
                                                <tr>
                                                    <td align="center" style="font-size:0;padding:10px 25px;padding-top:10px;padding-right:0;padding-bottom:10px;padding-left:0;word-break:break-word">
                                                        <p style="border-top:solid 2px #d1dae1;font-size:1px;margin:0 auto;width:100%"></p>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</div>
<div style="background:#fff;background-color:#fff;margin:0 auto;max-width:700px">
    <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="background:#fff;background-color:#fff;width:100%">
        <tbody>
            <tr>
                <td style="border:0 solid transparent;direction:ltr;font-size:0;padding-bottom:8px;padding-left:32px;padding-right:32px;padding-top:0;text-align:center">
                    <div class="mj-column-per-100 mj-outlook-group-fix" style="font-size:0;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%">
                        <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="background-color:transparent;border:0 solid transparent;vertical-align:top" width="100%">
                            <tbody>
                                <tr>
                                    <td align="left" style="font-size:0;padding:10px 25px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;word-break:break-word">
                                        <div style="font-family:Helvetica;font-size:28px;font-weight:400;letter-spacing:0;line-height:1.5;text-align:left;color:#000">
                                            <h1><span style="color:#3e4a5b;font-size:22px">Customer Info:</span></h1></div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</div>                          
                            <div style="background:#fff;background-color:#fff;margin:0 auto;max-width:700px">
    <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="background:#fff;background-color:#fff;width:100%">
        <tbody>
            <tr>
                <td style="border:0 solid transparent;direction:ltr;font-size:0;padding-bottom:0;padding-left:25px;padding-right:25px;padding-top:0;text-align:center">
                    <div class="mj-column-per-100 mj-outlook-group-fix" style="font-size:0;line-height:0;text-align:left;display:inline-block;width:100%;direction:ltr">
                        <div class="mj-column-per-49 mj-outlook-group-fix" style="font-size:0;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%">
                            <table border="0" cellpadding="0" cellspacing="0" role="presentation" width="100%">
                                <tbody>
                                    <tr>
                                        <td style="background-color:transparent;border:0 solid transparent;vertical-align:top;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
                                            <table border="0" cellpadding="0" cellspacing="0" role="presentation" width="100%">
                                                <tbody>
                                                    <tr>
                                                        <td align="left" style="font-size:0;padding:10px 25px;padding-top:0;padding-right:0;padding-bottom:12px;padding-left:0;word-break:break-word">
                                                            <div style="font-family:Helvetica;font-size:28px;font-weight:400;letter-spacing:0;line-height:1.5;text-align:left;color:#000">
                                                                <p><span style="font-size:18px">Full Name</span></p>
                                                            </div>
                                                        </td>

                                                        <td align="left" style="font-size:0;padding:10px 25px;padding-top:0;padding-right:0;padding-bottom:12px;padding-left:0;word-break:break-word">
                                                            <div style="font-family:Helvetica;font-size:28px;font-weight:400;letter-spacing:0;line-height:1.5;text-align:left;color:#000">
                                                                <p><span style="font-size:16px">'.$name.'</span></p>
                                                            </div>
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td align="left" style="font-size:0;padding:10px 25px;padding-top:0;padding-right:0;padding-bottom:12px;padding-left:0;word-break:break-word">
                                                            <div style="font-family:Helvetica;font-size:28px;font-weight:400;letter-spacing:0;line-height:1.5;text-align:left;color:#000">
                                                                <p><span style="font-size:18px">Mobile</span></p>
                                                            </div>
                                                        </td>

                                                        <td align="left" style="font-size:0;padding:10px 25px;padding-top:0;padding-right:0;padding-bottom:12px;padding-left:0;word-break:break-word">
                                                            <div style="font-family:Helvetica;font-size:28px;font-weight:400;letter-spacing:0;line-height:1.5;text-align:left;color:#000">
                                                                <p><span style="font-size:16px">'.$mobile.'</span></p>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left" style="font-size:0;padding:10px 25px;padding-top:0;padding-right:0;padding-bottom:12px;padding-left:0;word-break:break-word">
                                                            <div style="font-family:Helvetica;font-size:28px;font-weight:400;letter-spacing:0;line-height:1.5;text-align:left;color:#000">
                                                                <p><span style="font-size:18px">Email Id </span></p>
                                                            </div>
                                                        </td>

                                                        <td align="left" style="font-size:0;padding:10px 25px;padding-top:0;padding-right:0;padding-bottom:12px;padding-left:0;word-break:break-word">
                                                            <div style="font-family:Helvetica;font-size:28px;font-weight:400;letter-spacing:0;line-height:1.5;text-align:left;color:#000">
                                                                <p><span style="font-size:16px">'.$email.'</span></p>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td align="left" style="font-size:0;padding:10px 25px;padding-top:0;padding-right:0;padding-bottom:12px;padding-left:0;word-break:break-word">
                                                            <div style="font-family:Helvetica;font-size:28px;font-weight:400;letter-spacing:0;line-height:1.5;text-align:left;color:#000">
                                                                <p><span style="font-size:18px">Requirment</span></p>
                                                            </div>
                                                        </td>
                                                        <td align="left" style="font-size:0;padding:10px 25px;padding-top:0;padding-right:0;padding-bottom:12px;padding-left:0;word-break:break-word">
                                                            <div style="font-family:Helvetica;font-size:28px;font-weight:400;letter-spacing:0;line-height:1.5;text-align:left;color:#000">
                                                                <p><span style="font-size:16px">'.$requirment.'</span></p>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    

                                                      

                                                     <tr>
                                                        <td align="left" style="font-size:0;padding:10px 25px;padding-top:0;padding-right:0;padding-bottom:12px;padding-left:0;word-break:break-word">
                                                            <div style="font-family:Helvetica;font-size:28px;font-weight:400;letter-spacing:0;line-height:1.5;text-align:left;color:#000">
                                                                <p><span style="font-size:18px">Message </span></p>
                                                            </div>
                                                        </td>

                                                        <td align="left" style="font-size:0;padding:10px 25px;padding-top:0;padding-right:0;padding-bottom:12px;padding-left:0;word-break:break-word">
                                                            <div style="font-family:Helvetica;font-size:28px;font-weight:400;letter-spacing:0;line-height:1.5;text-align:left;color:#000">
                                                                <p><span style="font-size:16px">'.$message.'</span></p>
                                                            </div>
                                                        </td>
                                                    </tr>


                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                       
                    
                    </div>
                    
                </td>
            </tr>
        </tbody>
    </table>
</div>
<div style="background:#fff;background-color:#fff;margin:0 auto;max-width:700px">
    <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="background:#fff;background-color:#fff;width:100%">
        <tbody>
            <tr>
                <td style="border:0 solid transparent;direction:ltr;font-size:0;padding-bottom:0;padding-left:32px;padding-right:32px;padding-top:0;text-align:center">
                    <div class="mj-column-per-100 mj-outlook-group-fix" style="font-size:0;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%">
                        <table border="0" cellpadding="0" cellspacing="0" role="presentation" width="100%">
                            <tbody>
                                <tr>
                                    <td style="background-color:transparent;border:0 solid transparent;vertical-align:top;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
                                        <table border="0" cellpadding="0" cellspacing="0" role="presentation" width="100%">
                                            <tbody>
                                                <tr>
                                                    <td align="center" style="font-size:0;padding:10px 25px;padding-top:10px;padding-right:0;padding-bottom:10px;padding-left:0;word-break:break-word">
                                                        <p style="border-top:solid 2px #d1dae1;font-size:1px;margin:0 auto;width:100%"></p>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</div>                            
<div style="background:#fff;background-color:#fff;margin:0 auto;max-width:700px">
    <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="background:#fff;background-color:#fff;width:100%">
        <tbody>
            <tr>
                <td style="border:0 solid transparent;direction:ltr;font-size:0;padding-bottom:16px;padding-left:32px;padding-right:32px;padding-top:0;text-align:center">
                    <div class="mj-column-per-100 mj-outlook-group-fix" style="font-size:0;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%">
                        <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="background-color:transparent;border:0 solid transparent;vertical-align:top" width="100%">
                            <tbody>
                                <tr>
                                    <td align="left" style="font-size:0;padding:10px 25px;padding-top:0;padding-right:0;padding-bottom:24px;padding-left:0;word-break:break-word">
                                        <div style="font-family:Helvetica;font-size:16px;font-weight:400;letter-spacing:0;line-height:1.5;text-align:left;color:#000">
                                            <p style="text-align: justify;">
                                                <br>
                                                <br><span style="font-size:18px">Thank you for choosing our service. Our Team will reach you soon.</span></p>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                   
                </td>
            </tr>
        </tbody>
    </table>
</div>
                          
                           
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
      
    </div>
</body>

</html>';



//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP(); 
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
                                    
    $mail->Username   = 'viewpropblr@gmail.com';                     //SMTP username
    $mail->Password   = 'snodficmbynaayqs';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('viewpropblr@gmail.com', 'New Enquiry');
    $mail->addAddress('viewpropblr@gmail.com', 'Joe User');     //Add a recipient
 

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'New Enquiry - Contact form - '.$enquiry_number;
    $mail->Body    = $html;
    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

}else{
	echo "wrong";
}
?>