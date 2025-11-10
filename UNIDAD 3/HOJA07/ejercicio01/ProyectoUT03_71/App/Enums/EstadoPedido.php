
<?php
    namespace App\Enums;

    enum EstadoPedido {
        case pendiente;
        case enviado;
        case entregado;
        case cancelado;
    }

    public function descripcion() : string {
        
    }
?>