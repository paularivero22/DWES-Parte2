
<?php
require_once '../vendor/autoload.php';

use app\Clases\ProveedorMailtrap;
use app\Clases\ServicioCorreo;

$nombre = $_POST['nombre'] ?? '';
$email = $_POST['email'] ?? '';
$mensaje = $_POST['mensaje'] ?? '';

if ($nombre != '' || $email != '' || $mensaje != '') {

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $proveedorMailtrap = new ProveedorMailtrap();
        $servicioCorreo = new ServicioCorreo($proveedorMailtrap);
        
        if ($servicioCorreo->enviarCorreo($nombre, $email, $mensaje)) {
            header('Location: index.php?success=1');
        } else {
            header('Location: index.php?error=3');
        }
        
    } else {
        header('Location: index.php?error=2');
    }
} else {
    header('Location: index.php?error=1');
    exit;
}
?>