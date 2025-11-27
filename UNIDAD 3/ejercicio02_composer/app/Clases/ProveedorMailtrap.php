<?php

namespace app\Clases;

use app\Interfaces\InterfazProveedorCorreo;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class ProveedorMailtrap implements InterfazProveedorCorreo
{
    public function enviarCorreo(string $paraQuien, string $asunto, string $cuerpoMensaje): bool
    {
        $mail = new PHPMailer(true);

        try {
            // Configuración del servidor SMTP (Mailtrap)
            $mail->isSMTP();
            $mail->Host       = 'sandbox.smtp.mailtrap.io'; // Host SMTP de Mailtrap
            $mail->SMTPAuth   = true;
            $mail->Username   = '6d5fe0c5e3bc17';       // Usuario SMTP Mailtrap
            $mail->Password   = '842639c7630a82';       // Contraseña SMTP Mailtrap
            $mail->Port       = 2525;                      // Puerto recomendado por Mailtrap
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;

            // Remitente y destinatario
            $mail->setFrom('no-reply@tusitio.com', 'Tu Aplicación');
            $mail->addAddress($paraQuien);

            // Contenido del correo
            $mail->isHTML(true);
            $mail->Subject = $asunto;
            $mail->Body    = $cuerpoMensaje;

            // Enviar
            return $mail->send();
        } catch (Exception $e) {
            error_log("Error enviando correo: {$mail->ErrorInfo}");
            return false;
        }
    }
}
