<?php
header("Content-Type: application/json; charset=UTF-8");

ini_set('display_errors', 0);
ini_set('log_errors', 1);
ini_set('error_log', __DIR__ . '/php-error.log');


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require  "../mails/Exception.php";
require "../mails/PHPMailer.php";
require "../mails/SMTP.php";


$name    = $_POST["name"]    ?? '';
$company = $_POST["company"] ?? '';
$email   = $_POST["email"]   ?? '';
$phone   = $_POST["phone"]   ?? '';
$message = $_POST["message"] ?? '';

try {

    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host = "mail.bigofootwear.lk";
    $mail->SMTPAuth = true;
    $mail->Username = "info@bigofootwear.lk";
    $mail->Password = "Kc&A7E9y@RxqIrD";
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port = 465;
    $mail->setFrom('info@bigofootwear.lk', 'Bigo Footwear');
    $mail->addAddress('info@bigofootwear.lk', 'Bigo Footwear');
    $mail->addReplyTo($email, $name);

    $mail->isHTML(true);
    $mail->Subject = "New Wholesale Quote Request";
    $mail->Body = '<div style="margin:0; padding:0; background:#f4f5f7; font-family:Arial,Helvetica,sans-serif;">

    <!-- Preheader -->
    <div style="display:none; max-height:0; overflow:hidden; opacity:0; mso-hide:all;">
      New wholesale quotation request submitted from your website.
    </div>
 <style>
      @media (max-width:600px){
        .container{width:100% !important; margin:0 !important;}
        .p-24{padding:16px !important;}
        .h1{font-size:20px !important; line-height:26px !important;}
        .btn{display:block !important; width:100% !important;}
      }
      a{color:#e10600; text-decoration:none;}
      a:hover{text-decoration:underline;}
    </style>
    <center role="article" aria-roledescription="email" lang="en" style="width:100%; background:#f4f5f7;">
      <table role="presentation" cellspacing="0" cellpadding="0" border="0" align="center" width="100%">
        <tr>
          <td align="center" style="padding:24px;">
            <!-- Outer container -->
            <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="600" class="container" 
                   style="width:600px; max-width:100%; background:#ffffff; border-radius:10px; overflow:hidden; box-shadow:0 2px 6px rgba(0, 0, 0, 1);">

              <!-- Header with logo -->
              <tr>
                <td align="center" style="background:#111111; padding:0px;">
                  <img src="https://scontent.fcmb11-2.fna.fbcdn.net/v/t39.30808-1/501797313_122107121024886270_7646821031466413592_n.jpg?stp=c148.148.454.454a_dst-jpg_s200x200_tt6&_nc_cat=101&ccb=1-7&_nc_sid=2d3e12&_nc_eui2=AeH0QTs8WTomx4r0GkJEbGS8ZQhHKW8vn2VlCEcpby-fZXWs0iHBfzBfc5WPKo-ccITdPoQTBMNerQYQjTUM6njN&_nc_ohc=P9E4jFojZscQ7kNvwGnjJMI&_nc_oc=AdkZBqamso-fjC0LNIPwONC6cNeCEmcUJ-y8YaBKcWIyQBgoSu2X7QGBC4Z-NQQaxBJqeQ5W6Xklg68KznW16HbU&_nc_zt=24&_nc_ht=scontent.fcmb11-2.fna&_nc_gid=MBn3NOzF3NmJZIfoadVk3Q&oh=00_Afa2a1jFQdTfeHkK7KKPokbVifkNIq_pbI9kNJPBWLebCQ&oe=68E059F0" alt="Bigo Footwear" width="140" style="display:block; margin:0 auto;">
                </td>
              </tr>
              <tr>
                <td style="background:#e10600; padding:20px 24px; color:#ffffff; text-align:center;">
                  <h1 class="h1" style="margin:0; font-size:22px; line-height:28px; font-weight:700;">New Wholesale Quote Request</h1>
                </td>
              </tr>

              <!-- Intro -->
              <tr>
                <td class="p-24" style="padding:24px; color:#111827;">
                  <p style="margin:0 0 12px;">Hi Sales Team,</p>
                  <p style="margin:0 0 16px;">
                    You have received a new wholesale quotation request from the website form.
                    Review the details below and reply to the buyer.
                  </p>
                </td>
              </tr>

              <!-- Buyer details -->
              <tr>
                <td class="p-24" style="padding:0 24px 8px;">
                  <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" 
                         style="border:1px solid #e5e7eb; border-radius:8px; overflow:hidden;">
                    <tr>
                      <td colspan="2" style="background:#f9fafb; padding:12px 16px; font-weight:700; color:#111827;">Buyer Details</td>
                    </tr>
                       <tr>
                      <td style="width:40%; padding:10px 16px; border-top:1px solid #e5e7eb; color:#6b7280;">Contact Name</td>
                      <td style="padding:10px 16px; border-top:1px solid #e5e7eb; color:#111827;">' . nl2br(htmlspecialchars($name)) . '</td>
                    </tr>
                    <tr>
                      <td style="width:40%; padding:10px 16px; border-top:1px solid #e5e7eb; color:#6b7280;">Company</td>
                      <td style="padding:10px 16px; border-top:1px solid #e5e7eb; color:#111827;">' . nl2br(htmlspecialchars($company)) . '</td>
                    </tr>
                 
                    <tr>
                      <td style="width:40%; padding:10px 16px; border-top:1px solid #e5e7eb; color:#6b7280;">Email</td>
                      <td style="padding:10px 16px; border-top:1px solid #e5e7eb;">
                        <a href="mailto:{{email}}" style="color:#e10600;">' . nl2br(htmlspecialchars($email)) . '</a>
                      </td>
                    </tr>
                    <tr>
                      <td style="width:40%; padding:10px 16px; border-top:1px solid #e5e7eb; color:#6b7280;">Phone</td>
                      <td style="padding:10px 16px; border-top:1px solid #e5e7eb;">
                        <a href="tel:{{phone}}" style="color:#e10600;">' . nl2br(htmlspecialchars($phone)) . '</a>
                      </td>
                    </tr>
                    <tr>
                      <td style="width:40%; padding:10px 16px; border-top:1px solid #e5e7eb; color:#6b7280; vertical-align:top;">Order Details / Requirements</td>
                      <td style="padding:10px 16px; border-top:1px solid #e5e7eb; color:#111827; white-space:pre-line;">' . nl2br(htmlspecialchars($message)) . '</td>
                    </tr>
                  </table>
                </td>
              </tr>

              <!-- Action buttons -->
              <tr>
                <td class="p-24" style="padding:16px 24px 24px;">
                  <table role="presentation" cellspacing="0" cellpadding="0" border="0">
                    <tr>
                      <td>
                        <a href="mailto:' . nl2br(htmlspecialchars($email)) . '?subject=Wholesale%20Quotation&body=Hi%20' . nl2br(htmlspecialchars($name)) . ',%0D%0AThanks%20for%20your%20request."
                           style="display:inline-block; background:#e10600; color:#ffffff; padding:12px 18px; border-radius:6px; font-weight:700; font-family:Arial,Helvetica,sans-serif;">
                          Reply to Buyer
                        </a>
                      </td>
                      <td width="10"></td>
                      <td>
                        <a href="tel:' . nl2br(htmlspecialchars($phone)) . '"
                           style="display:inline-block; background:#111111; color:#ffffff; padding:12px 18px; border-radius:6px; font-weight:700; font-family:Arial,Helvetica,sans-serif;">
                          Call Buyer: ' . nl2br(htmlspecialchars($phone)) . '
                        </a>
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>

           <!-- Footer -->
<tr>
  <td style="padding:16px 24px; color:#6b7280; font-size:12px; text-align:center;">
    <strong>Bigo Footwear</strong>
  </td>
</tr>

</table>

<div style="font-size:11px; color:#9ca3af; padding-top:12px; text-align:center;">
  Internal use only. If you believe this was sent in error, please notify IT.<br>
  Developed by <a href="#" target="_blank" style="color:#07d988; text-decoration:none;">LaunchpadLK</a>
</div>

          </td>
        </tr>
      </table>
    </center>
</div>';
    $mail->send();

    $response = ["success" => true, "message" => "Message sent successfully."];
} catch (Exception $e) {
    $response = ["success" => false, "message" => "Mailer error: " . $e->getMessage()];
}

echo json_encode($response);
exit;
