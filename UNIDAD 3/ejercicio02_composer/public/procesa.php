
<?php
require_once '../vendor/autoload.php';

use app\Clases\ProveedorMailtrap;
use app\Clases\ServicioCorreo;

$email = $_POST['email'] ?? '';
$asunto = $_POST['asunto'] ?? '';
$mensaje = $_POST['mensaje'] ?? '';

if ($asunto != '' && $email != '' && $mensaje != '') {
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $proveedorMailtrap = new ProveedorMailtrap();
        $servicioCorreo = new ServicioCorreo($proveedorMailtrap);
        
        if ($servicioCorreo->enviarCorreo($email, $asunto, $mensaje)) {
            header('Location: index.php?success=1');
        } else {
            header('Location: index.php?error=3');
        }
        
    } else {
        header('Location: index.php?error=2');
        exit;
    }
} else {
    header('Location: index.php?error=1');
    exit;
}
?>