<?php
namespace app\Clases;

use app\Interfaces\InterfazProveedorCorreo;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';

class ProveedorMailtrap implements InterfazProveedorCorreo
{
    public function enviarCorreo(string $paraQuien, string $asunto, string $cuerpoMensaje): bool
    {
        $mail = new PHPMailer(true);

        try {
            $mail->isSMTP();
            $mail->Host = 'sandbox.smtp.mailtrap.io';
            $mail->SMTPAuth = true;
            $mail->Username = '6d5fe0c5e3bc17';
            $mail->Password = '842639c7630a82';

            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 25;

            $mail->setFrom('priveroh01@educantabira.es', 'Formulario Web');
            $mail->addAddress($paraQuien);

            $mail->isHTML(true);
            $mail->Subject = $asunto;
            $mail->Body = $cuerpoMensaje;

            return $mail->send();

        } catch (Exception $e) {
            echo "Error al enviar el mensaje: {$mail->ErrorInfo}";
            return false;
        }
    }
}
